<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Paidlc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'ap-northeast-1'              => 'pai-dlc.aliyuncs.com',
            'ap-northeast-2-pop'          => 'pai-dlc.aliyuncs.com',
            'ap-south-1'                  => 'pai-dlc.aliyuncs.com',
            'ap-southeast-2'              => 'pai-dlc.aliyuncs.com',
            'ap-southeast-3'              => 'pai-dlc.aliyuncs.com',
            'ap-southeast-5'              => 'pai-dlc.aliyuncs.com',
            'cn-beijing-finance-1'        => 'pai-dlc.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'pai-dlc.aliyuncs.com',
            'cn-beijing-gov-1'            => 'pai-dlc.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'pai-dlc.aliyuncs.com',
            'cn-chengdu'                  => 'pai-dlc.aliyuncs.com',
            'cn-edge-1'                   => 'pai-dlc.aliyuncs.com',
            'cn-fujian'                   => 'pai-dlc.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-finance'         => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'pai-dlc.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'pai-dlc.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'pai-dlc.aliyuncs.com',
            'cn-huhehaote'                => 'pai-dlc.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'pai-dlc.aliyuncs.com',
            'cn-north-2-gov-1'            => 'pai-dlc.aliyuncs.com',
            'cn-qingdao'                  => 'pai-dlc.aliyuncs.com',
            'cn-qingdao-nebula'           => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-inner'           => 'pai-dlc.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-inner'           => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'pai-dlc.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'pai-dlc.aliyuncs.com',
            'cn-wuhan'                    => 'pai-dlc.aliyuncs.com',
            'cn-wulanchabu'               => 'pai-dlc.aliyuncs.com',
            'cn-yushanfang'               => 'pai-dlc.aliyuncs.com',
            'cn-zhangbei'                 => 'pai-dlc.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'pai-dlc.aliyuncs.com',
            'cn-zhangjiakou'              => 'pai-dlc.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'pai-dlc.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'pai-dlc.aliyuncs.com',
            'eu-west-1'                   => 'pai-dlc.aliyuncs.com',
            'eu-west-1-oxs'               => 'pai-dlc.aliyuncs.com',
            'me-east-1'                   => 'pai-dlc.aliyuncs.com',
            'rus-west-1-pop'              => 'pai-dlc.aliyuncs.com',
            'us-east-1'                   => 'pai-dlc.aliyuncs.com',
            'us-west-1'                   => 'pai-dlc.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 创建一个DLC作业
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeSource)) {
            $body['CodeSource'] = $request->codeSource;
        }
        if (!Utils::isUnset($request->credentialConfig)) {
            $body['CredentialConfig'] = $request->credentialConfig;
        }
        if (!Utils::isUnset($request->dataSources)) {
            $body['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->debuggerConfigContent)) {
            $body['DebuggerConfigContent'] = $request->debuggerConfigContent;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->elasticSpec)) {
            $body['ElasticSpec'] = $request->elasticSpec;
        }
        if (!Utils::isUnset($request->envs)) {
            $body['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->jobMaxRunningTimeMinutes)) {
            $body['JobMaxRunningTimeMinutes'] = $request->jobMaxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->jobSpecs)) {
            $body['JobSpecs'] = $request->jobSpecs;
        }
        if (!Utils::isUnset($request->jobType)) {
            $body['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->settings)) {
            $body['Settings'] = $request->settings;
        }
        if (!Utils::isUnset($request->successPolicy)) {
            $body['SuccessPolicy'] = $request->successPolicy;
        }
        if (!Utils::isUnset($request->thirdpartyLibDir)) {
            $body['ThirdpartyLibDir'] = $request->thirdpartyLibDir;
        }
        if (!Utils::isUnset($request->thirdpartyLibs)) {
            $body['ThirdpartyLibs'] = $request->thirdpartyLibs;
        }
        if (!Utils::isUnset($request->userCommand)) {
            $body['UserCommand'] = $request->userCommand;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个DLC作业
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建一个Tensorboard
     *  *
     * @param CreateTensorboardRequest $request CreateTensorboardRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTensorboardResponse CreateTensorboardResponse
     */
    public function createTensorboardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpu)) {
            $body['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $body['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->dataSources)) {
            $body['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxRunningTimeMinutes)) {
            $body['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->memory)) {
            $body['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->summaryPath)) {
            $body['SummaryPath'] = $request->summaryPath;
        }
        if (!Utils::isUnset($request->summaryRelativePath)) {
            $body['SummaryRelativePath'] = $request->summaryRelativePath;
        }
        if (!Utils::isUnset($request->tensorboardDataSources)) {
            $body['TensorboardDataSources'] = $request->tensorboardDataSources;
        }
        if (!Utils::isUnset($request->tensorboardSpec)) {
            $body['TensorboardSpec'] = $request->tensorboardSpec;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个Tensorboard
     *  *
     * @param CreateTensorboardRequest $request CreateTensorboardRequest
     *
     * @return CreateTensorboardResponse CreateTensorboardResponse
     */
    public function createTensorboard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTensorboardWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除一个DLC作业
     *  *
     * @param string         $JobId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJobWithOptions($JobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个DLC作业
     *  *
     * @param string $JobId
     *
     * @return DeleteJobResponse DeleteJobResponse
     */
    public function deleteJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @summary 删除一个数据源配置
     *  *
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request       DeleteTensorboardRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteTensorboardResponse DeleteTensorboardResponse
     */
    public function deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . OpenApiUtilClient::getEncodeParam($TensorboardId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个数据源配置
     *  *
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request       DeleteTensorboardRequest
     *
     * @return DeleteTensorboardResponse DeleteTensorboardResponse
     */
    public function deleteTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取一个DLC作业详情
     *  *
     * @param string         $JobId
     * @param GetJobRequest  $request GetJobRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJobWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->needDetail)) {
            $query['NeedDetail'] = $request->needDetail;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个DLC作业详情
     *  *
     * @param string        $JobId
     * @param GetJobRequest $request GetJobRequest
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取作业的事件
     *  *
     * @param string              $JobId
     * @param GetJobEventsRequest $request GetJobEventsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobEventsResponse GetJobEventsResponse
     */
    public function getJobEventsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            $query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobEvents',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取作业的事件
     *  *
     * @param string              $JobId
     * @param GetJobEventsRequest $request GetJobEventsRequest
     *
     * @return GetJobEventsResponse GetJobEventsResponse
     */
    public function getJobEvents($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobEventsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取一个作业的资源监控指标
     *  *
     * @param string               $JobId
     * @param GetJobMetricsRequest $request GetJobMetricsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobMetricsResponse GetJobMetricsResponse
     */
    public function getJobMetricsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobMetrics',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个作业的资源监控指标
     *  *
     * @param string               $JobId
     * @param GetJobMetricsRequest $request GetJobMetricsRequest
     *
     * @return GetJobMetricsResponse GetJobMetricsResponse
     */
    public function getJobMetrics($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobMetricsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取DLC作业某次算力健康检测结果
     *  *
     * @param string                         $JobId
     * @param GetJobSanityCheckResultRequest $request GetJobSanityCheckResultRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobSanityCheckResultResponse GetJobSanityCheckResultResponse
     */
    public function getJobSanityCheckResultWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sanityCheckNumber)) {
            $query['SanityCheckNumber'] = $request->sanityCheckNumber;
        }
        if (!Utils::isUnset($request->sanityCheckPhase)) {
            $query['SanityCheckPhase'] = $request->sanityCheckPhase;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobSanityCheckResult',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/sanitycheckresult',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobSanityCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取DLC作业某次算力健康检测结果
     *  *
     * @param string                         $JobId
     * @param GetJobSanityCheckResultRequest $request GetJobSanityCheckResultRequest
     *
     * @return GetJobSanityCheckResultResponse GetJobSanityCheckResultResponse
     */
    public function getJobSanityCheckResult($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobSanityCheckResultWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取作业中一个运行实例的系统事件
     *  *
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request GetPodEventsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPodEventsResponse GetPodEventsResponse
     */
    public function getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            $query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->podUid)) {
            $query['PodUid'] = $request->podUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPodEvents',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/pods/' . OpenApiUtilClient::getEncodeParam($PodId) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPodEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取作业中一个运行实例的系统事件
     *  *
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request GetPodEventsRequest
     *
     * @return GetPodEventsResponse GetPodEventsResponse
     */
    public function getPodEvents($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取作业中一个运行实例的日志
     *  *
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request GetPodLogsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPodLogsResponse GetPodLogsResponse
     */
    public function getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->downloadToFile)) {
            $query['DownloadToFile'] = $request->downloadToFile;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxLines)) {
            $query['MaxLines'] = $request->maxLines;
        }
        if (!Utils::isUnset($request->podUid)) {
            $query['PodUid'] = $request->podUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPodLogs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/pods/' . OpenApiUtilClient::getEncodeParam($PodId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPodLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取作业中一个运行实例的日志
     *  *
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request GetPodLogsRequest
     *
     * @return GetPodLogsResponse GetPodLogsResponse
     */
    public function getPodLogs($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取一个Tensorboard
     *  *
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request       GetTensorboardRequest
     * @param string[]              $headers       map
     * @param RuntimeOptions        $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTensorboardResponse GetTensorboardResponse
     */
    public function getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jodId)) {
            $query['JodId'] = $request->jodId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . OpenApiUtilClient::getEncodeParam($TensorboardId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个Tensorboard
     *  *
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request       GetTensorboardRequest
     *
     * @return GetTensorboardResponse GetTensorboardResponse
     */
    public function getTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @summary Get the shared url for tensorboard
     *  *
     * @param string                         $TensorboardId
     * @param GetTensorboardSharedUrlRequest $request       GetTensorboardSharedUrlRequest
     * @param string[]                       $headers       map
     * @param RuntimeOptions                 $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTensorboardSharedUrlResponse GetTensorboardSharedUrlResponse
     */
    public function getTensorboardSharedUrlWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireTimeSeconds)) {
            $query['ExpireTimeSeconds'] = $request->expireTimeSeconds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTensorboardSharedUrl',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . OpenApiUtilClient::getEncodeParam($TensorboardId) . '/sharedurl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTensorboardSharedUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get the shared url for tensorboard
     *  *
     * @param string                         $TensorboardId
     * @param GetTensorboardSharedUrlRequest $request       GetTensorboardSharedUrlRequest
     *
     * @return GetTensorboardSharedUrlResponse GetTensorboardSharedUrlResponse
     */
    public function getTensorboardSharedUrl($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTensorboardSharedUrlWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取用户Token
     *  *
     * @param GetTokenRequest $request GetTokenRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->targetId)) {
            $query['TargetId'] = $request->targetId;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tokens',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户Token
     *  *
     * @param GetTokenRequest $request GetTokenRequest
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Get the url for accessing pod's terminal in k8s
     *  *
     * @param string                $JobId
     * @param string                $PodId
     * @param GetWebTerminalRequest $request GetWebTerminalRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWebTerminalResponse GetWebTerminalResponse
     */
    public function getWebTerminalWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isShared)) {
            $query['IsShared'] = $request->isShared;
        }
        if (!Utils::isUnset($request->podUid)) {
            $query['PodUid'] = $request->podUid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWebTerminal',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/pods/' . OpenApiUtilClient::getEncodeParam($PodId) . '/webterminal',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWebTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Get the url for accessing pod's terminal in k8s
     *  *
     * @param string                $JobId
     * @param string                $PodId
     * @param GetWebTerminalRequest $request GetWebTerminalRequest
     *
     * @return GetWebTerminalResponse GetWebTerminalResponse
     */
    public function getWebTerminal($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWebTerminalWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @summary ListEcsSpecs
     *  *
     * @param ListEcsSpecsRequest $request ListEcsSpecsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEcsSpecsResponse ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcsSpecs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/ecsspecs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ListEcsSpecs
     *  *
     * @param ListEcsSpecsRequest $request ListEcsSpecsRequest
     *
     * @return ListEcsSpecsResponse ListEcsSpecsResponse
     */
    public function listEcsSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取某个DLC作业的多次算力健康检测结果
     *  *
     * @param string                           $JobId
     * @param ListJobSanityCheckResultsRequest $request ListJobSanityCheckResultsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobSanityCheckResultsResponse ListJobSanityCheckResultsResponse
     */
    public function listJobSanityCheckResultsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobSanityCheckResults',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/sanitycheckresults',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobSanityCheckResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取某个DLC作业的多次算力健康检测结果
     *  *
     * @param string                           $JobId
     * @param ListJobSanityCheckResultsRequest $request ListJobSanityCheckResultsRequest
     *
     * @return ListJobSanityCheckResultsResponse ListJobSanityCheckResultsResponse
     */
    public function listJobSanityCheckResults($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobSanityCheckResultsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 根据过滤条件获取DLC作业列表
     *  *
     * @param ListJobsRequest $tmpReq  ListJobsRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->businessUserId)) {
            $query['BusinessUserId'] = $request->businessUserId;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fromAllWorkspaces)) {
            $query['FromAllWorkspaces'] = $request->fromAllWorkspaces;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceQuotaName)) {
            $query['ResourceQuotaName'] = $request->resourceQuotaName;
        }
        if (!Utils::isUnset($request->showOwn)) {
            $query['ShowOwn'] = $request->showOwn;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->userIdForFilter)) {
            $query['UserIdForFilter'] = $request->userIdForFilter;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据过滤条件获取DLC作业列表
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取Tensorboard
     *  *
     * @param ListTensorboardsRequest $request ListTensorboardsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTensorboardsResponse ListTensorboardsResponse
     */
    public function listTensorboardsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->showOwn)) {
            $query['ShowOwn'] = $request->showOwn;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tensorboardId)) {
            $query['TensorboardId'] = $request->tensorboardId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTensorboards',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTensorboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取Tensorboard
     *  *
     * @param ListTensorboardsRequest $request ListTensorboardsRequest
     *
     * @return ListTensorboardsResponse ListTensorboardsResponse
     */
    public function listTensorboards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTensorboardsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 开始运行tensorboard
     *  *
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request       StartTensorboardRequest
     * @param string[]                $headers       map
     * @param RuntimeOptions          $runtime       runtime options for this request RuntimeOptions
     *
     * @return StartTensorboardResponse StartTensorboardResponse
     */
    public function startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . OpenApiUtilClient::getEncodeParam($TensorboardId) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开始运行tensorboard
     *  *
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request       StartTensorboardRequest
     *
     * @return StartTensorboardResponse StartTensorboardResponse
     */
    public function startTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @summary 停止一个DLC作业
     *  *
     * @param string         $JobId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopJobResponse StopJobResponse
     */
    public function stopJobWithOptions($JobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止一个DLC作业
     *  *
     * @param string $JobId
     *
     * @return StopJobResponse StopJobResponse
     */
    public function stopJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @summary 停止运行tensorboard
     *  *
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request       StopTensorboardRequest
     * @param string[]               $headers       map
     * @param RuntimeOptions         $runtime       runtime options for this request RuntimeOptions
     *
     * @return StopTensorboardResponse StopTensorboardResponse
     */
    public function stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . OpenApiUtilClient::getEncodeParam($TensorboardId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止运行tensorboard
     *  *
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request       StopTensorboardRequest
     *
     * @return StopTensorboardResponse StopTensorboardResponse
     */
    public function stopTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新一个Job
     *  *
     * @param string           $JobId
     * @param UpdateJobRequest $request UpdateJobRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJobWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . OpenApiUtilClient::getEncodeParam($JobId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新一个Job
     *  *
     * @param string           $JobId
     * @param UpdateJobRequest $request UpdateJobRequest
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新tensorboard
     *  *
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request       UpdateTensorboardRequest
     * @param string[]                 $headers       map
     * @param RuntimeOptions           $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateTensorboardResponse UpdateTensorboardResponse
     */
    public function updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxRunningTimeMinutes)) {
            $query['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . OpenApiUtilClient::getEncodeParam($TensorboardId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新tensorboard
     *  *
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request       UpdateTensorboardRequest
     *
     * @return UpdateTensorboardResponse UpdateTensorboardResponse
     */
    public function updateTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }
}
