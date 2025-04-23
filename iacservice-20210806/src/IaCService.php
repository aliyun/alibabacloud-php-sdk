<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AttachRabbitmqPublisherRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AttachRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelProjectBuildResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelRamPolicyExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CheckResourceNameRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CheckResourceNameResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CloneGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CloneGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CloneModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CloneModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateAuthorizationRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateAuthorizationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateExplorerTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateExplorerTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRabbitmqPublisherRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRamPolicyExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRamPolicyExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteAuthorizationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRamPolicyExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRamPolicyExportTaskVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteSceneTestingTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DetachRabbitmqPublisherRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DetachRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateParameterSetRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteRamPolicyExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetExplorerTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRabbitmqPublisherResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRamPolicyExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRamPolicyExportTaskVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskPolicyRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskPolicyResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListAuthorizationsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListAuthorizationsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListAvailableTerraformVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListAvailableTerraformVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListJobsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModulesShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectBuildsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRabbitmqPublishersRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRabbitmqPublishersResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTaskVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRamPolicyExportTaskVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveResourceExportTaskVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\TagResourcesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\TagResourcesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateAuthorizationAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateAuthorizationAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateExplorerTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateExplorerTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateParameterSetAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateParameterSetAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRabbitmqPublisherAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRabbitmqPublisherAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRamPolicyExportTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRamPolicyExportTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskPolicyRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskPolicyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IaCService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iacservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 分组关联.
     *
     * @param request - AssociateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateGroupResponse
     *
     * @param string                $groupId
     * @param AssociateGroupRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AssociateGroupResponse
     */
    public function associateGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '/associate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AssociateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分组关联.
     *
     * @param request - AssociateGroupRequest
     *
     * @returns AssociateGroupResponse
     *
     * @param string                $groupId
     * @param AssociateGroupRequest $request
     *
     * @return AssociateGroupResponse
     */
    public function associateGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 将参数集关联资源.
     *
     * @param request - AssociateParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateParameterSetResponse
     *
     * @param AssociateParameterSetRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return AssociateParameterSetResponse
     */
    public function associateParameterSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parameterSetIds) {
            @$body['parameterSetIds'] = $request->parameterSetIds;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/operations/associate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AssociateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将参数集关联资源.
     *
     * @param request - AssociateParameterSetRequest
     *
     * @returns AssociateParameterSetResponse
     *
     * @param AssociateParameterSetRequest $request
     *
     * @return AssociateParameterSetResponse
     */
    public function associateParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->associateParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * 将消息发布者挂载到任务
     *
     * @param request - AttachRabbitmqPublisherRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachRabbitmqPublisherResponse
     *
     * @param string                         $publisherId
     * @param AttachRabbitmqPublisherRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AttachRabbitmqPublisherResponse
     */
    public function attachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AttachRabbitmqPublisher',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers/' . Url::percentEncode($publisherId) . '/attach',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AttachRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将消息发布者挂载到任务
     *
     * @param request - AttachRabbitmqPublisherRequest
     *
     * @returns AttachRabbitmqPublisherResponse
     *
     * @param string                         $publisherId
     * @param AttachRabbitmqPublisherRequest $request
     *
     * @return AttachRabbitmqPublisherResponse
     */
    public function attachRabbitmqPublisher($publisherId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime);
    }

    /**
     * 取消执行.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelProjectBuildResponse
     *
     * @param string         $projectId
     * @param string         $projectBuildId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelProjectBuildResponse
     */
    public function cancelProjectBuildWithOptions($projectId, $projectBuildId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelProjectBuild',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '/build/' . Url::percentEncode($projectBuildId) . '/cancel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelProjectBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消执行.
     *
     * @returns CancelProjectBuildResponse
     *
     * @param string $projectId
     * @param string $projectBuildId
     *
     * @return CancelProjectBuildResponse
     */
    public function cancelProjectBuild($projectId, $projectBuildId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelProjectBuildWithOptions($projectId, $projectBuildId, $headers, $runtime);
    }

    /**
     * 取消RAM策略导出任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRamPolicyExportTaskResponse
     *
     * @param string         $ramPolicyExportTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelRamPolicyExportTaskResponse
     */
    public function cancelRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelRamPolicyExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '/cancel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelRamPolicyExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消RAM策略导出任务
     *
     * @returns CancelRamPolicyExportTaskResponse
     *
     * @param string $ramPolicyExportTaskId
     *
     * @return CancelRamPolicyExportTaskResponse
     */
    public function cancelRamPolicyExportTask($ramPolicyExportTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime);
    }

    /**
     * 取消资源导出任务
     *
     * @param request - CancelResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelResourceExportTaskResponse
     *
     * @param string                          $exportTaskId
     * @param CancelResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelResourceExportTaskResponse
     */
    public function cancelResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/cancel/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消资源导出任务
     *
     * @param request - CancelResourceExportTaskRequest
     *
     * @returns CancelResourceExportTaskResponse
     *
     * @param string                          $exportTaskId
     * @param CancelResourceExportTaskRequest $request
     *
     * @return CancelResourceExportTaskResponse
     */
    public function cancelResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * 校验资源名称.
     *
     * @param request - CheckResourceNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckResourceNameResponse
     *
     * @param CheckResourceNameRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CheckResourceNameResponse
     */
    public function checkResourceNameWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$query['parentId'] = $request->parentId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckResourceName',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/check/name',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckResourceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验资源名称.
     *
     * @param request - CheckResourceNameRequest
     *
     * @returns CheckResourceNameResponse
     *
     * @param CheckResourceNameRequest $request
     *
     * @return CheckResourceNameResponse
     */
    public function checkResourceName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkResourceNameWithOptions($request, $headers, $runtime);
    }

    /**
     * 克隆分组.
     *
     * @param request - CloneGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneGroupResponse
     *
     * @param string            $groupId
     * @param CloneGroupRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CloneGroupResponse
     */
    public function cloneGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->resourceTypes) {
            @$body['resourceTypes'] = $request->resourceTypes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆分组.
     *
     * @param request - CloneGroupRequest
     *
     * @returns CloneGroupResponse
     *
     * @param string            $groupId
     * @param CloneGroupRequest $request
     *
     * @return CloneGroupResponse
     */
    public function cloneGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 克隆模版.
     *
     * @param request - CloneModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneModuleResponse
     *
     * @param CloneModuleRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CloneModuleResponse
     */
    public function cloneModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleSource) {
            @$body['moduleSource'] = $request->moduleSource;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloneModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/operations/clone',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 克隆模版.
     *
     * @param request - CloneModuleRequest
     *
     * @returns CloneModuleResponse
     *
     * @param CloneModuleRequest $request
     *
     * @return CloneModuleResponse
     */
    public function cloneModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建共享.
     *
     * @param request - CreateAuthorizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAuthorizationResponse
     *
     * @param CreateAuthorizationRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAuthorizationResponse
     */
    public function createAuthorizationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->dueTime) {
            @$body['dueTime'] = $request->dueTime;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->uid) {
            @$body['uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAuthorization',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/authorizations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建共享.
     *
     * @param request - CreateAuthorizationRequest
     *
     * @returns CreateAuthorizationResponse
     *
     * @param CreateAuthorizationRequest $request
     *
     * @return CreateAuthorizationResponse
     */
    public function createAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAuthorizationWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Explorer任务
     *
     * @param request - CreateExplorerTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExplorerTaskResponse
     *
     * @param CreateExplorerTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateExplorerTaskResponse
     */
    public function createExplorerTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->initModuleState) {
            @$body['InitModuleState'] = $request->initModuleState;
        }

        if (null !== $request->terraformVersion) {
            @$body['TerraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->autoApply) {
            @$body['autoApply'] = $request->autoApply;
        }

        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->initModuleState) {
            @$body['initModuleState'] = $request->initModuleState;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->skipPropertyValidation) {
            @$body['skipPropertyValidation'] = $request->skipPropertyValidation;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->triggerValue) {
            @$body['triggerValue'] = $request->triggerValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExplorerTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExplorerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Explorer任务
     *
     * @param request - CreateExplorerTaskRequest
     *
     * @returns CreateExplorerTaskResponse
     *
     * @param CreateExplorerTaskRequest $request
     *
     * @return CreateExplorerTaskResponse
     */
    public function createExplorerTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExplorerTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建分组.
     *
     * @param request - CreateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->autoTrigger) {
            @$body['autoTrigger'] = $request->autoTrigger;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->forcedSetting) {
            @$body['forcedSetting'] = $request->forcedSetting;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->notifyConfig) {
            @$body['notifyConfig'] = $request->notifyConfig;
        }

        if (null !== $request->notifyOperationTypes) {
            @$body['notifyOperationTypes'] = $request->notifyOperationTypes;
        }

        if (null !== $request->projectId) {
            @$body['projectId'] = $request->projectId;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->reportExportField) {
            @$body['reportExportField'] = $request->reportExportField;
        }

        if (null !== $request->reportExportPath) {
            @$body['reportExportPath'] = $request->reportExportPath;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->triggerConfig) {
            @$body['triggerConfig'] = $request->triggerConfig;
        }

        if (null !== $request->triggerResourceType) {
            @$body['triggerResourceType'] = $request->triggerResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建分组.
     *
     * @param request - CreateGroupRequest
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建作业.
     *
     * @param request - CreateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param string           $taskId
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->executeType) {
            @$body['executeType'] = $request->executeType;
        }

        if (null !== $request->subCommand) {
            @$body['subCommand'] = $request->subCommand;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建作业.
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param string           $taskId
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * 创建模版.
     *
     * @param request - CreateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModuleResponse
     *
     * @param CreateModuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateModuleResponse
     */
    public function createModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->statePath) {
            @$body['statePath'] = $request->statePath;
        }

        if (null !== $request->versionStrategy) {
            @$body['versionStrategy'] = $request->versionStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模版.
     *
     * @param request - CreateModuleRequest
     *
     * @returns CreateModuleResponse
     *
     * @param CreateModuleRequest $request
     *
     * @return CreateModuleResponse
     */
    public function createModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建模版版本.
     *
     * @param request - CreateModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModuleVersionResponse
     *
     * @param string                     $moduleId
     * @param CreateModuleVersionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateModuleVersionResponse
     */
    public function createModuleVersionWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '/versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模版版本.
     *
     * @param request - CreateModuleVersionRequest
     *
     * @returns CreateModuleVersionResponse
     *
     * @param string                     $moduleId
     * @param CreateModuleVersionRequest $request
     *
     * @return CreateModuleVersionResponse
     */
    public function createModuleVersion($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModuleVersionWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * 创建参数集.
     *
     * @param request - CreateParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParameterSetResponse
     *
     * @param CreateParameterSetRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateParameterSetResponse
     */
    public function createParameterSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建参数集.
     *
     * @param request - CreateParameterSetRequest
     *
     * @returns CreateParameterSetResponse
     *
     * @param CreateParameterSetRequest $request
     *
     * @return CreateParameterSetResponse
     */
    public function createParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 构建项目批次
     *
     * @param request - CreateProjectBuildRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectBuildResponse
     *
     * @param string                    $projectId
     * @param CreateProjectBuildRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateProjectBuildResponse
     */
    public function createProjectBuildWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->groupId) {
            @$body['groupId'] = $request->groupId;
        }

        if (null !== $request->projectBuildAction) {
            @$body['projectBuildAction'] = $request->projectBuildAction;
        }

        if (null !== $request->taskIds) {
            @$body['taskIds'] = $request->taskIds;
        }

        if (null !== $request->taskPolicies) {
            @$body['taskPolicies'] = $request->taskPolicies;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProjectBuild',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '/build',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 构建项目批次
     *
     * @param request - CreateProjectBuildRequest
     *
     * @returns CreateProjectBuildResponse
     *
     * @param string                    $projectId
     * @param CreateProjectBuildRequest $request
     *
     * @return CreateProjectBuildResponse
     */
    public function createProjectBuild($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectBuildWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 创建消息发布者.
     *
     * @param request - CreateRabbitmqPublisherRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRabbitmqPublisherResponse
     *
     * @param CreateRabbitmqPublisherRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRabbitmqPublisherResponse
     */
    public function createRabbitmqPublisherWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->exchangeName) {
            @$body['exchangeName'] = $request->exchangeName;
        }

        if (null !== $request->exchangeType) {
            @$body['exchangeType'] = $request->exchangeType;
        }

        if (null !== $request->hostName) {
            @$body['hostName'] = $request->hostName;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->port) {
            @$body['port'] = $request->port;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        if (null !== $request->virtualHost) {
            @$body['virtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRabbitmqPublisher',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建消息发布者.
     *
     * @param request - CreateRabbitmqPublisherRequest
     *
     * @returns CreateRabbitmqPublisherResponse
     *
     * @param CreateRabbitmqPublisherRequest $request
     *
     * @return CreateRabbitmqPublisherResponse
     */
    public function createRabbitmqPublisher($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRabbitmqPublisherWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建RAM策略导出任务
     *
     * @param request - CreateRamPolicyExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRamPolicyExportTaskResponse
     *
     * @param CreateRamPolicyExportTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateRamPolicyExportTaskResponse
     */
    public function createRamPolicyExportTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationAccountIds) {
            @$body['authorizationAccountIds'] = $request->authorizationAccountIds;
        }

        if (null !== $request->authorizationActions) {
            @$body['authorizationActions'] = $request->authorizationActions;
        }

        if (null !== $request->authorizationRegionIds) {
            @$body['authorizationRegionIds'] = $request->authorizationRegionIds;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRamPolicyExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRamPolicyExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建RAM策略导出任务
     *
     * @param request - CreateRamPolicyExportTaskRequest
     *
     * @returns CreateRamPolicyExportTaskResponse
     *
     * @param CreateRamPolicyExportTaskRequest $request
     *
     * @return CreateRamPolicyExportTaskResponse
     */
    public function createRamPolicyExportTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRamPolicyExportTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建导出任务
     *
     * @param request - CreateResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceExportTaskResponse
     *
     * @param CreateResourceExportTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateResourceExportTaskResponse
     */
    public function createResourceExportTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->configPath) {
            @$body['configPath'] = $request->configPath;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->excludeRules) {
            @$body['excludeRules'] = $request->excludeRules;
        }

        if (null !== $request->exportToModule) {
            @$body['exportToModule'] = $request->exportToModule;
        }

        if (null !== $request->includeRules) {
            @$body['includeRules'] = $request->includeRules;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建导出任务
     *
     * @param request - CreateResourceExportTaskRequest
     *
     * @returns CreateResourceExportTaskResponse
     *
     * @param CreateResourceExportTaskRequest $request
     *
     * @return CreateResourceExportTaskResponse
     */
    public function createResourceExportTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceExportTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建任务
     *
     * @param request - CreateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoApply) {
            @$body['autoApply'] = $request->autoApply;
        }

        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->initModuleState) {
            @$body['initModuleState'] = $request->initModuleState;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->protectionStrategy) {
            @$body['protectionStrategy'] = $request->protectionStrategy;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->skipPropertyValidation) {
            @$body['skipPropertyValidation'] = $request->skipPropertyValidation;
        }

        if (null !== $request->taskBackend) {
            @$body['taskBackend'] = $request->taskBackend;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        if (null !== $request->triggerValue) {
            @$body['triggerValue'] = $request->triggerValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建任务
     *
     * @param request - CreateTaskRequest
     *
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除共享.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAuthorizationResponse
     *
     * @param string         $authorizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAuthorizationResponse
     */
    public function deleteAuthorizationWithOptions($authorizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAuthorization',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/authorizations/' . Url::percentEncode($authorizationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除共享.
     *
     * @returns DeleteAuthorizationResponse
     *
     * @param string $authorizationId
     *
     * @return DeleteAuthorizationResponse
     */
    public function deleteAuthorization($authorizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAuthorizationWithOptions($authorizationId, $headers, $runtime);
    }

    /**
     * 删除分组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupResponse
     *
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除分组.
     *
     * @returns DeleteGroupResponse
     *
     * @param string $groupId
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupWithOptions($groupId, $headers, $runtime);
    }

    /**
     * 删除模版.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModuleResponse
     *
     * @param string         $moduleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModuleResponse
     */
    public function deleteModuleWithOptions($moduleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模版.
     *
     * @returns DeleteModuleResponse
     *
     * @param string $moduleId
     *
     * @return DeleteModuleResponse
     */
    public function deleteModule($moduleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModuleWithOptions($moduleId, $headers, $runtime);
    }

    /**
     * 删除参数集.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParameterSetResponse
     *
     * @param string         $parameterSetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteParameterSetResponse
     */
    public function deleteParameterSetWithOptions($parameterSetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/' . Url::percentEncode($parameterSetId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除参数集.
     *
     * @returns DeleteParameterSetResponse
     *
     * @param string $parameterSetId
     *
     * @return DeleteParameterSetResponse
     */
    public function deleteParameterSet($parameterSetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteParameterSetWithOptions($parameterSetId, $headers, $runtime);
    }

    /**
     * 删除项目.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除项目.
     *
     * @returns DeleteProjectResponse
     *
     * @param string $projectId
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($projectId, $headers, $runtime);
    }

    /**
     * 删除消息发布者.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRabbitmqPublisherResponse
     *
     * @param string         $publisherId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRabbitmqPublisherResponse
     */
    public function deleteRabbitmqPublisherWithOptions($publisherId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRabbitmqPublisher',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers/' . Url::percentEncode($publisherId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除消息发布者.
     *
     * @returns DeleteRabbitmqPublisherResponse
     *
     * @param string $publisherId
     *
     * @return DeleteRabbitmqPublisherResponse
     */
    public function deleteRabbitmqPublisher($publisherId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRabbitmqPublisherWithOptions($publisherId, $headers, $runtime);
    }

    /**
     * 删除RAM策略导出任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRamPolicyExportTaskResponse
     *
     * @param string         $ramPolicyExportTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRamPolicyExportTaskResponse
     */
    public function deleteRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRamPolicyExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRamPolicyExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除RAM策略导出任务
     *
     * @returns DeleteRamPolicyExportTaskResponse
     *
     * @param string $ramPolicyExportTaskId
     *
     * @return DeleteRamPolicyExportTaskResponse
     */
    public function deleteRamPolicyExportTask($ramPolicyExportTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime);
    }

    /**
     * 删除RAM策略导出任务版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRamPolicyExportTaskVersionResponse
     *
     * @param string         $ramPolicyExportTaskId
     * @param string         $exportVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRamPolicyExportTaskVersionResponse
     */
    public function deleteRamPolicyExportTaskVersionWithOptions($ramPolicyExportTaskId, $exportVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRamPolicyExportTaskVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '/versions/' . Url::percentEncode($exportVersion) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRamPolicyExportTaskVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除RAM策略导出任务版本.
     *
     * @returns DeleteRamPolicyExportTaskVersionResponse
     *
     * @param string $ramPolicyExportTaskId
     * @param string $exportVersion
     *
     * @return DeleteRamPolicyExportTaskVersionResponse
     */
    public function deleteRamPolicyExportTaskVersion($ramPolicyExportTaskId, $exportVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRamPolicyExportTaskVersionWithOptions($ramPolicyExportTaskId, $exportVersion, $headers, $runtime);
    }

    /**
     * 删除任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceExportTaskResponse
     *
     * @param string         $exportTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceExportTaskResponse
     */
    public function deleteResourceExportTaskWithOptions($exportTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除任务
     *
     * @returns DeleteResourceExportTaskResponse
     *
     * @param string $exportTaskId
     *
     * @return DeleteResourceExportTaskResponse
     */
    public function deleteResourceExportTask($exportTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceExportTaskWithOptions($exportTaskId, $headers, $runtime);
    }

    /**
     * 删除场景化测试任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSceneTestingTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSceneTestingTaskResponse
     */
    public function deleteSceneTestingTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSceneTestingTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/sceneTestingTask/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSceneTestingTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除场景化测试任务
     *
     * @returns DeleteSceneTestingTaskResponse
     *
     * @param string $taskId
     *
     * @return DeleteSceneTestingTaskResponse
     */
    public function deleteSceneTestingTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSceneTestingTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * 删除任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTaskResponse
     */
    public function deleteTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除任务
     *
     * @returns DeleteTaskResponse
     *
     * @param string $taskId
     *
     * @return DeleteTaskResponse
     */
    public function deleteTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * 将消息发布者从任务上卸载.
     *
     * @param request - DetachRabbitmqPublisherRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachRabbitmqPublisherResponse
     *
     * @param string                         $publisherId
     * @param DetachRabbitmqPublisherRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DetachRabbitmqPublisherResponse
     */
    public function detachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DetachRabbitmqPublisher',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers/' . Url::percentEncode($publisherId) . '/detach',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DetachRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将消息发布者从任务上卸载.
     *
     * @param request - DetachRabbitmqPublisherRequest
     *
     * @returns DetachRabbitmqPublisherResponse
     *
     * @param string                         $publisherId
     * @param DetachRabbitmqPublisherRequest $request
     *
     * @return DetachRabbitmqPublisherResponse
     */
    public function detachRabbitmqPublisher($publisherId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detachRabbitmqPublisherWithOptions($publisherId, $request, $headers, $runtime);
    }

    /**
     * 取消关联分组.
     *
     * @param request - DissociateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateGroupResponse
     *
     * @param string                 $projectId
     * @param string                 $groupId
     * @param DissociateGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DissociateGroupResponse
     */
    public function dissociateGroupWithOptions($projectId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DissociateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '/dissociate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DissociateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消关联分组.
     *
     * @param request - DissociateGroupRequest
     *
     * @returns DissociateGroupResponse
     *
     * @param string                 $projectId
     * @param string                 $groupId
     * @param DissociateGroupRequest $request
     *
     * @return DissociateGroupResponse
     */
    public function dissociateGroup($projectId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateGroupWithOptions($projectId, $groupId, $request, $headers, $runtime);
    }

    /**
     * 解除参数集关联资源关系.
     *
     * @param request - DissociateParameterSetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateParameterSetResponse
     *
     * @param DissociateParameterSetRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DissociateParameterSetResponse
     */
    public function dissociateParameterSetWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parameterSetIds) {
            @$body['parameterSetIds'] = $request->parameterSetIds;
        }

        if (null !== $request->resourceId) {
            @$body['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DissociateParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/operations/dissociate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DissociateParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解除参数集关联资源关系.
     *
     * @param request - DissociateParameterSetRequest
     *
     * @returns DissociateParameterSetResponse
     *
     * @param DissociateParameterSetRequest $request
     *
     * @return DissociateParameterSetResponse
     */
    public function dissociateParameterSet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dissociateParameterSetWithOptions($request, $headers, $runtime);
    }

    /**
     * 执行RAM策略导出任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteRamPolicyExportTaskResponse
     *
     * @param string         $ramPolicyExportTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ExecuteRamPolicyExportTaskResponse
     */
    public function executeRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ExecuteRamPolicyExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '/execute',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteRamPolicyExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行RAM策略导出任务
     *
     * @returns ExecuteRamPolicyExportTaskResponse
     *
     * @param string $ramPolicyExportTaskId
     *
     * @return ExecuteRamPolicyExportTaskResponse
     */
    public function executeRamPolicyExportTask($ramPolicyExportTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime);
    }

    /**
     * 执行资源导出任务
     *
     * @param request - ExecuteResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteResourceExportTaskResponse
     *
     * @param string                           $exportTaskId
     * @param ExecuteResourceExportTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ExecuteResourceExportTaskResponse
     */
    public function executeResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/execute/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行资源导出任务
     *
     * @param request - ExecuteResourceExportTaskRequest
     *
     * @returns ExecuteResourceExportTaskResponse
     *
     * @param string                           $exportTaskId
     * @param ExecuteResourceExportTaskRequest $request
     *
     * @return ExecuteResourceExportTaskResponse
     */
    public function executeResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * 查询Explorer任务详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExplorerTaskResponse
     *
     * @param string         $explorerTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExplorerTaskResponse
     */
    public function getExplorerTaskWithOptions($explorerTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExplorerTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerTask/' . Url::percentEncode($explorerTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExplorerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Explorer任务详情.
     *
     * @returns GetExplorerTaskResponse
     *
     * @param string $explorerTaskId
     *
     * @return GetExplorerTaskResponse
     */
    public function getExplorerTask($explorerTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExplorerTaskWithOptions($explorerTaskId, $headers, $runtime);
    }

    /**
     * 查询分组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupResponse
     *
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询分组.
     *
     * @returns GetGroupResponse
     *
     * @param string $groupId
     *
     * @return GetGroupResponse
     */
    public function getGroup($groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupWithOptions($groupId, $headers, $runtime);
    }

    /**
     * 作业详情.
     *
     * @param request - GetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param string         $taskId
     * @param string         $jobId
     * @param GetJobRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($taskId, $jobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 作业详情.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param string        $taskId
     * @param string        $jobId
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($taskId, $jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($taskId, $jobId, $request, $headers, $runtime);
    }

    /**
     * 获取模版详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModuleResponse
     *
     * @param string         $moduleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModuleResponse
     */
    public function getModuleWithOptions($moduleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模版详情.
     *
     * @returns GetModuleResponse
     *
     * @param string $moduleId
     *
     * @return GetModuleResponse
     */
    public function getModule($moduleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleWithOptions($moduleId, $headers, $runtime);
    }

    /**
     * 模版版本详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetModuleVersionResponse
     *
     * @param string         $moduleId
     * @param string         $moduleVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModuleVersionResponse
     */
    public function getModuleVersionWithOptions($moduleId, $moduleVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '/versions/' . Url::percentEncode($moduleVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 模版版本详情.
     *
     * @returns GetModuleVersionResponse
     *
     * @param string $moduleId
     * @param string $moduleVersion
     *
     * @return GetModuleVersionResponse
     */
    public function getModuleVersion($moduleId, $moduleVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModuleVersionWithOptions($moduleId, $moduleVersion, $headers, $runtime);
    }

    /**
     * 参数集详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetParameterSetResponse
     *
     * @param string         $parameterSetId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetParameterSetResponse
     */
    public function getParameterSetWithOptions($parameterSetId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetParameterSet',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/' . Url::percentEncode($parameterSetId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetParameterSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 参数集详情.
     *
     * @returns GetParameterSetResponse
     *
     * @param string $parameterSetId
     *
     * @return GetParameterSetResponse
     */
    public function getParameterSet($parameterSetId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getParameterSetWithOptions($parameterSetId, $headers, $runtime);
    }

    /**
     * 查询项目.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询项目.
     *
     * @returns GetProjectResponse
     *
     * @param string $projectId
     *
     * @return GetProjectResponse
     */
    public function getProject($projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($projectId, $headers, $runtime);
    }

    /**
     * 项目批次概览.
     *
     * @param request - GetProjectBuildContextRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectBuildContextResponse
     *
     * @param string                        $projectId
     * @param string                        $projectBuildId
     * @param GetProjectBuildContextRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetProjectBuildContextResponse
     */
    public function getProjectBuildContextWithOptions($projectId, $projectBuildId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isPassAssertCheck) {
            @$query['isPassAssertCheck'] = $request->isPassAssertCheck;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProjectBuildContext',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '/build/' . Url::percentEncode($projectBuildId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectBuildContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 项目批次概览.
     *
     * @param request - GetProjectBuildContextRequest
     *
     * @returns GetProjectBuildContextResponse
     *
     * @param string                        $projectId
     * @param string                        $projectBuildId
     * @param GetProjectBuildContextRequest $request
     *
     * @return GetProjectBuildContextResponse
     */
    public function getProjectBuildContext($projectId, $projectBuildId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectBuildContextWithOptions($projectId, $projectBuildId, $request, $headers, $runtime);
    }

    /**
     * 获取消息发布者详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRabbitmqPublisherResponse
     *
     * @param string         $publisherId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRabbitmqPublisherResponse
     */
    public function getRabbitmqPublisherWithOptions($publisherId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRabbitmqPublisher',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers/' . Url::percentEncode($publisherId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRabbitmqPublisherResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取消息发布者详情.
     *
     * @returns GetRabbitmqPublisherResponse
     *
     * @param string $publisherId
     *
     * @return GetRabbitmqPublisherResponse
     */
    public function getRabbitmqPublisher($publisherId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRabbitmqPublisherWithOptions($publisherId, $headers, $runtime);
    }

    /**
     * 获取RAM策略导出任务详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRamPolicyExportTaskResponse
     *
     * @param string         $ramPolicyExportTaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRamPolicyExportTaskResponse
     */
    public function getRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRamPolicyExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRamPolicyExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RAM策略导出任务详情.
     *
     * @returns GetRamPolicyExportTaskResponse
     *
     * @param string $ramPolicyExportTaskId
     *
     * @return GetRamPolicyExportTaskResponse
     */
    public function getRamPolicyExportTask($ramPolicyExportTaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRamPolicyExportTaskWithOptions($ramPolicyExportTaskId, $headers, $runtime);
    }

    /**
     * 获取RAM策略导出任务版本详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRamPolicyExportTaskVersionResponse
     *
     * @param string         $ramPolicyExportTaskId
     * @param string         $exportVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRamPolicyExportTaskVersionResponse
     */
    public function getRamPolicyExportTaskVersionWithOptions($ramPolicyExportTaskId, $exportVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRamPolicyExportTaskVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '/versions/' . Url::percentEncode($exportVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRamPolicyExportTaskVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RAM策略导出任务版本详情.
     *
     * @returns GetRamPolicyExportTaskVersionResponse
     *
     * @param string $ramPolicyExportTaskId
     * @param string $exportVersion
     *
     * @return GetRamPolicyExportTaskVersionResponse
     */
    public function getRamPolicyExportTaskVersion($ramPolicyExportTaskId, $exportVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRamPolicyExportTaskVersionWithOptions($ramPolicyExportTaskId, $exportVersion, $headers, $runtime);
    }

    /**
     * 查询导出任务详情.
     *
     * @param request - GetResourceExportTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceExportTaskResponse
     *
     * @param string                       $exportTaskId
     * @param GetResourceExportTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceExportTaskResponse
     */
    public function getResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportVersion) {
            @$query['exportVersion'] = $request->exportVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceExportTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceExportTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询导出任务详情.
     *
     * @param request - GetResourceExportTaskRequest
     *
     * @returns GetResourceExportTaskResponse
     *
     * @param string                       $exportTaskId
     * @param GetResourceExportTaskRequest $request
     *
     * @return GetResourceExportTaskResponse
     */
    public function getResourceExportTask($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceExportTaskWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * 查询任务详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务详情.
     *
     * @returns GetTaskResponse
     *
     * @param string $taskId
     *
     * @return GetTaskResponse
     */
    public function getTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * 查询分组优先级详情.
     *
     * @param request - GetTaskPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskPolicyResponse
     *
     * @param string               $groupId
     * @param GetTaskPolicyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskPolicyResponse
     */
    public function getTaskPolicyWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskPolicy',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/task/policy/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询分组优先级详情.
     *
     * @param request - GetTaskPolicyRequest
     *
     * @returns GetTaskPolicyResponse
     *
     * @param string               $groupId
     * @param GetTaskPolicyRequest $request
     *
     * @return GetTaskPolicyResponse
     */
    public function getTaskPolicy($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskPolicyWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 获取共享列表.
     *
     * @param request - ListAuthorizationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizationsResponse
     *
     * @param ListAuthorizationsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListAuthorizationsResponse
     */
    public function listAuthorizationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizationId) {
            @$query['authorizationId'] = $request->authorizationId;
        }

        if (null !== $request->authorizationType) {
            @$query['authorizationType'] = $request->authorizationType;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizations',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/authorizations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAuthorizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取共享列表.
     *
     * @param request - ListAuthorizationsRequest
     *
     * @returns ListAuthorizationsResponse
     *
     * @param ListAuthorizationsRequest $request
     *
     * @return ListAuthorizationsResponse
     */
    public function listAuthorizations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorizationsWithOptions($request, $headers, $runtime);
    }

    /**
     * terraform版本.
     *
     * @param request - ListAvailableTerraformVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableTerraformVersionsResponse
     *
     * @param ListAvailableTerraformVersionsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListAvailableTerraformVersionsResponse
     */
    public function listAvailableTerraformVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['keyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvailableTerraformVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/version/terraform',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAvailableTerraformVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * terraform版本.
     *
     * @param request - ListAvailableTerraformVersionsRequest
     *
     * @returns ListAvailableTerraformVersionsResponse
     *
     * @param ListAvailableTerraformVersionsRequest $request
     *
     * @return ListAvailableTerraformVersionsResponse
     */
    public function listAvailableTerraformVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableTerraformVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 列举Explorer任务
     *
     * @param request - ListExplorerTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerTasksResponse
     *
     * @param string                   $explorerTaskId
     * @param ListExplorerTasksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListExplorerTasksResponse
     */
    public function listExplorerTasksWithOptions($explorerTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResult) {
            @$query['maxResult'] = $request->maxResult;
        }

        if (null !== $request->moduleId) {
            @$query['moduleId'] = $request->moduleId;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerTasks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举Explorer任务
     *
     * @param request - ListExplorerTasksRequest
     *
     * @returns ListExplorerTasksResponse
     *
     * @param string                   $explorerTaskId
     * @param ListExplorerTasksRequest $request
     *
     * @return ListExplorerTasksResponse
     */
    public function listExplorerTasks($explorerTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerTasksWithOptions($explorerTaskId, $request, $headers, $runtime);
    }

    /**
     * 查询分组列表.
     *
     * @param tmpReq - ListGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupResponse
     *
     * @param ListGroupRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListGroupResponse
     */
    public function listGroupWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询分组列表.
     *
     * @param request - ListGroupRequest
     *
     * @returns ListGroupResponse
     *
     * @param ListGroupRequest $request
     *
     * @return ListGroupResponse
     */
    public function listGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 作业列表.
     *
     * @param request - ListJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param string          $taskId
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 作业列表.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param string          $taskId
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * 模版版本列表.
     *
     * @param request - ListModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModuleVersionResponse
     *
     * @param string                   $moduleId
     * @param ListModuleVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListModuleVersionResponse
     */
    public function listModuleVersionWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 模版版本列表.
     *
     * @param request - ListModuleVersionRequest
     *
     * @returns ListModuleVersionResponse
     *
     * @param string                   $moduleId
     * @param ListModuleVersionRequest $request
     *
     * @return ListModuleVersionResponse
     */
    public function listModuleVersion($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModuleVersionWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * 列举模版.
     *
     * @param tmpReq - ListModulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModulesResponse
     *
     * @param ListModulesRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListModulesResponse
     */
    public function listModulesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListModulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeModuleIds) {
            $request->excludeModuleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeModuleIds, 'excludeModuleIds', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->excludeModuleIdsShrink) {
            @$query['excludeModuleIds'] = $request->excludeModuleIdsShrink;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModules',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列举模版.
     *
     * @param request - ListModulesRequest
     *
     * @returns ListModulesResponse
     *
     * @param ListModulesRequest $request
     *
     * @return ListModulesResponse
     */
    public function listModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModulesWithOptions($request, $headers, $runtime);
    }

    /**
     * 关联到资源的参数集列表.
     *
     * @param request - ListParameterSetRelationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParameterSetRelationResponse
     *
     * @param ListParameterSetRelationRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListParameterSetRelationResponse
     */
    public function listParameterSetRelationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParameterSetRelation',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/operations/relation',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListParameterSetRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关联到资源的参数集列表.
     *
     * @param request - ListParameterSetRelationRequest
     *
     * @returns ListParameterSetRelationResponse
     *
     * @param ListParameterSetRelationRequest $request
     *
     * @return ListParameterSetRelationResponse
     */
    public function listParameterSetRelation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParameterSetRelationWithOptions($request, $headers, $runtime);
    }

    /**
     * 参数集列表.
     *
     * @param request - ListParameterSetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListParameterSetsResponse
     *
     * @param ListParameterSetsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListParameterSetsResponse
     */
    public function listParameterSetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListParameterSets',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListParameterSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 参数集列表.
     *
     * @param request - ListParameterSetsRequest
     *
     * @returns ListParameterSetsResponse
     *
     * @param ListParameterSetsRequest $request
     *
     * @return ListParameterSetsResponse
     */
    public function listParameterSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listParameterSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询项目列表.
     *
     * @param tmpReq - ListProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询项目列表.
     *
     * @param request - ListProjectRequest
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * 项目批次列表.
     *
     * @param request - ListProjectBuildsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectBuildsResponse
     *
     * @param string                   $projectId
     * @param ListProjectBuildsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListProjectBuildsResponse
     */
    public function listProjectBuildsWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectBuildAction) {
            @$query['projectBuildAction'] = $request->projectBuildAction;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjectBuilds',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '/build',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectBuildsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 项目批次列表.
     *
     * @param request - ListProjectBuildsRequest
     *
     * @returns ListProjectBuildsResponse
     *
     * @param string                   $projectId
     * @param ListProjectBuildsRequest $request
     *
     * @return ListProjectBuildsResponse
     */
    public function listProjectBuilds($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectBuildsWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 获取消息发布者列表.
     *
     * @param request - ListRabbitmqPublishersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRabbitmqPublishersResponse
     *
     * @param ListRabbitmqPublishersRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRabbitmqPublishersResponse
     */
    public function listRabbitmqPublishersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRabbitmqPublishers',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRabbitmqPublishersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取消息发布者列表.
     *
     * @param request - ListRabbitmqPublishersRequest
     *
     * @returns ListRabbitmqPublishersResponse
     *
     * @param ListRabbitmqPublishersRequest $request
     *
     * @return ListRabbitmqPublishersResponse
     */
    public function listRabbitmqPublishers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRabbitmqPublishersWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取RAM策略导出任务版本列表.
     *
     * @param request - ListRamPolicyExportTaskVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRamPolicyExportTaskVersionsResponse
     *
     * @param string                                 $ramPolicyExportTaskId
     * @param ListRamPolicyExportTaskVersionsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListRamPolicyExportTaskVersionsResponse
     */
    public function listRamPolicyExportTaskVersionsWithOptions($ramPolicyExportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRamPolicyExportTaskVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRamPolicyExportTaskVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RAM策略导出任务版本列表.
     *
     * @param request - ListRamPolicyExportTaskVersionsRequest
     *
     * @returns ListRamPolicyExportTaskVersionsResponse
     *
     * @param string                                 $ramPolicyExportTaskId
     * @param ListRamPolicyExportTaskVersionsRequest $request
     *
     * @return ListRamPolicyExportTaskVersionsResponse
     */
    public function listRamPolicyExportTaskVersions($ramPolicyExportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRamPolicyExportTaskVersionsWithOptions($ramPolicyExportTaskId, $request, $headers, $runtime);
    }

    /**
     * 获取RAM策略导出任务列表.
     *
     * @param request - ListRamPolicyExportTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRamPolicyExportTasksResponse
     *
     * @param ListRamPolicyExportTasksRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRamPolicyExportTasksResponse
     */
    public function listRamPolicyExportTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->moduleId) {
            @$query['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$query['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRamPolicyExportTasks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRamPolicyExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RAM策略导出任务列表.
     *
     * @param request - ListRamPolicyExportTasksRequest
     *
     * @returns ListRamPolicyExportTasksResponse
     *
     * @param ListRamPolicyExportTasksRequest $request
     *
     * @return ListRamPolicyExportTasksResponse
     */
    public function listRamPolicyExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRamPolicyExportTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取任务版本列表.
     *
     * @param request - ListResourceExportTaskVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceExportTaskVersionsResponse
     *
     * @param string                                $exportTaskId
     * @param ListResourceExportTaskVersionsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListResourceExportTaskVersionsResponse
     */
    public function listResourceExportTaskVersionsWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportVersion) {
            @$query['exportVersion'] = $request->exportVersion;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceExportTaskVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '/exportVersions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceExportTaskVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务版本列表.
     *
     * @param request - ListResourceExportTaskVersionsRequest
     *
     * @returns ListResourceExportTaskVersionsResponse
     *
     * @param string                                $exportTaskId
     * @param ListResourceExportTaskVersionsRequest $request
     *
     * @return ListResourceExportTaskVersionsResponse
     */
    public function listResourceExportTaskVersions($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceExportTaskVersionsWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * 查询导出任务列表.
     *
     * @param request - ListResourceExportTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceExportTasksResponse
     *
     * @param ListResourceExportTasksRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListResourceExportTasksResponse
     */
    public function listResourceExportTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportTaskId) {
            @$query['exportTaskId'] = $request->exportTaskId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceExportTasks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceExportTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询导出任务列表.
     *
     * @param request - ListResourceExportTasksRequest
     *
     * @returns ListResourceExportTasksResponse
     *
     * @param ListResourceExportTasksRequest $request
     *
     * @return ListResourceExportTasksResponse
     */
    public function listResourceExportTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceExportTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 资源列表.
     *
     * @param request - ListResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->sourceValue) {
            @$query['sourceValue'] = $request->sourceValue;
        }

        if (null !== $request->specType) {
            @$query['specType'] = $request->specType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/resources/stateparser',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 资源列表.
     *
     * @param request - ListResourcesRequest
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 任务列表.
     *
     * @param tmpReq - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeTaskIds) {
            $request->excludeTaskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeTaskIds, 'excludeTaskIds', 'simple');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->excludeTaskIdsShrink) {
            @$query['excludeTaskIds'] = $request->excludeTaskIdsShrink;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->moduleId) {
            @$query['moduleId'] = $request->moduleId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['projectId'] = $request->projectId;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->tagShrink) {
            @$query['tag'] = $request->tagShrink;
        }

        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务列表.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * terraformProvider版本.
     *
     * @param request - ListTerraformProviderVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTerraformProviderVersionsResponse
     *
     * @param ListTerraformProviderVersionsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTerraformProviderVersionsResponse
     */
    public function listTerraformProviderVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->usage) {
            @$query['usage'] = $request->usage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTerraformProviderVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/version/terraform/provider',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTerraformProviderVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * terraformProvider版本.
     *
     * @param request - ListTerraformProviderVersionsRequest
     *
     * @returns ListTerraformProviderVersionsResponse
     *
     * @param ListTerraformProviderVersionsRequest $request
     *
     * @return ListTerraformProviderVersionsResponse
     */
    public function listTerraformProviderVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTerraformProviderVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 控制作业.
     *
     * @param request - OperateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateJobResponse
     *
     * @param string            $taskId
     * @param string            $jobId
     * @param string            $operationType
     * @param OperateJobRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return OperateJobResponse
     */
    public function operateJobWithOptions($taskId, $jobId, $operationType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['comment'] = $request->comment;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateJob',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '/jobs/' . Url::percentEncode($jobId) . '/operation/' . Url::percentEncode($operationType) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OperateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 控制作业.
     *
     * @param request - OperateJobRequest
     *
     * @returns OperateJobResponse
     *
     * @param string            $taskId
     * @param string            $jobId
     * @param string            $operationType
     * @param OperateJobRequest $request
     *
     * @return OperateJobResponse
     */
    public function operateJob($taskId, $jobId, $operationType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateJobWithOptions($taskId, $jobId, $operationType, $request, $headers, $runtime);
    }

    /**
     * 移除导出任务版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveResourceExportTaskVersionResponse
     *
     * @param string         $exportTaskId
     * @param string         $exportVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveResourceExportTaskVersionResponse
     */
    public function removeResourceExportTaskVersionWithOptions($exportTaskId, $exportVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RemoveResourceExportTaskVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '/' . Url::percentEncode($exportVersion) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveResourceExportTaskVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除导出任务版本.
     *
     * @returns RemoveResourceExportTaskVersionResponse
     *
     * @param string $exportTaskId
     * @param string $exportVersion
     *
     * @return RemoveResourceExportTaskVersionResponse
     */
    public function removeResourceExportTaskVersion($exportTaskId, $exportVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeResourceExportTaskVersionWithOptions($exportTaskId, $exportVersion, $headers, $runtime);
    }

    /**
     * 打标签接口.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 打标签接口.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新共享.
     *
     * @param request - UpdateAuthorizationAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAuthorizationAttributeResponse
     *
     * @param string                              $authorizationId
     * @param UpdateAuthorizationAttributeRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAuthorizationAttributeResponse
     */
    public function updateAuthorizationAttributeWithOptions($authorizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dueTime) {
            @$body['dueTime'] = $request->dueTime;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAuthorizationAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/authorizations/' . Url::percentEncode($authorizationId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAuthorizationAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新共享.
     *
     * @param request - UpdateAuthorizationAttributeRequest
     *
     * @returns UpdateAuthorizationAttributeResponse
     *
     * @param string                              $authorizationId
     * @param UpdateAuthorizationAttributeRequest $request
     *
     * @return UpdateAuthorizationAttributeResponse
     */
    public function updateAuthorizationAttribute($authorizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAuthorizationAttributeWithOptions($authorizationId, $request, $headers, $runtime);
    }

    /**
     * 修改Explorer任务
     *
     * @param request - UpdateExplorerTaskAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExplorerTaskAttributeResponse
     *
     * @param string                             $explorerTaskId
     * @param UpdateExplorerTaskAttributeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateExplorerTaskAttributeResponse
     */
    public function updateExplorerTaskAttributeWithOptions($explorerTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoApply) {
            @$body['autoApply'] = $request->autoApply;
        }

        if (null !== $request->explorerTaskName) {
            @$body['explorerTaskName'] = $request->explorerTaskName;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExplorerTaskAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerTask/' . Url::percentEncode($explorerTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExplorerTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Explorer任务
     *
     * @param request - UpdateExplorerTaskAttributeRequest
     *
     * @returns UpdateExplorerTaskAttributeResponse
     *
     * @param string                             $explorerTaskId
     * @param UpdateExplorerTaskAttributeRequest $request
     *
     * @return UpdateExplorerTaskAttributeResponse
     */
    public function updateExplorerTaskAttribute($explorerTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExplorerTaskAttributeWithOptions($explorerTaskId, $request, $headers, $runtime);
    }

    /**
     * 修改分组.
     *
     * @param request - UpdateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupResponse
     *
     * @param string             $groupId
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->autoTrigger) {
            @$body['autoTrigger'] = $request->autoTrigger;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->forcedSetting) {
            @$body['forcedSetting'] = $request->forcedSetting;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->notifyConfig) {
            @$body['notifyConfig'] = $request->notifyConfig;
        }

        if (null !== $request->notifyOperationTypes) {
            @$body['notifyOperationTypes'] = $request->notifyOperationTypes;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->reportExportField) {
            @$body['reportExportField'] = $request->reportExportField;
        }

        if (null !== $request->reportExportPath) {
            @$body['reportExportPath'] = $request->reportExportPath;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->triggerConfig) {
            @$body['triggerConfig'] = $request->triggerConfig;
        }

        if (null !== $request->triggerResourceType) {
            @$body['triggerResourceType'] = $request->triggerResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/' . Url::percentEncode($groupId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改分组.
     *
     * @param request - UpdateGroupRequest
     *
     * @returns UpdateGroupResponse
     *
     * @param string             $groupId
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 更新模版.
     *
     * @param request - UpdateModuleAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModuleAttributeResponse
     *
     * @param string                       $moduleId
     * @param UpdateModuleAttributeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateModuleAttributeResponse
     */
    public function updateModuleAttributeWithOptions($moduleId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->statePath) {
            @$body['statePath'] = $request->statePath;
        }

        if (null !== $request->versionStrategy) {
            @$body['versionStrategy'] = $request->versionStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModuleAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/modules/' . Url::percentEncode($moduleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新模版.
     *
     * @param request - UpdateModuleAttributeRequest
     *
     * @returns UpdateModuleAttributeResponse
     *
     * @param string                       $moduleId
     * @param UpdateModuleAttributeRequest $request
     *
     * @return UpdateModuleAttributeResponse
     */
    public function updateModuleAttribute($moduleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModuleAttributeWithOptions($moduleId, $request, $headers, $runtime);
    }

    /**
     * 更新参数集.
     *
     * @param request - UpdateParameterSetAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateParameterSetAttributeResponse
     *
     * @param string                             $parameterSetId
     * @param UpdateParameterSetAttributeRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateParameterSetAttributeResponse
     */
    public function updateParameterSetAttributeWithOptions($parameterSetId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateParameterSetAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/parameterSets/' . Url::percentEncode($parameterSetId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateParameterSetAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新参数集.
     *
     * @param request - UpdateParameterSetAttributeRequest
     *
     * @returns UpdateParameterSetAttributeResponse
     *
     * @param string                             $parameterSetId
     * @param UpdateParameterSetAttributeRequest $request
     *
     * @return UpdateParameterSetAttributeResponse
     */
    public function updateParameterSetAttribute($parameterSetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateParameterSetAttributeWithOptions($parameterSetId, $request, $headers, $runtime);
    }

    /**
     * 修改项目.
     *
     * @param request - UpdateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $projectId
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProject',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改项目.
     *
     * @param request - UpdateProjectRequest
     *
     * @returns UpdateProjectResponse
     *
     * @param string               $projectId
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 更新消息发布者.
     *
     * @param request - UpdateRabbitmqPublisherAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRabbitmqPublisherAttributeResponse
     *
     * @param string                                  $publisherId
     * @param UpdateRabbitmqPublisherAttributeRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateRabbitmqPublisherAttributeResponse
     */
    public function updateRabbitmqPublisherAttributeWithOptions($publisherId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->exchangeName) {
            @$body['exchangeName'] = $request->exchangeName;
        }

        if (null !== $request->exchangeType) {
            @$body['exchangeType'] = $request->exchangeType;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRabbitmqPublisherAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/publishers/' . Url::percentEncode($publisherId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRabbitmqPublisherAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新消息发布者.
     *
     * @param request - UpdateRabbitmqPublisherAttributeRequest
     *
     * @returns UpdateRabbitmqPublisherAttributeResponse
     *
     * @param string                                  $publisherId
     * @param UpdateRabbitmqPublisherAttributeRequest $request
     *
     * @return UpdateRabbitmqPublisherAttributeResponse
     */
    public function updateRabbitmqPublisherAttribute($publisherId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRabbitmqPublisherAttributeWithOptions($publisherId, $request, $headers, $runtime);
    }

    /**
     * 修改RAM策略导出任务
     *
     * @param request - UpdateRamPolicyExportTaskAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRamPolicyExportTaskAttributeResponse
     *
     * @param string                                    $ramPolicyExportTaskId
     * @param UpdateRamPolicyExportTaskAttributeRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateRamPolicyExportTaskAttributeResponse
     */
    public function updateRamPolicyExportTaskAttributeWithOptions($ramPolicyExportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationAccountIds) {
            @$body['authorizationAccountIds'] = $request->authorizationAccountIds;
        }

        if (null !== $request->authorizationActions) {
            @$body['authorizationActions'] = $request->authorizationActions;
        }

        if (null !== $request->authorizationRegionIds) {
            @$body['authorizationRegionIds'] = $request->authorizationRegionIds;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRamPolicyExportTaskAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/ramPolicyExportTasks/' . Url::percentEncode($ramPolicyExportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRamPolicyExportTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改RAM策略导出任务
     *
     * @param request - UpdateRamPolicyExportTaskAttributeRequest
     *
     * @returns UpdateRamPolicyExportTaskAttributeResponse
     *
     * @param string                                    $ramPolicyExportTaskId
     * @param UpdateRamPolicyExportTaskAttributeRequest $request
     *
     * @return UpdateRamPolicyExportTaskAttributeResponse
     */
    public function updateRamPolicyExportTaskAttribute($ramPolicyExportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRamPolicyExportTaskAttributeWithOptions($ramPolicyExportTaskId, $request, $headers, $runtime);
    }

    /**
     * 更新导出任务
     *
     * @param request - UpdateResourceExportTaskAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceExportTaskAttributeResponse
     *
     * @param string                                   $exportTaskId
     * @param UpdateResourceExportTaskAttributeRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateResourceExportTaskAttributeResponse
     */
    public function updateResourceExportTaskAttributeWithOptions($exportTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->configPath) {
            @$body['configPath'] = $request->configPath;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->excludeRules) {
            @$body['excludeRules'] = $request->excludeRules;
        }

        if (null !== $request->exportToModule) {
            @$body['exportToModule'] = $request->exportToModule;
        }

        if (null !== $request->includeRules) {
            @$body['includeRules'] = $request->includeRules;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceExportTaskAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/exportTasks/' . Url::percentEncode($exportTaskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceExportTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新导出任务
     *
     * @param request - UpdateResourceExportTaskAttributeRequest
     *
     * @returns UpdateResourceExportTaskAttributeResponse
     *
     * @param string                                   $exportTaskId
     * @param UpdateResourceExportTaskAttributeRequest $request
     *
     * @return UpdateResourceExportTaskAttributeResponse
     */
    public function updateResourceExportTaskAttribute($exportTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceExportTaskAttributeWithOptions($exportTaskId, $request, $headers, $runtime);
    }

    /**
     * 修改任务
     *
     * @param request - UpdateTaskAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTaskAttributeResponse
     *
     * @param string                     $taskId
     * @param UpdateTaskAttributeRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateTaskAttributeResponse
     */
    public function updateTaskAttributeWithOptions($taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoApply) {
            @$body['autoApply'] = $request->autoApply;
        }

        if (null !== $request->autoDestroy) {
            @$body['autoDestroy'] = $request->autoDestroy;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->groupInfo) {
            @$body['groupInfo'] = $request->groupInfo;
        }

        if (null !== $request->initModuleState) {
            @$body['initModuleState'] = $request->initModuleState;
        }

        if (null !== $request->moduleId) {
            @$body['moduleId'] = $request->moduleId;
        }

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->protectionStrategy) {
            @$body['protectionStrategy'] = $request->protectionStrategy;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->skipPropertyValidation) {
            @$body['skipPropertyValidation'] = $request->skipPropertyValidation;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
        }

        if (null !== $request->triggerValue) {
            @$body['triggerValue'] = $request->triggerValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTaskAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTaskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改任务
     *
     * @param request - UpdateTaskAttributeRequest
     *
     * @returns UpdateTaskAttributeResponse
     *
     * @param string                     $taskId
     * @param UpdateTaskAttributeRequest $request
     *
     * @return UpdateTaskAttributeResponse
     */
    public function updateTaskAttribute($taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskAttributeWithOptions($taskId, $request, $headers, $runtime);
    }

    /**
     * 修改分组优先级配置.
     *
     * @param request - UpdateTaskPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTaskPolicyResponse
     *
     * @param string                  $groupId
     * @param UpdateTaskPolicyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTaskPolicyResponse
     */
    public function updateTaskPolicyWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->taskPolicies) {
            @$body['taskPolicies'] = $request->taskPolicies;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTaskPolicy',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/group/task/policy/' . Url::percentEncode($groupId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTaskPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改分组优先级配置.
     *
     * @param request - UpdateTaskPolicyRequest
     *
     * @returns UpdateTaskPolicyResponse
     *
     * @param string                  $groupId
     * @param UpdateTaskPolicyRequest $request
     *
     * @return UpdateTaskPolicyResponse
     */
    public function updateTaskPolicy($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTaskPolicyWithOptions($groupId, $request, $headers, $runtime);
    }
}
