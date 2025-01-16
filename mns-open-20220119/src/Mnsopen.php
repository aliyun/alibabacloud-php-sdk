<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\AuthorizeEndpointAclRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\AuthorizeEndpointAclResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\AuthorizeEndpointAclShrinkRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicResponse;
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
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetQueueAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetSubscriptionAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetTopicAttributesResponse;
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
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetSubscriptionAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetTopicAttributesRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SetTopicAttributesResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\SubscribeResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\UnsubscribeRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\UnsubscribeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds one or more ACLrules for an endpoint of a specified type.
     *  *
     * @param AuthorizeEndpointAclRequest $tmpReq  AuthorizeEndpointAclRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeEndpointAclResponse AuthorizeEndpointAclResponse
     */
    public function authorizeEndpointAclWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AuthorizeEndpointAclShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cidrList)) {
            $request->cidrListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cidrList, 'CidrList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->aclStrategy)) {
            $query['AclStrategy'] = $request->aclStrategy;
        }
        if (!Utils::isUnset($request->cidrListShrink)) {
            $query['CidrList'] = $request->cidrListShrink;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeEndpointAcl',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeEndpointAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds one or more ACLrules for an endpoint of a specified type.
     *  *
     * @param AuthorizeEndpointAclRequest $request AuthorizeEndpointAclRequest
     *
     * @return AuthorizeEndpointAclResponse AuthorizeEndpointAclResponse
     */
    public function authorizeEndpointAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeEndpointAclWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a queue.
     *  *
     * @param CreateQueueRequest $request CreateQueueRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQueueResponse CreateQueueResponse
     */
    public function createQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delaySeconds)) {
            $query['DelaySeconds'] = $request->delaySeconds;
        }
        if (!Utils::isUnset($request->enableLogging)) {
            $query['EnableLogging'] = $request->enableLogging;
        }
        if (!Utils::isUnset($request->maximumMessageSize)) {
            $query['MaximumMessageSize'] = $request->maximumMessageSize;
        }
        if (!Utils::isUnset($request->messageRetentionPeriod)) {
            $query['MessageRetentionPeriod'] = $request->messageRetentionPeriod;
        }
        if (!Utils::isUnset($request->pollingWaitSeconds)) {
            $query['PollingWaitSeconds'] = $request->pollingWaitSeconds;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->visibilityTimeout)) {
            $query['VisibilityTimeout'] = $request->visibilityTimeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateQueue',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a queue.
     *  *
     * @param CreateQueueRequest $request CreateQueueRequest
     *
     * @return CreateQueueResponse CreateQueueResponse
     */
    public function createQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueueWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a topic.
     *  *
     * @param CreateTopicRequest $request CreateTopicRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTopicResponse CreateTopicResponse
     */
    public function createTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->enableLogging)) {
            $body['EnableLogging'] = $request->enableLogging;
        }
        if (!Utils::isUnset($request->maxMessageSize)) {
            $body['MaxMessageSize'] = $request->maxMessageSize;
        }
        if (!Utils::isUnset($request->topicName)) {
            $body['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTopic',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a topic.
     *  *
     * @param CreateTopicRequest $request CreateTopicRequest
     *
     * @return CreateTopicResponse CreateTopicResponse
     */
    public function createTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTopicWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a queue.
     *  *
     * @param DeleteQueueRequest $request DeleteQueueRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQueueResponse DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQueue',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a queue.
     *  *
     * @param DeleteQueueRequest $request DeleteQueueRequest
     *
     * @return DeleteQueueResponse DeleteQueueResponse
     */
    public function deleteQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueueWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a topic.
     *  *
     * @param DeleteTopicRequest $request DeleteTopicRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTopicResponse DeleteTopicResponse
     */
    public function deleteTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTopic',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a topic.
     *  *
     * @param DeleteTopicRequest $request DeleteTopicRequest
     *
     * @return DeleteTopicResponse DeleteTopicResponse
     */
    public function deleteTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTopicWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to disable an endpoint of a specified type. After the endpoint is disabled, requests from the endpoint are blocked and an error is returned.
     *  *
     * @param DisableEndpointRequest $request DisableEndpointRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableEndpointResponse DisableEndpointResponse
     */
    public function disableEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableEndpoint',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to disable an endpoint of a specified type. After the endpoint is disabled, requests from the endpoint are blocked and an error is returned.
     *  *
     * @param DisableEndpointRequest $request DisableEndpointRequest
     *
     * @return DisableEndpointResponse DisableEndpointResponse
     */
    public function disableEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary You can call this operation to enable an endpoint of a specified type. If the endpoint is enabled, requests from the endpoint that are included in the access control lists (ACLs) are not blocked.
     *  *
     * @param EnableEndpointRequest $request EnableEndpointRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableEndpointResponse EnableEndpointResponse
     */
    public function enableEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableEndpoint',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to enable an endpoint of a specified type. If the endpoint is enabled, requests from the endpoint that are included in the access control lists (ACLs) are not blocked.
     *  *
     * @param EnableEndpointRequest $request EnableEndpointRequest
     *
     * @return EnableEndpointResponse EnableEndpointResponse
     */
    public function enableEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary GetEndpointAttribute
     *  *
     * @param GetEndpointAttributeRequest $request GetEndpointAttributeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEndpointAttributeResponse GetEndpointAttributeResponse
     */
    public function getEndpointAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEndpointAttribute',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEndpointAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetEndpointAttribute
     *  *
     * @param GetEndpointAttributeRequest $request GetEndpointAttributeRequest
     *
     * @return GetEndpointAttributeResponse GetEndpointAttributeResponse
     */
    public function getEndpointAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndpointAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attributes of an existing queue.
     *  *
     * @param GetQueueAttributesRequest $request GetQueueAttributesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueueAttributesResponse GetQueueAttributesResponse
     */
    public function getQueueAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueueAttributes',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueueAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attributes of an existing queue.
     *  *
     * @param GetQueueAttributesRequest $request GetQueueAttributesRequest
     *
     * @return GetQueueAttributesResponse GetQueueAttributesResponse
     */
    public function getQueueAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attributes of a subscription.
     *  *
     * @param GetSubscriptionAttributesRequest $request GetSubscriptionAttributesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSubscriptionAttributesResponse GetSubscriptionAttributesResponse
     */
    public function getSubscriptionAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subscriptionName)) {
            $query['SubscriptionName'] = $request->subscriptionName;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubscriptionAttributes',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubscriptionAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attributes of a subscription.
     *  *
     * @param GetSubscriptionAttributesRequest $request GetSubscriptionAttributesRequest
     *
     * @return GetSubscriptionAttributesResponse GetSubscriptionAttributesResponse
     */
    public function getSubscriptionAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the attributes of a topic.
     *  *
     * @param GetTopicAttributesRequest $request GetTopicAttributesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTopicAttributesResponse GetTopicAttributesResponse
     */
    public function getTopicAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTopicAttributes',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTopicAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the attributes of a topic.
     *  *
     * @param GetTopicAttributesRequest $request GetTopicAttributesRequest
     *
     * @return GetTopicAttributesResponse GetTopicAttributesResponse
     */
    public function getTopicAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all queues that belong to an Alibaba Cloud account. The queues are displayed by page.
     *  *
     * @param ListQueueRequest $request ListQueueRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQueueResponse ListQueueResponse
     */
    public function listQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueue',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all queues that belong to an Alibaba Cloud account. The queues are displayed by page.
     *  *
     * @param ListQueueRequest $request ListQueueRequest
     *
     * @return ListQueueResponse ListQueueResponse
     */
    public function listQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all subscriptions to a topic. The subscriptions are displayed by page.
     *  *
     * @param ListSubscriptionByTopicRequest $request ListSubscriptionByTopicRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSubscriptionByTopicResponse ListSubscriptionByTopicResponse
     */
    public function listSubscriptionByTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subscriptionName)) {
            $query['SubscriptionName'] = $request->subscriptionName;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubscriptionByTopic',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubscriptionByTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries all subscriptions to a topic. The subscriptions are displayed by page.
     *  *
     * @param ListSubscriptionByTopicRequest $request ListSubscriptionByTopicRequest
     *
     * @return ListSubscriptionByTopicResponse ListSubscriptionByTopicResponse
     */
    public function listSubscriptionByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubscriptionByTopicWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the topics that belong to an Alibaba Cloud account. The topics are displayed by page.
     *  *
     * @param ListTopicRequest $request ListTopicRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTopicResponse ListTopicResponse
     */
    public function listTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTopic',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the topics that belong to an Alibaba Cloud account. The topics are displayed by page.
     *  *
     * @param ListTopicRequest $request ListTopicRequest
     *
     * @return ListTopicResponse ListTopicResponse
     */
    public function listTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more ACLs from an endpoint of a specified type.
     *  *
     * @param RevokeEndpointAclRequest $tmpReq  RevokeEndpointAclRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeEndpointAclResponse RevokeEndpointAclResponse
     */
    public function revokeEndpointAclWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RevokeEndpointAclShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cidrList)) {
            $request->cidrListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cidrList, 'CidrList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->aclStrategy)) {
            $query['AclStrategy'] = $request->aclStrategy;
        }
        if (!Utils::isUnset($request->cidrListShrink)) {
            $query['CidrList'] = $request->cidrListShrink;
        }
        if (!Utils::isUnset($request->endpointType)) {
            $query['EndpointType'] = $request->endpointType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeEndpointAcl',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeEndpointAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more ACLs from an endpoint of a specified type.
     *  *
     * @param RevokeEndpointAclRequest $request RevokeEndpointAclRequest
     *
     * @return RevokeEndpointAclResponse RevokeEndpointAclResponse
     */
    public function revokeEndpointAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeEndpointAclWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a queue.
     *  *
     * @param SetQueueAttributesRequest $request SetQueueAttributesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetQueueAttributesResponse SetQueueAttributesResponse
     */
    public function setQueueAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->delaySeconds)) {
            $query['DelaySeconds'] = $request->delaySeconds;
        }
        if (!Utils::isUnset($request->enableLogging)) {
            $query['EnableLogging'] = $request->enableLogging;
        }
        if (!Utils::isUnset($request->maximumMessageSize)) {
            $query['MaximumMessageSize'] = $request->maximumMessageSize;
        }
        if (!Utils::isUnset($request->messageRetentionPeriod)) {
            $query['MessageRetentionPeriod'] = $request->messageRetentionPeriod;
        }
        if (!Utils::isUnset($request->pollingWaitSeconds)) {
            $query['PollingWaitSeconds'] = $request->pollingWaitSeconds;
        }
        if (!Utils::isUnset($request->queueName)) {
            $query['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->visibilityTimeout)) {
            $query['VisibilityTimeout'] = $request->visibilityTimeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetQueueAttributes',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetQueueAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a queue.
     *  *
     * @param SetQueueAttributesRequest $request SetQueueAttributesRequest
     *
     * @return SetQueueAttributesResponse SetQueueAttributesResponse
     */
    public function setQueueAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setQueueAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of a subscription.
     *  *
     * @param SetSubscriptionAttributesRequest $request SetSubscriptionAttributesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetSubscriptionAttributesResponse SetSubscriptionAttributesResponse
     */
    public function setSubscriptionAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->notifyStrategy)) {
            $query['NotifyStrategy'] = $request->notifyStrategy;
        }
        if (!Utils::isUnset($request->subscriptionName)) {
            $query['SubscriptionName'] = $request->subscriptionName;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSubscriptionAttributes',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSubscriptionAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the attributes of a subscription.
     *  *
     * @param SetSubscriptionAttributesRequest $request SetSubscriptionAttributesRequest
     *
     * @return SetSubscriptionAttributesResponse SetSubscriptionAttributesResponse
     */
    public function setSubscriptionAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSubscriptionAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the attributes of a topic.
     *  *
     * @param SetTopicAttributesRequest $request SetTopicAttributesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetTopicAttributesResponse SetTopicAttributesResponse
     */
    public function setTopicAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableLogging)) {
            $query['EnableLogging'] = $request->enableLogging;
        }
        if (!Utils::isUnset($request->maxMessageSize)) {
            $query['MaxMessageSize'] = $request->maxMessageSize;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTopicAttributes',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTopicAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the attributes of a topic.
     *  *
     * @param SetTopicAttributesRequest $request SetTopicAttributesRequest
     *
     * @return SetTopicAttributesResponse SetTopicAttributesResponse
     */
    public function setTopicAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTopicAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a subscription to a topic.
     *  *
     * @param SubscribeRequest $request SubscribeRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubscribeResponse SubscribeResponse
     */
    public function subscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->messageTag)) {
            $query['MessageTag'] = $request->messageTag;
        }
        if (!Utils::isUnset($request->notifyContentFormat)) {
            $query['NotifyContentFormat'] = $request->notifyContentFormat;
        }
        if (!Utils::isUnset($request->notifyStrategy)) {
            $query['NotifyStrategy'] = $request->notifyStrategy;
        }
        if (!Utils::isUnset($request->pushType)) {
            $query['PushType'] = $request->pushType;
        }
        if (!Utils::isUnset($request->subscriptionName)) {
            $query['SubscriptionName'] = $request->subscriptionName;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Subscribe',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a subscription to a topic.
     *  *
     * @param SubscribeRequest $request SubscribeRequest
     *
     * @return SubscribeResponse SubscribeResponse
     */
    public function subscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscribeWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a subscription.
     *  *
     * @param UnsubscribeRequest $request UnsubscribeRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UnsubscribeResponse UnsubscribeResponse
     */
    public function unsubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subscriptionName)) {
            $query['SubscriptionName'] = $request->subscriptionName;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['TopicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Unsubscribe',
            'version'     => '2022-01-19',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnsubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a subscription.
     *  *
     * @param UnsubscribeRequest $request UnsubscribeRequest
     *
     * @return UnsubscribeResponse UnsubscribeResponse
     */
    public function unsubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unsubscribeWithOptions($request, $runtime);
    }
}
