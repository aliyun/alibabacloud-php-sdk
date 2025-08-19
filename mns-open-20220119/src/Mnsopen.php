<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\AuthorizeEndpointAclRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\AuthorizeEndpointAclResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\AuthorizeEndpointAclShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateEventRuleRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateEventRuleResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateEventRuleShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteEventRuleRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteEventRuleResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteQueueRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteQueueResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DisableEndpointRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DisableEndpointResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\EnableEndpointRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\EnableEndpointResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEventRuleRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEventRuleResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListEventRulesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListEventRulesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListEventRulesShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListQueueRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListQueueResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListTopicResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\RevokeEndpointAclRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\RevokeEndpointAclResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\RevokeEndpointAclShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetQueueAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetQueueAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetQueueAttributesShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetTopicAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetTopicAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\UnsubscribeRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\UnsubscribeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mnsopen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mns-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * You can call this operation to add one or more rules of access control lists (ACLs) for the endpoint of a type.
     *
     * @param tmpReq - AuthorizeEndpointAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeEndpointAclResponse
     *
     * @param AuthorizeEndpointAclRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return AuthorizeEndpointAclResponse
     */
    public function authorizeEndpointAclWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AuthorizeEndpointAclShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cidrList) {
            $request->cidrListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cidrList, 'CidrList', 'simple');
        }

        $query = [];
        if (null !== $request->aclStrategy) {
            @$query['AclStrategy'] = $request->aclStrategy;
        }

        if (null !== $request->cidrListShrink) {
            @$query['CidrList'] = $request->cidrListShrink;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeEndpointAcl',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeEndpointAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to add one or more rules of access control lists (ACLs) for the endpoint of a type.
     *
     * @param request - AuthorizeEndpointAclRequest
     *
     * @returns AuthorizeEndpointAclResponse
     *
     * @param AuthorizeEndpointAclRequest $request
     *
     * @return AuthorizeEndpointAclResponse
     */
    public function authorizeEndpointAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeEndpointAclWithOptions($request, $runtime);
    }

    /**
     * 创建事件规则.
     *
     * @param tmpReq - CreateEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventRuleResponse
     *
     * @param CreateEventRuleRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return CreateEventRuleResponse
     */
    public function createEventRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEventRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->endpoint) {
            $request->endpointShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->endpoint, 'Endpoint', 'json');
        }

        if (null !== $tmpReq->endpoints) {
            $request->endpointsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->endpoints, 'Endpoints', 'json');
        }

        if (null !== $tmpReq->eventTypes) {
            $request->eventTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventTypes, 'EventTypes', 'json');
        }

        if (null !== $tmpReq->matchRules) {
            $request->matchRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->matchRules, 'MatchRules', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->deliveryMode) {
            @$query['DeliveryMode'] = $request->deliveryMode;
        }

        if (null !== $request->endpointShrink) {
            @$query['Endpoint'] = $request->endpointShrink;
        }

        if (null !== $request->endpointsShrink) {
            @$query['Endpoints'] = $request->endpointsShrink;
        }

        if (null !== $request->eventTypesShrink) {
            @$query['EventTypes'] = $request->eventTypesShrink;
        }

        if (null !== $request->matchRulesShrink) {
            @$query['MatchRules'] = $request->matchRulesShrink;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEventRule',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建事件规则.
     *
     * @param request - CreateEventRuleRequest
     *
     * @returns CreateEventRuleResponse
     *
     * @param CreateEventRuleRequest $request
     *
     * @return CreateEventRuleResponse
     */
    public function createEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a queue.
     *
     * @param tmpReq - CreateQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQueueResponse
     *
     * @param CreateQueueRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQueueResponse
     */
    public function createQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dlqPolicy) {
            $request->dlqPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dlqPolicy, 'DlqPolicy', 'json');
        }

        if (null !== $tmpReq->tenantRateLimitPolicy) {
            $request->tenantRateLimitPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantRateLimitPolicy, 'TenantRateLimitPolicy', 'json');
        }

        $query = [];
        if (null !== $request->delaySeconds) {
            @$query['DelaySeconds'] = $request->delaySeconds;
        }

        if (null !== $request->dlqPolicyShrink) {
            @$query['DlqPolicy'] = $request->dlqPolicyShrink;
        }

        if (null !== $request->enableLogging) {
            @$query['EnableLogging'] = $request->enableLogging;
        }

        if (null !== $request->maximumMessageSize) {
            @$query['MaximumMessageSize'] = $request->maximumMessageSize;
        }

        if (null !== $request->messageRetentionPeriod) {
            @$query['MessageRetentionPeriod'] = $request->messageRetentionPeriod;
        }

        if (null !== $request->pollingWaitSeconds) {
            @$query['PollingWaitSeconds'] = $request->pollingWaitSeconds;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->tenantRateLimitPolicyShrink) {
            @$query['TenantRateLimitPolicy'] = $request->tenantRateLimitPolicyShrink;
        }

        if (null !== $request->visibilityTimeout) {
            @$query['VisibilityTimeout'] = $request->visibilityTimeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateQueue',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a queue.
     *
     * @param request - CreateQueueRequest
     *
     * @returns CreateQueueResponse
     *
     * @param CreateQueueRequest $request
     *
     * @return CreateQueueResponse
     */
    public function createQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueueWithOptions($request, $runtime);
    }

    /**
     * Creates a topic.
     *
     * @param request - CreateTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTopicResponse
     *
     * @param CreateTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTopicResponse
     */
    public function createTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->enableLogging) {
            @$body['EnableLogging'] = $request->enableLogging;
        }

        if (null !== $request->maxMessageSize) {
            @$body['MaxMessageSize'] = $request->maxMessageSize;
        }

        if (null !== $request->topicName) {
            @$body['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTopic',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a topic.
     *
     * @param request - CreateTopicRequest
     *
     * @returns CreateTopicResponse
     *
     * @param CreateTopicRequest $request
     *
     * @return CreateTopicResponse
     */
    public function createTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTopicWithOptions($request, $runtime);
    }

    /**
     * 删除事件规则.
     *
     * @param request - DeleteEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventRuleResponse
     *
     * @param DeleteEventRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteEventRuleResponse
     */
    public function deleteEventRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEventRule',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除事件规则.
     *
     * @param request - DeleteEventRuleRequest
     *
     * @returns DeleteEventRuleResponse
     *
     * @param DeleteEventRuleRequest $request
     *
     * @return DeleteEventRuleResponse
     */
    public function deleteEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a queue.
     *
     * @param request - DeleteQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQueue',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a queue.
     *
     * @param request - DeleteQueueRequest
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $request
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueueWithOptions($request, $runtime);
    }

    /**
     * Deletes a topic.
     *
     * @param request - DeleteTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTopicResponse
     *
     * @param DeleteTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTopic',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a topic.
     *
     * @param request - DeleteTopicRequest
     *
     * @returns DeleteTopicResponse
     *
     * @param DeleteTopicRequest $request
     *
     * @return DeleteTopicResponse
     */
    public function deleteTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTopicWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to disenable the endpoint of a type. After the endpoint is disabled, all requests from the endpoint are blocked and an error is returned.
     *
     * @param request - DisableEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableEndpointResponse
     *
     * @param DisableEndpointRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DisableEndpointResponse
     */
    public function disableEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableEndpoint',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to disenable the endpoint of a type. After the endpoint is disabled, all requests from the endpoint are blocked and an error is returned.
     *
     * @param request - DisableEndpointRequest
     *
     * @returns DisableEndpointResponse
     *
     * @param DisableEndpointRequest $request
     *
     * @return DisableEndpointResponse
     */
    public function disableEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableEndpointWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to enable the endpoint of a type. If the endpoint is enabled, requests from the endpoint that are included in the access control lists (ACLs) are not blocked.
     *
     * @param request - EnableEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableEndpointResponse
     *
     * @param EnableEndpointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return EnableEndpointResponse
     */
    public function enableEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableEndpoint',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to enable the endpoint of a type. If the endpoint is enabled, requests from the endpoint that are included in the access control lists (ACLs) are not blocked.
     *
     * @param request - EnableEndpointRequest
     *
     * @returns EnableEndpointResponse
     *
     * @param EnableEndpointRequest $request
     *
     * @return EnableEndpointResponse
     */
    public function enableEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableEndpointWithOptions($request, $runtime);
    }

    /**
     * GetEndpointAttribute.
     *
     * @param request - GetEndpointAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEndpointAttributeResponse
     *
     * @param GetEndpointAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEndpointAttributeResponse
     */
    public function getEndpointAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEndpointAttribute',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetEndpointAttribute.
     *
     * @param request - GetEndpointAttributeRequest
     *
     * @returns GetEndpointAttributeResponse
     *
     * @param GetEndpointAttributeRequest $request
     *
     * @return GetEndpointAttributeResponse
     */
    public function getEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndpointAttributeWithOptions($request, $runtime);
    }

    /**
     * 获取事件通知规则.
     *
     * @param request - GetEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventRuleResponse
     *
     * @param GetEventRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetEventRuleResponse
     */
    public function getEventRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEventRule',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取事件通知规则.
     *
     * @param request - GetEventRuleRequest
     *
     * @returns GetEventRuleResponse
     *
     * @param GetEventRuleRequest $request
     *
     * @return GetEventRuleResponse
     */
    public function getEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of an existing queue.
     *
     * @param request - GetQueueAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueueAttributesResponse
     *
     * @param GetQueueAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQueueAttributesResponse
     */
    public function getQueueAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueueAttributes',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueueAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of an existing queue.
     *
     * @param request - GetQueueAttributesRequest
     *
     * @returns GetQueueAttributesResponse
     *
     * @param GetQueueAttributesRequest $request
     *
     * @return GetQueueAttributesResponse
     */
    public function getQueueAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueAttributesWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of a subscription.
     *
     * @param request - GetSubscriptionAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscriptionAttributesResponse
     *
     * @param GetSubscriptionAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSubscriptionAttributesResponse
     */
    public function getSubscriptionAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subscriptionName) {
            @$query['SubscriptionName'] = $request->subscriptionName;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSubscriptionAttributes',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSubscriptionAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of a subscription.
     *
     * @param request - GetSubscriptionAttributesRequest
     *
     * @returns GetSubscriptionAttributesResponse
     *
     * @param GetSubscriptionAttributesRequest $request
     *
     * @return GetSubscriptionAttributesResponse
     */
    public function getSubscriptionAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionAttributesWithOptions($request, $runtime);
    }

    /**
     * Queries the attributes of a topic.
     *
     * @param request - GetTopicAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicAttributesResponse
     *
     * @param GetTopicAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTopicAttributesResponse
     */
    public function getTopicAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTopicAttributes',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the attributes of a topic.
     *
     * @param request - GetTopicAttributesRequest
     *
     * @returns GetTopicAttributesResponse
     *
     * @param GetTopicAttributesRequest $request
     *
     * @return GetTopicAttributesResponse
     */
    public function getTopicAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicAttributesWithOptions($request, $runtime);
    }

    /**
     * 查询事件通知列表.
     *
     * @param tmpReq - ListEventRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventRulesResponse
     *
     * @param ListEventRulesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListEventRulesResponse
     */
    public function listEventRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListEventRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->subscription) {
            $request->subscriptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subscription, 'Subscription', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productName) {
            @$query['ProductName'] = $request->productName;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->subscriptionShrink) {
            @$query['Subscription'] = $request->subscriptionShrink;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventRules',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询事件通知列表.
     *
     * @param request - ListEventRulesRequest
     *
     * @returns ListEventRulesResponse
     *
     * @param ListEventRulesRequest $request
     *
     * @return ListEventRulesResponse
     */
    public function listEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventRulesWithOptions($request, $runtime);
    }

    /**
     * Queries all queues that belong to an Alibaba Cloud account. The queues are displayed by page.
     *
     * @param request - ListQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueueResponse
     *
     * @param ListQueueRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListQueueResponse
     */
    public function listQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueue',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all queues that belong to an Alibaba Cloud account. The queues are displayed by page.
     *
     * @param request - ListQueueRequest
     *
     * @returns ListQueueResponse
     *
     * @param ListQueueRequest $request
     *
     * @return ListQueueResponse
     */
    public function listQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueWithOptions($request, $runtime);
    }

    /**
     * Queries all subscriptions to a topic. The subscriptions are displayed by page.
     *
     * @param request - ListSubscriptionByTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubscriptionByTopicResponse
     *
     * @param ListSubscriptionByTopicRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSubscriptionByTopicResponse
     */
    public function listSubscriptionByTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        if (null !== $request->endpointValue) {
            @$query['EndpointValue'] = $request->endpointValue;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->subscriptionName) {
            @$query['SubscriptionName'] = $request->subscriptionName;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubscriptionByTopic',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSubscriptionByTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all subscriptions to a topic. The subscriptions are displayed by page.
     *
     * @param request - ListSubscriptionByTopicRequest
     *
     * @returns ListSubscriptionByTopicResponse
     *
     * @param ListSubscriptionByTopicRequest $request
     *
     * @return ListSubscriptionByTopicResponse
     */
    public function listSubscriptionByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubscriptionByTopicWithOptions($request, $runtime);
    }

    /**
     * Queries the topics that belong to an Alibaba Cloud account. The topics are displayed by page.
     *
     * @param request - ListTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicResponse
     *
     * @param ListTopicRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTopicResponse
     */
    public function listTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTopic',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the topics that belong to an Alibaba Cloud account. The topics are displayed by page.
     *
     * @param request - ListTopicRequest
     *
     * @returns ListTopicResponse
     *
     * @param ListTopicRequest $request
     *
     * @return ListTopicResponse
     */
    public function listTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete one or more rules of access control lists (ACLs) for the endpoint of a type.
     *
     * @param tmpReq - RevokeEndpointAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeEndpointAclResponse
     *
     * @param RevokeEndpointAclRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return RevokeEndpointAclResponse
     */
    public function revokeEndpointAclWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RevokeEndpointAclShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cidrList) {
            $request->cidrListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cidrList, 'CidrList', 'simple');
        }

        $query = [];
        if (null !== $request->aclStrategy) {
            @$query['AclStrategy'] = $request->aclStrategy;
        }

        if (null !== $request->cidrListShrink) {
            @$query['CidrList'] = $request->cidrListShrink;
        }

        if (null !== $request->endpointType) {
            @$query['EndpointType'] = $request->endpointType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeEndpointAcl',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeEndpointAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete one or more rules of access control lists (ACLs) for the endpoint of a type.
     *
     * @param request - RevokeEndpointAclRequest
     *
     * @returns RevokeEndpointAclResponse
     *
     * @param RevokeEndpointAclRequest $request
     *
     * @return RevokeEndpointAclResponse
     */
    public function revokeEndpointAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeEndpointAclWithOptions($request, $runtime);
    }

    /**
     * Modifies a queue.
     *
     * @param tmpReq - SetQueueAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetQueueAttributesResponse
     *
     * @param SetQueueAttributesRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SetQueueAttributesResponse
     */
    public function setQueueAttributesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetQueueAttributesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dlqPolicy) {
            $request->dlqPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dlqPolicy, 'DlqPolicy', 'json');
        }

        if (null !== $tmpReq->tenantRateLimitPolicy) {
            $request->tenantRateLimitPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantRateLimitPolicy, 'TenantRateLimitPolicy', 'json');
        }

        $query = [];
        if (null !== $request->delaySeconds) {
            @$query['DelaySeconds'] = $request->delaySeconds;
        }

        if (null !== $request->dlqPolicyShrink) {
            @$query['DlqPolicy'] = $request->dlqPolicyShrink;
        }

        if (null !== $request->enableLogging) {
            @$query['EnableLogging'] = $request->enableLogging;
        }

        if (null !== $request->maximumMessageSize) {
            @$query['MaximumMessageSize'] = $request->maximumMessageSize;
        }

        if (null !== $request->messageRetentionPeriod) {
            @$query['MessageRetentionPeriod'] = $request->messageRetentionPeriod;
        }

        if (null !== $request->pollingWaitSeconds) {
            @$query['PollingWaitSeconds'] = $request->pollingWaitSeconds;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->tenantRateLimitPolicyShrink) {
            @$query['TenantRateLimitPolicy'] = $request->tenantRateLimitPolicyShrink;
        }

        if (null !== $request->visibilityTimeout) {
            @$query['VisibilityTimeout'] = $request->visibilityTimeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetQueueAttributes',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetQueueAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a queue.
     *
     * @param request - SetQueueAttributesRequest
     *
     * @returns SetQueueAttributesResponse
     *
     * @param SetQueueAttributesRequest $request
     *
     * @return SetQueueAttributesResponse
     */
    public function setQueueAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setQueueAttributesWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a subscription.
     *
     * @param tmpReq - SetSubscriptionAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSubscriptionAttributesResponse
     *
     * @param SetSubscriptionAttributesRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SetSubscriptionAttributesResponse
     */
    public function setSubscriptionAttributesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetSubscriptionAttributesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dlqPolicy) {
            $request->dlqPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dlqPolicy, 'DlqPolicy', 'json');
        }

        if (null !== $tmpReq->tenantRateLimitPolicy) {
            $request->tenantRateLimitPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantRateLimitPolicy, 'TenantRateLimitPolicy', 'json');
        }

        $query = [];
        if (null !== $request->dlqPolicyShrink) {
            @$query['DlqPolicy'] = $request->dlqPolicyShrink;
        }

        if (null !== $request->notifyStrategy) {
            @$query['NotifyStrategy'] = $request->notifyStrategy;
        }

        if (null !== $request->subscriptionName) {
            @$query['SubscriptionName'] = $request->subscriptionName;
        }

        if (null !== $request->tenantRateLimitPolicyShrink) {
            @$query['TenantRateLimitPolicy'] = $request->tenantRateLimitPolicyShrink;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSubscriptionAttributes',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSubscriptionAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a subscription.
     *
     * @param request - SetSubscriptionAttributesRequest
     *
     * @returns SetSubscriptionAttributesResponse
     *
     * @param SetSubscriptionAttributesRequest $request
     *
     * @return SetSubscriptionAttributesResponse
     */
    public function setSubscriptionAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSubscriptionAttributesWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of a topic.
     *
     * @param request - SetTopicAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTopicAttributesResponse
     *
     * @param SetTopicAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetTopicAttributesResponse
     */
    public function setTopicAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableLogging) {
            @$query['EnableLogging'] = $request->enableLogging;
        }

        if (null !== $request->maxMessageSize) {
            @$query['MaxMessageSize'] = $request->maxMessageSize;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetTopicAttributes',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetTopicAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of a topic.
     *
     * @param request - SetTopicAttributesRequest
     *
     * @returns SetTopicAttributesResponse
     *
     * @param SetTopicAttributesRequest $request
     *
     * @return SetTopicAttributesResponse
     */
    public function setTopicAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTopicAttributesWithOptions($request, $runtime);
    }

    /**
     * Creates a subscription to a topic.
     *
     * @param tmpReq - SubscribeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribeResponse
     *
     * @param SubscribeRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return SubscribeResponse
     */
    public function subscribeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubscribeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dlqPolicy) {
            $request->dlqPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dlqPolicy, 'DlqPolicy', 'json');
        }

        if (null !== $tmpReq->dmAttributes) {
            $request->dmAttributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dmAttributes, 'DmAttributes', 'json');
        }

        if (null !== $tmpReq->dysmsAttributes) {
            $request->dysmsAttributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dysmsAttributes, 'DysmsAttributes', 'json');
        }

        if (null !== $tmpReq->kafkaAttributes) {
            $request->kafkaAttributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kafkaAttributes, 'KafkaAttributes', 'json');
        }

        if (null !== $tmpReq->tenantRateLimitPolicy) {
            $request->tenantRateLimitPolicyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantRateLimitPolicy, 'TenantRateLimitPolicy', 'json');
        }

        $query = [];
        if (null !== $request->dlqPolicyShrink) {
            @$query['DlqPolicy'] = $request->dlqPolicyShrink;
        }

        if (null !== $request->dmAttributesShrink) {
            @$query['DmAttributes'] = $request->dmAttributesShrink;
        }

        if (null !== $request->dysmsAttributesShrink) {
            @$query['DysmsAttributes'] = $request->dysmsAttributesShrink;
        }

        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->kafkaAttributesShrink) {
            @$query['KafkaAttributes'] = $request->kafkaAttributesShrink;
        }

        if (null !== $request->messageTag) {
            @$query['MessageTag'] = $request->messageTag;
        }

        if (null !== $request->notifyContentFormat) {
            @$query['NotifyContentFormat'] = $request->notifyContentFormat;
        }

        if (null !== $request->notifyStrategy) {
            @$query['NotifyStrategy'] = $request->notifyStrategy;
        }

        if (null !== $request->pushType) {
            @$query['PushType'] = $request->pushType;
        }

        if (null !== $request->stsRoleArn) {
            @$query['StsRoleArn'] = $request->stsRoleArn;
        }

        if (null !== $request->subscriptionName) {
            @$query['SubscriptionName'] = $request->subscriptionName;
        }

        if (null !== $request->tenantRateLimitPolicyShrink) {
            @$query['TenantRateLimitPolicy'] = $request->tenantRateLimitPolicyShrink;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Subscribe',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a subscription to a topic.
     *
     * @param request - SubscribeRequest
     *
     * @returns SubscribeResponse
     *
     * @param SubscribeRequest $request
     *
     * @return SubscribeResponse
     */
    public function subscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscribeWithOptions($request, $runtime);
    }

    /**
     * Deletes a subscription.
     *
     * @param request - UnsubscribeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnsubscribeResponse
     *
     * @param UnsubscribeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnsubscribeResponse
     */
    public function unsubscribeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subscriptionName) {
            @$query['SubscriptionName'] = $request->subscriptionName;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Unsubscribe',
            'version' => '2022-01-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnsubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a subscription.
     *
     * @param request - UnsubscribeRequest
     *
     * @returns UnsubscribeResponse
     *
     * @param UnsubscribeRequest $request
     *
     * @return UnsubscribeResponse
     */
    public function unsubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unsubscribeWithOptions($request, $runtime);
    }
}
