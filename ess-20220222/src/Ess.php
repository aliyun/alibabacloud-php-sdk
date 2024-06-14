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
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlertConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlertConfigurationResponse;
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
     * @summary Manages scaling configurations of the Elastic Container Instance type. If you want to efficiently create or update a scaling configuration of the Elastic Container Instance type by using a configuration file, you can call the ApplyEciScalingConfiguration operation.
     *  *
     * @description You can manage scaling configurations of the Elastic Container Instance type by using a YAML configuration file based on the following logic:
     * If you specify the ID of a scaling configuration, you can update the scaling configuration by using the YAML configuration file. If you do not specify the ID of a scaling configuration, you can create a scaling configuration by using the YAML configuration file.
     *  *
     * @param ApplyEciScalingConfigurationRequest $request ApplyEciScalingConfigurationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyEciScalingConfigurationResponse ApplyEciScalingConfigurationResponse
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
     * @summary Manages scaling configurations of the Elastic Container Instance type. If you want to efficiently create or update a scaling configuration of the Elastic Container Instance type by using a configuration file, you can call the ApplyEciScalingConfiguration operation.
     *  *
     * @description You can manage scaling configurations of the Elastic Container Instance type by using a YAML configuration file based on the following logic:
     * If you specify the ID of a scaling configuration, you can update the scaling configuration by using the YAML configuration file. If you do not specify the ID of a scaling configuration, you can create a scaling configuration by using the YAML configuration file.
     *  *
     * @param ApplyEciScalingConfigurationRequest $request ApplyEciScalingConfigurationRequest
     *
     * @return ApplyEciScalingConfigurationResponse ApplyEciScalingConfigurationResponse
     */
    public function applyEciScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyEciScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary 基于yaml配置进行弹性伸缩管理
     *  *
     * @description You can call the ApplyScalingGroup operation to create scaling groups of the Elastic Container Instance type with ease. The resources of the scaling groups are defined in Kubernetes Deployment YAML files. You can also call this operation to extend annotations for elastic container instances in Kubernetes Deployment YAML files. For more information, see "Supported annotations" in this topic.
     * Mapping between YAML files and scaling groups: You can map the triplet of namespace, kind, and name in a YAML file to a scaling group name. A YAML file and a scaling group have a one-to-one mapping relationship in a region. For example, if you use the Kubernetes Deployment YAML file whose name is NGINX in the default namespace to create a scaling group in a region, the unique name of the mapped scaling group is k8s_default_Deployment_nginx.
     * You can use a Kubernetes Deployment YAML file to manage a scaling group based on the following logic:
     * * If an existing scaling group has a mapping relationship with your Kubernetes Deployment YAML file, you can update the scaling group by using the YAML file.
     * * If no scaling group that has a mapping relationship with your Kubernetes Deployment YAML file exists, you can create a scaling group with ease by using the YAML file.
     * ### Precautions
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
     * |k8s.aliyun.com/eci-use-specs|2-4Gi|The specifications of 2 vCPUs and 4 GB memory. For more information, see [Create pods by specifying multiple specifications](https://help.aliyun.com/document_detail/451267.html).|
     * |k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c\\*\\*\\*\\*|The ID of the vSwitch. You can specify multiple vSwitches to specify multiple zones.|
     * |k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv\\*\\*\\*\\*|The ID of the security group. Before you configure this annotation, take note of the following requirements:<ul data-sourcepos="26:74-26:168"><li data-sourcepos="26:78-26:114">You can specify one or more security groups. You can specify up to five security groups for each scaling group.</li><li data-sourcepos="26:114-26:140">If you specify multiple security groups, the security groups must belong to the same VPC.</li><li data-sourcepos="26:140-26:163">If you specify multiple security groups, the security groups must be of the same type.</li></ul>|
     * |k8s.aliyun.com/eci-sls-enable|"false"|If you set the value to false, the log collection feature is disabled.
     * If you do not want to use Custom Resource Definition (CRD) for Simple Log Service to collect logs of specific pods, you can configure this annotation for the pods and set the value to false. This prevents resource wastes caused by Logtails created by the system.|
     * |k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|The bidding policy for the preemptible instance. Valid values:<ul data-sourcepos="28:69-28:204"><li data-sourcepos="28:73-28:158">SpotWithPriceLimit: The instance is created as a preemptible instance for which you specify the maximum hourly price If you set the value to SpotWithPriceLimit, you must configure the k8s.aliyun.com/eci-spot-price-limit annotation.</li><li data-sourcepos="28:158-28:199">SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is used as the bid price.</li></ul>|
     * |k8s.aliyun.com/eci-spot-price-limit|"0.5"|The maximum hourly price of the preemptible instance. This value can be accurate to up to three decimal places.
     * This annotation takes effect only when you set the k8s.aliyun.com/eci-spot-strategy annotation to SpotWithPriceLimit.|
     * |k8s.aliyun.com/eci-with-eip|"true"|If you set the value to true, an EIP is automatically created and bound to each elastic container instance.|
     * |k8s.aliyun.com/eci-data-cache-bucket|default|The bucket of the specified DataCache. If you want to use a DataCache to create a pod, you must configure this annotation.|
     * |k8s.aliyun.com/eci-data-cache-pl|PL1|The performance level (PL) of the cloud disk that you want to create by using the specified DataCache.
     * By default, enhanced SSDs (ESSDs) are created. Default value: PL1.|
     * |k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50000, 1000 × Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}. For more information, see [ESSD AutoPL](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created by using the specified DataCache is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|Specifies whether the Burst feature is enabled for the ESSD AutoPL disk. For more information, see [ESSD AutoPL](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created by using the specified DataCache is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|The tags that you want to add to each elastic container instance. You can add up to three tags for each elastic container instance. Separate a tag key and a tag value with a colon (:). Separate multiple tags with commas (,).|
     *  *
     * @param ApplyScalingGroupRequest $request ApplyScalingGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyScalingGroupResponse ApplyScalingGroupResponse
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
     * @summary 基于yaml配置进行弹性伸缩管理
     *  *
     * @description You can call the ApplyScalingGroup operation to create scaling groups of the Elastic Container Instance type with ease. The resources of the scaling groups are defined in Kubernetes Deployment YAML files. You can also call this operation to extend annotations for elastic container instances in Kubernetes Deployment YAML files. For more information, see "Supported annotations" in this topic.
     * Mapping between YAML files and scaling groups: You can map the triplet of namespace, kind, and name in a YAML file to a scaling group name. A YAML file and a scaling group have a one-to-one mapping relationship in a region. For example, if you use the Kubernetes Deployment YAML file whose name is NGINX in the default namespace to create a scaling group in a region, the unique name of the mapped scaling group is k8s_default_Deployment_nginx.
     * You can use a Kubernetes Deployment YAML file to manage a scaling group based on the following logic:
     * * If an existing scaling group has a mapping relationship with your Kubernetes Deployment YAML file, you can update the scaling group by using the YAML file.
     * * If no scaling group that has a mapping relationship with your Kubernetes Deployment YAML file exists, you can create a scaling group with ease by using the YAML file.
     * ### Precautions
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
     * |k8s.aliyun.com/eci-use-specs|2-4Gi|The specifications of 2 vCPUs and 4 GB memory. For more information, see [Create pods by specifying multiple specifications](https://help.aliyun.com/document_detail/451267.html).|
     * |k8s.aliyun.com/eci-vswitch|vsw-bp1xpiowfm5vo8o3c\\*\\*\\*\\*|The ID of the vSwitch. You can specify multiple vSwitches to specify multiple zones.|
     * |k8s.aliyun.com/eci-security-group|sg-bp1dktddjsg5nktv\\*\\*\\*\\*|The ID of the security group. Before you configure this annotation, take note of the following requirements:<ul data-sourcepos="26:74-26:168"><li data-sourcepos="26:78-26:114">You can specify one or more security groups. You can specify up to five security groups for each scaling group.</li><li data-sourcepos="26:114-26:140">If you specify multiple security groups, the security groups must belong to the same VPC.</li><li data-sourcepos="26:140-26:163">If you specify multiple security groups, the security groups must be of the same type.</li></ul>|
     * |k8s.aliyun.com/eci-sls-enable|"false"|If you set the value to false, the log collection feature is disabled.
     * If you do not want to use Custom Resource Definition (CRD) for Simple Log Service to collect logs of specific pods, you can configure this annotation for the pods and set the value to false. This prevents resource wastes caused by Logtails created by the system.|
     * |k8s.aliyun.com/eci-spot-strategy|SpotAsPriceGo|The bidding policy for the preemptible instance. Valid values:<ul data-sourcepos="28:69-28:204"><li data-sourcepos="28:73-28:158">SpotWithPriceLimit: The instance is created as a preemptible instance for which you specify the maximum hourly price If you set the value to SpotWithPriceLimit, you must configure the k8s.aliyun.com/eci-spot-price-limit annotation.</li><li data-sourcepos="28:158-28:199">SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is used as the bid price.</li></ul>|
     * |k8s.aliyun.com/eci-spot-price-limit|"0.5"|The maximum hourly price of the preemptible instance. This value can be accurate to up to three decimal places.
     * This annotation takes effect only when you set the k8s.aliyun.com/eci-spot-strategy annotation to SpotWithPriceLimit.|
     * |k8s.aliyun.com/eci-with-eip|"true"|If you set the value to true, an EIP is automatically created and bound to each elastic container instance.|
     * |k8s.aliyun.com/eci-data-cache-bucket|default|The bucket of the specified DataCache. If you want to use a DataCache to create a pod, you must configure this annotation.|
     * |k8s.aliyun.com/eci-data-cache-pl|PL1|The performance level (PL) of the cloud disk that you want to create by using the specified DataCache.
     * By default, enhanced SSDs (ESSDs) are created. Default value: PL1.|
     * |k8s.aliyun.com/eci-data-cache-provisionedIops|"40000"|The provisioned read/write IOPS of the ESSD AutoPL disk. Valid values: 0 to min{50000, 1000 × Capacity - Baseline IOPS}. Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}. For more information, see [ESSD AutoPL](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created by using the specified DataCache is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-data-cache-burstingEnabled|"true"|Specifies whether the Burst feature is enabled for the ESSD AutoPL disk. For more information, see [ESSD AutoPL](https://help.aliyun.com/document_detail/368372.html).
     * If you configure this annotation, the cloud disk that is created by using the specified DataCache is of the ESSD AutoPL type.|
     * |k8s.aliyun.com/eci-custom-tags|"env:test,name:alice"|The tags that you want to add to each elastic container instance. You can add up to three tags for each elastic container instance. Separate a tag key and a tag value with a colon (:). Separate multiple tags with commas (,).|
     *  *
     * @param ApplyScalingGroupRequest $request ApplyScalingGroupRequest
     *
     * @return ApplyScalingGroupResponse ApplyScalingGroupResponse
     */
    public function applyScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches Application Load Balancer (ALB) server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachAlbServerGroups operation. By attaching ALB server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *  *
     * @description Before you call the operation to attach an ALB server group to your scaling group, make sure that the following requirements are met:
     * *   The scaling group and the ALB server group share the same virtual private cloud (VPC).
     * *   The ALB server group is in the Available state.
     *  *
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
     * @summary Attaches Application Load Balancer (ALB) server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachAlbServerGroups operation. By attaching ALB server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *  *
     * @description Before you call the operation to attach an ALB server group to your scaling group, make sure that the following requirements are met:
     * *   The scaling group and the ALB server group share the same virtual private cloud (VPC).
     * *   The ALB server group is in the Available state.
     *  *
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
     * @summary Associates one or more ApsaraDB RDS instances with a scaling group.
     *  *
     * @description Before you associate an ApsaraDB RDS instance with a scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     * *   The ApsaraDB RDS instance and the scaling group must belong to the same Alibaba Cloud account.
     * *   The ApsaraDB RDS instance must be unlocked. For more information about the lock policy, see [ApsaraDB RDS usage notes](https://help.aliyun.com/document_detail/41872.html).
     * *   The ApsaraDB RDS instance must be in the Running state.
     * After an ApsaraDB RDS instance is associated with the scaling group, the default IP address whitelist of the ApsaraDB RDS instance can contain no more than 1,000 IP addresses. For more information, see [Set the whitelist](https://help.aliyun.com/document_detail/43185.html).
     *  *
     * @param AttachDBInstancesRequest $request AttachDBInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDBInstancesResponse AttachDBInstancesResponse
     */
    public function attachDBInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->attachMode)) {
            $query['AttachMode'] = $request->attachMode;
        }
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
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
     * @summary Associates one or more ApsaraDB RDS instances with a scaling group.
     *  *
     * @description Before you associate an ApsaraDB RDS instance with a scaling group, make sure that the ApsaraDB RDS instance meets the following requirements:
     * *   The ApsaraDB RDS instance and the scaling group must belong to the same Alibaba Cloud account.
     * *   The ApsaraDB RDS instance must be unlocked. For more information about the lock policy, see [ApsaraDB RDS usage notes](https://help.aliyun.com/document_detail/41872.html).
     * *   The ApsaraDB RDS instance must be in the Running state.
     * After an ApsaraDB RDS instance is associated with the scaling group, the default IP address whitelist of the ApsaraDB RDS instance can contain no more than 1,000 IP addresses. For more information, see [Set the whitelist](https://help.aliyun.com/document_detail/43185.html).
     *  *
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
     * @summary Adds instances to a scaling group. You can call the AttachInstances operation to add independent Elastic Compute Service (ECS) instances, elastic container instances, or non-Alibaba Cloud instances to your scaling group to provide services. You can also call this operation to change the state of ECS instances in your scaling group from Economical Mode to In Service.
     *  *
     * @description Before you call this operation, take note of the following items:
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
     *  *
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
     * @summary Adds instances to a scaling group. You can call the AttachInstances operation to add independent Elastic Compute Service (ECS) instances, elastic container instances, or non-Alibaba Cloud instances to your scaling group to provide services. You can also call this operation to change the state of ECS instances in your scaling group from Economical Mode to In Service.
     *  *
     * @description Before you call this operation, take note of the following items:
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
     *  *
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
     * @summary Attaches load balancers to a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups. Load balancers help distribute the access traffic to the instances in scaling groups, which effectively improves the service performance of the scaling groups. You can call the AttachLoadBalancers operation to attach one or more load balancers to your scaling group.
     *  *
     * @description Before you call this operation, make sure that the following requirements are met:
     * *   The load balancer and the scaling group belong to the same Alibaba Cloud account and region.
     * *   The load balancer is in the `Running` state.
     * *   At least one listener is configured for the load balancer, and the health check feature is enabled for the load balancer.
     * *   If the network type of the load balancer and the scaling group is virtual private cloud (VPC), they use the same VPC.
     * *   If the network type of the scaling group is VPC, and that of the load balancer is classic network and a backend server of the load balancer uses a VPC, the scaling group and the backend server use the same VPC.
     * *   The attachment of load balancers ensures that the cumulative number of load balancers attached to the scaling group stays within the predefined maximum limit. For information about the load balancer quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     *  *
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
     * @summary Attaches load balancers to a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups. Load balancers help distribute the access traffic to the instances in scaling groups, which effectively improves the service performance of the scaling groups. You can call the AttachLoadBalancers operation to attach one or more load balancers to your scaling group.
     *  *
     * @description Before you call this operation, make sure that the following requirements are met:
     * *   The load balancer and the scaling group belong to the same Alibaba Cloud account and region.
     * *   The load balancer is in the `Running` state.
     * *   At least one listener is configured for the load balancer, and the health check feature is enabled for the load balancer.
     * *   If the network type of the load balancer and the scaling group is virtual private cloud (VPC), they use the same VPC.
     * *   If the network type of the scaling group is VPC, and that of the load balancer is classic network and a backend server of the load balancer uses a VPC, the scaling group and the backend server use the same VPC.
     * *   The attachment of load balancers ensures that the cumulative number of load balancers attached to the scaling group stays within the predefined maximum limit. For information about the load balancer quota, see [Limits](https://help.aliyun.com/document_detail/25863.html).
     *  *
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
     * @summary Attaches server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachServerGroups operation. By attaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *  *
     * @param AttachServerGroupsRequest $request AttachServerGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachServerGroupsResponse AttachServerGroupsResponse
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
     * @summary Attaches server groups to a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the AttachServerGroups operation. By attaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups to your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *  *
     * @param AttachServerGroupsRequest $request AttachServerGroupsRequest
     *
     * @return AttachServerGroupsResponse AttachServerGroupsResponse
     */
    public function attachServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches vServer groups to a scaling group. After a Classic Load Balancer (CLB) instance is attached to your scaling group, the instances in the scaling group are automatically added as backend servers of the CLB instance. These servers then handle requests forwarded by the CLB instance, streamlining the processing of incoming traffic. To direct varying access requests to separate backend servers or to distribute requests based on domain names or URLs, you can call the AttachVServerGroups operation. This operation enables the addition of multiple vServer groups, allowing for efficient management of various backend server configurations tailored to your routing preferences.
     *  *
     * @description *   Before you call this operation, make sure that the following requirements are met:
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
     *  *
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
     * @summary Attaches vServer groups to a scaling group. After a Classic Load Balancer (CLB) instance is attached to your scaling group, the instances in the scaling group are automatically added as backend servers of the CLB instance. These servers then handle requests forwarded by the CLB instance, streamlining the processing of incoming traffic. To direct varying access requests to separate backend servers or to distribute requests based on domain names or URLs, you can call the AttachVServerGroups operation. This operation enables the addition of multiple vServer groups, allowing for efficient management of various backend server configurations tailored to your routing preferences.
     *  *
     * @description *   Before you call this operation, make sure that the following requirements are met:
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
     *  *
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
     * @summary Changes a resource group. Resource groups are a means to categorize and manage cloud resources, such as scaling groups, based on specific objectives, permissions, or ownership. In large, multifaceted organizations that manage numerous projects and users, this feature adopts a tiered management approach, simplifying management tasks and improving the effectiveness and oversight of resource allocation. You can call the ChangeResourceGroup operation to move your scaling groups from one resource group to another resource group, which facilitates streamlined monitoring and management within the context of the new group. This operation eliminates the need for repetitive and time-consuming cross-service resource queries, thereby enhancing operational efficiency.
     *  *
     * @description *   A resource is an entity of cloud services that you create on Alibaba Cloud. For example, a scaling group is a resource.
     * *   A resource group serves as a powerful organizational tool within your Alibaba Cloud account, enabling you to manage and monitor multiple resources collectively. It effectively addresses complexities surrounding resource categorization and permission control under a single Alibaba Cloud account, thereby enhancing management efficiency and control. For more information, see [What is resource management?](https://help.aliyun.com/document_detail/94475.html)
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
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
     * @summary Changes a resource group. Resource groups are a means to categorize and manage cloud resources, such as scaling groups, based on specific objectives, permissions, or ownership. In large, multifaceted organizations that manage numerous projects and users, this feature adopts a tiered management approach, simplifying management tasks and improving the effectiveness and oversight of resource allocation. You can call the ChangeResourceGroup operation to move your scaling groups from one resource group to another resource group, which facilitates streamlined monitoring and management within the context of the new group. This operation eliminates the need for repetitive and time-consuming cross-service resource queries, thereby enhancing operational efficiency.
     *  *
     * @description *   A resource is an entity of cloud services that you create on Alibaba Cloud. For example, a scaling group is a resource.
     * *   A resource group serves as a powerful organizational tool within your Alibaba Cloud account, enabling you to manage and monitor multiple resources collectively. It effectively addresses complexities surrounding resource categorization and permission control under a single Alibaba Cloud account, thereby enhancing management efficiency and control. For more information, see [What is resource management?](https://help.aliyun.com/document_detail/94475.html)
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Ends the timeout period of a lifecycle hook ahead of schedule. If you have created a lifecycle hook for your scaling group, you can call the CompleteLifecycleAction operation to end the timeout period of the lifecycle hook ahead of schedule based on your business requirements.
     *  *
     * @description When you manually cut short the timeout period of a lifecycle hook, Auto Scaling proceeds with one of the following actions based on the predefined settings: responding to the scaling request, aborting the scaling request, and initiating a rollback process.
     *  *
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
     * @summary Ends the timeout period of a lifecycle hook ahead of schedule. If you have created a lifecycle hook for your scaling group, you can call the CompleteLifecycleAction operation to end the timeout period of the lifecycle hook ahead of schedule based on your business requirements.
     *  *
     * @description When you manually cut short the timeout period of a lifecycle hook, Auto Scaling proceeds with one of the following actions based on the predefined settings: responding to the scaling request, aborting the scaling request, and initiating a rollback process.
     *  *
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
     * @summary Creates event-triggered tasks. If your business encounters unexpected traffic surges or has no specific patterns, you can call the CreateAlarm operation to create an event-triggered task and associate a CloudMonitor metric with the task. This allows you to dynamically adjust the number of Elastic Compute Service (ECS) instances or elastic container instances in your scaling group and keep updated on the real-time metric data, which facilitates cloud resource management and maintenance.
     *  *
     * @description *   If you set MetricType to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Event-triggered tasks of the custom monitoring type](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify MetricName, Dimensions.DimensionKey, and Dimensions.DimensionValue to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify user_id and scaling_group for an event-triggered task to aggregate monitoring data of all ECS instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you create an event-triggered task of the custom monitoring type, you can specify only custom metrics in the task.
     *     *   If you create an event-triggered task of the system monitoring type, you can specify the system metrics described in [Event-triggered tasks of the system monitoring type](https://help.aliyun.com/document_detail/74854.html) in the task.
     * >  user_id and scaling_group are automatically populated. You need to only specify device and state. For more information, see `Dimensions.DimensionKey` and `Dimensions.DimensionValue` in the "Request parameters" section of this topic.
     *  *
     * @param CreateAlarmRequest $request CreateAlarmRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAlarmResponse CreateAlarmResponse
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
     * @summary Creates event-triggered tasks. If your business encounters unexpected traffic surges or has no specific patterns, you can call the CreateAlarm operation to create an event-triggered task and associate a CloudMonitor metric with the task. This allows you to dynamically adjust the number of Elastic Compute Service (ECS) instances or elastic container instances in your scaling group and keep updated on the real-time metric data, which facilitates cloud resource management and maintenance.
     *  *
     * @description *   If you set MetricType to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Event-triggered tasks of the custom monitoring type](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify MetricName, Dimensions.DimensionKey, and Dimensions.DimensionValue to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify user_id and scaling_group for an event-triggered task to aggregate monitoring data of all ECS instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you create an event-triggered task of the custom monitoring type, you can specify only custom metrics in the task.
     *     *   If you create an event-triggered task of the system monitoring type, you can specify the system metrics described in [Event-triggered tasks of the system monitoring type](https://help.aliyun.com/document_detail/74854.html) in the task.
     * >  user_id and scaling_group are automatically populated. You need to only specify device and state. For more information, see `Dimensions.DimensionKey` and `Dimensions.DimensionValue` in the "Request parameters" section of this topic.
     *  *
     * @param CreateAlarmRequest $request CreateAlarmRequest
     *
     * @return CreateAlarmResponse CreateAlarmResponse
     */
    public function createAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a scaling configuration of the Elastic Container Instance type. Auto Scaling uses the scaling configuration as a template to create elastic container instances to meet your business requirements during scale-outs.
     *  *
     * @description A scaling configuration is a template that is used to create elastic container instances during scale-out activities.
     * You can specify the Cpu and Memory parameters to determine the range of instance types. If you specify the parameters, Auto Scaling determines the available instance types based on factors such as I/O optimization requirements and zones. Auto Scaling preferentially creates elastic container instances of the instance type that is provided at the lowest price. This scaling mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *  *
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
     * @summary Creates a scaling configuration of the Elastic Container Instance type. Auto Scaling uses the scaling configuration as a template to create elastic container instances to meet your business requirements during scale-outs.
     *  *
     * @description A scaling configuration is a template that is used to create elastic container instances during scale-out activities.
     * You can specify the Cpu and Memory parameters to determine the range of instance types. If you specify the parameters, Auto Scaling determines the available instance types based on factors such as I/O optimization requirements and zones. Auto Scaling preferentially creates elastic container instances of the instance type that is provided at the lowest price. This scaling mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     *  *
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
     * @summary Creates one or more lifecycle hooks.
     *  *
     * @description You can create up to six lifecycle hooks for each scaling group. After a lifecycle hook is created for a scaling group, Elastic Compute Service (ECS) instances in the scaling group waits to be added to or removed from the scaling group during scaling activities. You can use the HeartbeatTimeout parameter to specify the timeout period of the lifecycle hook. During the timeout period of a lifecycle hook, you can perform custom operations such as initialize ECS instance configurations and download ECS instance data on the ECS instances for which the lifecycle hook is applied.
     * During a scale-out activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be added to the associated whitelist that manages access to the ApsaraDB RDS instance. The ECS instances also wait to be added to the backend server group of the associated Classic Load Balancer (CLB) instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are added to the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also added to the backend server group of the associated CLB instance. During a scale-in activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances also wait to be removed from the backend server group of the associated CLB instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also removed from the backend server group of the associated CLB instance.
     * You can configure a notification method for a lifecycle hook. When the lifecycle hook is triggered, a notification can be sent to the specified Message Service (MNS) topic or queue, or an operation can be performed based on the specified Operation Orchestration Service (OOS) template. If you want to configure an OOS template, you must create a Resource Access Management (RAM) role for OOS. For more information, see [Grant RAM permissions to OOS](https://help.aliyun.com/document_detail/120810.html).
     * > If your scaling group has existing ECS instances and you configured an OOS template that is used to add the private IP addresses of ECS instances to or remove the private IP addresses of ECS instances from the whitelists that manage access to cloud databases that are not ApsaraDB RDS databases, you must manually add the private IP addresses of the ECS instances to or remove the private IP addresses of the ECS instances from the whitelists that manage access to the cloud databases.
     *  *
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
     * @summary Creates one or more lifecycle hooks.
     *  *
     * @description You can create up to six lifecycle hooks for each scaling group. After a lifecycle hook is created for a scaling group, Elastic Compute Service (ECS) instances in the scaling group waits to be added to or removed from the scaling group during scaling activities. You can use the HeartbeatTimeout parameter to specify the timeout period of the lifecycle hook. During the timeout period of a lifecycle hook, you can perform custom operations such as initialize ECS instance configurations and download ECS instance data on the ECS instances for which the lifecycle hook is applied.
     * During a scale-out activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be added to the associated whitelist that manages access to the ApsaraDB RDS instance. The ECS instances also wait to be added to the backend server group of the associated Classic Load Balancer (CLB) instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are added to the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also added to the backend server group of the associated CLB instance. During a scale-in activity and the timeout period of a lifecycle hook, the private IP addresses of ECS instances wait to be removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances also wait to be removed from the backend server group of the associated CLB instance. After the lifecycle hook times out, the private IP addresses of the ECS instances are removed from the whitelist that manages access to the associated ApsaraDB RDS instance. The ECS instances are also removed from the backend server group of the associated CLB instance.
     * You can configure a notification method for a lifecycle hook. When the lifecycle hook is triggered, a notification can be sent to the specified Message Service (MNS) topic or queue, or an operation can be performed based on the specified Operation Orchestration Service (OOS) template. If you want to configure an OOS template, you must create a Resource Access Management (RAM) role for OOS. For more information, see [Grant RAM permissions to OOS](https://help.aliyun.com/document_detail/120810.html).
     * > If your scaling group has existing ECS instances and you configured an OOS template that is used to add the private IP addresses of ECS instances to or remove the private IP addresses of ECS instances from the whitelists that manage access to cloud databases that are not ApsaraDB RDS databases, you must manually add the private IP addresses of the ECS instances to or remove the private IP addresses of the ECS instances from the whitelists that manage access to the cloud databases.
     *  *
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
     * @summary Creates a notification rule. You can call the CreateNotificationConfiguration operation to create a notification rule to stay informed about scaling events or resource changes. This helps you learn about the dynamic status of your scaling group in real time and further automates the management of scaling events.
     *  *
     * @description ## Description
     * You can configure CloudMonitor system events, Message Service (MNS) queues, or MNS topics to receive notifications. When a specified type of scaling activity or resource change occurs in a scaling group, Auto Scaling sends notifications by using CloudMonitor or MNS.
     *  *
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
     * @summary Creates a notification rule. You can call the CreateNotificationConfiguration operation to create a notification rule to stay informed about scaling events or resource changes. This helps you learn about the dynamic status of your scaling group in real time and further automates the management of scaling events.
     *  *
     * @description ## Description
     * You can configure CloudMonitor system events, Message Service (MNS) queues, or MNS topics to receive notifications. When a specified type of scaling activity or resource change occurs in a scaling group, Auto Scaling sends notifications by using CloudMonitor or MNS.
     *  *
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
     * @summary Creates a scaling configuration.
     *  *
     * @description Auto Scaling automatically creates Elastic Compute Service (ECS) instances based on the specified scaling configuration. ECS instances can be created in the following modes:
     * *   InstancePatternInfos: intelligent configuration mode. In this mode, you need to only specify the number of vCPUs, memory size, instance family, and maximum price. Auto Scaling selects the instance type that has the lowest price based on the configurations to create ECS instances. This mode is available only for scaling groups that reside in virtual private clouds (VPCs). This mode reduces scale-out failures caused by insufficient inventory of instance types.
     * *   InstanceType: In this mode, you must specify one instance type.
     * *   InstanceTypes: In this mode, you can specify more than one instance type.
     * *   InstanceTypeOverrides: In this mode, you can specify multiple instance types and weights for the instance types.
     * *   Cpu and Memory: In this mode, you must specify the number of vCPUs and the memory size. Auto Scaling determines the range of available instance types based on factors such as I/O optimization requirements and zones. Then, Auto Scaling creates ECS instances by using the lowest-priced instance type. This mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. You can specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfo at the same time. If you specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfos at the same time, Auto Scaling preferentially uses the instance types that are specified by InstanceType or InstanceTypes for scale-outs. If the instance types that are specified by InstanceType or InstanceTypes do not have sufficient inventory, Auto Scaling uses the instance types that are specified by InstancePatternInfos for scale-outs.
     *  *
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
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
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
        if (!Utils::isUnset($request->networkInterfaces)) {
            $query['NetworkInterfaces'] = $request->networkInterfaces;
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
     * @summary Creates a scaling configuration.
     *  *
     * @description Auto Scaling automatically creates Elastic Compute Service (ECS) instances based on the specified scaling configuration. ECS instances can be created in the following modes:
     * *   InstancePatternInfos: intelligent configuration mode. In this mode, you need to only specify the number of vCPUs, memory size, instance family, and maximum price. Auto Scaling selects the instance type that has the lowest price based on the configurations to create ECS instances. This mode is available only for scaling groups that reside in virtual private clouds (VPCs). This mode reduces scale-out failures caused by insufficient inventory of instance types.
     * *   InstanceType: In this mode, you must specify one instance type.
     * *   InstanceTypes: In this mode, you can specify more than one instance type.
     * *   InstanceTypeOverrides: In this mode, you can specify multiple instance types and weights for the instance types.
     * *   Cpu and Memory: In this mode, you must specify the number of vCPUs and the memory size. Auto Scaling determines the range of available instance types based on factors such as I/O optimization requirements and zones. Then, Auto Scaling creates ECS instances by using the lowest-priced instance type. This mode is available only if Scaling Policy is set to Cost Optimization Policy and no instance type is specified in the scaling configuration.
     * > You cannot specify InstanceType, InstanceTypes, InstanceTypeOverrides, and Cpu and Memory at the same time. You can specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfo at the same time. If you specify InstanceType and InstancePatternInfos or specify InstanceTypes and InstancePatternInfos at the same time, Auto Scaling preferentially uses the instance types that are specified by InstanceType or InstanceTypes for scale-outs. If the instance types that are specified by InstanceType or InstanceTypes do not have sufficient inventory, Auto Scaling uses the instance types that are specified by InstancePatternInfos for scale-outs.
     *  *
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
     * @summary Creates a scaling group.
     *  *
     * @description A scaling group is a group of Elastic Compute Service (ECS) instances that can be used in similar business scenarios.
     * You can create only a limited number of scaling groups in a region. Go to Quota Center to check the quota of the scaling groups.
     * A scaling group does not immediately take effect after you create the scaling group. You must call the EnableScalingGroup operation to enable the scaling group. After you enable the scaling group, Auto Scaling can execute scaling rules to trigger scaling activities in the scaling group.
     * The Classic Load Balancer (CLB) instances and ApsaraDB RDS instances that you want to associate with a scaling group must reside in the same region as the scaling group. CLB instances are formerly known as Server Load Balancer (SLB) instances. For more information, see the [Regions and zones](https://help.aliyun.com/document_detail/40654.html) topic.
     * If you associate a CLB instance when you create a scaling group, Auto Scaling automatically adds ECS instances in the scaling group to the backend server group of the associated CLB instance. You can specify a server group to which ECS instances can be added. You can add ECS instances to the following types of server groups:
     * *   Default server group: a group of ECS instances that are used to receive requests. If you do not specify a vServer group or a primary/secondary server group for a listener, requests are forwarded to the ECS instances in the default server group.
     * *   vServer group: If you want to forward requests to backend servers that are not in the default server group or configure domain name-based or URL-based forwarding rules, you can use vServer groups.
     * > If you specify the default server group and multiple vServer groups at the same time, ECS instances are added to all specified server groups.
     * The default weight of an ECS instance that is added as a backend server of a CLB instance is 50. The CLB instance that you want to associate with your scaling group must meet the following requirements:
     * *   The CLB instance must be in the Active state. You can call the DescribeLoadBalancers operation to query the state of the CLB instance.
     * *   The health check feature must be enabled on all listener ports that are configured for the CLB instance. Otherwise, the scaling group fails to be created.
     * If you associate an Application Load Balancer (ALB) server group with a scaling group, Auto Scaling automatically adds ECS instances that are in the scaling group to the ALB server group to process requests distributed by the ALB instance to which the ALB server group belongs. You can specify multiple ALB server groups. The server groups must reside in the same virtual private cloud (VPC) as the scaling group. For more information, see the "AttachAlbServerGroups" topic.
     * If you associate an ApsaraDB RDS instance with a scaling group, Auto Scaling automatically adds the private IP addresses of the ECS instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance. The ApsaraDB RDS instance that you want to associate with your scaling group must meet the following requirements:
     * *   The ApsaraDB RDS instance must be in the Running state. You can call the DescribeDBInstances operation to query the state of the ApsaraDB RDS instance.
     * *   The number of IP addresses in the IP address whitelist of the ApsaraDB RDS instance cannot exceed the upper limit. For more information, see the "Configure whitelists" topic.
     * If you set the MultiAZPolicy parameter of the scaling group to COST_OPTIMIZED, take note of the following items:
     * *   You can use the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools parameters to specify the instance allocation method based on the cost optimization policy. This instance allocation method is prioritized during scaling.
     * *   If you do not specify the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools parameter, the instance types that are provided at the lowest price are used to create instances based on the cost optimization policy.
     * If you set the `Tags.Propagate` parameter of the scaling group to true, the following rules apply:
     * *   Tags that you add to the scaling group cannot be propagated to existing instances in the scaling group. Tags that you add to the scaling group are propagated to only new instances.
     * *   If you specify instance tags in the scaling configuration that is used to create instances and propagate the tags that you add to the scaling group to the instances, all tags exist at the same time.
     * *   If the tag key that you specify in a scaling configuration and the tag key that you add to the scaling group of the scaling configuration are the same, the tag value that you specify in the scaling configuration is preferentially used.
     *  *
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
        if (!Utils::isUnset($request->DBInstances)) {
            $query['DBInstances'] = $request->DBInstances;
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
     * @summary Creates a scaling group.
     *  *
     * @description A scaling group is a group of Elastic Compute Service (ECS) instances that can be used in similar business scenarios.
     * You can create only a limited number of scaling groups in a region. Go to Quota Center to check the quota of the scaling groups.
     * A scaling group does not immediately take effect after you create the scaling group. You must call the EnableScalingGroup operation to enable the scaling group. After you enable the scaling group, Auto Scaling can execute scaling rules to trigger scaling activities in the scaling group.
     * The Classic Load Balancer (CLB) instances and ApsaraDB RDS instances that you want to associate with a scaling group must reside in the same region as the scaling group. CLB instances are formerly known as Server Load Balancer (SLB) instances. For more information, see the [Regions and zones](https://help.aliyun.com/document_detail/40654.html) topic.
     * If you associate a CLB instance when you create a scaling group, Auto Scaling automatically adds ECS instances in the scaling group to the backend server group of the associated CLB instance. You can specify a server group to which ECS instances can be added. You can add ECS instances to the following types of server groups:
     * *   Default server group: a group of ECS instances that are used to receive requests. If you do not specify a vServer group or a primary/secondary server group for a listener, requests are forwarded to the ECS instances in the default server group.
     * *   vServer group: If you want to forward requests to backend servers that are not in the default server group or configure domain name-based or URL-based forwarding rules, you can use vServer groups.
     * > If you specify the default server group and multiple vServer groups at the same time, ECS instances are added to all specified server groups.
     * The default weight of an ECS instance that is added as a backend server of a CLB instance is 50. The CLB instance that you want to associate with your scaling group must meet the following requirements:
     * *   The CLB instance must be in the Active state. You can call the DescribeLoadBalancers operation to query the state of the CLB instance.
     * *   The health check feature must be enabled on all listener ports that are configured for the CLB instance. Otherwise, the scaling group fails to be created.
     * If you associate an Application Load Balancer (ALB) server group with a scaling group, Auto Scaling automatically adds ECS instances that are in the scaling group to the ALB server group to process requests distributed by the ALB instance to which the ALB server group belongs. You can specify multiple ALB server groups. The server groups must reside in the same virtual private cloud (VPC) as the scaling group. For more information, see the "AttachAlbServerGroups" topic.
     * If you associate an ApsaraDB RDS instance with a scaling group, Auto Scaling automatically adds the private IP addresses of the ECS instances in the scaling group to the IP address whitelist of the ApsaraDB RDS instance. The ApsaraDB RDS instance that you want to associate with your scaling group must meet the following requirements:
     * *   The ApsaraDB RDS instance must be in the Running state. You can call the DescribeDBInstances operation to query the state of the ApsaraDB RDS instance.
     * *   The number of IP addresses in the IP address whitelist of the ApsaraDB RDS instance cannot exceed the upper limit. For more information, see the "Configure whitelists" topic.
     * If you set the MultiAZPolicy parameter of the scaling group to COST_OPTIMIZED, take note of the following items:
     * *   You can use the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, and SpotInstancePools parameters to specify the instance allocation method based on the cost optimization policy. This instance allocation method is prioritized during scaling.
     * *   If you do not specify the OnDemandBaseCapacity, OnDemandPercentageAboveBaseCapacity, or SpotInstancePools parameter, the instance types that are provided at the lowest price are used to create instances based on the cost optimization policy.
     * If you set the `Tags.Propagate` parameter of the scaling group to true, the following rules apply:
     * *   Tags that you add to the scaling group cannot be propagated to existing instances in the scaling group. Tags that you add to the scaling group are propagated to only new instances.
     * *   If you specify instance tags in the scaling configuration that is used to create instances and propagate the tags that you add to the scaling group to the instances, all tags exist at the same time.
     * *   If the tag key that you specify in a scaling configuration and the tag key that you add to the scaling group of the scaling configuration are the same, the tag value that you specify in the scaling configuration is preferentially used.
     *  *
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
     * @summary Creates a scaling rule.
     *  *
     * @description ## Description
     * A scaling rule defines a specific scaling activity, such as adding or removing N instances. If the number of Elastic Compute Service (ECS) instances in a scaling group is less than the minimum number allowed or greater than the maximum number allowed after a scaling rule is executed, Auto Scaling adjusts the number of ECS instances that you want to add or remove. This way, the number of ECS instances can be maintained within the valid range after the scaling rule is executed. The number of ECS instances that is specified in the scaling rule remains unchanged. Example:
     * *   If your scaling group contains two ECS instances and allows up to three ECS instances, only one ECS instance is added to your scaling group after you execute a scale-out rule in which three ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     * *   If your scaling group contains three ECS instances and requires at least two ECS instances, only one ECS instance is removed from your scaling group after you execute a scale-in rule in which five ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     * Before you call this operation, take note of the following items:
     * *   If you set the AdjustmentType parameter to TotalCapacity, the number of ECS instances in the scaling group is adjusted to the specified value. The value of the AdjustmentValue parameter must be greater than or equal to 0.
     * *   If you set the AdjustmentType parameter to QuantityChangeInCapacity or PercentChangeInCapacity, a positive value of AdjustmentValue specifies the number of ECS instances that are added to the scaling group, and a negative value of AdjustmentValue specifies the number of ECS instances that are removed from the scaling group.
     * *   If you set the AdjustmentType parameter to PercentChangeInCapacity, Auto Scaling uses the following formula to calculate a value, and then rounds the value to the nearest integer to obtain the number of ECS instances that need to be scaled: Value of TotalCapacity × Value of AdjustmentValue/100.
     * *   If the cooldown time is specified in a scaling rule, the specified time applies to the scaling group after the rule is executed. Otherwise, the value of the DefaultCooldown parameter of the scaling group applies to the scaling group.
     * *   You can create only a limited number of scaling rules for a scaling group. For more information, see the "Limits" topic.
     * *   The unique identifier (ScalingRuleAri) of a scaling rule can be used by the following operations:
     *     *   ExecuteScalingRule: You can call this operation to manually execute a specific scaling rule by setting the ScalingRuleAri parameter to the unique identifier of the scaling rule.
     *     *   CreateScheduledTask: You can call this operation to create a scheduled task for a specific scaling rule by setting the ScheduledAction parameter to the unique identifier of the scaling rule.
     *  *
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
     * @summary Creates a scaling rule.
     *  *
     * @description ## Description
     * A scaling rule defines a specific scaling activity, such as adding or removing N instances. If the number of Elastic Compute Service (ECS) instances in a scaling group is less than the minimum number allowed or greater than the maximum number allowed after a scaling rule is executed, Auto Scaling adjusts the number of ECS instances that you want to add or remove. This way, the number of ECS instances can be maintained within the valid range after the scaling rule is executed. The number of ECS instances that is specified in the scaling rule remains unchanged. Example:
     * *   If your scaling group contains two ECS instances and allows up to three ECS instances, only one ECS instance is added to your scaling group after you execute a scale-out rule in which three ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     * *   If your scaling group contains three ECS instances and requires at least two ECS instances, only one ECS instance is removed from your scaling group after you execute a scale-in rule in which five ECS instances are specified. The number of ECS instances that is specified in the scaling rule remains unchanged.
     * Before you call this operation, take note of the following items:
     * *   If you set the AdjustmentType parameter to TotalCapacity, the number of ECS instances in the scaling group is adjusted to the specified value. The value of the AdjustmentValue parameter must be greater than or equal to 0.
     * *   If you set the AdjustmentType parameter to QuantityChangeInCapacity or PercentChangeInCapacity, a positive value of AdjustmentValue specifies the number of ECS instances that are added to the scaling group, and a negative value of AdjustmentValue specifies the number of ECS instances that are removed from the scaling group.
     * *   If you set the AdjustmentType parameter to PercentChangeInCapacity, Auto Scaling uses the following formula to calculate a value, and then rounds the value to the nearest integer to obtain the number of ECS instances that need to be scaled: Value of TotalCapacity × Value of AdjustmentValue/100.
     * *   If the cooldown time is specified in a scaling rule, the specified time applies to the scaling group after the rule is executed. Otherwise, the value of the DefaultCooldown parameter of the scaling group applies to the scaling group.
     * *   You can create only a limited number of scaling rules for a scaling group. For more information, see the "Limits" topic.
     * *   The unique identifier (ScalingRuleAri) of a scaling rule can be used by the following operations:
     *     *   ExecuteScalingRule: You can call this operation to manually execute a specific scaling rule by setting the ScalingRuleAri parameter to the unique identifier of the scaling rule.
     *     *   CreateScheduledTask: You can call this operation to create a scheduled task for a specific scaling rule by setting the ScheduledAction parameter to the unique identifier of the scaling rule.
     *  *
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
     * @summary Creates a scheduled task. A scheduled task is a type of scaling task that enables automatic execution of a specific scaling rule at a specified point in time. You can call the CreateScheduledTask operation to create a scheduled task to implement automatic scaling of computing resources. This ensures your business continuity and minimizes resource costs.
     *  *
     * @description *   If a scheduled task fails to trigger a scaling activity due to an ongoing scaling activity in a scaling group or because the scaling group is disabled, the scheduled task is automatically retried during the period that is specified by the LaunchExpirationTime parameter. If the scheduled task still fails to trigger a scaling activity after the period ends, the task is automatically skipped.
     * *   If multiple tasks are scheduled at similar points in time to trigger scaling activities in the same scaling group, the earliest task triggers the scaling activity first. Other tasks trigger scaling activities within their launch expiration time. Only one scaling activity can be triggered in a scaling group at a time.`` If the previous scaling activity is complete and another scheduled task attempts to trigger a scaling activity, Auto Scaling executes the scaling rule that is specified in the scheduled task and then triggers a scaling activity.``
     * *   A scheduled task supports the following scaling methods:
     *     *   `ScheduledAction`: Specify an existing scaling rule that you want Auto Scaling to execute when the scheduled task is triggered.
     *     *   `ScalingGroupId`: Specify the minimum number, maximum number, or expected number of instances for the scaling group for which you created the scheduled task.
     * > You cannot specify the `ScheduledAction` and ScalingGroupId parameters at the same time.
     *  *
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
     * @summary Creates a scheduled task. A scheduled task is a type of scaling task that enables automatic execution of a specific scaling rule at a specified point in time. You can call the CreateScheduledTask operation to create a scheduled task to implement automatic scaling of computing resources. This ensures your business continuity and minimizes resource costs.
     *  *
     * @description *   If a scheduled task fails to trigger a scaling activity due to an ongoing scaling activity in a scaling group or because the scaling group is disabled, the scheduled task is automatically retried during the period that is specified by the LaunchExpirationTime parameter. If the scheduled task still fails to trigger a scaling activity after the period ends, the task is automatically skipped.
     * *   If multiple tasks are scheduled at similar points in time to trigger scaling activities in the same scaling group, the earliest task triggers the scaling activity first. Other tasks trigger scaling activities within their launch expiration time. Only one scaling activity can be triggered in a scaling group at a time.`` If the previous scaling activity is complete and another scheduled task attempts to trigger a scaling activity, Auto Scaling executes the scaling rule that is specified in the scheduled task and then triggers a scaling activity.``
     * *   A scheduled task supports the following scaling methods:
     *     *   `ScheduledAction`: Specify an existing scaling rule that you want Auto Scaling to execute when the scheduled task is triggered.
     *     *   `ScalingGroupId`: Specify the minimum number, maximum number, or expected number of instances for the scaling group for which you created the scheduled task.
     * > You cannot specify the `ScheduledAction` and ScalingGroupId parameters at the same time.
     *  *
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
     * @summary Deactivates a scaling configuration.
     *  *
     * @description *   You can call this operation to deactivate a scaling configuration only in a disabled scaling group.
     *  *
     * @param DeactivateScalingConfigurationRequest $request DeactivateScalingConfigurationRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactivateScalingConfigurationResponse DeactivateScalingConfigurationResponse
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
     * @summary Deactivates a scaling configuration.
     *  *
     * @description *   You can call this operation to deactivate a scaling configuration only in a disabled scaling group.
     *  *
     * @param DeactivateScalingConfigurationRequest $request DeactivateScalingConfigurationRequest
     *
     * @return DeactivateScalingConfigurationResponse DeactivateScalingConfigurationResponse
     */
    public function deactivateScalingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateScalingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you no longer need an event-triggered task, you can call the DeleteAlarm operation to delete it.
     *  *
     * @param DeleteAlarmRequest $request DeleteAlarmRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAlarmResponse DeleteAlarmResponse
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
     * @summary Deletes an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you no longer need an event-triggered task, you can call the DeleteAlarm operation to delete it.
     *  *
     * @param DeleteAlarmRequest $request DeleteAlarmRequest
     *
     * @return DeleteAlarmResponse DeleteAlarmResponse
     */
    public function deleteAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scaling configuration of the Elastic Container Instance type. If the scaling configuration of a scaling group is in the Inactive state and the scaling group contains no elastic container instances created from the scaling configuration, you can call the DeleteEciScalingConfiguration operation to delete the scaling configuration to free up the scaling configuration quota.
     *  *
     * @description You cannot call this operation to delete a scaling configuration in the following scenarios:
     * *   The scaling configuration is in the Active state.
     * *   The scaling group contains elastic container instances created from the scaling configuration.
     *  *
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
     * @summary Deletes a scaling configuration of the Elastic Container Instance type. If the scaling configuration of a scaling group is in the Inactive state and the scaling group contains no elastic container instances created from the scaling configuration, you can call the DeleteEciScalingConfiguration operation to delete the scaling configuration to free up the scaling configuration quota.
     *  *
     * @description You cannot call this operation to delete a scaling configuration in the following scenarios:
     * *   The scaling configuration is in the Active state.
     * *   The scaling group contains elastic container instances created from the scaling configuration.
     *  *
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
     * @summary Deletes a lifecycle hook.
     *  *
     * @description If you delete a lifecycle hook that is in effect in a scaling group, instances exit the Pending state in advance. You can use one of the following methods to specify the lifecycle hooks that you want to delete:
     * *   Specify the scaling group ID of the lifecycle hook that you want to delete by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter.
     * *   Specify the lifecycle hook ID by using the LifecycleHookId parameter. In this case, the ScalingGroupId parameter and the LifecycleHookName parameter are ignored.
     *  *
     * @param DeleteLifecycleHookRequest $request DeleteLifecycleHookRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLifecycleHookResponse DeleteLifecycleHookResponse
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
     * @summary Deletes a lifecycle hook.
     *  *
     * @description If you delete a lifecycle hook that is in effect in a scaling group, instances exit the Pending state in advance. You can use one of the following methods to specify the lifecycle hooks that you want to delete:
     * *   Specify the scaling group ID of the lifecycle hook that you want to delete by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter.
     * *   Specify the lifecycle hook ID by using the LifecycleHookId parameter. In this case, the ScalingGroupId parameter and the LifecycleHookName parameter are ignored.
     *  *
     * @param DeleteLifecycleHookRequest $request DeleteLifecycleHookRequest
     *
     * @return DeleteLifecycleHookResponse DeleteLifecycleHookResponse
     */
    public function deleteLifecycleHook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLifecycleHookWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes event notification rules. The event notification feature facilitates efficient issue identification and event management by automatically forwarding notifications from Auto Scaling to designated endpoints such as CloudMonitor or Message Service (MNS) topics and queues. If you no longer require an event notification rule, you can call the DeleteNotificationConfiguration operation to delete it.
     *  *
     * @param DeleteNotificationConfigurationRequest $request DeleteNotificationConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNotificationConfigurationResponse DeleteNotificationConfigurationResponse
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
     * @summary Deletes event notification rules. The event notification feature facilitates efficient issue identification and event management by automatically forwarding notifications from Auto Scaling to designated endpoints such as CloudMonitor or Message Service (MNS) topics and queues. If you no longer require an event notification rule, you can call the DeleteNotificationConfiguration operation to delete it.
     *  *
     * @param DeleteNotificationConfigurationRequest $request DeleteNotificationConfigurationRequest
     *
     * @return DeleteNotificationConfigurationResponse DeleteNotificationConfigurationResponse
     */
    public function deleteNotificationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNotificationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scaling configuration that is used to create Elastic Compute Service (ECS) instances.
     *  *
     * @description You cannot delete a scaling configuration in one of the following scenarios:
     * *   The scaling configuration in your scaling group is in the Active state.
     * *   The scaling group contains ECS instances that were created based on the scaling configuration.
     *  *
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
     * @summary Deletes a scaling configuration that is used to create Elastic Compute Service (ECS) instances.
     *  *
     * @description You cannot delete a scaling configuration in one of the following scenarios:
     * *   The scaling configuration in your scaling group is in the Active state.
     * *   The scaling group contains ECS instances that were created based on the scaling configuration.
     *  *
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
     * @summary Deletes a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can create scaling groups to manage your computing power with ease. The computing power refers to the instances that provide the computing capability. If you no longer require a scaling group, you can call the DeleteScalingGroup operation to delete it to free up the scaling group quota.
     *  *
     * @description Before you call the DeleteScalingGroup operation, take note of the following items:
     * *   If you delete a scaling group, the scaling configurations, scaling rules, scaling activities, and scaling requests related to the scaling group are also deleted.
     * *   If you delete a scaling group, the scheduled tasks and event-triggered tasks of the scaling group are not deleted. The Server Load Balancer (SLB) instances and ApsaraDB RDS instances that are attached to the scaling group are also not deleted.
     * *   If the scaling group that you want to delete contains ECS instances or elastic container instances that are in the In Service state, Auto Scaling stops the instances and then removes all manually added instances from the scaling group or releases all automatically created instances in the scaling group before the scaling group is deleted.
     *     **
     *     **Note** Before you delete a scaling group, make sure that the Deletion Protection feature is disabled. If you have enabled the Deletion Protection feature for a scaling group, disable the feature on the Modify Scaling Group page before you delete the scaling group.
     * *   If you do not disable the Deletion Protection feature for a scaling group, you cannot delete the scaling group by using the Auto Scaling console or calling this operation. The Deletion Protection feature is an effective measure to safeguard scaling groups against unintended deletion.
     * *   Prior to deleting a scaling group, make sure that your ECS instances within the scaling group are safeguarded against unintended release. Even if you have already enabled the Release Protection feature for the ECS instances, you must manually put these ECS instances into the Protected state. Doing so guarantees that the ECS instances will not be forcibly released during the deletion process of the scaling group, providing an extra layer of security.
     *     **
     *     **Note** Before you delete a scaling group, we recommend that you enable the Deletion Protection feature for ECS instances that you want to retain. This action guarantees that the ECS instances are not forcibly released after you delete the scaling group. For more information, see [SetInstancesProtection](https://help.aliyun.com/document_detail/459342.html).
     *  *
     * @param DeleteScalingGroupRequest $request DeleteScalingGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScalingGroupResponse DeleteScalingGroupResponse
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
     * @summary Deletes a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can create scaling groups to manage your computing power with ease. The computing power refers to the instances that provide the computing capability. If you no longer require a scaling group, you can call the DeleteScalingGroup operation to delete it to free up the scaling group quota.
     *  *
     * @description Before you call the DeleteScalingGroup operation, take note of the following items:
     * *   If you delete a scaling group, the scaling configurations, scaling rules, scaling activities, and scaling requests related to the scaling group are also deleted.
     * *   If you delete a scaling group, the scheduled tasks and event-triggered tasks of the scaling group are not deleted. The Server Load Balancer (SLB) instances and ApsaraDB RDS instances that are attached to the scaling group are also not deleted.
     * *   If the scaling group that you want to delete contains ECS instances or elastic container instances that are in the In Service state, Auto Scaling stops the instances and then removes all manually added instances from the scaling group or releases all automatically created instances in the scaling group before the scaling group is deleted.
     *     **
     *     **Note** Before you delete a scaling group, make sure that the Deletion Protection feature is disabled. If you have enabled the Deletion Protection feature for a scaling group, disable the feature on the Modify Scaling Group page before you delete the scaling group.
     * *   If you do not disable the Deletion Protection feature for a scaling group, you cannot delete the scaling group by using the Auto Scaling console or calling this operation. The Deletion Protection feature is an effective measure to safeguard scaling groups against unintended deletion.
     * *   Prior to deleting a scaling group, make sure that your ECS instances within the scaling group are safeguarded against unintended release. Even if you have already enabled the Release Protection feature for the ECS instances, you must manually put these ECS instances into the Protected state. Doing so guarantees that the ECS instances will not be forcibly released during the deletion process of the scaling group, providing an extra layer of security.
     *     **
     *     **Note** Before you delete a scaling group, we recommend that you enable the Deletion Protection feature for ECS instances that you want to retain. This action guarantees that the ECS instances are not forcibly released after you delete the scaling group. For more information, see [SetInstancesProtection](https://help.aliyun.com/document_detail/459342.html).
     *  *
     * @param DeleteScalingGroupRequest $request DeleteScalingGroupRequest
     *
     * @return DeleteScalingGroupResponse DeleteScalingGroupResponse
     */
    public function deleteScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scaling rule.
     *  *
     * @param DeleteScalingRuleRequest $request DeleteScalingRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScalingRuleResponse DeleteScalingRuleResponse
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
     * @summary Deletes a scaling rule.
     *  *
     * @param DeleteScalingRuleRequest $request DeleteScalingRuleRequest
     *
     * @return DeleteScalingRuleResponse DeleteScalingRuleResponse
     */
    public function deleteScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes scheduled tasks. For workloads with predictable patterns, you can create scheduled tasks to align with your business requirements and optimize resource utilization for cost savings. These tasks automatically ensure that sufficient computing resources are provisioned in anticipation of peak hours and efficiently release unused resources during off-peak hours, thereby streamlining operational efficiency and reducing expenses. If you no longer require a scheduled task, you can call the DeleteScheduledTask operation to delete it.
     *  *
     * @param DeleteScheduledTaskRequest $request DeleteScheduledTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScheduledTaskResponse DeleteScheduledTaskResponse
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
     * @summary Deletes scheduled tasks. For workloads with predictable patterns, you can create scheduled tasks to align with your business requirements and optimize resource utilization for cost savings. These tasks automatically ensure that sufficient computing resources are provisioned in anticipation of peak hours and efficiently release unused resources during off-peak hours, thereby streamlining operational efficiency and reducing expenses. If you no longer require a scheduled task, you can call the DeleteScheduledTask operation to delete it.
     *  *
     * @param DeleteScheduledTaskRequest $request DeleteScheduledTaskRequest
     *
     * @return DeleteScheduledTaskResponse DeleteScheduledTaskResponse
     */
    public function deleteScheduledTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries event-triggered tasks. You can call the DescribeAlarms operation to learn about the configurations of event-triggered tasks and keep updated on monitoring data changes. This helps you troubleshoot system resource issues at the earliest opportunity and ensures system stability and reliability.
     *  *
     * @param DescribeAlarmsRequest $request DescribeAlarmsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlarmsResponse DescribeAlarmsResponse
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
     * @summary Queries event-triggered tasks. You can call the DescribeAlarms operation to learn about the configurations of event-triggered tasks and keep updated on monitoring data changes. This helps you troubleshoot system resource issues at the earliest opportunity and ensures system stability and reliability.
     *  *
     * @param DescribeAlarmsRequest $request DescribeAlarmsRequest
     *
     * @return DescribeAlarmsResponse DescribeAlarmsResponse
     */
    public function describeAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlertConfigurationRequest $request DescribeAlertConfigurationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertConfigurationResponse DescribeAlertConfigurationResponse
     */
    public function describeAlertConfigurationWithOptions($request, $runtime)
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

        return DescribeAlertConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlertConfigurationRequest $request DescribeAlertConfigurationRequest
     *
     * @return DescribeAlertConfigurationResponse DescribeAlertConfigurationResponse
     */
    public function describeAlertConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling configurations of the Elastic Container Instance type to learn the scaling configuration details. This allows you to select an appropriate template when you create elastic container instances. If you set OutputFormat to yaml, the output is a Kubernetes Deployment file in the YAML format.
     *  *
     * @param DescribeEciScalingConfigurationDetailRequest $request DescribeEciScalingConfigurationDetailRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEciScalingConfigurationDetailResponse DescribeEciScalingConfigurationDetailResponse
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
     * @summary Queries scaling configurations of the Elastic Container Instance type to learn the scaling configuration details. This allows you to select an appropriate template when you create elastic container instances. If you set OutputFormat to yaml, the output is a Kubernetes Deployment file in the YAML format.
     *  *
     * @param DescribeEciScalingConfigurationDetailRequest $request DescribeEciScalingConfigurationDetailRequest
     *
     * @return DescribeEciScalingConfigurationDetailResponse DescribeEciScalingConfigurationDetailResponse
     */
    public function describeEciScalingConfigurationDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEciScalingConfigurationDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling configurations of the Elastic Container Instance type to learn the scaling configuration details. This allows you to select an appropriate template when you create elastic container instances.
     *  *
     * @param DescribeEciScalingConfigurationsRequest $request DescribeEciScalingConfigurationsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEciScalingConfigurationsResponse DescribeEciScalingConfigurationsResponse
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
     * @summary Queries scaling configurations of the Elastic Container Instance type to learn the scaling configuration details. This allows you to select an appropriate template when you create elastic container instances.
     *  *
     * @param DescribeEciScalingConfigurationsRequest $request DescribeEciScalingConfigurationsRequest
     *
     * @return DescribeEciScalingConfigurationsResponse DescribeEciScalingConfigurationsResponse
     */
    public function describeEciScalingConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEciScalingConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries lifecycle actions.
     *  *
     * @description If a scaling activity is executed and a lifecycle hook is created for the scaling activity, the lifecycle hook triggers a lifecycle action. A lifecycle action can be in one of the following states:
     * *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     * *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action expires and ECS instances are added to or removed from a scaling group.
     * *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     * If you do not specify the action to perform, such as execute a specific OOS template, after a lifecycle hook ends, you can call this operation to obtain the token of the lifecycle action that corresponds to the lifecycle hook. Then, you can specify a custom action to perform after the lifecycle hook ends.
     *  *
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
     * @summary Queries lifecycle actions.
     *  *
     * @description If a scaling activity is executed and a lifecycle hook is created for the scaling activity, the lifecycle hook triggers a lifecycle action. A lifecycle action can be in one of the following states:
     * *   If a lifecycle action is in the Pending state, Elastic Compute Service (ECS) instances are waiting to be added to a scaling group or waiting to be removed from a scaling group.
     * *   If a lifecycle action is in the Timeout state, the lifecycle hook that triggers the lifecycle action expires and ECS instances are added to or removed from a scaling group.
     * *   If a lifecycle action is in the Completed state, you manually end the lifecycle hook that triggers the lifecycle action ahead of schedule.
     * If you do not specify the action to perform, such as execute a specific OOS template, after a lifecycle hook ends, you can call this operation to obtain the token of the lifecycle action that corresponds to the lifecycle hook. Then, you can specify a custom action to perform after the lifecycle hook ends.
     *  *
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
     * @summary Queries lifecycle hooks.
     *  *
     * @description You can use one of the following methods to query lifecycle hooks:
     * *   Specify a list of lifecycle hook IDs by using the LifecycleHookIds parameter. In this case, you do not need to specify the ScalingGroupId and LifecycleHookName parameters.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter at the same time.
     *  *
     * @param DescribeLifecycleHooksRequest $request DescribeLifecycleHooksRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLifecycleHooksResponse DescribeLifecycleHooksResponse
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
     * @summary Queries lifecycle hooks.
     *  *
     * @description You can use one of the following methods to query lifecycle hooks:
     * *   Specify a list of lifecycle hook IDs by using the LifecycleHookIds parameter. In this case, you do not need to specify the ScalingGroupId and LifecycleHookName parameters.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter at the same time.
     *  *
     * @param DescribeLifecycleHooksRequest $request DescribeLifecycleHooksRequest
     *
     * @return DescribeLifecycleHooksResponse DescribeLifecycleHooksResponse
     */
    public function describeLifecycleHooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLifecycleHooksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries resource quotas. You can call the DescribeLimitation operation to query the upper limits on resources such as scheduled tasks that can be created in a scaling group, load balancers that can be attached to a scaling group, instances that can be contained in a scaling group, and scaling configurations that can be created in a scaling group.
     *  *
     * @param DescribeLimitationRequest $request DescribeLimitationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLimitationResponse DescribeLimitationResponse
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
     * @summary Queries resource quotas. You can call the DescribeLimitation operation to query the upper limits on resources such as scheduled tasks that can be created in a scaling group, load balancers that can be attached to a scaling group, instances that can be contained in a scaling group, and scaling configurations that can be created in a scaling group.
     *  *
     * @param DescribeLimitationRequest $request DescribeLimitationRequest
     *
     * @return DescribeLimitationResponse DescribeLimitationResponse
     */
    public function describeLimitation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLimitationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries event notifications.
     *  *
     * @param DescribeNotificationConfigurationsRequest $request DescribeNotificationConfigurationsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNotificationConfigurationsResponse DescribeNotificationConfigurationsResponse
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
     * @summary Queries event notifications.
     *  *
     * @param DescribeNotificationConfigurationsRequest $request DescribeNotificationConfigurationsRequest
     *
     * @return DescribeNotificationConfigurationsResponse DescribeNotificationConfigurationsResponse
     */
    public function describeNotificationConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotificationConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries notification types.
     *  *
     * @param DescribeNotificationTypesRequest $request DescribeNotificationTypesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNotificationTypesResponse DescribeNotificationTypesResponse
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
     * @summary Queries notification types.
     *  *
     * @param DescribeNotificationTypesRequest $request DescribeNotificationTypesRequest
     *
     * @return DescribeNotificationTypesResponse DescribeNotificationTypesResponse
     */
    public function describeNotificationTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotificationTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Filters instance types that meet your business requirements. If you create a scaling configuration by opting for the Specify Instance Type approach, you can call the DescribePatternTypes operation. This operation is designed to sift through and identify instance types that fulfill your specific business needs. It does so by examining the number of vCPUs, memory size, instance family level, and maximum budgeted expense that you specify within the scaling configuration settings.
     *  *
     * @param DescribePatternTypesRequest $request DescribePatternTypesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePatternTypesResponse DescribePatternTypesResponse
     */
    public function describePatternTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribePatternTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Filters instance types that meet your business requirements. If you create a scaling configuration by opting for the Specify Instance Type approach, you can call the DescribePatternTypes operation. This operation is designed to sift through and identify instance types that fulfill your specific business needs. It does so by examining the number of vCPUs, memory size, instance family level, and maximum budgeted expense that you specify within the scaling configuration settings.
     *  *
     * @param DescribePatternTypesRequest $request DescribePatternTypesRequest
     *
     * @return DescribePatternTypesResponse DescribePatternTypesResponse
     */
    public function describePatternTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePatternTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries regions. Before you activate Auto Scaling, you can call the DescribeRegions operation to query the regions where Auto Scaling is officially launched. This preliminary step facilitates the strategic selection of both the optimal region and availability zones for activating Auto Scaling, thereby guaranteeing the finest access speeds and operational efficiency within your chosen geographical area.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries regions. Before you activate Auto Scaling, you can call the DescribeRegions operation to query the regions where Auto Scaling is officially launched. This preliminary step facilitates the strategic selection of both the optimal region and availability zones for activating Auto Scaling, thereby guaranteeing the finest access speeds and operational efficiency within your chosen geographical area.
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling activities.
     *  *
     * @description You can specify a scaling group ID to query all scaling activities in the scaling group.
     * You can filter query results based on the status of scaling activities.
     * You can query scaling activities that are executed in the previous 30 days.
     *  *
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
     * @summary Queries scaling activities.
     *  *
     * @description You can specify a scaling group ID to query all scaling activities in the scaling group.
     * You can filter query results based on the status of scaling activities.
     * You can query scaling activities that are executed in the previous 30 days.
     *  *
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
     * @summary Queries the details about a scaling activity.
     *  *
     * @param DescribeScalingActivityDetailRequest $request DescribeScalingActivityDetailRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingActivityDetailResponse DescribeScalingActivityDetailResponse
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
     * @summary Queries the details about a scaling activity.
     *  *
     * @param DescribeScalingActivityDetailRequest $request DescribeScalingActivityDetailRequest
     *
     * @return DescribeScalingActivityDetailResponse DescribeScalingActivityDetailResponse
     */
    public function describeScalingActivityDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingActivityDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling configurations.
     *  *
     * @param DescribeScalingConfigurationsRequest $request DescribeScalingConfigurationsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingConfigurationsResponse DescribeScalingConfigurationsResponse
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
     * @summary Queries scaling configurations.
     *  *
     * @param DescribeScalingConfigurationsRequest $request DescribeScalingConfigurationsRequest
     *
     * @return DescribeScalingConfigurationsResponse DescribeScalingConfigurationsResponse
     */
    public function describeScalingConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a scaling group. You can call the DescribeScalingGroupDetail operation to query the basic information, instances, and scaling configurations of a scaling group. If you set OutputFormat to yaml, the output is a Kubernetes Deployment file in the YAML format.
     *  *
     * @param DescribeScalingGroupDetailRequest $request DescribeScalingGroupDetailRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingGroupDetailResponse DescribeScalingGroupDetailResponse
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
     * @summary Queries a scaling group. You can call the DescribeScalingGroupDetail operation to query the basic information, instances, and scaling configurations of a scaling group. If you set OutputFormat to yaml, the output is a Kubernetes Deployment file in the YAML format.
     *  *
     * @param DescribeScalingGroupDetailRequest $request DescribeScalingGroupDetailRequest
     *
     * @return DescribeScalingGroupDetailResponse DescribeScalingGroupDetailResponse
     */
    public function describeScalingGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries scaling groups. If you want to query the basic information, instances, and scaling configurations of a scaling group, you can call the DescribeScalingGroups operation.
     *  *
     * @param DescribeScalingGroupsRequest $request DescribeScalingGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingGroupsResponse DescribeScalingGroupsResponse
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
     * @summary Queries scaling groups. If you want to query the basic information, instances, and scaling configurations of a scaling group, you can call the DescribeScalingGroups operation.
     *  *
     * @param DescribeScalingGroupsRequest $request DescribeScalingGroupsRequest
     *
     * @return DescribeScalingGroupsResponse DescribeScalingGroupsResponse
     */
    public function describeScalingGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Elastic Compute Service (ECS) instances in a scaling group
     *  *
     * @param DescribeScalingInstancesRequest $request DescribeScalingInstancesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingInstancesResponse DescribeScalingInstancesResponse
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
     * @summary Queries the Elastic Compute Service (ECS) instances in a scaling group
     *  *
     * @param DescribeScalingInstancesRequest $request DescribeScalingInstancesRequest
     *
     * @return DescribeScalingInstancesResponse DescribeScalingInstancesResponse
     */
    public function describeScalingInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all scaling rules in a scaling group.
     *  *
     * @description You can specify a scaling group ID to query all scaling rules in the scaling group. You can also specify the scaling rule ID, name, unique identifier, and type in the request parameters as filter conditions.
     *  *
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
     * @summary Queries all scaling rules in a scaling group.
     *  *
     * @description You can specify a scaling group ID to query all scaling rules in the scaling group. You can also specify the scaling rule ID, name, unique identifier, and type in the request parameters as filter conditions.
     *  *
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
     * @summary Queries scheduled tasks.
     *  *
     * @description You can query scheduled tasks by scaling rule, task ID, or task name.
     *  *
     * @param DescribeScheduledTasksRequest $request DescribeScheduledTasksRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScheduledTasksResponse DescribeScheduledTasksResponse
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
     * @summary Queries scheduled tasks.
     *  *
     * @description You can query scheduled tasks by scaling rule, task ID, or task name.
     *  *
     * @param DescribeScheduledTasksRequest $request DescribeScheduledTasksRequest
     *
     * @return DescribeScheduledTasksResponse DescribeScheduledTasksResponse
     */
    public function describeScheduledTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduledTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates one or more Application Load Balancer (ALB) server groups from a scaling group.
     *  *
     * @param DetachAlbServerGroupsRequest $request DetachAlbServerGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachAlbServerGroupsResponse DetachAlbServerGroupsResponse
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
     * @summary Disassociates one or more Application Load Balancer (ALB) server groups from a scaling group.
     *  *
     * @param DetachAlbServerGroupsRequest $request DetachAlbServerGroupsRequest
     *
     * @return DetachAlbServerGroupsResponse DetachAlbServerGroupsResponse
     */
    public function detachAlbServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAlbServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates one or more ApsaraDB RDS instances from a scaling group.
     *  *
     * @param DetachDBInstancesRequest $request DetachDBInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachDBInstancesResponse DetachDBInstancesResponse
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
        if (!Utils::isUnset($request->removeSecurityGroup)) {
            $query['RemoveSecurityGroup'] = $request->removeSecurityGroup;
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
     * @summary Disassociates one or more ApsaraDB RDS instances from a scaling group.
     *  *
     * @param DetachDBInstancesRequest $request DetachDBInstancesRequest
     *
     * @return DetachDBInstancesResponse DetachDBInstancesResponse
     */
    public function detachDBInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDBInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes one or more Elastic Compute Service (ECS) instances or elastic container instances from a scaling group.
     *  *
     * @description After ECS instances or elastic container instances are removed from a scaling group, you can call the AttachInstances operation to add the ECS instances or elastic container instances that are removed from the scaling group to other scaling groups.
     * After you remove an ECS instance or elastic container instance by calling the DetachInstances operation, the instance is not stopped or released.
     * Before you call this operation, make sure that the following conditions are met:
     * *   The specified scaling group is enabled.
     * *   No scaling activities in the specified scaling group are in progress.
     * > If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates only that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     * The number of ECS instances or elastic container instances in a scaling group after you remove a specific number of instances from the scaling group must be equal to or greater than the value of the MinSize parameter. Otherwise, an error is reported when you call the DetachInstances operation.
     *  *
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
        if (!Utils::isUnset($request->ignoreInvalidInstance)) {
            $query['IgnoreInvalidInstance'] = $request->ignoreInvalidInstance;
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
     * @summary Removes one or more Elastic Compute Service (ECS) instances or elastic container instances from a scaling group.
     *  *
     * @description After ECS instances or elastic container instances are removed from a scaling group, you can call the AttachInstances operation to add the ECS instances or elastic container instances that are removed from the scaling group to other scaling groups.
     * After you remove an ECS instance or elastic container instance by calling the DetachInstances operation, the instance is not stopped or released.
     * Before you call this operation, make sure that the following conditions are met:
     * *   The specified scaling group is enabled.
     * *   No scaling activities in the specified scaling group are in progress.
     * > If no scaling activities in the specified scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates only that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     * The number of ECS instances or elastic container instances in a scaling group after you remove a specific number of instances from the scaling group must be equal to or greater than the value of the MinSize parameter. Otherwise, an error is reported when you call the DetachInstances operation.
     *  *
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
     * @summary Detaches one or more Classic Load Balancer (CLB) instances from a scaling group.
     *  *
     * @param DetachLoadBalancersRequest $request DetachLoadBalancersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachLoadBalancersResponse DetachLoadBalancersResponse
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
     * @summary Detaches one or more Classic Load Balancer (CLB) instances from a scaling group.
     *  *
     * @param DetachLoadBalancersRequest $request DetachLoadBalancersRequest
     *
     * @return DetachLoadBalancersResponse DetachLoadBalancersResponse
     */
    public function detachLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @summary Detach server groups from a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the DetachServerGroups operation. By detaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups from your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *  *
     * @param DetachServerGroupsRequest $request DetachServerGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachServerGroupsResponse DetachServerGroupsResponse
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
     * @summary Detach server groups from a scaling group. To seamlessly adjust the number of instances in response to changes in your business workload or to maintain the uninterrupted accessibility of your application, you can call the DetachServerGroups operation. By detaching Application Load Balancer (ALB) or Network Load Balancer (NLB) server groups from your scaling group, this operation enables Auto Scaling to automatically tailor your computing capacity to your business needs. Furthermore, it optimizes traffic routing by dynamically allocating incoming requests based on current workload patterns, which significantly improves the stability and performance of your application.
     *  *
     * @param DetachServerGroupsRequest $request DetachServerGroupsRequest
     *
     * @return DetachServerGroupsResponse DetachServerGroupsResponse
     */
    public function detachServerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachServerGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches vServer groups from a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups to improve service performance. If the load balancer currently attached to your scaling group is no longer needed to distribute the access traffic to the instances in your scaling group, you can call the DetachVServerGroups operation to detach one or more vServer groups of this load balancer from the scaling group.
     *  *
     * @description *   When you call the DetachVServerGroups operation, you must use the following parameters to specify the vServer groups that you want to detach from your scaling group:
     *     *   LoadBalancerId: the ID of the load balancer
     *     *   VServerGroupId: the ID of the vServer group
     *     *   Port: the port number of the vServer group
     * *   When the vServer group specified by the request parameters matches that attached to your scaling group, this operation yields a favorable result. Otherwise, the request is ignored and no error is reported.
     * *   Before you call this operation, you must make sure that the load balancer has ceased routing the access traffic to the instances in the scaling group. Failure to do so may lead to service requests being dropped or lost during the detachment process.
     *  *
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
     * @summary Detaches vServer groups from a scaling group. Auto Scaling supports the attachment of load balancers to scaling groups to improve service performance. If the load balancer currently attached to your scaling group is no longer needed to distribute the access traffic to the instances in your scaling group, you can call the DetachVServerGroups operation to detach one or more vServer groups of this load balancer from the scaling group.
     *  *
     * @description *   When you call the DetachVServerGroups operation, you must use the following parameters to specify the vServer groups that you want to detach from your scaling group:
     *     *   LoadBalancerId: the ID of the load balancer
     *     *   VServerGroupId: the ID of the vServer group
     *     *   Port: the port number of the vServer group
     * *   When the vServer group specified by the request parameters matches that attached to your scaling group, this operation yields a favorable result. Otherwise, the request is ignored and no error is reported.
     * *   Before you call this operation, you must make sure that the load balancer has ceased routing the access traffic to the instances in the scaling group. Failure to do so may lead to service requests being dropped or lost during the detachment process.
     *  *
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
     * @summary Disables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you currently do not need an event-triggered task, you can call the DisableAlarm operation to disable it.
     *  *
     * @description Before you disable an event-triggered task, make sure that the task is in the `Normal`, `Alert`, or `Insufficient Data` state.
     *  *
     * @param DisableAlarmRequest $request DisableAlarmRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAlarmResponse DisableAlarmResponse
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
     * @summary Disables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you currently do not need an event-triggered task, you can call the DisableAlarm operation to disable it.
     *  *
     * @description Before you disable an event-triggered task, make sure that the task is in the `Normal`, `Alert`, or `Insufficient Data` state.
     *  *
     * @param DisableAlarmRequest $request DisableAlarmRequest
     *
     * @return DisableAlarmResponse DisableAlarmResponse
     */
    public function disableAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a scaling group. If you temporarily do not require a scaling group that is in the Enabled state, you can call the DisableScalingGroup operation to disable it.
     *  *
     * @description Before you call this operation to disable a scaling group, take note of the following items:
     * *   If scaling activities are being executed in the specified scaling group when you call this operation, these activities will continue until they are complete. However, scaling activities that are triggered after this operation is called will be rejected.
     * *   This operation can be called only when the scaling group is in the Active state.
     *  *
     * @param DisableScalingGroupRequest $request DisableScalingGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableScalingGroupResponse DisableScalingGroupResponse
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
     * @summary Disables a scaling group. If you temporarily do not require a scaling group that is in the Enabled state, you can call the DisableScalingGroup operation to disable it.
     *  *
     * @description Before you call this operation to disable a scaling group, take note of the following items:
     * *   If scaling activities are being executed in the specified scaling group when you call this operation, these activities will continue until they are complete. However, scaling activities that are triggered after this operation is called will be rejected.
     * *   This operation can be called only when the scaling group is in the Active state.
     *  *
     * @param DisableScalingGroupRequest $request DisableScalingGroupRequest
     *
     * @return DisableScalingGroupResponse DisableScalingGroupResponse
     */
    public function disableScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Enables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you want to reuse an event-triggered task that is in the Disabled state, you can call the EnableAlarm operation to enable it.
     *  *
     * @param EnableAlarmRequest $request EnableAlarmRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAlarmResponse EnableAlarmResponse
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
     * @summary Enables an event-triggered task. If your business pattern is unpredictable or prone to unforeseen traffic spikes, you can create event-triggered tasks by associating CloudMonitor metrics to effectively monitor fluctuations in your business workload. Upon detecting that the criteria for alerts, as specified in event-triggered tasks, are fulfilled, Auto Scaling promptly issues alerts and executes the scaling rules predefined within those tasks. This process occurs within the predefined effective time windows of the tasks, thereby facilitating the automatic increase or decrease of Elastic Compute Service (ECS) instances or elastic container instances within your scaling groups. Ultimately, this mechanism ensures the dynamic optimization of resources based on real-time workload demands. If you want to reuse an event-triggered task that is in the Disabled state, you can call the EnableAlarm operation to enable it.
     *  *
     * @param EnableAlarmRequest $request EnableAlarmRequest
     *
     * @return EnableAlarmResponse EnableAlarmResponse
     */
    public function enableAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAlarmWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a scaling group. If a scaling group is in the Disabled state and contains an instance configuration source such as a launch template or a scaling configuration, you can call the EnableScalingGroup operation to enable the scaling group. This operation permits Auto Scaling to dynamically adjust the computing power (also known as the number of instances) in the scaling group based on your business requirements.
     *  *
     * @description *   You can call this operation to enable a scaling group only if the scaling group is in the Inactive state and contains an instance configuration source such as a launch temple or a scaling configuration. The instance configuration source can also be the Elastic Compute Service (ECS) instance that you specified when you created the scaling group. If the preceding requirements are not met, the operation will fail.
     *     **
     *     **Note** A scaling group can have only one active instance configuration source at a time. When you call this operation to enable a scaling group, you can specify a scaling configuration or a launch template for the scaling group. If the scaling group already have an instance configuration source defined prior to your calling, the scaling configuration or launch template specified within your request will supersede the existing scaling configuration or launch template.
     * *   If you specify InstanceId.N to add to the scaling group within your request, Auto Scaling will check whether the addition of InstanceId.N will cause the total number of ECS instances in the scaling group to fall outside the boundaries specified by MinSize and MaxSize after you call this operation.
     *     *   If the call results in the total number of ECS instances dropping below the value of MinSize, Auto Scaling proactively creates pay-as-you-go ECS instances to ensure that the total number reaches the minimum threshold. For example, if you set MinSize to 5 when you created a scaling group and include InstanceId.N within your request to add two ECS instances when you attempt to enable the scaling group, Auto Scaling creates three more ECS instances in the scaling group after the two ECS instances are added.
     *     *   If the call results in the total number of ECS instances exceeding the value of MaxSize, the operation fails.
     *  *
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
     * @summary Enables a scaling group. If a scaling group is in the Disabled state and contains an instance configuration source such as a launch template or a scaling configuration, you can call the EnableScalingGroup operation to enable the scaling group. This operation permits Auto Scaling to dynamically adjust the computing power (also known as the number of instances) in the scaling group based on your business requirements.
     *  *
     * @description *   You can call this operation to enable a scaling group only if the scaling group is in the Inactive state and contains an instance configuration source such as a launch temple or a scaling configuration. The instance configuration source can also be the Elastic Compute Service (ECS) instance that you specified when you created the scaling group. If the preceding requirements are not met, the operation will fail.
     *     **
     *     **Note** A scaling group can have only one active instance configuration source at a time. When you call this operation to enable a scaling group, you can specify a scaling configuration or a launch template for the scaling group. If the scaling group already have an instance configuration source defined prior to your calling, the scaling configuration or launch template specified within your request will supersede the existing scaling configuration or launch template.
     * *   If you specify InstanceId.N to add to the scaling group within your request, Auto Scaling will check whether the addition of InstanceId.N will cause the total number of ECS instances in the scaling group to fall outside the boundaries specified by MinSize and MaxSize after you call this operation.
     *     *   If the call results in the total number of ECS instances dropping below the value of MinSize, Auto Scaling proactively creates pay-as-you-go ECS instances to ensure that the total number reaches the minimum threshold. For example, if you set MinSize to 5 when you created a scaling group and include InstanceId.N within your request to add two ECS instances when you attempt to enable the scaling group, Auto Scaling creates three more ECS instances in the scaling group after the two ECS instances are added.
     *     *   If the call results in the total number of ECS instances exceeding the value of MaxSize, the operation fails.
     *  *
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
     * @summary Puts an Elastic Compute Service (ECS) instance into the Standby state.
     *  *
     * @description ## Description
     * *   If you call the operation to put an ECS instance in a scaling group that is associated with a Classic Load Balancer (CLB) instance into the Standby state, the weight of the ECS instance as a backend server of the CLB instance is set to 0.
     * *   You can remove an instance that is in the Standby state from a scaling group, and then release the instance.
     * *   ECS instances that are in the Standby state are not removed from the scaling group during scale-in activities triggered by event-triggered tasks.
     * *   If Auto Scaling considers an ECS instance that is in the Standby state unhealthy, for example, the ECS instance is being stopped or being restarted, Auto Scaling does not update the health status of the ECS instance or trigger scale-in activities to remove the ECS instance from the scaling group. Auto Scaling updates the health status of the ECS instance only when the ECS instance is no longer in the Standby state.
     *  *
     * @param EnterStandbyRequest $request EnterStandbyRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnterStandbyResponse EnterStandbyResponse
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
     * @summary Puts an Elastic Compute Service (ECS) instance into the Standby state.
     *  *
     * @description ## Description
     * *   If you call the operation to put an ECS instance in a scaling group that is associated with a Classic Load Balancer (CLB) instance into the Standby state, the weight of the ECS instance as a backend server of the CLB instance is set to 0.
     * *   You can remove an instance that is in the Standby state from a scaling group, and then release the instance.
     * *   ECS instances that are in the Standby state are not removed from the scaling group during scale-in activities triggered by event-triggered tasks.
     * *   If Auto Scaling considers an ECS instance that is in the Standby state unhealthy, for example, the ECS instance is being stopped or being restarted, Auto Scaling does not update the health status of the ECS instance or trigger scale-in activities to remove the ECS instance from the scaling group. Auto Scaling updates the health status of the ECS instance only when the ECS instance is no longer in the Standby state.
     *  *
     * @param EnterStandbyRequest $request EnterStandbyRequest
     *
     * @return EnterStandbyResponse EnterStandbyResponse
     */
    public function enterStandby($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enterStandbyWithOptions($request, $runtime);
    }

    /**
     * @summary Executes a scaling rule.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   The scaling group is in the Active state.
     * *   No scaling activities in the scaling group are in progress.
     * If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     * If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     * If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     * You can specify only a limited number of ECS instances in each adjustment. For more information, see the description of the AdjustmentValue parameter in the CreateScalingRule topic.
     *  *
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
     * @summary Executes a scaling rule.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   The scaling group is in the Active state.
     * *   No scaling activities in the scaling group are in progress.
     * If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities even before the cooldown time expires.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity by using the value of the ScalingActivityId parameter in the response.
     * If the addition of a specified number of Elastic Compute Service (ECS) instances to a scaling group causes the total number of ECS instances in the scaling group to exceed the maximum number of instances allowed, Auto Scaling adds only a specific number of ECS instances to ensure that the total number of instances is equal to the maximum number of instances.
     * If the removal of a specified number of ECS instances from a scaling group causes the total number of ECS instances in the scaling group to drop below the minimum number of instances allowed, Auto Scaling removes only a specific number of ECS instances to ensure that the total number of instances is equal to the minimum number of instances.
     * You can specify only a limited number of ECS instances in each adjustment. For more information, see the description of the AdjustmentValue parameter in the CreateScalingRule topic.
     *  *
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
     * @summary Moves an Elastic Compute Service (ECS) instance out of the Standby state.
     *  *
     * @description ## Description
     * If your scaling group is associated with a Classic Load Balancer (CLB) instance and you move an ECS instance in your scaling group out of the Standby state, the weight of the ECS instance is reset to the value that is specified in the scaling configuration of your scaling group.
     *  *
     * @param ExitStandbyRequest $request ExitStandbyRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ExitStandbyResponse ExitStandbyResponse
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
     * @summary Moves an Elastic Compute Service (ECS) instance out of the Standby state.
     *  *
     * @description ## Description
     * If your scaling group is associated with a Classic Load Balancer (CLB) instance and you move an ECS instance in your scaling group out of the Standby state, the weight of the ECS instance is reset to the value that is specified in the scaling configuration of your scaling group.
     *  *
     * @param ExitStandbyRequest $request ExitStandbyRequest
     *
     * @return ExitStandbyResponse ExitStandbyResponse
     */
    public function exitStandby($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exitStandbyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag keys added to Auto Scaling resources. Querying tag keys facilitates easier classification, identification, and monitoring of your Auto Scaling resources, thereby enhancing the flexibility and convenience of your resource management processes.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
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
     * @summary Queries the tag keys added to Auto Scaling resources. Querying tag keys facilitates easier classification, identification, and monitoring of your Auto Scaling resources, thereby enhancing the flexibility and convenience of your resource management processes.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tags. You can call the ListTagResources operation to query tags that are added to Auto Scaling resources, thereby clarifying resource utilization and facilitating efficient management. This operation aids in the automation of resource categorization and permission management processes.
     *  *
     * @description *   Specify at least one of the following request parameters: `ResourceIds` and `Tags`. `Tags.Key` and `Tags.Value` are used to specify the query objects.
     * *   If you provide both `ResourceIds` and `Tags` in your request, the response will exclusively include Auto Scaling resources that satisfy the criteria set by these parameters, ensuring targeted and precise information retrieval.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries tags. You can call the ListTagResources operation to query tags that are added to Auto Scaling resources, thereby clarifying resource utilization and facilitating efficient management. This operation aids in the automation of resource categorization and permission management processes.
     *  *
     * @description *   Specify at least one of the following request parameters: `ResourceIds` and `Tags`. `Tags.Key` and `Tags.Value` are used to specify the query objects.
     * *   If you provide both `ResourceIds` and `Tags` in your request, the response will exclusively include Auto Scaling resources that satisfy the criteria set by these parameters, ensuring targeted and precise information retrieval.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag keys associated with Auto Scaling resources to facilitate a deeper comprehension of those resources. By doing so, you can categorize and manage your Auto Scaling resources more efficiently.
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagValuesResponse ListTagValuesResponse
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
     * @summary Queries the tag keys associated with Auto Scaling resources to facilitate a deeper comprehension of those resources. By doing so, you can categorize and manage your Auto Scaling resources more efficiently.
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an event-triggered task.
     *  *
     * @description *   If you set the MetricType parameter to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Custom monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify the MetricName, DimensionKey, and DimensionValue parameters to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify the user_id and scaling_group dimensions for an event-triggered task to aggregate monitoring data of all Elastic Compute Service (ECS) instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you set the MetricType parameter to custom, the valid values are your custom metrics.
     *     *   For information about the metrics that are supported if you set the MetricType parameter to system, see[ Event-triggered task for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * > The user_id and scaling_group dimensions are automatically populated. You need to only specify the device and state dimensions. For more information, see the `DimensionKey` and `DimensionValue` parameters in the "Request parameters" section of this topic.
     *  *
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
     * @summary Modifies an event-triggered task.
     *  *
     * @description *   If you set the MetricType parameter to custom, you must report your custom metrics to CloudMonitor before you can create event-triggered tasks by using the custom metrics. For more information, see [Custom monitoring event-triggered tasks](https://help.aliyun.com/document_detail/74861.html).
     * *   When you create an event-triggered task, you must specify the MetricName, DimensionKey, and DimensionValue parameters to determine the range of statistics that you want to aggregate for the metrics of the scaling group. For example, you can specify the user_id and scaling_group dimensions for an event-triggered task to aggregate monitoring data of all Elastic Compute Service (ECS) instances or elastic container instances in a scaling group within an Alibaba Cloud account.
     *     *   If you set the MetricType parameter to custom, the valid values are your custom metrics.
     *     *   For information about the metrics that are supported if you set the MetricType parameter to system, see[ Event-triggered task for system monitoring](https://help.aliyun.com/document_detail/74854.html).
     * > The user_id and scaling_group dimensions are automatically populated. You need to only specify the device and state dimensions. For more information, see the `DimensionKey` and `DimensionValue` parameters in the "Request parameters" section of this topic.
     *  *
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
     * @param ModifyAlertConfigurationRequest $request ModifyAlertConfigurationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAlertConfigurationResponse ModifyAlertConfigurationResponse
     */
    public function modifyAlertConfigurationWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->scaleStatuses)) {
            $query['ScaleStatuses'] = $request->scaleStatuses;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ModifyAlertConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAlertConfigurationRequest $request ModifyAlertConfigurationRequest
     *
     * @return ModifyAlertConfigurationResponse ModifyAlertConfigurationResponse
     */
    public function modifyAlertConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAlertConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a scaling configuration for a scaling group that contains elastic container instances.
     *  *
     * @description If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     *  *
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
     * @summary Modifies a scaling configuration for a scaling group that contains elastic container instances.
     *  *
     * @description If you want to change the name of a scaling configuration in a scaling group, make sure that the new name is unique within the scaling group.
     *  *
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
     * @summary Modifies the attributes of an Elastic Compute Service (ECS) instance in a scaling group. You can call the ModifyInstanceAttribute operation to modify the lifecycle management attribute of a manually added ECS instance in a scaling group.
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
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
     * @summary Modifies the attributes of an Elastic Compute Service (ECS) instance in a scaling group. You can call the ModifyInstanceAttribute operation to modify the lifecycle management attribute of a manually added ECS instance in a scaling group.
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a lifecycle hook.
     *  *
     * @description You can use one of the following methods to specify the lifecycle hook that you want to modify:
     * *   Specify the lifecycle hook ID by using the LifecycleHookId parameter. When you use this method, the ScalingGroupId and LifecycleHookName parameters are ignored.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter.
     *  *
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
     * @summary Modifies a lifecycle hook.
     *  *
     * @description You can use one of the following methods to specify the lifecycle hook that you want to modify:
     * *   Specify the lifecycle hook ID by using the LifecycleHookId parameter. When you use this method, the ScalingGroupId and LifecycleHookName parameters are ignored.
     * *   Specify the scaling group ID by using the ScalingGroupId parameter and the lifecycle hook name by using the LifecycleHookName parameter.
     *  *
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
     * @summary Modifies a notification.
     *  *
     * @param ModifyNotificationConfigurationRequest $request ModifyNotificationConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNotificationConfigurationResponse ModifyNotificationConfigurationResponse
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
     * @summary Modifies a notification.
     *  *
     * @param ModifyNotificationConfigurationRequest $request ModifyNotificationConfigurationRequest
     *
     * @return ModifyNotificationConfigurationResponse ModifyNotificationConfigurationResponse
     */
    public function modifyNotificationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNotificationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a scaling configuration.
     *  *
     * @description You can change the name of a scaling configuration in a scaling group. The name must be unique within the scaling group.
     *  *
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
        if (!Utils::isUnset($request->dedicatedHostClusterId)) {
            $query['DedicatedHostClusterId'] = $request->dedicatedHostClusterId;
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
        if (!Utils::isUnset($request->networkInterfaces)) {
            $query['NetworkInterfaces'] = $request->networkInterfaces;
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
     * @summary Modifies a scaling configuration.
     *  *
     * @description You can change the name of a scaling configuration in a scaling group. The name must be unique within the scaling group.
     *  *
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
     * @summary Modifies a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can modify scaling groups to adjust your computing power with ease. The computing power refers to the instances that provide the computing capability. When your scaling group cannot meet your business requirements, you can call the ModifyScalingGroup operation to modify scaling group attributes such as the maximum, minimum, and expected numbers of instances. This prevents repeated creation and configuration of scaling groups, which saves you a lot of time and resource costs.
     *  *
     * @description *   You cannot modify the following parameters by calling this operation:
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
     *  *
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
     * @summary Modifies a scaling group. If you want to enable policy-based automatic addition or removal of instances of a specific type to meet evolving business requirements, you can modify scaling groups to adjust your computing power with ease. The computing power refers to the instances that provide the computing capability. When your scaling group cannot meet your business requirements, you can call the ModifyScalingGroup operation to modify scaling group attributes such as the maximum, minimum, and expected numbers of instances. This prevents repeated creation and configuration of scaling groups, which saves you a lot of time and resource costs.
     *  *
     * @description *   You cannot modify the following parameters by calling this operation:
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
     *  *
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
     * @summary Modifies a scaling rule.
     *  *
     * @param ModifyScalingRuleRequest $request ModifyScalingRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyScalingRuleResponse ModifyScalingRuleResponse
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
     * @summary Modifies a scaling rule.
     *  *
     * @param ModifyScalingRuleRequest $request ModifyScalingRuleRequest
     *
     * @return ModifyScalingRuleResponse ModifyScalingRuleResponse
     */
    public function modifyScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a scheduled task.
     *  *
     * @description You can use the following parameters to specify the scaling method of a scheduled task:
     * *   If you use the `ScheduledAction` parameter, you must select an existing scaling rule for the scheduled task.
     * *   If you use the `ScalingGroupId` parameter, you must specify the minimum number, maximum number, or expected number of instances in the scheduled task.
     * > You cannot specify the `ScheduledAction` and `ScalingGroupId` parameters at the same time.
     *  *
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
     * @summary Modifies a scheduled task.
     *  *
     * @description You can use the following parameters to specify the scaling method of a scheduled task:
     * *   If you use the `ScheduledAction` parameter, you must select an existing scaling rule for the scheduled task.
     * *   If you use the `ScalingGroupId` parameter, you must specify the minimum number, maximum number, or expected number of instances in the scheduled task.
     * > You cannot specify the `ScheduledAction` and `ScalingGroupId` parameters at the same time.
     *  *
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
     * @summary Rebalances the distribution of Elastic Compute Service (ECS) instances across zones. If ECS instances are unevenly distributed across multiple zones, you can call the RebalanceInstances operation to rebalance the distribution of the ECS instances across the zones.
     *  *
     * @description ## [](#)Usage notes
     * Auto Scaling creates new ECS instances to replace the existing ECS instances to fulfill the rebalancing purpose. Auto Scaling starts the new ECS instances before stopping the existing ECS instances. The rebalancing operation does not affect the performance or service availability of your application.
     * *   This operation is supported by only multi-zone scaling groups whose `MultiAZPolicy` is set to `BALANCE`.
     * *   A rebalancing operation is required only when the distribution of the instances of a multi-zone scaling group is significantly unbalanced. In a rebalancing activity, Auto Scaling replaces up to 20 ECS instances to rectify the unbalanced distribution.
     * *   During the execution of a rebalancing operation, if the number of instances in the scaling group approaches or hits the value of MaxSize but the rebalancing operation needs to continue, Auto Scaling allows the total number of ECS instances to momentarily exceed the value of MaxSize by 10%. This temporary surplus condition persists for a duration until equilibrium in the distribution of ECS instances is achieved. Typically, it takes 1 to 6 minutes.
     *     **
     *     **Note** If the 10% increment of the maximum number of instances in a scaling group yield a non-integer value, the decimal portion is always rounded up to ensure an additional instance is accounted for. For example, you have a scaling group that holds a maximum of 15 ECS instances. During a rebalancing operation, Auto Scaling would permit the total number of instances to momentarily surpass this limit by 2, instead of the calculated 10% (which is 1.5).
     *  *
     * @param RebalanceInstancesRequest $request RebalanceInstancesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RebalanceInstancesResponse RebalanceInstancesResponse
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
     * @summary Rebalances the distribution of Elastic Compute Service (ECS) instances across zones. If ECS instances are unevenly distributed across multiple zones, you can call the RebalanceInstances operation to rebalance the distribution of the ECS instances across the zones.
     *  *
     * @description ## [](#)Usage notes
     * Auto Scaling creates new ECS instances to replace the existing ECS instances to fulfill the rebalancing purpose. Auto Scaling starts the new ECS instances before stopping the existing ECS instances. The rebalancing operation does not affect the performance or service availability of your application.
     * *   This operation is supported by only multi-zone scaling groups whose `MultiAZPolicy` is set to `BALANCE`.
     * *   A rebalancing operation is required only when the distribution of the instances of a multi-zone scaling group is significantly unbalanced. In a rebalancing activity, Auto Scaling replaces up to 20 ECS instances to rectify the unbalanced distribution.
     * *   During the execution of a rebalancing operation, if the number of instances in the scaling group approaches or hits the value of MaxSize but the rebalancing operation needs to continue, Auto Scaling allows the total number of ECS instances to momentarily exceed the value of MaxSize by 10%. This temporary surplus condition persists for a duration until equilibrium in the distribution of ECS instances is achieved. Typically, it takes 1 to 6 minutes.
     *     **
     *     **Note** If the 10% increment of the maximum number of instances in a scaling group yield a non-integer value, the decimal portion is always rounded up to ensure an additional instance is accounted for. For example, you have a scaling group that holds a maximum of 15 ECS instances. During a rebalancing operation, Auto Scaling would permit the total number of instances to momentarily surpass this limit by 2, instead of the calculated 10% (which is 1.5).
     *  *
     * @param RebalanceInstancesRequest $request RebalanceInstancesRequest
     *
     * @return RebalanceInstancesResponse RebalanceInstancesResponse
     */
    public function rebalanceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebalanceInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Prolongs a lifecycle hook for Elastic Compute Service (ECS) instances.
     *  *
     * @description You can call this operation to prolong the length of a lifecycle hook up to 20 times. Take note that the total length of a lifecycle hook cannot exceed 6 hours.
     *  *
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
     * @summary Prolongs a lifecycle hook for Elastic Compute Service (ECS) instances.
     *  *
     * @description You can call this operation to prolong the length of a lifecycle hook up to 20 times. Take note that the total length of a lifecycle hook cannot exceed 6 hours.
     *  *
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
     * @summary Removes one or more Elastic Compute Service (ECS) instances or elastic container instances from a scaling group.
     *  *
     * @description *   Before you call this operation, make sure that the following requirements are met:
     *     *   The scaling group is in the Active state.
     *     *   No scaling activity is in progress within the scaling group.
     * > If no scaling activity is in progress within the scaling group, you can call the operation even within the cooldown period.
     * *   If an ECS instance is automatically created by Auto Scaling, or if an ECS instance is manually added to a scaling group and managed by the scaling group, the ECS instance is stopped in economical mode or is released after the instance is removed from the scaling group.
     * *   If an ECS instance is manually added to a scaling group and is not managed by the scaling group, the ECS instance is not stopped or released after the instance is removed from the scaling group.
     * *   If the difference between the number of existing ECS instances specified by the TotalCapacity parameter and the number of ECS instances that you call this operation to remove is less than the value of the MinSize parameter, the call fails.
     * A successful call only means that Auto Scaling accepts the request. The scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     *  *
     * @param RemoveInstancesRequest $request RemoveInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveInstancesResponse RemoveInstancesResponse
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
        if (!Utils::isUnset($request->ignoreInvalidInstance)) {
            $query['IgnoreInvalidInstance'] = $request->ignoreInvalidInstance;
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
     * @summary Removes one or more Elastic Compute Service (ECS) instances or elastic container instances from a scaling group.
     *  *
     * @description *   Before you call this operation, make sure that the following requirements are met:
     *     *   The scaling group is in the Active state.
     *     *   No scaling activity is in progress within the scaling group.
     * > If no scaling activity is in progress within the scaling group, you can call the operation even within the cooldown period.
     * *   If an ECS instance is automatically created by Auto Scaling, or if an ECS instance is manually added to a scaling group and managed by the scaling group, the ECS instance is stopped in economical mode or is released after the instance is removed from the scaling group.
     * *   If an ECS instance is manually added to a scaling group and is not managed by the scaling group, the ECS instance is not stopped or released after the instance is removed from the scaling group.
     * *   If the difference between the number of existing ECS instances specified by the TotalCapacity parameter and the number of ECS instances that you call this operation to remove is less than the value of the MinSize parameter, the call fails.
     * A successful call only means that Auto Scaling accepts the request. The scaling activity may still fail. You can obtain the status of a scaling activity based on the value of the ScalingActivityId parameter in the response.
     *  *
     * @param RemoveInstancesRequest $request RemoveInstancesRequest
     *
     * @return RemoveInstancesResponse RemoveInstancesResponse
     */
    public function removeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Resumes suspended processes in a scaling group.
     *  *
     * @param ResumeProcessesRequest $request ResumeProcessesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeProcessesResponse ResumeProcessesResponse
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
     * @summary Resumes suspended processes in a scaling group.
     *  *
     * @param ResumeProcessesRequest $request ResumeProcessesRequest
     *
     * @return ResumeProcessesResponse ResumeProcessesResponse
     */
    public function resumeProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeProcessesWithOptions($request, $runtime);
    }

    /**
     * @summary Scales instances. The ScaleWithAdjustment operation differs from the ExecuteScalingRule operation in that ScaleWithAdjust can directly scale instances without requiring you to create a scaling rule in advance.
     *  *
     * @description *   Before you call this operation, take note of the following items:
     *     *   The scaling group is in the Active state.
     *     *   The scaling group has no ongoing scaling activities.
     * *   If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities before the cooldown period of the scaling group expires.
     * *   If the addition of a specific number of Elastic Compute Service (ECS) instances to the scaling group causes the total number of ECS instances in the scaling group to exceed the maximum allowed number, Auto Scaling adds ECS instances to the scaling group until the total number of instances is equal to the maximum allowed number.
     * *   If the removal of a specific number of ECS instances from the scaling group causes the total number of ECS instances in the scaling group to be less than the minimum allowed number, Auto Scaling removes ECS instances from the scaling group until the total number of instances is equal to the minimum allowed number.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of `ScalingActivityId` in the response.
     *  *
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
     * @summary Scales instances. The ScaleWithAdjustment operation differs from the ExecuteScalingRule operation in that ScaleWithAdjust can directly scale instances without requiring you to create a scaling rule in advance.
     *  *
     * @description *   Before you call this operation, take note of the following items:
     *     *   The scaling group is in the Active state.
     *     *   The scaling group has no ongoing scaling activities.
     * *   If no scaling activities in the scaling group are in progress, the operation can trigger scaling activities before the cooldown period of the scaling group expires.
     * *   If the addition of a specific number of Elastic Compute Service (ECS) instances to the scaling group causes the total number of ECS instances in the scaling group to exceed the maximum allowed number, Auto Scaling adds ECS instances to the scaling group until the total number of instances is equal to the maximum allowed number.
     * *   If the removal of a specific number of ECS instances from the scaling group causes the total number of ECS instances in the scaling group to be less than the minimum allowed number, Auto Scaling removes ECS instances from the scaling group until the total number of instances is equal to the minimum allowed number.
     * A successful call indicates that Auto Scaling accepts the request. However, the scaling activity may still fail. You can obtain the status of a scaling activity based on the value of `ScalingActivityId` in the response.
     *  *
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
     * @summary Sets deletion protection for a scaling group. If you enable deletion protection for a scaling group, you cannot delete the scaling group. If you disable deletion protection for a scaling group, you can directly delete the scaling group. You can call the SetGroupDeletionProtection operation to enable or disable deletion protection.
     *  *
     * @param SetGroupDeletionProtectionRequest $request SetGroupDeletionProtectionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetGroupDeletionProtectionResponse SetGroupDeletionProtectionResponse
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
     * @summary Sets deletion protection for a scaling group. If you enable deletion protection for a scaling group, you cannot delete the scaling group. If you disable deletion protection for a scaling group, you can directly delete the scaling group. You can call the SetGroupDeletionProtection operation to enable or disable deletion protection.
     *  *
     * @param SetGroupDeletionProtectionRequest $request SetGroupDeletionProtectionRequest
     *
     * @return SetGroupDeletionProtectionResponse SetGroupDeletionProtectionResponse
     */
    public function setGroupDeletionProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGroupDeletionProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Sets instance health. At times, the automatic health check system might not sufficiently determine the precise health status of your Elastic Compute Service (ECS) instances or elastic container instances. To overcome this, you can call the SetInstanceHealth operation to swiftly pinpoint problematic instances and resolve issues. This operation is designed to more precisely align with real-world business requirements and tackle O\\&M hurdles efficiently.
     *  *
     * @description Auto Scaling detects and removes unhealthy ECS instances or elastic container instances from the corresponding scaling groups. If you want to retain a specific instance in the corresponding scaling group, you can put the instance into the Standby or Protected state. For more information, see [EnterStandby](~~EnterStandby~~) and [SetInstancesProtection](~~SetInstancesProtection~~).
     *  *
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
     * @summary Sets instance health. At times, the automatic health check system might not sufficiently determine the precise health status of your Elastic Compute Service (ECS) instances or elastic container instances. To overcome this, you can call the SetInstanceHealth operation to swiftly pinpoint problematic instances and resolve issues. This operation is designed to more precisely align with real-world business requirements and tackle O\\&M hurdles efficiently.
     *  *
     * @description Auto Scaling detects and removes unhealthy ECS instances or elastic container instances from the corresponding scaling groups. If you want to retain a specific instance in the corresponding scaling group, you can put the instance into the Standby or Protected state. For more information, see [EnterStandby](~~EnterStandby~~) and [SetInstancesProtection](~~SetInstancesProtection~~).
     *  *
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
     * @summary Puts Elastic Compute Service (ECS) instances into the Protected state. When ECS instances are put into the Protected state, they become immune to manual deletion attempts by using the Auto Scaling console or API operations. This operation serves as a robust safeguard, efficiently preventing any inadvertent instance release that could lead to irreversible consequences.
     *  *
     * @description Once ECS instances enter the Protected state, they become subject to the following restrictions:
     * *   ECS instances will persist in the Protected state, unless you deliberately remove them from this state.
     * *   Even in scenarios where automatic scale-in actions are initiated due to fluctuations in the number of ECS instances or the execution of event-triggered tasks, Auto Scaling does not remove ECS instances that are in the Protected state from their respective scaling groups. Only after being manually removed from their respective scaling groups can ECS instances that are in the Protected state be released. For more information, see [Remove an ECS instance](https://help.aliyun.com/document_detail/25955.html).
     * *   ECS instances in the Protected state maintain their existing health status even when they undergo stopping or restarting processes.
     *  *
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
     * @summary Puts Elastic Compute Service (ECS) instances into the Protected state. When ECS instances are put into the Protected state, they become immune to manual deletion attempts by using the Auto Scaling console or API operations. This operation serves as a robust safeguard, efficiently preventing any inadvertent instance release that could lead to irreversible consequences.
     *  *
     * @description Once ECS instances enter the Protected state, they become subject to the following restrictions:
     * *   ECS instances will persist in the Protected state, unless you deliberately remove them from this state.
     * *   Even in scenarios where automatic scale-in actions are initiated due to fluctuations in the number of ECS instances or the execution of event-triggered tasks, Auto Scaling does not remove ECS instances that are in the Protected state from their respective scaling groups. Only after being manually removed from their respective scaling groups can ECS instances that are in the Protected state be released. For more information, see [Remove an ECS instance](https://help.aliyun.com/document_detail/25955.html).
     * *   ECS instances in the Protected state maintain their existing health status even when they undergo stopping or restarting processes.
     *  *
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
     * @summary Suspends scaling processes. This operation empowers you to selectively pause distinct scaling processes within a particular scaling group, enabling you to carry out alternative tasks and achieve more granular management over your scaling operations.
     *  *
     * @param SuspendProcessesRequest $request SuspendProcessesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendProcessesResponse SuspendProcessesResponse
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
     * @summary Suspends scaling processes. This operation empowers you to selectively pause distinct scaling processes within a particular scaling group, enabling you to carry out alternative tasks and achieve more granular management over your scaling operations.
     *  *
     * @param SuspendProcessesRequest $request SuspendProcessesRequest
     *
     * @return SuspendProcessesResponse SuspendProcessesResponse
     */
    public function suspendProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendProcessesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates and attaches tags. You can call the TagResources operation to uniformly create and attach tags to your Auto Scaling resources, streamlining resource management. This capability empowers you to categorize resources based on tags, thereby enhancing the overall efficiency of resource allocation and utilization.
     *  *
     * @description *   You can attach up to 20 tags to a scaling group.
     *     **
     *     **Note** Before you attach tags to a specific Auto Scaling resource, Alibaba Cloud automatically verifies the current number of tags attached to that resource. In the event the proposed addition would exceed the maximum allowed number of tags, an error message will be promptly returned after you call this operation.
     * *   If you set `Tags.Propagate` to `true`, any tags attached to your scaling group will be automatically propagated to new instances that are subsequently created in the scaling group, without affecting existing instances.
     * *   If both the scaling configuration and the scaling group have tags attached, and tag propagation from the scaling group is enabled, the tags of newly created instances comply with the following rules:
     *     *   Instances set to join the scaling group will inherit the following tags: tags attached to the scaling configuration that initiates the instance creation and tags attached to the scaling group that are allowed to propagate to these instances upon instance creation.
     *     *   If the tag keys of the scaling configuration and those attached to the scaling group and propagated to the instances are identical, the tags attached to the scaling group and propagated to the instances will be overwritten by the tags of the scaling configuration.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary Creates and attaches tags. You can call the TagResources operation to uniformly create and attach tags to your Auto Scaling resources, streamlining resource management. This capability empowers you to categorize resources based on tags, thereby enhancing the overall efficiency of resource allocation and utilization.
     *  *
     * @description *   You can attach up to 20 tags to a scaling group.
     *     **
     *     **Note** Before you attach tags to a specific Auto Scaling resource, Alibaba Cloud automatically verifies the current number of tags attached to that resource. In the event the proposed addition would exceed the maximum allowed number of tags, an error message will be promptly returned after you call this operation.
     * *   If you set `Tags.Propagate` to `true`, any tags attached to your scaling group will be automatically propagated to new instances that are subsequently created in the scaling group, without affecting existing instances.
     * *   If both the scaling configuration and the scaling group have tags attached, and tag propagation from the scaling group is enabled, the tags of newly created instances comply with the following rules:
     *     *   Instances set to join the scaling group will inherit the following tags: tags attached to the scaling configuration that initiates the instance creation and tags attached to the scaling group that are allowed to propagate to these instances upon instance creation.
     *     *   If the tag keys of the scaling configuration and those attached to the scaling group and propagated to the instances are identical, the tags attached to the scaling group and propagated to the instances will be overwritten by the tags of the scaling configuration.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from Auto Scaling resources simultaneously. This operation streamlines resource management activities, enhances system efficiency, and mitigates potential security vulnerabilities. Once a tag is removed from a particular resource, and if it is not re-added to any other resource, the system will automatically delete the unused tag.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @summary Removes tags from Auto Scaling resources simultaneously. This operation streamlines resource management activities, enhances system efficiency, and mitigates potential security vulnerabilities. Once a tag is removed from a particular resource, and if it is not re-added to any other resource, the system will automatically delete the unused tag.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether Auto Scaling is authorized to access Elastic Compute Service (ECS) and Elastic Container Instance resources.
     *  *
     * @param VerifyAuthenticationRequest $request VerifyAuthenticationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyAuthenticationResponse VerifyAuthenticationResponse
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
     * @summary Checks whether Auto Scaling is authorized to access Elastic Compute Service (ECS) and Elastic Container Instance resources.
     *  *
     * @param VerifyAuthenticationRequest $request VerifyAuthenticationRequest
     *
     * @return VerifyAuthenticationResponse VerifyAuthenticationResponse
     */
    public function verifyAuthentication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyAuthenticationWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies whether Auto Scaling is activated. This operation guarantees that in response to shifts in business workloads or variations in incoming traffic, the system will automatically adjust resource provisioning. This auto-scaling capability enhances the overall system performance, ensuring high availability and improved flexibility to accommodate dynamic demands.
     *  *
     * @param VerifyUserRequest $request VerifyUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyUserResponse VerifyUserResponse
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
     * @summary Verifies whether Auto Scaling is activated. This operation guarantees that in response to shifts in business workloads or variations in incoming traffic, the system will automatically adjust resource provisioning. This auto-scaling capability enhances the overall system performance, ensuring high availability and improved flexibility to accommodate dynamic demands.
     *  *
     * @param VerifyUserRequest $request VerifyUserRequest
     *
     * @return VerifyUserResponse VerifyUserResponse
     */
    public function verifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyUserWithOptions($request, $runtime);
    }
}
