<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetDashboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetDashboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobEventsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobEventsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobMetricsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobMetricsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobSanityCheckResultRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobSanityCheckResultResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodEventsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodEventsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodLogsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodLogsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetRayDashboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetRayDashboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardSharedUrlRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardSharedUrlResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTokenRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTokenResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetWebTerminalRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetWebTerminalResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobSanityCheckResultsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobSanityCheckResultsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListTensorboardsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListTensorboardsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StartTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StartTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateTensorboardResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Paidlc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-2-pop' => 'pai-dlc.aliyuncs.com',
            'ap-south-1' => 'pai-dlc.aliyuncs.com',
            'ap-southeast-2' => 'pai-dlc.aliyuncs.com',
            'cn-beijing-finance-1' => 'pai-dlc.aliyuncs.com',
            'cn-beijing-finance-pop' => 'pai-dlc.aliyuncs.com',
            'cn-beijing-gov-1' => 'pai-dlc.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'pai-dlc.aliyuncs.com',
            'cn-chengdu' => 'pai-dlc.aliyuncs.com',
            'cn-edge-1' => 'pai-dlc.aliyuncs.com',
            'cn-fujian' => 'pai-dlc.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-finance' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-test-306' => 'pai-dlc.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'pai-dlc.aliyuncs.com',
            'cn-huhehaote' => 'pai-dlc.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'pai-dlc.aliyuncs.com',
            'cn-north-2-gov-1' => 'pai-dlc.aliyuncs.com',
            'cn-qingdao' => 'pai-dlc.aliyuncs.com',
            'cn-qingdao-nebula' => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-inner' => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-inner' => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'pai-dlc.aliyuncs.com',
            'cn-wuhan' => 'pai-dlc.aliyuncs.com',
            'cn-yushanfang' => 'pai-dlc.aliyuncs.com',
            'cn-zhangbei' => 'pai-dlc.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'pai-dlc.aliyuncs.com',
            'cn-zhangjiakou' => 'pai-dlc.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'pai-dlc.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'pai-dlc.aliyuncs.com',
            'eu-west-1' => 'pai-dlc.aliyuncs.com',
            'eu-west-1-oxs' => 'pai-dlc.aliyuncs.com',
            'me-east-1' => 'pai-dlc.aliyuncs.com',
            'rus-west-1-pop' => 'pai-dlc.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pai-dlc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a job that runs in a cluster. You can configure the data source, code source, startup command, and computing resources of each node on which a job runs.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/171758.html) of Deep Learning Containers (DLC) of Platform for AI (PAI).
     *
     * @param request - CreateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->codeSource) {
            @$body['CodeSource'] = $request->codeSource;
        }

        if (null !== $request->credentialConfig) {
            @$body['CredentialConfig'] = $request->credentialConfig;
        }

        if (null !== $request->customEnvs) {
            @$body['CustomEnvs'] = $request->customEnvs;
        }

        if (null !== $request->dataSources) {
            @$body['DataSources'] = $request->dataSources;
        }

        if (null !== $request->debuggerConfigContent) {
            @$body['DebuggerConfigContent'] = $request->debuggerConfigContent;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->elasticSpec) {
            @$body['ElasticSpec'] = $request->elasticSpec;
        }

        if (null !== $request->envs) {
            @$body['Envs'] = $request->envs;
        }

        if (null !== $request->jobMaxRunningTimeMinutes) {
            @$body['JobMaxRunningTimeMinutes'] = $request->jobMaxRunningTimeMinutes;
        }

        if (null !== $request->jobSpecs) {
            @$body['JobSpecs'] = $request->jobSpecs;
        }

        if (null !== $request->jobType) {
            @$body['JobType'] = $request->jobType;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->settings) {
            @$body['Settings'] = $request->settings;
        }

        if (null !== $request->successPolicy) {
            @$body['SuccessPolicy'] = $request->successPolicy;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateVersion) {
            @$body['TemplateVersion'] = $request->templateVersion;
        }

        if (null !== $request->thirdpartyLibDir) {
            @$body['ThirdpartyLibDir'] = $request->thirdpartyLibDir;
        }

        if (null !== $request->thirdpartyLibs) {
            @$body['ThirdpartyLibs'] = $request->thirdpartyLibs;
        }

        if (null !== $request->userCommand) {
            @$body['UserCommand'] = $request->userCommand;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a job that runs in a cluster. You can configure the data source, code source, startup command, and computing resources of each node on which a job runs.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/171758.html) of Deep Learning Containers (DLC) of Platform for AI (PAI).
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
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a TensorBoard by using a job or specifying a data source configuration.
     *
     * @param request - CreateTensorboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTensorboardResponse
     *
     * @param CreateTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTensorboardResponse
     */
    public function createTensorboardWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->cpu) {
            @$body['Cpu'] = $request->cpu;
        }

        if (null !== $request->dataSourceId) {
            @$body['DataSourceId'] = $request->dataSourceId;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->dataSources) {
            @$body['DataSources'] = $request->dataSources;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->maxRunningTimeMinutes) {
            @$body['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }

        if (null !== $request->memory) {
            @$body['Memory'] = $request->memory;
        }

        if (null !== $request->options) {
            @$body['Options'] = $request->options;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->quotaId) {
            @$body['QuotaId'] = $request->quotaId;
        }

        if (null !== $request->sourceId) {
            @$body['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->summaryPath) {
            @$body['SummaryPath'] = $request->summaryPath;
        }

        if (null !== $request->summaryRelativePath) {
            @$body['SummaryRelativePath'] = $request->summaryRelativePath;
        }

        if (null !== $request->tensorboardDataSources) {
            @$body['TensorboardDataSources'] = $request->tensorboardDataSources;
        }

        if (null !== $request->tensorboardSpec) {
            @$body['TensorboardSpec'] = $request->tensorboardSpec;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTensorboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a TensorBoard by using a job or specifying a data source configuration.
     *
     * @param request - CreateTensorboardRequest
     *
     * @returns CreateTensorboardResponse
     *
     * @param CreateTensorboardRequest $request
     *
     * @return CreateTensorboardResponse
     */
    public function createTensorboard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTensorboardWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a completed or stopped job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobResponse
     *
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($JobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteJob',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a completed or stopped job.
     *
     * @returns DeleteJobResponse
     *
     * @param string $JobId
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * Deletes a stopped TensorBoard.
     *
     * @param request - DeleteTensorboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTensorboardResponse
     *
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTensorboardResponse
     */
    public function deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTensorboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards/' . Url::percentEncode($TensorboardId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a stopped TensorBoard.
     *
     * @param request - DeleteTensorboardRequest
     *
     * @returns DeleteTensorboardResponse
     *
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request
     *
     * @return DeleteTensorboardResponse
     */
    public function deleteTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * Gets the DLC task\\"s Dashboard URL, if one exists.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/171758.html) of Deep Learning Containers (DLC) of Platform for AI (PAI).
     *
     * @param request - GetDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDashboardResponse
     *
     * @param string              $jobId
     * @param GetDashboardRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetDashboardResponse
     */
    public function getDashboardWithOptions($jobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isShared) {
            @$query['isShared'] = $request->isShared;
        }

        if (null !== $request->token) {
            @$query['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDashboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($jobId) . '/dashboard',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the DLC task\\"s Dashboard URL, if one exists.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/171758.html) of Deep Learning Containers (DLC) of Platform for AI (PAI).
     *
     * @param request - GetDashboardRequest
     *
     * @returns GetDashboardResponse
     *
     * @param string              $jobId
     * @param GetDashboardRequest $request
     *
     * @return GetDashboardResponse
     */
    public function getDashboard($jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardWithOptions($jobId, $request, $headers, $runtime);
    }

    /**
     * Obtains the configuration and runtime information of a job.
     *
     * @param request - GetJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobResponse
     *
     * @param string         $JobId
     * @param GetJobRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->needDetail) {
            @$query['NeedDetail'] = $request->needDetail;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the configuration and runtime information of a job.
     *
     * @param request - GetJobRequest
     *
     * @returns GetJobResponse
     *
     * @param string        $JobId
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * Obtains the system events of a job.
     *
     * @param request - GetJobEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobEventsResponse
     *
     * @param string              $JobId
     * @param GetJobEventsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobEventsResponse
     */
    public function getJobEventsWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxEventsNum) {
            @$query['MaxEventsNum'] = $request->maxEventsNum;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobEvents',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the system events of a job.
     *
     * @param request - GetJobEventsRequest
     *
     * @returns GetJobEventsResponse
     *
     * @param string              $JobId
     * @param GetJobEventsRequest $request
     *
     * @return GetJobEventsResponse
     */
    public function getJobEvents($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobEventsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * Obtains the monitoring data of a job, including the CPU, GPU, and memory utilization, network, and disk read/write rate. ⚠️ Note: Except for pay-as-you-go tasks based on general-purpose computing resources, all task types are connected to CloudMonitor. Use the CloudMonitor API to call related monitoring. The overwritten features in the original API are no longer maintained. For more information, see \\[Training monitoring and alerting]\\\\(https://www.alibabacloud.com/help/zh/pai/user-guide/training-monitoring-and-alerting).
     *
     * @param request - GetJobMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobMetricsResponse
     *
     * @param string               $JobId
     * @param GetJobMetricsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetJobMetricsResponse
     */
    public function getJobMetricsWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobMetrics',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the monitoring data of a job, including the CPU, GPU, and memory utilization, network, and disk read/write rate. ⚠️ Note: Except for pay-as-you-go tasks based on general-purpose computing resources, all task types are connected to CloudMonitor. Use the CloudMonitor API to call related monitoring. The overwritten features in the original API are no longer maintained. For more information, see \\[Training monitoring and alerting]\\\\(https://www.alibabacloud.com/help/zh/pai/user-guide/training-monitoring-and-alerting).
     *
     * @param request - GetJobMetricsRequest
     *
     * @returns GetJobMetricsResponse
     *
     * @param string               $JobId
     * @param GetJobMetricsRequest $request
     *
     * @return GetJobMetricsResponse
     */
    public function getJobMetrics($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobMetricsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * Obtains specified job sanity check result in a Deep Learning Containers (DLC) job.
     *
     * @param request - GetJobSanityCheckResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobSanityCheckResultResponse
     *
     * @param string                         $JobId
     * @param GetJobSanityCheckResultRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetJobSanityCheckResultResponse
     */
    public function getJobSanityCheckResultWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sanityCheckNumber) {
            @$query['SanityCheckNumber'] = $request->sanityCheckNumber;
        }

        if (null !== $request->sanityCheckPhase) {
            @$query['SanityCheckPhase'] = $request->sanityCheckPhase;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobSanityCheckResult',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/sanitycheckresult',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetJobSanityCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains specified job sanity check result in a Deep Learning Containers (DLC) job.
     *
     * @param request - GetJobSanityCheckResultRequest
     *
     * @returns GetJobSanityCheckResultResponse
     *
     * @param string                         $JobId
     * @param GetJobSanityCheckResultRequest $request
     *
     * @return GetJobSanityCheckResultResponse
     */
    public function getJobSanityCheckResult($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobSanityCheckResultWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * Obtains the system events of a specific node in a job to locate and troubleshoot issues.
     *
     * @param request - GetPodEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPodEventsResponse
     *
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetPodEventsResponse
     */
    public function getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxEventsNum) {
            @$query['MaxEventsNum'] = $request->maxEventsNum;
        }

        if (null !== $request->podUid) {
            @$query['PodUid'] = $request->podUid;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPodEvents',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/pods/' . Url::percentEncode($PodId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPodEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the system events of a specific node in a job to locate and troubleshoot issues.
     *
     * @param request - GetPodEventsRequest
     *
     * @returns GetPodEventsResponse
     *
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request
     *
     * @return GetPodEventsResponse
     */
    public function getPodEvents($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * Obtains or downloads the logs of a node for a task. The logs are from the stdout and stderr of the system and user scripts.
     *
     * @param request - GetPodLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPodLogsResponse
     *
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPodLogsResponse
     */
    public function getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->downloadToFile) {
            @$query['DownloadToFile'] = $request->downloadToFile;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxLines) {
            @$query['MaxLines'] = $request->maxLines;
        }

        if (null !== $request->podUid) {
            @$query['PodUid'] = $request->podUid;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPodLogs',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/pods/' . Url::percentEncode($PodId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPodLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains or downloads the logs of a node for a task. The logs are from the stdout and stderr of the system and user scripts.
     *
     * @param request - GetPodLogsRequest
     *
     * @returns GetPodLogsResponse
     *
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request
     *
     * @return GetPodLogsResponse
     */
    public function getPodLogs($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * Obtains a Ray Dashboard URL.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/171758.html) of Deep Learning Containers (DLC) of Platform for AI (PAI).
     *
     * @param request - GetRayDashboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRayDashboardResponse
     *
     * @param string                 $jobId
     * @param GetRayDashboardRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetRayDashboardResponse
     */
    public function getRayDashboardWithOptions($jobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isShared) {
            @$query['isShared'] = $request->isShared;
        }

        if (null !== $request->token) {
            @$query['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRayDashboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($jobId) . '/rayDashboard',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRayDashboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a Ray Dashboard URL.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://help.aliyun.com/document_detail/171758.html) of Deep Learning Containers (DLC) of Platform for AI (PAI).
     *
     * @param request - GetRayDashboardRequest
     *
     * @returns GetRayDashboardResponse
     *
     * @param string                 $jobId
     * @param GetRayDashboardRequest $request
     *
     * @return GetRayDashboardResponse
     */
    public function getRayDashboard($jobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRayDashboardWithOptions($jobId, $request, $headers, $runtime);
    }

    /**
     * Queries the information of a TensorBoard instance.
     *
     * @param request - GetTensorboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTensorboardResponse
     *
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTensorboardResponse
     */
    public function getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jodId) {
            @$query['JodId'] = $request->jodId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTensorboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards/' . Url::percentEncode($TensorboardId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a TensorBoard instance.
     *
     * @param request - GetTensorboardRequest
     *
     * @returns GetTensorboardResponse
     *
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request
     *
     * @return GetTensorboardResponse
     */
    public function getTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * Obtains the shareable link of a TensorBoard task. The link contains digital tokens. You can use a shareable link to access a TensorBoard task.
     *
     * @param request - GetTensorboardSharedUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTensorboardSharedUrlResponse
     *
     * @param string                         $TensorboardId
     * @param GetTensorboardSharedUrlRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTensorboardSharedUrlResponse
     */
    public function getTensorboardSharedUrlWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireTimeSeconds) {
            @$query['ExpireTimeSeconds'] = $request->expireTimeSeconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTensorboardSharedUrl',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards/' . Url::percentEncode($TensorboardId) . '/sharedurl',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTensorboardSharedUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the shareable link of a TensorBoard task. The link contains digital tokens. You can use a shareable link to access a TensorBoard task.
     *
     * @param request - GetTensorboardSharedUrlRequest
     *
     * @returns GetTensorboardSharedUrlResponse
     *
     * @param string                         $TensorboardId
     * @param GetTensorboardSharedUrlRequest $request
     *
     * @return GetTensorboardSharedUrlResponse
     */
    public function getTensorboardSharedUrl($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTensorboardSharedUrlWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * Obtains the sharing token of a DLC job. This token is used to view the information about the shared job.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tokens',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the sharing token of a DLC job. This token is used to view the information about the shared job.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * Provides methods and steps to obtain a HTTP link for accessing a container.
     *
     * @param request - GetWebTerminalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWebTerminalResponse
     *
     * @param string                $JobId
     * @param string                $PodId
     * @param GetWebTerminalRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetWebTerminalResponse
     */
    public function getWebTerminalWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isShared) {
            @$query['IsShared'] = $request->isShared;
        }

        if (null !== $request->podUid) {
            @$query['PodUid'] = $request->podUid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWebTerminal',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/pods/' . Url::percentEncode($PodId) . '/webterminal',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWebTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides methods and steps to obtain a HTTP link for accessing a container.
     *
     * @param request - GetWebTerminalRequest
     *
     * @returns GetWebTerminalResponse
     *
     * @param string                $JobId
     * @param string                $PodId
     * @param GetWebTerminalRequest $request
     *
     * @return GetWebTerminalResponse
     */
    public function getWebTerminal($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWebTerminalWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of supported instance types.
     *
     * @param request - ListEcsSpecsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEcsSpecsResponse
     *
     * @param ListEcsSpecsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceleratorType) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }

        if (null !== $request->instanceTypes) {
            @$query['InstanceTypes'] = $request->instanceTypes;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEcsSpecs',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/ecsspecs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEcsSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of supported instance types.
     *
     * @param request - ListEcsSpecsRequest
     *
     * @returns ListEcsSpecsResponse
     *
     * @param ListEcsSpecsRequest $request
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtains the results of all sanity checks for a DLC job.
     *
     * @param request - ListJobSanityCheckResultsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobSanityCheckResultsResponse
     *
     * @param string                           $JobId
     * @param ListJobSanityCheckResultsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListJobSanityCheckResultsResponse
     */
    public function listJobSanityCheckResultsWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobSanityCheckResults',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/sanitycheckresults',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobSanityCheckResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the results of all sanity checks for a DLC job.
     *
     * @param request - ListJobSanityCheckResultsRequest
     *
     * @returns ListJobSanityCheckResultsResponse
     *
     * @param string                           $JobId
     * @param ListJobSanityCheckResultsRequest $request
     *
     * @return ListJobSanityCheckResultsResponse
     */
    public function listJobSanityCheckResults($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobSanityCheckResultsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of jobs and supports pagination, sorting, and filtering by conditions.
     *
     * @param tmpReq - ListJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->businessUserId) {
            @$query['BusinessUserId'] = $request->businessUserId;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->displayNameSearchMode) {
            @$query['DisplayNameSearchMode'] = $request->displayNameSearchMode;
        }

        if (null !== $request->enableAssignNode) {
            @$query['EnableAssignNode'] = $request->enableAssignNode;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fromAllWorkspaces) {
            @$query['FromAllWorkspaces'] = $request->fromAllWorkspaces;
        }

        if (null !== $request->imageSearch) {
            @$query['ImageSearch'] = $request->imageSearch;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->numericRangeField) {
            @$query['NumericRangeField'] = $request->numericRangeField;
        }

        if (null !== $request->numericRangeMax) {
            @$query['NumericRangeMax'] = $request->numericRangeMax;
        }

        if (null !== $request->numericRangeMin) {
            @$query['NumericRangeMin'] = $request->numericRangeMin;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->oversoldInfo) {
            @$query['OversoldInfo'] = $request->oversoldInfo;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->reasonSearch) {
            @$query['ReasonSearch'] = $request->reasonSearch;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceQuotaName) {
            @$query['ResourceQuotaName'] = $request->resourceQuotaName;
        }

        if (null !== $request->showOwn) {
            @$query['ShowOwn'] = $request->showOwn;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->timeRangeField) {
            @$query['TimeRangeField'] = $request->timeRangeField;
        }

        if (null !== $request->userCommandSearch) {
            @$query['UserCommandSearch'] = $request->userCommandSearch;
        }

        if (null !== $request->userIdForFilter) {
            @$query['UserIdForFilter'] = $request->userIdForFilter;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of jobs and supports pagination, sorting, and filtering by conditions.
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
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of TensorBoard instances.
     *
     * @param request - ListTensorboardsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTensorboardsResponse
     *
     * @param ListTensorboardsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTensorboardsResponse
     */
    public function listTensorboardsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->quotaId) {
            @$query['QuotaId'] = $request->quotaId;
        }

        if (null !== $request->showOwn) {
            @$query['ShowOwn'] = $request->showOwn;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tensorboardId) {
            @$query['TensorboardId'] = $request->tensorboardId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTensorboards',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTensorboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of TensorBoard instances.
     *
     * @param request - ListTensorboardsRequest
     *
     * @returns ListTensorboardsResponse
     *
     * @param ListTensorboardsRequest $request
     *
     * @return ListTensorboardsResponse
     */
    public function listTensorboards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTensorboardsWithOptions($request, $headers, $runtime);
    }

    /**
     * Starts a TensorBoard instance.
     *
     * @param request - StartTensorboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTensorboardResponse
     *
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartTensorboardResponse
     */
    public function startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartTensorboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards/' . Url::percentEncode($TensorboardId) . '/start',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a TensorBoard instance.
     *
     * @param request - StartTensorboardRequest
     *
     * @returns StartTensorboardResponse
     *
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request
     *
     * @return StartTensorboardResponse
     */
    public function startTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * Stops a running job.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopJobResponse
     *
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($JobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopJob',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a running job.
     *
     * @returns StopJobResponse
     *
     * @param string $JobId
     *
     * @return StopJobResponse
     */
    public function stopJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * Stops a TensorBoard instance.
     *
     * @param request - StopTensorboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTensorboardResponse
     *
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopTensorboardResponse
     */
    public function stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopTensorboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards/' . Url::percentEncode($TensorboardId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a TensorBoard instance.
     *
     * @param request - StopTensorboardRequest
     *
     * @returns StopTensorboardResponse
     *
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request
     *
     * @return StopTensorboardResponse
     */
    public function stopTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * Updates the configuration information of a job. For example, you can modify the priority of a job in a queue.
     *
     * @param request - UpdateJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobResponse
     *
     * @param string           $JobId
     * @param UpdateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($JobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->jobSpecs) {
            @$body['JobSpecs'] = $request->jobSpecs;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJob',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/jobs/' . Url::percentEncode($JobId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration information of a job. For example, you can modify the priority of a job in a queue.
     *
     * @param request - UpdateJobRequest
     *
     * @returns UpdateJobResponse
     *
     * @param string           $JobId
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * Updates a TensorBoard instance.
     *
     * @param request - UpdateTensorboardRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTensorboardResponse
     *
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateTensorboardResponse
     */
    public function updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->maxRunningTimeMinutes) {
            @$query['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTensorboard',
            'version' => '2020-12-03',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tensorboards/' . Url::percentEncode($TensorboardId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a TensorBoard instance.
     *
     * @param request - UpdateTensorboardRequest
     *
     * @returns UpdateTensorboardResponse
     *
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request
     *
     * @return UpdateTensorboardResponse
     */
    public function updateTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }
}
