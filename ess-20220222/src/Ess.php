<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ess\V20220222\Models\ApplyEciScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ApplyEciScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ApplyScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ApplyScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachAlbServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachAlbServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachDBInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachDBInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachLoadBalancersRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachLoadBalancersResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachVServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\AttachVServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CompleteLifecycleActionRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CompleteLifecycleActionResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateLifecycleHookRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateLifecycleHookResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateNotificationConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateNotificationConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeactivateScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeactivateScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteAlarmRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteAlarmResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteEciScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteEciScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteLifecycleHookRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteLifecycleHookResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteNotificationConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteNotificationConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleActionsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleActionsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLimitationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLimitationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationTypesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeNotificationTypesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScheduledTasksRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScheduledTasksResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachAlbServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachAlbServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachDBInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachDBInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachLoadBalancersRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachLoadBalancersResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachVServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DetachVServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DisableAlarmRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DisableAlarmResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DisableScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DisableScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnableAlarmRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnableAlarmResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnableScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnableScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnterStandbyRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\EnterStandbyResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ExecuteScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ExecuteScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ExitStandbyRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ExitStandbyResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlarmRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlarmResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyLifecycleHookRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyLifecycleHookResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyNotificationConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyNotificationConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RebalanceInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RebalanceInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RecordLifecycleActionHeartbeatRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RecordLifecycleActionHeartbeatResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ResumeProcessesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ResumeProcessesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentShrinkRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetGroupDeletionProtectionRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetGroupDeletionProtectionResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstanceHealthRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstanceHealthResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstancesProtectionRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstancesProtectionResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\SuspendProcessesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SuspendProcessesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\VerifyAuthenticationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\VerifyAuthenticationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\VerifyUserRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\VerifyUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ess extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'                  => 'ess.aliyuncs.com',
            'cn-beijing'                  => 'ess.aliyuncs.com',
            'cn-hangzhou'                 => 'ess.aliyuncs.com',
            'cn-shanghai'                 => 'ess.aliyuncs.com',
            'cn-shenzhen'                 => 'ess.aliyuncs.com',
            'cn-hongkong'                 => 'ess.aliyuncs.com',
            'ap-southeast-1'              => 'ess.aliyuncs.com',
            'us-east-1'                   => 'ess.aliyuncs.com',
            'us-west-1'                   => 'ess.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ess.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ess.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ess.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ess.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ess.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ess.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ess.aliyuncs.com',
            'cn-edge-1'                   => 'ess.aliyuncs.com',
            'cn-fujian'                   => 'ess.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ess.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ess.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ess.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ess.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ess.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ess.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ess.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ess.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ess.aliyuncs.com',
            'cn-shanghai-inner'           => 'ess.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ess.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ess.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ess.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ess.aliyuncs.com',
            'cn-wuhan'                    => 'ess.aliyuncs.com',
            'cn-yushanfang'               => 'ess.aliyuncs.com',
            'cn-zhangbei'                 => 'ess.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ess.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ess.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ess.aliyuncs.com',
            'eu-west-1-oxs'               => 'ess.aliyuncs.com',
            'rus-west-1-pop'              => 'ess.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ess', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApplyEciScalingConfigurationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ApplyEciScalingConfigurationResponse
     */
    public function applyEciScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->format)) {
            $query['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyEciScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyEciScalingConfigurationRequest $request
     *
     * @return ApplyEciScalingConfigurationResponse
     */
    public function applyEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ApplyScalingGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApplyScalingGroupResponse
     */
    public function applyScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->format)) {
            $query['Format'] = $request->format;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyScalingGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyScalingGroupRequest $request
     *
     * @return ApplyScalingGroupResponse
     */
    public function applyScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyScalingGroupWithOptions($request, $runtime);
    }

    /**
     * Before you associate an ALB server group with a scaling group, make sure that the following requirements are met:
     *   * *   The scaling group resides in a virtual private cloud (VPC). The scaling group and the ALB server group must reside in the same VPC.
     *   * *   The ALB server group is in the Available state.
     *   * *   You can associate only a limited number of ALB server groups with a scaling group. To view the quota or manually request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     *   *
     * @param AttachAlbServerGroupsRequest $request AttachAlbServerGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachAlbServerGroupsResponse AttachAlbServerGroupsResponse
     */
    public function attachAlbServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->albServerGroups)) {
            $query['AlbServerGroups'] = $request->albServerGroups;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceAttach)) {
            $query['ForceAttach'] = $request->forceAttach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachAlbServerGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachAlbServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you associate an ALB server group with a scaling group, make sure that the following requirements are met:
     *   * *   The scaling group resides in a virtual private cloud (VPC). The scaling group and the ALB server group must reside in the same VPC.
     *   * *   The ALB server group is in the Available state.
     *   * *   You can associate only a limited number of ALB server groups with a scaling group. To view the quota or manually request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     *   *
     * @param AttachAlbServerGroupsRequest $request AttachAlbServerGroupsRequest
     *
     * @return AttachAlbServerGroupsResponse AttachAlbServerGroupsResponse
     */
    public function attachAlbServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAlbServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Before you associate an ApsaraDB RDS instance with a scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     *   * *   The ApsaraDB RDS instance and the scaling group must belong to the same Alibaba Cloud account.
     *   * *   The ApsaraDB RDS instance must be unlocked. For more information about the lock policy, see [ApsaraDB RDS usage notes](~~41872~~).
     *   * *   The ApsaraDB RDS instance must be in the Running state.
     *   * After an ApsaraDB RDS instance is associated with the scaling group, the default IP address whitelist of the ApsaraDB RDS instance can contain no more than 1,000 IP addresses. For more information, see [Set the whitelist](~~43185~~).
     *   *
     * @param AttachDBInstancesRequest $request AttachDBInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDBInstancesResponse AttachDBInstancesResponse
     */
    public function attachDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstances)) {
            $query['DBInstances'] = $request->DBInstances;
        }
        if (!Utils::isUnset($request->forceAttach)) {
            $query['ForceAttach'] = $request->forceAttach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDBInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you associate an ApsaraDB RDS instance with a scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     *   * *   The ApsaraDB RDS instance and the scaling group must belong to the same Alibaba Cloud account.
     *   * *   The ApsaraDB RDS instance must be unlocked. For more information about the lock policy, see [ApsaraDB RDS usage notes](~~41872~~).
     *   * *   The ApsaraDB RDS instance must be in the Running state.
     *   * After an ApsaraDB RDS instance is associated with the scaling group, the default IP address whitelist of the ApsaraDB RDS instance can contain no more than 1,000 IP addresses. For more information, see [Set the whitelist](~~43185~~).
     *   *
     * @param AttachDBInstancesRequest $request AttachDBInstancesRequest
     *
     * @return AttachDBInstancesResponse AttachDBInstancesResponse
     */
    public function attachDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDBInstancesWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   The scaling group is in the Active state.
     *   * *   No scaling activities in the scaling group are in progress.
     *   * The ECS instances or the elastic container instances that you want to add to a scaling group must meet the following requirements:
     *   * *   The instances reside in the same region as the scaling group.
     *   * *   The instances must be in the Running state.
     *   * *   The instances are not added to other scaling groups.
     *   * *   The instances use the subscription or pay-as-you-go billing method, or are preemptible instances.
     *   * *   If the VswitchID parameter is specified for a scaling group, the instances that are in the classic network or those that are not in the same virtual private cloud (VPC) as the specified vSwitch cannot be added to the scaling group.
     *   * *   If the VswitchID parameter is not specified for a scaling group, the instances that are in VPCs cannot be added to the scaling group.
     *   * If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     *   * If the sum of the number of instances that you want to add and the number of existing instances in the scaling group is greater than the value of the MaxSize parameter, the call fails.
     *   * Instances that are manually added by calling the AttachInstances operation are not associated with the active scaling configuration of the scaling group.
     *   *
     * @param AttachInstancesRequest $request AttachInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachInstancesResponse AttachInstancesResponse
     */
    public function attachInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->entrusted)) {
            $query['Entrusted'] = $request->entrusted;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->lifecycleHook)) {
            $query['LifecycleHook'] = $request->lifecycleHook;
        }
        if (!Utils::isUnset($request->loadBalancerWeights)) {
            $query['LoadBalancerWeights'] = $request->loadBalancerWeights;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   The scaling group is in the Active state.
     *   * *   No scaling activities in the scaling group are in progress.
     *   * The ECS instances or the elastic container instances that you want to add to a scaling group must meet the following requirements:
     *   * *   The instances reside in the same region as the scaling group.
     *   * *   The instances must be in the Running state.
     *   * *   The instances are not added to other scaling groups.
     *   * *   The instances use the subscription or pay-as-you-go billing method, or are preemptible instances.
     *   * *   If the VswitchID parameter is specified for a scaling group, the instances that are in the classic network or those that are not in the same virtual private cloud (VPC) as the specified vSwitch cannot be added to the scaling group.
     *   * *   If the VswitchID parameter is not specified for a scaling group, the instances that are in VPCs cannot be added to the scaling group.
     *   * If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     *   * If the sum of the number of instances that you want to add and the number of existing instances in the scaling group is greater than the value of the MaxSize parameter, the call fails.
     *   * Instances that are manually added by calling the AttachInstances operation are not associated with the active scaling configuration of the scaling group.
     *   *
     * @param AttachInstancesRequest $request AttachInstancesRequest
     *
     * @return AttachInstancesResponse AttachInstancesResponse
     */
    public function attachInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachInstancesWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation to attach a CLB instance to your scaling group, take note of the following items:
     *   * *   The CLB instance and the scaling group must belong to the same Alibaba Cloud account.
     *   * *   The CLB instance and the scaling group must reside in the same region.
     *   * *   The CLB instance must be in the Running state.
     *   * *   The CLB instance must be configured with at least one listener. Health check is enabled for the CLB instance.
     *   * *   The CLB instance and the scaling group must be in the same virtual private cloud (VPC) if their network type is VPC.
     *   * *   If the network type of the scaling group is VPC, the network type of the CLB instance is classic network, and the CLB backend server groups contain instances of the VPC network type, the instances and the scaling group must be in the same VPC.
     *   * *   You can attach only a limited number of CLB instances to a scaling group. Fore more information, see [Limits](~~25863~~).
     *   *
     * @param AttachLoadBalancersRequest $request AttachLoadBalancersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachLoadBalancersResponse AttachLoadBalancersResponse
     */
    public function attachLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceAttach)) {
            $query['ForceAttach'] = $request->forceAttach;
        }
        if (!Utils::isUnset($request->loadBalancerConfigs)) {
            $query['LoadBalancerConfigs'] = $request->loadBalancerConfigs;
        }
        if (!Utils::isUnset($request->loadBalancers)) {
            $query['LoadBalancers'] = $request->loadBalancers;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachLoadBalancers',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation to attach a CLB instance to your scaling group, take note of the following items:
     *   * *   The CLB instance and the scaling group must belong to the same Alibaba Cloud account.
     *   * *   The CLB instance and the scaling group must reside in the same region.
     *   * *   The CLB instance must be in the Running state.
     *   * *   The CLB instance must be configured with at least one listener. Health check is enabled for the CLB instance.
     *   * *   The CLB instance and the scaling group must be in the same virtual private cloud (VPC) if their network type is VPC.
     *   * *   If the network type of the scaling group is VPC, the network type of the CLB instance is classic network, and the CLB backend server groups contain instances of the VPC network type, the instances and the scaling group must be in the same VPC.
     *   * *   You can attach only a limited number of CLB instances to a scaling group. Fore more information, see [Limits](~~25863~~).
     *   *
     * @param AttachLoadBalancersRequest $request AttachLoadBalancersRequest
     *
     * @return AttachLoadBalancersResponse AttachLoadBalancersResponse
     */
    public function attachLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @param AttachServerGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachServerGroupsResponse
     */
    public function attachServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceAttach)) {
            $query['ForceAttach'] = $request->forceAttach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->serverGroups)) {
            $query['ServerGroups'] = $request->serverGroups;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachServerGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachServerGroupsRequest $request
     *
     * @return AttachServerGroupsResponse
     */
    public function attachServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation to attach a vServer group to your scaling group, take note of the following items:
     *   * *   The CLB instance and the scaling group must belong to the same Alibaba Cloud account.
     *   * *   The CLB instance and the scaling group must reside in the same region.
     *   * *   The CLB instance must be in the Running state.
     *   * *   The CLB instance must be configured with at least one listener. Health check is enabled for the CLB instance.
     *   * *   The CLB instance and the scaling group must be in the same VPC if their network type is VPC.
     *   * *   If the network type of the scaling group is VPC, the network type of the CLB instance is classic network, and the vServer groups of the CLB instance contain instances of the VPC network type, the instances and the scaling group must be in the same VPC.
     *   * *   The vServer group that you want to attach to your scaling group must belong to the CLB instance.
     *   * *   You can attach only a limited number of vServer groups to a scaling group. For information about the quota on vServer groups, see [Limits](~~25863~~).
     *   * When you call this operation, you must specify the following parameters:
     *   * *   LoadBalancerId: the ID of the CLB instance.
     *   * *   VServerGroupId: the ID of the vServer group.
     *   * *   Port: the port number of the vServer group.
     *   * If a vServer group is attached to a scaling group by using different ports, Auto Scaling considers that more than one vServer group is attached to the scaling group. If multiple vServer groups with the same group ID and port number are specified in the request parameters, only the first vServer group is used. The other vServer groups are ignored.
     *   *
     * @param AttachVServerGroupsRequest $request AttachVServerGroupsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachVServerGroupsResponse AttachVServerGroupsResponse
     */
    public function attachVServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceAttach)) {
            $query['ForceAttach'] = $request->forceAttach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->VServerGroups)) {
            $query['VServerGroups'] = $request->VServerGroups;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachVServerGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation to attach a vServer group to your scaling group, take note of the following items:
     *   * *   The CLB instance and the scaling group must belong to the same Alibaba Cloud account.
     *   * *   The CLB instance and the scaling group must reside in the same region.
     *   * *   The CLB instance must be in the Running state.
     *   * *   The CLB instance must be configured with at least one listener. Health check is enabled for the CLB instance.
     *   * *   The CLB instance and the scaling group must be in the same VPC if their network type is VPC.
     *   * *   If the network type of the scaling group is VPC, the network type of the CLB instance is classic network, and the vServer groups of the CLB instance contain instances of the VPC network type, the instances and the scaling group must be in the same VPC.
     *   * *   The vServer group that you want to attach to your scaling group must belong to the CLB instance.
     *   * *   You can attach only a limited number of vServer groups to a scaling group. For information about the quota on vServer groups, see [Limits](~~25863~~).
     *   * When you call this operation, you must specify the following parameters:
     *   * *   LoadBalancerId: the ID of the CLB instance.
     *   * *   VServerGroupId: the ID of the vServer group.
     *   * *   Port: the port number of the vServer group.
     *   * If a vServer group is attached to a scaling group by using different ports, Auto Scaling considers that more than one vServer group is attached to the scaling group. If multiple vServer groups with the same group ID and port number are specified in the request parameters, only the first vServer group is used. The other vServer groups are ignored.
     *   *
     * @param AttachVServerGroupsRequest $request AttachVServerGroupsRequest
     *
     * @return AttachVServerGroupsResponse AttachVServerGroupsResponse
     */
    public function attachVServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you set the LifecycleActionResult parameter for a lifecycle hook of a scaling group to CONTINUE in the operation, Auto Scaling continues to complete the scaling activity in the scaling group after the lifecycle hook times out. If you set the LifecycleActionResult parameter to ABANDON, Auto Scaling stops the scaling activity in the scaling group after the lifecycle hook times out.
     *   *
     * @param CompleteLifecycleActionRequest $request CompleteLifecycleActionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CompleteLifecycleActionResponse CompleteLifecycleActionResponse
     */
    public function completeLifecycleActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lifecycleActionResult)) {
            $query['LifecycleActionResult'] = $request->lifecycleActionResult;
        }
        if (!Utils::isUnset($request->lifecycleActionToken)) {
            $query['LifecycleActionToken'] = $request->lifecycleActionToken;
        }
        if (!Utils::isUnset($request->lifecycleHookId)) {
            $query['LifecycleHookId'] = $request->lifecycleHookId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompleteLifecycleAction',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompleteLifecycleActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you set the LifecycleActionResult parameter for a lifecycle hook of a scaling group to CONTINUE in the operation, Auto Scaling continues to complete the scaling activity in the scaling group after the lifecycle hook times out. If you set the LifecycleActionResult parameter to ABANDON, Auto Scaling stops the scaling activity in the scaling group after the lifecycle hook times out.
     *   *
     * @param CompleteLifecycleActionRequest $request CompleteLifecycleActionRequest
     *
     * @return CompleteLifecycleActionResponse CompleteLifecycleActionResponse
     */
    public function completeLifecycleAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeLifecycleActionWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlarmResponse
     */
    public function createAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmActions)) {
            $query['AlarmActions'] = $request->alarmActions;
        }
        if (!Utils::isUnset($request->comparisonOperator)) {
            $query['ComparisonOperator'] = $request->comparisonOperator;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effective)) {
            $query['Effective'] = $request->effective;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->expressions)) {
            $query['Expressions'] = $request->expressions;
        }
        if (!Utils::isUnset($request->expressionsLogicOperator)) {
            $query['ExpressionsLogicOperator'] = $request->expressionsLogicOperator;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->statistics)) {
            $query['Statistics'] = $request->statistics;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAlarm',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAlarmRequest $request
     *
     * @return CreateAlarmResponse
     */
    public function createAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlarmWithOptions($request, $runtime);
    }

    /**
     * A scaling configuration is a template that is used to create elastic container instances during scale-out activities.
     *   * You can specify the Cpu and Memory parameters to determine the range of instance types. If you specify the parameters, Auto Scaling determines the available instance types based on factors such as I/O optimization requirements and zones. Auto Scaling preferentially creates elastic container instances of the instance type that is provided at the lowest price. This scaling mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *   *
     * @param CreateEciScalingConfigurationRequest $request CreateEciScalingConfigurationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEciScalingConfigurationResponse CreateEciScalingConfigurationResponse
     */
    public function createEciScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfos)) {
            $query['AcrRegistryInfos'] = $request->acrRegistryInfos;
        }
        if (!Utils::isUnset($request->activeDeadlineSeconds)) {
            $query['ActiveDeadlineSeconds'] = $request->activeDeadlineSeconds;
        }
        if (!Utils::isUnset($request->autoCreateEip)) {
            $query['AutoCreateEip'] = $request->autoCreateEip;
        }
        if (!Utils::isUnset($request->autoMatchImageCache)) {
            $query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }
        if (!Utils::isUnset($request->containerGroupName)) {
            $query['ContainerGroupName'] = $request->containerGroupName;
        }
        if (!Utils::isUnset($request->containers)) {
            $query['Containers'] = $request->containers;
        }
        if (!Utils::isUnset($request->costOptimization)) {
            $query['CostOptimization'] = $request->costOptimization;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->cpuOptionsCore)) {
            $query['CpuOptionsCore'] = $request->cpuOptionsCore;
        }
        if (!Utils::isUnset($request->cpuOptionsThreadsPerCore)) {
            $query['CpuOptionsThreadsPerCore'] = $request->cpuOptionsThreadsPerCore;
        }
        if (!Utils::isUnset($request->dataCacheBucket)) {
            $query['DataCacheBucket'] = $request->dataCacheBucket;
        }
        if (!Utils::isUnset($request->dataCacheBurstingEnabled)) {
            $query['DataCacheBurstingEnabled'] = $request->dataCacheBurstingEnabled;
        }
        if (!Utils::isUnset($request->dataCachePL)) {
            $query['DataCachePL'] = $request->dataCachePL;
        }
        if (!Utils::isUnset($request->dataCacheProvisionedIops)) {
            $query['DataCacheProvisionedIops'] = $request->dataCacheProvisionedIops;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dnsConfigNameServers)) {
            $query['DnsConfigNameServers'] = $request->dnsConfigNameServers;
        }
        if (!Utils::isUnset($request->dnsConfigOptions)) {
            $query['DnsConfigOptions'] = $request->dnsConfigOptions;
        }
        if (!Utils::isUnset($request->dnsConfigSearchs)) {
            $query['DnsConfigSearchs'] = $request->dnsConfigSearchs;
        }
        if (!Utils::isUnset($request->dnsPolicy)) {
            $query['DnsPolicy'] = $request->dnsPolicy;
        }
        if (!Utils::isUnset($request->egressBandwidth)) {
            $query['EgressBandwidth'] = $request->egressBandwidth;
        }
        if (!Utils::isUnset($request->eipBandwidth)) {
            $query['EipBandwidth'] = $request->eipBandwidth;
        }
        if (!Utils::isUnset($request->enableSls)) {
            $query['EnableSls'] = $request->enableSls;
        }
        if (!Utils::isUnset($request->ephemeralStorage)) {
            $query['EphemeralStorage'] = $request->ephemeralStorage;
        }
        if (!Utils::isUnset($request->hostAliases)) {
            $query['HostAliases'] = $request->hostAliases;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageRegistryCredentials)) {
            $query['ImageRegistryCredentials'] = $request->imageRegistryCredentials;
        }
        if (!Utils::isUnset($request->imageSnapshotId)) {
            $query['ImageSnapshotId'] = $request->imageSnapshotId;
        }
        if (!Utils::isUnset($request->ingressBandwidth)) {
            $query['IngressBandwidth'] = $request->ingressBandwidth;
        }
        if (!Utils::isUnset($request->initContainers)) {
            $query['InitContainers'] = $request->initContainers;
        }
        if (!Utils::isUnset($request->instanceFamilyLevel)) {
            $query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->loadBalancerWeight)) {
            $query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ntpServers)) {
            $query['NtpServers'] = $request->ntpServers;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->restartPolicy)) {
            $query['RestartPolicy'] = $request->restartPolicy;
        }
        if (!Utils::isUnset($request->scalingConfigurationName)) {
            $query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->securityContextSysctls)) {
            $query['SecurityContextSysctls'] = $request->securityContextSysctls;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->volumes)) {
            $query['Volumes'] = $request->volumes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEciScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A scaling configuration is a template that is used to create elastic container instances during scale-out activities.
     *   * You can specify the Cpu and Memory parameters to determine the range of instance types. If you specify the parameters, Auto Scaling determines the available instance types based on factors such as I/O optimization requirements and zones. Auto Scaling preferentially creates elastic container instances of the instance type that is provided at the lowest price. This scaling mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *   *
     * @param CreateEciScalingConfigurationRequest $request CreateEciScalingConfigurationRequest
     *
     * @return CreateEciScalingConfigurationResponse CreateEciScalingConfigurationResponse
     */
    public function createEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * You can create up to six lifecycle hooks for each scaling group. Elastic Compute Service (ECS) instances are not immediately added to or removed from scaling groups that have effective lifecycle hooks during scaling activities. The ECS instances are added to or removed from the scaling groups only after the lifecycle hooks time out. The period of time before the lifecycle hooks time out is specified by the HeartbeatTimeout parameter. Before lifecycle hooks time out, you can initialize the configurations of ECS instances and query data on the ECS instances.
     *   * If lifecycle hooks take effect for scale-out activities, the private IP addresses of ECS instances are added to the IP address whitelists of the associated ApsaraDB RDS instances and the ECS instances are added to the backend server groups of the associated Server Load Balancer (SLB) instances only after the lifecycle hooks time out. If lifecycle hooks take effect for scale-in activities, the private IP addresses of ECS instances are removed from the IP address whitelists of the disassociated ApsaraDB RDS instances and the ECS instances are removed from the backend server groups of the disassociated SLB instances only after the lifecycle hooks time out.
     *   * You can configure a notification method for a lifecycle hook. When the lifecycle hook takes effect, a notification can be sent by using a Message Service (MNS) topic, an MNS queue, or an Operation Orchestration Service (OOS) template. If you want to configure an OOS template, you must create a RAM role for OOS. For more information, see [Grant RAM permissions to OOS](~~120810~~).
     *   * > If your scaling group contains ECS instances and you configure an OOS template to add the private IP addresses of the ECS instances to or remove the private IP addresses of the ECS instances from the IP address whitelists of cloud databases other than ApsaraDB RDS databases, you must manually add the private IP addresses of the ECS instances to the IP address whitelists of the cloud databases.
     *   *
     * @param CreateLifecycleHookRequest $request CreateLifecycleHookRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLifecycleHookResponse CreateLifecycleHookResponse
     */
    public function createLifecycleHookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultResult)) {
            $query['DefaultResult'] = $request->defaultResult;
        }
        if (!Utils::isUnset($request->heartbeatTimeout)) {
            $query['HeartbeatTimeout'] = $request->heartbeatTimeout;
        }
        if (!Utils::isUnset($request->lifecycleHookName)) {
            $query['LifecycleHookName'] = $request->lifecycleHookName;
        }
        if (!Utils::isUnset($request->lifecycleTransition)) {
            $query['LifecycleTransition'] = $request->lifecycleTransition;
        }
        if (!Utils::isUnset($request->notificationArn)) {
            $query['NotificationArn'] = $request->notificationArn;
        }
        if (!Utils::isUnset($request->notificationMetadata)) {
            $query['NotificationMetadata'] = $request->notificationMetadata;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLifecycleHook',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create up to six lifecycle hooks for each scaling group. Elastic Compute Service (ECS) instances are not immediately added to or removed from scaling groups that have effective lifecycle hooks during scaling activities. The ECS instances are added to or removed from the scaling groups only after the lifecycle hooks time out. The period of time before the lifecycle hooks time out is specified by the HeartbeatTimeout parameter. Before lifecycle hooks time out, you can initialize the configurations of ECS instances and query data on the ECS instances.
     *   * If lifecycle hooks take effect for scale-out activities, the private IP addresses of ECS instances are added to the IP address whitelists of the associated ApsaraDB RDS instances and the ECS instances are added to the backend server groups of the associated Server Load Balancer (SLB) instances only after the lifecycle hooks time out. If lifecycle hooks take effect for scale-in activities, the private IP addresses of ECS instances are removed from the IP address whitelists of the disassociated ApsaraDB RDS instances and the ECS instances are removed from the backend server groups of the disassociated SLB instances only after the lifecycle hooks time out.
     *   * You can configure a notification method for a lifecycle hook. When the lifecycle hook takes effect, a notification can be sent by using a Message Service (MNS) topic, an MNS queue, or an Operation Orchestration Service (OOS) template. If you want to configure an OOS template, you must create a RAM role for OOS. For more information, see [Grant RAM permissions to OOS](~~120810~~).
     *   * > If your scaling group contains ECS instances and you configure an OOS template to add the private IP addresses of the ECS instances to or remove the private IP addresses of the ECS instances from the IP address whitelists of cloud databases other than ApsaraDB RDS databases, you must manually add the private IP addresses of the ECS instances to the IP address whitelists of the cloud databases.
     *   *
     * @param CreateLifecycleHookRequest $request CreateLifecycleHookRequest
     *
     * @return CreateLifecycleHookResponse CreateLifecycleHookResponse
     */
    public function createLifecycleHook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecycleHookWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * You can configure CloudMonitor system events, Message Service (MNS) queues, or MNS topics to receive notifications. When a specified type of scaling activity or resource change occurs in a scaling group, Auto Scaling sends notifications by using CloudMonitor or MNS.
     *   *
     * @param CreateNotificationConfigurationRequest $request CreateNotificationConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNotificationConfigurationResponse CreateNotificationConfigurationResponse
     */
    public function createNotificationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notificationArn)) {
            $query['NotificationArn'] = $request->notificationArn;
        }
        if (!Utils::isUnset($request->notificationTypes)) {
            $query['NotificationTypes'] = $request->notificationTypes;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNotificationConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * You can configure CloudMonitor system events, Message Service (MNS) queues, or MNS topics to receive notifications. When a specified type of scaling activity or resource change occurs in a scaling group, Auto Scaling sends notifications by using CloudMonitor or MNS.
     *   *
     * @param CreateNotificationConfigurationRequest $request CreateNotificationConfigurationRequest
     *
     * @return CreateNotificationConfigurationResponse CreateNotificationConfigurationResponse
     */
    public function createNotificationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNotificationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Auto Scaling automatically creates Elastic Compute Service (ECS) instances based on the specified scaling configuration. ECS instances can be created in the following modes:
     *   * *   InstancePatternInfos: intelligent configuration mode. In this mode, you need to only specify the number of vCPUs, memory size, instance family, and maximum price. Auto Scaling selects the instance type that has the lowest price based on the configurations to create ECS instances. This mode is available only for scaling groups that reside in virtual private clouds (VPCs). This mode reduces scale-out failures caused by insufficient inventory of instance types.
     *   * *   InstanceType: In this mode, you must specify one instance type.
     *   * *   InstanceTypes: In this mode, you can specify more than one instance type.
     *   * *   InstanceTypeOverrides: In this mode, you can specify multiple instance types and weights for the instance types.
     *   * *   Cpu and Memory: In this mode, you must specify the number of vCPUs and the memory size. Auto Scaling determines the range of available instance types based on factors such as I/O optimization requirements and zones. Then, Auto Scaling creates ECS instances by using the lowest-priced instance type. This mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *   * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. You can specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfo at the same time. If you specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfos at the same time, Auto Scaling preferentially uses the instance types that are specified by InstanceType or InstanceTypes for scale-outs. If the instance types that are specified by InstanceType or InstanceTypes do not have sufficient inventory, Auto Scaling uses the instance types that are specified by InstancePatternInfos for scale-outs.
     *   *
     * @param CreateScalingConfigurationRequest $tmpReq  CreateScalingConfigurationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScalingConfigurationResponse CreateScalingConfigurationResponse
     */
    public function createScalingConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScalingConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->schedulerOptions)) {
            $request->schedulerOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->schedulerOptions, 'SchedulerOptions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->affinity)) {
            $query['Affinity'] = $request->affinity;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->creditSpecification)) {
            $query['CreditSpecification'] = $request->creditSpecification;
        }
        if (!Utils::isUnset($request->customPriorities)) {
            $query['CustomPriorities'] = $request->customPriorities;
        }
        if (!Utils::isUnset($request->dataDisks)) {
            $query['DataDisks'] = $request->dataDisks;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->deploymentSetId)) {
            $query['DeploymentSetId'] = $request->deploymentSetId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hpcClusterId)) {
            $query['HpcClusterId'] = $request->hpcClusterId;
        }
        if (!Utils::isUnset($request->imageFamily)) {
            $query['ImageFamily'] = $request->imageFamily;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $query['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instancePatternInfos)) {
            $query['InstancePatternInfos'] = $request->instancePatternInfos;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->instanceTypeOverrides)) {
            $query['InstanceTypeOverrides'] = $request->instanceTypeOverrides;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthIn)) {
            $query['InternetMaxBandwidthIn'] = $request->internetMaxBandwidthIn;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->loadBalancerWeight)) {
            $query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInherit)) {
            $query['PasswordInherit'] = $request->passwordInherit;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingConfigurationName)) {
            $query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->schedulerOptionsShrink)) {
            $query['SchedulerOptions'] = $request->schedulerOptionsShrink;
        }
        if (!Utils::isUnset($request->securityEnhancementStrategy)) {
            $query['SecurityEnhancementStrategy'] = $request->securityEnhancementStrategy;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->spotInterruptionBehavior)) {
            $query['SpotInterruptionBehavior'] = $request->spotInterruptionBehavior;
        }
        if (!Utils::isUnset($request->spotPriceLimits)) {
            $query['SpotPriceLimits'] = $request->spotPriceLimits;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        if (!Utils::isUnset($request->systemDiskCategories)) {
            $query['SystemDiskCategories'] = $request->systemDiskCategories;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->imageOptions)) {
            $query['ImageOptions'] = $request->imageOptions;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Auto Scaling automatically creates Elastic Compute Service (ECS) instances based on the specified scaling configuration. ECS instances can be created in the following modes:
     *   * *   InstancePatternInfos: intelligent configuration mode. In this mode, you need to only specify the number of vCPUs, memory size, instance family, and maximum price. Auto Scaling selects the instance type that has the lowest price based on the configurations to create ECS instances. This mode is available only for scaling groups that reside in virtual private clouds (VPCs). This mode reduces scale-out failures caused by insufficient inventory of instance types.
     *   * *   InstanceType: In this mode, you must specify one instance type.
     *   * *   InstanceTypes: In this mode, you can specify more than one instance type.
     *   * *   InstanceTypeOverrides: In this mode, you can specify multiple instance types and weights for the instance types.
     *   * *   Cpu and Memory: In this mode, you must specify the number of vCPUs and the memory size. Auto Scaling determines the range of available instance types based on factors such as I/O optimization requirements and zones. Then, Auto Scaling creates ECS instances by using the lowest-priced instance type. This mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *   * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. You can specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfo at the same time. If you specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfos at the same time, Auto Scaling preferentially uses the instance types that are specified by InstanceType or InstanceTypes for scale-outs. If the instance types that are specified by InstanceType or InstanceTypes do not have sufficient inventory, Auto Scaling uses the instance types that are specified by InstancePatternInfos for scale-outs.
     *   *
     * @param CreateScalingConfigurationRequest $request CreateScalingConfigurationRequest
     *
     * @return CreateScalingConfigurationResponse CreateScalingConfigurationResponse
     */
    public function createScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * A scaling group is a group of Elastic Compute Service (ECS) instances that can be used in similar business scenarios.
     *   * You can create only a limited number of scaling groups in a region. Go to Quota Center to check the quota of the scaling groups.
     *   * A scaling group does not immediately take effect after you create the scaling group. You must call the EnableScalingGroup operation to enable the scaling group. After you enable the scaling group, Auto Scaling can execute scaling rules to trigger scaling activities in the scaling group.
     *   * The Classic Load Balancer (CLB) instances and ApsaraDB RDS instances that you want to associate with a scaling group must reside in the same region as the scaling group. CLB instances are formerly known as Server Load Balancer (SLB) instances. For more information, see the "Regions and zones" topic.
     *   * If you associate a CLB instance when you create a scaling group, Auto Scaling automatically adds ECS instances in the scaling group to the backend server group of the associated CLB instance. You can specify a server group to which ECS instances can be added. You can add ECS instances to the following types of server groups:
     *   * *   Default server group: a group of ECS instances that are used to receive requests. If you do not specify a vServer group or a primary/secondary server group for a listener, requests are forwarded to the ECS instances in the default server group.
     *   * *   vServer group: If you want to forward requests to backend servers that are not in the default server group or configure domain name-based or URL-based forwarding rules, you can use vServer groups.
     *   * > If you specify the default server group and multiple vServer groups at the same time, ECS instances are added to all specified server groups.
     *   * The default weight of an ECS instance that is added as a backend server of a CLB instance is 50. The CLB instance that you want to associate with your scaling group must meet the following requirements:
     *   * *   The CLB instance must be in the Active state. You can call the DescribeLoadBalancers operation to query the state of the CLB instance.
     *   * *   The health check feature must be enabled on all listener ports that are configured for the CLB instance. Otherwise, the scaling group fails to be created.
     *   * If you associate an Application Load Balancer (ALB) server group with a scaling group, Auto Scaling automatically adds ECS instances that are in the scaling group to the ALB server group to process requests distributed by the ALB instance to which the ALB server group belongs. You can specify multiple ALB server groups. The server groups must reside in the same virtual private cloud (VPC) as the scaling group. For more information, see the "AttachAlbServerGroups" topic.
     *   * If you associate an ApsaraDB RDS instance with a scaling group, Auto Scaling automatically adds the private IP addresses of the ECS instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance. The ApsaraDB RDS instance that you want to associate with your scaling group must meet the following requirements:
     *   * *   The ApsaraDB RDS instance must be in the Running state. You can call the DescribeDBInstances operation to query the state of the ApsaraDB RDS instance.
     *   * *   The number of IP addresses in the IP address whitelist of the ApsaraDB RDS instance cannot exceed the upper limit. For more information, see the "Configure whitelists" topic.
     *   * If you set the MultiAZPolicy parameter of the scaling group to COST_OPTIMIZED, take note of the following items:
     *   * *   You can use the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools parameters to specify the instance allocation method based on the cost optimization policy. This instance allocation method is prioritized during scaling.
     *   * *   If you do not specify the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools parameter, the instance types that are provided at the lowest price are used to create instances based on the cost optimization policy.
     *   * If you set the `Tags.Propagate` parameter of the scaling group to true, the following rules apply:
     *   * *   Tags that you add to the scaling group cannot be propagated to existing instances in the scaling group. Tags that you add to the scaling group are propagated to only new instances.
     *   * *   If you specify instance tags in the scaling configuration that is used to create instances and propagate the tags that you add to the scaling group to the instances, all tags exist at the same time.
     *   * *   If the tag key that you specify in a scaling configuration and the tag key that you add to the scaling group of the scaling configuration are the same, the tag value that you specify in the scaling configuration is preferentially used.
     *   *
     * @param CreateScalingGroupRequest $request CreateScalingGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScalingGroupResponse CreateScalingGroupResponse
     */
    public function createScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->albServerGroups)) {
            $query['AlbServerGroups'] = $request->albServerGroups;
        }
        if (!Utils::isUnset($request->allocationStrategy)) {
            $query['AllocationStrategy'] = $request->allocationStrategy;
        }
        if (!Utils::isUnset($request->azBalance)) {
            $query['AzBalance'] = $request->azBalance;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->compensateWithOnDemand)) {
            $query['CompensateWithOnDemand'] = $request->compensateWithOnDemand;
        }
        if (!Utils::isUnset($request->containerGroupId)) {
            $query['ContainerGroupId'] = $request->containerGroupId;
        }
        if (!Utils::isUnset($request->customPolicyARN)) {
            $query['CustomPolicyARN'] = $request->customPolicyARN;
        }
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
        }
        if (!Utils::isUnset($request->defaultCooldown)) {
            $query['DefaultCooldown'] = $request->defaultCooldown;
        }
        if (!Utils::isUnset($request->desiredCapacity)) {
            $query['DesiredCapacity'] = $request->desiredCapacity;
        }
        if (!Utils::isUnset($request->groupDeletionProtection)) {
            $query['GroupDeletionProtection'] = $request->groupDeletionProtection;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckTypes)) {
            $query['HealthCheckTypes'] = $request->healthCheckTypes;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->launchTemplateId)) {
            $query['LaunchTemplateId'] = $request->launchTemplateId;
        }
        if (!Utils::isUnset($request->launchTemplateOverrides)) {
            $query['LaunchTemplateOverrides'] = $request->launchTemplateOverrides;
        }
        if (!Utils::isUnset($request->launchTemplateVersion)) {
            $query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }
        if (!Utils::isUnset($request->lifecycleHooks)) {
            $query['LifecycleHooks'] = $request->lifecycleHooks;
        }
        if (!Utils::isUnset($request->loadBalancerConfigs)) {
            $query['LoadBalancerConfigs'] = $request->loadBalancerConfigs;
        }
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $query['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->maxInstanceLifetime)) {
            $query['MaxInstanceLifetime'] = $request->maxInstanceLifetime;
        }
        if (!Utils::isUnset($request->maxSize)) {
            $query['MaxSize'] = $request->maxSize;
        }
        if (!Utils::isUnset($request->minSize)) {
            $query['MinSize'] = $request->minSize;
        }
        if (!Utils::isUnset($request->multiAZPolicy)) {
            $query['MultiAZPolicy'] = $request->multiAZPolicy;
        }
        if (!Utils::isUnset($request->onDemandBaseCapacity)) {
            $query['OnDemandBaseCapacity'] = $request->onDemandBaseCapacity;
        }
        if (!Utils::isUnset($request->onDemandPercentageAboveBaseCapacity)) {
            $query['OnDemandPercentageAboveBaseCapacity'] = $request->onDemandPercentageAboveBaseCapacity;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removalPolicies)) {
            $query['RemovalPolicies'] = $request->removalPolicies;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupName)) {
            $query['ScalingGroupName'] = $request->scalingGroupName;
        }
        if (!Utils::isUnset($request->scalingPolicy)) {
            $query['ScalingPolicy'] = $request->scalingPolicy;
        }
        if (!Utils::isUnset($request->serverGroups)) {
            $query['ServerGroups'] = $request->serverGroups;
        }
        if (!Utils::isUnset($request->spotAllocationStrategy)) {
            $query['SpotAllocationStrategy'] = $request->spotAllocationStrategy;
        }
        if (!Utils::isUnset($request->spotInstancePools)) {
            $query['SpotInstancePools'] = $request->spotInstancePools;
        }
        if (!Utils::isUnset($request->spotInstanceRemedy)) {
            $query['SpotInstanceRemedy'] = $request->spotInstanceRemedy;
        }
        if (!Utils::isUnset($request->syncAlarmRuleToCms)) {
            $query['SyncAlarmRuleToCms'] = $request->syncAlarmRuleToCms;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->VServerGroups)) {
            $query['VServerGroups'] = $request->VServerGroups;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A scaling group is a group of Elastic Compute Service (ECS) instances that can be used in similar business scenarios.
     *   * You can create only a limited number of scaling groups in a region. Go to Quota Center to check the quota of the scaling groups.
     *   * A scaling group does not immediately take effect after you create the scaling group. You must call the EnableScalingGroup operation to enable the scaling group. After you enable the scaling group, Auto Scaling can execute scaling rules to trigger scaling activities in the scaling group.
     *   * The Classic Load Balancer (CLB) instances and ApsaraDB RDS instances that you want to associate with a scaling group must reside in the same region as the scaling group. CLB instances are formerly known as Server Load Balancer (SLB) instances. For more information, see the "Regions and zones" topic.
     *   * If you associate a CLB instance when you create a scaling group, Auto Scaling automatically adds ECS instances in the scaling group to the backend server group of the associated CLB instance. You can specify a server group to which ECS instances can be added. You can add ECS instances to the following types of server groups:
     *   * *   Default server group: a group of ECS instances that are used to receive requests. If you do not specify a vServer group or a primary/secondary server group for a listener, requests are forwarded to the ECS instances in the default server group.
     *   * *   vServer group: If you want to forward requests to backend servers that are not in the default server group or configure domain name-based or URL-based forwarding rules, you can use vServer groups.
     *   * > If you specify the default server group and multiple vServer groups at the same time, ECS instances are added to all specified server groups.
     *   * The default weight of an ECS instance that is added as a backend server of a CLB instance is 50. The CLB instance that you want to associate with your scaling group must meet the following requirements:
     *   * *   The CLB instance must be in the Active state. You can call the DescribeLoadBalancers operation to query the state of the CLB instance.
     *   * *   The health check feature must be enabled on all listener ports that are configured for the CLB instance. Otherwise, the scaling group fails to be created.
     *   * If you associate an Application Load Balancer (ALB) server group with a scaling group, Auto Scaling automatically adds ECS instances that are in the scaling group to the ALB server group to process requests distributed by the ALB instance to which the ALB server group belongs. You can specify multiple ALB server groups. The server groups must reside in the same virtual private cloud (VPC) as the scaling group. For more information, see the "AttachAlbServerGroups" topic.
     *   * If you associate an ApsaraDB RDS instance with a scaling group, Auto Scaling automatically adds the private IP addresses of the ECS instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance. The ApsaraDB RDS instance that you want to associate with your scaling group must meet the following requirements:
     *   * *   The ApsaraDB RDS instance must be in the Running state. You can call the DescribeDBInstances operation to query the state of the ApsaraDB RDS instance.
     *   * *   The number of IP addresses in the IP address whitelist of the ApsaraDB RDS instance cannot exceed the upper limit. For more information, see the "Configure whitelists" topic.
     *   * If you set the MultiAZPolicy parameter of the scaling group to COST_OPTIMIZED, take note of the following items:
     *   * *   You can use the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools parameters to specify the instance allocation method based on the cost optimization policy. This instance allocation method is prioritized during scaling.
     *   * *   If you do not specify the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools parameter, the instance types that are provided at the lowest price are used to create instances based on the cost optimization policy.
     *   * If you set the `Tags.Propagate` parameter of the scaling group to true, the following rules apply:
     *   * *   Tags that you add to the scaling group cannot be propagated to existing instances in the scaling group. Tags that you add to the scaling group are propagated to only new instances.
     *   * *   If you specify instance tags in the scaling configuration that is used to create instances and propagate the tags that you add to the scaling group to the instances, all tags exist at the same time.
     *   * *   If the tag key that you specify in a scaling configuration and the tag key that you add to the scaling group of the scaling configuration are the same, the tag value that you specify in the scaling configuration is preferentially used.
     *   *
     * @param CreateScalingGroupRequest $request CreateScalingGroupRequest
     *
     * @return CreateScalingGroupResponse CreateScalingGroupResponse
     */
    public function createScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingGroupWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * A scaling rule defines a specific scaling activity, such as adding or removing N instances. If the number of Elastic Compute Service (ECS) instances in a scaling group is less than the minimum number allowed or greater than the maximum number allowed after a scaling rule is executed, Auto Scaling adjusts the number of ECS instances that you want to add or remove. This way, the number of ECS instances can be maintained within the valid range after the scaling rule is executed. The number of ECS instances that is specified in the scaling rule remains unchanged. Example:
     *   * *   If your scaling group contains two ECS instances and allows up to three ECS instances, only one ECS instance is added to your scaling group after you execute a scale-out rule in which three ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     *   * *   If your scaling group contains three ECS instances and requires at least two ECS instances, only one ECS instance is removed from your scaling group after you execute a scale-in rule in which five ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     *   * Before you call this operation, take note of the following items:
     *   * *   If you set the AdjustmentType parameter to TotalCapacity, the number of ECS instances in the scaling group is adjusted to the specified value. The value of the AdjustmentValue parameter must be greater than or equal to 0.
     *   * *   If you set the AdjustmentType parameter to QuantityChangeInCapacity or PercentChangeInCapacity, a positive value of AdjustmentValue specifies the number of ECS instances that are added to the scaling group, and a negative value of AdjustmentValue specifies the number of ECS instances that are removed from the scaling group.
     *   * *   If you set the AdjustmentType parameter to PercentChangeInCapacity, Auto Scaling uses the following formula to calculate a value, and then rounds the value to the nearest integer to obtain the number of ECS instances that need to be scaled: Value of TotalCapacity × Value of AdjustmentValue/100.
     *   * *   If the cooldown time is specified in a scaling rule, the specified time applies to the scaling group after the rule is executed. Otherwise, the value of the DefaultCooldown parameter of the scaling group applies to the scaling group.
     *   * *   You can create only a limited number of scaling rules for a scaling group. For more information, see the "Limits" topic.
     *   * *   The unique identifier (ScalingRuleAri) of a scaling rule can be used by the following operations:
     *   *     *   ExecuteScalingRule: You can call this operation to manually execute a specific scaling rule by setting the ScalingRuleAri parameter to the unique identifier of the scaling rule.
     *   *     *   CreateScheduledTask: You can call this operation to create a scheduled task for a specific scaling rule by setting the ScheduledAction parameter to the unique identifier of the scaling rule.
     *   *
     * @param CreateScalingRuleRequest $request CreateScalingRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScalingRuleResponse CreateScalingRuleResponse
     */
    public function createScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adjustmentType)) {
            $query['AdjustmentType'] = $request->adjustmentType;
        }
        if (!Utils::isUnset($request->adjustmentValue)) {
            $query['AdjustmentValue'] = $request->adjustmentValue;
        }
        if (!Utils::isUnset($request->alarmDimensions)) {
            $query['AlarmDimensions'] = $request->alarmDimensions;
        }
        if (!Utils::isUnset($request->cooldown)) {
            $query['Cooldown'] = $request->cooldown;
        }
        if (!Utils::isUnset($request->disableScaleIn)) {
            $query['DisableScaleIn'] = $request->disableScaleIn;
        }
        if (!Utils::isUnset($request->estimatedInstanceWarmup)) {
            $query['EstimatedInstanceWarmup'] = $request->estimatedInstanceWarmup;
        }
        if (!Utils::isUnset($request->initialMaxSize)) {
            $query['InitialMaxSize'] = $request->initialMaxSize;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->minAdjustmentMagnitude)) {
            $query['MinAdjustmentMagnitude'] = $request->minAdjustmentMagnitude;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->predictiveScalingMode)) {
            $query['PredictiveScalingMode'] = $request->predictiveScalingMode;
        }
        if (!Utils::isUnset($request->predictiveTaskBufferTime)) {
            $query['PredictiveTaskBufferTime'] = $request->predictiveTaskBufferTime;
        }
        if (!Utils::isUnset($request->predictiveValueBehavior)) {
            $query['PredictiveValueBehavior'] = $request->predictiveValueBehavior;
        }
        if (!Utils::isUnset($request->predictiveValueBuffer)) {
            $query['PredictiveValueBuffer'] = $request->predictiveValueBuffer;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scaleInEvaluationCount)) {
            $query['ScaleInEvaluationCount'] = $request->scaleInEvaluationCount;
        }
        if (!Utils::isUnset($request->scaleOutEvaluationCount)) {
            $query['ScaleOutEvaluationCount'] = $request->scaleOutEvaluationCount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        if (!Utils::isUnset($request->scalingRuleType)) {
            $query['ScalingRuleType'] = $request->scalingRuleType;
        }
        if (!Utils::isUnset($request->stepAdjustments)) {
            $query['StepAdjustments'] = $request->stepAdjustments;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingRule',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * A scaling rule defines a specific scaling activity, such as adding or removing N instances. If the number of Elastic Compute Service (ECS) instances in a scaling group is less than the minimum number allowed or greater than the maximum number allowed after a scaling rule is executed, Auto Scaling adjusts the number of ECS instances that you want to add or remove. This way, the number of ECS instances can be maintained within the valid range after the scaling rule is executed. The number of ECS instances that is specified in the scaling rule remains unchanged. Example:
     *   * *   If your scaling group contains two ECS instances and allows up to three ECS instances, only one ECS instance is added to your scaling group after you execute a scale-out rule in which three ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     *   * *   If your scaling group contains three ECS instances and requires at least two ECS instances, only one ECS instance is removed from your scaling group after you execute a scale-in rule in which five ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     *   * Before you call this operation, take note of the following items:
     *   * *   If you set the AdjustmentType parameter to TotalCapacity, the number of ECS instances in the scaling group is adjusted to the specified value. The value of the AdjustmentValue parameter must be greater than or equal to 0.
     *   * *   If you set the AdjustmentType parameter to QuantityChangeInCapacity or PercentChangeInCapacity, a positive value of AdjustmentValue specifies the number of ECS instances that are added to the scaling group, and a negative value of AdjustmentValue specifies the number of ECS instances that are removed from the scaling group.
     *   * *   If you set the AdjustmentType parameter to PercentChangeInCapacity, Auto Scaling uses the following formula to calculate a value, and then rounds the value to the nearest integer to obtain the number of ECS instances that need to be scaled: Value of TotalCapacity × Value of AdjustmentValue/100.
     *   * *   If the cooldown time is specified in a scaling rule, the specified time applies to the scaling group after the rule is executed. Otherwise, the value of the DefaultCooldown parameter of the scaling group applies to the scaling group.
     *   * *   You can create only a limited number of scaling rules for a scaling group. For more information, see the "Limits" topic.
     *   * *   The unique identifier (ScalingRuleAri) of a scaling rule can be used by the following operations:
     *   *     *   ExecuteScalingRule: You can call this operation to manually execute a specific scaling rule by setting the ScalingRuleAri parameter to the unique identifier of the scaling rule.
     *   *     *   CreateScheduledTask: You can call this operation to create a scheduled task for a specific scaling rule by setting the ScheduledAction parameter to the unique identifier of the scaling rule.
     *   *
     * @param CreateScalingRuleRequest $request CreateScalingRuleRequest
     *
     * @return CreateScalingRuleResponse CreateScalingRuleResponse
     */
    public function createScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingRuleWithOptions($request, $runtime);
    }

    /**
     * *   If a scheduled task fails to trigger a scaling activity due to an ongoing scaling activity in a scaling group or because the scaling group is disabled, the scheduled task is automatically retried during the period that is specified by the LaunchExpirationTime parameter. If the scheduled task still fails to trigger a scaling activity after the period ends, the task is automatically skipped.
     *   * *   If multiple tasks are scheduled at similar points in time to trigger scaling activities in the same scaling group, the earliest task triggers the scaling activity first. Other tasks trigger scaling activities within their launch expiration time. Only one scaling activity can be triggered in a scaling group at a time.`` If the previous scaling activity is complete and another scheduled task attempts to trigger a scaling activity, Auto Scaling executes the scaling rule that is specified in the scheduled task and then triggers a scaling activity.``
     *   * *   A scheduled task supports the following scaling methods:
     *   *     *   `ScheduledAction`: Specify an existing scaling rule that you want Auto Scaling to execute when the scheduled task is triggered.
     *   *     *   `ScalingGroupId`: Specify the minimum number, maximum number, or expected number of instances for the scaling group for which you created the scheduled task.
     *   * > You cannot specify the `ScheduledAction` and ScalingGroupId parameters at the same time.
     *   *
     * @param CreateScheduledTaskRequest $request CreateScheduledTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScheduledTaskResponse CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desiredCapacity)) {
            $query['DesiredCapacity'] = $request->desiredCapacity;
        }
        if (!Utils::isUnset($request->launchExpirationTime)) {
            $query['LaunchExpirationTime'] = $request->launchExpirationTime;
        }
        if (!Utils::isUnset($request->launchTime)) {
            $query['LaunchTime'] = $request->launchTime;
        }
        if (!Utils::isUnset($request->maxValue)) {
            $query['MaxValue'] = $request->maxValue;
        }
        if (!Utils::isUnset($request->minValue)) {
            $query['MinValue'] = $request->minValue;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recurrenceEndTime)) {
            $query['RecurrenceEndTime'] = $request->recurrenceEndTime;
        }
        if (!Utils::isUnset($request->recurrenceType)) {
            $query['RecurrenceType'] = $request->recurrenceType;
        }
        if (!Utils::isUnset($request->recurrenceValue)) {
            $query['RecurrenceValue'] = $request->recurrenceValue;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scheduledAction)) {
            $query['ScheduledAction'] = $request->scheduledAction;
        }
        if (!Utils::isUnset($request->scheduledTaskName)) {
            $query['ScheduledTaskName'] = $request->scheduledTaskName;
        }
        if (!Utils::isUnset($request->taskEnabled)) {
            $query['TaskEnabled'] = $request->taskEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduledTask',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If a scheduled task fails to trigger a scaling activity due to an ongoing scaling activity in a scaling group or because the scaling group is disabled, the scheduled task is automatically retried during the period that is specified by the LaunchExpirationTime parameter. If the scheduled task still fails to trigger a scaling activity after the period ends, the task is automatically skipped.
     *   * *   If multiple tasks are scheduled at similar points in time to trigger scaling activities in the same scaling group, the earliest task triggers the scaling activity first. Other tasks trigger scaling activities within their launch expiration time. Only one scaling activity can be triggered in a scaling group at a time.`` If the previous scaling activity is complete and another scheduled task attempts to trigger a scaling activity, Auto Scaling executes the scaling rule that is specified in the scheduled task and then triggers a scaling activity.``
     *   * *   A scheduled task supports the following scaling methods:
     *   *     *   `ScheduledAction`: Specify an existing scaling rule that you want Auto Scaling to execute when the scheduled task is triggered.
     *   *     *   `ScalingGroupId`: Specify the minimum number, maximum number, or expected number of instances for the scaling group for which you created the scheduled task.
     *   * > You cannot specify the `ScheduledAction` and ScalingGroupId parameters at the same time.
     *   *
     * @param CreateScheduledTaskRequest $request CreateScheduledTaskRequest
     *
     * @return CreateScheduledTaskResponse CreateScheduledTaskResponse
     */
    public function createScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeactivateScalingConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeactivateScalingConfigurationResponse
     */
    public function deactivateScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeactivateScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeactivateScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeactivateScalingConfigurationRequest $request
     *
     * @return DeactivateScalingConfigurationResponse
     */
    public function deactivateScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAlarmResponse
     */
    public function deleteAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmTaskId)) {
            $query['AlarmTaskId'] = $request->alarmTaskId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAlarm',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAlarmRequest $request
     *
     * @return DeleteAlarmResponse
     */
    public function deleteAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlarmWithOptions($request, $runtime);
    }

    /**
     * You cannot delete a scaling configuration that is used to create elastic container instances in the following scenarios:
     *   * *   The scaling configuration is in the Active state.
     *   * *   The scaling group contains elastic container instances that are created based on the scaling configuration.
     *   *
     * @param DeleteEciScalingConfigurationRequest $request DeleteEciScalingConfigurationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEciScalingConfigurationResponse DeleteEciScalingConfigurationResponse
     */
    public function deleteEciScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEciScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot delete a scaling configuration that is used to create elastic container instances in the following scenarios:
     *   * *   The scaling configuration is in the Active state.
     *   * *   The scaling group contains elastic container instances that are created based on the scaling configuration.
     *   *
     * @param DeleteEciScalingConfigurationRequest $request DeleteEciScalingConfigurationRequest
     *
     * @return DeleteEciScalingConfigurationResponse DeleteEciScalingConfigurationResponse
     */
    public function deleteEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteLifecycleHookResponse
     */
    public function deleteLifecycleHookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lifecycleHookId)) {
            $query['LifecycleHookId'] = $request->lifecycleHookId;
        }
        if (!Utils::isUnset($request->lifecycleHookName)) {
            $query['LifecycleHookName'] = $request->lifecycleHookName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLifecycleHook',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLifecycleHookRequest $request
     *
     * @return DeleteLifecycleHookResponse
     */
    public function deleteLifecycleHook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLifecycleHookWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteNotificationConfigurationResponse
     */
    public function deleteNotificationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notificationArn)) {
            $query['NotificationArn'] = $request->notificationArn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNotificationConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNotificationConfigurationRequest $request
     *
     * @return DeleteNotificationConfigurationResponse
     */
    public function deleteNotificationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNotificationConfigurationWithOptions($request, $runtime);
    }

    /**
     * You cannot delete a scaling configuration in one of the following scenarios:
     *   * *   The scaling configuration in your scaling group is in the Active state.
     *   * *   The scaling group contains ECS instances that were created based on the scaling configuration.
     *   *
     * @param DeleteScalingConfigurationRequest $request DeleteScalingConfigurationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScalingConfigurationResponse DeleteScalingConfigurationResponse
     */
    public function deleteScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot delete a scaling configuration in one of the following scenarios:
     *   * *   The scaling configuration in your scaling group is in the Active state.
     *   * *   The scaling group contains ECS instances that were created based on the scaling configuration.
     *   *
     * @param DeleteScalingConfigurationRequest $request DeleteScalingConfigurationRequest
     *
     * @return DeleteScalingConfigurationResponse DeleteScalingConfigurationResponse
     */
    public function deleteScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteScalingGroupResponse
     */
    public function deleteScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceDelete)) {
            $query['ForceDelete'] = $request->forceDelete;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScalingGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScalingGroupRequest $request
     *
     * @return DeleteScalingGroupResponse
     */
    public function deleteScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingRuleId)) {
            $query['ScalingRuleId'] = $request->scalingRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScalingRule',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScalingRuleRequest $request
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scheduledTaskId)) {
            $query['ScheduledTaskId'] = $request->scheduledTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScheduledTask',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScheduledTaskRequest $request
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlarmsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAlarmsResponse
     */
    public function describeAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmTaskId)) {
            $query['AlarmTaskId'] = $request->alarmTaskId;
        }
        if (!Utils::isUnset($request->isEnable)) {
            $query['IsEnable'] = $request->isEnable;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlarms',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlarmsRequest $request
     *
     * @return DescribeAlarmsResponse
     */
    public function describeAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEciScalingConfigurationDetailRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeEciScalingConfigurationDetailResponse
     */
    public function describeEciScalingConfigurationDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFormat)) {
            $query['OutputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEciScalingConfigurationDetail',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEciScalingConfigurationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEciScalingConfigurationDetailRequest $request
     *
     * @return DescribeEciScalingConfigurationDetailResponse
     */
    public function describeEciScalingConfigurationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEciScalingConfigurationDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEciScalingConfigurationsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeEciScalingConfigurationsResponse
     */
    public function describeEciScalingConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingConfigurationIds)) {
            $query['ScalingConfigurationIds'] = $request->scalingConfigurationIds;
        }
        if (!Utils::isUnset($request->scalingConfigurationNames)) {
            $query['ScalingConfigurationNames'] = $request->scalingConfigurationNames;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEciScalingConfigurations',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEciScalingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEciScalingConfigurationsRequest $request
     *
     * @return DescribeEciScalingConfigurationsResponse
     */
    public function describeEciScalingConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEciScalingConfigurationsWithOptions($request, $runtime);
    }

    /**
     * If a scaling activity is executed and a lifecycle hook is created for the scaling activity, the lifecycle hook triggers a lifecycle action. A lifecycle action can be in one of the following states:
     *   * *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     *   * *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action expires and ECS instances are added to or removed from a scaling group.
     *   * *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     *   * If you do not specify the action to perform, such as execute a specific OOS template, after a lifecycle hook ends, you can call this operation to obtain the token of the lifecycle action that corresponds to the lifecycle hook. Then, you can specify a custom action to perform after the lifecycle hook ends.
     *   *
     * @param DescribeLifecycleActionsRequest $request DescribeLifecycleActionsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLifecycleActionsResponse DescribeLifecycleActionsResponse
     */
    public function describeLifecycleActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lifecycleActionStatus)) {
            $query['LifecycleActionStatus'] = $request->lifecycleActionStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingActivityId)) {
            $query['ScalingActivityId'] = $request->scalingActivityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLifecycleActions',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLifecycleActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If a scaling activity is executed and a lifecycle hook is created for the scaling activity, the lifecycle hook triggers a lifecycle action. A lifecycle action can be in one of the following states:
     *   * *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     *   * *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action expires and ECS instances are added to or removed from a scaling group.
     *   * *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     *   * If you do not specify the action to perform, such as execute a specific OOS template, after a lifecycle hook ends, you can call this operation to obtain the token of the lifecycle action that corresponds to the lifecycle hook. Then, you can specify a custom action to perform after the lifecycle hook ends.
     *   *
     * @param DescribeLifecycleActionsRequest $request DescribeLifecycleActionsRequest
     *
     * @return DescribeLifecycleActionsResponse DescribeLifecycleActionsResponse
     */
    public function describeLifecycleActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecycleActionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLifecycleHooksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLifecycleHooksResponse
     */
    public function describeLifecycleHooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lifecycleHookIds)) {
            $query['LifecycleHookIds'] = $request->lifecycleHookIds;
        }
        if (!Utils::isUnset($request->lifecycleHookName)) {
            $query['LifecycleHookName'] = $request->lifecycleHookName;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLifecycleHooks',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLifecycleHooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLifecycleHooksRequest $request
     *
     * @return DescribeLifecycleHooksResponse
     */
    public function describeLifecycleHooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecycleHooksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLimitationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLimitation',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLimitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLimitationRequest $request
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLimitationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNotificationConfigurationsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeNotificationConfigurationsResponse
     */
    public function describeNotificationConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNotificationConfigurations',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNotificationConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNotificationConfigurationsRequest $request
     *
     * @return DescribeNotificationConfigurationsResponse
     */
    public function describeNotificationConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotificationConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNotificationTypesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNotificationTypesResponse
     */
    public function describeNotificationTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNotificationTypes',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNotificationTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNotificationTypesRequest $request
     *
     * @return DescribeNotificationTypesResponse
     */
    public function describeNotificationTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotificationTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can specify a scaling group ID to query all scaling activities in the scaling group.
     *   * You can filter query results based on the status of scaling activities.
     *   * You can query scaling activities that are executed in the previous 30 days.
     *   *
     * @param DescribeScalingActivitiesRequest $request DescribeScalingActivitiesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingActivitiesResponse DescribeScalingActivitiesResponse
     */
    public function describeScalingActivitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingActivityIds)) {
            $query['ScalingActivityIds'] = $request->scalingActivityIds;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->statusCode)) {
            $query['StatusCode'] = $request->statusCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingActivities',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can specify a scaling group ID to query all scaling activities in the scaling group.
     *   * You can filter query results based on the status of scaling activities.
     *   * You can query scaling activities that are executed in the previous 30 days.
     *   *
     * @param DescribeScalingActivitiesRequest $request DescribeScalingActivitiesRequest
     *
     * @return DescribeScalingActivitiesResponse DescribeScalingActivitiesResponse
     */
    public function describeScalingActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingActivitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingActivityDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScalingActivityDetailResponse
     */
    public function describeScalingActivityDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingActivityId)) {
            $query['ScalingActivityId'] = $request->scalingActivityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingActivityDetail',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingActivityDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingActivityDetailRequest $request
     *
     * @return DescribeScalingActivityDetailResponse
     */
    public function describeScalingActivityDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingActivityDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingConfigurationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScalingConfigurationsResponse
     */
    public function describeScalingConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingConfigurationIds)) {
            $query['ScalingConfigurationIds'] = $request->scalingConfigurationIds;
        }
        if (!Utils::isUnset($request->scalingConfigurationNames)) {
            $query['ScalingConfigurationNames'] = $request->scalingConfigurationNames;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingConfigurations',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingConfigurationsRequest $request
     *
     * @return DescribeScalingConfigurationsResponse
     */
    public function describeScalingConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeScalingGroupDetailResponse
     */
    public function describeScalingGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputFormat)) {
            $query['OutputFormat'] = $request->outputFormat;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroupDetail',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupDetailRequest $request
     *
     * @return DescribeScalingGroupDetailResponse
     */
    public function describeScalingGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScalingGroupsResponse
     */
    public function describeScalingGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupIds)) {
            $query['ScalingGroupIds'] = $request->scalingGroupIds;
        }
        if (!Utils::isUnset($request->scalingGroupName)) {
            $query['ScalingGroupName'] = $request->scalingGroupName;
        }
        if (!Utils::isUnset($request->scalingGroupNames)) {
            $query['ScalingGroupNames'] = $request->scalingGroupNames;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupsRequest $request
     *
     * @return DescribeScalingGroupsResponse
     */
    public function describeScalingGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScalingInstancesResponse
     */
    public function describeScalingInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->creationType)) {
            $query['CreationType'] = $request->creationType;
        }
        if (!Utils::isUnset($request->creationTypes)) {
            $query['CreationTypes'] = $request->creationTypes;
        }
        if (!Utils::isUnset($request->healthStatus)) {
            $query['HealthStatus'] = $request->healthStatus;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->lifecycleState)) {
            $query['LifecycleState'] = $request->lifecycleState;
        }
        if (!Utils::isUnset($request->lifecycleStates)) {
            $query['LifecycleStates'] = $request->lifecycleStates;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingActivityId)) {
            $query['ScalingActivityId'] = $request->scalingActivityId;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingInstancesRequest $request
     *
     * @return DescribeScalingInstancesResponse
     */
    public function describeScalingInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingInstancesWithOptions($request, $runtime);
    }

    /**
     * You can specify a scaling group ID to query all scaling rules in the scaling group. You can also specify the scaling rule ID, name, unique identifier, and type in the request parameters as filter conditions.
     *   *
     * @param DescribeScalingRulesRequest $request DescribeScalingRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingRulesResponse DescribeScalingRulesResponse
     */
    public function describeScalingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scalingRuleAris)) {
            $query['ScalingRuleAris'] = $request->scalingRuleAris;
        }
        if (!Utils::isUnset($request->scalingRuleIds)) {
            $query['ScalingRuleIds'] = $request->scalingRuleIds;
        }
        if (!Utils::isUnset($request->scalingRuleNames)) {
            $query['ScalingRuleNames'] = $request->scalingRuleNames;
        }
        if (!Utils::isUnset($request->scalingRuleType)) {
            $query['ScalingRuleType'] = $request->scalingRuleType;
        }
        if (!Utils::isUnset($request->showAlarmRules)) {
            $query['ShowAlarmRules'] = $request->showAlarmRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingRules',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can specify a scaling group ID to query all scaling rules in the scaling group. You can also specify the scaling rule ID, name, unique identifier, and type in the request parameters as filter conditions.
     *   *
     * @param DescribeScalingRulesRequest $request DescribeScalingRulesRequest
     *
     * @return DescribeScalingRulesResponse DescribeScalingRulesResponse
     */
    public function describeScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScheduledTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScheduledTasksResponse
     */
    public function describeScheduledTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scheduledActions)) {
            $query['ScheduledActions'] = $request->scheduledActions;
        }
        if (!Utils::isUnset($request->scheduledTaskIds)) {
            $query['ScheduledTaskIds'] = $request->scheduledTaskIds;
        }
        if (!Utils::isUnset($request->scheduledTaskNames)) {
            $query['ScheduledTaskNames'] = $request->scheduledTaskNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScheduledTasks',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScheduledTasksRequest $request
     *
     * @return DescribeScheduledTasksResponse
     */
    public function describeScheduledTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduledTasksWithOptions($request, $runtime);
    }

    /**
     * @param DetachAlbServerGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetachAlbServerGroupsResponse
     */
    public function detachAlbServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->albServerGroups)) {
            $query['AlbServerGroups'] = $request->albServerGroups;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceDetach)) {
            $query['ForceDetach'] = $request->forceDetach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachAlbServerGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachAlbServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachAlbServerGroupsRequest $request
     *
     * @return DetachAlbServerGroupsResponse
     */
    public function detachAlbServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAlbServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DetachDBInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetachDBInstancesResponse
     */
    public function detachDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->DBInstances)) {
            $query['DBInstances'] = $request->DBInstances;
        }
        if (!Utils::isUnset($request->forceDetach)) {
            $query['ForceDetach'] = $request->forceDetach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDBInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachDBInstancesRequest $request
     *
     * @return DetachDBInstancesResponse
     */
    public function detachDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDBInstancesWithOptions($request, $runtime);
    }

    /**
     * After ECS instances or elastic container instances are removed from a scaling group, you can call the AttachInstances operation to add the ECS instances or elastic container instances that are removed from the scaling group to other scaling groups.
     *   * After you remove an ECS instance or elastic container instance by calling the DetachInstances operation, the instance is not stopped or released.
     *   * Before you call this operation, make sure that the following conditions are met:
     *   * *   The specified scaling group is enabled.
     *   * *   No scaling activities in the specified scaling group are in progress.
     *   * > If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * A successful call indicates only that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     *   * The number of ECS instances or elastic container instances in a scaling group after you remove a specific number of instances from the scaling group must be equal to or greater than the value of the MinSize parameter. Otherwise, an error is reported when you call the DetachInstances operation.
     *   *
     * @param DetachInstancesRequest $request DetachInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachInstancesResponse DetachInstancesResponse
     */
    public function detachInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->decreaseDesiredCapacity)) {
            $query['DecreaseDesiredCapacity'] = $request->decreaseDesiredCapacity;
        }
        if (!Utils::isUnset($request->detachOption)) {
            $query['DetachOption'] = $request->detachOption;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->lifecycleHook)) {
            $query['LifecycleHook'] = $request->lifecycleHook;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After ECS instances or elastic container instances are removed from a scaling group, you can call the AttachInstances operation to add the ECS instances or elastic container instances that are removed from the scaling group to other scaling groups.
     *   * After you remove an ECS instance or elastic container instance by calling the DetachInstances operation, the instance is not stopped or released.
     *   * Before you call this operation, make sure that the following conditions are met:
     *   * *   The specified scaling group is enabled.
     *   * *   No scaling activities in the specified scaling group are in progress.
     *   * > If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * A successful call indicates only that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     *   * The number of ECS instances or elastic container instances in a scaling group after you remove a specific number of instances from the scaling group must be equal to or greater than the value of the MinSize parameter. Otherwise, an error is reported when you call the DetachInstances operation.
     *   *
     * @param DetachInstancesRequest $request DetachInstancesRequest
     *
     * @return DetachInstancesResponse DetachInstancesResponse
     */
    public function detachInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DetachLoadBalancersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachLoadBalancersResponse
     */
    public function detachLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceDetach)) {
            $query['ForceDetach'] = $request->forceDetach;
        }
        if (!Utils::isUnset($request->loadBalancers)) {
            $query['LoadBalancers'] = $request->loadBalancers;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachLoadBalancers',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachLoadBalancersRequest $request
     *
     * @return DetachLoadBalancersResponse
     */
    public function detachLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @param DetachServerGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DetachServerGroupsResponse
     */
    public function detachServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceDetach)) {
            $query['ForceDetach'] = $request->forceDetach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->serverGroups)) {
            $query['ServerGroups'] = $request->serverGroups;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachServerGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachServerGroupsRequest $request
     *
     * @return DetachServerGroupsResponse
     */
    public function detachServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachServerGroupsWithOptions($request, $runtime);
    }

    /**
     * You can use the following parameters to specify the vServer groups that you want to detach from your scaling group.
     *   * *   LoadBalancerId: the ID of the Classic Load Balancer (CLB) instance.
     *   * *   VServerGroupId: the ID of the vServer group.
     *   * *   Port: the port number of the vServer group.
     *   * If the vServer group that is specified in this call matches the vServer group associated with your scaling group, the vServer group can be detached. Otherwise, the request for detaching the vServer group is ignored, and no error is reported.
     *   *
     * @param DetachVServerGroupsRequest $request DetachVServerGroupsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachVServerGroupsResponse DetachVServerGroupsResponse
     */
    public function detachVServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceDetach)) {
            $query['ForceDetach'] = $request->forceDetach;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->VServerGroups)) {
            $query['VServerGroups'] = $request->VServerGroups;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachVServerGroups',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use the following parameters to specify the vServer groups that you want to detach from your scaling group.
     *   * *   LoadBalancerId: the ID of the Classic Load Balancer (CLB) instance.
     *   * *   VServerGroupId: the ID of the vServer group.
     *   * *   Port: the port number of the vServer group.
     *   * If the vServer group that is specified in this call matches the vServer group associated with your scaling group, the vServer group can be detached. Otherwise, the request for detaching the vServer group is ignored, and no error is reported.
     *   *
     * @param DetachVServerGroupsRequest $request DetachVServerGroupsRequest
     *
     * @return DetachVServerGroupsResponse DetachVServerGroupsResponse
     */
    public function detachVServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DisableAlarmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableAlarmResponse
     */
    public function disableAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmTaskId)) {
            $query['AlarmTaskId'] = $request->alarmTaskId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAlarm',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableAlarmRequest $request
     *
     * @return DisableAlarmResponse
     */
    public function disableAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAlarmWithOptions($request, $runtime);
    }

    /**
     * @param DisableScalingGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableScalingGroupResponse
     */
    public function disableScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableScalingGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableScalingGroupRequest $request
     *
     * @return DisableScalingGroupResponse
     */
    public function disableScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param EnableAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableAlarmResponse
     */
    public function enableAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmTaskId)) {
            $query['AlarmTaskId'] = $request->alarmTaskId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableAlarm',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableAlarmRequest $request
     *
     * @return EnableAlarmResponse
     */
    public function enableAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAlarmWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to enable a scaling group that is in the Inactive state and has an instance configuration source. The instance configuration source can be a scaling configuration, a launch template, or an Elastic Compute Service (ECS) instance that you specified when you created the scaling group. If a scaling group is not in the Inactive state or does not have an active instance configuration source, you cannot call this operation to enable the scaling group.
     *   * > A scaling group can have only one active instance configuration source. When you call this operation to enable a scaling group, you can specify a scaling configuration or a launch template for the scaling group. If an instance configuration source has been configured for the scaling group before you call this operation, the scaling configuration or launch template that you specify in the request overwrites the original scaling configuration or launch template.
     *   * If you specify a value for the InstanceIds parameter when you call the operation, Auto Scaling checks whether the total number of ECS instances is within the range allowed in the scaling group after you call the operation.
     *   * *   If the total number of ECS instances is less than the minimum number of instances required in the scaling group after you call the operation, Auto Scaling automatically creates the required number of pay-as-you-go ECS instances and adds the instances to the scaling group to reach the minimum number. For example, if the minimum number of instances required in your scaling group is five, and you specify the InstanceIds parameter to add two ECS instances to the scaling group, Auto Scaling automatically creates three instances in the scaling group after the two instances are added.
     *   * *   If the value of the TotalCapacity parameter is greater than the value of the MaxSize parameter, the call fails.
     *   *
     * @param EnableScalingGroupRequest $request EnableScalingGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableScalingGroupResponse EnableScalingGroupResponse
     */
    public function enableScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeScalingConfigurationId)) {
            $query['ActiveScalingConfigurationId'] = $request->activeScalingConfigurationId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->launchTemplateId)) {
            $query['LaunchTemplateId'] = $request->launchTemplateId;
        }
        if (!Utils::isUnset($request->launchTemplateOverrides)) {
            $query['LaunchTemplateOverrides'] = $request->launchTemplateOverrides;
        }
        if (!Utils::isUnset($request->launchTemplateVersion)) {
            $query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }
        if (!Utils::isUnset($request->loadBalancerWeights)) {
            $query['LoadBalancerWeights'] = $request->loadBalancerWeights;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableScalingGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to enable a scaling group that is in the Inactive state and has an instance configuration source. The instance configuration source can be a scaling configuration, a launch template, or an Elastic Compute Service (ECS) instance that you specified when you created the scaling group. If a scaling group is not in the Inactive state or does not have an active instance configuration source, you cannot call this operation to enable the scaling group.
     *   * > A scaling group can have only one active instance configuration source. When you call this operation to enable a scaling group, you can specify a scaling configuration or a launch template for the scaling group. If an instance configuration source has been configured for the scaling group before you call this operation, the scaling configuration or launch template that you specify in the request overwrites the original scaling configuration or launch template.
     *   * If you specify a value for the InstanceIds parameter when you call the operation, Auto Scaling checks whether the total number of ECS instances is within the range allowed in the scaling group after you call the operation.
     *   * *   If the total number of ECS instances is less than the minimum number of instances required in the scaling group after you call the operation, Auto Scaling automatically creates the required number of pay-as-you-go ECS instances and adds the instances to the scaling group to reach the minimum number. For example, if the minimum number of instances required in your scaling group is five, and you specify the InstanceIds parameter to add two ECS instances to the scaling group, Auto Scaling automatically creates three instances in the scaling group after the two instances are added.
     *   * *   If the value of the TotalCapacity parameter is greater than the value of the MaxSize parameter, the call fails.
     *   *
     * @param EnableScalingGroupRequest $request EnableScalingGroupRequest
     *
     * @return EnableScalingGroupResponse EnableScalingGroupResponse
     */
    public function enableScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param EnterStandbyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnterStandbyResponse
     */
    public function enterStandbyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnterStandby',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnterStandbyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnterStandbyRequest $request
     *
     * @return EnterStandbyResponse
     */
    public function enterStandby($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterStandbyWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   The scaling group is in the Active state.
     *   * *   No scaling activities in the scaling group are in progress.
     *   * If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     *   * If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     *   * If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     *   * You can specify only a limited number of ECS instances in each adjustment. For more information, see the description of the AdjustmentValue parameter in the CreateScalingRule topic.
     *   *
     * @param ExecuteScalingRuleRequest $request ExecuteScalingRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteScalingRuleResponse ExecuteScalingRuleResponse
     */
    public function executeScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->breachThreshold)) {
            $query['BreachThreshold'] = $request->breachThreshold;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->metricValue)) {
            $query['MetricValue'] = $request->metricValue;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingRuleAri)) {
            $query['ScalingRuleAri'] = $request->scalingRuleAri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteScalingRule',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, take note of the following items:
     *   * *   The scaling group is in the Active state.
     *   * *   No scaling activities in the scaling group are in progress.
     *   * If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     *   * If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     *   * If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     *   * You can specify only a limited number of ECS instances in each adjustment. For more information, see the description of the AdjustmentValue parameter in the CreateScalingRule topic.
     *   *
     * @param ExecuteScalingRuleRequest $request ExecuteScalingRuleRequest
     *
     * @return ExecuteScalingRuleResponse ExecuteScalingRuleResponse
     */
    public function executeScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param ExitStandbyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExitStandbyResponse
     */
    public function exitStandbyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExitStandby',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExitStandbyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExitStandbyRequest $request
     *
     * @return ExitStandbyResponse
     */
    public function exitStandby($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exitStandbyWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * *   If you set MetricType to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Custom monitoring event-triggered tasks](~~74861~~).
     *   * *   When you create an event-triggered task, you must specify MetricName, DimensionKey, and DimensionValue to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify the user_id and scaling_group dimensions for an event-triggered task to aggregate monitoring data of all Elastic Compute Service (ECS) instances in a scaling group within an Alibaba Cloud account.
     *   *     *   If you set MetricType to custom, the valid values are your custom metrics.
     *   *     *   For information about the metrics that are supported if you set MetricType to system, see [Event-triggered task for system monitoring](~~74854~~).
     *   * > The user_id and scaling_group dimensions are automatically populated. You need to only specify the device and state dimensions. For more information, see `DimensionKey` and `DimensionValue` in the "Request parameters" section of this topic.
     *   *
     * @param ModifyAlarmRequest $request ModifyAlarmRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAlarmResponse ModifyAlarmResponse
     */
    public function modifyAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmActions)) {
            $query['AlarmActions'] = $request->alarmActions;
        }
        if (!Utils::isUnset($request->alarmTaskId)) {
            $query['AlarmTaskId'] = $request->alarmTaskId;
        }
        if (!Utils::isUnset($request->comparisonOperator)) {
            $query['ComparisonOperator'] = $request->comparisonOperator;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->effective)) {
            $query['Effective'] = $request->effective;
        }
        if (!Utils::isUnset($request->evaluationCount)) {
            $query['EvaluationCount'] = $request->evaluationCount;
        }
        if (!Utils::isUnset($request->expressions)) {
            $query['Expressions'] = $request->expressions;
        }
        if (!Utils::isUnset($request->expressionsLogicOperator)) {
            $query['ExpressionsLogicOperator'] = $request->expressionsLogicOperator;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->statistics)) {
            $query['Statistics'] = $request->statistics;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAlarm',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   If you set MetricType to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Custom monitoring event-triggered tasks](~~74861~~).
     *   * *   When you create an event-triggered task, you must specify MetricName, DimensionKey, and DimensionValue to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify the user_id and scaling_group dimensions for an event-triggered task to aggregate monitoring data of all Elastic Compute Service (ECS) instances in a scaling group within an Alibaba Cloud account.
     *   *     *   If you set MetricType to custom, the valid values are your custom metrics.
     *   *     *   For information about the metrics that are supported if you set MetricType to system, see [Event-triggered task for system monitoring](~~74854~~).
     *   * > The user_id and scaling_group dimensions are automatically populated. You need to only specify the device and state dimensions. For more information, see `DimensionKey` and `DimensionValue` in the "Request parameters" section of this topic.
     *   *
     * @param ModifyAlarmRequest $request ModifyAlarmRequest
     *
     * @return ModifyAlarmResponse ModifyAlarmResponse
     */
    public function modifyAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAlarmWithOptions($request, $runtime);
    }

    /**
     * If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     *   *
     * @param ModifyEciScalingConfigurationRequest $request ModifyEciScalingConfigurationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEciScalingConfigurationResponse ModifyEciScalingConfigurationResponse
     */
    public function modifyEciScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acrRegistryInfos)) {
            $query['AcrRegistryInfos'] = $request->acrRegistryInfos;
        }
        if (!Utils::isUnset($request->activeDeadlineSeconds)) {
            $query['ActiveDeadlineSeconds'] = $request->activeDeadlineSeconds;
        }
        if (!Utils::isUnset($request->autoCreateEip)) {
            $query['AutoCreateEip'] = $request->autoCreateEip;
        }
        if (!Utils::isUnset($request->autoMatchImageCache)) {
            $query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }
        if (!Utils::isUnset($request->containerGroupName)) {
            $query['ContainerGroupName'] = $request->containerGroupName;
        }
        if (!Utils::isUnset($request->containers)) {
            $query['Containers'] = $request->containers;
        }
        if (!Utils::isUnset($request->containersUpdateType)) {
            $query['ContainersUpdateType'] = $request->containersUpdateType;
        }
        if (!Utils::isUnset($request->costOptimization)) {
            $query['CostOptimization'] = $request->costOptimization;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->cpuOptionsCore)) {
            $query['CpuOptionsCore'] = $request->cpuOptionsCore;
        }
        if (!Utils::isUnset($request->cpuOptionsThreadsPerCore)) {
            $query['CpuOptionsThreadsPerCore'] = $request->cpuOptionsThreadsPerCore;
        }
        if (!Utils::isUnset($request->dataCacheBucket)) {
            $query['DataCacheBucket'] = $request->dataCacheBucket;
        }
        if (!Utils::isUnset($request->dataCacheBurstingEnabled)) {
            $query['DataCacheBurstingEnabled'] = $request->dataCacheBurstingEnabled;
        }
        if (!Utils::isUnset($request->dataCachePL)) {
            $query['DataCachePL'] = $request->dataCachePL;
        }
        if (!Utils::isUnset($request->dataCacheProvisionedIops)) {
            $query['DataCacheProvisionedIops'] = $request->dataCacheProvisionedIops;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dnsConfigNameServers)) {
            $query['DnsConfigNameServers'] = $request->dnsConfigNameServers;
        }
        if (!Utils::isUnset($request->dnsConfigOptions)) {
            $query['DnsConfigOptions'] = $request->dnsConfigOptions;
        }
        if (!Utils::isUnset($request->dnsConfigSearchs)) {
            $query['DnsConfigSearchs'] = $request->dnsConfigSearchs;
        }
        if (!Utils::isUnset($request->dnsPolicy)) {
            $query['DnsPolicy'] = $request->dnsPolicy;
        }
        if (!Utils::isUnset($request->egressBandwidth)) {
            $query['EgressBandwidth'] = $request->egressBandwidth;
        }
        if (!Utils::isUnset($request->eipBandwidth)) {
            $query['EipBandwidth'] = $request->eipBandwidth;
        }
        if (!Utils::isUnset($request->enableSls)) {
            $query['EnableSls'] = $request->enableSls;
        }
        if (!Utils::isUnset($request->ephemeralStorage)) {
            $query['EphemeralStorage'] = $request->ephemeralStorage;
        }
        if (!Utils::isUnset($request->hostAliases)) {
            $query['HostAliases'] = $request->hostAliases;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageRegistryCredentials)) {
            $query['ImageRegistryCredentials'] = $request->imageRegistryCredentials;
        }
        if (!Utils::isUnset($request->imageSnapshotId)) {
            $query['ImageSnapshotId'] = $request->imageSnapshotId;
        }
        if (!Utils::isUnset($request->ingressBandwidth)) {
            $query['IngressBandwidth'] = $request->ingressBandwidth;
        }
        if (!Utils::isUnset($request->initContainers)) {
            $query['InitContainers'] = $request->initContainers;
        }
        if (!Utils::isUnset($request->instanceFamilyLevel)) {
            $query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->loadBalancerWeight)) {
            $query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ntpServers)) {
            $query['NtpServers'] = $request->ntpServers;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->restartPolicy)) {
            $query['RestartPolicy'] = $request->restartPolicy;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingConfigurationName)) {
            $query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }
        if (!Utils::isUnset($request->securityContextSysCtls)) {
            $query['SecurityContextSysCtls'] = $request->securityContextSysCtls;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->terminationGracePeriodSeconds)) {
            $query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }
        if (!Utils::isUnset($request->volumes)) {
            $query['Volumes'] = $request->volumes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEciScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     *   *
     * @param ModifyEciScalingConfigurationRequest $request ModifyEciScalingConfigurationRequest
     *
     * @return ModifyEciScalingConfigurationResponse ModifyEciScalingConfigurationResponse
     */
    public function modifyEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entrusted)) {
            $query['Entrusted'] = $request->entrusted;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * You can use one of the following methods to specify the lifecycle hook that you want to modify:
     *   * *   Specify the lifecycle hook ID by using the LifecycleHookId parameter. When you use this method, the ScalingGroupId and LifecycleHookName parameters are ignored.
     *   * *   Specify the scaling group ID by using the ScalingGroupId parameter and specify the lifecycle hook name by using the LifecycleHookName parameter.
     *   *
     * @param ModifyLifecycleHookRequest $request ModifyLifecycleHookRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLifecycleHookResponse ModifyLifecycleHookResponse
     */
    public function modifyLifecycleHookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultResult)) {
            $query['DefaultResult'] = $request->defaultResult;
        }
        if (!Utils::isUnset($request->heartbeatTimeout)) {
            $query['HeartbeatTimeout'] = $request->heartbeatTimeout;
        }
        if (!Utils::isUnset($request->lifecycleHookId)) {
            $query['LifecycleHookId'] = $request->lifecycleHookId;
        }
        if (!Utils::isUnset($request->lifecycleHookName)) {
            $query['LifecycleHookName'] = $request->lifecycleHookName;
        }
        if (!Utils::isUnset($request->lifecycleHookStatus)) {
            $query['LifecycleHookStatus'] = $request->lifecycleHookStatus;
        }
        if (!Utils::isUnset($request->lifecycleTransition)) {
            $query['LifecycleTransition'] = $request->lifecycleTransition;
        }
        if (!Utils::isUnset($request->notificationArn)) {
            $query['NotificationArn'] = $request->notificationArn;
        }
        if (!Utils::isUnset($request->notificationMetadata)) {
            $query['NotificationMetadata'] = $request->notificationMetadata;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLifecycleHook',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use one of the following methods to specify the lifecycle hook that you want to modify:
     *   * *   Specify the lifecycle hook ID by using the LifecycleHookId parameter. When you use this method, the ScalingGroupId and LifecycleHookName parameters are ignored.
     *   * *   Specify the scaling group ID by using the ScalingGroupId parameter and specify the lifecycle hook name by using the LifecycleHookName parameter.
     *   *
     * @param ModifyLifecycleHookRequest $request ModifyLifecycleHookRequest
     *
     * @return ModifyLifecycleHookResponse ModifyLifecycleHookResponse
     */
    public function modifyLifecycleHook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLifecycleHookWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyNotificationConfigurationResponse
     */
    public function modifyNotificationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notificationArn)) {
            $query['NotificationArn'] = $request->notificationArn;
        }
        if (!Utils::isUnset($request->notificationTypes)) {
            $query['NotificationTypes'] = $request->notificationTypes;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNotificationConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNotificationConfigurationRequest $request
     *
     * @return ModifyNotificationConfigurationResponse
     */
    public function modifyNotificationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNotificationConfigurationWithOptions($request, $runtime);
    }

    /**
     * You can change the name of a scaling configuration in a scaling group. The name must be unique within the scaling group.
     *   *
     * @param ModifyScalingConfigurationRequest $tmpReq  ModifyScalingConfigurationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScalingConfigurationResponse ModifyScalingConfigurationResponse
     */
    public function modifyScalingConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyScalingConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->schedulerOptions)) {
            $request->schedulerOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->schedulerOptions, 'SchedulerOptions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->affinity)) {
            $query['Affinity'] = $request->affinity;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->creditSpecification)) {
            $query['CreditSpecification'] = $request->creditSpecification;
        }
        if (!Utils::isUnset($request->customPriorities)) {
            $query['CustomPriorities'] = $request->customPriorities;
        }
        if (!Utils::isUnset($request->dataDisks)) {
            $query['DataDisks'] = $request->dataDisks;
        }
        if (!Utils::isUnset($request->dedicatedHostId)) {
            $query['DedicatedHostId'] = $request->dedicatedHostId;
        }
        if (!Utils::isUnset($request->deletionProtection)) {
            $query['DeletionProtection'] = $request->deletionProtection;
        }
        if (!Utils::isUnset($request->deploymentSetId)) {
            $query['DeploymentSetId'] = $request->deploymentSetId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hpcClusterId)) {
            $query['HpcClusterId'] = $request->hpcClusterId;
        }
        if (!Utils::isUnset($request->imageFamily)) {
            $query['ImageFamily'] = $request->imageFamily;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceDescription)) {
            $query['InstanceDescription'] = $request->instanceDescription;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instancePatternInfos)) {
            $query['InstancePatternInfos'] = $request->instancePatternInfos;
        }
        if (!Utils::isUnset($request->instanceTypeOverrides)) {
            $query['InstanceTypeOverrides'] = $request->instanceTypeOverrides;
        }
        if (!Utils::isUnset($request->instanceTypes)) {
            $query['InstanceTypes'] = $request->instanceTypes;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->ipv6AddressCount)) {
            $query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->loadBalancerWeight)) {
            $query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->override)) {
            $query['Override'] = $request->override;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->passwordInherit)) {
            $query['PasswordInherit'] = $request->passwordInherit;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingConfigurationName)) {
            $query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }
        if (!Utils::isUnset($request->schedulerOptionsShrink)) {
            $query['SchedulerOptions'] = $request->schedulerOptionsShrink;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupIds)) {
            $query['SecurityGroupIds'] = $request->securityGroupIds;
        }
        if (!Utils::isUnset($request->spotDuration)) {
            $query['SpotDuration'] = $request->spotDuration;
        }
        if (!Utils::isUnset($request->spotInterruptionBehavior)) {
            $query['SpotInterruptionBehavior'] = $request->spotInterruptionBehavior;
        }
        if (!Utils::isUnset($request->spotPriceLimits)) {
            $query['SpotPriceLimits'] = $request->spotPriceLimits;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->storageSetId)) {
            $query['StorageSetId'] = $request->storageSetId;
        }
        if (!Utils::isUnset($request->storageSetPartitionNumber)) {
            $query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }
        if (!Utils::isUnset($request->systemDiskCategories)) {
            $query['SystemDiskCategories'] = $request->systemDiskCategories;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->tenancy)) {
            $query['Tenancy'] = $request->tenancy;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        if (!Utils::isUnset($request->imageOptions)) {
            $query['ImageOptions'] = $request->imageOptions;
        }
        if (!Utils::isUnset($request->privatePoolOptions)) {
            $query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can change the name of a scaling configuration in a scaling group. The name must be unique within the scaling group.
     *   *
     * @param ModifyScalingConfigurationRequest $request ModifyScalingConfigurationRequest
     *
     * @return ModifyScalingConfigurationResponse ModifyScalingConfigurationResponse
     */
    public function modifyScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * *   You cannot call this operation to modify the settings of the following parameters:
     *   *     *   RegionId
     *   *     *   LoadBalancerId
     *   * > If you want to change the CLB instances that are associated with your scaling group, call the AttachLoadBalancers and DetachLoadBalancers operations.
     *   *     *   DBInstanceId.
     *   *     **
     *   *     **Note**If you want to change the ApsaraDB RDS instances that are associated with your scaling group, call the AttachDBInstances and DetachDBInstances operations.
     *   * *   You can modify only scaling groups that are in the Active or Inactive state.
     *   * *   If you enable a new scaling configuration, Elastic Compute Service (ECS) instances that are created based on the previous scaling configuration still run as expected in the scaling group.
     *   * *   If the total number of instances in the scaling group is greater than the allowed maximum number after you change the value of the MaxSize parameter, Auto Scaling automatically removes instances from the scaling group to ensure that the number of instances is within the new range.
     *   * *   If the total number of instances in the scaling group is less than the allowed minimum number after you change the value of the MinSize parameter, Auto Scaling automatically adds instances to the scaling group to ensure that the number of instances is within the new range.
     *   * *   If the total number of instances in the scaling group does not match the expected number of instances after you change the value of the DesiredCapacity parameter, Auto Scaling automatically adds instances to or removes instances from the scaling group to ensure that the number of instances matches the value of the DesiredCapacity parameter.
     *   *
     * @param ModifyScalingGroupRequest $request ModifyScalingGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScalingGroupResponse ModifyScalingGroupResponse
     */
    public function modifyScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeScalingConfigurationId)) {
            $query['ActiveScalingConfigurationId'] = $request->activeScalingConfigurationId;
        }
        if (!Utils::isUnset($request->allocationStrategy)) {
            $query['AllocationStrategy'] = $request->allocationStrategy;
        }
        if (!Utils::isUnset($request->azBalance)) {
            $query['AzBalance'] = $request->azBalance;
        }
        if (!Utils::isUnset($request->compensateWithOnDemand)) {
            $query['CompensateWithOnDemand'] = $request->compensateWithOnDemand;
        }
        if (!Utils::isUnset($request->customPolicyARN)) {
            $query['CustomPolicyARN'] = $request->customPolicyARN;
        }
        if (!Utils::isUnset($request->defaultCooldown)) {
            $query['DefaultCooldown'] = $request->defaultCooldown;
        }
        if (!Utils::isUnset($request->desiredCapacity)) {
            $query['DesiredCapacity'] = $request->desiredCapacity;
        }
        if (!Utils::isUnset($request->disableDesiredCapacity)) {
            $query['DisableDesiredCapacity'] = $request->disableDesiredCapacity;
        }
        if (!Utils::isUnset($request->groupDeletionProtection)) {
            $query['GroupDeletionProtection'] = $request->groupDeletionProtection;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckTypes)) {
            $query['HealthCheckTypes'] = $request->healthCheckTypes;
        }
        if (!Utils::isUnset($request->launchTemplateId)) {
            $query['LaunchTemplateId'] = $request->launchTemplateId;
        }
        if (!Utils::isUnset($request->launchTemplateOverrides)) {
            $query['LaunchTemplateOverrides'] = $request->launchTemplateOverrides;
        }
        if (!Utils::isUnset($request->launchTemplateVersion)) {
            $query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }
        if (!Utils::isUnset($request->maxInstanceLifetime)) {
            $query['MaxInstanceLifetime'] = $request->maxInstanceLifetime;
        }
        if (!Utils::isUnset($request->maxSize)) {
            $query['MaxSize'] = $request->maxSize;
        }
        if (!Utils::isUnset($request->minSize)) {
            $query['MinSize'] = $request->minSize;
        }
        if (!Utils::isUnset($request->multiAZPolicy)) {
            $query['MultiAZPolicy'] = $request->multiAZPolicy;
        }
        if (!Utils::isUnset($request->onDemandBaseCapacity)) {
            $query['OnDemandBaseCapacity'] = $request->onDemandBaseCapacity;
        }
        if (!Utils::isUnset($request->onDemandPercentageAboveBaseCapacity)) {
            $query['OnDemandPercentageAboveBaseCapacity'] = $request->onDemandPercentageAboveBaseCapacity;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->removalPolicies)) {
            $query['RemovalPolicies'] = $request->removalPolicies;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scalingGroupName)) {
            $query['ScalingGroupName'] = $request->scalingGroupName;
        }
        if (!Utils::isUnset($request->scalingPolicy)) {
            $query['ScalingPolicy'] = $request->scalingPolicy;
        }
        if (!Utils::isUnset($request->spotAllocationStrategy)) {
            $query['SpotAllocationStrategy'] = $request->spotAllocationStrategy;
        }
        if (!Utils::isUnset($request->spotInstancePools)) {
            $query['SpotInstancePools'] = $request->spotInstancePools;
        }
        if (!Utils::isUnset($request->spotInstanceRemedy)) {
            $query['SpotInstanceRemedy'] = $request->spotInstanceRemedy;
        }
        if (!Utils::isUnset($request->vSwitchIds)) {
            $query['VSwitchIds'] = $request->vSwitchIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingGroup',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You cannot call this operation to modify the settings of the following parameters:
     *   *     *   RegionId
     *   *     *   LoadBalancerId
     *   * > If you want to change the CLB instances that are associated with your scaling group, call the AttachLoadBalancers and DetachLoadBalancers operations.
     *   *     *   DBInstanceId.
     *   *     **
     *   *     **Note**If you want to change the ApsaraDB RDS instances that are associated with your scaling group, call the AttachDBInstances and DetachDBInstances operations.
     *   * *   You can modify only scaling groups that are in the Active or Inactive state.
     *   * *   If you enable a new scaling configuration, Elastic Compute Service (ECS) instances that are created based on the previous scaling configuration still run as expected in the scaling group.
     *   * *   If the total number of instances in the scaling group is greater than the allowed maximum number after you change the value of the MaxSize parameter, Auto Scaling automatically removes instances from the scaling group to ensure that the number of instances is within the new range.
     *   * *   If the total number of instances in the scaling group is less than the allowed minimum number after you change the value of the MinSize parameter, Auto Scaling automatically adds instances to the scaling group to ensure that the number of instances is within the new range.
     *   * *   If the total number of instances in the scaling group does not match the expected number of instances after you change the value of the DesiredCapacity parameter, Auto Scaling automatically adds instances to or removes instances from the scaling group to ensure that the number of instances matches the value of the DesiredCapacity parameter.
     *   *
     * @param ModifyScalingGroupRequest $request ModifyScalingGroupRequest
     *
     * @return ModifyScalingGroupResponse ModifyScalingGroupResponse
     */
    public function modifyScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adjustmentType)) {
            $query['AdjustmentType'] = $request->adjustmentType;
        }
        if (!Utils::isUnset($request->adjustmentValue)) {
            $query['AdjustmentValue'] = $request->adjustmentValue;
        }
        if (!Utils::isUnset($request->alarmDimensions)) {
            $query['AlarmDimensions'] = $request->alarmDimensions;
        }
        if (!Utils::isUnset($request->cooldown)) {
            $query['Cooldown'] = $request->cooldown;
        }
        if (!Utils::isUnset($request->disableScaleIn)) {
            $query['DisableScaleIn'] = $request->disableScaleIn;
        }
        if (!Utils::isUnset($request->estimatedInstanceWarmup)) {
            $query['EstimatedInstanceWarmup'] = $request->estimatedInstanceWarmup;
        }
        if (!Utils::isUnset($request->initialMaxSize)) {
            $query['InitialMaxSize'] = $request->initialMaxSize;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->minAdjustmentMagnitude)) {
            $query['MinAdjustmentMagnitude'] = $request->minAdjustmentMagnitude;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->predictiveScalingMode)) {
            $query['PredictiveScalingMode'] = $request->predictiveScalingMode;
        }
        if (!Utils::isUnset($request->predictiveTaskBufferTime)) {
            $query['PredictiveTaskBufferTime'] = $request->predictiveTaskBufferTime;
        }
        if (!Utils::isUnset($request->predictiveValueBehavior)) {
            $query['PredictiveValueBehavior'] = $request->predictiveValueBehavior;
        }
        if (!Utils::isUnset($request->predictiveValueBuffer)) {
            $query['PredictiveValueBuffer'] = $request->predictiveValueBuffer;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scaleInEvaluationCount)) {
            $query['ScaleInEvaluationCount'] = $request->scaleInEvaluationCount;
        }
        if (!Utils::isUnset($request->scaleOutEvaluationCount)) {
            $query['ScaleOutEvaluationCount'] = $request->scaleOutEvaluationCount;
        }
        if (!Utils::isUnset($request->scalingRuleId)) {
            $query['ScalingRuleId'] = $request->scalingRuleId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        if (!Utils::isUnset($request->stepAdjustments)) {
            $query['StepAdjustments'] = $request->stepAdjustments;
        }
        if (!Utils::isUnset($request->targetValue)) {
            $query['TargetValue'] = $request->targetValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingRule',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingRuleRequest $request
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingRuleWithOptions($request, $runtime);
    }

    /**
     * You can use the following parameters to specify the scaling method of a scheduled task:
     *   * *   If you use the `ScheduledAction` parameter, you must select an existing scaling rule for the scheduled task.
     *   * *   If you use the `ScalingGroupId` parameter, you must specify the minimum number, maximum number, or expected number of instances in the scheduled task.
     *   * > You cannot specify the `ScheduledAction` and `ScalingGroupId` parameters at the same time.
     *   *
     * @param ModifyScheduledTaskRequest $request ModifyScheduledTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScheduledTaskResponse ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desiredCapacity)) {
            $query['DesiredCapacity'] = $request->desiredCapacity;
        }
        if (!Utils::isUnset($request->launchExpirationTime)) {
            $query['LaunchExpirationTime'] = $request->launchExpirationTime;
        }
        if (!Utils::isUnset($request->launchTime)) {
            $query['LaunchTime'] = $request->launchTime;
        }
        if (!Utils::isUnset($request->maxValue)) {
            $query['MaxValue'] = $request->maxValue;
        }
        if (!Utils::isUnset($request->minValue)) {
            $query['MinValue'] = $request->minValue;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recurrenceEndTime)) {
            $query['RecurrenceEndTime'] = $request->recurrenceEndTime;
        }
        if (!Utils::isUnset($request->recurrenceType)) {
            $query['RecurrenceType'] = $request->recurrenceType;
        }
        if (!Utils::isUnset($request->recurrenceValue)) {
            $query['RecurrenceValue'] = $request->recurrenceValue;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scheduledAction)) {
            $query['ScheduledAction'] = $request->scheduledAction;
        }
        if (!Utils::isUnset($request->scheduledTaskId)) {
            $query['ScheduledTaskId'] = $request->scheduledTaskId;
        }
        if (!Utils::isUnset($request->scheduledTaskName)) {
            $query['ScheduledTaskName'] = $request->scheduledTaskName;
        }
        if (!Utils::isUnset($request->taskEnabled)) {
            $query['TaskEnabled'] = $request->taskEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScheduledTask',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can use the following parameters to specify the scaling method of a scheduled task:
     *   * *   If you use the `ScheduledAction` parameter, you must select an existing scaling rule for the scheduled task.
     *   * *   If you use the `ScalingGroupId` parameter, you must specify the minimum number, maximum number, or expected number of instances in the scheduled task.
     *   * > You cannot specify the `ScheduledAction` and `ScalingGroupId` parameters at the same time.
     *   *
     * @param ModifyScheduledTaskRequest $request ModifyScheduledTaskRequest
     *
     * @return ModifyScheduledTaskResponse ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * @param RebalanceInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RebalanceInstancesResponse
     */
    public function rebalanceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebalanceInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebalanceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebalanceInstancesRequest $request
     *
     * @return RebalanceInstancesResponse
     */
    public function rebalanceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebalanceInstancesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to prolong the length of a lifecycle hook up to 20 times. Take note that the total length of a lifecycle hook cannot exceed 6 hours.
     *   *
     * @param RecordLifecycleActionHeartbeatRequest $request RecordLifecycleActionHeartbeatRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RecordLifecycleActionHeartbeatResponse RecordLifecycleActionHeartbeatResponse
     */
    public function recordLifecycleActionHeartbeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->heartbeatTimeout)) {
            $query['heartbeatTimeout'] = $request->heartbeatTimeout;
        }
        if (!Utils::isUnset($request->lifecycleActionToken)) {
            $query['lifecycleActionToken'] = $request->lifecycleActionToken;
        }
        if (!Utils::isUnset($request->lifecycleHookId)) {
            $query['lifecycleHookId'] = $request->lifecycleHookId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecordLifecycleActionHeartbeat',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordLifecycleActionHeartbeatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to prolong the length of a lifecycle hook up to 20 times. Take note that the total length of a lifecycle hook cannot exceed 6 hours.
     *   *
     * @param RecordLifecycleActionHeartbeatRequest $request RecordLifecycleActionHeartbeatRequest
     *
     * @return RecordLifecycleActionHeartbeatResponse RecordLifecycleActionHeartbeatResponse
     */
    public function recordLifecycleActionHeartbeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordLifecycleActionHeartbeatWithOptions($request, $runtime);
    }

    /**
     * @param RemoveInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveInstancesResponse
     */
    public function removeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->decreaseDesiredCapacity)) {
            $query['DecreaseDesiredCapacity'] = $request->decreaseDesiredCapacity;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removePolicy)) {
            $query['RemovePolicy'] = $request->removePolicy;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveInstances',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveInstancesRequest $request
     *
     * @return RemoveInstancesResponse
     */
    public function removeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ResumeProcessesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResumeProcessesResponse
     */
    public function resumeProcessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->processes)) {
            $query['Processes'] = $request->processes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeProcesses',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeProcessesRequest $request
     *
     * @return ResumeProcessesResponse
     */
    public function resumeProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeProcessesWithOptions($request, $runtime);
    }

    /**
     * Compared with the ExecuteScalingRule operation, the ScaleWithAdjustment operation does not require a scaling rule to be created in advance. Before you call the ScaleWithAdjustment operation, take note of the following items:
     *   * *   The following conditions must be met:
     *   *     *   The scaling group is in the Active state.
     *   *     *   No scaling activities in the scaling group are in progress.
     *   * *   If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * *   If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     *   * *   If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     *   * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the `ScalingActivityId` parameter in the response.
     *   *
     * @param ScaleWithAdjustmentRequest $tmpReq  ScaleWithAdjustmentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ScaleWithAdjustmentResponse ScaleWithAdjustmentResponse
     */
    public function scaleWithAdjustmentWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScaleWithAdjustmentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lifecycleHookContext)) {
            $request->lifecycleHookContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lifecycleHookContext, 'LifecycleHookContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->overrides)) {
            $request->overridesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->overrides, 'Overrides', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->activityMetadata)) {
            $query['ActivityMetadata'] = $request->activityMetadata;
        }
        if (!Utils::isUnset($request->adjustmentType)) {
            $query['AdjustmentType'] = $request->adjustmentType;
        }
        if (!Utils::isUnset($request->adjustmentValue)) {
            $query['AdjustmentValue'] = $request->adjustmentValue;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->lifecycleHookContextShrink)) {
            $query['LifecycleHookContext'] = $request->lifecycleHookContextShrink;
        }
        if (!Utils::isUnset($request->minAdjustmentMagnitude)) {
            $query['MinAdjustmentMagnitude'] = $request->minAdjustmentMagnitude;
        }
        if (!Utils::isUnset($request->overridesShrink)) {
            $query['Overrides'] = $request->overridesShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->syncActivity)) {
            $query['SyncActivity'] = $request->syncActivity;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleWithAdjustment',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScaleWithAdjustmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Compared with the ExecuteScalingRule operation, the ScaleWithAdjustment operation does not require a scaling rule to be created in advance. Before you call the ScaleWithAdjustment operation, take note of the following items:
     *   * *   The following conditions must be met:
     *   *     *   The scaling group is in the Active state.
     *   *     *   No scaling activities in the scaling group are in progress.
     *   * *   If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     *   * *   If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     *   * *   If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     *   * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the `ScalingActivityId` parameter in the response.
     *   *
     * @param ScaleWithAdjustmentRequest $request ScaleWithAdjustmentRequest
     *
     * @return ScaleWithAdjustmentResponse ScaleWithAdjustmentResponse
     */
    public function scaleWithAdjustment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scaleWithAdjustmentWithOptions($request, $runtime);
    }

    /**
     * @param SetGroupDeletionProtectionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetGroupDeletionProtectionResponse
     */
    public function setGroupDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupDeletionProtection)) {
            $query['GroupDeletionProtection'] = $request->groupDeletionProtection;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGroupDeletionProtection',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGroupDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGroupDeletionProtectionRequest $request
     *
     * @return SetGroupDeletionProtectionResponse
     */
    public function setGroupDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * Configures the health check feature for Elastic Compute Service (ECS) instances.
     *   *
     * @param SetInstanceHealthRequest $request SetInstanceHealthRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetInstanceHealthResponse SetInstanceHealthResponse
     */
    public function setInstanceHealthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->healthStatus)) {
            $query['HealthStatus'] = $request->healthStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetInstanceHealth',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetInstanceHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the health check feature for Elastic Compute Service (ECS) instances.
     *   *
     * @param SetInstanceHealthRequest $request SetInstanceHealthRequest
     *
     * @return SetInstanceHealthResponse SetInstanceHealthResponse
     */
    public function setInstanceHealth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceHealthWithOptions($request, $runtime);
    }

    /**
     * Puts one or more Elastic Compute Service (ECS) instances into the Protected state.
     *   *
     * @param SetInstancesProtectionRequest $request SetInstancesProtectionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetInstancesProtectionResponse SetInstancesProtectionResponse
     */
    public function setInstancesProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->protectedFromScaleIn)) {
            $query['ProtectedFromScaleIn'] = $request->protectedFromScaleIn;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetInstancesProtection',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetInstancesProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Puts one or more Elastic Compute Service (ECS) instances into the Protected state.
     *   *
     * @param SetInstancesProtectionRequest $request SetInstancesProtectionRequest
     *
     * @return SetInstancesProtectionResponse SetInstancesProtectionResponse
     */
    public function setInstancesProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstancesProtectionWithOptions($request, $runtime);
    }

    /**
     * @param SuspendProcessesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SuspendProcessesResponse
     */
    public function suspendProcessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->processes)) {
            $query['Processes'] = $request->processes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendProcesses',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendProcessesRequest $request
     *
     * @return SuspendProcessesResponse
     */
    public function suspendProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendProcessesWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $query['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param VerifyAuthenticationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyAuthenticationResponse
     */
    public function verifyAuthenticationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->onlyCheck)) {
            $query['OnlyCheck'] = $request->onlyCheck;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyAuthentication',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyAuthenticationRequest $request
     *
     * @return VerifyAuthenticationResponse
     */
    public function verifyAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyAuthenticationWithOptions($request, $runtime);
    }

    /**
     * @param VerifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return VerifyUserResponse
     */
    public function verifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyUser',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyUserRequest $request
     *
     * @return VerifyUserResponse
     */
    public function verifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyUserWithOptions($request, $runtime);
    }
}
