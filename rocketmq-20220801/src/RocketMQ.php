<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateAgentConversationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateAgentConversationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateDisasterRecoveryPlanRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateTopicRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteAgentConversationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteAgentConversationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupSubscriptionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupSubscriptionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceInspectionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceInspectionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ExecuteMigrationOperationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ExecuteMigrationOperationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\FinishMigrationStageRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\FinishMigrationStageResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetAgentConversationEventsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetAgentConversationEventsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetAgentConversationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetAgentConversationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetAgentConversationTimelineRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetAgentConversationTimelineResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumeTimespanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionReportRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionReportResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionRunRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionRunResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceIpWhitelistShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetMessageDetailResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAgentConversationsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAgentConversationsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsRequest;
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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionRunsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceInspectionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMessagesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMessagesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMetricMetaRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMetricMetaResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponse;
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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\RespondAgentConversationActionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\RespondAgentConversationActionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\RunInstanceInspectionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\RunInstanceInspectionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\SendAgentConversationMessageRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\SendAgentConversationMessageResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\StartDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\SteerAgentConversationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\SteerAgentConversationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\StopAgentConversationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\StopAgentConversationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\StopDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\SyncDisasterRecoveryCheckpointResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateAgentConversationRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateAgentConversationResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateAgentConversationShareScopeRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateAgentConversationShareScopeResponse;
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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateTopicRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UploadAgentConversationLogRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UploadAgentConversationLogResponse;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-guangzhou' => 'rocketmq.cn-guangzhou.aliyuncs.com	',
        ];
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
     * Adds a backup mapping task.
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
     * Adds a backup mapping task.
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
     * Modifies the resource group of an instance.
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
     * Modifies the resource group of an instance.
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
     * 创建 Agent 诊断会话.
     *
     * @param request - CreateAgentConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentConversationResponse
     *
     * @param CreateAgentConversationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAgentConversationResponse
     */
    public function createAgentConversationWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->initialMessage) {
            @$body['initialMessage'] = $request->initialMessage;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentConversation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAgentConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 Agent 诊断会话.
     *
     * @param request - CreateAgentConversationRequest
     *
     * @returns CreateAgentConversationResponse
     *
     * @param CreateAgentConversationRequest $request
     *
     * @return CreateAgentConversationResponse
     */
    public function createAgentConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAgentConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a consumer group (ConsumerGroup) for ApsaraMQ for RocketMQ. A consumer group is a load balancing group in ApsaraMQ for RocketMQ that contains multiple consumers with consistent consumption behavior. Consumers must subscribe to related topics by specifying a consumer group to implement message subscription.
     *
     * @remarks
     * >Notice: The OpenAPI operations provided by Alibaba Cloud are management APIs used to manage and query Alibaba Cloud service resources. Use these operations only in the management link. Do not use them in the core data link for sending and receiving messages, as this may introduce risks to the link.
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

        if (null !== $request->exclusive) {
            @$body['exclusive'] = $request->exclusive;
        }

        if (null !== $request->maxReceiveTps) {
            @$body['maxReceiveTps'] = $request->maxReceiveTps;
        }

        if (null !== $request->messageModel) {
            @$body['messageModel'] = $request->messageModel;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->topicName) {
            @$body['topicName'] = $request->topicName;
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
     * Creates a consumer group (ConsumerGroup) for ApsaraMQ for RocketMQ. A consumer group is a load balancing group in ApsaraMQ for RocketMQ that contains multiple consumers with consistent consumption behavior. Consumers must subscribe to related topics by specifying a consumer group to implement message subscription.
     *
     * @remarks
     * >Notice: The OpenAPI operations provided by Alibaba Cloud are management APIs used to manage and query Alibaba Cloud service resources. Use these operations only in the management link. Do not use them in the core data link for sending and receiving messages, as this may introduce risks to the link.
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
     * Creates a backup plan.
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
     * Creates a backup plan.
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
     * Creates an ApsaraMQ for RocketMQ 5.x series instance.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query resources of Alibaba Cloud services. Integrate it only into the management and control link. Do not rely on OpenAPI in the core data link for message sending and receiving. Otherwise, risks may occur on the link.
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
        if (null !== $request->aclInfo) {
            @$body['aclInfo'] = $request->aclInfo;
        }

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
     * Creates an ApsaraMQ for RocketMQ 5.x series instance.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query resources of Alibaba Cloud services. Integrate it only into the management and control link. Do not rely on OpenAPI in the core data link for message sending and receiving. Otherwise, risks may occur on the link.
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
     * Creates an access account for an instance.
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

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
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
     * Creates an access account for an instance.
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
     * Creates access permissions for a specified instance.
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
     * Creates access permissions for a specified instance.
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
     * 创建实例巡检配置.
     *
     * @param request - CreateInstanceInspectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceInspectionResponse
     *
     * @param string                          $instanceId
     * @param CreateInstanceInspectionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstanceInspectionResponse
     */
    public function createInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->items) {
            @$body['items'] = $request->items;
        }

        if (null !== $request->resourceScope) {
            @$body['resourceScope'] = $request->resourceScope;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceInspection',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例巡检配置.
     *
     * @param request - CreateInstanceInspectionRequest
     *
     * @returns CreateInstanceInspectionResponse
     *
     * @param string                          $instanceId
     * @param CreateInstanceInspectionRequest $request
     *
     * @return CreateInstanceInspectionResponse
     */
    public function createInstanceInspection($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates an IP address whitelist for access control.
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
     * Creates an IP address whitelist for access control.
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
     * Creates a topic for ApsaraMQ for RocketMQ. A topic is the top-level container for message transmission and storage in ApsaraMQ for RocketMQ and is used to identify messages of the same business logic. In the messaging model, producers send messages to topics, and consumers consume messages by subscribing to specified topics.
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
        if (null !== $request->liteTopicExpiration) {
            @$body['liteTopicExpiration'] = $request->liteTopicExpiration;
        }

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
     * Creates a topic for ApsaraMQ for RocketMQ. A topic is the top-level container for message transmission and storage in ApsaraMQ for RocketMQ and is used to identify messages of the same business logic. In the messaging model, producers send messages to topics, and consumers consume messages by subscribing to specified topics.
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
     * 删除 Agent 诊断会话.
     *
     * @param request - DeleteAgentConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentConversationResponse
     *
     * @param string                         $conversationId
     * @param DeleteAgentConversationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAgentConversationResponse
     */
    public function deleteAgentConversationWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteAgentConversation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAgentConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除 Agent 诊断会话.
     *
     * @param request - DeleteAgentConversationRequest
     *
     * @returns DeleteAgentConversationResponse
     *
     * @param string                         $conversationId
     * @param DeleteAgentConversationRequest $request
     *
     * @return DeleteAgentConversationResponse
     */
    public function deleteAgentConversation($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAgentConversationWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified consumer group.
     *
     * @remarks
     * >Notice: OpenAPI operations provided by Alibaba Cloud are management API operations used to manage and query resources of Alibaba Cloud services. Integrate these operations only into management workflows. Do not rely on OpenAPI operations in the core data link for message sending and receiving. Otherwise, risks may occur in the workflows.
     * After you delete a specified consumer group, consumer clients with the identity of the consumer group cannot consume messages. Invoke this operation with caution.
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
     * >Notice: OpenAPI operations provided by Alibaba Cloud are management API operations used to manage and query resources of Alibaba Cloud services. Integrate these operations only into management workflows. Do not rely on OpenAPI operations in the core data link for message sending and receiving. Otherwise, risks may occur in the workflows.
     * After you delete a specified consumer group, consumer clients with the identity of the consumer group cannot consume messages. Invoke this operation with caution.
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
     * Deletes the subscription of a consumer group.
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
     * Deletes the subscription of a consumer group.
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
     * Deletes a backup mapping task.
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
     * Deletes a backup mapping task.
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
     * Deletes a backup plan.
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
     * Deletes a backup plan.
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
     * Releases an instance.
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
     * Releases an instance.
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
     * Deletes the access account information for a specified instance.
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
     * Deletes the access account information for a specified instance.
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
     * Deletes the permissions of a specified account for a specified resource in a specified instance.
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
     * Deletes the permissions of a specified account for a specified resource in a specified instance.
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
     * 关闭实例巡检配置.
     *
     * @param request - DeleteInstanceInspectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceInspectionResponse
     *
     * @param string                          $instanceId
     * @param DeleteInstanceInspectionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteInstanceInspectionResponse
     */
    public function deleteInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceInspection',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭实例巡检配置.
     *
     * @param request - DeleteInstanceInspectionRequest
     *
     * @returns DeleteInstanceInspectionResponse
     *
     * @param string                          $instanceId
     * @param DeleteInstanceInspectionRequest $request
     *
     * @return DeleteInstanceInspectionResponse
     */
    public function deleteInstanceInspection($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a specified global IP whitelist under a specified instance.
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
     * Deletes a specified global IP whitelist under a specified instance.
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
     * Deleting a topic clears all publish-subscribe relationships under the topic. Call this operation with caution.
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
     * Deleting a topic clears all publish-subscribe relationships under the topic. Call this operation with caution.
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
     * Performs a specified operation on a specified migration task.
     *
     * @param request - ExecuteMigrationOperationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteMigrationOperationResponse
     *
     * @param string                           $migrationId
     * @param string                           $stageType
     * @param string                           $operationId
     * @param ExecuteMigrationOperationRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ExecuteMigrationOperationResponse
     */
    public function executeMigrationOperationWithOptions($migrationId, $stageType, $operationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        $body = [];
        if (null !== $request->operationParam) {
            @$body['operationParam'] = $request->operationParam;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteMigrationOperation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/migrations/' . Url::percentEncode($migrationId) . '/stages/' . Url::percentEncode($stageType) . '/operations/' . Url::percentEncode($operationId) . '/execute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteMigrationOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a specified operation on a specified migration task.
     *
     * @param request - ExecuteMigrationOperationRequest
     *
     * @returns ExecuteMigrationOperationResponse
     *
     * @param string                           $migrationId
     * @param string                           $stageType
     * @param string                           $operationId
     * @param ExecuteMigrationOperationRequest $request
     *
     * @return ExecuteMigrationOperationResponse
     */
    public function executeMigrationOperation($migrationId, $stageType, $operationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeMigrationOperationWithOptions($migrationId, $stageType, $operationId, $request, $headers, $runtime);
    }

    /**
     * Completes the current migration stage for a specified migration task.
     *
     * @param request - FinishMigrationStageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FinishMigrationStageResponse
     *
     * @param string                      $migrationId
     * @param string                      $stageType
     * @param FinishMigrationStageRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return FinishMigrationStageResponse
     */
    public function finishMigrationStageWithOptions($migrationId, $stageType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FinishMigrationStage',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/migrations/' . Url::percentEncode($migrationId) . '/stages/' . Url::percentEncode($stageType) . '/finish',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FinishMigrationStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Completes the current migration stage for a specified migration task.
     *
     * @param request - FinishMigrationStageRequest
     *
     * @returns FinishMigrationStageResponse
     *
     * @param string                      $migrationId
     * @param string                      $stageType
     * @param FinishMigrationStageRequest $request
     *
     * @return FinishMigrationStageResponse
     */
    public function finishMigrationStage($migrationId, $stageType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishMigrationStageWithOptions($migrationId, $stageType, $request, $headers, $runtime);
    }

    /**
     * 查询 Agent 诊断会话详情.
     *
     * @param request - GetAgentConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentConversationResponse
     *
     * @param string                      $conversationId
     * @param GetAgentConversationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetAgentConversationResponse
     */
    public function getAgentConversationWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetAgentConversation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Agent 诊断会话详情.
     *
     * @param request - GetAgentConversationRequest
     *
     * @returns GetAgentConversationResponse
     *
     * @param string                      $conversationId
     * @param GetAgentConversationRequest $request
     *
     * @return GetAgentConversationResponse
     */
    public function getAgentConversation($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentConversationWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * 订阅 Agent 诊断会话事件.
     *
     * @param request - GetAgentConversationEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentConversationEventsResponse
     *
     * @param string                            $conversationId
     * @param GetAgentConversationEventsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAgentConversationEventsResponse
     */
    public function getAgentConversationEventsWithSSE($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->after) {
            @$query['after'] = $request->after;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentConversationEvents',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield GetAgentConversationEventsResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * 订阅 Agent 诊断会话事件.
     *
     * @param request - GetAgentConversationEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentConversationEventsResponse
     *
     * @param string                            $conversationId
     * @param GetAgentConversationEventsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAgentConversationEventsResponse
     */
    public function getAgentConversationEventsWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->after) {
            @$query['after'] = $request->after;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentConversationEvents',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return GetAgentConversationEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 订阅 Agent 诊断会话事件.
     *
     * @param request - GetAgentConversationEventsRequest
     *
     * @returns GetAgentConversationEventsResponse
     *
     * @param string                            $conversationId
     * @param GetAgentConversationEventsRequest $request
     *
     * @return GetAgentConversationEventsResponse
     */
    public function getAgentConversationEvents($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentConversationEventsWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * 查询 Agent 诊断会话时间线
     *
     * @param request - GetAgentConversationTimelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentConversationTimelineResponse
     *
     * @param string                              $conversationId
     * @param GetAgentConversationTimelineRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAgentConversationTimelineResponse
     */
    public function getAgentConversationTimelineWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->after) {
            @$query['after'] = $request->after;
        }

        if (null !== $request->includeImageData) {
            @$query['includeImageData'] = $request->includeImageData;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentConversationTimeline',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/timeline',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAgentConversationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Agent 诊断会话时间线
     *
     * @param request - GetAgentConversationTimelineRequest
     *
     * @returns GetAgentConversationTimelineResponse
     *
     * @param string                              $conversationId
     * @param GetAgentConversationTimelineRequest $request
     *
     * @return GetAgentConversationTimelineResponse
     */
    public function getAgentConversationTimeline($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAgentConversationTimelineWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * Queries the time range in which a consumer offset can be reset for a topic.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumeTimespanResponse
     *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string         $topicName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetConsumeTimespanResponse
     */
    public function getConsumeTimespanWithOptions($instanceId, $consumerGroupId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetConsumeTimespan',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/instances/' . Url::percentEncode($instanceId) . '/consumerGroups/' . Url::percentEncode($consumerGroupId) . '/consumeTimespan/' . Url::percentEncode($topicName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetConsumeTimespanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the time range in which a consumer offset can be reset for a topic.
     *
     * @returns GetConsumeTimespanResponse
     *
     * @param string $instanceId
     * @param string $consumerGroupId
     * @param string $topicName
     *
     * @return GetConsumeTimespanResponse
     */
    public function getConsumeTimespan($instanceId, $consumerGroupId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumeTimespanWithOptions($instanceId, $consumerGroupId, $topicName, $headers, $runtime);
    }

    /**
     * Retrieves the details of a specified consumer group.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query related resources of Alibaba Cloud services. It is recommended only for integration in management and control data links. Using OpenAPI in the core data link for message sending and receiving is strictly prohibited. Otherwise, risks may occur in the data link.
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
     * Retrieves the details of a specified consumer group.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query related resources of Alibaba Cloud services. It is recommended only for integration in management and control data links. Using OpenAPI in the core data link for message sending and receiving is strictly prohibited. Otherwise, risks may occur in the data link.
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
     * Queries the message accumulation of a consumer group.
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
        if (null !== $request->liteTopicName) {
            @$query['liteTopicName'] = $request->liteTopicName;
        }

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
     * Queries the message accumulation of a consumer group.
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
     * Queries the details of a backup plan mapping.
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
     * Queries the details of a backup plan mapping.
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
     * Queries the details of a backup plan.
     *
     * @remarks
     * Before querying, make sure you have created a Global Replicator backup plan. Before using Global Replicator, your account must have the AliyunServiceRoleForRMQDisasterRecovery service-linked role. This role is used to grant authorization for ApsaraMQ for RocketMQ to access the EventBridge event bus. The system typically creates this role automatically the first time you use the associated feature. If automatic creation failed, create the role manually.
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
     * Queries the details of a backup plan.
     *
     * @remarks
     * Before querying, make sure you have created a Global Replicator backup plan. Before using Global Replicator, your account must have the AliyunServiceRoleForRMQDisasterRecovery service-linked role. This role is used to grant authorization for ApsaraMQ for RocketMQ to access the EventBridge event bus. The system typically creates this role automatically the first time you use the associated feature. If automatic creation failed, create the role manually.
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
     * Retrieves the details of a specified instance.
     *
     * @remarks
     * >Notice: The OpenAPI operations provided by Alibaba Cloud are management APIs used to manage and query Alibaba Cloud service resources. Use them only in management and control workflows. Do not rely on OpenAPI in core data link workflows for message sending and receiving, as this may introduce risks to the data link.</notice>
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
     * Retrieves the details of a specified instance.
     *
     * @remarks
     * >Notice: The OpenAPI operations provided by Alibaba Cloud are management APIs used to manage and query Alibaba Cloud service resources. Use them only in management and control workflows. Do not rely on OpenAPI in core data link workflows for message sending and receiving, as this may introduce risks to the data link.</notice>
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
     * Retrieves the account details for a specified instance.
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
     * Retrieves the account details for a specified instance.
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
     * 查询实例巡检配置.
     *
     * @param request - GetInstanceInspectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceInspectionResponse
     *
     * @param string                       $instanceId
     * @param GetInstanceInspectionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetInstanceInspectionResponse
     */
    public function getInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceInspection',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例巡检配置.
     *
     * @param request - GetInstanceInspectionRequest
     *
     * @returns GetInstanceInspectionResponse
     *
     * @param string                       $instanceId
     * @param GetInstanceInspectionRequest $request
     *
     * @return GetInstanceInspectionResponse
     */
    public function getInstanceInspection($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 查询实例风险诊断报告.
     *
     * @param request - GetInstanceInspectionReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceInspectionReportResponse
     *
     * @param string                             $reportId
     * @param GetInstanceInspectionReportRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return GetInstanceInspectionReportResponse
     */
    public function getInstanceInspectionReportWithOptions($reportId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstanceInspectionReport',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/reports/' . Url::percentEncode($reportId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceInspectionReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例风险诊断报告.
     *
     * @param request - GetInstanceInspectionReportRequest
     *
     * @returns GetInstanceInspectionReportResponse
     *
     * @param string                             $reportId
     * @param GetInstanceInspectionReportRequest $request
     *
     * @return GetInstanceInspectionReportResponse
     */
    public function getInstanceInspectionReport($reportId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceInspectionReportWithOptions($reportId, $request, $headers, $runtime);
    }

    /**
     * 查询实例巡检结果.
     *
     * @param request - GetInstanceInspectionRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceInspectionRunResponse
     *
     * @param string                          $instanceId
     * @param string                          $runId
     * @param GetInstanceInspectionRunRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetInstanceInspectionRunResponse
     */
    public function getInstanceInspectionRunWithOptions($instanceId, $runId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceInspectionRun',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '/runs/' . Url::percentEncode($runId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceInspectionRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例巡检结果.
     *
     * @param request - GetInstanceInspectionRunRequest
     *
     * @returns GetInstanceInspectionRunResponse
     *
     * @param string                          $instanceId
     * @param string                          $runId
     * @param GetInstanceInspectionRunRequest $request
     *
     * @return GetInstanceInspectionRunResponse
     */
    public function getInstanceInspectionRun($instanceId, $runId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceInspectionRunWithOptions($instanceId, $runId, $request, $headers, $runtime);
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
     * Retrieves the details of a specified message.
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
     * Retrieves the details of a specified message.
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
     * Retrieves the details of a specified topic.
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
     * Retrieves the details of a specified topic.
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
     * Retrieves the message trace for a specified message in a specified topic.
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
     * Retrieves the message trace for a specified message in a specified topic.
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
     * 查询 Agent 诊断会话列表.
     *
     * @param request - ListAgentConversationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentConversationsResponse
     *
     * @param ListAgentConversationsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListAgentConversationsResponse
     */
    public function listAgentConversationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->purpose) {
            @$query['purpose'] = $request->purpose;
        }

        if (null !== $request->q) {
            @$query['q'] = $request->q;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentConversations',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAgentConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 Agent 诊断会话列表.
     *
     * @param request - ListAgentConversationsRequest
     *
     * @returns ListAgentConversationsResponse
     *
     * @param ListAgentConversationsRequest $request
     *
     * @return ListAgentConversationsResponse
     */
    public function listAgentConversations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAgentConversationsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries supported zones.
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
     * Queries supported zones.
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
     * Retrieves the connection information for clients in a specified consumer group.
     *
     * @param request - ListConsumerConnectionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConsumerConnectionsResponse
     *
     * @param string                         $instanceId
     * @param string                         $consumerGroupId
     * @param ListConsumerConnectionsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListConsumerConnectionsResponse
     */
    public function listConsumerConnectionsWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->liteTopicName) {
            @$query['liteTopicName'] = $request->liteTopicName;
        }

        if (null !== $request->topicName) {
            @$query['topicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * Retrieves the connection information for clients in a specified consumer group.
     *
     * @param request - ListConsumerConnectionsRequest
     *
     * @returns ListConsumerConnectionsResponse
     *
     * @param string                         $instanceId
     * @param string                         $consumerGroupId
     * @param ListConsumerConnectionsRequest $request
     *
     * @return ListConsumerConnectionsResponse
     */
    public function listConsumerConnections($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerConnectionsWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * Lists the subscription relationships for a consumer group.
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
     * Lists the subscription relationships for a consumer group.
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
     * Queries the list of consumer groups under a specified instance.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query related resources of Alibaba Cloud services. It is recommended only for integration in management and control links. Using OpenAPI in the core data link for message sending and receiving is strictly prohibited. Otherwise, risks may occur in the link.
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
     * Queries the list of consumer groups under a specified instance.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query related resources of Alibaba Cloud services. It is recommended only for integration in management and control links. Using OpenAPI in the core data link for message sending and receiving is strictly prohibited. Otherwise, risks may occur in the link.
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
     * Queries the list of consumer offset synchronization checkpoints.
     *
     * @remarks
     * Before you call this operation, create a Global Replicator backup plan and add topic mapping items to the plan. Then use the corresponding planId, itemId, and source instance ID to query consumer offset synchronization checkpoints. To use Global Replicator, make sure that your account has the AliyunServiceRoleForRMQDisasterRecovery service-linked role. The system typically performs automatic creation of this role when you first use the associated feature.
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
     * Queries the list of consumer offset synchronization checkpoints.
     *
     * @remarks
     * Before you call this operation, create a Global Replicator backup plan and add topic mapping items to the plan. Then use the corresponding planId, itemId, and source instance ID to query consumer offset synchronization checkpoints. To use Global Replicator, make sure that your account has the AliyunServiceRoleForRMQDisasterRecovery service-linked role. The system typically performs automatic creation of this role when you first use the associated feature.
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
     * Queries the list of backup mapping tasks.
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
     * Queries the list of backup mapping tasks.
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
     * Queries a list of backup plans.
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
     * Queries a list of backup plans.
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
     * 查询巡检模板列表.
     *
     * @param request - ListInspectionTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInspectionTemplatesResponse
     *
     * @param ListInspectionTemplatesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInspectionTemplatesResponse
     */
    public function listInspectionTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInspectionTemplates',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInspectionTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询巡检模板列表.
     *
     * @param request - ListInspectionTemplatesRequest
     *
     * @returns ListInspectionTemplatesResponse
     *
     * @param ListInspectionTemplatesRequest $request
     *
     * @return ListInspectionTemplatesResponse
     */
    public function listInspectionTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInspectionTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the access accounts for a specified instance.
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
     * Retrieves the access accounts for a specified instance.
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
     * 查询巡检项关联资源.
     *
     * @param request - ListInstanceInspectionResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceInspectionResourcesResponse
     *
     * @param string                                 $instanceId
     * @param ListInstanceInspectionResourcesRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return ListInstanceInspectionResourcesResponse
     */
    public function listInstanceInspectionResourcesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->runId) {
            @$query['runId'] = $request->runId;
        }

        if (null !== $request->templateCode) {
            @$query['templateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceInspectionResources',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceInspectionResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询巡检项关联资源.
     *
     * @param request - ListInstanceInspectionResourcesRequest
     *
     * @returns ListInstanceInspectionResourcesResponse
     *
     * @param string                                 $instanceId
     * @param ListInstanceInspectionResourcesRequest $request
     *
     * @return ListInstanceInspectionResourcesResponse
     */
    public function listInstanceInspectionResources($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceInspectionResourcesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 查询实例巡检历史.
     *
     * @param request - ListInstanceInspectionRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceInspectionRunsResponse
     *
     * @param string                            $instanceId
     * @param ListInstanceInspectionRunsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListInstanceInspectionRunsResponse
     */
    public function listInstanceInspectionRunsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->reportStatus) {
            @$query['reportStatus'] = $request->reportStatus;
        }

        if (null !== $request->result) {
            @$query['result'] = $request->result;
        }

        if (null !== $request->sortBy) {
            @$query['sortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->templateCode) {
            @$query['templateCode'] = $request->templateCode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceInspectionRuns',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '/runs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceInspectionRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例巡检历史.
     *
     * @param request - ListInstanceInspectionRunsRequest
     *
     * @returns ListInstanceInspectionRunsResponse
     *
     * @param string                            $instanceId
     * @param ListInstanceInspectionRunsRequest $request
     *
     * @return ListInstanceInspectionRunsResponse
     */
    public function listInstanceInspectionRuns($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceInspectionRunsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 分页查询已配置的实例诊断；仅返回配置摘要
     *
     * @param request - ListInstanceInspectionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceInspectionsResponse
     *
     * @param ListInstanceInspectionsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListInstanceInspectionsResponse
     */
    public function listInstanceInspectionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceInspections',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceInspectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询已配置的实例诊断；仅返回配置摘要
     *
     * @param request - ListInstanceInspectionsRequest
     *
     * @returns ListInstanceInspectionsResponse
     *
     * @param ListInstanceInspectionsRequest $request
     *
     * @return ListInstanceInspectionsResponse
     */
    public function listInstanceInspections($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceInspectionsWithOptions($request, $headers, $runtime);
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
     * Queries the list of all ApsaraMQ for RocketMQ instances in a specified region.
     *
     * @remarks
     * >Notice: The OpenAPI operations provided by Alibaba Cloud are management API operations that are used to manage and query resources of Alibaba Cloud services. Integrate OpenAPI operations only into the management data link. Do not use OpenAPI operations in the core data link for sending and receiving messages. Otherwise, risks may occur on the data link.
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
     * Queries the list of all ApsaraMQ for RocketMQ instances in a specified region.
     *
     * @remarks
     * >Notice: The OpenAPI operations provided by Alibaba Cloud are management API operations that are used to manage and query resources of Alibaba Cloud services. Integrate OpenAPI operations only into the management data link. Do not use OpenAPI operations in the core data link for sending and receiving messages. Otherwise, risks may occur on the data link.
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
     * Queries a list of messages.
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

        if (null !== $request->liteTopicName) {
            @$query['liteTopicName'] = $request->liteTopicName;
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
     * Queries a list of messages.
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
     * Queries the list of migration operations.
     *
     * @param tmpReq - ListMigrationOperationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMigrationOperationsResponse
     *
     * @param string                         $migrationId
     * @param string                         $stageType
     * @param ListMigrationOperationsRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListMigrationOperationsResponse
     */
    public function listMigrationOperationsWithOptions($migrationId, $stageType, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMigrationOperationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->businessStatus) {
            $request->businessStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->businessStatus, 'businessStatus', 'simple');
        }

        if (null !== $tmpReq->operationStatus) {
            $request->operationStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->operationStatus, 'operationStatus', 'simple');
        }

        $query = [];
        if (null !== $request->businessStatusShrink) {
            @$query['businessStatus'] = $request->businessStatusShrink;
        }

        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->operationStatusShrink) {
            @$query['operationStatus'] = $request->operationStatusShrink;
        }

        if (null !== $request->operationType) {
            @$query['operationType'] = $request->operationType;
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
            'action' => 'ListMigrationOperations',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/migrations/' . Url::percentEncode($migrationId) . '/stages/' . Url::percentEncode($stageType) . '/operations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMigrationOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of migration operations.
     *
     * @param request - ListMigrationOperationsRequest
     *
     * @returns ListMigrationOperationsResponse
     *
     * @param string                         $migrationId
     * @param string                         $stageType
     * @param ListMigrationOperationsRequest $request
     *
     * @return ListMigrationOperationsResponse
     */
    public function listMigrationOperations($migrationId, $stageType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMigrationOperationsWithOptions($migrationId, $stageType, $request, $headers, $runtime);
    }

    /**
     * Queries the list of migration tasks.
     *
     * @param request - ListMigrationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMigrationsResponse
     *
     * @param ListMigrationsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListMigrationsResponse
     */
    public function listMigrationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->migrationType) {
            @$query['migrationType'] = $request->migrationType;
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

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMigrations',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/migrations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMigrationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of migration tasks.
     *
     * @param request - ListMigrationsRequest
     *
     * @returns ListMigrationsResponse
     *
     * @param ListMigrationsRequest $request
     *
     * @return ListMigrationsResponse
     */
    public function listMigrations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMigrationsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of regions.
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
     * Queries the list of regions.
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
     * Queries the tags that are added to resources.
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
     * Queries the tags that are added to resources.
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
     * Queries the list of topics in a specified instance.
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
     * Queries the list of topics in a specified instance.
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
     * Queries the list of message traces under a specified topic.
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

        if (null !== $request->liteTopicName) {
            @$query['liteTopicName'] = $request->liteTopicName;
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
     * Queries the list of message traces under a specified topic.
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
     * Resets the consumer offset of a consumer group. If you reset a consumer offset, the offset from which a consumer starts to consume messages is changed. If faults occur or wrong messages are consumed during message consumption, you can reset the consumer offset to roll back the consumption to a specific offset for reconsumption. You can also reset the consumer offset to the latest offset and temporarily leave the accumulated messages unhandled.
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
     * Resets the consumer offset of a consumer group. If you reset a consumer offset, the offset from which a consumer starts to consume messages is changed. If faults occur or wrong messages are consumed during message consumption, you can reset the consumer offset to roll back the consumption to a specific offset for reconsumption. You can also reset the consumer offset to the latest offset and temporarily leave the accumulated messages unhandled.
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
     * 响应 Agent 诊断交互.
     *
     * @param request - RespondAgentConversationActionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RespondAgentConversationActionResponse
     *
     * @param string                                $conversationId
     * @param string                                $actionId
     * @param RespondAgentConversationActionRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return RespondAgentConversationActionResponse
     */
    public function respondAgentConversationActionWithOptions($conversationId, $actionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->answers) {
            @$body['answers'] = $request->answers;
        }

        if (null !== $request->decision) {
            @$body['decision'] = $request->decision;
        }

        if (null !== $request->note) {
            @$body['note'] = $request->note;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RespondAgentConversationAction',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/actions/' . Url::percentEncode($actionId) . '/respond',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RespondAgentConversationActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 响应 Agent 诊断交互.
     *
     * @param request - RespondAgentConversationActionRequest
     *
     * @returns RespondAgentConversationActionResponse
     *
     * @param string                                $conversationId
     * @param string                                $actionId
     * @param RespondAgentConversationActionRequest $request
     *
     * @return RespondAgentConversationActionResponse
     */
    public function respondAgentConversationAction($conversationId, $actionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->respondAgentConversationActionWithOptions($conversationId, $actionId, $request, $headers, $runtime);
    }

    /**
     * 立即执行实例巡检
     *
     * @param request - RunInstanceInspectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunInstanceInspectionResponse
     *
     * @param string                       $instanceId
     * @param RunInstanceInspectionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RunInstanceInspectionResponse
     */
    public function runInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->itemOverrides) {
            @$body['itemOverrides'] = $request->itemOverrides;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RunInstanceInspection',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '/runs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RunInstanceInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 立即执行实例巡检
     *
     * @param request - RunInstanceInspectionRequest
     *
     * @returns RunInstanceInspectionResponse
     *
     * @param string                       $instanceId
     * @param RunInstanceInspectionRequest $request
     *
     * @return RunInstanceInspectionResponse
     */
    public function runInstanceInspection($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 发送 Agent 诊断消息.
     *
     * @param request - SendAgentConversationMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendAgentConversationMessageResponse
     *
     * @param string                              $conversationId
     * @param SendAgentConversationMessageRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return SendAgentConversationMessageResponse
     */
    public function sendAgentConversationMessageWithSSE($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachments) {
            @$body['attachments'] = $request->attachments;
        }

        if (null !== $request->clientContext) {
            @$body['clientContext'] = $request->clientContext;
        }

        if (null !== $request->images) {
            @$body['images'] = $request->images;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->messageType) {
            @$body['messageType'] = $request->messageType;
        }

        if (null !== $request->ticketRequestId) {
            @$body['ticketRequestId'] = $request->ticketRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendAgentConversationMessage',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield SendAgentConversationMessageResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * 发送 Agent 诊断消息.
     *
     * @param request - SendAgentConversationMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendAgentConversationMessageResponse
     *
     * @param string                              $conversationId
     * @param SendAgentConversationMessageRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return SendAgentConversationMessageResponse
     */
    public function sendAgentConversationMessageWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attachments) {
            @$body['attachments'] = $request->attachments;
        }

        if (null !== $request->clientContext) {
            @$body['clientContext'] = $request->clientContext;
        }

        if (null !== $request->images) {
            @$body['images'] = $request->images;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->messageType) {
            @$body['messageType'] = $request->messageType;
        }

        if (null !== $request->ticketRequestId) {
            @$body['ticketRequestId'] = $request->ticketRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendAgentConversationMessage',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/messages',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return SendAgentConversationMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送 Agent 诊断消息.
     *
     * @param request - SendAgentConversationMessageRequest
     *
     * @returns SendAgentConversationMessageResponse
     *
     * @param string                              $conversationId
     * @param SendAgentConversationMessageRequest $request
     *
     * @return SendAgentConversationMessageResponse
     */
    public function sendAgentConversationMessage($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendAgentConversationMessageWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * Starts a topic mapping of a Global Replicator task.
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
     * Starts a topic mapping of a Global Replicator task.
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
     * 引导 Agent 诊断会话执行.
     *
     * @param request - SteerAgentConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SteerAgentConversationResponse
     *
     * @param string                        $conversationId
     * @param SteerAgentConversationRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SteerAgentConversationResponse
     */
    public function steerAgentConversationWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commandId) {
            @$body['commandId'] = $request->commandId;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SteerAgentConversation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/actions/steer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SteerAgentConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 引导 Agent 诊断会话执行.
     *
     * @param request - SteerAgentConversationRequest
     *
     * @returns SteerAgentConversationResponse
     *
     * @param string                        $conversationId
     * @param SteerAgentConversationRequest $request
     *
     * @return SteerAgentConversationResponse
     */
    public function steerAgentConversation($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->steerAgentConversationWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * 停止 Agent 诊断会话执行.
     *
     * @param request - StopAgentConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAgentConversationResponse
     *
     * @param string                       $conversationId
     * @param StopAgentConversationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return StopAgentConversationResponse
     */
    public function stopAgentConversationWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopAgentConversation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/actions/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopAgentConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止 Agent 诊断会话执行.
     *
     * @param request - StopAgentConversationRequest
     *
     * @returns StopAgentConversationResponse
     *
     * @param string                       $conversationId
     * @param StopAgentConversationRequest $request
     *
     * @return StopAgentConversationResponse
     */
    public function stopAgentConversation($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopAgentConversationWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * Stops a topic mapping of a Global Replicator task.
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
     * Stops a topic mapping of a Global Replicator task.
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
     * 重命名 Agent 诊断会话.
     *
     * @param request - UpdateAgentConversationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentConversationResponse
     *
     * @param string                         $conversationId
     * @param UpdateAgentConversationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAgentConversationResponse
     */
    public function updateAgentConversationWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentConversation',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAgentConversationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重命名 Agent 诊断会话.
     *
     * @param request - UpdateAgentConversationRequest
     *
     * @returns UpdateAgentConversationResponse
     *
     * @param string                         $conversationId
     * @param UpdateAgentConversationRequest $request
     *
     * @return UpdateAgentConversationResponse
     */
    public function updateAgentConversation($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentConversationWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * 更新 Agent 诊断会话分享范围.
     *
     * @param request - UpdateAgentConversationShareScopeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentConversationShareScopeResponse
     *
     * @param string                                   $conversationId
     * @param UpdateAgentConversationShareScopeRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateAgentConversationShareScopeResponse
     */
    public function updateAgentConversationShareScopeWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->shareScope) {
            @$body['shareScope'] = $request->shareScope;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgentConversationShareScope',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/share-scope',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAgentConversationShareScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新 Agent 诊断会话分享范围.
     *
     * @param request - UpdateAgentConversationShareScopeRequest
     *
     * @returns UpdateAgentConversationShareScopeResponse
     *
     * @param string                                   $conversationId
     * @param UpdateAgentConversationShareScopeRequest $request
     *
     * @return UpdateAgentConversationShareScopeResponse
     */
    public function updateAgentConversationShareScope($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAgentConversationShareScopeWithOptions($conversationId, $request, $headers, $runtime);
    }

    /**
     * Updates the basic information and consumption retry policy of a consumer group.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query resources of Alibaba Cloud services. It is recommended only for integration in management and control links. Do not use OpenAPI in the core data link for sending and receiving messages. Otherwise, risks may occur on the data link.
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
     * Updates the basic information and consumption retry policy of a consumer group.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query resources of Alibaba Cloud services. It is recommended only for integration in management and control links. Do not use OpenAPI in the core data link for sending and receiving messages. Otherwise, risks may occur on the data link.
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
     * Updates the basic information and specification configurations of an ApsaraMQ for RocketMQ instance.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query resources of Alibaba Cloud services. It is recommended only for integration in management and control paths. Do not use OpenAPI in the core data link for sending and receiving messages. Otherwise, risks may occur on the link.
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
     * Updates the basic information and specification configurations of an ApsaraMQ for RocketMQ instance.
     *
     * @remarks
     * >Notice: The OpenAPI provided by Alibaba Cloud is a management and control API used to manage and query resources of Alibaba Cloud services. It is recommended only for integration in management and control paths. Do not use OpenAPI in the core data link for sending and receiving messages. Otherwise, risks may occur on the link.
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
     * Updates the information of a specified account under a specified instance.
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

        if (null !== $request->remark) {
            @$query['remark'] = $request->remark;
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
     * Updates the information of a specified account under a specified instance.
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
     * 修改实例巡检配置.
     *
     * @param request - UpdateInstanceInspectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceInspectionResponse
     *
     * @param string                          $instanceId
     * @param UpdateInstanceInspectionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateInstanceInspectionResponse
     */
    public function updateInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clientToken) {
            @$body['clientToken'] = $request->clientToken;
        }

        if (null !== $request->items) {
            @$body['items'] = $request->items;
        }

        if (null !== $request->resourceScope) {
            @$body['resourceScope'] = $request->resourceScope;
        }

        if (null !== $request->revision) {
            @$body['revision'] = $request->revision;
        }

        if (null !== $request->schedule) {
            @$body['schedule'] = $request->schedule;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceInspection',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/monitoring/instance-inspections/' . Url::percentEncode($instanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例巡检配置.
     *
     * @param request - UpdateInstanceInspectionRequest
     *
     * @returns UpdateInstanceInspectionResponse
     *
     * @param string                          $instanceId
     * @param UpdateInstanceInspectionRequest $request
     *
     * @return UpdateInstanceInspectionResponse
     */
    public function updateInstanceInspection($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceInspectionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the remarks for a topic.
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
        if (null !== $request->liteTopicExpiration) {
            @$body['liteTopicExpiration'] = $request->liteTopicExpiration;
        }

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
     * Updates the remarks for a topic.
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
     * 上传 Agent 会话客户端日志.
     *
     * @param request - UploadAgentConversationLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadAgentConversationLogResponse
     *
     * @param string                            $conversationId
     * @param UploadAgentConversationLogRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UploadAgentConversationLogResponse
     */
    public function uploadAgentConversationLogWithOptions($conversationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->contentGzipB64) {
            @$body['contentGzipB64'] = $request->contentGzipB64;
        }

        if (null !== $request->fileName) {
            @$body['fileName'] = $request->fileName;
        }

        if (null !== $request->timeRangeEnd) {
            @$body['timeRangeEnd'] = $request->timeRangeEnd;
        }

        if (null !== $request->timeRangeStart) {
            @$body['timeRangeStart'] = $request->timeRangeStart;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadAgentConversationLog',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/conversations/' . Url::percentEncode($conversationId) . '/logs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UploadAgentConversationLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传 Agent 会话客户端日志.
     *
     * @param request - UploadAgentConversationLogRequest
     *
     * @returns UploadAgentConversationLogResponse
     *
     * @param string                            $conversationId
     * @param UploadAgentConversationLogRequest $request
     *
     * @return UploadAgentConversationLogResponse
     */
    public function uploadAgentConversationLog($conversationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadAgentConversationLogWithOptions($conversationId, $request, $headers, $runtime);
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
     * Tests whether messages can be sent to a specified topic in an instance.
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
        if (null !== $request->deliveryTimeStamp) {
            @$body['deliveryTimeStamp'] = $request->deliveryTimeStamp;
        }

        if (null !== $request->liteTopicName) {
            @$body['liteTopicName'] = $request->liteTopicName;
        }

        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->messageGroup) {
            @$body['messageGroup'] = $request->messageGroup;
        }

        if (null !== $request->messageKey) {
            @$body['messageKey'] = $request->messageKey;
        }

        if (null !== $request->messageTag) {
            @$body['messageTag'] = $request->messageTag;
        }

        if (null !== $request->userProperties) {
            @$body['userProperties'] = $request->userProperties;
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
     * Tests whether messages can be sent to a specified topic in an instance.
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
