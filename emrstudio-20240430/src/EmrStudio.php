<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\CreateWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\CreateWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DeleteWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DeleteWorkflowResponse;
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
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTaskInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTaskInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTasksRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListManualTasksResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListProjectsRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListProjectsResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTaskInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTaskInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTasksRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListTasksResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowsRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListWorkflowsResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\RunWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\RunWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\UpdateWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\UpdateWorkflowResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 创建工作流
     *  *
     * @param string                $projectId
     * @param CreateWorkflowRequest $request   CreateWorkflowRequest
     * @param string[]              $headers   map
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateWorkflowResponse CreateWorkflowResponse
     */
    public function createWorkflowWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertGroupId)) {
            $query['alertGroupId'] = $request->alertGroupId;
        }
        if (!Utils::isUnset($request->alertStrategy)) {
            $query['alertStrategy'] = $request->alertStrategy;
        }
        if (!Utils::isUnset($request->cronExpr)) {
            $query['cronExpr'] = $request->cronExpr;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionType)) {
            $query['executionType'] = $request->executionType;
        }
        if (!Utils::isUnset($request->failureStrategy)) {
            $query['failureStrategy'] = $request->failureStrategy;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentDirectoryId)) {
            $query['parentDirectoryId'] = $request->parentDirectoryId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduleEndTime)) {
            $query['scheduleEndTime'] = $request->scheduleEndTime;
        }
        if (!Utils::isUnset($request->scheduleStartTime)) {
            $query['scheduleStartTime'] = $request->scheduleStartTime;
        }
        if (!Utils::isUnset($request->scheduleState)) {
            $query['scheduleState'] = $request->scheduleState;
        }
        if (!Utils::isUnset($request->taskDefinitionJson)) {
            $query['taskDefinitionJson'] = $request->taskDefinitionJson;
        }
        if (!Utils::isUnset($request->taskRelationJson)) {
            $query['taskRelationJson'] = $request->taskRelationJson;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['timeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->workflowInstancePriority)) {
            $query['workflowInstancePriority'] = $request->workflowInstancePriority;
        }
        if (!Utils::isUnset($request->workflowParams)) {
            $query['workflowParams'] = $request->workflowParams;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkflow',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作流
     *  *
     * @param string                $projectId
     * @param CreateWorkflowRequest $request   CreateWorkflowRequest
     *
     * @return CreateWorkflowResponse CreateWorkflowResponse
     */
    public function createWorkflow($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkflowWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除工作流
     *  *
     * @param string                $projectId
     * @param string                $workflowId
     * @param DeleteWorkflowRequest $request    DeleteWorkflowRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkflowResponse DeleteWorkflowResponse
     */
    public function deleteWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkflow',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows/' . OpenApiUtilClient::getEncodeParam($workflowId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作流
     *  *
     * @param string                $projectId
     * @param string                $workflowId
     * @param DeleteWorkflowRequest $request    DeleteWorkflowRequest
     *
     * @return DeleteWorkflowResponse DeleteWorkflowResponse
     */
    public function deleteWorkflow($projectId, $workflowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取手动任务定义
     *  *
     * @param string                    $projectId
     * @param string                    $manualTaskId
     * @param DescribeManualTaskRequest $request      DescribeManualTaskRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return DescribeManualTaskResponse DescribeManualTaskResponse
     */
    public function describeManualTaskWithOptions($projectId, $manualTaskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeManualTask',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/manualTasks/' . OpenApiUtilClient::getEncodeParam($manualTaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeManualTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取手动任务定义
     *  *
     * @param string                    $projectId
     * @param string                    $manualTaskId
     * @param DescribeManualTaskRequest $request      DescribeManualTaskRequest
     *
     * @return DescribeManualTaskResponse DescribeManualTaskResponse
     */
    public function describeManualTask($projectId, $manualTaskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeManualTaskWithOptions($projectId, $manualTaskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取手动任务实例
     *  *
     * @param string                            $manualTaskInstanceId
     * @param string                            $projectId
     * @param DescribeManualTaskInstanceRequest $request              DescribeManualTaskInstanceRequest
     * @param string[]                          $headers              map
     * @param RuntimeOptions                    $runtime              runtime options for this request RuntimeOptions
     *
     * @return DescribeManualTaskInstanceResponse DescribeManualTaskInstanceResponse
     */
    public function describeManualTaskInstanceWithOptions($manualTaskInstanceId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeManualTaskInstance',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/manualTaskInstances/' . OpenApiUtilClient::getEncodeParam($manualTaskInstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeManualTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取手动任务实例
     *  *
     * @param string                            $manualTaskInstanceId
     * @param string                            $projectId
     * @param DescribeManualTaskInstanceRequest $request              DescribeManualTaskInstanceRequest
     *
     * @return DescribeManualTaskInstanceResponse DescribeManualTaskInstanceResponse
     */
    public function describeManualTaskInstance($manualTaskInstanceId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeManualTaskInstanceWithOptions($manualTaskInstanceId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取项目详情
     *  *
     * @param string                 $projectId
     * @param DescribeProjectRequest $request   DescribeProjectRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeProjectResponse DescribeProjectResponse
     */
    public function describeProjectWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProject',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目详情
     *  *
     * @param string                 $projectId
     * @param DescribeProjectRequest $request   DescribeProjectRequest
     *
     * @return DescribeProjectResponse DescribeProjectResponse
     */
    public function describeProject($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProjectWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询任务定义
     *  *
     * @param string              $workflowId
     * @param string              $projectId
     * @param string              $taskId
     * @param DescribeTaskRequest $request    DescribeTaskRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTaskWithOptions($workflowId, $projectId, $taskId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTask',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows/' . OpenApiUtilClient::getEncodeParam($workflowId) . '/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务定义
     *  *
     * @param string              $workflowId
     * @param string              $projectId
     * @param string              $taskId
     * @param DescribeTaskRequest $request    DescribeTaskRequest
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTask($workflowId, $projectId, $taskId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskWithOptions($workflowId, $projectId, $taskId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取任务实例
     *  *
     * @param string                      $projectId
     * @param string                      $workflowInstanceId
     * @param string                      $taskInstanceId
     * @param DescribeTaskInstanceRequest $request            DescribeTaskInstanceRequest
     * @param string[]                    $headers            map
     * @param RuntimeOptions              $runtime            runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskInstanceResponse DescribeTaskInstanceResponse
     */
    public function describeTaskInstanceWithOptions($projectId, $workflowInstanceId, $taskInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTaskInstance',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows/' . OpenApiUtilClient::getEncodeParam($workflowInstanceId) . '/taskInstances/' . OpenApiUtilClient::getEncodeParam($taskInstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务实例
     *  *
     * @param string                      $projectId
     * @param string                      $workflowInstanceId
     * @param string                      $taskInstanceId
     * @param DescribeTaskInstanceRequest $request            DescribeTaskInstanceRequest
     *
     * @return DescribeTaskInstanceResponse DescribeTaskInstanceResponse
     */
    public function describeTaskInstance($projectId, $workflowInstanceId, $taskInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskInstanceWithOptions($projectId, $workflowInstanceId, $taskInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作流详情
     *  *
     * @param string                  $projectId
     * @param string                  $workflowId
     * @param DescribeWorkflowRequest $request    DescribeWorkflowRequest
     * @param string[]                $headers    map
     * @param RuntimeOptions          $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeWorkflowResponse DescribeWorkflowResponse
     */
    public function describeWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkflow',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows/' . OpenApiUtilClient::getEncodeParam($workflowId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作流详情
     *  *
     * @param string                  $projectId
     * @param string                  $workflowId
     * @param DescribeWorkflowRequest $request    DescribeWorkflowRequest
     *
     * @return DescribeWorkflowResponse DescribeWorkflowResponse
     */
    public function describeWorkflow($projectId, $workflowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作流实例详情
     *  *
     * @param string                          $projectId
     * @param string                          $workflowInstanceId
     * @param DescribeWorkflowInstanceRequest $request            DescribeWorkflowInstanceRequest
     * @param string[]                        $headers            map
     * @param RuntimeOptions                  $runtime            runtime options for this request RuntimeOptions
     *
     * @return DescribeWorkflowInstanceResponse DescribeWorkflowInstanceResponse
     */
    public function describeWorkflowInstanceWithOptions($projectId, $workflowInstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkflowInstance',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflowInstances/' . OpenApiUtilClient::getEncodeParam($workflowInstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作流实例详情
     *  *
     * @param string                          $projectId
     * @param string                          $workflowInstanceId
     * @param DescribeWorkflowInstanceRequest $request            DescribeWorkflowInstanceRequest
     *
     * @return DescribeWorkflowInstanceResponse DescribeWorkflowInstanceResponse
     */
    public function describeWorkflowInstance($projectId, $workflowInstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeWorkflowInstanceWithOptions($projectId, $workflowInstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取手动任务实例列表
     *  *
     * @param string                         $projectId
     * @param ListManualTaskInstancesRequest $request   ListManualTaskInstancesRequest
     * @param string[]                       $headers   map
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListManualTaskInstancesResponse ListManualTaskInstancesResponse
     */
    public function listManualTaskInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchVal)) {
            $query['searchVal'] = $request->searchVal;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListManualTaskInstances',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/manualTaskInstances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListManualTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取手动任务实例列表
     *  *
     * @param string                         $projectId
     * @param ListManualTaskInstancesRequest $request   ListManualTaskInstancesRequest
     *
     * @return ListManualTaskInstancesResponse ListManualTaskInstancesResponse
     */
    public function listManualTaskInstances($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listManualTaskInstancesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询手动任务定义列表
     *  *
     * @param string                 $projectId
     * @param ListManualTasksRequest $request   ListManualTasksRequest
     * @param string[]               $headers   map
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListManualTasksResponse ListManualTasksResponse
     */
    public function listManualTasksWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchVal)) {
            $query['searchVal'] = $request->searchVal;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['taskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListManualTasks',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/manualTasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListManualTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询手动任务定义列表
     *  *
     * @param string                 $projectId
     * @param ListManualTasksRequest $request   ListManualTasksRequest
     *
     * @return ListManualTasksResponse ListManualTasksResponse
     */
    public function listManualTasks($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listManualTasksWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取项目详情
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchVal)) {
            $query['searchVal'] = $request->searchVal;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目详情
     *  *
     * @param ListProjectsRequest $request ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取任务实例列表
     *  *
     * @param string                   $projectId
     * @param ListTaskInstancesRequest $request   ListTaskInstancesRequest
     * @param string[]                 $headers   map
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListTaskInstancesResponse ListTaskInstancesResponse
     */
    public function listTaskInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchVal)) {
            $query['searchVal'] = $request->searchVal;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->workflowInstanceId)) {
            $query['workflowInstanceId'] = $request->workflowInstanceId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskInstances',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/taskInstances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTaskInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务实例列表
     *  *
     * @param string                   $projectId
     * @param ListTaskInstancesRequest $request   ListTaskInstancesRequest
     *
     * @return ListTaskInstancesResponse ListTaskInstancesResponse
     */
    public function listTaskInstances($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTaskInstancesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询任务定义列表
     *  *
     * @param string           $projectId
     * @param ListTasksRequest $request   ListTasksRequest
     * @param string[]         $headers   map
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchVal)) {
            $query['searchVal'] = $request->searchVal;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['taskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['workflowId'] = $request->workflowId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务定义列表
     *  *
     * @param string           $projectId
     * @param ListTasksRequest $request   ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作流实例列表
     *  *
     * @param string                       $projectId
     * @param ListWorkflowInstancesRequest $request   ListWorkflowInstancesRequest
     * @param string[]                     $headers   map
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListWorkflowInstancesResponse ListWorkflowInstancesResponse
     */
    public function listWorkflowInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['workflowId'] = $request->workflowId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflowInstances',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflowInstances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作流实例列表
     *  *
     * @param string                       $projectId
     * @param ListWorkflowInstancesRequest $request   ListWorkflowInstancesRequest
     *
     * @return ListWorkflowInstancesResponse ListWorkflowInstancesResponse
     */
    public function listWorkflowInstances($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkflowInstancesWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作流列表
     *  *
     * @param string               $projectId
     * @param ListWorkflowsRequest $request   ListWorkflowsRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListWorkflowsResponse ListWorkflowsResponse
     */
    public function listWorkflowsWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->searchVal)) {
            $query['searchVal'] = $request->searchVal;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkflows',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作流列表
     *  *
     * @param string               $projectId
     * @param ListWorkflowsRequest $request   ListWorkflowsRequest
     *
     * @return ListWorkflowsResponse ListWorkflowsResponse
     */
    public function listWorkflows($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkflowsWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 运行工作流
     *  *
     * @param string             $projectId
     * @param RunWorkflowRequest $request   RunWorkflowRequest
     * @param string[]           $headers   map
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return RunWorkflowResponse RunWorkflowResponse
     */
    public function runWorkflowWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertGroupId)) {
            $query['alertGroupId'] = $request->alertGroupId;
        }
        if (!Utils::isUnset($request->alertStrategy)) {
            $query['alertStrategy'] = $request->alertStrategy;
        }
        if (!Utils::isUnset($request->complementDependentMode)) {
            $query['complementDependentMode'] = $request->complementDependentMode;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->execType)) {
            $query['execType'] = $request->execType;
        }
        if (!Utils::isUnset($request->expectedParallelismNumber)) {
            $query['expectedParallelismNumber'] = $request->expectedParallelismNumber;
        }
        if (!Utils::isUnset($request->failureStrategy)) {
            $query['failureStrategy'] = $request->failureStrategy;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->runMode)) {
            $query['runMode'] = $request->runMode;
        }
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['scheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->startParams)) {
            $query['startParams'] = $request->startParams;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['workflowId'] = $request->workflowId;
        }
        if (!Utils::isUnset($request->workflowInstancePriority)) {
            $query['workflowInstancePriority'] = $request->workflowInstancePriority;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunWorkflow',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/executors/run-workflow',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运行工作流
     *  *
     * @param string             $projectId
     * @param RunWorkflowRequest $request   RunWorkflowRequest
     *
     * @return RunWorkflowResponse RunWorkflowResponse
     */
    public function runWorkflow($projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runWorkflowWithOptions($projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新工作流
     *  *
     * @param string                $projectId
     * @param string                $workflowId
     * @param UpdateWorkflowRequest $request    UpdateWorkflowRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkflowResponse UpdateWorkflowResponse
     */
    public function updateWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertGroupId)) {
            $query['alertGroupId'] = $request->alertGroupId;
        }
        if (!Utils::isUnset($request->alertStrategy)) {
            $query['alertStrategy'] = $request->alertStrategy;
        }
        if (!Utils::isUnset($request->cronExpr)) {
            $query['cronExpr'] = $request->cronExpr;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionType)) {
            $query['executionType'] = $request->executionType;
        }
        if (!Utils::isUnset($request->failureStrategy)) {
            $query['failureStrategy'] = $request->failureStrategy;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentDirectoryId)) {
            $query['parentDirectoryId'] = $request->parentDirectoryId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->scheduleEndTime)) {
            $query['scheduleEndTime'] = $request->scheduleEndTime;
        }
        if (!Utils::isUnset($request->scheduleStartTime)) {
            $query['scheduleStartTime'] = $request->scheduleStartTime;
        }
        if (!Utils::isUnset($request->scheduleState)) {
            $query['scheduleState'] = $request->scheduleState;
        }
        if (!Utils::isUnset($request->taskDefinitionJson)) {
            $query['taskDefinitionJson'] = $request->taskDefinitionJson;
        }
        if (!Utils::isUnset($request->taskRelationJson)) {
            $query['taskRelationJson'] = $request->taskRelationJson;
        }
        if (!Utils::isUnset($request->timeZone)) {
            $query['timeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->workflowInstancePriority)) {
            $query['workflowInstancePriority'] = $request->workflowInstancePriority;
        }
        if (!Utils::isUnset($request->workflowParams)) {
            $query['workflowParams'] = $request->workflowParams;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkflow',
            'version'     => '2024-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/workflows/' . OpenApiUtilClient::getEncodeParam($workflowId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作流
     *  *
     * @param string                $projectId
     * @param string                $workflowId
     * @param UpdateWorkflowRequest $request    UpdateWorkflowRequest
     *
     * @return UpdateWorkflowResponse UpdateWorkflowResponse
     */
    public function updateWorkflow($projectId, $workflowId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkflowWithOptions($projectId, $workflowId, $request, $headers, $runtime);
    }
}
