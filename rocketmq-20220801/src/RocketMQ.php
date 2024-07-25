<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupResponse;
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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupSubscriptionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicsShrinkRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTopicSubscriptionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ResetConsumeOffsetRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ResetConsumeOffsetResponse;
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
     * @summary Changes the resource group to which a ApsaraMQ for RocketMQ instance belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourceGroup/change',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the resource group to which a ApsaraMQ for RocketMQ instance belongs.
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param CreateConsumerGroupRequest $request         CreateConsumerGroupRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
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
     * @summary Creates a consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param CreateConsumerGroupRequest $request         CreateConsumerGroupRequest
     *
     * @return CreateConsumerGroupResponse CreateConsumerGroupResponse
     */
    public function createConsumerGroup($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an ApsaraMQ for RocketMQ 5.x instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
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
        if (!Utils::isUnset($request->commodityCode)) {
            $body['commodityCode'] = $request->commodityCode;
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
     * @summary Creates an ApsaraMQ for RocketMQ 5.x instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a topic.
     *  *
     * @param string             $instanceId
     * @param string             $topicName
     * @param CreateTopicRequest $request    CreateTopicRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateTopicResponse CreateTopicResponse
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
     * @summary Creates a topic.
     *  *
     * @param string             $instanceId
     * @param string             $topicName
     * @param CreateTopicRequest $request    CreateTopicRequest
     *
     * @return CreateTopicResponse CreateTopicResponse
     */
    public function createTopic($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTopicWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a specified consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * After you delete a consumer group, the consumer client associated with the consumer group cannot consume messages. Exercise caution when you call this operation.
     *  *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
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
     * @summary Deletes a specified consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * After you delete a consumer group, the consumer client associated with the consumer group cannot consume messages. Exercise caution when you call this operation.
     *  *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return DeleteConsumerGroupResponse DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * @summary Deletes a ApsaraMQ for RocketMQ instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * *   After an instance is deleted, the instance cannot be restored. Exercise caution when you call this operation.
     * *   This operation is used to delete a pay-as-you-go instance. A subscription instance is automatically released after it expires. You do not need to manually delete a subscription instance.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
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
     * @summary Deletes a ApsaraMQ for RocketMQ instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     * *   After an instance is deleted, the instance cannot be restored. Exercise caution when you call this operation.
     * *   This operation is used to delete a pay-as-you-go instance. A subscription instance is automatically released after it expires. You do not need to manually delete a subscription instance.
     *  *
     * @param string $instanceId
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Deletes a specified topic.
     *  *
     * @description If you delete the topic, the publishing and subscription relationships that are established based on the topic are cleared. Exercise caution when you call this operation.
     *  *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteTopicResponse DeleteTopicResponse
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
     * @summary Deletes a specified topic.
     *  *
     * @description If you delete the topic, the publishing and subscription relationships that are established based on the topic are cleared. Exercise caution when you call this operation.
     *  *
     * @param string $instanceId
     * @param string $topicName
     *
     * @return DeleteTopicResponse DeleteTopicResponse
     */
    public function deleteTopic($instanceId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTopicWithOptions($instanceId, $topicName, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a specified consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetConsumerGroupResponse GetConsumerGroupResponse
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
     * @summary Queries the details of a specified consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return GetConsumerGroupResponse GetConsumerGroupResponse
     */
    public function getConsumerGroup($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * @summary Queries the detailed information about an instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string         $instanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
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
     * @summary Queries the detailed information about an instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string $instanceId
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a specified topic.
     *  *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTopicResponse GetTopicResponse
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
     * @summary Queries the details of a specified topic.
     *  *
     * @param string $instanceId
     * @param string $topicName
     *
     * @return GetTopicResponse GetTopicResponse
     */
    public function getTopic($instanceId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTopicWithOptions($instanceId, $topicName, $headers, $runtime);
    }

    /**
     * @summary 查询支持的可用区
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvailableZonesResponse ListAvailableZonesResponse
     */
    public function listAvailableZonesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListAvailableZones',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/zones',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAvailableZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询支持的可用区
     *  *
     * @return ListAvailableZonesResponse ListAvailableZonesResponse
     */
    public function listAvailableZones()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableZonesWithOptions($headers, $runtime);
    }

    /**
     * @summary 查询消费者客户端连接信息
     *  *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return ListConsumerConnectionsResponse ListConsumerConnectionsResponse
     */
    public function listConsumerConnectionsWithOptions($instanceId, $consumerGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListConsumerConnections',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/connections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConsumerConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询消费者客户端连接信息
     *  *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return ListConsumerConnectionsResponse ListConsumerConnectionsResponse
     */
    public function listConsumerConnections($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerConnectionsWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * @summary Queries the subscriptions of a consumer group.
     *  *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return ListConsumerGroupSubscriptionsResponse ListConsumerGroupSubscriptionsResponse
     */
    public function listConsumerGroupSubscriptionsWithOptions($instanceId, $consumerGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListConsumerGroupSubscriptions',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/subscriptions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConsumerGroupSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the subscriptions of a consumer group.
     *  *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return ListConsumerGroupSubscriptionsResponse ListConsumerGroupSubscriptionsResponse
     */
    public function listConsumerGroupSubscriptions($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupSubscriptionsWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * @summary Queries the consumer groups in a specified instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                    $instanceId
     * @param ListConsumerGroupsRequest $request    ListConsumerGroupsRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListConsumerGroupsResponse ListConsumerGroupsResponse
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
     * @summary Queries the consumer groups in a specified instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                    $instanceId
     * @param ListConsumerGroupsRequest $request    ListConsumerGroupsRequest
     *
     * @return ListConsumerGroupsResponse ListConsumerGroupsResponse
     */
    public function listConsumerGroups($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries instances.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param ListInstancesRequest $tmpReq  ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->seriesCodes)) {
            $request->seriesCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->seriesCodes, 'seriesCodes', 'simple');
        }
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->seriesCodesShrink)) {
            $query['seriesCodes'] = $request->seriesCodesShrink;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['tags'] = $request->tags;
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
     * @summary Queries instances.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询region列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询region列表
     *  *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($headers, $runtime);
    }

    /**
     * @summary 查询主题订阅关系列表
     *  *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListTopicSubscriptionsResponse ListTopicSubscriptionsResponse
     */
    public function listTopicSubscriptionsWithOptions($instanceId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListTopicSubscriptions',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/subscriptions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTopicSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询主题订阅关系列表
     *  *
     * @param string $instanceId
     * @param string $topicName
     *
     * @return ListTopicSubscriptionsResponse ListTopicSubscriptionsResponse
     */
    public function listTopicSubscriptions($instanceId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTopicSubscriptionsWithOptions($instanceId, $topicName, $headers, $runtime);
    }

    /**
     * @summary Queries the topics in a specified instance.
     *  *
     * @param string            $instanceId
     * @param ListTopicsRequest $tmpReq     ListTopicsRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListTopicsResponse ListTopicsResponse
     */
    public function listTopicsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTopicsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->messageTypes)) {
            $request->messageTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->messageTypes, 'messageTypes', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->messageTypesShrink)) {
            $query['messageTypes'] = $request->messageTypesShrink;
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
     * @summary Queries the topics in a specified instance.
     *  *
     * @param string            $instanceId
     * @param ListTopicsRequest $request    ListTopicsRequest
     *
     * @return ListTopicsResponse ListTopicsResponse
     */
    public function listTopics($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTopicsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Resets the consumer offset of a consumer group.
     *  *
     * @param string                    $instanceId
     * @param string                    $consumerGroupId
     * @param string                    $topicName
     * @param ResetConsumeOffsetRequest $request         ResetConsumeOffsetRequest
     * @param string[]                  $headers         map
     * @param RuntimeOptions            $runtime         runtime options for this request RuntimeOptions
     *
     * @return ResetConsumeOffsetResponse ResetConsumeOffsetResponse
     */
    public function resetConsumeOffsetWithOptions($instanceId, $consumerGroupId, $topicName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resetTime)) {
            $body['resetTime'] = $request->resetTime;
        }
        if (!Utils::isUnset($request->resetType)) {
            $body['resetType'] = $request->resetType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetConsumeOffset',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/consumeOffsets/' . OpenApiUtilClient::getEncodeParam($topicName) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetConsumeOffsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets the consumer offset of a consumer group.
     *  *
     * @param string                    $instanceId
     * @param string                    $consumerGroupId
     * @param string                    $topicName
     * @param ResetConsumeOffsetRequest $request         ResetConsumeOffsetRequest
     *
     * @return ResetConsumeOffsetResponse ResetConsumeOffsetResponse
     */
    public function resetConsumeOffset($instanceId, $consumerGroupId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetConsumeOffsetWithOptions($instanceId, $consumerGroupId, $topicName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the basic information about and the consumption retry policy of a consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request         UpdateConsumerGroupRequest
     * @param string[]                   $headers         map
     * @param RuntimeOptions             $runtime         runtime options for this request RuntimeOptions
     *
     * @return UpdateConsumerGroupResponse UpdateConsumerGroupResponse
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
     * @summary Updates the basic information about and the consumption retry policy of a consumer group.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                     $instanceId
     * @param string                     $consumerGroupId
     * @param UpdateConsumerGroupRequest $request         UpdateConsumerGroupRequest
     *
     * @return UpdateConsumerGroupResponse UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the basic information and specifications of an ApsaraMQ for RocketMQ instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aclInfo)) {
            $body['aclInfo'] = $request->aclInfo;
        }
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
     * @summary Updates the basic information and specifications of an ApsaraMQ for RocketMQ instance.
     *  *
     * @description > API operations provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *  *
     * @param string                $instanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the basic information about a topic.
     *  *
     * @param string             $instanceId
     * @param string             $topicName
     * @param UpdateTopicRequest $request    UpdateTopicRequest
     * @param string[]           $headers    map
     * @param RuntimeOptions     $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateTopicResponse UpdateTopicResponse
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
     * @summary Updates the basic information about a topic.
     *  *
     * @param string             $instanceId
     * @param string             $topicName
     * @param UpdateTopicRequest $request    UpdateTopicRequest
     *
     * @return UpdateTopicResponse UpdateTopicResponse
     */
    public function updateTopic($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTopicWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }
}
