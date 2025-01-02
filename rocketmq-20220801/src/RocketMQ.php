<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupResponse;
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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteDisasterRecoveryPlanResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAclRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceAclResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceIpWhitelistResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\DeleteTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupLagResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerStackResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceAccountResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetMessageDetailResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTopicResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListAvailableZonesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupsResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupSubscriptionsResponse;
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
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\TagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\TagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateConsumerGroupResponse;
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
     * @summary 添加容灾计划条目
     *  *
     * @param string                         $planId
     * @param AddDisasterRecoveryItemRequest $request AddDisasterRecoveryItemRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDisasterRecoveryItemResponse AddDisasterRecoveryItemResponse
     */
    public function addDisasterRecoveryItemWithOptions($planId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->topics)) {
            $body['topics'] = $request->topics;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDisasterRecoveryItem',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/disaster_recovery/' . OpenApiUtilClient::getEncodeParam($planId) . '/items',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加容灾计划条目
     *  *
     * @param string                         $planId
     * @param AddDisasterRecoveryItemRequest $request AddDisasterRecoveryItemRequest
     *
     * @return AddDisasterRecoveryItemResponse AddDisasterRecoveryItemResponse
     */
    public function addDisasterRecoveryItem($planId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addDisasterRecoveryItemWithOptions($planId, $request, $headers, $runtime);
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
        if (!Utils::isUnset($request->maxReceiveTps)) {
            $body['maxReceiveTps'] = $request->maxReceiveTps;
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
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
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
     * @summary Creates an account that is used to access an instance.
     *  *
     * @param string                       $instanceId
     * @param CreateInstanceAccountRequest $request    CreateInstanceAccountRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceAccountResponse CreateInstanceAccountResponse
     */
    public function createInstanceAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceAccount',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/accounts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an account that is used to access an instance.
     *  *
     * @param string                       $instanceId
     * @param CreateInstanceAccountRequest $request    CreateInstanceAccountRequest
     *
     * @return CreateInstanceAccountResponse CreateInstanceAccountResponse
     */
    public function createInstanceAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an access control list (ACL) in a specific instance.
     *  *
     * @param string                   $instanceId
     * @param string                   $username
     * @param CreateInstanceAclRequest $request    CreateInstanceAclRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceAclResponse CreateInstanceAclResponse
     */
    public function createInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actions)) {
            $body['actions'] = $request->actions;
        }
        if (!Utils::isUnset($request->decision)) {
            $body['decision'] = $request->decision;
        }
        if (!Utils::isUnset($request->ipWhitelists)) {
            $body['ipWhitelists'] = $request->ipWhitelists;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $body['resourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceAcl',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/acl/account/' . OpenApiUtilClient::getEncodeParam($username) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an access control list (ACL) in a specific instance.
     *  *
     * @param string                   $instanceId
     * @param string                   $username
     * @param CreateInstanceAclRequest $request    CreateInstanceAclRequest
     *
     * @return CreateInstanceAclResponse CreateInstanceAclResponse
     */
    public function createInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * @summary Creates an IP address whitelist.
     *  *
     * @param string                           $instanceId
     * @param CreateInstanceIpWhitelistRequest $request    CreateInstanceIpWhitelistRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceIpWhitelistResponse CreateInstanceIpWhitelistResponse
     */
    public function createInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ipWhitelists)) {
            $body['ipWhitelists'] = $request->ipWhitelists;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceIpWhitelist',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ip/whitelist',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an IP address whitelist.
     *  *
     * @param string                           $instanceId
     * @param CreateInstanceIpWhitelistRequest $request    CreateInstanceIpWhitelistRequest
     *
     * @return CreateInstanceIpWhitelistResponse CreateInstanceIpWhitelistResponse
     */
    public function createInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
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
        if (!Utils::isUnset($request->maxSendTps)) {
            $body['maxSendTps'] = $request->maxSendTps;
        }
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
     * @summary Deletes the subscriptions of a consumer group.
     *  *
     * @param string                                 $instanceId
     * @param string                                 $consumerGroupId
     * @param DeleteConsumerGroupSubscriptionRequest $request         DeleteConsumerGroupSubscriptionRequest
     * @param string[]                               $headers         map
     * @param RuntimeOptions                         $runtime         runtime options for this request RuntimeOptions
     *
     * @return DeleteConsumerGroupSubscriptionResponse DeleteConsumerGroupSubscriptionResponse
     */
    public function deleteConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterExpression)) {
            $query['filterExpression'] = $request->filterExpression;
        }
        if (!Utils::isUnset($request->filterType)) {
            $query['filterType'] = $request->filterType;
        }
        if (!Utils::isUnset($request->topicName)) {
            $query['topicName'] = $request->topicName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroupSubscription',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/subscriptions',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteConsumerGroupSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the subscriptions of a consumer group.
     *  *
     * @param string                                 $instanceId
     * @param string                                 $consumerGroupId
     * @param DeleteConsumerGroupSubscriptionRequest $request         DeleteConsumerGroupSubscriptionRequest
     *
     * @return DeleteConsumerGroupSubscriptionResponse DeleteConsumerGroupSubscriptionResponse
     */
    public function deleteConsumerGroupSubscription($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除容灾计划
     *  *
     * @param string         $planId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDisasterRecoveryPlanResponse DeleteDisasterRecoveryPlanResponse
     */
    public function deleteDisasterRecoveryPlanWithOptions($planId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDisasterRecoveryPlan',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/disaster_recovery/' . OpenApiUtilClient::getEncodeParam($planId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDisasterRecoveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除容灾计划
     *  *
     * @param string $planId
     *
     * @return DeleteDisasterRecoveryPlanResponse DeleteDisasterRecoveryPlanResponse
     */
    public function deleteDisasterRecoveryPlan($planId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDisasterRecoveryPlanWithOptions($planId, $headers, $runtime);
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
     * @summary Delete access control ACL user
     *  *
     * @param string         $instanceId
     * @param string         $username
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceAccountResponse DeleteInstanceAccountResponse
     */
    public function deleteInstanceAccountWithOptions($instanceId, $username, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceAccount',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/accounts/' . OpenApiUtilClient::getEncodeParam($username) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Delete access control ACL user
     *  *
     * @param string $instanceId
     * @param string $username
     *
     * @return DeleteInstanceAccountResponse DeleteInstanceAccountResponse
     */
    public function deleteInstanceAccount($instanceId, $username)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceAccountWithOptions($instanceId, $username, $headers, $runtime);
    }

    /**
     * @summary Deletes the permissions of a specific account of an instance.
     *  *
     * @param string                   $instanceId
     * @param string                   $username
     * @param DeleteInstanceAclRequest $request    DeleteInstanceAclRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceAclResponse DeleteInstanceAclResponse
     */
    public function deleteInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceName)) {
            $query['resourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceAcl',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/acl/account/' . OpenApiUtilClient::getEncodeParam($username) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the permissions of a specific account of an instance.
     *  *
     * @param string                   $instanceId
     * @param string                   $username
     * @param DeleteInstanceAclRequest $request    DeleteInstanceAclRequest
     *
     * @return DeleteInstanceAclResponse DeleteInstanceAclResponse
     */
    public function deleteInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a specific IP address whitelist from an instance.
     *  *
     * @param string                           $instanceId
     * @param DeleteInstanceIpWhitelistRequest $request    DeleteInstanceIpWhitelistRequest
     * @param string[]                         $headers    map
     * @param RuntimeOptions                   $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceIpWhitelistResponse DeleteInstanceIpWhitelistResponse
     */
    public function deleteInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipWhitelist)) {
            $query['ipWhitelist'] = $request->ipWhitelist;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceIpWhitelist',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ip/whitelist',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specific IP address whitelist from an instance.
     *  *
     * @param string                           $instanceId
     * @param DeleteInstanceIpWhitelistRequest $request    DeleteInstanceIpWhitelistRequest
     *
     * @return DeleteInstanceIpWhitelistResponse DeleteInstanceIpWhitelistResponse
     */
    public function deleteInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
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
     * @summary Query Consumer Group Backlog Information
     *  *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetConsumerGroupLagResponse GetConsumerGroupLagResponse
     */
    public function getConsumerGroupLagWithOptions($instanceId, $consumerGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetConsumerGroupLag',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/lag',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConsumerGroupLagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query Consumer Group Backlog Information
     *  *
     * @param string $instanceId
     * @param string $consumerGroupId
     *
     * @return GetConsumerGroupLagResponse GetConsumerGroupLagResponse
     */
    public function getConsumerGroupLag($instanceId, $consumerGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupLagWithOptions($instanceId, $consumerGroupId, $headers, $runtime);
    }

    /**
     * @summary Queries the subscriptions of a consumer group.
     *  *
     * @param string         $instanceId
     * @param string         $consumerGroupId
     * @param string         $topicName
     * @param string[]       $headers         map
     * @param RuntimeOptions $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetConsumerGroupSubscriptionResponse GetConsumerGroupSubscriptionResponse
     */
    public function getConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $topicName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetConsumerGroupSubscription',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/subscriptions/' . OpenApiUtilClient::getEncodeParam($topicName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConsumerGroupSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the subscriptions of a consumer group.
     *  *
     * @param string $instanceId
     * @param string $consumerGroupId
     * @param string $topicName
     *
     * @return GetConsumerGroupSubscriptionResponse GetConsumerGroupSubscriptionResponse
     */
    public function getConsumerGroupSubscription($instanceId, $consumerGroupId, $topicName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerGroupSubscriptionWithOptions($instanceId, $consumerGroupId, $topicName, $headers, $runtime);
    }

    /**
     * @summary Queries the stack information about a consumer.
     *  *
     * @param string                  $instanceId
     * @param string                  $consumerGroupId
     * @param GetConsumerStackRequest $request         GetConsumerStackRequest
     * @param string[]                $headers         map
     * @param RuntimeOptions          $runtime         runtime options for this request RuntimeOptions
     *
     * @return GetConsumerStackResponse GetConsumerStackResponse
     */
    public function getConsumerStackWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['clientId'] = $request->clientId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConsumerStack',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/consumerGroups/' . OpenApiUtilClient::getEncodeParam($consumerGroupId) . '/stack',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConsumerStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the stack information about a consumer.
     *  *
     * @param string                  $instanceId
     * @param string                  $consumerGroupId
     * @param GetConsumerStackRequest $request         GetConsumerStackRequest
     *
     * @return GetConsumerStackResponse GetConsumerStackResponse
     */
    public function getConsumerStack($instanceId, $consumerGroupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getConsumerStackWithOptions($instanceId, $consumerGroupId, $request, $headers, $runtime);
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
     * @summary Obtains the account used to access a specific instance.
     *  *
     * @param string                    $instanceId
     * @param GetInstanceAccountRequest $request    GetInstanceAccountRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceAccountResponse GetInstanceAccountResponse
     */
    public function getInstanceAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->username)) {
            $query['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceAccount',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/account',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the account used to access a specific instance.
     *  *
     * @param string                    $instanceId
     * @param GetInstanceAccountRequest $request    GetInstanceAccountRequest
     *
     * @return GetInstanceAccountResponse GetInstanceAccountResponse
     */
    public function getInstanceAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Obtains the details of a specific message.
     *  *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string         $messageId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetMessageDetailResponse GetMessageDetailResponse
     */
    public function getMessageDetailWithOptions($instanceId, $topicName, $messageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMessageDetail',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/messages/' . OpenApiUtilClient::getEncodeParam($messageId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMessageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of a specific message.
     *  *
     * @param string $instanceId
     * @param string $topicName
     * @param string $messageId
     *
     * @return GetMessageDetailResponse GetMessageDetailResponse
     */
    public function getMessageDetail($instanceId, $topicName, $messageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMessageDetailWithOptions($instanceId, $topicName, $messageId, $headers, $runtime);
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
     * @summary Queries the trace of a specific message in a specific topic.
     *  *
     * @param string         $instanceId
     * @param string         $topicName
     * @param string         $messageId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetTraceResponse GetTraceResponse
     */
    public function getTraceWithOptions($instanceId, $topicName, $messageId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTrace',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/traces/' . OpenApiUtilClient::getEncodeParam($messageId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trace of a specific message in a specific topic.
     *  *
     * @param string $instanceId
     * @param string $topicName
     * @param string $messageId
     *
     * @return GetTraceResponse GetTraceResponse
     */
    public function getTrace($instanceId, $topicName, $messageId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceWithOptions($instanceId, $topicName, $messageId, $headers, $runtime);
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
     * @summary Queries the subscriptions of a specific consumer group.
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
     * @summary Queries the subscriptions of a specific consumer group.
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
     * @summary Queries the accounts that are used to access a specific instance.
     *  *
     * @param string                     $instanceId
     * @param ListInstanceAccountRequest $request    ListInstanceAccountRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceAccountResponse ListInstanceAccountResponse
     */
    public function listInstanceAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountStatus)) {
            $query['accountStatus'] = $request->accountStatus;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['accountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->username)) {
            $query['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceAccount',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/accounts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the accounts that are used to access a specific instance.
     *  *
     * @param string                     $instanceId
     * @param ListInstanceAccountRequest $request    ListInstanceAccountRequest
     *
     * @return ListInstanceAccountResponse ListInstanceAccountResponse
     */
    public function listInstanceAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the access control lists (ACLs) of an instance.
     *  *
     * @param string                 $instanceId
     * @param ListInstanceAclRequest $request    ListInstanceAclRequest
     * @param string[]               $headers    map
     * @param RuntimeOptions         $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceAclResponse ListInstanceAclResponse
     */
    public function listInstanceAclWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'ListInstanceAcl',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/acl',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the access control lists (ACLs) of an instance.
     *  *
     * @param string                 $instanceId
     * @param ListInstanceAclRequest $request    ListInstanceAclRequest
     *
     * @return ListInstanceAclResponse ListInstanceAclResponse
     */
    public function listInstanceAcl($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceAclWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the IP address whitelists of an instance.
     *  *
     * @param string                         $instanceId
     * @param ListInstanceIpWhitelistRequest $request    ListInstanceIpWhitelistRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceIpWhitelistResponse ListInstanceIpWhitelistResponse
     */
    public function listInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipWhitelist)) {
            $query['ipWhitelist'] = $request->ipWhitelist;
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
            'action'      => 'ListInstanceIpWhitelist',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/ip/whitelist',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceIpWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP address whitelists of an instance.
     *  *
     * @param string                         $instanceId
     * @param ListInstanceIpWhitelistRequest $request    ListInstanceIpWhitelistRequest
     *
     * @return ListInstanceIpWhitelistResponse ListInstanceIpWhitelistResponse
     */
    public function listInstanceIpWhitelist($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceIpWhitelistWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries all ApsaraMQ for RocketMQ instances in a specific region.
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
        if (!Utils::isUnset($request->storageSecretKey)) {
            $query['storageSecretKey'] = $request->storageSecretKey;
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
     * @summary Queries all ApsaraMQ for RocketMQ instances in a specific region.
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
     * @summary Queries the list of messages.
     *  *
     * @param string              $instanceId
     * @param string              $topicName
     * @param ListMessagesRequest $request    ListMessagesRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListMessagesResponse ListMessagesResponse
     */
    public function listMessagesWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['messageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->messageKey)) {
            $query['messageKey'] = $request->messageKey;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scrollId)) {
            $query['scrollId'] = $request->scrollId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMessages',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/messages',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of messages.
     *  *
     * @param string              $instanceId
     * @param string              $topicName
     * @param ListMessagesRequest $request    ListMessagesRequest
     *
     * @return ListMessagesResponse ListMessagesResponse
     */
    public function listMessages($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMessagesWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }

    /**
     * @summary 查询监控项列表
     *  *
     * @param ListMetricMetaRequest $request ListMetricMetaRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMetricMetaResponse ListMetricMetaResponse
     */
    public function listMetricMetaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListMetricMeta',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/monitor/metrics/meta',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMetricMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询监控项列表
     *  *
     * @param ListMetricMetaRequest $request ListMetricMetaRequest
     *
     * @return ListMetricMetaResponse ListMetricMetaResponse
     */
    public function listMetricMeta($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMetricMetaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries regions in which ApsaraMQ for RocketMQ is available.
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
     * @summary Queries regions in which ApsaraMQ for RocketMQ is available.
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
     * @summary Query visible resource tag relationships
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
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
        if (!Utils::isUnset($request->tag)) {
            $query['tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourceTag/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query visible resource tag relationships
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the subscriptions of a specific topic.
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
     * @summary Queries the subscriptions of a specific topic.
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
     * @summary Queries the message traces of a specific topic.
     *  *
     * @param string            $instanceId
     * @param string            $topicName
     * @param ListTracesRequest $request    ListTracesRequest
     * @param string[]          $headers    map
     * @param RuntimeOptions    $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListTracesResponse ListTracesResponse
     */
    public function listTracesWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['messageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->messageKey)) {
            $query['messageKey'] = $request->messageKey;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['queryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTraces',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/traces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTracesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the message traces of a specific topic.
     *  *
     * @param string            $instanceId
     * @param string            $topicName
     * @param ListTracesRequest $request    ListTracesRequest
     *
     * @return ListTracesResponse ListTracesResponse
     */
    public function listTraces($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTracesWithOptions($instanceId, $topicName, $request, $headers, $runtime);
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
     * @summary 启用容灾计划条目
     *  *
     * @param string         $planId
     * @param string         $itemId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDisasterRecoveryItemResponse StartDisasterRecoveryItemResponse
     */
    public function startDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartDisasterRecoveryItem',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/disaster_recovery/' . OpenApiUtilClient::getEncodeParam($planId) . '/items/' . OpenApiUtilClient::getEncodeParam($itemId) . '/start',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启用容灾计划条目
     *  *
     * @param string $planId
     * @param string $itemId
     *
     * @return StartDisasterRecoveryItemResponse StartDisasterRecoveryItemResponse
     */
    public function startDisasterRecoveryItem($planId, $itemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime);
    }

    /**
     * @summary 停用容灾计划条目
     *  *
     * @param string         $planId
     * @param string         $itemId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDisasterRecoveryItemResponse StopDisasterRecoveryItemResponse
     */
    public function stopDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopDisasterRecoveryItem',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/disaster_recovery/' . OpenApiUtilClient::getEncodeParam($planId) . '/items/' . OpenApiUtilClient::getEncodeParam($itemId) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopDisasterRecoveryItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停用容灾计划条目
     *  *
     * @param string $planId
     * @param string $itemId
     *
     * @return StopDisasterRecoveryItemResponse StopDisasterRecoveryItemResponse
     */
    public function stopDisasterRecoveryItem($planId, $itemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDisasterRecoveryItemWithOptions($planId, $itemId, $headers, $runtime);
    }

    /**
     * @summary Creates resource tags.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourceTag/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates resource tags.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Removes tags from resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['all'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['tagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourceTag/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes tags from resources.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
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
        if (!Utils::isUnset($request->maxReceiveTps)) {
            $body['maxReceiveTps'] = $request->maxReceiveTps;
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
     * @summary Updates the information about a specific account in a specific instance.
     *  *
     * @param string                       $instanceId
     * @param string                       $username
     * @param UpdateInstanceAccountRequest $request    UpdateInstanceAccountRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceAccountResponse UpdateInstanceAccountResponse
     */
    public function updateInstanceAccountWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountStatus)) {
            $query['accountStatus'] = $request->accountStatus;
        }
        if (!Utils::isUnset($request->password)) {
            $query['password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceAccount',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/accounts/' . OpenApiUtilClient::getEncodeParam($username) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a specific account in a specific instance.
     *  *
     * @param string                       $instanceId
     * @param string                       $username
     * @param UpdateInstanceAccountRequest $request    UpdateInstanceAccountRequest
     *
     * @return UpdateInstanceAccountResponse UpdateInstanceAccountResponse
     */
    public function updateInstanceAccount($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceAccountWithOptions($instanceId, $username, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the permissions on the resources of a specific instance for a specific user.
     *  *
     * @param string                   $instanceId
     * @param string                   $username
     * @param UpdateInstanceAclRequest $request    UpdateInstanceAclRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceAclResponse UpdateInstanceAclResponse
     */
    public function updateInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actions)) {
            $body['actions'] = $request->actions;
        }
        if (!Utils::isUnset($request->decision)) {
            $body['decision'] = $request->decision;
        }
        if (!Utils::isUnset($request->ipWhitelists)) {
            $body['ipWhitelists'] = $request->ipWhitelists;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $body['resourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceAcl',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/acl/account/' . OpenApiUtilClient::getEncodeParam($username) . '',
            'method'      => 'PATCH',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the permissions on the resources of a specific instance for a specific user.
     *  *
     * @param string                   $instanceId
     * @param string                   $username
     * @param UpdateInstanceAclRequest $request    UpdateInstanceAclRequest
     *
     * @return UpdateInstanceAclResponse UpdateInstanceAclResponse
     */
    public function updateInstanceAcl($instanceId, $username, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceAclWithOptions($instanceId, $username, $request, $headers, $runtime);
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
        if (!Utils::isUnset($request->maxSendTps)) {
            $body['maxSendTps'] = $request->maxSendTps;
        }
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

    /**
     * @summary Verifies the consumption status of a message in a specific topic on a specific instance.
     *  *
     * @param string                      $instanceId
     * @param string                      $topicName
     * @param string                      $messageId
     * @param VerifyConsumeMessageRequest $request    VerifyConsumeMessageRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return VerifyConsumeMessageResponse VerifyConsumeMessageResponse
     */
    public function verifyConsumeMessageWithOptions($instanceId, $topicName, $messageId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['clientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->consumerGroupId)) {
            $query['consumerGroupId'] = $request->consumerGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyConsumeMessage',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/messages/' . OpenApiUtilClient::getEncodeParam($messageId) . '/action/verifyConsume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VerifyConsumeMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies the consumption status of a message in a specific topic on a specific instance.
     *  *
     * @param string                      $instanceId
     * @param string                      $topicName
     * @param string                      $messageId
     * @param VerifyConsumeMessageRequest $request    VerifyConsumeMessageRequest
     *
     * @return VerifyConsumeMessageResponse VerifyConsumeMessageResponse
     */
    public function verifyConsumeMessage($instanceId, $topicName, $messageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyConsumeMessageWithOptions($instanceId, $topicName, $messageId, $request, $headers, $runtime);
    }

    /**
     * @summary Verifies the message sending feature of a specific topic on a specific instance.
     *  *
     * @param string                   $instanceId
     * @param string                   $topicName
     * @param VerifySendMessageRequest $request    VerifySendMessageRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return VerifySendMessageResponse VerifySendMessageResponse
     */
    public function verifySendMessageWithOptions($instanceId, $topicName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->message)) {
            $body['message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageKey)) {
            $body['messageKey'] = $request->messageKey;
        }
        if (!Utils::isUnset($request->messageTag)) {
            $body['messageTag'] = $request->messageTag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifySendMessage',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/topics/' . OpenApiUtilClient::getEncodeParam($topicName) . '/messages',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VerifySendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies the message sending feature of a specific topic on a specific instance.
     *  *
     * @param string                   $instanceId
     * @param string                   $topicName
     * @param VerifySendMessageRequest $request    VerifySendMessageRequest
     *
     * @return VerifySendMessageResponse VerifySendMessageResponse
     */
    public function verifySendMessage($instanceId, $topicName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifySendMessageWithOptions($instanceId, $topicName, $request, $headers, $runtime);
    }
}
