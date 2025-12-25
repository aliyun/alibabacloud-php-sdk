<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateCalendarRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateCalendarResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateExecutorsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateExecutorsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateWorkflowRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateWorkflowResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteCalendarRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteCalendarResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteWorkflowRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteWorkflowResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteWorkflowsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteWorkflowsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteWorkflowsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportWorkflowsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportWorkflowsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportWorkflowsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetCalendarRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetCalendarResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetExecutorConfigRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetExecutorConfigResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionThreadDumpRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionThreadDumpResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogEventRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogEventResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowDAGPreviewRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowDAGPreviewResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowDAGRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowDAGResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowExecutionDAGRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowExecutionDAGResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetWorkflowResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportCalendarRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportCalendarResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportWorkflowsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportWorkflowsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAlarmEventRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAlarmEventResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppNamesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppNamesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarNamesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarNamesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobExecutionsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobExecutionsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListK8sResourceRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListK8sResourceResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListLablesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListLablesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListRegionZoneResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleEventRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleEventResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleTimesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleTimesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListWorkflowExecutionsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListWorkflowExecutionsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListWorkflowsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListWorkflowsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListWorkflowVersionsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListWorkflowVersionsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateBackfillWorkflowRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateBackfillWorkflowResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDesignateExecutorsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDesignateExecutorsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDesignateExecutorsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableWorkflowsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableWorkflowsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableWorkflowsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableWorkflowsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableWorkflowsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableWorkflowsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteWorkflowRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteWorkflowResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateHoldJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateHoldJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateHoldWorkflowExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateHoldWorkflowExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateMarkSuccessJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateMarkSuccessJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateMarkSuccessWorkflowExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateMarkSuccessWorkflowExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRerunJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRerunJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryJobExecutionShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryWorkflowExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryWorkflowExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateSkipJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateSkipJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopJobExecutionShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopWorkflowExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopWorkflowExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateUnholdJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateUnholdJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateUnholdWorkflowExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateUnholdWorkflowExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateUnskipJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateUnskipJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\SyncJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\SyncJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\SyncJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateCalendarRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateCalendarResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateExecutorsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateExecutorsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobScriptRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobScriptResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGVersionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowDAGVersionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateWorkflowResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SchedulerX3 extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('schedulerx3', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建应用.
     *
     * @param request - CreateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessToken) {
            @$body['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->enableLog) {
            @$body['EnableLog'] = $request->enableLog;
        }

        if (null !== $request->labelRouteStrategy) {
            @$body['LabelRouteStrategy'] = $request->labelRouteStrategy;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * 创建日历.
     *
     * @param request - CreateCalendarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCalendarResponse
     *
     * @param CreateCalendarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCalendarResponse
     */
    public function createCalendarWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->calendarName) {
            @$body['CalendarName'] = $request->calendarName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->months) {
            @$body['Months'] = $request->months;
        }

        if (null !== $request->year) {
            @$body['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCalendar',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建日历.
     *
     * @param request - CreateCalendarRequest
     *
     * @returns CreateCalendarResponse
     *
     * @param CreateCalendarRequest $request
     *
     * @return CreateCalendarResponse
     */
    public function createCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCalendarWithOptions($request, $runtime);
    }

    /**
     * 创建集群.
     *
     * @param tmpReq - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vSwitches) {
            $request->vSwitchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitches, 'VSwitches', 'json');
        }

        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterSpec) {
            @$body['ClusterSpec'] = $request->clusterSpec;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->engineType) {
            @$body['EngineType'] = $request->engineType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->vSwitchesShrink) {
            @$body['VSwitches'] = $request->vSwitchesShrink;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建集群.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * 添加执行器.
     *
     * @param request - CreateExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExecutorsResponse
     *
     * @param CreateExecutorsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateExecutorsResponse
     */
    public function createExecutorsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workerType) {
            @$body['WorkerType'] = $request->workerType;
        }

        if (null !== $request->workers) {
            @$body['Workers'] = $request->workers;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExecutors',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加执行器.
     *
     * @param request - CreateExecutorsRequest
     *
     * @returns CreateExecutorsResponse
     *
     * @param CreateExecutorsRequest $request
     *
     * @return CreateExecutorsResponse
     */
    public function createExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExecutorsWithOptions($request, $runtime);
    }

    /**
     * 创建任务
     *
     * @param tmpReq - CreateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->coordinate) {
            $request->coordinateShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->coordinate, 'Coordinate', 'json');
        }

        if (null !== $tmpReq->noticeConfig) {
            $request->noticeConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeConfig, 'NoticeConfig', 'json');
        }

        if (null !== $tmpReq->noticeContacts) {
            $request->noticeContactsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeContacts, 'NoticeContacts', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->attemptInterval) {
            @$body['AttemptInterval'] = $request->attemptInterval;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->childJobId) {
            @$body['ChildJobId'] = $request->childJobId;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->coordinateShrink) {
            @$body['Coordinate'] = $request->coordinateShrink;
        }

        if (null !== $request->dependentStrategy) {
            @$body['DependentStrategy'] = $request->dependentStrategy;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->executorBlockStrategy) {
            @$body['ExecutorBlockStrategy'] = $request->executorBlockStrategy;
        }

        if (null !== $request->jobHandler) {
            @$body['JobHandler'] = $request->jobHandler;
        }

        if (null !== $request->jobType) {
            @$body['JobType'] = $request->jobType;
        }

        if (null !== $request->maxAttempt) {
            @$body['MaxAttempt'] = $request->maxAttempt;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->noticeConfigShrink) {
            @$body['NoticeConfig'] = $request->noticeConfigShrink;
        }

        if (null !== $request->noticeContactsShrink) {
            @$body['NoticeContacts'] = $request->noticeContactsShrink;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->routeStrategy) {
            @$body['RouteStrategy'] = $request->routeStrategy;
        }

        if (null !== $request->script) {
            @$body['Script'] = $request->script;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeType) {
            @$body['StartTimeType'] = $request->startTimeType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        if (null !== $request->weight) {
            @$body['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建任务
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * 创建应用.
     *
     * @param request - CreateWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkflowResponse
     *
     * @param CreateWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkflowResponse
     */
    public function createWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkflow',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用.
     *
     * @param request - CreateWorkflowRequest
     *
     * @returns CreateWorkflowResponse
     *
     * @param CreateWorkflowRequest $request
     *
     * @return CreateWorkflowResponse
     */
    public function createWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkflowWithOptions($request, $runtime);
    }

    /**
     * 删除应用分组.
     *
     * @param request - DeleteAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用分组.
     *
     * @param request - DeleteAppRequest
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * 删除日历.
     *
     * @param request - DeleteCalendarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCalendarResponse
     *
     * @param DeleteCalendarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCalendarResponse
     */
    public function deleteCalendarWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->calendarName) {
            @$body['CalendarName'] = $request->calendarName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->year) {
            @$body['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCalendar',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除日历.
     *
     * @param request - DeleteCalendarRequest
     *
     * @returns DeleteCalendarResponse
     *
     * @param DeleteCalendarRequest $request
     *
     * @return DeleteCalendarResponse
     */
    public function deleteCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCalendarWithOptions($request, $runtime);
    }

    /**
     * 释放删除集群.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放删除集群.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * 批量删除任务
     *
     * @param tmpReq - DeleteJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除任务
     *
     * @param request - DeleteJobsRequest
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * 删除工作流
     *
     * @param request - DeleteWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkflowResponse
     *
     * @param DeleteWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->deleteJobs) {
            @$body['DeleteJobs'] = $request->deleteJobs;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkflow',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param DeleteWorkflowRequest $request
     *
     * @return DeleteWorkflowResponse
     */
    public function deleteWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowWithOptions($request, $runtime);
    }

    /**
     * 批量删除工作流
     *
     * @param tmpReq - DeleteWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkflowsResponse
     *
     * @param DeleteWorkflowsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkflowsResponse
     */
    public function deleteWorkflowsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteWorkflowsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workflowIds) {
            $request->workflowIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->deleteJobs) {
            @$body['DeleteJobs'] = $request->deleteJobs;
        }

        if (null !== $request->workflowIdsShrink) {
            @$body['WorkflowIds'] = $request->workflowIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkflows',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量删除工作流
     *
     * @param request - DeleteWorkflowsRequest
     *
     * @returns DeleteWorkflowsResponse
     *
     * @param DeleteWorkflowsRequest $request
     *
     * @return DeleteWorkflowsResponse
     */
    public function deleteWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkflowsWithOptions($request, $runtime);
    }

    /**
     * 批量导出任务信息.
     *
     * @param tmpReq - ExportJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportJobsResponse
     *
     * @param ExportJobsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ExportJobsResponse
     */
    public function exportJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->exportJobType) {
            @$body['ExportJobType'] = $request->exportJobType;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'byte',
        ]);

        return ExportJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量导出任务信息.
     *
     * @param request - ExportJobsRequest
     *
     * @returns ExportJobsResponse
     *
     * @param ExportJobsRequest $request
     *
     * @return ExportJobsResponse
     */
    public function exportJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportJobsWithOptions($request, $runtime);
    }

    /**
     * 批量导出工作流信息.
     *
     * @param tmpReq - ExportWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportWorkflowsResponse
     *
     * @param ExportWorkflowsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ExportWorkflowsResponse
     */
    public function exportWorkflowsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportWorkflowsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workflowId) {
            $request->workflowIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workflowId, 'WorkflowId', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowIdShrink) {
            @$body['WorkflowId'] = $request->workflowIdShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportWorkflows',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'byte',
        ]);

        return ExportWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量导出工作流信息.
     *
     * @param request - ExportWorkflowsRequest
     *
     * @returns ExportWorkflowsResponse
     *
     * @param ExportWorkflowsRequest $request
     *
     * @return ExportWorkflowsResponse
     */
    public function exportWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportWorkflowsWithOptions($request, $runtime);
    }

    /**
     * 获取指定应用.
     *
     * @param request - GetAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppResponse
     *
     * @param GetAppRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定应用.
     *
     * @param request - GetAppRequest
     *
     * @returns GetAppResponse
     *
     * @param GetAppRequest $request
     *
     * @return GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * 获取日历信息.
     *
     * @param request - GetCalendarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCalendarResponse
     *
     * @param GetCalendarRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCalendarResponse
     */
    public function getCalendarWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calendarName) {
            @$query['CalendarName'] = $request->calendarName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->year) {
            @$query['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCalendar',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日历信息.
     *
     * @param request - GetCalendarRequest
     *
     * @returns GetCalendarResponse
     *
     * @param GetCalendarRequest $request
     *
     * @return GetCalendarResponse
     */
    public function getCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCalendarWithOptions($request, $runtime);
    }

    /**
     * 获取集群详细信息.
     *
     * @param request - GetClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取集群详细信息.
     *
     * @param request - GetClusterRequest
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * 获取指定机器信息.
     *
     * @param request - GetDesigateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDesigateInfoResponse
     *
     * @param GetDesigateInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDesigateInfoResponse
     */
    public function getDesigateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDesigateInfo',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDesigateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定机器信息.
     *
     * @param request - GetDesigateInfoRequest
     *
     * @returns GetDesigateInfoResponse
     *
     * @param GetDesigateInfoRequest $request
     *
     * @return GetDesigateInfoResponse
     */
    public function getDesigateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDesigateInfoWithOptions($request, $runtime);
    }

    /**
     * 查询执行器配置信息.
     *
     * @param request - GetExecutorConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecutorConfigResponse
     *
     * @param GetExecutorConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetExecutorConfigResponse
     */
    public function getExecutorConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExecutorConfig',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExecutorConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询执行器配置信息.
     *
     * @param request - GetExecutorConfigRequest
     *
     * @returns GetExecutorConfigResponse
     *
     * @param GetExecutorConfigRequest $request
     *
     * @return GetExecutorConfigResponse
     */
    public function getExecutorConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecutorConfigWithOptions($request, $runtime);
    }

    /**
     * 获取任务执行的详细信息.
     *
     * @param request - GetJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobExecutionResponse
     *
     * @param GetJobExecutionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetJobExecutionResponse
     */
    public function getJobExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        if (null !== $request->mseSessionId) {
            @$query['MseSessionId'] = $request->mseSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务执行的详细信息.
     *
     * @param request - GetJobExecutionRequest
     *
     * @returns GetJobExecutionResponse
     *
     * @param GetJobExecutionRequest $request
     *
     * @return GetJobExecutionResponse
     */
    public function getJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 获取任务执行的详情.
     *
     * @param request - GetJobExecutionProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobExecutionProgressResponse
     *
     * @param GetJobExecutionProgressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetJobExecutionProgressResponse
     */
    public function getJobExecutionProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobExecutionProgress',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobExecutionProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务执行的详情.
     *
     * @param request - GetJobExecutionProgressRequest
     *
     * @returns GetJobExecutionProgressResponse
     *
     * @param GetJobExecutionProgressRequest $request
     *
     * @return GetJobExecutionProgressResponse
     */
    public function getJobExecutionProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionProgressWithOptions($request, $runtime);
    }

    /**
     * 查询任务的线程堆栈.
     *
     * @param request - GetJobExecutionThreadDumpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobExecutionThreadDumpResponse
     *
     * @param GetJobExecutionThreadDumpRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetJobExecutionThreadDumpResponse
     */
    public function getJobExecutionThreadDumpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobExecutionThreadDump',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobExecutionThreadDumpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务的线程堆栈.
     *
     * @param request - GetJobExecutionThreadDumpRequest
     *
     * @returns GetJobExecutionThreadDumpResponse
     *
     * @param GetJobExecutionThreadDumpRequest $request
     *
     * @return GetJobExecutionThreadDumpResponse
     */
    public function getJobExecutionThreadDump($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionThreadDumpWithOptions($request, $runtime);
    }

    /**
     * 查询日志.
     *
     * @param request - GetLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogResponse
     *
     * @param GetLogRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLogResponse
     */
    public function getLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLog',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询日志.
     *
     * @param request - GetLogRequest
     *
     * @returns GetLogResponse
     *
     * @param GetLogRequest $request
     *
     * @return GetLogResponse
     */
    public function getLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogWithOptions($request, $runtime);
    }

    /**
     * 查询事件.
     *
     * @param request - GetLogEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogEventResponse
     *
     * @param GetLogEventRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetLogEventResponse
     */
    public function getLogEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogEvent',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询事件.
     *
     * @param request - GetLogEventRequest
     *
     * @returns GetLogEventResponse
     *
     * @param GetLogEventRequest $request
     *
     * @return GetLogEventResponse
     */
    public function getLogEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogEventWithOptions($request, $runtime);
    }

    /**
     * 获取工作流
     *
     * @param request - GetWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkflowResponse
     *
     * @param GetWorkflowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWorkflowResponse
     */
    public function getWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkflow',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流
     *
     * @param request - GetWorkflowRequest
     *
     * @returns GetWorkflowResponse
     *
     * @param GetWorkflowRequest $request
     *
     * @return GetWorkflowResponse
     */
    public function getWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowWithOptions($request, $runtime);
    }

    /**
     * 获取工作流的DAG信息.
     *
     * @param request - GetWorkflowDAGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkflowDAGResponse
     *
     * @param GetWorkflowDAGRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetWorkflowDAGResponse
     */
    public function getWorkflowDAGWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkflowDAG',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkflowDAGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流的DAG信息.
     *
     * @param request - GetWorkflowDAGRequest
     *
     * @returns GetWorkflowDAGResponse
     *
     * @param GetWorkflowDAGRequest $request
     *
     * @return GetWorkflowDAGResponse
     */
    public function getWorkflowDAG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowDAGWithOptions($request, $runtime);
    }

    /**
     * 获取工作流的DAG信息.
     *
     * @param request - GetWorkflowDAGPreviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkflowDAGPreviewResponse
     *
     * @param GetWorkflowDAGPreviewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetWorkflowDAGPreviewResponse
     */
    public function getWorkflowDAGPreviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dagVersion) {
            @$query['DagVersion'] = $request->dagVersion;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkflowDAGPreview',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkflowDAGPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流的DAG信息.
     *
     * @param request - GetWorkflowDAGPreviewRequest
     *
     * @returns GetWorkflowDAGPreviewResponse
     *
     * @param GetWorkflowDAGPreviewRequest $request
     *
     * @return GetWorkflowDAGPreviewResponse
     */
    public function getWorkflowDAGPreview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowDAGPreviewWithOptions($request, $runtime);
    }

    /**
     * 获取工作流实例DAG信息.
     *
     * @param request - GetWorkflowExecutionDAGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkflowExecutionDAGResponse
     *
     * @param GetWorkflowExecutionDAGRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetWorkflowExecutionDAGResponse
     */
    public function getWorkflowExecutionDAGWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowExecutionId) {
            @$query['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkflowExecutionDAG',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWorkflowExecutionDAGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作流实例DAG信息.
     *
     * @param request - GetWorkflowExecutionDAGRequest
     *
     * @returns GetWorkflowExecutionDAGResponse
     *
     * @param GetWorkflowExecutionDAGRequest $request
     *
     * @return GetWorkflowExecutionDAGResponse
     */
    public function getWorkflowExecutionDAG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowExecutionDAGWithOptions($request, $runtime);
    }

    /**
     * 导入日历.
     *
     * @param request - ImportCalendarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportCalendarResponse
     *
     * @param ImportCalendarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ImportCalendarResponse
     */
    public function importCalendarWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->months) {
            @$body['Months'] = $request->months;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->year) {
            @$body['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportCalendar',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导入日历.
     *
     * @param request - ImportCalendarRequest
     *
     * @returns ImportCalendarResponse
     *
     * @param ImportCalendarRequest $request
     *
     * @return ImportCalendarResponse
     */
    public function importCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCalendarWithOptions($request, $runtime);
    }

    /**
     * 批量导入任务
     *
     * @param request - ImportJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportJobsResponse
     *
     * @param ImportJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ImportJobsResponse
     */
    public function importJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoCreateApp) {
            @$body['AutoCreateApp'] = $request->autoCreateApp;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->overwrite) {
            @$body['Overwrite'] = $request->overwrite;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量导入任务
     *
     * @param request - ImportJobsRequest
     *
     * @returns ImportJobsResponse
     *
     * @param ImportJobsRequest $request
     *
     * @return ImportJobsResponse
     */
    public function importJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importJobsWithOptions($request, $runtime);
    }

    /**
     * 批量导入工作流
     *
     * @param request - ImportWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportWorkflowsResponse
     *
     * @param ImportWorkflowsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImportWorkflowsResponse
     */
    public function importWorkflowsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoCreateApp) {
            @$body['AutoCreateApp'] = $request->autoCreateApp;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->overwrite) {
            @$body['Overwrite'] = $request->overwrite;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportWorkflows',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量导入工作流
     *
     * @param request - ImportWorkflowsRequest
     *
     * @returns ImportWorkflowsResponse
     *
     * @param ImportWorkflowsRequest $request
     *
     * @return ImportWorkflowsResponse
     */
    public function importWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importWorkflowsWithOptions($request, $runtime);
    }

    /**
     * 获取报警事件.
     *
     * @param request - ListAlarmEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlarmEventResponse
     *
     * @param ListAlarmEventRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlarmEventResponse
     */
    public function listAlarmEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlarmEvent',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAlarmEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取报警事件.
     *
     * @param request - ListAlarmEventRequest
     *
     * @returns ListAlarmEventResponse
     *
     * @param ListAlarmEventRequest $request
     *
     * @return ListAlarmEventResponse
     */
    public function listAlarmEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmEventWithOptions($request, $runtime);
    }

    /**
     * 获取应用名字列表.
     *
     * @param request - ListAppNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppNamesResponse
     *
     * @param ListAppNamesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAppNamesResponse
     */
    public function listAppNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppNames',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用名字列表.
     *
     * @param request - ListAppNamesRequest
     *
     * @returns ListAppNamesResponse
     *
     * @param ListAppNamesRequest $request
     *
     * @return ListAppNamesResponse
     */
    public function listAppNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppNamesWithOptions($request, $runtime);
    }

    /**
     * 获取应用列表.
     *
     * @param request - ListAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApps',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取应用列表.
     *
     * @param request - ListAppsRequest
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * 获取日历名字列表.
     *
     * @param request - ListCalendarNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCalendarNamesResponse
     *
     * @param ListCalendarNamesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCalendarNamesResponse
     */
    public function listCalendarNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCalendarNames',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCalendarNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日历名字列表.
     *
     * @param request - ListCalendarNamesRequest
     *
     * @returns ListCalendarNamesResponse
     *
     * @param ListCalendarNamesRequest $request
     *
     * @return ListCalendarNamesResponse
     */
    public function listCalendarNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalendarNamesWithOptions($request, $runtime);
    }

    /**
     * 查询日历.
     *
     * @param request - ListCalendarsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCalendarsResponse
     *
     * @param ListCalendarsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCalendarsResponse
     */
    public function listCalendarsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calendarName) {
            @$query['CalendarName'] = $request->calendarName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->fetchCalendarDetail) {
            @$query['FetchCalendarDetail'] = $request->fetchCalendarDetail;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->year) {
            @$query['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCalendars',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCalendarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询日历.
     *
     * @param request - ListCalendarsRequest
     *
     * @returns ListCalendarsResponse
     *
     * @param ListCalendarsRequest $request
     *
     * @return ListCalendarsResponse
     */
    public function listCalendars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalendarsWithOptions($request, $runtime);
    }

    /**
     * 查询实例列表.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例列表.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * 查询Executor列表.
     *
     * @param request - ListExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExecutorsResponse
     *
     * @param ListExecutorsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListExecutorsResponse
     */
    public function listExecutorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutors',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Executor列表.
     *
     * @param request - ListExecutorsRequest
     *
     * @returns ListExecutorsResponse
     *
     * @param ListExecutorsRequest $request
     *
     * @return ListExecutorsResponse
     */
    public function listExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutorsWithOptions($request, $runtime);
    }

    /**
     * 获取任务实例列表.
     *
     * @param request - ListJobExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobExecutionsResponse
     *
     * @param ListJobExecutionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListJobExecutionsResponse
     */
    public function listJobExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workflowExecutionId) {
            @$query['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobExecutions',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务实例列表.
     *
     * @param request - ListJobExecutionsRequest
     *
     * @returns ListJobExecutionsResponse
     *
     * @param ListJobExecutionsRequest $request
     *
     * @return ListJobExecutionsResponse
     */
    public function listJobExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutionsWithOptions($request, $runtime);
    }

    /**
     * 获取任务脚本历史列表.
     *
     * @param request - ListJobScriptHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobScriptHistoryResponse
     *
     * @param ListJobScriptHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListJobScriptHistoryResponse
     */
    public function listJobScriptHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobScriptHistory',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobScriptHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务脚本历史列表.
     *
     * @param request - ListJobScriptHistoryRequest
     *
     * @returns ListJobScriptHistoryResponse
     *
     * @param ListJobScriptHistoryRequest $request
     *
     * @return ListJobScriptHistoryResponse
     */
    public function listJobScriptHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobScriptHistoryWithOptions($request, $runtime);
    }

    /**
     * 获取任务列表.
     *
     * @param request - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->jobHandler) {
            @$query['JobHandler'] = $request->jobHandler;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务列表.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * 获取k8s资源列表.
     *
     * @param request - ListK8sResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListK8sResourceResponse
     *
     * @param ListK8sResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListK8sResourceResponse
     */
    public function listK8sResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->k8sClusterId) {
            @$query['K8sClusterId'] = $request->k8sClusterId;
        }

        if (null !== $request->k8sNamespace) {
            @$query['K8sNamespace'] = $request->k8sNamespace;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListK8sResource',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListK8sResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取k8s资源列表.
     *
     * @param request - ListK8sResourceRequest
     *
     * @returns ListK8sResourceResponse
     *
     * @param ListK8sResourceRequest $request
     *
     * @return ListK8sResourceResponse
     */
    public function listK8sResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listK8sResourceWithOptions($request, $runtime);
    }

    /**
     * 获取executor的label列表.
     *
     * @param request - ListLablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLablesResponse
     *
     * @param ListLablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListLablesResponse
     */
    public function listLablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLables',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取executor的label列表.
     *
     * @param request - ListLablesRequest
     *
     * @returns ListLablesResponse
     *
     * @param ListLablesRequest $request
     *
     * @return ListLablesResponse
     */
    public function listLables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLablesWithOptions($request, $runtime);
    }

    /**
     * 获取可用区列表.
     *
     * @param request - ListRegionZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionZoneResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionZoneResponse
     */
    public function listRegionZoneWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegionZone',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取可用区列表.
     *
     * @returns ListRegionZoneResponse
     *
     * @return ListRegionZoneResponse
     */
    public function listRegionZone()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionZoneWithOptions($runtime);
    }

    /**
     * 获取所有region列表.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取所有region列表.
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * 查询调度事件.
     *
     * @param request - ListScheduleEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduleEventResponse
     *
     * @param ListScheduleEventRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListScheduleEventResponse
     */
    public function listScheduleEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduleEvent',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScheduleEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询调度事件.
     *
     * @param request - ListScheduleEventRequest
     *
     * @returns ListScheduleEventResponse
     *
     * @param ListScheduleEventRequest $request
     *
     * @return ListScheduleEventResponse
     */
    public function listScheduleEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduleEventWithOptions($request, $runtime);
    }

    /**
     * 获取指定时间类型和表达式未来5次调度时间.
     *
     * @param request - ListScheduleTimesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduleTimesResponse
     *
     * @param ListScheduleTimesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListScheduleTimesResponse
     */
    public function listScheduleTimesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduleTimes',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScheduleTimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定时间类型和表达式未来5次调度时间.
     *
     * @param request - ListScheduleTimesRequest
     *
     * @returns ListScheduleTimesResponse
     *
     * @param ListScheduleTimesRequest $request
     *
     * @return ListScheduleTimesResponse
     */
    public function listScheduleTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduleTimesWithOptions($request, $runtime);
    }

    /**
     * 获取流程实例列表.
     *
     * @param request - ListWorkflowExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowExecutionsResponse
     *
     * @param ListWorkflowExecutionsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListWorkflowExecutionsResponse
     */
    public function listWorkflowExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workflowExecutionId) {
            @$query['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        if (null !== $request->workflowName) {
            @$query['WorkflowName'] = $request->workflowName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflowExecutions',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkflowExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流程实例列表.
     *
     * @param request - ListWorkflowExecutionsRequest
     *
     * @returns ListWorkflowExecutionsResponse
     *
     * @param ListWorkflowExecutionsRequest $request
     *
     * @return ListWorkflowExecutionsResponse
     */
    public function listWorkflowExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowExecutionsWithOptions($request, $runtime);
    }

    /**
     * 获取当前工作流版本列表.
     *
     * @param request - ListWorkflowVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowVersionsResponse
     *
     * @param ListWorkflowVersionsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListWorkflowVersionsResponse
     */
    public function listWorkflowVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflowVersions',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWorkflowVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取当前工作流版本列表.
     *
     * @param request - ListWorkflowVersionsRequest
     *
     * @returns ListWorkflowVersionsResponse
     *
     * @param ListWorkflowVersionsRequest $request
     *
     * @return ListWorkflowVersionsResponse
     */
    public function listWorkflowVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowVersionsWithOptions($request, $runtime);
    }

    /**
     * 获取工作流列表.
     *
     * @param request - ListWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkflowsResponse
     *
     * @param ListWorkflowsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkflowsResponse
     */
    public function listWorkflowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkflows',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param ListWorkflowsRequest $request
     *
     * @return ListWorkflowsResponse
     */
    public function listWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWorkflowsWithOptions($request, $runtime);
    }

    /**
     * 补数工作流
     *
     * @param request - OperateBackfillWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateBackfillWorkflowResponse
     *
     * @param OperateBackfillWorkflowRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateBackfillWorkflowResponse
     */
    public function operateBackfillWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateBackfillWorkflow',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateBackfillWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 补数工作流
     *
     * @param request - OperateBackfillWorkflowRequest
     *
     * @returns OperateBackfillWorkflowResponse
     *
     * @param OperateBackfillWorkflowRequest $request
     *
     * @return OperateBackfillWorkflowResponse
     */
    public function operateBackfillWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateBackfillWorkflowWithOptions($request, $runtime);
    }

    /**
     * 指定执行器.
     *
     * @param tmpReq - OperateDesignateExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateDesignateExecutorsResponse
     *
     * @param OperateDesignateExecutorsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateDesignateExecutorsResponse
     */
    public function operateDesignateExecutorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateDesignateExecutorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addressList) {
            $request->addressListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addressList, 'AddressList', 'json');
        }

        $body = [];
        if (null !== $request->addressListShrink) {
            @$body['AddressList'] = $request->addressListShrink;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->designateType) {
            @$body['DesignateType'] = $request->designateType;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->transferable) {
            @$body['Transferable'] = $request->transferable;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateDesignateExecutors',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateDesignateExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 指定执行器.
     *
     * @param request - OperateDesignateExecutorsRequest
     *
     * @returns OperateDesignateExecutorsResponse
     *
     * @param OperateDesignateExecutorsRequest $request
     *
     * @return OperateDesignateExecutorsResponse
     */
    public function operateDesignateExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDesignateExecutorsWithOptions($request, $runtime);
    }

    /**
     * 批量禁用任务
     *
     * @param tmpReq - OperateDisableJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateDisableJobsResponse
     *
     * @param OperateDisableJobsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return OperateDisableJobsResponse
     */
    public function operateDisableJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateDisableJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateDisableJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateDisableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量禁用任务
     *
     * @param request - OperateDisableJobsRequest
     *
     * @returns OperateDisableJobsResponse
     *
     * @param OperateDisableJobsRequest $request
     *
     * @return OperateDisableJobsResponse
     */
    public function operateDisableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDisableJobsWithOptions($request, $runtime);
    }

    /**
     * 批量禁用工作流
     *
     * @param tmpReq - OperateDisableWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateDisableWorkflowsResponse
     *
     * @param OperateDisableWorkflowsRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateDisableWorkflowsResponse
     */
    public function operateDisableWorkflowsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateDisableWorkflowsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workflowIds) {
            $request->workflowIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowIdsShrink) {
            @$body['WorkflowIds'] = $request->workflowIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateDisableWorkflows',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateDisableWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量禁用工作流
     *
     * @param request - OperateDisableWorkflowsRequest
     *
     * @returns OperateDisableWorkflowsResponse
     *
     * @param OperateDisableWorkflowsRequest $request
     *
     * @return OperateDisableWorkflowsResponse
     */
    public function operateDisableWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDisableWorkflowsWithOptions($request, $runtime);
    }

    /**
     * 批量启用任务
     *
     * @param tmpReq - OperateEnableJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateEnableJobsResponse
     *
     * @param OperateEnableJobsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return OperateEnableJobsResponse
     */
    public function operateEnableJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateEnableJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateEnableJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateEnableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量启用任务
     *
     * @param request - OperateEnableJobsRequest
     *
     * @returns OperateEnableJobsResponse
     *
     * @param OperateEnableJobsRequest $request
     *
     * @return OperateEnableJobsResponse
     */
    public function operateEnableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateEnableJobsWithOptions($request, $runtime);
    }

    /**
     * 批量启用工作流
     *
     * @param tmpReq - OperateEnableWorkflowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateEnableWorkflowsResponse
     *
     * @param OperateEnableWorkflowsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return OperateEnableWorkflowsResponse
     */
    public function operateEnableWorkflowsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateEnableWorkflowsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->workflowIds) {
            $request->workflowIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowIdsShrink) {
            @$body['WorkflowIds'] = $request->workflowIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateEnableWorkflows',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateEnableWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量启用工作流
     *
     * @param request - OperateEnableWorkflowsRequest
     *
     * @returns OperateEnableWorkflowsResponse
     *
     * @param OperateEnableWorkflowsRequest $request
     *
     * @return OperateEnableWorkflowsResponse
     */
    public function operateEnableWorkflows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateEnableWorkflowsWithOptions($request, $runtime);
    }

    /**
     * 运行一次任务
     *
     * @param request - OperateExecuteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateExecuteJobResponse
     *
     * @param OperateExecuteJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OperateExecuteJobResponse
     */
    public function operateExecuteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceParameters) {
            @$body['InstanceParameters'] = $request->instanceParameters;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->worker) {
            @$body['Worker'] = $request->worker;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateExecuteJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateExecuteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 运行一次任务
     *
     * @param request - OperateExecuteJobRequest
     *
     * @returns OperateExecuteJobResponse
     *
     * @param OperateExecuteJobRequest $request
     *
     * @return OperateExecuteJobResponse
     */
    public function operateExecuteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateExecuteJobWithOptions($request, $runtime);
    }

    /**
     * 运行一次工作流
     *
     * @param request - OperateExecuteWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateExecuteWorkflowResponse
     *
     * @param OperateExecuteWorkflowRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OperateExecuteWorkflowResponse
     */
    public function operateExecuteWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateExecuteWorkflow',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateExecuteWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 运行一次工作流
     *
     * @param request - OperateExecuteWorkflowRequest
     *
     * @returns OperateExecuteWorkflowResponse
     *
     * @param OperateExecuteWorkflowRequest $request
     *
     * @return OperateExecuteWorkflowResponse
     */
    public function operateExecuteWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateExecuteWorkflowWithOptions($request, $runtime);
    }

    /**
     * Hold住任务实例.
     *
     * @param request - OperateHoldJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateHoldJobExecutionResponse
     *
     * @param OperateHoldJobExecutionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateHoldJobExecutionResponse
     */
    public function operateHoldJobExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateHoldJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateHoldJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Hold住任务实例.
     *
     * @param request - OperateHoldJobExecutionRequest
     *
     * @returns OperateHoldJobExecutionResponse
     *
     * @param OperateHoldJobExecutionRequest $request
     *
     * @return OperateHoldJobExecutionResponse
     */
    public function operateHoldJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateHoldJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 将工作流中未开始的节点置为Held状态
     *
     * @param request - OperateHoldWorkflowExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateHoldWorkflowExecutionResponse
     *
     * @param OperateHoldWorkflowExecutionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OperateHoldWorkflowExecutionResponse
     */
    public function operateHoldWorkflowExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowExecutionId) {
            @$body['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateHoldWorkflowExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateHoldWorkflowExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将工作流中未开始的节点置为Held状态
     *
     * @param request - OperateHoldWorkflowExecutionRequest
     *
     * @returns OperateHoldWorkflowExecutionResponse
     *
     * @param OperateHoldWorkflowExecutionRequest $request
     *
     * @return OperateHoldWorkflowExecutionResponse
     */
    public function operateHoldWorkflowExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateHoldWorkflowExecutionWithOptions($request, $runtime);
    }

    /**
     * 标记任务实例为成功状态
     *
     * @param request - OperateMarkSuccessJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateMarkSuccessJobExecutionResponse
     *
     * @param OperateMarkSuccessJobExecutionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return OperateMarkSuccessJobExecutionResponse
     */
    public function operateMarkSuccessJobExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateMarkSuccessJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateMarkSuccessJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标记任务实例为成功状态
     *
     * @param request - OperateMarkSuccessJobExecutionRequest
     *
     * @returns OperateMarkSuccessJobExecutionResponse
     *
     * @param OperateMarkSuccessJobExecutionRequest $request
     *
     * @return OperateMarkSuccessJobExecutionResponse
     */
    public function operateMarkSuccessJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateMarkSuccessJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 将工作流实例标记为成功
     *
     * @param request - OperateMarkSuccessWorkflowExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateMarkSuccessWorkflowExecutionResponse
     *
     * @param OperateMarkSuccessWorkflowExecutionRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return OperateMarkSuccessWorkflowExecutionResponse
     */
    public function operateMarkSuccessWorkflowExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowExecutionId) {
            @$body['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateMarkSuccessWorkflowExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateMarkSuccessWorkflowExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将工作流实例标记为成功
     *
     * @param request - OperateMarkSuccessWorkflowExecutionRequest
     *
     * @returns OperateMarkSuccessWorkflowExecutionResponse
     *
     * @param OperateMarkSuccessWorkflowExecutionRequest $request
     *
     * @return OperateMarkSuccessWorkflowExecutionResponse
     */
    public function operateMarkSuccessWorkflowExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateMarkSuccessWorkflowExecutionWithOptions($request, $runtime);
    }

    /**
     * 重刷任务历史数据.
     *
     * @param request - OperateRerunJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateRerunJobResponse
     *
     * @param OperateRerunJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OperateRerunJobResponse
     */
    public function operateRerunJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dataTime) {
            @$query['DataTime'] = $request->dataTime;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateRerunJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateRerunJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重刷任务历史数据.
     *
     * @param request - OperateRerunJobRequest
     *
     * @returns OperateRerunJobResponse
     *
     * @param OperateRerunJobRequest $request
     *
     * @return OperateRerunJobResponse
     */
    public function operateRerunJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRerunJobWithOptions($request, $runtime);
    }

    /**
     * 重跑失败的任务实例.
     *
     * @param tmpReq - OperateRetryJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateRetryJobExecutionResponse
     *
     * @param OperateRetryJobExecutionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return OperateRetryJobExecutionResponse
     */
    public function operateRetryJobExecutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateRetryJobExecutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskList) {
            $request->taskListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskList, 'TaskList', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        if (null !== $request->taskListShrink) {
            @$query['TaskList'] = $request->taskListShrink;
        }

        if (null !== $request->triggerChild) {
            @$query['TriggerChild'] = $request->triggerChild;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateRetryJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateRetryJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重跑失败的任务实例.
     *
     * @param request - OperateRetryJobExecutionRequest
     *
     * @returns OperateRetryJobExecutionResponse
     *
     * @param OperateRetryJobExecutionRequest $request
     *
     * @return OperateRetryJobExecutionResponse
     */
    public function operateRetryJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRetryJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 重跑工作流实例.
     *
     * @param request - OperateRetryWorkflowExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateRetryWorkflowExecutionResponse
     *
     * @param OperateRetryWorkflowExecutionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return OperateRetryWorkflowExecutionResponse
     */
    public function operateRetryWorkflowExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->onlyFailed) {
            @$body['OnlyFailed'] = $request->onlyFailed;
        }

        if (null !== $request->workflowExecutionId) {
            @$body['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateRetryWorkflowExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateRetryWorkflowExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重跑工作流实例.
     *
     * @param request - OperateRetryWorkflowExecutionRequest
     *
     * @returns OperateRetryWorkflowExecutionResponse
     *
     * @param OperateRetryWorkflowExecutionRequest $request
     *
     * @return OperateRetryWorkflowExecutionResponse
     */
    public function operateRetryWorkflowExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRetryWorkflowExecutionWithOptions($request, $runtime);
    }

    /**
     * 跳过任务实例.
     *
     * @param request - OperateSkipJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateSkipJobExecutionResponse
     *
     * @param OperateSkipJobExecutionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateSkipJobExecutionResponse
     */
    public function operateSkipJobExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateSkipJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateSkipJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 跳过任务实例.
     *
     * @param request - OperateSkipJobExecutionRequest
     *
     * @returns OperateSkipJobExecutionResponse
     *
     * @param OperateSkipJobExecutionRequest $request
     *
     * @return OperateSkipJobExecutionResponse
     */
    public function operateSkipJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateSkipJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 停止运行中的任务实例.
     *
     * @param tmpReq - OperateStopJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateStopJobExecutionResponse
     *
     * @param OperateStopJobExecutionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateStopJobExecutionResponse
     */
    public function operateStopJobExecutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateStopJobExecutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskList) {
            $request->taskListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskList, 'TaskList', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        if (null !== $request->taskListShrink) {
            @$query['TaskList'] = $request->taskListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateStopJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateStopJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止运行中的任务实例.
     *
     * @param request - OperateStopJobExecutionRequest
     *
     * @returns OperateStopJobExecutionResponse
     *
     * @param OperateStopJobExecutionRequest $request
     *
     * @return OperateStopJobExecutionResponse
     */
    public function operateStopJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateStopJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 停止正在运行的工作流实例.
     *
     * @param request - OperateStopWorkflowExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateStopWorkflowExecutionResponse
     *
     * @param OperateStopWorkflowExecutionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OperateStopWorkflowExecutionResponse
     */
    public function operateStopWorkflowExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowExecutionId) {
            @$body['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateStopWorkflowExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateStopWorkflowExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止正在运行的工作流实例.
     *
     * @param request - OperateStopWorkflowExecutionRequest
     *
     * @returns OperateStopWorkflowExecutionResponse
     *
     * @param OperateStopWorkflowExecutionRequest $request
     *
     * @return OperateStopWorkflowExecutionResponse
     */
    public function operateStopWorkflowExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateStopWorkflowExecutionWithOptions($request, $runtime);
    }

    /**
     * 将held状态的任务恢复.
     *
     * @param request - OperateUnholdJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateUnholdJobExecutionResponse
     *
     * @param OperateUnholdJobExecutionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateUnholdJobExecutionResponse
     */
    public function operateUnholdJobExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateUnholdJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateUnholdJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将held状态的任务恢复.
     *
     * @param request - OperateUnholdJobExecutionRequest
     *
     * @returns OperateUnholdJobExecutionResponse
     *
     * @param OperateUnholdJobExecutionRequest $request
     *
     * @return OperateUnholdJobExecutionResponse
     */
    public function operateUnholdJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateUnholdJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 将工作流中held状态的节点恢复.
     *
     * @param request - OperateUnholdWorkflowExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateUnholdWorkflowExecutionResponse
     *
     * @param OperateUnholdWorkflowExecutionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return OperateUnholdWorkflowExecutionResponse
     */
    public function operateUnholdWorkflowExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workflowExecutionId) {
            @$body['WorkflowExecutionId'] = $request->workflowExecutionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateUnholdWorkflowExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateUnholdWorkflowExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将工作流中held状态的节点恢复.
     *
     * @param request - OperateUnholdWorkflowExecutionRequest
     *
     * @returns OperateUnholdWorkflowExecutionResponse
     *
     * @param OperateUnholdWorkflowExecutionRequest $request
     *
     * @return OperateUnholdWorkflowExecutionResponse
     */
    public function operateUnholdWorkflowExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateUnholdWorkflowExecutionWithOptions($request, $runtime);
    }

    /**
     * 将skipped状态的任务恢复.
     *
     * @param request - OperateUnskipJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateUnskipJobExecutionResponse
     *
     * @param OperateUnskipJobExecutionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateUnskipJobExecutionResponse
     */
    public function operateUnskipJobExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateUnskipJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateUnskipJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将skipped状态的任务恢复.
     *
     * @param request - OperateUnskipJobExecutionRequest
     *
     * @returns OperateUnskipJobExecutionResponse
     *
     * @param OperateUnskipJobExecutionRequest $request
     *
     * @return OperateUnskipJobExecutionResponse
     */
    public function operateUnskipJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateUnskipJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 同步任务
     *
     * @param tmpReq - SyncJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncJobsResponse
     *
     * @param SyncJobsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return SyncJobsResponse
     */
    public function syncJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        if (null !== $request->originalAppName) {
            @$body['OriginalAppName'] = $request->originalAppName;
        }

        if (null !== $request->originalClusterId) {
            @$body['OriginalClusterId'] = $request->originalClusterId;
        }

        if (null !== $request->targetAppName) {
            @$body['TargetAppName'] = $request->targetAppName;
        }

        if (null !== $request->targetClusterId) {
            @$body['TargetClusterId'] = $request->targetClusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步任务
     *
     * @param request - SyncJobsRequest
     *
     * @returns SyncJobsResponse
     *
     * @param SyncJobsRequest $request
     *
     * @return SyncJobsResponse
     */
    public function syncJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncJobsWithOptions($request, $runtime);
    }

    /**
     * 更新应用分组.
     *
     * @param request - UpdateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppResponse
     *
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessToken) {
            @$body['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->enableLog) {
            @$body['EnableLog'] = $request->enableLog;
        }

        if (null !== $request->labelRouteStrategy) {
            @$body['LabelRouteStrategy'] = $request->labelRouteStrategy;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用分组.
     *
     * @param request - UpdateAppRequest
     *
     * @returns UpdateAppResponse
     *
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * 更新日历.
     *
     * @param request - UpdateCalendarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCalendarResponse
     *
     * @param UpdateCalendarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCalendarResponse
     */
    public function updateCalendarWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->calendarName) {
            @$body['CalendarName'] = $request->calendarName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->incremental) {
            @$body['Incremental'] = $request->incremental;
        }

        if (null !== $request->months) {
            @$body['Months'] = $request->months;
        }

        if (null !== $request->year) {
            @$body['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCalendar',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新日历.
     *
     * @param request - UpdateCalendarRequest
     *
     * @returns UpdateCalendarResponse
     *
     * @param UpdateCalendarRequest $request
     *
     * @return UpdateCalendarResponse
     */
    public function updateCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCalendarWithOptions($request, $runtime);
    }

    /**
     * 更新集群.
     *
     * @param request - UpdateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新集群.
     *
     * @param request - UpdateClusterRequest
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     *
     * @return UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * 更新执行器.
     *
     * @param request - UpdateExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateExecutorsResponse
     *
     * @param UpdateExecutorsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateExecutorsResponse
     */
    public function updateExecutorsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->workerType) {
            @$body['WorkerType'] = $request->workerType;
        }

        if (null !== $request->workers) {
            @$body['Workers'] = $request->workers;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateExecutors',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新执行器.
     *
     * @param request - UpdateExecutorsRequest
     *
     * @returns UpdateExecutorsResponse
     *
     * @param UpdateExecutorsRequest $request
     *
     * @return UpdateExecutorsResponse
     */
    public function updateExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateExecutorsWithOptions($request, $runtime);
    }

    /**
     * 更新任务信息.
     *
     * @param tmpReq - UpdateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->noticeConfig) {
            $request->noticeConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeConfig, 'NoticeConfig', 'json');
        }

        if (null !== $tmpReq->noticeContacts) {
            $request->noticeContactsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeContacts, 'NoticeContacts', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->attemptInterval) {
            @$body['AttemptInterval'] = $request->attemptInterval;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->childJobId) {
            @$body['ChildJobId'] = $request->childJobId;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dependentStrategy) {
            @$body['DependentStrategy'] = $request->dependentStrategy;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->executorBlockStrategy) {
            @$body['ExecutorBlockStrategy'] = $request->executorBlockStrategy;
        }

        if (null !== $request->jobHandler) {
            @$body['JobHandler'] = $request->jobHandler;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->maxAttempt) {
            @$body['MaxAttempt'] = $request->maxAttempt;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->noticeConfigShrink) {
            @$body['NoticeConfig'] = $request->noticeConfigShrink;
        }

        if (null !== $request->noticeContactsShrink) {
            @$body['NoticeContacts'] = $request->noticeContactsShrink;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->routeStrategy) {
            @$body['RouteStrategy'] = $request->routeStrategy;
        }

        if (null !== $request->script) {
            @$body['Script'] = $request->script;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeType) {
            @$body['StartTimeType'] = $request->startTimeType;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        if (null !== $request->weight) {
            @$body['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新任务信息.
     *
     * @param request - UpdateJobRequest
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobWithOptions($request, $runtime);
    }

    /**
     * 更新任务脚本内容.
     *
     * @param request - UpdateJobScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobScriptResponse
     *
     * @param UpdateJobScriptRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateJobScriptResponse
     */
    public function updateJobScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->scriptContent) {
            @$body['ScriptContent'] = $request->scriptContent;
        }

        if (null !== $request->versionDescription) {
            @$body['VersionDescription'] = $request->versionDescription;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJobScript',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新任务脚本内容.
     *
     * @param request - UpdateJobScriptRequest
     *
     * @returns UpdateJobScriptResponse
     *
     * @param UpdateJobScriptRequest $request
     *
     * @return UpdateJobScriptResponse
     */
    public function updateJobScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobScriptWithOptions($request, $runtime);
    }

    /**
     * 更新工作流
     *
     * @param request - UpdateWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkflowResponse
     *
     * @param UpdateWorkflowRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkflow',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
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
     * @param UpdateWorkflowRequest $request
     *
     * @return UpdateWorkflowResponse
     */
    public function updateWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowWithOptions($request, $runtime);
    }

    /**
     * 更新工作流DAG.
     *
     * @param tmpReq - UpdateWorkflowDAGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkflowDAGResponse
     *
     * @param UpdateWorkflowDAGRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateWorkflowDAGResponse
     */
    public function updateWorkflowDAGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkflowDAGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dag) {
            $request->dagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dag, 'Dag', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dagShrink) {
            @$body['Dag'] = $request->dagShrink;
        }

        if (null !== $request->dagVersion) {
            @$body['DagVersion'] = $request->dagVersion;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkflowDAG',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkflowDAGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新工作流DAG.
     *
     * @param request - UpdateWorkflowDAGRequest
     *
     * @returns UpdateWorkflowDAGResponse
     *
     * @param UpdateWorkflowDAGRequest $request
     *
     * @return UpdateWorkflowDAGResponse
     */
    public function updateWorkflowDAG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDAGWithOptions($request, $runtime);
    }

    /**
     * 切换工作流DAG版本.
     *
     * @param request - UpdateWorkflowDAGVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkflowDAGVersionResponse
     *
     * @param UpdateWorkflowDAGVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateWorkflowDAGVersionResponse
     */
    public function updateWorkflowDAGVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dagVersion) {
            @$body['DagVersion'] = $request->dagVersion;
        }

        if (null !== $request->workflowId) {
            @$body['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkflowDAGVersion',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWorkflowDAGVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 切换工作流DAG版本.
     *
     * @param request - UpdateWorkflowDAGVersionRequest
     *
     * @returns UpdateWorkflowDAGVersionResponse
     *
     * @param UpdateWorkflowDAGVersionRequest $request
     *
     * @return UpdateWorkflowDAGVersionResponse
     */
    public function updateWorkflowDAGVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWorkflowDAGVersionWithOptions($request, $runtime);
    }
}
