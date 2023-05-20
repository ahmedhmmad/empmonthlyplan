<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSchoolAPIRequest;
use App\Http\Requests\API\UpdateSchoolAPIRequest;
use App\Models\School;
use App\Repositories\SchoolRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class SchoolAPIController
 */
class SchoolAPIController extends AppBaseController
{
    private SchoolRepository $schoolRepository;

    public function __construct(SchoolRepository $schoolRepo)
    {
        $this->schoolRepository = $schoolRepo;
    }

    /**
     * Display a listing of the Schools.
     * GET|HEAD /schools
     */
    public function index(Request $request): JsonResponse
    {
        $schools = $this->schoolRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($schools->toArray(), 'Schools retrieved successfully');
    }

    /**
     * Store a newly created School in storage.
     * POST /schools
     */
    public function store(CreateSchoolAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $school = $this->schoolRepository->create($input);

        return $this->sendResponse($school->toArray(), 'School saved successfully');
    }

    /**
     * Display the specified School.
     * GET|HEAD /schools/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var School $school */
        $school = $this->schoolRepository->find($id);

        if (empty($school)) {
            return $this->sendError('School not found');
        }

        return $this->sendResponse($school->toArray(), 'School retrieved successfully');
    }

    /**
     * Update the specified School in storage.
     * PUT/PATCH /schools/{id}
     */
    public function update($id, UpdateSchoolAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var School $school */
        $school = $this->schoolRepository->find($id);

        if (empty($school)) {
            return $this->sendError('School not found');
        }

        $school = $this->schoolRepository->update($input, $id);

        return $this->sendResponse($school->toArray(), 'School updated successfully');
    }

    /**
     * Remove the specified School from storage.
     * DELETE /schools/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var School $school */
        $school = $this->schoolRepository->find($id);

        if (empty($school)) {
            return $this->sendError('School not found');
        }

        $school->delete();

        return $this->sendSuccess('School deleted successfully');
    }
}
