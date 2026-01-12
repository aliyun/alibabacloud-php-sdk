<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CheckLdpsColumnarIndexStatusRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CheckLdpsColumnarIndexStatusResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateAutoScalingConfigRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateAutoScalingConfigResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateAutoScalingConfigShrinkRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateAutoScalingRuleRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateAutoScalingRuleResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormV2InstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\CreateLindormV2InstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteAutoScalingConfigRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteAutoScalingConfigResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteAutoScalingRuleRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteAutoScalingRuleResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteCustomResourceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteCustomResourceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeleteLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeployLdpsSemiManagedComponentRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DeployLdpsSemiManagedComponentResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetAutoScalingConfigRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetAutoScalingConfigResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetAutoScalingRuleRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetAutoScalingRuleResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetClientSourceIpRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetClientSourceIpResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetEngineDefaultAuthRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetEngineDefaultAuthResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSummaryRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSummaryResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsNamespacedQuotaResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsResourceCostRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLdpsResourceCostResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormFsUsedDetailRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormFsUsedDetailResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceDetailsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceDetailsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceEngineListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceEngineListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceForTerraformRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceForTerraformResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2StorageUsageRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2StorageUsageResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2StreamEngineInfoRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2StreamEngineInfoResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsShrinkRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRecordsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRecordsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRecordsShrinkRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRulesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingRulesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListLdpsComputeGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\MigrateSingleZoneToMultiZoneRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\MigrateSingleZoneToMultiZoneResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyAutoScalingConfigRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyAutoScalingConfigResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyAutoScalingConfigShrinkRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyAutoScalingRuleRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyAutoScalingRuleResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyInstancePayTypeRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyInstancePayTypeResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2InstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2InstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2InstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2InstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2WhiteIpListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ModifyLindormV2WhiteIpListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputeEngineRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputeEngineResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputePreCheckRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenComputePreCheckResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenLdpsColumnarIndexRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\OpenLdpsColumnarIndexResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormV2InstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ReleaseLindormV2InstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RenewLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RenewLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RestartLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\RestartLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SetDefaultOlapComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SetDefaultOlapComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SwitchLSQLV3MySQLServiceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\SwitchLSQLV3MySQLServiceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceIpWhiteListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLdpsComputeGroupRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLdpsComputeGroupResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormInstanceAttributeRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormInstanceAttributeResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2InstanceParameterRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2InstanceParameterResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2InstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2InstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2WhiteIpListRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpdateLindormV2WhiteIpListResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpgradeLindormInstanceRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpgradeLindormInstanceResponse;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpgradeLindormV2StreamEngineRequest;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\UpgradeLindormV2StreamEngineResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Hitsdb extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hitsdb', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Changes a resource group to another.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes a resource group to another.
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

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckLdpsColumnarIndexStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckLdpsColumnarIndexStatusResponse
     *
     * @param CheckLdpsColumnarIndexStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckLdpsColumnarIndexStatusResponse
     */
    public function checkLdpsColumnarIndexStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckLdpsColumnarIndexStatus',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckLdpsColumnarIndexStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckLdpsColumnarIndexStatusRequest
     *
     * @returns CheckLdpsColumnarIndexStatusResponse
     *
     * @param CheckLdpsColumnarIndexStatusRequest $request
     *
     * @return CheckLdpsColumnarIndexStatusResponse
     */
    public function checkLdpsColumnarIndexStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkLdpsColumnarIndexStatusWithOptions($request, $runtime);
    }

    /**
     * 创建弹性伸缩配置.
     *
     * @param tmpReq - CreateAutoScalingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoScalingConfigResponse
     *
     * @param CreateAutoScalingConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAutoScalingConfigResponse
     */
    public function createAutoScalingConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAutoScalingConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scaleRuleList) {
            $request->scaleRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scaleRuleList, 'ScaleRuleList', 'json');
        }

        $query = [];
        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->effectiveTimeEnd) {
            @$query['EffectiveTimeEnd'] = $request->effectiveTimeEnd;
        }

        if (null !== $request->effectiveTimeStart) {
            @$query['EffectiveTimeStart'] = $request->effectiveTimeStart;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodesMax) {
            @$query['NodesMax'] = $request->nodesMax;
        }

        if (null !== $request->nodesMin) {
            @$query['NodesMin'] = $request->nodesMin;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleRuleListShrink) {
            @$query['ScaleRuleList'] = $request->scaleRuleListShrink;
        }

        if (null !== $request->scaleType) {
            @$query['ScaleType'] = $request->scaleType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->specId) {
            @$query['SpecId'] = $request->specId;
        }

        if (null !== $request->storageCapacityMax) {
            @$query['StorageCapacityMax'] = $request->storageCapacityMax;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAutoScalingConfig',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建弹性伸缩配置.
     *
     * @param request - CreateAutoScalingConfigRequest
     *
     * @returns CreateAutoScalingConfigResponse
     *
     * @param CreateAutoScalingConfigRequest $request
     *
     * @return CreateAutoScalingConfigResponse
     */
    public function createAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * 创建弹性伸缩规则.
     *
     * @param request - CreateAutoScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoScalingRuleResponse
     *
     * @param CreateAutoScalingRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateAutoScalingRuleResponse
     */
    public function createAutoScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->observationWindow) {
            @$query['ObservationWindow'] = $request->observationWindow;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->scaleInStep) {
            @$query['ScaleInStep'] = $request->scaleInStep;
        }

        if (null !== $request->scaleOutStep) {
            @$query['ScaleOutStep'] = $request->scaleOutStep;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->targetMetric) {
            @$query['TargetMetric'] = $request->targetMetric;
        }

        if (null !== $request->targetNodes) {
            @$query['TargetNodes'] = $request->targetNodes;
        }

        if (null !== $request->thresholdLower) {
            @$query['ThresholdLower'] = $request->thresholdLower;
        }

        if (null !== $request->thresholdUpper) {
            @$query['ThresholdUpper'] = $request->thresholdUpper;
        }

        if (null !== $request->triggerCronExpr) {
            @$query['TriggerCronExpr'] = $request->triggerCronExpr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAutoScalingRule',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建弹性伸缩规则.
     *
     * @param request - CreateAutoScalingRuleRequest
     *
     * @returns CreateAutoScalingRuleResponse
     *
     * @param CreateAutoScalingRuleRequest $request
     *
     * @return CreateAutoScalingRuleResponse
     */
    public function createAutoScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateLdpsComputeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLdpsComputeGroupResponse
     *
     * @param CreateLdpsComputeGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateLdpsComputeGroupResponse
     */
    public function createLdpsComputeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->properties) {
            @$query['Properties'] = $request->properties;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLdpsComputeGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateLdpsComputeGroupRequest
     *
     * @returns CreateLdpsComputeGroupResponse
     *
     * @param CreateLdpsComputeGroupRequest $request
     *
     * @return CreateLdpsComputeGroupResponse
     */
    public function createLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a Lindorm instance.
     *
     * @remarks
     * You must select at least one engine when you create a Lindorm instance. For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine types](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *
     * @param request - CreateLindormInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLindormInstanceResponse
     *
     * @param CreateLindormInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateLindormInstanceResponse
     */
    public function createLindormInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arbiterVSwitchId) {
            @$query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }

        if (null !== $request->arbiterZoneId) {
            @$query['ArbiterZoneId'] = $request->arbiterZoneId;
        }

        if (null !== $request->archVersion) {
            @$query['ArchVersion'] = $request->archVersion;
        }

        if (null !== $request->autoRenewDuration) {
            @$query['AutoRenewDuration'] = $request->autoRenewDuration;
        }

        if (null !== $request->autoRenewal) {
            @$query['AutoRenewal'] = $request->autoRenewal;
        }

        if (null !== $request->coldStorage) {
            @$query['ColdStorage'] = $request->coldStorage;
        }

        if (null !== $request->coreSingleStorage) {
            @$query['CoreSingleStorage'] = $request->coreSingleStorage;
        }

        if (null !== $request->coreSpec) {
            @$query['CoreSpec'] = $request->coreSpec;
        }

        if (null !== $request->diskCategory) {
            @$query['DiskCategory'] = $request->diskCategory;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->filestoreNum) {
            @$query['FilestoreNum'] = $request->filestoreNum;
        }

        if (null !== $request->filestoreSpec) {
            @$query['FilestoreSpec'] = $request->filestoreSpec;
        }

        if (null !== $request->instanceAlias) {
            @$query['InstanceAlias'] = $request->instanceAlias;
        }

        if (null !== $request->instanceStorage) {
            @$query['InstanceStorage'] = $request->instanceStorage;
        }

        if (null !== $request->lindormNum) {
            @$query['LindormNum'] = $request->lindormNum;
        }

        if (null !== $request->lindormSpec) {
            @$query['LindormSpec'] = $request->lindormSpec;
        }

        if (null !== $request->logDiskCategory) {
            @$query['LogDiskCategory'] = $request->logDiskCategory;
        }

        if (null !== $request->logNum) {
            @$query['LogNum'] = $request->logNum;
        }

        if (null !== $request->logSingleStorage) {
            @$query['LogSingleStorage'] = $request->logSingleStorage;
        }

        if (null !== $request->logSpec) {
            @$query['LogSpec'] = $request->logSpec;
        }

        if (null !== $request->ltsNum) {
            @$query['LtsNum'] = $request->ltsNum;
        }

        if (null !== $request->ltsSpec) {
            @$query['LtsSpec'] = $request->ltsSpec;
        }

        if (null !== $request->multiZoneCombination) {
            @$query['MultiZoneCombination'] = $request->multiZoneCombination;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->primaryVSwitchId) {
            @$query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }

        if (null !== $request->primaryZoneId) {
            @$query['PrimaryZoneId'] = $request->primaryZoneId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->solrNum) {
            @$query['SolrNum'] = $request->solrNum;
        }

        if (null !== $request->solrSpec) {
            @$query['SolrSpec'] = $request->solrSpec;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        if (null !== $request->streamNum) {
            @$query['StreamNum'] = $request->streamNum;
        }

        if (null !== $request->streamSpec) {
            @$query['StreamSpec'] = $request->streamSpec;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tsdbNum) {
            @$query['TsdbNum'] = $request->tsdbNum;
        }

        if (null !== $request->tsdbSpec) {
            @$query['TsdbSpec'] = $request->tsdbSpec;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLindormInstance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Lindorm instance.
     *
     * @remarks
     * You must select at least one engine when you create a Lindorm instance. For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine types](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *
     * @param request - CreateLindormInstanceRequest
     *
     * @returns CreateLindormInstanceResponse
     *
     * @param CreateLindormInstanceRequest $request
     *
     * @return CreateLindormInstanceResponse
     */
    public function createLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * 创建Lindorm实例.
     *
     * @param request - CreateLindormV2InstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLindormV2InstanceResponse
     *
     * @param CreateLindormV2InstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateLindormV2InstanceResponse
     */
    public function createLindormV2InstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arbiterVSwitchId) {
            @$query['ArbiterVSwitchId'] = $request->arbiterVSwitchId;
        }

        if (null !== $request->arbiterZoneId) {
            @$query['ArbiterZoneId'] = $request->arbiterZoneId;
        }

        if (null !== $request->archVersion) {
            @$query['ArchVersion'] = $request->archVersion;
        }

        if (null !== $request->autoRenewDuration) {
            @$query['AutoRenewDuration'] = $request->autoRenewDuration;
        }

        if (null !== $request->autoRenewal) {
            @$query['AutoRenewal'] = $request->autoRenewal;
        }

        if (null !== $request->capacityStorageSize) {
            @$query['CapacityStorageSize'] = $request->capacityStorageSize;
        }

        if (null !== $request->cloudStorageSize) {
            @$query['CloudStorageSize'] = $request->cloudStorageSize;
        }

        if (null !== $request->cloudStorageType) {
            @$query['CloudStorageType'] = $request->cloudStorageType;
        }

        if (null !== $request->clusterMode) {
            @$query['ClusterMode'] = $request->clusterMode;
        }

        if (null !== $request->clusterPattern) {
            @$query['ClusterPattern'] = $request->clusterPattern;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->enableCapacityStorage) {
            @$query['EnableCapacityStorage'] = $request->enableCapacityStorage;
        }

        if (null !== $request->engineList) {
            @$query['EngineList'] = $request->engineList;
        }

        if (null !== $request->instanceAlias) {
            @$query['InstanceAlias'] = $request->instanceAlias;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->primaryVSwitchId) {
            @$query['PrimaryVSwitchId'] = $request->primaryVSwitchId;
        }

        if (null !== $request->primaryZoneId) {
            @$query['PrimaryZoneId'] = $request->primaryZoneId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        if (null !== $request->VPCId) {
            @$query['VPCId'] = $request->VPCId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLindormV2Instance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLindormV2InstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Lindorm实例.
     *
     * @param request - CreateLindormV2InstanceRequest
     *
     * @returns CreateLindormV2InstanceResponse
     *
     * @param CreateLindormV2InstanceRequest $request
     *
     * @return CreateLindormV2InstanceResponse
     */
    public function createLindormV2Instance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLindormV2InstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAutoScalingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoScalingConfigResponse
     *
     * @param DeleteAutoScalingConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAutoScalingConfigResponse
     */
    public function deleteAutoScalingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoScalingConfig',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAutoScalingConfigRequest
     *
     * @returns DeleteAutoScalingConfigResponse
     *
     * @param DeleteAutoScalingConfigRequest $request
     *
     * @return DeleteAutoScalingConfigResponse
     */
    public function deleteAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteAutoScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoScalingRuleResponse
     *
     * @param DeleteAutoScalingRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAutoScalingRuleResponse
     */
    public function deleteAutoScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoScalingRule',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteAutoScalingRuleRequest
     *
     * @returns DeleteAutoScalingRuleResponse
     *
     * @param DeleteAutoScalingRuleRequest $request
     *
     * @return DeleteAutoScalingRuleResponse
     */
    public function deleteAutoScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCustomResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomResourceResponse
     *
     * @param DeleteCustomResourceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCustomResourceResponse
     */
    public function deleteCustomResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomResource',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCustomResourceRequest
     *
     * @returns DeleteCustomResourceResponse
     *
     * @param DeleteCustomResourceRequest $request
     *
     * @return DeleteCustomResourceResponse
     */
    public function deleteCustomResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteLdpsComputeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLdpsComputeGroupResponse
     *
     * @param DeleteLdpsComputeGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLdpsComputeGroupResponse
     */
    public function deleteLdpsComputeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLdpsComputeGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteLdpsComputeGroupRequest
     *
     * @returns DeleteLdpsComputeGroupResponse
     *
     * @param DeleteLdpsComputeGroupRequest $request
     *
     * @return DeleteLdpsComputeGroupResponse
     */
    public function deleteLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DeployLdpsSemiManagedComponentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployLdpsSemiManagedComponentResponse
     *
     * @param DeployLdpsSemiManagedComponentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeployLdpsSemiManagedComponentResponse
     */
    public function deployLdpsSemiManagedComponentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->componentName) {
            @$query['ComponentName'] = $request->componentName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployLdpsSemiManagedComponent',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployLdpsSemiManagedComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeployLdpsSemiManagedComponentRequest
     *
     * @returns DeployLdpsSemiManagedComponentResponse
     *
     * @param DeployLdpsSemiManagedComponentRequest $request
     *
     * @return DeployLdpsSemiManagedComponentResponse
     */
    public function deployLdpsSemiManagedComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployLdpsSemiManagedComponentWithOptions($request, $runtime);
    }

    /**
     * Obtains the regions supported by Lindorm.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the regions supported by Lindorm.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAutoScalingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoScalingConfigResponse
     *
     * @param GetAutoScalingConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAutoScalingConfigResponse
     */
    public function getAutoScalingConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoScalingConfig',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAutoScalingConfigRequest
     *
     * @returns GetAutoScalingConfigResponse
     *
     * @param GetAutoScalingConfigRequest $request
     *
     * @return GetAutoScalingConfigResponse
     */
    public function getAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAutoScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoScalingRuleResponse
     *
     * @param GetAutoScalingRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAutoScalingRuleResponse
     */
    public function getAutoScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoScalingRule',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAutoScalingRuleRequest
     *
     * @returns GetAutoScalingRuleResponse
     *
     * @param GetAutoScalingRuleRequest $request
     *
     * @return GetAutoScalingRuleResponse
     */
    public function getAutoScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - GetClientSourceIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientSourceIpResponse
     *
     * @param GetClientSourceIpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetClientSourceIpResponse
     */
    public function getClientSourceIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientSourceIp',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClientSourceIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetClientSourceIpRequest
     *
     * @returns GetClientSourceIpResponse
     *
     * @param GetClientSourceIpRequest $request
     *
     * @return GetClientSourceIpResponse
     */
    public function getClientSourceIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientSourceIpWithOptions($request, $runtime);
    }

    /**
     * @param request - GetEngineDefaultAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEngineDefaultAuthResponse
     *
     * @param GetEngineDefaultAuthRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEngineDefaultAuthResponse
     */
    public function getEngineDefaultAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEngineDefaultAuth',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEngineDefaultAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetEngineDefaultAuthRequest
     *
     * @returns GetEngineDefaultAuthResponse
     *
     * @param GetEngineDefaultAuthRequest $request
     *
     * @return GetEngineDefaultAuthResponse
     */
    public function getEngineDefaultAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEngineDefaultAuthWithOptions($request, $runtime);
    }

    /**
     * Queries the whitelists configured for a Lindorm instance.
     *
     * @param request - GetInstanceIpWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceIpWhiteListResponse
     *
     * @param GetInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceIpWhiteList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the whitelists configured for a Lindorm instance.
     *
     * @param request - GetInstanceIpWhiteListRequest
     *
     * @returns GetInstanceIpWhiteListResponse
     *
     * @param GetInstanceIpWhiteListRequest $request
     *
     * @return GetInstanceIpWhiteListResponse
     */
    public function getInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - GetInstanceSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSecurityGroupsResponse
     *
     * @param GetInstanceSecurityGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetInstanceSecurityGroupsResponse
     */
    public function getInstanceSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSecurityGroups',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetInstanceSecurityGroupsRequest
     *
     * @returns GetInstanceSecurityGroupsResponse
     *
     * @param GetInstanceSecurityGroupsRequest $request
     *
     * @return GetInstanceSecurityGroupsResponse
     */
    public function getInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - GetInstanceSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSummaryResponse
     *
     * @param GetInstanceSummaryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceSummaryResponse
     */
    public function getInstanceSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceSummary',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetInstanceSummaryRequest
     *
     * @returns GetInstanceSummaryResponse
     *
     * @param GetInstanceSummaryRequest $request
     *
     * @return GetInstanceSummaryResponse
     */
    public function getInstanceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLdpsComputeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLdpsComputeGroupResponse
     *
     * @param GetLdpsComputeGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLdpsComputeGroupResponse
     */
    public function getLdpsComputeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLdpsComputeGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLdpsComputeGroupRequest
     *
     * @returns GetLdpsComputeGroupResponse
     *
     * @param GetLdpsComputeGroupRequest $request
     *
     * @return GetLdpsComputeGroupResponse
     */
    public function getLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLdpsNamespacedQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLdpsNamespacedQuotaResponse
     *
     * @param GetLdpsNamespacedQuotaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLdpsNamespacedQuotaResponse
     */
    public function getLdpsNamespacedQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLdpsNamespacedQuota',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLdpsNamespacedQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLdpsNamespacedQuotaRequest
     *
     * @returns GetLdpsNamespacedQuotaResponse
     *
     * @param GetLdpsNamespacedQuotaRequest $request
     *
     * @return GetLdpsNamespacedQuotaResponse
     */
    public function getLdpsNamespacedQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsNamespacedQuotaWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLdpsResourceCostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLdpsResourceCostResponse
     *
     * @param GetLdpsResourceCostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLdpsResourceCostResponse
     */
    public function getLdpsResourceCostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLdpsResourceCost',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLdpsResourceCostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLdpsResourceCostRequest
     *
     * @returns GetLdpsResourceCostResponse
     *
     * @param GetLdpsResourceCostRequest $request
     *
     * @return GetLdpsResourceCostResponse
     */
    public function getLdpsResourceCost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLdpsResourceCostWithOptions($request, $runtime);
    }

    /**
     * 获取Lindorm引擎配置.
     *
     * @param request - GetLindormEngineConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormEngineConfigResponse
     *
     * @param GetLindormEngineConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLindormEngineConfigResponse
     */
    public function getLindormEngineConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormEngineConfig',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormEngineConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Lindorm引擎配置.
     *
     * @param request - GetLindormEngineConfigRequest
     *
     * @returns GetLindormEngineConfigResponse
     *
     * @param GetLindormEngineConfigRequest $request
     *
     * @return GetLindormEngineConfigResponse
     */
    public function getLindormEngineConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormEngineConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of each storage type in a Lindorm instance.
     *
     * @remarks
     * If the version of the underlying storage engine in a Lindorm cluster is 4.1.9 or later, the storage usage values returned for the LStorageUsageList parameter prevail.
     *
     * @param request - GetLindormFsUsedDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormFsUsedDetailResponse
     *
     * @param GetLindormFsUsedDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLindormFsUsedDetailResponse
     */
    public function getLindormFsUsedDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormFsUsedDetail',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormFsUsedDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of each storage type in a Lindorm instance.
     *
     * @remarks
     * If the version of the underlying storage engine in a Lindorm cluster is 4.1.9 or later, the storage usage values returned for the LStorageUsageList parameter prevail.
     *
     * @param request - GetLindormFsUsedDetailRequest
     *
     * @returns GetLindormFsUsedDetailResponse
     *
     * @param GetLindormFsUsedDetailRequest $request
     *
     * @return GetLindormFsUsedDetailResponse
     */
    public function getLindormFsUsedDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormFsUsedDetailWithOptions($request, $runtime);
    }

    /**
     * Obtains the detailed information about a Lindorm instance, including the instance type, billing method, and VPC.
     *
     * @param request - GetLindormInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormInstanceResponse
     *
     * @param GetLindormInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLindormInstanceResponse
     */
    public function getLindormInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormInstance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the detailed information about a Lindorm instance, including the instance type, billing method, and VPC.
     *
     * @param request - GetLindormInstanceRequest
     *
     * @returns GetLindormInstanceResponse
     *
     * @param GetLindormInstanceRequest $request
     *
     * @return GetLindormInstanceResponse
     */
    public function getLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * Obtains the engine types supported by the specified Lindorm instance.
     *
     * @param request - GetLindormInstanceEngineListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormInstanceEngineListResponse
     *
     * @param GetLindormInstanceEngineListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormInstanceEngineList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormInstanceEngineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the engine types supported by the specified Lindorm instance.
     *
     * @param request - GetLindormInstanceEngineListRequest
     *
     * @returns GetLindormInstanceEngineListResponse
     *
     * @param GetLindormInstanceEngineListRequest $request
     *
     * @return GetLindormInstanceEngineListResponse
     */
    public function getLindormInstanceEngineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceEngineListWithOptions($request, $runtime);
    }

    /**
     * Queries the instances that meet the specified conditions.
     *
     * @param request - GetLindormInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormInstanceListResponse
     *
     * @param GetLindormInstanceListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetLindormInstanceListResponse
     */
    public function getLindormInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryStr) {
            @$query['QueryStr'] = $request->queryStr;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->supportEngine) {
            @$query['SupportEngine'] = $request->supportEngine;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormInstanceList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instances that meet the specified conditions.
     *
     * @param request - GetLindormInstanceListRequest
     *
     * @returns GetLindormInstanceListResponse
     *
     * @param GetLindormInstanceListRequest $request
     *
     * @return GetLindormInstanceListResponse
     */
    public function getLindormInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormInstanceListWithOptions($request, $runtime);
    }

    /**
     * 查询实例详情.
     *
     * @param request - GetLindormV2InstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2InstanceResponse
     *
     * @param GetLindormV2InstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetLindormV2InstanceResponse
     */
    public function getLindormV2InstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2Instance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2InstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例详情.
     *
     * @param request - GetLindormV2InstanceRequest
     *
     * @returns GetLindormV2InstanceResponse
     *
     * @param GetLindormV2InstanceRequest $request
     *
     * @return GetLindormV2InstanceResponse
     */
    public function getLindormV2Instance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2InstanceWithOptions($request, $runtime);
    }

    /**
     * 查询新架构实例详情.
     *
     * @param request - GetLindormV2InstanceDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2InstanceDetailsResponse
     *
     * @param GetLindormV2InstanceDetailsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetLindormV2InstanceDetailsResponse
     */
    public function getLindormV2InstanceDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2InstanceDetails',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2InstanceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询新架构实例详情.
     *
     * @param request - GetLindormV2InstanceDetailsRequest
     *
     * @returns GetLindormV2InstanceDetailsResponse
     *
     * @param GetLindormV2InstanceDetailsRequest $request
     *
     * @return GetLindormV2InstanceDetailsResponse
     */
    public function getLindormV2InstanceDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2InstanceDetailsWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLindormV2InstanceEngineListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2InstanceEngineListResponse
     *
     * @param GetLindormV2InstanceEngineListRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetLindormV2InstanceEngineListResponse
     */
    public function getLindormV2InstanceEngineListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2InstanceEngineList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2InstanceEngineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLindormV2InstanceEngineListRequest
     *
     * @returns GetLindormV2InstanceEngineListResponse
     *
     * @param GetLindormV2InstanceEngineListRequest $request
     *
     * @return GetLindormV2InstanceEngineListResponse
     */
    public function getLindormV2InstanceEngineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2InstanceEngineListWithOptions($request, $runtime);
    }

    /**
     * 查询新架构实例详情.
     *
     * @param request - GetLindormV2InstanceForTerraformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2InstanceForTerraformResponse
     *
     * @param GetLindormV2InstanceForTerraformRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetLindormV2InstanceForTerraformResponse
     */
    public function getLindormV2InstanceForTerraformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2InstanceForTerraform',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2InstanceForTerraformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询新架构实例详情.
     *
     * @param request - GetLindormV2InstanceForTerraformRequest
     *
     * @returns GetLindormV2InstanceForTerraformResponse
     *
     * @param GetLindormV2InstanceForTerraformRequest $request
     *
     * @return GetLindormV2InstanceForTerraformResponse
     */
    public function getLindormV2InstanceForTerraform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2InstanceForTerraformWithOptions($request, $runtime);
    }

    /**
     * 查询新架构实例安全组信息.
     *
     * @param request - GetLindormV2InstanceSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2InstanceSecurityGroupsResponse
     *
     * @param GetLindormV2InstanceSecurityGroupsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetLindormV2InstanceSecurityGroupsResponse
     */
    public function getLindormV2InstanceSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2InstanceSecurityGroups',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2InstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询新架构实例安全组信息.
     *
     * @param request - GetLindormV2InstanceSecurityGroupsRequest
     *
     * @returns GetLindormV2InstanceSecurityGroupsResponse
     *
     * @param GetLindormV2InstanceSecurityGroupsRequest $request
     *
     * @return GetLindormV2InstanceSecurityGroupsResponse
     */
    public function getLindormV2InstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2InstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - GetLindormV2StorageUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2StorageUsageResponse
     *
     * @param GetLindormV2StorageUsageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLindormV2StorageUsageResponse
     */
    public function getLindormV2StorageUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2StorageUsage',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2StorageUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetLindormV2StorageUsageRequest
     *
     * @returns GetLindormV2StorageUsageResponse
     *
     * @param GetLindormV2StorageUsageRequest $request
     *
     * @return GetLindormV2StorageUsageResponse
     */
    public function getLindormV2StorageUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2StorageUsageWithOptions($request, $runtime);
    }

    /**
     * 获取流引擎信息.
     *
     * @param request - GetLindormV2StreamEngineInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLindormV2StreamEngineInfoResponse
     *
     * @param GetLindormV2StreamEngineInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetLindormV2StreamEngineInfoResponse
     */
    public function getLindormV2StreamEngineInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLindormV2StreamEngineInfo',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLindormV2StreamEngineInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流引擎信息.
     *
     * @param request - GetLindormV2StreamEngineInfoRequest
     *
     * @returns GetLindormV2StreamEngineInfoResponse
     *
     * @param GetLindormV2StreamEngineInfoRequest $request
     *
     * @return GetLindormV2StreamEngineInfoResponse
     */
    public function getLindormV2StreamEngineInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLindormV2StreamEngineInfoWithOptions($request, $runtime);
    }

    /**
     * 查询弹性伸缩配置.
     *
     * @param tmpReq - ListAutoScalingConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoScalingConfigsResponse
     *
     * @param ListAutoScalingConfigsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListAutoScalingConfigsResponse
     */
    public function listAutoScalingConfigsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAutoScalingConfigsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scaleTypes) {
            $request->scaleTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scaleTypes, 'ScaleTypes', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleTypesShrink) {
            @$query['ScaleTypes'] = $request->scaleTypesShrink;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAutoScalingConfigs',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutoScalingConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询弹性伸缩配置.
     *
     * @param request - ListAutoScalingConfigsRequest
     *
     * @returns ListAutoScalingConfigsResponse
     *
     * @param ListAutoScalingConfigsRequest $request
     *
     * @return ListAutoScalingConfigsResponse
     */
    public function listAutoScalingConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoScalingConfigsWithOptions($request, $runtime);
    }

    /**
     * 查询伸缩记录.
     *
     * @param tmpReq - ListAutoScalingRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoScalingRecordsResponse
     *
     * @param ListAutoScalingRecordsRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return ListAutoScalingRecordsResponse
     */
    public function listAutoScalingRecordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListAutoScalingRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scaleTypes) {
            $request->scaleTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scaleTypes, 'ScaleTypes', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleTypesShrink) {
            @$query['ScaleTypes'] = $request->scaleTypesShrink;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAutoScalingRecords',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutoScalingRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询伸缩记录.
     *
     * @param request - ListAutoScalingRecordsRequest
     *
     * @returns ListAutoScalingRecordsResponse
     *
     * @param ListAutoScalingRecordsRequest $request
     *
     * @return ListAutoScalingRecordsResponse
     */
    public function listAutoScalingRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoScalingRecordsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAutoScalingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutoScalingRulesResponse
     *
     * @param ListAutoScalingRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAutoScalingRulesResponse
     */
    public function listAutoScalingRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAutoScalingRules',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutoScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListAutoScalingRulesRequest
     *
     * @returns ListAutoScalingRulesResponse
     *
     * @param ListAutoScalingRulesRequest $request
     *
     * @return ListAutoScalingRulesResponse
     */
    public function listAutoScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoScalingRulesWithOptions($request, $runtime);
    }

    /**
     * 获取计算引擎资源组列表.
     *
     * @param request - ListLdpsComputeGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLdpsComputeGroupsResponse
     *
     * @param ListLdpsComputeGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLdpsComputeGroupsResponse
     */
    public function listLdpsComputeGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLdpsComputeGroups',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLdpsComputeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取计算引擎资源组列表.
     *
     * @param request - ListLdpsComputeGroupsRequest
     *
     * @returns ListLdpsComputeGroupsResponse
     *
     * @param ListLdpsComputeGroupsRequest $request
     *
     * @return ListLdpsComputeGroupsResponse
     */
    public function listLdpsComputeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLdpsComputeGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags associated with the specified Lindorm instance.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags associated with the specified Lindorm instance.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * 单可用区迁移多可用区基础版.
     *
     * @param request - MigrateSingleZoneToMultiZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateSingleZoneToMultiZoneResponse
     *
     * @param MigrateSingleZoneToMultiZoneRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return MigrateSingleZoneToMultiZoneResponse
     */
    public function migrateSingleZoneToMultiZoneWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->arbitraryVSwitchId) {
            @$query['ArbitraryVSwitchId'] = $request->arbitraryVSwitchId;
        }

        if (null !== $request->arbitraryZoneId) {
            @$query['ArbitraryZoneId'] = $request->arbitraryZoneId;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->standbyVSwitchId) {
            @$query['StandbyVSwitchId'] = $request->standbyVSwitchId;
        }

        if (null !== $request->standbyZoneId) {
            @$query['StandbyZoneId'] = $request->standbyZoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateSingleZoneToMultiZone',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MigrateSingleZoneToMultiZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单可用区迁移多可用区基础版.
     *
     * @param request - MigrateSingleZoneToMultiZoneRequest
     *
     * @returns MigrateSingleZoneToMultiZoneResponse
     *
     * @param MigrateSingleZoneToMultiZoneRequest $request
     *
     * @return MigrateSingleZoneToMultiZoneResponse
     */
    public function migrateSingleZoneToMultiZone($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateSingleZoneToMultiZoneWithOptions($request, $runtime);
    }

    /**
     * 修改弹性伸缩配置.
     *
     * @param tmpReq - ModifyAutoScalingConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoScalingConfigResponse
     *
     * @param ModifyAutoScalingConfigRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyAutoScalingConfigResponse
     */
    public function modifyAutoScalingConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyAutoScalingConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->scaleRuleList) {
            $request->scaleRuleListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scaleRuleList, 'ScaleRuleList', 'json');
        }

        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->configName) {
            @$query['ConfigName'] = $request->configName;
        }

        if (null !== $request->effectiveTimeEnd) {
            @$query['EffectiveTimeEnd'] = $request->effectiveTimeEnd;
        }

        if (null !== $request->effectiveTimeStart) {
            @$query['EffectiveTimeStart'] = $request->effectiveTimeStart;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodesMax) {
            @$query['NodesMax'] = $request->nodesMax;
        }

        if (null !== $request->nodesMin) {
            @$query['NodesMin'] = $request->nodesMin;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleRuleListShrink) {
            @$query['ScaleRuleList'] = $request->scaleRuleListShrink;
        }

        if (null !== $request->scaleType) {
            @$query['ScaleType'] = $request->scaleType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->specId) {
            @$query['SpecId'] = $request->specId;
        }

        if (null !== $request->storageCapacityMax) {
            @$query['StorageCapacityMax'] = $request->storageCapacityMax;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoScalingConfig',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改弹性伸缩配置.
     *
     * @param request - ModifyAutoScalingConfigRequest
     *
     * @returns ModifyAutoScalingConfigResponse
     *
     * @param ModifyAutoScalingConfigRequest $request
     *
     * @return ModifyAutoScalingConfigResponse
     */
    public function modifyAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * 修改弹性伸缩规则.
     *
     * @param request - ModifyAutoScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoScalingRuleResponse
     *
     * @param ModifyAutoScalingRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAutoScalingRuleResponse
     */
    public function modifyAutoScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->observationWindow) {
            @$query['ObservationWindow'] = $request->observationWindow;
        }

        if (null !== $request->operationType) {
            @$query['OperationType'] = $request->operationType;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->scaleInStep) {
            @$query['ScaleInStep'] = $request->scaleInStep;
        }

        if (null !== $request->scaleOutStep) {
            @$query['ScaleOutStep'] = $request->scaleOutStep;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->targetMetric) {
            @$query['TargetMetric'] = $request->targetMetric;
        }

        if (null !== $request->targetNodes) {
            @$query['TargetNodes'] = $request->targetNodes;
        }

        if (null !== $request->thresholdLower) {
            @$query['ThresholdLower'] = $request->thresholdLower;
        }

        if (null !== $request->thresholdUpper) {
            @$query['ThresholdUpper'] = $request->thresholdUpper;
        }

        if (null !== $request->triggerCronExpr) {
            @$query['TriggerCronExpr'] = $request->triggerCronExpr;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoScalingRule',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改弹性伸缩规则.
     *
     * @param request - ModifyAutoScalingRuleRequest
     *
     * @returns ModifyAutoScalingRuleResponse
     *
     * @param ModifyAutoScalingRuleRequest $request
     *
     * @return ModifyAutoScalingRuleResponse
     */
    public function modifyAutoScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of the specified Lindorm instance.
     *
     * @remarks
     * You can call this operation to change the billing method of an instance to subscription or pay-as-you-go.
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/en/pricing-calculator?spm=a2c63.p38356.0.0.2b024c2adcHeXL&_p_lc=1#/commodity/hitsdb_lindormpre_public_intl) of Lindorm. Published on only international site (alibabacloud.com).
     *
     * @param request - ModifyInstancePayTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstancePayTypeResponse
     *
     * @param ModifyInstancePayTypeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyInstancePayTypeResponse
     */
    public function modifyInstancePayTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstancePayType',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstancePayTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of the specified Lindorm instance.
     *
     * @remarks
     * You can call this operation to change the billing method of an instance to subscription or pay-as-you-go.
     * Before you call this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/en/pricing-calculator?spm=a2c63.p38356.0.0.2b024c2adcHeXL&_p_lc=1#/commodity/hitsdb_lindormpre_public_intl) of Lindorm. Published on only international site (alibabacloud.com).
     *
     * @param request - ModifyInstancePayTypeRequest
     *
     * @returns ModifyInstancePayTypeResponse
     *
     * @param ModifyInstancePayTypeRequest $request
     *
     * @return ModifyInstancePayTypeResponse
     */
    public function modifyInstancePayType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstancePayTypeWithOptions($request, $runtime);
    }

    /**
     * 变配实例.
     *
     * @param request - ModifyLindormV2InstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLindormV2InstanceResponse
     *
     * @param ModifyLindormV2InstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyLindormV2InstanceResponse
     */
    public function modifyLindormV2InstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cloudStorageSize) {
            @$query['CloudStorageSize'] = $request->cloudStorageSize;
        }

        if (null !== $request->cloudStorageType) {
            @$query['CloudStorageType'] = $request->cloudStorageType;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nodeGroupList) {
            @$query['NodeGroupList'] = $request->nodeGroupList;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->upgradeType) {
            @$query['UpgradeType'] = $request->upgradeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLindormV2Instance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLindormV2InstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变配实例.
     *
     * @param request - ModifyLindormV2InstanceRequest
     *
     * @returns ModifyLindormV2InstanceResponse
     *
     * @param ModifyLindormV2InstanceRequest $request
     *
     * @return ModifyLindormV2InstanceResponse
     */
    public function modifyLindormV2Instance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLindormV2InstanceWithOptions($request, $runtime);
    }

    /**
     * 新架构修改安全组接口.
     *
     * @param request - ModifyLindormV2InstanceSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLindormV2InstanceSecurityGroupsResponse
     *
     * @param ModifyLindormV2InstanceSecurityGroupsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ModifyLindormV2InstanceSecurityGroupsResponse
     */
    public function modifyLindormV2InstanceSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityGroups) {
            @$query['SecurityGroups'] = $request->securityGroups;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLindormV2InstanceSecurityGroups',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLindormV2InstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新架构修改安全组接口.
     *
     * @param request - ModifyLindormV2InstanceSecurityGroupsRequest
     *
     * @returns ModifyLindormV2InstanceSecurityGroupsResponse
     *
     * @param ModifyLindormV2InstanceSecurityGroupsRequest $request
     *
     * @return ModifyLindormV2InstanceSecurityGroupsResponse
     */
    public function modifyLindormV2InstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLindormV2InstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * 修改Lindorm新版实例白名单.
     *
     * @param request - ModifyLindormV2WhiteIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLindormV2WhiteIpListResponse
     *
     * @param ModifyLindormV2WhiteIpListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyLindormV2WhiteIpListResponse
     */
    public function modifyLindormV2WhiteIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteGroup) {
            @$query['DeleteGroup'] = $request->deleteGroup;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->whiteIpList) {
            @$query['WhiteIpList'] = $request->whiteIpList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLindormV2WhiteIpList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLindormV2WhiteIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Lindorm新版实例白名单.
     *
     * @param request - ModifyLindormV2WhiteIpListRequest
     *
     * @returns ModifyLindormV2WhiteIpListResponse
     *
     * @param ModifyLindormV2WhiteIpListRequest $request
     *
     * @return ModifyLindormV2WhiteIpListResponse
     */
    public function modifyLindormV2WhiteIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLindormV2WhiteIpListWithOptions($request, $runtime);
    }

    /**
     * 开通计算引擎.
     *
     * @param request - OpenComputeEngineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenComputeEngineResponse
     *
     * @param OpenComputeEngineRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OpenComputeEngineResponse
     */
    public function openComputeEngineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cpuLimit) {
            @$query['CpuLimit'] = $request->cpuLimit;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memoryLimit) {
            @$query['MemoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenComputeEngine',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenComputeEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通计算引擎.
     *
     * @param request - OpenComputeEngineRequest
     *
     * @returns OpenComputeEngineResponse
     *
     * @param OpenComputeEngineRequest $request
     *
     * @return OpenComputeEngineResponse
     */
    public function openComputeEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openComputeEngineWithOptions($request, $runtime);
    }

    /**
     * 开通计算引擎前置校验.
     *
     * @param request - OpenComputePreCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenComputePreCheckResponse
     *
     * @param OpenComputePreCheckRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OpenComputePreCheckResponse
     */
    public function openComputePreCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cpuLimit) {
            @$query['CpuLimit'] = $request->cpuLimit;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memoryLimit) {
            @$query['MemoryLimit'] = $request->memoryLimit;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenComputePreCheck',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenComputePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通计算引擎前置校验.
     *
     * @param request - OpenComputePreCheckRequest
     *
     * @returns OpenComputePreCheckResponse
     *
     * @param OpenComputePreCheckRequest $request
     *
     * @return OpenComputePreCheckResponse
     */
    public function openComputePreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openComputePreCheckWithOptions($request, $runtime);
    }

    /**
     * 开通列存索引.
     *
     * @param request - OpenLdpsColumnarIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenLdpsColumnarIndexResponse
     *
     * @param OpenLdpsColumnarIndexRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OpenLdpsColumnarIndexResponse
     */
    public function openLdpsColumnarIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenLdpsColumnarIndex',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenLdpsColumnarIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通列存索引.
     *
     * @param request - OpenLdpsColumnarIndexRequest
     *
     * @returns OpenLdpsColumnarIndexResponse
     *
     * @param OpenLdpsColumnarIndexRequest $request
     *
     * @return OpenLdpsColumnarIndexResponse
     */
    public function openLdpsColumnarIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openLdpsColumnarIndexWithOptions($request, $runtime);
    }

    /**
     * Releases a Lindorm instance.
     *
     * @param request - ReleaseLindormInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseLindormInstanceResponse
     *
     * @param ReleaseLindormInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseLindormInstance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a Lindorm instance.
     *
     * @param request - ReleaseLindormInstanceRequest
     *
     * @returns ReleaseLindormInstanceResponse
     *
     * @param ReleaseLindormInstanceRequest $request
     *
     * @return ReleaseLindormInstanceResponse
     */
    public function releaseLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * 释放实例.
     *
     * @param request - ReleaseLindormV2InstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseLindormV2InstanceResponse
     *
     * @param ReleaseLindormV2InstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseLindormV2InstanceResponse
     */
    public function releaseLindormV2InstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->immediately) {
            @$query['Immediately'] = $request->immediately;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseLindormV2Instance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseLindormV2InstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放实例.
     *
     * @param request - ReleaseLindormV2InstanceRequest
     *
     * @returns ReleaseLindormV2InstanceResponse
     *
     * @param ReleaseLindormV2InstanceRequest $request
     *
     * @return ReleaseLindormV2InstanceResponse
     */
    public function releaseLindormV2Instance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseLindormV2InstanceWithOptions($request, $runtime);
    }

    /**
     * Renews a subscription Lindorm instance.
     *
     * @remarks
     * You can call this operation to renew a subscription Lindorm instance for 1 to 9 months or 1 to 3 years.
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Lindorm.
     *
     * @param request - RenewLindormInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewLindormInstanceResponse
     *
     * @param RenewLindormInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewLindormInstanceResponse
     */
    public function renewLindormInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pricingCycle) {
            @$query['PricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewLindormInstance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a subscription Lindorm instance.
     *
     * @remarks
     * You can call this operation to renew a subscription Lindorm instance for 1 to 9 months or 1 to 3 years.
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of Lindorm.
     *
     * @param request - RenewLindormInstanceRequest
     *
     * @returns RenewLindormInstanceResponse
     *
     * @param RenewLindormInstanceRequest $request
     *
     * @return RenewLindormInstanceResponse
     */
    public function renewLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - RestartLdpsComputeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartLdpsComputeGroupResponse
     *
     * @param RestartLdpsComputeGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RestartLdpsComputeGroupResponse
     */
    public function restartLdpsComputeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartLdpsComputeGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RestartLdpsComputeGroupRequest
     *
     * @returns RestartLdpsComputeGroupResponse
     *
     * @param RestartLdpsComputeGroupRequest $request
     *
     * @return RestartLdpsComputeGroupResponse
     */
    public function restartLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - SetDefaultOlapComputeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDefaultOlapComputeGroupResponse
     *
     * @param SetDefaultOlapComputeGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDefaultOlapComputeGroupResponse
     */
    public function setDefaultOlapComputeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isDefault) {
            @$query['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDefaultOlapComputeGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDefaultOlapComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetDefaultOlapComputeGroupRequest
     *
     * @returns SetDefaultOlapComputeGroupResponse
     *
     * @param SetDefaultOlapComputeGroupRequest $request
     *
     * @return SetDefaultOlapComputeGroupResponse
     */
    public function setDefaultOlapComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultOlapComputeGroupWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the MySQL compatibility feature for a Lindorm instance.
     *
     * @remarks
     * Prerequisites
     * *   The LindormTable version of your instance is 2.6.0 or later.
     * *   The LindormTable of your instance supports LindormSQL V3. The value of the EnableLsqlVersionV3 parameter in the response of the GetLindormInstance operation is true for Lindorm instances purchased after Oct 24, 2023, which indicates that LindormSQL is supported by these instances by default. If you want to enable LindormSQL for instances purchased before Oct 24, 2023, contact the on-duty technical support.
     * You can enable the MySQL compatibility feature for a Lindorm instance only when the instance meets the preceding requirements.
     *
     * @param request - SwitchLSQLV3MySQLServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SwitchLSQLV3MySQLServiceResponse
     *
     * @param SwitchLSQLV3MySQLServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SwitchLSQLV3MySQLServiceResponse
     */
    public function switchLSQLV3MySQLServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SwitchLSQLV3MySQLService',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SwitchLSQLV3MySQLServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the MySQL compatibility feature for a Lindorm instance.
     *
     * @remarks
     * Prerequisites
     * *   The LindormTable version of your instance is 2.6.0 or later.
     * *   The LindormTable of your instance supports LindormSQL V3. The value of the EnableLsqlVersionV3 parameter in the response of the GetLindormInstance operation is true for Lindorm instances purchased after Oct 24, 2023, which indicates that LindormSQL is supported by these instances by default. If you want to enable LindormSQL for instances purchased before Oct 24, 2023, contact the on-duty technical support.
     * You can enable the MySQL compatibility feature for a Lindorm instance only when the instance meets the preceding requirements.
     *
     * @param request - SwitchLSQLV3MySQLServiceRequest
     *
     * @returns SwitchLSQLV3MySQLServiceResponse
     *
     * @param SwitchLSQLV3MySQLServiceRequest $request
     *
     * @return SwitchLSQLV3MySQLServiceResponse
     */
    public function switchLSQLV3MySQLService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchLSQLV3MySQLServiceWithOptions($request, $runtime);
    }

    /**
     * Associates tags with a single or multiple Lindorm instances.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates tags with a single or multiple Lindorm instances.
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

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Removes tags from a Lindorm instance.
     *
     * @remarks
     * If a tag is not added to any Lindorm instance, it is deleted.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from a Lindorm instance.
     *
     * @remarks
     * If a tag is not added to any Lindorm instance, it is deleted.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Configures an IP address whitelist for a Lindorm instance.
     *
     * @param request - UpdateInstanceIpWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceIpWhiteListResponse
     *
     * @param UpdateInstanceIpWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->delete) {
            @$query['Delete'] = $request->delete;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityIpList) {
            @$query['SecurityIpList'] = $request->securityIpList;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceIpWhiteList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures an IP address whitelist for a Lindorm instance.
     *
     * @param request - UpdateInstanceIpWhiteListRequest
     *
     * @returns UpdateInstanceIpWhiteListResponse
     *
     * @param UpdateInstanceIpWhiteListRequest $request
     *
     * @return UpdateInstanceIpWhiteListResponse
     */
    public function updateInstanceIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateInstanceSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceSecurityGroupsResponse
     *
     * @param UpdateInstanceSecurityGroupsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateInstanceSecurityGroupsResponse
     */
    public function updateInstanceSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityGroups) {
            @$query['SecurityGroups'] = $request->securityGroups;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceSecurityGroups',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateInstanceSecurityGroupsRequest
     *
     * @returns UpdateInstanceSecurityGroupsResponse
     *
     * @param UpdateInstanceSecurityGroupsRequest $request
     *
     * @return UpdateInstanceSecurityGroupsResponse
     */
    public function updateInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateLdpsComputeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLdpsComputeGroupResponse
     *
     * @param UpdateLdpsComputeGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLdpsComputeGroupResponse
     */
    public function updateLdpsComputeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->properties) {
            @$query['Properties'] = $request->properties;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLdpsComputeGroup',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLdpsComputeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateLdpsComputeGroupRequest
     *
     * @returns UpdateLdpsComputeGroupResponse
     *
     * @param UpdateLdpsComputeGroupRequest $request
     *
     * @return UpdateLdpsComputeGroupResponse
     */
    public function updateLdpsComputeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLdpsComputeGroupWithOptions($request, $runtime);
    }

    /**
     * 更新实例名称或删除保护.
     *
     * @param request - UpdateLindormInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLindormInstanceAttributeResponse
     *
     * @param UpdateLindormInstanceAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateLindormInstanceAttributeResponse
     */
    public function updateLindormInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->instanceAlias) {
            @$query['InstanceAlias'] = $request->instanceAlias;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLindormInstanceAttribute',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLindormInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例名称或删除保护.
     *
     * @param request - UpdateLindormInstanceAttributeRequest
     *
     * @returns UpdateLindormInstanceAttributeResponse
     *
     * @param UpdateLindormInstanceAttributeRequest $request
     *
     * @return UpdateLindormInstanceAttributeResponse
     */
    public function updateLindormInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLindormInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * 更新LindormV2Instance.
     *
     * @param request - UpdateLindormV2InstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLindormV2InstanceResponse
     *
     * @param UpdateLindormV2InstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateLindormV2InstanceResponse
     */
    public function updateLindormV2InstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->capacityStorageSize) {
            @$query['CapacityStorageSize'] = $request->capacityStorageSize;
        }

        if (null !== $request->cloudStorageSize) {
            @$query['CloudStorageSize'] = $request->cloudStorageSize;
        }

        if (null !== $request->cloudStorageType) {
            @$query['CloudStorageType'] = $request->cloudStorageType;
        }

        if (null !== $request->enableCapacityStorage) {
            @$query['EnableCapacityStorage'] = $request->enableCapacityStorage;
        }

        if (null !== $request->engineList) {
            @$query['EngineList'] = $request->engineList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLindormV2Instance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLindormV2InstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新LindormV2Instance.
     *
     * @param request - UpdateLindormV2InstanceRequest
     *
     * @returns UpdateLindormV2InstanceResponse
     *
     * @param UpdateLindormV2InstanceRequest $request
     *
     * @return UpdateLindormV2InstanceResponse
     */
    public function updateLindormV2Instance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLindormV2InstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateLindormV2InstanceParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLindormV2InstanceParameterResponse
     *
     * @param UpdateLindormV2InstanceParameterRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateLindormV2InstanceParameterResponse
     */
    public function updateLindormV2InstanceParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parameterKey) {
            @$query['ParameterKey'] = $request->parameterKey;
        }

        if (null !== $request->parameterValue) {
            @$query['ParameterValue'] = $request->parameterValue;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->updateType) {
            @$query['UpdateType'] = $request->updateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLindormV2InstanceParameter',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLindormV2InstanceParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateLindormV2InstanceParameterRequest
     *
     * @returns UpdateLindormV2InstanceParameterResponse
     *
     * @param UpdateLindormV2InstanceParameterRequest $request
     *
     * @return UpdateLindormV2InstanceParameterResponse
     */
    public function updateLindormV2InstanceParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLindormV2InstanceParameterWithOptions($request, $runtime);
    }

    /**
     * 修改Lindorm新版实例白名单分组列表.
     *
     * @param request - UpdateLindormV2WhiteIpListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLindormV2WhiteIpListResponse
     *
     * @param UpdateLindormV2WhiteIpListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLindormV2WhiteIpListResponse
     */
    public function updateLindormV2WhiteIpListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->whiteIpGroupList) {
            @$query['WhiteIpGroupList'] = $request->whiteIpGroupList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLindormV2WhiteIpList',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLindormV2WhiteIpListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改Lindorm新版实例白名单分组列表.
     *
     * @param request - UpdateLindormV2WhiteIpListRequest
     *
     * @returns UpdateLindormV2WhiteIpListResponse
     *
     * @param UpdateLindormV2WhiteIpListRequest $request
     *
     * @return UpdateLindormV2WhiteIpListResponse
     */
    public function updateLindormV2WhiteIpList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLindormV2WhiteIpListWithOptions($request, $runtime);
    }

    /**
     * Upgrades, scales up, or enable cold storage for a Lindorm instance.
     *
     * @remarks
     * For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine typpes](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *
     * @param request - UpgradeLindormInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeLindormInstanceResponse
     *
     * @param UpgradeLindormInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpgradeLindormInstanceResponse
     */
    public function upgradeLindormInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterStorage) {
            @$query['ClusterStorage'] = $request->clusterStorage;
        }

        if (null !== $request->coldStorage) {
            @$query['ColdStorage'] = $request->coldStorage;
        }

        if (null !== $request->coreSingleStorage) {
            @$query['CoreSingleStorage'] = $request->coreSingleStorage;
        }

        if (null !== $request->filestoreNum) {
            @$query['FilestoreNum'] = $request->filestoreNum;
        }

        if (null !== $request->filestoreSpec) {
            @$query['FilestoreSpec'] = $request->filestoreSpec;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lindormNum) {
            @$query['LindormNum'] = $request->lindormNum;
        }

        if (null !== $request->lindormSpec) {
            @$query['LindormSpec'] = $request->lindormSpec;
        }

        if (null !== $request->logNum) {
            @$query['LogNum'] = $request->logNum;
        }

        if (null !== $request->logSingleStorage) {
            @$query['LogSingleStorage'] = $request->logSingleStorage;
        }

        if (null !== $request->logSpec) {
            @$query['LogSpec'] = $request->logSpec;
        }

        if (null !== $request->ltsCoreNum) {
            @$query['LtsCoreNum'] = $request->ltsCoreNum;
        }

        if (null !== $request->ltsCoreSpec) {
            @$query['LtsCoreSpec'] = $request->ltsCoreSpec;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->solrNum) {
            @$query['SolrNum'] = $request->solrNum;
        }

        if (null !== $request->solrSpec) {
            @$query['SolrSpec'] = $request->solrSpec;
        }

        if (null !== $request->streamNum) {
            @$query['StreamNum'] = $request->streamNum;
        }

        if (null !== $request->streamSpec) {
            @$query['StreamSpec'] = $request->streamSpec;
        }

        if (null !== $request->tsdbNum) {
            @$query['TsdbNum'] = $request->tsdbNum;
        }

        if (null !== $request->tsdbSpec) {
            @$query['TsdbSpec'] = $request->tsdbSpec;
        }

        if (null !== $request->upgradeType) {
            @$query['UpgradeType'] = $request->upgradeType;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeLindormInstance',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeLindormInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades, scales up, or enable cold storage for a Lindorm instance.
     *
     * @remarks
     * For more information about how to select the storage type and engine type when you create a Lindorm instance, see [Select engine typpes](https://help.aliyun.com/document_detail/181971.html) and [Select storage types](https://help.aliyun.com/document_detail/174643.html).
     *
     * @param request - UpgradeLindormInstanceRequest
     *
     * @returns UpgradeLindormInstanceResponse
     *
     * @param UpgradeLindormInstanceRequest $request
     *
     * @return UpgradeLindormInstanceResponse
     */
    public function upgradeLindormInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeLindormInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - UpgradeLindormV2StreamEngineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeLindormV2StreamEngineResponse
     *
     * @param UpgradeLindormV2StreamEngineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpgradeLindormV2StreamEngineResponse
     */
    public function upgradeLindormV2StreamEngineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customConfig) {
            @$query['CustomConfig'] = $request->customConfig;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->resourceGroupName) {
            @$query['ResourceGroupName'] = $request->resourceGroupName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->spec) {
            @$query['Spec'] = $request->spec;
        }

        if (null !== $request->specId) {
            @$query['SpecId'] = $request->specId;
        }

        if (null !== $request->upgradeType) {
            @$query['UpgradeType'] = $request->upgradeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeLindormV2StreamEngine',
            'version' => '2020-06-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeLindormV2StreamEngineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpgradeLindormV2StreamEngineRequest
     *
     * @returns UpgradeLindormV2StreamEngineResponse
     *
     * @param UpgradeLindormV2StreamEngineRequest $request
     *
     * @return UpgradeLindormV2StreamEngineResponse
     */
    public function upgradeLindormV2StreamEngine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeLindormV2StreamEngineWithOptions($request, $runtime);
    }
}
