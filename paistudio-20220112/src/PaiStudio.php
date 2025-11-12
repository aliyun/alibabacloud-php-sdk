<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CheckInstanceWebTerminalRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CheckInstanceWebTerminalResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmVersionRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmVersionResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmVersionShrinkRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateInstanceWebTerminalResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateQuotaRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteAlgorithmResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteAlgorithmVersionResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteResourceGroupMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteTrainingJobLabelsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteTrainingJobLabelsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteTrainingJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetAlgorithmResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetAlgorithmVersionResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetNodeMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetNodeMetricsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetQuotaRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupMachineGroupRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupMachineGroupShrinkRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupRequestRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupRequestResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupShrinkRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupTotalRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupTotalResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetSpotPriceHistoryRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetSpotPriceHistoryResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTokenRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTokenResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobErrorInfoResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobLatestMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobLatestMetricsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetUserViewMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetUserViewMetricsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListNodesRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListNodesResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListQuotasRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListQuotasResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListQuotaWorkloadsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListQuotaWorkloadsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupMachineGroupsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupMachineGroupsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobEventsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobEventsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceEventsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceEventsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobLogsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobLogsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobMetricsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsShrinkRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ScaleQuotaRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ScaleQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\StopTrainingJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateAlgorithmRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateAlgorithmResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateAlgorithmVersionRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateAlgorithmVersionResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateAlgorithmVersionShrinkRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateQuotaRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateResourceGroupRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateResourceGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateTrainingJobLabelsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateTrainingJobLabelsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PaiStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'pai.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'pai.cn-hangzhou.data.aliyun.com',
            'cn-shanghai' => 'pai.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'pai.cn-shenzhen.aliyuncs.com',
            'cn-hongkong' => 'pai.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'pai.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'pai.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'pai.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'pai.ap-southeast-5.aliyuncs.com',
            'us-east-1' => 'pai.us-east-1.aliyuncs.com',
            'us-west-1' => 'pai.us-west-1.aliyuncs.com',
            'eu-central-1' => 'pai.eu-central-1.aliyuncs.com',
            'ap-south-1' => 'pai.ap-south-1.aliyuncs.com',
            'me-east-1' => 'pai.me-east-1.aliyuncs.com',
            'ap-northeast-1' => 'pai.ap-northeast-1.aliyuncs.com',
            'cn-qingdao' => 'pai.cn-qingdao.aliyuncs.com',
            'cn-shanghai-finance-1' => 'pai.cn-shanghai-finance-1.aliyuncs.com',
            'cn-wulanchabu' => 'pai.cn-wulanchabu.aliyuncs.com',
            'cn-zhangjiakou' => 'pai.cn-zhangjiakou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paistudio', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 检查WebTerminal.
     *
     * @param request - CheckInstanceWebTerminalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInstanceWebTerminalResponse
     *
     * @param string                          $TrainingJobId
     * @param string                          $InstanceId
     * @param CheckInstanceWebTerminalRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CheckInstanceWebTerminalResponse
     */
    public function checkInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->checkInfo) {
            @$body['CheckInfo'] = $request->checkInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckInstanceWebTerminal',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/instances/' . Url::percentEncode($InstanceId) . '/webterminals/action/check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckInstanceWebTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查WebTerminal.
     *
     * @param request - CheckInstanceWebTerminalRequest
     *
     * @returns CheckInstanceWebTerminalResponse
     *
     * @param string                          $TrainingJobId
     * @param string                          $InstanceId
     * @param CheckInstanceWebTerminalRequest $request
     *
     * @return CheckInstanceWebTerminalResponse
     */
    public function checkInstanceWebTerminal($TrainingJobId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * 创建新的算法.
     *
     * @param request - CreateAlgorithmRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlgorithmResponse
     *
     * @param CreateAlgorithmRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAlgorithmResponse
     */
    public function createAlgorithmWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->algorithmDescription) {
            @$body['AlgorithmDescription'] = $request->algorithmDescription;
        }

        if (null !== $request->algorithmName) {
            @$body['AlgorithmName'] = $request->algorithmName;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlgorithm',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建新的算法.
     *
     * @param request - CreateAlgorithmRequest
     *
     * @returns CreateAlgorithmResponse
     *
     * @param CreateAlgorithmRequest $request
     *
     * @return CreateAlgorithmResponse
     */
    public function createAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlgorithmWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建一个新的算法版本.
     *
     * @param tmpReq - CreateAlgorithmVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlgorithmVersionResponse
     *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param CreateAlgorithmVersionRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAlgorithmVersionResponse
     */
    public function createAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAlgorithmVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->algorithmSpec) {
            $request->algorithmSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->algorithmSpec, 'AlgorithmSpec', 'json');
        }

        $body = [];
        if (null !== $request->algorithmSpecShrink) {
            @$body['AlgorithmSpec'] = $request->algorithmSpecShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlgorithmVersion',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '/versions/' . Url::percentEncode($AlgorithmVersion) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个新的算法版本.
     *
     * @param request - CreateAlgorithmVersionRequest
     *
     * @returns CreateAlgorithmVersionResponse
     *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param CreateAlgorithmVersionRequest $request
     *
     * @return CreateAlgorithmVersionResponse
     */
    public function createAlgorithmVersion($AlgorithmId, $AlgorithmVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $request, $headers, $runtime);
    }

    /**
     * 创建WebTerminal.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceWebTerminalResponse
     *
     * @param string         $TrainingJobId
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateInstanceWebTerminalResponse
     */
    public function createInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateInstanceWebTerminal',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/instances/' . Url::percentEncode($InstanceId) . '/webterminals',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceWebTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建WebTerminal.
     *
     * @returns CreateInstanceWebTerminalResponse
     *
     * @param string $TrainingJobId
     * @param string $InstanceId
     *
     * @return CreateInstanceWebTerminalResponse
     */
    public function createInstanceWebTerminal($TrainingJobId, $InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $headers, $runtime);
    }

    /**
     * 创建Quota.
     *
     * @param request - CreateQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQuotaResponse
     *
     * @param CreateQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQuotaResponse
     */
    public function createQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allocateStrategy) {
            @$body['AllocateStrategy'] = $request->allocateStrategy;
        }

        if (null !== $request->clusterSpec) {
            @$body['ClusterSpec'] = $request->clusterSpec;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->min) {
            @$body['Min'] = $request->min;
        }

        if (null !== $request->parentQuotaId) {
            @$body['ParentQuotaId'] = $request->parentQuotaId;
        }

        if (null !== $request->queueStrategy) {
            @$body['QueueStrategy'] = $request->queueStrategy;
        }

        if (null !== $request->quotaConfig) {
            @$body['QuotaConfig'] = $request->quotaConfig;
        }

        if (null !== $request->quotaName) {
            @$body['QuotaName'] = $request->quotaName;
        }

        if (null !== $request->resourceGroupIds) {
            @$body['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Quota.
     *
     * @param request - CreateQuotaRequest
     *
     * @returns CreateQuotaResponse
     *
     * @param CreateQuotaRequest $request
     *
     * @return CreateQuotaResponse
     */
    public function createQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建资源组.
     *
     * @param request - CreateResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->computingResourceProvider) {
            @$body['ComputingResourceProvider'] = $request->computingResourceProvider;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建资源组.
     *
     * @param request - CreateResourceGroupRequest
     *
     * @returns CreateResourceGroupResponse
     *
     * @param CreateResourceGroupRequest $request
     *
     * @return CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建TrainingJob.
     *
     * @param request - CreateTrainingJobRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTrainingJobResponse
     *
     * @param CreateTrainingJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTrainingJobResponse
     */
    public function createTrainingJobWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->algorithmName) {
            @$body['AlgorithmName'] = $request->algorithmName;
        }

        if (null !== $request->algorithmProvider) {
            @$body['AlgorithmProvider'] = $request->algorithmProvider;
        }

        if (null !== $request->algorithmSpec) {
            @$body['AlgorithmSpec'] = $request->algorithmSpec;
        }

        if (null !== $request->algorithmVersion) {
            @$body['AlgorithmVersion'] = $request->algorithmVersion;
        }

        if (null !== $request->codeDir) {
            @$body['CodeDir'] = $request->codeDir;
        }

        if (null !== $request->computeResource) {
            @$body['ComputeResource'] = $request->computeResource;
        }

        if (null !== $request->environments) {
            @$body['Environments'] = $request->environments;
        }

        if (null !== $request->experimentConfig) {
            @$body['ExperimentConfig'] = $request->experimentConfig;
        }

        if (null !== $request->hyperParameters) {
            @$body['HyperParameters'] = $request->hyperParameters;
        }

        if (null !== $request->inputChannels) {
            @$body['InputChannels'] = $request->inputChannels;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->outputChannels) {
            @$body['OutputChannels'] = $request->outputChannels;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->pythonRequirements) {
            @$body['PythonRequirements'] = $request->pythonRequirements;
        }

        if (null !== $request->roleArn) {
            @$body['RoleArn'] = $request->roleArn;
        }

        if (null !== $request->scheduler) {
            @$body['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->settings) {
            @$body['Settings'] = $request->settings;
        }

        if (null !== $request->trainingJobDescription) {
            @$body['TrainingJobDescription'] = $request->trainingJobDescription;
        }

        if (null !== $request->trainingJobName) {
            @$body['TrainingJobName'] = $request->trainingJobName;
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
            'action' => 'CreateTrainingJob',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建TrainingJob.
     *
     * @param request - CreateTrainingJobRequest
     *
     * @returns CreateTrainingJobResponse
     *
     * @param CreateTrainingJobRequest $request
     *
     * @return CreateTrainingJobResponse
     */
    public function createTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrainingJobWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除算法.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlgorithmResponse
     *
     * @param string         $AlgorithmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAlgorithmResponse
     */
    public function deleteAlgorithmWithOptions($AlgorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAlgorithm',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除算法.
     *
     * @returns DeleteAlgorithmResponse
     *
     * @param string $AlgorithmId
     *
     * @return DeleteAlgorithmResponse
     */
    public function deleteAlgorithm($AlgorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlgorithmWithOptions($AlgorithmId, $headers, $runtime);
    }

    /**
     * 删除算法版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlgorithmVersionResponse
     *
     * @param string         $AlgorithmId
     * @param string         $AlgorithmVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAlgorithmVersionResponse
     */
    public function deleteAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAlgorithmVersion',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '/versions/' . Url::percentEncode($AlgorithmVersion) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除算法版本.
     *
     * @returns DeleteAlgorithmVersionResponse
     *
     * @param string $AlgorithmId
     * @param string $AlgorithmVersion
     *
     * @return DeleteAlgorithmVersionResponse
     */
    public function deleteAlgorithmVersion($AlgorithmId, $AlgorithmVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $headers, $runtime);
    }

    /**
     * delete machine group.
     *
     * @deprecated OpenAPI DeleteMachineGroup is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMachineGroupResponse
     *
     * @param string         $MachineGroupID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMachineGroupResponse
     */
    public function deleteMachineGroupWithOptions($MachineGroupID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMachineGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/machinegroups/' . Url::percentEncode($MachineGroupID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * delete machine group.
     *
     * @deprecated OpenAPI DeleteMachineGroup is deprecated
     *
     * @returns DeleteMachineGroupResponse
     *
     * @param string $MachineGroupID
     *
     * @return DeleteMachineGroupResponse
     */
    public function deleteMachineGroup($MachineGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMachineGroupWithOptions($MachineGroupID, $headers, $runtime);
    }

    /**
     * 删除Quota.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQuotaResponse
     *
     * @param string         $QuotaId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteQuotaResponse
     */
    public function deleteQuotaWithOptions($QuotaId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($QuotaId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Quota.
     *
     * @returns DeleteQuotaResponse
     *
     * @param string $QuotaId
     *
     * @return DeleteQuotaResponse
     */
    public function deleteQuota($QuotaId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteQuotaWithOptions($QuotaId, $headers, $runtime);
    }

    /**
     * 删除资源组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceGroupResponse
     *
     * @param string         $ResourceGroupID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroupWithOptions($ResourceGroupID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除资源组.
     *
     * @returns DeleteResourceGroupResponse
     *
     * @param string $ResourceGroupID
     *
     * @return DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($ResourceGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceGroupWithOptions($ResourceGroupID, $headers, $runtime);
    }

    /**
     * delete machine group.
     *
     * @deprecated OpenAPI DeleteResourceGroupMachineGroup is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceGroupMachineGroupResponse
     *
     * @param string         $MachineGroupID
     * @param string         $ResourceGroupID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceGroupMachineGroupResponse
     */
    public function deleteResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceGroupMachineGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/machinegroups/' . Url::percentEncode($MachineGroupID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * delete machine group.
     *
     * @deprecated OpenAPI DeleteResourceGroupMachineGroup is deprecated
     *
     * @returns DeleteResourceGroupMachineGroupResponse
     *
     * @param string $MachineGroupID
     * @param string $ResourceGroupID
     *
     * @return DeleteResourceGroupMachineGroupResponse
     */
    public function deleteResourceGroupMachineGroup($MachineGroupID, $ResourceGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $headers, $runtime);
    }

    /**
     * 删除一个TrainingJob.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrainingJobResponse
     *
     * @param string         $TrainingJobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTrainingJobResponse
     */
    public function deleteTrainingJobWithOptions($TrainingJobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTrainingJob',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个TrainingJob.
     *
     * @returns DeleteTrainingJobResponse
     *
     * @param string $TrainingJobId
     *
     * @return DeleteTrainingJobResponse
     */
    public function deleteTrainingJob($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrainingJobWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * 删除TrainingJob的Labels.
     *
     * @param request - DeleteTrainingJobLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTrainingJobLabelsResponse
     *
     * @param string                         $TrainingJobId
     * @param DeleteTrainingJobLabelsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteTrainingJobLabelsResponse
     */
    public function deleteTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keys) {
            @$query['Keys'] = $request->keys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrainingJobLabels',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/labels',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTrainingJobLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除TrainingJob的Labels.
     *
     * @param request - DeleteTrainingJobLabelsRequest
     *
     * @returns DeleteTrainingJobLabelsResponse
     *
     * @param string                         $TrainingJobId
     * @param DeleteTrainingJobLabelsRequest $request
     *
     * @return DeleteTrainingJobLabelsResponse
     */
    public function deleteTrainingJobLabels($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * 获取一个算法信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlgorithmResponse
     *
     * @param string         $AlgorithmId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAlgorithmResponse
     */
    public function getAlgorithmWithOptions($AlgorithmId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAlgorithm',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一个算法信息.
     *
     * @returns GetAlgorithmResponse
     *
     * @param string $AlgorithmId
     *
     * @return GetAlgorithmResponse
     */
    public function getAlgorithm($AlgorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmWithOptions($AlgorithmId, $headers, $runtime);
    }

    /**
     * 创建一个新的算法版本.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlgorithmVersionResponse
     *
     * @param string         $AlgorithmId
     * @param string         $AlgorithmVersion
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAlgorithmVersionResponse
     */
    public function getAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAlgorithmVersion',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '/versions/' . Url::percentEncode($AlgorithmVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个新的算法版本.
     *
     * @returns GetAlgorithmVersionResponse
     *
     * @param string $AlgorithmId
     * @param string $AlgorithmVersion
     *
     * @return GetAlgorithmVersionResponse
     */
    public function getAlgorithmVersion($AlgorithmId, $AlgorithmVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $headers, $runtime);
    }

    /**
     * get machine group.
     *
     * @deprecated OpenAPI GetMachineGroup is deprecated
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMachineGroupResponse
     *
     * @param string         $MachineGroupID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMachineGroupResponse
     */
    public function getMachineGroupWithOptions($MachineGroupID, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMachineGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/machinegroups/' . Url::percentEncode($MachineGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * get machine group.
     *
     * @deprecated OpenAPI GetMachineGroup is deprecated
     *
     * @returns GetMachineGroupResponse
     *
     * @param string $MachineGroupID
     *
     * @return GetMachineGroupResponse
     */
    public function getMachineGroup($MachineGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMachineGroupWithOptions($MachineGroupID, $headers, $runtime);
    }

    /**
     * get resource group node metrics.
     *
     * @deprecated OpenAPI GetNodeMetrics is deprecated
     *
     * @param request - GetNodeMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeMetricsResponse
     *
     * @param string                $ResourceGroupID
     * @param string                $MetricType
     * @param GetNodeMetricsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetNodeMetricsResponse
     */
    public function getNodeMetricsWithOptions($ResourceGroupID, $MetricType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->GPUType) {
            @$query['GPUType'] = $request->GPUType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/nodemetrics/' . Url::percentEncode($MetricType) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNodeMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * get resource group node metrics.
     *
     * @deprecated OpenAPI GetNodeMetrics is deprecated
     *
     * @param request - GetNodeMetricsRequest
     *
     * @returns GetNodeMetricsResponse
     *
     * @param string                $ResourceGroupID
     * @param string                $MetricType
     * @param GetNodeMetricsRequest $request
     *
     * @return GetNodeMetricsResponse
     */
    public function getNodeMetrics($ResourceGroupID, $MetricType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeMetricsWithOptions($ResourceGroupID, $MetricType, $request, $headers, $runtime);
    }

    /**
     * 获取Quota.
     *
     * @param request - GetQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaResponse
     *
     * @param string          $QuotaId
     * @param GetQuotaRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->withNodeMeta) {
            @$query['WithNodeMeta'] = $request->withNodeMeta;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($QuotaId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Quota.
     *
     * @param request - GetQuotaRequest
     *
     * @returns GetQuotaResponse
     *
     * @param string          $QuotaId
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * get resource group by group id.
     *
     * @param tmpReq - GetResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupResponse
     *
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($ResourceGroupID, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->isAIWorkspaceDataEnabled) {
            @$query['IsAIWorkspaceDataEnabled'] = $request->isAIWorkspaceDataEnabled;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get resource group by group id.
     *
     * @param request - GetResourceGroupRequest
     *
     * @returns GetResourceGroupResponse
     *
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $request
     *
     * @return GetResourceGroupResponse
     */
    public function getResourceGroup($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * get machine group.
     *
     * @param tmpReq - GetResourceGroupMachineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupMachineGroupResponse
     *
     * @param string                              $MachineGroupID
     * @param string                              $ResourceGroupID
     * @param GetResourceGroupMachineGroupRequest $tmpReq
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetResourceGroupMachineGroupResponse
     */
    public function getResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourceGroupMachineGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupMachineGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/machinegroups/' . Url::percentEncode($MachineGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get machine group.
     *
     * @param request - GetResourceGroupMachineGroupRequest
     *
     * @returns GetResourceGroupMachineGroupResponse
     *
     * @param string                              $MachineGroupID
     * @param string                              $ResourceGroupID
     * @param GetResourceGroupMachineGroupRequest $request
     *
     * @return GetResourceGroupMachineGroupResponse
     */
    public function getResourceGroupMachineGroup($MachineGroupID, $ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * get resource group requested resource by resource group id.
     *
     * @deprecated OpenAPI GetResourceGroupRequest is deprecated
     *
     * @param request - GetResourceGroupRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupRequestResponse
     *
     * @param GetResourceGroupRequestRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceGroupRequestResponse
     */
    public function getResourceGroupRequestWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->podStatus) {
            @$query['PodStatus'] = $request->podStatus;
        }

        if (null !== $request->resourceGroupID) {
            @$query['ResourceGroupID'] = $request->resourceGroupID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupRequest',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/data/request',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * get resource group requested resource by resource group id.
     *
     * @deprecated OpenAPI GetResourceGroupRequest is deprecated
     *
     * @param request - GetResourceGroupRequestRequest
     *
     * @returns GetResourceGroupRequestResponse
     *
     * @param GetResourceGroupRequestRequest $request
     *
     * @return GetResourceGroupRequestResponse
     */
    public function getResourceGroupRequest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupRequestWithOptions($request, $headers, $runtime);
    }

    /**
     * get resource group total resource by group id.
     *
     * @param request - GetResourceGroupTotalRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupTotalResponse
     *
     * @param GetResourceGroupTotalRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceGroupTotalResponse
     */
    public function getResourceGroupTotalWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupID) {
            @$query['ResourceGroupID'] = $request->resourceGroupID;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupTotal',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/data/total',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get resource group total resource by group id.
     *
     * @param request - GetResourceGroupTotalRequest
     *
     * @returns GetResourceGroupTotalResponse
     *
     * @param GetResourceGroupTotalRequest $request
     *
     * @return GetResourceGroupTotalResponse
     */
    public function getResourceGroupTotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupTotalWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取抢占式实例历史价格
     *
     * @param request - GetSpotPriceHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSpotPriceHistoryResponse
     *
     * @param string                     $InstanceType
     * @param GetSpotPriceHistoryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetSpotPriceHistoryResponse
     */
    public function getSpotPriceHistoryWithOptions($InstanceType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->spotDuration) {
            @$query['SpotDuration'] = $request->spotDuration;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSpotPriceHistory',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/spots/' . Url::percentEncode($InstanceType) . '/pricehistory',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSpotPriceHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取抢占式实例历史价格
     *
     * @param request - GetSpotPriceHistoryRequest
     *
     * @returns GetSpotPriceHistoryResponse
     *
     * @param string                     $InstanceType
     * @param GetSpotPriceHistoryRequest $request
     *
     * @return GetSpotPriceHistoryResponse
     */
    public function getSpotPriceHistory($InstanceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSpotPriceHistoryWithOptions($InstanceType, $request, $headers, $runtime);
    }

    /**
     * 调用GetToken获取临时鉴权信息.
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

        if (null !== $request->trainingJobId) {
            @$query['TrainingJobId'] = $request->trainingJobId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2022-01-12',
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
     * 调用GetToken获取临时鉴权信息.
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
     * 获取TrainingJob的详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrainingJobResponse
     *
     * @param string         $TrainingJobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTrainingJobResponse
     */
    public function getTrainingJobWithOptions($TrainingJobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTrainingJob',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取TrainingJob的详情.
     *
     * @returns GetTrainingJobResponse
     *
     * @param string $TrainingJobId
     *
     * @return GetTrainingJobResponse
     */
    public function getTrainingJob($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * 获取Training Job的算法错误信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrainingJobErrorInfoResponse
     *
     * @param string         $TrainingJobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTrainingJobErrorInfoResponse
     */
    public function getTrainingJobErrorInfoWithOptions($TrainingJobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTrainingJobErrorInfo',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/errorinfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrainingJobErrorInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Training Job的算法错误信息.
     *
     * @returns GetTrainingJobErrorInfoResponse
     *
     * @param string $TrainingJobId
     *
     * @return GetTrainingJobErrorInfoResponse
     */
    public function getTrainingJobErrorInfo($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobErrorInfoWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * 获取TrainingJob最近的Metrics.
     *
     * @param request - GetTrainingJobLatestMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTrainingJobLatestMetricsResponse
     *
     * @param string                             $TrainingJobId
     * @param GetTrainingJobLatestMetricsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetTrainingJobLatestMetricsResponse
     */
    public function getTrainingJobLatestMetricsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrainingJobLatestMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/latestmetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTrainingJobLatestMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取TrainingJob最近的Metrics.
     *
     * @param request - GetTrainingJobLatestMetricsRequest
     *
     * @returns GetTrainingJobLatestMetricsResponse
     *
     * @param string                             $TrainingJobId
     * @param GetTrainingJobLatestMetricsRequest $request
     *
     * @return GetTrainingJobLatestMetricsResponse
     */
    public function getTrainingJobLatestMetrics($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobLatestMetricsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * get user view  metrics.
     *
     * @deprecated OpenAPI GetUserViewMetrics is deprecated
     *
     * @param request - GetUserViewMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserViewMetricsResponse
     *
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserViewMetricsResponse
     */
    public function getUserViewMetricsWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserViewMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/usermetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserViewMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * get user view  metrics.
     *
     * @deprecated OpenAPI GetUserViewMetrics is deprecated
     *
     * @param request - GetUserViewMetricsRequest
     *
     * @returns GetUserViewMetricsResponse
     *
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request
     *
     * @return GetUserViewMetricsResponse
     */
    public function getUserViewMetrics($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserViewMetricsWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * 获取算法的所有版本信息.
     *
     * @param request - ListAlgorithmVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlgorithmVersionsResponse
     *
     * @param string                       $AlgorithmId
     * @param ListAlgorithmVersionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListAlgorithmVersionsResponse
     */
    public function listAlgorithmVersionsWithOptions($AlgorithmId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlgorithmVersions',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlgorithmVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法的所有版本信息.
     *
     * @param request - ListAlgorithmVersionsRequest
     *
     * @returns ListAlgorithmVersionsResponse
     *
     * @param string                       $AlgorithmId
     * @param ListAlgorithmVersionsRequest $request
     *
     * @return ListAlgorithmVersionsResponse
     */
    public function listAlgorithmVersions($AlgorithmId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlgorithmVersionsWithOptions($AlgorithmId, $request, $headers, $runtime);
    }

    /**
     * 获取算法列表.
     *
     * @param request - ListAlgorithmsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlgorithmsResponse
     *
     * @param ListAlgorithmsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlgorithmsResponse
     */
    public function listAlgorithmsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->algorithmId) {
            @$query['AlgorithmId'] = $request->algorithmId;
        }

        if (null !== $request->algorithmName) {
            @$query['AlgorithmName'] = $request->algorithmName;
        }

        if (null !== $request->algorithmProvider) {
            @$query['AlgorithmProvider'] = $request->algorithmProvider;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlgorithms',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取算法列表.
     *
     * @param request - ListAlgorithmsRequest
     *
     * @returns ListAlgorithmsResponse
     *
     * @param ListAlgorithmsRequest $request
     *
     * @return ListAlgorithmsResponse
     */
    public function listAlgorithms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlgorithmsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取资源节点列表.
     *
     * @param request - ListNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceleratorType) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }

        if (null !== $request->availabilityZone) {
            @$query['AvailabilityZone'] = $request->availabilityZone;
        }

        if (null !== $request->cliqueID) {
            @$query['CliqueID'] = $request->cliqueID;
        }

        if (null !== $request->filterByQuotaId) {
            @$query['FilterByQuotaId'] = $request->filterByQuotaId;
        }

        if (null !== $request->filterByResourceGroupIds) {
            @$query['FilterByResourceGroupIds'] = $request->filterByResourceGroupIds;
        }

        if (null !== $request->GPUType) {
            @$query['GPUType'] = $request->GPUType;
        }

        if (null !== $request->hyperNode) {
            @$query['HyperNode'] = $request->hyperNode;
        }

        if (null !== $request->hyperZone) {
            @$query['HyperZone'] = $request->hyperZone;
        }

        if (null !== $request->machineGroupIds) {
            @$query['MachineGroupIds'] = $request->machineGroupIds;
        }

        if (null !== $request->nodeNames) {
            @$query['NodeNames'] = $request->nodeNames;
        }

        if (null !== $request->nodeStatuses) {
            @$query['NodeStatuses'] = $request->nodeStatuses;
        }

        if (null !== $request->nodeTypes) {
            @$query['NodeTypes'] = $request->nodeTypes;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderInstanceIds) {
            @$query['OrderInstanceIds'] = $request->orderInstanceIds;
        }

        if (null !== $request->orderStatuses) {
            @$query['OrderStatuses'] = $request->orderStatuses;
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

        if (null !== $request->reasonCodes) {
            @$query['ReasonCodes'] = $request->reasonCodes;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
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
            'action' => 'ListNodes',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/nodes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源节点列表.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * 您可以通过此API获取Quota上的任务信息列表.
     *
     * @param request - ListQuotaWorkloadsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotaWorkloadsResponse
     *
     * @param string                    $QuotaId
     * @param ListQuotaWorkloadsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListQuotaWorkloadsResponse
     */
    public function listQuotaWorkloadsWithOptions($QuotaId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beforeWorkloadId) {
            @$query['BeforeWorkloadId'] = $request->beforeWorkloadId;
        }

        if (null !== $request->gmtDequeuedTimeRange) {
            @$query['GmtDequeuedTimeRange'] = $request->gmtDequeuedTimeRange;
        }

        if (null !== $request->gmtEnqueuedTimeRange) {
            @$query['GmtEnqueuedTimeRange'] = $request->gmtEnqueuedTimeRange;
        }

        if (null !== $request->gmtPositionModifiedTimeRange) {
            @$query['GmtPositionModifiedTimeRange'] = $request->gmtPositionModifiedTimeRange;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
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

        if (null !== $request->showOwn) {
            @$query['ShowOwn'] = $request->showOwn;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->subQuotaIds) {
            @$query['SubQuotaIds'] = $request->subQuotaIds;
        }

        if (null !== $request->userIds) {
            @$query['UserIds'] = $request->userIds;
        }

        if (null !== $request->withHistoricalData) {
            @$query['WithHistoricalData'] = $request->withHistoricalData;
        }

        if (null !== $request->workloadCreatedTimeRange) {
            @$query['WorkloadCreatedTimeRange'] = $request->workloadCreatedTimeRange;
        }

        if (null !== $request->workloadIds) {
            @$query['WorkloadIds'] = $request->workloadIds;
        }

        if (null !== $request->workloadStatuses) {
            @$query['WorkloadStatuses'] = $request->workloadStatuses;
        }

        if (null !== $request->workloadType) {
            @$query['WorkloadType'] = $request->workloadType;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotaWorkloads',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($QuotaId) . '/workloads',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQuotaWorkloadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 您可以通过此API获取Quota上的任务信息列表.
     *
     * @param request - ListQuotaWorkloadsRequest
     *
     * @returns ListQuotaWorkloadsResponse
     *
     * @param string                    $QuotaId
     * @param ListQuotaWorkloadsRequest $request
     *
     * @return ListQuotaWorkloadsResponse
     */
    public function listQuotaWorkloads($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotaWorkloadsWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * 获取Quota列表.
     *
     * @param request - ListQuotasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->hasResource) {
            @$query['HasResource'] = $request->hasResource;
        }

        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->layoutMode) {
            @$query['LayoutMode'] = $request->layoutMode;
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

        if (null !== $request->parentQuotaId) {
            @$query['ParentQuotaId'] = $request->parentQuotaId;
        }

        if (null !== $request->quotaIds) {
            @$query['QuotaIds'] = $request->quotaIds;
        }

        if (null !== $request->quotaName) {
            @$query['QuotaName'] = $request->quotaName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        if (null !== $request->versions) {
            @$query['Versions'] = $request->versions;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        if (null !== $request->workspaceName) {
            @$query['WorkspaceName'] = $request->workspaceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotas',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Quota列表.
     *
     * @param request - ListQuotasRequest
     *
     * @returns ListQuotasResponse
     *
     * @param ListQuotasRequest $request
     *
     * @return ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * list machine groups.
     *
     * @param request - ListResourceGroupMachineGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceGroupMachineGroupsResponse
     *
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListResourceGroupMachineGroupsResponse
     */
    public function listResourceGroupMachineGroupsWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creatorID) {
            @$query['CreatorID'] = $request->creatorID;
        }

        if (null !== $request->ecsSpec) {
            @$query['EcsSpec'] = $request->ecsSpec;
        }

        if (null !== $request->machineGroupIDs) {
            @$query['MachineGroupIDs'] = $request->machineGroupIDs;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderInstanceId) {
            @$query['OrderInstanceId'] = $request->orderInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentDuration) {
            @$query['PaymentDuration'] = $request->paymentDuration;
        }

        if (null !== $request->paymentDurationUnit) {
            @$query['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroupMachineGroups',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '/machinegroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupMachineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list machine groups.
     *
     * @param request - ListResourceGroupMachineGroupsRequest
     *
     * @returns ListResourceGroupMachineGroupsResponse
     *
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request
     *
     * @return ListResourceGroupMachineGroupsResponse
     */
    public function listResourceGroupMachineGroups($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupMachineGroupsWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * list resource group.
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
        if (null !== $request->computingResourceProvider) {
            @$query['ComputingResourceProvider'] = $request->computingResourceProvider;
        }

        if (null !== $request->hasResource) {
            @$query['HasResource'] = $request->hasResource;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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

        if (null !== $request->resourceGroupIDs) {
            @$query['ResourceGroupIDs'] = $request->resourceGroupIDs;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->showAll) {
            @$query['ShowAll'] = $request->showAll;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->versions) {
            @$query['Versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroups',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list resource group.
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
     * 获取指定TrainingJob的事件。
     *
     * @param request - ListTrainingJobEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobEventsResponse
     *
     * @param string                       $TrainingJobId
     * @param ListTrainingJobEventsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListTrainingJobEventsResponse
     */
    public function listTrainingJobEventsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobEvents',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定TrainingJob的事件。
     *
     * @param request - ListTrainingJobEventsRequest
     *
     * @returns ListTrainingJobEventsResponse
     *
     * @param string                       $TrainingJobId
     * @param ListTrainingJobEventsRequest $request
     *
     * @return ListTrainingJobEventsResponse
     */
    public function listTrainingJobEvents($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobEventsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * 获取指定Instance（TrainingJob的运行单元）的日志。
     *
     * @param request - ListTrainingJobInstanceEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobInstanceEventsResponse
     *
     * @param string                               $TrainingJobId
     * @param string                               $InstanceId
     * @param ListTrainingJobInstanceEventsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListTrainingJobInstanceEventsResponse
     */
    public function listTrainingJobInstanceEventsWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobInstanceEvents',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/instances/' . Url::percentEncode($InstanceId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobInstanceEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定Instance（TrainingJob的运行单元）的日志。
     *
     * @param request - ListTrainingJobInstanceEventsRequest
     *
     * @returns ListTrainingJobInstanceEventsResponse
     *
     * @param string                               $TrainingJobId
     * @param string                               $InstanceId
     * @param ListTrainingJobInstanceEventsRequest $request
     *
     * @return ListTrainingJobInstanceEventsResponse
     */
    public function listTrainingJobInstanceEvents($TrainingJobId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobInstanceEventsWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * 获取Training Job实例的Metrics.
     *
     * @param request - ListTrainingJobInstanceMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobInstanceMetricsResponse
     *
     * @param string                                $TrainingJobId
     * @param ListTrainingJobInstanceMetricsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListTrainingJobInstanceMetricsResponse
     */
    public function listTrainingJobInstanceMetricsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobInstanceMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/instancemetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Training Job实例的Metrics.
     *
     * @param request - ListTrainingJobInstanceMetricsRequest
     *
     * @returns ListTrainingJobInstanceMetricsResponse
     *
     * @param string                                $TrainingJobId
     * @param ListTrainingJobInstanceMetricsRequest $request
     *
     * @return ListTrainingJobInstanceMetricsResponse
     */
    public function listTrainingJobInstanceMetrics($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobInstanceMetricsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * 获取Training Job的日志.
     *
     * @param request - ListTrainingJobLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobLogsResponse
     *
     * @param string                     $TrainingJobId
     * @param ListTrainingJobLogsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListTrainingJobLogsResponse
     */
    public function listTrainingJobLogsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->workerId) {
            @$query['WorkerId'] = $request->workerId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobLogs',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Training Job的日志.
     *
     * @param request - ListTrainingJobLogsRequest
     *
     * @returns ListTrainingJobLogsResponse
     *
     * @param string                     $TrainingJobId
     * @param ListTrainingJobLogsRequest $request
     *
     * @return ListTrainingJobLogsResponse
     */
    public function listTrainingJobLogs($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobLogsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * 获取Training Job的Metrics.
     *
     * @param request - ListTrainingJobMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobMetricsResponse
     *
     * @param string                        $TrainingJobId
     * @param ListTrainingJobMetricsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListTrainingJobMetricsResponse
     */
    public function listTrainingJobMetricsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Training Job的Metrics.
     *
     * @param request - ListTrainingJobMetricsRequest
     *
     * @returns ListTrainingJobMetricsResponse
     *
     * @param string                        $TrainingJobId
     * @param ListTrainingJobMetricsRequest $request
     *
     * @return ListTrainingJobMetricsResponse
     */
    public function listTrainingJobMetrics($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobMetricsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * 获取Training Job 产出的所有模型信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobOutputModelsResponse
     *
     * @param string         $TrainingJobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListTrainingJobOutputModelsResponse
     */
    public function listTrainingJobOutputModelsWithOptions($TrainingJobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobOutputModels',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/outputmodels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobOutputModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Training Job 产出的所有模型信息.
     *
     * @returns ListTrainingJobOutputModelsResponse
     *
     * @param string $TrainingJobId
     *
     * @return ListTrainingJobOutputModelsResponse
     */
    public function listTrainingJobOutputModels($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobOutputModelsWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * 获取TrainingJob的列表.
     *
     * @param tmpReq - ListTrainingJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTrainingJobsResponse
     *
     * @param ListTrainingJobsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTrainingJobsResponse
     */
    public function listTrainingJobsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTrainingJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }

        $query = [];
        if (null !== $request->algorithmName) {
            @$query['AlgorithmName'] = $request->algorithmName;
        }

        if (null !== $request->algorithmProvider) {
            @$query['AlgorithmProvider'] = $request->algorithmProvider;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isTempAlgo) {
            @$query['IsTempAlgo'] = $request->isTempAlgo;
        }

        if (null !== $request->labelsShrink) {
            @$query['Labels'] = $request->labelsShrink;
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

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->trainingJobId) {
            @$query['TrainingJobId'] = $request->trainingJobId;
        }

        if (null !== $request->trainingJobName) {
            @$query['TrainingJobName'] = $request->trainingJobName;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobs',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取TrainingJob的列表.
     *
     * @param request - ListTrainingJobsRequest
     *
     * @returns ListTrainingJobsResponse
     *
     * @param ListTrainingJobsRequest $request
     *
     * @return ListTrainingJobsResponse
     */
    public function listTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * 扩缩容Quota.
     *
     * @param request - ScaleQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleQuotaResponse
     *
     * @param string            $QuotaId
     * @param ScaleQuotaRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ScaleQuotaResponse
     */
    public function scaleQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->min) {
            @$body['Min'] = $request->min;
        }

        if (null !== $request->resourceGroupIds) {
            @$body['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($QuotaId) . '/action/scale',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 扩缩容Quota.
     *
     * @param request - ScaleQuotaRequest
     *
     * @returns ScaleQuotaResponse
     *
     * @param string            $QuotaId
     * @param ScaleQuotaRequest $request
     *
     * @return ScaleQuotaResponse
     */
    public function scaleQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * 停止一个TrainingJob.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTrainingJobResponse
     *
     * @param string         $TrainingJobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopTrainingJobResponse
     */
    public function stopTrainingJobWithOptions($TrainingJobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopTrainingJob',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止一个TrainingJob.
     *
     * @returns StopTrainingJobResponse
     *
     * @param string $TrainingJobId
     *
     * @return StopTrainingJobResponse
     */
    public function stopTrainingJob($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrainingJobWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * 更新算法.
     *
     * @param request - UpdateAlgorithmRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlgorithmResponse
     *
     * @param string                 $AlgorithmId
     * @param UpdateAlgorithmRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlgorithmResponse
     */
    public function updateAlgorithmWithOptions($AlgorithmId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->algorithmDescription) {
            @$body['AlgorithmDescription'] = $request->algorithmDescription;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlgorithm',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新算法.
     *
     * @param request - UpdateAlgorithmRequest
     *
     * @returns UpdateAlgorithmResponse
     *
     * @param string                 $AlgorithmId
     * @param UpdateAlgorithmRequest $request
     *
     * @return UpdateAlgorithmResponse
     */
    public function updateAlgorithm($AlgorithmId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlgorithmWithOptions($AlgorithmId, $request, $headers, $runtime);
    }

    /**
     * 更新算法.
     *
     * @param tmpReq - UpdateAlgorithmVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlgorithmVersionResponse
     *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param UpdateAlgorithmVersionRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateAlgorithmVersionResponse
     */
    public function updateAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAlgorithmVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->algorithmSpec) {
            $request->algorithmSpecShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->algorithmSpec, 'AlgorithmSpec', 'json');
        }

        $body = [];
        if (null !== $request->algorithmSpecShrink) {
            @$body['AlgorithmSpec'] = $request->algorithmSpecShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlgorithmVersion',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . Url::percentEncode($AlgorithmId) . '/versions/' . Url::percentEncode($AlgorithmVersion) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新算法.
     *
     * @param request - UpdateAlgorithmVersionRequest
     *
     * @returns UpdateAlgorithmVersionResponse
     *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param UpdateAlgorithmVersionRequest $request
     *
     * @return UpdateAlgorithmVersionResponse
     */
    public function updateAlgorithmVersion($AlgorithmId, $AlgorithmVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $request, $headers, $runtime);
    }

    /**
     * 更新Quota.
     *
     * @param request - UpdateQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQuotaResponse
     *
     * @param string             $QuotaId
     * @param UpdateQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->queueStrategy) {
            @$body['QueueStrategy'] = $request->queueStrategy;
        }

        if (null !== $request->quotaConfig) {
            @$body['QuotaConfig'] = $request->quotaConfig;
        }

        if (null !== $request->quotaName) {
            @$body['QuotaName'] = $request->quotaName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . Url::percentEncode($QuotaId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Quota.
     *
     * @param request - UpdateQuotaRequest
     *
     * @returns UpdateQuotaResponse
     *
     * @param string             $QuotaId
     * @param UpdateQuotaRequest $request
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * 更新Resource Group.
     *
     * @param request - UpdateResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceGroupResponse
     *
     * @param string                     $ResourceGroupID
     * @param UpdateResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->unbind) {
            @$body['Unbind'] = $request->unbind;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . Url::percentEncode($ResourceGroupID) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新Resource Group.
     *
     * @param request - UpdateResourceGroupRequest
     *
     * @returns UpdateResourceGroupResponse
     *
     * @param string                     $ResourceGroupID
     * @param UpdateResourceGroupRequest $request
     *
     * @return UpdateResourceGroupResponse
     */
    public function updateResourceGroup($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * 更新一个TrainingJob的Labels.
     *
     * @param request - UpdateTrainingJobLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTrainingJobLabelsResponse
     *
     * @param string                         $TrainingJobId
     * @param UpdateTrainingJobLabelsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateTrainingJobLabelsResponse
     */
    public function updateTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrainingJobLabels',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . Url::percentEncode($TrainingJobId) . '/labels',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTrainingJobLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个TrainingJob的Labels.
     *
     * @param request - UpdateTrainingJobLabelsRequest
     *
     * @returns UpdateTrainingJobLabelsResponse
     *
     * @param string                         $TrainingJobId
     * @param UpdateTrainingJobLabelsRequest $request
     *
     * @return UpdateTrainingJobLabelsResponse
     */
    public function updateTrainingJobLabels($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }
}
