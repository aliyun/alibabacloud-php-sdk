<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateTopicResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteQueueRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteQueueResponse;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteTopicRequest;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\DeleteTopicResponse;
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
     * @param CreateQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQueueResponse
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
     * @param CreateTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTopicResponse
     */
    public function createTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
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
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
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
     * @param DeleteTopicRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTopicResponse
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
     * @param GetQueueAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQueueAttributesResponse
     */
    public function getQueueAttributesWithOptions($request, $runtime)
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
     * @param GetSubscriptionAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSubscriptionAttributesResponse
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
     * @param GetTopicAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetTopicAttributesResponse
     */
    public function getTopicAttributesWithOptions($request, $runtime)
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
     * @param ListQueueRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListQueueResponse
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
     * @param ListSubscriptionByTopicRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSubscriptionByTopicResponse
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
     * @param ListTopicRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTopicResponse
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
     * @param SetQueueAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetQueueAttributesResponse
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
     * @param SetSubscriptionAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetSubscriptionAttributesResponse
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
     * @param SetTopicAttributesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetTopicAttributesResponse
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
     * @param SubscribeRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SubscribeResponse
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
     * @param UnsubscribeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnsubscribeResponse
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
