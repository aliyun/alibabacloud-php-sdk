<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class PaiStudio extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'pai.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'pai.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'pai.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'pai.cn-shenzhen.aliyuncs.com',
            'cn-hongkong' => 'pai.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'pai.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'pai.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'pai.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'pai.ap-southeast-5.aliyuncs.com',
            'us-west-1' => 'pai.us-west-1.aliyuncs.com',
            'us-east-1' => 'pai.us-east-1.aliyuncs.com',
            'eu-central-1' => 'pai.eu-central-1.aliyuncs.com',
            'me-east-1' => 'pai.me-east-1.aliyuncs.com',
            'ap-south-1' => 'pai.ap-south-1.aliyuncs.com',
            'cn-qingdao' => 'pai.cn-qingdao.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 检查WebTerminal
     *  *
     * @param string                          $TrainingJobId
     * @param string                          $InstanceId
     * @param CheckInstanceWebTerminalRequest $request       CheckInstanceWebTerminalRequest
     * @param string[]                        $headers       map
     * @param RuntimeOptions                  $runtime       runtime options for this request RuntimeOptions
     *
     * @return CheckInstanceWebTerminalResponse CheckInstanceWebTerminalResponse
     */
    public function checkInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkInfo)) {
            $body['CheckInfo'] = $request->checkInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckInstanceWebTerminal',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/webterminals/action/check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckInstanceWebTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckInstanceWebTerminalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 检查WebTerminal
     *  *
     * @param string                          $TrainingJobId
     * @param string                          $InstanceId
     * @param CheckInstanceWebTerminalRequest $request       CheckInstanceWebTerminalRequest
     *
     * @return CheckInstanceWebTerminalResponse CheckInstanceWebTerminalResponse
     */
    public function checkInstanceWebTerminal($TrainingJobId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建新的算法
     *  *
     * @param CreateAlgorithmRequest $request CreateAlgorithmRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAlgorithmResponse CreateAlgorithmResponse
     */
    public function createAlgorithmWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algorithmDescription)) {
            $body['AlgorithmDescription'] = $request->algorithmDescription;
        }
        if (!Utils::isUnset($request->algorithmName)) {
            $body['AlgorithmName'] = $request->algorithmName;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAlgorithmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建新的算法
     *  *
     * @param CreateAlgorithmRequest $request CreateAlgorithmRequest
     *
     * @return CreateAlgorithmResponse CreateAlgorithmResponse
     */
    public function createAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlgorithmWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建一个新的算法版本
     *  *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param CreateAlgorithmVersionRequest $tmpReq           CreateAlgorithmVersionRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return CreateAlgorithmVersionResponse CreateAlgorithmVersionResponse
     */
    public function createAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAlgorithmVersionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->algorithmSpec)) {
            $request->algorithmSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->algorithmSpec, 'AlgorithmSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->algorithmSpecShrink)) {
            $body['AlgorithmSpec'] = $request->algorithmSpecShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAlgorithmVersion',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAlgorithmVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建一个新的算法版本
     *  *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param CreateAlgorithmVersionRequest $request          CreateAlgorithmVersionRequest
     *
     * @return CreateAlgorithmVersionResponse CreateAlgorithmVersionResponse
     */
    public function createAlgorithmVersion($AlgorithmId, $AlgorithmVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $request, $headers, $runtime);
    }

    /**
     * @summary 创建WebTerminal
     *  *
     * @param string         $TrainingJobId
     * @param string         $InstanceId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceWebTerminalResponse CreateInstanceWebTerminalResponse
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
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/webterminals',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateInstanceWebTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceWebTerminalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建WebTerminal
     *  *
     * @param string $TrainingJobId
     * @param string $InstanceId
     *
     * @return CreateInstanceWebTerminalResponse CreateInstanceWebTerminalResponse
     */
    public function createInstanceWebTerminal($TrainingJobId, $InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWebTerminalWithOptions($TrainingJobId, $InstanceId, $headers, $runtime);
    }

    /**
     * @summary 创建Quota
     *  *
     * @param CreateQuotaRequest $request CreateQuotaRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQuotaResponse CreateQuotaResponse
     */
    public function createQuotaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->allocateStrategy)) {
            $body['AllocateStrategy'] = $request->allocateStrategy;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->min)) {
            $body['Min'] = $request->min;
        }
        if (!Utils::isUnset($request->parentQuotaId)) {
            $body['ParentQuotaId'] = $request->parentQuotaId;
        }
        if (!Utils::isUnset($request->queueStrategy)) {
            $body['QueueStrategy'] = $request->queueStrategy;
        }
        if (!Utils::isUnset($request->quotaConfig)) {
            $body['QuotaConfig'] = $request->quotaConfig;
        }
        if (!Utils::isUnset($request->quotaName)) {
            $body['QuotaName'] = $request->quotaName;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $body['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建Quota
     *  *
     * @param CreateQuotaRequest $request CreateQuotaRequest
     *
     * @return CreateQuotaResponse CreateQuotaResponse
     */
    public function createQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建资源组
     *  *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->computingResourceProvider)) {
            $body['ComputingResourceProvider'] = $request->computingResourceProvider;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建资源组
     *  *
     * @param CreateResourceGroupRequest $request CreateResourceGroupRequest
     *
     * @return CreateResourceGroupResponse CreateResourceGroupResponse
     */
    public function createResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建TrainingJob
     *  *
     * @param CreateTrainingJobRequest $request CreateTrainingJobRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTrainingJobResponse CreateTrainingJobResponse
     */
    public function createTrainingJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algorithmName)) {
            $body['AlgorithmName'] = $request->algorithmName;
        }
        if (!Utils::isUnset($request->algorithmProvider)) {
            $body['AlgorithmProvider'] = $request->algorithmProvider;
        }
        if (!Utils::isUnset($request->algorithmSpec)) {
            $body['AlgorithmSpec'] = $request->algorithmSpec;
        }
        if (!Utils::isUnset($request->algorithmVersion)) {
            $body['AlgorithmVersion'] = $request->algorithmVersion;
        }
        if (!Utils::isUnset($request->codeDir)) {
            $body['CodeDir'] = $request->codeDir;
        }
        if (!Utils::isUnset($request->computeResource)) {
            $body['ComputeResource'] = $request->computeResource;
        }
        if (!Utils::isUnset($request->environments)) {
            $body['Environments'] = $request->environments;
        }
        if (!Utils::isUnset($request->experimentConfig)) {
            $body['ExperimentConfig'] = $request->experimentConfig;
        }
        if (!Utils::isUnset($request->hyperParameters)) {
            $body['HyperParameters'] = $request->hyperParameters;
        }
        if (!Utils::isUnset($request->inputChannels)) {
            $body['InputChannels'] = $request->inputChannels;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->outputChannels)) {
            $body['OutputChannels'] = $request->outputChannels;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->pythonRequirements)) {
            $body['PythonRequirements'] = $request->pythonRequirements;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $body['RoleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $body['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->settings)) {
            $body['Settings'] = $request->settings;
        }
        if (!Utils::isUnset($request->trainingJobDescription)) {
            $body['TrainingJobDescription'] = $request->trainingJobDescription;
        }
        if (!Utils::isUnset($request->trainingJobName)) {
            $body['TrainingJobName'] = $request->trainingJobName;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建TrainingJob
     *  *
     * @param CreateTrainingJobRequest $request CreateTrainingJobRequest
     *
     * @return CreateTrainingJobResponse CreateTrainingJobResponse
     */
    public function createTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTrainingJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除算法
     *  *
     * @param string         $AlgorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteAlgorithmResponse DeleteAlgorithmResponse
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
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlgorithmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除算法
     *  *
     * @param string $AlgorithmId
     *
     * @return DeleteAlgorithmResponse DeleteAlgorithmResponse
     */
    public function deleteAlgorithm($AlgorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlgorithmWithOptions($AlgorithmId, $headers, $runtime);
    }

    /**
     * @summary 删除算法版本
     *  *
     * @param string         $AlgorithmId
     * @param string         $AlgorithmVersion
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return DeleteAlgorithmVersionResponse DeleteAlgorithmVersionResponse
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
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlgorithmVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除算法版本
     *  *
     * @param string $AlgorithmId
     * @param string $AlgorithmVersion
     *
     * @return DeleteAlgorithmVersionResponse DeleteAlgorithmVersionResponse
     */
    public function deleteAlgorithmVersion($AlgorithmId, $AlgorithmVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteMachineGroup is deprecated
     *  *
     * @summary delete machine group
     *  *
     * Deprecated
     *
     * @param string         $MachineGroupID
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteMachineGroupResponse DeleteMachineGroupResponse
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
            'pathname' => '/api/v1/resources/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteMachineGroup is deprecated
     *  *
     * @summary delete machine group
     *  *
     * Deprecated
     *
     * @param string $MachineGroupID
     *
     * @return DeleteMachineGroupResponse DeleteMachineGroupResponse
     */
    public function deleteMachineGroup($MachineGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMachineGroupWithOptions($MachineGroupID, $headers, $runtime);
    }

    /**
     * @summary 删除Quota
     *  *
     * @param string         $QuotaId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQuotaResponse DeleteQuotaResponse
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
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除Quota
     *  *
     * @param string $QuotaId
     *
     * @return DeleteQuotaResponse DeleteQuotaResponse
     */
    public function deleteQuota($QuotaId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteQuotaWithOptions($QuotaId, $headers, $runtime);
    }

    /**
     * @summary 删除资源组
     *  *
     * @param string         $ResourceGroupID
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
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
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除资源组
     *  *
     * @param string $ResourceGroupID
     *
     * @return DeleteResourceGroupResponse DeleteResourceGroupResponse
     */
    public function deleteResourceGroup($ResourceGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceGroupWithOptions($ResourceGroupID, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI DeleteResourceGroupMachineGroup is deprecated
     *  *
     * @summary delete machine group
     *  *
     * Deprecated
     *
     * @param string         $MachineGroupID
     * @param string         $ResourceGroupID
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceGroupMachineGroupResponse DeleteResourceGroupMachineGroupResponse
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
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteResourceGroupMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DeleteResourceGroupMachineGroup is deprecated
     *  *
     * @summary delete machine group
     *  *
     * Deprecated
     *
     * @param string $MachineGroupID
     * @param string $ResourceGroupID
     *
     * @return DeleteResourceGroupMachineGroupResponse DeleteResourceGroupMachineGroupResponse
     */
    public function deleteResourceGroupMachineGroup($MachineGroupID, $ResourceGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $headers, $runtime);
    }

    /**
     * @summary 删除一个TrainingJob
     *  *
     * @param string         $TrainingJobId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteTrainingJobResponse DeleteTrainingJobResponse
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
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除一个TrainingJob
     *  *
     * @param string $TrainingJobId
     *
     * @return DeleteTrainingJobResponse DeleteTrainingJobResponse
     */
    public function deleteTrainingJob($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrainingJobWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * @summary 删除TrainingJob的Labels
     *  *
     * @param string                         $TrainingJobId
     * @param DeleteTrainingJobLabelsRequest $request       DeleteTrainingJobLabelsRequest
     * @param string[]                       $headers       map
     * @param RuntimeOptions                 $runtime       runtime options for this request RuntimeOptions
     *
     * @return DeleteTrainingJobLabelsResponse DeleteTrainingJobLabelsResponse
     */
    public function deleteTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keys)) {
            $query['Keys'] = $request->keys;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTrainingJobLabels',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/labels',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteTrainingJobLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTrainingJobLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除TrainingJob的Labels
     *  *
     * @param string                         $TrainingJobId
     * @param DeleteTrainingJobLabelsRequest $request       DeleteTrainingJobLabelsRequest
     *
     * @return DeleteTrainingJobLabelsResponse DeleteTrainingJobLabelsResponse
     */
    public function deleteTrainingJobLabels($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取一个算法信息
     *  *
     * @param string         $AlgorithmId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetAlgorithmResponse GetAlgorithmResponse
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
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAlgorithmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取一个算法信息
     *  *
     * @param string $AlgorithmId
     *
     * @return GetAlgorithmResponse GetAlgorithmResponse
     */
    public function getAlgorithm($AlgorithmId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmWithOptions($AlgorithmId, $headers, $runtime);
    }

    /**
     * @summary 创建一个新的算法版本
     *  *
     * @param string         $AlgorithmId
     * @param string         $AlgorithmVersion
     * @param string[]       $headers          map
     * @param RuntimeOptions $runtime          runtime options for this request RuntimeOptions
     *
     * @return GetAlgorithmVersionResponse GetAlgorithmVersionResponse
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
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAlgorithmVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建一个新的算法版本
     *  *
     * @param string $AlgorithmId
     * @param string $AlgorithmVersion
     *
     * @return GetAlgorithmVersionResponse GetAlgorithmVersionResponse
     */
    public function getAlgorithmVersion($AlgorithmId, $AlgorithmVersion)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetMachineGroup is deprecated
     *  *
     * @summary get machine group
     *  *
     * Deprecated
     *
     * @param string         $MachineGroupID
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetMachineGroupResponse GetMachineGroupResponse
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
            'pathname' => '/api/v1/resources/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetMachineGroup is deprecated
     *  *
     * @summary get machine group
     *  *
     * Deprecated
     *
     * @param string $MachineGroupID
     *
     * @return GetMachineGroupResponse GetMachineGroupResponse
     */
    public function getMachineGroup($MachineGroupID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMachineGroupWithOptions($MachineGroupID, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetNodeMetrics is deprecated
     *  *
     * @summary get resource group node metrics
     *  *
     * Deprecated
     *
     * @param string                $ResourceGroupID
     * @param string                $MetricType
     * @param GetNodeMetricsRequest $request         GetNodeMetricsRequest
     * @param string[]              $headers         map
     * @param RuntimeOptions        $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetNodeMetricsResponse GetNodeMetricsResponse
     */
    public function getNodeMetricsWithOptions($ResourceGroupID, $MetricType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->GPUType)) {
            $query['GPUType'] = $request->GPUType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/nodemetrics/' . OpenApiUtilClient::getEncodeParam($MetricType) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetNodeMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodeMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetNodeMetrics is deprecated
     *  *
     * @summary get resource group node metrics
     *  *
     * Deprecated
     *
     * @param string                $ResourceGroupID
     * @param string                $MetricType
     * @param GetNodeMetricsRequest $request         GetNodeMetricsRequest
     *
     * @return GetNodeMetricsResponse GetNodeMetricsResponse
     */
    public function getNodeMetrics($ResourceGroupID, $MetricType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeMetricsWithOptions($ResourceGroupID, $MetricType, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Quota
     *  *
     * @param string          $QuotaId
     * @param GetQuotaRequest $request GetQuotaRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuotaResponse GetQuotaResponse
     */
    public function getQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Quota
     *  *
     * @param string          $QuotaId
     * @param GetQuotaRequest $request GetQuotaRequest
     *
     * @return GetQuotaResponse GetQuotaResponse
     */
    public function getQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * @summary get resource group by group id
     *  *
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $tmpReq          GetResourceGroupRequest
     * @param string[]                $headers         map
     * @param RuntimeOptions          $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupResponse GetResourceGroupResponse
     */
    public function getResourceGroupWithOptions($ResourceGroupID, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetResourceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->isAIWorkspaceDataEnabled)) {
            $query['IsAIWorkspaceDataEnabled'] = $request->isAIWorkspaceDataEnabled;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary get resource group by group id
     *  *
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $request         GetResourceGroupRequest
     *
     * @return GetResourceGroupResponse GetResourceGroupResponse
     */
    public function getResourceGroup($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * @summary get machine group
     *  *
     * @param string                              $MachineGroupID
     * @param string                              $ResourceGroupID
     * @param GetResourceGroupMachineGroupRequest $tmpReq          GetResourceGroupMachineGroupRequest
     * @param string[]                            $headers         map
     * @param RuntimeOptions                      $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupMachineGroupResponse GetResourceGroupMachineGroupResponse
     */
    public function getResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetResourceGroupMachineGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->tagShrink)) {
            $query['Tag'] = $request->tagShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupMachineGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceGroupMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary get machine group
     *  *
     * @param string                              $MachineGroupID
     * @param string                              $ResourceGroupID
     * @param GetResourceGroupMachineGroupRequest $request         GetResourceGroupMachineGroupRequest
     *
     * @return GetResourceGroupMachineGroupResponse GetResourceGroupMachineGroupResponse
     */
    public function getResourceGroupMachineGroup($MachineGroupID, $ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupMachineGroupWithOptions($MachineGroupID, $ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetResourceGroupRequest is deprecated
     *  *
     * @summary get resource group requested resource by resource group id
     *  *
     * Deprecated
     *
     * @param GetResourceGroupRequestRequest $request GetResourceGroupRequestRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupRequestResponse GetResourceGroupRequestResponse
     */
    public function getResourceGroupRequestWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->podStatus)) {
            $query['PodStatus'] = $request->podStatus;
        }
        if (!Utils::isUnset($request->resourceGroupID)) {
            $query['ResourceGroupID'] = $request->resourceGroupID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetResourceGroupRequestResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceGroupRequestResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetResourceGroupRequest is deprecated
     *  *
     * @summary get resource group requested resource by resource group id
     *  *
     * Deprecated
     *
     * @param GetResourceGroupRequestRequest $request GetResourceGroupRequestRequest
     *
     * @return GetResourceGroupRequestResponse GetResourceGroupRequestResponse
     */
    public function getResourceGroupRequest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupRequestWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary get resource group total resource by group id
     *  *
     * @param GetResourceGroupTotalRequest $request GetResourceGroupTotalRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupTotalResponse GetResourceGroupTotalResponse
     */
    public function getResourceGroupTotalWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceGroupID)) {
            $query['ResourceGroupID'] = $request->resourceGroupID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetResourceGroupTotalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceGroupTotalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary get resource group total resource by group id
     *  *
     * @param GetResourceGroupTotalRequest $request GetResourceGroupTotalRequest
     *
     * @return GetResourceGroupTotalResponse GetResourceGroupTotalResponse
     */
    public function getResourceGroupTotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupTotalWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取抢占式实例历史价格
     *  *
     * @param string                     $InstanceType
     * @param GetSpotPriceHistoryRequest $request      GetSpotPriceHistoryRequest
     * @param string[]                   $headers      map
     * @param RuntimeOptions             $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetSpotPriceHistoryResponse GetSpotPriceHistoryResponse
     */
    public function getSpotPriceHistoryWithOptions($InstanceType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSpotPriceHistory',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/spots/' . OpenApiUtilClient::getEncodeParam($InstanceType) . '/pricehistory',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSpotPriceHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSpotPriceHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取抢占式实例历史价格
     *  *
     * @param string                     $InstanceType
     * @param GetSpotPriceHistoryRequest $request      GetSpotPriceHistoryRequest
     *
     * @return GetSpotPriceHistoryResponse GetSpotPriceHistoryResponse
     */
    public function getSpotPriceHistory($InstanceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSpotPriceHistoryWithOptions($InstanceType, $request, $headers, $runtime);
    }

    /**
     * @summary 调用GetToken获取临时鉴权信息
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
        if (!Utils::isUnset($request->trainingJobId)) {
            $query['TrainingJobId'] = $request->trainingJobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 调用GetToken获取临时鉴权信息
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
     * @summary 获取TrainingJob的详情
     *  *
     * @param string         $TrainingJobId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTrainingJobResponse GetTrainingJobResponse
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
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取TrainingJob的详情
     *  *
     * @param string $TrainingJobId
     *
     * @return GetTrainingJobResponse GetTrainingJobResponse
     */
    public function getTrainingJob($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * @summary 获取Training Job的算法错误信息
     *  *
     * @param string         $TrainingJobId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTrainingJobErrorInfoResponse GetTrainingJobErrorInfoResponse
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
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/errorinfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTrainingJobErrorInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTrainingJobErrorInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Training Job的算法错误信息
     *  *
     * @param string $TrainingJobId
     *
     * @return GetTrainingJobErrorInfoResponse GetTrainingJobErrorInfoResponse
     */
    public function getTrainingJobErrorInfo($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobErrorInfoWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * @summary 获取TrainingJob最近的Metrics
     *  *
     * @param string                             $TrainingJobId
     * @param GetTrainingJobLatestMetricsRequest $request       GetTrainingJobLatestMetricsRequest
     * @param string[]                           $headers       map
     * @param RuntimeOptions                     $runtime       runtime options for this request RuntimeOptions
     *
     * @return GetTrainingJobLatestMetricsResponse GetTrainingJobLatestMetricsResponse
     */
    public function getTrainingJobLatestMetricsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->names)) {
            $query['Names'] = $request->names;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrainingJobLatestMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/latestmetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTrainingJobLatestMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTrainingJobLatestMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取TrainingJob最近的Metrics
     *  *
     * @param string                             $TrainingJobId
     * @param GetTrainingJobLatestMetricsRequest $request       GetTrainingJobLatestMetricsRequest
     *
     * @return GetTrainingJobLatestMetricsResponse GetTrainingJobLatestMetricsResponse
     */
    public function getTrainingJobLatestMetrics($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTrainingJobLatestMetricsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * @deprecated OpenAPI GetUserViewMetrics is deprecated
     *  *
     * @summary get user view  metrics
     *  *
     * Deprecated
     *
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request         GetUserViewMetricsRequest
     * @param string[]                  $headers         map
     * @param RuntimeOptions            $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetUserViewMetricsResponse GetUserViewMetricsResponse
     */
    public function getUserViewMetricsWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserViewMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/usermetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserViewMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserViewMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI GetUserViewMetrics is deprecated
     *  *
     * @summary get user view  metrics
     *  *
     * Deprecated
     *
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request         GetUserViewMetricsRequest
     *
     * @return GetUserViewMetricsResponse GetUserViewMetricsResponse
     */
    public function getUserViewMetrics($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserViewMetricsWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * @summary 获取算法的所有版本信息
     *  *
     * @param string                       $AlgorithmId
     * @param ListAlgorithmVersionsRequest $request     ListAlgorithmVersionsRequest
     * @param string[]                     $headers     map
     * @param RuntimeOptions               $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListAlgorithmVersionsResponse ListAlgorithmVersionsResponse
     */
    public function listAlgorithmVersionsWithOptions($AlgorithmId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlgorithmVersions',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAlgorithmVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlgorithmVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取算法的所有版本信息
     *  *
     * @param string                       $AlgorithmId
     * @param ListAlgorithmVersionsRequest $request     ListAlgorithmVersionsRequest
     *
     * @return ListAlgorithmVersionsResponse ListAlgorithmVersionsResponse
     */
    public function listAlgorithmVersions($AlgorithmId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlgorithmVersionsWithOptions($AlgorithmId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取算法列表
     *  *
     * @param ListAlgorithmsRequest $request ListAlgorithmsRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlgorithmsResponse ListAlgorithmsResponse
     */
    public function listAlgorithmsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithmId)) {
            $query['AlgorithmId'] = $request->algorithmId;
        }
        if (!Utils::isUnset($request->algorithmName)) {
            $query['AlgorithmName'] = $request->algorithmName;
        }
        if (!Utils::isUnset($request->algorithmProvider)) {
            $query['AlgorithmProvider'] = $request->algorithmProvider;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlgorithmsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取算法列表
     *  *
     * @param ListAlgorithmsRequest $request ListAlgorithmsRequest
     *
     * @return ListAlgorithmsResponse ListAlgorithmsResponse
     */
    public function listAlgorithms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlgorithmsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取资源节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     * @param string[]         $headers map
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->filterByQuotaId)) {
            $query['FilterByQuotaId'] = $request->filterByQuotaId;
        }
        if (!Utils::isUnset($request->filterByResourceGroupIds)) {
            $query['FilterByResourceGroupIds'] = $request->filterByResourceGroupIds;
        }
        if (!Utils::isUnset($request->GPUType)) {
            $query['GPUType'] = $request->GPUType;
        }
        if (!Utils::isUnset($request->machineGroupIds)) {
            $query['MachineGroupIds'] = $request->machineGroupIds;
        }
        if (!Utils::isUnset($request->nodeNames)) {
            $query['NodeNames'] = $request->nodeNames;
        }
        if (!Utils::isUnset($request->nodeStatuses)) {
            $query['NodeStatuses'] = $request->nodeStatuses;
        }
        if (!Utils::isUnset($request->nodeTypes)) {
            $query['NodeTypes'] = $request->nodeTypes;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderStatuses)) {
            $query['OrderStatuses'] = $request->orderStatuses;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->quotaId)) {
            $query['QuotaId'] = $request->quotaId;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取资源节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 您可以通过此API获取Quota上的任务信息列表
     *  *
     * @param string                    $QuotaId
     * @param ListQuotaWorkloadsRequest $request ListQuotaWorkloadsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotaWorkloadsResponse ListQuotaWorkloadsResponse
     */
    public function listQuotaWorkloadsWithOptions($QuotaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beforeWorkloadId)) {
            $query['BeforeWorkloadId'] = $request->beforeWorkloadId;
        }
        if (!Utils::isUnset($request->gmtDequeuedTimeRange)) {
            $query['GmtDequeuedTimeRange'] = $request->gmtDequeuedTimeRange;
        }
        if (!Utils::isUnset($request->gmtEnqueuedTimeRange)) {
            $query['GmtEnqueuedTimeRange'] = $request->gmtEnqueuedTimeRange;
        }
        if (!Utils::isUnset($request->gmtPositionModifiedTimeRange)) {
            $query['GmtPositionModifiedTimeRange'] = $request->gmtPositionModifiedTimeRange;
        }
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
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
        if (!Utils::isUnset($request->showOwn)) {
            $query['ShowOwn'] = $request->showOwn;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subQuotaIds)) {
            $query['SubQuotaIds'] = $request->subQuotaIds;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['UserIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->withHistoricalData)) {
            $query['WithHistoricalData'] = $request->withHistoricalData;
        }
        if (!Utils::isUnset($request->workloadCreatedTimeRange)) {
            $query['WorkloadCreatedTimeRange'] = $request->workloadCreatedTimeRange;
        }
        if (!Utils::isUnset($request->workloadIds)) {
            $query['WorkloadIds'] = $request->workloadIds;
        }
        if (!Utils::isUnset($request->workloadStatuses)) {
            $query['WorkloadStatuses'] = $request->workloadStatuses;
        }
        if (!Utils::isUnset($request->workloadType)) {
            $query['WorkloadType'] = $request->workloadType;
        }
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQuotaWorkloads',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '/workloads',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListQuotaWorkloadsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListQuotaWorkloadsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 您可以通过此API获取Quota上的任务信息列表
     *  *
     * @param string                    $QuotaId
     * @param ListQuotaWorkloadsRequest $request ListQuotaWorkloadsRequest
     *
     * @return ListQuotaWorkloadsResponse ListQuotaWorkloadsResponse
     */
    public function listQuotaWorkloads($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotaWorkloadsWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Quota列表
     *  *
     * @param ListQuotasRequest $request ListQuotasRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuotasResponse ListQuotasResponse
     */
    public function listQuotasWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->layoutMode)) {
            $query['LayoutMode'] = $request->layoutMode;
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
        if (!Utils::isUnset($request->parentQuotaId)) {
            $query['ParentQuotaId'] = $request->parentQuotaId;
        }
        if (!Utils::isUnset($request->quotaIds)) {
            $query['QuotaIds'] = $request->quotaIds;
        }
        if (!Utils::isUnset($request->quotaName)) {
            $query['QuotaName'] = $request->quotaName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->statuses)) {
            $query['Statuses'] = $request->statuses;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        if (!Utils::isUnset($request->workspaceName)) {
            $query['WorkspaceName'] = $request->workspaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListQuotasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Quota列表
     *  *
     * @param ListQuotasRequest $request ListQuotasRequest
     *
     * @return ListQuotasResponse ListQuotasResponse
     */
    public function listQuotas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary list machine groups
     *  *
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request         ListResourceGroupMachineGroupsRequest
     * @param string[]                              $headers         map
     * @param RuntimeOptions                        $runtime         runtime options for this request RuntimeOptions
     *
     * @return ListResourceGroupMachineGroupsResponse ListResourceGroupMachineGroupsResponse
     */
    public function listResourceGroupMachineGroupsWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creatorID)) {
            $query['CreatorID'] = $request->creatorID;
        }
        if (!Utils::isUnset($request->ecsSpec)) {
            $query['EcsSpec'] = $request->ecsSpec;
        }
        if (!Utils::isUnset($request->machineGroupIDs)) {
            $query['MachineGroupIDs'] = $request->machineGroupIDs;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderInstanceId)) {
            $query['OrderInstanceId'] = $request->orderInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paymentDuration)) {
            $query['PaymentDuration'] = $request->paymentDuration;
        }
        if (!Utils::isUnset($request->paymentDurationUnit)) {
            $query['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceGroupMachineGroups',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/machinegroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListResourceGroupMachineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourceGroupMachineGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary list machine groups
     *  *
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request         ListResourceGroupMachineGroupsRequest
     *
     * @return ListResourceGroupMachineGroupsResponse ListResourceGroupMachineGroupsResponse
     */
    public function listResourceGroupMachineGroups($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupMachineGroupsWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * @summary list resource group
     *  *
     * @param ListResourceGroupsRequest $request ListResourceGroupsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceGroupsResponse ListResourceGroupsResponse
     */
    public function listResourceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->computingResourceProvider)) {
            $query['ComputingResourceProvider'] = $request->computingResourceProvider;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        if (!Utils::isUnset($request->showAll)) {
            $query['ShowAll'] = $request->showAll;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary list resource group
     *  *
     * @param ListResourceGroupsRequest $request ListResourceGroupsRequest
     *
     * @return ListResourceGroupsResponse ListResourceGroupsResponse
     */
    public function listResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取指定TrainingJob的事件。
     *  *
     * @param string                       $TrainingJobId
     * @param ListTrainingJobEventsRequest $request       ListTrainingJobEventsRequest
     * @param string[]                     $headers       map
     * @param RuntimeOptions               $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobEventsResponse ListTrainingJobEventsResponse
     */
    public function listTrainingJobEventsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobEvents',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取指定TrainingJob的事件。
     *  *
     * @param string                       $TrainingJobId
     * @param ListTrainingJobEventsRequest $request       ListTrainingJobEventsRequest
     *
     * @return ListTrainingJobEventsResponse ListTrainingJobEventsResponse
     */
    public function listTrainingJobEvents($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobEventsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取指定Instance（TrainingJob的运行单元）的日志。
     *  *
     * @param string                               $TrainingJobId
     * @param string                               $InstanceId
     * @param ListTrainingJobInstanceEventsRequest $request       ListTrainingJobInstanceEventsRequest
     * @param string[]                             $headers       map
     * @param RuntimeOptions                       $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobInstanceEventsResponse ListTrainingJobInstanceEventsResponse
     */
    public function listTrainingJobInstanceEventsWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobInstanceEvents',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobInstanceEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobInstanceEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取指定Instance（TrainingJob的运行单元）的日志。
     *  *
     * @param string                               $TrainingJobId
     * @param string                               $InstanceId
     * @param ListTrainingJobInstanceEventsRequest $request       ListTrainingJobInstanceEventsRequest
     *
     * @return ListTrainingJobInstanceEventsResponse ListTrainingJobInstanceEventsResponse
     */
    public function listTrainingJobInstanceEvents($TrainingJobId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobInstanceEventsWithOptions($TrainingJobId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Training Job实例的Metrics
     *  *
     * @param string                                $TrainingJobId
     * @param ListTrainingJobInstanceMetricsRequest $request       ListTrainingJobInstanceMetricsRequest
     * @param string[]                              $headers       map
     * @param RuntimeOptions                        $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobInstanceMetricsResponse ListTrainingJobInstanceMetricsResponse
     */
    public function listTrainingJobInstanceMetricsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobInstanceMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/instancemetrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobInstanceMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Training Job实例的Metrics
     *  *
     * @param string                                $TrainingJobId
     * @param ListTrainingJobInstanceMetricsRequest $request       ListTrainingJobInstanceMetricsRequest
     *
     * @return ListTrainingJobInstanceMetricsResponse ListTrainingJobInstanceMetricsResponse
     */
    public function listTrainingJobInstanceMetrics($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobInstanceMetricsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Training Job的日志
     *  *
     * @param string                     $TrainingJobId
     * @param ListTrainingJobLogsRequest $request       ListTrainingJobLogsRequest
     * @param string[]                   $headers       map
     * @param RuntimeOptions             $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobLogsResponse ListTrainingJobLogsResponse
     */
    public function listTrainingJobLogsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->workerId)) {
            $query['WorkerId'] = $request->workerId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobLogs',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Training Job的日志
     *  *
     * @param string                     $TrainingJobId
     * @param ListTrainingJobLogsRequest $request       ListTrainingJobLogsRequest
     *
     * @return ListTrainingJobLogsResponse ListTrainingJobLogsResponse
     */
    public function listTrainingJobLogs($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobLogsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Training Job的Metrics
     *  *
     * @param string                        $TrainingJobId
     * @param ListTrainingJobMetricsRequest $request       ListTrainingJobMetricsRequest
     * @param string[]                      $headers       map
     * @param RuntimeOptions                $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobMetricsResponse ListTrainingJobMetricsResponse
     */
    public function listTrainingJobMetricsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTrainingJobMetrics',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobMetricsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Training Job的Metrics
     *  *
     * @param string                        $TrainingJobId
     * @param ListTrainingJobMetricsRequest $request       ListTrainingJobMetricsRequest
     *
     * @return ListTrainingJobMetricsResponse ListTrainingJobMetricsResponse
     */
    public function listTrainingJobMetrics($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobMetricsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取Training Job 产出的所有模型信息
     *  *
     * @param string         $TrainingJobId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobOutputModelsResponse ListTrainingJobOutputModelsResponse
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
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/outputmodels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobOutputModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobOutputModelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取Training Job 产出的所有模型信息
     *  *
     * @param string $TrainingJobId
     *
     * @return ListTrainingJobOutputModelsResponse ListTrainingJobOutputModelsResponse
     */
    public function listTrainingJobOutputModels($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobOutputModelsWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * @summary 获取TrainingJob的列表
     *  *
     * @param ListTrainingJobsRequest $tmpReq  ListTrainingJobsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTrainingJobsResponse ListTrainingJobsResponse
     */
    public function listTrainingJobsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTrainingJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labels)) {
            $request->labelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->algorithmName)) {
            $query['AlgorithmName'] = $request->algorithmName;
        }
        if (!Utils::isUnset($request->algorithmProvider)) {
            $query['AlgorithmProvider'] = $request->algorithmProvider;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isTempAlgo)) {
            $query['IsTempAlgo'] = $request->isTempAlgo;
        }
        if (!Utils::isUnset($request->labelsShrink)) {
            $query['Labels'] = $request->labelsShrink;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->trainingJobId)) {
            $query['TrainingJobId'] = $request->trainingJobId;
        }
        if (!Utils::isUnset($request->trainingJobName)) {
            $query['TrainingJobName'] = $request->trainingJobName;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTrainingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取TrainingJob的列表
     *  *
     * @param ListTrainingJobsRequest $request ListTrainingJobsRequest
     *
     * @return ListTrainingJobsResponse ListTrainingJobsResponse
     */
    public function listTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrainingJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 扩缩容Quota
     *  *
     * @param string            $QuotaId
     * @param ScaleQuotaRequest $request ScaleQuotaRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ScaleQuotaResponse ScaleQuotaResponse
     */
    public function scaleQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->min)) {
            $body['Min'] = $request->min;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $body['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '/action/scale',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScaleQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 扩缩容Quota
     *  *
     * @param string            $QuotaId
     * @param ScaleQuotaRequest $request ScaleQuotaRequest
     *
     * @return ScaleQuotaResponse ScaleQuotaResponse
     */
    public function scaleQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * @summary 停止一个TrainingJob
     *  *
     * @param string         $TrainingJobId
     * @param string[]       $headers       map
     * @param RuntimeOptions $runtime       runtime options for this request RuntimeOptions
     *
     * @return StopTrainingJobResponse StopTrainingJobResponse
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
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止一个TrainingJob
     *  *
     * @param string $TrainingJobId
     *
     * @return StopTrainingJobResponse StopTrainingJobResponse
     */
    public function stopTrainingJob($TrainingJobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTrainingJobWithOptions($TrainingJobId, $headers, $runtime);
    }

    /**
     * @summary 更新算法
     *  *
     * @param string                 $AlgorithmId
     * @param UpdateAlgorithmRequest $request     UpdateAlgorithmRequest
     * @param string[]               $headers     map
     * @param RuntimeOptions         $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateAlgorithmResponse UpdateAlgorithmResponse
     */
    public function updateAlgorithmWithOptions($AlgorithmId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->algorithmDescription)) {
            $body['AlgorithmDescription'] = $request->algorithmDescription;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlgorithm',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlgorithmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新算法
     *  *
     * @param string                 $AlgorithmId
     * @param UpdateAlgorithmRequest $request     UpdateAlgorithmRequest
     *
     * @return UpdateAlgorithmResponse UpdateAlgorithmResponse
     */
    public function updateAlgorithm($AlgorithmId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlgorithmWithOptions($AlgorithmId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新算法
     *  *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param UpdateAlgorithmVersionRequest $tmpReq           UpdateAlgorithmVersionRequest
     * @param string[]                      $headers          map
     * @param RuntimeOptions                $runtime          runtime options for this request RuntimeOptions
     *
     * @return UpdateAlgorithmVersionResponse UpdateAlgorithmVersionResponse
     */
    public function updateAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAlgorithmVersionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->algorithmSpec)) {
            $request->algorithmSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->algorithmSpec, 'AlgorithmSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->algorithmSpecShrink)) {
            $body['AlgorithmSpec'] = $request->algorithmSpecShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAlgorithmVersion',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAlgorithmVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新算法
     *  *
     * @param string                        $AlgorithmId
     * @param string                        $AlgorithmVersion
     * @param UpdateAlgorithmVersionRequest $request          UpdateAlgorithmVersionRequest
     *
     * @return UpdateAlgorithmVersionResponse UpdateAlgorithmVersionResponse
     */
    public function updateAlgorithmVersion($AlgorithmId, $AlgorithmVersion, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlgorithmVersionWithOptions($AlgorithmId, $AlgorithmVersion, $request, $headers, $runtime);
    }

    /**
     * @summary 更新Quota
     *  *
     * @param string             $QuotaId
     * @param UpdateQuotaRequest $request UpdateQuotaRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQuotaResponse UpdateQuotaResponse
     */
    public function updateQuotaWithOptions($QuotaId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->queueStrategy)) {
            $body['QueueStrategy'] = $request->queueStrategy;
        }
        if (!Utils::isUnset($request->quotaConfig)) {
            $body['QuotaConfig'] = $request->quotaConfig;
        }
        if (!Utils::isUnset($request->quotaName)) {
            $body['QuotaName'] = $request->quotaName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateQuota',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新Quota
     *  *
     * @param string             $QuotaId
     * @param UpdateQuotaRequest $request UpdateQuotaRequest
     *
     * @return UpdateQuotaResponse UpdateQuotaResponse
     */
    public function updateQuota($QuotaId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaWithOptions($QuotaId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新Resource Group
     *  *
     * @param string                     $ResourceGroupID
     * @param UpdateResourceGroupRequest $request         UpdateResourceGroupRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceGroupResponse UpdateResourceGroupResponse
     */
    public function updateResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->unbind)) {
            $body['Unbind'] = $request->unbind;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceGroup',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新Resource Group
     *  *
     * @param string                     $ResourceGroupID
     * @param UpdateResourceGroupRequest $request         UpdateResourceGroupRequest
     *
     * @return UpdateResourceGroupResponse UpdateResourceGroupResponse
     */
    public function updateResourceGroup($ResourceGroupID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceGroupWithOptions($ResourceGroupID, $request, $headers, $runtime);
    }

    /**
     * @summary 更新一个TrainingJob的Labels
     *  *
     * @param string                         $TrainingJobId
     * @param UpdateTrainingJobLabelsRequest $request       UpdateTrainingJobLabelsRequest
     * @param string[]                       $headers       map
     * @param RuntimeOptions                 $runtime       runtime options for this request RuntimeOptions
     *
     * @return UpdateTrainingJobLabelsResponse UpdateTrainingJobLabelsResponse
     */
    public function updateTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTrainingJobLabels',
            'version' => '2022-01-12',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/labels',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateTrainingJobLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTrainingJobLabelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新一个TrainingJob的Labels
     *  *
     * @param string                         $TrainingJobId
     * @param UpdateTrainingJobLabelsRequest $request       UpdateTrainingJobLabelsRequest
     *
     * @return UpdateTrainingJobLabelsResponse UpdateTrainingJobLabelsResponse
     */
    public function updateTrainingJobLabels($TrainingJobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTrainingJobLabelsWithOptions($TrainingJobId, $request, $headers, $runtime);
    }
}
