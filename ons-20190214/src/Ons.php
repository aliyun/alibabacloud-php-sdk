<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ons\V20190214\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerAccumulateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerResetOffsetRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerResetOffsetResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerTimeSpanRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerTimeSpanResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageGetByIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageGetByIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageResendByIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageResendByIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupConsumerUpdateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupConsumerUpdateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupCreateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupCreateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupDeleteRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupDeleteResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceCreateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceCreateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceDeleteRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceDeleteResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceUpdateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceUpdateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageDetailRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageDetailResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByMsgIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByMsgIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePushRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePushResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicCreateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicCreateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicDeleteRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicDeleteResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicStatusRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicStatusResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicSubDetailResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicUpdateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicUpdateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceQueryByMsgIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceQueryByMsgIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceQueryByMsgKeyRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceQueryByMsgKeyResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendGroupOutputTpsRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendGroupOutputTpsResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OpenOnsServiceResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ons extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'ons.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ons.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ons.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ons.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ons.aliyuncs.com',
            'cn-edge-1'                   => 'ons.aliyuncs.com',
            'cn-fujian'                   => 'ons.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ons.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ons.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ons.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ons.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ons.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ons.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ons.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ons.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ons.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ons.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ons.aliyuncs.com',
            'cn-shanghai-inner'           => 'ons.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ons.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ons.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ons.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ons.aliyuncs.com',
            'cn-wuhan'                    => 'ons.aliyuncs.com',
            'cn-yushanfang'               => 'ons.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ons.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ons.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ons.aliyuncs.com',
            'eu-west-1-oxs'               => 'ons.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'ons.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ons', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you call the **ListTagResources** operation, specify at least one of the following parameters in the request: **Tag.N.Key** and **ResourceId.N**. You can specify a resource ID to query all tags that are attached to the specified resource. You can also specify a tag key to query the tag value and the resource to which the tag is attached.
     *   * *   If you include the **Tag.N.Key** parameter in a request, you can obtain the tag value and the ID of the resource to which the tag is attached.********
     *   * *   If you include the **ResourceId.N** parameter in a request, you can obtain the keys and values of all tags that are attached to the specified resource.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2019-02-14',
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
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you call the **ListTagResources** operation, specify at least one of the following parameters in the request: **Tag.N.Key** and **ResourceId.N**. You can specify a resource ID to query all tags that are attached to the specified resource. You can also specify a tag key to query the tag value and the resource to which the tag is attached.
     *   * *   If you include the **Tag.N.Key** parameter in a request, you can obtain the tag value and the ID of the resource to which the tag is attached.********
     *   * *   If you include the **ResourceId.N** parameter in a request, you can obtain the keys and values of all tags that are attached to the specified resource.
     *   *
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
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation in scenarios in which you want to know the message consumption progress of a specified consumer group in production environments. You can obtain the information about message consumption and consumption latency based on the returned information. This operation returns the total number of accumulated messages in all topics to which the specified consumer group subscribes and the number of accumulated messages in each topic.
     *   *
     * @param OnsConsumerAccumulateRequest $request OnsConsumerAccumulateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsConsumerAccumulateResponse OnsConsumerAccumulateResponse
     */
    public function onsConsumerAccumulateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsConsumerAccumulate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsConsumerAccumulateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation in scenarios in which you want to know the message consumption progress of a specified consumer group in production environments. You can obtain the information about message consumption and consumption latency based on the returned information. This operation returns the total number of accumulated messages in all topics to which the specified consumer group subscribes and the number of accumulated messages in each topic.
     *   *
     * @param OnsConsumerAccumulateRequest $request OnsConsumerAccumulateRequest
     *
     * @return OnsConsumerAccumulateResponse OnsConsumerAccumulateResponse
     */
    public function onsConsumerAccumulate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerAccumulateWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When messages are accumulated in a topic, you can call this operation to check whether a consumer is online.
     *   *
     * @param OnsConsumerGetConnectionRequest $request OnsConsumerGetConnectionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsConsumerGetConnectionResponse OnsConsumerGetConnectionResponse
     */
    public function onsConsumerGetConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsConsumerGetConnection',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsConsumerGetConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When messages are accumulated in a topic, you can call this operation to check whether a consumer is online.
     *   *
     * @param OnsConsumerGetConnectionRequest $request OnsConsumerGetConnectionRequest
     *
     * @return OnsConsumerGetConnectionResponse OnsConsumerGetConnectionResponse
     */
    public function onsConsumerGetConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerGetConnectionWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to clear accumulated messages or reset the consumption progress. You can use one of the following methods to clear accumulated messages:
     *   * *   Clear all accumulated messages in a specified topic.
     *   * *   Clear the messages that were published to the specified topic before a specified point in time.
     *   *
     * @param OnsConsumerResetOffsetRequest $request OnsConsumerResetOffsetRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsConsumerResetOffsetResponse OnsConsumerResetOffsetResponse
     */
    public function onsConsumerResetOffsetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resetTimestamp)) {
            $query['ResetTimestamp'] = $request->resetTimestamp;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsConsumerResetOffset',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsConsumerResetOffsetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to clear accumulated messages or reset the consumption progress. You can use one of the following methods to clear accumulated messages:
     *   * *   Clear all accumulated messages in a specified topic.
     *   * *   Clear the messages that were published to the specified topic before a specified point in time.
     *   *
     * @param OnsConsumerResetOffsetRequest $request OnsConsumerResetOffsetRequest
     *
     * @return OnsConsumerResetOffsetResponse OnsConsumerResetOffsetResponse
     */
    public function onsConsumerResetOffset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerResetOffsetWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   You can call this operation in scenarios in which consumers are online and messages are accumulated. You can troubleshoot errors based on the information that is returned by this operation. You can check whether all consumers in the consumer group subscribe to the same topics and tags, and whether load balancing is performed as expected. You can also obtain the information about thread stack traces of online consumers.
     *   * *   This operation uses multiple backend operations to query and aggregate data. The system requires a long period of time to process a request. We recommend that you do not frequently call this operation.
     *   *
     * @param OnsConsumerStatusRequest $request OnsConsumerStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsConsumerStatusResponse OnsConsumerStatusResponse
     */
    public function onsConsumerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->detail)) {
            $query['Detail'] = $request->detail;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->needJstack)) {
            $query['NeedJstack'] = $request->needJstack;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsConsumerStatus',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsConsumerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   You can call this operation in scenarios in which consumers are online and messages are accumulated. You can troubleshoot errors based on the information that is returned by this operation. You can check whether all consumers in the consumer group subscribe to the same topics and tags, and whether load balancing is performed as expected. You can also obtain the information about thread stack traces of online consumers.
     *   * *   This operation uses multiple backend operations to query and aggregate data. The system requires a long period of time to process a request. We recommend that you do not frequently call this operation.
     *   *
     * @param OnsConsumerStatusRequest $request OnsConsumerStatusRequest
     *
     * @return OnsConsumerStatusResponse OnsConsumerStatusResponse
     */
    public function onsConsumerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerStatusWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to query the earliest point in time when a message was published to a specified topic and the most recent point in time when a message was published to the specified topic. You can also obtain the most recent point in time when a message in the topic was consumed. This operation is usually used with the \\*\\*OnsConsumerAccumulate\\*\\* operation to display the overview of the consumption progress.
     *   *
     * @param OnsConsumerTimeSpanRequest $request OnsConsumerTimeSpanRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsConsumerTimeSpanResponse OnsConsumerTimeSpanResponse
     */
    public function onsConsumerTimeSpanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsConsumerTimeSpan',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsConsumerTimeSpanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to query the earliest point in time when a message was published to a specified topic and the most recent point in time when a message was published to the specified topic. You can also obtain the most recent point in time when a message in the topic was consumed. This operation is usually used with the \\*\\*OnsConsumerAccumulate\\*\\* operation to display the overview of the consumption progress.
     *   *
     * @param OnsConsumerTimeSpanRequest $request OnsConsumerTimeSpanRequest
     *
     * @return OnsConsumerTimeSpanResponse OnsConsumerTimeSpanResponse
     */
    public function onsConsumerTimeSpan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerTimeSpanWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * This operation uses the exact match method to query a dead-letter message based on the message ID. You can obtain the message ID that is required to query the information about a dead-letter message from the SendResult parameter that is returned after the message is sent. You can also obtain the message ID by calling the OnsDLQMessagePageQueryByGroupId operation to query multiple messages at a time. The queried information about the dead-letter message includes the point in time when the message is stored, the message body, and attributes such as the message tag and the message key.
     *   *
     * @param OnsDLQMessageGetByIdRequest $request OnsDLQMessageGetByIdRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsDLQMessageGetByIdResponse OnsDLQMessageGetByIdResponse
     */
    public function onsDLQMessageGetByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsDLQMessageGetById',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsDLQMessageGetByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * This operation uses the exact match method to query a dead-letter message based on the message ID. You can obtain the message ID that is required to query the information about a dead-letter message from the SendResult parameter that is returned after the message is sent. You can also obtain the message ID by calling the OnsDLQMessagePageQueryByGroupId operation to query multiple messages at a time. The queried information about the dead-letter message includes the point in time when the message is stored, the message body, and attributes such as the message tag and the message key.
     *   *
     * @param OnsDLQMessageGetByIdRequest $request OnsDLQMessageGetByIdRequest
     *
     * @return OnsDLQMessageGetByIdResponse OnsDLQMessageGetByIdResponse
     */
    public function onsDLQMessageGetById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsDLQMessageGetByIdWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   If you do not know the ID of the dead-letter message that you want to query, you can call this operation to query all dead-letter messages that are sent to a specified consumer group within a specified time range. The results are returned by page.
     *   * *   We recommend that you specify a short time range to query dead-letter messages in this method. If you specify a long time range, a large number of dead-letter messages are returned. In this case, you cannot find the dead-letter message that you want to query in an efficient manner. You can perform the following steps to query dead-letter messages:
     *   *     1.  Perform a paged query by specifying the group ID, start time, end time, and number of entries to return on each page. If matched messages are found, the information about the dead-letter messages on the first page, total number of pages, and task ID are returned by default.
     *   *     2.  Specify the task ID and a page number to call this operation again to query the dead-letter messages on the specified page. In this query, the BeginTime, EndTime, and PageSize parameters do not take effect. By default, the system uses the values of these parameters that you specified in the request when you created the specified query task.
     *   *
     * @param OnsDLQMessagePageQueryByGroupIdRequest $request OnsDLQMessagePageQueryByGroupIdRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsDLQMessagePageQueryByGroupIdResponse OnsDLQMessagePageQueryByGroupIdResponse
     */
    public function onsDLQMessagePageQueryByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsDLQMessagePageQueryByGroupId',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsDLQMessagePageQueryByGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   If you do not know the ID of the dead-letter message that you want to query, you can call this operation to query all dead-letter messages that are sent to a specified consumer group within a specified time range. The results are returned by page.
     *   * *   We recommend that you specify a short time range to query dead-letter messages in this method. If you specify a long time range, a large number of dead-letter messages are returned. In this case, you cannot find the dead-letter message that you want to query in an efficient manner. You can perform the following steps to query dead-letter messages:
     *   *     1.  Perform a paged query by specifying the group ID, start time, end time, and number of entries to return on each page. If matched messages are found, the information about the dead-letter messages on the first page, total number of pages, and task ID are returned by default.
     *   *     2.  Specify the task ID and a page number to call this operation again to query the dead-letter messages on the specified page. In this query, the BeginTime, EndTime, and PageSize parameters do not take effect. By default, the system uses the values of these parameters that you specified in the request when you created the specified query task.
     *   *
     * @param OnsDLQMessagePageQueryByGroupIdRequest $request OnsDLQMessagePageQueryByGroupIdRequest
     *
     * @return OnsDLQMessagePageQueryByGroupIdResponse OnsDLQMessagePageQueryByGroupIdResponse
     */
    public function onsDLQMessagePageQueryByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsDLQMessagePageQueryByGroupIdWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   After the number of retries to send a message to a consumer group for consumption reaches the upper limit and the message is not consumed by a consumer in the group, the message is added to the dead-letter queue of the consumer group. The message is a dead-letter message. After you resend the dead-letter message to the consumer group for consumption and the message fails to be consumed again after the maximum number of retries, a dead-letter message with the same message ID is added to the dead-letter queue. You can view the details of the dead-letter message on the Dead-letter Queues page in the Message Queue for Apache RocketMQ console or by calling the API operations that are used to query dead-letter messages. You can obtain the number of consumption failures for a message based on the number of dead-letter messages with the same message ID in the dead-letter queue.
     *   * *   A dead-letter message is a message that fails to be consumed after the number of consumption retries reaches the upper limit. Generally, dead-letter messages are produced because of incorrect consumption logic. We recommend that you troubleshoot the consumption failures and then call this operation to send the message to the consumer group for consumption again.
     *   * *   Message Queue for Apache RocketMQ does not manage the status of dead-letter messages based on the consumption status of the dead-letter messages. After you call this operation to send a dead-letter message to a consumer group and the message is consumed, Message Queue for Apache RocketMQ does not remove the dead-letter message from the dead-letter queue. You must manage dead-letter messages and determine whether to send a dead-letter message to a consumer group for consumption. This way, you do not resend and reconsume the messages that are consumed.
     *   *
     * @param OnsDLQMessageResendByIdRequest $request OnsDLQMessageResendByIdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsDLQMessageResendByIdResponse OnsDLQMessageResendByIdResponse
     */
    public function onsDLQMessageResendByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsDLQMessageResendById',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsDLQMessageResendByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   After the number of retries to send a message to a consumer group for consumption reaches the upper limit and the message is not consumed by a consumer in the group, the message is added to the dead-letter queue of the consumer group. The message is a dead-letter message. After you resend the dead-letter message to the consumer group for consumption and the message fails to be consumed again after the maximum number of retries, a dead-letter message with the same message ID is added to the dead-letter queue. You can view the details of the dead-letter message on the Dead-letter Queues page in the Message Queue for Apache RocketMQ console or by calling the API operations that are used to query dead-letter messages. You can obtain the number of consumption failures for a message based on the number of dead-letter messages with the same message ID in the dead-letter queue.
     *   * *   A dead-letter message is a message that fails to be consumed after the number of consumption retries reaches the upper limit. Generally, dead-letter messages are produced because of incorrect consumption logic. We recommend that you troubleshoot the consumption failures and then call this operation to send the message to the consumer group for consumption again.
     *   * *   Message Queue for Apache RocketMQ does not manage the status of dead-letter messages based on the consumption status of the dead-letter messages. After you call this operation to send a dead-letter message to a consumer group and the message is consumed, Message Queue for Apache RocketMQ does not remove the dead-letter message from the dead-letter queue. You must manage dead-letter messages and determine whether to send a dead-letter message to a consumer group for consumption. This way, you do not resend and reconsume the messages that are consumed.
     *   *
     * @param OnsDLQMessageResendByIdRequest $request OnsDLQMessageResendByIdRequest
     *
     * @return OnsDLQMessageResendByIdResponse OnsDLQMessageResendByIdResponse
     */
    public function onsDLQMessageResendById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsDLQMessageResendByIdWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to configure the permissions for a consumer group to read messages based on a specified region of Message Queue for Apache RocketMQ and a specified group ID. You can call this operation in scenarios in which you want to forbid consumers in a specific group from reading messages.
     *   *
     * @param OnsGroupConsumerUpdateRequest $request OnsGroupConsumerUpdateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsGroupConsumerUpdateResponse OnsGroupConsumerUpdateResponse
     */
    public function onsGroupConsumerUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->readEnable)) {
            $query['ReadEnable'] = $request->readEnable;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsGroupConsumerUpdate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsGroupConsumerUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to configure the permissions for a consumer group to read messages based on a specified region of Message Queue for Apache RocketMQ and a specified group ID. You can call this operation in scenarios in which you want to forbid consumers in a specific group from reading messages.
     *   *
     * @param OnsGroupConsumerUpdateRequest $request OnsGroupConsumerUpdateRequest
     *
     * @return OnsGroupConsumerUpdateResponse OnsGroupConsumerUpdateResponse
     */
    public function onsGroupConsumerUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupConsumerUpdateWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you release a new application or implement new business logic, you need new consumer groups. You can call this operation to create a consumer group.
     *   *
     * @param OnsGroupCreateRequest $request OnsGroupCreateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsGroupCreateResponse OnsGroupCreateResponse
     */
    public function onsGroupCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsGroupCreate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsGroupCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you release a new application or implement new business logic, you need new consumer groups. You can call this operation to create a consumer group.
     *   *
     * @param OnsGroupCreateRequest $request OnsGroupCreateRequest
     *
     * @return OnsGroupCreateResponse OnsGroupCreateResponse
     */
    public function onsGroupCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupCreateWithOptions($request, $runtime);
    }

    /**
     * >
     *   * *   The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   After you delete a group, the consumers in the group immediately stop receiving messages. Exercise caution when you call this operation.
     *   * You can call this operation to delete a group when you need to deallocate the resources of the group. For example, after an application is brought offline, you can delete the groups that are used for the application. After you delete a group, the backend of Message Queue for Apache RocketMQ deallocates the resources of the group. The system requires a long period of time to deallocate the resources. We recommend that you do not create a group that uses the same name as a deleted group immediately after you delete the group. If the system fails to delete the specified group, troubleshoot the issue based on the error code.
     *   *
     * @param OnsGroupDeleteRequest $request OnsGroupDeleteRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsGroupDeleteResponse OnsGroupDeleteResponse
     */
    public function onsGroupDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsGroupDelete',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsGroupDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >
     *   * *   The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   After you delete a group, the consumers in the group immediately stop receiving messages. Exercise caution when you call this operation.
     *   * You can call this operation to delete a group when you need to deallocate the resources of the group. For example, after an application is brought offline, you can delete the groups that are used for the application. After you delete a group, the backend of Message Queue for Apache RocketMQ deallocates the resources of the group. The system requires a long period of time to deallocate the resources. We recommend that you do not create a group that uses the same name as a deleted group immediately after you delete the group. If the system fails to delete the specified group, troubleshoot the issue based on the error code.
     *   *
     * @param OnsGroupDeleteRequest $request OnsGroupDeleteRequest
     *
     * @return OnsGroupDeleteResponse OnsGroupDeleteResponse
     */
    public function onsGroupDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupDeleteWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param OnsGroupListRequest $request OnsGroupListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsGroupListResponse OnsGroupListResponse
     */
    public function onsGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsGroupList',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param OnsGroupListRequest $request OnsGroupListRequest
     *
     * @return OnsGroupListResponse OnsGroupListResponse
     */
    public function onsGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupListWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param OnsGroupSubDetailRequest $request OnsGroupSubDetailRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsGroupSubDetailResponse OnsGroupSubDetailResponse
     */
    public function onsGroupSubDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsGroupSubDetail',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsGroupSubDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param OnsGroupSubDetailRequest $request OnsGroupSubDetailRequest
     *
     * @return OnsGroupSubDetailResponse OnsGroupSubDetailResponse
     */
    public function onsGroupSubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupSubDetailWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * To send and receive messages, a client must be connected to a Message Queue for Apache RocketMQ instance by using an endpoint. You can call this operation to query the endpoints of the instance.
     *   *
     * @param OnsInstanceBaseInfoRequest $request OnsInstanceBaseInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsInstanceBaseInfoResponse OnsInstanceBaseInfoResponse
     */
    public function onsInstanceBaseInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsInstanceBaseInfo',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsInstanceBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * To send and receive messages, a client must be connected to a Message Queue for Apache RocketMQ instance by using an endpoint. You can call this operation to query the endpoints of the instance.
     *   *
     * @param OnsInstanceBaseInfoRequest $request OnsInstanceBaseInfoRequest
     *
     * @return OnsInstanceBaseInfoResponse OnsInstanceBaseInfoResponse
     */
    public function onsInstanceBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceBaseInfoWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * An instance is a virtual machine (VM) that can be used to store information about the topics and groups of Message Queue for Apache RocketMQ. You can call this operation when you need to create service resources for the business that you want to launch. Take note of the following points when you call this operation:
     *   * *   A maximum of eight Message Queue for Apache RocketMQ instances can be deployed in each region.
     *   * *   This operation can be called to create only a Standard Edition instance. You can use the Message Queue for Apache RocketMQ console to create Standard Edition instances and Enterprise Platinum Edition instances. For information about how to create Message Queue for Apache RocketMQ instances, see [Manage instances](~~200153~~).
     *   *
     * @param OnsInstanceCreateRequest $request OnsInstanceCreateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsInstanceCreateResponse OnsInstanceCreateResponse
     */
    public function onsInstanceCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsInstanceCreate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsInstanceCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * An instance is a virtual machine (VM) that can be used to store information about the topics and groups of Message Queue for Apache RocketMQ. You can call this operation when you need to create service resources for the business that you want to launch. Take note of the following points when you call this operation:
     *   * *   A maximum of eight Message Queue for Apache RocketMQ instances can be deployed in each region.
     *   * *   This operation can be called to create only a Standard Edition instance. You can use the Message Queue for Apache RocketMQ console to create Standard Edition instances and Enterprise Platinum Edition instances. For information about how to create Message Queue for Apache RocketMQ instances, see [Manage instances](~~200153~~).
     *   *
     * @param OnsInstanceCreateRequest $request OnsInstanceCreateRequest
     *
     * @return OnsInstanceCreateResponse OnsInstanceCreateResponse
     */
    public function onsInstanceCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceCreateWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   You can call this operation when you need to reclaim resources. For example, after you unpublish an application, you can reclaim the resources that were used for the application. An instance can be deleted only when the instance does not contain topics and groups.
     *   * *   After an instance is deleted, the instance cannot be recovered. Exercise caution when you call this operation.
     *   *
     * @param OnsInstanceDeleteRequest $request OnsInstanceDeleteRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsInstanceDeleteResponse OnsInstanceDeleteResponse
     */
    public function onsInstanceDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsInstanceDelete',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsInstanceDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   You can call this operation when you need to reclaim resources. For example, after you unpublish an application, you can reclaim the resources that were used for the application. An instance can be deleted only when the instance does not contain topics and groups.
     *   * *   After an instance is deleted, the instance cannot be recovered. Exercise caution when you call this operation.
     *   *
     * @param OnsInstanceDeleteRequest $request OnsInstanceDeleteRequest
     *
     * @return OnsInstanceDeleteResponse OnsInstanceDeleteResponse
     */
    public function onsInstanceDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceDeleteWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param OnsInstanceInServiceListRequest $request OnsInstanceInServiceListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsInstanceInServiceListResponse OnsInstanceInServiceListResponse
     */
    public function onsInstanceInServiceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsInstanceInServiceList',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsInstanceInServiceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param OnsInstanceInServiceListRequest $request OnsInstanceInServiceListRequest
     *
     * @return OnsInstanceInServiceListResponse OnsInstanceInServiceListResponse
     */
    public function onsInstanceInServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceInServiceListWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * A maximum of eight Message Queue for Apache RocketMQ instances can be deployed in each region.
     *   *
     * @param OnsInstanceUpdateRequest $request OnsInstanceUpdateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsInstanceUpdateResponse OnsInstanceUpdateResponse
     */
    public function onsInstanceUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsInstanceUpdate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsInstanceUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * A maximum of eight Message Queue for Apache RocketMQ instances can be deployed in each region.
     *   *
     * @param OnsInstanceUpdateRequest $request OnsInstanceUpdateRequest
     *
     * @return OnsInstanceUpdateResponse OnsInstanceUpdateResponse
     */
    public function onsInstanceUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceUpdateWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessageDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OnsMessageDetailResponse
     */
    public function onsMessageDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsMessageDetail',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsMessageDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OnsMessageDetailRequest $request
     *
     * @return OnsMessageDetailResponse
     */
    public function onsMessageDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageDetailWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   This operation uses the fuzzy match method to query messages based on a specified message key. The same message key may be used by multiple messages. Therefore, the returned result may contain the information about multiple messages.
     *   * *   This operation can be used in scenarios in which you cannot obtain the IDs of the messages that you want to query. You can perform the following steps to query the information about messages:
     *   *     1.  Call this operation to query message IDs.
     *   *     2.  Call the **OnsMessageGetByMsgId** operation to query the details of a specified message. The OnsMessageGetByMsgId operation uses the exact match method. For more information about the **OnsMessageGetByMsgId** operation, see [OnsMessageGetByMsgId](~~29607~~).
     *   *
     * @param OnsMessageGetByKeyRequest $request OnsMessageGetByKeyRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsMessageGetByKeyResponse OnsMessageGetByKeyResponse
     */
    public function onsMessageGetByKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsMessageGetByKey',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsMessageGetByKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   This operation uses the fuzzy match method to query messages based on a specified message key. The same message key may be used by multiple messages. Therefore, the returned result may contain the information about multiple messages.
     *   * *   This operation can be used in scenarios in which you cannot obtain the IDs of the messages that you want to query. You can perform the following steps to query the information about messages:
     *   *     1.  Call this operation to query message IDs.
     *   *     2.  Call the **OnsMessageGetByMsgId** operation to query the details of a specified message. The OnsMessageGetByMsgId operation uses the exact match method. For more information about the **OnsMessageGetByMsgId** operation, see [OnsMessageGetByMsgId](~~29607~~).
     *   *
     * @param OnsMessageGetByKeyRequest $request OnsMessageGetByKeyRequest
     *
     * @return OnsMessageGetByKeyResponse OnsMessageGetByKeyResponse
     */
    public function onsMessageGetByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageGetByKeyWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   If a message is not consumed as expected, you can call this operation to query the information about the message for troubleshooting.
     *   * *   This operation uses the exact match method to query a message based on the message ID. You can obtain the message ID from the SendResult parameter that is returned after the message is sent. You must store the returned information after each message is sent. The queried information about a message includes the point in time when the message was sent, the broker on which the message is stored, and the attributes of the message such as the message key and tag.
     *   *
     * @param OnsMessageGetByMsgIdRequest $request OnsMessageGetByMsgIdRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsMessageGetByMsgIdResponse OnsMessageGetByMsgIdResponse
     */
    public function onsMessageGetByMsgIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsMessageGetByMsgId',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsMessageGetByMsgIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   If a message is not consumed as expected, you can call this operation to query the information about the message for troubleshooting.
     *   * *   This operation uses the exact match method to query a message based on the message ID. You can obtain the message ID from the SendResult parameter that is returned after the message is sent. You must store the returned information after each message is sent. The queried information about a message includes the point in time when the message was sent, the broker on which the message is stored, and the attributes of the message such as the message key and tag.
     *   *
     * @param OnsMessageGetByMsgIdRequest $request OnsMessageGetByMsgIdRequest
     *
     * @return OnsMessageGetByMsgIdResponse OnsMessageGetByMsgIdResponse
     */
    public function onsMessageGetByMsgId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageGetByMsgIdWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   If you do not know the message ID or message key of a message that you want to query, you can call this operation to query all messages that are stored in a topic within a specified time range. The results are displayed by page.
     *   * *   We recommend that you specify a short time range to query messages. If you specify a long time range, a large number of messages are returned. In this case, you cannot find the message that you want to query in an efficient manner. You can perform the following steps to query messages:
     *   *     1.  Perform a paged query by specifying the topic, start time, end time, and number of entries to return on each page. If the topic contains messages, the information about the messages on the first page, total number of pages, and task ID are returned by default.
     *   *     2.  Specify the task ID and a page number to call this operation again to query the messages on the specified page. In this query, the BeginTime, EndTime, and PageSize parameters do not take effect. By default, the system uses the values of these parameters that you specified in the request when you created the specified query task.
     *   *
     * @param OnsMessagePageQueryByTopicRequest $request OnsMessagePageQueryByTopicRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsMessagePageQueryByTopicResponse OnsMessagePageQueryByTopicResponse
     */
    public function onsMessagePageQueryByTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsMessagePageQueryByTopic',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsMessagePageQueryByTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   If you do not know the message ID or message key of a message that you want to query, you can call this operation to query all messages that are stored in a topic within a specified time range. The results are displayed by page.
     *   * *   We recommend that you specify a short time range to query messages. If you specify a long time range, a large number of messages are returned. In this case, you cannot find the message that you want to query in an efficient manner. You can perform the following steps to query messages:
     *   *     1.  Perform a paged query by specifying the topic, start time, end time, and number of entries to return on each page. If the topic contains messages, the information about the messages on the first page, total number of pages, and task ID are returned by default.
     *   *     2.  Specify the task ID and a page number to call this operation again to query the messages on the specified page. In this query, the BeginTime, EndTime, and PageSize parameters do not take effect. By default, the system uses the values of these parameters that you specified in the request when you created the specified query task.
     *   *
     * @param OnsMessagePageQueryByTopicRequest $request OnsMessagePageQueryByTopicRequest
     *
     * @return OnsMessagePageQueryByTopicResponse OnsMessagePageQueryByTopicResponse
     */
    public function onsMessagePageQueryByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessagePageQueryByTopicWithOptions($request, $runtime);
    }

    /**
     * ## Note
     *   * This operation can be used to check whether messages in a specified topic can be consumed by consumers in a specified consumer group. This operation obtains the body of the message that is specified by the MsgId parameter, re-encapsulates the message body to produce a new message, and then pushes the new message to a specified consumer. The content of the message that is sent to the consumer is the same as the content of the original message. They are not the same message because they use different message IDs.
     *   *
     * @param OnsMessagePushRequest $request OnsMessagePushRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsMessagePushResponse OnsMessagePushResponse
     */
    public function onsMessagePushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsMessagePush',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsMessagePushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Note
     *   * This operation can be used to check whether messages in a specified topic can be consumed by consumers in a specified consumer group. This operation obtains the body of the message that is specified by the MsgId parameter, re-encapsulates the message body to produce a new message, and then pushes the new message to a specified consumer. The content of the message that is sent to the consumer is the same as the content of the original message. They are not the same message because they use different message IDs.
     *   *
     * @param OnsMessagePushRequest $request OnsMessagePushRequest
     *
     * @return OnsMessagePushResponse OnsMessagePushResponse
     */
    public function onsMessagePush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessagePushWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   You can call this operation to check whether a specified message is consumed. If the message is not consumed, you can troubleshoot the issue based on the returned information.
     *   * *   This operation queries information based on the built-in offset mechanism of Message Queue for Apache RocketMQ. In most cases, the results are correct. If you have reset the consumer offset or cleared accumulated messages, the results may not be correct.
     *   *
     * @param OnsMessageTraceRequest $request OnsMessageTraceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsMessageTraceResponse OnsMessageTraceResponse
     */
    public function onsMessageTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsMessageTrace',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsMessageTraceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * *   You can call this operation to check whether a specified message is consumed. If the message is not consumed, you can troubleshoot the issue based on the returned information.
     *   * *   This operation queries information based on the built-in offset mechanism of Message Queue for Apache RocketMQ. In most cases, the results are correct. If you have reset the consumer offset or cleared accumulated messages, the results may not be correct.
     *   *
     * @param OnsMessageTraceRequest $request OnsMessageTraceRequest
     *
     * @return OnsMessageTraceResponse OnsMessageTraceResponse
     */
    public function onsMessageTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageTraceWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you use an SDK to access and manage a Message Queue for Apache RocketMQ instance, you must sequentially specify the information about two regions. You can query the information about the second region by calling the \\*\\*OnsRegionList\\*\\* operation. You must apply for a public endpoint in the following scenarios:
     *   * *   Connect your application to Message Queue for Apache RocketMQ: Select the nearest API gateway endpoint based on the region where your application is deployed, and enter the corresponding **region ID**. The **regionId** is used to access Alibaba Cloud API Gateway because Message Queue for Apache RocketMQ instances provide API services by using the OpenAPI Explorer platform, which is also called POP.
     *   * *   Access a region to manage its resources: Specify a region where you want to manage Message Queue for Apache RocketMQ resources and enter the region ID. You can query the region ID by calling the **OnsRegionList** operation.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsRegionListResponse OnsRegionListResponse
     */
    public function onsRegionListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OnsRegionList',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsRegionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you use an SDK to access and manage a Message Queue for Apache RocketMQ instance, you must sequentially specify the information about two regions. You can query the information about the second region by calling the \\*\\*OnsRegionList\\*\\* operation. You must apply for a public endpoint in the following scenarios:
     *   * *   Connect your application to Message Queue for Apache RocketMQ: Select the nearest API gateway endpoint based on the region where your application is deployed, and enter the corresponding **region ID**. The **regionId** is used to access Alibaba Cloud API Gateway because Message Queue for Apache RocketMQ instances provide API services by using the OpenAPI Explorer platform, which is also called POP.
     *   * *   Access a region to manage its resources: Specify a region where you want to manage Message Queue for Apache RocketMQ resources and enter the region ID. You can query the region ID by calling the **OnsRegionList** operation.
     *   *
     * @return OnsRegionListResponse OnsRegionListResponse
     */
    public function onsRegionList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsRegionListWithOptions($runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you want to release a new application or expand your business, you can call this operation to create a topic based on your business requirements.
     *   *
     * @param OnsTopicCreateRequest $request OnsTopicCreateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTopicCreateResponse OnsTopicCreateResponse
     */
    public function onsTopicCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->messageType)) {
            $query['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTopicCreate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTopicCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * When you want to release a new application or expand your business, you can call this operation to create a topic based on your business requirements.
     *   *
     * @param OnsTopicCreateRequest $request OnsTopicCreateRequest
     *
     * @return OnsTopicCreateResponse OnsTopicCreateResponse
     */
    public function onsTopicCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicCreateWithOptions($request, $runtime);
    }

    /**
     * >  The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur. - After you delete the topic, the publishing and subscription relationships that are constructed based on the topic are cleared. Exercise caution when you call this operation.
     *   * You can call this operation to delete a topic when you need to reclaim the resources from the topic. For example, after an application is brought offline, you can delete the topics that are used for the application. After you delete a topic, the backend of Message Queue for Apache RocketMQ reclaims the resources from the topic. The system requires a long period of time to reclaim the resources. After you delete a topic, we recommend that you do not create a topic that uses the same name as the deleted topic within a short period of time. If the system fails to delete the specified topic, troubleshoot the issue based on the error code.
     *   *
     * @param OnsTopicDeleteRequest $request OnsTopicDeleteRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTopicDeleteResponse OnsTopicDeleteResponse
     */
    public function onsTopicDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTopicDelete',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTopicDeleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * >  The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur. - After you delete the topic, the publishing and subscription relationships that are constructed based on the topic are cleared. Exercise caution when you call this operation.
     *   * You can call this operation to delete a topic when you need to reclaim the resources from the topic. For example, after an application is brought offline, you can delete the topics that are used for the application. After you delete a topic, the backend of Message Queue for Apache RocketMQ reclaims the resources from the topic. The system requires a long period of time to reclaim the resources. After you delete a topic, we recommend that you do not create a topic that uses the same name as the deleted topic within a short period of time. If the system fails to delete the specified topic, troubleshoot the issue based on the error code.
     *   *
     * @param OnsTopicDeleteRequest $request OnsTopicDeleteRequest
     *
     * @return OnsTopicDeleteResponse OnsTopicDeleteResponse
     */
    public function onsTopicDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicDeleteWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * This operation returns the basic information about topics and does not return the details of topics.
     *   *
     * @param OnsTopicListRequest $request OnsTopicListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTopicListResponse OnsTopicListResponse
     */
    public function onsTopicListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTopicList',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTopicListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * This operation returns the basic information about topics and does not return the details of topics.
     *   *
     * @param OnsTopicListRequest $request OnsTopicListRequest
     *
     * @return OnsTopicListResponse OnsTopicListResponse
     */
    public function onsTopicList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicListWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can determine the resource usage of a topic based on the information that is returned by this operation. The returned information includes the total number of messages in the topic and the most recent point in time when a message was published to the topic.
     *   *
     * @param OnsTopicStatusRequest $request OnsTopicStatusRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTopicStatusResponse OnsTopicStatusResponse
     */
    public function onsTopicStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTopicStatus',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTopicStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can determine the resource usage of a topic based on the information that is returned by this operation. The returned information includes the total number of messages in the topic and the most recent point in time when a message was published to the topic.
     *   *
     * @param OnsTopicStatusRequest $request OnsTopicStatusRequest
     *
     * @return OnsTopicStatusResponse OnsTopicStatusResponse
     */
    public function onsTopicStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicStatusWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to query the online consumer groups that subscribe to a specified topic. If all consumers in a group are offline, the information about the group is not returned.
     *   *
     * @param OnsTopicSubDetailRequest $request OnsTopicSubDetailRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTopicSubDetailResponse OnsTopicSubDetailResponse
     */
    public function onsTopicSubDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTopicSubDetail',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTopicSubDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to query the online consumer groups that subscribe to a specified topic. If all consumers in a group are offline, the information about the group is not returned.
     *   *
     * @param OnsTopicSubDetailRequest $request OnsTopicSubDetailRequest
     *
     * @return OnsTopicSubDetailResponse OnsTopicSubDetailResponse
     */
    public function onsTopicSubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicSubDetailWithOptions($request, $runtime);
    }

    /**
     * @deprecated
     *   * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise system risks may occur.
     *   * You can call this operation to forbid read or write operations on a specific topic.
     *   *
     * Deprecated
     *
     * @param OnsTopicUpdateRequest $request OnsTopicUpdateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTopicUpdateResponse OnsTopicUpdateResponse
     */
    public function onsTopicUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->perm)) {
            $query['Perm'] = $request->perm;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTopicUpdate',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTopicUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated
     *   * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise system risks may occur.
     *   * You can call this operation to forbid read or write operations on a specific topic.
     *   *
     * Deprecated
     *
     * @param OnsTopicUpdateRequest $request OnsTopicUpdateRequest
     *
     * @return OnsTopicUpdateResponse OnsTopicUpdateResponse
     */
    public function onsTopicUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicUpdateWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   Before you call this operation to query the details of the trace of a message, you must create a task to query the trace of the message based on the message ID or message key and obtains the task ID. Then, you can call this operation to query the details of the message trace based on the task ID. You can call the [OnsTraceQueryByMsgId](~~59830~~) operation or the [OnsTraceQueryByMsgKey](~~59831~~) operation to create a task to query the trace of the message and obtain the task ID from the **QueryId** response parameter.
     *   * *   A trace query task is time-consuming. If you call this operation to query the details immediately after you create a trace query task, the results may be empty. In this case, we recommend that you try again later.
     *   *
     * @param OnsTraceGetResultRequest $request OnsTraceGetResultRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTraceGetResultResponse OnsTraceGetResultResponse
     */
    public function onsTraceGetResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTraceGetResult',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTraceGetResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   Before you call this operation to query the details of the trace of a message, you must create a task to query the trace of the message based on the message ID or message key and obtains the task ID. Then, you can call this operation to query the details of the message trace based on the task ID. You can call the [OnsTraceQueryByMsgId](~~59830~~) operation or the [OnsTraceQueryByMsgKey](~~59831~~) operation to create a task to query the trace of the message and obtain the task ID from the **QueryId** response parameter.
     *   * *   A trace query task is time-consuming. If you call this operation to query the details immediately after you create a trace query task, the results may be empty. In this case, we recommend that you try again later.
     *   *
     * @param OnsTraceGetResultRequest $request OnsTraceGetResultRequest
     *
     * @return OnsTraceGetResultResponse OnsTraceGetResultResponse
     */
    public function onsTraceGetResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTraceGetResultWithOptions($request, $runtime);
    }

    /**
     * ## Note
     *   * If you want to query the trace of a message based on the message ID, you can call this operation to create a query task. After you obtain the task ID, you can call the [OnsTraceGetResult](~~59832~~) operation to query the details of the message trace based on the task ID.
     *   *
     * @param OnsTraceQueryByMsgIdRequest $request OnsTraceQueryByMsgIdRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTraceQueryByMsgIdResponse OnsTraceQueryByMsgIdResponse
     */
    public function onsTraceQueryByMsgIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTraceQueryByMsgId',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTraceQueryByMsgIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Note
     *   * If you want to query the trace of a message based on the message ID, you can call this operation to create a query task. After you obtain the task ID, you can call the [OnsTraceGetResult](~~59832~~) operation to query the details of the message trace based on the task ID.
     *   *
     * @param OnsTraceQueryByMsgIdRequest $request OnsTraceQueryByMsgIdRequest
     *
     * @return OnsTraceQueryByMsgIdResponse OnsTraceQueryByMsgIdResponse
     */
    public function onsTraceQueryByMsgId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTraceQueryByMsgIdWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * If you obtain the key of a message and want to query the trace of the message, you can call this operation to create a query task. After you obtain the task ID, you can call the OnsTraceGetResult operation to query the details of the message trace based on the task ID.
     *   *
     * @param OnsTraceQueryByMsgKeyRequest $request OnsTraceQueryByMsgKeyRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTraceQueryByMsgKeyResponse OnsTraceQueryByMsgKeyResponse
     */
    public function onsTraceQueryByMsgKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->msgKey)) {
            $query['MsgKey'] = $request->msgKey;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTraceQueryByMsgKey',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTraceQueryByMsgKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * If you obtain the key of a message and want to query the trace of the message, you can call this operation to create a query task. After you obtain the task ID, you can call the OnsTraceGetResult operation to query the details of the message trace based on the task ID.
     *   *
     * @param OnsTraceQueryByMsgKeyRequest $request OnsTraceQueryByMsgKeyRequest
     *
     * @return OnsTraceQueryByMsgKeyResponse OnsTraceQueryByMsgKeyResponse
     */
    public function onsTraceQueryByMsgKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTraceQueryByMsgKeyWithOptions($request, $runtime);
    }

    /**
     * ## Note
     *   * You can call this operation to query the following statistics that are collected in the production environment:
     *   * *   The number of messages that are consumed during each sampling period
     *   * *   The transactions per second (TPS) for message consumption during each sampling period
     *   * >  If your application publishes a small number of messages and does not publish messages at a specific interval, we recommend that you query the number of messages that are consumed during each sampling period because the statistics of TPS may not show a clear change trend.
     *   *
     * @param OnsTrendGroupOutputTpsRequest $request OnsTrendGroupOutputTpsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTrendGroupOutputTpsResponse OnsTrendGroupOutputTpsResponse
     */
    public function onsTrendGroupOutputTpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTrendGroupOutputTps',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTrendGroupOutputTpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Note
     *   * You can call this operation to query the following statistics that are collected in the production environment:
     *   * *   The number of messages that are consumed during each sampling period
     *   * *   The transactions per second (TPS) for message consumption during each sampling period
     *   * >  If your application publishes a small number of messages and does not publish messages at a specific interval, we recommend that you query the number of messages that are consumed during each sampling period because the statistics of TPS may not show a clear change trend.
     *   *
     * @param OnsTrendGroupOutputTpsRequest $request OnsTrendGroupOutputTpsRequest
     *
     * @return OnsTrendGroupOutputTpsResponse OnsTrendGroupOutputTpsResponse
     */
    public function onsTrendGroupOutputTps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTrendGroupOutputTpsWithOptions($request, $runtime);
    }

    /**
     * ## Note
     *   * You can call this operation to query the statistics of messages that are published to a specified topic in the production environment. You can obtain the number of messages that are published to the topic or the transactions per second (TPS) for message publishing during each sampling period within a specified time range.
     *   * >  If your application publishes a small number of messages and does not publish messages at a specific interval, we recommend that you query the number of messages that are published to the topic during each sampling period because the statistics of TPS may not show a clear change trend.
     *   *
     * @param OnsTrendTopicInputTpsRequest $request OnsTrendTopicInputTpsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return OnsTrendTopicInputTpsResponse OnsTrendTopicInputTpsResponse
     */
    public function onsTrendTopicInputTpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['Topic'] = $request->topic;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OnsTrendTopicInputTps',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OnsTrendTopicInputTpsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Note
     *   * You can call this operation to query the statistics of messages that are published to a specified topic in the production environment. You can obtain the number of messages that are published to the topic or the transactions per second (TPS) for message publishing during each sampling period within a specified time range.
     *   * >  If your application publishes a small number of messages and does not publish messages at a specific interval, we recommend that you query the number of messages that are published to the topic during each sampling period because the statistics of TPS may not show a clear change trend.
     *   *
     * @param OnsTrendTopicInputTpsRequest $request OnsTrendTopicInputTpsRequest
     *
     * @return OnsTrendTopicInputTpsResponse OnsTrendTopicInputTpsResponse
     */
    public function onsTrendTopicInputTps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTrendTopicInputTpsWithOptions($request, $runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation when you use Message Queue for Apache RocketMQ for the first time. You can use Message Queue for Apache RocketMQ only after this service is activated.
     *   * The Message Queue for Apache RocketMQ service can be activated only in the China (Hangzhou) region. Service activation is not billed.
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenOnsServiceResponse OpenOnsServiceResponse
     */
    public function openOnsServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenOnsService',
            'version'     => '2019-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenOnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation when you use Message Queue for Apache RocketMQ for the first time. You can use Message Queue for Apache RocketMQ only after this service is activated.
     *   * The Message Queue for Apache RocketMQ service can be activated only in the China (Hangzhou) region. Service activation is not billed.
     *   *
     * @return OpenOnsServiceResponse OpenOnsServiceResponse
     */
    public function openOnsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openOnsServiceWithOptions($runtime);
    }

    /**
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to attach tags to a source. You can use tags to classify resources in Message Queue for Apache RocketMQ. This can help you aggregate and search resources in an efficient manner.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2019-02-14',
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
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   * You can call this operation to attach tags to a source. You can use tags to classify resources in Message Queue for Apache RocketMQ. This can help you aggregate and search resources in an efficient manner.
     *   *
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
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
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
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2019-02-14',
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
     * > : The API operations that are provided by Alibaba Cloud are used to manage and query resources of Alibaba Cloud services. We recommend that you integrate these API operations only in management systems. Do not use these API operations in the core system of messaging services. Otherwise, system risks may occur.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
