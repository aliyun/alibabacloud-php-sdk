<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\CreateWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\CreateWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DeleteWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DeleteWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeIdRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeIdResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeManualTaskInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeManualTaskInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeManualTaskRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeManualTaskResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeProjectRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeProjectResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeTaskInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeTaskInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeTaskRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\GetInstanceLogRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\GetInstanceLogResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListAlertGroupsRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListAlertGroupsResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTaskInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTaskInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTasksRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTasksResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListProjectsRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListProjectsResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTaskInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTaskInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTasksRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTasksResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowDirectoriesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowDirectoriesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowsRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowsResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\OperateWorkflowInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\OperateWorkflowInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\RunWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\RunWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\UpdateWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\UpdateWorkflowResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EmrStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emrstudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建工作流
     *
     * @param request - CreateWorkflowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkflowResponse
     *
     * @param string                $projectId
     * @param CreateWorkflowRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkflowResponse
     */
    public function createWorkflowWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertGroupId) {
            @$query['alertGroupId'] = $request->alertGroupId;
        }

        if (null !== $request->alertStrategy) {
            @$query['alertStrategy'] = $request->alertStrategy;
        }

        if (null !== $request->cronExpr) {
            @$query['cronExpr'] = $request->cronExpr;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->executionType) {
            @$query['executionType'] = $request->executionType;
        }

        if (null !== $request->failureStrategy) {
            @$query['failureStrategy'] = $request->failureStrategy;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->parentDirectoryId) {
            @$query['parentDirectoryId'] = $request->parentDirectoryId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduleEndTime) {
            @$query['scheduleEndTime'] = $request->scheduleEndTime;
        }

        if (null !== $request->scheduleStartTime) {
            @$query['scheduleStartTime'] = $request->scheduleStartTime;
        }

        if (null !== $request->scheduleState) {
            @$query['scheduleState'] = $request->scheduleState;
        }

        if (null !== $request->taskDefinitionJson) {
            @$query['taskDefinitionJson'] = $request->taskDefinitionJson;
        }

        if (null !== $request->taskRelationJson) {
            @$query['taskRelationJson'] = $request->taskRelationJson;
        }

        if (null !== $request->timeZone) {
            @$query['timeZone'] = $request->timeZone;
        }

        if (null !== $request->timeout) {
            @$query['timeout'] = $request->timeout;
        }

        if (null !== $request->workflowInstancePriority) {
            @$query['workflowInstancePriority'] = $request->workflowInstancePriority;
        }

        if (null !== $request->workflowParams) {
            @$query['workflowParams'] = $request->workflowParams;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->taskDefinitionJsonValue) {
            @$body['taskDefinitionJsonValue'] = $request->taskDefinitionJsonValue;
        }

        if (null !== $request->taskRelationJsonValue) {
            @$body['taskRelationJsonValue'] = $request->taskRelationJsonValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkflow',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作流
     *
     * @param request - CreateWorkflowRequest
     *
     * @returns CreateWorkflowResponse
     *
     * @param string                $projectId
     * @param CreateWorkflowRequest $request
     *
     * @return CreateWorkflowResponse
     */
    public function createWorkflow($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkflowWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 删除工作流
     *
     * @param request - DeleteWorkflowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkflowResponse
     *
     * @param string                $projectId
     * @param string                $workflowId
     * @param DeleteWorkflowRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkflow',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows/' . Url::percentEncode($workflowId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作流
     *
     * @param request - DeleteWorkflowRequest
     *
     * @returns DeleteWorkflowResponse
     *
     * @param string                $projectId
     * @param string                $workflowId
     * @param DeleteWorkflowRequest $request
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflow($projectId, $workflowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime);
    }

    /**
     * 获取id关联信息.
     *
     * @param request - DescribeIdRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIdResponse
     *
     * @param DescribeIdRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DescribeIdResponse
     */
    public function describeIdWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['id'] = $request->id;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeId',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/relatedIds',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取id关联信息.
     *
     * @param request - DescribeIdRequest
     *
     * @returns DescribeIdResponse
     *
     * @param DescribeIdRequest $request
     *
     * @return DescribeIdResponse
     */
    public function describeId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取手动任务定义.
     *
     * @param request - DescribeManualTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeManualTaskResponse
     *
     * @param string                    $projectId
     * @param string                    $manualTaskId
     * @param DescribeManualTaskRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeManualTaskResponse
     */
    public function describeManualTaskWithOptions($projectId, $manualTaskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeManualTask',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/manualTasks/' . Url::percentEncode($manualTaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeManualTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取手动任务定义.
     *
     * @param request - DescribeManualTaskRequest
     *
     * @returns DescribeManualTaskResponse
     *
     * @param string                    $projectId
     * @param string                    $manualTaskId
     * @param DescribeManualTaskRequest $request
     *
     * @return DescribeManualTaskResponse
     */
    public function describeManualTask($projectId, $manualTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeManualTaskWithOptions($projectId, $manualTaskId, $request, $headers, $runtime);
    }

    /**
     * 获取手动任务实例.
     *
     * @param request - DescribeManualTaskInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeManualTaskInstanceResponse
     *
     * @param string                            $manualTaskInstanceId
     * @param string                            $projectId
     * @param DescribeManualTaskInstanceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeManualTaskInstanceResponse
     */
    public function describeManualTaskInstanceWithOptions($manualTaskInstanceId, $projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeManualTaskInstance',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/manualTaskInstances/' . Url::percentEncode($manualTaskInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeManualTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取手动任务实例.
     *
     * @param request - DescribeManualTaskInstanceRequest
     *
     * @returns DescribeManualTaskInstanceResponse
     *
     * @param string                            $manualTaskInstanceId
     * @param string                            $projectId
     * @param DescribeManualTaskInstanceRequest $request
     *
     * @return DescribeManualTaskInstanceResponse
     */
    public function describeManualTaskInstance($manualTaskInstanceId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeManualTaskInstanceWithOptions($manualTaskInstanceId, $projectId, $request, $headers, $runtime);
    }

    /**
     * 获取项目详情.
     *
     * @param request - DescribeProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProjectResponse
     *
     * @param string                 $projectId
     * @param DescribeProjectRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProjectResponse
     */
    public function describeProjectWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProject',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目详情.
     *
     * @param request - DescribeProjectRequest
     *
     * @returns DescribeProjectResponse
     *
     * @param string                 $projectId
     * @param DescribeProjectRequest $request
     *
     * @return DescribeProjectResponse
     */
    public function describeProject($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProjectWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 查询任务定义.
     *
     * @param request - DescribeTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskResponse
     *
     * @param string              $workflowId
     * @param string              $projectId
     * @param string              $taskId
     * @param DescribeTaskRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTaskResponse
     */
    public function describeTaskWithOptions($workflowId, $projectId, $taskId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTask',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows/' . Url::percentEncode($workflowId) . '/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务定义.
     *
     * @param request - DescribeTaskRequest
     *
     * @returns DescribeTaskResponse
     *
     * @param string              $workflowId
     * @param string              $projectId
     * @param string              $taskId
     * @param DescribeTaskRequest $request
     *
     * @return DescribeTaskResponse
     */
    public function describeTask($workflowId, $projectId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskWithOptions($workflowId, $projectId, $taskId, $request, $headers, $runtime);
    }

    /**
     * 获取任务实例.
     *
     * @param request - DescribeTaskInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskInstanceResponse
     *
     * @param string                      $projectId
     * @param string                      $workflowInstanceId
     * @param string                      $taskInstanceId
     * @param DescribeTaskInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeTaskInstanceResponse
     */
    public function describeTaskInstanceWithOptions($projectId, $workflowInstanceId, $taskInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTaskInstance',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows/' . Url::percentEncode($workflowInstanceId) . '/taskInstances/' . Url::percentEncode($taskInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务实例.
     *
     * @param request - DescribeTaskInstanceRequest
     *
     * @returns DescribeTaskInstanceResponse
     *
     * @param string                      $projectId
     * @param string                      $workflowInstanceId
     * @param string                      $taskInstanceId
     * @param DescribeTaskInstanceRequest $request
     *
     * @return DescribeTaskInstanceResponse
     */
    public function describeTaskInstance($projectId, $workflowInstanceId, $taskInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskInstanceWithOptions($projectId, $workflowInstanceId, $taskInstanceId, $request, $headers, $runtime);
    }

    /**
     * 获取工作流详情.
     *
     * @param request - DescribeWorkflowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWorkflowResponse
     *
     * @param string                  $projectId
     * @param string                  $workflowId
     * @param DescribeWorkflowRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWorkflowResponse
     */
    public function describeWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWorkflow',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows/' . Url::percentEncode($workflowId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流详情.
     *
     * @param request - DescribeWorkflowRequest
     *
     * @returns DescribeWorkflowResponse
     *
     * @param string                  $projectId
     * @param string                  $workflowId
     * @param DescribeWorkflowRequest $request
     *
     * @return DescribeWorkflowResponse
     */
    public function describeWorkflow($projectId, $workflowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime);
    }

    /**
     * 获取工作流实例详情.
     *
     * @param request - DescribeWorkflowInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWorkflowInstanceResponse
     *
     * @param string                          $projectId
     * @param string                          $workflowInstanceId
     * @param DescribeWorkflowInstanceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeWorkflowInstanceResponse
     */
    public function describeWorkflowInstanceWithOptions($projectId, $workflowInstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWorkflowInstance',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflowInstances/' . Url::percentEncode($workflowInstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流实例详情.
     *
     * @param request - DescribeWorkflowInstanceRequest
     *
     * @returns DescribeWorkflowInstanceResponse
     *
     * @param string                          $projectId
     * @param string                          $workflowInstanceId
     * @param DescribeWorkflowInstanceRequest $request
     *
     * @return DescribeWorkflowInstanceResponse
     */
    public function describeWorkflowInstance($projectId, $workflowInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWorkflowInstanceWithOptions($projectId, $workflowInstanceId, $request, $headers, $runtime);
    }

    /**
     * 获取实例的日志.
     *
     * @param request - GetInstanceLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceLogResponse
     *
     * @param string                $projectId
     * @param string                $instanceId
     * @param GetInstanceLogRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLogWithOptions($projectId, $instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->limit) {
            @$query['limit'] = $request->limit;
        }

        if (null !== $request->skipLineNum) {
            @$query['skipLineNum'] = $request->skipLineNum;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceLog',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/instances/' . Url::percentEncode($instanceId) . '/log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例的日志.
     *
     * @param request - GetInstanceLogRequest
     *
     * @returns GetInstanceLogResponse
     *
     * @param string                $projectId
     * @param string                $instanceId
     * @param GetInstanceLogRequest $request
     *
     * @return GetInstanceLogResponse
     */
    public function getInstanceLog($projectId, $instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceLogWithOptions($projectId, $instanceId, $request, $headers, $runtime);
    }

    /**
     * 查询告警组列表.
     *
     * @param request - ListAlertGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlertGroupsResponse
     *
     * @param string                 $projectId
     * @param ListAlertGroupsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListAlertGroupsResponse
     */
    public function listAlertGroupsWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlertGroups',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/alert-groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlertGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询告警组列表.
     *
     * @param request - ListAlertGroupsRequest
     *
     * @returns ListAlertGroupsResponse
     *
     * @param string                 $projectId
     * @param ListAlertGroupsRequest $request
     *
     * @return ListAlertGroupsResponse
     */
    public function listAlertGroups($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertGroupsWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 获取手动任务实例列表.
     *
     * @param request - ListManualTaskInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListManualTaskInstancesResponse
     *
     * @param string                         $projectId
     * @param ListManualTaskInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListManualTaskInstancesResponse
     */
    public function listManualTaskInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListManualTaskInstances',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/manualTaskInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListManualTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取手动任务实例列表.
     *
     * @param request - ListManualTaskInstancesRequest
     *
     * @returns ListManualTaskInstancesResponse
     *
     * @param string                         $projectId
     * @param ListManualTaskInstancesRequest $request
     *
     * @return ListManualTaskInstancesResponse
     */
    public function listManualTaskInstances($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listManualTaskInstancesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 查询手动任务定义列表.
     *
     * @param request - ListManualTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListManualTasksResponse
     *
     * @param string                 $projectId
     * @param ListManualTasksRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListManualTasksResponse
     */
    public function listManualTasksWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListManualTasks',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/manualTasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListManualTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询手动任务定义列表.
     *
     * @param request - ListManualTasksRequest
     *
     * @returns ListManualTasksResponse
     *
     * @param string                 $projectId
     * @param ListManualTasksRequest $request
     *
     * @return ListManualTasksResponse
     */
    public function listManualTasks($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listManualTasksWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 获取项目详情.
     *
     * @param request - ListProjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目详情.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询调度资源组列表.
     *
     * @param request - ListResourceGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupsResponse
     *
     * @param ListResourceGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupName) {
            @$query['resourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->resourceGroupType) {
            @$query['resourceGroupType'] = $request->resourceGroupType;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroups',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/resourcegroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询调度资源组列表.
     *
     * @param request - ListResourceGroupsRequest
     *
     * @returns ListResourceGroupsResponse
     *
     * @param ListResourceGroupsRequest $request
     *
     * @return ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取任务实例列表.
     *
     * @param request - ListTaskInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTaskInstancesResponse
     *
     * @param string                   $projectId
     * @param ListTaskInstancesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListTaskInstancesResponse
     */
    public function listTaskInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->workflowInstanceId) {
            @$query['workflowInstanceId'] = $request->workflowInstanceId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTaskInstances',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/taskInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务实例列表.
     *
     * @param request - ListTaskInstancesRequest
     *
     * @returns ListTaskInstancesResponse
     *
     * @param string                   $projectId
     * @param ListTaskInstancesRequest $request
     *
     * @return ListTaskInstancesResponse
     */
    public function listTaskInstances($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaskInstancesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 查询任务定义列表.
     *
     * @param request - ListTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param string           $projectId
     * @param ListTasksRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->taskType) {
            @$query['taskType'] = $request->taskType;
        }

        if (null !== $request->workflowId) {
            @$query['workflowId'] = $request->workflowId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务定义列表.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param string           $projectId
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 查询工作流目录列表.
     *
     * @param request - ListWorkflowDirectoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowDirectoriesResponse
     *
     * @param string                         $projectId
     * @param ListWorkflowDirectoriesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListWorkflowDirectoriesResponse
     */
    public function listWorkflowDirectoriesWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['directoryId'] = $request->directoryId;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->parentDirectoryId) {
            @$query['parentDirectoryId'] = $request->parentDirectoryId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflowDirectories',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/directories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkflowDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询工作流目录列表.
     *
     * @param request - ListWorkflowDirectoriesRequest
     *
     * @returns ListWorkflowDirectoriesResponse
     *
     * @param string                         $projectId
     * @param ListWorkflowDirectoriesRequest $request
     *
     * @return ListWorkflowDirectoriesResponse
     */
    public function listWorkflowDirectories($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkflowDirectoriesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 获取工作流实例列表.
     *
     * @param request - ListWorkflowInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowInstancesResponse
     *
     * @param string                       $projectId
     * @param ListWorkflowInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkflowInstancesResponse
     */
    public function listWorkflowInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->workflowId) {
            @$query['workflowId'] = $request->workflowId;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflowInstances',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflowInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流实例列表.
     *
     * @param request - ListWorkflowInstancesRequest
     *
     * @returns ListWorkflowInstancesResponse
     *
     * @param string                       $projectId
     * @param ListWorkflowInstancesRequest $request
     *
     * @return ListWorkflowInstancesResponse
     */
    public function listWorkflowInstances($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkflowInstancesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 获取工作流列表.
     *
     * @param request - ListWorkflowsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowsResponse
     *
     * @param string               $projectId
     * @param ListWorkflowsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkflowsResponse
     */
    public function listWorkflowsWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchVal) {
            @$query['searchVal'] = $request->searchVal;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflows',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流列表.
     *
     * @param request - ListWorkflowsRequest
     *
     * @returns ListWorkflowsResponse
     *
     * @param string               $projectId
     * @param ListWorkflowsRequest $request
     *
     * @return ListWorkflowsResponse
     */
    public function listWorkflows($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkflowsWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 操作工作流实例.
     *
     * @param request - OperateWorkflowInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateWorkflowInstanceResponse
     *
     * @param string                         $projectId
     * @param OperateWorkflowInstanceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateWorkflowInstanceResponse
     */
    public function operateWorkflowInstanceWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->execType) {
            @$body['execType'] = $request->execType;
        }

        if (null !== $request->workflowInstanceId) {
            @$body['workflowInstanceId'] = $request->workflowInstanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateWorkflowInstance',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/executors/execute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OperateWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 操作工作流实例.
     *
     * @param request - OperateWorkflowInstanceRequest
     *
     * @returns OperateWorkflowInstanceResponse
     *
     * @param string                         $projectId
     * @param OperateWorkflowInstanceRequest $request
     *
     * @return OperateWorkflowInstanceResponse
     */
    public function operateWorkflowInstance($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->operateWorkflowInstanceWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 运行工作流
     *
     * @param request - RunWorkflowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunWorkflowResponse
     *
     * @param string             $projectId
     * @param RunWorkflowRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RunWorkflowResponse
     */
    public function runWorkflowWithOptions($projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertGroupId) {
            @$query['alertGroupId'] = $request->alertGroupId;
        }

        if (null !== $request->alertStrategy) {
            @$query['alertStrategy'] = $request->alertStrategy;
        }

        if (null !== $request->complementDependentMode) {
            @$query['complementDependentMode'] = $request->complementDependentMode;
        }

        if (null !== $request->dryRun) {
            @$query['dryRun'] = $request->dryRun;
        }

        if (null !== $request->execType) {
            @$query['execType'] = $request->execType;
        }

        if (null !== $request->expectedParallelismNumber) {
            @$query['expectedParallelismNumber'] = $request->expectedParallelismNumber;
        }

        if (null !== $request->failureStrategy) {
            @$query['failureStrategy'] = $request->failureStrategy;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->runMode) {
            @$query['runMode'] = $request->runMode;
        }

        if (null !== $request->scheduleTime) {
            @$query['scheduleTime'] = $request->scheduleTime;
        }

        if (null !== $request->startParams) {
            @$query['startParams'] = $request->startParams;
        }

        if (null !== $request->workflowId) {
            @$query['workflowId'] = $request->workflowId;
        }

        if (null !== $request->workflowInstancePriority) {
            @$query['workflowInstancePriority'] = $request->workflowInstancePriority;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunWorkflow',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/executors/run-workflow',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 运行工作流
     *
     * @param request - RunWorkflowRequest
     *
     * @returns RunWorkflowResponse
     *
     * @param string             $projectId
     * @param RunWorkflowRequest $request
     *
     * @return RunWorkflowResponse
     */
    public function runWorkflow($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runWorkflowWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * 更新工作流
     *
     * @param request - UpdateWorkflowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkflowResponse
     *
     * @param string                $projectId
     * @param string                $workflowId
     * @param UpdateWorkflowRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertGroupId) {
            @$query['alertGroupId'] = $request->alertGroupId;
        }

        if (null !== $request->alertStrategy) {
            @$query['alertStrategy'] = $request->alertStrategy;
        }

        if (null !== $request->cronExpr) {
            @$query['cronExpr'] = $request->cronExpr;
        }

        if (null !== $request->description) {
            @$query['description'] = $request->description;
        }

        if (null !== $request->executionType) {
            @$query['executionType'] = $request->executionType;
        }

        if (null !== $request->failureStrategy) {
            @$query['failureStrategy'] = $request->failureStrategy;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->parentDirectoryId) {
            @$query['parentDirectoryId'] = $request->parentDirectoryId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->scheduleEndTime) {
            @$query['scheduleEndTime'] = $request->scheduleEndTime;
        }

        if (null !== $request->scheduleStartTime) {
            @$query['scheduleStartTime'] = $request->scheduleStartTime;
        }

        if (null !== $request->scheduleState) {
            @$query['scheduleState'] = $request->scheduleState;
        }

        if (null !== $request->taskDefinitionJson) {
            @$query['taskDefinitionJson'] = $request->taskDefinitionJson;
        }

        if (null !== $request->taskRelationJson) {
            @$query['taskRelationJson'] = $request->taskRelationJson;
        }

        if (null !== $request->timeZone) {
            @$query['timeZone'] = $request->timeZone;
        }

        if (null !== $request->timeout) {
            @$query['timeout'] = $request->timeout;
        }

        if (null !== $request->workflowInstancePriority) {
            @$query['workflowInstancePriority'] = $request->workflowInstancePriority;
        }

        if (null !== $request->workflowParams) {
            @$query['workflowParams'] = $request->workflowParams;
        }

        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->taskDefinitionJsonValue) {
            @$body['taskDefinitionJsonValue'] = $request->taskDefinitionJsonValue;
        }

        if (null !== $request->taskRelationJsonValue) {
            @$body['taskRelationJsonValue'] = $request->taskRelationJsonValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkflow',
            'version' => '2024-04-30',
            'protocol' => 'HTTPS',
            'pathname' => '/dolphinscheduler/v3/projects/' . Url::percentEncode($projectId) . '/workflows/' . Url::percentEncode($workflowId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新工作流
     *
     * @param request - UpdateWorkflowRequest
     *
     * @returns UpdateWorkflowResponse
     *
     * @param string                $projectId
     * @param string                $workflowId
     * @param UpdateWorkflowRequest $request
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflow($projectId, $workflowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime);
    }
}
