<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateTopicRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateTopicRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateTopicResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consumeRetryPolicy)) {
            $body['consumeRetryPolicy'] = $request->consumeRetryPolicy;
        }
        if (!Utils::isUnset($request->deliveryOrderType)) {
            $body['deliveryOrderType'] = $request->deliveryOrderType;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $body['autoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $body['autoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->networkInfo)) {
            $body['networkInfo'] = $request->networkInfo;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['paymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['periodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productInfo)) {
            $body['productInfo'] = $request->productInfo;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->seriesCode)) {
            $body['seriesCode'] = $request->seriesCode;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['serviceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->subSeriesCode)) {
            $body['subSeriesCode'] = $request->subSeriesCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->messageType)) {
            $body['messageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTopic',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteTopic',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetConsumerGroup',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetTopic',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $instanceId
     * @param ListConsumerGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListConsumerGroupsResponse
     */
    public function listConsumerGroupsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConsumerGroups',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConsumerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $instanceId
     * @param ListTopicsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTopicsResponse
     */
    public function listTopicsWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTopics',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->consumeRetryPolicy)) {
            $body['consumeRetryPolicy'] = $request->consumeRetryPolicy;
        }
        if (!Utils::isUnset($request->deliveryOrderType)) {
            $body['deliveryOrderType'] = $request->deliveryOrderType;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConsumerGroup',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->networkInfo)) {
            $body['networkInfo'] = $request->networkInfo;
        }
        if (!Utils::isUnset($request->productInfo)) {
            $body['productInfo'] = $request->productInfo;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTopic',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
}
