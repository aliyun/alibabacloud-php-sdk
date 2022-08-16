<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddDNSAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddDNSAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AttachVpcToNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AttachVpcToNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateBatchOperateCardsTaskRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateBatchOperateCardsTaskResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteBatchOperateCardsTaskRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteBatchOperateCardsTaskResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DetachVpcFromNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DetachVpcFromNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardLockReasonRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardLockReasonResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCreateCustomerInformationRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCreateCustomerInformationResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDataPackagesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDataPackagesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListOrdersRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListOrdersResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListRegionsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListRegionsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListZonesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListZonesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\LockCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\LockCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ModifyWirelessCloudConnectorFeatureRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ModifyWirelessCloudConnectorFeatureResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\OpenCc5gServiceRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\OpenCc5gServiceResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ResumeCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ResumeCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\StopCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\StopCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\SwitchWirelessCloudConnectorToBusinessRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\SwitchWirelessCloudConnectorToBusinessResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UnlockCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UnlockCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateBatchOperateCardsTaskRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateBatchOperateCardsTaskResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateCardResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateDNSAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateDNSAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateWirelessCloudConnectorResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class CC5G extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cc5g', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddDNSAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDNSAuthorizationRuleResponse
     */
    public function addDNSAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceDNSIp)) {
            $query['SourceDNSIp'] = $request->sourceDNSIp;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDNSAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDNSAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDNSAuthorizationRuleRequest $request
     *
     * @return AddDNSAuthorizationRuleResponse
     */
    public function addDNSAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDNSAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param AttachVpcToNetLinkRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachVpcToNetLinkResponse
     */
    public function attachVpcToNetLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->netLinkId)) {
            $query['NetLinkId'] = $request->netLinkId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitches)) {
            $query['VSwitches'] = $request->vSwitches;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachVpcToNetLink',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachVpcToNetLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachVpcToNetLinkRequest $request
     *
     * @return AttachVpcToNetLinkResponse
     */
    public function attachVpcToNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVpcToNetLinkWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->sourceCidr)) {
            $query['SourceCidr'] = $request->sourceCidr;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuthorizationRuleRequest $request
     *
     * @return CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateBatchOperateCardsTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateBatchOperateCardsTaskResponse
     */
    public function createBatchOperateCardsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->effectType)) {
            $query['EffectType'] = $request->effectType;
        }
        if (!Utils::isUnset($request->iccids)) {
            $query['Iccids'] = $request->iccids;
        }
        if (!Utils::isUnset($request->iccidsOssFilePath)) {
            $query['IccidsOssFilePath'] = $request->iccidsOssFilePath;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorIds)) {
            $query['WirelessCloudConnectorIds'] = $request->wirelessCloudConnectorIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBatchOperateCardsTask',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBatchOperateCardsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBatchOperateCardsTaskRequest $request
     *
     * @return CreateBatchOperateCardsTaskResponse
     */
    public function createBatchOperateCardsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchOperateCardsTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateIoTCloudConnectorBackhaulRouteRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateIoTCloudConnectorBackhaulRouteResponse
     */
    public function createIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->netLinkId)) {
            $query['NetLinkId'] = $request->netLinkId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIoTCloudConnectorBackhaulRoute',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIoTCloudConnectorBackhaulRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIoTCloudConnectorBackhaulRouteRequest $request
     *
     * @return CreateIoTCloudConnectorBackhaulRouteResponse
     */
    public function createIoTCloudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @param CreateWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateWirelessCloudConnectorResponse
     */
    public function createWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netLinks)) {
            $query['NetLinks'] = $request->netLinks;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->useCase)) {
            $query['UseCase'] = $request->useCase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWirelessCloudConnectorRequest $request
     *
     * @return CreateWirelessCloudConnectorResponse
     */
    public function createWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAuthorizationRuleRequest $request
     *
     * @return DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBatchOperateCardsTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteBatchOperateCardsTaskResponse
     */
    public function deleteBatchOperateCardsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchOperateCardsTaskId)) {
            $query['BatchOperateCardsTaskId'] = $request->batchOperateCardsTaskId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBatchOperateCardsTask',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBatchOperateCardsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBatchOperateCardsTaskRequest $request
     *
     * @return DeleteBatchOperateCardsTaskResponse
     */
    public function deleteBatchOperateCardsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBatchOperateCardsTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIoTCloudConnectorBackhaulRouteRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteIoTCloudConnectorBackhaulRouteResponse
     */
    public function deleteIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->netLinkId)) {
            $query['NetLinkId'] = $request->netLinkId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIoTCloudConnectorBackhaulRoute',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIoTCloudConnectorBackhaulRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIoTCloudConnectorBackhaulRouteRequest $request
     *
     * @return DeleteIoTCloudConnectorBackhaulRouteResponse
     */
    public function deleteIoTCloudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteWirelessCloudConnectorResponse
     */
    public function deleteWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWirelessCloudConnectorRequest $request
     *
     * @return DeleteWirelessCloudConnectorResponse
     */
    public function deleteWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param DetachVpcFromNetLinkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DetachVpcFromNetLinkResponse
     */
    public function detachVpcFromNetLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->netLinkId)) {
            $query['NetLinkId'] = $request->netLinkId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachVpcFromNetLink',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachVpcFromNetLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachVpcFromNetLinkRequest $request
     *
     * @return DetachVpcFromNetLinkResponse
     */
    public function detachVpcFromNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVpcFromNetLinkWithOptions($request, $runtime);
    }

    /**
     * @param GetCardRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetCardResponse
     */
    public function getCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCard',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardRequest $request
     *
     * @return GetCardResponse
     */
    public function getCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardWithOptions($request, $runtime);
    }

    /**
     * @param GetCardLockReasonRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCardLockReasonResponse
     */
    public function getCardLockReasonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardLockReason',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardLockReasonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardLockReasonRequest $request
     *
     * @return GetCardLockReasonResponse
     */
    public function getCardLockReason($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardLockReasonWithOptions($request, $runtime);
    }

    /**
     * @param GetCreateCustomerInformationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetCreateCustomerInformationResponse
     */
    public function getCreateCustomerInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreateCustomerInformation',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreateCustomerInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCreateCustomerInformationRequest $request
     *
     * @return GetCreateCustomerInformationResponse
     */
    public function getCreateCustomerInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateCustomerInformationWithOptions($request, $runtime);
    }

    /**
     * @param GetWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetWirelessCloudConnectorResponse
     */
    public function getWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWirelessCloudConnectorRequest $request
     *
     * @return GetWirelessCloudConnectorResponse
     */
    public function getWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param ListAuthorizationRulesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAuthorizationRulesResponse
     */
    public function listAuthorizationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthorizationRules',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAuthorizationRulesRequest $request
     *
     * @return ListAuthorizationRulesResponse
     */
    public function listAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListBatchOperateCardsTasksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListBatchOperateCardsTasksResponse
     */
    public function listBatchOperateCardsTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBatchOperateCardsTasks',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBatchOperateCardsTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBatchOperateCardsTasksRequest $request
     *
     * @return ListBatchOperateCardsTasksResponse
     */
    public function listBatchOperateCardsTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchOperateCardsTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListCardsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListCardsResponse
     */
    public function listCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCardsRequest $request
     *
     * @return ListCardsResponse
     */
    public function listCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardsWithOptions($request, $runtime);
    }

    /**
     * @param ListDataPackagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDataPackagesResponse
     */
    public function listDataPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataPackages',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataPackagesRequest $request
     *
     * @return ListDataPackagesResponse
     */
    public function listDataPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataPackagesWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorBackhaulRouteRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListIoTCloudConnectorBackhaulRouteResponse
     */
    public function listIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorBackhaulRoute',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorBackhaulRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorBackhaulRouteRequest $request
     *
     * @return ListIoTCloudConnectorBackhaulRouteResponse
     */
    public function listIoTCloudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @param ListOrdersRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListOrdersResponse
     */
    public function listOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrders',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOrdersRequest $request
     *
     * @return ListOrdersResponse
     */
    public function listOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrdersWithOptions($request, $runtime);
    }

    /**
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListWirelessCloudConnectorsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListWirelessCloudConnectorsResponse
     */
    public function listWirelessCloudConnectorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWirelessCloudConnectors',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWirelessCloudConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWirelessCloudConnectorsRequest $request
     *
     * @return ListWirelessCloudConnectorsResponse
     */
    public function listWirelessCloudConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWirelessCloudConnectorsWithOptions($request, $runtime);
    }

    /**
     * @param ListZonesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListZonesResponse
     */
    public function listZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListZones',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListZonesRequest $request
     *
     * @return ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZonesWithOptions($request, $runtime);
    }

    /**
     * @param LockCardsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LockCardsResponse
     */
    public function lockCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->iccids)) {
            $query['Iccids'] = $request->iccids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockCardsRequest $request
     *
     * @return LockCardsResponse
     */
    public function lockCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockCardsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWirelessCloudConnectorFeatureRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ModifyWirelessCloudConnectorFeatureResponse
     */
    public function modifyWirelessCloudConnectorFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->featureName)) {
            $query['FeatureName'] = $request->featureName;
        }
        if (!Utils::isUnset($request->featureValue)) {
            $query['FeatureValue'] = $request->featureValue;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyWirelessCloudConnectorFeature',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyWirelessCloudConnectorFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyWirelessCloudConnectorFeatureRequest $request
     *
     * @return ModifyWirelessCloudConnectorFeatureResponse
     */
    public function modifyWirelessCloudConnectorFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWirelessCloudConnectorFeatureWithOptions($request, $runtime);
    }

    /**
     * @param OpenCc5gServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OpenCc5gServiceResponse
     */
    public function openCc5gServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenCc5gService',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenCc5gServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenCc5gServiceRequest $request
     *
     * @return OpenCc5gServiceResponse
     */
    public function openCc5gService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCc5gServiceWithOptions($request, $runtime);
    }

    /**
     * @param ResumeCardsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResumeCardsResponse
     */
    public function resumeCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->iccids)) {
            $query['Iccids'] = $request->iccids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeCardsRequest $request
     *
     * @return ResumeCardsResponse
     */
    public function resumeCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeCardsWithOptions($request, $runtime);
    }

    /**
     * @param StopCardsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopCardsResponse
     */
    public function stopCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->iccids)) {
            $query['Iccids'] = $request->iccids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopCardsRequest $request
     *
     * @return StopCardsResponse
     */
    public function stopCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCardsWithOptions($request, $runtime);
    }

    /**
     * @param SwitchWirelessCloudConnectorToBusinessRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SwitchWirelessCloudConnectorToBusinessResponse
     */
    public function switchWirelessCloudConnectorToBusinessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SwitchWirelessCloudConnectorToBusiness',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchWirelessCloudConnectorToBusinessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchWirelessCloudConnectorToBusinessRequest $request
     *
     * @return SwitchWirelessCloudConnectorToBusinessResponse
     */
    public function switchWirelessCloudConnectorToBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchWirelessCloudConnectorToBusinessWithOptions($request, $runtime);
    }

    /**
     * @param UnlockCardsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnlockCardsResponse
     */
    public function unlockCardsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->iccids)) {
            $query['Iccids'] = $request->iccids;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockCardsRequest $request
     *
     * @return UnlockCardsResponse
     */
    public function unlockCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockCardsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthorizationRuleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->sourceCidr)) {
            $query['SourceCidr'] = $request->sourceCidr;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuthorizationRuleRequest $request
     *
     * @return UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBatchOperateCardsTaskRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateBatchOperateCardsTaskResponse
     */
    public function updateBatchOperateCardsTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchOperateCardsTaskId)) {
            $query['BatchOperateCardsTaskId'] = $request->batchOperateCardsTaskId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->effectType)) {
            $query['EffectType'] = $request->effectType;
        }
        if (!Utils::isUnset($request->iccids)) {
            $query['Iccids'] = $request->iccids;
        }
        if (!Utils::isUnset($request->iccidsOssFilePath)) {
            $query['IccidsOssFilePath'] = $request->iccidsOssFilePath;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorIds)) {
            $query['WirelessCloudConnectorIds'] = $request->wirelessCloudConnectorIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBatchOperateCardsTask',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBatchOperateCardsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBatchOperateCardsTaskRequest $request
     *
     * @return UpdateBatchOperateCardsTaskResponse
     */
    public function updateBatchOperateCardsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBatchOperateCardsTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCardRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateCardResponse
     */
    public function updateCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCard',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCardRequest $request
     *
     * @return UpdateCardResponse
     */
    public function updateCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCardWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDNSAuthorizationRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDNSAuthorizationRuleResponse
     */
    public function updateDNSAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->sourceDNSIp)) {
            $query['SourceDNSIp'] = $request->sourceDNSIp;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDNSAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDNSAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDNSAuthorizationRuleRequest $request
     *
     * @return UpdateDNSAuthorizationRuleResponse
     */
    public function updateDNSAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDNSAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWirelessCloudConnectorRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateWirelessCloudConnectorResponse
     */
    public function updateWirelessCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWirelessCloudConnector',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWirelessCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWirelessCloudConnectorRequest $request
     *
     * @return UpdateWirelessCloudConnectorResponse
     */
    public function updateWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWirelessCloudConnectorWithOptions($request, $runtime);
    }
}
