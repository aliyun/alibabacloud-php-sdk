<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20231009;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeManualTaskInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeManualTaskInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeManualTaskRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeManualTaskResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeProjectRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeProjectResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeTaskInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeTaskInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeTaskRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeWorkflowInstanceRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeWorkflowInstanceResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeWorkflowRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\DescribeWorkflowResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListManualTaskInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListManualTaskInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListManualTasksRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListManualTasksResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListProjectsRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListProjectsResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListTaskInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListTaskInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListTasksRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListTasksResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListWorkflowInstancesRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListWorkflowInstancesResponse;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListWorkflowsRequest;
use AlibabaCloud\SDK\EmrStudio\V20231009\Models\ListWorkflowsResponse;
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
            'version'     => '2023-10-09',
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
            'version'     => '2023-10-09',
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
     * @param string                 $code
     * @param DescribeProjectRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeProjectResponse
     */
    public function describeProjectWithOptions($code, $request, $headers, $runtime)
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
            'version'     => '2023-10-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($code) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $code
     * @param DescribeProjectRequest $request
     *
     * @return DescribeProjectResponse
     */
    public function describeProject($code, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProjectWithOptions($code, $request, $headers, $runtime);
    }

    /**
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
            'version'     => '2023-10-09',
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
            'version'     => '2023-10-09',
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
            'version'     => '2023-10-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/processDefinitions/' . OpenApiUtilClient::getEncodeParam($workflowId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'version'     => '2023-10-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/processInstances/' . OpenApiUtilClient::getEncodeParam($workflowInstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $projectId
     * @param ListManualTaskInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListManualTaskInstancesResponse
     */
    public function listManualTaskInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executionStatus)) {
            $query['executionStatus'] = $request->executionStatus;
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
        if (!Utils::isUnset($request->workspaceId)) {
            $query['workspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListManualTaskInstances',
            'version'     => '2023-10-09',
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
     * @param string                 $projectId
     * @param ListManualTasksRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListManualTasksResponse
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
            'version'     => '2023-10-09',
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
     * @param ListProjectsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
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
            'version'     => '2023-10-09',
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
     * @param string                   $projectId
     * @param ListTaskInstancesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListTaskInstancesResponse
     */
    public function listTaskInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executionStatus)) {
            $query['executionStatus'] = $request->executionStatus;
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
            'version'     => '2023-10-09',
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
     * @param string           $projectId
     * @param ListTasksRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
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
            'version'     => '2023-10-09',
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
     * @param string                       $projectId
     * @param ListWorkflowInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkflowInstancesResponse
     */
    public function listWorkflowInstancesWithOptions($projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
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
            'version'     => '2023-10-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/processInstances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string               $projectId
     * @param ListWorkflowsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkflowsResponse
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
            'version'     => '2023-10-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dolphinscheduler/v3/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/processDefinitions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
}
