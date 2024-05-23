<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ess\V20160722\Models\AttachInstancesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\AttachInstancesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScalingConfigurationRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScalingConfigurationResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DeleteScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeAccountAttributesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeAccountAttributesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeCapacityHistoryRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeCapacityHistoryResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeLimitationRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeLimitationResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingActivitiesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingActivitiesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingActivityDetailRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingActivityDetailResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingConfigurationsRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingConfigurationsResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingInstancesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingInstancesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingRulesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingRulesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScheduledTasksRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScheduledTasksResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DetachInstancesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DetachInstancesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\DisableScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\DisableScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\EnableScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\EnableScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\ExecuteScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\ExecuteScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\ModifyScalingGroupRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\ModifyScalingGroupResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\ModifyScalingRuleRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\ModifyScalingRuleResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\ModifyScheduledTaskRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\RemoveInstancesRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\RemoveInstancesResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\VerifyAuthenticationRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\VerifyAuthenticationResponse;
use AlibabaCloud\SDK\Ess\V20160722\Models\VerifyUserRequest;
use AlibabaCloud\SDK\Ess\V20160722\Models\VerifyUserResponse;
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
     * @deprecated OpenAPI AttachInstances is deprecated, please use Ess::2014-08-28::AttachInstances,Ess::2022-02-22::AttachInstances instead.
     *  *
     * Deprecated
     *
     * @param AttachInstancesRequest $request AttachInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachInstancesResponse AttachInstancesResponse
     */
    public function attachInstancesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachInstances',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI AttachInstances is deprecated, please use Ess::2014-08-28::AttachInstances,Ess::2022-02-22::AttachInstances instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI CreateScalingConfiguration is deprecated, please use Ess::2022-02-22::CreateScalingConfiguration,Ess::2014-08-28::CreateScalingConfiguration instead.
     *  *
     * Deprecated
     *
     * @param CreateScalingConfigurationRequest $request CreateScalingConfigurationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScalingConfigurationResponse CreateScalingConfigurationResponse
     */
    public function createScalingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
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
        if (!Utils::isUnset($request->scalingConfigurationName)) {
            $query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingConfiguration',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI CreateScalingConfiguration is deprecated, please use Ess::2022-02-22::CreateScalingConfiguration,Ess::2014-08-28::CreateScalingConfiguration instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI CreateScalingGroup is deprecated, please use Ess::2022-02-22::CreateScalingGroup,Ess::2014-08-28::CreateScalingGroup instead.
     *  *
     * Deprecated
     *
     * @param CreateScalingGroupRequest $request CreateScalingGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScalingGroupResponse CreateScalingGroupResponse
     */
    public function createScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceIds)) {
            $query['DBInstanceIds'] = $request->DBInstanceIds;
        }
        if (!Utils::isUnset($request->defaultCooldown)) {
            $query['DefaultCooldown'] = $request->defaultCooldown;
        }
        if (!Utils::isUnset($request->loadBalancerIds)) {
            $query['LoadBalancerIds'] = $request->loadBalancerIds;
        }
        if (!Utils::isUnset($request->maxSize)) {
            $query['MaxSize'] = $request->maxSize;
        }
        if (!Utils::isUnset($request->minSize)) {
            $query['MinSize'] = $request->minSize;
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
        if (!Utils::isUnset($request->scalingGroupName)) {
            $query['ScalingGroupName'] = $request->scalingGroupName;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->removalPolicy)) {
            $query['RemovalPolicy'] = $request->removalPolicy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingGroup',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI CreateScalingGroup is deprecated, please use Ess::2022-02-22::CreateScalingGroup,Ess::2014-08-28::CreateScalingGroup instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI CreateScalingRule is deprecated, please use Ess::2022-02-22::CreateScalingRule,Ess::2014-08-28::CreateScalingRule instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->cooldown)) {
            $query['Cooldown'] = $request->cooldown;
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
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingRule',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI CreateScalingRule is deprecated, please use Ess::2022-02-22::CreateScalingRule,Ess::2014-08-28::CreateScalingRule instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI CreateScheduledTask is deprecated, please use Ess::2022-02-22::CreateScheduledTask,Ess::2014-08-28::CreateScheduledTask instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->launchExpirationTime)) {
            $query['LaunchExpirationTime'] = $request->launchExpirationTime;
        }
        if (!Utils::isUnset($request->launchTime)) {
            $query['LaunchTime'] = $request->launchTime;
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
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI CreateScheduledTask is deprecated, please use Ess::2022-02-22::CreateScheduledTask,Ess::2014-08-28::CreateScheduledTask instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DeleteScalingConfiguration is deprecated, please use Ess::2022-02-22::DeleteScalingConfiguration,Ess::2014-08-28::DeleteScalingConfiguration instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScalingConfiguration',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DeleteScalingConfiguration is deprecated, please use Ess::2022-02-22::DeleteScalingConfiguration,Ess::2014-08-28::DeleteScalingConfiguration instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DeleteScalingGroup is deprecated, please use Ess::2022-02-22::DeleteScalingGroup,Ess::2014-08-28::DeleteScalingGroup instead.
     *  *
     * Deprecated
     *
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
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DeleteScalingGroup is deprecated, please use Ess::2022-02-22::DeleteScalingGroup,Ess::2014-08-28::DeleteScalingGroup instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DeleteScalingRule is deprecated, please use Ess::2022-02-22::DeleteScalingRule,Ess::2014-08-28::DeleteScalingRule instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingRuleId)) {
            $query['ScalingRuleId'] = $request->scalingRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScalingRule',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DeleteScalingRule is deprecated, please use Ess::2022-02-22::DeleteScalingRule,Ess::2014-08-28::DeleteScalingRule instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DeleteScheduledTask is deprecated, please use Ess::2022-02-22::DeleteScheduledTask,Ess::2014-08-28::DeleteScheduledTask instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduledTaskId)) {
            $query['ScheduledTaskId'] = $request->scheduledTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScheduledTask',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DeleteScheduledTask is deprecated, please use Ess::2022-02-22::DeleteScheduledTask,Ess::2014-08-28::DeleteScheduledTask instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeAccountAttributes is deprecated, please use Ess::2022-02-22::DescribeLimitation,Ess::2014-08-28::DescribeLimitation instead.
     *  *
     * Deprecated
     *
     * @param DescribeAccountAttributesRequest $request DescribeAccountAttributesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountAttributesResponse DescribeAccountAttributesResponse
     */
    public function describeAccountAttributesWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountAttributes',
            'version'     => '2016-07-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeAccountAttributes is deprecated, please use Ess::2022-02-22::DescribeLimitation,Ess::2014-08-28::DescribeLimitation instead.
     *  *
     * Deprecated
     *
     * @param DescribeAccountAttributesRequest $request DescribeAccountAttributesRequest
     *
     * @return DescribeAccountAttributesResponse DescribeAccountAttributesResponse
     */
    public function describeAccountAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountAttributesWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeCapacityHistory is deprecated, please use Ess::2022-02-22::DescribeScalingActivities,Ess::2014-08-28::DescribeScalingActivities instead.
     *  *
     * Deprecated
     *
     * @param DescribeCapacityHistoryRequest $request DescribeCapacityHistoryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCapacityHistoryResponse DescribeCapacityHistoryResponse
     */
    public function describeCapacityHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCapacityHistory',
            'version'     => '2016-07-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCapacityHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI DescribeCapacityHistory is deprecated, please use Ess::2022-02-22::DescribeScalingActivities,Ess::2014-08-28::DescribeScalingActivities instead.
     *  *
     * Deprecated
     *
     * @param DescribeCapacityHistoryRequest $request DescribeCapacityHistoryRequest
     *
     * @return DescribeCapacityHistoryResponse DescribeCapacityHistoryResponse
     */
    public function describeCapacityHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapacityHistoryWithOptions($request, $runtime);
    }

    /**
     * @deprecated OpenAPI DescribeLimitation is deprecated, please use Ess::2022-02-22::DescribeLimitation,Ess::2014-08-28::DescribeLimitation instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLimitation',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeLimitation is deprecated, please use Ess::2022-02-22::DescribeLimitation,Ess::2014-08-28::DescribeLimitation instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeRegions is deprecated, please use Ess::2022-02-22::DescribeRegions,Ess::2014-08-28::DescribeRegions instead.
     *  *
     * Deprecated
     *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeRegions is deprecated, please use Ess::2022-02-22::DescribeRegions,Ess::2014-08-28::DescribeRegions instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScalingActivities is deprecated, please use Ess::2022-02-22::DescribeScalingActivities,Ess::2014-08-28::DescribeScalingActivities instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->statusCode)) {
            $query['StatusCode'] = $request->statusCode;
        }
        if (!Utils::isUnset($request->scalingActivityId)) {
            $query['ScalingActivityId'] = $request->scalingActivityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingActivities',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScalingActivities is deprecated, please use Ess::2022-02-22::DescribeScalingActivities,Ess::2014-08-28::DescribeScalingActivities instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScalingActivityDetail is deprecated, please use Ess::2022-02-22::DescribeScalingActivityDetail,Ess::2014-08-28::DescribeScalingActivityDetail instead.
     *  *
     * Deprecated
     *
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
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScalingActivityDetail is deprecated, please use Ess::2022-02-22::DescribeScalingActivityDetail,Ess::2014-08-28::DescribeScalingActivityDetail instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScalingConfigurations is deprecated, please use Ess::2022-02-22::DescribeScalingConfigurations,Ess::2014-08-28::DescribeScalingConfigurations instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingConfigurationName)) {
            $query['ScalingConfigurationName'] = $request->scalingConfigurationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingConfigurations',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScalingConfigurations is deprecated, please use Ess::2022-02-22::DescribeScalingConfigurations,Ess::2014-08-28::DescribeScalingConfigurations instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScalingGroups is deprecated, please use Ess::2022-02-22::DescribeScalingGroups,Ess::2014-08-28::DescribeScalingGroups instead.
     *  *
     * Deprecated
     *
     * @param DescribeScalingGroupsRequest $request DescribeScalingGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScalingGroupsResponse DescribeScalingGroupsResponse
     */
    public function describeScalingGroupsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->scalingGroupName)) {
            $query['ScalingGroupName'] = $request->scalingGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroups',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScalingGroups is deprecated, please use Ess::2022-02-22::DescribeScalingGroups,Ess::2014-08-28::DescribeScalingGroups instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScalingInstances is deprecated, please use Ess::2022-02-22::DescribeScalingInstances,Ess::2014-08-28::DescribeScalingInstances instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->healthStatus)) {
            $query['HealthStatus'] = $request->healthStatus;
        }
        if (!Utils::isUnset($request->lifecycleState)) {
            $query['LifecycleState'] = $request->lifecycleState;
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
        if (!Utils::isUnset($request->scalingConfigurationId)) {
            $query['ScalingConfigurationId'] = $request->scalingConfigurationId;
        }
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingInstances',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScalingInstances is deprecated, please use Ess::2022-02-22::DescribeScalingInstances,Ess::2014-08-28::DescribeScalingInstances instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScalingRules is deprecated, please use Ess::2022-02-22::DescribeScalingRules,Ess::2014-08-28::DescribeScalingRules instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->scalingRuleAri)) {
            $query['ScalingRuleAri'] = $request->scalingRuleAri;
        }
        if (!Utils::isUnset($request->scalingRuleId)) {
            $query['ScalingRuleId'] = $request->scalingRuleId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingRules',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScalingRules is deprecated, please use Ess::2022-02-22::DescribeScalingRules,Ess::2014-08-28::DescribeScalingRules instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DescribeScheduledTasks is deprecated, please use Ess::2022-02-22::DescribeScheduledTasks,Ess::2014-08-28::DescribeScheduledTasks instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->scheduledAction)) {
            $query['ScheduledAction'] = $request->scheduledAction;
        }
        if (!Utils::isUnset($request->scheduledTaskId)) {
            $query['ScheduledTaskId'] = $request->scheduledTaskId;
        }
        if (!Utils::isUnset($request->scheduledTaskName)) {
            $query['ScheduledTaskName'] = $request->scheduledTaskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScheduledTasks',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DescribeScheduledTasks is deprecated, please use Ess::2022-02-22::DescribeScheduledTasks,Ess::2014-08-28::DescribeScheduledTasks instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DetachInstances is deprecated, please use Ess::2022-02-22::DetachInstances,Ess::2014-08-28::DetachInstances instead.
     *  *
     * Deprecated
     *
     * @param DetachInstancesRequest $request DetachInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachInstancesResponse DetachInstancesResponse
     */
    public function detachInstancesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachInstances',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DetachInstances is deprecated, please use Ess::2022-02-22::DetachInstances,Ess::2014-08-28::DetachInstances instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI DisableScalingGroup is deprecated, please use Ess::2022-02-22::DisableScalingGroup,Ess::2014-08-28::DisableScalingGroup instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->scalingGroupId)) {
            $query['ScalingGroupId'] = $request->scalingGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableScalingGroup',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI DisableScalingGroup is deprecated, please use Ess::2022-02-22::DisableScalingGroup,Ess::2014-08-28::DisableScalingGroup instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI EnableScalingGroup is deprecated, please use Ess::2014-08-28::EnableScalingGroup,Ess::2022-02-22::EnableScalingGroup instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableScalingGroup',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI EnableScalingGroup is deprecated, please use Ess::2014-08-28::EnableScalingGroup,Ess::2022-02-22::EnableScalingGroup instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI ExecuteScalingRule is deprecated, please use Ess::2014-08-28::ExecuteScalingRule,Ess::2022-02-22::ExecuteScalingRule instead.
     *  *
     * Deprecated
     *
     * @param ExecuteScalingRuleRequest $request ExecuteScalingRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteScalingRuleResponse ExecuteScalingRuleResponse
     */
    public function executeScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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
        if (!Utils::isUnset($request->scalingRuleAri)) {
            $query['ScalingRuleAri'] = $request->scalingRuleAri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteScalingRule',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI ExecuteScalingRule is deprecated, please use Ess::2014-08-28::ExecuteScalingRule,Ess::2022-02-22::ExecuteScalingRule instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI ModifyScalingGroup is deprecated, please use Ess::2014-08-28::ModifyScalingGroup,Ess::2022-02-22::ModifyScalingGroup instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->defaultCooldown)) {
            $query['DefaultCooldown'] = $request->defaultCooldown;
        }
        if (!Utils::isUnset($request->maxSize)) {
            $query['MaxSize'] = $request->maxSize;
        }
        if (!Utils::isUnset($request->minSize)) {
            $query['MinSize'] = $request->minSize;
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
        if (!Utils::isUnset($request->scalingGroupName)) {
            $query['ScalingGroupName'] = $request->scalingGroupName;
        }
        if (!Utils::isUnset($request->removalPolicy)) {
            $query['RemovalPolicy'] = $request->removalPolicy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingGroup',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI ModifyScalingGroup is deprecated, please use Ess::2014-08-28::ModifyScalingGroup,Ess::2022-02-22::ModifyScalingGroup instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI ModifyScalingRule is deprecated, please use Ess::2014-08-28::ModifyScalingRule,Ess::2022-02-22::ModifyScalingRule instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->cooldown)) {
            $query['Cooldown'] = $request->cooldown;
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
        if (!Utils::isUnset($request->scalingRuleId)) {
            $query['ScalingRuleId'] = $request->scalingRuleId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingRule',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI ModifyScalingRule is deprecated, please use Ess::2014-08-28::ModifyScalingRule,Ess::2022-02-22::ModifyScalingRule instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI ModifyScheduledTask is deprecated, please use Ess::2014-08-28::ModifyScheduledTask,Ess::2022-02-22::ModifyScheduledTask instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->launchExpirationTime)) {
            $query['LaunchExpirationTime'] = $request->launchExpirationTime;
        }
        if (!Utils::isUnset($request->launchTime)) {
            $query['LaunchTime'] = $request->launchTime;
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
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI ModifyScheduledTask is deprecated, please use Ess::2014-08-28::ModifyScheduledTask,Ess::2022-02-22::ModifyScheduledTask instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI RemoveInstances is deprecated, please use Ess::2014-08-28::RemoveInstances,Ess::2022-02-22::RemoveInstances instead.
     *  *
     * Deprecated
     *
     * @param RemoveInstancesRequest $request RemoveInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveInstancesResponse RemoveInstancesResponse
     */
    public function removeInstancesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveInstances',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI RemoveInstances is deprecated, please use Ess::2014-08-28::RemoveInstances,Ess::2022-02-22::RemoveInstances instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI VerifyAuthentication is deprecated, please use Ess::2014-08-28::VerifyAuthentication instead.
     *  *
     * Deprecated
     *
     * @param VerifyAuthenticationRequest $request VerifyAuthenticationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyAuthenticationResponse VerifyAuthenticationResponse
     */
    public function verifyAuthenticationWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyAuthentication',
            'version'     => '2016-07-22',
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
     * @deprecated OpenAPI VerifyAuthentication is deprecated, please use Ess::2014-08-28::VerifyAuthentication instead.
     *  *
     * Deprecated
     *
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
     * @deprecated OpenAPI VerifyUser is deprecated, please use Ess::2014-08-28::VerifyUser instead.
     *  *
     * Deprecated
     *
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
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyUser',
            'version'     => '2016-07-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return VerifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated OpenAPI VerifyUser is deprecated, please use Ess::2014-08-28::VerifyUser instead.
     *  *
     * Deprecated
     *
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
