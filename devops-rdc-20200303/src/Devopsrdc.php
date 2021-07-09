<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\AddCodeupSourceToPipelineRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\AddCodeupSourceToPipelineResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\BatchInsertMembersRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\BatchInsertMembersResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CancelPipelineRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CancelPipelineResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CheckAliyunAccountExistsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CheckAliyunAccountExistsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateCommonGroupRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateCommonGroupResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateCredentialRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateCredentialResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsOrganizationRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsOrganizationResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectSprintRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectSprintResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectTaskRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectTaskResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreatePipelineFromTemplateRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreatePipelineFromTemplateResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateServiceConnectionRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateServiceConnectionResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteCommonGroupRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteCommonGroupResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsOrganizationMembersRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsOrganizationMembersResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsOrganizationRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsOrganizationResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectMembersRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectMembersResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectSprintRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectSprintResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectTaskRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeleteDevopsProjectTaskResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeletePipelineMemberRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\DeletePipelineMemberResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ExecutePipelineRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ExecutePipelineResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsOrganizationMembersRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsOrganizationMembersResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectInfoRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectInfoResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectMembersRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectMembersResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectSprintInfoRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectSprintInfoResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectTaskInfoRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectTaskInfoResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetLastWorkspaceRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetLastWorkspaceResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceBuildNumberStatusRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceBuildNumberStatusResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceGroupStatusRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceGroupStatusResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceInfoRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceInfoResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceStatusRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceStatusResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineLogRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineLogResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineStepLogRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineStepLogResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipleineLatestInstanceStatusRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipleineLatestInstanceStatusResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetProjectOptionRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetProjectOptionResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailActivityRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailActivityResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetUserByAliyunUidRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetUserByAliyunUidResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetUserNameRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetUserNameResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\InsertDevopsUserRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\InsertDevopsUserResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\InsertPipelineMemberRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\InsertPipelineMemberResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\InsertProjectMembersRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\InsertProjectMembersResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListCommonGroupRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListCommonGroupResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListCredentialsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListCredentialsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectSprintsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectSprintsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskFlowRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskFlowResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskFlowStatusRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskFlowStatusResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskListRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTaskListResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTasksRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsProjectTasksResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsScenarioFieldConfigRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListDevopsScenarioFieldConfigResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListPipelineTemplatesRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListPipelineTemplatesResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListProjectCustomFieldsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListProjectCustomFieldsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListServiceConnectionsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListServiceConnectionsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListSmartGroupRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListSmartGroupResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListUserOrganizationRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\ListUserOrganizationResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\TransferPipelineOwnerRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\TransferPipelineOwnerResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateCommonGroupRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateCommonGroupResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateDevopsProjectRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateDevopsProjectResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateDevopsProjectSprintRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateDevopsProjectSprintResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateDevopsProjectTaskRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateDevopsProjectTaskResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdatePipelineEnvVarsRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdatePipelineEnvVarsResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdatePipelineMemberRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdatePipelineMemberResponse;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateTaskDetailRequest;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\UpdateTaskDetailResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Devopsrdc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('devops-rdc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param InsertPipelineMemberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return InsertPipelineMemberResponse
     */
    public function insertPipelineMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertPipelineMemberResponse::fromMap($this->doRPCRequest('InsertPipelineMember', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InsertPipelineMemberRequest $request
     *
     * @return InsertPipelineMemberResponse
     */
    public function insertPipelineMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertPipelineMemberWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsProjectTaskFlowRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDevopsProjectTaskFlowResponse
     */
    public function listDevopsProjectTaskFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsProjectTaskFlowResponse::fromMap($this->doRPCRequest('ListDevopsProjectTaskFlow', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsProjectTaskFlowRequest $request
     *
     * @return ListDevopsProjectTaskFlowResponse
     */
    public function listDevopsProjectTaskFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsProjectTaskFlowWithOptions($request, $runtime);
    }

    /**
     * @param GetDevopsProjectMembersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDevopsProjectMembersResponse
     */
    public function getDevopsProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevopsProjectMembersResponse::fromMap($this->doRPCRequest('GetDevopsProjectMembers', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevopsProjectMembersRequest $request
     *
     * @return GetDevopsProjectMembersResponse
     */
    public function getDevopsProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevopsProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param AddCodeupSourceToPipelineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddCodeupSourceToPipelineResponse
     */
    public function addCodeupSourceToPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddCodeupSourceToPipelineResponse::fromMap($this->doRPCRequest('AddCodeupSourceToPipeline', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddCodeupSourceToPipelineRequest $request
     *
     * @return AddCodeupSourceToPipelineResponse
     */
    public function addCodeupSourceToPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCodeupSourceToPipelineWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevopsProjectSprintRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteDevopsProjectSprintResponse
     */
    public function deleteDevopsProjectSprintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevopsProjectSprintResponse::fromMap($this->doRPCRequest('DeleteDevopsProjectSprint', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDevopsProjectSprintRequest $request
     *
     * @return DeleteDevopsProjectSprintResponse
     */
    public function deleteDevopsProjectSprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevopsProjectSprintWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommonGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCommonGroupResponse
     */
    public function deleteCommonGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCommonGroupResponse::fromMap($this->doRPCRequest('DeleteCommonGroup', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCommonGroupRequest $request
     *
     * @return DeleteCommonGroupResponse
     */
    public function deleteCommonGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommonGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectCustomFieldsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListProjectCustomFieldsResponse
     */
    public function listProjectCustomFieldsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListProjectCustomFieldsResponse::fromMap($this->doRPCRequest('ListProjectCustomFields', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListProjectCustomFieldsRequest $request
     *
     * @return ListProjectCustomFieldsResponse
     */
    public function listProjectCustomFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectCustomFieldsWithOptions($request, $runtime);
    }

    /**
     * @param InsertDevopsUserRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InsertDevopsUserResponse
     */
    public function insertDevopsUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertDevopsUserResponse::fromMap($this->doRPCRequest('InsertDevopsUser', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InsertDevopsUserRequest $request
     *
     * @return InsertDevopsUserResponse
     */
    public function insertDevopsUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertDevopsUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDevopsProjectRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDevopsProjectResponse
     */
    public function updateDevopsProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDevopsProjectResponse::fromMap($this->doRPCRequest('UpdateDevopsProject', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDevopsProjectRequest $request
     *
     * @return UpdateDevopsProjectResponse
     */
    public function updateDevopsProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevopsProjectWithOptions($request, $runtime);
    }

    /**
     * @param CheckAliyunAccountExistsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckAliyunAccountExistsResponse
     */
    public function checkAliyunAccountExistsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckAliyunAccountExistsResponse::fromMap($this->doRPCRequest('CheckAliyunAccountExists', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckAliyunAccountExistsRequest $request
     *
     * @return CheckAliyunAccountExistsResponse
     */
    public function checkAliyunAccountExists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAliyunAccountExistsWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineInstanceInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPipelineInstanceInfoResponse
     */
    public function getPipelineInstanceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineInstanceInfoResponse::fromMap($this->doRPCRequest('GetPipelineInstanceInfo', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineInstanceInfoRequest $request
     *
     * @return GetPipelineInstanceInfoResponse
     */
    public function getPipelineInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * @param BatchInsertMembersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchInsertMembersResponse
     */
    public function batchInsertMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchInsertMembersResponse::fromMap($this->doRPCRequest('BatchInsertMembers', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchInsertMembersRequest $request
     *
     * @return BatchInsertMembersResponse
     */
    public function batchInsertMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchInsertMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceConnectionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceConnectionsResponse::fromMap($this->doRPCRequest('ListServiceConnections', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServiceConnectionsRequest $request
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param GetUserNameRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserNameResponse
     */
    public function getUserNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserNameResponse::fromMap($this->doRPCRequest('GetUserName', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserNameRequest $request
     *
     * @return GetUserNameResponse
     */
    public function getUserName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserNameWithOptions($request, $runtime);
    }

    /**
     * @param InsertProjectMembersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return InsertProjectMembersResponse
     */
    public function insertProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertProjectMembersResponse::fromMap($this->doRPCRequest('InsertProjectMembers', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InsertProjectMembersRequest $request
     *
     * @return InsertProjectMembersResponse
     */
    public function insertProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsProjectTaskListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDevopsProjectTaskListResponse
     */
    public function listDevopsProjectTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsProjectTaskListResponse::fromMap($this->doRPCRequest('ListDevopsProjectTaskList', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsProjectTaskListRequest $request
     *
     * @return ListDevopsProjectTaskListResponse
     */
    public function listDevopsProjectTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsProjectTaskListWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskDetailBaseRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTaskDetailBaseResponse
     */
    public function getTaskDetailBaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskDetailBaseResponse::fromMap($this->doRPCRequest('GetTaskDetailBase', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskDetailBaseRequest $request
     *
     * @return GetTaskDetailBaseResponse
     */
    public function getTaskDetailBase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskDetailBaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevopsProjectMembersRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDevopsProjectMembersResponse
     */
    public function deleteDevopsProjectMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevopsProjectMembersResponse::fromMap($this->doRPCRequest('DeleteDevopsProjectMembers', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDevopsProjectMembersRequest $request
     *
     * @return DeleteDevopsProjectMembersResponse
     */
    public function deleteDevopsProjectMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevopsProjectMembersWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevopsProjectSprintRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateDevopsProjectSprintResponse
     */
    public function createDevopsProjectSprintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevopsProjectSprintResponse::fromMap($this->doRPCRequest('CreateDevopsProjectSprint', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevopsProjectSprintRequest $request
     *
     * @return CreateDevopsProjectSprintResponse
     */
    public function createDevopsProjectSprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevopsProjectSprintWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDevopsProjectSprintRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateDevopsProjectSprintResponse
     */
    public function updateDevopsProjectSprintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDevopsProjectSprintResponse::fromMap($this->doRPCRequest('UpdateDevopsProjectSprint', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDevopsProjectSprintRequest $request
     *
     * @return UpdateDevopsProjectSprintResponse
     */
    public function updateDevopsProjectSprint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevopsProjectSprintWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevopsOrganizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDevopsOrganizationResponse
     */
    public function deleteDevopsOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevopsOrganizationResponse::fromMap($this->doRPCRequest('DeleteDevopsOrganization', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDevopsOrganizationRequest $request
     *
     * @return DeleteDevopsOrganizationResponse
     */
    public function deleteDevopsOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevopsOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param CancelPipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CancelPipelineResponse
     */
    public function cancelPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelPipelineResponse::fromMap($this->doRPCRequest('CancelPipeline', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelPipelineRequest $request
     *
     * @return CancelPipelineResponse
     */
    public function cancelPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPipelineWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsProjectTaskFlowStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDevopsProjectTaskFlowStatusResponse
     */
    public function listDevopsProjectTaskFlowStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsProjectTaskFlowStatusResponse::fromMap($this->doRPCRequest('ListDevopsProjectTaskFlowStatus', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsProjectTaskFlowStatusRequest $request
     *
     * @return ListDevopsProjectTaskFlowStatusResponse
     */
    public function listDevopsProjectTaskFlowStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsProjectTaskFlowStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListUserOrganizationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListUserOrganizationResponse
     */
    public function listUserOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserOrganizationResponse::fromMap($this->doRPCRequest('ListUserOrganization', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserOrganizationRequest $request
     *
     * @return ListUserOrganizationResponse
     */
    public function listUserOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePipelineEnvVarsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePipelineEnvVarsResponse
     */
    public function updatePipelineEnvVarsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePipelineEnvVarsResponse::fromMap($this->doRPCRequest('UpdatePipelineEnvVars', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdatePipelineEnvVarsRequest $request
     *
     * @return UpdatePipelineEnvVarsResponse
     */
    public function updatePipelineEnvVars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineEnvVarsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevopsProjectRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDevopsProjectResponse
     */
    public function deleteDevopsProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevopsProjectResponse::fromMap($this->doRPCRequest('DeleteDevopsProject', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDevopsProjectRequest $request
     *
     * @return DeleteDevopsProjectResponse
     */
    public function deleteDevopsProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevopsProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineInstanceStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetPipelineInstanceStatusResponse
     */
    public function getPipelineInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineInstanceStatusResponse::fromMap($this->doRPCRequest('GetPipelineInstanceStatus', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineInstanceStatusRequest $request
     *
     * @return GetPipelineInstanceStatusResponse
     */
    public function getPipelineInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetPipelineLogResponse
     */
    public function getPipelineLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineLogResponse::fromMap($this->doRPCRequest('GetPipelineLog', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineLogRequest $request
     *
     * @return GetPipelineLogResponse
     */
    public function getPipelineLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineLogWithOptions($request, $runtime);
    }

    /**
     * @param GetUserByAliyunUidRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserByAliyunUidResponse
     */
    public function getUserByAliyunUidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserByAliyunUidResponse::fromMap($this->doRPCRequest('GetUserByAliyunUid', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUserByAliyunUidRequest $request
     *
     * @return GetUserByAliyunUidResponse
     */
    public function getUserByAliyunUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserByAliyunUidWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePipelineMemberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePipelineMemberResponse
     */
    public function updatePipelineMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdatePipelineMemberResponse::fromMap($this->doRPCRequest('UpdatePipelineMember', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdatePipelineMemberRequest $request
     *
     * @return UpdatePipelineMemberResponse
     */
    public function updatePipelineMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineMemberWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsProjectsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDevopsProjectsResponse
     */
    public function listDevopsProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsProjectsResponse::fromMap($this->doRPCRequest('ListDevopsProjects', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsProjectsRequest $request
     *
     * @return ListDevopsProjectsResponse
     */
    public function listDevopsProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsProjectsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevopsProjectTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateDevopsProjectTaskResponse
     */
    public function createDevopsProjectTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevopsProjectTaskResponse::fromMap($this->doRPCRequest('CreateDevopsProjectTask', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevopsProjectTaskRequest $request
     *
     * @return CreateDevopsProjectTaskResponse
     */
    public function createDevopsProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevopsProjectTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineInstanceBuildNumberStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetPipelineInstanceBuildNumberStatusResponse
     */
    public function getPipelineInstanceBuildNumberStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineInstanceBuildNumberStatusResponse::fromMap($this->doRPCRequest('GetPipelineInstanceBuildNumberStatus', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineInstanceBuildNumberStatusRequest $request
     *
     * @return GetPipelineInstanceBuildNumberStatusResponse
     */
    public function getPipelineInstanceBuildNumberStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineInstanceBuildNumberStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsProjectSprintsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDevopsProjectSprintsResponse
     */
    public function listDevopsProjectSprintsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsProjectSprintsResponse::fromMap($this->doRPCRequest('ListDevopsProjectSprints', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsProjectSprintsRequest $request
     *
     * @return ListDevopsProjectSprintsResponse
     */
    public function listDevopsProjectSprints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsProjectSprintsWithOptions($request, $runtime);
    }

    /**
     * @param GetDevopsProjectInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDevopsProjectInfoResponse
     */
    public function getDevopsProjectInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevopsProjectInfoResponse::fromMap($this->doRPCRequest('GetDevopsProjectInfo', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevopsProjectInfoRequest $request
     *
     * @return GetDevopsProjectInfoResponse
     */
    public function getDevopsProjectInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevopsProjectInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeletePipelineMemberRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeletePipelineMemberResponse
     */
    public function deletePipelineMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePipelineMemberResponse::fromMap($this->doRPCRequest('DeletePipelineMember', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePipelineMemberRequest $request
     *
     * @return DeletePipelineMemberResponse
     */
    public function deletePipelineMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineMemberWithOptions($request, $runtime);
    }

    /**
     * @param GetDevopsProjectSprintInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDevopsProjectSprintInfoResponse
     */
    public function getDevopsProjectSprintInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevopsProjectSprintInfoResponse::fromMap($this->doRPCRequest('GetDevopsProjectSprintInfo', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevopsProjectSprintInfoRequest $request
     *
     * @return GetDevopsProjectSprintInfoResponse
     */
    public function getDevopsProjectSprintInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevopsProjectSprintInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevopsOrganizationMembersRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteDevopsOrganizationMembersResponse
     */
    public function deleteDevopsOrganizationMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevopsOrganizationMembersResponse::fromMap($this->doRPCRequest('DeleteDevopsOrganizationMembers', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDevopsOrganizationMembersRequest $request
     *
     * @return DeleteDevopsOrganizationMembersResponse
     */
    public function deleteDevopsOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevopsOrganizationMembersWithOptions($request, $runtime);
    }

    /**
     * @param GetLastWorkspaceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLastWorkspaceResponse
     */
    public function getLastWorkspaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetLastWorkspaceResponse::fromMap($this->doRPCRequest('GetLastWorkspace', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetLastWorkspaceRequest $request
     *
     * @return GetLastWorkspaceResponse
     */
    public function getLastWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLastWorkspaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateCredentialRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCredentialResponse
     */
    public function createCredentialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCredentialResponse::fromMap($this->doRPCRequest('CreateCredential', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCredentialRequest $request
     *
     * @return CreateCredentialResponse
     */
    public function createCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCredentialWithOptions($request, $runtime);
    }

    /**
     * @param ListCredentialsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCredentialsResponse
     */
    public function listCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCredentialsResponse::fromMap($this->doRPCRequest('ListCredentials', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCredentialsRequest $request
     *
     * @return ListCredentialsResponse
     */
    public function listCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCredentialsWithOptions($request, $runtime);
    }

    /**
     * @param CreatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePipelineResponse::fromMap($this->doRPCRequest('CreatePipeline', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineWithOptions($request, $runtime);
    }

    /**
     * @param ListPipelinesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPipelinesResponse::fromMap($this->doRPCRequest('ListPipelines', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPipelinesWithOptions($request, $runtime);
    }

    /**
     * @param CreatePipelineFromTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreatePipelineFromTemplateResponse
     */
    public function createPipelineFromTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePipelineFromTemplateResponse::fromMap($this->doRPCRequest('CreatePipelineFromTemplate', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePipelineFromTemplateRequest $request
     *
     * @return CreatePipelineFromTemplateResponse
     */
    public function createPipelineFromTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineFromTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListSmartGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSmartGroupResponse
     */
    public function listSmartGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSmartGroupResponse::fromMap($this->doRPCRequest('ListSmartGroup', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSmartGroupRequest $request
     *
     * @return ListSmartGroupResponse
     */
    public function listSmartGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartGroupWithOptions($request, $runtime);
    }

    /**
     * @param TransferPipelineOwnerRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TransferPipelineOwnerResponse
     */
    public function transferPipelineOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferPipelineOwnerResponse::fromMap($this->doRPCRequest('TransferPipelineOwner', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferPipelineOwnerRequest $request
     *
     * @return TransferPipelineOwnerResponse
     */
    public function transferPipelineOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferPipelineOwnerWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommonGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCommonGroupResponse
     */
    public function createCommonGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCommonGroupResponse::fromMap($this->doRPCRequest('CreateCommonGroup', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCommonGroupRequest $request
     *
     * @return CreateCommonGroupResponse
     */
    public function createCommonGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommonGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevopsOrganizationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDevopsOrganizationResponse
     */
    public function createDevopsOrganizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevopsOrganizationResponse::fromMap($this->doRPCRequest('CreateDevopsOrganization', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevopsOrganizationRequest $request
     *
     * @return CreateDevopsOrganizationResponse
     */
    public function createDevopsOrganization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevopsOrganizationWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsScenarioFieldConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDevopsScenarioFieldConfigResponse
     */
    public function listDevopsScenarioFieldConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsScenarioFieldConfigResponse::fromMap($this->doRPCRequest('ListDevopsScenarioFieldConfig', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsScenarioFieldConfigRequest $request
     *
     * @return ListDevopsScenarioFieldConfigResponse
     */
    public function listDevopsScenarioFieldConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsScenarioFieldConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListPipelineTemplatesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPipelineTemplatesResponse
     */
    public function listPipelineTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListPipelineTemplatesResponse::fromMap($this->doRPCRequest('ListPipelineTemplates', '2020-03-03', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPipelineTemplatesRequest $request
     *
     * @return ListPipelineTemplatesResponse
     */
    public function listPipelineTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPipelineTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDevopsProjectTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDevopsProjectTaskResponse
     */
    public function updateDevopsProjectTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDevopsProjectTaskResponse::fromMap($this->doRPCRequest('UpdateDevopsProjectTask', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDevopsProjectTaskRequest $request
     *
     * @return UpdateDevopsProjectTaskResponse
     */
    public function updateDevopsProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevopsProjectTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetDevopsProjectTaskInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDevopsProjectTaskInfoResponse
     */
    public function getDevopsProjectTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevopsProjectTaskInfoResponse::fromMap($this->doRPCRequest('GetDevopsProjectTaskInfo', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevopsProjectTaskInfoRequest $request
     *
     * @return GetDevopsProjectTaskInfoResponse
     */
    public function getDevopsProjectTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevopsProjectTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineInstanceGroupStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetPipelineInstanceGroupStatusResponse
     */
    public function getPipelineInstanceGroupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineInstanceGroupStatusResponse::fromMap($this->doRPCRequest('GetPipelineInstanceGroupStatus', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineInstanceGroupStatusRequest $request
     *
     * @return GetPipelineInstanceGroupStatusResponse
     */
    public function getPipelineInstanceGroupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineInstanceGroupStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTaskDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTaskDetailResponse
     */
    public function updateTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTaskDetailResponse::fromMap($this->doRPCRequest('UpdateTaskDetail', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTaskDetailRequest $request
     *
     * @return UpdateTaskDetailResponse
     */
    public function updateTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskListFilterRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTaskListFilterResponse
     */
    public function getTaskListFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskListFilterResponse::fromMap($this->doRPCRequest('GetTaskListFilter', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskListFilterRequest $request
     *
     * @return GetTaskListFilterResponse
     */
    public function getTaskListFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskListFilterWithOptions($request, $runtime);
    }

    /**
     * @param GetProjectOptionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectOptionResponse
     */
    public function getProjectOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetProjectOptionResponse::fromMap($this->doRPCRequest('GetProjectOption', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectOptionRequest $request
     *
     * @return GetProjectOptionResponse
     */
    public function getProjectOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectOptionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCommonGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateCommonGroupResponse
     */
    public function updateCommonGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCommonGroupResponse::fromMap($this->doRPCRequest('UpdateCommonGroup', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCommonGroupRequest $request
     *
     * @return UpdateCommonGroupResponse
     */
    public function updateCommonGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommonGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListCommonGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListCommonGroupResponse
     */
    public function listCommonGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCommonGroupResponse::fromMap($this->doRPCRequest('ListCommonGroup', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCommonGroupRequest $request
     *
     * @return ListCommonGroupResponse
     */
    public function listCommonGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommonGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDevopsProjectTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDevopsProjectTaskResponse
     */
    public function deleteDevopsProjectTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDevopsProjectTaskResponse::fromMap($this->doRPCRequest('DeleteDevopsProjectTask', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDevopsProjectTaskRequest $request
     *
     * @return DeleteDevopsProjectTaskResponse
     */
    public function deleteDevopsProjectTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevopsProjectTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetDevopsOrganizationMembersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDevopsOrganizationMembersResponse
     */
    public function getDevopsOrganizationMembersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevopsOrganizationMembersResponse::fromMap($this->doRPCRequest('GetDevopsOrganizationMembers', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevopsOrganizationMembersRequest $request
     *
     * @return GetDevopsOrganizationMembersResponse
     */
    public function getDevopsOrganizationMembers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevopsOrganizationMembersWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevopsProjectRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDevopsProjectResponse
     */
    public function createDevopsProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevopsProjectResponse::fromMap($this->doRPCRequest('CreateDevopsProject', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevopsProjectRequest $request
     *
     * @return CreateDevopsProjectResponse
     */
    public function createDevopsProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevopsProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskDetailActivityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetTaskDetailActivityResponse
     */
    public function getTaskDetailActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTaskDetailActivityResponse::fromMap($this->doRPCRequest('GetTaskDetailActivity', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetTaskDetailActivityRequest $request
     *
     * @return GetTaskDetailActivityResponse
     */
    public function getTaskDetailActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskDetailActivityWithOptions($request, $runtime);
    }

    /**
     * @param ExecutePipelineRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecutePipelineResponse
     */
    public function executePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecutePipelineResponse::fromMap($this->doRPCRequest('ExecutePipeline', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecutePipelineRequest $request
     *
     * @return ExecutePipelineResponse
     */
    public function executePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executePipelineWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceConnectionResponse
     */
    public function createServiceConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceConnectionResponse::fromMap($this->doRPCRequest('CreateServiceConnection', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceConnectionRequest $request
     *
     * @return CreateServiceConnectionResponse
     */
    public function createServiceConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceConnectionWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineInstHistoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPipelineInstHistoryResponse
     */
    public function getPipelineInstHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineInstHistoryResponse::fromMap($this->doRPCRequest('GetPipelineInstHistory', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineInstHistoryRequest $request
     *
     * @return GetPipelineInstHistoryResponse
     */
    public function getPipelineInstHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineInstHistoryWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineStepLogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPipelineStepLogResponse
     */
    public function getPipelineStepLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipelineStepLogResponse::fromMap($this->doRPCRequest('GetPipelineStepLog', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipelineStepLogRequest $request
     *
     * @return GetPipelineStepLogResponse
     */
    public function getPipelineStepLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineStepLogWithOptions($request, $runtime);
    }

    /**
     * @param GetPipleineLatestInstanceStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetPipleineLatestInstanceStatusResponse
     */
    public function getPipleineLatestInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPipleineLatestInstanceStatusResponse::fromMap($this->doRPCRequest('GetPipleineLatestInstanceStatus', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPipleineLatestInstanceStatusRequest $request
     *
     * @return GetPipleineLatestInstanceStatusResponse
     */
    public function getPipleineLatestInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipleineLatestInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListDevopsProjectTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDevopsProjectTasksResponse
     */
    public function listDevopsProjectTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDevopsProjectTasksResponse::fromMap($this->doRPCRequest('ListDevopsProjectTasks', '2020-03-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDevopsProjectTasksRequest $request
     *
     * @return ListDevopsProjectTasksResponse
     */
    public function listDevopsProjectTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDevopsProjectTasksWithOptions($request, $runtime);
    }
}
