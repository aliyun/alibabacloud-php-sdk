<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\AddProjectMembersRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\AddProjectMembersResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ApplySmallMicroRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ApplySmallMicroResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\BactchInsertMembersRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\BactchInsertMembersResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CheckAliyunUserExistsRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CheckAliyunUserExistsResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateDevopsOrgRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateDevopsOrgResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateProjectSprintRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateProjectSprintResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateProjectTaskRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\CreateProjectTaskResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteMembersForOrgRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteMembersForOrgResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectMembersRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectMembersResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectSprintRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectSprintResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectTaskRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\DeleteProjectTaskResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetOrganizationMembersRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetOrganizationMembersResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectInfoRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectInfoResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectMembersRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectMembersResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectSprintInfoRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectSprintInfoResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectTaskInfoRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetProjectTaskInfoResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetUserByUidRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\GetUserByUidResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\InsertDevopsMemberRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\InsertDevopsMemberResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectSprintsRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectSprintsResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTaskFlowRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTaskFlowResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTaskFlowStatusRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTaskFlowStatusResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTasksRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListProjectTasksResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListScenarioFieldConfigRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\ListScenarioFieldConfigResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\UpdateProjectSprintRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\UpdateProjectSprintResponse;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\UpdateProjectTaskRequest;
use AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models\UpdateProjectTaskResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Teambitionaliyun extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('teambition-aliyun', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddProjectMembersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddProjectMembersResponse
     */
    public function addProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddProjectMembersResponse::fromMap($this->doRPCRequest('AddProjectMembers', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddProjectMembersRequest $request
     *
     * @return AddProjectMembersResponse
     */
    public function addProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param ApplySmallMicroRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ApplySmallMicroResponse
     */
    public function applySmallMicroWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplySmallMicroResponse::fromMap($this->doRPCRequest('ApplySmallMicro', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApplySmallMicroRequest $request
     *
     * @return ApplySmallMicroResponse
     */
    public function applySmallMicro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applySmallMicroWithOptions($request, $runtime);
    }

    /**
     * @param BactchInsertMembersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BactchInsertMembersResponse
     */
    public function bactchInsertMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BactchInsertMembersResponse::fromMap($this->doRPCRequest('BactchInsertMembers', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BactchInsertMembersRequest $request
     *
     * @return BactchInsertMembersResponse
     */
    public function bactchInsertMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bactchInsertMembersWithOptions($request, $runtime);
    }

    /**
     * @param CheckAliyunUserExistsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckAliyunUserExistsResponse
     */
    public function checkAliyunUserExistsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckAliyunUserExistsResponse::fromMap($this->doRPCRequest('CheckAliyunUserExists', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckAliyunUserExistsRequest $request
     *
     * @return CheckAliyunUserExistsResponse
     */
    public function checkAliyunUserExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAliyunUserExistsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevopsOrgRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDevopsOrgResponse
     */
    public function createDevopsOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevopsOrgResponse::fromMap($this->doRPCRequest('CreateDevopsOrg', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevopsOrgRequest $request
     *
     * @return CreateDevopsOrgResponse
     */
    public function createDevopsOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevopsOrgWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectSprintRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateProjectSprintResponse
     */
    public function createProjectSprintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectSprintResponse::fromMap($this->doRPCRequest('CreateProjectSprint', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectSprintRequest $request
     *
     * @return CreateProjectSprintResponse
     */
    public function createProjectSprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectSprintWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateProjectTaskResponse
     */
    public function createProjectTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectTaskResponse::fromMap($this->doRPCRequest('CreateProjectTask', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectTaskRequest $request
     *
     * @return CreateProjectTaskResponse
     */
    public function createProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMembersForOrgRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteMembersForOrgResponse
     */
    public function deleteMembersForOrgWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMembersForOrgResponse::fromMap($this->doRPCRequest('DeleteMembersForOrg', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMembersForOrgRequest $request
     *
     * @return DeleteMembersForOrgResponse
     */
    public function deleteMembersForOrg($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMembersForOrgWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectResponse::fromMap($this->doRPCRequest('DeleteProject', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectMembersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProjectMembersResponse
     */
    public function deleteProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectMembersResponse::fromMap($this->doRPCRequest('DeleteProjectMembers', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectMembersRequest $request
     *
     * @return DeleteProjectMembersResponse
     */
    public function deleteProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectSprintRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteProjectSprintResponse
     */
    public function deleteProjectSprintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectSprintResponse::fromMap($this->doRPCRequest('DeleteProjectSprint', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectSprintRequest $request
     *
     * @return DeleteProjectSprintResponse
     */
    public function deleteProjectSprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectSprintWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteProjectTaskResponse
     */
    public function deleteProjectTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProjectTaskResponse::fromMap($this->doRPCRequest('DeleteProjectTask', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProjectTaskRequest $request
     *
     * @return DeleteProjectTaskResponse
     */
    public function deleteProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetOrganizationMembersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOrganizationMembersResponse
     */
    public function getOrganizationMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOrganizationMembersResponse::fromMap($this->doRPCRequest('GetOrganizationMembers', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOrganizationMembersRequest $request
     *
     * @return GetOrganizationMembersResponse
     */
    public function getOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrganizationMembersWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectInfoResponse::fromMap($this->doRPCRequest('GetProjectInfo', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectInfoRequest $request
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectMembersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProjectMembersResponse
     */
    public function getProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectMembersResponse::fromMap($this->doRPCRequest('GetProjectMembers', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectMembersRequest $request
     *
     * @return GetProjectMembersResponse
     */
    public function getProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectSprintInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetProjectSprintInfoResponse
     */
    public function getProjectSprintInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectSprintInfoResponse::fromMap($this->doRPCRequest('GetProjectSprintInfo', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectSprintInfoRequest $request
     *
     * @return GetProjectSprintInfoResponse
     */
    public function getProjectSprintInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectSprintInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectTaskInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetProjectTaskInfoResponse
     */
    public function getProjectTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectTaskInfoResponse::fromMap($this->doRPCRequest('GetProjectTaskInfo', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectTaskInfoRequest $request
     *
     * @return GetProjectTaskInfoResponse
     */
    public function getProjectTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserByUidRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetUserByUidResponse
     */
    public function getUserByUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserByUidResponse::fromMap($this->doRPCRequest('GetUserByUid', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserByUidRequest $request
     *
     * @return GetUserByUidResponse
     */
    public function getUserByUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserByUidWithOptions($request, $runtime);
    }

    /**
     * @param InsertDevopsMemberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InsertDevopsMemberResponse
     */
    public function insertDevopsMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertDevopsMemberResponse::fromMap($this->doRPCRequest('InsertDevopsMember', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InsertDevopsMemberRequest $request
     *
     * @return InsertDevopsMemberResponse
     */
    public function insertDevopsMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertDevopsMemberWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectSprintsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectSprintsResponse
     */
    public function listProjectSprintsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectSprintsResponse::fromMap($this->doRPCRequest('ListProjectSprints', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectSprintsRequest $request
     *
     * @return ListProjectSprintsResponse
     */
    public function listProjectSprints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectSprintsWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectTaskFlowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListProjectTaskFlowResponse
     */
    public function listProjectTaskFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectTaskFlowResponse::fromMap($this->doRPCRequest('ListProjectTaskFlow', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectTaskFlowRequest $request
     *
     * @return ListProjectTaskFlowResponse
     */
    public function listProjectTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectTaskFlowStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListProjectTaskFlowStatusResponse
     */
    public function listProjectTaskFlowStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectTaskFlowStatusResponse::fromMap($this->doRPCRequest('ListProjectTaskFlowStatus', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectTaskFlowStatusRequest $request
     *
     * @return ListProjectTaskFlowStatusResponse
     */
    public function listProjectTaskFlowStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectTaskFlowStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectTasksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListProjectTasksResponse
     */
    public function listProjectTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectTasksResponse::fromMap($this->doRPCRequest('ListProjectTasks', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectTasksRequest $request
     *
     * @return ListProjectTasksResponse
     */
    public function listProjectTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListScenarioFieldConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListScenarioFieldConfigResponse
     */
    public function listScenarioFieldConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScenarioFieldConfigResponse::fromMap($this->doRPCRequest('ListScenarioFieldConfig', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListScenarioFieldConfigRequest $request
     *
     * @return ListScenarioFieldConfigResponse
     */
    public function listScenarioFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenarioFieldConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectResponse::fromMap($this->doRPCRequest('UpdateProject', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectSprintRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProjectSprintResponse
     */
    public function updateProjectSprintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectSprintResponse::fromMap($this->doRPCRequest('UpdateProjectSprint', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectSprintRequest $request
     *
     * @return UpdateProjectSprintResponse
     */
    public function updateProjectSprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectSprintWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateProjectTaskResponse
     */
    public function updateProjectTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectTaskResponse::fromMap($this->doRPCRequest('UpdateProjectTask', '2020-02-26', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectTaskRequest $request
     *
     * @return UpdateProjectTaskResponse
     */
    public function updateProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectTaskWithOptions($request, $runtime);
    }
}
