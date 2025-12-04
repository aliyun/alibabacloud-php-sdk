<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AddSharedAccountsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AddSharedAccountsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\AssociateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CancelResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryNamespaceRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateRegistryNamespaceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteRegistryNamespaceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DeleteTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\DissociateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteRegistryModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformApplyRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformApplyResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformDestroyRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformDestroyResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformPlanRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ExecuteTerraformPlanResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GenerateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GenerateModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetExecuteStateResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetRegistryNamespaceResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleExamplesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleExamplesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleVersionsResponse;
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
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProductsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProductsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListProjectShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModulesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModulesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModuleVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryModuleVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryNamespacesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListRegistryNamespacesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTaskVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceTypesShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTerraformProviderVersionsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\OperateJobResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\PublishRegistryModuleVersionRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\PublishRegistryModuleVersionResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveSharedAccountsRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveSharedAccountsResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\RemoveSharedAccountsShrinkRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateExplorerModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateExplorerModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryModuleAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryModuleAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryNamespaceAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateRegistryNamespaceAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskAttributeResponse;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ValidateModuleRequest;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ValidateModuleResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IaCService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
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
     * 新增共享账号信息.
     *
     * @param request - AddSharedAccountsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSharedAccountsResponse
     *
     * @param AddSharedAccountsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return AddSharedAccountsResponse
     */
    public function addSharedAccountsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountIds) {
            @$body['accountIds'] = $request->accountIds;
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
            'action' => 'AddSharedAccounts',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/sharedAccounts',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增共享账号信息.
     *
     * @param request - AddSharedAccountsRequest
     *
     * @returns AddSharedAccountsResponse
     *
     * @param AddSharedAccountsRequest $request
     *
     * @return AddSharedAccountsResponse
     */
    public function addSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addSharedAccountsWithOptions($request, $headers, $runtime);
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
     * 创建模板
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

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
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
     * 创建模板
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
     * 创建模板版本.
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
     * 创建模板版本.
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
     * 创建RegistryModule.
     *
     * @param request - CreateRegistryModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRegistryModuleResponse
     *
     * @param CreateRegistryModuleRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateRegistryModuleResponse
     */
    public function createRegistryModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$body['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->provider) {
            @$body['provider'] = $request->provider;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建RegistryModule.
     *
     * @param request - CreateRegistryModuleRequest
     *
     * @returns CreateRegistryModuleResponse
     *
     * @param CreateRegistryModuleRequest $request
     *
     * @return CreateRegistryModuleResponse
     */
    public function createRegistryModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRegistryModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建工作空间.
     *
     * @param request - CreateRegistryNamespaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRegistryNamespaceResponse
     *
     * @param CreateRegistryNamespaceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRegistryNamespaceResponse
     */
    public function createRegistryNamespaceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->maintainer) {
            @$body['maintainer'] = $request->maintainer;
        }

        if (null !== $request->namespaceName) {
            @$body['namespaceName'] = $request->namespaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRegistryNamespace',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRegistryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作空间.
     *
     * @param request - CreateRegistryNamespaceRequest
     *
     * @returns CreateRegistryNamespaceResponse
     *
     * @param CreateRegistryNamespaceRequest $request
     *
     * @return CreateRegistryNamespaceResponse
     */
    public function createRegistryNamespace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRegistryNamespaceWithOptions($request, $headers, $runtime);
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

        if (null !== $request->description) {
            @$body['description'] = $request->description;
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

        if (null !== $request->protectionStrategy) {
            @$body['protectionStrategy'] = $request->protectionStrategy;
        }

        if (null !== $request->ramRole) {
            @$body['ramRole'] = $request->ramRole;
        }

        if (null !== $request->skipPropertyValidation) {
            @$body['skipPropertyValidation'] = $request->skipPropertyValidation;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
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
     * 删除模板
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
     * 删除模板
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
     * 删除RegistryModule.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistryModuleResponse
     *
     * @param string         $namespaceName
     * @param string         $moduleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRegistryModuleResponse
     */
    public function deleteRegistryModuleWithOptions($namespaceName, $moduleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除RegistryModule.
     *
     * @returns DeleteRegistryModuleResponse
     *
     * @param string $namespaceName
     * @param string $moduleName
     *
     * @return DeleteRegistryModuleResponse
     */
    public function deleteRegistryModule($namespaceName, $moduleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRegistryModuleWithOptions($namespaceName, $moduleName, $headers, $runtime);
    }

    /**
     * 删除RegistryModule版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistryModuleVersionResponse
     *
     * @param string         $namespaceName
     * @param string         $moduleName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRegistryModuleVersionResponse
     */
    public function deleteRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRegistryModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '/' . Url::percentEncode($version) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRegistryModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除RegistryModule版本.
     *
     * @returns DeleteRegistryModuleVersionResponse
     *
     * @param string $namespaceName
     * @param string $moduleName
     * @param string $version
     *
     * @return DeleteRegistryModuleVersionResponse
     */
    public function deleteRegistryModuleVersion($namespaceName, $moduleName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $headers, $runtime);
    }

    /**
     * 删除工作空间.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRegistryNamespaceResponse
     *
     * @param string         $namespaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRegistryNamespaceResponse
     */
    public function deleteRegistryNamespaceWithOptions($namespaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRegistryNamespace',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace/' . Url::percentEncode($namespaceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRegistryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作空间.
     *
     * @returns DeleteRegistryNamespaceResponse
     *
     * @param string $namespaceName
     *
     * @return DeleteRegistryNamespaceResponse
     */
    public function deleteRegistryNamespace($namespaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRegistryNamespaceWithOptions($namespaceName, $headers, $runtime);
    }

    /**
     * 删除资源导出任务
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
     * 删除资源导出任务
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
     * 执行RegistryModule.
     *
     * @param request - ExecuteRegistryModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteRegistryModuleResponse
     *
     * @param string                       $namespaceName
     * @param string                       $moduleName
     * @param ExecuteRegistryModuleRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteRegistryModuleResponse
     */
    public function executeRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '/execution',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行RegistryModule.
     *
     * @param request - ExecuteRegistryModuleRequest
     *
     * @returns ExecuteRegistryModuleResponse
     *
     * @param string                       $namespaceName
     * @param string                       $moduleName
     * @param ExecuteRegistryModuleRequest $request
     *
     * @return ExecuteRegistryModuleResponse
     */
    public function executeRegistryModule($namespaceName, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeRegistryModuleWithOptions($namespaceName, $moduleName, $request, $headers, $runtime);
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
     * 执行TerraformApply.
     *
     * @param request - ExecuteTerraformApplyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTerraformApplyResponse
     *
     * @param ExecuteTerraformApplyRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExecuteTerraformApplyResponse
     */
    public function executeTerraformApplyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->stateId) {
            @$body['stateId'] = $request->stateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTerraformApply',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/apply',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTerraformApplyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行TerraformApply.
     *
     * @param request - ExecuteTerraformApplyRequest
     *
     * @returns ExecuteTerraformApplyResponse
     *
     * @param ExecuteTerraformApplyRequest $request
     *
     * @return ExecuteTerraformApplyResponse
     */
    public function executeTerraformApply($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTerraformApplyWithOptions($request, $headers, $runtime);
    }

    /**
     * 执行TerraformDestroy.
     *
     * @param request - ExecuteTerraformDestroyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTerraformDestroyResponse
     *
     * @param ExecuteTerraformDestroyRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ExecuteTerraformDestroyResponse
     */
    public function executeTerraformDestroyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->stateId) {
            @$body['stateId'] = $request->stateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTerraformDestroy',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/destroy',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTerraformDestroyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行TerraformDestroy.
     *
     * @param request - ExecuteTerraformDestroyRequest
     *
     * @returns ExecuteTerraformDestroyResponse
     *
     * @param ExecuteTerraformDestroyRequest $request
     *
     * @return ExecuteTerraformDestroyResponse
     */
    public function executeTerraformDestroy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTerraformDestroyWithOptions($request, $headers, $runtime);
    }

    /**
     * 执行TerraformPlan.
     *
     * @param request - ExecuteTerraformPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTerraformPlanResponse
     *
     * @param ExecuteTerraformPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ExecuteTerraformPlanResponse
     */
    public function executeTerraformPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->stateId) {
            @$body['stateId'] = $request->stateId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTerraformPlan',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/plan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteTerraformPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行TerraformPlan.
     *
     * @param request - ExecuteTerraformPlanRequest
     *
     * @returns ExecuteTerraformPlanResponse
     *
     * @param ExecuteTerraformPlanRequest $request
     *
     * @return ExecuteTerraformPlanResponse
     */
    public function executeTerraformPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeTerraformPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 生成模板
     *
     * @param request - GenerateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateModuleResponse
     *
     * @param GenerateModuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateModuleResponse
     */
    public function generateModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->generateSource) {
            @$body['generateSource'] = $request->generateSource;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        if (null !== $request->syntax) {
            @$body['syntax'] = $request->syntax;
        }

        if (null !== $request->template) {
            @$body['template'] = $request->template;
        }

        if (null !== $request->terraformProviderVersion) {
            @$body['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformResourceType) {
            @$body['terraformResourceType'] = $request->terraformResourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorer/generate/module',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenerateModuleResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 生成模板
     *
     * @param request - GenerateModuleRequest
     *
     * @returns GenerateModuleResponse
     *
     * @param GenerateModuleRequest $request
     *
     * @return GenerateModuleResponse
     */
    public function generateModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateModuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Terraform运行结果.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecuteStateResponse
     *
     * @param string         $stateId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExecuteStateResponse
     */
    public function getExecuteStateWithOptions($stateId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExecuteState',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/terraform/execution/' . Url::percentEncode($stateId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExecuteStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Terraform运行结果.
     *
     * @returns GetExecuteStateResponse
     *
     * @param string $stateId
     *
     * @return GetExecuteStateResponse
     */
    public function getExecuteState($stateId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExecuteStateWithOptions($stateId, $headers, $runtime);
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
     * 获取模板详情.
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
     * 获取模板详情.
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
     * 模板版本详情.
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
     * 模板版本详情.
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
     * 获取RegistryModule信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistryModuleResponse
     *
     * @param string         $namespaceName
     * @param string         $moduleName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegistryModuleResponse
     */
    public function getRegistryModuleWithOptions($namespaceName, $moduleName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegistryModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegistryModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RegistryModule信息.
     *
     * @returns GetRegistryModuleResponse
     *
     * @param string $namespaceName
     * @param string $moduleName
     *
     * @return GetRegistryModuleResponse
     */
    public function getRegistryModule($namespaceName, $moduleName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegistryModuleWithOptions($namespaceName, $moduleName, $headers, $runtime);
    }

    /**
     * 获取RegistryModule版本信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistryModuleVersionResponse
     *
     * @param string         $namespaceName
     * @param string         $moduleName
     * @param string         $version
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegistryModuleVersionResponse
     */
    public function getRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegistryModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '/' . Url::percentEncode($version) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegistryModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RegistryModule版本信息.
     *
     * @returns GetRegistryModuleVersionResponse
     *
     * @param string $namespaceName
     * @param string $moduleName
     * @param string $version
     *
     * @return GetRegistryModuleVersionResponse
     */
    public function getRegistryModuleVersion($namespaceName, $moduleName, $version)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegistryModuleVersionWithOptions($namespaceName, $moduleName, $version, $headers, $runtime);
    }

    /**
     * 获取工作空间信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegistryNamespaceResponse
     *
     * @param string         $namespaceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegistryNamespaceResponse
     */
    public function getRegistryNamespaceWithOptions($namespaceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRegistryNamespace',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace/' . Url::percentEncode($namespaceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRegistryNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间信息.
     *
     * @returns GetRegistryNamespaceResponse
     *
     * @param string $namespaceName
     *
     * @return GetRegistryNamespaceResponse
     */
    public function getRegistryNamespace($namespaceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegistryNamespaceWithOptions($namespaceName, $headers, $runtime);
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
     * 获取资源类型信息.
     *
     * @param request - GetResourceTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceTypeResponse
     *
     * @param string                 $resourceType
     * @param GetResourceTypeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($resourceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->filterReadOnly) {
            @$query['filterReadOnly'] = $request->filterReadOnly;
        }

        if (null !== $request->terraformProviderVersion) {
            @$query['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceType',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceType/' . Url::percentEncode($resourceType) . '',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取资源类型信息.
     *
     * @param request - GetResourceTypeRequest
     *
     * @returns GetResourceTypeResponse
     *
     * @param string                 $resourceType
     * @param GetResourceTypeRequest $request
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType($resourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceTypeWithOptions($resourceType, $request, $headers, $runtime);
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
     * 获取Explorer的egistryModule版本示例列表.
     *
     * @param request - ListExplorerRegistryModuleExamplesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerRegistryModuleExamplesResponse
     *
     * @param ListExplorerRegistryModuleExamplesRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListExplorerRegistryModuleExamplesResponse
     */
    public function listExplorerRegistryModuleExamplesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exampleName) {
            @$query['exampleName'] = $request->exampleName;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->moduleVersion) {
            @$query['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerRegistryModuleExamples',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerRegistryModule/example',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerRegistryModuleExamplesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取Explorer的egistryModule版本示例列表.
     *
     * @param request - ListExplorerRegistryModuleExamplesRequest
     *
     * @returns ListExplorerRegistryModuleExamplesResponse
     *
     * @param ListExplorerRegistryModuleExamplesRequest $request
     *
     * @return ListExplorerRegistryModuleExamplesResponse
     */
    public function listExplorerRegistryModuleExamples($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerRegistryModuleExamplesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Explorer的egistryModule版本列表.
     *
     * @param request - ListExplorerRegistryModuleVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerRegistryModuleVersionsResponse
     *
     * @param ListExplorerRegistryModuleVersionsRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListExplorerRegistryModuleVersionsResponse
     */
    public function listExplorerRegistryModuleVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->moduleVersion) {
            @$query['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerRegistryModuleVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerRegistryModule/version',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerRegistryModuleVersionsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取Explorer的egistryModule版本列表.
     *
     * @param request - ListExplorerRegistryModuleVersionsRequest
     *
     * @returns ListExplorerRegistryModuleVersionsResponse
     *
     * @param ListExplorerRegistryModuleVersionsRequest $request
     *
     * @return ListExplorerRegistryModuleVersionsResponse
     */
    public function listExplorerRegistryModuleVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerRegistryModuleVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取Explorer的Registry Module列表.
     *
     * @param request - ListExplorerRegistryModulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExplorerRegistryModulesResponse
     *
     * @param ListExplorerRegistryModulesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListExplorerRegistryModulesResponse
     */
    public function listExplorerRegistryModulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExplorerRegistryModules',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerRegistryModule',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListExplorerRegistryModulesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取Explorer的Registry Module列表.
     *
     * @param request - ListExplorerRegistryModulesRequest
     *
     * @returns ListExplorerRegistryModulesResponse
     *
     * @param ListExplorerRegistryModulesRequest $request
     *
     * @return ListExplorerRegistryModulesResponse
     */
    public function listExplorerRegistryModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExplorerRegistryModulesWithOptions($request, $headers, $runtime);
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
        if (null !== $request->jobType) {
            @$query['jobType'] = $request->jobType;
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
     * 模板版本列表.
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
     * 模板版本列表.
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
     * 列举模板
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
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
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
     * 列举模板
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
     * 所有产品列表.
     *
     * @param request - ListProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
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

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->supportTerraformer) {
            @$query['supportTerraformer'] = $request->supportTerraformer;
        }

        if (null !== $request->terraformProviderVersion) {
            @$query['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/products',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 所有产品列表.
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
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
     * 获取RegistryModule版本列表.
     *
     * @param request - ListRegistryModuleVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistryModuleVersionsResponse
     *
     * @param ListRegistryModuleVersionsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListRegistryModuleVersionsResponse
     */
    public function listRegistryModuleVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->moduleName) {
            @$query['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistryModuleVersions',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegistryModuleVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RegistryModule版本列表.
     *
     * @param request - ListRegistryModuleVersionsRequest
     *
     * @returns ListRegistryModuleVersionsResponse
     *
     * @param ListRegistryModuleVersionsRequest $request
     *
     * @return ListRegistryModuleVersionsResponse
     */
    public function listRegistryModuleVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegistryModuleVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取RegistryModule列表.
     *
     * @param request - ListRegistryModulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistryModulesResponse
     *
     * @param ListRegistryModulesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListRegistryModulesResponse
     */
    public function listRegistryModulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->namespaceName) {
            @$query['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistryModules',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegistryModulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取RegistryModule列表.
     *
     * @param request - ListRegistryModulesRequest
     *
     * @returns ListRegistryModulesResponse
     *
     * @param ListRegistryModulesRequest $request
     *
     * @return ListRegistryModulesResponse
     */
    public function listRegistryModules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegistryModulesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取工作空间列表.
     *
     * @param request - ListRegistryNamespacesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegistryNamespacesResponse
     *
     * @param ListRegistryNamespacesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRegistryNamespacesResponse
     */
    public function listRegistryNamespacesWithOptions($request, $headers, $runtime)
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

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRegistryNamespaces',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegistryNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作空间列表.
     *
     * @param request - ListRegistryNamespacesRequest
     *
     * @returns ListRegistryNamespacesResponse
     *
     * @param ListRegistryNamespacesRequest $request
     *
     * @return ListRegistryNamespacesResponse
     */
    public function listRegistryNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegistryNamespacesWithOptions($request, $headers, $runtime);
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
     * 资源类型列表.
     *
     * @param tmpReq - ListResourceTypesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListResourceTypesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->terraformResourceTypes) {
            $request->terraformResourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->terraformResourceTypes, 'terraformResourceTypes', 'simple');
        }

        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['acceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->product) {
            @$query['product'] = $request->product;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->subcategory) {
            @$query['subcategory'] = $request->subcategory;
        }

        if (null !== $request->supportTerraformer) {
            @$query['supportTerraformer'] = $request->supportTerraformer;
        }

        if (null !== $request->terraformProviderVersion) {
            @$query['terraformProviderVersion'] = $request->terraformProviderVersion;
        }

        if (null !== $request->terraformResourceTypesShrink) {
            @$query['terraformResourceTypes'] = $request->terraformResourceTypesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTypes',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceTypes',
            'method' => 'GET',
            'authType' => 'Anonymous',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
    }

    /**
     * 资源类型列表.
     *
     * @param request - ListResourceTypesRequest
     *
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $request
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceTypesWithOptions($request, $headers, $runtime);
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
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'tag', 'json');
        }

        $query = [];
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

        return ListTerraformProviderVersionsResponse::fromMap($this->doROARequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->pathname, $params->bodyType, $req, $runtime));
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
     * 发布RegistryModule版本.
     *
     * @param request - PublishRegistryModuleVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRegistryModuleVersionResponse
     *
     * @param PublishRegistryModuleVersionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return PublishRegistryModuleVersionResponse
     */
    public function publishRegistryModuleVersionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->moduleName) {
            @$body['moduleName'] = $request->moduleName;
        }

        if (null !== $request->namespaceName) {
            @$body['namespaceName'] = $request->namespaceName;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishRegistryModuleVersion',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModuleVersion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PublishRegistryModuleVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布RegistryModule版本.
     *
     * @param request - PublishRegistryModuleVersionRequest
     *
     * @returns PublishRegistryModuleVersionResponse
     *
     * @param PublishRegistryModuleVersionRequest $request
     *
     * @return PublishRegistryModuleVersionResponse
     */
    public function publishRegistryModuleVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRegistryModuleVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除共享账号信息.
     *
     * @param tmpReq - RemoveSharedAccountsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSharedAccountsResponse
     *
     * @param RemoveSharedAccountsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveSharedAccountsResponse
     */
    public function removeSharedAccountsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveSharedAccountsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'accountIds', 'simple');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['accountIds'] = $request->accountIdsShrink;
        }

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
            'action' => 'RemoveSharedAccounts',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/sharedAccounts',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveSharedAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除共享账号信息.
     *
     * @param request - RemoveSharedAccountsRequest
     *
     * @returns RemoveSharedAccountsResponse
     *
     * @param RemoveSharedAccountsRequest $request
     *
     * @return RemoveSharedAccountsResponse
     */
    public function removeSharedAccounts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSharedAccountsWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改ExplorerModule.
     *
     * @param request - UpdateExplorerModuleAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExplorerModuleAttributeResponse
     *
     * @param string                               $explorerModuleId
     * @param UpdateExplorerModuleAttributeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateExplorerModuleAttributeResponse
     */
    public function updateExplorerModuleAttributeWithOptions($explorerModuleId, $request, $headers, $runtime)
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
            'action' => 'UpdateExplorerModuleAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/explorerModule/' . Url::percentEncode($explorerModuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateExplorerModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改ExplorerModule.
     *
     * @param request - UpdateExplorerModuleAttributeRequest
     *
     * @returns UpdateExplorerModuleAttributeResponse
     *
     * @param string                               $explorerModuleId
     * @param UpdateExplorerModuleAttributeRequest $request
     *
     * @return UpdateExplorerModuleAttributeResponse
     */
    public function updateExplorerModuleAttribute($explorerModuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateExplorerModuleAttributeWithOptions($explorerModuleId, $request, $headers, $runtime);
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
     * 更新模板
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

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        if (null !== $request->statePath) {
            @$body['statePath'] = $request->statePath;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
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
     * 更新模板
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
     * 修改RegistryModule.
     *
     * @param request - UpdateRegistryModuleAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRegistryModuleAttributeResponse
     *
     * @param string                               $namespaceName
     * @param string                               $moduleName
     * @param UpdateRegistryModuleAttributeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateRegistryModuleAttributeResponse
     */
    public function updateRegistryModuleAttributeWithOptions($namespaceName, $moduleName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRegistryModuleAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryModule/' . Url::percentEncode($namespaceName) . '/' . Url::percentEncode($moduleName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRegistryModuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改RegistryModule.
     *
     * @param request - UpdateRegistryModuleAttributeRequest
     *
     * @returns UpdateRegistryModuleAttributeResponse
     *
     * @param string                               $namespaceName
     * @param string                               $moduleName
     * @param UpdateRegistryModuleAttributeRequest $request
     *
     * @return UpdateRegistryModuleAttributeResponse
     */
    public function updateRegistryModuleAttribute($namespaceName, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRegistryModuleAttributeWithOptions($namespaceName, $moduleName, $request, $headers, $runtime);
    }

    /**
     * 修改工作空间.
     *
     * @param request - UpdateRegistryNamespaceAttributeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRegistryNamespaceAttributeResponse
     *
     * @param string                                  $namespaceName
     * @param UpdateRegistryNamespaceAttributeRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateRegistryNamespaceAttributeResponse
     */
    public function updateRegistryNamespaceAttributeWithOptions($namespaceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acl) {
            @$body['acl'] = $request->acl;
        }

        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRegistryNamespaceAttribute',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/registryNamespace/' . Url::percentEncode($namespaceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRegistryNamespaceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改工作空间.
     *
     * @param request - UpdateRegistryNamespaceAttributeRequest
     *
     * @returns UpdateRegistryNamespaceAttributeResponse
     *
     * @param string                                  $namespaceName
     * @param UpdateRegistryNamespaceAttributeRequest $request
     *
     * @return UpdateRegistryNamespaceAttributeResponse
     */
    public function updateRegistryNamespaceAttribute($namespaceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRegistryNamespaceAttributeWithOptions($namespaceName, $request, $headers, $runtime);
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

        if (null !== $request->description) {
            @$body['description'] = $request->description;
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

        if (null !== $request->moduleVersion) {
            @$body['moduleVersion'] = $request->moduleVersion;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
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

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->terraformVersion) {
            @$body['terraformVersion'] = $request->terraformVersion;
        }

        if (null !== $request->triggerStrategy) {
            @$body['triggerStrategy'] = $request->triggerStrategy;
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
     * 模版预检
     *
     * @param request - ValidateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateModuleResponse
     *
     * @param ValidateModuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ValidateModuleResponse
     */
    public function validateModuleWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->codeMap) {
            @$body['codeMap'] = $request->codeMap;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/module/validation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield ValidateModuleResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * 模版预检
     *
     * @param request - ValidateModuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ValidateModuleResponse
     *
     * @param ValidateModuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ValidateModuleResponse
     */
    public function validateModuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->codeMap) {
            @$body['codeMap'] = $request->codeMap;
        }

        if (null !== $request->source) {
            @$body['source'] = $request->source;
        }

        if (null !== $request->sourcePath) {
            @$body['sourcePath'] = $request->sourcePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ValidateModule',
            'version' => '2021-08-06',
            'protocol' => 'HTTPS',
            'pathname' => '/module/validation',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ValidateModuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 模版预检
     *
     * @param request - ValidateModuleRequest
     *
     * @returns ValidateModuleResponse
     *
     * @param ValidateModuleRequest $request
     *
     * @return ValidateModuleResponse
     */
    public function validateModule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateModuleWithOptions($request, $headers, $runtime);
    }
}
