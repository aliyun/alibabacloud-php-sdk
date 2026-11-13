<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\CancelInstanceRefreshRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CancelInstanceRefreshResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CancelScalingGroupZoneShiftRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CancelScalingGroupZoneShiftResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CompleteLifecycleActionRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CompleteLifecycleActionResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateDiagnoseReportRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateDiagnoseReportResponse;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteDiagnoseReportRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DeleteDiagnoseReportResponse;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlertConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlertConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeCandidateInstanceTypeRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeCandidateInstanceTypeResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceCreateAndDeleteStatisticsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceCreateAndDeleteStatisticsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponse;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribePatternTypesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribePatternTypesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDiagnoseDetailsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDiagnoseDetailsResponse;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlertConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlertConfigurationResponse;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryHistoricalMetricRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryHistoricalMetricResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveMetricRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveMetricResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveTaskInfoRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveTaskInfoResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveValueRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveValueResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RebalanceInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RebalanceInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RecordLifecycleActionHeartbeatRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RecordLifecycleActionHeartbeatResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesShrinkRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ResumeInstanceRefreshRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ResumeInstanceRefreshResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ResumeProcessesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ResumeProcessesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RollbackInstanceRefreshRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RollbackInstanceRefreshResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\ScaleWithAdjustmentShrinkRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetGroupDeletionProtectionRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetGroupDeletionProtectionResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstanceHealthRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstanceHealthResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstancesProtectionRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SetInstancesProtectionResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\StartScalingGroupZoneShiftRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\StartScalingGroupZoneShiftResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\SuspendInstanceRefreshRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\SuspendInstanceRefreshResponse;
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
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ess extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Ess';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'ess.aliyuncs.com',
            'cn-beijing' => 'ess.aliyuncs.com',
            'cn-hangzhou' => 'ess.aliyuncs.com',
            'cn-shanghai' => 'ess.aliyuncs.com',
            'cn-shenzhen' => 'ess.aliyuncs.com',
            'cn-hongkong' => 'ess.aliyuncs.com',
            'ap-southeast-1' => 'ess.aliyuncs.com',
            'us-east-1' => 'ess.aliyuncs.com',
            'us-west-1' => 'ess.aliyuncs.com',
            'cn-shanghai-finance-1' => 'ess.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'ess.aliyuncs.com',
            'cn-north-2-gov-1' => 'ess.aliyuncs.com',
            'ap-northeast-2-pop' => 'ess.aliyuncs.com',
            'cn-beijing-finance-pop' => 'ess.aliyuncs.com',
            'cn-beijing-gov-1' => 'ess.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'ess.aliyuncs.com',
            'cn-edge-1' => 'ess.aliyuncs.com',
            'cn-fujian' => 'ess.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'ess.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'ess.aliyuncs.com',
            'cn-hangzhou-finance' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ess.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ess.aliyuncs.com',
            'cn-hangzhou-test-306' => 'ess.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'ess.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'ess.aliyuncs.com',
            'cn-qingdao-nebula' => 'ess.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'ess.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'ess.aliyuncs.com',
            'cn-shanghai-inner' => 'ess.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ess.aliyuncs.com',
            'cn-shenzhen-inner' => 'ess.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'ess.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'ess.aliyuncs.com',
            'cn-wuhan' => 'ess.aliyuncs.com',
            'cn-yushanfang' => 'ess.aliyuncs.com',
            'cn-zhangbei' => 'ess.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'ess.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'ess.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'ess.aliyuncs.com',
            'eu-west-1-oxs' => 'ess.aliyuncs.com',
            'rus-west-1-pop' => 'ess.aliyuncs.com',
            'cn-nanjing' => 'ess.aliyuncs.com',
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Creates or updates an Elastic Container Instance (ECI) scaling configuration by using a configuration file.
     *
     * @remarks
     * When you manage ECI scaling configurations by using YAML configuration files, take note of the following items:
     * - If you specify the ID of an ECI scaling configuration, the system updates the ECI scaling configuration based on the YAML configuration file.
     * - If you do not specify the ID of an ECI scaling configuration, the system creates an ECI scaling configuration based on the YAML configuration file.
     *
     * @param request - ApplyEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyEciScalingConfigurationResponse
     *
     * @param ApplyEciScalingConfigurationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ApplyEciScalingConfigurationResponse
     */
    public function applyEciScalingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->format) {
            @$query['Format'] = $request->format;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyEciScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates an Elastic Container Instance (ECI) scaling configuration by using a configuration file.
     *
     * @remarks
     * When you manage ECI scaling configurations by using YAML configuration files, take note of the following items:
     * - If you specify the ID of an ECI scaling configuration, the system updates the ECI scaling configuration based on the YAML configuration file.
     * - If you do not specify the ID of an ECI scaling configuration, the system creates an ECI scaling configuration based on the YAML configuration file.
     *
     * @param request - ApplyEciScalingConfigurationRequest
     *
     * @returns ApplyEciScalingConfigurationResponse
     *
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
     * Creates and manages a scaling group by using a configuration file.
     *
     * @remarks
     * The ApplyScalingGroup operation supports the Kubernetes Deployment resource definition format to quickly create Elastic Container Instance (ECI) scaling groups. It also supports ECI extended annotations for Kubernetes YAML. For more information, see the "Supported annotations" section.
     * Mapping between YAML configurations and scaling groups: A scaling group name is mapped by the namespace, kind, and name tuple in the YAML definition. In the same region, the same YAML configuration can only be mapped to the same scaling group. Example: If you use a Deployment YAML configuration with the name nginx in the default namespace, it is mapped to a scaling group named k8s_default_Deployment_nginx in the same region.
     * Logic for managing scaling groups based on YAML configurations:
     * - If the scaling group mapped to the YAML configuration exists, the scaling group is updated based on the YAML configuration.
     * - If the scaling group mapped to the YAML configuration does not exist, a corresponding scaling group is created based on the YAML configuration.
     * ### Precautions
     * 1. If the YAML configuration does not specify the VPC, vSwitch, and security group annotations, the system performs automatic creation of a default VPC, creates a default vSwitch in the VPC, and creates the default Auto Scaling security group ess-default-sg. By default, the security group policy allows traffic on TCP ports 22 and 3389, and the ICMP (IPv4) protocol. If you have other port and protocol requirements, you can modify the security group policy.
     * 2. When you use a public image, you must enable public network access and configure the Settings for the k8s.aliyun.com/eci-with-eip pod annotation to enable the elastic IP address (EIP).
     * 3. After the ApplyScalingGroup operation applies the YAML configuration, the scaling group and scaling configuration take effect immediately. If replicas is set to a value greater than 0, automatic creation of resources is triggered.
     * ### Supported annotations
     * The annotations are referenced from [ECI Pod Annotation](https://help.aliyun.com/document_detail/186939.html).
     * |Parameter|Example|Description|
     * |-----|-----|-----|
     * |k8s.aliyun.com/ess-scaling-group-min-size|1|The minimum number of instances in the scaling group. Default value: 0.
     * |k8s.aliyun.com/ess-scaling-group-max-size|20|The maximum number of instances in the scaling group. Default value: max(replicas, 30).
     * |k8s.aliyun.com/eci-ntp-server|100.100.*.*|The NTP server.
     * |k8s.aliyun.com/eci-use-specs|2-4Gi|The instance specifications, such as 2 vCPUs and 4 GiB of memory. For more information, see [Create a pod by using multiple instance types](https://help.aliyun.com/document_detail/451267.html).
     * |k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c****|The ID of the vSwitch. You can specify multiple vSwitches to implement the multi-active zone feature.
     * |k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv****|The ID of the security group. Requirements: <ul><li>You can specify one or more security groups. A maximum of five security groups can be specified.</li><li>The specified security groups must belong to the same VPC.</li><li>The specified security groups must be of the same type.</li></ul>
     * |k8s.aliyun.com/eci-sls-enable|"false"|Specifies whether to shutdown log collection. A value of false indicates that log collection is shutdown. <p>When you collect logs by using Simple Log Service CRDs, if you do not need to collect logs for specific pods, you can configure this annotation to shutdown the log collection feature. This prevents the system from performing automatic creation of Logtail and wasting resources.</p>
     * |k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|The bidding policy for the spot instance. Valid values: <ul><li>SpotWithPriceLimit: You use custom Settings for the maximum hourly price of the spot instance. In this case, you must set k8s.aliyun.com/eci-spot-price-limit.</li><li>SpotAsPriceGo: The system automatically places bids based on the actual price of the current marketplace.</li></ul>
     * |k8s.aliyun.com/eci-spot-price-limit|"0.5"|The maximum hourly price for the spot instance. The value is accurate to three decimal places. <p>This parameter takes effect only when the Settings of k8s.aliyun.com/eci-spot-strategy are SpotWithPriceLimit.</p>
     * |k8s.aliyun.com/eci-with-eip|"true"|Specifies whether to perform automatic creation and attach an EIP. A value of true indicates that an EIP is automatically created and attached.
     * |k8s.aliyun.com/eci-data-cache-bucket|default|The bucket of DataCache. This parameter is required when you use DataCache to create a pod.
     * |k8s.aliyun.com/eci-data-cache-pl|PL1|The performance level (PL) of the cloud disk created based on DataCache. <p>By default, an ESSD standard SSD is used, and the default PL is PL1.</p>
     * |k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|The provisioned read and write IOPS of the ESSD AutoPL cloud disk. Valid values: 0 to min{50000, 1000 × Capacity - Baseline performance}. Baseline performance = min{1800 + 50 × Capacity, 50000}. For more information, see [ESSD AutoPL cloud disks](https://help.aliyun.com/document_detail/368372.html). <p>If this annotation is added, the cloud disk created based on DataCache is an ESSD AutoPL cloud disk.</p>
     * |k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|Specifies whether to enable the burst feature for the ESSD AutoPL cloud disk. For more information, see [ESSD AutoPL cloud disks](https://help.aliyun.com/document_detail/368372.html). <p>If this annotation is added, the cloud disk created based on DataCache is an ESSD AutoPL cloud disk.</p>
     * |k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|The label string attached to the pod. You can attach up to three labels. Separate the label key and label value with a half-width colon character, and separate multiple labels with a half-width comma character.
     *
     * @param request - ApplyScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyScalingGroupResponse
     *
     * @param ApplyScalingGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApplyScalingGroupResponse
     */
    public function applyScalingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->format) {
            @$query['Format'] = $request->format;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyScalingGroup',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates and manages a scaling group by using a configuration file.
     *
     * @remarks
     * The ApplyScalingGroup operation supports the Kubernetes Deployment resource definition format to quickly create Elastic Container Instance (ECI) scaling groups. It also supports ECI extended annotations for Kubernetes YAML. For more information, see the "Supported annotations" section.
     * Mapping between YAML configurations and scaling groups: A scaling group name is mapped by the namespace, kind, and name tuple in the YAML definition. In the same region, the same YAML configuration can only be mapped to the same scaling group. Example: If you use a Deployment YAML configuration with the name nginx in the default namespace, it is mapped to a scaling group named k8s_default_Deployment_nginx in the same region.
     * Logic for managing scaling groups based on YAML configurations:
     * - If the scaling group mapped to the YAML configuration exists, the scaling group is updated based on the YAML configuration.
     * - If the scaling group mapped to the YAML configuration does not exist, a corresponding scaling group is created based on the YAML configuration.
     * ### Precautions
     * 1. If the YAML configuration does not specify the VPC, vSwitch, and security group annotations, the system performs automatic creation of a default VPC, creates a default vSwitch in the VPC, and creates the default Auto Scaling security group ess-default-sg. By default, the security group policy allows traffic on TCP ports 22 and 3389, and the ICMP (IPv4) protocol. If you have other port and protocol requirements, you can modify the security group policy.
     * 2. When you use a public image, you must enable public network access and configure the Settings for the k8s.aliyun.com/eci-with-eip pod annotation to enable the elastic IP address (EIP).
     * 3. After the ApplyScalingGroup operation applies the YAML configuration, the scaling group and scaling configuration take effect immediately. If replicas is set to a value greater than 0, automatic creation of resources is triggered.
     * ### Supported annotations
     * The annotations are referenced from [ECI Pod Annotation](https://help.aliyun.com/document_detail/186939.html).
     * |Parameter|Example|Description|
     * |-----|-----|-----|
     * |k8s.aliyun.com/ess-scaling-group-min-size|1|The minimum number of instances in the scaling group. Default value: 0.
     * |k8s.aliyun.com/ess-scaling-group-max-size|20|The maximum number of instances in the scaling group. Default value: max(replicas, 30).
     * |k8s.aliyun.com/eci-ntp-server|100.100.*.*|The NTP server.
     * |k8s.aliyun.com/eci-use-specs|2-4Gi|The instance specifications, such as 2 vCPUs and 4 GiB of memory. For more information, see [Create a pod by using multiple instance types](https://help.aliyun.com/document_detail/451267.html).
     * |k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c****|The ID of the vSwitch. You can specify multiple vSwitches to implement the multi-active zone feature.
     * |k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv****|The ID of the security group. Requirements: <ul><li>You can specify one or more security groups. A maximum of five security groups can be specified.</li><li>The specified security groups must belong to the same VPC.</li><li>The specified security groups must be of the same type.</li></ul>
     * |k8s.aliyun.com/eci-sls-enable|"false"|Specifies whether to shutdown log collection. A value of false indicates that log collection is shutdown. <p>When you collect logs by using Simple Log Service CRDs, if you do not need to collect logs for specific pods, you can configure this annotation to shutdown the log collection feature. This prevents the system from performing automatic creation of Logtail and wasting resources.</p>
     * |k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|The bidding policy for the spot instance. Valid values: <ul><li>SpotWithPriceLimit: You use custom Settings for the maximum hourly price of the spot instance. In this case, you must set k8s.aliyun.com/eci-spot-price-limit.</li><li>SpotAsPriceGo: The system automatically places bids based on the actual price of the current marketplace.</li></ul>
     * |k8s.aliyun.com/eci-spot-price-limit|"0.5"|The maximum hourly price for the spot instance. The value is accurate to three decimal places. <p>This parameter takes effect only when the Settings of k8s.aliyun.com/eci-spot-strategy are SpotWithPriceLimit.</p>
     * |k8s.aliyun.com/eci-with-eip|"true"|Specifies whether to perform automatic creation and attach an EIP. A value of true indicates that an EIP is automatically created and attached.
     * |k8s.aliyun.com/eci-data-cache-bucket|default|The bucket of DataCache. This parameter is required when you use DataCache to create a pod.
     * |k8s.aliyun.com/eci-data-cache-pl|PL1|The performance level (PL) of the cloud disk created based on DataCache. <p>By default, an ESSD standard SSD is used, and the default PL is PL1.</p>
     * |k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|The provisioned read and write IOPS of the ESSD AutoPL cloud disk. Valid values: 0 to min{50000, 1000 × Capacity - Baseline performance}. Baseline performance = min{1800 + 50 × Capacity, 50000}. For more information, see [ESSD AutoPL cloud disks](https://help.aliyun.com/document_detail/368372.html). <p>If this annotation is added, the cloud disk created based on DataCache is an ESSD AutoPL cloud disk.</p>
     * |k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|Specifies whether to enable the burst feature for the ESSD AutoPL cloud disk. For more information, see [ESSD AutoPL cloud disks](https://help.aliyun.com/document_detail/368372.html). <p>If this annotation is added, the cloud disk created based on DataCache is an ESSD AutoPL cloud disk.</p>
     * |k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|The label string attached to the pod. You can attach up to three labels. Separate the label key and label value with a half-width colon character, and separate multiple labels with a half-width comma character.
     *
     * @param request - ApplyScalingGroupRequest
     *
     * @returns ApplyScalingGroupResponse
     *
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
     * Adds one or more Application Load Balancer (ALB) server groups to a scaling group. This operation is applicable to scenarios where you need to dynamically adjust the number of instances to handle fluctuating workloads and ensure high availability of applications. It enables automatic elastic scaling during business fluctuations, dynamically distributes traffic based on loads, and improves application stability.
     *
     * @remarks
     * When you add ALB server groups to a scaling group, the following conditions must be met:
     * - The network type of the scaling group must be VPC, and the scaling group must be in the same VPC as the ALB server groups.
     * - The ALB server groups must be in the Available state.
     *
     * @param request - AttachAlbServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachAlbServerGroupsResponse
     *
     * @param AttachAlbServerGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AttachAlbServerGroupsResponse
     */
    public function attachAlbServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->albServerGroups) {
            @$query['AlbServerGroups'] = $request->albServerGroups;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceAttach) {
            @$query['ForceAttach'] = $request->forceAttach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachAlbServerGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachAlbServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more Application Load Balancer (ALB) server groups to a scaling group. This operation is applicable to scenarios where you need to dynamically adjust the number of instances to handle fluctuating workloads and ensure high availability of applications. It enables automatic elastic scaling during business fluctuations, dynamically distributes traffic based on loads, and improves application stability.
     *
     * @remarks
     * When you add ALB server groups to a scaling group, the following conditions must be met:
     * - The network type of the scaling group must be VPC, and the scaling group must be in the same VPC as the ALB server groups.
     * - The ALB server groups must be in the Available state.
     *
     * @param request - AttachAlbServerGroupsRequest
     *
     * @returns AttachAlbServerGroupsResponse
     *
     * @param AttachAlbServerGroupsRequest $request
     *
     * @return AttachAlbServerGroupsResponse
     */
    public function attachAlbServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAlbServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Attaches one or more RDS instances to a scaling group, which allows you to adjust the number of RDS instances in the scaling group at any time to increase flexibility and usability.
     *
     * @remarks
     * The following conditions must be met when you attach RDS instances to a scaling group:
     * - The RDS instances and the scaling group must belong to the same account.
     * - The RDS instances must not be locked. For more information about the locking policy, see [Usage notes for ApsaraDB RDS](https://help.aliyun.com/document_detail/41872.html).
     * - The RDS instances must be in the Running state.
     * - The RDS instances must be owned by your current account and must not be deleted.
     * - If you attach an RDS instance that already exists in the scaling group to the scaling group again, the number of RDS instances in the scaling group does not change. However, the system attempts to add the private IP addresses of all ECS instances in the current scaling group to the IP address whitelist of the RDS instance.
     * > After you attach RDS instances, the default whitelist group of the RDS instances can contain a maximum of 1,000 IP addresses. For more information about IP address whitelists, see [Configure an IP address whitelist](https://help.aliyun.com/document_detail/96118.html).
     *
     * @param request - AttachDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachDBInstancesResponse
     *
     * @param AttachDBInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AttachDBInstancesResponse
     */
    public function attachDBInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->attachMode) {
            @$query['AttachMode'] = $request->attachMode;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstances) {
            @$query['DBInstances'] = $request->DBInstances;
        }

        if (null !== $request->forceAttach) {
            @$query['ForceAttach'] = $request->forceAttach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachDBInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches one or more RDS instances to a scaling group, which allows you to adjust the number of RDS instances in the scaling group at any time to increase flexibility and usability.
     *
     * @remarks
     * The following conditions must be met when you attach RDS instances to a scaling group:
     * - The RDS instances and the scaling group must belong to the same account.
     * - The RDS instances must not be locked. For more information about the locking policy, see [Usage notes for ApsaraDB RDS](https://help.aliyun.com/document_detail/41872.html).
     * - The RDS instances must be in the Running state.
     * - The RDS instances must be owned by your current account and must not be deleted.
     * - If you attach an RDS instance that already exists in the scaling group to the scaling group again, the number of RDS instances in the scaling group does not change. However, the system attempts to add the private IP addresses of all ECS instances in the current scaling group to the IP address whitelist of the RDS instance.
     * > After you attach RDS instances, the default whitelist group of the RDS instances can contain a maximum of 1,000 IP addresses. For more information about IP address whitelists, see [Configure an IP address whitelist](https://help.aliyun.com/document_detail/96118.html).
     *
     * @param request - AttachDBInstancesRequest
     *
     * @returns AttachDBInstancesResponse
     *
     * @param AttachDBInstancesRequest $request
     *
     * @return AttachDBInstancesResponse
     */
    public function attachDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDBInstancesWithOptions($request, $runtime);
    }

    /**
     * Manually adds instances to a scaling group. You can add ECS instances, Elastic Container Instance (ECI) instances, or managed instances outside the scaling group to the scaling group and put them into service. You can also restart ECS instances in the scaling group that are in the Economical Mode to the Running state and put them into service.
     *
     * @remarks
     * - Before you invoke this operation, make sure that the following conditions are met:
     *     - The scaling group is in the Active state.
     *     - No scaling activities are in progress in the scaling group.
     * - Limits on ECS instances or ECI instances to be added to the scaling group:
     *     - The instances must be in the same region as the scaling group.
     *     - The instances must be in the Running state.
     *     - The instances must not be added to other scaling groups.
     *     - The billing method of the instances must be subscription, pay-as-you-go, or spot instance.
     *     - If a vSwitch ID is specified for the scaling group, classic network-connected ECS instances or ECI instances, or ECS instances or ECI instances in other VPCs cannot be added to the scaling group.
     *     - If no vSwitch ID is specified for the scaling group, VPC-connected ECS instances or ECI instances cannot be added to the scaling group.
     * - Limits on managed instances to be added to the scaling group:
     *     - The instances must be in the same region as the scaling group.
     *     - Only managed instances that are not added to any scaling group can be added to an ECS scaling group.
     *     - Managed instances do not support lifecycle hooks, association with load balancing, or the health check feature.
     *     - After managed instances are added to an ECS scaling group, the scaling group does not manage the lifecycle of the managed instances.
     *     - Managed instances can only be manually added to or removed from the scaling group. Removed managed instances are not released.
     * - Precautions for using this operation:
     *     - If no scaling activities are in progress in the scaling group, this operation can bypass the cooldown time and be executed directly.
     *     - A successful response only indicates that Auto Scaling accepted the request of the operation invocation and the scaling activity can be executed. It does not mean that the scaling activity will be executed successfully. You must use the returned ScalingActivityId to check the execution status of the scaling activity.
     *     - If the sum of the number of instances specified in this operation and the current number of instances in the scaling group (Total Capacity) is greater than the maximum number of instances (MaxSize), the operation invocation fails.
     *     - ECS instances, ECI instances, or managed instances manually added by using this operation are not associated with the active scaling configuration of the scaling group.
     *
     * @param request - AttachInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachInstancesResponse
     *
     * @param AttachInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->entrusted) {
            @$query['Entrusted'] = $request->entrusted;
        }

        if (null !== $request->ignoreInvalidInstance) {
            @$query['IgnoreInvalidInstance'] = $request->ignoreInvalidInstance;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->lifecycleHook) {
            @$query['LifecycleHook'] = $request->lifecycleHook;
        }

        if (null !== $request->loadBalancerWeights) {
            @$query['LoadBalancerWeights'] = $request->loadBalancerWeights;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Manually adds instances to a scaling group. You can add ECS instances, Elastic Container Instance (ECI) instances, or managed instances outside the scaling group to the scaling group and put them into service. You can also restart ECS instances in the scaling group that are in the Economical Mode to the Running state and put them into service.
     *
     * @remarks
     * - Before you invoke this operation, make sure that the following conditions are met:
     *     - The scaling group is in the Active state.
     *     - No scaling activities are in progress in the scaling group.
     * - Limits on ECS instances or ECI instances to be added to the scaling group:
     *     - The instances must be in the same region as the scaling group.
     *     - The instances must be in the Running state.
     *     - The instances must not be added to other scaling groups.
     *     - The billing method of the instances must be subscription, pay-as-you-go, or spot instance.
     *     - If a vSwitch ID is specified for the scaling group, classic network-connected ECS instances or ECI instances, or ECS instances or ECI instances in other VPCs cannot be added to the scaling group.
     *     - If no vSwitch ID is specified for the scaling group, VPC-connected ECS instances or ECI instances cannot be added to the scaling group.
     * - Limits on managed instances to be added to the scaling group:
     *     - The instances must be in the same region as the scaling group.
     *     - Only managed instances that are not added to any scaling group can be added to an ECS scaling group.
     *     - Managed instances do not support lifecycle hooks, association with load balancing, or the health check feature.
     *     - After managed instances are added to an ECS scaling group, the scaling group does not manage the lifecycle of the managed instances.
     *     - Managed instances can only be manually added to or removed from the scaling group. Removed managed instances are not released.
     * - Precautions for using this operation:
     *     - If no scaling activities are in progress in the scaling group, this operation can bypass the cooldown time and be executed directly.
     *     - A successful response only indicates that Auto Scaling accepted the request of the operation invocation and the scaling activity can be executed. It does not mean that the scaling activity will be executed successfully. You must use the returned ScalingActivityId to check the execution status of the scaling activity.
     *     - If the sum of the number of instances specified in this operation and the current number of instances in the scaling group (Total Capacity) is greater than the maximum number of instances (MaxSize), the operation invocation fails.
     *     - ECS instances, ECI instances, or managed instances manually added by using this operation are not associated with the active scaling configuration of the scaling group.
     *
     * @param request - AttachInstancesRequest
     *
     * @returns AttachInstancesResponse
     *
     * @param AttachInstancesRequest $request
     *
     * @return AttachInstancesResponse
     */
    public function attachInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachInstancesWithOptions($request, $runtime);
    }

    /**
     * Associates one or more load balancing instances with a scaling group to distribute access traffic to multiple instances in the scaling group and enhance the service capability of the scaling group. You can call the AttachLoadBalancers API operation to add one or more load balancing instances.
     *
     * @remarks
     * The following conditions must be met when adding load balancing instances to a scaling group:
     * - The load balancing instances and the scaling group must belong to the same account and region.
     * - The load balancing instances must be in the `Running` state.
     * - Each load balancing instance must be configured with at least one listener and have health checks enabled.
     * - If the network type of both the load balancing instances and the scaling group is VPC, they must be in the same VPC.
     * - If the network type of the scaling group is VPC and the network type of the load balancing instances is classic network, and the backend servers of the load balancing instances include VPC-connected instances, the VPC-connected instances must be in the same VPC as the scaling group.
     * - The number of load balancing instances associated with the scaling group does not exceed the quota. For more information about the quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     *
     * @param request - AttachLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachLoadBalancersResponse
     *
     * @param AttachLoadBalancersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachLoadBalancersResponse
     */
    public function attachLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceAttach) {
            @$query['ForceAttach'] = $request->forceAttach;
        }

        if (null !== $request->loadBalancerConfigs) {
            @$query['LoadBalancerConfigs'] = $request->loadBalancerConfigs;
        }

        if (null !== $request->loadBalancers) {
            @$query['LoadBalancers'] = $request->loadBalancers;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachLoadBalancers',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates one or more load balancing instances with a scaling group to distribute access traffic to multiple instances in the scaling group and enhance the service capability of the scaling group. You can call the AttachLoadBalancers API operation to add one or more load balancing instances.
     *
     * @remarks
     * The following conditions must be met when adding load balancing instances to a scaling group:
     * - The load balancing instances and the scaling group must belong to the same account and region.
     * - The load balancing instances must be in the `Running` state.
     * - Each load balancing instance must be configured with at least one listener and have health checks enabled.
     * - If the network type of both the load balancing instances and the scaling group is VPC, they must be in the same VPC.
     * - If the network type of the scaling group is VPC and the network type of the load balancing instances is classic network, and the backend servers of the load balancing instances include VPC-connected instances, the VPC-connected instances must be in the same VPC as the scaling group.
     * - The number of load balancing instances associated with the scaling group does not exceed the quota. For more information about the quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     *
     * @param request - AttachLoadBalancersRequest
     *
     * @returns AttachLoadBalancersResponse
     *
     * @param AttachLoadBalancersRequest $request
     *
     * @return AttachLoadBalancersResponse
     */
    public function attachLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * Invokes the AttachServerGroups API to attach one or more load balancing server groups to a scaling group. This applies to scenarios that require dynamic instance scaling to handle fluctuating workloads and ensure application programs remain active with high availability. Supported server group types include Application Load Balancer (ALB), Network Load Balancer (NLB), and Gateway Load Balancer (GWLB). This enables automatic elastic extension, allows you to dynamically allocate traffic based on load conditions, and improves the stability of application programs.
     *
     * @param request - AttachServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachServerGroupsResponse
     *
     * @param AttachServerGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachServerGroupsResponse
     */
    public function attachServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceAttach) {
            @$query['ForceAttach'] = $request->forceAttach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->serverGroups) {
            @$query['ServerGroups'] = $request->serverGroups;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachServerGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes the AttachServerGroups API to attach one or more load balancing server groups to a scaling group. This applies to scenarios that require dynamic instance scaling to handle fluctuating workloads and ensure application programs remain active with high availability. Supported server group types include Application Load Balancer (ALB), Network Load Balancer (NLB), and Gateway Load Balancer (GWLB). This enables automatic elastic extension, allows you to dynamically allocate traffic based on load conditions, and improves the stability of application programs.
     *
     * @param request - AttachServerGroupsRequest
     *
     * @returns AttachServerGroupsResponse
     *
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
     * Adds one or more vServer groups of a Classic Load Balancer (CLB) instance to a scaling group. After a scaling group is associated with a CLB instance, instances added to the scaling group are automatically added as backend servers of the CLB instance to process access requests forwarded by the CLB instance. To forward different requests to different backend servers or forward requests based on domain names and URLs, you can call the AttachVServerGroups API operation to add one or more vServer groups of the CLB instance and manage different backend servers by using the vServer groups.
     *
     * @remarks
     * - To add vServer groups to a scaling group, the following conditions must be met:
     *     - The CLB instance and the scaling group must belong to the same account.
     *     - The CLB instance and the scaling group must be in the same region.
     *     - The CLB instance must be in the Running state.
     *     - The CLB instance must be configured with at least one listener and health checks must be enabled.
     *     - If the network types of both the CLB instance and the scaling group are VPC, they must be in the same VPC.
     *     - If the network type of the scaling group is VPC and the network type of the CLB instance is classic network, and the vServer group contains VPC-connected instances, the instances must be in the same VPC as the scaling group.
     *     - The vServer groups to be added must belong to the corresponding CLB instance.
     *     - The number of vServer groups in the scaling group does not exceed the quota. For more information about the quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * - When you add vServer groups to a scaling group, you must specify the following properties:
     *     - CLB instance ID (LoadBalancerId)
     *     - vServer group ID (VServerGroupId)
     *     - vServer group port number (Port)
     *     >If you add the same vServer group to a scaling group by using different port numbers, the system considers that multiple vServer groups are added to the scaling group. If both the vServer group ID and the port number in the request parameters are duplicated, the system uses the first configured group by default and ignores the other vServer groups.
     *
     * @param request - AttachVServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachVServerGroupsResponse
     *
     * @param AttachVServerGroupsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachVServerGroupsResponse
     */
    public function attachVServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceAttach) {
            @$query['ForceAttach'] = $request->forceAttach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->VServerGroups) {
            @$query['VServerGroups'] = $request->VServerGroups;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachVServerGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more vServer groups of a Classic Load Balancer (CLB) instance to a scaling group. After a scaling group is associated with a CLB instance, instances added to the scaling group are automatically added as backend servers of the CLB instance to process access requests forwarded by the CLB instance. To forward different requests to different backend servers or forward requests based on domain names and URLs, you can call the AttachVServerGroups API operation to add one or more vServer groups of the CLB instance and manage different backend servers by using the vServer groups.
     *
     * @remarks
     * - To add vServer groups to a scaling group, the following conditions must be met:
     *     - The CLB instance and the scaling group must belong to the same account.
     *     - The CLB instance and the scaling group must be in the same region.
     *     - The CLB instance must be in the Running state.
     *     - The CLB instance must be configured with at least one listener and health checks must be enabled.
     *     - If the network types of both the CLB instance and the scaling group are VPC, they must be in the same VPC.
     *     - If the network type of the scaling group is VPC and the network type of the CLB instance is classic network, and the vServer group contains VPC-connected instances, the instances must be in the same VPC as the scaling group.
     *     - The vServer groups to be added must belong to the corresponding CLB instance.
     *     - The number of vServer groups in the scaling group does not exceed the quota. For more information about the quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * - When you add vServer groups to a scaling group, you must specify the following properties:
     *     - CLB instance ID (LoadBalancerId)
     *     - vServer group ID (VServerGroupId)
     *     - vServer group port number (Port)
     *     >If you add the same vServer group to a scaling group by using different port numbers, the system considers that multiple vServer groups are added to the scaling group. If both the vServer group ID and the port number in the request parameters are duplicated, the system uses the first configured group by default and ignores the other vServer groups.
     *
     * @param request - AttachVServerGroupsRequest
     *
     * @returns AttachVServerGroupsResponse
     *
     * @param AttachVServerGroupsRequest $request
     *
     * @return AttachVServerGroupsResponse
     */
    public function attachVServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachVServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Cancels an instance refresh task and retains new instances that have been replaced and scaled out.
     *
     * @remarks
     * - You cannot cancel an instance refresh task that is being rolled back.
     *
     * @param request - CancelInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelInstanceRefreshResponse
     *
     * @param CancelInstanceRefreshRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CancelInstanceRefreshResponse
     */
    public function cancelInstanceRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceRefreshTaskId) {
            @$query['InstanceRefreshTaskId'] = $request->instanceRefreshTaskId;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelInstanceRefresh',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an instance refresh task and retains new instances that have been replaced and scaled out.
     *
     * @remarks
     * - You cannot cancel an instance refresh task that is being rolled back.
     *
     * @param request - CancelInstanceRefreshRequest
     *
     * @returns CancelInstanceRefreshResponse
     *
     * @param CancelInstanceRefreshRequest $request
     *
     * @return CancelInstanceRefreshResponse
     */
    public function cancelInstanceRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelInstanceRefreshWithOptions($request, $runtime);
    }

    /**
     * Cancels the zone fault degradation for a scaling group.
     *
     * @param request - CancelScalingGroupZoneShiftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelScalingGroupZoneShiftResponse
     *
     * @param CancelScalingGroupZoneShiftRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CancelScalingGroupZoneShiftResponse
     */
    public function cancelScalingGroupZoneShiftWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelScalingGroupZoneShift',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelScalingGroupZoneShiftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the zone fault degradation for a scaling group.
     *
     * @param request - CancelScalingGroupZoneShiftRequest
     *
     * @returns CancelScalingGroupZoneShiftResponse
     *
     * @param CancelScalingGroupZoneShiftRequest $request
     *
     * @return CancelScalingGroupZoneShiftResponse
     */
    public function cancelScalingGroupZoneShift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelScalingGroupZoneShiftWithOptions($request, $runtime);
    }

    /**
     * Changes the resource group to which a scaling group belongs. Resource groups allow you to group your cloud resources, such as scaling groups, by purpose, permissions, and ownership to implement hierarchical resource management for multiple users and projects within an enterprise. You can call the ChangeResourceGroup operation to move a scaling group from one resource group to another. This allows you to centrally monitor and manage the scaling group in the new resource group, eliminating the need to check resources across multiple Alibaba Cloud services.
     *
     * @remarks
     * - A resource is a cloud service entity that you create in Alibaba Cloud. For example, a scaling group is a resource.
     * - A resource group is a mechanism for grouping and managing resources within an Alibaba Cloud account. It helps you resolve the complexities of resource grouping and authorization management within a single cloud account. For more information, see [What is Resource Management](https://help.aliyun.com/document_detail/94475.html).
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
        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
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

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-02-22',
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
     * Changes the resource group to which a scaling group belongs. Resource groups allow you to group your cloud resources, such as scaling groups, by purpose, permissions, and ownership to implement hierarchical resource management for multiple users and projects within an enterprise. You can call the ChangeResourceGroup operation to move a scaling group from one resource group to another. This allows you to centrally monitor and manage the scaling group in the new resource group, eliminating the need to check resources across multiple Alibaba Cloud services.
     *
     * @remarks
     * - A resource is a cloud service entity that you create in Alibaba Cloud. For example, a scaling group is a resource.
     * - A resource group is a mechanism for grouping and managing resources within an Alibaba Cloud account. It helps you resolve the complexities of resource grouping and authorization management within a single cloud account. For more information, see [What is Resource Management](https://help.aliyun.com/document_detail/94475.html).
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
     * Ends the wait state of a scaling activity in advance to execute the next action if a lifecycle hook is configured for a scaling group.
     *
     * @remarks
     * Allows you to specify the next action after the wait state ends: continue the scaling activity (CONTINUE), abandon the scaling activity (ABANDON), or perform a rollback (ROLLBACK).
     *
     * @param request - CompleteLifecycleActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteLifecycleActionResponse
     *
     * @param CompleteLifecycleActionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CompleteLifecycleActionResponse
     */
    public function completeLifecycleActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->lifecycleActionResult) {
            @$query['LifecycleActionResult'] = $request->lifecycleActionResult;
        }

        if (null !== $request->lifecycleActionToken) {
            @$query['LifecycleActionToken'] = $request->lifecycleActionToken;
        }

        if (null !== $request->lifecycleHookId) {
            @$query['LifecycleHookId'] = $request->lifecycleHookId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompleteLifecycleAction',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompleteLifecycleActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ends the wait state of a scaling activity in advance to execute the next action if a lifecycle hook is configured for a scaling group.
     *
     * @remarks
     * Allows you to specify the next action after the wait state ends: continue the scaling activity (CONTINUE), abandon the scaling activity (ABANDON), or perform a rollback (ROLLBACK).
     *
     * @param request - CompleteLifecycleActionRequest
     *
     * @returns CompleteLifecycleActionResponse
     *
     * @param CompleteLifecycleActionRequest $request
     *
     * @return CompleteLifecycleActionResponse
     */
    public function completeLifecycleAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeLifecycleActionWithOptions($request, $runtime);
    }

    /**
     * For workloads with bursty or unpredictable traffic patterns, call the CreateAlarm operation to create an event-triggered task. After the task is associated with CloudMonitor metrics, you can dynamically adjust the number of ECS or ECI instances in a scaling group and monitor instance metrics in real time to help you better manage and maintain cloud resources.
     *
     * @remarks
     * - If you create an event-triggered task of the custom monitoring type (MetricType=custom), you must first report custom metric data to CloudMonitor. For more information, see [Custom monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74861.html).
     * - When you create an event-triggered task, you must specify a metric (MetricName) and configure dimension information (Dimensions.DimensionKey and Dimensions.DimensionValue) to determine the aggregation scope of the metric data in the scaling group. For example, you can specify user_id and scaling_group to aggregate the metric data of all ECS or ECI instances for a specific user in a specific scaling group.
     *     - The metrics for custom monitoring event-triggered tasks (MetricType=custom) depend on your custom metrics.
     *     - For more information about the metrics supported by system monitoring event-triggered tasks (MetricType=system), see [System monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74854.html).
     * > In the dimension information, user_id and scaling_group are automatically populated by the system, while device and state must be manually specified. For more information, see the Dimensions.DimensionKey and Dimensions.DimensionValue parameters.
     *
     * @param request - CreateAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlarmResponse
     *
     * @param CreateAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlarmResponse
     */
    public function createAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmActions) {
            @$query['AlarmActions'] = $request->alarmActions;
        }

        if (null !== $request->comparisonOperator) {
            @$query['ComparisonOperator'] = $request->comparisonOperator;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effective) {
            @$query['Effective'] = $request->effective;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->expressions) {
            @$query['Expressions'] = $request->expressions;
        }

        if (null !== $request->expressionsLogicOperator) {
            @$query['ExpressionsLogicOperator'] = $request->expressionsLogicOperator;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->statistics) {
            @$query['Statistics'] = $request->statistics;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAlarm',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * For workloads with bursty or unpredictable traffic patterns, call the CreateAlarm operation to create an event-triggered task. After the task is associated with CloudMonitor metrics, you can dynamically adjust the number of ECS or ECI instances in a scaling group and monitor instance metrics in real time to help you better manage and maintain cloud resources.
     *
     * @remarks
     * - If you create an event-triggered task of the custom monitoring type (MetricType=custom), you must first report custom metric data to CloudMonitor. For more information, see [Custom monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74861.html).
     * - When you create an event-triggered task, you must specify a metric (MetricName) and configure dimension information (Dimensions.DimensionKey and Dimensions.DimensionValue) to determine the aggregation scope of the metric data in the scaling group. For example, you can specify user_id and scaling_group to aggregate the metric data of all ECS or ECI instances for a specific user in a specific scaling group.
     *     - The metrics for custom monitoring event-triggered tasks (MetricType=custom) depend on your custom metrics.
     *     - For more information about the metrics supported by system monitoring event-triggered tasks (MetricType=system), see [System monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74854.html).
     * > In the dimension information, user_id and scaling_group are automatically populated by the system, while device and state must be manually specified. For more information, see the Dimensions.DimensionKey and Dimensions.DimensionValue parameters.
     *
     * @param request - CreateAlarmRequest
     *
     * @returns CreateAlarmResponse
     *
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
     * Creates a diagnostic report.
     *
     * @param request - CreateDiagnoseReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiagnoseReportResponse
     *
     * @param CreateDiagnoseReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDiagnoseReportResponse
     */
    public function createDiagnoseReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDiagnoseReport',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a diagnostic report.
     *
     * @param request - CreateDiagnoseReportRequest
     *
     * @returns CreateDiagnoseReportResponse
     *
     * @param CreateDiagnoseReportRequest $request
     *
     * @return CreateDiagnoseReportResponse
     */
    public function createDiagnoseReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnoseReportWithOptions($request, $runtime);
    }

    /**
     * Creates an Elastic Container Instance (ECI) scaling configuration. Auto Scaling uses this scaling configuration as a template for ECI instances and performs automatic creation of ECI instances to meet your business needs when a scale-out activity is triggered.
     *
     * @remarks
     * The scaling configuration specifies the template for ECI instances used during scale-out activities.
     * The Cpu and Memory parameters specify the range of vCPUs and memory to define the instance type. Auto Scaling determines the available instance types based on factors such as I/O optimization and zone, and creates the most cost-effective instance based on price sorting. This method applies only when the scaling policy of the scaling group is set to cost optimization and no instance type is specified in the scaling configuration.
     *
     * @param request - CreateEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEciScalingConfigurationResponse
     *
     * @param CreateEciScalingConfigurationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateEciScalingConfigurationResponse
     */
    public function createEciScalingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfos) {
            @$query['AcrRegistryInfos'] = $request->acrRegistryInfos;
        }

        if (null !== $request->activeDeadlineSeconds) {
            @$query['ActiveDeadlineSeconds'] = $request->activeDeadlineSeconds;
        }

        if (null !== $request->autoCreateEip) {
            @$query['AutoCreateEip'] = $request->autoCreateEip;
        }

        if (null !== $request->autoMatchImageCache) {
            @$query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }

        if (null !== $request->containerGroupName) {
            @$query['ContainerGroupName'] = $request->containerGroupName;
        }

        if (null !== $request->containers) {
            @$query['Containers'] = $request->containers;
        }

        if (null !== $request->costOptimization) {
            @$query['CostOptimization'] = $request->costOptimization;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->cpuOptionsCore) {
            @$query['CpuOptionsCore'] = $request->cpuOptionsCore;
        }

        if (null !== $request->cpuOptionsThreadsPerCore) {
            @$query['CpuOptionsThreadsPerCore'] = $request->cpuOptionsThreadsPerCore;
        }

        if (null !== $request->dataCacheBucket) {
            @$query['DataCacheBucket'] = $request->dataCacheBucket;
        }

        if (null !== $request->dataCacheBurstingEnabled) {
            @$query['DataCacheBurstingEnabled'] = $request->dataCacheBurstingEnabled;
        }

        if (null !== $request->dataCachePL) {
            @$query['DataCachePL'] = $request->dataCachePL;
        }

        if (null !== $request->dataCacheProvisionedIops) {
            @$query['DataCacheProvisionedIops'] = $request->dataCacheProvisionedIops;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dnsConfigNameServers) {
            @$query['DnsConfigNameServers'] = $request->dnsConfigNameServers;
        }

        if (null !== $request->dnsConfigOptions) {
            @$query['DnsConfigOptions'] = $request->dnsConfigOptions;
        }

        if (null !== $request->dnsConfigSearchs) {
            @$query['DnsConfigSearchs'] = $request->dnsConfigSearchs;
        }

        if (null !== $request->dnsPolicy) {
            @$query['DnsPolicy'] = $request->dnsPolicy;
        }

        if (null !== $request->egressBandwidth) {
            @$query['EgressBandwidth'] = $request->egressBandwidth;
        }

        if (null !== $request->eipBandwidth) {
            @$query['EipBandwidth'] = $request->eipBandwidth;
        }

        if (null !== $request->enableSls) {
            @$query['EnableSls'] = $request->enableSls;
        }

        if (null !== $request->ephemeralStorage) {
            @$query['EphemeralStorage'] = $request->ephemeralStorage;
        }

        if (null !== $request->gpuDriverVersion) {
            @$query['GpuDriverVersion'] = $request->gpuDriverVersion;
        }

        if (null !== $request->hostAliases) {
            @$query['HostAliases'] = $request->hostAliases;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->imageRegistryCredentials) {
            @$query['ImageRegistryCredentials'] = $request->imageRegistryCredentials;
        }

        if (null !== $request->imageSnapshotId) {
            @$query['ImageSnapshotId'] = $request->imageSnapshotId;
        }

        if (null !== $request->ingressBandwidth) {
            @$query['IngressBandwidth'] = $request->ingressBandwidth;
        }

        if (null !== $request->initContainers) {
            @$query['InitContainers'] = $request->initContainers;
        }

        if (null !== $request->instanceFamilyLevel) {
            @$query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }

        if (null !== $request->instanceTypes) {
            @$query['InstanceTypes'] = $request->instanceTypes;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->loadBalancerWeight) {
            @$query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->ntpServers) {
            @$query['NtpServers'] = $request->ntpServers;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->restartPolicy) {
            @$query['RestartPolicy'] = $request->restartPolicy;
        }

        if (null !== $request->scalingConfigurationName) {
            @$query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->securityContextSysctls) {
            @$query['SecurityContextSysctls'] = $request->securityContextSysctls;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->spotPriceLimit) {
            @$query['SpotPriceLimit'] = $request->spotPriceLimit;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->volumes) {
            @$query['Volumes'] = $request->volumes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEciScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Elastic Container Instance (ECI) scaling configuration. Auto Scaling uses this scaling configuration as a template for ECI instances and performs automatic creation of ECI instances to meet your business needs when a scale-out activity is triggered.
     *
     * @remarks
     * The scaling configuration specifies the template for ECI instances used during scale-out activities.
     * The Cpu and Memory parameters specify the range of vCPUs and memory to define the instance type. Auto Scaling determines the available instance types based on factors such as I/O optimization and zone, and creates the most cost-effective instance based on price sorting. This method applies only when the scaling policy of the scaling group is set to cost optimization and no instance type is specified in the scaling configuration.
     *
     * @param request - CreateEciScalingConfigurationRequest
     *
     * @returns CreateEciScalingConfigurationResponse
     *
     * @param CreateEciScalingConfigurationRequest $request
     *
     * @return CreateEciScalingConfigurationResponse
     */
    public function createEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates one or more lifecycle hooks for a specified Auto Scaling group. These hooks intervene at critical stages of the instance lifecycle, such as before startup or termination, allowing you to execute custom operations such as sending notifications or running automated scripts. This feature enables finer-grained control and management, allowing you to authenticate, configure, or back up data before and after instances are affected by a scaling activity, thereby enhancing the flexibility and reliability of application deployments.
     *
     * @remarks
     * A scaling group can have up to 10 lifecycle hooks. When a scaling activity occurs in a scaling group that has lifecycle hooks, the lifecycle hooks pause the scaling activity for a period of time. You can specify the wait time by using the HeartbeatTimeout parameter. During the wait time, you can perform operations such as initializing the configurations of ECS instances and obtaining ECS instance data.
     * During a scale-out activity, ECS instances enter the wait state after they are added to the whitelist of the ApsaraDB RDS instance, and are added to the backend server group of the Server Load Balancer (SLB) instance after the wait state ends. During a scale-in activity, ECS instances enter the wait state after they are removed from the backend server group of the SLB instance, and are removed from the whitelist of the ApsaraDB RDS instance after the wait state ends.
     * You can configure notification methods for lifecycle hooks. Supported notification methods include Message Service (MNS) topics, MNS queues, and Operation Orchestration Service (OOS) templates. If you configure an OOS template, you must create a Resource Access Management (RAM) role for OOS. For more information, see [Grant RAM permissions to OOS](https://help.aliyun.com/document_detail/120810.html).
     * > If the scaling group contains existing ECS instances and the configured OOS template is used to add or remove instances from the whitelist of a cloud database other than ApsaraDB RDS, you must manually add the existing ECS instances to the whitelist of the cloud database.
     *
     * @param request - CreateLifecycleHookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLifecycleHookResponse
     *
     * @param CreateLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLifecycleHookResponse
     */
    public function createLifecycleHookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultResult) {
            @$query['DefaultResult'] = $request->defaultResult;
        }

        if (null !== $request->heartbeatTimeout) {
            @$query['HeartbeatTimeout'] = $request->heartbeatTimeout;
        }

        if (null !== $request->lifecycleActionSources) {
            @$query['LifecycleActionSources'] = $request->lifecycleActionSources;
        }

        if (null !== $request->lifecycleHookName) {
            @$query['LifecycleHookName'] = $request->lifecycleHookName;
        }

        if (null !== $request->lifecycleTransition) {
            @$query['LifecycleTransition'] = $request->lifecycleTransition;
        }

        if (null !== $request->notificationArn) {
            @$query['NotificationArn'] = $request->notificationArn;
        }

        if (null !== $request->notificationMetadata) {
            @$query['NotificationMetadata'] = $request->notificationMetadata;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLifecycleHook',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates one or more lifecycle hooks for a specified Auto Scaling group. These hooks intervene at critical stages of the instance lifecycle, such as before startup or termination, allowing you to execute custom operations such as sending notifications or running automated scripts. This feature enables finer-grained control and management, allowing you to authenticate, configure, or back up data before and after instances are affected by a scaling activity, thereby enhancing the flexibility and reliability of application deployments.
     *
     * @remarks
     * A scaling group can have up to 10 lifecycle hooks. When a scaling activity occurs in a scaling group that has lifecycle hooks, the lifecycle hooks pause the scaling activity for a period of time. You can specify the wait time by using the HeartbeatTimeout parameter. During the wait time, you can perform operations such as initializing the configurations of ECS instances and obtaining ECS instance data.
     * During a scale-out activity, ECS instances enter the wait state after they are added to the whitelist of the ApsaraDB RDS instance, and are added to the backend server group of the Server Load Balancer (SLB) instance after the wait state ends. During a scale-in activity, ECS instances enter the wait state after they are removed from the backend server group of the SLB instance, and are removed from the whitelist of the ApsaraDB RDS instance after the wait state ends.
     * You can configure notification methods for lifecycle hooks. Supported notification methods include Message Service (MNS) topics, MNS queues, and Operation Orchestration Service (OOS) templates. If you configure an OOS template, you must create a Resource Access Management (RAM) role for OOS. For more information, see [Grant RAM permissions to OOS](https://help.aliyun.com/document_detail/120810.html).
     * > If the scaling group contains existing ECS instances and the configured OOS template is used to add or remove instances from the whitelist of a cloud database other than ApsaraDB RDS, you must manually add the existing ECS instances to the whitelist of the cloud database.
     *
     * @param request - CreateLifecycleHookRequest
     *
     * @returns CreateLifecycleHookResponse
     *
     * @param CreateLifecycleHookRequest $request
     *
     * @return CreateLifecycleHookResponse
     */
    public function createLifecycleHook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLifecycleHookWithOptions($request, $runtime);
    }

    /**
     * Creates a notification configuration for Auto Scaling events and resource changes to help you track scaling group dynamics and automate the management of Auto Scaling events.
     *
     * @remarks
     * - You can configure the notification Settings to receive messages from cloud monitoring system events, Simple Message Queue (formerly MNS) queues, or Simple Message Queue (formerly MNS) topics. When a scaling event or resource change of a specified type occurs in a scaling group, Auto Scaling notifies cloud monitoring or Simple Message Queue (formerly MNS).
     * - Different event notifications within the same scaling group cannot use the same destination.
     *   For example, different event notifications cannot use the same cloud monitoring system event, the same MNS topic, or the same MNS queue at the same time.
     *
     * @param request - CreateNotificationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNotificationConfigurationResponse
     *
     * @param CreateNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateNotificationConfigurationResponse
     */
    public function createNotificationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->messageEncoding) {
            @$query['MessageEncoding'] = $request->messageEncoding;
        }

        if (null !== $request->notificationArn) {
            @$query['NotificationArn'] = $request->notificationArn;
        }

        if (null !== $request->notificationTypes) {
            @$query['NotificationTypes'] = $request->notificationTypes;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->timeZone) {
            @$query['TimeZone'] = $request->timeZone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNotificationConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a notification configuration for Auto Scaling events and resource changes to help you track scaling group dynamics and automate the management of Auto Scaling events.
     *
     * @remarks
     * - You can configure the notification Settings to receive messages from cloud monitoring system events, Simple Message Queue (formerly MNS) queues, or Simple Message Queue (formerly MNS) topics. When a scaling event or resource change of a specified type occurs in a scaling group, Auto Scaling notifies cloud monitoring or Simple Message Queue (formerly MNS).
     * - Different event notifications within the same scaling group cannot use the same destination.
     *   For example, different event notifications cannot use the same cloud monitoring system event, the same MNS topic, or the same MNS queue at the same time.
     *
     * @param request - CreateNotificationConfigurationRequest
     *
     * @returns CreateNotificationConfigurationResponse
     *
     * @param CreateNotificationConfigurationRequest $request
     *
     * @return CreateNotificationConfigurationResponse
     */
    public function createNotificationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNotificationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates an ECS scaling configuration for a scaling group.
     *
     * @remarks
     * A scaling configuration specifies the ECS instance template used during scale-out. The following instance configuration methods are supported:
     * - InstancePatternInfos: the intelligent configuration mode. You do not need to specify exact network types. You only need to specify the number of vCPUs, memory size, instance family level, and maximum price based on your business requirements. The system automatically filters network types that meet the requirements and preferentially selects the network type with the lowest price to create ECS instances. This mode applies only to scaling groups in a VPC and effectively reduces the chance of insufficient network type inventory during scale-out.
     * - InstanceType: specifies a single instance type.
     * - InstanceTypes: specifies multiple instance types.
     * - InstanceTypeOverrides: specifies multiple instance types and configures weights for different instance types.
     * - Cpu and Memory: specifies the range of instance types by defining the number of vCPUs and memory size. Auto Scaling determines the available instance types based on factors such as I/O optimization and zone, and creates instances with the lowest price. This method applies only when the scaling policy of the scaling group is set to cost optimization and no instance type is specified in the scaling configuration.
     * - You can use one of the following methods to bind the primary ENI. Note that you can use only one method to configure the primary ENI in a single call. Using both methods at the same time causes the call to fail and returns an error message.
     *     - Directly set the configuration information of the primary ENI by using parameters such as SecurityGroupId, SecurityGroupIds, and Ipv6AddressCount.
     *     - Set the configuration information of the primary ENI and secondary ENIs by using NetworkInterfaces. When you use the NetworkInterface parameter, you must set the primary ENI information. If NetworkInterface.InstanceType is set to Primary, it indicates the primary ENI. If NetworkInterface.InstanceType is set to Secondary or left empty, it indicates a secondary ENI.
     * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. However, you can specify InstanceType or InstanceTypes together with InstancePatternInfos. When InstanceType or InstanceTypes is specified together with InstancePatternInfos, Auto Scaling preferentially uses the specified instance types for scale-out. If the specified instance types are out of stock, Auto Scaling uses the instance types that match the InstancePatternInfos configuration.
     *
     * @param tmpReq - CreateScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScalingConfigurationResponse
     *
     * @param CreateScalingConfigurationRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateScalingConfigurationResponse
     */
    public function createScalingConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateScalingConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->schedulerOptions) {
            $request->schedulerOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedulerOptions, 'SchedulerOptions', 'json');
        }

        $query = [];
        if (null !== $request->affinity) {
            @$query['Affinity'] = $request->affinity;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->creditSpecification) {
            @$query['CreditSpecification'] = $request->creditSpecification;
        }

        if (null !== $request->customPriorities) {
            @$query['CustomPriorities'] = $request->customPriorities;
        }

        if (null !== $request->dataDisks) {
            @$query['DataDisks'] = $request->dataDisks;
        }

        if (null !== $request->dedicatedHostClusterId) {
            @$query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->deploymentSetId) {
            @$query['DeploymentSetId'] = $request->deploymentSetId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->hpcClusterId) {
            @$query['HpcClusterId'] = $request->hpcClusterId;
        }

        if (null !== $request->httpEndpoint) {
            @$query['HttpEndpoint'] = $request->httpEndpoint;
        }

        if (null !== $request->httpTokens) {
            @$query['HttpTokens'] = $request->httpTokens;
        }

        if (null !== $request->imageFamily) {
            @$query['ImageFamily'] = $request->imageFamily;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceDescription) {
            @$query['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instancePatternInfos) {
            @$query['InstancePatternInfos'] = $request->instancePatternInfos;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->instanceTypeCandidateOptions) {
            @$query['InstanceTypeCandidateOptions'] = $request->instanceTypeCandidateOptions;
        }

        if (null !== $request->instanceTypeOverrides) {
            @$query['InstanceTypeOverrides'] = $request->instanceTypeOverrides;
        }

        if (null !== $request->instanceTypes) {
            @$query['InstanceTypes'] = $request->instanceTypes;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->internetMaxBandwidthIn) {
            @$query['InternetMaxBandwidthIn'] = $request->internetMaxBandwidthIn;
        }

        if (null !== $request->internetMaxBandwidthOut) {
            @$query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }

        if (null !== $request->ioOptimized) {
            @$query['IoOptimized'] = $request->ioOptimized;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->loadBalancerWeight) {
            @$query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->networkInterfaces) {
            @$query['NetworkInterfaces'] = $request->networkInterfaces;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordInherit) {
            @$query['PasswordInherit'] = $request->passwordInherit;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourcePoolOptions) {
            @$query['ResourcePoolOptions'] = $request->resourcePoolOptions;
        }

        if (null !== $request->scalingConfigurationName) {
            @$query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->schedulerOptionsShrink) {
            @$query['SchedulerOptions'] = $request->schedulerOptionsShrink;
        }

        if (null !== $request->secondaryEniVSwitchConstraint) {
            @$query['SecondaryEniVSwitchConstraint'] = $request->secondaryEniVSwitchConstraint;
        }

        if (null !== $request->securityEnhancementStrategy) {
            @$query['SecurityEnhancementStrategy'] = $request->securityEnhancementStrategy;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        if (null !== $request->securityOptions) {
            @$query['SecurityOptions'] = $request->securityOptions;
        }

        if (null !== $request->spotDuration) {
            @$query['SpotDuration'] = $request->spotDuration;
        }

        if (null !== $request->spotInterruptionBehavior) {
            @$query['SpotInterruptionBehavior'] = $request->spotInterruptionBehavior;
        }

        if (null !== $request->spotPriceLimits) {
            @$query['SpotPriceLimits'] = $request->spotPriceLimits;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->storageSetId) {
            @$query['StorageSetId'] = $request->storageSetId;
        }

        if (null !== $request->storageSetPartitionNumber) {
            @$query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }

        if (null !== $request->systemDiskCategories) {
            @$query['SystemDiskCategories'] = $request->systemDiskCategories;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->tenancy) {
            @$query['Tenancy'] = $request->tenancy;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->imageOptions) {
            @$query['ImageOptions'] = $request->imageOptions;
        }

        if (null !== $request->privatePoolOptions) {
            @$query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }

        if (null !== $request->systemDisk) {
            @$query['SystemDisk'] = $request->systemDisk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ECS scaling configuration for a scaling group.
     *
     * @remarks
     * A scaling configuration specifies the ECS instance template used during scale-out. The following instance configuration methods are supported:
     * - InstancePatternInfos: the intelligent configuration mode. You do not need to specify exact network types. You only need to specify the number of vCPUs, memory size, instance family level, and maximum price based on your business requirements. The system automatically filters network types that meet the requirements and preferentially selects the network type with the lowest price to create ECS instances. This mode applies only to scaling groups in a VPC and effectively reduces the chance of insufficient network type inventory during scale-out.
     * - InstanceType: specifies a single instance type.
     * - InstanceTypes: specifies multiple instance types.
     * - InstanceTypeOverrides: specifies multiple instance types and configures weights for different instance types.
     * - Cpu and Memory: specifies the range of instance types by defining the number of vCPUs and memory size. Auto Scaling determines the available instance types based on factors such as I/O optimization and zone, and creates instances with the lowest price. This method applies only when the scaling policy of the scaling group is set to cost optimization and no instance type is specified in the scaling configuration.
     * - You can use one of the following methods to bind the primary ENI. Note that you can use only one method to configure the primary ENI in a single call. Using both methods at the same time causes the call to fail and returns an error message.
     *     - Directly set the configuration information of the primary ENI by using parameters such as SecurityGroupId, SecurityGroupIds, and Ipv6AddressCount.
     *     - Set the configuration information of the primary ENI and secondary ENIs by using NetworkInterfaces. When you use the NetworkInterface parameter, you must set the primary ENI information. If NetworkInterface.InstanceType is set to Primary, it indicates the primary ENI. If NetworkInterface.InstanceType is set to Secondary or left empty, it indicates a secondary ENI.
     * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. However, you can specify InstanceType or InstanceTypes together with InstancePatternInfos. When InstanceType or InstanceTypes is specified together with InstancePatternInfos, Auto Scaling preferentially uses the specified instance types for scale-out. If the specified instance types are out of stock, Auto Scaling uses the instance types that match the InstancePatternInfos configuration.
     *
     * @param request - CreateScalingConfigurationRequest
     *
     * @returns CreateScalingConfigurationResponse
     *
     * @param CreateScalingConfigurationRequest $request
     *
     * @return CreateScalingConfigurationResponse
     */
    public function createScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Creates a scaling group to automatically adjust your computing capacity by adding or removing instances based on business demands and policies.
     *
     * @remarks
     * A scaling group is a collection of ECS instances that share the same application scenarios.
     * The number of scaling groups that you can create in a region depends on your Auto Scaling usage. Go to Quota Center to check the quota for the total number of scaling groups.
     * A scaling group does not take effect immediately after it is created. You must invoke the [EnableScalingGroup](https://help.aliyun.com/document_detail/25939.html) operation to enable the scaling group before it can trigger scaling activities and execute scaling rules.
     * The scaling group, the associated Classic Load Balancer (CLB) instances, and the associated ApsaraDB RDS instances must reside in the same region. For more information, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * If you associate CLB instances with the scaling group, Auto Scaling automatically adds the ECS instances in the scaling group to the backend server groups of the CLB instances. You can specify the server groups to which the ECS instances are added. The following types of server groups are supported:
     * - Default server group: contains ECS instances that accept frontend requests. If a listener is not configured with a virtual server group or a primary/secondary server group, requests are forwarded to the ECS instances in the default server group by default.
     * - Virtual server group: used when you need to forward different requests to different backend servers, or forward requests based on domain names and URLs.
     * > If you specify both the default server group and multiple virtual server groups, the ECS instances are added to all these server groups.
     * After an instance is added to a backend server group of a CLB instance, the default weight of the instance is 50. The CLB instance must meet the following conditions:
     * - The CLB instance must be in the Active state. You can call the [DescribeLoadBalancers](https://help.aliyun.com/document_detail/2401696.html) operation to check the status of the CLB instance.
     * - Health checks must be enabled for all listeners configured on the CLB instance. Otherwise, the scaling group fails to be created.
     * If you associate Application Load Balancer (ALB) server groups, Network Load Balancer (NLB) server groups, or Gateway Load Balancer (GWLB) server groups with the scaling group, Auto Scaling automatically adds the ECS instances in the scaling group as backend servers to the ALB, NLB, or GWLB server groups to process access requests distributed by the ALB, NLB, or GWLB instances. You can specify multiple ALB, NLB, or GWLB server groups, but the server groups must belong to the same VPC as the scaling group. For more information, see [AttachAlbServerGroups](https://help.aliyun.com/document_detail/266800.html) or [AttachServerGroups](https://help.aliyun.com/document_detail/600535.html).
     * If you associate ApsaraDB RDS instances with the scaling group, Auto Scaling automatically adds the internal IP addresses of the ECS instances in the scaling group to the whitelists of the ApsaraDB RDS instances. The ApsaraDB RDS instances must meet the following conditions:
     * - The ApsaraDB RDS instance must be in the Running state. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) operation to check the status of the ApsaraDB RDS instance.
     * - The number of IP addresses in the whitelist of the ApsaraDB RDS instance cannot exceed the upper limit. For more information, see [Configure a whitelist](https://help.aliyun.com/document_detail/43185.html) in the ApsaraDB RDS documentation.
     * If the MultiAZPolicy parameter of the scaling group is set to COST_OPTIMIZED:
     * - If the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools parameters are specified, the instance allocation method under the cost optimization policy is specified. This allocation method is prioritized during scale-out and scale-in.
     * - If the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools parameter is not specified, instances are created based on the lowest cost under the cost optimization policy. In this mode, you cannot create instances by using elasticity assurances or capacity reservations, and you cannot specify the vSwitch to which secondary elastic network interfaces (ENIs) belong.
     * If you configure propagatable tags for the scaling group, which means `Tags.Propagate` is set to true:
     * - Tags on the scaling group are propagated only to newly created instances, not to existing instances in the scaling group.
     * - If you specify instance tags in the scaling configuration and choose to propagate the tags of the scaling group to the instances, all tags coexist.
     * - If a tag in the scaling configuration and a propagatable tag in the scaling group have the same tag key, the tag value in the scaling configuration takes precedence.
     *
     * @param request - CreateScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScalingGroupResponse
     *
     * @param CreateScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateScalingGroupResponse
     */
    public function createScalingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->albServerGroups) {
            @$query['AlbServerGroups'] = $request->albServerGroups;
        }

        if (null !== $request->allocationStrategy) {
            @$query['AllocationStrategy'] = $request->allocationStrategy;
        }

        if (null !== $request->autoRebalance) {
            @$query['AutoRebalance'] = $request->autoRebalance;
        }

        if (null !== $request->azBalance) {
            @$query['AzBalance'] = $request->azBalance;
        }

        if (null !== $request->balanceMode) {
            @$query['BalanceMode'] = $request->balanceMode;
        }

        if (null !== $request->capacityOptions) {
            @$query['CapacityOptions'] = $request->capacityOptions;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->compensateWithOnDemand) {
            @$query['CompensateWithOnDemand'] = $request->compensateWithOnDemand;
        }

        if (null !== $request->containerGroupId) {
            @$query['ContainerGroupId'] = $request->containerGroupId;
        }

        if (null !== $request->customPolicyARN) {
            @$query['CustomPolicyARN'] = $request->customPolicyARN;
        }

        if (null !== $request->DBInstanceIds) {
            @$query['DBInstanceIds'] = $request->DBInstanceIds;
        }

        if (null !== $request->DBInstances) {
            @$query['DBInstances'] = $request->DBInstances;
        }

        if (null !== $request->defaultCooldown) {
            @$query['DefaultCooldown'] = $request->defaultCooldown;
        }

        if (null !== $request->desiredCapacity) {
            @$query['DesiredCapacity'] = $request->desiredCapacity;
        }

        if (null !== $request->groupDeletionProtection) {
            @$query['GroupDeletionProtection'] = $request->groupDeletionProtection;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckTypes) {
            @$query['HealthCheckTypes'] = $request->healthCheckTypes;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->launchTemplateId) {
            @$query['LaunchTemplateId'] = $request->launchTemplateId;
        }

        if (null !== $request->launchTemplateOverrides) {
            @$query['LaunchTemplateOverrides'] = $request->launchTemplateOverrides;
        }

        if (null !== $request->launchTemplateVersion) {
            @$query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }

        if (null !== $request->lifecycleHooks) {
            @$query['LifecycleHooks'] = $request->lifecycleHooks;
        }

        if (null !== $request->loadBalancerConfigs) {
            @$query['LoadBalancerConfigs'] = $request->loadBalancerConfigs;
        }

        if (null !== $request->loadBalancerIds) {
            @$query['LoadBalancerIds'] = $request->loadBalancerIds;
        }

        if (null !== $request->maxInstanceLifetime) {
            @$query['MaxInstanceLifetime'] = $request->maxInstanceLifetime;
        }

        if (null !== $request->maxSize) {
            @$query['MaxSize'] = $request->maxSize;
        }

        if (null !== $request->minSize) {
            @$query['MinSize'] = $request->minSize;
        }

        if (null !== $request->multiAZPolicy) {
            @$query['MultiAZPolicy'] = $request->multiAZPolicy;
        }

        if (null !== $request->onDemandBaseCapacity) {
            @$query['OnDemandBaseCapacity'] = $request->onDemandBaseCapacity;
        }

        if (null !== $request->onDemandPercentageAboveBaseCapacity) {
            @$query['OnDemandPercentageAboveBaseCapacity'] = $request->onDemandPercentageAboveBaseCapacity;
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

        if (null !== $request->removalPolicies) {
            @$query['RemovalPolicies'] = $request->removalPolicies;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupName) {
            @$query['ScalingGroupName'] = $request->scalingGroupName;
        }

        if (null !== $request->scalingPolicy) {
            @$query['ScalingPolicy'] = $request->scalingPolicy;
        }

        if (null !== $request->serverGroups) {
            @$query['ServerGroups'] = $request->serverGroups;
        }

        if (null !== $request->spotAllocationStrategy) {
            @$query['SpotAllocationStrategy'] = $request->spotAllocationStrategy;
        }

        if (null !== $request->spotInstancePools) {
            @$query['SpotInstancePools'] = $request->spotInstancePools;
        }

        if (null !== $request->spotInstanceRemedy) {
            @$query['SpotInstanceRemedy'] = $request->spotInstanceRemedy;
        }

        if (null !== $request->stopInstanceTimeout) {
            @$query['StopInstanceTimeout'] = $request->stopInstanceTimeout;
        }

        if (null !== $request->syncAlarmRuleToCms) {
            @$query['SyncAlarmRuleToCms'] = $request->syncAlarmRuleToCms;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->VServerGroups) {
            @$query['VServerGroups'] = $request->VServerGroups;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->zoneShiftPolicy) {
            @$query['ZoneShiftPolicy'] = $request->zoneShiftPolicy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScalingGroup',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scaling group to automatically adjust your computing capacity by adding or removing instances based on business demands and policies.
     *
     * @remarks
     * A scaling group is a collection of ECS instances that share the same application scenarios.
     * The number of scaling groups that you can create in a region depends on your Auto Scaling usage. Go to Quota Center to check the quota for the total number of scaling groups.
     * A scaling group does not take effect immediately after it is created. You must invoke the [EnableScalingGroup](https://help.aliyun.com/document_detail/25939.html) operation to enable the scaling group before it can trigger scaling activities and execute scaling rules.
     * The scaling group, the associated Classic Load Balancer (CLB) instances, and the associated ApsaraDB RDS instances must reside in the same region. For more information, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * If you associate CLB instances with the scaling group, Auto Scaling automatically adds the ECS instances in the scaling group to the backend server groups of the CLB instances. You can specify the server groups to which the ECS instances are added. The following types of server groups are supported:
     * - Default server group: contains ECS instances that accept frontend requests. If a listener is not configured with a virtual server group or a primary/secondary server group, requests are forwarded to the ECS instances in the default server group by default.
     * - Virtual server group: used when you need to forward different requests to different backend servers, or forward requests based on domain names and URLs.
     * > If you specify both the default server group and multiple virtual server groups, the ECS instances are added to all these server groups.
     * After an instance is added to a backend server group of a CLB instance, the default weight of the instance is 50. The CLB instance must meet the following conditions:
     * - The CLB instance must be in the Active state. You can call the [DescribeLoadBalancers](https://help.aliyun.com/document_detail/2401696.html) operation to check the status of the CLB instance.
     * - Health checks must be enabled for all listeners configured on the CLB instance. Otherwise, the scaling group fails to be created.
     * If you associate Application Load Balancer (ALB) server groups, Network Load Balancer (NLB) server groups, or Gateway Load Balancer (GWLB) server groups with the scaling group, Auto Scaling automatically adds the ECS instances in the scaling group as backend servers to the ALB, NLB, or GWLB server groups to process access requests distributed by the ALB, NLB, or GWLB instances. You can specify multiple ALB, NLB, or GWLB server groups, but the server groups must belong to the same VPC as the scaling group. For more information, see [AttachAlbServerGroups](https://help.aliyun.com/document_detail/266800.html) or [AttachServerGroups](https://help.aliyun.com/document_detail/600535.html).
     * If you associate ApsaraDB RDS instances with the scaling group, Auto Scaling automatically adds the internal IP addresses of the ECS instances in the scaling group to the whitelists of the ApsaraDB RDS instances. The ApsaraDB RDS instances must meet the following conditions:
     * - The ApsaraDB RDS instance must be in the Running state. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) operation to check the status of the ApsaraDB RDS instance.
     * - The number of IP addresses in the whitelist of the ApsaraDB RDS instance cannot exceed the upper limit. For more information, see [Configure a whitelist](https://help.aliyun.com/document_detail/43185.html) in the ApsaraDB RDS documentation.
     * If the MultiAZPolicy parameter of the scaling group is set to COST_OPTIMIZED:
     * - If the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools parameters are specified, the instance allocation method under the cost optimization policy is specified. This allocation method is prioritized during scale-out and scale-in.
     * - If the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools parameter is not specified, instances are created based on the lowest cost under the cost optimization policy. In this mode, you cannot create instances by using elasticity assurances or capacity reservations, and you cannot specify the vSwitch to which secondary elastic network interfaces (ENIs) belong.
     * If you configure propagatable tags for the scaling group, which means `Tags.Propagate` is set to true:
     * - Tags on the scaling group are propagated only to newly created instances, not to existing instances in the scaling group.
     * - If you specify instance tags in the scaling configuration and choose to propagate the tags of the scaling group to the instances, all tags coexist.
     * - If a tag in the scaling configuration and a propagatable tag in the scaling group have the same tag key, the tag value in the scaling configuration takes precedence.
     *
     * @param request - CreateScalingGroupRequest
     *
     * @returns CreateScalingGroupResponse
     *
     * @param CreateScalingGroupRequest $request
     *
     * @return CreateScalingGroupResponse
     */
    public function createScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a scaling rule. The purpose of a scaling rule is determined by its type and can be used to trigger a scaling activity or intelligently configure the boundary values of a scaling group. You can create different types of scaling rules based on your business requirements. For example, if you only need to configure the boundary values of a scaling group, select the predictive scaling rule type.
     *
     * @remarks
     * A scaling rule defines specific scale-out or scale-in operations, such as adding or removing N instances. If executing a scaling rule causes the number of ECS or ECI instances in the scaling group to fall below MinSize or exceed MaxSize, Auto Scaling automatically adjusts the number of ECS or ECI instances to be added or removed so that the total number of instances reaches MinSize or MaxSize. However, the configured value of the scaling rule remains unchanged. Examples:
     * - For a scaling group with MaxSize set to 3 and a current total capacity of 2, if the scaling rule specifies adding 3 ECS instances, only 1 ECS instance is added during actual execution, but the configured value of the scaling rule remains 3.
     * - For a scaling group with MinSize set to 2 and a current total capacity of 3, if the scaling rule specifies removing 5 ECS instances, only 1 ECS instance is removed during actual execution, but the configured value of the scaling rule remains 5.
     * Note the following parameter descriptions:
     * - If AdjustmentType is set to TotalCapacity, the number of ECS or ECI instances in the scaling group is adjusted to the specified number. The corresponding AdjustmentValue must be greater than or equal to 0.
     * - If AdjustmentType is set to QuantityChangeInCapacity or PercentChangeInCapacity, a positive AdjustmentValue indicates to increase instances, and a negative value indicates to decrease instances.
     * - If AdjustmentType is set to PercentChangeInCapacity, Auto Scaling calculates the number of ECS instances or ECI instances to be added or removed by using the formula: Current total capacity × AdjustmentValue / 100, and uses the rounding principle to confirm the number of ECS instances or ECI instances to increase or decrease.
     * - If a cooldown time (Cooldown) is specified for the scaling rule, the scaling group enters the cooldown state for the specified duration after the scaling activity triggered by the rule is completed. If no cooldown time is specified for the scaling rule, the default cooldown time (DefaultCooldown) of the scaling group is used.
     * - The number of scaling rules that can be created in a scaling group is limited. For more information, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * - The returned unique identifier of the scaling rule (ScalingRuleAri) can be used in the following API operations:
     *     - Specify it in the ScalingRuleAri parameter of the ExecuteScalingRule operation to manually execute the scaling rule.
     *     - Specify it in the ScheduledAction parameter of the CreateScheduledTask operation to execute the scaling rule on a schedule.
     *
     * @param request - CreateScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScalingRuleResponse
     *
     * @param CreateScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateScalingRuleResponse
     */
    public function createScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adjustmentType) {
            @$query['AdjustmentType'] = $request->adjustmentType;
        }

        if (null !== $request->adjustmentValue) {
            @$query['AdjustmentValue'] = $request->adjustmentValue;
        }

        if (null !== $request->alarmDimensions) {
            @$query['AlarmDimensions'] = $request->alarmDimensions;
        }

        if (null !== $request->alarmOptions) {
            @$query['AlarmOptions'] = $request->alarmOptions;
        }

        if (null !== $request->cooldown) {
            @$query['Cooldown'] = $request->cooldown;
        }

        if (null !== $request->disableScaleIn) {
            @$query['DisableScaleIn'] = $request->disableScaleIn;
        }

        if (null !== $request->estimatedInstanceWarmup) {
            @$query['EstimatedInstanceWarmup'] = $request->estimatedInstanceWarmup;
        }

        if (null !== $request->hybridMetrics) {
            @$query['HybridMetrics'] = $request->hybridMetrics;
        }

        if (null !== $request->hybridMonitorNamespace) {
            @$query['HybridMonitorNamespace'] = $request->hybridMonitorNamespace;
        }

        if (null !== $request->initialMaxSize) {
            @$query['InitialMaxSize'] = $request->initialMaxSize;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->minAdjustmentMagnitude) {
            @$query['MinAdjustmentMagnitude'] = $request->minAdjustmentMagnitude;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->predictiveScalingMode) {
            @$query['PredictiveScalingMode'] = $request->predictiveScalingMode;
        }

        if (null !== $request->predictiveTaskBufferTime) {
            @$query['PredictiveTaskBufferTime'] = $request->predictiveTaskBufferTime;
        }

        if (null !== $request->predictiveValueBehavior) {
            @$query['PredictiveValueBehavior'] = $request->predictiveValueBehavior;
        }

        if (null !== $request->predictiveValueBuffer) {
            @$query['PredictiveValueBuffer'] = $request->predictiveValueBuffer;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scaleInEvaluationCount) {
            @$query['ScaleInEvaluationCount'] = $request->scaleInEvaluationCount;
        }

        if (null !== $request->scaleOutEvaluationCount) {
            @$query['ScaleOutEvaluationCount'] = $request->scaleOutEvaluationCount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        if (null !== $request->scalingRuleType) {
            @$query['ScalingRuleType'] = $request->scalingRuleType;
        }

        if (null !== $request->stepAdjustments) {
            @$query['StepAdjustments'] = $request->stepAdjustments;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScalingRule',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scaling rule. The purpose of a scaling rule is determined by its type and can be used to trigger a scaling activity or intelligently configure the boundary values of a scaling group. You can create different types of scaling rules based on your business requirements. For example, if you only need to configure the boundary values of a scaling group, select the predictive scaling rule type.
     *
     * @remarks
     * A scaling rule defines specific scale-out or scale-in operations, such as adding or removing N instances. If executing a scaling rule causes the number of ECS or ECI instances in the scaling group to fall below MinSize or exceed MaxSize, Auto Scaling automatically adjusts the number of ECS or ECI instances to be added or removed so that the total number of instances reaches MinSize or MaxSize. However, the configured value of the scaling rule remains unchanged. Examples:
     * - For a scaling group with MaxSize set to 3 and a current total capacity of 2, if the scaling rule specifies adding 3 ECS instances, only 1 ECS instance is added during actual execution, but the configured value of the scaling rule remains 3.
     * - For a scaling group with MinSize set to 2 and a current total capacity of 3, if the scaling rule specifies removing 5 ECS instances, only 1 ECS instance is removed during actual execution, but the configured value of the scaling rule remains 5.
     * Note the following parameter descriptions:
     * - If AdjustmentType is set to TotalCapacity, the number of ECS or ECI instances in the scaling group is adjusted to the specified number. The corresponding AdjustmentValue must be greater than or equal to 0.
     * - If AdjustmentType is set to QuantityChangeInCapacity or PercentChangeInCapacity, a positive AdjustmentValue indicates to increase instances, and a negative value indicates to decrease instances.
     * - If AdjustmentType is set to PercentChangeInCapacity, Auto Scaling calculates the number of ECS instances or ECI instances to be added or removed by using the formula: Current total capacity × AdjustmentValue / 100, and uses the rounding principle to confirm the number of ECS instances or ECI instances to increase or decrease.
     * - If a cooldown time (Cooldown) is specified for the scaling rule, the scaling group enters the cooldown state for the specified duration after the scaling activity triggered by the rule is completed. If no cooldown time is specified for the scaling rule, the default cooldown time (DefaultCooldown) of the scaling group is used.
     * - The number of scaling rules that can be created in a scaling group is limited. For more information, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * - The returned unique identifier of the scaling rule (ScalingRuleAri) can be used in the following API operations:
     *     - Specify it in the ScalingRuleAri parameter of the ExecuteScalingRule operation to manually execute the scaling rule.
     *     - Specify it in the ScheduledAction parameter of the CreateScheduledTask operation to execute the scaling rule on a schedule.
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

        return $this->createScalingRuleWithOptions($request, $runtime);
    }

    /**
     * A scheduled node is a preset node. You can invoke the CreateScheduledTask API to create a scheduled node that executes a specified scaling rule at a specified time. This enables automatic scaling of compute resources to meet business requirements while controlling costs.
     *
     * @remarks
     * - If a scheduled node trigger to execute a scaling rule has failed because a scaling activity is in progress or the scaling group is disabled, the scheduled node automatically retries the trigger within the `LaunchExpirationTime` period. Otherwise, the scheduled trigger is canceled.
     * - If multiple scheduled nodes trigger scaling rules for the same scaling group at approximately the same time, the details of the triggered scaling activities are as follows:
     *     - **Scaling groups with Settings for the expected number of instances**: Scaling activities triggered by multiple scheduled nodes are classified as parallel scaling activity. For example, if multiple scheduled nodes are executed at approximately the same time, the scaling group can trigger multiple parallel scaling activity events simultaneously.
     *     - **Scaling groups without Settings for the expected number of instances**: The earliest triggered scheduled node executes the scaling activity first. Because a scaling group can have only one scaling activity at a time, subsequent scheduled nodes automatically retry the scheduled trigger within the `LaunchExpirationTime` period. If a subsequent scheduled node is still retrying within the `LaunchExpirationTime` period after the previous scaling activity is completed, the scaling rule of the scheduled node is executed to trigger the corresponding scaling activity.
     * - Scheduled nodes support the following two scaling methods:
     *     - Use the ScheduledAction parameter to specify the scaling rule to be executed.
     *     - Use the ScalingGroupId parameter to specify the number of instances in the scaling group.
     *   > You cannot specify both ScheduledAction and ScalingGroupId at the same time.
     *
     * @param request - CreateScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desiredCapacity) {
            @$query['DesiredCapacity'] = $request->desiredCapacity;
        }

        if (null !== $request->launchExpirationTime) {
            @$query['LaunchExpirationTime'] = $request->launchExpirationTime;
        }

        if (null !== $request->launchTime) {
            @$query['LaunchTime'] = $request->launchTime;
        }

        if (null !== $request->maxValue) {
            @$query['MaxValue'] = $request->maxValue;
        }

        if (null !== $request->minValue) {
            @$query['MinValue'] = $request->minValue;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->recurrenceEndTime) {
            @$query['RecurrenceEndTime'] = $request->recurrenceEndTime;
        }

        if (null !== $request->recurrenceType) {
            @$query['RecurrenceType'] = $request->recurrenceType;
        }

        if (null !== $request->recurrenceValue) {
            @$query['RecurrenceValue'] = $request->recurrenceValue;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->scheduledAction) {
            @$query['ScheduledAction'] = $request->scheduledAction;
        }

        if (null !== $request->scheduledTaskName) {
            @$query['ScheduledTaskName'] = $request->scheduledTaskName;
        }

        if (null !== $request->taskEnabled) {
            @$query['TaskEnabled'] = $request->taskEnabled;
        }

        if (null !== $request->warmPoolCapacityOptions) {
            @$query['WarmPoolCapacityOptions'] = $request->warmPoolCapacityOptions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledTask',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A scheduled node is a preset node. You can invoke the CreateScheduledTask API to create a scheduled node that executes a specified scaling rule at a specified time. This enables automatic scaling of compute resources to meet business requirements while controlling costs.
     *
     * @remarks
     * - If a scheduled node trigger to execute a scaling rule has failed because a scaling activity is in progress or the scaling group is disabled, the scheduled node automatically retries the trigger within the `LaunchExpirationTime` period. Otherwise, the scheduled trigger is canceled.
     * - If multiple scheduled nodes trigger scaling rules for the same scaling group at approximately the same time, the details of the triggered scaling activities are as follows:
     *     - **Scaling groups with Settings for the expected number of instances**: Scaling activities triggered by multiple scheduled nodes are classified as parallel scaling activity. For example, if multiple scheduled nodes are executed at approximately the same time, the scaling group can trigger multiple parallel scaling activity events simultaneously.
     *     - **Scaling groups without Settings for the expected number of instances**: The earliest triggered scheduled node executes the scaling activity first. Because a scaling group can have only one scaling activity at a time, subsequent scheduled nodes automatically retry the scheduled trigger within the `LaunchExpirationTime` period. If a subsequent scheduled node is still retrying within the `LaunchExpirationTime` period after the previous scaling activity is completed, the scaling rule of the scheduled node is executed to trigger the corresponding scaling activity.
     * - Scheduled nodes support the following two scaling methods:
     *     - Use the ScheduledAction parameter to specify the scaling rule to be executed.
     *     - Use the ScalingGroupId parameter to specify the number of instances in the scaling group.
     *   > You cannot specify both ScheduledAction and ScalingGroupId at the same time.
     *
     * @param request - CreateScheduledTaskRequest
     *
     * @returns CreateScheduledTaskResponse
     *
     * @param CreateScheduledTaskRequest $request
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * 使指定伸缩配置进入失效状态
     *
     * @param request - DeactivateScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactivateScalingConfigurationResponse
     *
     * @param DeactivateScalingConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeactivateScalingConfigurationResponse
     */
    public function deactivateScalingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeactivateScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeactivateScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 使指定伸缩配置进入失效状态
     *
     * @param request - DeactivateScalingConfigurationRequest
     *
     * @returns DeactivateScalingConfigurationResponse
     *
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
     * Deletes an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you no longer need an event-triggered task, you can call the DeleteAlarm operation to delete it.
     *
     * @param request - DeleteAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlarmResponse
     *
     * @param DeleteAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAlarmResponse
     */
    public function deleteAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmTaskId) {
            @$query['AlarmTaskId'] = $request->alarmTaskId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlarm',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you no longer need an event-triggered task, you can call the DeleteAlarm operation to delete it.
     *
     * @param request - DeleteAlarmRequest
     *
     * @returns DeleteAlarmResponse
     *
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
     * Deletes a health diagnosis report for a scaling group.
     *
     * @param request - DeleteDiagnoseReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDiagnoseReportResponse
     *
     * @param DeleteDiagnoseReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteDiagnoseReportResponse
     */
    public function deleteDiagnoseReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDiagnoseReport',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a health diagnosis report for a scaling group.
     *
     * @param request - DeleteDiagnoseReportRequest
     *
     * @returns DeleteDiagnoseReportResponse
     *
     * @param DeleteDiagnoseReportRequest $request
     *
     * @return DeleteDiagnoseReportResponse
     */
    public function deleteDiagnoseReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiagnoseReportWithOptions($request, $runtime);
    }

    /**
     * Deletes a scaling configuration of the Elastic Container Instance type. If the scaling configuration of a scaling group is in the Inactive state and the scaling group contains no elastic container instances created from the scaling configuration, you can call the DeleteEciScalingConfiguration operation to delete the scaling configuration to free up the scaling configuration quota.
     *
     * @remarks
     * You cannot call this operation to delete a scaling configuration in the following scenarios:
     * *   The scaling configuration is in the Active state.
     * *   The scaling group contains elastic container instances created from the scaling configuration.
     *
     * @param request - DeleteEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEciScalingConfigurationResponse
     *
     * @param DeleteEciScalingConfigurationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEciScalingConfigurationResponse
     */
    public function deleteEciScalingConfigurationWithOptions($request, $runtime)
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

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEciScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scaling configuration of the Elastic Container Instance type. If the scaling configuration of a scaling group is in the Inactive state and the scaling group contains no elastic container instances created from the scaling configuration, you can call the DeleteEciScalingConfiguration operation to delete the scaling configuration to free up the scaling configuration quota.
     *
     * @remarks
     * You cannot call this operation to delete a scaling configuration in the following scenarios:
     * *   The scaling configuration is in the Active state.
     * *   The scaling group contains elastic container instances created from the scaling configuration.
     *
     * @param request - DeleteEciScalingConfigurationRequest
     *
     * @returns DeleteEciScalingConfigurationResponse
     *
     * @param DeleteEciScalingConfigurationRequest $request
     *
     * @return DeleteEciScalingConfigurationResponse
     */
    public function deleteEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Deletes a lifecycle hook. If you no longer require a lifecycle hook, you can call the DeleteLifecycleHook operation to delete it, which frees up the lifecycle hook quota.
     *
     * @remarks
     * If you delete an effective lifecycle hook before its timeout period ends, the instances on which the lifecycle hook takes effect exits the Pending state ahead of schedule. You can use the following methods to delete a lifecycle hook:
     * *   Include `LifecycleHookId` within your request to specify the lifecycle hook that you want to delete. In this case, `ScalingGroupId` and `LifecycleHookName` are ignored.
     * *   Include `ScalingGroupId` and `LifecycleHookName` within your request to specify the lifecycle hook that you want to delete.
     *
     * @param request - DeleteLifecycleHookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLifecycleHookResponse
     *
     * @param DeleteLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteLifecycleHookResponse
     */
    public function deleteLifecycleHookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lifecycleHookId) {
            @$query['LifecycleHookId'] = $request->lifecycleHookId;
        }

        if (null !== $request->lifecycleHookName) {
            @$query['LifecycleHookName'] = $request->lifecycleHookName;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLifecycleHook',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a lifecycle hook. If you no longer require a lifecycle hook, you can call the DeleteLifecycleHook operation to delete it, which frees up the lifecycle hook quota.
     *
     * @remarks
     * If you delete an effective lifecycle hook before its timeout period ends, the instances on which the lifecycle hook takes effect exits the Pending state ahead of schedule. You can use the following methods to delete a lifecycle hook:
     * *   Include `LifecycleHookId` within your request to specify the lifecycle hook that you want to delete. In this case, `ScalingGroupId` and `LifecycleHookName` are ignored.
     * *   Include `ScalingGroupId` and `LifecycleHookName` within your request to specify the lifecycle hook that you want to delete.
     *
     * @param request - DeleteLifecycleHookRequest
     *
     * @returns DeleteLifecycleHookResponse
     *
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
     * Deletes event notification rules. The event notification feature facilitates efficient issue identification and event management by automatically forwarding notifications from Auto Scaling to designated endpoints such as CloudMonitor or Message Service (MNS) topics and queues. If you no longer require an event notification rule, you can call the DeleteNotificationConfiguration operation to delete it.
     *
     * @param request - DeleteNotificationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNotificationConfigurationResponse
     *
     * @param DeleteNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteNotificationConfigurationResponse
     */
    public function deleteNotificationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->notificationArn) {
            @$query['NotificationArn'] = $request->notificationArn;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNotificationConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes event notification rules. The event notification feature facilitates efficient issue identification and event management by automatically forwarding notifications from Auto Scaling to designated endpoints such as CloudMonitor or Message Service (MNS) topics and queues. If you no longer require an event notification rule, you can call the DeleteNotificationConfiguration operation to delete it.
     *
     * @param request - DeleteNotificationConfigurationRequest
     *
     * @returns DeleteNotificationConfigurationResponse
     *
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
     * Deletes a scaling configuration that is used to create Elastic Compute Service (ECS) instances.
     *
     * @remarks
     * You cannot delete a scaling configuration in one of the following scenarios:
     * *   The scaling configuration in your scaling group is in the Active state.
     * *   The scaling group contains ECS instances that were created based on the scaling configuration.
     *
     * @param request - DeleteScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScalingConfigurationResponse
     *
     * @param DeleteScalingConfigurationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteScalingConfigurationResponse
     */
    public function deleteScalingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scaling configuration that is used to create Elastic Compute Service (ECS) instances.
     *
     * @remarks
     * You cannot delete a scaling configuration in one of the following scenarios:
     * *   The scaling configuration in your scaling group is in the Active state.
     * *   The scaling group contains ECS instances that were created based on the scaling configuration.
     *
     * @param request - DeleteScalingConfigurationRequest
     *
     * @returns DeleteScalingConfigurationResponse
     *
     * @param DeleteScalingConfigurationRequest $request
     *
     * @return DeleteScalingConfigurationResponse
     */
    public function deleteScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Deletes a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can create scaling groups to manage your computing power with ease. The computing power refers to the instances that provide the computing capability. If you no longer require a scaling group, you can call the DeleteScalingGroup operation to delete it to free up the scaling group quota.
     *
     * @remarks
     * Before you call the DeleteScalingGroup operation, take note of the following items:
     * *   If you delete a scaling group, the scaling configurations, scaling rules, scaling activities, and scaling requests related to the scaling group are also deleted.
     * *   If you delete a scaling group, the scheduled tasks and event-triggered tasks of the scaling group are not deleted. The Server Load Balancer (SLB) instances and ApsaraDB RDS instances that are attached to the scaling group are also not deleted.
     * *   If the scaling group that you want to delete contains ECS instances or elastic container instances that are in the In Service state, Auto Scaling stops the instances and then removes all manually added instances from the scaling group or releases all automatically created instances in the scaling group before the scaling group is deleted.
     *     **
     *     **Note** Before you delete a scaling group, make sure that the Deletion Protection feature is disabled. If you have enabled the Deletion Protection feature for a scaling group, disable the feature on the Modify Scaling Group page before you delete the scaling group.
     * *   If you do not disable the Deletion Protection feature for a scaling group, you cannot delete the scaling group by using the Auto Scaling console or calling this operation. The Deletion Protection feature is an effective measure to safeguard scaling groups against unintended deletion.
     * *   Prior to deleting a scaling group, make sure that your ECS instances within the scaling group are safeguarded against unintended release. Even if you have already enabled the Release Protection feature for the ECS instances, you must manually put these ECS instances into the Protected state. Doing so guarantees that the ECS instances will not be forcibly released during the deletion process of the scaling group, providing an extra layer of security.
     *     **
     *     **Note** Before you delete a scaling group, we recommend that you enable the Deletion Protection feature for ECS instances that you want to retain. This action guarantees that the ECS instances are not forcibly released after you delete the scaling group. For more information, see [SetInstancesProtection](https://help.aliyun.com/document_detail/459342.html).
     *
     * @param request - DeleteScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScalingGroupResponse
     *
     * @param DeleteScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteScalingGroupResponse
     */
    public function deleteScalingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceDelete) {
            @$query['ForceDelete'] = $request->forceDelete;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScalingGroup',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can create scaling groups to manage your computing power with ease. The computing power refers to the instances that provide the computing capability. If you no longer require a scaling group, you can call the DeleteScalingGroup operation to delete it to free up the scaling group quota.
     *
     * @remarks
     * Before you call the DeleteScalingGroup operation, take note of the following items:
     * *   If you delete a scaling group, the scaling configurations, scaling rules, scaling activities, and scaling requests related to the scaling group are also deleted.
     * *   If you delete a scaling group, the scheduled tasks and event-triggered tasks of the scaling group are not deleted. The Server Load Balancer (SLB) instances and ApsaraDB RDS instances that are attached to the scaling group are also not deleted.
     * *   If the scaling group that you want to delete contains ECS instances or elastic container instances that are in the In Service state, Auto Scaling stops the instances and then removes all manually added instances from the scaling group or releases all automatically created instances in the scaling group before the scaling group is deleted.
     *     **
     *     **Note** Before you delete a scaling group, make sure that the Deletion Protection feature is disabled. If you have enabled the Deletion Protection feature for a scaling group, disable the feature on the Modify Scaling Group page before you delete the scaling group.
     * *   If you do not disable the Deletion Protection feature for a scaling group, you cannot delete the scaling group by using the Auto Scaling console or calling this operation. The Deletion Protection feature is an effective measure to safeguard scaling groups against unintended deletion.
     * *   Prior to deleting a scaling group, make sure that your ECS instances within the scaling group are safeguarded against unintended release. Even if you have already enabled the Release Protection feature for the ECS instances, you must manually put these ECS instances into the Protected state. Doing so guarantees that the ECS instances will not be forcibly released during the deletion process of the scaling group, providing an extra layer of security.
     *     **
     *     **Note** Before you delete a scaling group, we recommend that you enable the Deletion Protection feature for ECS instances that you want to retain. This action guarantees that the ECS instances are not forcibly released after you delete the scaling group. For more information, see [SetInstancesProtection](https://help.aliyun.com/document_detail/459342.html).
     *
     * @param request - DeleteScalingGroupRequest
     *
     * @returns DeleteScalingGroupResponse
     *
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
     * Deletes a scaling rule.
     *
     * @param request - DeleteScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScalingRuleResponse
     *
     * @param DeleteScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRuleWithOptions($request, $runtime)
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

        if (null !== $request->scalingRuleId) {
            @$query['ScalingRuleId'] = $request->scalingRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScalingRule',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
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

        return $this->deleteScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes scheduled tasks. For workloads with predictable patterns, you can create scheduled tasks to align with your business requirements and optimize resource utilization for cost savings. These tasks automatically ensure that sufficient computing resources are provisioned in anticipation of peak hours and efficiently release unused resources during off-peak hours, thereby streamlining operational efficiency and reducing expenses. If you no longer require a scheduled task, you can call the DeleteScheduledTask operation to delete it.
     *
     * @param request - DeleteScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledTaskResponse
     *
     * @param DeleteScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScheduledTaskResponse
     */
    public function deleteScheduledTaskWithOptions($request, $runtime)
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

        if (null !== $request->scheduledTaskId) {
            @$query['ScheduledTaskId'] = $request->scheduledTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledTask',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes scheduled tasks. For workloads with predictable patterns, you can create scheduled tasks to align with your business requirements and optimize resource utilization for cost savings. These tasks automatically ensure that sufficient computing resources are provisioned in anticipation of peak hours and efficiently release unused resources during off-peak hours, thereby streamlining operational efficiency and reducing expenses. If you no longer require a scheduled task, you can call the DeleteScheduledTask operation to delete it.
     *
     * @param request - DeleteScheduledTaskRequest
     *
     * @returns DeleteScheduledTaskResponse
     *
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
     * Queries the information about event-triggered tasks. This helps you track the configurations and metric data trends of existing event-triggered tasks, detect system resource anomalies in real time, and ensure system stability and reliability.
     *
     * @param request - DescribeAlarmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlarmsResponse
     *
     * @param DescribeAlarmsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAlarmsResponse
     */
    public function describeAlarmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmTaskId) {
            @$query['AlarmTaskId'] = $request->alarmTaskId;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlarms',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about event-triggered tasks. This helps you track the configurations and metric data trends of existing event-triggered tasks, detect system resource anomalies in real time, and ensure system stability and reliability.
     *
     * @param request - DescribeAlarmsRequest
     *
     * @returns DescribeAlarmsResponse
     *
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
     * Queries the status of scaling activities that trigger text message, internal message, or email-based notifications. When you call the DescribeAlertConfiguration operation, you must specify the scaling group ID and region ID to query the status of the desired scaling activities. A scaling activity can be in one of the following states: Successful, Failed, and Rejected.
     *
     * @param request - DescribeAlertConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertConfigurationResponse
     *
     * @param DescribeAlertConfigurationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAlertConfigurationResponse
     */
    public function describeAlertConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of scaling activities that trigger text message, internal message, or email-based notifications. When you call the DescribeAlertConfiguration operation, you must specify the scaling group ID and region ID to query the status of the desired scaling activities. A scaling activity can be in one of the following states: Successful, Failed, and Rejected.
     *
     * @param request - DescribeAlertConfigurationRequest
     *
     * @returns DescribeAlertConfigurationResponse
     *
     * @param DescribeAlertConfigurationRequest $request
     *
     * @return DescribeAlertConfigurationResponse
     */
    public function describeAlertConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertConfigurationWithOptions($request, $runtime);
    }

    /**
     * Lists candidate instance types.
     *
     * @param request - DescribeCandidateInstanceTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCandidateInstanceTypeResponse
     *
     * @param DescribeCandidateInstanceTypeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCandidateInstanceTypeResponse
     */
    public function describeCandidateInstanceTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowCrossAz) {
            @$query['AllowCrossAz'] = $request->allowCrossAz;
        }

        if (null !== $request->allowDifferentGeneration) {
            @$query['AllowDifferentGeneration'] = $request->allowDifferentGeneration;
        }

        if (null !== $request->dataDiskCategories) {
            @$query['DataDiskCategories'] = $request->dataDiskCategories;
        }

        if (null !== $request->imageFamily) {
            @$query['ImageFamily'] = $request->imageFamily;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceTypes) {
            @$query['InstanceTypes'] = $request->instanceTypes;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->maxPrice) {
            @$query['MaxPrice'] = $request->maxPrice;
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

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->systemDiskCategories) {
            @$query['SystemDiskCategories'] = $request->systemDiskCategories;
        }

        if (null !== $request->zoneIds) {
            @$query['ZoneIds'] = $request->zoneIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCandidateInstanceType',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCandidateInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists candidate instance types.
     *
     * @param request - DescribeCandidateInstanceTypeRequest
     *
     * @returns DescribeCandidateInstanceTypeResponse
     *
     * @param DescribeCandidateInstanceTypeRequest $request
     *
     * @return DescribeCandidateInstanceTypeResponse
     */
    public function describeCandidateInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCandidateInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * Queries health diagnostic reports.
     *
     * @param request - DescribeDiagnoseReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiagnoseReportsResponse
     *
     * @param DescribeDiagnoseReportsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDiagnoseReportsResponse
     */
    public function describeDiagnoseReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiagnoseReports',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiagnoseReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries health diagnostic reports.
     *
     * @param request - DescribeDiagnoseReportsRequest
     *
     * @returns DescribeDiagnoseReportsResponse
     *
     * @param DescribeDiagnoseReportsRequest $request
     *
     * @return DescribeDiagnoseReportsResponse
     */
    public function describeDiagnoseReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnoseReportsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an Elastic Container Instance (ECI) scaling configuration based on the scaling configuration ID. The details include the temporary storage size, the number of IPv6 addresses, and the elastic IP address (EIP) bandwidth. The output supports the YAML format.
     *
     * @param request - DescribeEciScalingConfigurationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEciScalingConfigurationDetailResponse
     *
     * @param DescribeEciScalingConfigurationDetailRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeEciScalingConfigurationDetailResponse
     */
    public function describeEciScalingConfigurationDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputFormat) {
            @$query['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEciScalingConfigurationDetail',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEciScalingConfigurationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an Elastic Container Instance (ECI) scaling configuration based on the scaling configuration ID. The details include the temporary storage size, the number of IPv6 addresses, and the elastic IP address (EIP) bandwidth. The output supports the YAML format.
     *
     * @param request - DescribeEciScalingConfigurationDetailRequest
     *
     * @returns DescribeEciScalingConfigurationDetailResponse
     *
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
     * Queries ECI scaling configurations. You can invoke DescribeEciScalingConfigurations and specify parameters such as the scaling group ID, and the scaling configuration IDs or names. This parameter query retrieves information such as the instance preemption policy, container group instance types, container image pull policy, and the weight of ECI instances as backend servers.
     *
     * @param request - DescribeEciScalingConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEciScalingConfigurationsResponse
     *
     * @param DescribeEciScalingConfigurationsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeEciScalingConfigurationsResponse
     */
    public function describeEciScalingConfigurationsWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingConfigurationIds) {
            @$query['ScalingConfigurationIds'] = $request->scalingConfigurationIds;
        }

        if (null !== $request->scalingConfigurationNames) {
            @$query['ScalingConfigurationNames'] = $request->scalingConfigurationNames;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEciScalingConfigurations',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEciScalingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries ECI scaling configurations. You can invoke DescribeEciScalingConfigurations and specify parameters such as the scaling group ID, and the scaling configuration IDs or names. This parameter query retrieves information such as the instance preemption policy, container group instance types, container image pull policy, and the weight of ECI instances as backend servers.
     *
     * @param request - DescribeEciScalingConfigurationsRequest
     *
     * @returns DescribeEciScalingConfigurationsResponse
     *
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
     * A scaling group\\"s configuration is key to successful scale-outs. Auto Scaling uses elasticity strength to quantify the effectiveness of a Scaling Configuration, helping you make targeted optimizations.
     *
     * @param request - DescribeElasticStrengthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElasticStrengthResponse
     *
     * @param DescribeElasticStrengthRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeElasticStrengthResponse
     */
    public function describeElasticStrengthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeElasticStrength',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElasticStrengthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A scaling group\\"s configuration is key to successful scale-outs. Auto Scaling uses elasticity strength to quantify the effectiveness of a Scaling Configuration, helping you make targeted optimizations.
     *
     * @param request - DescribeElasticStrengthRequest
     *
     * @returns DescribeElasticStrengthResponse
     *
     * @param DescribeElasticStrengthRequest $request
     *
     * @return DescribeElasticStrengthResponse
     */
    public function describeElasticStrength($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElasticStrengthWithOptions($request, $runtime);
    }

    /**
     * Instance creation and deletion statistics.
     *
     * @param request - DescribeInstanceCreateAndDeleteStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceCreateAndDeleteStatisticsResponse
     *
     * @param DescribeInstanceCreateAndDeleteStatisticsRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeInstanceCreateAndDeleteStatisticsResponse
     */
    public function describeInstanceCreateAndDeleteStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceCreateAndDeleteStatistics',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceCreateAndDeleteStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Instance creation and deletion statistics.
     *
     * @param request - DescribeInstanceCreateAndDeleteStatisticsRequest
     *
     * @returns DescribeInstanceCreateAndDeleteStatisticsResponse
     *
     * @param DescribeInstanceCreateAndDeleteStatisticsRequest $request
     *
     * @return DescribeInstanceCreateAndDeleteStatisticsResponse
     */
    public function describeInstanceCreateAndDeleteStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceCreateAndDeleteStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the instance refresh tasks of a scaling group to view basic information and task progress.
     *
     * @param request - DescribeInstanceRefreshesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceRefreshesResponse
     *
     * @param DescribeInstanceRefreshesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceRefreshesResponse
     */
    public function describeInstanceRefreshesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceRefreshTaskIds) {
            @$query['InstanceRefreshTaskIds'] = $request->instanceRefreshTaskIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

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

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceRefreshes',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceRefreshesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance refresh tasks of a scaling group to view basic information and task progress.
     *
     * @param request - DescribeInstanceRefreshesRequest
     *
     * @returns DescribeInstanceRefreshesResponse
     *
     * @param DescribeInstanceRefreshesRequest $request
     *
     * @return DescribeInstanceRefreshesResponse
     */
    public function describeInstanceRefreshes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceRefreshesWithOptions($request, $runtime);
    }

    /**
     * Queries lifecycle hook actions. When you call the DescribeLifecycleActions operation, you can specify parameters such as ScalingActivityId, NextToken, and MaxResults to query the details such as the action status and ID of a lifecycle hook. You can also call this operation to query the IDs of Elastic Compute Service (ECS) instances on which the lifecycle hook takes effect.
     *
     * @remarks
     * If a scaling activity is executed and a lifecycle hook is created for the scaling activity, the lifecycle hook triggers a lifecycle action. A lifecycle action can be in one of the following states:
     * *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     * *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action expires and ECS instances are added to or removed from a scaling group.
     * *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     * If you do not specify the action to perform, such as execute a specific OOS template, after a lifecycle hook ends, you can call this operation to obtain the token of the lifecycle action that corresponds to the lifecycle hook. Then, you can specify a custom action to perform after the lifecycle hook ends.
     *
     * @param request - DescribeLifecycleActionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLifecycleActionsResponse
     *
     * @param DescribeLifecycleActionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLifecycleActionsResponse
     */
    public function describeLifecycleActionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lifecycleActionStatus) {
            @$query['LifecycleActionStatus'] = $request->lifecycleActionStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        if (null !== $request->scalingActivityId) {
            @$query['ScalingActivityId'] = $request->scalingActivityId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLifecycleActions',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLifecycleActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries lifecycle hook actions. When you call the DescribeLifecycleActions operation, you can specify parameters such as ScalingActivityId, NextToken, and MaxResults to query the details such as the action status and ID of a lifecycle hook. You can also call this operation to query the IDs of Elastic Compute Service (ECS) instances on which the lifecycle hook takes effect.
     *
     * @remarks
     * If a scaling activity is executed and a lifecycle hook is created for the scaling activity, the lifecycle hook triggers a lifecycle action. A lifecycle action can be in one of the following states:
     * *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     * *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action expires and ECS instances are added to or removed from a scaling group.
     * *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     * If you do not specify the action to perform, such as execute a specific OOS template, after a lifecycle hook ends, you can call this operation to obtain the token of the lifecycle action that corresponds to the lifecycle hook. Then, you can specify a custom action to perform after the lifecycle hook ends.
     *
     * @param request - DescribeLifecycleActionsRequest
     *
     * @returns DescribeLifecycleActionsResponse
     *
     * @param DescribeLifecycleActionsRequest $request
     *
     * @return DescribeLifecycleActionsResponse
     */
    public function describeLifecycleActions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecycleActionsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of lifecycle hooks by specifying lifecycle hook IDs or scaling group IDs. The returned information includes the next action after the wait state ends, the scaling activity type associated with the lifecycle hook, the notification recipient identifier, and the suspension wait time.
     *
     * @remarks
     * You can query lifecycle hooks in the following three ways:
     * - Specify a list of lifecycle hook IDs (LifecycleHookIds). In this case, the ScalingGroupId and LifecycleHookName parameters are ignored.
     * - Specify a scaling group ID (ScalingGroupId).
     * - Specify both a scaling group ID (ScalingGroupId) and a lifecycle hook name (LifecycleHookName).
     *
     * @param request - DescribeLifecycleHooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLifecycleHooksResponse
     *
     * @param DescribeLifecycleHooksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLifecycleHooksResponse
     */
    public function describeLifecycleHooksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lifecycleHookIds) {
            @$query['LifecycleHookIds'] = $request->lifecycleHookIds;
        }

        if (null !== $request->lifecycleHookName) {
            @$query['LifecycleHookName'] = $request->lifecycleHookName;
        }

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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLifecycleHooks',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLifecycleHooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of lifecycle hooks by specifying lifecycle hook IDs or scaling group IDs. The returned information includes the next action after the wait state ends, the scaling activity type associated with the lifecycle hook, the notification recipient identifier, and the suspension wait time.
     *
     * @remarks
     * You can query lifecycle hooks in the following three ways:
     * - Specify a list of lifecycle hook IDs (LifecycleHookIds). In this case, the ScalingGroupId and LifecycleHookName parameters are ignored.
     * - Specify a scaling group ID (ScalingGroupId).
     * - Specify both a scaling group ID (ScalingGroupId) and a lifecycle hook name (LifecycleHookName).
     *
     * @param request - DescribeLifecycleHooksRequest
     *
     * @returns DescribeLifecycleHooksResponse
     *
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
     * Queries resource quotas. For example, you can call the DescribeLimitation operation to query the maximum numbers of scheduled tasks that you can create in a scaling group, load balancers that you can attach to a scaling group, instances that you can add to a scaling group, and scaling configurations that you can create in a scaling group.
     *
     * @param request - DescribeLimitationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLimitationResponse
     *
     * @param DescribeLimitationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLimitationResponse
     */
    public function describeLimitationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLimitation',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLimitationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries resource quotas. For example, you can call the DescribeLimitation operation to query the maximum numbers of scheduled tasks that you can create in a scaling group, load balancers that you can attach to a scaling group, instances that you can add to a scaling group, and scaling configurations that you can create in a scaling group.
     *
     * @param request - DescribeLimitationRequest
     *
     * @returns DescribeLimitationResponse
     *
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
     * Queries notification settings. You can call the DescribeNotificationConfiguration operation to query notification settings of scaling events or resource changes, including the notification types and methods.
     *
     * @param request - DescribeNotificationConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNotificationConfigurationsResponse
     *
     * @param DescribeNotificationConfigurationsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeNotificationConfigurationsResponse
     */
    public function describeNotificationConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNotificationConfigurations',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNotificationConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries notification settings. You can call the DescribeNotificationConfiguration operation to query notification settings of scaling events or resource changes, including the notification types and methods.
     *
     * @param request - DescribeNotificationConfigurationsRequest
     *
     * @returns DescribeNotificationConfigurationsResponse
     *
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
     * Queries notification types. You can call the DescribeNotificationTypes operation to query the types of notifications on scaling events or resource changes occurred in your scaling groups. Notifications are triggered in scenarios such as successful scale-out events, successful scale-in events, expiration of scheduled tasks, and partially successful scale-out events.
     *
     * @param request - DescribeNotificationTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNotificationTypesResponse
     *
     * @param DescribeNotificationTypesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNotificationTypesResponse
     */
    public function describeNotificationTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNotificationTypes',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNotificationTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries notification types. You can call the DescribeNotificationTypes operation to query the types of notifications on scaling events or resource changes occurred in your scaling groups. Notifications are triggered in scenarios such as successful scale-out events, successful scale-in events, expiration of scheduled tasks, and partially successful scale-out events.
     *
     * @param request - DescribeNotificationTypesRequest
     *
     * @returns DescribeNotificationTypesResponse
     *
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
     * Queries instance types that meet specified requirements by filtering based on parameters such as the vSwitch ID, number of vCPUs, memory size, instance family level, and maximum acceptable price.
     *
     * @param request - DescribePatternTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePatternTypesResponse
     *
     * @param DescribePatternTypesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePatternTypesResponse
     */
    public function describePatternTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePatternTypes',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePatternTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance types that meet specified requirements by filtering based on parameters such as the vSwitch ID, number of vCPUs, memory size, instance family level, and maximum acceptable price.
     *
     * @param request - DescribePatternTypesRequest
     *
     * @returns DescribePatternTypesResponse
     *
     * @param DescribePatternTypesRequest $request
     *
     * @return DescribePatternTypesResponse
     */
    public function describePatternTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePatternTypesWithOptions($request, $runtime);
    }

    /**
     * Queries regions. Before you activate Auto Scaling, you can call the DescribeRegions operation to query the regions where Auto Scaling is officially launched. This preliminary step facilitates the strategic selection of both the optimal region and availability zones for activating Auto Scaling, thereby guaranteeing the finest access speeds and operational efficiency within your chosen geographical area.
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

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2022-02-22',
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
     * Queries regions. Before you activate Auto Scaling, you can call the DescribeRegions operation to query the regions where Auto Scaling is officially launched. This preliminary step facilitates the strategic selection of both the optimal region and availability zones for activating Auto Scaling, thereby guaranteeing the finest access speeds and operational efficiency within your chosen geographical area.
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
     * Queries the details of scaling activities to check the results of scaling activities triggered by scheduled tasks, event-triggered tasks, or manual execution of scaling rules. For example, you can view the status, cause, and total number of instances after the scaling activity on the scaling activity details page.
     *
     * @remarks
     * - You can specify a scaling group ID to query all scaling activity records in the scaling group.
     * - You can filter query results by the status of the scaling activity.
     * - You can query the scaling activity that occurred within the last 30 days.
     *
     * @param request - DescribeScalingActivitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingActivitiesResponse
     *
     * @param DescribeScalingActivitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScalingActivitiesResponse
     */
    public function describeScalingActivitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceRefreshTaskId) {
            @$query['InstanceRefreshTaskId'] = $request->instanceRefreshTaskId;
        }

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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingActivityIds) {
            @$query['ScalingActivityIds'] = $request->scalingActivityIds;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->statusCode) {
            @$query['StatusCode'] = $request->statusCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingActivities',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of scaling activities to check the results of scaling activities triggered by scheduled tasks, event-triggered tasks, or manual execution of scaling rules. For example, you can view the status, cause, and total number of instances after the scaling activity on the scaling activity details page.
     *
     * @remarks
     * - You can specify a scaling group ID to query all scaling activity records in the scaling group.
     * - You can filter query results by the status of the scaling activity.
     * - You can query the scaling activity that occurred within the last 30 days.
     *
     * @param request - DescribeScalingActivitiesRequest
     *
     * @returns DescribeScalingActivitiesResponse
     *
     * @param DescribeScalingActivitiesRequest $request
     *
     * @return DescribeScalingActivitiesResponse
     */
    public function describeScalingActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingActivitiesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a scaling activity. You can query a scaling activity by its ID. The scaling activity details include the scaling activity status, error code, and error message. You can efficiently troubleshoot issues and analyze service performance based on the error message.
     *
     * @param request - DescribeScalingActivityDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingActivityDetailResponse
     *
     * @param DescribeScalingActivityDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScalingActivityDetailResponse
     */
    public function describeScalingActivityDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingActivityId) {
            @$query['ScalingActivityId'] = $request->scalingActivityId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingActivityDetail',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingActivityDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a scaling activity. You can query a scaling activity by its ID. The scaling activity details include the scaling activity status, error code, and error message. You can efficiently troubleshoot issues and analyze service performance based on the error message.
     *
     * @param request - DescribeScalingActivityDetailRequest
     *
     * @returns DescribeScalingActivityDetailResponse
     *
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
     * The distribution of scaling activities in different states over a period of time.
     *
     * @param request - DescribeScalingActivityStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingActivityStatisticsResponse
     *
     * @param DescribeScalingActivityStatisticsRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeScalingActivityStatisticsResponse
     */
    public function describeScalingActivityStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingActivityStatistics',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingActivityStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The distribution of scaling activities in different states over a period of time.
     *
     * @param request - DescribeScalingActivityStatisticsRequest
     *
     * @returns DescribeScalingActivityStatisticsResponse
     *
     * @param DescribeScalingActivityStatisticsRequest $request
     *
     * @return DescribeScalingActivityStatisticsResponse
     */
    public function describeScalingActivityStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingActivityStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about ECS-type scaling configurations, including instance types and images, to help you understand the details of ECS instance templates used during scale-out.
     *
     * @param request - DescribeScalingConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingConfigurationsResponse
     *
     * @param DescribeScalingConfigurationsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScalingConfigurationsResponse
     */
    public function describeScalingConfigurationsWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingConfigurationIds) {
            @$query['ScalingConfigurationIds'] = $request->scalingConfigurationIds;
        }

        if (null !== $request->scalingConfigurationNames) {
            @$query['ScalingConfigurationNames'] = $request->scalingConfigurationNames;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingConfigurations',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about ECS-type scaling configurations, including instance types and images, to help you understand the details of ECS instance templates used during scale-out.
     *
     * @param request - DescribeScalingConfigurationsRequest
     *
     * @returns DescribeScalingConfigurationsResponse
     *
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
     * Queries the details of a specified scaling group, such as the basic information, instances in the scaling group, and scaling configurations. If the OutputFormat parameter is set to YAML for an Elastic Container Instance (ECI) scaling group, the content in the Kubernetes Deployment YAML format is returned.
     *
     * @param request - DescribeScalingGroupDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingGroupDetailResponse
     *
     * @param DescribeScalingGroupDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeScalingGroupDetailResponse
     */
    public function describeScalingGroupDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputFormat) {
            @$query['OutputFormat'] = $request->outputFormat;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingGroupDetail',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified scaling group, such as the basic information, instances in the scaling group, and scaling configurations. If the OutputFormat parameter is set to YAML for an Elastic Container Instance (ECI) scaling group, the content in the Kubernetes Deployment YAML format is returned.
     *
     * @param request - DescribeScalingGroupDetailRequest
     *
     * @returns DescribeScalingGroupDetailResponse
     *
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
     * DescribeScalingGroupDiagnoseDetails.
     *
     * @param request - DescribeScalingGroupDiagnoseDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingGroupDiagnoseDetailsResponse
     *
     * @param DescribeScalingGroupDiagnoseDetailsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeScalingGroupDiagnoseDetailsResponse
     */
    public function describeScalingGroupDiagnoseDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingGroupDiagnoseDetails',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingGroupDiagnoseDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeScalingGroupDiagnoseDetails.
     *
     * @param request - DescribeScalingGroupDiagnoseDetailsRequest
     *
     * @returns DescribeScalingGroupDiagnoseDetailsResponse
     *
     * @param DescribeScalingGroupDiagnoseDetailsRequest $request
     *
     * @return DescribeScalingGroupDiagnoseDetailsResponse
     */
    public function describeScalingGroupDiagnoseDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupDiagnoseDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of scaling groups, including basic information, instances, and scaling configurations.
     *
     * @param request - DescribeScalingGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingGroupsResponse
     *
     * @param DescribeScalingGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeScalingGroupsResponse
     */
    public function describeScalingGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

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

        if (null !== $request->scalingGroupIds) {
            @$query['ScalingGroupIds'] = $request->scalingGroupIds;
        }

        if (null !== $request->scalingGroupName) {
            @$query['ScalingGroupName'] = $request->scalingGroupName;
        }

        if (null !== $request->scalingGroupNames) {
            @$query['ScalingGroupNames'] = $request->scalingGroupNames;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of scaling groups, including basic information, instances, and scaling configurations.
     *
     * @param request - DescribeScalingGroupsRequest
     *
     * @returns DescribeScalingGroupsResponse
     *
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
     * Queries a list of ECS instances and their details in a scaling group by scaling group ID. The details include the total number of running spot instances, the total number of ECS instances, the warmup status, and the lifecycle status of the ECS instances in the scaling group. This operation also allows you to filter ECS instances by health status, lifecycle status, and creation type.
     *
     * @param request - DescribeScalingInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingInstancesResponse
     *
     * @param DescribeScalingInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScalingInstancesResponse
     */
    public function describeScalingInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creationType) {
            @$query['CreationType'] = $request->creationType;
        }

        if (null !== $request->creationTypes) {
            @$query['CreationTypes'] = $request->creationTypes;
        }

        if (null !== $request->healthStatus) {
            @$query['HealthStatus'] = $request->healthStatus;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->lifecycleState) {
            @$query['LifecycleState'] = $request->lifecycleState;
        }

        if (null !== $request->lifecycleStates) {
            @$query['LifecycleStates'] = $request->lifecycleStates;
        }

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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingActivityId) {
            @$query['ScalingActivityId'] = $request->scalingActivityId;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of ECS instances and their details in a scaling group by scaling group ID. The details include the total number of running spot instances, the total number of ECS instances, the warmup status, and the lifecycle status of the ECS instances in the scaling group. This operation also allows you to filter ECS instances by health status, lifecycle status, and creation type.
     *
     * @param request - DescribeScalingInstancesRequest
     *
     * @returns DescribeScalingInstancesResponse
     *
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
     * Queries scaling rules and their details by specifying parameters such as the scaling rule ID, scaling rule name, and unique identifier of the scaling rule. The details include the adjustment type, instance warmup time, and event-triggered tasks associated with the scaling rules.
     *
     * @param request - DescribeScalingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScalingRulesResponse
     *
     * @param DescribeScalingRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScalingRulesResponse
     */
    public function describeScalingRulesWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->scalingRuleAris) {
            @$query['ScalingRuleAris'] = $request->scalingRuleAris;
        }

        if (null !== $request->scalingRuleIds) {
            @$query['ScalingRuleIds'] = $request->scalingRuleIds;
        }

        if (null !== $request->scalingRuleNames) {
            @$query['ScalingRuleNames'] = $request->scalingRuleNames;
        }

        if (null !== $request->scalingRuleType) {
            @$query['ScalingRuleType'] = $request->scalingRuleType;
        }

        if (null !== $request->showAlarmRules) {
            @$query['ShowAlarmRules'] = $request->showAlarmRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScalingRules',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries scaling rules and their details by specifying parameters such as the scaling rule ID, scaling rule name, and unique identifier of the scaling rule. The details include the adjustment type, instance warmup time, and event-triggered tasks associated with the scaling rules.
     *
     * @param request - DescribeScalingRulesRequest
     *
     * @returns DescribeScalingRulesResponse
     *
     * @param DescribeScalingRulesRequest $request
     *
     * @return DescribeScalingRulesResponse
     */
    public function describeScalingRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of scheduled tasks. A scheduled task is a preset task that executes a specified scaling rule at a specified time to implement automatic scale-out and scale-in of compute resources. After a scheduled task is created, you can call the DescribeScheduledTasks API operation to query the details of the scheduled task, such as the trigger time, the total number of scheduled tasks, and the ID of the scaling group that executes the scheduled task.
     *
     * @remarks
     * You can query scheduled tasks by scheduled task ID, scheduled task name, or the scaling rule executed by the scheduled task.
     *
     * @param request - DescribeScheduledTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScheduledTasksResponse
     *
     * @param DescribeScheduledTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScheduledTasksResponse
     */
    public function describeScheduledTasksWithOptions($request, $runtime)
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

        if (null !== $request->recurrenceType) {
            @$query['RecurrenceType'] = $request->recurrenceType;
        }

        if (null !== $request->recurrenceValue) {
            @$query['RecurrenceValue'] = $request->recurrenceValue;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->scheduledActions) {
            @$query['ScheduledActions'] = $request->scheduledActions;
        }

        if (null !== $request->scheduledTaskIds) {
            @$query['ScheduledTaskIds'] = $request->scheduledTaskIds;
        }

        if (null !== $request->scheduledTaskNames) {
            @$query['ScheduledTaskNames'] = $request->scheduledTaskNames;
        }

        if (null !== $request->taskEnabled) {
            @$query['TaskEnabled'] = $request->taskEnabled;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeScheduledTasks',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of scheduled tasks. A scheduled task is a preset task that executes a specified scaling rule at a specified time to implement automatic scale-out and scale-in of compute resources. After a scheduled task is created, you can call the DescribeScheduledTasks API operation to query the details of the scheduled task, such as the trigger time, the total number of scheduled tasks, and the ID of the scaling group that executes the scheduled task.
     *
     * @remarks
     * You can query scheduled tasks by scheduled task ID, scheduled task name, or the scaling rule executed by the scheduled task.
     *
     * @param request - DescribeScheduledTasksRequest
     *
     * @returns DescribeScheduledTasksResponse
     *
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
     * Detaches Application Load Balancer (ALB) server groups from a scaling group. When you call the DetachAlbServerGroups operation, you can specify the scaling group ID, ALB server group ID, and port used by Elastic Compute Service (ECS) instances in the desired ALB server group to detach one or more ALB server groups from your scaling group.
     *
     * @param request - DetachAlbServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachAlbServerGroupsResponse
     *
     * @param DetachAlbServerGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DetachAlbServerGroupsResponse
     */
    public function detachAlbServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->albServerGroups) {
            @$query['AlbServerGroups'] = $request->albServerGroups;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceDetach) {
            @$query['ForceDetach'] = $request->forceDetach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachAlbServerGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachAlbServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches Application Load Balancer (ALB) server groups from a scaling group. When you call the DetachAlbServerGroups operation, you can specify the scaling group ID, ALB server group ID, and port used by Elastic Compute Service (ECS) instances in the desired ALB server group to detach one or more ALB server groups from your scaling group.
     *
     * @param request - DetachAlbServerGroupsRequest
     *
     * @returns DetachAlbServerGroupsResponse
     *
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
     * Detaches one or more ApsaraDB RDS instances from a scaling group to remove the mandatory association between the scaling group and the RDS instances and improve flexibility.
     *
     * @param request - DetachDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachDBInstancesResponse
     *
     * @param DetachDBInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetachDBInstancesResponse
     */
    public function detachDBInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->DBInstances) {
            @$query['DBInstances'] = $request->DBInstances;
        }

        if (null !== $request->forceDetach) {
            @$query['ForceDetach'] = $request->forceDetach;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->removeSecurityGroup) {
            @$query['RemoveSecurityGroup'] = $request->removeSecurityGroup;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachDBInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches one or more ApsaraDB RDS instances from a scaling group to remove the mandatory association between the scaling group and the RDS instances and improve flexibility.
     *
     * @param request - DetachDBInstancesRequest
     *
     * @returns DetachDBInstancesResponse
     *
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
     * Removes instances from a scaling group. If an enabled scaling group has no ongoing scaling activities, you can call the DetachInstances operation to remove one or more Elastic Compute Service (ECS) instances, elastic container instances, or Alibaba Cloud-hosted third-party instances from the scaling group.
     *
     * @remarks
     *   Before you call the DetachInstances operation, make sure that the following conditions are met:
     *     *   The specified scaling group is enabled.
     *     *   The specified scaling group does not have any ongoing scaling activities.
     *     **
     *     **Note** If the specified scaling group does not have any ongoing scaling activities, the operation can bypass the cooldown period of the scaling group and immediately trigger scaling activities.
     * *   Before you call this operation, take note of the following items:
     *     *   The ECS instances, elastic container instances, or Alibaba Cloud-hosted third-party instances that are removed from a scaling group by using this operation can run independently. If needed, you can call the [AttachInstances](https://help.aliyun.com/document_detail/25954.html) operation to re-add these instances to a scaling group.
     *     *   The ECS instances, elastic container instances, or Alibaba Cloud-hosted third-party instances that are removed from a scaling group by using this operation are not stopped or released.
     *     *   A successful call only means that Auto Scaling accepts your request. Scaling activities can be triggered as expected, but their successful execution is not guaranteed. You can query the status of a scaling activity based on the ScalingActivityId response parameter.
     *     *   The removal of ECS instances, elastic container instances, or Alibaba Cloud-hosted third-party instances must not result in the overall number of instances within the specified scaling group falling below the minimum capacity threshold (MinSize); otherwise, an error will be reported.
     *
     * @param request - DetachInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachInstancesResponse
     *
     * @param DetachInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetachInstancesResponse
     */
    public function detachInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->decreaseDesiredCapacity) {
            @$query['DecreaseDesiredCapacity'] = $request->decreaseDesiredCapacity;
        }

        if (null !== $request->detachOption) {
            @$query['DetachOption'] = $request->detachOption;
        }

        if (null !== $request->ignoreInvalidInstance) {
            @$query['IgnoreInvalidInstance'] = $request->ignoreInvalidInstance;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->lifecycleHook) {
            @$query['LifecycleHook'] = $request->lifecycleHook;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes instances from a scaling group. If an enabled scaling group has no ongoing scaling activities, you can call the DetachInstances operation to remove one or more Elastic Compute Service (ECS) instances, elastic container instances, or Alibaba Cloud-hosted third-party instances from the scaling group.
     *
     * @remarks
     *   Before you call the DetachInstances operation, make sure that the following conditions are met:
     *     *   The specified scaling group is enabled.
     *     *   The specified scaling group does not have any ongoing scaling activities.
     *     **
     *     **Note** If the specified scaling group does not have any ongoing scaling activities, the operation can bypass the cooldown period of the scaling group and immediately trigger scaling activities.
     * *   Before you call this operation, take note of the following items:
     *     *   The ECS instances, elastic container instances, or Alibaba Cloud-hosted third-party instances that are removed from a scaling group by using this operation can run independently. If needed, you can call the [AttachInstances](https://help.aliyun.com/document_detail/25954.html) operation to re-add these instances to a scaling group.
     *     *   The ECS instances, elastic container instances, or Alibaba Cloud-hosted third-party instances that are removed from a scaling group by using this operation are not stopped or released.
     *     *   A successful call only means that Auto Scaling accepts your request. Scaling activities can be triggered as expected, but their successful execution is not guaranteed. You can query the status of a scaling activity based on the ScalingActivityId response parameter.
     *     *   The removal of ECS instances, elastic container instances, or Alibaba Cloud-hosted third-party instances must not result in the overall number of instances within the specified scaling group falling below the minimum capacity threshold (MinSize); otherwise, an error will be reported.
     *
     * @param request - DetachInstancesRequest
     *
     * @returns DetachInstancesResponse
     *
     * @param DetachInstancesRequest $request
     *
     * @return DetachInstancesResponse
     */
    public function detachInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachInstancesWithOptions($request, $runtime);
    }

    /**
     * Detaches Classic Load Balancer (CLB, formerly known as Server Load Balancer or SLB) instances from a scaling group. If the current CLB instance no longer meets your business requirements, you can call the DetachLoadBalancers operation to detach it from your scaling group. When you call this operation, you can use ScalingGroupId, LoadBalancer.N, and ForceDetach to specify one or more CLB instances to detach. You can also determine whether to call this operation asynchronously and whether to remove the Elastic Compute Service (ECS) instances acting as backend servers from the backend server groups of the CLB instance. You can call this operation to detach only CLB instances from a scaling group.
     *
     * @param request - DetachLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachLoadBalancersResponse
     *
     * @param DetachLoadBalancersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachLoadBalancersResponse
     */
    public function detachLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceDetach) {
            @$query['ForceDetach'] = $request->forceDetach;
        }

        if (null !== $request->loadBalancers) {
            @$query['LoadBalancers'] = $request->loadBalancers;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachLoadBalancers',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches Classic Load Balancer (CLB, formerly known as Server Load Balancer or SLB) instances from a scaling group. If the current CLB instance no longer meets your business requirements, you can call the DetachLoadBalancers operation to detach it from your scaling group. When you call this operation, you can use ScalingGroupId, LoadBalancer.N, and ForceDetach to specify one or more CLB instances to detach. You can also determine whether to call this operation asynchronously and whether to remove the Elastic Compute Service (ECS) instances acting as backend servers from the backend server groups of the CLB instance. You can call this operation to detach only CLB instances from a scaling group.
     *
     * @param request - DetachLoadBalancersRequest
     *
     * @returns DetachLoadBalancersResponse
     *
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
     * Remove one or more SLB server groups from a scaling group. Supported server group types include Application Load Balancer (ALB), Network Load Balancer (NLB), and Gateway Load Balancer (GWLB), which can dynamically adjust SLB policies and help improve high availability of the system.
     *
     * @param request - DetachServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachServerGroupsResponse
     *
     * @param DetachServerGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DetachServerGroupsResponse
     */
    public function detachServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceDetach) {
            @$query['ForceDetach'] = $request->forceDetach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->serverGroups) {
            @$query['ServerGroups'] = $request->serverGroups;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachServerGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove one or more SLB server groups from a scaling group. Supported server group types include Application Load Balancer (ALB), Network Load Balancer (NLB), and Gateway Load Balancer (GWLB), which can dynamically adjust SLB policies and help improve high availability of the system.
     *
     * @param request - DetachServerGroupsRequest
     *
     * @returns DetachServerGroupsResponse
     *
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
     * Detaches vServer groups from a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups to improve service performance. If the load balancer currently attached to your scaling group is no longer needed to distribute the access traffic to the instances in your scaling group, you can call the DetachVServerGroups operation to detach one or more vServer groups of this load balancer from the scaling group.
     *
     * @remarks
     *   When you call the DetachVServerGroups operation, you must use the following parameters to specify the vServer groups that you want to detach from your scaling group:
     *     *   LoadBalancerId: the ID of the load balancer
     *     *   VServerGroupId: the ID of the vServer group
     *     *   Port: the port number of the vServer group
     * *   When the vServer group specified by the request parameters matches that attached to your scaling group, this operation yields a favorable result. Otherwise, the request is ignored and no error is reported.
     * *   Before you call this operation, you must make sure that the load balancer has ceased routing the access traffic to the instances in the scaling group. Failure to do so may lead to service requests being dropped or lost during the detachment process.
     *
     * @param request - DetachVServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachVServerGroupsResponse
     *
     * @param DetachVServerGroupsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachVServerGroupsResponse
     */
    public function detachVServerGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceDetach) {
            @$query['ForceDetach'] = $request->forceDetach;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->VServerGroups) {
            @$query['VServerGroups'] = $request->VServerGroups;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachVServerGroups',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches vServer groups from a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups to improve service performance. If the load balancer currently attached to your scaling group is no longer needed to distribute the access traffic to the instances in your scaling group, you can call the DetachVServerGroups operation to detach one or more vServer groups of this load balancer from the scaling group.
     *
     * @remarks
     *   When you call the DetachVServerGroups operation, you must use the following parameters to specify the vServer groups that you want to detach from your scaling group:
     *     *   LoadBalancerId: the ID of the load balancer
     *     *   VServerGroupId: the ID of the vServer group
     *     *   Port: the port number of the vServer group
     * *   When the vServer group specified by the request parameters matches that attached to your scaling group, this operation yields a favorable result. Otherwise, the request is ignored and no error is reported.
     * *   Before you call this operation, you must make sure that the load balancer has ceased routing the access traffic to the instances in the scaling group. Failure to do so may lead to service requests being dropped or lost during the detachment process.
     *
     * @param request - DetachVServerGroupsRequest
     *
     * @returns DetachVServerGroupsResponse
     *
     * @param DetachVServerGroupsRequest $request
     *
     * @return DetachVServerGroupsResponse
     */
    public function detachVServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachVServerGroupsWithOptions($request, $runtime);
    }

    /**
     * Disables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you currently do not need an event-triggered task, you can call the DisableAlarm operation to disable it.
     *
     * @remarks
     * Before you disable an event-triggered task, make sure that the task is in the `Normal`, `Alert`, or `Insufficient Data` state.
     *
     * @param request - DisableAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAlarmResponse
     *
     * @param DisableAlarmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableAlarmResponse
     */
    public function disableAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmTaskId) {
            @$query['AlarmTaskId'] = $request->alarmTaskId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAlarm',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you currently do not need an event-triggered task, you can call the DisableAlarm operation to disable it.
     *
     * @remarks
     * Before you disable an event-triggered task, make sure that the task is in the `Normal`, `Alert`, or `Insufficient Data` state.
     *
     * @param request - DisableAlarmRequest
     *
     * @returns DisableAlarmResponse
     *
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
     * Disables a scaling group. If you temporarily do not require a scaling group that is in the Enabled state, you can call the DisableScalingGroup operation to disable it.
     *
     * @remarks
     * Before you call this operation to disable a scaling group, take note of the following items:
     * *   If scaling activities are being executed in the specified scaling group when you call this operation, these activities will continue until they are complete. However, scaling activities that are triggered after this operation is called will be rejected.
     * *   This operation can be called only when the scaling group is in the Active state.
     *
     * @param request - DisableScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableScalingGroupResponse
     *
     * @param DisableScalingGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableScalingGroupResponse
     */
    public function disableScalingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableScalingGroup',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a scaling group. If you temporarily do not require a scaling group that is in the Enabled state, you can call the DisableScalingGroup operation to disable it.
     *
     * @remarks
     * Before you call this operation to disable a scaling group, take note of the following items:
     * *   If scaling activities are being executed in the specified scaling group when you call this operation, these activities will continue until they are complete. However, scaling activities that are triggered after this operation is called will be rejected.
     * *   This operation can be called only when the scaling group is in the Active state.
     *
     * @param request - DisableScalingGroupRequest
     *
     * @returns DisableScalingGroupResponse
     *
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
     * Enables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you want to reuse an event-triggered task that is in the Disabled state, you can call the EnableAlarm operation to enable it.
     *
     * @param request - EnableAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAlarmResponse
     *
     * @param EnableAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableAlarmResponse
     */
    public function enableAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmTaskId) {
            @$query['AlarmTaskId'] = $request->alarmTaskId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAlarm',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you want to reuse an event-triggered task that is in the Disabled state, you can call the EnableAlarm operation to enable it.
     *
     * @param request - EnableAlarmRequest
     *
     * @returns EnableAlarmResponse
     *
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
     * Enables a scaling group. If a scaling group is in the Disabled state and contains an instance configuration source such as a launch template or a scaling configuration, you can call the EnableScalingGroup operation to enable the scaling group. This operation permits Auto Scaling to dynamically adjust the computing power (also known as the number of instances) in the scaling group based on your business requirements.
     *
     * @remarks
     *   You can call this operation to enable a scaling group only if the scaling group is in the Inactive state and contains an instance configuration source such as a launch temple or a scaling configuration. The instance configuration source can also be the Elastic Compute Service (ECS) instance that you specified when you created the scaling group. If the preceding requirements are not met, the operation will fail.
     *     **
     *     **Note** A scaling group can have only one active instance configuration source at a time. When you call this operation to enable a scaling group, you can specify a scaling configuration or a launch template for the scaling group. If the scaling group already have an instance configuration source defined prior to your calling, the scaling configuration or launch template specified within your request will supersede the existing scaling configuration or launch template.
     * *   If you specify InstanceId.N to add to the scaling group within your request, Auto Scaling will check whether the addition of InstanceId.N will cause the total number of ECS instances in the scaling group to fall outside the boundaries specified by MinSize and MaxSize after you call this operation.
     *     *   If the call results in the total number of ECS instances dropping below the value of MinSize, Auto Scaling proactively creates pay-as-you-go ECS instances to ensure that the total number reaches the minimum threshold. For example, if you set MinSize to 5 when you created a scaling group and include InstanceId.N within your request to add two ECS instances when you attempt to enable the scaling group, Auto Scaling creates three more ECS instances in the scaling group after the two ECS instances are added.
     *     *   If the call results in the total number of ECS instances exceeding the value of MaxSize, the operation fails.
     *
     * @param request - EnableScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableScalingGroupResponse
     *
     * @param EnableScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableScalingGroupResponse
     */
    public function enableScalingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activeScalingConfigurationId) {
            @$query['ActiveScalingConfigurationId'] = $request->activeScalingConfigurationId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->launchTemplateId) {
            @$query['LaunchTemplateId'] = $request->launchTemplateId;
        }

        if (null !== $request->launchTemplateOverrides) {
            @$query['LaunchTemplateOverrides'] = $request->launchTemplateOverrides;
        }

        if (null !== $request->launchTemplateVersion) {
            @$query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }

        if (null !== $request->loadBalancerWeights) {
            @$query['LoadBalancerWeights'] = $request->loadBalancerWeights;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableScalingGroup',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a scaling group. If a scaling group is in the Disabled state and contains an instance configuration source such as a launch template or a scaling configuration, you can call the EnableScalingGroup operation to enable the scaling group. This operation permits Auto Scaling to dynamically adjust the computing power (also known as the number of instances) in the scaling group based on your business requirements.
     *
     * @remarks
     *   You can call this operation to enable a scaling group only if the scaling group is in the Inactive state and contains an instance configuration source such as a launch temple or a scaling configuration. The instance configuration source can also be the Elastic Compute Service (ECS) instance that you specified when you created the scaling group. If the preceding requirements are not met, the operation will fail.
     *     **
     *     **Note** A scaling group can have only one active instance configuration source at a time. When you call this operation to enable a scaling group, you can specify a scaling configuration or a launch template for the scaling group. If the scaling group already have an instance configuration source defined prior to your calling, the scaling configuration or launch template specified within your request will supersede the existing scaling configuration or launch template.
     * *   If you specify InstanceId.N to add to the scaling group within your request, Auto Scaling will check whether the addition of InstanceId.N will cause the total number of ECS instances in the scaling group to fall outside the boundaries specified by MinSize and MaxSize after you call this operation.
     *     *   If the call results in the total number of ECS instances dropping below the value of MinSize, Auto Scaling proactively creates pay-as-you-go ECS instances to ensure that the total number reaches the minimum threshold. For example, if you set MinSize to 5 when you created a scaling group and include InstanceId.N within your request to add two ECS instances when you attempt to enable the scaling group, Auto Scaling creates three more ECS instances in the scaling group after the two ECS instances are added.
     *     *   If the call results in the total number of ECS instances exceeding the value of MaxSize, the operation fails.
     *
     * @param request - EnableScalingGroupRequest
     *
     * @returns EnableScalingGroupResponse
     *
     * @param EnableScalingGroupRequest $request
     *
     * @return EnableScalingGroupResponse
     */
    public function enableScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableScalingGroupWithOptions($request, $runtime);
    }

    /**
     * Puts an Elastic Compute Service (ECS) instance into the Standby state.
     *
     * @remarks
     * ## Description
     * *   If you call the operation to put an ECS instance in a scaling group that is associated with a Classic Load Balancer (CLB) instance into the Standby state, the weight of the ECS instance as a backend server of the CLB instance is set to 0.
     * *   You can remove an instance that is in the Standby state from a scaling group, and then release the instance.
     * *   ECS instances that are in the Standby state are not removed from the scaling group during scale-in activities triggered by event-triggered tasks.
     * *   If Auto Scaling considers an ECS instance that is in the Standby state unhealthy, for example, the ECS instance is being stopped or being restarted, Auto Scaling does not update the health status of the ECS instance or trigger scale-in activities to remove the ECS instance from the scaling group. Auto Scaling updates the health status of the ECS instance only when the ECS instance is no longer in the Standby state.
     *
     * @param request - EnterStandbyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnterStandbyResponse
     *
     * @param EnterStandbyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnterStandbyResponse
     */
    public function enterStandbyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnterStandby',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnterStandbyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Puts an Elastic Compute Service (ECS) instance into the Standby state.
     *
     * @remarks
     * ## Description
     * *   If you call the operation to put an ECS instance in a scaling group that is associated with a Classic Load Balancer (CLB) instance into the Standby state, the weight of the ECS instance as a backend server of the CLB instance is set to 0.
     * *   You can remove an instance that is in the Standby state from a scaling group, and then release the instance.
     * *   ECS instances that are in the Standby state are not removed from the scaling group during scale-in activities triggered by event-triggered tasks.
     * *   If Auto Scaling considers an ECS instance that is in the Standby state unhealthy, for example, the ECS instance is being stopped or being restarted, Auto Scaling does not update the health status of the ECS instance or trigger scale-in activities to remove the ECS instance from the scaling group. Auto Scaling updates the health status of the ECS instance only when the ECS instance is no longer in the Standby state.
     *
     * @param request - EnterStandbyRequest
     *
     * @returns EnterStandbyResponse
     *
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
     * Executes a scaling rule. To adjust the number of Elastic Compute Service (ECS) instances or elastic container instances, you can manually execute a scaling rule or enable Auto Scaling to execute a scaling rule. You can call the ExecuteScalingRule operation to execute simple scaling rules or step scaling rules. Auto Scaling automatically executes target tracking scaling rules and predictive scaling rules on your behalf without requiring explicit execution calls.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   The scaling group is in the Active state.
     * *   No scaling activities in the scaling group are in progress.
     * If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     * If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     * If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     * You can specify only a limited number of ECS instances in each adjustment. For more information, see the description of the AdjustmentValue parameter in the CreateScalingRule topic.
     *
     * @param request - ExecuteScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteScalingRuleResponse
     *
     * @param ExecuteScalingRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExecuteScalingRuleResponse
     */
    public function executeScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->breachThreshold) {
            @$query['BreachThreshold'] = $request->breachThreshold;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->metricValue) {
            @$query['MetricValue'] = $request->metricValue;
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

        if (null !== $request->scalingRuleAri) {
            @$query['ScalingRuleAri'] = $request->scalingRuleAri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteScalingRule',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a scaling rule. To adjust the number of Elastic Compute Service (ECS) instances or elastic container instances, you can manually execute a scaling rule or enable Auto Scaling to execute a scaling rule. You can call the ExecuteScalingRule operation to execute simple scaling rules or step scaling rules. Auto Scaling automatically executes target tracking scaling rules and predictive scaling rules on your behalf without requiring explicit execution calls.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   The scaling group is in the Active state.
     * *   No scaling activities in the scaling group are in progress.
     * If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     * If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     * If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     * You can specify only a limited number of ECS instances in each adjustment. For more information, see the description of the AdjustmentValue parameter in the CreateScalingRule topic.
     *
     * @param request - ExecuteScalingRuleRequest
     *
     * @returns ExecuteScalingRuleResponse
     *
     * @param ExecuteScalingRuleRequest $request
     *
     * @return ExecuteScalingRuleResponse
     */
    public function executeScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Removes an instance from the Standby state. When a scale-in event is triggered in a scaling group, Auto Scaling does not remove Elastic Compute Service (ECS) instances or elastic container instances that are in the Standby state from the scaling group. If you want to restart the instances that are in the Standby state, you can call the ExitStandby operation to remove the instances from the Standby state and put them into the In Service state.
     *
     * @remarks
     * After ECS instances or elastic container instances are removed from the Standby state, the following rules apply:
     * *   The ECS instances or elastic container instances enter the In Service state.
     * *   The default weight of each ECS instance or elastic container instance as a backend server of the attached load balancer is 50.
     * *   If you stop or restart the ECS instances or elastic container instances, the health check status of the instances will be updated.
     * *   When a scale-in event is triggered, Auto Scaling may remove the ECS instances or elastic container instances from the scaling group.
     *
     * @param request - ExitStandbyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExitStandbyResponse
     *
     * @param ExitStandbyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExitStandbyResponse
     */
    public function exitStandbyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->async) {
            @$query['Async'] = $request->async;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExitStandby',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExitStandbyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an instance from the Standby state. When a scale-in event is triggered in a scaling group, Auto Scaling does not remove Elastic Compute Service (ECS) instances or elastic container instances that are in the Standby state from the scaling group. If you want to restart the instances that are in the Standby state, you can call the ExitStandby operation to remove the instances from the Standby state and put them into the In Service state.
     *
     * @remarks
     * After ECS instances or elastic container instances are removed from the Standby state, the following rules apply:
     * *   The ECS instances or elastic container instances enter the In Service state.
     * *   The default weight of each ECS instance or elastic container instance as a backend server of the attached load balancer is 50.
     * *   If you stop or restart the ECS instances or elastic container instances, the health check status of the instances will be updated.
     * *   When a scale-in event is triggered, Auto Scaling may remove the ECS instances or elastic container instances from the scaling group.
     *
     * @param request - ExitStandbyRequest
     *
     * @returns ExitStandbyResponse
     *
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
     * Queries the tag keys added to Auto Scaling resources. Querying tag keys facilitates easier classification, identification, and monitoring of your Auto Scaling resources, thereby enhancing the flexibility and convenience of your resource management processes.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagKeys',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag keys added to Auto Scaling resources. Querying tag keys facilitates easier classification, identification, and monitoring of your Auto Scaling resources, thereby enhancing the flexibility and convenience of your resource management processes.
     *
     * @param request - ListTagKeysRequest
     *
     * @returns ListTagKeysResponse
     *
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
     * Queries tags. You can call the ListTagResources operation to query tags that are added to Auto Scaling resources, thereby clarifying resource utilization and facilitating efficient resource management. This operation aids in the automation of resource categorization and permission management processes.
     *
     * @remarks
     *   Specify at least one of the following request parameters: `ResourceIds` and `Tags`. `Tags.Key` and `Tags.Value` are used to specify the query objects.
     * *   If you provide both `ResourceIds` and `Tags` in your request, the response will exclusively include Auto Scaling resources that satisfy the criteria set by these parameters, ensuring targeted and precise information retrieval.
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

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2022-02-22',
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
     * Queries tags. You can call the ListTagResources operation to query tags that are added to Auto Scaling resources, thereby clarifying resource utilization and facilitating efficient resource management. This operation aids in the automation of resource categorization and permission management processes.
     *
     * @remarks
     *   Specify at least one of the following request parameters: `ResourceIds` and `Tags`. `Tags.Key` and `Tags.Value` are used to specify the query objects.
     * *   If you provide both `ResourceIds` and `Tags` in your request, the response will exclusively include Auto Scaling resources that satisfy the criteria set by these parameters, ensuring targeted and precise information retrieval.
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
     * Queries the tag keys associated with Auto Scaling resources to facilitate a deeper comprehension of those resources. By doing so, you can categorize and manage your Auto Scaling resources more efficiently.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagValues',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag keys associated with Auto Scaling resources to facilitate a deeper comprehension of those resources. By doing so, you can categorize and manage your Auto Scaling resources more efficiently.
     *
     * @param request - ListTagValuesRequest
     *
     * @returns ListTagValuesResponse
     *
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
     * Modifies an event-triggered task.
     *
     * @remarks
     * - If you create an event-triggered task of the custom monitoring type (MetricType=custom), you must first report custom monitoring metrics to CloudMonitor. For more information, see [Event-triggered tasks for custom monitoring](https://help.aliyun.com/document_detail/74861.html).
     * - When you create an event-triggered task, you must specify a metric (MetricName) and configure dimension information (Dimension.N.DimensionKey and Dimension.N.DimensionValue) to determine the aggregation scope of the metric data in the scaling group. For example, you can specify user_id and scaling_group to aggregate the metric data of all ECS instances or elastic container instances in the scaling group of the specified user.
     *     - The metrics of a custom monitoring event-triggered task (MetricType=custom) depend on your custom monitoring metrics.
     *     - For more information about the metrics supported by system monitoring event-triggered tasks (MetricType=system), see [Event-triggered tasks for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * > In the dimension information, user_id and scaling_group are automatically populated by the system. You must manually specify device and state. For more information, see the Dimension.N.DimensionKey and Dimension.N.DimensionValue parameters.
     *
     * @param request - ModifyAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAlarmResponse
     *
     * @param ModifyAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyAlarmResponse
     */
    public function modifyAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmActions) {
            @$query['AlarmActions'] = $request->alarmActions;
        }

        if (null !== $request->alarmTaskId) {
            @$query['AlarmTaskId'] = $request->alarmTaskId;
        }

        if (null !== $request->comparisonOperator) {
            @$query['ComparisonOperator'] = $request->comparisonOperator;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->effective) {
            @$query['Effective'] = $request->effective;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->expressions) {
            @$query['Expressions'] = $request->expressions;
        }

        if (null !== $request->expressionsLogicOperator) {
            @$query['ExpressionsLogicOperator'] = $request->expressionsLogicOperator;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->statistics) {
            @$query['Statistics'] = $request->statistics;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAlarm',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an event-triggered task.
     *
     * @remarks
     * - If you create an event-triggered task of the custom monitoring type (MetricType=custom), you must first report custom monitoring metrics to CloudMonitor. For more information, see [Event-triggered tasks for custom monitoring](https://help.aliyun.com/document_detail/74861.html).
     * - When you create an event-triggered task, you must specify a metric (MetricName) and configure dimension information (Dimension.N.DimensionKey and Dimension.N.DimensionValue) to determine the aggregation scope of the metric data in the scaling group. For example, you can specify user_id and scaling_group to aggregate the metric data of all ECS instances or elastic container instances in the scaling group of the specified user.
     *     - The metrics of a custom monitoring event-triggered task (MetricType=custom) depend on your custom monitoring metrics.
     *     - For more information about the metrics supported by system monitoring event-triggered tasks (MetricType=system), see [Event-triggered tasks for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * > In the dimension information, user_id and scaling_group are automatically populated by the system. You must manually specify device and state. For more information, see the Dimension.N.DimensionKey and Dimension.N.DimensionValue parameters.
     *
     * @param request - ModifyAlarmRequest
     *
     * @returns ModifyAlarmResponse
     *
     * @param ModifyAlarmRequest $request
     *
     * @return ModifyAlarmResponse
     */
    public function modifyAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAlarmWithOptions($request, $runtime);
    }

    /**
     * Sets the status of scaling activities that prompt text message or email notifications.
     *
     * @param request - ModifyAlertConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAlertConfigurationResponse
     *
     * @param ModifyAlertConfigurationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAlertConfigurationResponse
     */
    public function modifyAlertConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scaleStatuses) {
            @$query['ScaleStatuses'] = $request->scaleStatuses;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAlertConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAlertConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the status of scaling activities that prompt text message or email notifications.
     *
     * @param request - ModifyAlertConfigurationRequest
     *
     * @returns ModifyAlertConfigurationResponse
     *
     * @param ModifyAlertConfigurationRequest $request
     *
     * @return ModifyAlertConfigurationResponse
     */
    public function modifyAlertConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAlertConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modifies a scaling configuration by specifying parameters such as the ID of the scaling configuration to be modified, the name of the scaling configuration, and the attributes of the Elastic Container Instance (ECI), such as the instance restart policy, the preemption policy, and the bandwidth of the elastic IP address (EIP).
     *
     * @remarks
     * - If you modify the name of the scaling configuration, ensure that no other scaling configuration in the same scaling group has the same name.
     * - You can call the [DescribeEciScalingConfigurations](https://help.aliyun.com/document_detail/459374.html) operation to query and verify the modification result.
     *
     * @param request - ModifyEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEciScalingConfigurationResponse
     *
     * @param ModifyEciScalingConfigurationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyEciScalingConfigurationResponse
     */
    public function modifyEciScalingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acrRegistryInfos) {
            @$query['AcrRegistryInfos'] = $request->acrRegistryInfos;
        }

        if (null !== $request->activeDeadlineSeconds) {
            @$query['ActiveDeadlineSeconds'] = $request->activeDeadlineSeconds;
        }

        if (null !== $request->autoCreateEip) {
            @$query['AutoCreateEip'] = $request->autoCreateEip;
        }

        if (null !== $request->autoMatchImageCache) {
            @$query['AutoMatchImageCache'] = $request->autoMatchImageCache;
        }

        if (null !== $request->containerGroupName) {
            @$query['ContainerGroupName'] = $request->containerGroupName;
        }

        if (null !== $request->containers) {
            @$query['Containers'] = $request->containers;
        }

        if (null !== $request->containersUpdateType) {
            @$query['ContainersUpdateType'] = $request->containersUpdateType;
        }

        if (null !== $request->costOptimization) {
            @$query['CostOptimization'] = $request->costOptimization;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->cpuOptionsCore) {
            @$query['CpuOptionsCore'] = $request->cpuOptionsCore;
        }

        if (null !== $request->cpuOptionsThreadsPerCore) {
            @$query['CpuOptionsThreadsPerCore'] = $request->cpuOptionsThreadsPerCore;
        }

        if (null !== $request->dataCacheBucket) {
            @$query['DataCacheBucket'] = $request->dataCacheBucket;
        }

        if (null !== $request->dataCacheBurstingEnabled) {
            @$query['DataCacheBurstingEnabled'] = $request->dataCacheBurstingEnabled;
        }

        if (null !== $request->dataCachePL) {
            @$query['DataCachePL'] = $request->dataCachePL;
        }

        if (null !== $request->dataCacheProvisionedIops) {
            @$query['DataCacheProvisionedIops'] = $request->dataCacheProvisionedIops;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dnsConfigNameServers) {
            @$query['DnsConfigNameServers'] = $request->dnsConfigNameServers;
        }

        if (null !== $request->dnsConfigOptions) {
            @$query['DnsConfigOptions'] = $request->dnsConfigOptions;
        }

        if (null !== $request->dnsConfigSearchs) {
            @$query['DnsConfigSearchs'] = $request->dnsConfigSearchs;
        }

        if (null !== $request->dnsPolicy) {
            @$query['DnsPolicy'] = $request->dnsPolicy;
        }

        if (null !== $request->egressBandwidth) {
            @$query['EgressBandwidth'] = $request->egressBandwidth;
        }

        if (null !== $request->eipBandwidth) {
            @$query['EipBandwidth'] = $request->eipBandwidth;
        }

        if (null !== $request->enableSls) {
            @$query['EnableSls'] = $request->enableSls;
        }

        if (null !== $request->ephemeralStorage) {
            @$query['EphemeralStorage'] = $request->ephemeralStorage;
        }

        if (null !== $request->gpuDriverVersion) {
            @$query['GpuDriverVersion'] = $request->gpuDriverVersion;
        }

        if (null !== $request->hostAliases) {
            @$query['HostAliases'] = $request->hostAliases;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->imageRegistryCredentials) {
            @$query['ImageRegistryCredentials'] = $request->imageRegistryCredentials;
        }

        if (null !== $request->imageSnapshotId) {
            @$query['ImageSnapshotId'] = $request->imageSnapshotId;
        }

        if (null !== $request->ingressBandwidth) {
            @$query['IngressBandwidth'] = $request->ingressBandwidth;
        }

        if (null !== $request->initContainers) {
            @$query['InitContainers'] = $request->initContainers;
        }

        if (null !== $request->instanceFamilyLevel) {
            @$query['InstanceFamilyLevel'] = $request->instanceFamilyLevel;
        }

        if (null !== $request->instanceTypes) {
            @$query['InstanceTypes'] = $request->instanceTypes;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->loadBalancerWeight) {
            @$query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->ntpServers) {
            @$query['NtpServers'] = $request->ntpServers;
        }

        if (null !== $request->override) {
            @$query['Override'] = $request->override;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->restartPolicy) {
            @$query['RestartPolicy'] = $request->restartPolicy;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        if (null !== $request->scalingConfigurationName) {
            @$query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }

        if (null !== $request->securityContextSysCtls) {
            @$query['SecurityContextSysCtls'] = $request->securityContextSysCtls;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->spotPriceLimit) {
            @$query['SpotPriceLimit'] = $request->spotPriceLimit;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->terminationGracePeriodSeconds) {
            @$query['TerminationGracePeriodSeconds'] = $request->terminationGracePeriodSeconds;
        }

        if (null !== $request->volumes) {
            @$query['Volumes'] = $request->volumes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEciScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a scaling configuration by specifying parameters such as the ID of the scaling configuration to be modified, the name of the scaling configuration, and the attributes of the Elastic Container Instance (ECI), such as the instance restart policy, the preemption policy, and the bandwidth of the elastic IP address (EIP).
     *
     * @remarks
     * - If you modify the name of the scaling configuration, ensure that no other scaling configuration in the same scaling group has the same name.
     * - You can call the [DescribeEciScalingConfigurations](https://help.aliyun.com/document_detail/459374.html) operation to query and verify the modification result.
     *
     * @param request - ModifyEciScalingConfigurationRequest
     *
     * @returns ModifyEciScalingConfigurationResponse
     *
     * @param ModifyEciScalingConfigurationRequest $request
     *
     * @return ModifyEciScalingConfigurationResponse
     */
    public function modifyEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of an ECS instance in a scaling group. Currently, only the lifecycle management attribute of instances manually added to the scaling group can be modified.
     *
     * @param request - ModifyInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entrusted) {
            @$query['Entrusted'] = $request->entrusted;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAttribute',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an ECS instance in a scaling group. Currently, only the lifecycle management attribute of instances manually added to the scaling group can be modified.
     *
     * @param request - ModifyInstanceAttributeRequest
     *
     * @returns ModifyInstanceAttributeResponse
     *
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
     * Modifies a lifecycle hook. You can modify the applicable scaling activity type, the wait time for scaling activities, and the subsequent action after the wait state ends by specifying the lifecycle hook ID or name and the scaling group ID.
     *
     * @remarks
     * You can specify the lifecycle hook to be modified in one of the following ways:
     * - Specify only the lifecycle hook ID (LifecycleHookId). In this case, the ScalingGroupId and LifecycleHookName parameters are ignored.
     * - Specify both the scaling group ID (ScalingGroupId) and the lifecycle hook name (LifecycleHookName). The lifecycle hook name is unique within a scaling group.
     *
     * @param request - ModifyLifecycleHookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLifecycleHookResponse
     *
     * @param ModifyLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyLifecycleHookResponse
     */
    public function modifyLifecycleHookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultResult) {
            @$query['DefaultResult'] = $request->defaultResult;
        }

        if (null !== $request->heartbeatTimeout) {
            @$query['HeartbeatTimeout'] = $request->heartbeatTimeout;
        }

        if (null !== $request->lifecycleActionSources) {
            @$query['LifecycleActionSources'] = $request->lifecycleActionSources;
        }

        if (null !== $request->lifecycleHookId) {
            @$query['LifecycleHookId'] = $request->lifecycleHookId;
        }

        if (null !== $request->lifecycleHookName) {
            @$query['LifecycleHookName'] = $request->lifecycleHookName;
        }

        if (null !== $request->lifecycleHookStatus) {
            @$query['LifecycleHookStatus'] = $request->lifecycleHookStatus;
        }

        if (null !== $request->lifecycleTransition) {
            @$query['LifecycleTransition'] = $request->lifecycleTransition;
        }

        if (null !== $request->notificationArn) {
            @$query['NotificationArn'] = $request->notificationArn;
        }

        if (null !== $request->notificationMetadata) {
            @$query['NotificationMetadata'] = $request->notificationMetadata;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLifecycleHook',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a lifecycle hook. You can modify the applicable scaling activity type, the wait time for scaling activities, and the subsequent action after the wait state ends by specifying the lifecycle hook ID or name and the scaling group ID.
     *
     * @remarks
     * You can specify the lifecycle hook to be modified in one of the following ways:
     * - Specify only the lifecycle hook ID (LifecycleHookId). In this case, the ScalingGroupId and LifecycleHookName parameters are ignored.
     * - Specify both the scaling group ID (ScalingGroupId) and the lifecycle hook name (LifecycleHookName). The lifecycle hook name is unique within a scaling group.
     *
     * @param request - ModifyLifecycleHookRequest
     *
     * @returns ModifyLifecycleHookResponse
     *
     * @param ModifyLifecycleHookRequest $request
     *
     * @return ModifyLifecycleHookResponse
     */
    public function modifyLifecycleHook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLifecycleHookWithOptions($request, $runtime);
    }

    /**
     * Modifies event notification rules. Event notification rules support automatic sending of notifications to CloudMonitor, Message Service (MNS) topics, or MNS queues when a specified type of events occur. This helps you learn about the dynamics of your scaling group at the earliest opportunity and further automate resource management. If an existing event notification rule does not meet your business requirements, you can call the ModifyNotificationConfiguration operation to modify the event notification rule, without the need to create a new rule. Take not that you cannot modify the notification method of an event notification rule by calling this operation.
     *
     * @param request - ModifyNotificationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNotificationConfigurationResponse
     *
     * @param ModifyNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyNotificationConfigurationResponse
     */
    public function modifyNotificationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->messageEncoding) {
            @$query['MessageEncoding'] = $request->messageEncoding;
        }

        if (null !== $request->notificationArn) {
            @$query['NotificationArn'] = $request->notificationArn;
        }

        if (null !== $request->notificationTypes) {
            @$query['NotificationTypes'] = $request->notificationTypes;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->timeZone) {
            @$query['TimeZone'] = $request->timeZone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNotificationConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies event notification rules. Event notification rules support automatic sending of notifications to CloudMonitor, Message Service (MNS) topics, or MNS queues when a specified type of events occur. This helps you learn about the dynamics of your scaling group at the earliest opportunity and further automate resource management. If an existing event notification rule does not meet your business requirements, you can call the ModifyNotificationConfiguration operation to modify the event notification rule, without the need to create a new rule. Take not that you cannot modify the notification method of an event notification rule by calling this operation.
     *
     * @param request - ModifyNotificationConfigurationRequest
     *
     * @returns ModifyNotificationConfigurationResponse
     *
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
     * Modifies an ECS-type scaling configuration (the ECS instance template for scale-out) if the current scaling configuration does not meet your business requirements.
     *
     * @remarks
     * - If you modify the name of a scaling configuration, ensure that no other scaling configuration in the same scaling group has the same name.
     * - You can bind a primary network interface card (NIC) by using one of the following methods. However, you can use only one method in a single request. If you use both methods, the request fails and an error message is returned. When you modify the scaling configuration by using one method, the NIC configuration set by the other method is cleared.
     *     - Directly configure the primary NIC by using parameters such as SecurityGroupId, SecurityGroupIds, and Ipv6AddressCount.
     *     - Configure the primary NIC and secondary NICs by using the NetworkInterfaces parameter. When you use the NetworkInterfaces parameter, you must configure the primary NIC. If NetworkInterface.InstanceType is set to Primary, the primary NIC is configured. If NetworkInterface.InstanceType is set to Secondary or left empty, a secondary NIC is configured.
     *
     * @param tmpReq - ModifyScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScalingConfigurationResponse
     *
     * @param ModifyScalingConfigurationRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyScalingConfigurationResponse
     */
    public function modifyScalingConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyScalingConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->schedulerOptions) {
            $request->schedulerOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedulerOptions, 'SchedulerOptions', 'json');
        }

        $query = [];
        if (null !== $request->affinity) {
            @$query['Affinity'] = $request->affinity;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->creditSpecification) {
            @$query['CreditSpecification'] = $request->creditSpecification;
        }

        if (null !== $request->customPriorities) {
            @$query['CustomPriorities'] = $request->customPriorities;
        }

        if (null !== $request->dataDisks) {
            @$query['DataDisks'] = $request->dataDisks;
        }

        if (null !== $request->dedicatedHostClusterId) {
            @$query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
        }

        if (null !== $request->dedicatedHostId) {
            @$query['DedicatedHostId'] = $request->dedicatedHostId;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->deploymentSetId) {
            @$query['DeploymentSetId'] = $request->deploymentSetId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->hpcClusterId) {
            @$query['HpcClusterId'] = $request->hpcClusterId;
        }

        if (null !== $request->httpEndpoint) {
            @$query['HttpEndpoint'] = $request->httpEndpoint;
        }

        if (null !== $request->httpTokens) {
            @$query['HttpTokens'] = $request->httpTokens;
        }

        if (null !== $request->imageFamily) {
            @$query['ImageFamily'] = $request->imageFamily;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceDescription) {
            @$query['InstanceDescription'] = $request->instanceDescription;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instancePatternInfos) {
            @$query['InstancePatternInfos'] = $request->instancePatternInfos;
        }

        if (null !== $request->instanceTypeCandidateOptions) {
            @$query['InstanceTypeCandidateOptions'] = $request->instanceTypeCandidateOptions;
        }

        if (null !== $request->instanceTypeOverrides) {
            @$query['InstanceTypeOverrides'] = $request->instanceTypeOverrides;
        }

        if (null !== $request->instanceTypes) {
            @$query['InstanceTypes'] = $request->instanceTypes;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->internetMaxBandwidthIn) {
            @$query['InternetMaxBandwidthIn'] = $request->internetMaxBandwidthIn;
        }

        if (null !== $request->internetMaxBandwidthOut) {
            @$query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }

        if (null !== $request->ioOptimized) {
            @$query['IoOptimized'] = $request->ioOptimized;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->loadBalancerWeight) {
            @$query['LoadBalancerWeight'] = $request->loadBalancerWeight;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->networkInterfaces) {
            @$query['NetworkInterfaces'] = $request->networkInterfaces;
        }

        if (null !== $request->override) {
            @$query['Override'] = $request->override;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordInherit) {
            @$query['PasswordInherit'] = $request->passwordInherit;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourcePoolOptions) {
            @$query['ResourcePoolOptions'] = $request->resourcePoolOptions;
        }

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        if (null !== $request->scalingConfigurationName) {
            @$query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }

        if (null !== $request->schedulerOptionsShrink) {
            @$query['SchedulerOptions'] = $request->schedulerOptionsShrink;
        }

        if (null !== $request->secondaryEniVSwitchConstraint) {
            @$query['SecondaryEniVSwitchConstraint'] = $request->secondaryEniVSwitchConstraint;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->securityGroupIds) {
            @$query['SecurityGroupIds'] = $request->securityGroupIds;
        }

        if (null !== $request->securityOptions) {
            @$query['SecurityOptions'] = $request->securityOptions;
        }

        if (null !== $request->spotDuration) {
            @$query['SpotDuration'] = $request->spotDuration;
        }

        if (null !== $request->spotInterruptionBehavior) {
            @$query['SpotInterruptionBehavior'] = $request->spotInterruptionBehavior;
        }

        if (null !== $request->spotPriceLimits) {
            @$query['SpotPriceLimits'] = $request->spotPriceLimits;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->storageSetId) {
            @$query['StorageSetId'] = $request->storageSetId;
        }

        if (null !== $request->storageSetPartitionNumber) {
            @$query['StorageSetPartitionNumber'] = $request->storageSetPartitionNumber;
        }

        if (null !== $request->systemDiskCategories) {
            @$query['SystemDiskCategories'] = $request->systemDiskCategories;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        if (null !== $request->tenancy) {
            @$query['Tenancy'] = $request->tenancy;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        if (null !== $request->imageOptions) {
            @$query['ImageOptions'] = $request->imageOptions;
        }

        if (null !== $request->privatePoolOptions) {
            @$query['PrivatePoolOptions'] = $request->privatePoolOptions;
        }

        if (null !== $request->systemDisk) {
            @$query['SystemDisk'] = $request->systemDisk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScalingConfiguration',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an ECS-type scaling configuration (the ECS instance template for scale-out) if the current scaling configuration does not meet your business requirements.
     *
     * @remarks
     * - If you modify the name of a scaling configuration, ensure that no other scaling configuration in the same scaling group has the same name.
     * - You can bind a primary network interface card (NIC) by using one of the following methods. However, you can use only one method in a single request. If you use both methods, the request fails and an error message is returned. When you modify the scaling configuration by using one method, the NIC configuration set by the other method is cleared.
     *     - Directly configure the primary NIC by using parameters such as SecurityGroupId, SecurityGroupIds, and Ipv6AddressCount.
     *     - Configure the primary NIC and secondary NICs by using the NetworkInterfaces parameter. When you use the NetworkInterfaces parameter, you must configure the primary NIC. If NetworkInterface.InstanceType is set to Primary, the primary NIC is configured. If NetworkInterface.InstanceType is set to Secondary or left empty, a secondary NIC is configured.
     *
     * @param request - ModifyScalingConfigurationRequest
     *
     * @returns ModifyScalingConfigurationResponse
     *
     * @param ModifyScalingConfigurationRequest $request
     *
     * @return ModifyScalingConfigurationResponse
     */
    public function modifyScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a scaling group. You can configure a scaling group to automatically adjust your computing capacity by increasing or decreasing the number of instances based on business demands and policies. If the current attributes of the scaling group no longer meet your business requirements, you can call this operation to modify attributes such as the maximum number of instances, minimum number of instances, or expected number of instances. This eliminates the need to recreate the scaling group and reconfigure related attributes, saving time and resource costs.
     *
     * @remarks
     * - The following parameters cannot be modified:
     *      - RegionId.
     *     - LoadBalancerId.
     *     > To modify load balancing instances, use the AttachLoadBalancers and DetachLoadBalancers operations.
     *     - DBInstanceId.
     *     > To modify ApsaraDB RDS instances, use the AttachDBInstances and DetachDBInstances operations.
     * - You can call this operation only when the scaling group is in the Active or Inactive state.
     * - Activating a new scaling configuration does not affect the running ECS instances or elastic container instances that were created by using earlier scaling configurations.
     * - If you modify the MaxSize parameter and the number of ECS instances or elastic container instances in the scaling group exceeds the value of MaxSize, Auto Scaling automatically removes ECS instances or elastic container instances from the scaling group until the number of instances equals the value of MaxSize.
     * - If you modify the MinSize parameter and the number of ECS instances or elastic container instances in the scaling group is less than the value of MinSize, Auto Scaling automatically adds ECS instances or elastic container instances to the scaling group until the number of instances equals the value of MinSize.
     * - If the DesiredCapacity parameter is configured for the scaling group and you modify the value of DesiredCapacity, and the current number of ECS instances or elastic container instances in the scaling group is different from the value of DesiredCapacity, Auto Scaling automatically adds or removes ECS instances or elastic container instances until the number of instances equals the value of DesiredCapacity.
     *
     * @param request - ModifyScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScalingGroupResponse
     *
     * @param ModifyScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyScalingGroupResponse
     */
    public function modifyScalingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activeScalingConfigurationId) {
            @$query['ActiveScalingConfigurationId'] = $request->activeScalingConfigurationId;
        }

        if (null !== $request->allocationStrategy) {
            @$query['AllocationStrategy'] = $request->allocationStrategy;
        }

        if (null !== $request->autoRebalance) {
            @$query['AutoRebalance'] = $request->autoRebalance;
        }

        if (null !== $request->azBalance) {
            @$query['AzBalance'] = $request->azBalance;
        }

        if (null !== $request->balanceMode) {
            @$query['BalanceMode'] = $request->balanceMode;
        }

        if (null !== $request->capacityOptions) {
            @$query['CapacityOptions'] = $request->capacityOptions;
        }

        if (null !== $request->compensateWithOnDemand) {
            @$query['CompensateWithOnDemand'] = $request->compensateWithOnDemand;
        }

        if (null !== $request->customPolicyARN) {
            @$query['CustomPolicyARN'] = $request->customPolicyARN;
        }

        if (null !== $request->defaultCooldown) {
            @$query['DefaultCooldown'] = $request->defaultCooldown;
        }

        if (null !== $request->desiredCapacity) {
            @$query['DesiredCapacity'] = $request->desiredCapacity;
        }

        if (null !== $request->disableDesiredCapacity) {
            @$query['DisableDesiredCapacity'] = $request->disableDesiredCapacity;
        }

        if (null !== $request->groupDeletionProtection) {
            @$query['GroupDeletionProtection'] = $request->groupDeletionProtection;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckTypes) {
            @$query['HealthCheckTypes'] = $request->healthCheckTypes;
        }

        if (null !== $request->launchTemplateId) {
            @$query['LaunchTemplateId'] = $request->launchTemplateId;
        }

        if (null !== $request->launchTemplateOverrides) {
            @$query['LaunchTemplateOverrides'] = $request->launchTemplateOverrides;
        }

        if (null !== $request->launchTemplateVersion) {
            @$query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }

        if (null !== $request->maxInstanceLifetime) {
            @$query['MaxInstanceLifetime'] = $request->maxInstanceLifetime;
        }

        if (null !== $request->maxSize) {
            @$query['MaxSize'] = $request->maxSize;
        }

        if (null !== $request->minSize) {
            @$query['MinSize'] = $request->minSize;
        }

        if (null !== $request->multiAZPolicy) {
            @$query['MultiAZPolicy'] = $request->multiAZPolicy;
        }

        if (null !== $request->onDemandBaseCapacity) {
            @$query['OnDemandBaseCapacity'] = $request->onDemandBaseCapacity;
        }

        if (null !== $request->onDemandPercentageAboveBaseCapacity) {
            @$query['OnDemandPercentageAboveBaseCapacity'] = $request->onDemandPercentageAboveBaseCapacity;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->removalPolicies) {
            @$query['RemovalPolicies'] = $request->removalPolicies;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->scalingGroupName) {
            @$query['ScalingGroupName'] = $request->scalingGroupName;
        }

        if (null !== $request->scalingPolicy) {
            @$query['ScalingPolicy'] = $request->scalingPolicy;
        }

        if (null !== $request->spotAllocationStrategy) {
            @$query['SpotAllocationStrategy'] = $request->spotAllocationStrategy;
        }

        if (null !== $request->spotInstancePools) {
            @$query['SpotInstancePools'] = $request->spotInstancePools;
        }

        if (null !== $request->spotInstanceRemedy) {
            @$query['SpotInstanceRemedy'] = $request->spotInstanceRemedy;
        }

        if (null !== $request->stopInstanceTimeout) {
            @$query['StopInstanceTimeout'] = $request->stopInstanceTimeout;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->zoneShiftPolicy) {
            @$query['ZoneShiftPolicy'] = $request->zoneShiftPolicy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScalingGroup',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a scaling group. You can configure a scaling group to automatically adjust your computing capacity by increasing or decreasing the number of instances based on business demands and policies. If the current attributes of the scaling group no longer meet your business requirements, you can call this operation to modify attributes such as the maximum number of instances, minimum number of instances, or expected number of instances. This eliminates the need to recreate the scaling group and reconfigure related attributes, saving time and resource costs.
     *
     * @remarks
     * - The following parameters cannot be modified:
     *      - RegionId.
     *     - LoadBalancerId.
     *     > To modify load balancing instances, use the AttachLoadBalancers and DetachLoadBalancers operations.
     *     - DBInstanceId.
     *     > To modify ApsaraDB RDS instances, use the AttachDBInstances and DetachDBInstances operations.
     * - You can call this operation only when the scaling group is in the Active or Inactive state.
     * - Activating a new scaling configuration does not affect the running ECS instances or elastic container instances that were created by using earlier scaling configurations.
     * - If you modify the MaxSize parameter and the number of ECS instances or elastic container instances in the scaling group exceeds the value of MaxSize, Auto Scaling automatically removes ECS instances or elastic container instances from the scaling group until the number of instances equals the value of MaxSize.
     * - If you modify the MinSize parameter and the number of ECS instances or elastic container instances in the scaling group is less than the value of MinSize, Auto Scaling automatically adds ECS instances or elastic container instances to the scaling group until the number of instances equals the value of MinSize.
     * - If the DesiredCapacity parameter is configured for the scaling group and you modify the value of DesiredCapacity, and the current number of ECS instances or elastic container instances in the scaling group is different from the value of DesiredCapacity, Auto Scaling automatically adds or removes ECS instances or elastic container instances until the number of instances equals the value of DesiredCapacity.
     *
     * @param request - ModifyScalingGroupRequest
     *
     * @returns ModifyScalingGroupResponse
     *
     * @param ModifyScalingGroupRequest $request
     *
     * @return ModifyScalingGroupResponse
     */
    public function modifyScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies one or more attributes of a scaling rule. If an existing scaling rule no longer meets your requirements, you can call this operation to modify its attributes instead of creating a new one. This avoids unnecessary repetitive operations and saves time and resources.
     *
     * @param request - ModifyScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScalingRuleResponse
     *
     * @param ModifyScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adjustmentType) {
            @$query['AdjustmentType'] = $request->adjustmentType;
        }

        if (null !== $request->adjustmentValue) {
            @$query['AdjustmentValue'] = $request->adjustmentValue;
        }

        if (null !== $request->alarmDimensions) {
            @$query['AlarmDimensions'] = $request->alarmDimensions;
        }

        if (null !== $request->alarmOptions) {
            @$query['AlarmOptions'] = $request->alarmOptions;
        }

        if (null !== $request->cooldown) {
            @$query['Cooldown'] = $request->cooldown;
        }

        if (null !== $request->disableScaleIn) {
            @$query['DisableScaleIn'] = $request->disableScaleIn;
        }

        if (null !== $request->estimatedInstanceWarmup) {
            @$query['EstimatedInstanceWarmup'] = $request->estimatedInstanceWarmup;
        }

        if (null !== $request->hybridMetrics) {
            @$query['HybridMetrics'] = $request->hybridMetrics;
        }

        if (null !== $request->hybridMonitorNamespace) {
            @$query['HybridMonitorNamespace'] = $request->hybridMonitorNamespace;
        }

        if (null !== $request->initialMaxSize) {
            @$query['InitialMaxSize'] = $request->initialMaxSize;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->minAdjustmentMagnitude) {
            @$query['MinAdjustmentMagnitude'] = $request->minAdjustmentMagnitude;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->predictiveScalingMode) {
            @$query['PredictiveScalingMode'] = $request->predictiveScalingMode;
        }

        if (null !== $request->predictiveTaskBufferTime) {
            @$query['PredictiveTaskBufferTime'] = $request->predictiveTaskBufferTime;
        }

        if (null !== $request->predictiveValueBehavior) {
            @$query['PredictiveValueBehavior'] = $request->predictiveValueBehavior;
        }

        if (null !== $request->predictiveValueBuffer) {
            @$query['PredictiveValueBuffer'] = $request->predictiveValueBuffer;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scaleInEvaluationCount) {
            @$query['ScaleInEvaluationCount'] = $request->scaleInEvaluationCount;
        }

        if (null !== $request->scaleOutEvaluationCount) {
            @$query['ScaleOutEvaluationCount'] = $request->scaleOutEvaluationCount;
        }

        if (null !== $request->scalingRuleId) {
            @$query['ScalingRuleId'] = $request->scalingRuleId;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        if (null !== $request->stepAdjustments) {
            @$query['StepAdjustments'] = $request->stepAdjustments;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScalingRule',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies one or more attributes of a scaling rule. If an existing scaling rule no longer meets your requirements, you can call this operation to modify its attributes instead of creating a new one. This avoids unnecessary repetitive operations and saves time and resources.
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

        return $this->modifyScalingRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration parameters of an existing scheduled task. You can specify the scheduled task ID to modify parameters such as the scaling rule to be executed, the number of instances in the scaling group, the task execution frequency, and the retry policy.
     *
     * @remarks
     * Scheduled tasks support two scaling methods:
     * - Set the scaling rule to be executed by using the ScheduledAction parameter.
     * - Set the number of instances in the scaling group by using the ScalingGroupId parameter.
     * > You cannot specify both ScheduledAction and ScalingGroupId at the same time.
     *
     * @param request - ModifyScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param ModifyScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desiredCapacity) {
            @$query['DesiredCapacity'] = $request->desiredCapacity;
        }

        if (null !== $request->launchExpirationTime) {
            @$query['LaunchExpirationTime'] = $request->launchExpirationTime;
        }

        if (null !== $request->launchTime) {
            @$query['LaunchTime'] = $request->launchTime;
        }

        if (null !== $request->maxValue) {
            @$query['MaxValue'] = $request->maxValue;
        }

        if (null !== $request->minValue) {
            @$query['MinValue'] = $request->minValue;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->recurrenceEndTime) {
            @$query['RecurrenceEndTime'] = $request->recurrenceEndTime;
        }

        if (null !== $request->recurrenceType) {
            @$query['RecurrenceType'] = $request->recurrenceType;
        }

        if (null !== $request->recurrenceValue) {
            @$query['RecurrenceValue'] = $request->recurrenceValue;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->scheduledAction) {
            @$query['ScheduledAction'] = $request->scheduledAction;
        }

        if (null !== $request->scheduledTaskId) {
            @$query['ScheduledTaskId'] = $request->scheduledTaskId;
        }

        if (null !== $request->scheduledTaskName) {
            @$query['ScheduledTaskName'] = $request->scheduledTaskName;
        }

        if (null !== $request->taskEnabled) {
            @$query['TaskEnabled'] = $request->taskEnabled;
        }

        if (null !== $request->warmPoolCapacityOptions) {
            @$query['WarmPoolCapacityOptions'] = $request->warmPoolCapacityOptions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyScheduledTask',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration parameters of an existing scheduled task. You can specify the scheduled task ID to modify parameters such as the scaling rule to be executed, the number of instances in the scaling group, the task execution frequency, and the retry policy.
     *
     * @remarks
     * Scheduled tasks support two scaling methods:
     * - Set the scaling rule to be executed by using the ScheduledAction parameter.
     * - Set the number of instances in the scaling group by using the ScalingGroupId parameter.
     * > You cannot specify both ScheduledAction and ScalingGroupId at the same time.
     *
     * @param request - ModifyScheduledTaskRequest
     *
     * @returns ModifyScheduledTaskResponse
     *
     * @param ModifyScheduledTaskRequest $request
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the historical monitoring data of a scaling group that uses predictive scaling rules.
     *
     * @param request - QueryHistoricalMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryHistoricalMetricResponse
     *
     * @param QueryHistoricalMetricRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryHistoricalMetricResponse
     */
    public function queryHistoricalMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryHistoricalMetric',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryHistoricalMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical monitoring data of a scaling group that uses predictive scaling rules.
     *
     * @param request - QueryHistoricalMetricRequest
     *
     * @returns QueryHistoricalMetricResponse
     *
     * @param QueryHistoricalMetricRequest $request
     *
     * @return QueryHistoricalMetricResponse
     */
    public function queryHistoricalMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHistoricalMetricWithOptions($request, $runtime);
    }

    /**
     * Queries predictive monitoring data.
     *
     * @param request - QueryPredictiveMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPredictiveMetricResponse
     *
     * @param QueryPredictiveMetricRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPredictiveMetricResponse
     */
    public function queryPredictiveMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPredictiveMetric',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPredictiveMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries predictive monitoring data.
     *
     * @param request - QueryPredictiveMetricRequest
     *
     * @returns QueryPredictiveMetricResponse
     *
     * @param QueryPredictiveMetricRequest $request
     *
     * @return QueryPredictiveMetricResponse
     */
    public function queryPredictiveMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPredictiveMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a prediction task.
     *
     * @param request - QueryPredictiveTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPredictiveTaskInfoResponse
     *
     * @param QueryPredictiveTaskInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryPredictiveTaskInfoResponse
     */
    public function queryPredictiveTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
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

        if (null !== $request->scalingRuleId) {
            @$query['ScalingRuleId'] = $request->scalingRuleId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPredictiveTaskInfo',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPredictiveTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a prediction task.
     *
     * @param request - QueryPredictiveTaskInfoRequest
     *
     * @returns QueryPredictiveTaskInfoResponse
     *
     * @param QueryPredictiveTaskInfoRequest $request
     *
     * @return QueryPredictiveTaskInfoResponse
     */
    public function queryPredictiveTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPredictiveTaskInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the predicted number of instances in a scaling group.
     *
     * @param request - QueryPredictiveValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPredictiveValueResponse
     *
     * @param QueryPredictiveValueRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryPredictiveValueResponse
     */
    public function queryPredictiveValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->targetValue) {
            @$query['TargetValue'] = $request->targetValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPredictiveValue',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPredictiveValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the predicted number of instances in a scaling group.
     *
     * @param request - QueryPredictiveValueRequest
     *
     * @returns QueryPredictiveValueResponse
     *
     * @param QueryPredictiveValueRequest $request
     *
     * @return QueryPredictiveValueResponse
     */
    public function queryPredictiveValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPredictiveValueWithOptions($request, $runtime);
    }

    /**
     * Rebalances the distribution of ECS instances in a multi-zone scaling group if the number of instances across zones is unbalanced due to insufficient inventory or other reasons.
     *
     * @remarks
     * ## Operation description
     * Rebalancing compensates for unbalanced zones by creating new ECS instances to replace existing ones. New ECS instances are started before existing ones are stopped. Rebalancing does not affect the performance or availability of your applications.
     * - This operation is supported only for multi-zone scaling groups whose `MultiAZPolicy` is set to `BALANCE`. It is used to balance the distribution of ECS instances across multiple zones.
     * - You can perform a rebalancing operation only when the instance distribution in the scaling group is severely unbalanced. A single rebalancing activity can replace up to 20 ECS instances.
     * - During a rebalancing activity, if the number of instances in the scaling group approaches or reaches the specified maximum number of ECS instances (MaxSize) but the distribution still needs to be balanced, Auto Scaling allows the number of ECS instances to temporarily exceed MaxSize by 10%. This temporary excess lasts until the distribution is balanced, typically for 1 to 6 minutes.
     *    > If 10% of the maximum number of instances in the scaling group is not an integer, the decimal part is rounded up to allow an excess of 1 instance. For example, if the maximum number of instances in the scaling group is 15, 10% is 1.5, and the temporary excess allowed is 2 instances.
     *
     * @param request - RebalanceInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebalanceInstancesResponse
     *
     * @param RebalanceInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RebalanceInstancesResponse
     */
    public function rebalanceInstancesWithOptions($request, $runtime)
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebalanceInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebalanceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebalances the distribution of ECS instances in a multi-zone scaling group if the number of instances across zones is unbalanced due to insufficient inventory or other reasons.
     *
     * @remarks
     * ## Operation description
     * Rebalancing compensates for unbalanced zones by creating new ECS instances to replace existing ones. New ECS instances are started before existing ones are stopped. Rebalancing does not affect the performance or availability of your applications.
     * - This operation is supported only for multi-zone scaling groups whose `MultiAZPolicy` is set to `BALANCE`. It is used to balance the distribution of ECS instances across multiple zones.
     * - You can perform a rebalancing operation only when the instance distribution in the scaling group is severely unbalanced. A single rebalancing activity can replace up to 20 ECS instances.
     * - During a rebalancing activity, if the number of instances in the scaling group approaches or reaches the specified maximum number of ECS instances (MaxSize) but the distribution still needs to be balanced, Auto Scaling allows the number of ECS instances to temporarily exceed MaxSize by 10%. This temporary excess lasts until the distribution is balanced, typically for 1 to 6 minutes.
     *    > If 10% of the maximum number of instances in the scaling group is not an integer, the decimal part is rounded up to allow an excess of 1 instance. For example, if the maximum number of instances in the scaling group is 15, 10% is 1.5, and the temporary excess allowed is 2 instances.
     *
     * @param request - RebalanceInstancesRequest
     *
     * @returns RebalanceInstancesResponse
     *
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
     * Extends the suspension period of an ECS instance that is suspended after a lifecycle hook is triggered in a scaling group. If the default wait time of the suspended ECS instance is insufficient for your custom operations, you can call this operation to extend the suspension period by specifying the lifecycle hook ID, the wait state token of the scaling activity, and the new wait time.
     *
     * @remarks
     * You can call this operation to extend the wait time only when the ECS instance is suspended.
     * The wait time of an ECS instance cannot exceed 6 hours, and each wait state can be extended up to 20 times.
     *
     * @param request - RecordLifecycleActionHeartbeatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecordLifecycleActionHeartbeatResponse
     *
     * @param RecordLifecycleActionHeartbeatRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RecordLifecycleActionHeartbeatResponse
     */
    public function recordLifecycleActionHeartbeatWithOptions($request, $runtime)
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

        if (null !== $request->heartbeatTimeout) {
            @$query['heartbeatTimeout'] = $request->heartbeatTimeout;
        }

        if (null !== $request->lifecycleActionToken) {
            @$query['lifecycleActionToken'] = $request->lifecycleActionToken;
        }

        if (null !== $request->lifecycleHookId) {
            @$query['lifecycleHookId'] = $request->lifecycleHookId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecordLifecycleActionHeartbeat',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecordLifecycleActionHeartbeatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Extends the suspension period of an ECS instance that is suspended after a lifecycle hook is triggered in a scaling group. If the default wait time of the suspended ECS instance is insufficient for your custom operations, you can call this operation to extend the suspension period by specifying the lifecycle hook ID, the wait state token of the scaling activity, and the new wait time.
     *
     * @remarks
     * You can call this operation to extend the wait time only when the ECS instance is suspended.
     * The wait time of an ECS instance cannot exceed 6 hours, and each wait state can be extended up to 20 times.
     *
     * @param request - RecordLifecycleActionHeartbeatRequest
     *
     * @returns RecordLifecycleActionHeartbeatResponse
     *
     * @param RecordLifecycleActionHeartbeatRequest $request
     *
     * @return RecordLifecycleActionHeartbeatResponse
     */
    public function recordLifecycleActionHeartbeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordLifecycleActionHeartbeatWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more unneeded instances from a scaling group. You can invoke the RemoveInstances API operation to delete instances when the scaling group is in the enabled state and no scaling activity is in progress.
     *
     * @remarks
     * - Before you invoke this operation, make sure that the following conditions are met:
     *     - The scaling group is in the enabled (Active) state.
     *     - No scaling activity is in progress in the scaling group.
     * > If no scaling activity is in progress in the scaling group, the system can bypass the cooldown time (DefaultCooldown) and execute this operation directly.
     * - If an ECS instance was created by Auto Scaling, or was manually added but managed by the scaling group, the ECS instance triggers the economical mode or is released when you remove the ECS instance from the scaling group.
     * - If an ECS instance was manually added and is not managed by the scaling group, the ECS instance is not stopped or released when you remove the ECS instance from the scaling group.
     * - If the current number of instances in the scaling group (TotalCapacity) minus the number of instances specified in this operation is less than the minimum number of instances (MinSize) in the scaling group, the attempt to invoke the operation fails.
     * A successful response only indicates that the Auto Scaling service has accepted the request and the scaling activity can be executed. It does not mean that the scaling activity will be executed successfully. You must use the returned ScalingActivityId to check the execution status of the scaling activity.
     *
     * @param tmpReq - RemoveInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveInstancesResponse
     *
     * @param RemoveInstancesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveInstancesResponse
     */
    public function removeInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lifecycleHookContext) {
            $request->lifecycleHookContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lifecycleHookContext, 'LifecycleHookContext', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->decreaseDesiredCapacity) {
            @$query['DecreaseDesiredCapacity'] = $request->decreaseDesiredCapacity;
        }

        if (null !== $request->ignoreInvalidInstance) {
            @$query['IgnoreInvalidInstance'] = $request->ignoreInvalidInstance;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->lifecycleHookContextShrink) {
            @$query['LifecycleHookContext'] = $request->lifecycleHookContextShrink;
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

        if (null !== $request->removePolicy) {
            @$query['RemovePolicy'] = $request->removePolicy;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->stopInstanceTimeout) {
            @$query['StopInstanceTimeout'] = $request->stopInstanceTimeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveInstances',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more unneeded instances from a scaling group. You can invoke the RemoveInstances API operation to delete instances when the scaling group is in the enabled state and no scaling activity is in progress.
     *
     * @remarks
     * - Before you invoke this operation, make sure that the following conditions are met:
     *     - The scaling group is in the enabled (Active) state.
     *     - No scaling activity is in progress in the scaling group.
     * > If no scaling activity is in progress in the scaling group, the system can bypass the cooldown time (DefaultCooldown) and execute this operation directly.
     * - If an ECS instance was created by Auto Scaling, or was manually added but managed by the scaling group, the ECS instance triggers the economical mode or is released when you remove the ECS instance from the scaling group.
     * - If an ECS instance was manually added and is not managed by the scaling group, the ECS instance is not stopped or released when you remove the ECS instance from the scaling group.
     * - If the current number of instances in the scaling group (TotalCapacity) minus the number of instances specified in this operation is less than the minimum number of instances (MinSize) in the scaling group, the attempt to invoke the operation fails.
     * A successful response only indicates that the Auto Scaling service has accepted the request and the scaling activity can be executed. It does not mean that the scaling activity will be executed successfully. You must use the returned ScalingActivityId to check the execution status of the scaling activity.
     *
     * @param request - RemoveInstancesRequest
     *
     * @returns RemoveInstancesResponse
     *
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
     * Resumes an instance refresh task.
     *
     * @param request - ResumeInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeInstanceRefreshResponse
     *
     * @param ResumeInstanceRefreshRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResumeInstanceRefreshResponse
     */
    public function resumeInstanceRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceRefreshTaskId) {
            @$query['InstanceRefreshTaskId'] = $request->instanceRefreshTaskId;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeInstanceRefresh',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes an instance refresh task.
     *
     * @param request - ResumeInstanceRefreshRequest
     *
     * @returns ResumeInstanceRefreshResponse
     *
     * @param ResumeInstanceRefreshRequest $request
     *
     * @return ResumeInstanceRefreshResponse
     */
    public function resumeInstanceRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceRefreshWithOptions($request, $runtime);
    }

    /**
     * Resumes suspended processes in a scaling group so that the scaling group continues to execute the specified processes based on functional logic. For example, if you resume the health check process, an instance in the scaling group is automatically removed from the scaling group when it is considered unhealthy.
     *
     * @param request - ResumeProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeProcessesResponse
     *
     * @param ResumeProcessesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResumeProcessesResponse
     */
    public function resumeProcessesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->processes) {
            @$query['Processes'] = $request->processes;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeProcesses',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes suspended processes in a scaling group so that the scaling group continues to execute the specified processes based on functional logic. For example, if you resume the health check process, an instance in the scaling group is automatically removed from the scaling group when it is considered unhealthy.
     *
     * @param request - ResumeProcessesRequest
     *
     * @returns ResumeProcessesResponse
     *
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
     * Rolls back an instance refresh task if the desired configuration does not meet your requirements during task execution. During the rollback, the system uses the active configuration of the scaling group to create new instances to replace those created based on the desired configuration.
     *
     * @param request - RollbackInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackInstanceRefreshResponse
     *
     * @param RollbackInstanceRefreshRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RollbackInstanceRefreshResponse
     */
    public function rollbackInstanceRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceRefreshTaskId) {
            @$query['InstanceRefreshTaskId'] = $request->instanceRefreshTaskId;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackInstanceRefresh',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back an instance refresh task if the desired configuration does not meet your requirements during task execution. During the rollback, the system uses the active configuration of the scaling group to create new instances to replace those created based on the desired configuration.
     *
     * @param request - RollbackInstanceRefreshRequest
     *
     * @returns RollbackInstanceRefreshResponse
     *
     * @param RollbackInstanceRefreshRequest $request
     *
     * @return RollbackInstanceRefreshResponse
     */
    public function rollbackInstanceRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackInstanceRefreshWithOptions($request, $runtime);
    }

    /**
     * Unlike the ExecuteScalingRule API, you can use the ScaleWithAdjustment API to trigger elastic scaling based on a specified adjustment rule, without first creating a scaling rule.
     *
     * @remarks
     * - Ensure the following conditions are met before calling this operation:
     *   - The scaling group is in the Active state.
     *   - No scaling activities are in progress in the scaling group.
     * - This operation bypasses the cooldown to immediately execute a scaling activity, provided no other scaling activities are in progress.
     * - If adding the specified ECS instances would cause the total capacity to exceed the maximum size, Auto Scaling sets the total capacity to the maximum size.
     * - If removing the specified ECS instances would reduce the total capacity below the minimum size, Auto Scaling sets the total capacity to the minimum size.
     * A successful response indicates that the API request was accepted, but this does not guarantee that the scaling activity will succeed. You must use the returned `ScalingActivityId` to check the status of the scaling activity.
     *
     * @param tmpReq - ScaleWithAdjustmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleWithAdjustmentResponse
     *
     * @param ScaleWithAdjustmentRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ScaleWithAdjustmentResponse
     */
    public function scaleWithAdjustmentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ScaleWithAdjustmentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->lifecycleHookContext) {
            $request->lifecycleHookContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->lifecycleHookContext, 'LifecycleHookContext', 'json');
        }

        if (null !== $tmpReq->overrides) {
            $request->overridesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->overrides, 'Overrides', 'json');
        }

        $query = [];
        if (null !== $request->activityMetadata) {
            @$query['ActivityMetadata'] = $request->activityMetadata;
        }

        if (null !== $request->adjustmentType) {
            @$query['AdjustmentType'] = $request->adjustmentType;
        }

        if (null !== $request->adjustmentValue) {
            @$query['AdjustmentValue'] = $request->adjustmentValue;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->executionMode) {
            @$query['ExecutionMode'] = $request->executionMode;
        }

        if (null !== $request->lifecycleHookContextShrink) {
            @$query['LifecycleHookContext'] = $request->lifecycleHookContextShrink;
        }

        if (null !== $request->minAdjustmentMagnitude) {
            @$query['MinAdjustmentMagnitude'] = $request->minAdjustmentMagnitude;
        }

        if (null !== $request->overridesShrink) {
            @$query['Overrides'] = $request->overridesShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parallelTask) {
            @$query['ParallelTask'] = $request->parallelTask;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->syncActivity) {
            @$query['SyncActivity'] = $request->syncActivity;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScaleWithAdjustment',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScaleWithAdjustmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlike the ExecuteScalingRule API, you can use the ScaleWithAdjustment API to trigger elastic scaling based on a specified adjustment rule, without first creating a scaling rule.
     *
     * @remarks
     * - Ensure the following conditions are met before calling this operation:
     *   - The scaling group is in the Active state.
     *   - No scaling activities are in progress in the scaling group.
     * - This operation bypasses the cooldown to immediately execute a scaling activity, provided no other scaling activities are in progress.
     * - If adding the specified ECS instances would cause the total capacity to exceed the maximum size, Auto Scaling sets the total capacity to the maximum size.
     * - If removing the specified ECS instances would reduce the total capacity below the minimum size, Auto Scaling sets the total capacity to the minimum size.
     * A successful response indicates that the API request was accepted, but this does not guarantee that the scaling activity will succeed. You must use the returned `ScalingActivityId` to check the status of the scaling activity.
     *
     * @param request - ScaleWithAdjustmentRequest
     *
     * @returns ScaleWithAdjustmentResponse
     *
     * @param ScaleWithAdjustmentRequest $request
     *
     * @return ScaleWithAdjustmentResponse
     */
    public function scaleWithAdjustment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scaleWithAdjustmentWithOptions($request, $runtime);
    }

    /**
     * Sets deletion protection for a scaling group. If you enable deletion protection for a scaling group, you cannot delete the scaling group. If you disable deletion protection for a scaling group, you can directly delete the scaling group. You can call the SetGroupDeletionProtection operation to enable or disable deletion protection.
     *
     * @param request - SetGroupDeletionProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetGroupDeletionProtectionResponse
     *
     * @param SetGroupDeletionProtectionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetGroupDeletionProtectionResponse
     */
    public function setGroupDeletionProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupDeletionProtection) {
            @$query['GroupDeletionProtection'] = $request->groupDeletionProtection;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetGroupDeletionProtection',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetGroupDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets deletion protection for a scaling group. If you enable deletion protection for a scaling group, you cannot delete the scaling group. If you disable deletion protection for a scaling group, you can directly delete the scaling group. You can call the SetGroupDeletionProtection operation to enable or disable deletion protection.
     *
     * @param request - SetGroupDeletionProtectionRequest
     *
     * @returns SetGroupDeletionProtectionResponse
     *
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
     * Sets the health status of an ECS instance or an Elastic Container Instance (ECI) in a scaling group. In some cases, automatic health checks may not accurately detect the health status of ECS or ECI instances. Manually setting the health status enables quick identification and handling of faulty instances to better meet actual business and O&M requirements.
     *
     * @remarks
     * A scaling group detects and removes ECS instances or ECI instances that are in the unhealthy state. To retain specific ECS or ECI instances, put the instances into the standby state or protection status. For more information, see [EnterStandby](https://help.aliyun.com/document_detail/459345.html) and [SetInstancesProtection](https://help.aliyun.com/document_detail/459342.html).
     *
     * @param request - SetInstanceHealthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetInstanceHealthResponse
     *
     * @param SetInstanceHealthRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetInstanceHealthResponse
     */
    public function setInstanceHealthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->healthStatus) {
            @$query['HealthStatus'] = $request->healthStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetInstanceHealth',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetInstanceHealthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the health status of an ECS instance or an Elastic Container Instance (ECI) in a scaling group. In some cases, automatic health checks may not accurately detect the health status of ECS or ECI instances. Manually setting the health status enables quick identification and handling of faulty instances to better meet actual business and O&M requirements.
     *
     * @remarks
     * A scaling group detects and removes ECS instances or ECI instances that are in the unhealthy state. To retain specific ECS or ECI instances, put the instances into the standby state or protection status. For more information, see [EnterStandby](https://help.aliyun.com/document_detail/459345.html) and [SetInstancesProtection](https://help.aliyun.com/document_detail/459342.html).
     *
     * @param request - SetInstanceHealthRequest
     *
     * @returns SetInstanceHealthResponse
     *
     * @param SetInstanceHealthRequest $request
     *
     * @return SetInstanceHealthResponse
     */
    public function setInstanceHealth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceHealthWithOptions($request, $runtime);
    }

    /**
     * Sets or removes the protection status for one or more ECS instances in a scaling group. After the protection feature is enabled for an ECS instance, the instance is not terminated or released during automatic scale-in of the scaling group. The instance can only be manually removed from the console or by calling the RemoveInstances operation.
     *
     * @remarks
     * After the protection status is enabled for an ECS instance:
     * - The instance remains in this state until you disable the protection status.
     * - The protected ECS instance is not removed even if changes in the number of instances in the scaling group or monitoring tasks trigger a scaling activity for automatic scale-in. You must remove the ECS instance before you can release it. For more information, see [Remove ECS instances](https://help.aliyun.com/document_detail/459393.html).
     * - The health check status of the ECS instance is not updated when the instance is stopped or restarted.
     *
     * @param request - SetInstancesProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetInstancesProtectionResponse
     *
     * @param SetInstancesProtectionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetInstancesProtectionResponse
     */
    public function setInstancesProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->protectedFromScaleIn) {
            @$query['ProtectedFromScaleIn'] = $request->protectedFromScaleIn;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetInstancesProtection',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetInstancesProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets or removes the protection status for one or more ECS instances in a scaling group. After the protection feature is enabled for an ECS instance, the instance is not terminated or released during automatic scale-in of the scaling group. The instance can only be manually removed from the console or by calling the RemoveInstances operation.
     *
     * @remarks
     * After the protection status is enabled for an ECS instance:
     * - The instance remains in this state until you disable the protection status.
     * - The protected ECS instance is not removed even if changes in the number of instances in the scaling group or monitoring tasks trigger a scaling activity for automatic scale-in. You must remove the ECS instance before you can release it. For more information, see [Remove ECS instances](https://help.aliyun.com/document_detail/459393.html).
     * - The health check status of the ECS instance is not updated when the instance is stopped or restarted.
     *
     * @param request - SetInstancesProtectionRequest
     *
     * @returns SetInstancesProtectionResponse
     *
     * @param SetInstancesProtectionRequest $request
     *
     * @return SetInstancesProtectionResponse
     */
    public function setInstancesProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstancesProtectionWithOptions($request, $runtime);
    }

    /**
     * Refreshes the instances in a scaling group to apply a new scaling configuration or update the images of the instances.
     *
     * @remarks
     * - A scaling group can have only one running instance refresh node at a time.
     * - This feature is supported only for ECS scaling groups that use the **priority policy** as the scale-out policy. Scaling groups that use the **number of vCPUs to calculate the capacity of the scaling group** and scaling groups whose instance revoke pattern is set to **shutdown revoke pattern** or **forced shutdown revoke pattern** do not support this feature.
     * - During an instance refresh, normal scale-out and scale-in activities can be performed. However, scale-out activities use the desired configuration specified for the instance refresh.
     * - Instances that are manually added to the scaling group, or are in the standby state or protection status are ignored by the instance refresh node and are not refreshed.
     *
     * @param request - StartInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceRefreshResponse
     *
     * @param StartInstanceRefreshRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartInstanceRefreshResponse
     */
    public function startInstanceRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkpointPauseTime) {
            @$query['CheckpointPauseTime'] = $request->checkpointPauseTime;
        }

        if (null !== $request->checkpoints) {
            @$query['Checkpoints'] = $request->checkpoints;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->desiredConfiguration) {
            @$query['DesiredConfiguration'] = $request->desiredConfiguration;
        }

        if (null !== $request->maxHealthyPercentage) {
            @$query['MaxHealthyPercentage'] = $request->maxHealthyPercentage;
        }

        if (null !== $request->minHealthyPercentage) {
            @$query['MinHealthyPercentage'] = $request->minHealthyPercentage;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->skipMatching) {
            @$query['SkipMatching'] = $request->skipMatching;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstanceRefresh',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Refreshes the instances in a scaling group to apply a new scaling configuration or update the images of the instances.
     *
     * @remarks
     * - A scaling group can have only one running instance refresh node at a time.
     * - This feature is supported only for ECS scaling groups that use the **priority policy** as the scale-out policy. Scaling groups that use the **number of vCPUs to calculate the capacity of the scaling group** and scaling groups whose instance revoke pattern is set to **shutdown revoke pattern** or **forced shutdown revoke pattern** do not support this feature.
     * - During an instance refresh, normal scale-out and scale-in activities can be performed. However, scale-out activities use the desired configuration specified for the instance refresh.
     * - Instances that are manually added to the scaling group, or are in the standby state or protection status are ignored by the instance refresh node and are not refreshed.
     *
     * @param request - StartInstanceRefreshRequest
     *
     * @returns StartInstanceRefreshResponse
     *
     * @param StartInstanceRefreshRequest $request
     *
     * @return StartInstanceRefreshResponse
     */
    public function startInstanceRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceRefreshWithOptions($request, $runtime);
    }

    /**
     * Enables zone fault degradation for a scaling group.
     *
     * @param request - StartScalingGroupZoneShiftRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartScalingGroupZoneShiftResponse
     *
     * @param StartScalingGroupZoneShiftRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return StartScalingGroupZoneShiftResponse
     */
    public function startScalingGroupZoneShiftWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->expiryTime) {
            @$query['ExpiryTime'] = $request->expiryTime;
        }

        if (null !== $request->impairedZoneIds) {
            @$query['ImpairedZoneIds'] = $request->impairedZoneIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartScalingGroupZoneShift',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartScalingGroupZoneShiftResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables zone fault degradation for a scaling group.
     *
     * @param request - StartScalingGroupZoneShiftRequest
     *
     * @returns StartScalingGroupZoneShiftResponse
     *
     * @param StartScalingGroupZoneShiftRequest $request
     *
     * @return StartScalingGroupZoneShiftResponse
     */
    public function startScalingGroupZoneShift($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startScalingGroupZoneShiftWithOptions($request, $runtime);
    }

    /**
     * Suspends an instance refresh task. If you are not sure that you want to roll back an ongoing instance refresh task whose configurations you think has an issue, you can call the SuspendInstanceRefresh operation to suspend the task.
     *
     * @remarks
     *   You cannot call this operation to suspend an instance refresh task that is being rolled back.
     *
     * @param request - SuspendInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendInstanceRefreshResponse
     *
     * @param SuspendInstanceRefreshRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SuspendInstanceRefreshResponse
     */
    public function suspendInstanceRefreshWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceRefreshTaskId) {
            @$query['InstanceRefreshTaskId'] = $request->instanceRefreshTaskId;
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

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendInstanceRefresh',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends an instance refresh task. If you are not sure that you want to roll back an ongoing instance refresh task whose configurations you think has an issue, you can call the SuspendInstanceRefresh operation to suspend the task.
     *
     * @remarks
     *   You cannot call this operation to suspend an instance refresh task that is being rolled back.
     *
     * @param request - SuspendInstanceRefreshRequest
     *
     * @returns SuspendInstanceRefreshResponse
     *
     * @param SuspendInstanceRefreshRequest $request
     *
     * @return SuspendInstanceRefreshResponse
     */
    public function suspendInstanceRefresh($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendInstanceRefreshWithOptions($request, $runtime);
    }

    /**
     * Suspends scaling processes. This operation empowers you to selectively pause distinct scaling processes within a particular scaling group, enabling you to carry out alternative tasks and achieve more granular management over your scaling operations.
     *
     * @param request - SuspendProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendProcessesResponse
     *
     * @param SuspendProcessesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SuspendProcessesResponse
     */
    public function suspendProcessesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->processes) {
            @$query['Processes'] = $request->processes;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendProcesses',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends scaling processes. This operation empowers you to selectively pause distinct scaling processes within a particular scaling group, enabling you to carry out alternative tasks and achieve more granular management over your scaling operations.
     *
     * @param request - SuspendProcessesRequest
     *
     * @returns SuspendProcessesResponse
     *
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
     * Creates and adds tags. You can call the TagResources operation to uniformly create and attach tags to your Auto Scaling resources, streamlining resource management. This capability empowers you to categorize resources based on tags, thereby enhancing the overall efficiency of resource allocation and utilization.
     *
     * @remarks
     *   You can attach up to 20 tags to a scaling group.
     *     **
     *     **Note** Before you attach tags to a specific Auto Scaling resource, Alibaba Cloud automatically verifies the current number of tags attached to that resource. In the event the proposed addition would exceed the maximum allowed number of tags, an error message will be promptly returned after you call this operation.
     * *   If you set `Tags.Propagate` to `true`, any tags attached to your scaling group will be automatically propagated to new instances that are subsequently created in the scaling group, without affecting existing instances.
     * *   If both the scaling configuration and the scaling group have tags attached, and tag propagation from the scaling group is enabled, the tags of newly created instances comply with the following rules:
     *     *   Instances set to join the scaling group will inherit the following tags: tags attached to the scaling configuration that initiates the instance creation and tags attached to the scaling group that are allowed to propagate to these instances upon instance creation.
     *     *   If the tag keys of the scaling configuration and those attached to the scaling group and propagated to the instances are identical, the tags attached to the scaling group and propagated to the instances will be overwritten by the tags of the scaling configuration.
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
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-02-22',
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
     * Creates and adds tags. You can call the TagResources operation to uniformly create and attach tags to your Auto Scaling resources, streamlining resource management. This capability empowers you to categorize resources based on tags, thereby enhancing the overall efficiency of resource allocation and utilization.
     *
     * @remarks
     *   You can attach up to 20 tags to a scaling group.
     *     **
     *     **Note** Before you attach tags to a specific Auto Scaling resource, Alibaba Cloud automatically verifies the current number of tags attached to that resource. In the event the proposed addition would exceed the maximum allowed number of tags, an error message will be promptly returned after you call this operation.
     * *   If you set `Tags.Propagate` to `true`, any tags attached to your scaling group will be automatically propagated to new instances that are subsequently created in the scaling group, without affecting existing instances.
     * *   If both the scaling configuration and the scaling group have tags attached, and tag propagation from the scaling group is enabled, the tags of newly created instances comply with the following rules:
     *     *   Instances set to join the scaling group will inherit the following tags: tags attached to the scaling configuration that initiates the instance creation and tags attached to the scaling group that are allowed to propagate to these instances upon instance creation.
     *     *   If the tag keys of the scaling configuration and those attached to the scaling group and propagated to the instances are identical, the tags attached to the scaling group and propagated to the instances will be overwritten by the tags of the scaling configuration.
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
     * Removes tags from Auto Scaling resources simultaneously. This operation streamlines resource management activities, enhances system efficiency, and mitigates potential security vulnerabilities. Once a tag is removed from a particular resource, and if it is not re-added to any other resource, the system will automatically delete the unused tag.
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

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2022-02-22',
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
     * Removes tags from Auto Scaling resources simultaneously. This operation streamlines resource management activities, enhances system efficiency, and mitigates potential security vulnerabilities. Once a tag is removed from a particular resource, and if it is not re-added to any other resource, the system will automatically delete the unused tag.
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
     * Checks whether the account has the AliyunServiceRoleForAutoScaling service-linked role by calling VerifyAuthentication and specifying the Alibaba Cloud account ID. This role is used to authorize Auto Scaling to manage ECS and ECI resources.
     *
     * @param request - VerifyAuthenticationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyAuthenticationResponse
     *
     * @param VerifyAuthenticationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyAuthenticationResponse
     */
    public function verifyAuthenticationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->onlyCheck) {
            @$query['OnlyCheck'] = $request->onlyCheck;
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

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyAuthentication',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the account has the AliyunServiceRoleForAutoScaling service-linked role by calling VerifyAuthentication and specifying the Alibaba Cloud account ID. This role is used to authorize Auto Scaling to manage ECS and ECI resources.
     *
     * @param request - VerifyAuthenticationRequest
     *
     * @returns VerifyAuthenticationResponse
     *
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
     * Verifies whether Auto Scaling is activated. This operation guarantees that in response to shifts in business workloads or variations in incoming traffic, the system will automatically adjust resource provisioning. This auto-scaling capability enhances the overall system performance, ensuring high availability and improved flexibility to accommodate dynamic demands.
     *
     * @param request - VerifyUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyUserResponse
     *
     * @param VerifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return VerifyUserResponse
     */
    public function verifyUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyUser',
            'version' => '2022-02-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies whether Auto Scaling is activated. This operation guarantees that in response to shifts in business workloads or variations in incoming traffic, the system will automatically adjust resource provisioning. This auto-scaling capability enhances the overall system performance, ensuring high availability and improved flexibility to accommodate dynamic demands.
     *
     * @param request - VerifyUserRequest
     *
     * @returns VerifyUserResponse
     *
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
