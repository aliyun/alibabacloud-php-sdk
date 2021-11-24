<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddMockRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateAlarmRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateAlarmRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateAlarmRuleShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteAlarmRuleRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteAlarmRuleResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosServiceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteNacosServiceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\DeleteZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ExportNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetEngineNamepaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetEngineNamepaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayOptionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayOptionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterListRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterListResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImportFileUrlRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetImportFileUrlResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetMseFeatureSwitchResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosHistoryConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetOverviewRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetOverviewResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ImportNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmContactGroupsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmContactGroupsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmHistoriesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmHistoriesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmItemsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmItemsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmRulesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmRulesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsInstancesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterConnectionTypesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClustersResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterTypesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterTypesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterVersionsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEngineNamespacesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaInstancesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListZnodeChildrenResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ModifyGovernanceKubernetesClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterDiskSpecificationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryClusterSpecificationResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayRegionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryGatewayTypeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QuerySlbSpecResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryZnodeDetailRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryZnodeDetailResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RestartClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RestartClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\RetryClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\RetryClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\ScalingClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\ScalingClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAclRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateAclResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateEngineNamespaceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayNameRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayNameResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayOptionShrinkRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHTTPRewriteRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteHTTPRewriteResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateImageRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateImageResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosConfigResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosInstanceRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateNacosInstanceResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZnodeRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZnodeResponse;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpgradeClusterRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpgradeClusterResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Mse extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mse', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddMockRuleRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddMockRuleResponse
     */
    public function addMockRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddMockRuleResponse::fromMap($this->doRPCRequest('AddMockRule', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddMockRuleRequest $request
     *
     * @return AddMockRuleResponse
     */
    public function addMockRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMockRuleWithOptions($request, $runtime);
    }

    /**
     * @param AddServiceSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddServiceSourceResponse
     */
    public function addServiceSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddServiceSourceResponse::fromMap($this->doRPCRequest('AddServiceSource', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddServiceSourceRequest $request
     *
     * @return AddServiceSourceResponse
     */
    public function addServiceSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addServiceSourceWithOptions($request, $runtime);
    }

    /**
     * @param CloneNacosConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloneNacosConfigResponse
     */
    public function cloneNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneNacosConfigResponse::fromMap($this->doRPCRequest('CloneNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloneNacosConfigRequest $request
     *
     * @return CloneNacosConfigResponse
     */
    public function cloneNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlarmRuleRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAlarmRuleResponse
     */
    public function createAlarmRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAlarmRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alertWay)) {
            $request->alertWayShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alertWay, 'AlertWay', 'json');
        }
        if (!Utils::isUnset($tmpReq->contactGroupIds)) {
            $request->contactGroupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactGroupIds, 'ContactGroupIds', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlarmRuleResponse::fromMap($this->doRPCRequest('CreateAlarmRule', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAlarmRuleRequest $request
     *
     * @return CreateAlarmRuleResponse
     */
    public function createAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateApplicationResponse::fromMap($this->doRPCRequest('CreateApplication', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterResponse::fromMap($this->doRPCRequest('CreateCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEngineNamespaceResponse
     */
    public function createEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEngineNamespaceResponse::fromMap($this->doRPCRequest('CreateEngineNamespace', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEngineNamespaceRequest $request
     *
     * @return CreateEngineNamespaceResponse
     */
    public function createEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param CreateGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateGovernanceKubernetesClusterResponse
     */
    public function createGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGovernanceKubernetesClusterResponse::fromMap($this->doRPCRequest('CreateGovernanceKubernetesCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGovernanceKubernetesClusterRequest $request
     *
     * @return CreateGovernanceKubernetesClusterResponse
     */
    public function createGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateNacosConfigResponse
     */
    public function createNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNacosConfigResponse::fromMap($this->doRPCRequest('CreateNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNacosConfigRequest $request
     *
     * @return CreateNacosConfigResponse
     */
    public function createNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateZnodeResponse
     */
    public function createZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateZnodeResponse::fromMap($this->doRPCRequest('CreateZnode', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateZnodeRequest $request
     *
     * @return CreateZnodeResponse
     */
    public function createZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createZnodeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlarmRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAlarmRuleResponse
     */
    public function deleteAlarmRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlarmRuleResponse::fromMap($this->doRPCRequest('DeleteAlarmRule', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAlarmRuleRequest $request
     *
     * @return DeleteAlarmRuleResponse
     */
    public function deleteAlarmRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlarmRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClusterResponse::fromMap($this->doRPCRequest('DeleteCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEngineNamespaceResponse::fromMap($this->doRPCRequest('DeleteEngineNamespace', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEngineNamespaceRequest $request
     *
     * @return DeleteEngineNamespaceResponse
     */
    public function deleteEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteNacosConfigResponse
     */
    public function deleteNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNacosConfigResponse::fromMap($this->doRPCRequest('DeleteNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNacosConfigRequest $request
     *
     * @return DeleteNacosConfigResponse
     */
    public function deleteNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNacosConfigsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNacosConfigsResponse::fromMap($this->doRPCRequest('DeleteNacosConfigs', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNacosConfigsRequest $request
     *
     * @return DeleteNacosConfigsResponse
     */
    public function deleteNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNacosServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteNacosServiceResponse
     */
    public function deleteNacosServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNacosServiceResponse::fromMap($this->doRPCRequest('DeleteNacosService', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNacosServiceRequest $request
     *
     * @return DeleteNacosServiceResponse
     */
    public function deleteNacosService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNacosServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteZnodeResponse
     */
    public function deleteZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteZnodeResponse::fromMap($this->doRPCRequest('DeleteZnode', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteZnodeRequest $request
     *
     * @return DeleteZnodeResponse
     */
    public function deleteZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteZnodeWithOptions($request, $runtime);
    }

    /**
     * @param ExportNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ExportNacosConfigResponse
     */
    public function exportNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExportNacosConfigResponse::fromMap($this->doRPCRequest('ExportNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExportNacosConfigRequest $request
     *
     * @return ExportNacosConfigResponse
     */
    public function exportNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetEngineNamepaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEngineNamepaceResponse
     */
    public function getEngineNamepaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetEngineNamepaceResponse::fromMap($this->doRPCRequest('GetEngineNamepace', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetEngineNamepaceRequest $request
     *
     * @return GetEngineNamepaceResponse
     */
    public function getEngineNamepace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEngineNamepaceWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetGatewayResponse
     */
    public function getGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetGatewayResponse::fromMap($this->doRPCRequest('GetGateway', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGatewayRequest $request
     *
     * @return GetGatewayResponse
     */
    public function getGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayWithOptions($request, $runtime);
    }

    /**
     * @param GetGatewayOptionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetGatewayOptionResponse
     */
    public function getGatewayOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGatewayOptionResponse::fromMap($this->doRPCRequest('GetGatewayOption', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGatewayOptionRequest $request
     *
     * @return GetGatewayOptionResponse
     */
    public function getGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * @param GetGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGovernanceKubernetesClusterResponse::fromMap($this->doRPCRequest('GetGovernanceKubernetesCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGovernanceKubernetesClusterRequest $request
     *
     * @return GetGovernanceKubernetesClusterResponse
     */
    public function getGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @param GetGovernanceKubernetesClusterListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetGovernanceKubernetesClusterListResponse
     */
    public function getGovernanceKubernetesClusterListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetGovernanceKubernetesClusterListResponse::fromMap($this->doRPCRequest('GetGovernanceKubernetesClusterList', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetGovernanceKubernetesClusterListRequest $request
     *
     * @return GetGovernanceKubernetesClusterListResponse
     */
    public function getGovernanceKubernetesClusterList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGovernanceKubernetesClusterListWithOptions($request, $runtime);
    }

    /**
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImageResponse::fromMap($this->doRPCRequest('GetImage', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * @param GetImportFileUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetImportFileUrlResponse
     */
    public function getImportFileUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetImportFileUrlResponse::fromMap($this->doRPCRequest('GetImportFileUrl', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetImportFileUrlRequest $request
     *
     * @return GetImportFileUrlResponse
     */
    public function getImportFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImportFileUrlWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitchWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetMseFeatureSwitchResponse::fromMap($this->doRPCRequest('GetMseFeatureSwitch', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetMseFeatureSwitchResponse
     */
    public function getMseFeatureSwitch()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMseFeatureSwitchWithOptions($runtime);
    }

    /**
     * @param GetNacosConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNacosConfigResponse
     */
    public function getNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNacosConfigResponse::fromMap($this->doRPCRequest('GetNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNacosConfigRequest $request
     *
     * @return GetNacosConfigResponse
     */
    public function getNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetNacosHistoryConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetNacosHistoryConfigResponse::fromMap($this->doRPCRequest('GetNacosHistoryConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNacosHistoryConfigRequest $request
     *
     * @return GetNacosHistoryConfigResponse
     */
    public function getNacosHistoryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNacosHistoryConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetOverviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetOverviewResponse
     */
    public function getOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOverviewResponse::fromMap($this->doRPCRequest('GetOverview', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOverviewRequest $request
     *
     * @return GetOverviewResponse
     */
    public function getOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOverviewWithOptions($request, $runtime);
    }

    /**
     * @param ImportNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ImportNacosConfigResponse
     */
    public function importNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ImportNacosConfigResponse::fromMap($this->doRPCRequest('ImportNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ImportNacosConfigRequest $request
     *
     * @return ImportNacosConfigResponse
     */
    public function importNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmContactGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAlarmContactGroupsResponse
     */
    public function listAlarmContactGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAlarmContactGroupsResponse::fromMap($this->doRPCRequest('ListAlarmContactGroups', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlarmContactGroupsRequest $request
     *
     * @return ListAlarmContactGroupsResponse
     */
    public function listAlarmContactGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmContactGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmHistoriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAlarmHistoriesResponse::fromMap($this->doRPCRequest('ListAlarmHistories', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlarmHistoriesRequest $request
     *
     * @return ListAlarmHistoriesResponse
     */
    public function listAlarmHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmItemsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlarmItemsResponse
     */
    public function listAlarmItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAlarmItemsResponse::fromMap($this->doRPCRequest('ListAlarmItems', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlarmItemsRequest $request
     *
     * @return ListAlarmItemsResponse
     */
    public function listAlarmItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListAlarmRulesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlarmRulesResponse
     */
    public function listAlarmRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAlarmRulesResponse::fromMap($this->doRPCRequest('ListAlarmRules', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlarmRulesRequest $request
     *
     * @return ListAlarmRulesResponse
     */
    public function listAlarmRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListAnsInstancesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAnsInstancesResponse
     */
    public function listAnsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAnsInstancesResponse::fromMap($this->doRPCRequest('ListAnsInstances', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAnsInstancesRequest $request
     *
     * @return ListAnsInstancesResponse
     */
    public function listAnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListAnsServiceClustersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAnsServiceClustersResponse
     */
    public function listAnsServiceClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAnsServiceClustersResponse::fromMap($this->doRPCRequest('ListAnsServiceClusters', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAnsServiceClustersRequest $request
     *
     * @return ListAnsServiceClustersResponse
     */
    public function listAnsServiceClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServiceClustersWithOptions($request, $runtime);
    }

    /**
     * @param ListAnsServicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAnsServicesResponse
     */
    public function listAnsServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAnsServicesResponse::fromMap($this->doRPCRequest('ListAnsServices', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAnsServicesRequest $request
     *
     * @return ListAnsServicesResponse
     */
    public function listAnsServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnsServicesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListClusterConnectionTypesResponse::fromMap($this->doRPCRequest('ListClusterConnectionTypes', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListClusterConnectionTypesResponse
     */
    public function listClusterConnectionTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterConnectionTypesWithOptions($runtime);
    }

    /**
     * @param ListClusterTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClusterTypesResponse
     */
    public function listClusterTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterTypesResponse::fromMap($this->doRPCRequest('ListClusterTypes', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterTypesRequest $request
     *
     * @return ListClusterTypesResponse
     */
    public function listClusterTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTypesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListClusterVersionsResponse
     */
    public function listClusterVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterVersionsResponse::fromMap($this->doRPCRequest('ListClusterVersions', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterVersionsRequest $request
     *
     * @return ListClusterVersionsResponse
     */
    public function listClusterVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListClustersResponse::fromMap($this->doRPCRequest('ListClusters', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListEngineNamespacesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEngineNamespacesResponse
     */
    public function listEngineNamespacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListEngineNamespacesResponse::fromMap($this->doRPCRequest('ListEngineNamespaces', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEngineNamespacesRequest $request
     *
     * @return ListEngineNamespacesResponse
     */
    public function listEngineNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEngineNamespacesWithOptions($request, $runtime);
    }

    /**
     * @param ListEurekaInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEurekaInstancesResponse
     */
    public function listEurekaInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListEurekaInstancesResponse::fromMap($this->doRPCRequest('ListEurekaInstances', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEurekaInstancesRequest $request
     *
     * @return ListEurekaInstancesResponse
     */
    public function listEurekaInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListEurekaServicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEurekaServicesResponse
     */
    public function listEurekaServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListEurekaServicesResponse::fromMap($this->doRPCRequest('ListEurekaServices', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListEurekaServicesRequest $request
     *
     * @return ListEurekaServicesResponse
     */
    public function listEurekaServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEurekaServicesWithOptions($request, $runtime);
    }

    /**
     * @param ListGatewayRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ListGatewayResponse
     */
    public function listGatewayWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListGatewayShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filterParams)) {
            $request->filterParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->filterParams), 'FilterParams', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGatewayResponse::fromMap($this->doRPCRequest('ListGateway', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListGatewayRequest $request
     *
     * @return ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGatewayWithOptions($request, $runtime);
    }

    /**
     * @param ListListenersByConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListListenersByConfigResponse
     */
    public function listListenersByConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListListenersByConfigResponse::fromMap($this->doRPCRequest('ListListenersByConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListListenersByConfigRequest $request
     *
     * @return ListListenersByConfigResponse
     */
    public function listListenersByConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListListenersByIpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListListenersByIpResponse
     */
    public function listListenersByIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListListenersByIpResponse::fromMap($this->doRPCRequest('ListListenersByIp', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListListenersByIpRequest $request
     *
     * @return ListListenersByIpResponse
     */
    public function listListenersByIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListenersByIpWithOptions($request, $runtime);
    }

    /**
     * @param ListNacosConfigsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNacosConfigsResponse
     */
    public function listNacosConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNacosConfigsResponse::fromMap($this->doRPCRequest('ListNacosConfigs', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNacosConfigsRequest $request
     *
     * @return ListNacosConfigsResponse
     */
    public function listNacosConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosConfigsWithOptions($request, $runtime);
    }

    /**
     * @param ListNacosHistoryConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNacosHistoryConfigsResponse::fromMap($this->doRPCRequest('ListNacosHistoryConfigs', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNacosHistoryConfigsRequest $request
     *
     * @return ListNacosHistoryConfigsResponse
     */
    public function listNacosHistoryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNacosHistoryConfigsWithOptions($request, $runtime);
    }

    /**
     * @param ListZnodeChildrenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListZnodeChildrenResponse
     */
    public function listZnodeChildrenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListZnodeChildrenResponse::fromMap($this->doRPCRequest('ListZnodeChildren', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListZnodeChildrenRequest $request
     *
     * @return ListZnodeChildrenResponse
     */
    public function listZnodeChildren($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZnodeChildrenWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGovernanceKubernetesClusterRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGovernanceKubernetesClusterResponse::fromMap($this->doRPCRequest('ModifyGovernanceKubernetesCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyGovernanceKubernetesClusterRequest $request
     *
     * @return ModifyGovernanceKubernetesClusterResponse
     */
    public function modifyGovernanceKubernetesCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGovernanceKubernetesClusterWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryBusinessLocationsResponse
     */
    public function queryBusinessLocationsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryBusinessLocationsResponse::fromMap($this->doRPCRequest('QueryBusinessLocations', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryBusinessLocationsResponse
     */
    public function queryBusinessLocations()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBusinessLocationsWithOptions($runtime);
    }

    /**
     * @param QueryClusterDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryClusterDetailResponse::fromMap($this->doRPCRequest('QueryClusterDetail', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryClusterDetailRequest $request
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryClusterDiskSpecificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryClusterDiskSpecificationResponse::fromMap($this->doRPCRequest('QueryClusterDiskSpecification', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryClusterDiskSpecificationRequest $request
     *
     * @return QueryClusterDiskSpecificationResponse
     */
    public function queryClusterDiskSpecification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDiskSpecificationWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryClusterSpecificationResponse
     */
    public function queryClusterSpecificationWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryClusterSpecificationResponse::fromMap($this->doRPCRequest('QueryClusterSpecification', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryClusterSpecificationResponse
     */
    public function queryClusterSpecification()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterSpecificationWithOptions($runtime);
    }

    /**
     * @param QueryConfigRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryConfigResponse
     */
    public function queryConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryConfigResponse::fromMap($this->doRPCRequest('QueryConfig', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryConfigRequest $request
     *
     * @return QueryConfigResponse
     */
    public function queryConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConfigWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryGatewayRegionResponse
     */
    public function queryGatewayRegionWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryGatewayRegionResponse::fromMap($this->doRPCRequest('QueryGatewayRegion', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryGatewayRegionResponse
     */
    public function queryGatewayRegion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayRegionWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryGatewayTypeResponse
     */
    public function queryGatewayTypeWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QueryGatewayTypeResponse::fromMap($this->doRPCRequest('QueryGatewayType', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QueryGatewayTypeResponse
     */
    public function queryGatewayType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGatewayTypeWithOptions($runtime);
    }

    /**
     * @param QueryMonitorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMonitorResponse
     */
    public function queryMonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryMonitorResponse::fromMap($this->doRPCRequest('QueryMonitor', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMonitorRequest $request
     *
     * @return QueryMonitorResponse
     */
    public function queryMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonitorWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QuerySlbSpecResponse
     */
    public function querySlbSpecWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return QuerySlbSpecResponse::fromMap($this->doRPCRequest('QuerySlbSpec', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return QuerySlbSpecResponse
     */
    public function querySlbSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlbSpecWithOptions($runtime);
    }

    /**
     * @param QueryZnodeDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryZnodeDetailResponse
     */
    public function queryZnodeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryZnodeDetailResponse::fromMap($this->doRPCRequest('QueryZnodeDetail', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryZnodeDetailRequest $request
     *
     * @return QueryZnodeDetailResponse
     */
    public function queryZnodeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryZnodeDetailWithOptions($request, $runtime);
    }

    /**
     * @param RestartClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RestartClusterResponse
     */
    public function restartClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartClusterResponse::fromMap($this->doRPCRequest('RestartCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartClusterRequest $request
     *
     * @return RestartClusterResponse
     */
    public function restartCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartClusterWithOptions($request, $runtime);
    }

    /**
     * @param RetryClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RetryClusterResponse
     */
    public function retryClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RetryClusterResponse::fromMap($this->doRPCRequest('RetryCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RetryClusterRequest $request
     *
     * @return RetryClusterResponse
     */
    public function retryCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryClusterWithOptions($request, $runtime);
    }

    /**
     * @param ScalingClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ScalingClusterResponse
     */
    public function scalingClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ScalingClusterResponse::fromMap($this->doRPCRequest('ScalingCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ScalingClusterRequest $request
     *
     * @return ScalingClusterResponse
     */
    public function scalingCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scalingClusterWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAclRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAclResponse
     */
    public function updateAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAclResponse::fromMap($this->doRPCRequest('UpdateAcl', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAclRequest $request
     *
     * @return UpdateAclResponse
     */
    public function updateAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAclWithOptions($request, $runtime);
    }

    /**
     * @param UpdateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateClusterResponse::fromMap($this->doRPCRequest('UpdateCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UpdateConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateConfigResponse
     */
    public function updateConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConfigResponse::fromMap($this->doRPCRequest('UpdateConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConfigRequest $request
     *
     * @return UpdateConfigResponse
     */
    public function updateConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEngineNamespaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEngineNamespaceResponse::fromMap($this->doRPCRequest('UpdateEngineNamespace', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEngineNamespaceRequest $request
     *
     * @return UpdateEngineNamespaceResponse
     */
    public function updateEngineNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEngineNamespaceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return UpdateGatewayNameResponse::fromMap($this->doRPCRequest('UpdateGatewayName', '2019-05-31', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGatewayNameRequest $request
     *
     * @return UpdateGatewayNameResponse
     */
    public function updateGatewayName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayOptionRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGatewayOptionResponse
     */
    public function updateGatewayOptionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateGatewayOptionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->gatewayOption)) {
            $request->gatewayOptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->gatewayOption), 'GatewayOption', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGatewayOptionResponse::fromMap($this->doRPCRequest('UpdateGatewayOption', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGatewayOptionRequest $request
     *
     * @return UpdateGatewayOptionResponse
     */
    public function updateGatewayOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayOptionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGatewayRouteHTTPRewriteRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewriteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateGatewayRouteHTTPRewriteResponse::fromMap($this->doRPCRequest('UpdateGatewayRouteHTTPRewrite', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGatewayRouteHTTPRewriteRequest $request
     *
     * @return UpdateGatewayRouteHTTPRewriteResponse
     */
    public function updateGatewayRouteHTTPRewrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGatewayRouteHTTPRewriteWithOptions($request, $runtime);
    }

    /**
     * @param UpdateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateImageResponse
     */
    public function updateImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateImageResponse::fromMap($this->doRPCRequest('UpdateImage', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateImageRequest $request
     *
     * @return UpdateImageResponse
     */
    public function updateImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNacosConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateNacosConfigResponse
     */
    public function updateNacosConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNacosConfigResponse::fromMap($this->doRPCRequest('UpdateNacosConfig', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateNacosConfigRequest $request
     *
     * @return UpdateNacosConfigResponse
     */
    public function updateNacosConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNacosInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateNacosInstanceResponse
     */
    public function updateNacosInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateNacosInstanceResponse::fromMap($this->doRPCRequest('UpdateNacosInstance', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateNacosInstanceRequest $request
     *
     * @return UpdateNacosInstanceResponse
     */
    public function updateNacosInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNacosInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateZnodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateZnodeResponse
     */
    public function updateZnodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateZnodeResponse::fromMap($this->doRPCRequest('UpdateZnode', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateZnodeRequest $request
     *
     * @return UpdateZnodeResponse
     */
    public function updateZnode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateZnodeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeClusterResponse::fromMap($this->doRPCRequest('UpgradeCluster', '2019-05-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeClusterRequest $request
     *
     * @return UpgradeClusterResponse
     */
    public function upgradeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterWithOptions($request, $runtime);
    }
}
