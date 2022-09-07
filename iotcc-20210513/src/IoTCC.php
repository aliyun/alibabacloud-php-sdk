<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddCidrToConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddCidrToConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddIoTCloudConnectorToGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AddIoTCloudConnectorToGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateIpWithConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateIpWithConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateVSwitchWithIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\AssociateVSwitchWithIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ConfirmIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ConfirmIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateAuthorizationRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateDNSServiceRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateDNSServiceRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupDNSServiceRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupDNSServiceRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupIpMappingRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateGroupIpMappingRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIpMappingRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateIpMappingRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceEntryRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceEntryResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\CreateServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteDNSServiceRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteDNSServiceRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupAuthorizationRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupAuthorizationRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupDNSServiceRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupDNSServiceRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupIpMappingRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteGroupIpMappingRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnetorBackhaulRouteRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIoTCloudConnetorBackhaulRouteResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIpMappingRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteIpMappingRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceEntryRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceEntryResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DisableIoTCloudConnectorAccessLogRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DisableIoTCloudConnectorAccessLogResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateIpFromConnectionPoolRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateIpFromConnectionPoolResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateVSwitchFromIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\DissociateVSwitchFromIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\EnableIoTCloudConnectorAccessLogRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\EnableIoTCloudConnectorAccessLogResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetConnectionPoolIpOperationResultRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetConnectionPoolIpOperationResultResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetDiagnoseResultForSingleCardRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetDiagnoseResultForSingleCardResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetIoTCloudConnectorAccessLogRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetIoTCloudConnectorAccessLogResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetStsInfoAndOssPathRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetStsInfoAndOssPathResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GrantVirtualBorderRouterRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GrantVirtualBorderRouterResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAPNsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAPNsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAuthorizationRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAuthorizationRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolAllIpsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolAllIpsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolIpsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolIpsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListDiagnoseInfoForSingleCardRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListDiagnoseInfoForSingleCardResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListDNSServiceRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListDNSServiceRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupAuthorizationRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupAuthorizationRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupDNSServiceRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupDNSServiceRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupIpMappingRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupIpMappingRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAccessSessionLogsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAccessSessionLogsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAvailableZonesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAvailableZonesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorEIPsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorEIPsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCoudConnectorBackhaulRouteRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCoudConnectorBackhaulRouteResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIpMappingRulesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIpMappingRulesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListRegionsRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListRegionsResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceEntriesRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceEntriesResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\ListServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\MoveAuthorizationRuleToDNSServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\MoveAuthorizationRuleToDNSServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\MoveGroupAuthorizationRuleToDNSServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\MoveGroupAuthorizationRuleToDNSServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\OpenIoTCloudConnectorServiceRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\OpenIoTCloudConnectorServiceResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\RemoveIoTCloudConnectorFromGroupRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\RemoveIoTCloudConnectorFromGroupResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\RevertIoTCloudConnectorRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\RevertIoTCloudConnectorResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\SubmitDiagnoseTaskForSingleCardRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\SubmitDiagnoseTaskForSingleCardResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateAuthorizationRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateAuthorizationRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateConnectionPoolAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateConnectionPoolAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateDNSServiceRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateDNSServiceRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupAuthorizationRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupAuthorizationRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupDNSServiceRuleAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupDNSServiceRuleAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupIpMappingRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateGroupIpMappingRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorGroupAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIoTCloudConnectorGroupAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIpMappingRuleRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateIpMappingRuleResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceAttributeResponse;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceEntryAttributeRequest;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\UpdateServiceEntryAttributeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class IoTCC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iotcc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCidrToConnectionPoolRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddCidrToConnectionPoolResponse
     */
    public function addCidrToConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCidrToConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCidrToConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCidrToConnectionPoolRequest $request
     *
     * @return AddCidrToConnectionPoolResponse
     */
    public function addCidrToConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCidrToConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param AddIoTCloudConnectorToGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddIoTCloudConnectorToGroupResponse
     */
    public function addIoTCloudConnectorToGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddIoTCloudConnectorToGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddIoTCloudConnectorToGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddIoTCloudConnectorToGroupRequest $request
     *
     * @return AddIoTCloudConnectorToGroupResponse
     */
    public function addIoTCloudConnectorToGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIoTCloudConnectorToGroupWithOptions($request, $runtime);
    }

    /**
     * @param AssociateIpWithConnectionPoolRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AssociateIpWithConnectionPoolResponse
     */
    public function associateIpWithConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ips)) {
            $query['Ips'] = $request->ips;
        }
        if (!Utils::isUnset($request->ipsFilePath)) {
            $query['IpsFilePath'] = $request->ipsFilePath;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateIpWithConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateIpWithConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateIpWithConnectionPoolRequest $request
     *
     * @return AssociateIpWithConnectionPoolResponse
     */
    public function associateIpWithConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateIpWithConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param AssociateVSwitchWithIoTCloudConnectorRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return AssociateVSwitchWithIoTCloudConnectorResponse
     */
    public function associateVSwitchWithIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchList)) {
            $query['VSwitchList'] = $request->vSwitchList;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateVSwitchWithIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateVSwitchWithIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateVSwitchWithIoTCloudConnectorRequest $request
     *
     * @return AssociateVSwitchWithIoTCloudConnectorResponse
     */
    public function associateVSwitchWithIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateVSwitchWithIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmIoTCloudConnectorRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfirmIoTCloudConnectorResponse
     */
    public function confirmIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->confirmStatus)) {
            $query['ConfirmStatus'] = $request->confirmStatus;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfirmIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmIoTCloudConnectorRequest $request
     *
     * @return ConfirmIoTCloudConnectorResponse
     */
    public function confirmIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmIoTCloudConnectorWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->authorizationRuleDescription)) {
            $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        }
        if (!Utils::isUnset($request->authorizationRuleName)) {
            $query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceCidrs)) {
            $query['SourceCidrs'] = $request->sourceCidrs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorizationRule',
            'version'     => '2021-05-13',
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
     * @param CreateAuthorizationRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAuthorizationRulesResponse
     */
    public function createAuthorizationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRules)) {
            $query['AuthorizationRules'] = $request->authorizationRules;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAuthorizationRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuthorizationRulesRequest $request
     *
     * @return CreateAuthorizationRulesResponse
     */
    public function createAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateConnectionPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateConnectionPoolResponse
     */
    public function createConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolDescription)) {
            $query['ConnectionPoolDescription'] = $request->connectionPoolDescription;
        }
        if (!Utils::isUnset($request->connectionPoolName)) {
            $query['ConnectionPoolName'] = $request->connectionPoolName;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConnectionPoolRequest $request
     *
     * @return CreateConnectionPoolResponse
     */
    public function createConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param CreateDNSServiceRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDNSServiceRuleResponse
     */
    public function createDNSServiceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DNSServiceRuleDescription)) {
            $query['DNSServiceRuleDescription'] = $request->DNSServiceRuleDescription;
        }
        if (!Utils::isUnset($request->DNSServiceRuleName)) {
            $query['DNSServiceRuleName'] = $request->DNSServiceRuleName;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDNSServiceRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDNSServiceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDNSServiceRuleRequest $request
     *
     * @return CreateDNSServiceRuleResponse
     */
    public function createDNSServiceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDNSServiceRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupAuthorizationRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateGroupAuthorizationRuleResponse
     */
    public function createGroupAuthorizationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleDescription)) {
            $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        }
        if (!Utils::isUnset($request->authorizationRuleName)) {
            $query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceCidrs)) {
            $query['SourceCidrs'] = $request->sourceCidrs;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupAuthorizationRule',
            'version'     => '2021-05-13',
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
     * @param CreateGroupAuthorizationRuleRequest $request
     *
     * @return CreateGroupAuthorizationRuleResponse
     */
    public function createGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupDNSServiceRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateGroupDNSServiceRuleResponse
     */
    public function createGroupDNSServiceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DNSServiceRuleDescription)) {
            $query['DNSServiceRuleDescription'] = $request->DNSServiceRuleDescription;
        }
        if (!Utils::isUnset($request->DNSServiceRuleName)) {
            $query['DNSServiceRuleName'] = $request->DNSServiceRuleName;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupDNSServiceRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupDNSServiceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupDNSServiceRuleRequest $request
     *
     * @return CreateGroupDNSServiceRuleResponse
     */
    public function createGroupDNSServiceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupDNSServiceRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupIpMappingRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateGroupIpMappingRuleResponse
     */
    public function createGroupIpMappingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->ipMappingRuleDescription)) {
            $query['IpMappingRuleDescription'] = $request->ipMappingRuleDescription;
        }
        if (!Utils::isUnset($request->ipMappingRuleName)) {
            $query['IpMappingRuleName'] = $request->ipMappingRuleName;
        }
        if (!Utils::isUnset($request->mappingIp)) {
            $query['MappingIp'] = $request->mappingIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupIpMappingRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupIpMappingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupIpMappingRuleRequest $request
     *
     * @return CreateGroupIpMappingRuleResponse
     */
    public function createGroupIpMappingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupIpMappingRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIoTCloudConnectorResponse
     */
    public function createIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->APN)) {
            $query['APN'] = $request->APN;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorDescription)) {
            $query['IoTCloudConnectorDescription'] = $request->ioTCloudConnectorDescription;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorName)) {
            $query['IoTCloudConnectorName'] = $request->ioTCloudConnectorName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceUid)) {
            $query['ResourceUid'] = $request->resourceUid;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->wildcardDomainEnabled)) {
            $query['WildcardDomainEnabled'] = $request->wildcardDomainEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIoTCloudConnectorRequest $request
     *
     * @return CreateIoTCloudConnectorResponse
     */
    public function createIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIoTCloudConnectorWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIoTCloudConnectorBackhaulRoute',
            'version'     => '2021-05-13',
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
     * @param CreateIoTCloudConnectorGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateIoTCloudConnectorGroupResponse
     */
    public function createIoTCloudConnectorGroupWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIoTCloudConnectorGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIoTCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIoTCloudConnectorGroupRequest $request
     *
     * @return CreateIoTCloudConnectorGroupResponse
     */
    public function createIoTCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIoTCloudConnectorGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateIpMappingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateIpMappingRuleResponse
     */
    public function createIpMappingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ipMappingRuleDescription)) {
            $query['IpMappingRuleDescription'] = $request->ipMappingRuleDescription;
        }
        if (!Utils::isUnset($request->ipMappingRuleName)) {
            $query['IpMappingRuleName'] = $request->ipMappingRuleName;
        }
        if (!Utils::isUnset($request->mappingIp)) {
            $query['MappingIp'] = $request->mappingIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateIpMappingRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateIpMappingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIpMappingRuleRequest $request
     *
     * @return CreateIpMappingRuleResponse
     */
    public function createIpMappingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpMappingRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateServiceEntryResponse
     */
    public function createServiceEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceEntryDescription)) {
            $query['ServiceEntryDescription'] = $request->serviceEntryDescription;
        }
        if (!Utils::isUnset($request->serviceEntryName)) {
            $query['ServiceEntryName'] = $request->serviceEntryName;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceEntry',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceEntryRequest $request
     *
     * @return CreateServiceEntryResponse
     */
    public function createServiceEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceEntryWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAuthorizationRule',
            'version'     => '2021-05-13',
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
     * @param DeleteConnectionPoolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteConnectionPoolResponse
     */
    public function deleteConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConnectionPoolRequest $request
     *
     * @return DeleteConnectionPoolResponse
     */
    public function deleteConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDNSServiceRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDNSServiceRuleResponse
     */
    public function deleteDNSServiceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DNSServiceRuleId)) {
            $query['DNSServiceRuleId'] = $request->DNSServiceRuleId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDNSServiceRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDNSServiceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDNSServiceRuleRequest $request
     *
     * @return DeleteDNSServiceRuleResponse
     */
    public function deleteDNSServiceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNSServiceRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupAuthorizationRuleRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteGroupAuthorizationRuleResponse
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
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupAuthorizationRule',
            'version'     => '2021-05-13',
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
     * @param DeleteGroupAuthorizationRuleRequest $request
     *
     * @return DeleteGroupAuthorizationRuleResponse
     */
    public function deleteGroupAuthorizationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupAuthorizationRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupDNSServiceRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteGroupDNSServiceRuleResponse
     */
    public function deleteGroupDNSServiceRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DNSServiceRuleId)) {
            $query['DNSServiceRuleId'] = $request->DNSServiceRuleId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupDNSServiceRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupDNSServiceRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupDNSServiceRuleRequest $request
     *
     * @return DeleteGroupDNSServiceRuleResponse
     */
    public function deleteGroupDNSServiceRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupDNSServiceRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupIpMappingRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteGroupIpMappingRuleResponse
     */
    public function deleteGroupIpMappingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->groupIpMappingRuleId)) {
            $query['GroupIpMappingRuleId'] = $request->groupIpMappingRuleId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupIpMappingRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupIpMappingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupIpMappingRuleRequest $request
     *
     * @return DeleteGroupIpMappingRuleResponse
     */
    public function deleteGroupIpMappingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupIpMappingRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIoTCloudConnectorResponse
     */
    public function deleteIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIoTCloudConnectorRequest $request
     *
     * @return DeleteIoTCloudConnectorResponse
     */
    public function deleteIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIoTCloudConnectorGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteIoTCloudConnectorGroupResponse
     */
    public function deleteIoTCloudConnectorGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIoTCloudConnectorGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIoTCloudConnectorGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIoTCloudConnectorGroupRequest $request
     *
     * @return DeleteIoTCloudConnectorGroupResponse
     */
    public function deleteIoTCloudConnectorGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnectorGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIoTCloudConnetorBackhaulRouteRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DeleteIoTCloudConnetorBackhaulRouteResponse
     */
    public function deleteIoTCloudConnetorBackhaulRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIoTCloudConnetorBackhaulRoute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIoTCloudConnetorBackhaulRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIoTCloudConnetorBackhaulRouteRequest $request
     *
     * @return DeleteIoTCloudConnetorBackhaulRouteResponse
     */
    public function deleteIoTCloudConnetorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIoTCloudConnetorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @param DeleteIpMappingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteIpMappingRuleResponse
     */
    public function deleteIpMappingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ipMappingRuleId)) {
            $query['IpMappingRuleId'] = $request->ipMappingRuleId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteIpMappingRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteIpMappingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIpMappingRuleRequest $request
     *
     * @return DeleteIpMappingRuleResponse
     */
    public function deleteIpMappingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpMappingRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceEntryResponse
     */
    public function deleteServiceEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceEntryId)) {
            $query['ServiceEntryId'] = $request->serviceEntryId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceEntry',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceEntryRequest $request
     *
     * @return DeleteServiceEntryResponse
     */
    public function deleteServiceEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceEntryWithOptions($request, $runtime);
    }

    /**
     * @param DisableIoTCloudConnectorAccessLogRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DisableIoTCloudConnectorAccessLogResponse
     */
    public function disableIoTCloudConnectorAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableIoTCloudConnectorAccessLog',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableIoTCloudConnectorAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableIoTCloudConnectorAccessLogRequest $request
     *
     * @return DisableIoTCloudConnectorAccessLogResponse
     */
    public function disableIoTCloudConnectorAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableIoTCloudConnectorAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param DissociateIpFromConnectionPoolRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DissociateIpFromConnectionPoolResponse
     */
    public function dissociateIpFromConnectionPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ips)) {
            $query['Ips'] = $request->ips;
        }
        if (!Utils::isUnset($request->ipsFilePath)) {
            $query['IpsFilePath'] = $request->ipsFilePath;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateIpFromConnectionPool',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateIpFromConnectionPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateIpFromConnectionPoolRequest $request
     *
     * @return DissociateIpFromConnectionPoolResponse
     */
    public function dissociateIpFromConnectionPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateIpFromConnectionPoolWithOptions($request, $runtime);
    }

    /**
     * @param DissociateVSwitchFromIoTCloudConnectorRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DissociateVSwitchFromIoTCloudConnectorResponse
     */
    public function dissociateVSwitchFromIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateVSwitchFromIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateVSwitchFromIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateVSwitchFromIoTCloudConnectorRequest $request
     *
     * @return DissociateVSwitchFromIoTCloudConnectorResponse
     */
    public function dissociateVSwitchFromIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateVSwitchFromIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param EnableIoTCloudConnectorAccessLogRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return EnableIoTCloudConnectorAccessLogResponse
     */
    public function enableIoTCloudConnectorAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLogSlsLogStore)) {
            $query['AccessLogSlsLogStore'] = $request->accessLogSlsLogStore;
        }
        if (!Utils::isUnset($request->accessLogSlsProject)) {
            $query['AccessLogSlsProject'] = $request->accessLogSlsProject;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableIoTCloudConnectorAccessLog',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableIoTCloudConnectorAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableIoTCloudConnectorAccessLogRequest $request
     *
     * @return EnableIoTCloudConnectorAccessLogResponse
     */
    public function enableIoTCloudConnectorAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableIoTCloudConnectorAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectionPoolIpOperationResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetConnectionPoolIpOperationResultResponse
     */
    public function getConnectionPoolIpOperationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->queryRequestId)) {
            $query['QueryRequestId'] = $request->queryRequestId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnectionPoolIpOperationResult',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionPoolIpOperationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConnectionPoolIpOperationResultRequest $request
     *
     * @return GetConnectionPoolIpOperationResultResponse
     */
    public function getConnectionPoolIpOperationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionPoolIpOperationResultWithOptions($request, $runtime);
    }

    /**
     * @param GetDiagnoseResultForSingleCardRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetDiagnoseResultForSingleCardResponse
     */
    public function getDiagnoseResultForSingleCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diagnoseTaskId)) {
            $query['DiagnoseTaskId'] = $request->diagnoseTaskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiagnoseResultForSingleCard',
            'version'     => '2021-05-13',
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
     * @param GetDiagnoseResultForSingleCardRequest $request
     *
     * @return GetDiagnoseResultForSingleCardResponse
     */
    public function getDiagnoseResultForSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiagnoseResultForSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param GetIoTCloudConnectorAccessLogRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetIoTCloudConnectorAccessLogResponse
     */
    public function getIoTCloudConnectorAccessLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIoTCloudConnectorAccessLog',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIoTCloudConnectorAccessLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIoTCloudConnectorAccessLogRequest $request
     *
     * @return GetIoTCloudConnectorAccessLogResponse
     */
    public function getIoTCloudConnectorAccessLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIoTCloudConnectorAccessLogWithOptions($request, $runtime);
    }

    /**
     * @param GetStsInfoAndOssPathRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetStsInfoAndOssPathResponse
     */
    public function getStsInfoAndOssPathWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStsInfoAndOssPath',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStsInfoAndOssPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStsInfoAndOssPathRequest $request
     *
     * @return GetStsInfoAndOssPathResponse
     */
    public function getStsInfoAndOssPath($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStsInfoAndOssPathWithOptions($request, $runtime);
    }

    /**
     * @param GrantVirtualBorderRouterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GrantVirtualBorderRouterResponse
     */
    public function grantVirtualBorderRouterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->virtualBorderRouterId)) {
            $query['VirtualBorderRouterId'] = $request->virtualBorderRouterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GrantVirtualBorderRouter',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantVirtualBorderRouterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantVirtualBorderRouterRequest $request
     *
     * @return GrantVirtualBorderRouterResponse
     */
    public function grantVirtualBorderRouter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantVirtualBorderRouterWithOptions($request, $runtime);
    }

    /**
     * @param ListAPNsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAPNsResponse
     */
    public function listAPNsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->APN)) {
            $query['APN'] = $request->APN;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAPNs',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAPNsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAPNsRequest $request
     *
     * @return ListAPNsResponse
     */
    public function listAPNs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAPNsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleIds)) {
            $query['AuthorizationRuleIds'] = $request->authorizationRuleIds;
        }
        if (!Utils::isUnset($request->authorizationRuleName)) {
            $query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }
        if (!Utils::isUnset($request->authorizationRuleStatus)) {
            $query['AuthorizationRuleStatus'] = $request->authorizationRuleStatus;
        }
        if (!Utils::isUnset($request->authorizationRuleType)) {
            $query['AuthorizationRuleType'] = $request->authorizationRuleType;
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
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAuthorizationRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
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
     * @param ListConnectionPoolAllIpsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListConnectionPoolAllIpsResponse
     */
    public function listConnectionPoolAllIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPoolAllIps',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoolAllIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionPoolAllIpsRequest $request
     *
     * @return ListConnectionPoolAllIpsResponse
     */
    public function listConnectionPoolAllIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoolAllIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionPoolIpsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListConnectionPoolIpsResponse
     */
    public function listConnectionPoolIpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPoolIps',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoolIpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionPoolIpsRequest $request
     *
     * @return ListConnectionPoolIpsResponse
     */
    public function listConnectionPoolIps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoolIpsWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectionPoolsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListConnectionPoolsResponse
     */
    public function listConnectionPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->connectionPoolIds)) {
            $query['ConnectionPoolIds'] = $request->connectionPoolIds;
        }
        if (!Utils::isUnset($request->connectionPoolName)) {
            $query['ConnectionPoolName'] = $request->connectionPoolName;
        }
        if (!Utils::isUnset($request->connectionPoolStatus)) {
            $query['ConnectionPoolStatus'] = $request->connectionPoolStatus;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConnectionPools',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConnectionPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConnectionPoolsRequest $request
     *
     * @return ListConnectionPoolsResponse
     */
    public function listConnectionPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectionPoolsWithOptions($request, $runtime);
    }

    /**
     * @param ListDNSServiceRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDNSServiceRulesResponse
     */
    public function listDNSServiceRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DNSServiceRuleIds)) {
            $query['DNSServiceRuleIds'] = $request->DNSServiceRuleIds;
        }
        if (!Utils::isUnset($request->DNSServiceRuleName)) {
            $query['DNSServiceRuleName'] = $request->DNSServiceRuleName;
        }
        if (!Utils::isUnset($request->DNSServiceRuleStatus)) {
            $query['DNSServiceRuleStatus'] = $request->DNSServiceRuleStatus;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDNSServiceRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDNSServiceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDNSServiceRulesRequest $request
     *
     * @return ListDNSServiceRulesResponse
     */
    public function listDNSServiceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNSServiceRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListDiagnoseInfoForSingleCardRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDiagnoseInfoForSingleCardResponse
     */
    public function listDiagnoseInfoForSingleCardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiagnoseInfoForSingleCard',
            'version'     => '2021-05-13',
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
     * @param ListDiagnoseInfoForSingleCardRequest $request
     *
     * @return ListDiagnoseInfoForSingleCardResponse
     */
    public function listDiagnoseInfoForSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiagnoseInfoForSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupAuthorizationRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListGroupAuthorizationRulesResponse
     */
    public function listGroupAuthorizationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleIds)) {
            $query['AuthorizationRuleIds'] = $request->authorizationRuleIds;
        }
        if (!Utils::isUnset($request->authorizationRuleName)) {
            $query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }
        if (!Utils::isUnset($request->authorizationRuleStatus)) {
            $query['AuthorizationRuleStatus'] = $request->authorizationRuleStatus;
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
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupAuthorizationRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupAuthorizationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupAuthorizationRulesRequest $request
     *
     * @return ListGroupAuthorizationRulesResponse
     */
    public function listGroupAuthorizationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupAuthorizationRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupDNSServiceRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListGroupDNSServiceRulesResponse
     */
    public function listGroupDNSServiceRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DNSServiceRuleIds)) {
            $query['DNSServiceRuleIds'] = $request->DNSServiceRuleIds;
        }
        if (!Utils::isUnset($request->DNSServiceRuleName)) {
            $query['DNSServiceRuleName'] = $request->DNSServiceRuleName;
        }
        if (!Utils::isUnset($request->DNSServiceRuleStatus)) {
            $query['DNSServiceRuleStatus'] = $request->DNSServiceRuleStatus;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupDNSServiceRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupDNSServiceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupDNSServiceRulesRequest $request
     *
     * @return ListGroupDNSServiceRulesResponse
     */
    public function listGroupDNSServiceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupDNSServiceRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupIpMappingRulesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListGroupIpMappingRulesResponse
     */
    public function listGroupIpMappingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationIps)) {
            $query['DestinationIps'] = $request->destinationIps;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->ipMappingRuleIds)) {
            $query['IpMappingRuleIds'] = $request->ipMappingRuleIds;
        }
        if (!Utils::isUnset($request->ipMappingRuleNames)) {
            $query['IpMappingRuleNames'] = $request->ipMappingRuleNames;
        }
        if (!Utils::isUnset($request->ipMappingRuleStatuses)) {
            $query['IpMappingRuleStatuses'] = $request->ipMappingRuleStatuses;
        }
        if (!Utils::isUnset($request->mappingIps)) {
            $query['MappingIps'] = $request->mappingIps;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupIpMappingRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupIpMappingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupIpMappingRulesRequest $request
     *
     * @return ListGroupIpMappingRulesResponse
     */
    public function listGroupIpMappingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupIpMappingRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorAccessSessionLogsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListIoTCloudConnectorAccessSessionLogsResponse
     */
    public function listIoTCloudConnectorAccessSessionLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinations)) {
            $query['Destinations'] = $request->destinations;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceIps)) {
            $query['SourceIps'] = $request->sourceIps;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorAccessSessionLogs',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorAccessSessionLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorAccessSessionLogsRequest $request
     *
     * @return ListIoTCloudConnectorAccessSessionLogsResponse
     */
    public function listIoTCloudConnectorAccessSessionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorAccessSessionLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorAvailableZonesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListIoTCloudConnectorAvailableZonesResponse
     */
    public function listIoTCloudConnectorAvailableZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorAvailableZones',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorAvailableZonesRequest $request
     *
     * @return ListIoTCloudConnectorAvailableZonesResponse
     */
    public function listIoTCloudConnectorAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorAvailableZonesWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorEIPsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListIoTCloudConnectorEIPsResponse
     */
    public function listIoTCloudConnectorEIPsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorEIPs',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorEIPsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorEIPsRequest $request
     *
     * @return ListIoTCloudConnectorEIPsResponse
     */
    public function listIoTCloudConnectorEIPs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorEIPsWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIoTCloudConnectorGroupsResponse
     */
    public function listIoTCloudConnectorGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorGroupIds)) {
            $query['IoTCloudConnectorGroupIds'] = $request->ioTCloudConnectorGroupIds;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupName)) {
            $query['IoTCloudConnectorGroupName'] = $request->ioTCloudConnectorGroupName;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupStatus)) {
            $query['IoTCloudConnectorGroupStatus'] = $request->ioTCloudConnectorGroupStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectorGroups',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorGroupsRequest $request
     *
     * @return ListIoTCloudConnectorGroupsResponse
     */
    public function listIoTCloudConnectorGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCloudConnectorsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListIoTCloudConnectorsResponse
     */
    public function listIoTCloudConnectorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->APN)) {
            $query['APN'] = $request->APN;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorIds)) {
            $query['IoTCloudConnectorIds'] = $request->ioTCloudConnectorIds;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorName)) {
            $query['IoTCloudConnectorName'] = $request->ioTCloudConnectorName;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorStatus)) {
            $query['IoTCloudConnectorStatus'] = $request->ioTCloudConnectorStatus;
        }
        if (!Utils::isUnset($request->isInGroup)) {
            $query['IsInGroup'] = $request->isInGroup;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCloudConnectors',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCloudConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCloudConnectorsRequest $request
     *
     * @return ListIoTCloudConnectorsResponse
     */
    public function listIoTCloudConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCloudConnectorsWithOptions($request, $runtime);
    }

    /**
     * @param ListIoTCoudConnectorBackhaulRouteRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListIoTCoudConnectorBackhaulRouteResponse
     */
    public function listIoTCoudConnectorBackhaulRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIoTCoudConnectorBackhaulRoute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIoTCoudConnectorBackhaulRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIoTCoudConnectorBackhaulRouteRequest $request
     *
     * @return ListIoTCoudConnectorBackhaulRouteResponse
     */
    public function listIoTCoudConnectorBackhaulRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIoTCoudConnectorBackhaulRouteWithOptions($request, $runtime);
    }

    /**
     * @param ListIpMappingRulesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListIpMappingRulesResponse
     */
    public function listIpMappingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationIps)) {
            $query['DestinationIps'] = $request->destinationIps;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ipMappingRuleIds)) {
            $query['IpMappingRuleIds'] = $request->ipMappingRuleIds;
        }
        if (!Utils::isUnset($request->ipMappingRuleNames)) {
            $query['IpMappingRuleNames'] = $request->ipMappingRuleNames;
        }
        if (!Utils::isUnset($request->ipMappingRuleStatuses)) {
            $query['IpMappingRuleStatuses'] = $request->ipMappingRuleStatuses;
        }
        if (!Utils::isUnset($request->mappingIps)) {
            $query['MappingIps'] = $request->mappingIps;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListIpMappingRules',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListIpMappingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIpMappingRulesRequest $request
     *
     * @return ListIpMappingRulesResponse
     */
    public function listIpMappingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listIpMappingRulesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
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
     * @param ListServiceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListServiceResponse
     */
    public function listServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceStatuses)) {
            $query['ResourceStatuses'] = $request->resourceStatuses;
        }
        if (!Utils::isUnset($request->serviceIds)) {
            $query['ServiceIds'] = $request->serviceIds;
        }
        if (!Utils::isUnset($request->serviceNames)) {
            $query['ServiceNames'] = $request->serviceNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceRequest $request
     *
     * @return ListServiceResponse
     */
    public function listService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceEntriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListServiceEntriesResponse
     */
    public function listServiceEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceEntryIds)) {
            $query['ServiceEntryIds'] = $request->serviceEntryIds;
        }
        if (!Utils::isUnset($request->serviceEntryName)) {
            $query['ServiceEntryName'] = $request->serviceEntryName;
        }
        if (!Utils::isUnset($request->serviceEntryStatus)) {
            $query['ServiceEntryStatus'] = $request->serviceEntryStatus;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceEntries',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceEntriesRequest $request
     *
     * @return ListServiceEntriesResponse
     */
    public function listServiceEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceEntriesWithOptions($request, $runtime);
    }

    /**
     * @param MoveAuthorizationRuleToDNSServiceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return MoveAuthorizationRuleToDNSServiceResponse
     */
    public function moveAuthorizationRuleToDNSServiceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveAuthorizationRuleToDNSService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveAuthorizationRuleToDNSServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveAuthorizationRuleToDNSServiceRequest $request
     *
     * @return MoveAuthorizationRuleToDNSServiceResponse
     */
    public function moveAuthorizationRuleToDNSService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveAuthorizationRuleToDNSServiceWithOptions($request, $runtime);
    }

    /**
     * @param MoveGroupAuthorizationRuleToDNSServiceRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return MoveGroupAuthorizationRuleToDNSServiceResponse
     */
    public function moveGroupAuthorizationRuleToDNSServiceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveGroupAuthorizationRuleToDNSService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveGroupAuthorizationRuleToDNSServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveGroupAuthorizationRuleToDNSServiceRequest $request
     *
     * @return MoveGroupAuthorizationRuleToDNSServiceResponse
     */
    public function moveGroupAuthorizationRuleToDNSService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveGroupAuthorizationRuleToDNSServiceWithOptions($request, $runtime);
    }

    /**
     * @param OpenIoTCloudConnectorServiceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OpenIoTCloudConnectorServiceResponse
     */
    public function openIoTCloudConnectorServiceWithOptions($request, $runtime)
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
            'action'      => 'OpenIoTCloudConnectorService',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenIoTCloudConnectorServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenIoTCloudConnectorServiceRequest $request
     *
     * @return OpenIoTCloudConnectorServiceResponse
     */
    public function openIoTCloudConnectorService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openIoTCloudConnectorServiceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveIoTCloudConnectorFromGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return RemoveIoTCloudConnectorFromGroupResponse
     */
    public function removeIoTCloudConnectorFromGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveIoTCloudConnectorFromGroup',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveIoTCloudConnectorFromGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveIoTCloudConnectorFromGroupRequest $request
     *
     * @return RemoveIoTCloudConnectorFromGroupResponse
     */
    public function removeIoTCloudConnectorFromGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIoTCloudConnectorFromGroupWithOptions($request, $runtime);
    }

    /**
     * @param RevertIoTCloudConnectorRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RevertIoTCloudConnectorResponse
     */
    public function revertIoTCloudConnectorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevertIoTCloudConnector',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevertIoTCloudConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevertIoTCloudConnectorRequest $request
     *
     * @return RevertIoTCloudConnectorResponse
     */
    public function revertIoTCloudConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revertIoTCloudConnectorWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDiagnoseTaskForSingleCardRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return SubmitDiagnoseTaskForSingleCardResponse
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
        if (!Utils::isUnset($request->destinationType)) {
            $query['DestinationType'] = $request->destinationType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceUid)) {
            $query['ResourceUid'] = $request->resourceUid;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDiagnoseTaskForSingleCard',
            'version'     => '2021-05-13',
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
     * @param SubmitDiagnoseTaskForSingleCardRequest $request
     *
     * @return SubmitDiagnoseTaskForSingleCardResponse
     */
    public function submitDiagnoseTaskForSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDiagnoseTaskForSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAuthorizationRuleAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateAuthorizationRuleAttributeResponse
     */
    public function updateAuthorizationRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleDescription)) {
            $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        }
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->authorizationRuleName)) {
            $query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceCidrs)) {
            $query['SourceCidrs'] = $request->sourceCidrs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAuthorizationRuleAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAuthorizationRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAuthorizationRuleAttributeRequest $request
     *
     * @return UpdateAuthorizationRuleAttributeResponse
     */
    public function updateAuthorizationRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAuthorizationRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConnectionPoolAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateConnectionPoolAttributeResponse
     */
    public function updateConnectionPoolAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionPoolDescription)) {
            $query['ConnectionPoolDescription'] = $request->connectionPoolDescription;
        }
        if (!Utils::isUnset($request->connectionPoolId)) {
            $query['ConnectionPoolId'] = $request->connectionPoolId;
        }
        if (!Utils::isUnset($request->connectionPoolName)) {
            $query['ConnectionPoolName'] = $request->connectionPoolName;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnectionPoolAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConnectionPoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConnectionPoolAttributeRequest $request
     *
     * @return UpdateConnectionPoolAttributeResponse
     */
    public function updateConnectionPoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionPoolAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDNSServiceRuleAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateDNSServiceRuleAttributeResponse
     */
    public function updateDNSServiceRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DNSServiceRuleDescription)) {
            $query['DNSServiceRuleDescription'] = $request->DNSServiceRuleDescription;
        }
        if (!Utils::isUnset($request->DNSServiceRuleId)) {
            $query['DNSServiceRuleId'] = $request->DNSServiceRuleId;
        }
        if (!Utils::isUnset($request->DNSServiceRuleName)) {
            $query['DNSServiceRuleName'] = $request->DNSServiceRuleName;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDNSServiceRuleAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDNSServiceRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDNSServiceRuleAttributeRequest $request
     *
     * @return UpdateDNSServiceRuleAttributeResponse
     */
    public function updateDNSServiceRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDNSServiceRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupAuthorizationRuleAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateGroupAuthorizationRuleAttributeResponse
     */
    public function updateGroupAuthorizationRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizationRuleDescription)) {
            $query['AuthorizationRuleDescription'] = $request->authorizationRuleDescription;
        }
        if (!Utils::isUnset($request->authorizationRuleId)) {
            $query['AuthorizationRuleId'] = $request->authorizationRuleId;
        }
        if (!Utils::isUnset($request->authorizationRuleName)) {
            $query['AuthorizationRuleName'] = $request->authorizationRuleName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceCidrs)) {
            $query['SourceCidrs'] = $request->sourceCidrs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupAuthorizationRuleAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupAuthorizationRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupAuthorizationRuleAttributeRequest $request
     *
     * @return UpdateGroupAuthorizationRuleAttributeResponse
     */
    public function updateGroupAuthorizationRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupAuthorizationRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupDNSServiceRuleAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateGroupDNSServiceRuleAttributeResponse
     */
    public function updateGroupDNSServiceRuleAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DNSServiceRuleDescription)) {
            $query['DNSServiceRuleDescription'] = $request->DNSServiceRuleDescription;
        }
        if (!Utils::isUnset($request->DNSServiceRuleId)) {
            $query['DNSServiceRuleId'] = $request->DNSServiceRuleId;
        }
        if (!Utils::isUnset($request->DNSServiceRuleName)) {
            $query['DNSServiceRuleName'] = $request->DNSServiceRuleName;
        }
        if (!Utils::isUnset($request->destination)) {
            $query['Destination'] = $request->destination;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupDNSServiceRuleAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupDNSServiceRuleAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupDNSServiceRuleAttributeRequest $request
     *
     * @return UpdateGroupDNSServiceRuleAttributeResponse
     */
    public function updateGroupDNSServiceRuleAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupDNSServiceRuleAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateGroupIpMappingRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateGroupIpMappingRuleResponse
     */
    public function updateGroupIpMappingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->groupIpMappingRuleId)) {
            $query['GroupIpMappingRuleId'] = $request->groupIpMappingRuleId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
        }
        if (!Utils::isUnset($request->ipMappingRuleDescription)) {
            $query['IpMappingRuleDescription'] = $request->ipMappingRuleDescription;
        }
        if (!Utils::isUnset($request->ipMappingRuleName)) {
            $query['IpMappingRuleName'] = $request->ipMappingRuleName;
        }
        if (!Utils::isUnset($request->mappingIp)) {
            $query['MappingIp'] = $request->mappingIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupIpMappingRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupIpMappingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateGroupIpMappingRuleRequest $request
     *
     * @return UpdateGroupIpMappingRuleResponse
     */
    public function updateGroupIpMappingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateGroupIpMappingRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIoTCloudConnectorAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateIoTCloudConnectorAttributeResponse
     */
    public function updateIoTCloudConnectorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorDescription)) {
            $query['IoTCloudConnectorDescription'] = $request->ioTCloudConnectorDescription;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorName)) {
            $query['IoTCloudConnectorName'] = $request->ioTCloudConnectorName;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->wildcardDomainEnabled)) {
            $query['WildcardDomainEnabled'] = $request->wildcardDomainEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIoTCloudConnectorAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIoTCloudConnectorAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIoTCloudConnectorAttributeRequest $request
     *
     * @return UpdateIoTCloudConnectorAttributeResponse
     */
    public function updateIoTCloudConnectorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIoTCloudConnectorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIoTCloudConnectorGroupAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateIoTCloudConnectorGroupAttributeResponse
     */
    public function updateIoTCloudConnectorGroupAttributeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->ioTCloudConnectorGroupId)) {
            $query['IoTCloudConnectorGroupId'] = $request->ioTCloudConnectorGroupId;
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
            'action'      => 'UpdateIoTCloudConnectorGroupAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIoTCloudConnectorGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIoTCloudConnectorGroupAttributeRequest $request
     *
     * @return UpdateIoTCloudConnectorGroupAttributeResponse
     */
    public function updateIoTCloudConnectorGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIoTCloudConnectorGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateIpMappingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateIpMappingRuleResponse
     */
    public function updateIpMappingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->destinationIp)) {
            $query['DestinationIp'] = $request->destinationIp;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->ipMappingRuleDescription)) {
            $query['IpMappingRuleDescription'] = $request->ipMappingRuleDescription;
        }
        if (!Utils::isUnset($request->ipMappingRuleId)) {
            $query['IpMappingRuleId'] = $request->ipMappingRuleId;
        }
        if (!Utils::isUnset($request->ipMappingRuleName)) {
            $query['IpMappingRuleName'] = $request->ipMappingRuleName;
        }
        if (!Utils::isUnset($request->mappingIp)) {
            $query['MappingIp'] = $request->mappingIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateIpMappingRule',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateIpMappingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIpMappingRuleRequest $request
     *
     * @return UpdateIpMappingRuleResponse
     */
    public function updateIpMappingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIpMappingRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateServiceAttributeResponse
     */
    public function updateServiceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $query['ServiceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceAttributeRequest $request
     *
     * @return UpdateServiceAttributeResponse
     */
    public function updateServiceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceEntryAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateServiceEntryAttributeResponse
     */
    public function updateServiceEntryAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->ioTCloudConnectorId)) {
            $query['IoTCloudConnectorId'] = $request->ioTCloudConnectorId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceEntryDescription)) {
            $query['ServiceEntryDescription'] = $request->serviceEntryDescription;
        }
        if (!Utils::isUnset($request->serviceEntryId)) {
            $query['ServiceEntryId'] = $request->serviceEntryId;
        }
        if (!Utils::isUnset($request->serviceEntryName)) {
            $query['ServiceEntryName'] = $request->serviceEntryName;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceEntryAttribute',
            'version'     => '2021-05-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceEntryAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceEntryAttributeRequest $request
     *
     * @return UpdateServiceEntryAttributeResponse
     */
    public function updateServiceEntryAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceEntryAttributeWithOptions($request, $runtime);
    }
}
