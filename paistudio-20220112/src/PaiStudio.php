<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmVersionRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmVersionResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateAlgorithmVersionShrinkRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateQuotaRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateResourceGroupRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateResourceGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteQuotaResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteResourceGroupMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\DeleteResourceGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetAlgorithmResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetAlgorithmVersionResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetMachineGroupResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetNodeMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetNodeMetricsResponse;
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
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetUserViewMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetUserViewMetricsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListAlgorithmVersionsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListQuotasRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListQuotasResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupMachineGroupsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupMachineGroupsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListResourceGroupsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobLogsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobLogsResponse;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobMetricsRequest;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobMetricsResponse;
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
        $this->_endpointMap  = [
            'cn-beijing'     => 'pai.cn-beijing.aliyuncs.com',
            'cn-hangzhou'    => 'pai.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'    => 'pai.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'    => 'pai.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'    => 'pai.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'pai.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'pai.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'pai.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'pai.ap-southeast-5.aliyuncs.com',
            'us-west-1'      => 'pai.us-west-1.aliyuncs.com',
            'us-east-1'      => 'pai.us-east-1.aliyuncs.com',
            'eu-central-1'   => 'pai.eu-central-1.aliyuncs.com',
            'me-east-1'      => 'pai.me-east-1.aliyuncs.com',
            'ap-south-1'     => 'pai.ap-south-1.aliyuncs.com',
            'cn-qingdao'     => 'pai.cn-qingdao.aliyuncs.com',
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
     * @param CreateAlgorithmRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAlgorithmResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlgorithm',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlgorithmVersion',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQuotaResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQuota',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceGroupResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateTrainingJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTrainingJobResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTrainingJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteMachineGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteQuota',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteResourceGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteResourceGroupMachineGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetAlgorithm',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetAlgorithmVersion',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetMachineGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNodeMetrics',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/nodemetrics/' . OpenApiUtilClient::getEncodeParam($MetricType) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNodeMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string         $QuotaId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($QuotaId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetQuota',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $QuotaId
     *
     * @return GetQuotaResponse
     */
    public function getQuota($QuotaId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($QuotaId, $headers, $runtime);
    }

    /**
     * @param string                  $ResourceGroupID
     * @param GetResourceGroupRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourceGroupResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroupMachineGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/machinegroups/' . OpenApiUtilClient::getEncodeParam($MachineGroupID) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupMachineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetResourceGroupRequestRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceGroupRequestResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroupRequest',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/data/request',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetResourceGroupTotalRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceGroupTotalResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroupTotal',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/data/total',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetTrainingJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $ResourceGroupID
     * @param GetUserViewMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserViewMetricsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserViewMetrics',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/usermetrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserViewMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                       $AlgorithmId
     * @param ListAlgorithmVersionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListAlgorithmVersionsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlgorithmVersions',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlgorithmVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAlgorithmsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlgorithmsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlgorithms',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlgorithmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListQuotasRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListQuotasResponse
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
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotas',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                                $ResourceGroupID
     * @param ListResourceGroupMachineGroupsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListResourceGroupMachineGroupsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceGroupMachineGroups',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '/machinegroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceGroupMachineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListResourceGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourceGroupsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceGroups',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $TrainingJobId
     * @param ListTrainingJobLogsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListTrainingJobLogsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrainingJobLogs',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrainingJobLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                        $TrainingJobId
     * @param ListTrainingJobMetricsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListTrainingJobMetricsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrainingJobMetrics',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrainingJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTrainingJobsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTrainingJobsResponse
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTrainingJobs',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $QuotaId
     * @param ScaleQuotaRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ScaleQuotaResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleQuota',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '/action/scale',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'StopTrainingJob',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $AlgorithmId
     * @param UpdateAlgorithmRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlgorithmResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlgorithm',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlgorithmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlgorithmVersion',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/algorithms/' . OpenApiUtilClient::getEncodeParam($AlgorithmId) . '/versions/' . OpenApiUtilClient::getEncodeParam($AlgorithmVersion) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAlgorithmVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string             $QuotaId
     * @param UpdateQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateQuotaResponse
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateQuota',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/quotas/' . OpenApiUtilClient::getEncodeParam($QuotaId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                     $ResourceGroupID
     * @param UpdateResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceGroupResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceGroup',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/' . OpenApiUtilClient::getEncodeParam($ResourceGroupID) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                         $TrainingJobId
     * @param UpdateTrainingJobLabelsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateTrainingJobLabelsResponse
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
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTrainingJobLabels',
            'version'     => '2022-01-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/trainingjobs/' . OpenApiUtilClient::getEncodeParam($TrainingJobId) . '/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTrainingJobLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
