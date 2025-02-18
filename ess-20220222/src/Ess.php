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
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeDiagnoseReportsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeElasticStrengthResponse;
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
use AlibabaCloud\SDK\Ess\V20220222\Models\RebalanceInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RebalanceInstancesResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RecordLifecycleActionHeartbeatRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RecordLifecycleActionHeartbeatResponse;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Applies a scaling configuration of the Elastic Container Instance type. If you want to create and manage scaling configurations of the Elastic Container Instance type by using a configuration file, you can call the ApplyEciScalingConfiguration operation.
     *
     * @remarks
     * Before you use a YAML configuration file to manage scaling configurations of the Elastic Container Instance type, you must take note of the following items:
     * *   If you include a scaling configuration ID within your request, the system updates the scaling configuration based on the YAML configuration file.
     * *   If you do not include a scaling configuration ID within your request, the system creates a scaling configuration of the Elastic Container Instance type based on the YAML configuration file.
     *
     * @param request - ApplyEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyEciScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Applies a scaling configuration of the Elastic Container Instance type. If you want to create and manage scaling configurations of the Elastic Container Instance type by using a configuration file, you can call the ApplyEciScalingConfiguration operation.
     *
     * @remarks
     * Before you use a YAML configuration file to manage scaling configurations of the Elastic Container Instance type, you must take note of the following items:
     * *   If you include a scaling configuration ID within your request, the system updates the scaling configuration based on the YAML configuration file.
     * *   If you do not include a scaling configuration ID within your request, the system creates a scaling configuration of the Elastic Container Instance type based on the YAML configuration file.
     *
     * @param request - ApplyEciScalingConfigurationRequest
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
     * Creates and manages scaling groups by using configuration files. You can call the ApplyScalingGroup operation to create and manage scaling groups by using configuration files with efficiency.
     *
     * @remarks
     * You can call the ApplyScalingGroup operation to create scaling groups of the Elastic Container Instance type with ease. The resources of the scaling groups are defined in Kubernetes Deployment YAML files. You can also call this operation to extend annotations for elastic container instances in Kubernetes Deployment YAML files. For more information, see "Supported annotations" in this topic.
     * Mapping between YAML files and scaling groups: You can map the triplet of namespace, kind, and name in a YAML file to a scaling group name. A YAML file and a scaling group have a one-to-one mapping relationship in a region. For example, if you use the Kubernetes Deployment YAML file whose name is NGINX in the default namespace to create a scaling group in a region, the unique name of the mapped scaling group is k8s_default_Deployment_nginx.
     * You can use a Kubernetes Deployment YAML file to manage a scaling group based on the following logic:
     * * If an existing scaling group has a mapping relationship with your Kubernetes Deployment YAML file, you can update the scaling group by using the YAML file.
     * * If no scaling group that has a mapping relationship with your Kubernetes Deployment YAML file exists, you can create a scaling group with ease by using the YAML file.
     * 1. If you do not specify a virtual private cloud (VPC), vSwitch, security group, or annotation in your Kubernetes Deployment YAML file, the system creates a default VPC that has default vSwitches and uses the default security group ess-default-sg of Auto Scaling. By default, the security group rule allows traffic on Transmission Control Protocol (TCP)-based port 22 and port 3389 and enables Internet Control Message Protocol (ICMP) for IPv4 addresses. If you want to enable other ports or protocols, you can create custom security group rules.
     * 2. If you want to use a public image, you must enable the Internet access feature and configure the k8s.aliyun.com/eci-with-eip pod annotation to enable the elastic IP address (EIP) feature.
     * 3. After you call the ApplyScalingGroup operation to apply a Kubernetes Deployment YAML file, the scaling group immediately enters the Enabled state and the scaling configuration immediately enters the Active state. If the number of replicas that you specified in the YAML file is grater than 0, elastic container instances are automatically created.
     * ### Supported annotations
     * For more information about annotations, see [ECI Pod Annotation](https://help.aliyun.com/document_detail/186939.html).
     * |Annotation|Example|Description|
     * |---|---|---|
     * |k8s.aliyun.com/ess-scaling-group-min-size|1|The minimum size of the scaling group that you want to create. Default value: 0.|
     * |k8s.aliyun.com/ess-scaling-group-max-size|20|The maximum size of the scaling group that you want to create. Default value: maximum number of replicas or 30, whichever is greater.|
     * |k8s.aliyun.com/eci-ntp-server|100.100.*.*|The IP address of the Network Time Protocol (NTP) server.|
     * |k8s.aliyun.com/eci-use-specs|2-4Gi|The specifications of 2 vCPUs and 4 GiB of memory. For more information, see [Create pods by specifying multiple specifications](https://help.aliyun.com/document_detail/451267.html).|
     * |k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c\\*\\*\\*\\*|The ID of the vSwitch. You can specify multiple vSwitches to specify multiple zones.|
     * |k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv\\*\\*\\*\\*|The ID of the security group. Before you configure this annotation, take note of the following requirements:<ul data-sourcepos="26:74-26:168"><li data-sourcepos="26:78-26:114">You can specify one or more security groups. You can specify up to five security groups for each scaling group.</li><li data-sourcepos="26:114-26:140">If you specify multiple security groups, the security groups must belong to the same VPC.</li><li data-sourcepos="26:140-26:163">If you specify multiple security groups, the security groups must be of the same type.</li></ul>|
     * |k8s.aliyun.com/eci-sls-enable|"false"|If you set the value to false, the log collection feature is disabled.
     * If you do not want to use Custom Resource Definition (CRD) for Simple Log Service to collect logs of specific pods, you can configure this annotation for the pods and set the value to false. This prevents resource wastes caused by Logtails created by the system.|
     * |k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|The bidding policy for preemptible instances. Valid values:<ul data-sourcepos="28:69-28:204"><li data-sourcepos="28:73-28:158">SpotWithPriceLimit: The instances are created as preemptible instances with a maximum hourly price. If you set the value to SpotWithPriceLimit, you must configure the k8s.aliyun.com/eci-spot-price-limit annotation.</li><li data-sourcepos="28:158-28:199">SpotAsPriceGo: The instances are created as preemptible instances for which the market price at the time of purchase is automatically used as the bid price.</li></ul>|
     * |k8s.aliyun.com/eci-spot-price-limit|"0.5"|The maximum hourly price of preemptible instances. This value can be accurate to up to three decimal places.
     * This annotation takes effect only when you set the k8s.aliyun.com/eci-spot-strategy annotation to SpotWithPriceLimit.|
     * |k8s.aliyun.com/eci-with-eip|"true"|If you set the value to true, an elastic IP address (EIP) is automatically created and bound to each elastic container instance.|
     * |k8s.aliyun.com/eci-data-cache-bucket|default|The bucket of data caches. If you want to create a pod based on data caches, you must configure this annotation.|
     * |k8s.aliyun.com/eci-data-cache-pl|PL1|The performance level (PL) of the cloud disk that you want to create based on data caches.
     * By default, enterprise SSDs (ESSDs) are created. Default value: PL1.|
     * |k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50000, 1000 × Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created based on data caches is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|Specifies whether the Burst feature is enabled for the ESSD AutoPL disk. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created based on data caches is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|The tags that you want to add to each elastic container instance. You can add up to three tags for each elastic container instance. Separate a tag key and a tag value with a colon (:). Separate multiple tags with commas (,).|
     *
     * @param request - ApplyScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyScalingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates and manages scaling groups by using configuration files. You can call the ApplyScalingGroup operation to create and manage scaling groups by using configuration files with efficiency.
     *
     * @remarks
     * You can call the ApplyScalingGroup operation to create scaling groups of the Elastic Container Instance type with ease. The resources of the scaling groups are defined in Kubernetes Deployment YAML files. You can also call this operation to extend annotations for elastic container instances in Kubernetes Deployment YAML files. For more information, see "Supported annotations" in this topic.
     * Mapping between YAML files and scaling groups: You can map the triplet of namespace, kind, and name in a YAML file to a scaling group name. A YAML file and a scaling group have a one-to-one mapping relationship in a region. For example, if you use the Kubernetes Deployment YAML file whose name is NGINX in the default namespace to create a scaling group in a region, the unique name of the mapped scaling group is k8s_default_Deployment_nginx.
     * You can use a Kubernetes Deployment YAML file to manage a scaling group based on the following logic:
     * * If an existing scaling group has a mapping relationship with your Kubernetes Deployment YAML file, you can update the scaling group by using the YAML file.
     * * If no scaling group that has a mapping relationship with your Kubernetes Deployment YAML file exists, you can create a scaling group with ease by using the YAML file.
     * 1. If you do not specify a virtual private cloud (VPC), vSwitch, security group, or annotation in your Kubernetes Deployment YAML file, the system creates a default VPC that has default vSwitches and uses the default security group ess-default-sg of Auto Scaling. By default, the security group rule allows traffic on Transmission Control Protocol (TCP)-based port 22 and port 3389 and enables Internet Control Message Protocol (ICMP) for IPv4 addresses. If you want to enable other ports or protocols, you can create custom security group rules.
     * 2. If you want to use a public image, you must enable the Internet access feature and configure the k8s.aliyun.com/eci-with-eip pod annotation to enable the elastic IP address (EIP) feature.
     * 3. After you call the ApplyScalingGroup operation to apply a Kubernetes Deployment YAML file, the scaling group immediately enters the Enabled state and the scaling configuration immediately enters the Active state. If the number of replicas that you specified in the YAML file is grater than 0, elastic container instances are automatically created.
     * ### Supported annotations
     * For more information about annotations, see [ECI Pod Annotation](https://help.aliyun.com/document_detail/186939.html).
     * |Annotation|Example|Description|
     * |---|---|---|
     * |k8s.aliyun.com/ess-scaling-group-min-size|1|The minimum size of the scaling group that you want to create. Default value: 0.|
     * |k8s.aliyun.com/ess-scaling-group-max-size|20|The maximum size of the scaling group that you want to create. Default value: maximum number of replicas or 30, whichever is greater.|
     * |k8s.aliyun.com/eci-ntp-server|100.100.*.*|The IP address of the Network Time Protocol (NTP) server.|
     * |k8s.aliyun.com/eci-use-specs|2-4Gi|The specifications of 2 vCPUs and 4 GiB of memory. For more information, see [Create pods by specifying multiple specifications](https://help.aliyun.com/document_detail/451267.html).|
     * |k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c\\*\\*\\*\\*|The ID of the vSwitch. You can specify multiple vSwitches to specify multiple zones.|
     * |k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv\\*\\*\\*\\*|The ID of the security group. Before you configure this annotation, take note of the following requirements:<ul data-sourcepos="26:74-26:168"><li data-sourcepos="26:78-26:114">You can specify one or more security groups. You can specify up to five security groups for each scaling group.</li><li data-sourcepos="26:114-26:140">If you specify multiple security groups, the security groups must belong to the same VPC.</li><li data-sourcepos="26:140-26:163">If you specify multiple security groups, the security groups must be of the same type.</li></ul>|
     * |k8s.aliyun.com/eci-sls-enable|"false"|If you set the value to false, the log collection feature is disabled.
     * If you do not want to use Custom Resource Definition (CRD) for Simple Log Service to collect logs of specific pods, you can configure this annotation for the pods and set the value to false. This prevents resource wastes caused by Logtails created by the system.|
     * |k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|The bidding policy for preemptible instances. Valid values:<ul data-sourcepos="28:69-28:204"><li data-sourcepos="28:73-28:158">SpotWithPriceLimit: The instances are created as preemptible instances with a maximum hourly price. If you set the value to SpotWithPriceLimit, you must configure the k8s.aliyun.com/eci-spot-price-limit annotation.</li><li data-sourcepos="28:158-28:199">SpotAsPriceGo: The instances are created as preemptible instances for which the market price at the time of purchase is automatically used as the bid price.</li></ul>|
     * |k8s.aliyun.com/eci-spot-price-limit|"0.5"|The maximum hourly price of preemptible instances. This value can be accurate to up to three decimal places.
     * This annotation takes effect only when you set the k8s.aliyun.com/eci-spot-strategy annotation to SpotWithPriceLimit.|
     * |k8s.aliyun.com/eci-with-eip|"true"|If you set the value to true, an elastic IP address (EIP) is automatically created and bound to each elastic container instance.|
     * |k8s.aliyun.com/eci-data-cache-bucket|default|The bucket of data caches. If you want to create a pod based on data caches, you must configure this annotation.|
     * |k8s.aliyun.com/eci-data-cache-pl|PL1|The performance level (PL) of the cloud disk that you want to create based on data caches.
     * By default, enterprise SSDs (ESSDs) are created. Default value: PL1.|
     * |k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50000, 1000 × Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created based on data caches is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|Specifies whether the Burst feature is enabled for the ESSD AutoPL disk. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created based on data caches is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|The tags that you want to add to each elastic container instance. You can add up to three tags for each elastic container instance. Separate a tag key and a tag value with a colon (:). Separate multiple tags with commas (,).|
     *
     * @param request - ApplyScalingGroupRequest
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
     * Attaches Application Load Balancer (ALB) server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachAlbServerGroups operation. By attaching ALB server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *
     * @remarks
     * Before you call the operation to attach an ALB server group to your scaling group, make sure that the following requirements are met:
     * *   The scaling group and the ALB server group share the same virtual private cloud (VPC).
     * *   The ALB server group is in the Available state.
     *
     * @param request - AttachAlbServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachAlbServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachAlbServerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Attaches Application Load Balancer (ALB) server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachAlbServerGroups operation. By attaching ALB server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *
     * @remarks
     * Before you call the operation to attach an ALB server group to your scaling group, make sure that the following requirements are met:
     * *   The scaling group and the ALB server group share the same virtual private cloud (VPC).
     * *   The ALB server group is in the Available state.
     *
     * @param request - AttachAlbServerGroupsRequest
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
     * Associates one or more ApsaraDB RDS instances with a scaling group.
     *
     * @remarks
     * Before you attach an ApsaraDB RDS instance to a scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     * *   The ApsaraDB RDS instance and the scaling group belong to the same Alibaba Cloud account.
     * *   The ApsaraDB RDS instance is unlocked. For information about the lock policy, see [ApsaraDB RDS usage notes](https://help.aliyun.com/document_detail/41872.html).
     * *   The ApsaraDB RDS instance is in the Running state.
     * *   The ApsaraDB RDS instance exists in the Alibaba Cloud account.
     * *   If you reattach an ApsaraDB RDS instance to a scaling group, the total number of attached ApsaraDB RDS instances of the scaling group remains unchanged. But Auto Scaling adds the private IP addresses of all Elastic Compute Service (ECS) instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance.
     * >  After you attach an ApsaraDB RDS instance to a scaling group, make sure that the number of IP addresses in the default whitelist of the ApsaraDB RDS instance is limited to 1,000. For information about IP address whitelists, see [Configure an IP address whitelist](https://help.aliyun.com/document_detail/96118.html).
     *
     * @param request - AttachDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachDBInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Associates one or more ApsaraDB RDS instances with a scaling group.
     *
     * @remarks
     * Before you attach an ApsaraDB RDS instance to a scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     * *   The ApsaraDB RDS instance and the scaling group belong to the same Alibaba Cloud account.
     * *   The ApsaraDB RDS instance is unlocked. For information about the lock policy, see [ApsaraDB RDS usage notes](https://help.aliyun.com/document_detail/41872.html).
     * *   The ApsaraDB RDS instance is in the Running state.
     * *   The ApsaraDB RDS instance exists in the Alibaba Cloud account.
     * *   If you reattach an ApsaraDB RDS instance to a scaling group, the total number of attached ApsaraDB RDS instances of the scaling group remains unchanged. But Auto Scaling adds the private IP addresses of all Elastic Compute Service (ECS) instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance.
     * >  After you attach an ApsaraDB RDS instance to a scaling group, make sure that the number of IP addresses in the default whitelist of the ApsaraDB RDS instance is limited to 1,000. For information about IP address whitelists, see [Configure an IP address whitelist](https://help.aliyun.com/document_detail/96118.html).
     *
     * @param request - AttachDBInstancesRequest
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
     * Adds instances to a scaling group to provide services or restarts Elastic Compute Service (ECS) instances stopped in Economical Mode to provide services. You can call the AttachInstances operation to add ECS instances, elastic container instances, or third-party instances managed by Alibaba Cloud to your scaling group to provide services. You can also call this operation to restart ECS instances stopped in Economical Mode in your scaling group to provide services.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   The scaling group is in the Active state.
     * *   No scaling activities in the scaling group are in progress.
     * The ECS instances or the elastic container instances that you want to add to a scaling group must meet the following requirements:
     * *   The instances reside in the same region as the scaling group.
     * *   The instances must be in the Running state.
     * *   The instances are not added to other scaling groups.
     * *   The instances use the subscription or pay-as-you-go billing method, or are preemptible instances.
     * *   If the VswitchID parameter is specified for a scaling group, the instances that are in the classic network or those that are not in the same virtual private cloud (VPC) as the specified vSwitch cannot be added to the scaling group.
     * *   If the VswitchID parameter is not specified for a scaling group, the instances that are in VPCs cannot be added to the scaling group.
     * If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     * If the sum of the number of instances that you want to add and the number of existing instances in the scaling group is greater than the value of the MaxSize parameter, the call fails.
     * Instances that are manually added by calling the AttachInstances operation are not associated with the active scaling configuration of the scaling group.
     *
     * @param request - AttachInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds instances to a scaling group to provide services or restarts Elastic Compute Service (ECS) instances stopped in Economical Mode to provide services. You can call the AttachInstances operation to add ECS instances, elastic container instances, or third-party instances managed by Alibaba Cloud to your scaling group to provide services. You can also call this operation to restart ECS instances stopped in Economical Mode in your scaling group to provide services.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   The scaling group is in the Active state.
     * *   No scaling activities in the scaling group are in progress.
     * The ECS instances or the elastic container instances that you want to add to a scaling group must meet the following requirements:
     * *   The instances reside in the same region as the scaling group.
     * *   The instances must be in the Running state.
     * *   The instances are not added to other scaling groups.
     * *   The instances use the subscription or pay-as-you-go billing method, or are preemptible instances.
     * *   If the VswitchID parameter is specified for a scaling group, the instances that are in the classic network or those that are not in the same virtual private cloud (VPC) as the specified vSwitch cannot be added to the scaling group.
     * *   If the VswitchID parameter is not specified for a scaling group, the instances that are in VPCs cannot be added to the scaling group.
     * If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     * If the sum of the number of instances that you want to add and the number of existing instances in the scaling group is greater than the value of the MaxSize parameter, the call fails.
     * Instances that are manually added by calling the AttachInstances operation are not associated with the active scaling configuration of the scaling group.
     *
     * @param request - AttachInstancesRequest
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
     * Attaches load balancers to a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups. Load balancers help distribute the access traffic to the instances in scaling groups, which effectively improves the service performance of the scaling groups. You can call the AttachLoadBalancers operation to attach one or more load balancers to your scaling group.
     *
     * @remarks
     * Before you call this operation, make sure that the following requirements are met:
     * *   The load balancer and the scaling group belong to the same Alibaba Cloud account and region.
     * *   The load balancer is in the `Running` state.
     * *   At least one listener is configured for the load balancer, and the health check feature is enabled for the load balancer.
     * *   If the network type of the load balancer and the scaling group is virtual private cloud (VPC), they use the same VPC.
     * *   If the network type of the scaling group is VPC, and that of the load balancer is classic network and a backend server of the load balancer uses a VPC, the scaling group and the backend server use the same VPC.
     * *   The attachment of load balancers ensures that the cumulative number of load balancers attached to the scaling group stays within the predefined maximum limit. For information about the load balancer quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     *
     * @param request - AttachLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachLoadBalancersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Attaches load balancers to a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups. Load balancers help distribute the access traffic to the instances in scaling groups, which effectively improves the service performance of the scaling groups. You can call the AttachLoadBalancers operation to attach one or more load balancers to your scaling group.
     *
     * @remarks
     * Before you call this operation, make sure that the following requirements are met:
     * *   The load balancer and the scaling group belong to the same Alibaba Cloud account and region.
     * *   The load balancer is in the `Running` state.
     * *   At least one listener is configured for the load balancer, and the health check feature is enabled for the load balancer.
     * *   If the network type of the load balancer and the scaling group is virtual private cloud (VPC), they use the same VPC.
     * *   If the network type of the scaling group is VPC, and that of the load balancer is classic network and a backend server of the load balancer uses a VPC, the scaling group and the backend server use the same VPC.
     * *   The attachment of load balancers ensures that the cumulative number of load balancers attached to the scaling group stays within the predefined maximum limit. For information about the load balancer quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     *
     * @param request - AttachLoadBalancersRequest
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
     * Attaches server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachServerGroups operation. By attaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *
     * @param request - AttachServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachServerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Attaches server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachServerGroups operation. By attaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *
     * @param request - AttachServerGroupsRequest
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
     * Attaches vServer groups to a scaling group. After a Classic Load Balancer (CLB) instance is attached to your scaling group, the instances in the scaling group are automatically added as backend servers of the CLB instance. These servers then handle requests forwarded by the CLB instance, streamlining the processing of incoming traffic. To direct varying access requests to separate backend servers or to distribute requests based on domain names or URLs, you can call the AttachVServerGroups operation. This operation enables the addition of multiple vServer groups, allowing for efficient management of various backend server configurations tailored to your routing preferences.
     *
     * @remarks
     *   Before you call this operation, make sure that the following requirements are met:
     *     *   The CLB instance and the scaling group belong to the same Alibaba Cloud account.
     *     *   The CLB instance and the scaling group reside in the same region.
     *     *   The CLB instance is in the Running state.
     *     *   The CLB instance is configured with at least one listener. The health check feature is enabled for the CLB instance.
     *     *   If the network type of both the CLB instance and the scaling group is virtual private cloud (VPC), they use the same VPC.
     *     *   If the network type of the scaling group is VPC and the network type of the CLB instance is classic network, any backend server of the CLB instance within a VPC setup shares the same VPC as the scaling group.
     *     *   The vServer groups that you want to attach to the scaling group belong to the CLB instance.
     *     *   The operation to attach vServer groups does not result in the total number of vServer groups exceeding the predefined quota limit. For information about the vServer group quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * *   When you call this operation to attach vServer groups, you must specify the following parameters:
     *     *   LoadBalancerId: the ID of the CLB instance
     *     *   VServerGroupId: the ID of the vServer group
     *     *   Port: the port number of the vServer group
     *     **
     *     **Note** If you attempt to attach the same vServer group to a scaling group multiple times over the identical port, the system regards each attempt as a separate vServer group attachment to the scaling group. In your request, if you include the same vServer group ID coupled with the same port number multiple times, only the first configuration of the vServer group and port number pairing is considered valid. Subsequent vServer group and port number parings are disregarded.
     *
     * @param request - AttachVServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachVServerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Attaches vServer groups to a scaling group. After a Classic Load Balancer (CLB) instance is attached to your scaling group, the instances in the scaling group are automatically added as backend servers of the CLB instance. These servers then handle requests forwarded by the CLB instance, streamlining the processing of incoming traffic. To direct varying access requests to separate backend servers or to distribute requests based on domain names or URLs, you can call the AttachVServerGroups operation. This operation enables the addition of multiple vServer groups, allowing for efficient management of various backend server configurations tailored to your routing preferences.
     *
     * @remarks
     *   Before you call this operation, make sure that the following requirements are met:
     *     *   The CLB instance and the scaling group belong to the same Alibaba Cloud account.
     *     *   The CLB instance and the scaling group reside in the same region.
     *     *   The CLB instance is in the Running state.
     *     *   The CLB instance is configured with at least one listener. The health check feature is enabled for the CLB instance.
     *     *   If the network type of both the CLB instance and the scaling group is virtual private cloud (VPC), they use the same VPC.
     *     *   If the network type of the scaling group is VPC and the network type of the CLB instance is classic network, any backend server of the CLB instance within a VPC setup shares the same VPC as the scaling group.
     *     *   The vServer groups that you want to attach to the scaling group belong to the CLB instance.
     *     *   The operation to attach vServer groups does not result in the total number of vServer groups exceeding the predefined quota limit. For information about the vServer group quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * *   When you call this operation to attach vServer groups, you must specify the following parameters:
     *     *   LoadBalancerId: the ID of the CLB instance
     *     *   VServerGroupId: the ID of the vServer group
     *     *   Port: the port number of the vServer group
     *     **
     *     **Note** If you attempt to attach the same vServer group to a scaling group multiple times over the identical port, the system regards each attempt as a separate vServer group attachment to the scaling group. In your request, if you include the same vServer group ID coupled with the same port number multiple times, only the first configuration of the vServer group and port number pairing is considered valid. Subsequent vServer group and port number parings are disregarded.
     *
     * @param request - AttachVServerGroupsRequest
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
     * Cancels an instance refresh task. Take note that instances whose configurations were already updated by running an instance refresh task remain intact even after you cancel the task.
     *
     * @remarks
     *   You cannot call this operation to cancel instance refresh tasks that are being rolled back.
     *
     * @param request - CancelInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'CancelInstanceRefresh',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelInstanceRefreshResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels an instance refresh task. Take note that instances whose configurations were already updated by running an instance refresh task remain intact even after you cancel the task.
     *
     * @remarks
     *   You cannot call this operation to cancel instance refresh tasks that are being rolled back.
     *
     * @param request - CancelInstanceRefreshRequest
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
     * Changes a resource group. Resource groups are a means to categorize and manage cloud resources, such as scaling groups, based on specific objectives, permissions, or ownership. In large, multifaceted organizations that manage numerous projects and users, this feature adopts a tiered management approach, simplifying management tasks and improving the effectiveness and oversight of resource allocation. You can call the ChangeResourceGroup operation to move your scaling groups from one resource group to another resource group, which facilitates streamlined monitoring and management within the context of the new group. This operation eliminates the need for repetitive and time-consuming cross-service resource queries, thereby enhancing operational efficiency.
     *
     * @remarks
     *   A resource is an entity of cloud services that you create on Alibaba Cloud. For example, a scaling group is a resource.
     * *   A resource group serves as a powerful organizational tool within your Alibaba Cloud account, enabling you to manage and monitor multiple resources collectively. It effectively addresses complexities surrounding resource categorization and permission control under a single Alibaba Cloud account, thereby enhancing management efficiency and control. For more information, see [What is resource management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Changes a resource group. Resource groups are a means to categorize and manage cloud resources, such as scaling groups, based on specific objectives, permissions, or ownership. In large, multifaceted organizations that manage numerous projects and users, this feature adopts a tiered management approach, simplifying management tasks and improving the effectiveness and oversight of resource allocation. You can call the ChangeResourceGroup operation to move your scaling groups from one resource group to another resource group, which facilitates streamlined monitoring and management within the context of the new group. This operation eliminates the need for repetitive and time-consuming cross-service resource queries, thereby enhancing operational efficiency.
     *
     * @remarks
     *   A resource is an entity of cloud services that you create on Alibaba Cloud. For example, a scaling group is a resource.
     * *   A resource group serves as a powerful organizational tool within your Alibaba Cloud account, enabling you to manage and monitor multiple resources collectively. It effectively addresses complexities surrounding resource categorization and permission control under a single Alibaba Cloud account, thereby enhancing management efficiency and control. For more information, see [What is resource management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * @param request - ChangeResourceGroupRequest
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
     * Ends the timeout period of a lifecycle hook ahead of schedule. If you have created a lifecycle hook for your scaling group, you can call the CompleteLifecycleAction operation to end the timeout period of the lifecycle hook ahead of schedule based on your business requirements.
     *
     * @remarks
     * When you manually cut short the timeout period of a lifecycle hook, Auto Scaling proceeds with one of the following actions based on the predefined settings: responding to the scaling request, aborting the scaling request, and initiating a rollback process.
     *
     * @param request - CompleteLifecycleActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CompleteLifecycleActionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CompleteLifecycleActionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Ends the timeout period of a lifecycle hook ahead of schedule. If you have created a lifecycle hook for your scaling group, you can call the CompleteLifecycleAction operation to end the timeout period of the lifecycle hook ahead of schedule based on your business requirements.
     *
     * @remarks
     * When you manually cut short the timeout period of a lifecycle hook, Auto Scaling proceeds with one of the following actions based on the predefined settings: responding to the scaling request, aborting the scaling request, and initiating a rollback process.
     *
     * @param request - CompleteLifecycleActionRequest
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
     * Creates event-triggered tasks. If your business encounters unexpected traffic surges or has no specific patterns, you can call the CreateAlarm operation to create an event-triggered task and associate a CloudMonitor metric with the task. This allows you to dynamically adjust the number of Elastic Compute Service (ECS) instances or elastic container instances in your scaling group and keep updated on the real-time metric data, which facilitates cloud resource management and maintenance.
     *
     * @remarks
     *   If you set MetricType to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Event-triggered tasks of the custom monitoring type](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify MetricName, Dimensions.DimensionKey, and Dimensions.DimensionValue to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify user_id and scaling_group for an event-triggered task to aggregate monitoring data of all ECS instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you create an event-triggered task of the custom monitoring type, you can specify only custom metrics in the task.
     *     *   If you create an event-triggered task of the system monitoring type, you can specify the system metrics described in [Event-triggered tasks of the system monitoring type](https://help.aliyun.com/document_detail/74854.html) in the task.
     * >  user_id and scaling_group are automatically populated. You need to only specify device and state. For more information, see `Dimensions.DimensionKey` and `Dimensions.DimensionValue` in the "Request parameters" section of this topic.
     *
     * @param request - CreateAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates event-triggered tasks. If your business encounters unexpected traffic surges or has no specific patterns, you can call the CreateAlarm operation to create an event-triggered task and associate a CloudMonitor metric with the task. This allows you to dynamically adjust the number of Elastic Compute Service (ECS) instances or elastic container instances in your scaling group and keep updated on the real-time metric data, which facilitates cloud resource management and maintenance.
     *
     * @remarks
     *   If you set MetricType to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Event-triggered tasks of the custom monitoring type](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify MetricName, Dimensions.DimensionKey, and Dimensions.DimensionValue to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify user_id and scaling_group for an event-triggered task to aggregate monitoring data of all ECS instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you create an event-triggered task of the custom monitoring type, you can specify only custom metrics in the task.
     *     *   If you create an event-triggered task of the system monitoring type, you can specify the system metrics described in [Event-triggered tasks of the system monitoring type](https://help.aliyun.com/document_detail/74854.html) in the task.
     * >  user_id and scaling_group are automatically populated. You need to only specify device and state. For more information, see `Dimensions.DimensionKey` and `Dimensions.DimensionValue` in the "Request parameters" section of this topic.
     *
     * @param request - CreateAlarmRequest
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
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiagnoseReport',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDiagnoseReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDiagnoseReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a diagnostic report.
     *
     * @param request - CreateDiagnoseReportRequest
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
     * Creates a scaling configuration of the Elastic Container Instance type. Auto Scaling uses the scaling configuration as a template to create elastic container instances to meet your business requirements during scale-out events.
     *
     * @remarks
     * A scaling configuration is a template that is used to create elastic container instances during scale-out events.
     * You can specify CPU and Memory to determine the range of instance types. Then, Auto Scaling determines the available instance types based on factors such as I/O optimization requirements and zones. Auto Scaling preferentially creates elastic container instances by using the lowest-priced instance type. This method applies only if you set Scaling Policy to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *
     * @param request - CreateEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEciScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a scaling configuration of the Elastic Container Instance type. Auto Scaling uses the scaling configuration as a template to create elastic container instances to meet your business requirements during scale-out events.
     *
     * @remarks
     * A scaling configuration is a template that is used to create elastic container instances during scale-out events.
     * You can specify CPU and Memory to determine the range of instance types. Then, Auto Scaling determines the available instance types based on factors such as I/O optimization requirements and zones. Auto Scaling preferentially creates elastic container instances by using the lowest-priced instance type. This method applies only if you set Scaling Policy to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *
     * @param request - CreateEciScalingConfigurationRequest
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
     * Creates one or more lifecycle hooks in a scaling group. A lifecycle hook allows you to execute custom actions like sending notifications or automating script execution at critical stages (such as instance startup and termination) in the lifecycle of an instance. Implementing the lifecycle hook feature allows for finer control and management of instances. For example, you can verify configurations, set up custom tasks, or back up data on your instances when lifecycle hooks take effect, thus enhancing the flexibility and reliability of application deployment.
     *
     * @remarks
     * You can create up to six lifecycle hooks for each scaling group. After a lifecycle hook is created for a scaling group, Elastic Compute Service (ECS) instances in the scaling group waits to be added to or removed from the scaling group during scaling activities. You can use the HeartbeatTimeout parameter to specify the timeout period of the lifecycle hook. During the timeout period of a lifecycle hook, you can perform custom operations such as initialize ECS instance configurations and download ECS instance data on the ECS instances for which the lifecycle hook is applied.
     * During a scale-out activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be added to the associated whitelist that manages access to the ApsaraDB RDS instance. The ECS instances also wait to be added to the backend server group of the associated Classic Load Balancer (CLB) instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are added to the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also added to the backend server group of the associated CLB instance. During a scale-in activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances also wait to be removed from the backend server group of the associated CLB instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also removed from the backend server group of the associated CLB instance.
     * You can configure a notification method for a lifecycle hook. When the lifecycle hook is triggered, a notification can be sent to the specified Message Service (MNS) topic or queue, or an operation can be performed based on the specified Operation Orchestration Service (OOS) template. If you want to configure an OOS template, you must create a Resource Access Management (RAM) role for OOS. For more information, see [Grant RAM permissions to OOS](https://help.aliyun.com/document_detail/120810.html).
     * > If your scaling group has existing ECS instances and you configured an OOS template that is used to add the private IP addresses of ECS instances to or remove the private IP addresses of ECS instances from the whitelists that manage access to cloud databases that are not ApsaraDB RDS databases, you must manually add the private IP addresses of the ECS instances to or remove the private IP addresses of the ECS instances from the whitelists that manage access to the cloud databases.
     *
     * @param request - CreateLifecycleHookRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLifecycleHookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates one or more lifecycle hooks in a scaling group. A lifecycle hook allows you to execute custom actions like sending notifications or automating script execution at critical stages (such as instance startup and termination) in the lifecycle of an instance. Implementing the lifecycle hook feature allows for finer control and management of instances. For example, you can verify configurations, set up custom tasks, or back up data on your instances when lifecycle hooks take effect, thus enhancing the flexibility and reliability of application deployment.
     *
     * @remarks
     * You can create up to six lifecycle hooks for each scaling group. After a lifecycle hook is created for a scaling group, Elastic Compute Service (ECS) instances in the scaling group waits to be added to or removed from the scaling group during scaling activities. You can use the HeartbeatTimeout parameter to specify the timeout period of the lifecycle hook. During the timeout period of a lifecycle hook, you can perform custom operations such as initialize ECS instance configurations and download ECS instance data on the ECS instances for which the lifecycle hook is applied.
     * During a scale-out activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be added to the associated whitelist that manages access to the ApsaraDB RDS instance. The ECS instances also wait to be added to the backend server group of the associated Classic Load Balancer (CLB) instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are added to the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also added to the backend server group of the associated CLB instance. During a scale-in activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances also wait to be removed from the backend server group of the associated CLB instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also removed from the backend server group of the associated CLB instance.
     * You can configure a notification method for a lifecycle hook. When the lifecycle hook is triggered, a notification can be sent to the specified Message Service (MNS) topic or queue, or an operation can be performed based on the specified Operation Orchestration Service (OOS) template. If you want to configure an OOS template, you must create a Resource Access Management (RAM) role for OOS. For more information, see [Grant RAM permissions to OOS](https://help.aliyun.com/document_detail/120810.html).
     * > If your scaling group has existing ECS instances and you configured an OOS template that is used to add the private IP addresses of ECS instances to or remove the private IP addresses of ECS instances from the whitelists that manage access to cloud databases that are not ApsaraDB RDS databases, you must manually add the private IP addresses of the ECS instances to or remove the private IP addresses of the ECS instances from the whitelists that manage access to the cloud databases.
     *
     * @param request - CreateLifecycleHookRequest
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
     * Creates a notification rule. You can call the CreateNotificationConfiguration operation to create a notification rule to stay informed about scaling events or resource changes. This helps you learn about the dynamic status of your scaling group in real time and further automates the management of scaling events.
     *
     * @remarks
     *   You can specify CloudMonitor system events, Simple Message Queue (SMQ, formerly MNS) topics, or SMQ queues as notification recipients. When a scaling event of the specified type or resource change occurs in your scaling group, Auto Scaling automatically sends notifications to CloudMonitor or SMQ.
     * *   You cannot specify the same recipient for notifications of different event types in a scaling group.
     *     For example, you cannot enable the same CloudMonitor system event, SMQ topic, or SMQ queue to receive notifications of different event types in a scaling group.
     *
     * @param request - CreateNotificationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNotificationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a notification rule. You can call the CreateNotificationConfiguration operation to create a notification rule to stay informed about scaling events or resource changes. This helps you learn about the dynamic status of your scaling group in real time and further automates the management of scaling events.
     *
     * @remarks
     *   You can specify CloudMonitor system events, Simple Message Queue (SMQ, formerly MNS) topics, or SMQ queues as notification recipients. When a scaling event of the specified type or resource change occurs in your scaling group, Auto Scaling automatically sends notifications to CloudMonitor or SMQ.
     * *   You cannot specify the same recipient for notifications of different event types in a scaling group.
     *     For example, you cannot enable the same CloudMonitor system event, SMQ topic, or SMQ queue to receive notifications of different event types in a scaling group.
     *
     * @param request - CreateNotificationConfigurationRequest
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
     * Creates scaling configurations. When you call the CreateScalingConfiguration operation, you can specify the scaling group ID, instance type, and image to create a scaling configuration of the Elastic Compute Service (ECS) type.
     *
     * @remarks
     * Auto Scaling automatically creates Elastic Compute Service (ECS) instances based on the specified scaling configuration. ECS instances can be created in the following modes:
     * *   InstancePatternInfos: intelligent configuration mode. In this mode, you need to only specify the number of vCPUs, memory size, instance family, and maximum price. Auto Scaling selects the instance type that has the lowest price based on the configurations to create ECS instances. This mode is available only for scaling groups that reside in virtual private clouds (VPCs). This mode reduces scale-out failures caused by insufficient inventory of instance types.
     * *   InstanceType: In this mode, you must specify one instance type.
     * *   InstanceTypes: In this mode, you can specify more than one instance type.
     * *   InstanceTypeOverrides: In this mode, you can specify multiple instance types and weights for the instance types.
     * *   Cpu and Memory: In this mode, you must specify the number of vCPUs and the memory size. Auto Scaling determines the range of available instance types based on factors such as I/O optimization requirements and zones. Then, Auto Scaling creates ECS instances by using the lowest-priced instance type. This mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. You can specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfo at the same time. If you specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfos at the same time, Auto Scaling preferentially uses the instance types that are specified by InstanceType or InstanceTypes for scale-outs. If the instance types that are specified by InstanceType or InstanceTypes do not have sufficient inventory, Auto Scaling uses the instance types that are specified by InstancePatternInfos for scale-outs.
     *
     * @param tmpReq - CreateScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->scalingConfigurationName) {
            @$query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }

        if (null !== $request->scalingGroupId) {
            @$query['ScalingGroupId'] = $request->scalingGroupId;
        }

        if (null !== $request->schedulerOptionsShrink) {
            @$query['SchedulerOptions'] = $request->schedulerOptionsShrink;
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates scaling configurations. When you call the CreateScalingConfiguration operation, you can specify the scaling group ID, instance type, and image to create a scaling configuration of the Elastic Compute Service (ECS) type.
     *
     * @remarks
     * Auto Scaling automatically creates Elastic Compute Service (ECS) instances based on the specified scaling configuration. ECS instances can be created in the following modes:
     * *   InstancePatternInfos: intelligent configuration mode. In this mode, you need to only specify the number of vCPUs, memory size, instance family, and maximum price. Auto Scaling selects the instance type that has the lowest price based on the configurations to create ECS instances. This mode is available only for scaling groups that reside in virtual private clouds (VPCs). This mode reduces scale-out failures caused by insufficient inventory of instance types.
     * *   InstanceType: In this mode, you must specify one instance type.
     * *   InstanceTypes: In this mode, you can specify more than one instance type.
     * *   InstanceTypeOverrides: In this mode, you can specify multiple instance types and weights for the instance types.
     * *   Cpu and Memory: In this mode, you must specify the number of vCPUs and the memory size. Auto Scaling determines the range of available instance types based on factors such as I/O optimization requirements and zones. Then, Auto Scaling creates ECS instances by using the lowest-priced instance type. This mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. You can specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfo at the same time. If you specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfos at the same time, Auto Scaling preferentially uses the instance types that are specified by InstanceType or InstanceTypes for scale-outs. If the instance types that are specified by InstanceType or InstanceTypes do not have sufficient inventory, Auto Scaling uses the instance types that are specified by InstancePatternInfos for scale-outs.
     *
     * @param request - CreateScalingConfigurationRequest
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
     * Creates a scaling group. You can call the CreateScalingGroup operation to automate the adjustment of computing power of a specific type based on your business requirements and scaling polices.
     *
     * @remarks
     * A scaling group is a group of Elastic Compute Service (ECS) instances that can be used for similar purposes.
     * You can create only a limited number of scaling groups in a region. To check the quota of the scaling groups, go to Quota Center.
     * A scaling group does not immediately take effect after you create the scaling group. You can call the [EnableScalingGroup](https://help.aliyun.com/document_detail/25939.html) operation to enable a scaling group. You can trigger scaling events and execute scaling rules only in scaling groups that are in the Enabled state.
     * If you want to attach a Classic Load Balancer (CLB, formerly known as SLB) instance and an ApsaraDB RDS instance to the scaling group that you want to create, the scaling group, the CLB instance, and the ApsaraDB RDS instance must reside in the same region. For more information, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * If you attach a CLB instance to the scaling group that you want to create, Auto Scaling automatically adds the ECS instances in the scaling group to the backend server groups of the CLB instance. You can specify the following types of server groups to add ECS instances:
     * *   Default server group: ECS instances in this group process frontend requests. If no listeners are configured for vServer groups or primary/secondary server groups, the frontend requests are forwarded to the ECS instances in the default server group.
     * *   vServer group: If you want to forward different requests to different backend servers, or you want to forward requests based on domain names or URLs, you can specify vServer groups.
     * >  If you specify both the default server group and multiple server groups simultaneously, Auto Scaling adds the ECS instances in your scaling group to these server groups concurrently.
     * The default weight of each ECS instance as a backend server is 50. If you want to attach a CLB instance to the scaling group that you want to create, make sure that the CLB instance meets the following requirements:
     * *   The CLB instance is in the Active state. You can call the [DescribeLoadBalancers](https://help.aliyun.com/document_detail/2401696.html) operation to query the status of CLB instances.
     * *   Health check must be enabled on all listener ports configured for the CLB instance. Otherwise, the scaling group will fail to be created.
     * If you attach Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups to the scaling group that you want to create, Auto Scaling adds the ECS instances in your scaling group to the ALB or NLB server groups to process the access requests forwarded by the corresponding ALB or NLB instances. You can attach multiple ALB or NLB server groups to a scaling group. Make sure that the ALB or NLB server groups belong to the same virtual private cloud (VPC). For more information, see [AttachAlbServerGroups](https://help.aliyun.com/document_detail/266800.html) or [AttachServerGroups](https://help.aliyun.com/document_detail/600535.html).
     * If you attach an ApsaraDB RDS instance to the scaling group that you want to create, Auto Scaling automatically adds the private IP addresses of the ECS instances in your scaling group to the IP address whitelist of the ApsaraDB RDS instance. Before you attach an ApsaraDB RDS instance to your scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     * *   The ApsaraDB RDS instance is in the Running state. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) state to query the status of ApsaraDB RDS instances.
     * *   The number of IP addresses in the IP address whitelist of the ApsaraDB RDS instance does not reach its upper limit. For more information, see [Configure a whitelist](https://help.aliyun.com/document_detail/43185.html).
     * If you set MultiAZPolicy for the scaling group that you want to create to COST_OPTIMIZED, the following rules apply:
     * *   If you use OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools to specify the instance allocation mode under the cost optimization policy, Auto Scaling prioritizes the implementation of the specified instance allocation mode during scale-out events.
     * *   If you do not specify OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools, Auto Scaling preferentially creates instances of the lowest-priced instance type based on the cost optimization policy.
     * If you set `Tags.Propagate` to true, the following rules will apply:
     * *   Tags that you add to the scaling group cannot be propagated to existing instances in the scaling group. Tags that you add to the scaling group are propagated to only new instances.
     * *   If you specify instance tags in the scaling configuration that is used to create instances and propagate the tags that you add to the scaling group to the instances, all tags exist at the same time.
     * *   If the tag key that you specify in a scaling configuration and the tag key that you add to the scaling group of the scaling configuration are the same, the tag value that you specify in the scaling configuration is preferentially used.
     *
     * @param request - CreateScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->azBalance) {
            @$query['AzBalance'] = $request->azBalance;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScalingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a scaling group. You can call the CreateScalingGroup operation to automate the adjustment of computing power of a specific type based on your business requirements and scaling polices.
     *
     * @remarks
     * A scaling group is a group of Elastic Compute Service (ECS) instances that can be used for similar purposes.
     * You can create only a limited number of scaling groups in a region. To check the quota of the scaling groups, go to Quota Center.
     * A scaling group does not immediately take effect after you create the scaling group. You can call the [EnableScalingGroup](https://help.aliyun.com/document_detail/25939.html) operation to enable a scaling group. You can trigger scaling events and execute scaling rules only in scaling groups that are in the Enabled state.
     * If you want to attach a Classic Load Balancer (CLB, formerly known as SLB) instance and an ApsaraDB RDS instance to the scaling group that you want to create, the scaling group, the CLB instance, and the ApsaraDB RDS instance must reside in the same region. For more information, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * If you attach a CLB instance to the scaling group that you want to create, Auto Scaling automatically adds the ECS instances in the scaling group to the backend server groups of the CLB instance. You can specify the following types of server groups to add ECS instances:
     * *   Default server group: ECS instances in this group process frontend requests. If no listeners are configured for vServer groups or primary/secondary server groups, the frontend requests are forwarded to the ECS instances in the default server group.
     * *   vServer group: If you want to forward different requests to different backend servers, or you want to forward requests based on domain names or URLs, you can specify vServer groups.
     * >  If you specify both the default server group and multiple server groups simultaneously, Auto Scaling adds the ECS instances in your scaling group to these server groups concurrently.
     * The default weight of each ECS instance as a backend server is 50. If you want to attach a CLB instance to the scaling group that you want to create, make sure that the CLB instance meets the following requirements:
     * *   The CLB instance is in the Active state. You can call the [DescribeLoadBalancers](https://help.aliyun.com/document_detail/2401696.html) operation to query the status of CLB instances.
     * *   Health check must be enabled on all listener ports configured for the CLB instance. Otherwise, the scaling group will fail to be created.
     * If you attach Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups to the scaling group that you want to create, Auto Scaling adds the ECS instances in your scaling group to the ALB or NLB server groups to process the access requests forwarded by the corresponding ALB or NLB instances. You can attach multiple ALB or NLB server groups to a scaling group. Make sure that the ALB or NLB server groups belong to the same virtual private cloud (VPC). For more information, see [AttachAlbServerGroups](https://help.aliyun.com/document_detail/266800.html) or [AttachServerGroups](https://help.aliyun.com/document_detail/600535.html).
     * If you attach an ApsaraDB RDS instance to the scaling group that you want to create, Auto Scaling automatically adds the private IP addresses of the ECS instances in your scaling group to the IP address whitelist of the ApsaraDB RDS instance. Before you attach an ApsaraDB RDS instance to your scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     * *   The ApsaraDB RDS instance is in the Running state. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) state to query the status of ApsaraDB RDS instances.
     * *   The number of IP addresses in the IP address whitelist of the ApsaraDB RDS instance does not reach its upper limit. For more information, see [Configure a whitelist](https://help.aliyun.com/document_detail/43185.html).
     * If you set MultiAZPolicy for the scaling group that you want to create to COST_OPTIMIZED, the following rules apply:
     * *   If you use OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools to specify the instance allocation mode under the cost optimization policy, Auto Scaling prioritizes the implementation of the specified instance allocation mode during scale-out events.
     * *   If you do not specify OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools, Auto Scaling preferentially creates instances of the lowest-priced instance type based on the cost optimization policy.
     * If you set `Tags.Propagate` to true, the following rules will apply:
     * *   Tags that you add to the scaling group cannot be propagated to existing instances in the scaling group. Tags that you add to the scaling group are propagated to only new instances.
     * *   If you specify instance tags in the scaling configuration that is used to create instances and propagate the tags that you add to the scaling group to the instances, all tags exist at the same time.
     * *   If the tag key that you specify in a scaling configuration and the tag key that you add to the scaling group of the scaling configuration are the same, the tag value that you specify in the scaling configuration is preferentially used.
     *
     * @param request - CreateScalingGroupRequest
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
     * Creates a scaling rule. The purpose of a scaling rule varies based on its type. You can use a scaling rule to trigger a scaling activity or adjust the boundary values for a scaling group. You can call the CreateScalingRule operation to create different types of scaling rules based on your business requirements. For example, if your business requires only automatic adjustment of the boundary values for your scaling group, you can call this operation to create a predictive scaling rule.
     *
     * @remarks
     * A scaling rule defines the specific scaling action. For example, you can use a scaling rule to define N instances to add or remove. If the execution of a scaling rule causes the total number of Elastic Compute Service (ECS) instances or elastic container instances in the scaling group to drop below the value of MinSize or to exceed the value of MaxSize, Auto Scaling adjusts the number of instances to add or remove, which ensures that the total number of instances stays within the valid range. Take note that Auto Scaling does not adjust the number of instances that you defined in the scaling rule. Examples:
     * *   The maximum number of instances (MaxSize) that can be contained in a scaling group is 3 and the current number of instances (Total Capacity) in the scaling group is 2. In this example, the Add3 scaling rule is created to add three ECS instances to the scaling group. However, after you execute Add3, Auto Scaling adds only one ECS instance to the scaling group. In addition, the number of ECS instances to add in the Add3 scaling rule remains unchanged.
     * *   The minimum number of instances (MinSize) that must be contained in a scaling group is 2 and the current number of instances (Total Capacity) is 3. In this example, the Remove5 scaling rule is created to remove five ECS instances from the scaling group. However, after you execute Remove5, Auto Scaling only removes one ECS instance from the scaling group. In addition, the number of ECS instances to remove in the Remove5 scaling rule remains unchanged.
     * Before you call this operation, take note of the following items:
     * *   If you set AdjustmentType to TotalCapacity, the total number of ECS instances or elastic container instances in your scaling group will be adjusted to a specified number when the scaling rule that you create by calling this operation is executed. You must set AdjustmentValue to an integer that is greater than 0.
     * *   If you set AdjustmentType to QuantityChangeInCapacity or PercentChangeInCapacity, a positive value of AdjustmentValue specifies that a specific number of ECS instances or elastic container instances will be added to your scaling group, and a negative value of AdjustmentValue specifies that a specific number of ECS instances or elastic container instances will be removed from the scaling group.
     * *   If you set AdjustmentType to PercentChangeInCapacity, Auto Scaling calculates the number of ECS instances or elastic container instances to add or remove by multiplying the current capacity of the scaling group (Total Capacity) by AdjustmentValue divided by 100, rounding off the result to determine the final adjustment count.
     * *   If you specify a cooldown period for a scaling rule, the cooldown period of the scaling rule takes effect after you execute the scaling rule. If you do not specify a cooldown period for a scaling rule, the value of DefaultCooldown of the scaling group takes effect after you execute the scaling rule.
     * *   You can create only a limited number of scaling rules for a scaling group. For more information, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * *   The following API operations may use the unique identifier of a scaling rule (ScalingRuleAri) that is returned after you call the CreateScalingRule operation:
     *     *   ExecuteScalingRule: You can call this operation to manually execute a scaling rule. In this operation, you can set ScalingRuleAri to the unique identifier of the scaling rule that you want to execute.
     *     *   CreateScheduledTask: You can call this operation to create a scheduled task for a scaling rule. In this operation, you can set ScalingRuleAri to the unique identifier of the scaling rule for which you want to create a scheduled task.
     *
     * @param request - CreateScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScalingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a scaling rule. The purpose of a scaling rule varies based on its type. You can use a scaling rule to trigger a scaling activity or adjust the boundary values for a scaling group. You can call the CreateScalingRule operation to create different types of scaling rules based on your business requirements. For example, if your business requires only automatic adjustment of the boundary values for your scaling group, you can call this operation to create a predictive scaling rule.
     *
     * @remarks
     * A scaling rule defines the specific scaling action. For example, you can use a scaling rule to define N instances to add or remove. If the execution of a scaling rule causes the total number of Elastic Compute Service (ECS) instances or elastic container instances in the scaling group to drop below the value of MinSize or to exceed the value of MaxSize, Auto Scaling adjusts the number of instances to add or remove, which ensures that the total number of instances stays within the valid range. Take note that Auto Scaling does not adjust the number of instances that you defined in the scaling rule. Examples:
     * *   The maximum number of instances (MaxSize) that can be contained in a scaling group is 3 and the current number of instances (Total Capacity) in the scaling group is 2. In this example, the Add3 scaling rule is created to add three ECS instances to the scaling group. However, after you execute Add3, Auto Scaling adds only one ECS instance to the scaling group. In addition, the number of ECS instances to add in the Add3 scaling rule remains unchanged.
     * *   The minimum number of instances (MinSize) that must be contained in a scaling group is 2 and the current number of instances (Total Capacity) is 3. In this example, the Remove5 scaling rule is created to remove five ECS instances from the scaling group. However, after you execute Remove5, Auto Scaling only removes one ECS instance from the scaling group. In addition, the number of ECS instances to remove in the Remove5 scaling rule remains unchanged.
     * Before you call this operation, take note of the following items:
     * *   If you set AdjustmentType to TotalCapacity, the total number of ECS instances or elastic container instances in your scaling group will be adjusted to a specified number when the scaling rule that you create by calling this operation is executed. You must set AdjustmentValue to an integer that is greater than 0.
     * *   If you set AdjustmentType to QuantityChangeInCapacity or PercentChangeInCapacity, a positive value of AdjustmentValue specifies that a specific number of ECS instances or elastic container instances will be added to your scaling group, and a negative value of AdjustmentValue specifies that a specific number of ECS instances or elastic container instances will be removed from the scaling group.
     * *   If you set AdjustmentType to PercentChangeInCapacity, Auto Scaling calculates the number of ECS instances or elastic container instances to add or remove by multiplying the current capacity of the scaling group (Total Capacity) by AdjustmentValue divided by 100, rounding off the result to determine the final adjustment count.
     * *   If you specify a cooldown period for a scaling rule, the cooldown period of the scaling rule takes effect after you execute the scaling rule. If you do not specify a cooldown period for a scaling rule, the value of DefaultCooldown of the scaling group takes effect after you execute the scaling rule.
     * *   You can create only a limited number of scaling rules for a scaling group. For more information, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     * *   The following API operations may use the unique identifier of a scaling rule (ScalingRuleAri) that is returned after you call the CreateScalingRule operation:
     *     *   ExecuteScalingRule: You can call this operation to manually execute a scaling rule. In this operation, you can set ScalingRuleAri to the unique identifier of the scaling rule that you want to execute.
     *     *   CreateScheduledTask: You can call this operation to create a scheduled task for a scaling rule. In this operation, you can set ScalingRuleAri to the unique identifier of the scaling rule for which you want to create a scheduled task.
     *
     * @param request - CreateScalingRuleRequest
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
     * Creates a scheduled task. A scheduled task is a type of scaling task that enables automatic execution of a specific scaling rule at a specified point in time. You can call the CreateScheduledTask operation to create a scheduled task to implement automatic scaling of computing resources. This ensures your business continuity and minimizes resource costs.
     *
     * @remarks
     *   If the scaling rule of a scheduled task fails to be executed due to an ongoing scaling activity in the scaling group or because the scaling group is disabled, the scheduled task is automatically retried during the time window specified by `LaunchExpirationTime`. If the scheduled task still fails after the specified time window ends, the task is automatically skipped.
     * *   If several scheduled tasks concurrently attempt to execute the same scaling rule within a scaling group, the following rules apply:
     *     *   Scaling groups with **Expected Number of Instances** configured: The scaling activities incurred by the scheduled tasks are parallel scaling activities. In a proximate time window, Auto Scaling can trigger several scheduled tasks and then execute multiple parallel scaling activities at the same time.
     *     *   Scaling groups with **Expected Number of Instances** not configured: The scaling activity incurred by the earliest scheduled task is executed. Considering that a scaling group allows for no more than one ongoing scaling activity simultaneously, other scheduled tasks will spontaneously invoke retries within the time window specified by `LaunchExpirationTime`. Upon completion of the first scheduled task, any retries invoked by other tasks within the time window specified by `LaunchExpirationTime` lead to continuous enforcement of the scaling rule, with each iteration generating a distinct scaling activity.
     * *   You can use one of the following methods to specify the scaling mode:
     *     *   ScheduledAction: Specify an existing scaling rule that you want Auto Scaling to execute when the scheduled task is triggered.
     *     *   ScalingGroupId: Specify the minimum number, maximum number, or expected number of instances for the scaling group for which you create the scheduled task.
     *     **
     *     **Note** You cannot specify ScheduledAction and ScalingGroupId at the same time.
     *
     * @param request - CreateScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScheduledTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a scheduled task. A scheduled task is a type of scaling task that enables automatic execution of a specific scaling rule at a specified point in time. You can call the CreateScheduledTask operation to create a scheduled task to implement automatic scaling of computing resources. This ensures your business continuity and minimizes resource costs.
     *
     * @remarks
     *   If the scaling rule of a scheduled task fails to be executed due to an ongoing scaling activity in the scaling group or because the scaling group is disabled, the scheduled task is automatically retried during the time window specified by `LaunchExpirationTime`. If the scheduled task still fails after the specified time window ends, the task is automatically skipped.
     * *   If several scheduled tasks concurrently attempt to execute the same scaling rule within a scaling group, the following rules apply:
     *     *   Scaling groups with **Expected Number of Instances** configured: The scaling activities incurred by the scheduled tasks are parallel scaling activities. In a proximate time window, Auto Scaling can trigger several scheduled tasks and then execute multiple parallel scaling activities at the same time.
     *     *   Scaling groups with **Expected Number of Instances** not configured: The scaling activity incurred by the earliest scheduled task is executed. Considering that a scaling group allows for no more than one ongoing scaling activity simultaneously, other scheduled tasks will spontaneously invoke retries within the time window specified by `LaunchExpirationTime`. Upon completion of the first scheduled task, any retries invoked by other tasks within the time window specified by `LaunchExpirationTime` lead to continuous enforcement of the scaling rule, with each iteration generating a distinct scaling activity.
     * *   You can use one of the following methods to specify the scaling mode:
     *     *   ScheduledAction: Specify an existing scaling rule that you want Auto Scaling to execute when the scheduled task is triggered.
     *     *   ScalingGroupId: Specify the minimum number, maximum number, or expected number of instances for the scaling group for which you create the scheduled task.
     *     **
     *     **Note** You cannot specify ScheduledAction and ScalingGroupId at the same time.
     *
     * @param request - CreateScheduledTaskRequest
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
     * Deactivates a scaling configuration.
     *
     * @remarks
     *   You can call this operation to deactivate a scaling configuration only in a disabled scaling group.
     *
     * @param request - DeactivateScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeactivateScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeactivateScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deactivates a scaling configuration.
     *
     * @remarks
     *   You can call this operation to deactivate a scaling configuration only in a disabled scaling group.
     *
     * @param request - DeactivateScalingConfigurationRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you no longer need an event-triggered task, you can call the DeleteAlarm operation to delete it.
     *
     * @param request - DeleteAlarmRequest
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
     * Deletes a scaling configuration of the Elastic Container Instance type. If the scaling configuration of a scaling group is in the Inactive state and the scaling group contains no elastic container instances created from the scaling configuration, you can call the DeleteEciScalingConfiguration operation to delete the scaling configuration to free up the scaling configuration quota.
     *
     * @remarks
     * You cannot call this operation to delete a scaling configuration in the following scenarios:
     * *   The scaling configuration is in the Active state.
     * *   The scaling group contains elastic container instances created from the scaling configuration.
     *
     * @param request - DeleteEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEciScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLifecycleHookResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNotificationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes event notification rules. The event notification feature facilitates efficient issue identification and event management by automatically forwarding notifications from Auto Scaling to designated endpoints such as CloudMonitor or Message Service (MNS) topics and queues. If you no longer require an event notification rule, you can call the DeleteNotificationConfiguration operation to delete it.
     *
     * @param request - DeleteNotificationConfigurationRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScalingGroupResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScalingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a scaling rule.
     *
     * @param request - DeleteScalingRuleRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScheduledTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes scheduled tasks. For workloads with predictable patterns, you can create scheduled tasks to align with your business requirements and optimize resource utilization for cost savings. These tasks automatically ensure that sufficient computing resources are provisioned in anticipation of peak hours and efficiently release unused resources during off-peak hours, thereby streamlining operational efficiency and reducing expenses. If you no longer require a scheduled task, you can call the DeleteScheduledTask operation to delete it.
     *
     * @param request - DeleteScheduledTaskRequest
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
     * Queries event-triggered tasks. You can call the DescribeAlarms operation to learn about the configurations of event-triggered tasks and keep updated on monitoring data changes. This helps you troubleshoot system resource issues at the earliest opportunity and ensures system stability and reliability.
     *
     * @param request - DescribeAlarmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAlarmsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries event-triggered tasks. You can call the DescribeAlarms operation to learn about the configurations of event-triggered tasks and keep updated on monitoring data changes. This helps you troubleshoot system resource issues at the earliest opportunity and ensures system stability and reliability.
     *
     * @param request - DescribeAlarmsRequest
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
            'action'      => 'DescribeAlertConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAlertConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAlertConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of scaling activities that trigger text message, internal message, or email-based notifications. When you call the DescribeAlertConfiguration operation, you must specify the scaling group ID and region ID to query the status of the desired scaling activities. A scaling activity can be in one of the following states: Successful, Failed, and Rejected.
     *
     * @param request - DescribeAlertConfigurationRequest
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
     * Queries the diagnostic reports.
     *
     * @param request - DescribeDiagnoseReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiagnoseReports',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDiagnoseReportsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDiagnoseReportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the diagnostic reports.
     *
     * @param request - DescribeDiagnoseReportsRequest
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
     * Queries the details of a scaling configuration. You can query a scaling configuration by its ID to learn about its details such as the temporary storage size, number of IPv6 addresses, and bandwidth of the elastic IP address (EIP). The scaling configuration details can be obtained as a YAML file.
     *
     * @param request - DescribeEciScalingConfigurationDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEciScalingConfigurationDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEciScalingConfigurationDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a scaling configuration. You can query a scaling configuration by its ID to learn about its details such as the temporary storage size, number of IPv6 addresses, and bandwidth of the elastic IP address (EIP). The scaling configuration details can be obtained as a YAML file.
     *
     * @param request - DescribeEciScalingConfigurationDetailRequest
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
     * Queries scaling configurations of the Elastic Container Instance type. When you call the DescribeEciScalingConfigurations operation, you can specify ScalingGroupId, ScalingConfigurationIds, or ScalingConfigurationNames to query details about the desired scaling configurations, such as the instance bidding policy, instance type, image pulling policy, and load balancing weight of each elastic container instance. This can help you select a suitable template for creating elastic container instances or reference existing scaling configurations before you modify the automatic scaling policy for elastic container instances.
     *
     * @param request - DescribeEciScalingConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeEciScalingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEciScalingConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries scaling configurations of the Elastic Container Instance type. When you call the DescribeEciScalingConfigurations operation, you can specify ScalingGroupId, ScalingConfigurationIds, or ScalingConfigurationNames to query details about the desired scaling configurations, such as the instance bidding policy, instance type, image pulling policy, and load balancing weight of each elastic container instance. This can help you select a suitable template for creating elastic container instances or reference existing scaling configurations before you modify the automatic scaling policy for elastic container instances.
     *
     * @param request - DescribeEciScalingConfigurationsRequest
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
     * Queries the scaling strength of a scaling configuration. The success rate of scale-out events depends on the scaling strength of the scaling configuration that you want to use. By checking the scaling strength of a scaling configuration, you can enable Auto Scaling to measure its performance and improve specific configurations.
     *
     * @param request - DescribeElasticStrengthRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeElasticStrength',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeElasticStrengthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeElasticStrengthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the scaling strength of a scaling configuration. The success rate of scale-out events depends on the scaling strength of the scaling configuration that you want to use. By checking the scaling strength of a scaling configuration, you can enable Auto Scaling to measure its performance and improve specific configurations.
     *
     * @param request - DescribeElasticStrengthRequest
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
     * Queries instance refresh tasks. If you want to view the basic information and execution progress of an instance refresh task, you can call the DescribeInstanceRefreshes operation.
     *
     * @param request - DescribeInstanceRefreshesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'DescribeInstanceRefreshes',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceRefreshesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceRefreshesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries instance refresh tasks. If you want to view the basic information and execution progress of an instance refresh task, you can call the DescribeInstanceRefreshes operation.
     *
     * @param request - DescribeInstanceRefreshesRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLifecycleActionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLifecycleActionsResponse::fromMap($this->execute($params, $req, $runtime));
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
     * Queries lifecycle hooks. When you call this operation, you can specify the lifecycle hook ID or scaling group ID to query the details of the desired lifecycle hook, such as the default action after the lifecycle hook times out, scaling activity that corresponds to the lifecycle hook, Alibaba Cloud Resource Name (ARN) of the notification recipient, and effective period of the lifecycle hook.
     *
     * @remarks
     * You can use one of the following methods to query lifecycle hooks:
     * *   Specify a list of lifecycle hook IDs by using the LifecycleHookIds parameter. In this case, you do not need to specify the ScalingGroupId and LifecycleHookName parameters.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter at the same time.
     *
     * @param request - DescribeLifecycleHooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLifecycleHooksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLifecycleHooksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries lifecycle hooks. When you call this operation, you can specify the lifecycle hook ID or scaling group ID to query the details of the desired lifecycle hook, such as the default action after the lifecycle hook times out, scaling activity that corresponds to the lifecycle hook, Alibaba Cloud Resource Name (ARN) of the notification recipient, and effective period of the lifecycle hook.
     *
     * @remarks
     * You can use one of the following methods to query lifecycle hooks:
     * *   Specify a list of lifecycle hook IDs by using the LifecycleHookIds parameter. In this case, you do not need to specify the ScalingGroupId and LifecycleHookName parameters.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter at the same time.
     *
     * @param request - DescribeLifecycleHooksRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeLimitationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeLimitationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries resource quotas. For example, you can call the DescribeLimitation operation to query the maximum numbers of scheduled tasks that you can create in a scaling group, load balancers that you can attach to a scaling group, instances that you can add to a scaling group, and scaling configurations that you can create in a scaling group.
     *
     * @param request - DescribeLimitationRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeNotificationConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNotificationConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries notification settings. You can call the DescribeNotificationConfiguration operation to query notification settings of scaling events or resource changes, including the notification types and methods.
     *
     * @param request - DescribeNotificationConfigurationsRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeNotificationTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNotificationTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries notification types. You can call the DescribeNotificationTypes operation to query the types of notifications on scaling events or resource changes occurred in your scaling groups. Notifications are triggered in scenarios such as successful scale-out events, successful scale-in events, expiration of scheduled tasks, and partially successful scale-out events.
     *
     * @param request - DescribeNotificationTypesRequest
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
     * Queries instance types. When you call the DescribePatternTypes operation, you can specify attributes such as the vSwitch ID, number of vCPUs, memory size, instance family, and maximum acceptable price to filer instance types that meet your business requirements.
     *
     * @param request - DescribePatternTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePatternTypes',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePatternTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePatternTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries instance types. When you call the DescribePatternTypes operation, you can specify attributes such as the vSwitch ID, number of vCPUs, memory size, instance family, and maximum acceptable price to filer instance types that meet your business requirements.
     *
     * @param request - DescribePatternTypesRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries regions. Before you activate Auto Scaling, you can call the DescribeRegions operation to query the regions where Auto Scaling is officially launched. This preliminary step facilitates the strategic selection of both the optimal region and availability zones for activating Auto Scaling, thereby guaranteeing the finest access speeds and operational efficiency within your chosen geographical area.
     *
     * @param request - DescribeRegionsRequest
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
     * Queries scaling activities. You can call the DescribeScalingActivities operation to query the results of scaling activities triggered by scheduled tasks, event-triggered tasks, or manual execution of scaling rules. For example, you can query the status and cause of a scaling activity. You can also query the total number of instances after a scaling activity is complete.
     *
     * @remarks
     *   You can query all scaling activities in a scaling group by specifying ScalingGroupId.
     * *   You can filter query results based on the status of scaling activities.
     * *   You can query scaling activities within the last 30 days.
     *
     * @param request - DescribeScalingActivitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingActivitiesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries scaling activities. You can call the DescribeScalingActivities operation to query the results of scaling activities triggered by scheduled tasks, event-triggered tasks, or manual execution of scaling rules. For example, you can query the status and cause of a scaling activity. You can also query the total number of instances after a scaling activity is complete.
     *
     * @remarks
     *   You can query all scaling activities in a scaling group by specifying ScalingGroupId.
     * *   You can filter query results based on the status of scaling activities.
     * *   You can query scaling activities within the last 30 days.
     *
     * @param request - DescribeScalingActivitiesRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingActivityDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingActivityDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a scaling activity. You can query a scaling activity by its ID. The scaling activity details include the scaling activity status, error code, and error message. You can efficiently troubleshoot issues and analyze service performance based on the error message.
     *
     * @param request - DescribeScalingActivityDetailRequest
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
     * Queries scaling configurations.
     *
     * @param request - DescribeScalingConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries scaling configurations.
     *
     * @param request - DescribeScalingConfigurationsRequest
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
     * Queries a scaling group. You can call the DescribeScalingGroupDetail operation to query the basic information, instances, and scaling configurations of a scaling group. If you set OutputFormat to YAML for a scaling group of the Elastic Container Instance type, the output is a Kubernetes Deployment file in the YAML format.
     *
     * @param request - DescribeScalingGroupDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingGroupDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a scaling group. You can call the DescribeScalingGroupDetail operation to query the basic information, instances, and scaling configurations of a scaling group. If you set OutputFormat to YAML for a scaling group of the Elastic Container Instance type, the output is a Kubernetes Deployment file in the YAML format.
     *
     * @param request - DescribeScalingGroupDetailRequest
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
     * Queries the latest diagnosis details for a scaling group. Diagnosis details are only returned in the presence of exceptions.
     *
     * @param request - DescribeScalingGroupDiagnoseDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroupDiagnoseDetails',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingGroupDiagnoseDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingGroupDiagnoseDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the latest diagnosis details for a scaling group. Diagnosis details are only returned in the presence of exceptions.
     *
     * @param request - DescribeScalingGroupDiagnoseDetailsRequest
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
     * Queries information about scaling groups, such as the basic information, instances, and scaling configurations.
     *
     * @param request - DescribeScalingGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about scaling groups, such as the basic information, instances, and scaling configurations.
     *
     * @param request - DescribeScalingGroupsRequest
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
     * Queries instances in a scaling group. You can call the DescribeScalingInstances operation to query instance details, such as the number of preemptible instances in the Running state, the number of Elastic Compute Service (ECS) instances, the warm-up status of ECS instances, and the lifecycle status of ECS instances in a scaling group. You can specify the scaling group whose instances you want to query by scaling group ID. If you want to filter instances based on conditions, such as the instance health status, lifecycle status, or creation method, you can also call this operation.
     *
     * @param request - DescribeScalingInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries instances in a scaling group. You can call the DescribeScalingInstances operation to query instance details, such as the number of preemptible instances in the Running state, the number of Elastic Compute Service (ECS) instances, the warm-up status of ECS instances, and the lifecycle status of ECS instances in a scaling group. You can specify the scaling group whose instances you want to query by scaling group ID. If you want to filter instances based on conditions, such as the instance health status, lifecycle status, or creation method, you can also call this operation.
     *
     * @param request - DescribeScalingInstancesRequest
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
     * Queries scaling rules. When you call this operation, you can specify the ID, name, or Alibaba Cloud Resource Name (ARN) of a scaling rule to query the details of the scaling rule. For example, you can query the adjustment method, instance warm-up period, and associated event-triggered tasks of the desired scaling rule.
     *
     * @remarks
     * You can specify a scaling group ID to query all scaling rules in the scaling group. You can also specify the scaling rule ID, name, unique identifier, and type in the request parameters as filter conditions.
     *
     * @param request - DescribeScalingRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScalingRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScalingRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries scaling rules. When you call this operation, you can specify the ID, name, or Alibaba Cloud Resource Name (ARN) of a scaling rule to query the details of the scaling rule. For example, you can query the adjustment method, instance warm-up period, and associated event-triggered tasks of the desired scaling rule.
     *
     * @remarks
     * You can specify a scaling group ID to query all scaling rules in the scaling group. You can also specify the scaling rule ID, name, unique identifier, and type in the request parameters as filter conditions.
     *
     * @param request - DescribeScalingRulesRequest
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
     * Queries scheduled tasks. A scheduled task is a predefined task that triggers the automatic execution of a scaling rule at the specified point in time. It ensures an automatic scaling of computing resources to fulfill your business demands at a minimum cost. After you create a scheduled task, you can call the DescribeScheduledTasks operation to query the details of the task, such as the execution time point and the scaling group ID. You can also call this operation to query the total number of existing scheduled tasks.
     *
     * @remarks
     * You can query scheduled tasks by scaling rule, task ID, or task name.
     *
     * @param request - DescribeScheduledTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeScheduledTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries scheduled tasks. A scheduled task is a predefined task that triggers the automatic execution of a scaling rule at the specified point in time. It ensures an automatic scaling of computing resources to fulfill your business demands at a minimum cost. After you create a scheduled task, you can call the DescribeScheduledTasks operation to query the details of the task, such as the execution time point and the scaling group ID. You can also call this operation to query the total number of existing scheduled tasks.
     *
     * @remarks
     * You can query scheduled tasks by scaling rule, task ID, or task name.
     *
     * @param request - DescribeScheduledTasksRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachAlbServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachAlbServerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Detaches Application Load Balancer (ALB) server groups from a scaling group. When you call the DetachAlbServerGroups operation, you can specify the scaling group ID, ALB server group ID, and port used by Elastic Compute Service (ECS) instances in the desired ALB server group to detach one or more ALB server groups from your scaling group.
     *
     * @param request - DetachAlbServerGroupsRequest
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
     * Detaches one or more ApsaraDB RDS instances from a scaling group. If you want to decrease the number of ApsaraDB RDS instances attached to your scaling group, you can call the DetachDBInstance operation. This operation liberates ApsaraDB RDS instances from your scaling group, thereby significantly boosting the agility and efficiency in managing and allocating your resources.
     *
     * @param request - DetachDBInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachDBInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachDBInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Detaches one or more ApsaraDB RDS instances from a scaling group. If you want to decrease the number of ApsaraDB RDS instances attached to your scaling group, you can call the DetachDBInstance operation. This operation liberates ApsaraDB RDS instances from your scaling group, thereby significantly boosting the agility and efficiency in managing and allocating your resources.
     *
     * @param request - DetachDBInstancesRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachInstancesResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachLoadBalancersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Detaches Classic Load Balancer (CLB, formerly known as Server Load Balancer or SLB) instances from a scaling group. If the current CLB instance no longer meets your business requirements, you can call the DetachLoadBalancers operation to detach it from your scaling group. When you call this operation, you can use ScalingGroupId, LoadBalancer.N, and ForceDetach to specify one or more CLB instances to detach. You can also determine whether to call this operation asynchronously and whether to remove the Elastic Compute Service (ECS) instances acting as backend servers from the backend server groups of the CLB instance. You can call this operation to detach only CLB instances from a scaling group.
     *
     * @param request - DetachLoadBalancersRequest
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
     * Detach server groups from a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the DetachServerGroups operation. By detaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups from your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *
     * @param request - DetachServerGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachServerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Detach server groups from a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the DetachServerGroups operation. By detaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups from your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *
     * @param request - DetachServerGroupsRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachVServerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachVServerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you currently do not need an event-triggered task, you can call the DisableAlarm operation to disable it.
     *
     * @remarks
     * Before you disable an event-triggered task, make sure that the task is in the `Normal`, `Alert`, or `Insufficient Data` state.
     *
     * @param request - DisableAlarmRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableScalingGroupResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you want to reuse an event-triggered task that is in the Disabled state, you can call the EnableAlarm operation to enable it.
     *
     * @param request - EnableAlarmRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableScalingGroupResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnterStandbyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnterStandbyResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteScalingRuleResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExitStandbyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExitStandbyResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tag keys added to Auto Scaling resources. Querying tag keys facilitates easier classification, identification, and monitoring of your Auto Scaling resources, thereby enhancing the flexibility and convenience of your resource management processes.
     *
     * @param request - ListTagKeysRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries tags. You can call the ListTagResources operation to query tags that are added to Auto Scaling resources, thereby clarifying resource utilization and facilitating efficient resource management. This operation aids in the automation of resource categorization and permission management processes.
     *
     * @remarks
     *   Specify at least one of the following request parameters: `ResourceIds` and `Tags`. `Tags.Key` and `Tags.Value` are used to specify the query objects.
     * *   If you provide both `ResourceIds` and `Tags` in your request, the response will exclusively include Auto Scaling resources that satisfy the criteria set by these parameters, ensuring targeted and precise information retrieval.
     *
     * @param request - ListTagResourcesRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tag keys associated with Auto Scaling resources to facilitate a deeper comprehension of those resources. By doing so, you can categorize and manage your Auto Scaling resources more efficiently.
     *
     * @param request - ListTagValuesRequest
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
     *   If you set the MetricType parameter to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Custom monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify the MetricName, DimensionKey, and DimensionValue parameters to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify the user_id and scaling_group dimensions for an event-triggered task to aggregate monitoring data of all Elastic Compute Service (ECS) instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you set the MetricType parameter to custom, the valid values are your custom metrics.
     *     *   For information about the metrics that are supported if you set the MetricType parameter to system, see[ Event-triggered task for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * > The user_id and scaling_group dimensions are automatically populated. You need to only specify the device and state dimensions. For more information, see the `DimensionKey` and `DimensionValue` parameters in the "Request parameters" section of this topic.
     *
     * @param request - ModifyAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAlarmResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies an event-triggered task.
     *
     * @remarks
     *   If you set the MetricType parameter to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Custom monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify the MetricName, DimensionKey, and DimensionValue parameters to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify the user_id and scaling_group dimensions for an event-triggered task to aggregate monitoring data of all Elastic Compute Service (ECS) instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you set the MetricType parameter to custom, the valid values are your custom metrics.
     *     *   For information about the metrics that are supported if you set the MetricType parameter to system, see[ Event-triggered task for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * > The user_id and scaling_group dimensions are automatically populated. You need to only specify the device and state dimensions. For more information, see the `DimensionKey` and `DimensionValue` parameters in the "Request parameters" section of this topic.
     *
     * @param request - ModifyAlarmRequest
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
            'action'      => 'ModifyAlertConfiguration',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAlertConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAlertConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets the status of scaling activities that prompt text message or email notifications.
     *
     * @param request - ModifyAlertConfigurationRequest
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
     * Modifies a scaling configuration of the Elastic Container Instance type. When you call the ModifyEciScalingConfiguration operation, you can specify the ID, name, and instance properties of the scaling configuration whose information you want to modify. You can modify the instance restart policy, instance bidding policy, and elastic IP address (EIP) bandwidth.
     *
     * @remarks
     *   If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     * *   You can call the [ModifyEciScalingConfiguration](https://help.aliyun.com/document_detail/459378.html) operation to check the modification result.
     *
     * @param request - ModifyEciScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyEciScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyEciScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a scaling configuration of the Elastic Container Instance type. When you call the ModifyEciScalingConfiguration operation, you can specify the ID, name, and instance properties of the scaling configuration whose information you want to modify. You can modify the instance restart policy, instance bidding policy, and elastic IP address (EIP) bandwidth.
     *
     * @remarks
     *   If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     * *   You can call the [ModifyEciScalingConfiguration](https://help.aliyun.com/document_detail/459378.html) operation to check the modification result.
     *
     * @param request - ModifyEciScalingConfigurationRequest
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
     * Modifies the information of an Elastic Compute Service (ECS) instance. When you call the ModifyInstanceAttribute operation, you can specify attributes such as the instance ID, scaling group ID, and region ID to modify the attributes of an ECS instance in a scaling group. You can modify only the hosting attributes of instances that are manually added to scaling groups.
     *
     * @param request - ModifyInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information of an Elastic Compute Service (ECS) instance. When you call the ModifyInstanceAttribute operation, you can specify attributes such as the instance ID, scaling group ID, and region ID to modify the attributes of an ECS instance in a scaling group. You can modify only the hosting attributes of instances that are manually added to scaling groups.
     *
     * @param request - ModifyInstanceAttributeRequest
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
     * Modifies a lifecycle hook. If an existing lifecycle hook does not meet your business requirements anymore, you can call the ModifyLifecycleHook operation to modify the information such as the scaling event, timeout period, and default action of the lifecycle hook. Before you modify a lifecycle hook, you can locate the lifecycle hook by its ID, name, or scaling group.
     *
     * @remarks
     * You can use one of the following methods to locate the lifecycle hook that you want to modify:
     * *   Specify LifecycleHookId. In this case, ScalingGroupId and LifecycleHookName are ignored.
     * *   Specify ScalingGroupId and LifecycleHookName. Each lifecycle hook within a scaling group has a unique name.
     *
     * @param request - ModifyLifecycleHookRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyLifecycleHookResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyLifecycleHookResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a lifecycle hook. If an existing lifecycle hook does not meet your business requirements anymore, you can call the ModifyLifecycleHook operation to modify the information such as the scaling event, timeout period, and default action of the lifecycle hook. Before you modify a lifecycle hook, you can locate the lifecycle hook by its ID, name, or scaling group.
     *
     * @remarks
     * You can use one of the following methods to locate the lifecycle hook that you want to modify:
     * *   Specify LifecycleHookId. In this case, ScalingGroupId and LifecycleHookName are ignored.
     * *   Specify ScalingGroupId and LifecycleHookName. Each lifecycle hook within a scaling group has a unique name.
     *
     * @param request - ModifyLifecycleHookRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyNotificationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyNotificationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies event notification rules. Event notification rules support automatic sending of notifications to CloudMonitor, Message Service (MNS) topics, or MNS queues when a specified type of events occur. This helps you learn about the dynamics of your scaling group at the earliest opportunity and further automate resource management. If an existing event notification rule does not meet your business requirements, you can call the ModifyNotificationConfiguration operation to modify the event notification rule, without the need to create a new rule. Take not that you cannot modify the notification method of an event notification rule by calling this operation.
     *
     * @param request - ModifyNotificationConfigurationRequest
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
     * Modifies a scaling configuration.
     *
     * @remarks
     *   If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     * *   If you want to bind a primary elastic network interface (ENI) when you call this operation, you must use one of the following methods. If you use the following methods at the same time, the call fails and an error is reported. In addition, if you use one of the following methods to modify the ENI information when you call this operation, the ENI information configured by using the other method is cleared.
     *     *   You can specify SecurityGroupId, SecurityGroupIds, and Ipv6AddressCount to configure ENI-related information.
     *     *   You can specify NetworkInterfaces to configure primary and secondary ENIs. You must use NetworkInterface to specify at least one primary ENI. If you set NetworkInterface.InstanceType to Primary, it specifies that a primary ENI is configured. If you set NetworkInterface.InstanceType to Secondary or leave it empty, it specifies that a secondary ENI is configured.
     *
     * @param tmpReq - ModifyScalingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->scalingConfigurationId) {
            @$query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }

        if (null !== $request->scalingConfigurationName) {
            @$query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }

        if (null !== $request->schedulerOptionsShrink) {
            @$query['SchedulerOptions'] = $request->schedulerOptionsShrink;
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyScalingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyScalingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a scaling configuration.
     *
     * @remarks
     *   If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     * *   If you want to bind a primary elastic network interface (ENI) when you call this operation, you must use one of the following methods. If you use the following methods at the same time, the call fails and an error is reported. In addition, if you use one of the following methods to modify the ENI information when you call this operation, the ENI information configured by using the other method is cleared.
     *     *   You can specify SecurityGroupId, SecurityGroupIds, and Ipv6AddressCount to configure ENI-related information.
     *     *   You can specify NetworkInterfaces to configure primary and secondary ENIs. You must use NetworkInterface to specify at least one primary ENI. If you set NetworkInterface.InstanceType to Primary, it specifies that a primary ENI is configured. If you set NetworkInterface.InstanceType to Secondary or leave it empty, it specifies that a secondary ENI is configured.
     *
     * @param request - ModifyScalingConfigurationRequest
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
     * Modifies a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can modify scaling groups to adjust your computing power with ease. The computing power refers to the instances that provide the computing capability. When your scaling group cannot meet your business requirements, you can call the ModifyScalingGroup operation to modify scaling group attributes such as the maximum, minimum, and expected numbers of instances. This prevents repeated creation and configuration of scaling groups, which saves you a lot of time and resource costs.
     *
     * @remarks
     *   You cannot modify the following parameters by calling this operation:
     *     *   RegionId
     *     *   LoadBalancerId
     *     **
     *     **Note** If you want to modify the load balancer settings of your scaling group, you can call the AttachLoadBalancers operation or the DetachLoadBalancers operation.
     *     *   DBInstanceId
     *     **
     *     **Note** If you want to modify the ApsaraDB RDS instance settings of your scaling group, you can call the AttachDBInstances operation or the DetachDBInstances operation.
     * *   You can call this operation to modify a scaling group only when the scaling group is in the `Active` or `Inactive` state.
     * *   Enabling a new scaling configuration in the scaling group will not impact existing Elastic Compute Service (ECS) instances or elastic container instances that were provisioned based on the previous scaling configuration. These instances will continue to run as expected.
     * *   If the modification of the MaxSize setting leads to the total number of ECS instances or elastic container instances in the scaling group exceeding the new maximum limit, Auto Scaling proactively removes the surplus instances to restore the total number to match the new maximum limit.
     * *   If the modification of the MinSize setting leads to the total number of ECS instances or elastic container instances in the scaling group exceeding the new minimum threshold, Auto Scaling proactively adds more instances to the scaling group to ensure that the total number aligns with the new minimum threshold.
     * *   If the modification of the DesiredCapacity setting leads to the total number of ECS instances or elastic container instances in the scaling group not matching the new desired capacity, Auto Scaling proactively adjusts the total number of instances to ensure that the total number aligns with the new desired capacity.
     *
     * @param request - ModifyScalingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        if (null !== $request->azBalance) {
            @$query['AzBalance'] = $request->azBalance;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyScalingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyScalingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can modify scaling groups to adjust your computing power with ease. The computing power refers to the instances that provide the computing capability. When your scaling group cannot meet your business requirements, you can call the ModifyScalingGroup operation to modify scaling group attributes such as the maximum, minimum, and expected numbers of instances. This prevents repeated creation and configuration of scaling groups, which saves you a lot of time and resource costs.
     *
     * @remarks
     *   You cannot modify the following parameters by calling this operation:
     *     *   RegionId
     *     *   LoadBalancerId
     *     **
     *     **Note** If you want to modify the load balancer settings of your scaling group, you can call the AttachLoadBalancers operation or the DetachLoadBalancers operation.
     *     *   DBInstanceId
     *     **
     *     **Note** If you want to modify the ApsaraDB RDS instance settings of your scaling group, you can call the AttachDBInstances operation or the DetachDBInstances operation.
     * *   You can call this operation to modify a scaling group only when the scaling group is in the `Active` or `Inactive` state.
     * *   Enabling a new scaling configuration in the scaling group will not impact existing Elastic Compute Service (ECS) instances or elastic container instances that were provisioned based on the previous scaling configuration. These instances will continue to run as expected.
     * *   If the modification of the MaxSize setting leads to the total number of ECS instances or elastic container instances in the scaling group exceeding the new maximum limit, Auto Scaling proactively removes the surplus instances to restore the total number to match the new maximum limit.
     * *   If the modification of the MinSize setting leads to the total number of ECS instances or elastic container instances in the scaling group exceeding the new minimum threshold, Auto Scaling proactively adds more instances to the scaling group to ensure that the total number aligns with the new minimum threshold.
     * *   If the modification of the DesiredCapacity setting leads to the total number of ECS instances or elastic container instances in the scaling group not matching the new desired capacity, Auto Scaling proactively adjusts the total number of instances to ensure that the total number aligns with the new desired capacity.
     *
     * @param request - ModifyScalingGroupRequest
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
     * Modifies a scaling rule. If an existing scaling rule cannot meet your business requirements, you can call the ModifyScalingRule operation to modify the scaling rule, without the need to create a new one. This streamlines your workflow, enhancing operational efficiency while also contributing to cost optimization by avoiding redundant steps.
     *
     * @param request - ModifyScalingRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyScalingRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a scaling rule. If an existing scaling rule cannot meet your business requirements, you can call the ModifyScalingRule operation to modify the scaling rule, without the need to create a new one. This streamlines your workflow, enhancing operational efficiency while also contributing to cost optimization by avoiding redundant steps.
     *
     * @param request - ModifyScalingRuleRequest
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
     * Modifies a scheduled task. If an existing scheduled task cannot meet your business requirements, you can call the ModifyScheduledTask operation to adjust its parameter settings including the scaling rule to execute and the boundary values of your scaling group, without the need to create a new scheduled task. This operation provides a flexible way to optimize scheduled tasks.
     *
     * @remarks
     * You can use the following parameters to specify the scaling method of a scheduled task:
     * *   If you use the `ScheduledAction` parameter, you must select an existing scaling rule for the scheduled task.
     * *   If you use the `ScalingGroupId` parameter, you must specify the minimum number, maximum number, or expected number of instances in the scheduled task.
     * > You cannot specify the `ScheduledAction` and `ScalingGroupId` parameters at the same time.
     *
     * @param request - ModifyScheduledTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyScheduledTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a scheduled task. If an existing scheduled task cannot meet your business requirements, you can call the ModifyScheduledTask operation to adjust its parameter settings including the scaling rule to execute and the boundary values of your scaling group, without the need to create a new scheduled task. This operation provides a flexible way to optimize scheduled tasks.
     *
     * @remarks
     * You can use the following parameters to specify the scaling method of a scheduled task:
     * *   If you use the `ScheduledAction` parameter, you must select an existing scaling rule for the scheduled task.
     * *   If you use the `ScalingGroupId` parameter, you must specify the minimum number, maximum number, or expected number of instances in the scheduled task.
     * > You cannot specify the `ScheduledAction` and `ScalingGroupId` parameters at the same time.
     *
     * @param request - ModifyScheduledTaskRequest
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
     * Rebalances the distribution of Elastic Compute Service (ECS) instances across zones. If ECS instances are unevenly distributed across multiple zones, you can call the RebalanceInstances operation to rebalance the distribution of the ECS instances across the zones.
     *
     * @remarks
     * ## [](#)Usage notes
     * Auto Scaling creates new ECS instances to replace the existing ECS instances to fulfill the rebalancing purpose. Auto Scaling starts the new ECS instances before stopping the existing ECS instances. The rebalancing operation does not affect the performance or service availability of your application.
     * *   This operation is supported by only multi-zone scaling groups whose `MultiAZPolicy` is set to `BALANCE`.
     * *   A rebalancing operation is required only when the distribution of the instances of a multi-zone scaling group is significantly unbalanced. In a rebalancing activity, Auto Scaling replaces up to 20 ECS instances to rectify the unbalanced distribution.
     * *   During the execution of a rebalancing operation, if the number of instances in the scaling group approaches or hits the value of MaxSize but the rebalancing operation needs to continue, Auto Scaling allows the total number of ECS instances to momentarily exceed the value of MaxSize by 10%. This temporary surplus condition persists for a duration until equilibrium in the distribution of ECS instances is achieved. Typically, it takes 1 to 6 minutes.
     *     **
     *     **Note** If the 10% increment of the maximum number of instances in a scaling group yield a non-integer value, the decimal portion is always rounded up to ensure an additional instance is accounted for. For example, you have a scaling group that holds a maximum of 15 ECS instances. During a rebalancing operation, Auto Scaling would permit the total number of instances to momentarily surpass this limit by 2, instead of the calculated 10% (which is 1.5).
     *
     * @param request - RebalanceInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RebalanceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RebalanceInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Rebalances the distribution of Elastic Compute Service (ECS) instances across zones. If ECS instances are unevenly distributed across multiple zones, you can call the RebalanceInstances operation to rebalance the distribution of the ECS instances across the zones.
     *
     * @remarks
     * ## [](#)Usage notes
     * Auto Scaling creates new ECS instances to replace the existing ECS instances to fulfill the rebalancing purpose. Auto Scaling starts the new ECS instances before stopping the existing ECS instances. The rebalancing operation does not affect the performance or service availability of your application.
     * *   This operation is supported by only multi-zone scaling groups whose `MultiAZPolicy` is set to `BALANCE`.
     * *   A rebalancing operation is required only when the distribution of the instances of a multi-zone scaling group is significantly unbalanced. In a rebalancing activity, Auto Scaling replaces up to 20 ECS instances to rectify the unbalanced distribution.
     * *   During the execution of a rebalancing operation, if the number of instances in the scaling group approaches or hits the value of MaxSize but the rebalancing operation needs to continue, Auto Scaling allows the total number of ECS instances to momentarily exceed the value of MaxSize by 10%. This temporary surplus condition persists for a duration until equilibrium in the distribution of ECS instances is achieved. Typically, it takes 1 to 6 minutes.
     *     **
     *     **Note** If the 10% increment of the maximum number of instances in a scaling group yield a non-integer value, the decimal portion is always rounded up to ensure an additional instance is accounted for. For example, you have a scaling group that holds a maximum of 15 ECS instances. During a rebalancing operation, Auto Scaling would permit the total number of instances to momentarily surpass this limit by 2, instead of the calculated 10% (which is 1.5).
     *
     * @param request - RebalanceInstancesRequest
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
     * Extends the time window during which Elastic Compute Service (ECS) instances stay in a Pending state. If the current time window during which an ECS instance stays in a Pending state is not sufficient for you to complete custom operations on the ECS instance, you can call the RecordLifecycleActionHeartbeat operation to extend the time window. When you call this operation, you can specify lifecycleHookId, lifecycleActionToken, and heartbeatTimeout to extend the time window for the desired ECS instance.
     *
     * @remarks
     * You can call this operation only to extend the time window during which Elastic Compute Service (ECS) instances stay in a Pending state.
     * An ECS instance can stay in a Pending state for up to six hours. Each time an ECS instance enters a Pending state, you can extend the time window during which the ECS instance stays in the Pending state up to 20 times.
     *
     * @param request - RecordLifecycleActionHeartbeatRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RecordLifecycleActionHeartbeatResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RecordLifecycleActionHeartbeatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Extends the time window during which Elastic Compute Service (ECS) instances stay in a Pending state. If the current time window during which an ECS instance stays in a Pending state is not sufficient for you to complete custom operations on the ECS instance, you can call the RecordLifecycleActionHeartbeat operation to extend the time window. When you call this operation, you can specify lifecycleHookId, lifecycleActionToken, and heartbeatTimeout to extend the time window for the desired ECS instance.
     *
     * @remarks
     * You can call this operation only to extend the time window during which Elastic Compute Service (ECS) instances stay in a Pending state.
     * An ECS instance can stay in a Pending state for up to six hours. Each time an ECS instance enters a Pending state, you can extend the time window during which the ECS instance stays in the Pending state up to 20 times.
     *
     * @param request - RecordLifecycleActionHeartbeatRequest
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
     * Removes one or more instances from a scaling group. If your scaling group is enabled and contains no ongoing scaling activities, you can call the RemoveInstances operation to remove instances that you no longer require from the scaling group.
     *
     * @remarks
     *   Before you call this operation, make sure that the following requirements are met:
     *     *   The scaling group is in the Active state.
     *     *   No scaling activity is in progress within the scaling group.
     * > If no scaling activity is in progress within the scaling group, you can call the operation even within the cooldown period.
     * *   If an ECS instance is automatically created by Auto Scaling, or if an ECS instance is manually added to a scaling group and managed by the scaling group, the ECS instance is stopped in economical mode or is released after the instance is removed from the scaling group.
     * *   If an ECS instance is manually added to a scaling group and is not managed by the scaling group, the ECS instance is not stopped or released after the instance is removed from the scaling group.
     * *   If the difference between the number of existing ECS instances specified by the TotalCapacity parameter and the number of ECS instances that you call this operation to remove is less than the value of the MinSize parameter, the call fails.
     * A successful call only means that Auto Scaling accepts the request. The scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     *
     * @param request - RemoveInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveInstancesResponse
     *
     * @param RemoveInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveInstancesResponse
     */
    public function removeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes one or more instances from a scaling group. If your scaling group is enabled and contains no ongoing scaling activities, you can call the RemoveInstances operation to remove instances that you no longer require from the scaling group.
     *
     * @remarks
     *   Before you call this operation, make sure that the following requirements are met:
     *     *   The scaling group is in the Active state.
     *     *   No scaling activity is in progress within the scaling group.
     * > If no scaling activity is in progress within the scaling group, you can call the operation even within the cooldown period.
     * *   If an ECS instance is automatically created by Auto Scaling, or if an ECS instance is manually added to a scaling group and managed by the scaling group, the ECS instance is stopped in economical mode or is released after the instance is removed from the scaling group.
     * *   If an ECS instance is manually added to a scaling group and is not managed by the scaling group, the ECS instance is not stopped or released after the instance is removed from the scaling group.
     * *   If the difference between the number of existing ECS instances specified by the TotalCapacity parameter and the number of ECS instances that you call this operation to remove is less than the value of the MinSize parameter, the call fails.
     * A successful call only means that Auto Scaling accepts the request. The scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     *
     * @param request - RemoveInstancesRequest
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
            'action'      => 'ResumeInstanceRefresh',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeInstanceRefreshResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resumes an instance refresh task.
     *
     * @param request - ResumeInstanceRefreshRequest
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
     * Resumes suspended processes in a scaling group. This operation allows Auto Scaling to proceed with executing these processes according to their predefined rules and logic. For example, if you resume the health check process in your scaling group, Auto Scaling automatically detects and removes any instances deemed unhealthy from the scaling group.
     *
     * @param request - ResumeProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResumeProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResumeProcessesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resumes suspended processes in a scaling group. This operation allows Auto Scaling to proceed with executing these processes according to their predefined rules and logic. For example, if you resume the health check process in your scaling group, Auto Scaling automatically detects and removes any instances deemed unhealthy from the scaling group.
     *
     * @param request - ResumeProcessesRequest
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
     * Rolls back an instance refresh task. If an instance refresh task cannot meet your business requirements, you can call the RollbackInstanceRefresh operation. When you roll back an instance refresh task, Auto Scaling creates new instances based on the active scaling configuration to replace the instances whose configurations are already updated by running the task.
     *
     * @param request - RollbackInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'RollbackInstanceRefresh',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RollbackInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RollbackInstanceRefreshResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Rolls back an instance refresh task. If an instance refresh task cannot meet your business requirements, you can call the RollbackInstanceRefresh operation. When you roll back an instance refresh task, Auto Scaling creates new instances based on the active scaling configuration to replace the instances whose configurations are already updated by running the task.
     *
     * @param request - RollbackInstanceRefreshRequest
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
     * Scales instances. The ScaleWithAdjustment operation differs from the ExecuteScalingRule operation in that ScaleWithAdjust can directly scale instances without requiring you to create a scaling rule in advance.
     *
     * @remarks
     *   Before you call this operation, take note of the following items:
     *     *   The scaling group is in the Active state.
     *     *   The scaling group has no ongoing scaling activities.
     * *   If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities before the cooldown period of the scaling group expires.
     * *   If the addition of a specific number of Elastic Compute Service (ECS) instances to the scaling group causes the total number of ECS instances in the scaling group to exceed the maximum allowed number, Auto Scaling adds ECS instances to the scaling group until the total number of instances is equal to the maximum allowed number.
     * *   If the removal of a specific number of ECS instances from the scaling group causes the total number of ECS instances in the scaling group to be less than the minimum allowed number, Auto Scaling removes ECS instances from the scaling group until the total number of instances is equal to the minimum allowed number.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of `ScalingActivityId` in the response.
     *
     * @param tmpReq - ScaleWithAdjustmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ScaleWithAdjustmentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScaleWithAdjustmentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Scales instances. The ScaleWithAdjustment operation differs from the ExecuteScalingRule operation in that ScaleWithAdjust can directly scale instances without requiring you to create a scaling rule in advance.
     *
     * @remarks
     *   Before you call this operation, take note of the following items:
     *     *   The scaling group is in the Active state.
     *     *   The scaling group has no ongoing scaling activities.
     * *   If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities before the cooldown period of the scaling group expires.
     * *   If the addition of a specific number of Elastic Compute Service (ECS) instances to the scaling group causes the total number of ECS instances in the scaling group to exceed the maximum allowed number, Auto Scaling adds ECS instances to the scaling group until the total number of instances is equal to the maximum allowed number.
     * *   If the removal of a specific number of ECS instances from the scaling group causes the total number of ECS instances in the scaling group to be less than the minimum allowed number, Auto Scaling removes ECS instances from the scaling group until the total number of instances is equal to the minimum allowed number.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of `ScalingActivityId` in the response.
     *
     * @param request - ScaleWithAdjustmentRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetGroupDeletionProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetGroupDeletionProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets deletion protection for a scaling group. If you enable deletion protection for a scaling group, you cannot delete the scaling group. If you disable deletion protection for a scaling group, you can directly delete the scaling group. You can call the SetGroupDeletionProtection operation to enable or disable deletion protection.
     *
     * @param request - SetGroupDeletionProtectionRequest
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
     * Sets instance health. At times, the automatic health check system might not sufficiently determine the precise health status of your Elastic Compute Service (ECS) instances or elastic container instances. To overcome this, you can call the SetInstanceHealth operation to swiftly pinpoint problematic instances and resolve issues. This operation is designed to more precisely align with real-world business requirements and tackle O\\&M hurdles efficiently.
     *
     * @remarks
     * Auto Scaling detects and removes unhealthy ECS instances or elastic container instances from the corresponding scaling groups. If you want to retain a specific instance in the corresponding scaling group, you can put the instance into the Standby or Protected state. For more information, see [EnterStandby](~~EnterStandby~~) and [SetInstancesProtection](~~SetInstancesProtection~~).
     *
     * @param request - SetInstanceHealthRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetInstanceHealthResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetInstanceHealthResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets instance health. At times, the automatic health check system might not sufficiently determine the precise health status of your Elastic Compute Service (ECS) instances or elastic container instances. To overcome this, you can call the SetInstanceHealth operation to swiftly pinpoint problematic instances and resolve issues. This operation is designed to more precisely align with real-world business requirements and tackle O\\&M hurdles efficiently.
     *
     * @remarks
     * Auto Scaling detects and removes unhealthy ECS instances or elastic container instances from the corresponding scaling groups. If you want to retain a specific instance in the corresponding scaling group, you can put the instance into the Standby or Protected state. For more information, see [EnterStandby](~~EnterStandby~~) and [SetInstancesProtection](~~SetInstancesProtection~~).
     *
     * @param request - SetInstanceHealthRequest
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
     * Puts or removes Elastic Compute Service (ECS) instances into or from the Protected state. After you put an ECS instance into the Protected state, the ECS instance will not be stopped or released when a scale-in event is triggered. In this case, you can manually delete the ECS instance in the Auto Scaling console or by calling the RemoveInstances operation.
     *
     * @remarks
     * Once ECS instances enter the Protected state, they become subject to the following restrictions:
     * *   ECS instances will persist in the Protected state, unless you deliberately remove them from this state.
     * *   Even in scenarios where automatic scale-in actions are initiated due to fluctuations in the number of ECS instances or the execution of event-triggered tasks, Auto Scaling does not remove ECS instances that are in the Protected state from their respective scaling groups. Only after being manually removed from their respective scaling groups can ECS instances that are in the Protected state be released. For more information, see [Remove an ECS instance](https://help.aliyun.com/document_detail/459393.html).
     * *   ECS instances in the Protected state maintain their health status even when they undergo stopping or restarting processes.
     *
     * @param request - SetInstancesProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetInstancesProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetInstancesProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Puts or removes Elastic Compute Service (ECS) instances into or from the Protected state. After you put an ECS instance into the Protected state, the ECS instance will not be stopped or released when a scale-in event is triggered. In this case, you can manually delete the ECS instance in the Auto Scaling console or by calling the RemoveInstances operation.
     *
     * @remarks
     * Once ECS instances enter the Protected state, they become subject to the following restrictions:
     * *   ECS instances will persist in the Protected state, unless you deliberately remove them from this state.
     * *   Even in scenarios where automatic scale-in actions are initiated due to fluctuations in the number of ECS instances or the execution of event-triggered tasks, Auto Scaling does not remove ECS instances that are in the Protected state from their respective scaling groups. Only after being manually removed from their respective scaling groups can ECS instances that are in the Protected state be released. For more information, see [Remove an ECS instance](https://help.aliyun.com/document_detail/459393.html).
     * *   ECS instances in the Protected state maintain their health status even when they undergo stopping or restarting processes.
     *
     * @param request - SetInstancesProtectionRequest
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
     * Starts an instance refresh task. If you want to apply a new scaling configuration in a scaling group or update the image specified in a scaling configuration, you can call the StartInstanceRefresh operation.
     *
     * @remarks
     *   Only one instance refresh task can be executed at a time in a scaling group.
     * *   You can start instance refresh tasks for Elastic Compute Service (ECS) instances in scaling groups that use the **priority policy** as the scaling policy. Scaling groups whose capacity is measured based on the **number of vCPUs** and scaling groups whose instance reclaim mode is **Economical Mode** or **Forcibly Recycle** do not support the StartInstanceRefresh operation.
     * *   When you start an instance refresh task, scaling events can be completed as expected. Take note that instances that are scaled out use the configurations specified in the instance refresh task.
     * *   The StartInstanceRefresh operation does not take effect on instances that are manually added or instances that are in the Standby and Protected states.
     *
     * @param request - StartInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstanceRefresh',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartInstanceRefreshResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts an instance refresh task. If you want to apply a new scaling configuration in a scaling group or update the image specified in a scaling configuration, you can call the StartInstanceRefresh operation.
     *
     * @remarks
     *   Only one instance refresh task can be executed at a time in a scaling group.
     * *   You can start instance refresh tasks for Elastic Compute Service (ECS) instances in scaling groups that use the **priority policy** as the scaling policy. Scaling groups whose capacity is measured based on the **number of vCPUs** and scaling groups whose instance reclaim mode is **Economical Mode** or **Forcibly Recycle** do not support the StartInstanceRefresh operation.
     * *   When you start an instance refresh task, scaling events can be completed as expected. Take note that instances that are scaled out use the configurations specified in the instance refresh task.
     * *   The StartInstanceRefresh operation does not take effect on instances that are manually added or instances that are in the Standby and Protected states.
     *
     * @param request - StartInstanceRefreshRequest
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
     * Suspends an instance refresh task. If you are not sure that you want to roll back an ongoing instance refresh task whose configurations you think has an issue, you can call the SuspendInstanceRefresh operation to suspend the task.
     *
     * @remarks
     *   You cannot call this operation to suspend an instance refresh task that is being rolled back.
     *
     * @param request - SuspendInstanceRefreshRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
            'action'      => 'SuspendInstanceRefresh',
            'version'     => '2022-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SuspendInstanceRefreshResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SuspendInstanceRefreshResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Suspends an instance refresh task. If you are not sure that you want to roll back an ongoing instance refresh task whose configurations you think has an issue, you can call the SuspendInstanceRefresh operation to suspend the task.
     *
     * @remarks
     *   You cannot call this operation to suspend an instance refresh task that is being rolled back.
     *
     * @param request - SuspendInstanceRefreshRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SuspendProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SuspendProcessesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Suspends scaling processes. This operation empowers you to selectively pause distinct scaling processes within a particular scaling group, enabling you to carry out alternative tasks and achieve more granular management over your scaling operations.
     *
     * @param request - SuspendProcessesRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Removes tags from Auto Scaling resources simultaneously. This operation streamlines resource management activities, enhances system efficiency, and mitigates potential security vulnerabilities. Once a tag is removed from a particular resource, and if it is not re-added to any other resource, the system will automatically delete the unused tag.
     *
     * @param request - UntagResourcesRequest
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
     * Checks whether the specified Alibaba Cloud account assumes the AliyunServiceRoleForAutoScaling service-linked role. An account can be used to operate Elastic Compute Service (ECS) instances and elastic container instances only after it assumes the service-linked role.
     *
     * @param request - VerifyAuthenticationRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return VerifyAuthenticationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifyAuthenticationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Checks whether the specified Alibaba Cloud account assumes the AliyunServiceRoleForAutoScaling service-linked role. An account can be used to operate Elastic Compute Service (ECS) instances and elastic container instances only after it assumes the service-linked role.
     *
     * @param request - VerifyAuthenticationRequest
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return VerifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifyUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Verifies whether Auto Scaling is activated. This operation guarantees that in response to shifts in business workloads or variations in incoming traffic, the system will automatically adjust resource provisioning. This auto-scaling capability enhances the overall system performance, ensuring high availability and improved flexibility to accommodate dynamic demands.
     *
     * @param request - VerifyUserRequest
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
