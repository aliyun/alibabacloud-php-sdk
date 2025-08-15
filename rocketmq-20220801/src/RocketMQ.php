<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateDisasterRecoveryPlanRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateTopicRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupSubscriptionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupSubscriptionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetMessageDetailResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupSubscriptionsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupSubscriptionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryItemsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryItemsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryPlansRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryPlansResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMessagesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMessagesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMetricMetaRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMetricMetaResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicSubscriptionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTracesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTracesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ResetConsumeOffsetRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ResetConsumeOffsetResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\StartDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\StopDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\SyncDisasterRecoveryCheckpointResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateDisasterRecoveryItemRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateDisasterRecoveryPlanRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateTopicRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\VerifyConsumeMessageRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\VerifyConsumeMessageResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\VerifySendMessageRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\VerifySendMessageResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RocketMQ extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rocketmq', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Add Disaster Recovery Plan Entry.
     *
     * @param request - AddDisasterRecoveryItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDisasterRecoveryItemResponse
     *
     * @param string                         $planId
     * @param AddDisasterRecoveryItemRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AddDisasterRecoveryItemResponse
     */
    public function addDisasterRecoveryItemWithOptions($planId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->topics) {
            @$body['topics'] = $request->topics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDisasterRecoveryItem',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Disaster Recovery Plan Entry.
     *
     * @param request - AddDisasterRecoveryItemRequest
     *
     * @returns AddDisasterRecoveryItemResponse
     *
     * @param string                         $planId
     * @param AddDisasterRecoveryItemRequest $request
     *
     * @return AddDisasterRecoveryItemResponse
     */
    public function addDisasterRecoveryItem($planId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addDisasterRecoveryItemWithOptions($planId, $request, $headers, $runtime);
    }

    /**
     * Changes the resource group to which a ApsaraMQ for RocketMQ instance belongs.
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
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceGroup/change',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which a ApsaraMQ for RocketMQ instance belongs.
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
     * Creates a consumer group.
     *
     * @remarks
     * The ID of the consumer group. The ID is globally unique and is used to identify a consumer group.
     * The following limits are imposed on the ID:
     * *   Character limit: The ID can contain letters, digits, underscores (_), hyphens (-), and percent signs (%).
     * *   Length limit: The ID must be 1 to 60 characters in length.
     * For more information about strings that are reserved for the system, see [Limits on parameters](https://help.aliyun.com/document_detail/440347.html).
     *
     * @param request - CreateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param CreateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumeRetryPolicy) {
            @$body['consumeRetryPolicy'] = $request->consumeRetryPolicy;
        }

        if (null !== $request->deliveryOrderType) {
            @$body['deliveryOrderType'] = $request->deliveryOrderType;
        }

        if (null !== $request->maxReceiveTps) {
            @$body['maxReceiveTps'] = $request->maxReceiveTps;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConsumerGroup',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a consumer group.
     *
     * @remarks
     * The ID of the consumer group. The ID is globally unique and is used to identify a consumer group.
     * The following limits are imposed on the ID:
     * *   Character limit: The ID can contain letters, digits, underscores (_), hyphens (-), and percent signs (%).
     * *   Length limit: The ID must be 1 to 60 characters in length.
     * For more information about strings that are reserved for the system, see [Limits on parameters](https://help.aliyun.com/document_detail/440347.html).
     *
     * @param request - CreateConsumerGroupRequest
     *
     * @returns CreateConsumerGroupResponse
     *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Create Disaster Recovery Plan.
     *
     * @param request - CreateDisasterRecoveryPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDisasterRecoveryPlanResponse
     *
     * @param CreateDisasterRecoveryPlanRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDisasterRecoveryPlanResponse
     */
    public function createDisasterRecoveryPlanWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoSyncCheckpoint) {
            @$body['autoSyncCheckpoint'] = $request->autoSyncCheckpoint;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        if (null !== $request->planDesc) {
            @$body['planDesc'] = $request->planDesc;
        }

        if (null !== $request->planName) {
            @$body['planName'] = $request->planName;
        }

        if (null !== $request->planType) {
            @$body['planType'] = $request->planType;
        }

        if (null !== $request->syncCheckpointEnabled) {
            @$body['syncCheckpointEnabled'] = $request->syncCheckpointEnabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDisasterRecoveryPlan',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDisasterRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Disaster Recovery Plan.
     *
     * @param request - CreateDisasterRecoveryPlanRequest
     *
     * @returns CreateDisasterRecoveryPlanResponse
     *
     * @param CreateDisasterRecoveryPlanRequest $request
     *
     * @return CreateDisasterRecoveryPlanResponse
     */
    public function createDisasterRecoveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDisasterRecoveryPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an ApsaraMQ for RocketMQ 5.x instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->autoRenew) {
            @$body['autoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$body['autoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->commodityCode) {
            @$body['commodityCode'] = $request->commodityCode;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        if (null !== $request->networkInfo) {
            @$body['networkInfo'] = $request->networkInfo;
        }

        if (null !== $request->paymentType) {
            @$body['paymentType'] = $request->paymentType;
        }

        if (null !== $request->period) {
            @$body['period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$body['periodUnit'] = $request->periodUnit;
        }

        if (null !== $request->productInfo) {
            @$body['productInfo'] = $request->productInfo;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->seriesCode) {
            @$body['seriesCode'] = $request->seriesCode;
        }

        if (null !== $request->serviceCode) {
            @$body['serviceCode'] = $request->serviceCode;
        }

        if (null !== $request->subSeriesCode) {
            @$body['subSeriesCode'] = $request->subSeriesCode;
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
            'action' => 'CreateInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraMQ for RocketMQ 5.x instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an account that is used to access an instance.
     *
     * @param request - CreateInstanceAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceAccountResponse
     *
     * @param string                       $instanceId
     * @param CreateInstanceAccountRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceAccount',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/accounts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account that is used to access an instance.
     *
     * @param request - CreateInstanceAccountRequest
     *
     * @returns CreateInstanceAccountResponse
     *
     * @param string                       $instanceId
     * @param CreateInstanceAccountRequest $request
     *
     * @return CreateInstanceAccountResponse
     */
    public function createInstanceAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates an access control list (ACL) in a specific instance.
     *
     * @param request - CreateInstanceAclRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceAclResponse
     *
     * @param string                   $instanceId
     * @param string                   $username
     * @param CreateInstanceAclRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateInstanceAclResponse
     */
    public function createInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->actions) {
            @$body['actions'] = $request->actions;
        }

        if (null !== $request->decision) {
            @$body['decision'] = $request->decision;
        }

        if (null !== $request->ipWhitelists) {
            @$body['ipWhitelists'] = $request->ipWhitelists;
        }

        if (null !== $request->resourceName) {
            @$body['resourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceAcl',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/acl/account/' . Url::percentEncode($username) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control list (ACL) in a specific instance.
     *
     * @param request - CreateInstanceAclRequest
     *
     * @returns CreateInstanceAclResponse
     *
     * @param string                   $instanceId
     * @param string                   $username
     * @param CreateInstanceAclRequest $request
     *
     * @return CreateInstanceAclResponse
     */
    public function createInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * Creates an IP address whitelist.
     *
     * @param request - CreateInstanceIpWhitelistRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceIpWhitelistResponse
     *
     * @param string                           $instanceId
     * @param CreateInstanceIpWhitelistRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateInstanceIpWhitelistResponse
     */
    public function createInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ipWhitelists) {
            @$body['ipWhitelists'] = $request->ipWhitelists;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceIpWhitelist',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/ip/whitelist',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an IP address whitelist.
     *
     * @param request - CreateInstanceIpWhitelistRequest
     *
     * @returns CreateInstanceIpWhitelistResponse
     *
     * @param string                           $instanceId
     * @param CreateInstanceIpWhitelistRequest $request
     *
     * @return CreateInstanceIpWhitelistResponse
     */
    public function createInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Create Topic.
     *
     * @param request - CreateTopicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTopicResponse
     *
     * @param string             $instanceId
     * @param string             $topicName
     * @param CreateTopicRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTopicResponse
     */
    public function createTopicWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxSendTps) {
            @$body['maxSendTps'] = $request->maxSendTps;
        }

        if (null !== $request->messageType) {
            @$body['messageType'] = $request->messageType;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTopic',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Topic.
     *
     * @param request - CreateTopicRequest
     *
     * @returns CreateTopicResponse
     *
     * @param string             $instanceId
     * @param string             $topicName
     * @param CreateTopicRequest $request
     *
     * @return CreateTopicResponse
     */
    public function createTopic($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTopicWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified consumer group.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * After you delete a consumer group, the consumer client associated with the consumer group cannot consume messages. Exercise caution when you call this operation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($instanceId, $consumerGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroup',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified consumer group.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * After you delete a consumer group, the consumer client associated with the consumer group cannot consume messages. Exercise caution when you call this operation.
     *
     * @returns DeleteConsumerGroupResponse
     *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * Deletes the subscriptions of a consumer group.
     *
     * @param request - DeleteConsumerGroupSubscriptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConsumerGroupSubscriptionResponse
     *
     * @param string                                 $instanceId
     * @param string                                 $consumerGroupId
     * @param DeleteConsumerGroupSubscriptionRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteConsumerGroupSubscriptionResponse
     */
    public function deleteConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterExpression) {
            @$query['filterExpression'] = $request->filterExpression;
        }

        if (null !== $request->filterType) {
            @$query['filterType'] = $request->filterType;
        }

        if (null !== $request->topicName) {
            @$query['topicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConsumerGroupSubscription',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/subscriptions',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteConsumerGroupSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the subscriptions of a consumer group.
     *
     * @param request - DeleteConsumerGroupSubscriptionRequest
     *
     * @returns DeleteConsumerGroupSubscriptionResponse
     *
     * @param string                                 $instanceId
     * @param string                                 $consumerGroupId
     * @param DeleteConsumerGroupSubscriptionRequest $request
     *
     * @return DeleteConsumerGroupSubscriptionResponse
     */
    public function deleteConsumerGroupSubscription($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * 删除容灾计划条目.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDisasterRecoveryItemResponse
     *
     * @param string         $planId
     * @param string         $itemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDisasterRecoveryItemResponse
     */
    public function deleteDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDisasterRecoveryItem',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除容灾计划条目.
     *
     * @returns DeleteDisasterRecoveryItemResponse
     *
     * @param string $planId
     * @param string $itemId
     *
     * @return DeleteDisasterRecoveryItemResponse
     */
    public function deleteDisasterRecoveryItem($planId, $itemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime);
    }

    /**
     * Deletes a global message backup plan.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDisasterRecoveryPlanResponse
     *
     * @param string         $planId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDisasterRecoveryPlanResponse
     */
    public function deleteDisasterRecoveryPlanWithOptions($planId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDisasterRecoveryPlan',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDisasterRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a global message backup plan.
     *
     * @returns DeleteDisasterRecoveryPlanResponse
     *
     * @param string $planId
     *
     * @return DeleteDisasterRecoveryPlanResponse
     */
    public function deleteDisasterRecoveryPlan($planId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDisasterRecoveryPlanWithOptions($planId, $headers, $runtime);
    }

    /**
     * Deletes a ApsaraMQ for RocketMQ instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * *   After an instance is deleted, the instance cannot be restored. Exercise caution when you call this operation.
     * *   This operation is used to delete a pay-as-you-go instance. A subscription instance is automatically released after it expires. You do not need to manually delete a subscription instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a ApsaraMQ for RocketMQ instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * *   After an instance is deleted, the instance cannot be restored. Exercise caution when you call this operation.
     * *   This operation is used to delete a pay-as-you-go instance. A subscription instance is automatically released after it expires. You do not need to manually delete a subscription instance.
     *
     * @returns DeleteInstanceResponse
     *
     * @param string $instanceId
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Delete access control ACL user.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceAccountResponse
     *
     * @param string         $instanceId
     * @param string         $username
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceAccountResponse
     */
    public function deleteInstanceAccountWithOptions($instanceId, $username, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceAccount',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/accounts/' . Url::percentEncode($username) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete access control ACL user.
     *
     * @returns DeleteInstanceAccountResponse
     *
     * @param string $instanceId
     * @param string $username
     *
     * @return DeleteInstanceAccountResponse
     */
    public function deleteInstanceAccount($instanceId, $username)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceAccountWithOptions($instanceId, $username, $headers, $runtime);
    }

    /**
     * Deletes the permissions of a specific account of an instance.
     *
     * @param request - DeleteInstanceAclRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceAclResponse
     *
     * @param string                   $instanceId
     * @param string                   $username
     * @param DeleteInstanceAclRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteInstanceAclResponse
     */
    public function deleteInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceName) {
            @$query['resourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceAcl',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/acl/account/' . Url::percentEncode($username) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the permissions of a specific account of an instance.
     *
     * @param request - DeleteInstanceAclRequest
     *
     * @returns DeleteInstanceAclResponse
     *
     * @param string                   $instanceId
     * @param string                   $username
     * @param DeleteInstanceAclRequest $request
     *
     * @return DeleteInstanceAclResponse
     */
    public function deleteInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * Deletes a specific IP address whitelist from an instance.
     *
     * @param tmpReq - DeleteInstanceIpWhitelistRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceIpWhitelistResponse
     *
     * @param string                           $instanceId
     * @param DeleteInstanceIpWhitelistRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteInstanceIpWhitelistResponse
     */
    public function deleteInstanceIpWhitelistWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteInstanceIpWhitelistShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ipWhitelists) {
            $request->ipWhitelistsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipWhitelists, 'ipWhitelists', 'simple');
        }

        $query = [];
        if (null !== $request->ipWhitelist) {
            @$query['ipWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->ipWhitelistsShrink) {
            @$query['ipWhitelists'] = $request->ipWhitelistsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceIpWhitelist',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/ip/whitelist',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specific IP address whitelist from an instance.
     *
     * @param request - DeleteInstanceIpWhitelistRequest
     *
     * @returns DeleteInstanceIpWhitelistResponse
     *
     * @param string                           $instanceId
     * @param DeleteInstanceIpWhitelistRequest $request
     *
     * @return DeleteInstanceIpWhitelistResponse
     */
    public function deleteInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified topic.
     *
     * @remarks
     * If you delete the topic, the publishing and subscription relationships that are established based on the topic are cleared. Exercise caution when you call this operation.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTopicResponse
     *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopicWithOptions($instanceId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteTopic',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified topic.
     *
     * @remarks
     * If you delete the topic, the publishing and subscription relationships that are established based on the topic are cleared. Exercise caution when you call this operation.
     *
     * @returns DeleteTopicResponse
     *
     * @param string $instanceId
     * @param string $topicName
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopic($instanceId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTopicWithOptions($instanceId, $topicName, $headers, $runtime);
    }

    /**
     * Queries the details of a specified consumer group.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerGroupResponse
     *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerGroupResponse
     */
    public function getConsumerGroupWithOptions($instanceId, $consumerGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerGroup',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified consumer group.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @returns GetConsumerGroupResponse
     *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return GetConsumerGroupResponse
     */
    public function getConsumerGroup($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * Query Consumer Group Backlog Information.
     *
     * @param request - GetConsumerGroupLagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerGroupLagResponse
     *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param GetConsumerGroupLagRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetConsumerGroupLagResponse
     */
    public function getConsumerGroupLagWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->topicName) {
            @$query['topicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConsumerGroupLag',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/lag',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerGroupLagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Consumer Group Backlog Information.
     *
     * @param request - GetConsumerGroupLagRequest
     *
     * @returns GetConsumerGroupLagResponse
     *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param GetConsumerGroupLagRequest $request
     *
     * @return GetConsumerGroupLagResponse
     */
    public function getConsumerGroupLag($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupLagWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Queries the subscriptions of a consumer group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerGroupSubscriptionResponse
     *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string         $topicName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumerGroupSubscriptionResponse
     */
    public function getConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumerGroupSubscription',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/subscriptions/' . Url::percentEncode($topicName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerGroupSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the subscriptions of a consumer group.
     *
     * @returns GetConsumerGroupSubscriptionResponse
     *
     * @param string $instanceId
     * @param string $consumerGroupId
     * @param string $topicName
     *
     * @return GetConsumerGroupSubscriptionResponse
     */
    public function getConsumerGroupSubscription($instanceId, $consumerGroupId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $topicName, $headers, $runtime);
    }

    /**
     * Queries the stack information about a consumer.
     *
     * @param request - GetConsumerStackRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumerStackResponse
     *
     * @param string                  $instanceId
     * @param string                  $consumerGroupId
     * @param GetConsumerStackRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetConsumerStackResponse
     */
    public function getConsumerStackWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConsumerStack',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/stack',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumerStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the stack information about a consumer.
     *
     * @param request - GetConsumerStackRequest
     *
     * @returns GetConsumerStackResponse
     *
     * @param string                  $instanceId
     * @param string                  $consumerGroupId
     * @param GetConsumerStackRequest $request
     *
     * @return GetConsumerStackResponse
     */
    public function getConsumerStack($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerStackWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * 查询容灾计划条目详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDisasterRecoveryItemResponse
     *
     * @param string         $planId
     * @param string         $itemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDisasterRecoveryItemResponse
     */
    public function getDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDisasterRecoveryItem',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询容灾计划条目详情.
     *
     * @returns GetDisasterRecoveryItemResponse
     *
     * @param string $planId
     * @param string $itemId
     *
     * @return GetDisasterRecoveryItemResponse
     */
    public function getDisasterRecoveryItem($planId, $itemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime);
    }

    /**
     * Queries the details of a Global Replicator task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDisasterRecoveryPlanResponse
     *
     * @param string         $planId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDisasterRecoveryPlanResponse
     */
    public function getDisasterRecoveryPlanWithOptions($planId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDisasterRecoveryPlan',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDisasterRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a Global Replicator task.
     *
     * @returns GetDisasterRecoveryPlanResponse
     *
     * @param string $planId
     *
     * @return GetDisasterRecoveryPlanResponse
     */
    public function getDisasterRecoveryPlan($planId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDisasterRecoveryPlanWithOptions($planId, $headers, $runtime);
    }

    /**
     * Queries the detailed information about an instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about an instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @returns GetInstanceResponse
     *
     * @param string $instanceId
     *
     * @return GetInstanceResponse
     */
    public function getInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Obtains the account used to access a specific instance.
     *
     * @param request - GetInstanceAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceAccountResponse
     *
     * @param string                    $instanceId
     * @param GetInstanceAccountRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceAccountResponse
     */
    public function getInstanceAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->username) {
            @$query['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceAccount',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/account',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the account used to access a specific instance.
     *
     * @param request - GetInstanceAccountRequest
     *
     * @returns GetInstanceAccountResponse
     *
     * @param string                    $instanceId
     * @param GetInstanceAccountRequest $request
     *
     * @return GetInstanceAccountResponse
     */
    public function getInstanceAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries information about the access control list (ACL) of an instance.
     *
     * @param request - GetInstanceAclRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceAclResponse
     *
     * @param string                $instanceId
     * @param string                $username
     * @param GetInstanceAclRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetInstanceAclResponse
     */
    public function getInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceName) {
            @$query['resourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceAcl',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/acl/account/' . Url::percentEncode($username) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the access control list (ACL) of an instance.
     *
     * @param request - GetInstanceAclRequest
     *
     * @returns GetInstanceAclResponse
     *
     * @param string                $instanceId
     * @param string                $username
     * @param GetInstanceAclRequest $request
     *
     * @return GetInstanceAclResponse
     */
    public function getInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * Queries the information about the IP address whitelist of an instance.
     *
     * @param tmpReq - GetInstanceIpWhitelistRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceIpWhitelistResponse
     *
     * @param string                        $instanceId
     * @param GetInstanceIpWhitelistRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstanceIpWhitelistResponse
     */
    public function getInstanceIpWhitelistWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetInstanceIpWhitelistShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ipWhitelists) {
            $request->ipWhitelistsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ipWhitelists, 'ipWhitelists', 'simple');
        }

        $query = [];
        if (null !== $request->ipWhitelistsShrink) {
            @$query['ipWhitelists'] = $request->ipWhitelistsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceIpWhitelist',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/ip/whitelists',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the IP address whitelist of an instance.
     *
     * @param request - GetInstanceIpWhitelistRequest
     *
     * @returns GetInstanceIpWhitelistResponse
     *
     * @param string                        $instanceId
     * @param GetInstanceIpWhitelistRequest $request
     *
     * @return GetInstanceIpWhitelistResponse
     */
    public function getInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Obtains the details of a specific message.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessageDetailResponse
     *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string         $messageId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMessageDetailResponse
     */
    public function getMessageDetailWithOptions($instanceId, $topicName, $messageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMessageDetail',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/messages/' . Url::percentEncode($messageId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMessageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of a specific message.
     *
     * @returns GetMessageDetailResponse
     *
     * @param string $instanceId
     * @param string $topicName
     * @param string $messageId
     *
     * @return GetMessageDetailResponse
     */
    public function getMessageDetail($instanceId, $topicName, $messageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMessageDetailWithOptions($instanceId, $topicName, $messageId, $headers, $runtime);
    }

    /**
     * Query Topic Details.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicResponse
     *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTopicResponse
     */
    public function getTopicWithOptions($instanceId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTopic',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Topic Details.
     *
     * @returns GetTopicResponse
     *
     * @param string $instanceId
     * @param string $topicName
     *
     * @return GetTopicResponse
     */
    public function getTopic($instanceId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTopicWithOptions($instanceId, $topicName, $headers, $runtime);
    }

    /**
     * Queries the trace of a specific message in a specific topic.
     *
     * @param request - GetTraceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTraceResponse
     *
     * @param string          $instanceId
     * @param string          $topicName
     * @param string          $messageId
     * @param GetTraceRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTraceResponse
     */
    public function getTraceWithOptions($instanceId, $topicName, $messageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTrace',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/traces/' . Url::percentEncode($messageId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the trace of a specific message in a specific topic.
     *
     * @param request - GetTraceRequest
     *
     * @returns GetTraceResponse
     *
     * @param string          $instanceId
     * @param string          $topicName
     * @param string          $messageId
     * @param GetTraceRequest $request
     *
     * @return GetTraceResponse
     */
    public function getTrace($instanceId, $topicName, $messageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceWithOptions($instanceId, $topicName, $messageId, $request, $headers, $runtime);
    }

    /**
     * 查询支持的可用区.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableZonesResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAvailableZonesResponse
     */
    public function listAvailableZonesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListAvailableZones',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/zones',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询支持的可用区.
     *
     * @returns ListAvailableZonesResponse
     *
     * @return ListAvailableZonesResponse
     */
    public function listAvailableZones()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableZonesWithOptions($headers, $runtime);
    }

    /**
     * 查询消费者客户端连接信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerConnectionsResponse
     *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConsumerConnectionsResponse
     */
    public function listConsumerConnectionsWithOptions($instanceId, $consumerGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListConsumerConnections',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/connections',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询消费者客户端连接信息.
     *
     * @returns ListConsumerConnectionsResponse
     *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return ListConsumerConnectionsResponse
     */
    public function listConsumerConnections($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerConnectionsWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * Queries the subscriptions of a specific consumer group.
     *
     * @param request - ListConsumerGroupSubscriptionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupSubscriptionsResponse
     *
     * @param string                                $instanceId
     * @param string                                $consumerGroupId
     * @param ListConsumerGroupSubscriptionsRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListConsumerGroupSubscriptionsResponse
     */
    public function listConsumerGroupSubscriptionsWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->topicName) {
            @$query['topicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroupSubscriptions',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/subscriptions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the subscriptions of a specific consumer group.
     *
     * @param request - ListConsumerGroupSubscriptionsRequest
     *
     * @returns ListConsumerGroupSubscriptionsResponse
     *
     * @param string                                $instanceId
     * @param string                                $consumerGroupId
     * @param ListConsumerGroupSubscriptionsRequest $request
     *
     * @return ListConsumerGroupSubscriptionsResponse
     */
    public function listConsumerGroupSubscriptions($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupSubscriptionsWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * List Consumer Groups.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management API used for managing and querying related resources of Alibaba Cloud services. It is recommended to integrate it only in the management chain. Do not rely on OpenAPI implementation in the core data chain for message sending and receiving, as this may lead to risks in the chain.
     *
     * @param request - ListConsumerGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerGroupsResponse
     *
     * @param string                    $instanceId
     * @param ListConsumerGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroupsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConsumerGroups',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListConsumerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Consumer Groups.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management API used for managing and querying related resources of Alibaba Cloud services. It is recommended to integrate it only in the management chain. Do not rely on OpenAPI implementation in the core data chain for message sending and receiving, as this may lead to risks in the chain.
     *
     * @param request - ListConsumerGroupsRequest
     *
     * @returns ListConsumerGroupsResponse
     *
     * @param string                    $instanceId
     * @param ListConsumerGroupsRequest $request
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroups($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Query disaster recovery plan consumption progress information.
     *
     * @param request - ListDisasterRecoveryCheckpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDisasterRecoveryCheckpointsResponse
     *
     * @param string                                 $planId
     * @param string                                 $itemId
     * @param ListDisasterRecoveryCheckpointsRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListDisasterRecoveryCheckpointsResponse
     */
    public function listDisasterRecoveryCheckpointsWithOptions($planId, $itemId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDisasterRecoveryCheckpoints',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '/checkpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDisasterRecoveryCheckpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query disaster recovery plan consumption progress information.
     *
     * @param request - ListDisasterRecoveryCheckpointsRequest
     *
     * @returns ListDisasterRecoveryCheckpointsResponse
     *
     * @param string                                 $planId
     * @param string                                 $itemId
     * @param ListDisasterRecoveryCheckpointsRequest $request
     *
     * @return ListDisasterRecoveryCheckpointsResponse
     */
    public function listDisasterRecoveryCheckpoints($planId, $itemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDisasterRecoveryCheckpointsWithOptions($planId, $itemId, $request, $headers, $runtime);
    }

    /**
     * Queries the Global Replicator tasks of an instance.
     *
     * @param request - ListDisasterRecoveryItemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDisasterRecoveryItemsResponse
     *
     * @param string                           $planId
     * @param ListDisasterRecoveryItemsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDisasterRecoveryItemsResponse
     */
    public function listDisasterRecoveryItemsWithOptions($planId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->topicName) {
            @$query['topicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDisasterRecoveryItems',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDisasterRecoveryItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Global Replicator tasks of an instance.
     *
     * @param request - ListDisasterRecoveryItemsRequest
     *
     * @returns ListDisasterRecoveryItemsResponse
     *
     * @param string                           $planId
     * @param ListDisasterRecoveryItemsRequest $request
     *
     * @return ListDisasterRecoveryItemsResponse
     */
    public function listDisasterRecoveryItems($planId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDisasterRecoveryItemsWithOptions($planId, $request, $headers, $runtime);
    }

    /**
     * Queries Global Replicator tasks.
     *
     * @param request - ListDisasterRecoveryPlansRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDisasterRecoveryPlansResponse
     *
     * @param ListDisasterRecoveryPlansRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDisasterRecoveryPlansResponse
     */
    public function listDisasterRecoveryPlansWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDisasterRecoveryPlans',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDisasterRecoveryPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Global Replicator tasks.
     *
     * @param request - ListDisasterRecoveryPlansRequest
     *
     * @returns ListDisasterRecoveryPlansResponse
     *
     * @param ListDisasterRecoveryPlansRequest $request
     *
     * @return ListDisasterRecoveryPlansResponse
     */
    public function listDisasterRecoveryPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDisasterRecoveryPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the accounts that are used to access a specific instance.
     *
     * @param request - ListInstanceAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceAccountResponse
     *
     * @param string                     $instanceId
     * @param ListInstanceAccountRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstanceAccountResponse
     */
    public function listInstanceAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountStatus) {
            @$query['accountStatus'] = $request->accountStatus;
        }

        if (null !== $request->accountType) {
            @$query['accountType'] = $request->accountType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->username) {
            @$query['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceAccount',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/accounts',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the accounts that are used to access a specific instance.
     *
     * @param request - ListInstanceAccountRequest
     *
     * @returns ListInstanceAccountResponse
     *
     * @param string                     $instanceId
     * @param ListInstanceAccountRequest $request
     *
     * @return ListInstanceAccountResponse
     */
    public function listInstanceAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the access control lists (ACLs) of an instance.
     *
     * @param request - ListInstanceAclRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceAclResponse
     *
     * @param string                 $instanceId
     * @param ListInstanceAclRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListInstanceAclResponse
     */
    public function listInstanceAclWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceAcl',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/acl',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access control lists (ACLs) of an instance.
     *
     * @param request - ListInstanceAclRequest
     *
     * @returns ListInstanceAclResponse
     *
     * @param string                 $instanceId
     * @param ListInstanceAclRequest $request
     *
     * @return ListInstanceAclResponse
     */
    public function listInstanceAcl($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceAclWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the IP address whitelists of an instance.
     *
     * @param request - ListInstanceIpWhitelistRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceIpWhitelistResponse
     *
     * @param string                         $instanceId
     * @param ListInstanceIpWhitelistRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInstanceIpWhitelistResponse
     */
    public function listInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipWhitelist) {
            @$query['ipWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceIpWhitelist',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/ip/whitelist',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP address whitelists of an instance.
     *
     * @param request - ListInstanceIpWhitelistRequest
     *
     * @returns ListInstanceIpWhitelistResponse
     *
     * @param string                         $instanceId
     * @param ListInstanceIpWhitelistRequest $request
     *
     * @return ListInstanceIpWhitelistResponse
     */
    public function listInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries all ApsaraMQ for RocketMQ instances in a specific region.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param tmpReq - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->seriesCodes) {
            $request->seriesCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->seriesCodes, 'seriesCodes', 'simple');
        }

        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->seriesCodesShrink) {
            @$query['seriesCodes'] = $request->seriesCodesShrink;
        }

        if (null !== $request->storageSecretKey) {
            @$query['storageSecretKey'] = $request->storageSecretKey;
        }

        if (null !== $request->tags) {
            @$query['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all ApsaraMQ for RocketMQ instances in a specific region.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of messages.
     *
     * @param request - ListMessagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMessagesResponse
     *
     * @param string              $instanceId
     * @param string              $topicName
     * @param ListMessagesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMessagesResponse
     */
    public function listMessagesWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->messageId) {
            @$query['messageId'] = $request->messageId;
        }

        if (null !== $request->messageKey) {
            @$query['messageKey'] = $request->messageKey;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->scrollId) {
            @$query['scrollId'] = $request->scrollId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMessages',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of messages.
     *
     * @param request - ListMessagesRequest
     *
     * @returns ListMessagesResponse
     *
     * @param string              $instanceId
     * @param string              $topicName
     * @param ListMessagesRequest $request
     *
     * @return ListMessagesResponse
     */
    public function listMessages($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMessagesWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }

    /**
     * Query Monitoring Items List.
     *
     * @param request - ListMetricMetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMetricMetaResponse
     *
     * @param ListMetricMetaRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListMetricMetaResponse
     */
    public function listMetricMetaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMetricMeta',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/monitor/metrics/meta',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMetricMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Monitoring Items List.
     *
     * @param request - ListMetricMetaRequest
     *
     * @returns ListMetricMetaResponse
     *
     * @param ListMetricMetaRequest $request
     *
     * @return ListMetricMetaResponse
     */
    public function listMetricMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMetricMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries regions in which ApsaraMQ for RocketMQ is available.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries regions in which ApsaraMQ for RocketMQ is available.
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($headers, $runtime);
    }

    /**
     * Query visible resource tag relationships.
     *
     * @param request - ListTagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceTag/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query visible resource tag relationships.
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
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the subscriptions of a specific topic.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicSubscriptionsResponse
     *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListTopicSubscriptionsResponse
     */
    public function listTopicSubscriptionsWithOptions($instanceId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListTopicSubscriptions',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/subscriptions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTopicSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the subscriptions of a specific topic.
     *
     * @returns ListTopicSubscriptionsResponse
     *
     * @param string $instanceId
     * @param string $topicName
     *
     * @return ListTopicSubscriptionsResponse
     */
    public function listTopicSubscriptions($instanceId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTopicSubscriptionsWithOptions($instanceId, $topicName, $headers, $runtime);
    }

    /**
     * Query Topic List.
     *
     * @param tmpReq - ListTopicsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicsResponse
     *
     * @param string            $instanceId
     * @param ListTopicsRequest $tmpReq
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTopicsResponse
     */
    public function listTopicsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTopicsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->messageTypes) {
            $request->messageTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->messageTypes, 'messageTypes', 'simple');
        }

        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->messageTypesShrink) {
            @$query['messageTypes'] = $request->messageTypesShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTopics',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Topic List.
     *
     * @param request - ListTopicsRequest
     *
     * @returns ListTopicsResponse
     *
     * @param string            $instanceId
     * @param ListTopicsRequest $request
     *
     * @return ListTopicsResponse
     */
    public function listTopics($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTopicsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the message traces of a specific topic.
     *
     * @param request - ListTracesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTracesResponse
     *
     * @param string            $instanceId
     * @param string            $topicName
     * @param ListTracesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTracesResponse
     */
    public function listTracesWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->messageId) {
            @$query['messageId'] = $request->messageId;
        }

        if (null !== $request->messageKey) {
            @$query['messageKey'] = $request->messageKey;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['queryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTraces',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/traces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the message traces of a specific topic.
     *
     * @param request - ListTracesRequest
     *
     * @returns ListTracesResponse
     *
     * @param string            $instanceId
     * @param string            $topicName
     * @param ListTracesRequest $request
     *
     * @return ListTracesResponse
     */
    public function listTraces($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTracesWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }

    /**
     * Resets the consumer offset of a consumer group.
     *
     * @param request - ResetConsumeOffsetRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetConsumeOffsetResponse
     *
     * @param string                    $instanceId
     * @param string                    $consumerGroupId
     * @param string                    $topicName
     * @param ResetConsumeOffsetRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ResetConsumeOffsetResponse
     */
    public function resetConsumeOffsetWithOptions($instanceId, $consumerGroupId, $topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resetTime) {
            @$body['resetTime'] = $request->resetTime;
        }

        if (null !== $request->resetType) {
            @$body['resetType'] = $request->resetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetConsumeOffset',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/consumeOffsets/' . Url::percentEncode($topicName) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetConsumeOffsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the consumer offset of a consumer group.
     *
     * @param request - ResetConsumeOffsetRequest
     *
     * @returns ResetConsumeOffsetResponse
     *
     * @param string                    $instanceId
     * @param string                    $consumerGroupId
     * @param string                    $topicName
     * @param ResetConsumeOffsetRequest $request
     *
     * @return ResetConsumeOffsetResponse
     */
    public function resetConsumeOffset($instanceId, $consumerGroupId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetConsumeOffsetWithOptions($instanceId, $consumerGroupId, $topicName, $request, $headers, $runtime);
    }

    /**
     * Enable Disaster Recovery Plan Entry.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDisasterRecoveryItemResponse
     *
     * @param string         $planId
     * @param string         $itemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartDisasterRecoveryItemResponse
     */
    public function startDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartDisasterRecoveryItem',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '/start',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable Disaster Recovery Plan Entry.
     *
     * @returns StartDisasterRecoveryItemResponse
     *
     * @param string $planId
     * @param string $itemId
     *
     * @return StartDisasterRecoveryItemResponse
     */
    public function startDisasterRecoveryItem($planId, $itemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime);
    }

    /**
     * Deactivate Disaster Recovery Plan Entry.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDisasterRecoveryItemResponse
     *
     * @param string         $planId
     * @param string         $itemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopDisasterRecoveryItemResponse
     */
    public function stopDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopDisasterRecoveryItem',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deactivate Disaster Recovery Plan Entry.
     *
     * @returns StopDisasterRecoveryItemResponse
     *
     * @param string $planId
     * @param string $itemId
     *
     * @return StopDisasterRecoveryItemResponse
     */
    public function stopDisasterRecoveryItem($planId, $itemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime);
    }

    /**
     * Synchronize Disaster Recovery Plan Consumption Progress.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncDisasterRecoveryCheckpointResponse
     *
     * @param string         $planId
     * @param string         $itemId
     * @param string         $checkpointId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SyncDisasterRecoveryCheckpointResponse
     */
    public function syncDisasterRecoveryCheckpointWithOptions($planId, $itemId, $checkpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'SyncDisasterRecoveryCheckpoint',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '/checkpoints/' . Url::percentEncode($checkpointId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncDisasterRecoveryCheckpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronize Disaster Recovery Plan Consumption Progress.
     *
     * @returns SyncDisasterRecoveryCheckpointResponse
     *
     * @param string $planId
     * @param string $itemId
     * @param string $checkpointId
     *
     * @return SyncDisasterRecoveryCheckpointResponse
     */
    public function syncDisasterRecoveryCheckpoint($planId, $itemId, $checkpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncDisasterRecoveryCheckpointWithOptions($planId, $itemId, $checkpointId, $headers, $runtime);
    }

    /**
     * Creates resource tags.
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
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceTag/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates resource tags.
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
     * Removes tags from resources.
     *
     * @param request - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['all'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['tagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/resourceTag/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from resources.
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
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Update ConsumerGroup.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management API used for managing and querying related resources of Alibaba Cloud services. It is recommended to integrate it only in the management chain. It is strictly prohibited to rely on OpenAPI implementation in the core data chain of message sending and receiving, otherwise it may lead to risks in the chain.
     *
     * @param request - UpdateConsumerGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->consumeRetryPolicy) {
            @$body['consumeRetryPolicy'] = $request->consumeRetryPolicy;
        }

        if (null !== $request->deliveryOrderType) {
            @$body['deliveryOrderType'] = $request->deliveryOrderType;
        }

        if (null !== $request->maxReceiveTps) {
            @$body['maxReceiveTps'] = $request->maxReceiveTps;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConsumerGroup',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update ConsumerGroup.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management API used for managing and querying related resources of Alibaba Cloud services. It is recommended to integrate it only in the management chain. It is strictly prohibited to rely on OpenAPI implementation in the core data chain of message sending and receiving, otherwise it may lead to risks in the chain.
     *
     * @param request - UpdateConsumerGroupRequest
     *
     * @returns UpdateConsumerGroupResponse
     *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Updates a topic mapping in a global message backup plan.
     *
     * @param request - UpdateDisasterRecoveryItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDisasterRecoveryItemResponse
     *
     * @param string                            $planId
     * @param string                            $itemId
     * @param UpdateDisasterRecoveryItemRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDisasterRecoveryItemResponse
     */
    public function updateDisasterRecoveryItemWithOptions($planId, $itemId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->topics) {
            @$body['topics'] = $request->topics;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDisasterRecoveryItem',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '/items/' . Url::percentEncode($itemId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a topic mapping in a global message backup plan.
     *
     * @param request - UpdateDisasterRecoveryItemRequest
     *
     * @returns UpdateDisasterRecoveryItemResponse
     *
     * @param string                            $planId
     * @param string                            $itemId
     * @param UpdateDisasterRecoveryItemRequest $request
     *
     * @return UpdateDisasterRecoveryItemResponse
     */
    public function updateDisasterRecoveryItem($planId, $itemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDisasterRecoveryItemWithOptions($planId, $itemId, $request, $headers, $runtime);
    }

    /**
     * Modifies a global message backup plan.
     *
     * @param request - UpdateDisasterRecoveryPlanRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDisasterRecoveryPlanResponse
     *
     * @param string                            $planId
     * @param UpdateDisasterRecoveryPlanRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDisasterRecoveryPlanResponse
     */
    public function updateDisasterRecoveryPlanWithOptions($planId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoSyncCheckpoint) {
            @$body['autoSyncCheckpoint'] = $request->autoSyncCheckpoint;
        }

        if (null !== $request->instances) {
            @$body['instances'] = $request->instances;
        }

        if (null !== $request->planDesc) {
            @$body['planDesc'] = $request->planDesc;
        }

        if (null !== $request->planName) {
            @$body['planName'] = $request->planName;
        }

        if (null !== $request->planType) {
            @$body['planType'] = $request->planType;
        }

        if (null !== $request->syncCheckpointEnabled) {
            @$body['syncCheckpointEnabled'] = $request->syncCheckpointEnabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDisasterRecoveryPlan',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/disaster_recovery/' . Url::percentEncode($planId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDisasterRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a global message backup plan.
     *
     * @param request - UpdateDisasterRecoveryPlanRequest
     *
     * @returns UpdateDisasterRecoveryPlanResponse
     *
     * @param string                            $planId
     * @param UpdateDisasterRecoveryPlanRequest $request
     *
     * @return UpdateDisasterRecoveryPlanResponse
     */
    public function updateDisasterRecoveryPlan($planId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDisasterRecoveryPlanWithOptions($planId, $request, $headers, $runtime);
    }

    /**
     * Updates the basic information and specifications of an ApsaraMQ for RocketMQ instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aclInfo) {
            @$body['aclInfo'] = $request->aclInfo;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        if (null !== $request->networkInfo) {
            @$body['networkInfo'] = $request->networkInfo;
        }

        if (null !== $request->productInfo) {
            @$body['productInfo'] = $request->productInfo;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the basic information and specifications of an ApsaraMQ for RocketMQ instance.
     *
     * @remarks
     * > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the information about a specific account in a specific instance.
     *
     * @param request - UpdateInstanceAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceAccountResponse
     *
     * @param string                       $instanceId
     * @param string                       $username
     * @param UpdateInstanceAccountRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateInstanceAccountResponse
     */
    public function updateInstanceAccountWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountStatus) {
            @$query['accountStatus'] = $request->accountStatus;
        }

        if (null !== $request->password) {
            @$query['password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceAccount',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/accounts/' . Url::percentEncode($username) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a specific account in a specific instance.
     *
     * @param request - UpdateInstanceAccountRequest
     *
     * @returns UpdateInstanceAccountResponse
     *
     * @param string                       $instanceId
     * @param string                       $username
     * @param UpdateInstanceAccountRequest $request
     *
     * @return UpdateInstanceAccountResponse
     */
    public function updateInstanceAccount($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceAccountWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * Updates the permissions on the resources of a specific instance for a specific user.
     *
     * @param request - UpdateInstanceAclRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceAclResponse
     *
     * @param string                   $instanceId
     * @param string                   $username
     * @param UpdateInstanceAclRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateInstanceAclResponse
     */
    public function updateInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->actions) {
            @$body['actions'] = $request->actions;
        }

        if (null !== $request->decision) {
            @$body['decision'] = $request->decision;
        }

        if (null !== $request->ipWhitelists) {
            @$body['ipWhitelists'] = $request->ipWhitelists;
        }

        if (null !== $request->resourceName) {
            @$body['resourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceAcl',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/acl/account/' . Url::percentEncode($username) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the permissions on the resources of a specific instance for a specific user.
     *
     * @param request - UpdateInstanceAclRequest
     *
     * @returns UpdateInstanceAclResponse
     *
     * @param string                   $instanceId
     * @param string                   $username
     * @param UpdateInstanceAclRequest $request
     *
     * @return UpdateInstanceAclResponse
     */
    public function updateInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * Update Topic.
     *
     * @param request - UpdateTopicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTopicResponse
     *
     * @param string             $instanceId
     * @param string             $topicName
     * @param UpdateTopicRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateTopicResponse
     */
    public function updateTopicWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxSendTps) {
            @$body['maxSendTps'] = $request->maxSendTps;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTopic',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Topic.
     *
     * @param request - UpdateTopicRequest
     *
     * @returns UpdateTopicResponse
     *
     * @param string             $instanceId
     * @param string             $topicName
     * @param UpdateTopicRequest $request
     *
     * @return UpdateTopicResponse
     */
    public function updateTopic($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTopicWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }

    /**
     * Verifies the consumption status of a message in a specific topic on a specific instance.
     *
     * @param request - VerifyConsumeMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyConsumeMessageResponse
     *
     * @param string                      $instanceId
     * @param string                      $topicName
     * @param string                      $messageId
     * @param VerifyConsumeMessageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyConsumeMessageResponse
     */
    public function verifyConsumeMessageWithOptions($instanceId, $topicName, $messageId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['clientId'] = $request->clientId;
        }

        if (null !== $request->consumerGroupId) {
            @$query['consumerGroupId'] = $request->consumerGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyConsumeMessage',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/messages/' . Url::percentEncode($messageId) . '/action/verifyConsume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifyConsumeMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the consumption status of a message in a specific topic on a specific instance.
     *
     * @param request - VerifyConsumeMessageRequest
     *
     * @returns VerifyConsumeMessageResponse
     *
     * @param string                      $instanceId
     * @param string                      $topicName
     * @param string                      $messageId
     * @param VerifyConsumeMessageRequest $request
     *
     * @return VerifyConsumeMessageResponse
     */
    public function verifyConsumeMessage($instanceId, $topicName, $messageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyConsumeMessageWithOptions($instanceId, $topicName, $messageId, $request, $headers, $runtime);
    }

    /**
     * Verifies the message sending feature of a specific topic on a specific instance.
     *
     * @param request - VerifySendMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifySendMessageResponse
     *
     * @param string                   $instanceId
     * @param string                   $topicName
     * @param VerifySendMessageRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return VerifySendMessageResponse
     */
    public function verifySendMessageWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->messageKey) {
            @$body['messageKey'] = $request->messageKey;
        }

        if (null !== $request->messageTag) {
            @$body['messageTag'] = $request->messageTag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VerifySendMessage',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/topics/' . Url::percentEncode($topicName) . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return VerifySendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the message sending feature of a specific topic on a specific instance.
     *
     * @param request - VerifySendMessageRequest
     *
     * @returns VerifySendMessageResponse
     *
     * @param string                   $instanceId
     * @param string                   $topicName
     * @param VerifySendMessageRequest $request
     *
     * @return VerifySendMessageResponse
     */
    public function verifySendMessage($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifySendMessageWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }
}
