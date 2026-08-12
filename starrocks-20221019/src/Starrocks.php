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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-southeast-1' => 'starrocks.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'starrocks.ap-southeast-5.aliyuncs.com',
            'cn-beijing' => 'starrocks.cn-beijing.aliyuncs.com',
            'cn-hangzhou' => 'starrocks.cn-hangzhou.aliyuncs.com',
            'cn-hongkong' => 'starrocks.cn-hongkong.aliyuncs.com',
            'cn-qingdao' => 'starrocks.cn-qingdao.aliyuncs.com',
            'cn-shanghai' => 'starrocks.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'starrocks.cn-shenzhen.aliyuncs.com',
            'cn-wulanchabu' => 'starrocks.cn-wulanchabu.aliyuncs.com',
            'cn-zhangjiakou' => 'starrocks.cn-zhangjiakou.aliyuncs.com',
            'us-west-1' => 'starrocks.us-west-1.aliyuncs.com',
            'us-east-1' => 'starrocks.us-east-1.aliyuncs.com',
            'eu-central-1' => 'starrocks.eu-central-1.aliyuncs.com',
        ];
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
     * Adds a backup policy.
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
     * Adds a backup policy.
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
     * Creates a gateway.
     *
     * @remarks
     * The AddGateway operation requires software stack version 1.7.6 or later and at least three front-end (FE) nodes.
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
     * Creates a gateway.
     *
     * @remarks
     * The AddGateway operation requires software stack version 1.7.6 or later and at least three front-end (FE) nodes.
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
     * This operation changes the resource group of a Serverless StarRocks instance.
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
     * This operation changes the resource group of a Serverless StarRocks instance.
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
     * Check the inventory of resources.
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
     * Check the inventory of resources.
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
     * Creates an Agent compute group.
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
     * Creates an Agent compute group.
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
     * Creates a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing method and <props="china">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
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

        if (null !== $request->enableAiFunction) {
            @$body['EnableAiFunction'] = $request->enableAiFunction;
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
     * Creates a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing method and <props="china">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
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
     * Create a scaling rule.
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
     * Create a scaling rule.
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
     * This operation creates the AliyunServiceRoleForEMRStarRocks role.
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
     * This operation creates the AliyunServiceRoleForEMRStarRocks role.
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
     * Deletes a data backup.
     *
     * @remarks
     * Deletes a data backup.
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
     * Deletes a data backup.
     *
     * @remarks
     * Deletes a data backup.
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
     * Deletes a backup policy.
     *
     * @remarks
     * Deletes a backup policy.
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
     * Deletes a backup policy.
     *
     * @remarks
     * Deletes a backup policy.
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
     * Deleting a gateway.
     *
     * @remarks
     * Deletes a gateway group. After the gateway group is deleted, its FE nodes are automatically assigned to the default gateway group.
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
     * Deleting a gateway.
     *
     * @remarks
     * Deletes a gateway group. After the gateway group is deleted, its FE nodes are automatically assigned to the default gateway group.
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
     * Deletes an internal network whitelist group.
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
     * Deletes an internal network whitelist group.
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
     * Deletes a scaling rule.
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
     * Deletes a scaling rule.
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
     * Queries the available zones in a region.
     *
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
     * Queries the available zones in a region.
     *
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
     * Retrieve details of backup policies.
     *
     * @remarks
     * Retrieve details of backup policies.
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
     * Retrieve details of backup policies.
     *
     * @remarks
     * Retrieve details of backup policies.
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
     * Obtain backup details.
     *
     * @remarks
     * This is an asynchronous interface. Instance restarts are not immediate. After a successful call, the instance first enters the restarting state. The instance is successfully restarted when its status returns to running.
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
     * Obtain backup details.
     *
     * @remarks
     * This is an asynchronous interface. Instance restarts are not immediate. After a successful call, the instance first enters the restarting state. The instance is successfully restarted when its status returns to running.
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
     * Querying instance configuration history.
     *
     * @remarks
     * This is an asynchronous API, meaning the instance restart is not immediate. After a successful call, the instance enters the `restarting` state, and the process completes when its state changes to `running`.
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
     * Querying instance configuration history.
     *
     * @remarks
     * This is an asynchronous API, meaning the instance restart is not immediate. After a successful call, the instance enters the `restarting` state, and the process completes when its state changes to `running`.
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
     * Retrieve the cluster event name.
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
     * Retrieve the cluster event name.
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
     * Describes the whitelist groups for a private network.
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
     * Describes the whitelist groups for a private network.
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
     * Queries instance configurations.
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
     * Queries instance configurations.
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
     * Retrieve instance health diagnosis results.
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
     * Retrieve instance health diagnosis results.
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
     * Obtains the meta token for a StarRocks instance.
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
     * Obtains the meta token for a StarRocks instance.
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
     * This operation queries Serverless StarRocks instances. You can filter the instances by criteria such as instance name and tags.
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
     * This operation queries Serverless StarRocks instances. You can filter the instances by criteria such as instance name and tags.
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
     * Retrieves node group information.
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
     * Retrieves node group information.
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
     * You can view the list of available regions.
     *
     * @remarks
     * This operation is asynchronous. After you call this operation, the instance enters a restarting state but does not restart immediately. The restart is complete when the instance status changes to running.
     *
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
     * You can view the list of available regions.
     *
     * @remarks
     * This operation is asynchronous. After you call this operation, the instance enters a restarting state but does not restart immediately. The restart is complete when the instance status changes to running.
     *
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
     * Get resource constraint configurations.
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
     * Get resource constraint configurations.
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
     * Obtain the system time zone of a StarRocks instance.
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
     * Obtain the system time zone of a StarRocks instance.
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
     * Retrieves the details of time-triggered scaling rules.
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
     * Retrieves the details of time-triggered scaling rules.
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
     * Disables SSL for a StarRocks connection.
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
     * Disables SSL for a StarRocks connection.
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
     * Enables the internal Server Load Balancer (SLB) for the default gateway of an EMR Serverless StarRocks instance.
     *
     * @remarks
     * The instance must be in the Running state when you call this operation.
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
     * Enables the internal Server Load Balancer (SLB) for the default gateway of an EMR Serverless StarRocks instance.
     *
     * @remarks
     * The instance must be in the Running state when you call this operation.
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
     * Enables Multi-AZ deployment.
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
     * Enables Multi-AZ deployment.
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
     * Enables SSL for a StarRocks connection.
     *
     * @remarks
     * You can call this operation only when the instance is in the Running state.
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
     * Enables SSL for a StarRocks connection.
     *
     * @remarks
     * You can call this operation only when the instance is in the Running state.
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
     * Retrieves the feature gates for a StarRocks cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
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
     * Retrieves the feature gates for a StarRocks cluster instance.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
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
     * Retrieve the feature gate for a StarRocks compute group instance.
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
     * Retrieve the feature gate for a StarRocks compute group instance.
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
     * Enable read/write splitting. The Leader FE node handles write requests, and other nodes handle read requests.
     *
     * @remarks
     * The instance must be in the running state when you call this operation.
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
     * Enable read/write splitting. The Leader FE node handles write requests, and other nodes handle read requests.
     *
     * @remarks
     * The instance must be in the running state when you call this operation.
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
     * Lists gateways.
     *
     * @remarks
     * Lists the gateways of a cluster.
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
     * Lists gateways.
     *
     * @remarks
     * Lists the gateways of a cluster.
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
     * Retrieves the details of an operation.
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
     * Retrieves the details of an operation.
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
     * Retrieves the operation history of a cluster.
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
     * Retrieves the operation history of a cluster.
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
     * Retrieves the ssl certificate details for a cluster.
     *
     * @remarks
     * Retrieves the ssl certificate details for a cluster.
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
     * Retrieves the ssl certificate details for a cluster.
     *
     * @remarks
     * Retrieves the ssl certificate details for a cluster.
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
     * Change the billing method for an instance.
     *
     * @remarks
     * Before you call this operation, review the billing methods for Serverless StarRocks and the <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P).
     * When you call this operation, note the following:
     * - Only standard instances support changing the number of compute group Compute Units (CUs). Entry-level instances do not support this change.
     * - Only instances of the standard compute group specification type support increasing the number of disks.
     * - The instance must be in the Running state.
     * After you change the CU count, billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new CU count.
     * - Subscription: During the current billing cycle, you pay the difference between the old and new configurations. This amount is calculated based on the number of days remaining in the subscription period, starting from 00:00 of the following day.
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
     * Change the billing method for an instance.
     *
     * @remarks
     * Before you call this operation, review the billing methods for Serverless StarRocks and the <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P).
     * When you call this operation, note the following:
     * - Only standard instances support changing the number of compute group Compute Units (CUs). Entry-level instances do not support this change.
     * - Only instances of the standard compute group specification type support increasing the number of disks.
     * - The instance must be in the Running state.
     * After you change the CU count, billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new CU count.
     * - Subscription: During the current billing cycle, you pay the difference between the old and new configurations. This amount is calculated based on the number of days remaining in the subscription period, starting from 00:00 of the following day.
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
     * You can use this API to change the number of Compute Units (CUs) in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this API, make sure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When you call this API, note the following:
     * - This operation is supported only for Standard Edition instances. It is not supported for Starter Edition instances.
     * - You can increase the number of disks only for instances with a standard compute group specification.
     * - The instance must be in the Running state.
     * After you change the number of CUs, the billing for the instance is updated as follows:
     * - Pay-as-you-go: You are billed based on the new number of CUs.
     * - Subscription: A supplementary fee is charged. This fee is calculated based on the price difference between the old and new configurations and the remaining subscription period. The remaining period starts at 00:00 on the following day and ends when the subscription expires.
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
     * You can use this API to change the number of Compute Units (CUs) in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this API, make sure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When you call this API, note the following:
     * - This operation is supported only for Standard Edition instances. It is not supported for Starter Edition instances.
     * - You can increase the number of disks only for instances with a standard compute group specification.
     * - The instance must be in the Running state.
     * After you change the number of CUs, the billing for the instance is updated as follows:
     * - Pay-as-you-go: You are billed based on the new number of CUs.
     * - Subscription: A supplementary fee is charged. This fee is calculated based on the price difference between the old and new configurations and the remaining subscription period. The remaining period starts at 00:00 on the following day and ends when the subscription expires.
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
     * Increases the number of disks for the nodes in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure you fully understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * Note the following:
     * - The number of disks can be increased only for standard instances. This operation is not supported for entry-level instances.
     * - The number of disks can be increased only for instances whose compute group is the Standard Edition (standard).
     * - The instance must be in the Running state.
     * After you increase the number of disks, billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new disk type.
     * - Subscription: A supplemental fee is calculated. This fee is based on the price difference between the old and new configurations and the remaining days in the billing cycle. The remaining period starts from 00:00 on the following day and ends when the subscription expires.
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
     * Increases the number of disks for the nodes in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure you fully understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * Note the following:
     * - The number of disks can be increased only for standard instances. This operation is not supported for entry-level instances.
     * - The number of disks can be increased only for instances whose compute group is the Standard Edition (standard).
     * - The instance must be in the Running state.
     * After you increase the number of disks, billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new disk type.
     * - Subscription: A supplemental fee is calculated. This fee is based on the price difference between the old and new configurations and the remaining days in the billing cycle. The remaining period starts from 00:00 on the following day and ends when the subscription expires.
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
     * This operation modifies the disk performance level of the nodes in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, understand the billing methods and <props="china">[pricing](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.1837281f3hbi2d#/ecs/detail/vm)<props="intl">[pricing](https://www.alibabacloud.com/zh/product/ecs?_p_lc=1#pricing) of Serverless StarRocks.
     * Note the following when you call this operation:
     * - You can upgrade or downgrade disks only for standard instances. This operation is not supported for Starter Edition instances.
     * - Disk upgrades and downgrades are supported only for instances that have a Standard Edition (standard) compute group.
     * - The instance must be in the Running state.
     * - You cannot downgrade the disk performance level (PL) to PL0.
     * - The performance level of an Enhanced SSD (ESSD) is limited by its capacity. If you cannot upgrade the performance level, increase the disk capacity and try again. For more information, see <props="china">[ESSDs](https://help.aliyun.com/zh/ecs/user-guide/essds)<props="intl">[ESSDs](https://www.alibabacloud.com/help/en/ecs/user-guide/essds).
     * After you change the disk configuration, the billing is adjusted as follows:
     * - Pay-as-you-go: You are charged based on the new disk type.
     * - Subscription: A supplemental fee is calculated based on the price difference between the new and old configurations for the remainder of the billing cycle. The remaining period starts at 00:00 on the next day and ends when the subscription expires.
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
     * This operation modifies the disk performance level of the nodes in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, understand the billing methods and <props="china">[pricing](https://www.aliyun.com/price/product?spm=openapi-amp.newDocPublishment.0.0.1837281f3hbi2d#/ecs/detail/vm)<props="intl">[pricing](https://www.alibabacloud.com/zh/product/ecs?_p_lc=1#pricing) of Serverless StarRocks.
     * Note the following when you call this operation:
     * - You can upgrade or downgrade disks only for standard instances. This operation is not supported for Starter Edition instances.
     * - Disk upgrades and downgrades are supported only for instances that have a Standard Edition (standard) compute group.
     * - The instance must be in the Running state.
     * - You cannot downgrade the disk performance level (PL) to PL0.
     * - The performance level of an Enhanced SSD (ESSD) is limited by its capacity. If you cannot upgrade the performance level, increase the disk capacity and try again. For more information, see <props="china">[ESSDs](https://help.aliyun.com/zh/ecs/user-guide/essds)<props="intl">[ESSDs](https://www.alibabacloud.com/help/en/ecs/user-guide/essds).
     * After you change the disk configuration, the billing is adjusted as follows:
     * - Pay-as-you-go: You are charged based on the new disk type.
     * - Subscription: A supplemental fee is calculated based on the price difference between the new and old configurations for the remainder of the billing cycle. The remaining period starts at 00:00 on the next day and ends when the subscription expires.
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
     * Scales out the disk of a compute group node for a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * Note the following:
     * - Only standard instances support disk scale-out. Entry-level instances do not.
     * - Only instances that have a compute group of the standard specification type support disk scale-out.
     * - The instance must be in the Running state.
     * After you scale out the disk, your billing changes as follows:
     * - Pay-as-you-go: You are charged based on the new disk size.
     * - Subscription: You must pay an upgrade fee. The fee is calculated based on the price difference between the old and new configurations and the remaining subscription period. The remaining subscription period is calculated starting from 00:00 on the next day.
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
     * Scales out the disk of a compute group node for a Serverless StarRocks instance.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * Note the following:
     * - Only standard instances support disk scale-out. Entry-level instances do not.
     * - Only instances that have a compute group of the standard specification type support disk scale-out.
     * - The instance must be in the Running state.
     * After you scale out the disk, your billing changes as follows:
     * - Pay-as-you-go: You are charged based on the new disk size.
     * - Subscription: You must pay an upgrade fee. The fee is calculated based on the price difference between the old and new configurations and the remaining subscription period. The remaining subscription period is calculated starting from 00:00 on the next day.
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
     * Change the disk type for nodes in a compute group.
     *
     * @remarks
     * Before you call this operation, review the Serverless StarRocks billing model and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P).
     * - Only standard instances support disk scaling. Starter instances do not support disk scaling.
     * - Only instances with a compute group specification type of Standard Edition support disk scaling.
     * - The instance must be in the Running state.
     * After disk scaling, billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new disk size.
     * - Subscription: During the billing cycle, the additional fee is calculated based on the price difference between the old and new configurations and the remaining days, from 00:00 the next day to the end of the validity period.
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
     * Change the disk type for nodes in a compute group.
     *
     * @remarks
     * Before you call this operation, review the Serverless StarRocks billing model and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P).
     * - Only standard instances support disk scaling. Starter instances do not support disk scaling.
     * - Only instances with a compute group specification type of Standard Edition support disk scaling.
     * - The instance must be in the Running state.
     * After disk scaling, billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new disk size.
     * - Subscription: During the billing cycle, the additional fee is calculated based on the price difference between the old and new configurations and the remaining days, from 00:00 the next day to the end of the validity period.
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
     * Modifies the /etc/hosts file.
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
     * Modifies the /etc/hosts file.
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
     * This API modifies the configuration of a Serverless StarRocks instance.
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
     * This API modifies the configuration of a Serverless StarRocks instance.
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
     * This operation pre-checks modifications to the instance configuration of a Serverless StarRocks instance.
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
     * This operation pre-checks modifications to the instance configuration of a Serverless StarRocks instance.
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
     * Modifies the maintenance window for a StarRocks instance.
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
     * Modifies the maintenance window for a StarRocks instance.
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
     * Modifies the number of nodes in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before using this operation, make sure that you fully understand the billing method and <props="china">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When calling this operation, note the following:
     * - Only Standard Standard instances support modifying the number of compute group nodes. Basic Standard instances do not support this operation.
     * - The instance must be in the Running state.
     * - The number of FE nodes cannot be an even number, and FE nodes do not support scale-in.
     * After modifying the node count, billing changes are as follows:
     * - Pay-as-you-go: Billed based on the new node count.
     * - Subscription: Within the billing cycle, the additional fee is calculated based on the price difference between the old and new configurations and the remaining days (from 00:00 of the next day to the end of the validity period).
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
     * Modifies the number of nodes in a compute group of a Serverless StarRocks instance.
     *
     * @remarks
     * Before using this operation, make sure that you fully understand the billing method and <props="china">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When calling this operation, note the following:
     * - Only Standard Standard instances support modifying the number of compute group nodes. Basic Standard instances do not support this operation.
     * - The instance must be in the Running state.
     * - The number of FE nodes cannot be an even number, and FE nodes do not support scale-in.
     * After modifying the node count, billing changes are as follows:
     * - Pay-as-you-go: Billed based on the new node count.
     * - Subscription: Within the billing cycle, the additional fee is calculated based on the price difference between the old and new configurations and the remaining days (from 00:00 of the next day to the end of the validity period).
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
     * Modifies an Auto Scaling rule.
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
     * Modifies an Auto Scaling rule.
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
     * Modify the node specifications type of the compute group.
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
     * Modify the node specifications type of the compute group.
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
     * Runs a precheck to modify the node specification type for a compute group.
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
     * Runs a precheck to modify the node specification type for a compute group.
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
     * Modifies the password for a StarRocks user.
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
     * Modifies the password for a StarRocks user.
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
     * Queries the price for enabling multi-zone deployment.
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
     * Queries the price for enabling multi-zone deployment.
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
     * Queries the latest minor version for the current major version.
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
     * Queries the latest minor version for the current major version.
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
     * Queries the price for changing the billing method of a StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * Note the following when you call this operation:
     * - You can change the number of compute units (CUs) in a compute group only for Standard Edition instances. This feature is not supported for Starter Edition instances.
     * - You can increase the disk size only for instances that have a standard compute group specification.
     * - The instance must be in the Running state.
     * After you change the number of CUs, the billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new number of CUs.
     * - Subscription: The system calculates the supplementary fee based on the price difference between the old and new configurations and the remaining days in the billing cycle. The calculation starts from 00:00 on the following day.
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
     * Queries the price for changing the billing method of a StarRocks instance.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * Note the following when you call this operation:
     * - You can change the number of compute units (CUs) in a compute group only for Standard Edition instances. This feature is not supported for Starter Edition instances.
     * - You can increase the disk size only for instances that have a standard compute group specification.
     * - The instance must be in the Running state.
     * After you change the number of CUs, the billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new number of CUs.
     * - Subscription: The system calculates the supplementary fee based on the price difference between the old and new configurations and the remaining days in the billing cycle. The calculation starts from 00:00 on the following day.
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
     * Queries the price for modifying the CU of compute group nodes.
     *
     * @remarks
     * Before you use this API, understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) for Serverless StarRocks.
     * When you call this API, note the following:
     * - Only standard instances allow you to modify the number of CUs for compute groups. Entry-level instances do not.
     * - You can increase the disk size only for instances with a Standard Edition (standard) compute group.
     * - The instance must be in the Running state.
     * After you modify the number of CUs, billing changes as follows:
     * - Pay-as-you-go: Billing is based on the new number of CUs.
     * - Subscription: The amount to pay is calculated based on the price difference between the old and new configurations for the remainder of the subscription period. This period starts at 00:00 on the following day.
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
     * Queries the price for modifying the CU of compute group nodes.
     *
     * @remarks
     * Before you use this API, understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) for Serverless StarRocks.
     * When you call this API, note the following:
     * - Only standard instances allow you to modify the number of CUs for compute groups. Entry-level instances do not.
     * - You can increase the disk size only for instances with a Standard Edition (standard) compute group.
     * - The instance must be in the Running state.
     * After you modify the number of CUs, billing changes as follows:
     * - Pay-as-you-go: Billing is based on the new number of CUs.
     * - Subscription: The amount to pay is calculated based on the price difference between the old and new configurations for the remainder of the subscription period. This period starts at 00:00 on the following day.
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
     * Retrieve the price for changing the number of disks in a compute group node.
     *
     * @remarks
     * Before you call this operation, review the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) for Serverless StarRocks.
     * - You can increase the disk count only for Standard Edition instances. You cannot increase the disk count for Starter Edition instances.
     * - You can increase the disk count only for instances with a compute group specification type of Standard Edition (standard).
     * - The instance must be in the Running state.
     * After you increase the disk count, billing changes as follows:
     * - Pay-as-you-go: Billing is based on the new disk type.
     * - Subscription: During the billing cycle, the additional fee is calculated based on the price difference between the new and original configurations and the remaining days—from 00:00 the next day to the end of the validity period.
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
     * Retrieve the price for changing the number of disks in a compute group node.
     *
     * @remarks
     * Before you call this operation, review the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) for Serverless StarRocks.
     * - You can increase the disk count only for Standard Edition instances. You cannot increase the disk count for Starter Edition instances.
     * - You can increase the disk count only for instances with a compute group specification type of Standard Edition (standard).
     * - The instance must be in the Running state.
     * After you increase the disk count, billing changes as follows:
     * - Pay-as-you-go: Billing is based on the new disk type.
     * - Subscription: During the billing cycle, the additional fee is calculated based on the price difference between the new and original configurations and the remaining days—from 00:00 the next day to the end of the validity period.
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
     * Queries the price of changing the disk performance level for a compute group node.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and <props="intl">[pricing](https://www.alibabacloud.com/product/ecs?_p_lc=1#pricing) of Serverless StarRocks.
     * Note the following when you call this operation:
     * - Only standard instances support disk upgrade or downgrade. Entry-level instances do not.
     * - Only instances with a standard compute group specification support disk upgrade or downgrade.
     * - The instance must be in the running state.
     * - You cannot downgrade the disk to performance level (PL) 0.
     * - The performance level of an Enhanced SSD (ESSD) is limited by its capacity. If you cannot upgrade the performance level, scale out the disk and try again. For more information, see <props="intl">[ESSDs](https://www.alibabacloud.com/help/en/ecs/user-guide/essds).
     * After you upgrade or downgrade a disk, the billing changes as follows:
     * - Pay-as-you-go: You are charged based on the new disk type.
     * - Subscription: A supplementary fee is calculated based on the price difference between the new and old configurations and the remaining days in the subscription period, starting from 00:00 on the following day.
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
     * Queries the price of changing the disk performance level for a compute group node.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and <props="intl">[pricing](https://www.alibabacloud.com/product/ecs?_p_lc=1#pricing) of Serverless StarRocks.
     * Note the following when you call this operation:
     * - Only standard instances support disk upgrade or downgrade. Entry-level instances do not.
     * - Only instances with a standard compute group specification support disk upgrade or downgrade.
     * - The instance must be in the running state.
     * - You cannot downgrade the disk to performance level (PL) 0.
     * - The performance level of an Enhanced SSD (ESSD) is limited by its capacity. If you cannot upgrade the performance level, scale out the disk and try again. For more information, see <props="intl">[ESSDs](https://www.alibabacloud.com/help/en/ecs/user-guide/essds).
     * After you upgrade or downgrade a disk, the billing changes as follows:
     * - Pay-as-you-go: You are charged based on the new disk type.
     * - Subscription: A supplementary fee is calculated based on the price difference between the new and old configurations and the remaining days in the subscription period, starting from 00:00 on the following day.
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
     * Queries the price for modifying the disk size of a single node in a compute group.
     *
     * @remarks
     * Before you call this operation, make sure you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks. When you call this operation, note the following:
     * - Disk scale-out is supported only for standard instances. It is not supported for entry-level instances.
     * - Disk scale-out is supported only for instances that use the standard compute group specification.
     * - The instance must be in the Running state.
     * After you scale out the disk, the billing changes are as follows:
     * - Pay-as-you-go: You are billed for the new disk size.
     * - Subscription: A supplementary fee is calculated based on the price difference between the old and new configurations and the remaining days in your subscription. The remaining days are calculated from 00:00 on the next day until the subscription expires.
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
     * Queries the price for modifying the disk size of a single node in a compute group.
     *
     * @remarks
     * Before you call this operation, make sure you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks. When you call this operation, note the following:
     * - Disk scale-out is supported only for standard instances. It is not supported for entry-level instances.
     * - Disk scale-out is supported only for instances that use the standard compute group specification.
     * - The instance must be in the Running state.
     * After you scale out the disk, the billing changes are as follows:
     * - Pay-as-you-go: You are billed for the new disk size.
     * - Subscription: A supplementary fee is calculated based on the price difference between the old and new configurations and the remaining days in your subscription. The remaining days are calculated from 00:00 on the next day until the subscription expires.
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
     * Queries the price for modifying the disk type of nodes in a compute group.
     *
     * @remarks
     * Before you call this API, make sure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of the Serverless StarRocks product. Take note of the following:
     * - Only standard instances support disk scale-out. Entry-level instances do not.
     * - Only instances that have a compute group of the Standard Edition (standard) specification type support disk scale-out.
     * - Instances must be in the running (Running) state.
     * After a disk scale-out, the billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new disk size.
     * - Subscription: A supplemental fee is calculated based on the price difference between the new and old configurations for the remaining duration of the subscription. The remaining duration is calculated from 00:00 on the next day until the subscription expires.
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
     * Queries the price for modifying the disk type of nodes in a compute group.
     *
     * @remarks
     * Before you call this API, make sure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of the Serverless StarRocks product. Take note of the following:
     * - Only standard instances support disk scale-out. Entry-level instances do not.
     * - Only instances that have a compute group of the Standard Edition (standard) specification type support disk scale-out.
     * - Instances must be in the running (Running) state.
     * After a disk scale-out, the billing changes as follows:
     * - Pay-as-you-go: You are billed based on the new disk size.
     * - Subscription: A supplemental fee is calculated based on the price difference between the new and old configurations for the remaining duration of the subscription. The remaining duration is calculated from 00:00 on the next day until the subscription expires.
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
     * Queries the price for changing the number of nodes in a compute group.
     *
     * @remarks
     * Before you call this API, make sure you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When you call this API, note the following:
     * - You can change the number of nodes in a compute group only for standard instances. This operation is not supported for entry-level instances.
     * - The instance must be in the Running state.
     * - The number of frontend (FE) nodes cannot be an even number. You cannot scale in FE nodes.
     * After you change the number of nodes, billing is affected as follows:
     * - Pay-as-you-go: You are charged based on the new number of nodes.
     * - Subscription: A supplemental fee is calculated based on the price difference between the old and new configurations and the number of remaining days in the subscription period. The remaining period is calculated from 00:00 of the next day until the subscription expires.
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
     * Queries the price for changing the number of nodes in a compute group.
     *
     * @remarks
     * Before you call this API, make sure you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When you call this API, note the following:
     * - You can change the number of nodes in a compute group only for standard instances. This operation is not supported for entry-level instances.
     * - The instance must be in the Running state.
     * - The number of frontend (FE) nodes cannot be an even number. You cannot scale in FE nodes.
     * After you change the number of nodes, billing is affected as follows:
     * - Pay-as-you-go: You are charged based on the new number of nodes.
     * - Subscription: A supplemental fee is calculated based on the price difference between the old and new configurations and the number of remaining days in the subscription period. The remaining period is calculated from 00:00 of the next day until the subscription expires.
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
     * Queries the price to change the specification type of a compute group.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks. Note the following:
     * - Only standard instances support disk scale-out. Basic instances do not.
     * - Only instances with the Standard (standard) compute group specification type support disk scale-out.
     * - The instance must be in the Running state.
     * After a disk scale-out, the billing changes are as follows:
     * - Pay-as-you-go: You are billed based on the new disk size.
     * - Subscription: A supplementary fee is calculated based on the price difference between the old and new configurations and the number of remaining days in the subscription period (from 00:00 on the next day to the end of the validity period).
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
     * Queries the price to change the specification type of a compute group.
     *
     * @remarks
     * Before you call this operation, ensure that you understand the billing methods and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks. Note the following:
     * - Only standard instances support disk scale-out. Basic instances do not.
     * - Only instances with the Standard (standard) compute group specification type support disk scale-out.
     * - The instance must be in the Running state.
     * After a disk scale-out, the billing changes are as follows:
     * - Pay-as-you-go: You are billed based on the new disk size.
     * - Subscription: A supplementary fee is calculated based on the price difference between the old and new configurations and the number of remaining days in the subscription period (from 00:00 on the next day to the end of the validity period).
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
     * An API for querying the price of new StarRocks purchases.
     *
     * @remarks
     * Before you use this API, review the billing model and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) for Serverless StarRocks.
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
     * An API for querying the price of new StarRocks purchases.
     *
     * @remarks
     * Before you use this API, review the billing model and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G)<props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) for Serverless StarRocks.
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
     * Pricing information for unsubscribing from StarRocks subscription instances.
     *
     * @remarks
     * >Danger:
     * After you release an instance, Alibaba Cloud reclaims all physical resources used by the instance. All associated data is permanently lost and cannot be recovered.
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
     * Pricing information for unsubscribing from StarRocks subscription instances.
     *
     * @remarks
     * >Danger:
     * After you release an instance, Alibaba Cloud reclaims all physical resources used by the instance. All associated data is permanently lost and cannot be recovered.
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
     * Query the renewal price for a StarRocks billing instance.
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
     * Query the renewal price for a StarRocks billing instance.
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
     * Queries the unpaid orders of a compute group or cluster.
     *
     * @remarks
     * Queries the unpaid orders of a compute group or cluster.
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
     * Queries the unpaid orders of a compute group or cluster.
     *
     * @remarks
     * Queries the unpaid orders of a compute group or cluster.
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
     * Queries the available upgrade versions for an EMR Serverless StarRocks instance. StarRocks instances have two version layers: a major version and a minor version. You can view both versions in the Version Information section on the Instance Details page in the EMR console. Use the Minor parameter to specify whether to query upgradable minor versions or major versions.
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
     * Queries the available upgrade versions for an EMR Serverless StarRocks instance. StarRocks instances have two version layers: a major version and a minor version. You can view both versions in the Version Information section on the Instance Details page in the EMR console. Use the Minor parameter to specify whether to query upgradable minor versions or major versions.
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
     * Reboot ECS instances in a cluster.
     *
     * @remarks
     * This operation is asynchronous. The instance does not reboot immediately. After a successful call, the instance enters the Rebooting state. The reboot is complete when the instance status changes to Running.
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
     * Reboot ECS instances in a cluster.
     *
     * @remarks
     * This operation is asynchronous. The instance does not reboot immediately. After a successful call, the instance enters the Rebooting state. The reboot is complete when the instance status changes to Running.
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
     * Renews an instance.
     *
     * @remarks
     * Before you call this API, make sure that you fully understand the billing model and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When you call this API, note that only subscription instances can be renewed.
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
     * Renews an instance.
     *
     * @remarks
     * Before you call this API, make sure that you fully understand the billing model and <props="china">[billable items](https://help.aliyun.com/zh/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c4g.11186623.help-menu-28066.d_0_1_1.4db82b05p3Gg0G) <props="intl">[billable items](https://www.alibabacloud.com/help/en/emr/emr-serverless-starrocks/product-overview/billable-items?spm=a2c63.p38356.help-menu-28066.d_0_1_0.3aaf4b0b69jN1P) of Serverless StarRocks.
     * When you call this API, note that only subscription instances can be renewed.
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
     * Restarts a specified node group.
     *
     * @remarks
     * This operation is asynchronous. The instance does not restart immediately. After you call the operation successfully, the instance enters the restarting state. When the instance status changes to running, the restart is complete.
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
     * Restarts a specified node group.
     *
     * @remarks
     * This operation is asynchronous. The instance does not restart immediately. After you call the operation successfully, the instance enters the restarting state. When the instance status changes to running, the restart is complete.
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
     * Restart nodes in a cluster.
     *
     * @remarks
     * This API is asynchronous. The instance restart is not immediate. After a successful call, the instance enters the restarting state. The restart is complete when the returned status is running.
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
     * Restart nodes in a cluster.
     *
     * @remarks
     * This API is asynchronous. The instance restart is not immediate. After a successful call, the instance enters the restarting state. The restart is complete when the returned status is running.
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
     * Restore an instance from a backup.
     *
     * @remarks
     * This is an asynchronous API. The instance does not restart immediately. After you call this API successfully, the instance enters the restarting state. When the instance status changes to running, the restore is complete.
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
     * Restore an instance from a backup.
     *
     * @remarks
     * This is an asynchronous API. The instance does not restart immediately. After you call this API successfully, the instance enters the restarting state. When the instance status changes to running, the restore is complete.
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
     * Resumes an instance automatically stopped by openlake.
     *
     * @remarks
     * >Danger:
     * When you release an instance, its physical resources are reclaimed. All data on the instance is lost and cannot be recovered.
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
     * Resumes an instance automatically stopped by openlake.
     *
     * @remarks
     * >Danger:
     * When you release an instance, its physical resources are reclaimed. All data on the instance is lost and cannot be recovered.
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
     * Rolls back a configuration modification that is currently in progress.
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
     * Rolls back a configuration modification that is currently in progress.
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
     * Switches the active and standby zones.
     *
     * @remarks
     * Switches the active and standby zones.
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
     * Switches the active and standby zones.
     *
     * @remarks
     * Switches the active and standby zones.
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
     * Attaches tags to specified resources.
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
     * Attaches tags to specified resources.
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
     * Enables or disables automatic minor version upgrades for a StarRocks instance.
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
     * Enables or disables automatic minor version upgrades for a StarRocks instance.
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
     * Switches an Internet-facing SLB instance on or off.
     *
     * @remarks
     * >Danger:
     * After you release an instance, Alibaba Cloud reclaims all physical resources used by the instance. All associated data is permanently lost and cannot be recovered.
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
     * Switches an Internet-facing SLB instance on or off.
     *
     * @remarks
     * >Danger:
     * After you release an instance, Alibaba Cloud reclaims all physical resources used by the instance. All associated data is permanently lost and cannot be recovered.
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
     * Detaches tags from multiple resources.
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
     * Detaches tags from multiple resources.
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
     * Updates the description of a backup job.
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
     * Updates the description of a backup job.
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
     * Updates a backup policy.
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
     * Updates a backup policy.
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
     * Updates the number of gateway nodes.
     *
     * @remarks
     * Updates the number of gateway nodes.
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
     * Updates the number of gateway nodes.
     *
     * @remarks
     * Updates the number of gateway nodes.
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
     * Updates the CIDR blocks in a whitelist group.
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
     * Updates the CIDR blocks in a whitelist group.
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
     * Updates the description of a compute group.
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
     * Updates the description of a compute group.
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
     * Enable or disable the Internet-facing SLB for the FE or BE component.
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
     * Enable or disable the Internet-facing SLB for the FE or BE component.
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
     * Upgrades the version of a Serverless StarRocks instance. Serverless StarRocks has two levels of version definition: the major version displayed in the "Version" field on the cluster details page, and the minor version displayed in the "Minor Version" field on the cluster details page. This operation can be used to upgrade either the minor version or the major version. You can call the QueryUpgradableVersions operation to query the versions to which a cluster can be upgraded.
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
     * Upgrades the version of a Serverless StarRocks instance. Serverless StarRocks has two levels of version definition: the major version displayed in the "Version" field on the cluster details page, and the minor version displayed in the "Minor Version" field on the cluster details page. This operation can be used to upgrade either the minor version or the major version. You can call the QueryUpgradableVersions operation to query the versions to which a cluster can be upgraded.
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
