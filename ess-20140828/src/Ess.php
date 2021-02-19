<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachDBInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachDBInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachLoadBalancersRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachLoadBalancersResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachVServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\AttachVServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CompleteLifecycleActionRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CompleteLifecycleActionResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateAlarmRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateAlarmResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateLifecycleHookRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateLifecycleHookResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateNotificationConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateNotificationConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingConfigurationShrinkRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeactivateScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeactivateScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteAlarmRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteAlarmResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteLifecycleHookRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteLifecycleHookResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteNotificationConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteNotificationConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DeleteScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeAlarmsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeAlarmsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleHooksRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleHooksResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLimitationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLimitationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationTypesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeNotificationTypesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivitiesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivitiesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivityDetailRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivityDetailResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScheduledTasksRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScheduledTasksResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachDBInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachDBInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachLoadBalancersRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachLoadBalancersResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachVServerGroupsRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DetachVServerGroupsResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DisableAlarmRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DisableAlarmResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\DisableScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\DisableScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\EnableAlarmRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\EnableAlarmResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\EnableScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\EnableScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\EnterStandbyRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\EnterStandbyResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ExecuteScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ExecuteScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ExitStandbyRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ExitStandbyResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyAlarmRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyAlarmResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyLifecycleHookRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyLifecycleHookResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyNotificationConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyNotificationConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingConfigurationShrinkRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\RebalanceInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\RebalanceInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\RecordLifecycleActionHeartbeatRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\RecordLifecycleActionHeartbeatResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\RemoveInstancesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\RemoveInstancesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\ResumeProcessesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\ResumeProcessesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\SetGroupDeletionProtectionRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\SetGroupDeletionProtectionResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\SetInstanceHealthRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\SetInstanceHealthResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\SetInstancesProtectionRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\SetInstancesProtectionResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\SuspendProcessesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\SuspendProcessesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\VerifyAuthenticationRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\VerifyAuthenticationResponse;
use AlibabaCloud\SDK\Ess\V20140828\Models\VerifyUserRequest;
use AlibabaCloud\SDK\Ess\V20140828\Models\VerifyUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
            'us-west-1'                   => 'ess.aliyuncs.com',
            'us-east-1'                   => 'ess.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ess.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ess.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ess.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ess.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ess.aliyuncs.com',
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
            'cn-zhangbei-na61-b01'        => 'ess.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ess.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ess.aliyuncs.com',
            'eu-west-1-oxs'               => 'ess.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'ess.ap-northeast-1.aliyuncs.com',
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
     * @param AttachDBInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AttachDBInstancesResponse
     */
    public function attachDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachDBInstancesResponse::fromMap($this->doRPCRequest('AttachDBInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AttachInstancesResponse
     */
    public function attachInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachInstancesResponse::fromMap($this->doRPCRequest('AttachInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachLoadBalancersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachLoadBalancersResponse
     */
    public function attachLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachLoadBalancersResponse::fromMap($this->doRPCRequest('AttachLoadBalancers', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param AttachVServerGroupsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AttachVServerGroupsResponse
     */
    public function attachVServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachVServerGroupsResponse::fromMap($this->doRPCRequest('AttachVServerGroups', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CompleteLifecycleActionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CompleteLifecycleActionResponse
     */
    public function completeLifecycleActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CompleteLifecycleActionResponse::fromMap($this->doRPCRequest('CompleteLifecycleAction', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlarmResponse
     */
    public function createAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlarmResponse::fromMap($this->doRPCRequest('CreateAlarm', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLifecycleHookResponse
     */
    public function createLifecycleHookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLifecycleHookResponse::fromMap($this->doRPCRequest('CreateLifecycleHook', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateNotificationConfigurationResponse
     */
    public function createNotificationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNotificationConfigurationResponse::fromMap($this->doRPCRequest('CreateNotificationConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateScalingConfigurationRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateScalingConfigurationResponse
     */
    public function createScalingConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScalingConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->schedulerOptions)) {
            $request->schedulerOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->schedulerOptions, 'SchedulerOptions', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScalingConfigurationResponse::fromMap($this->doRPCRequest('CreateScalingConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateScalingGroupResponse
     */
    public function createScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScalingGroupResponse::fromMap($this->doRPCRequest('CreateScalingGroup', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateScalingRuleResponse
     */
    public function createScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScalingRuleResponse::fromMap($this->doRPCRequest('CreateScalingRule', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScheduledTaskResponse::fromMap($this->doRPCRequest('CreateScheduledTask', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeactivateScalingConfigurationRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeactivateScalingConfigurationResponse
     */
    public function deactivateScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactivateScalingConfigurationResponse::fromMap($this->doRPCRequest('DeactivateScalingConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlarmResponse::fromMap($this->doRPCRequest('DeleteAlarm', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteLifecycleHookResponse
     */
    public function deleteLifecycleHookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLifecycleHookResponse::fromMap($this->doRPCRequest('DeleteLifecycleHook', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNotificationConfigurationResponse::fromMap($this->doRPCRequest('DeleteNotificationConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteScalingConfigurationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteScalingConfigurationResponse
     */
    public function deleteScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScalingConfigurationResponse::fromMap($this->doRPCRequest('DeleteScalingConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteScalingGroupResponse
     */
    public function deleteScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScalingGroupResponse::fromMap($this->doRPCRequest('DeleteScalingGroup', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScalingRuleResponse::fromMap($this->doRPCRequest('DeleteScalingRule', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScheduledTaskResponse::fromMap($this->doRPCRequest('DeleteScheduledTask', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlarmsResponse::fromMap($this->doRPCRequest('DescribeAlarms', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeLifecycleActionsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLifecycleActionsResponse
     */
    public function describeLifecycleActionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLifecycleActionsResponse::fromMap($this->doRPCRequest('DescribeLifecycleActions', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeLifecycleHooksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLifecycleHooksResponse
     */
    public function describeLifecycleHooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLifecycleHooksResponse::fromMap($this->doRPCRequest('DescribeLifecycleHooks', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLimitationResponse::fromMap($this->doRPCRequest('DescribeLimitation', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNotificationConfigurationsResponse::fromMap($this->doRPCRequest('DescribeNotificationConfigurations', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNotificationTypesResponse::fromMap($this->doRPCRequest('DescribeNotificationTypes', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeScalingActivitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScalingActivitiesResponse
     */
    public function describeScalingActivitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingActivitiesResponse::fromMap($this->doRPCRequest('DescribeScalingActivities', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeScalingActivityDetailRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeScalingActivityDetailResponse
     */
    public function describeScalingActivityDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingActivityDetailResponse::fromMap($this->doRPCRequest('DescribeScalingActivityDetail', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingConfigurationsResponse::fromMap($this->doRPCRequest('DescribeScalingConfigurations', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeScalingInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScalingInstancesResponse
     */
    public function describeScalingInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingInstancesResponse::fromMap($this->doRPCRequest('DescribeScalingInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeScalingRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScalingRulesResponse
     */
    public function describeScalingRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingRulesResponse::fromMap($this->doRPCRequest('DescribeScalingRules', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeScheduledTasksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScheduledTasksResponse
     */
    public function describeScheduledTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScheduledTasksResponse::fromMap($this->doRPCRequest('DescribeScheduledTasks', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachDBInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DetachDBInstancesResponse
     */
    public function detachDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachDBInstancesResponse::fromMap($this->doRPCRequest('DetachDBInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DetachInstancesResponse
     */
    public function detachInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachInstancesResponse::fromMap($this->doRPCRequest('DetachInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DetachLoadBalancersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachLoadBalancersResponse
     */
    public function detachLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachLoadBalancersResponse::fromMap($this->doRPCRequest('DetachLoadBalancers', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DetachVServerGroupsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetachVServerGroupsResponse
     */
    public function detachVServerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachVServerGroupsResponse::fromMap($this->doRPCRequest('DetachVServerGroups', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DisableAlarmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableAlarmResponse
     */
    public function disableAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableAlarmResponse::fromMap($this->doRPCRequest('DisableAlarm', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableScalingGroupResponse::fromMap($this->doRPCRequest('DisableScalingGroup', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableAlarmResponse::fromMap($this->doRPCRequest('EnableAlarm', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EnableScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableScalingGroupResponse
     */
    public function enableScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableScalingGroupResponse::fromMap($this->doRPCRequest('EnableScalingGroup', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param EnterStandbyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EnterStandbyResponse
     */
    public function enterStandbyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnterStandbyResponse::fromMap($this->doRPCRequest('EnterStandby', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ExecuteScalingRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExecuteScalingRuleResponse
     */
    public function executeScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteScalingRuleResponse::fromMap($this->doRPCRequest('ExecuteScalingRule', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ExitStandbyRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExitStandbyResponse
     */
    public function exitStandbyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExitStandbyResponse::fromMap($this->doRPCRequest('ExitStandby', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyAlarmResponse
     */
    public function modifyAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAlarmResponse::fromMap($this->doRPCRequest('ModifyAlarm', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyLifecycleHookRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyLifecycleHookResponse
     */
    public function modifyLifecycleHookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyLifecycleHookResponse::fromMap($this->doRPCRequest('ModifyLifecycleHook', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyNotificationConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyNotificationConfigurationResponse
     */
    public function modifyNotificationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyNotificationConfigurationResponse::fromMap($this->doRPCRequest('ModifyNotificationConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyScalingConfigurationRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyScalingConfigurationResponse
     */
    public function modifyScalingConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyScalingConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->schedulerOptions)) {
            $request->schedulerOptionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->schedulerOptions, 'SchedulerOptions', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingConfigurationResponse::fromMap($this->doRPCRequest('ModifyScalingConfiguration', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyScalingGroupResponse
     */
    public function modifyScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingGroupResponse::fromMap($this->doRPCRequest('ModifyScalingGroup', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingRuleResponse::fromMap($this->doRPCRequest('ModifyScalingRule', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyScheduledTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->doRPCRequest('ModifyScheduledTask', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RebalanceInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RebalanceInstancesResponse
     */
    public function rebalanceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebalanceInstancesResponse::fromMap($this->doRPCRequest('RebalanceInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RecordLifecycleActionHeartbeatRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RecordLifecycleActionHeartbeatResponse
     */
    public function recordLifecycleActionHeartbeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RecordLifecycleActionHeartbeatResponse::fromMap($this->doRPCRequest('RecordLifecycleActionHeartbeat', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param RemoveInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveInstancesResponse
     */
    public function removeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveInstancesResponse::fromMap($this->doRPCRequest('RemoveInstances', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeProcessesResponse::fromMap($this->doRPCRequest('ResumeProcesses', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetGroupDeletionProtectionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetGroupDeletionProtectionResponse
     */
    public function setGroupDeletionProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetGroupDeletionProtectionResponse::fromMap($this->doRPCRequest('SetGroupDeletionProtection', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param SetInstanceHealthRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetInstanceHealthResponse
     */
    public function setInstanceHealthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetInstanceHealthResponse::fromMap($this->doRPCRequest('SetInstanceHealth', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SetInstancesProtectionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetInstancesProtectionResponse
     */
    public function setInstancesProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetInstancesProtectionResponse::fromMap($this->doRPCRequest('SetInstancesProtection', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SuspendProcessesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SuspendProcessesResponse
     */
    public function suspendProcessesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendProcessesResponse::fromMap($this->doRPCRequest('SuspendProcesses', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyAuthenticationResponse::fromMap($this->doRPCRequest('VerifyAuthentication', '2014-08-28', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyUserResponse::fromMap($this->doRPCRequest('VerifyUser', '2014-08-28', 'HTTPS', 'POST', 'AK', 'none', $req, $runtime));
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
