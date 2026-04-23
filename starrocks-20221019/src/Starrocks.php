<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\AddBackupPolicyRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\AddBackupPolicyResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\AddGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\AddGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CheckInventoryRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CheckInventoryResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateAgentResourceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateAgentResourceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Request;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateInstanceV1Response;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateScalingRuleRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateScalingRuleResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteBackupPolicyRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteBackupPolicyResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteBackupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteBackupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteInnerIpWhitelistGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteInnerIpWhitelistGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteScalingRuleRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DeleteScalingRuleResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeAvailableZonesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeAvailableZonesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupPoliciesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupPoliciesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeConfigHistoryRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeConfigHistoryResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeEventNamesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeEventNamesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInnerIpWhitelistGroupsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInnerIpWhitelistGroupsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceConfigsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceConfigsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceDiagnosisResultRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceDiagnosisResultResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceMetaTokenRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceMetaTokenResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstancesShrinkRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeSystemTimezoneRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeSystemTimezoneResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeTimeTriggerScalingRulesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeTimeTriggerScalingRulesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DisableSSLConnectionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DisableSSLConnectionResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableInternalSlbRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableInternalSlbResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableMultiAzRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableMultiAzResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableSSLConnectionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\EnableSSLConnectionResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\GetInstanceFeatureGateRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\GetInstanceFeatureGateResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\GetNodeGroupFeatureGateRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\GetNodeGroupFeatureGateResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\IsolateLeaderRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\IsolateLeaderResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListOperationActivityRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListOperationActivityResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListOperationHistoryRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListOperationHistoryResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListSSLDetailsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ListSSLDetailsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyChargeTypeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyChargeTypeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyCuResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskNumberRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskNumberResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskPerformanceLevelRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskPerformanceLevelResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskSizeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskSizeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskTypeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyDiskTypeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyHostAliasRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyHostAliasResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyInstanceConfigPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyInstanceConfigPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyInstanceConfigRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyInstanceConfigResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyMaintainableTimeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyMaintainableTimeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberPreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberPreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyNodeNumberResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyScalingRuleRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyScalingRuleResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifySpecTypePreCheckRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifySpecTypePreCheckResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifySpecTypeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifySpecTypeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyUserPasswordRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyUserPasswordResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryEnableMultiAzPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryEnableMultiAzPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryMinorVersionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryMinorVersionResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyChargeTypePriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyChargeTypePriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyCuPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyCuPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskNumberPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskNumberPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskPerformanceLevelPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskPerformanceLevelPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskSizePriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskSizePriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskTypePriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyDiskTypePriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifyNodeNumberPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifySpecTypePriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryModifySpecTypePriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryPriceV1Request;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryPriceV1Response;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryRefundPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryRefundPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryRenewPriceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryRenewPriceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUnpaidOrderRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUnpaidOrderResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUpgradableVersionsRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryUpgradableVersionsResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RebootECSRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RebootECSResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodeGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodeGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RollbackConfigModificationRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RollbackConfigModificationResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\SwitchActiveStandbyZonesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\SwitchActiveStandbyZonesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ToggleAutoMinorVersionUpgradeRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ToggleAutoMinorVersionUpgradeResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TogglePublicSlbRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\TogglePublicSlbResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UnTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateBackupPolicyRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateBackupPolicyResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateBackupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateBackupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateGatewayRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateGatewayResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInnerIpWhitelistGroupRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInnerIpWhitelistGroupResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateNodeGroupDescriptionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdateNodeGroupDescriptionResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdatePublicNetworkStatusRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpdatePublicNetworkStatusResponse;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpgradeVersionRequest;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\UpgradeVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Starrocks extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('starrocks', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 新增备份策略.
     *
     * @param request - AddBackupPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBackupPolicyResponse
     *
     * @param AddBackupPolicyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AddBackupPolicyResponse
     */
    public function addBackupPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireDays) {
            @$body['ExpireDays'] = $request->expireDays;
        }

        if (null !== $request->hour) {
            @$body['Hour'] = $request->hour;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minute) {
            @$body['Minute'] = $request->minute;
        }

        if (null !== $request->recurrenceType) {
            @$body['RecurrenceType'] = $request->recurrenceType;
        }

        if (null !== $request->recurrenceValues) {
            @$body['RecurrenceValues'] = $request->recurrenceValues;
        }

        if (null !== $request->timeoutSeconds) {
            @$body['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddBackupPolicy',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backupRestore/policy/add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增备份策略.
     *
     * @param request - AddBackupPolicyRequest
     *
     * @returns AddBackupPolicyResponse
     *
     * @param AddBackupPolicyRequest $request
     *
     * @return AddBackupPolicyResponse
     */
    public function addBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addBackupPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * 新建网关.
     *
     * @param request - AddGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGatewayResponse
     *
     * @param AddGatewayRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddGatewayResponse
     */
    public function addGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feNodeNumber) {
            @$query['FeNodeNumber'] = $request->feNodeNumber;
        }

        if (null !== $request->gatewayName) {
            @$query['GatewayName'] = $request->gatewayName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/add',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建网关.
     *
     * @param request - AddGatewayRequest
     *
     * @returns AddGatewayResponse
     *
     * @param AddGatewayRequest $request
     *
     * @return AddGatewayResponse
     */
    public function addGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to modify the resource group of a Serverless StarRocks instance.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceGroup/change',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to modify the resource group of a Serverless StarRocks instance.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 校验ABM的资源库存.
     *
     * @param request - CheckInventoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckInventoryResponse
     *
     * @param CheckInventoryRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CheckInventoryResponse
     */
    public function checkInventoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterInfo) {
            @$query['ClusterInfo'] = $request->clusterInfo;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckInventory',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/check/inventory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckInventoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验ABM的资源库存.
     *
     * @param request - CheckInventoryRequest
     *
     * @returns CheckInventoryResponse
     *
     * @param CheckInventoryRequest $request
     *
     * @return CheckInventoryResponse
     */
    public function checkInventory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkInventoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Agent资源组.
     *
     * @param request - CreateAgentResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentResourceResponse
     *
     * @param CreateAgentResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAgentResourceResponse
     */
    public function createAgentResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->cu) {
            @$query['Cu'] = $request->cu;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->specType) {
            @$query['SpecType'] = $request->specType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAgentResource',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/lifecycle/createAgentNodeGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAgentResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Agent资源组.
     *
     * @param request - CreateAgentResourceRequest
     *
     * @returns CreateAgentResourceResponse
     *
     * @param CreateAgentResourceRequest $request
     *
     * @return CreateAgentResourceResponse
     */
    public function createAgentResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - CreateInstanceV1Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceV1Response
     *
     * @param CreateInstanceV1Request $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateInstanceV1Response
     */
    public function createInstanceV1WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adminPassword) {
            @$body['AdminPassword'] = $request->adminPassword;
        }

        if (null !== $request->agentNodeGroup) {
            @$body['AgentNodeGroup'] = $request->agentNodeGroup;
        }

        if (null !== $request->autoPay) {
            @$body['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backendNodeGroups) {
            @$body['BackendNodeGroups'] = $request->backendNodeGroups;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dlfCatalogName) {
            @$body['DlfCatalogName'] = $request->dlfCatalogName;
        }

        if (null !== $request->dlfCatalogType) {
            @$body['DlfCatalogType'] = $request->dlfCatalogType;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->enableMultiAz) {
            @$body['EnableMultiAz'] = $request->enableMultiAz;
        }

        if (null !== $request->encrypted) {
            @$body['Encrypted'] = $request->encrypted;
        }

        if (null !== $request->frontendNodeGroups) {
            @$body['FrontendNodeGroups'] = $request->frontendNodeGroups;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->kmsKeyId) {
            @$body['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->linkedRamUserName) {
            @$body['LinkedRamUserName'] = $request->linkedRamUserName;
        }

        if (null !== $request->observerNodeGroups) {
            @$body['ObserverNodeGroups'] = $request->observerNodeGroups;
        }

        if (null !== $request->ossAccessingRoleName) {
            @$body['OssAccessingRoleName'] = $request->ossAccessingRoleName;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->payType) {
            @$body['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        if (null !== $request->promotionOptionNo) {
            @$body['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->ramUserId) {
            @$body['RamUserId'] = $request->ramUserId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->runMode) {
            @$body['RunMode'] = $request->runMode;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitches) {
            @$body['VSwitches'] = $request->vSwitches;
        }

        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceV1',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/createV1',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - CreateInstanceV1Request
     *
     * @returns CreateInstanceV1Response
     *
     * @param CreateInstanceV1Request $request
     *
     * @return CreateInstanceV1Response
     */
    public function createInstanceV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceV1WithOptions($request, $headers, $runtime);
    }

    /**
     * 新建一条弹性规则.
     *
     * @param request - CreateScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScalingRuleResponse
     *
     * @param CreateScalingRuleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateScalingRuleResponse
     */
    public function createScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->triggerType) {
            @$query['TriggerType'] = $request->triggerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScalingRule',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/scalingRule/createScalingRule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建一条弹性规则.
     *
     * @param request - CreateScalingRuleRequest
     *
     * @returns CreateScalingRuleResponse
     *
     * @param CreateScalingRuleRequest $request
     *
     * @return CreateScalingRuleResponse
     */
    public function createScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * This interface is used to create the AliyunServiceRoleForEMRStarRocks role for users.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/user/create_default_role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to create the AliyunServiceRoleForEMRStarRocks role for users.
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceLinkedRoleWithOptions($headers, $runtime);
    }

    /**
     * 删除数据备份.
     *
     * @param request - DeleteBackupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupTaskId) {
            @$query['BackupTaskId'] = $request->backupTaskId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backup/manage/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据备份.
     *
     * @param request - DeleteBackupRequest
     *
     * @returns DeleteBackupResponse
     *
     * @param DeleteBackupRequest $request
     *
     * @return DeleteBackupResponse
     */
    public function deleteBackup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBackupWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除备份策略.
     *
     * @param request - DeleteBackupPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupPolicyResponse
     *
     * @param DeleteBackupPolicyRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteBackupPolicyResponse
     */
    public function deleteBackupPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupPolicy',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backupRestore/policy/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除备份策略.
     *
     * @param request - DeleteBackupPolicyRequest
     *
     * @returns DeleteBackupPolicyResponse
     *
     * @param DeleteBackupPolicyRequest $request
     *
     * @return DeleteBackupPolicyResponse
     */
    public function deleteBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBackupPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除网关.
     *
     * @param request - DeleteGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param DeleteGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除网关.
     *
     * @param request - DeleteGatewayRequest
     *
     * @returns DeleteGatewayResponse
     *
     * @param DeleteGatewayRequest $request
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除白名单分组.
     *
     * @param request - DeleteInnerIpWhitelistGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInnerIpWhitelistGroupResponse
     *
     * @param DeleteInnerIpWhitelistGroupRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteInnerIpWhitelistGroupResponse
     */
    public function deleteInnerIpWhitelistGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->innerIpWhitelistGroupId) {
            @$body['InnerIpWhitelistGroupId'] = $request->innerIpWhitelistGroupId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInnerIpWhitelistGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/securityGroup/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInnerIpWhitelistGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除白名单分组.
     *
     * @param request - DeleteInnerIpWhitelistGroupRequest
     *
     * @returns DeleteInnerIpWhitelistGroupResponse
     *
     * @param DeleteInnerIpWhitelistGroupRequest $request
     *
     * @return DeleteInnerIpWhitelistGroupResponse
     */
    public function deleteInnerIpWhitelistGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInnerIpWhitelistGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除一条弹性规则.
     *
     * @param request - DeleteScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScalingRuleResponse
     *
     * @param DeleteScalingRuleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->scalingRuleId) {
            @$query['ScalingRuleId'] = $request->scalingRuleId;
        }

        if (null !== $request->triggerType) {
            @$query['TriggerType'] = $request->triggerType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScalingRule',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/scalingRule/deleteScalingRule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一条弹性规则.
     *
     * @param request - DeleteScalingRuleRequest
     *
     * @returns DeleteScalingRuleResponse
     *
     * @param DeleteScalingRuleRequest $request
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - DescribeAvailableZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableZonesResponse
     *
     * @param DescribeAvailableZonesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZonesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAvailableZones',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/zone/describeZones',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAvailableZonesRequest
     *
     * @returns DescribeAvailableZonesResponse
     *
     * @param DescribeAvailableZonesRequest $request
     *
     * @return DescribeAvailableZonesResponse
     */
    public function describeAvailableZones($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAvailableZonesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取备份策略详情.
     *
     * @param request - DescribeBackupPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupPoliciesResponse
     *
     * @param DescribeBackupPoliciesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBackupPoliciesResponse
     */
    public function describeBackupPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackupPolicies',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backupRestore/policy/describe',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeBackupPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取备份策略详情.
     *
     * @param request - DescribeBackupPoliciesRequest
     *
     * @returns DescribeBackupPoliciesResponse
     *
     * @param DescribeBackupPoliciesRequest $request
     *
     * @return DescribeBackupPoliciesResponse
     */
    public function describeBackupPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBackupPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取备份详情.
     *
     * @param request - DescribeBackupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBackupsResponse
     *
     * @param DescribeBackupsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupTaskId) {
            @$query['BackupTaskId'] = $request->backupTaskId;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        if (null !== $request->timePeriodEndTime) {
            @$query['TimePeriodEndTime'] = $request->timePeriodEndTime;
        }

        if (null !== $request->timePeriodStartTime) {
            @$query['TimePeriodStartTime'] = $request->timePeriodStartTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBackups',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backup/manage/describe',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取备份详情.
     *
     * @param request - DescribeBackupsRequest
     *
     * @returns DescribeBackupsResponse
     *
     * @param DescribeBackupsRequest $request
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBackupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询实例配置历史.
     *
     * @param request - DescribeConfigHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigHistoryResponse
     *
     * @param DescribeConfigHistoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeConfigHistoryResponse
     */
    public function describeConfigHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->effectStatuses) {
            @$query['EffectStatuses'] = $request->effectStatuses;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needTotal) {
            @$query['NeedTotal'] = $request->needTotal;
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
            'action' => 'DescribeConfigHistory',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/describeConfigHistory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例配置历史.
     *
     * @param request - DescribeConfigHistoryRequest
     *
     * @returns DescribeConfigHistoryResponse
     *
     * @param DescribeConfigHistoryRequest $request
     *
     * @return DescribeConfigHistoryResponse
     */
    public function describeConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeConfigHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取集群事件名称.
     *
     * @param request - DescribeEventNamesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventNamesResponse
     *
     * @param DescribeEventNamesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEventNamesResponse
     */
    public function describeEventNamesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventNames',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/event/describeEventNames',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeEventNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取集群事件名称.
     *
     * @param request - DescribeEventNamesRequest
     *
     * @returns DescribeEventNamesResponse
     *
     * @param DescribeEventNamesRequest $request
     *
     * @return DescribeEventNamesResponse
     */
    public function describeEventNames($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEventNamesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询白名单分组.
     *
     * @param request - DescribeInnerIpWhitelistGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInnerIpWhitelistGroupsResponse
     *
     * @param DescribeInnerIpWhitelistGroupsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeInnerIpWhitelistGroupsResponse
     */
    public function describeInnerIpWhitelistGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInnerIpWhitelistGroups',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/securityGroup/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInnerIpWhitelistGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询白名单分组.
     *
     * @param request - DescribeInnerIpWhitelistGroupsRequest
     *
     * @returns DescribeInnerIpWhitelistGroupsResponse
     *
     * @param DescribeInnerIpWhitelistGroupsRequest $request
     *
     * @return DescribeInnerIpWhitelistGroupsResponse
     */
    public function describeInnerIpWhitelistGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInnerIpWhitelistGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询实例配置.
     *
     * @param request - DescribeInstanceConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceConfigsResponse
     *
     * @param DescribeInstanceConfigsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceConfigsResponse
     */
    public function describeInstanceConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowModify) {
            @$query['AllowModify'] = $request->allowModify;
        }

        if (null !== $request->configKey) {
            @$query['ConfigKey'] = $request->configKey;
        }

        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->needTotal) {
            @$query['NeedTotal'] = $request->needTotal;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

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
            'action' => 'DescribeInstanceConfigs',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/describeInstanceConfigs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例配置.
     *
     * @param request - DescribeInstanceConfigsRequest
     *
     * @returns DescribeInstanceConfigsResponse
     *
     * @param DescribeInstanceConfigsRequest $request
     *
     * @return DescribeInstanceConfigsResponse
     */
    public function describeInstanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例的健康诊断结果.
     *
     * @param request - DescribeInstanceDiagnosisResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceDiagnosisResultResponse
     *
     * @param DescribeInstanceDiagnosisResultRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeInstanceDiagnosisResultResponse
     */
    public function describeInstanceDiagnosisResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
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

        if (null !== $request->reportDate) {
            @$query['ReportDate'] = $request->reportDate;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceDiagnosisResult',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/diagnosis/describe',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例的健康诊断结果.
     *
     * @param request - DescribeInstanceDiagnosisResultRequest
     *
     * @returns DescribeInstanceDiagnosisResultResponse
     *
     * @param DescribeInstanceDiagnosisResultRequest $request
     *
     * @return DescribeInstanceDiagnosisResultResponse
     */
    public function describeInstanceDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceDiagnosisResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取 StarRocks 实例的 Meta Token。
     *
     * @param request - DescribeInstanceMetaTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceMetaTokenResponse
     *
     * @param DescribeInstanceMetaTokenRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceMetaTokenResponse
     */
    public function describeInstanceMetaTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceMetaToken',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/migration/getMetaToken',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceMetaTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 StarRocks 实例的 Meta Token。
     *
     * @param request - DescribeInstanceMetaTokenRequest
     *
     * @returns DescribeInstanceMetaTokenResponse
     *
     * @param DescribeInstanceMetaTokenRequest $request
     *
     * @return DescribeInstanceMetaTokenResponse
     */
    public function describeInstanceMetaToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceMetaTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * This operation is used to query Serverless StarRocks instances, supporting filtering based on instance name or tags and other information.
     *
     * @param tmpReq - DescribeInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/describeInstances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation is used to query Serverless StarRocks instances, supporting filtering based on instance name or tags and other information.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取节点组信息.
     *
     * @param request - DescribeNodeGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNodeGroupsResponse
     *
     * @param DescribeNodeGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeNodeGroupsResponse
     */
    public function describeNodeGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->componentType) {
            @$body['componentType'] = $request->componentType;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupIds) {
            @$body['nodeGroupIds'] = $request->nodeGroupIds;
        }

        if (null !== $request->nodeGroupName) {
            @$body['nodeGroupName'] = $request->nodeGroupName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeNodeGroups',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/nodegroup/describeNodeGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeNodeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取节点组信息.
     *
     * @param request - DescribeNodeGroupsRequest
     *
     * @returns DescribeNodeGroupsResponse
     *
     * @param DescribeNodeGroupsRequest $request
     *
     * @return DescribeNodeGroupsResponse
     */
    public function describeNodeGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeNodeGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/region/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * 描述Starrocks的资源配置约束
     *
     * @param request - DescribeResourceConstraintsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceConstraintsResponse
     *
     * @param DescribeResourceConstraintsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeResourceConstraintsResponse
     */
    public function describeResourceConstraintsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->architecture) {
            @$query['Architecture'] = $request->architecture;
        }

        if (null !== $request->packageType) {
            @$query['PackageType'] = $request->packageType;
        }

        if (null !== $request->runMode) {
            @$query['RunMode'] = $request->runMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceConstraints',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/describeResourceConstraints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeResourceConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 描述Starrocks的资源配置约束
     *
     * @param request - DescribeResourceConstraintsRequest
     *
     * @returns DescribeResourceConstraintsResponse
     *
     * @param DescribeResourceConstraintsRequest $request
     *
     * @return DescribeResourceConstraintsResponse
     */
    public function describeResourceConstraints($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceConstraintsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取 starrocks 实例的系统时区.
     *
     * @param request - DescribeSystemTimezoneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSystemTimezoneResponse
     *
     * @param DescribeSystemTimezoneRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSystemTimezoneResponse
     */
    public function describeSystemTimezoneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSystemTimezone',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/timezone/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSystemTimezoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 starrocks 实例的系统时区.
     *
     * @param request - DescribeSystemTimezoneRequest
     *
     * @returns DescribeSystemTimezoneResponse
     *
     * @param DescribeSystemTimezoneRequest $request
     *
     * @return DescribeSystemTimezoneResponse
     */
    public function describeSystemTimezone($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSystemTimezoneWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取时间触发规则信息.
     *
     * @param request - DescribeTimeTriggerScalingRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTimeTriggerScalingRulesResponse
     *
     * @param DescribeTimeTriggerScalingRulesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeTimeTriggerScalingRulesResponse
     */
    public function describeTimeTriggerScalingRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTimeTriggerScalingRules',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/scalingRule/describeTimeTriggerScalingRules',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTimeTriggerScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取时间触发规则信息.
     *
     * @param request - DescribeTimeTriggerScalingRulesRequest
     *
     * @returns DescribeTimeTriggerScalingRulesResponse
     *
     * @param DescribeTimeTriggerScalingRulesRequest $request
     *
     * @return DescribeTimeTriggerScalingRulesResponse
     */
    public function describeTimeTriggerScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTimeTriggerScalingRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks关闭SSL.
     *
     * @param request - DisableSSLConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSSLConnectionResponse
     *
     * @param DisableSSLConnectionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DisableSSLConnectionResponse
     */
    public function disableSSLConnectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSSLConnection',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/disableSSLConnection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableSSLConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks关闭SSL.
     *
     * @param request - DisableSSLConnectionRequest
     *
     * @returns DisableSSLConnectionResponse
     *
     * @param DisableSSLConnectionRequest $request
     *
     * @return DisableSSLConnectionResponse
     */
    public function disableSSLConnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSSLConnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * 默认网关开启内网SLB.
     *
     * @param request - EnableInternalSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableInternalSlbResponse
     *
     * @param EnableInternalSlbRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return EnableInternalSlbResponse
     */
    public function enableInternalSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableInternalSlb',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/enableInternalSlb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableInternalSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 默认网关开启内网SLB.
     *
     * @param request - EnableInternalSlbRequest
     *
     * @returns EnableInternalSlbResponse
     *
     * @param EnableInternalSlbRequest $request
     *
     * @return EnableInternalSlbResponse
     */
    public function enableInternalSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableInternalSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * 开启Multi AZ.
     *
     * @param request - EnableMultiAzRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableMultiAzResponse
     *
     * @param EnableMultiAzRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return EnableMultiAzResponse
     */
    public function enableMultiAzWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->observers) {
            @$body['observers'] = $request->observers;
        }

        if (null !== $request->promotionOptionNo) {
            @$body['promotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableMultiAz',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/lifecycle/enableMultiAz',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableMultiAzResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启Multi AZ.
     *
     * @param request - EnableMultiAzRequest
     *
     * @returns EnableMultiAzResponse
     *
     * @param EnableMultiAzRequest $request
     *
     * @return EnableMultiAzResponse
     */
    public function enableMultiAz($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableMultiAzWithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks开启SSL.
     *
     * @param request - EnableSSLConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSSLConnectionResponse
     *
     * @param EnableSSLConnectionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return EnableSSLConnectionResponse
     */
    public function enableSSLConnectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customSSLCertificate) {
            @$body['CustomSSLCertificate'] = $request->customSSLCertificate;
        }

        if (null !== $request->enableCustom) {
            @$body['EnableCustom'] = $request->enableCustom;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->renewal) {
            @$body['Renewal'] = $request->renewal;
        }

        if (null !== $request->sslKeyPassword) {
            @$body['SslKeyPassword'] = $request->sslKeyPassword;
        }

        if (null !== $request->sslKeystorePassword) {
            @$body['SslKeystorePassword'] = $request->sslKeystorePassword;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableSSLConnection',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/enableSSLConnection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableSSLConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks开启SSL.
     *
     * @param request - EnableSSLConnectionRequest
     *
     * @returns EnableSSLConnectionResponse
     *
     * @param EnableSSLConnectionRequest $request
     *
     * @return EnableSSLConnectionResponse
     */
    public function enableSSLConnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSSLConnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取StarRocks集群实例的特性开关.
     *
     * @param request - GetInstanceFeatureGateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceFeatureGateResponse
     *
     * @param GetInstanceFeatureGateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceFeatureGateResponse
     */
    public function getInstanceFeatureGateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceFeatureGate',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/features/featureGate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceFeatureGateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取StarRocks集群实例的特性开关.
     *
     * @param request - GetInstanceFeatureGateRequest
     *
     * @returns GetInstanceFeatureGateResponse
     *
     * @param GetInstanceFeatureGateRequest $request
     *
     * @return GetInstanceFeatureGateResponse
     */
    public function getInstanceFeatureGate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceFeatureGateWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取StarRocks 计算组实例的特性开关.
     *
     * @param request - GetNodeGroupFeatureGateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeGroupFeatureGateResponse
     *
     * @param GetNodeGroupFeatureGateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetNodeGroupFeatureGateResponse
     */
    public function getNodeGroupFeatureGateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeGroupFeatureGate',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/features/nodeGroupFeatureGate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetNodeGroupFeatureGateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取StarRocks 计算组实例的特性开关.
     *
     * @param request - GetNodeGroupFeatureGateRequest
     *
     * @returns GetNodeGroupFeatureGateResponse
     *
     * @param GetNodeGroupFeatureGateRequest $request
     *
     * @return GetNodeGroupFeatureGateResponse
     */
    public function getNodeGroupFeatureGate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNodeGroupFeatureGateWithOptions($request, $headers, $runtime);
    }

    /**
     * 默认网关开启内网SLB.
     *
     * @param request - IsolateLeaderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsolateLeaderResponse
     *
     * @param IsolateLeaderRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return IsolateLeaderResponse
     */
    public function isolateLeaderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isolateLeader) {
            @$query['IsolateLeader'] = $request->isolateLeader;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IsolateLeader',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/isolateLeader',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return IsolateLeaderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 默认网关开启内网SLB.
     *
     * @param request - IsolateLeaderRequest
     *
     * @returns IsolateLeaderResponse
     *
     * @param IsolateLeaderRequest $request
     *
     * @return IsolateLeaderResponse
     */
    public function isolateLeader($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->isolateLeaderWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网关列表.
     *
     * @param request - ListGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListGatewayResponse
     */
    public function listGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/list',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网关列表.
     *
     * @param request - ListGatewayRequest
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $request
     *
     * @return ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取操作的详细信息.
     *
     * @param request - ListOperationActivityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOperationActivityResponse
     *
     * @param ListOperationActivityRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListOperationActivityResponse
     */
    public function listOperationActivityWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOperationActivity',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/operation/listOperationActivity',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOperationActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取操作的详细信息.
     *
     * @param request - ListOperationActivityRequest
     *
     * @returns ListOperationActivityResponse
     *
     * @param ListOperationActivityRequest $request
     *
     * @return ListOperationActivityResponse
     */
    public function listOperationActivity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationActivityWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取集群的操作历史.
     *
     * @param request - ListOperationHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOperationHistoryResponse
     *
     * @param ListOperationHistoryRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListOperationHistoryResponse
     */
    public function listOperationHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        if (null !== $request->operationStatus) {
            @$query['OperationStatus'] = $request->operationStatus;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
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
            'action' => 'ListOperationHistory',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/operation/listOperationHistory',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOperationHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取集群的操作历史.
     *
     * @param request - ListOperationHistoryRequest
     *
     * @returns ListOperationHistoryResponse
     *
     * @param ListOperationHistoryRequest $request
     *
     * @return ListOperationHistoryResponse
     */
    public function listOperationHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取集群SSL详情.
     *
     * @param request - ListSSLDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSSLDetailsResponse
     *
     * @param ListSSLDetailsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSSLDetailsResponse
     */
    public function listSSLDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSSLDetails',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/listSSLDetails',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSSLDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取集群SSL详情.
     *
     * @param request - ListSSLDetailsRequest
     *
     * @returns ListSSLDetailsResponse
     *
     * @param ListSSLDetailsRequest $request
     *
     * @return ListSSLDetailsResponse
     */
    public function listSSLDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSSLDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改实例的付费类型.
     *
     * @param request - ModifyChargeTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyChargeTypeResponse
     *
     * @param ModifyChargeTypeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyChargeTypeResponse
     */
    public function modifyChargeTypeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->billingInstanceIds) {
            @$query['BillingInstanceIds'] = $request->billingInstanceIds;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyChargeType',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/modifyChargeType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例的付费类型.
     *
     * @param request - ModifyChargeTypeRequest
     *
     * @returns ModifyChargeTypeResponse
     *
     * @param ModifyChargeTypeRequest $request
     *
     * @return ModifyChargeTypeResponse
     */
    public function modifyChargeType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyChargeTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the number of CUs for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the number of CUs for a warehouse of only StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you modify the number of CUs for a warehouse, the billing of CUs has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of CUs.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of CUs before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyCuRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCuResponse
     *
     * @param ModifyCuRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ModifyCuResponse
     */
    public function modifyCuWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCu',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyCu',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyCuResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the number of CUs for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the number of CUs for a warehouse of only StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you modify the number of CUs for a warehouse, the billing of CUs has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of CUs.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of CUs before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyCuRequest
     *
     * @returns ModifyCuResponse
     *
     * @param ModifyCuRequest $request
     *
     * @return ModifyCuResponse
     */
    public function modifyCu($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyCuWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a precheck before you modify the number of CUs for a warehouse.
     *
     * @param request - ModifyCuPreCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCuPreCheckResponse
     *
     * @param ModifyCuPreCheckRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCuPreCheckResponse
     */
    public function modifyCuPreCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCuPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyCuPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyCuPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a precheck before you modify the number of CUs for a warehouse.
     *
     * @param request - ModifyCuPreCheckRequest
     *
     * @returns ModifyCuPreCheckResponse
     *
     * @param ModifyCuPreCheckRequest $request
     *
     * @return ModifyCuPreCheckResponse
     */
    public function modifyCuPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyCuPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * Increases the number of disks for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can increase the number of disks only for StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you increase the number of disks for a warehouse, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of disks before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskNumberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskNumberResponse
     *
     * @param ModifyDiskNumberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDiskNumberResponse
     */
    public function modifyDiskNumberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskNumber',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Increases the number of disks for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can increase the number of disks only for StarRocks instances of Standard Edition.
     * *   You can increase the number of disks only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you increase the number of disks for a warehouse, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of disks before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskNumberRequest
     *
     * @returns ModifyDiskNumberResponse
     *
     * @param ModifyDiskNumberRequest $request
     *
     * @return ModifyDiskNumberResponse
     */
    public function modifyDiskNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the disk performance level for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/en/product/ecs?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.47c9281fkIZGiB#pricing) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the disk performance level only for StarRocks instances of Standard Edition.
     * *   You can modify the disk performance level only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * *   You cannot downgrade the performance level to PL0.
     * *   The performance level of an Enterprise SSD (ESSD) is limited by the ESSD disk size. If you cannot upgrade the performance level of an ESSD, expand the ESSD and try again. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     * After the disk performance level is changed, the billing of the disk has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk performance level before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskPerformanceLevelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskPerformanceLevelResponse
     *
     * @param ModifyDiskPerformanceLevelRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDiskPerformanceLevelResponse
     */
    public function modifyDiskPerformanceLevelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskPerformanceLevel',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskPerformanceLevel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskPerformanceLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the disk performance level for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [pricing](https://www.alibabacloud.com/en/product/ecs?_p_lc=1&spm=openapi-amp.newDocPublishment.0.0.47c9281fkIZGiB#pricing) of EMR Serverless StarRocks instances.
     * Before you call this operation, take note of the following items:
     * *   You can modify the disk performance level only for StarRocks instances of Standard Edition.
     * *   You can modify the disk performance level only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * *   You cannot downgrade the performance level to PL0.
     * *   The performance level of an Enterprise SSD (ESSD) is limited by the ESSD disk size. If you cannot upgrade the performance level of an ESSD, expand the ESSD and try again. For more information, see [Enterprise SSDs](https://help.aliyun.com/document_detail/122389.html).
     * After the disk performance level is changed, the billing of the disk has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk type.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk performance level before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskPerformanceLevelRequest
     *
     * @returns ModifyDiskPerformanceLevelResponse
     *
     * @param ModifyDiskPerformanceLevelRequest $request
     *
     * @return ModifyDiskPerformanceLevelResponse
     */
    public function modifyDiskPerformanceLevel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskPerformanceLevelWithOptions($request, $headers, $runtime);
    }

    /**
     * Expands the disk size for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can expand the disk size only for StarRocks instances of Standard Edition.
     * *   You can expand the disk size only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you expand the disk size, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk size.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk size before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskSizeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskSizeResponse
     *
     * @param ModifyDiskSizeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskSizeResponse
     */
    public function modifyDiskSizeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskSize',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskSize',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskSizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Expands the disk size for a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can expand the disk size only for StarRocks instances of Standard Edition.
     * *   You can expand the disk size only for warehouses of the standard specifications.
     * *   The instance must be in the Running state.
     * After you expand the disk size, the billing of disks has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged for the disk based on the new disk size.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the disk size before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyDiskSizeRequest
     *
     * @returns ModifyDiskSizeResponse
     *
     * @param ModifyDiskSizeRequest $request
     *
     * @return ModifyDiskSizeResponse
     */
    public function modifyDiskSize($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskSizeWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组的节点磁盘类型.
     *
     * @param request - ModifyDiskTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskTypeResponse
     *
     * @param ModifyDiskTypeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskTypeResponse
     */
    public function modifyDiskTypeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->targetDiskType) {
            @$query['TargetDiskType'] = $request->targetDiskType;
        }

        if (null !== $request->targetPerformanceLevel) {
            @$query['TargetPerformanceLevel'] = $request->targetPerformanceLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskType',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyDiskType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyDiskTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组的节点磁盘类型.
     *
     * @param request - ModifyDiskTypeRequest
     *
     * @returns ModifyDiskTypeResponse
     *
     * @param ModifyDiskTypeRequest $request
     *
     * @return ModifyDiskTypeResponse
     */
    public function modifyDiskType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiskTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改/etc/hosts.
     *
     * @param request - ModifyHostAliasRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHostAliasResponse
     *
     * @param ModifyHostAliasRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyHostAliasResponse
     */
    public function modifyHostAliasWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->hostAliases) {
            @$body['hostAliases'] = $request->hostAliases;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyHostAlias',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/network/modifyHostAlias',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyHostAliasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改/etc/hosts.
     *
     * @param request - ModifyHostAliasRequest
     *
     * @returns ModifyHostAliasResponse
     *
     * @param ModifyHostAliasRequest $request
     *
     * @return ModifyHostAliasResponse
     */
    public function modifyHostAlias($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyHostAliasWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改实例配置.
     *
     * @param request - ModifyInstanceConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addConfigList) {
            @$query['AddConfigList'] = $request->addConfigList;
        }

        if (null !== $request->configList) {
            @$query['ConfigList'] = $request->configList;
        }

        if (null !== $request->deleteConfigList) {
            @$query['DeleteConfigList'] = $request->deleteConfigList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        $body = [];
        if (null !== $request->configsToAdd) {
            @$body['configsToAdd'] = $request->configsToAdd;
        }

        if (null !== $request->configsToDelete) {
            @$body['configsToDelete'] = $request->configsToDelete;
        }

        if (null !== $request->configsToUpdate) {
            @$body['configsToUpdate'] = $request->configsToUpdate;
        }

        if (null !== $request->fastMode) {
            @$body['fastMode'] = $request->fastMode;
        }

        if (null !== $request->restart) {
            @$body['restart'] = $request->restart;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceConfig',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/modifyInstanceConfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例配置.
     *
     * @param request - ModifyInstanceConfigRequest
     *
     * @returns ModifyInstanceConfigResponse
     *
     * @param ModifyInstanceConfigRequest $request
     *
     * @return ModifyInstanceConfigResponse
     */
    public function modifyInstanceConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 配置变更预检查，返回此次变更需要重启的计算组ID.
     *
     * @param request - ModifyInstanceConfigPreCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceConfigPreCheckResponse
     *
     * @param ModifyInstanceConfigPreCheckRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyInstanceConfigPreCheckResponse
     */
    public function modifyInstanceConfigPreCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->configsToAdd) {
            @$body['configsToAdd'] = $request->configsToAdd;
        }

        if (null !== $request->configsToDelete) {
            @$body['configsToDelete'] = $request->configsToDelete;
        }

        if (null !== $request->configsToUpdate) {
            @$body['configsToUpdate'] = $request->configsToUpdate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceConfigPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/modifyInstanceConfigPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceConfigPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 配置变更预检查，返回此次变更需要重启的计算组ID.
     *
     * @param request - ModifyInstanceConfigPreCheckRequest
     *
     * @returns ModifyInstanceConfigPreCheckResponse
     *
     * @param ModifyInstanceConfigPreCheckRequest $request
     *
     * @return ModifyInstanceConfigPreCheckResponse
     */
    public function modifyInstanceConfigPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceConfigPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改Starrocks实例的可维护时间.
     *
     * @param request - ModifyMaintainableTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyMaintainableTimeResponse
     *
     * @param ModifyMaintainableTimeRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyMaintainableTimeResponse
     */
    public function modifyMaintainableTimeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maintainableTimePeriod) {
            @$query['MaintainableTimePeriod'] = $request->maintainableTimePeriod;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyMaintainableTime',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/modifyMaintainableTime',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyMaintainableTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Starrocks实例的可维护时间.
     *
     * @param request - ModifyMaintainableTimeRequest
     *
     * @returns ModifyMaintainableTimeResponse
     *
     * @param ModifyMaintainableTimeRequest $request
     *
     * @return ModifyMaintainableTimeResponse
     */
    public function modifyMaintainableTime($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyMaintainableTimeWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can modify the number of nodes in a warehouse of only StarRocks instances of Standard Edition.
     * *   The instance must be in the Running state.
     * *   The number of frontend nodes (FEs) cannot be an even number, and you cannot reduce the number of FE nodes.
     * After you modify the number of nodes in a warehouse, the billing of nodes has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of nodes.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of nodes before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyNodeNumberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeNumberResponse
     *
     * @param ModifyNodeNumberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyNodeNumberResponse
     */
    public function modifyNodeNumberWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->parallelism) {
            @$query['Parallelism'] = $request->parallelism;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeNumber',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyNodeNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and [billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of EMR Serverless StarRocks instances. Before you call this operation, take note of the following items:
     * *   You can modify the number of nodes in a warehouse of only StarRocks instances of Standard Edition.
     * *   The instance must be in the Running state.
     * *   The number of frontend nodes (FEs) cannot be an even number, and you cannot reduce the number of FE nodes.
     * After you modify the number of nodes in a warehouse, the billing of nodes has the following changes:
     * *   Pay-as-you-go StarRocks instances: You are charged based on the number of nodes.
     * *   Subscription StarRocks instances: You are charged additionally based on the price difference between the number of nodes before and after the change and the remaining days of the billing cycle. The billing cycle starts from 00:00 the next day until the end of the subscription period.
     *
     * @param request - ModifyNodeNumberRequest
     *
     * @returns ModifyNodeNumberResponse
     *
     * @param ModifyNodeNumberRequest $request
     *
     * @return ModifyNodeNumberResponse
     */
    public function modifyNodeNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a precheck before you modify the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - ModifyNodeNumberPreCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNodeNumberPreCheckResponse
     *
     * @param ModifyNodeNumberPreCheckRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyNodeNumberPreCheckResponse
     */
    public function modifyNodeNumberPreCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNodeNumberPreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifyNodeNumberPreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyNodeNumberPreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a precheck before you modify the number of nodes in a warehouse of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - ModifyNodeNumberPreCheckRequest
     *
     * @returns ModifyNodeNumberPreCheckResponse
     *
     * @param ModifyNodeNumberPreCheckRequest $request
     *
     * @return ModifyNodeNumberPreCheckResponse
     */
    public function modifyNodeNumberPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyNodeNumberPreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改弹性伸缩规则.
     *
     * @param request - ModifyScalingRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScalingRuleResponse
     *
     * @param ModifyScalingRuleRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->newTriggerType) {
            @$query['NewTriggerType'] = $request->newTriggerType;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->oldTriggerType) {
            @$query['OldTriggerType'] = $request->oldTriggerType;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->scalingRuleId) {
            @$query['ScalingRuleId'] = $request->scalingRuleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScalingRule',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/scalingRule/modifyScalingRule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改弹性伸缩规则.
     *
     * @param request - ModifyScalingRuleRequest
     *
     * @returns ModifyScalingRuleResponse
     *
     * @param ModifyScalingRuleRequest $request
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScalingRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组的节点规格类型.
     *
     * @param request - ModifySpecTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySpecTypeResponse
     *
     * @param ModifySpecTypeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ModifySpecTypeResponse
     */
    public function modifySpecTypeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->targetSpecType) {
            @$query['TargetSpecType'] = $request->targetSpecType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySpecType',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifySpecType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifySpecTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组的节点规格类型.
     *
     * @param request - ModifySpecTypeRequest
     *
     * @returns ModifySpecTypeResponse
     *
     * @param ModifySpecTypeRequest $request
     *
     * @return ModifySpecTypeResponse
     */
    public function modifySpecType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySpecTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组中节点规格类型预检查.
     *
     * @param request - ModifySpecTypePreCheckRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySpecTypePreCheckResponse
     *
     * @param ModifySpecTypePreCheckRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ModifySpecTypePreCheckResponse
     */
    public function modifySpecTypePreCheckWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->targetSpecType) {
            @$query['TargetSpecType'] = $request->targetSpecType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySpecTypePreCheck',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/resourceChange/modifySpecTypePreCheck',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifySpecTypePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组中节点规格类型预检查.
     *
     * @param request - ModifySpecTypePreCheckRequest
     *
     * @returns ModifySpecTypePreCheckResponse
     *
     * @param ModifySpecTypePreCheckRequest $request
     *
     * @return ModifySpecTypePreCheckResponse
     */
    public function modifySpecTypePreCheck($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySpecTypePreCheckWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改 starrocks 用户的密码
     *
     * @param request - ModifyUserPasswordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserPasswordResponse
     *
     * @param ModifyUserPasswordRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyUserPasswordResponse
     */
    public function modifyUserPasswordWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserPassword',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/password/modify',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ModifyUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改 starrocks 用户的密码
     *
     * @param request - ModifyUserPasswordRequest
     *
     * @returns ModifyUserPasswordResponse
     *
     * @param ModifyUserPasswordRequest $request
     *
     * @return ModifyUserPasswordResponse
     */
    public function modifyUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyUserPasswordWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询开启Multi AZ的价格
     *
     * @param request - QueryEnableMultiAzPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryEnableMultiAzPriceResponse
     *
     * @param QueryEnableMultiAzPriceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryEnableMultiAzPriceResponse
     */
    public function queryEnableMultiAzPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->observers) {
            @$body['observers'] = $request->observers;
        }

        if (null !== $request->promotionOptionNo) {
            @$body['promotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryEnableMultiAzPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/enableMultiAz',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryEnableMultiAzPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开启Multi AZ的价格
     *
     * @param request - QueryEnableMultiAzPriceRequest
     *
     * @returns QueryEnableMultiAzPriceResponse
     *
     * @param QueryEnableMultiAzPriceRequest $request
     *
     * @return QueryEnableMultiAzPriceResponse
     */
    public function queryEnableMultiAzPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryEnableMultiAzPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询小版本号.
     *
     * @param request - QueryMinorVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMinorVersionResponse
     *
     * @param QueryMinorVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryMinorVersionResponse
     */
    public function queryMinorVersionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMinorVersion',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/queryAppDefineVersion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryMinorVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询小版本号.
     *
     * @param request - QueryMinorVersionRequest
     *
     * @returns QueryMinorVersionResponse
     *
     * @param QueryMinorVersionRequest $request
     *
     * @return QueryMinorVersionResponse
     */
    public function queryMinorVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryMinorVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks新购询价接口.
     *
     * @param request - QueryModifyChargeTypePriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyChargeTypePriceResponse
     *
     * @param QueryModifyChargeTypePriceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryModifyChargeTypePriceResponse
     */
    public function queryModifyChargeTypePriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->billingInstanceIds) {
            @$query['BillingInstanceIds'] = $request->billingInstanceIds;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyChargeTypePrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/buy/query_modify_charge_type_price',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyChargeTypePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks新购询价接口.
     *
     * @param request - QueryModifyChargeTypePriceRequest
     *
     * @returns QueryModifyChargeTypePriceResponse
     *
     * @param QueryModifyChargeTypePriceRequest $request
     *
     * @return QueryModifyChargeTypePriceResponse
     */
    public function queryModifyChargeTypePrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyChargeTypePriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改节点组节点Cu询价.
     *
     * @param request - QueryModifyCuPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyCuPriceResponse
     *
     * @param QueryModifyCuPriceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryModifyCuPriceResponse
     */
    public function queryModifyCuPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyCuPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifyCu',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyCuPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改节点组节点Cu询价.
     *
     * @param request - QueryModifyCuPriceRequest
     *
     * @returns QueryModifyCuPriceResponse
     *
     * @param QueryModifyCuPriceRequest $request
     *
     * @return QueryModifyCuPriceResponse
     */
    public function queryModifyCuPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyCuPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组节点磁盘数量询价.
     *
     * @param request - QueryModifyDiskNumberPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyDiskNumberPriceResponse
     *
     * @param QueryModifyDiskNumberPriceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryModifyDiskNumberPriceResponse
     */
    public function queryModifyDiskNumberPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyDiskNumberPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifyDiskNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyDiskNumberPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组节点磁盘数量询价.
     *
     * @param request - QueryModifyDiskNumberPriceRequest
     *
     * @returns QueryModifyDiskNumberPriceResponse
     *
     * @param QueryModifyDiskNumberPriceRequest $request
     *
     * @return QueryModifyDiskNumberPriceResponse
     */
    public function queryModifyDiskNumberPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyDiskNumberPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组节点磁盘性能级别询价.
     *
     * @param request - QueryModifyDiskPerformanceLevelPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyDiskPerformanceLevelPriceResponse
     *
     * @param QueryModifyDiskPerformanceLevelPriceRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryModifyDiskPerformanceLevelPriceResponse
     */
    public function queryModifyDiskPerformanceLevelPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyDiskPerformanceLevelPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifyDiskPerformanceLevel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyDiskPerformanceLevelPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组节点磁盘性能级别询价.
     *
     * @param request - QueryModifyDiskPerformanceLevelPriceRequest
     *
     * @returns QueryModifyDiskPerformanceLevelPriceResponse
     *
     * @param QueryModifyDiskPerformanceLevelPriceRequest $request
     *
     * @return QueryModifyDiskPerformanceLevelPriceResponse
     */
    public function queryModifyDiskPerformanceLevelPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyDiskPerformanceLevelPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组节点单盘存储大小询价.
     *
     * @param request - QueryModifyDiskSizePriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyDiskSizePriceResponse
     *
     * @param QueryModifyDiskSizePriceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifyDiskSizePriceResponse
     */
    public function queryModifyDiskSizePriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyDiskSizePrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifyDiskSize',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyDiskSizePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组节点单盘存储大小询价.
     *
     * @param request - QueryModifyDiskSizePriceRequest
     *
     * @returns QueryModifyDiskSizePriceResponse
     *
     * @param QueryModifyDiskSizePriceRequest $request
     *
     * @return QueryModifyDiskSizePriceResponse
     */
    public function queryModifyDiskSizePrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyDiskSizePriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改计算组节点磁盘类型询价.
     *
     * @param request - QueryModifyDiskTypePriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyDiskTypePriceResponse
     *
     * @param QueryModifyDiskTypePriceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifyDiskTypePriceResponse
     */
    public function queryModifyDiskTypePriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->targetDiskType) {
            @$query['TargetDiskType'] = $request->targetDiskType;
        }

        if (null !== $request->targetPerformanceLevel) {
            @$query['TargetPerformanceLevel'] = $request->targetPerformanceLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyDiskTypePrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifyDiskType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyDiskTypePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改计算组节点磁盘类型询价.
     *
     * @param request - QueryModifyDiskTypePriceRequest
     *
     * @returns QueryModifyDiskTypePriceResponse
     *
     * @param QueryModifyDiskTypePriceRequest $request
     *
     * @return QueryModifyDiskTypePriceResponse
     */
    public function queryModifyDiskTypePrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyDiskTypePriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改节点组节点数量询价.
     *
     * @param request - QueryModifyNodeNumberPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifyNodeNumberPriceResponse
     *
     * @param QueryModifyNodeNumberPriceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryModifyNodeNumberPriceResponse
     */
    public function queryModifyNodeNumberPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifyNodeNumberPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifyNodeNumber',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifyNodeNumberPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改节点组节点数量询价.
     *
     * @param request - QueryModifyNodeNumberPriceRequest
     *
     * @returns QueryModifyNodeNumberPriceResponse
     *
     * @param QueryModifyNodeNumberPriceRequest $request
     *
     * @return QueryModifyNodeNumberPriceResponse
     */
    public function queryModifyNodeNumberPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifyNodeNumberPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改节点组规格类型询价.
     *
     * @param request - QueryModifySpecTypePriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryModifySpecTypePriceResponse
     *
     * @param QueryModifySpecTypePriceRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryModifySpecTypePriceResponse
     */
    public function queryModifySpecTypePriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->targetSpecType) {
            @$query['TargetSpecType'] = $request->targetSpecType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryModifySpecTypePrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/priceInquiry/modifySpecType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryModifySpecTypePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改节点组规格类型询价.
     *
     * @param request - QueryModifySpecTypePriceRequest
     *
     * @returns QueryModifySpecTypePriceResponse
     *
     * @param QueryModifySpecTypePriceRequest $request
     *
     * @return QueryModifySpecTypePriceResponse
     */
    public function queryModifySpecTypePrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryModifySpecTypePriceWithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks新购询价接口.
     *
     * @param request - QueryPriceV1Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPriceV1Response
     *
     * @param QueryPriceV1Request $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryPriceV1Response
     */
    public function queryPriceV1WithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentNodeGroup) {
            @$body['AgentNodeGroup'] = $request->agentNodeGroup;
        }

        if (null !== $request->backendNodeGroups) {
            @$body['BackendNodeGroups'] = $request->backendNodeGroups;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->frontendNodeGroups) {
            @$body['FrontendNodeGroups'] = $request->frontendNodeGroups;
        }

        if (null !== $request->observerNodeGroups) {
            @$body['ObserverNodeGroups'] = $request->observerNodeGroups;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->payType) {
            @$body['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$body['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->runMode) {
            @$body['RunMode'] = $request->runMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPriceV1',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/price/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryPriceV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks新购询价接口.
     *
     * @param request - QueryPriceV1Request
     *
     * @returns QueryPriceV1Response
     *
     * @param QueryPriceV1Request $request
     *
     * @return QueryPriceV1Response
     */
    public function queryPriceV1($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryPriceV1WithOptions($request, $headers, $runtime);
    }

    /**
     * StarRocks退订包年包月计费实例询价.
     *
     * @param request - QueryRefundPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRefundPriceResponse
     *
     * @param QueryRefundPriceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRefundPriceResponse
     */
    public function queryRefundPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingInstanceIds) {
            @$query['billingInstanceIds'] = $request->billingInstanceIds;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRefundPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/buy/queryRefundPrice',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryRefundPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * StarRocks退订包年包月计费实例询价.
     *
     * @param request - QueryRefundPriceRequest
     *
     * @returns QueryRefundPriceResponse
     *
     * @param QueryRefundPriceRequest $request
     *
     * @return QueryRefundPriceResponse
     */
    public function queryRefundPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRefundPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询 StarRocks 计费实例的续费价格
     *
     * @param request - QueryRenewPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRenewPriceResponse
     *
     * @param QueryRenewPriceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryRenewPriceResponse
     */
    public function queryRenewPriceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingInstanceIds) {
            @$query['BillingInstanceIds'] = $request->billingInstanceIds;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRenewPrice',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/price/renew',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryRenewPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 StarRocks 计费实例的续费价格
     *
     * @param request - QueryRenewPriceRequest
     *
     * @returns QueryRenewPriceResponse
     *
     * @param QueryRenewPriceRequest $request
     *
     * @return QueryRenewPriceResponse
     */
    public function queryRenewPrice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRenewPriceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询计算组/集群的未支付订单.
     *
     * @param request - QueryUnpaidOrderRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUnpaidOrderResponse
     *
     * @param QueryUnpaidOrderRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryUnpaidOrderResponse
     */
    public function queryUnpaidOrderWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingInstanceId) {
            @$query['BillingInstanceId'] = $request->billingInstanceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUnpaidOrder',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/order/queryUnpaidOrder',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryUnpaidOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询计算组/集群的未支付订单.
     *
     * @param request - QueryUnpaidOrderRequest
     *
     * @returns QueryUnpaidOrderResponse
     *
     * @param QueryUnpaidOrderRequest $request
     *
     * @return QueryUnpaidOrderResponse
     */
    public function queryUnpaidOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUnpaidOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the versions of an E-MapReduce (EMR) Serverless StarRocks instance that the versions that you can upgrade to. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. You can call this operation to query the minor versions or major versions that the versions that you can upgrade to.
     *
     * @param request - QueryUpgradableVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUpgradableVersionsResponse
     *
     * @param QueryUpgradableVersionsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryUpgradableVersionsResponse
     */
    public function queryUpgradableVersionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minor) {
            @$query['Minor'] = $request->minor;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryUpgradableVersions',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/queryUpgradableVersions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryUpgradableVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of an E-MapReduce (EMR) Serverless StarRocks instance that the versions that you can upgrade to. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. You can call this operation to query the minor versions or major versions that the versions that you can upgrade to.
     *
     * @param request - QueryUpgradableVersionsRequest
     *
     * @returns QueryUpgradableVersionsResponse
     *
     * @param QueryUpgradableVersionsRequest $request
     *
     * @return QueryUpgradableVersionsResponse
     */
    public function queryUpgradableVersions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryUpgradableVersionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 处理集群事件.
     *
     * @param request - RebootECSRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootECSResponse
     *
     * @param RebootECSRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return RebootECSResponse
     */
    public function rebootECSWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->rebootTime) {
            @$query['RebootTime'] = $request->rebootTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootECS',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/event/rebootEcs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RebootECSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 处理集群事件.
     *
     * @param request - RebootECSRequest
     *
     * @returns RebootECSResponse
     *
     * @param RebootECSRequest $request
     *
     * @return RebootECSResponse
     */
    public function rebootECS($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebootECSWithOptions($request, $headers, $runtime);
    }

    /**
     * Releases a pay-as-you-go E-MapReduce (EMR) Serverless StarRocks instance. To unsubscribe from a subscription instance, go to the Unsubscribe page of the Expenses and Costs console.
     *
     * @remarks
     * *
     * **Warning:** After an instance is released, all physical resources used by the instance are recycled. Relevant data is erased and cannot be restored.
     *
     * @param request - ReleaseInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/release',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go E-MapReduce (EMR) Serverless StarRocks instance. To unsubscribe from a subscription instance, go to the Unsubscribe page of the Expenses and Costs console.
     *
     * @remarks
     * *
     * **Warning:** After an instance is released, all physical resources used by the instance are recycled. Relevant data is erased and cannot be restored.
     *
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 续费实例.
     *
     * @param request - RenewInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingInstanceIds) {
            @$query['BillingInstanceIds'] = $request->billingInstanceIds;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->promotionOptionNo) {
            @$query['PromotionOptionNo'] = $request->promotionOptionNo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/order/renew_instance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 续费实例.
     *
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * This operation is an asynchronous operation. After you call this operation to restart a StarRocks instance, the operation sets the status of the instance to Restarting and begins the restart process. When the status of the instance changes to Running, the instance is restarted.
     *
     * @param request - RestartInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/restartCluster',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @remarks
     * This operation is an asynchronous operation. After you call this operation to restart a StarRocks instance, the operation sets the status of the instance to Restarting and begins the restart process. When the status of the instance changes to Running, the instance is restarted.
     *
     * @param request - RestartInstanceRequest
     *
     * @returns RestartInstanceResponse
     *
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 重启指定的node group.
     *
     * @param request - RestartNodeGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartNodeGroupResponse
     *
     * @param RestartNodeGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RestartNodeGroupResponse
     */
    public function restartNodeGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartNodeGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/nodegroup/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启指定的node group.
     *
     * @param request - RestartNodeGroupRequest
     *
     * @returns RestartNodeGroupResponse
     *
     * @param RestartNodeGroupRequest $request
     *
     * @return RestartNodeGroupResponse
     */
    public function restartNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartNodeGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 重启集群中的节点.
     *
     * @param request - RestartNodesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartNodesResponse
     *
     * @param RestartNodesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RestartNodesResponse
     */
    public function restartNodesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->restartNodeGroups) {
            @$body['RestartNodeGroups'] = $request->restartNodeGroups;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartNodes',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/restart/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启集群中的节点.
     *
     * @param request - RestartNodesRequest
     *
     * @returns RestartNodesResponse
     *
     * @param RestartNodesRequest $request
     *
     * @return RestartNodesResponse
     */
    public function restartNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * 从备份中恢复实例.
     *
     * @param request - RestoreInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adminPassword) {
            @$body['AdminPassword'] = $request->adminPassword;
        }

        if (null !== $request->autoRenew) {
            @$body['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->backupTaskId) {
            @$body['BackupTaskId'] = $request->backupTaskId;
        }

        if (null !== $request->duration) {
            @$body['Duration'] = $request->duration;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->payType) {
            @$body['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$body['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->vSwitches) {
            @$body['VSwitches'] = $request->vSwitches;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestoreInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/restore/restoreInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从备份中恢复实例.
     *
     * @param request - RestoreInstanceRequest
     *
     * @returns RestoreInstanceResponse
     *
     * @param RestoreInstanceRequest $request
     *
     * @return RestoreInstanceResponse
     */
    public function restoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restoreInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 该接口用于恢复来自openlake自动停机的实例。
     *
     * @param request - ResumeInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeInstance',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/lifecycle/resumeInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 该接口用于恢复来自openlake自动停机的实例。
     *
     * @param request - ResumeInstanceRequest
     *
     * @returns ResumeInstanceResponse
     *
     * @param ResumeInstanceRequest $request
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 回滚正在进行中的配置修改.
     *
     * @param request - RollbackConfigModificationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackConfigModificationResponse
     *
     * @param RollbackConfigModificationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return RollbackConfigModificationResponse
     */
    public function rollbackConfigModificationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configHistoryId) {
            @$query['ConfigHistoryId'] = $request->configHistoryId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->restart) {
            @$query['Restart'] = $request->restart;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackConfigModification',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/config/rollbackConfigModification',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RollbackConfigModificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 回滚正在进行中的配置修改.
     *
     * @param request - RollbackConfigModificationRequest
     *
     * @returns RollbackConfigModificationResponse
     *
     * @param RollbackConfigModificationRequest $request
     *
     * @return RollbackConfigModificationResponse
     */
    public function rollbackConfigModification($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackConfigModificationWithOptions($request, $headers, $runtime);
    }

    /**
     * 切换主备可用区.
     *
     * @param request - SwitchActiveStandbyZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchActiveStandbyZonesResponse
     *
     * @param SwitchActiveStandbyZonesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SwitchActiveStandbyZonesResponse
     */
    public function switchActiveStandbyZonesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->targetZoneId) {
            @$query['TargetZoneId'] = $request->targetZoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchActiveStandbyZones',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/recovery/switchZones',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SwitchActiveStandbyZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 切换主备可用区.
     *
     * @param request - SwitchActiveStandbyZonesRequest
     *
     * @returns SwitchActiveStandbyZonesResponse
     *
     * @param SwitchActiveStandbyZonesRequest $request
     *
     * @return SwitchActiveStandbyZonesResponse
     */
    public function switchActiveStandbyZones($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->switchActiveStandbyZonesWithOptions($request, $headers, $runtime);
    }

    /**
     * Adds a tag to a resource.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a tag to a resource.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 开启/关闭StarRocks实例的小版本自动更新.
     *
     * @param request - ToggleAutoMinorVersionUpgradeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ToggleAutoMinorVersionUpgradeResponse
     *
     * @param ToggleAutoMinorVersionUpgradeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ToggleAutoMinorVersionUpgradeResponse
     */
    public function toggleAutoMinorVersionUpgradeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoUpgrade) {
            @$query['AutoUpgrade'] = $request->autoUpgrade;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ToggleAutoMinorVersionUpgrade',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/toggleAutoMinorVersionUpgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ToggleAutoMinorVersionUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启/关闭StarRocks实例的小版本自动更新.
     *
     * @param request - ToggleAutoMinorVersionUpgradeRequest
     *
     * @returns ToggleAutoMinorVersionUpgradeResponse
     *
     * @param ToggleAutoMinorVersionUpgradeRequest $request
     *
     * @return ToggleAutoMinorVersionUpgradeResponse
     */
    public function toggleAutoMinorVersionUpgrade($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->toggleAutoMinorVersionUpgradeWithOptions($request, $headers, $runtime);
    }

    /**
     * 公网SLB开关.
     *
     * @param request - TogglePublicSlbRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TogglePublicSlbResponse
     *
     * @param TogglePublicSlbRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return TogglePublicSlbResponse
     */
    public function togglePublicSlbWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enablePublicSlb) {
            @$query['EnablePublicSlb'] = $request->enablePublicSlb;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TogglePublicSlb',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/togglePublicSlb',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TogglePublicSlbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 公网SLB开关.
     *
     * @param request - TogglePublicSlbRequest
     *
     * @returns TogglePublicSlbResponse
     *
     * @param TogglePublicSlbRequest $request
     *
     * @return TogglePublicSlbResponse
     */
    public function togglePublicSlb($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->togglePublicSlbWithOptions($request, $headers, $runtime);
    }

    /**
     * Removes tags from specified resources.
     *
     * @param tmpReq - UnTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UnTagResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceId) {
            $request->resourceIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'ResourceId', 'json');
        }

        if (null !== $tmpReq->tagKey) {
            $request->tagKeyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagKey, 'TagKey', 'json');
        }

        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIdShrink) {
            @$query['ResourceId'] = $request->resourceIdShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeyShrink) {
            @$query['TagKey'] = $request->tagKeyShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from specified resources.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新备份任务描述.
     *
     * @param request - UpdateBackupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBackupResponse
     *
     * @param UpdateBackupRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateBackupResponse
     */
    public function updateBackupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->backupTaskId) {
            @$body['backupTaskId'] = $request->backupTaskId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBackup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backup/manage/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新备份任务描述.
     *
     * @param request - UpdateBackupRequest
     *
     * @returns UpdateBackupResponse
     *
     * @param UpdateBackupRequest $request
     *
     * @return UpdateBackupResponse
     */
    public function updateBackup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBackupWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新备份策略.
     *
     * @param request - UpdateBackupPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBackupPolicyResponse
     *
     * @param UpdateBackupPolicyRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateBackupPolicyResponse
     */
    public function updateBackupPolicyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expireDays) {
            @$body['ExpireDays'] = $request->expireDays;
        }

        if (null !== $request->hour) {
            @$body['Hour'] = $request->hour;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minute) {
            @$body['Minute'] = $request->minute;
        }

        if (null !== $request->policyId) {
            @$body['PolicyId'] = $request->policyId;
        }

        if (null !== $request->recurrenceValues) {
            @$body['RecurrenceValues'] = $request->recurrenceValues;
        }

        if (null !== $request->timeoutSeconds) {
            @$body['TimeoutSeconds'] = $request->timeoutSeconds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBackupPolicy',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/backupRestore/policy/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBackupPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新备份策略.
     *
     * @param request - UpdateBackupPolicyRequest
     *
     * @returns UpdateBackupPolicyResponse
     *
     * @param UpdateBackupPolicyRequest $request
     *
     * @return UpdateBackupPolicyResponse
     */
    public function updateBackupPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBackupPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新网关.
     *
     * @param request - UpdateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayResponse
     *
     * @param UpdateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateGatewayResponse
     */
    public function updateGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feNodeNumber) {
            @$query['FeNodeNumber'] = $request->feNodeNumber;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayName) {
            @$query['GatewayName'] = $request->gatewayName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateGateway',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/gateway/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新网关.
     *
     * @param request - UpdateGatewayRequest
     *
     * @returns UpdateGatewayResponse
     *
     * @param UpdateGatewayRequest $request
     *
     * @return UpdateGatewayResponse
     */
    public function updateGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新白名单分组中的CIDR.
     *
     * @param request - UpdateInnerIpWhitelistGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInnerIpWhitelistGroupResponse
     *
     * @param UpdateInnerIpWhitelistGroupRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateInnerIpWhitelistGroupResponse
     */
    public function updateInnerIpWhitelistGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cidrIpList) {
            @$body['CidrIpList'] = $request->cidrIpList;
        }

        if (null !== $request->innerIpWhitelistGroupId) {
            @$body['InnerIpWhitelistGroupId'] = $request->innerIpWhitelistGroupId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInnerIpWhitelistGroup',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/securityGroup/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInnerIpWhitelistGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新白名单分组中的CIDR.
     *
     * @param request - UpdateInnerIpWhitelistGroupRequest
     *
     * @returns UpdateInnerIpWhitelistGroupResponse
     *
     * @param UpdateInnerIpWhitelistGroupRequest $request
     *
     * @return UpdateInnerIpWhitelistGroupResponse
     */
    public function updateInnerIpWhitelistGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInnerIpWhitelistGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Modifies the name of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - UpdateInstanceNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceName',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/cluster/update_name',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of an E-MapReduce (EMR) Serverless StarRocks instance.
     *
     * @param request - UpdateInstanceNameRequest
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNameWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新节点组描述信息.
     *
     * @param request - UpdateNodeGroupDescriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNodeGroupDescriptionResponse
     *
     * @param UpdateNodeGroupDescriptionRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateNodeGroupDescriptionResponse
     */
    public function updateNodeGroupDescriptionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->xAcsRamAuthContext) {
            @$query['X-Acs-Ram-Auth-Context'] = $request->xAcsRamAuthContext;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNodeGroupDescription',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/nodegroup/updateDescription',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateNodeGroupDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新节点组描述信息.
     *
     * @param request - UpdateNodeGroupDescriptionRequest
     *
     * @returns UpdateNodeGroupDescriptionResponse
     *
     * @param UpdateNodeGroupDescriptionRequest $request
     *
     * @return UpdateNodeGroupDescriptionResponse
     */
    public function updateNodeGroupDescription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateNodeGroupDescriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * 该接口用于开通/关闭 FE/BE的公网SLB。
     *
     * @param request - UpdatePublicNetworkStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePublicNetworkStatusResponse
     *
     * @param UpdatePublicNetworkStatusRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePublicNetworkStatusResponse
     */
    public function updatePublicNetworkStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->componentType) {
            @$query['ComponentType'] = $request->componentType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->publicNetworkEnabled) {
            @$query['PublicNetworkEnabled'] = $request->publicNetworkEnabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePublicNetworkStatus',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/network/updatePublicNetworkStatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePublicNetworkStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 该接口用于开通/关闭 FE/BE的公网SLB。
     *
     * @param request - UpdatePublicNetworkStatusRequest
     *
     * @returns UpdatePublicNetworkStatusResponse
     *
     * @param UpdatePublicNetworkStatusRequest $request
     *
     * @return UpdatePublicNetworkStatusResponse
     */
    public function updatePublicNetworkStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePublicNetworkStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * Upgrades the version of an E-MapReduce (EMR) Serverless StarRocks instance. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. This operation can be used to upgrade the minor version or major version of a StarRocks instance. You can call the QueryUpgradableVersions operation to query the versions that you can upgrade to.
     *
     * @remarks
     * The instance must be in the Running state when you call this operation.
     *
     * @param request - UpgradeVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeVersionResponse
     *
     * @param UpgradeVersionRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpgradeVersionResponse
     */
    public function upgradeVersionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fastMode) {
            @$query['FastMode'] = $request->fastMode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->minor) {
            @$query['Minor'] = $request->minor;
        }

        if (null !== $request->targetVersion) {
            @$query['TargetVersion'] = $request->targetVersion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeVersion',
            'version' => '2022-10-19',
            'protocol' => 'HTTPS',
            'pathname' => '/webapi/starrocks/upgradeVersion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades the version of an E-MapReduce (EMR) Serverless StarRocks instance. The versions of a StarRocks instance include the major version and minor version. You can view the major version and minor version of a StarRocks instance in the Version Information section of the Instance Details tab in the EMR console. This operation can be used to upgrade the minor version or major version of a StarRocks instance. You can call the QueryUpgradableVersions operation to query the versions that you can upgrade to.
     *
     * @remarks
     * The instance must be in the Running state when you call this operation.
     *
     * @param request - UpgradeVersionRequest
     *
     * @returns UpgradeVersionResponse
     *
     * @param UpgradeVersionRequest $request
     *
     * @return UpgradeVersionResponse
     */
    public function upgradeVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeVersionWithOptions($request, $headers, $runtime);
    }
}
