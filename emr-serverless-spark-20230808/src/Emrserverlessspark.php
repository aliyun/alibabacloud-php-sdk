<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CancelJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsShrinkRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListReleaseVersionsResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunRequest;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\StartJobRunResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Emrserverlessspark extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emr-serverless-spark', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 取消jobRun作业
     *  *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request     CancelJobRunRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return CancelJobRunResponse CancelJobRunResponse
     */
    public function cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelJobRun',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns/' . OpenApiUtilClient::getEncodeParam($jobRunId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消jobRun作业
     *  *
     * @param string              $workspaceId
     * @param string              $jobRunId
     * @param CancelJobRunRequest $request     CancelJobRunRequest
     *
     * @return CancelJobRunResponse CancelJobRunResponse
     */
    public function cancelJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取任务
     *  *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request     GetJobRunRequest
     * @param string[]         $headers     map
     * @param RuntimeOptions   $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetJobRunResponse GetJobRunResponse
     */
    public function getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobRun',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns/' . OpenApiUtilClient::getEncodeParam($jobRunId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务
     *  *
     * @param string           $workspaceId
     * @param string           $jobRunId
     * @param GetJobRunRequest $request     GetJobRunRequest
     *
     * @return GetJobRunResponse GetJobRunResponse
     */
    public function getJobRun($workspaceId, $jobRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobRunWithOptions($workspaceId, $jobRunId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询run列表
     *  *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $tmpReq      ListJobRunsRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListJobRunsResponse ListJobRunsResponse
     */
    public function listJobRunsWithOptions($workspaceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobRunsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->endTime)) {
            $request->endTimeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->endTime, 'endTime', 'json');
        }
        if (!Utils::isUnset($tmpReq->startTime)) {
            $request->startTimeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->startTime, 'startTime', 'json');
        }
        if (!Utils::isUnset($tmpReq->states)) {
            $request->statesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->states, 'states', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->creator)) {
            $query['creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->endTimeShrink)) {
            $query['endTime'] = $request->endTimeShrink;
        }
        if (!Utils::isUnset($request->jobRunId)) {
            $query['jobRunId'] = $request->jobRunId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceQueueId)) {
            $query['resourceQueueId'] = $request->resourceQueueId;
        }
        if (!Utils::isUnset($request->startTimeShrink)) {
            $query['startTime'] = $request->startTimeShrink;
        }
        if (!Utils::isUnset($request->statesShrink)) {
            $query['states'] = $request->statesShrink;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobRuns',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询run列表
     *  *
     * @param string             $workspaceId
     * @param ListJobRunsRequest $request     ListJobRunsRequest
     *
     * @return ListJobRunsResponse ListJobRunsResponse
     */
    public function listJobRuns($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobRunsWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取发布版本列表
     *  *
     * @param ListReleaseVersionsRequest $request ListReleaseVersionsRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListReleaseVersionsResponse ListReleaseVersionsResponse
     */
    public function listReleaseVersionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseType)) {
            $query['releaseType'] = $request->releaseType;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $query['releaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->releaseVersionStatus)) {
            $query['releaseVersionStatus'] = $request->releaseVersionStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReleaseVersions',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/releaseVersions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取发布版本列表
     *  *
     * @param ListReleaseVersionsRequest $request ListReleaseVersionsRequest
     *
     * @return ListReleaseVersionsResponse ListReleaseVersionsResponse
     */
    public function listReleaseVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReleaseVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查看工作空间队列列表
     *  *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request     ListWorkspaceQueuesRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListWorkspaceQueuesResponse ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->environment)) {
            $query['environment'] = $request->environment;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaceQueues',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/queues',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspaceQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看工作空间队列列表
     *  *
     * @param string                     $workspaceId
     * @param ListWorkspaceQueuesRequest $request     ListWorkspaceQueuesRequest
     *
     * @return ListWorkspaceQueuesResponse ListWorkspaceQueuesResponse
     */
    public function listWorkspaceQueues($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspaceQueuesWithOptions($workspaceId, $request, $headers, $runtime);
    }

    /**
     * @summary 查看工作空间列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看工作空间列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 启动作业
     *  *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request     StartJobRunRequest
     * @param string[]           $headers     map
     * @param RuntimeOptions     $runtime     runtime options for this request RuntimeOptions
     *
     * @return StartJobRunResponse StartJobRunResponse
     */
    public function startJobRunWithOptions($workspaceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->codeType)) {
            $body['codeType'] = $request->codeType;
        }
        if (!Utils::isUnset($request->configurationOverrides)) {
            $body['configurationOverrides'] = $request->configurationOverrides;
        }
        if (!Utils::isUnset($request->executionTimeoutSeconds)) {
            $body['executionTimeoutSeconds'] = $request->executionTimeoutSeconds;
        }
        if (!Utils::isUnset($request->jobDriver)) {
            $body['jobDriver'] = $request->jobDriver;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['jobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $body['releaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->resourceQueueId)) {
            $body['resourceQueueId'] = $request->resourceQueueId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartJobRun',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/jobRuns',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动作业
     *  *
     * @param string             $workspaceId
     * @param StartJobRunRequest $request     StartJobRunRequest
     *
     * @return StartJobRunResponse StartJobRunResponse
     */
    public function startJobRun($workspaceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startJobRunWithOptions($workspaceId, $request, $headers, $runtime);
    }
}
