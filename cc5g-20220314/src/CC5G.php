<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddDNSAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddDNSAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddGroupDnsAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddGroupDnsAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddWirelessCloudConnectorToGroupRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AddWirelessCloudConnectorToGroupResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AttachVpcToNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\AttachVpcToNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateBatchOperateCardsTaskRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateBatchOperateCardsTaskResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorGroupRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorGroupResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteBatchOperateCardsTaskRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteBatchOperateCardsTaskResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorGroupRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorGroupResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DeleteWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DetachVpcFromNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\DetachVpcFromNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\FailCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\FailCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardLockReasonRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardLockReasonResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCardResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCreateCustomerInfomationRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCreateCustomerInfomationResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCreateCustomerInformationRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetCreateCustomerInformationResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GrantNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GrantNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\InnerLimitRateCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\InnerLimitRateCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\InnerStopCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\InnerStopCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAPNsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAPNsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListBatchOperateCardsTasksResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardAreaLimitSupportAreaRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardAreaLimitSupportAreaResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardUsagesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardUsagesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDataPackagesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDataPackagesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDiagnoseInfoForSingleCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDiagnoseInfoForSingleCardResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListGroupAuthorizationRulesRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListGroupAuthorizationRulesResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListOrdersRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListOrdersResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListRegionsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListRegionsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorGroupsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorGroupsResponse;
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
use AlibabaCloud\SDK\CC5G\V20220314\Models\RebindCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\RebindCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\RemoveWirelessCloudConnectorFromGroupRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\RemoveWirelessCloudConnectorFromGroupResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ResetAreaLimitCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ResetAreaLimitCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ResumeCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\ResumeCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\RevokeNetLinkRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\RevokeNetLinkResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\StopCardsRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\StopCardsResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\SubmitDiagnoseTaskForSingleCardRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\SubmitDiagnoseTaskForSingleCardResponse;
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
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateGroupDnsAuthorizationRuleRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateGroupDnsAuthorizationRuleResponse;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateWirelessCloudConnectorGroupRequest;
use AlibabaCloud\SDK\CC5G\V20220314\Models\UpdateWirelessCloudConnectorGroupResponse;
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
     * @summary 添加5G高速上云服务实例的DNS授权规则
     *  *
     * @param AddDNSAuthorizationRuleRequest $request AddDNSAuthorizationRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDNSAuthorizationRuleResponse AddDNSAuthorizationRuleResponse
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
     * @summary 添加5G高速上云服务实例的DNS授权规则
     *  *
     * @param AddDNSAuthorizationRuleRequest $request AddDNSAuthorizationRuleRequest
     *
     * @return AddDNSAuthorizationRuleResponse AddDNSAuthorizationRuleResponse
     */
    public function addDNSAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDNSAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 添加5G高速上云服务实例组的DNS授权规则
     *  *
     * @param AddGroupDnsAuthorizationRuleRequest $request AddGroupDnsAuthorizationRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGroupDnsAuthorizationRuleResponse AddGroupDnsAuthorizationRuleResponse
     */
    public function addGroupDnsAuthorizationRuleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddGroupDnsAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddGroupDnsAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加5G高速上云服务实例组的DNS授权规则
     *  *
     * @param AddGroupDnsAuthorizationRuleRequest $request AddGroupDnsAuthorizationRuleRequest
     *
     * @return AddGroupDnsAuthorizationRuleResponse AddGroupDnsAuthorizationRuleResponse
     */
    public function addGroupDnsAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addGroupDnsAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 添加5G高速上云服务实例到组
     *  *
     * @param AddWirelessCloudConnectorToGroupRequest $request AddWirelessCloudConnectorToGroupRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddWirelessCloudConnectorToGroupResponse AddWirelessCloudConnectorToGroupResponse
     */
    public function addWirelessCloudConnectorToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorIds)) {
            $query['WirelessCloudConnectorIds'] = $request->wirelessCloudConnectorIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddWirelessCloudConnectorToGroup',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWirelessCloudConnectorToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加5G高速上云服务实例到组
     *  *
     * @param AddWirelessCloudConnectorToGroupRequest $request AddWirelessCloudConnectorToGroupRequest
     *
     * @return AddWirelessCloudConnectorToGroupResponse AddWirelessCloudConnectorToGroupResponse
     */
    public function addWirelessCloudConnectorToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWirelessCloudConnectorToGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建5G高速上云服务实例下的网络连接
     *  *
     * @param AttachVpcToNetLinkRequest $request AttachVpcToNetLinkRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachVpcToNetLinkResponse AttachVpcToNetLinkResponse
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
     * @summary 创建5G高速上云服务实例下的网络连接
     *  *
     * @param AttachVpcToNetLinkRequest $request AttachVpcToNetLinkRequest
     *
     * @return AttachVpcToNetLinkResponse AttachVpcToNetLinkResponse
     */
    public function attachVpcToNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVpcToNetLinkWithOptions($request, $runtime);
    }

    /**
     * @summary 创建5G高速上云服务实例的授权规则
     *  *
     * @param CreateAuthorizationRuleRequest $request CreateAuthorizationRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAuthorizationRuleResponse CreateAuthorizationRuleResponse
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
        if (!Utils::isUnset($request->destinationPort)) {
            $query['DestinationPort'] = $request->destinationPort;
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
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
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
     * @summary 创建5G高速上云服务实例的授权规则
     *  *
     * @param CreateAuthorizationRuleRequest $request CreateAuthorizationRuleRequest
     *
     * @return CreateAuthorizationRuleResponse CreateAuthorizationRuleResponse
     */
    public function createAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建批量操作卡任务
     *  *
     * @param CreateBatchOperateCardsTaskRequest $request CreateBatchOperateCardsTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBatchOperateCardsTaskResponse CreateBatchOperateCardsTaskResponse
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
     * @summary 创建批量操作卡任务
     *  *
     * @param CreateBatchOperateCardsTaskRequest $request CreateBatchOperateCardsTaskRequest
     *
     * @return CreateBatchOperateCardsTaskResponse CreateBatchOperateCardsTaskResponse
     */
    public function createBatchOperateCardsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBatchOperateCardsTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建5G高速上云服务实例组的授权规则
     *  *
     * @param CreateGroupAuthorizationRuleRequest $request CreateGroupAuthorizationRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupAuthorizationRuleResponse CreateGroupAuthorizationRuleResponse
     */
    public function createGroupAuthorizationRuleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->destinationPort)) {
            $query['DestinationPort'] = $request->destinationPort;
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
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->sourceCidr)) {
            $query['SourceCidr'] = $request->sourceCidr;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建5G高速上云服务实例组的授权规则
     *  *
     * @param CreateGroupAuthorizationRuleRequest $request CreateGroupAuthorizationRuleRequest
     *
     * @return CreateGroupAuthorizationRuleResponse CreateGroupAuthorizationRuleResponse
     */
    public function createGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 下发iotcc实例的回程路由
     *  *
     * @param CreateIoTCloudConnectorBackhaulRouteRequest $request CreateIoTCloudConnectorBackhaulRouteRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateIoTCloudConnectorBackhaulRouteResponse CreateIoTCloudConnectorBackhaulRouteResponse
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
     * @summary 下发iotcc实例的回程路由
     *  *
     * @param CreateIoTCloudConnectorBackhaulRouteRequest $request CreateIoTCloudConnectorBackhaulRouteRequest
     *
     * @return CreateIoTCloudConnectorBackhaulRouteResponse CreateIoTCloudConnectorBackhaulRouteResponse
     */
    public function createIoTCloudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 创建5G高速上云服务实例
     *  *
     * @param CreateWirelessCloudConnectorRequest $request CreateWirelessCloudConnectorRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWirelessCloudConnectorResponse CreateWirelessCloudConnectorResponse
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
     * @summary 创建5G高速上云服务实例
     *  *
     * @param CreateWirelessCloudConnectorRequest $request CreateWirelessCloudConnectorRequest
     *
     * @return CreateWirelessCloudConnectorResponse CreateWirelessCloudConnectorResponse
     */
    public function createWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @summary 创建5G高速上云服务实例组
     *  *
     * @param CreateWirelessCloudConnectorGroupRequest $request CreateWirelessCloudConnectorGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWirelessCloudConnectorGroupResponse CreateWirelessCloudConnectorGroupResponse
     */
    public function createWirelessCloudConnectorGroupWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateWirelessCloudConnectorGroup',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWirelessCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建5G高速上云服务实例组
     *  *
     * @param CreateWirelessCloudConnectorGroupRequest $request CreateWirelessCloudConnectorGroupRequest
     *
     * @return CreateWirelessCloudConnectorGroupResponse CreateWirelessCloudConnectorGroupResponse
     */
    public function createWirelessCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWirelessCloudConnectorGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 删除5G高速上云服务实例的授权规则
     *  *
     * @param DeleteAuthorizationRuleRequest $request DeleteAuthorizationRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAuthorizationRuleResponse DeleteAuthorizationRuleResponse
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
     * @summary 删除5G高速上云服务实例的授权规则
     *  *
     * @param DeleteAuthorizationRuleRequest $request DeleteAuthorizationRuleRequest
     *
     * @return DeleteAuthorizationRuleResponse DeleteAuthorizationRuleResponse
     */
    public function deleteAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除批量操作卡任务
     *  *
     * @param DeleteBatchOperateCardsTaskRequest $request DeleteBatchOperateCardsTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBatchOperateCardsTaskResponse DeleteBatchOperateCardsTaskResponse
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
     * @summary 删除批量操作卡任务
     *  *
     * @param DeleteBatchOperateCardsTaskRequest $request DeleteBatchOperateCardsTaskRequest
     *
     * @return DeleteBatchOperateCardsTaskResponse DeleteBatchOperateCardsTaskResponse
     */
    public function deleteBatchOperateCardsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBatchOperateCardsTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 删除5G高速上云服务实例组的授权规则
     *  *
     * @param DeleteGroupAuthorizationRuleRequest $request DeleteGroupAuthorizationRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupAuthorizationRuleResponse DeleteGroupAuthorizationRuleResponse
     */
    public function deleteGroupAuthorizationRuleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除5G高速上云服务实例组的授权规则
     *  *
     * @param DeleteGroupAuthorizationRuleRequest $request DeleteGroupAuthorizationRuleRequest
     *
     * @return DeleteGroupAuthorizationRuleResponse DeleteGroupAuthorizationRuleResponse
     */
    public function deleteGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除iotcc实例的回程路由
     *  *
     * @param DeleteIoTCloudConnectorBackhaulRouteRequest $request DeleteIoTCloudConnectorBackhaulRouteRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteIoTCloudConnectorBackhaulRouteResponse DeleteIoTCloudConnectorBackhaulRouteResponse
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
     * @summary 删除iotcc实例的回程路由
     *  *
     * @param DeleteIoTCloudConnectorBackhaulRouteRequest $request DeleteIoTCloudConnectorBackhaulRouteRequest
     *
     * @return DeleteIoTCloudConnectorBackhaulRouteResponse DeleteIoTCloudConnectorBackhaulRouteResponse
     */
    public function deleteIoTCloudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 删除5G高速上云服务实例
     *  *
     * @param DeleteWirelessCloudConnectorRequest $request DeleteWirelessCloudConnectorRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWirelessCloudConnectorResponse DeleteWirelessCloudConnectorResponse
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
     * @summary 删除5G高速上云服务实例
     *  *
     * @param DeleteWirelessCloudConnectorRequest $request DeleteWirelessCloudConnectorRequest
     *
     * @return DeleteWirelessCloudConnectorResponse DeleteWirelessCloudConnectorResponse
     */
    public function deleteWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @summary 删除5G高速上云服务实例分组
     *  *
     * @param DeleteWirelessCloudConnectorGroupRequest $request DeleteWirelessCloudConnectorGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWirelessCloudConnectorGroupResponse DeleteWirelessCloudConnectorGroupResponse
     */
    public function deleteWirelessCloudConnectorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWirelessCloudConnectorGroup',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWirelessCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除5G高速上云服务实例分组
     *  *
     * @param DeleteWirelessCloudConnectorGroupRequest $request DeleteWirelessCloudConnectorGroupRequest
     *
     * @return DeleteWirelessCloudConnectorGroupResponse DeleteWirelessCloudConnectorGroupResponse
     */
    public function deleteWirelessCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWirelessCloudConnectorGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 解除5G高速上云服务实例下的网络连接和VPC的绑定
     *  *
     * @param DetachVpcFromNetLinkRequest $request DetachVpcFromNetLinkRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachVpcFromNetLinkResponse DetachVpcFromNetLinkResponse
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
     * @summary 解除5G高速上云服务实例下的网络连接和VPC的绑定
     *  *
     * @param DetachVpcFromNetLinkRequest $request DetachVpcFromNetLinkRequest
     *
     * @return DetachVpcFromNetLinkResponse DetachVpcFromNetLinkResponse
     */
    public function detachVpcFromNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVpcFromNetLinkWithOptions($request, $runtime);
    }

    /**
     * @summary 卡注销接口
     *  *
     * @param FailCardsRequest $request FailCardsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return FailCardsResponse FailCardsResponse
     */
    public function failCardsWithOptions($request, $runtime)
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
            'action'      => 'FailCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FailCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卡注销接口
     *  *
     * @param FailCardsRequest $request FailCardsRequest
     *
     * @return FailCardsResponse FailCardsResponse
     */
    public function failCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例的详细连接信息
     *  *
     * @param GetCardRequest $request GetCardRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCardResponse GetCardResponse
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
     * @summary 查询5G高速上云服务实例的详细连接信息
     *  *
     * @param GetCardRequest $request GetCardRequest
     *
     * @return GetCardResponse GetCardResponse
     */
    public function getCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardWithOptions($request, $runtime);
    }

    /**
     * @summary 查询卡锁定停机的原因
     *  *
     * @param GetCardLockReasonRequest $request GetCardLockReasonRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCardLockReasonResponse GetCardLockReasonResponse
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
     * @summary 查询卡锁定停机的原因
     *  *
     * @param GetCardLockReasonRequest $request GetCardLockReasonRequest
     *
     * @return GetCardLockReasonResponse GetCardLockReasonResponse
     */
    public function getCardLockReason($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardLockReasonWithOptions($request, $runtime);
    }

    /**
     * @param GetCreateCustomerInfomationRequest $request GetCreateCustomerInfomationRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCreateCustomerInfomationResponse GetCreateCustomerInfomationResponse
     */
    public function getCreateCustomerInfomationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreateCustomerInfomation',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreateCustomerInfomationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCreateCustomerInfomationRequest $request GetCreateCustomerInfomationRequest
     *
     * @return GetCreateCustomerInfomationResponse GetCreateCustomerInfomationResponse
     */
    public function getCreateCustomerInfomation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateCustomerInfomationWithOptions($request, $runtime);
    }

    /**
     * @summary 获取录入客户资料的相关信息
     *  *
     * @param GetCreateCustomerInformationRequest $request GetCreateCustomerInformationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCreateCustomerInformationResponse GetCreateCustomerInformationResponse
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
     * @summary 获取录入客户资料的相关信息
     *  *
     * @param GetCreateCustomerInformationRequest $request GetCreateCustomerInformationRequest
     *
     * @return GetCreateCustomerInformationResponse GetCreateCustomerInformationResponse
     */
    public function getCreateCustomerInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreateCustomerInformationWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单卡诊断结果
     *  *
     * @param GetDiagnoseResultForSingleCardRequest $request GetDiagnoseResultForSingleCardRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDiagnoseResultForSingleCardResponse GetDiagnoseResultForSingleCardResponse
     */
    public function getDiagnoseResultForSingleCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnoseTaskId)) {
            $query['DiagnoseTaskId'] = $request->diagnoseTaskId;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnoseResultForSingleCard',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiagnoseResultForSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单卡诊断结果
     *  *
     * @param GetDiagnoseResultForSingleCardRequest $request GetDiagnoseResultForSingleCardRequest
     *
     * @return GetDiagnoseResultForSingleCardResponse GetDiagnoseResultForSingleCardResponse
     */
    public function getDiagnoseResultForSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnoseResultForSingleCardWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例详情
     *  *
     * @param GetWirelessCloudConnectorRequest $request GetWirelessCloudConnectorRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWirelessCloudConnectorResponse GetWirelessCloudConnectorResponse
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
     * @summary 查询5G高速上云服务实例详情
     *  *
     * @param GetWirelessCloudConnectorRequest $request GetWirelessCloudConnectorRequest
     *
     * @return GetWirelessCloudConnectorResponse GetWirelessCloudConnectorResponse
     */
    public function getWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @summary 分享授权网络连接
     *  *
     * @param GrantNetLinkRequest $request GrantNetLinkRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GrantNetLinkResponse GrantNetLinkResponse
     */
    public function grantNetLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->grantAliUid)) {
            $query['GrantAliUid'] = $request->grantAliUid;
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
            'action'      => 'GrantNetLink',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantNetLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分享授权网络连接
     *  *
     * @param GrantNetLinkRequest $request GrantNetLinkRequest
     *
     * @return GrantNetLinkResponse GrantNetLinkResponse
     */
    public function grantNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantNetLinkWithOptions($request, $runtime);
    }

    /**
     * @param InnerLimitRateCardsRequest $request InnerLimitRateCardsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return InnerLimitRateCardsResponse InnerLimitRateCardsResponse
     */
    public function innerLimitRateCardsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->innerApi)) {
            $query['InnerApi'] = $request->innerApi;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->task)) {
            $query['Task'] = $request->task;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InnerLimitRateCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InnerLimitRateCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InnerLimitRateCardsRequest $request InnerLimitRateCardsRequest
     *
     * @return InnerLimitRateCardsResponse InnerLimitRateCardsResponse
     */
    public function innerLimitRateCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->innerLimitRateCardsWithOptions($request, $runtime);
    }

    /**
     * @param InnerStopCardsRequest $request InnerStopCardsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return InnerStopCardsResponse InnerStopCardsResponse
     */
    public function innerStopCardsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->innerApi)) {
            $query['InnerApi'] = $request->innerApi;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->task)) {
            $query['Task'] = $request->task;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InnerStopCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InnerStopCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InnerStopCardsRequest $request InnerStopCardsRequest
     *
     * @return InnerStopCardsResponse InnerStopCardsResponse
     */
    public function innerStopCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->innerStopCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务支持的APN列表
     *  *
     * @param ListAPNsRequest $request ListAPNsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAPNsResponse ListAPNsResponse
     */
    public function listAPNsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAPNs',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAPNsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询5G高速上云服务支持的APN列表
     *  *
     * @param ListAPNsRequest $request ListAPNsRequest
     *
     * @return ListAPNsResponse ListAPNsResponse
     */
    public function listAPNs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAPNsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例的授权规则列表
     *  *
     * @param ListAuthorizationRulesRequest $request ListAuthorizationRulesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAuthorizationRulesResponse ListAuthorizationRulesResponse
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
     * @summary 查询5G高速上云服务实例的授权规则列表
     *  *
     * @param ListAuthorizationRulesRequest $request ListAuthorizationRulesRequest
     *
     * @return ListAuthorizationRulesResponse ListAuthorizationRulesResponse
     */
    public function listAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询批量操作卡任务列表
     *  *
     * @param ListBatchOperateCardsTasksRequest $request ListBatchOperateCardsTasksRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBatchOperateCardsTasksResponse ListBatchOperateCardsTasksResponse
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
     * @summary 查询批量操作卡任务列表
     *  *
     * @param ListBatchOperateCardsTasksRequest $request ListBatchOperateCardsTasksRequest
     *
     * @return ListBatchOperateCardsTasksResponse ListBatchOperateCardsTasksResponse
     */
    public function listBatchOperateCardsTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchOperateCardsTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务物联网卡区域解锁支持区域
     *  *
     * @param ListCardAreaLimitSupportAreaRequest $request ListCardAreaLimitSupportAreaRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCardAreaLimitSupportAreaResponse ListCardAreaLimitSupportAreaResponse
     */
    public function listCardAreaLimitSupportAreaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCardAreaLimitSupportArea',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCardAreaLimitSupportAreaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询5G高速上云服务物联网卡区域解锁支持区域
     *  *
     * @param ListCardAreaLimitSupportAreaRequest $request ListCardAreaLimitSupportAreaRequest
     *
     * @return ListCardAreaLimitSupportAreaResponse ListCardAreaLimitSupportAreaResponse
     */
    public function listCardAreaLimitSupportArea($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardAreaLimitSupportAreaWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例的卡单日流量信息列表
     *  *
     * @param ListCardDayUsagesRequest $request ListCardDayUsagesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCardDayUsagesResponse ListCardDayUsagesResponse
     */
    public function listCardDayUsagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCardDayUsages',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCardDayUsagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询5G高速上云服务实例的卡单日流量信息列表
     *  *
     * @param ListCardDayUsagesRequest $request ListCardDayUsagesRequest
     *
     * @return ListCardDayUsagesResponse ListCardDayUsagesResponse
     */
    public function listCardDayUsages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardDayUsagesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例的流量信息列表
     *  *
     * @param ListCardUsagesRequest $request ListCardUsagesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCardUsagesResponse ListCardUsagesResponse
     */
    public function listCardUsagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCardUsages',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCardUsagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询5G高速上云服务实例的流量信息列表
     *  *
     * @param ListCardUsagesRequest $request ListCardUsagesRequest
     *
     * @return ListCardUsagesResponse ListCardUsagesResponse
     */
    public function listCardUsages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardUsagesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例的连接列表
     *  *
     * @param ListCardsRequest $request ListCardsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCardsResponse ListCardsResponse
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
     * @summary 查询5G高速上云服务实例的连接列表
     *  *
     * @param ListCardsRequest $request ListCardsRequest
     *
     * @return ListCardsResponse ListCardsResponse
     */
    public function listCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例下的带宽包列表
     *  *
     * @param ListDataPackagesRequest $request ListDataPackagesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataPackagesResponse ListDataPackagesResponse
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
     * @summary 查询5G高速上云服务实例下的带宽包列表
     *  *
     * @param ListDataPackagesRequest $request ListDataPackagesRequest
     *
     * @return ListDataPackagesResponse ListDataPackagesResponse
     */
    public function listDataPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataPackagesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单卡诊断信息列表
     *  *
     * @param ListDiagnoseInfoForSingleCardRequest $request ListDiagnoseInfoForSingleCardRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDiagnoseInfoForSingleCardResponse ListDiagnoseInfoForSingleCardResponse
     */
    public function listDiagnoseInfoForSingleCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseInfoForSingleCard',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDiagnoseInfoForSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单卡诊断信息列表
     *  *
     * @param ListDiagnoseInfoForSingleCardRequest $request ListDiagnoseInfoForSingleCardRequest
     *
     * @return ListDiagnoseInfoForSingleCardResponse ListDiagnoseInfoForSingleCardResponse
     */
    public function listDiagnoseInfoForSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiagnoseInfoForSingleCardWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例组的授权规则列表
     *  *
     * @param ListGroupAuthorizationRulesRequest $request ListGroupAuthorizationRulesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupAuthorizationRulesResponse ListGroupAuthorizationRulesResponse
     */
    public function listGroupAuthorizationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupAuthorizationRules',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询5G高速上云服务实例组的授权规则列表
     *  *
     * @param ListGroupAuthorizationRulesRequest $request ListGroupAuthorizationRulesRequest
     *
     * @return ListGroupAuthorizationRulesResponse ListGroupAuthorizationRulesResponse
     */
    public function listGroupAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询iotcc实例回程路由
     *  *
     * @param ListIoTCloudConnectorBackhaulRouteRequest $request ListIoTCloudConnectorBackhaulRouteRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListIoTCloudConnectorBackhaulRouteResponse ListIoTCloudConnectorBackhaulRouteResponse
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
     * @summary 查询iotcc实例回程路由
     *  *
     * @param ListIoTCloudConnectorBackhaulRouteRequest $request ListIoTCloudConnectorBackhaulRouteRequest
     *
     * @return ListIoTCloudConnectorBackhaulRouteResponse ListIoTCloudConnectorBackhaulRouteResponse
     */
    public function listIoTCloudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例下的订单列表
     *  *
     * @param ListOrdersRequest $request ListOrdersRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrdersResponse ListOrdersResponse
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
     * @summary 查询5G高速上云服务实例下的订单列表
     *  *
     * @param ListOrdersRequest $request ListOrdersRequest
     *
     * @return ListOrdersResponse ListOrdersResponse
     */
    public function listOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrdersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务支持的REGION
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
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
     * @summary 查询5G高速上云服务支持的REGION
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例分组列表
     *  *
     * @param ListWirelessCloudConnectorGroupsRequest $request ListWirelessCloudConnectorGroupsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWirelessCloudConnectorGroupsResponse ListWirelessCloudConnectorGroupsResponse
     */
    public function listWirelessCloudConnectorGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWirelessCloudConnectorGroups',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWirelessCloudConnectorGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询5G高速上云服务实例分组列表
     *  *
     * @param ListWirelessCloudConnectorGroupsRequest $request ListWirelessCloudConnectorGroupsRequest
     *
     * @return ListWirelessCloudConnectorGroupsResponse ListWirelessCloudConnectorGroupsResponse
     */
    public function listWirelessCloudConnectorGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWirelessCloudConnectorGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务实例列表
     *  *
     * @param ListWirelessCloudConnectorsRequest $request ListWirelessCloudConnectorsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWirelessCloudConnectorsResponse ListWirelessCloudConnectorsResponse
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
     * @summary 查询5G高速上云服务实例列表
     *  *
     * @param ListWirelessCloudConnectorsRequest $request ListWirelessCloudConnectorsRequest
     *
     * @return ListWirelessCloudConnectorsResponse ListWirelessCloudConnectorsResponse
     */
    public function listWirelessCloudConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWirelessCloudConnectorsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询5G高速上云服务支持的可用区
     *  *
     * @param ListZonesRequest $request ListZonesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListZonesResponse ListZonesResponse
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
     * @summary 查询5G高速上云服务支持的可用区
     *  *
     * @param ListZonesRequest $request ListZonesRequest
     *
     * @return ListZonesResponse ListZonesResponse
     */
    public function listZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 运营商侧卡停机
     *  *
     * @param LockCardsRequest $request LockCardsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return LockCardsResponse LockCardsResponse
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
     * @summary 运营商侧卡停机
     *  *
     * @param LockCardsRequest $request LockCardsRequest
     *
     * @return LockCardsResponse LockCardsResponse
     */
    public function lockCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 修改5G高速上云服务实例属性
     *  *
     * @param ModifyWirelessCloudConnectorFeatureRequest $request ModifyWirelessCloudConnectorFeatureRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyWirelessCloudConnectorFeatureResponse ModifyWirelessCloudConnectorFeatureResponse
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
     * @summary 修改5G高速上云服务实例属性
     *  *
     * @param ModifyWirelessCloudConnectorFeatureRequest $request ModifyWirelessCloudConnectorFeatureRequest
     *
     * @return ModifyWirelessCloudConnectorFeatureResponse ModifyWirelessCloudConnectorFeatureResponse
     */
    public function modifyWirelessCloudConnectorFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWirelessCloudConnectorFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary 开通5G高速上云服务
     *  *
     * @param OpenCc5gServiceRequest $request OpenCc5gServiceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenCc5gServiceResponse OpenCc5gServiceResponse
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
     * @summary 开通5G高速上云服务
     *  *
     * @param OpenCc5gServiceRequest $request OpenCc5gServiceRequest
     *
     * @return OpenCc5gServiceResponse OpenCc5gServiceResponse
     */
    public function openCc5gService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCc5gServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 物联网卡换绑解锁操作
     *  *
     * @param RebindCardsRequest $request RebindCardsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RebindCardsResponse RebindCardsResponse
     */
    public function rebindCardsWithOptions($request, $runtime)
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
            'action'      => 'RebindCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebindCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 物联网卡换绑解锁操作
     *  *
     * @param RebindCardsRequest $request RebindCardsRequest
     *
     * @return RebindCardsResponse RebindCardsResponse
     */
    public function rebindCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebindCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 从组里移除5G高速上云服务实例
     *  *
     * @param RemoveWirelessCloudConnectorFromGroupRequest $request RemoveWirelessCloudConnectorFromGroupRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveWirelessCloudConnectorFromGroupResponse RemoveWirelessCloudConnectorFromGroupResponse
     */
    public function removeWirelessCloudConnectorFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorIds)) {
            $query['WirelessCloudConnectorIds'] = $request->wirelessCloudConnectorIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveWirelessCloudConnectorFromGroup',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveWirelessCloudConnectorFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从组里移除5G高速上云服务实例
     *  *
     * @param RemoveWirelessCloudConnectorFromGroupRequest $request RemoveWirelessCloudConnectorFromGroupRequest
     *
     * @return RemoveWirelessCloudConnectorFromGroupResponse RemoveWirelessCloudConnectorFromGroupResponse
     */
    public function removeWirelessCloudConnectorFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeWirelessCloudConnectorFromGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 重置单卡区域限制
     *  *
     * @param ResetAreaLimitCardsRequest $request ResetAreaLimitCardsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAreaLimitCardsResponse ResetAreaLimitCardsResponse
     */
    public function resetAreaLimitCardsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->province)) {
            $query['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAreaLimitCards',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAreaLimitCardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置单卡区域限制
     *  *
     * @param ResetAreaLimitCardsRequest $request ResetAreaLimitCardsRequest
     *
     * @return ResetAreaLimitCardsResponse ResetAreaLimitCardsResponse
     */
    public function resetAreaLimitCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAreaLimitCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 激活单卡运营商侧卡状态恢复
     *  *
     * @param ResumeCardsRequest $request ResumeCardsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeCardsResponse ResumeCardsResponse
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
     * @summary 激活单卡运营商侧卡状态恢复
     *  *
     * @param ResumeCardsRequest $request ResumeCardsRequest
     *
     * @return ResumeCardsResponse ResumeCardsResponse
     */
    public function resumeCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 撤销分享授权网络连接
     *  *
     * @param RevokeNetLinkRequest $request RevokeNetLinkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeNetLinkResponse RevokeNetLinkResponse
     */
    public function revokeNetLinkWithOptions($request, $runtime)
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
            'action'      => 'RevokeNetLink',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeNetLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 撤销分享授权网络连接
     *  *
     * @param RevokeNetLinkRequest $request RevokeNetLinkRequest
     *
     * @return RevokeNetLinkResponse RevokeNetLinkResponse
     */
    public function revokeNetLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeNetLinkWithOptions($request, $runtime);
    }

    /**
     * @summary 运营商侧卡停机
     *  *
     * @param StopCardsRequest $request StopCardsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCardsResponse StopCardsResponse
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
     * @summary 运营商侧卡停机
     *  *
     * @param StopCardsRequest $request StopCardsRequest
     *
     * @return StopCardsResponse StopCardsResponse
     */
    public function stopCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 开启cciot单卡一键诊断
     *  *
     * @param SubmitDiagnoseTaskForSingleCardRequest $request SubmitDiagnoseTaskForSingleCardRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDiagnoseTaskForSingleCardResponse SubmitDiagnoseTaskForSingleCardResponse
     */
    public function submitDiagnoseTaskForSingleCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionNo)) {
            $query['RegionNo'] = $request->regionNo;
        }
        if (!Utils::isUnset($request->resourceUid)) {
            $query['ResourceUid'] = $request->resourceUid;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorId)) {
            $query['WirelessCloudConnectorId'] = $request->wirelessCloudConnectorId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDiagnoseTaskForSingleCard',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDiagnoseTaskForSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启cciot单卡一键诊断
     *  *
     * @param SubmitDiagnoseTaskForSingleCardRequest $request SubmitDiagnoseTaskForSingleCardRequest
     *
     * @return SubmitDiagnoseTaskForSingleCardResponse SubmitDiagnoseTaskForSingleCardResponse
     */
    public function submitDiagnoseTaskForSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDiagnoseTaskForSingleCardWithOptions($request, $runtime);
    }

    /**
     * @summary 切换cc5g实例商业类型到商业版
     *  *
     * @param SwitchWirelessCloudConnectorToBusinessRequest $request SwitchWirelessCloudConnectorToBusinessRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchWirelessCloudConnectorToBusinessResponse SwitchWirelessCloudConnectorToBusinessResponse
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
     * @summary 切换cc5g实例商业类型到商业版
     *  *
     * @param SwitchWirelessCloudConnectorToBusinessRequest $request SwitchWirelessCloudConnectorToBusinessRequest
     *
     * @return SwitchWirelessCloudConnectorToBusinessResponse SwitchWirelessCloudConnectorToBusinessResponse
     */
    public function switchWirelessCloudConnectorToBusiness($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchWirelessCloudConnectorToBusinessWithOptions($request, $runtime);
    }

    /**
     * @summary 批量解锁卡
     *  *
     * @param UnlockCardsRequest $request UnlockCardsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockCardsResponse UnlockCardsResponse
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
     * @summary 批量解锁卡
     *  *
     * @param UnlockCardsRequest $request UnlockCardsRequest
     *
     * @return UnlockCardsResponse UnlockCardsResponse
     */
    public function unlockCards($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockCardsWithOptions($request, $runtime);
    }

    /**
     * @summary 更新5G高速上云服务实例的授权规则
     *  *
     * @param UpdateAuthorizationRuleRequest $request UpdateAuthorizationRuleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAuthorizationRuleResponse UpdateAuthorizationRuleResponse
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
        if (!Utils::isUnset($request->destinationPort)) {
            $query['DestinationPort'] = $request->destinationPort;
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
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
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
     * @summary 更新5G高速上云服务实例的授权规则
     *  *
     * @param UpdateAuthorizationRuleRequest $request UpdateAuthorizationRuleRequest
     *
     * @return UpdateAuthorizationRuleResponse UpdateAuthorizationRuleResponse
     */
    public function updateAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 修改批量操作卡任务
     *  *
     * @param UpdateBatchOperateCardsTaskRequest $request UpdateBatchOperateCardsTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBatchOperateCardsTaskResponse UpdateBatchOperateCardsTaskResponse
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
     * @summary 修改批量操作卡任务
     *  *
     * @param UpdateBatchOperateCardsTaskRequest $request UpdateBatchOperateCardsTaskRequest
     *
     * @return UpdateBatchOperateCardsTaskResponse UpdateBatchOperateCardsTaskResponse
     */
    public function updateBatchOperateCardsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBatchOperateCardsTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 修改5G高速上云服务实例的连接描述和名称信息
     *  *
     * @param UpdateCardRequest $request UpdateCardRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCardResponse UpdateCardResponse
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
     * @summary 修改5G高速上云服务实例的连接描述和名称信息
     *  *
     * @param UpdateCardRequest $request UpdateCardRequest
     *
     * @return UpdateCardResponse UpdateCardResponse
     */
    public function updateCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCardWithOptions($request, $runtime);
    }

    /**
     * @summary 更新5G高速上云服务实例的DNS授权规则
     *  *
     * @param UpdateDNSAuthorizationRuleRequest $request UpdateDNSAuthorizationRuleRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDNSAuthorizationRuleResponse UpdateDNSAuthorizationRuleResponse
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
     * @summary 更新5G高速上云服务实例的DNS授权规则
     *  *
     * @param UpdateDNSAuthorizationRuleRequest $request UpdateDNSAuthorizationRuleRequest
     *
     * @return UpdateDNSAuthorizationRuleResponse UpdateDNSAuthorizationRuleResponse
     */
    public function updateDNSAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDNSAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新5G高速上云服务实例组的授权规则
     *  *
     * @param UpdateGroupAuthorizationRuleRequest $request UpdateGroupAuthorizationRuleRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupAuthorizationRuleResponse UpdateGroupAuthorizationRuleResponse
     */
    public function updateGroupAuthorizationRuleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->destinationPort)) {
            $query['DestinationPort'] = $request->destinationPort;
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
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->sourceCidr)) {
            $query['SourceCidr'] = $request->sourceCidr;
        }
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新5G高速上云服务实例组的授权规则
     *  *
     * @param UpdateGroupAuthorizationRuleRequest $request UpdateGroupAuthorizationRuleRequest
     *
     * @return UpdateGroupAuthorizationRuleResponse UpdateGroupAuthorizationRuleResponse
     */
    public function updateGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新5G高速上云服务实例组的DNS授权规则
     *  *
     * @param UpdateGroupDnsAuthorizationRuleRequest $request UpdateGroupDnsAuthorizationRuleRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupDnsAuthorizationRuleResponse UpdateGroupDnsAuthorizationRuleResponse
     */
    public function updateGroupDnsAuthorizationRuleWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupDnsAuthorizationRule',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupDnsAuthorizationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新5G高速上云服务实例组的DNS授权规则
     *  *
     * @param UpdateGroupDnsAuthorizationRuleRequest $request UpdateGroupDnsAuthorizationRuleRequest
     *
     * @return UpdateGroupDnsAuthorizationRuleResponse UpdateGroupDnsAuthorizationRuleResponse
     */
    public function updateGroupDnsAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupDnsAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 修改5G高速上云服务实例
     *  *
     * @param UpdateWirelessCloudConnectorRequest $request UpdateWirelessCloudConnectorRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWirelessCloudConnectorResponse UpdateWirelessCloudConnectorResponse
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
     * @summary 修改5G高速上云服务实例
     *  *
     * @param UpdateWirelessCloudConnectorRequest $request UpdateWirelessCloudConnectorRequest
     *
     * @return UpdateWirelessCloudConnectorResponse UpdateWirelessCloudConnectorResponse
     */
    public function updateWirelessCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWirelessCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @summary 修改5G高速上云服务实例分组
     *  *
     * @param UpdateWirelessCloudConnectorGroupRequest $request UpdateWirelessCloudConnectorGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWirelessCloudConnectorGroupResponse UpdateWirelessCloudConnectorGroupResponse
     */
    public function updateWirelessCloudConnectorGroupWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->wirelessCloudConnectorGroupId)) {
            $query['WirelessCloudConnectorGroupId'] = $request->wirelessCloudConnectorGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateWirelessCloudConnectorGroup',
            'version'     => '2022-03-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWirelessCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改5G高速上云服务实例分组
     *  *
     * @param UpdateWirelessCloudConnectorGroupRequest $request UpdateWirelessCloudConnectorGroupRequest
     *
     * @return UpdateWirelessCloudConnectorGroupResponse UpdateWirelessCloudConnectorGroupResponse
     */
    public function updateWirelessCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWirelessCloudConnectorGroupWithOptions($request, $runtime);
    }
}
