<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByKeyResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByMsgIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByMsgIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePushRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePushResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageSendRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageSendResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageTraceResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdCreateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdCreateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdDeleteRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdDeleteResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdListRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttGroupIdListResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByClientIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByGroupIdRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByGroupIdResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByTopicRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryClientByTopicResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryHistoryOnlineRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryHistoryOnlineResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryMsgTransTrendRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMqttQueryMsgTransTrendResponse;
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
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsWarnCreateRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsWarnCreateResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsWarnDeleteRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsWarnDeleteResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\OpenOnsServiceResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ons\V20190214\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ons\V20190214\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param OnsConsumerAccumulateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OnsConsumerAccumulateResponse
     */
    public function onsConsumerAccumulateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsConsumerAccumulateResponse::fromMap($this->doRPCRequest('OnsConsumerAccumulate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsConsumerAccumulateRequest $request
     *
     * @return OnsConsumerAccumulateResponse
     */
    public function onsConsumerAccumulate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerAccumulateWithOptions($request, $runtime);
    }

    /**
     * @param OnsConsumerGetConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OnsConsumerGetConnectionResponse
     */
    public function onsConsumerGetConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsConsumerGetConnectionResponse::fromMap($this->doRPCRequest('OnsConsumerGetConnection', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsConsumerGetConnectionRequest $request
     *
     * @return OnsConsumerGetConnectionResponse
     */
    public function onsConsumerGetConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerGetConnectionWithOptions($request, $runtime);
    }

    /**
     * @param OnsConsumerResetOffsetRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OnsConsumerResetOffsetResponse
     */
    public function onsConsumerResetOffsetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsConsumerResetOffsetResponse::fromMap($this->doRPCRequest('OnsConsumerResetOffset', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsConsumerResetOffsetRequest $request
     *
     * @return OnsConsumerResetOffsetResponse
     */
    public function onsConsumerResetOffset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerResetOffsetWithOptions($request, $runtime);
    }

    /**
     * @param OnsConsumerStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsConsumerStatusResponse
     */
    public function onsConsumerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsConsumerStatusResponse::fromMap($this->doRPCRequest('OnsConsumerStatus', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsConsumerStatusRequest $request
     *
     * @return OnsConsumerStatusResponse
     */
    public function onsConsumerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerStatusWithOptions($request, $runtime);
    }

    /**
     * @param OnsConsumerTimeSpanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OnsConsumerTimeSpanResponse
     */
    public function onsConsumerTimeSpanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsConsumerTimeSpanResponse::fromMap($this->doRPCRequest('OnsConsumerTimeSpan', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsConsumerTimeSpanRequest $request
     *
     * @return OnsConsumerTimeSpanResponse
     */
    public function onsConsumerTimeSpan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsConsumerTimeSpanWithOptions($request, $runtime);
    }

    /**
     * @param OnsDLQMessageGetByIdRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OnsDLQMessageGetByIdResponse
     */
    public function onsDLQMessageGetByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsDLQMessageGetByIdResponse::fromMap($this->doRPCRequest('OnsDLQMessageGetById', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsDLQMessageGetByIdRequest $request
     *
     * @return OnsDLQMessageGetByIdResponse
     */
    public function onsDLQMessageGetById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsDLQMessageGetByIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsDLQMessagePageQueryByGroupIdRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return OnsDLQMessagePageQueryByGroupIdResponse
     */
    public function onsDLQMessagePageQueryByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsDLQMessagePageQueryByGroupIdResponse::fromMap($this->doRPCRequest('OnsDLQMessagePageQueryByGroupId', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsDLQMessagePageQueryByGroupIdRequest $request
     *
     * @return OnsDLQMessagePageQueryByGroupIdResponse
     */
    public function onsDLQMessagePageQueryByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsDLQMessagePageQueryByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsDLQMessageResendByIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OnsDLQMessageResendByIdResponse
     */
    public function onsDLQMessageResendByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsDLQMessageResendByIdResponse::fromMap($this->doRPCRequest('OnsDLQMessageResendById', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsDLQMessageResendByIdRequest $request
     *
     * @return OnsDLQMessageResendByIdResponse
     */
    public function onsDLQMessageResendById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsDLQMessageResendByIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsGroupConsumerUpdateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OnsGroupConsumerUpdateResponse
     */
    public function onsGroupConsumerUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsGroupConsumerUpdateResponse::fromMap($this->doRPCRequest('OnsGroupConsumerUpdate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsGroupConsumerUpdateRequest $request
     *
     * @return OnsGroupConsumerUpdateResponse
     */
    public function onsGroupConsumerUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupConsumerUpdateWithOptions($request, $runtime);
    }

    /**
     * @param OnsGroupCreateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsGroupCreateResponse
     */
    public function onsGroupCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsGroupCreateResponse::fromMap($this->doRPCRequest('OnsGroupCreate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsGroupCreateRequest $request
     *
     * @return OnsGroupCreateResponse
     */
    public function onsGroupCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupCreateWithOptions($request, $runtime);
    }

    /**
     * @param OnsGroupDeleteRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsGroupDeleteResponse
     */
    public function onsGroupDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsGroupDeleteResponse::fromMap($this->doRPCRequest('OnsGroupDelete', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsGroupDeleteRequest $request
     *
     * @return OnsGroupDeleteResponse
     */
    public function onsGroupDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupDeleteWithOptions($request, $runtime);
    }

    /**
     * @param OnsGroupListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OnsGroupListResponse
     */
    public function onsGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsGroupListResponse::fromMap($this->doRPCRequest('OnsGroupList', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsGroupListRequest $request
     *
     * @return OnsGroupListResponse
     */
    public function onsGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupListWithOptions($request, $runtime);
    }

    /**
     * @param OnsGroupSubDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsGroupSubDetailResponse
     */
    public function onsGroupSubDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsGroupSubDetailResponse::fromMap($this->doRPCRequest('OnsGroupSubDetail', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsGroupSubDetailRequest $request
     *
     * @return OnsGroupSubDetailResponse
     */
    public function onsGroupSubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsGroupSubDetailWithOptions($request, $runtime);
    }

    /**
     * @param OnsInstanceBaseInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return OnsInstanceBaseInfoResponse
     */
    public function onsInstanceBaseInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsInstanceBaseInfoResponse::fromMap($this->doRPCRequest('OnsInstanceBaseInfo', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsInstanceBaseInfoRequest $request
     *
     * @return OnsInstanceBaseInfoResponse
     */
    public function onsInstanceBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceBaseInfoWithOptions($request, $runtime);
    }

    /**
     * @param OnsInstanceCreateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsInstanceCreateResponse
     */
    public function onsInstanceCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsInstanceCreateResponse::fromMap($this->doRPCRequest('OnsInstanceCreate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsInstanceCreateRequest $request
     *
     * @return OnsInstanceCreateResponse
     */
    public function onsInstanceCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceCreateWithOptions($request, $runtime);
    }

    /**
     * @param OnsInstanceDeleteRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsInstanceDeleteResponse
     */
    public function onsInstanceDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsInstanceDeleteResponse::fromMap($this->doRPCRequest('OnsInstanceDelete', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsInstanceDeleteRequest $request
     *
     * @return OnsInstanceDeleteResponse
     */
    public function onsInstanceDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceDeleteWithOptions($request, $runtime);
    }

    /**
     * @param OnsInstanceInServiceListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return OnsInstanceInServiceListResponse
     */
    public function onsInstanceInServiceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsInstanceInServiceListResponse::fromMap($this->doRPCRequest('OnsInstanceInServiceList', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsInstanceInServiceListRequest $request
     *
     * @return OnsInstanceInServiceListResponse
     */
    public function onsInstanceInServiceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceInServiceListWithOptions($request, $runtime);
    }

    /**
     * @param OnsInstanceUpdateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsInstanceUpdateResponse
     */
    public function onsInstanceUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsInstanceUpdateResponse::fromMap($this->doRPCRequest('OnsInstanceUpdate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsInstanceUpdateRequest $request
     *
     * @return OnsInstanceUpdateResponse
     */
    public function onsInstanceUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsInstanceUpdateWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessageGetByKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OnsMessageGetByKeyResponse
     */
    public function onsMessageGetByKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMessageGetByKeyResponse::fromMap($this->doRPCRequest('OnsMessageGetByKey', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMessageGetByKeyRequest $request
     *
     * @return OnsMessageGetByKeyResponse
     */
    public function onsMessageGetByKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageGetByKeyWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessageGetByMsgIdRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OnsMessageGetByMsgIdResponse
     */
    public function onsMessageGetByMsgIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMessageGetByMsgIdResponse::fromMap($this->doRPCRequest('OnsMessageGetByMsgId', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMessageGetByMsgIdRequest $request
     *
     * @return OnsMessageGetByMsgIdResponse
     */
    public function onsMessageGetByMsgId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageGetByMsgIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessagePageQueryByTopicRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return OnsMessagePageQueryByTopicResponse
     */
    public function onsMessagePageQueryByTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMessagePageQueryByTopicResponse::fromMap($this->doRPCRequest('OnsMessagePageQueryByTopic', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMessagePageQueryByTopicRequest $request
     *
     * @return OnsMessagePageQueryByTopicResponse
     */
    public function onsMessagePageQueryByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessagePageQueryByTopicWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessagePushRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsMessagePushResponse
     */
    public function onsMessagePushWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMessagePushResponse::fromMap($this->doRPCRequest('OnsMessagePush', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMessagePushRequest $request
     *
     * @return OnsMessagePushResponse
     */
    public function onsMessagePush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessagePushWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessageSendRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsMessageSendResponse
     */
    public function onsMessageSendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMessageSendResponse::fromMap($this->doRPCRequest('OnsMessageSend', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMessageSendRequest $request
     *
     * @return OnsMessageSendResponse
     */
    public function onsMessageSend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageSendWithOptions($request, $runtime);
    }

    /**
     * @param OnsMessageTraceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OnsMessageTraceResponse
     */
    public function onsMessageTraceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMessageTraceResponse::fromMap($this->doRPCRequest('OnsMessageTrace', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMessageTraceRequest $request
     *
     * @return OnsMessageTraceResponse
     */
    public function onsMessageTrace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMessageTraceWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttGroupIdCreateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OnsMqttGroupIdCreateResponse
     */
    public function onsMqttGroupIdCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttGroupIdCreateResponse::fromMap($this->doRPCRequest('OnsMqttGroupIdCreate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttGroupIdCreateRequest $request
     *
     * @return OnsMqttGroupIdCreateResponse
     */
    public function onsMqttGroupIdCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttGroupIdCreateWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttGroupIdDeleteRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OnsMqttGroupIdDeleteResponse
     */
    public function onsMqttGroupIdDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttGroupIdDeleteResponse::fromMap($this->doRPCRequest('OnsMqttGroupIdDelete', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttGroupIdDeleteRequest $request
     *
     * @return OnsMqttGroupIdDeleteResponse
     */
    public function onsMqttGroupIdDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttGroupIdDeleteWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttGroupIdListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OnsMqttGroupIdListResponse
     */
    public function onsMqttGroupIdListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttGroupIdListResponse::fromMap($this->doRPCRequest('OnsMqttGroupIdList', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttGroupIdListRequest $request
     *
     * @return OnsMqttGroupIdListResponse
     */
    public function onsMqttGroupIdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttGroupIdListWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttQueryClientByClientIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OnsMqttQueryClientByClientIdResponse
     */
    public function onsMqttQueryClientByClientIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttQueryClientByClientIdResponse::fromMap($this->doRPCRequest('OnsMqttQueryClientByClientId', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttQueryClientByClientIdRequest $request
     *
     * @return OnsMqttQueryClientByClientIdResponse
     */
    public function onsMqttQueryClientByClientId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttQueryClientByClientIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttQueryClientByGroupIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return OnsMqttQueryClientByGroupIdResponse
     */
    public function onsMqttQueryClientByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttQueryClientByGroupIdResponse::fromMap($this->doRPCRequest('OnsMqttQueryClientByGroupId', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttQueryClientByGroupIdRequest $request
     *
     * @return OnsMqttQueryClientByGroupIdResponse
     */
    public function onsMqttQueryClientByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttQueryClientByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttQueryClientByTopicRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OnsMqttQueryClientByTopicResponse
     */
    public function onsMqttQueryClientByTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttQueryClientByTopicResponse::fromMap($this->doRPCRequest('OnsMqttQueryClientByTopic', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttQueryClientByTopicRequest $request
     *
     * @return OnsMqttQueryClientByTopicResponse
     */
    public function onsMqttQueryClientByTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttQueryClientByTopicWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttQueryHistoryOnlineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OnsMqttQueryHistoryOnlineResponse
     */
    public function onsMqttQueryHistoryOnlineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttQueryHistoryOnlineResponse::fromMap($this->doRPCRequest('OnsMqttQueryHistoryOnline', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttQueryHistoryOnlineRequest $request
     *
     * @return OnsMqttQueryHistoryOnlineResponse
     */
    public function onsMqttQueryHistoryOnline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttQueryHistoryOnlineWithOptions($request, $runtime);
    }

    /**
     * @param OnsMqttQueryMsgTransTrendRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return OnsMqttQueryMsgTransTrendResponse
     */
    public function onsMqttQueryMsgTransTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsMqttQueryMsgTransTrendResponse::fromMap($this->doRPCRequest('OnsMqttQueryMsgTransTrend', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsMqttQueryMsgTransTrendRequest $request
     *
     * @return OnsMqttQueryMsgTransTrendResponse
     */
    public function onsMqttQueryMsgTransTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsMqttQueryMsgTransTrendWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OnsRegionListResponse
     */
    public function onsRegionListWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return OnsRegionListResponse::fromMap($this->doRPCRequest('OnsRegionList', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return OnsRegionListResponse
     */
    public function onsRegionList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsRegionListWithOptions($runtime);
    }

    /**
     * @param OnsTopicCreateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsTopicCreateResponse
     */
    public function onsTopicCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTopicCreateResponse::fromMap($this->doRPCRequest('OnsTopicCreate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTopicCreateRequest $request
     *
     * @return OnsTopicCreateResponse
     */
    public function onsTopicCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicCreateWithOptions($request, $runtime);
    }

    /**
     * @param OnsTopicDeleteRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsTopicDeleteResponse
     */
    public function onsTopicDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTopicDeleteResponse::fromMap($this->doRPCRequest('OnsTopicDelete', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTopicDeleteRequest $request
     *
     * @return OnsTopicDeleteResponse
     */
    public function onsTopicDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicDeleteWithOptions($request, $runtime);
    }

    /**
     * @param OnsTopicListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OnsTopicListResponse
     */
    public function onsTopicListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTopicListResponse::fromMap($this->doRPCRequest('OnsTopicList', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTopicListRequest $request
     *
     * @return OnsTopicListResponse
     */
    public function onsTopicList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicListWithOptions($request, $runtime);
    }

    /**
     * @param OnsTopicStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsTopicStatusResponse
     */
    public function onsTopicStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTopicStatusResponse::fromMap($this->doRPCRequest('OnsTopicStatus', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTopicStatusRequest $request
     *
     * @return OnsTopicStatusResponse
     */
    public function onsTopicStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicStatusWithOptions($request, $runtime);
    }

    /**
     * @param OnsTopicSubDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsTopicSubDetailResponse
     */
    public function onsTopicSubDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTopicSubDetailResponse::fromMap($this->doRPCRequest('OnsTopicSubDetail', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTopicSubDetailRequest $request
     *
     * @return OnsTopicSubDetailResponse
     */
    public function onsTopicSubDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicSubDetailWithOptions($request, $runtime);
    }

    /**
     * @param OnsTopicUpdateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OnsTopicUpdateResponse
     */
    public function onsTopicUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTopicUpdateResponse::fromMap($this->doRPCRequest('OnsTopicUpdate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTopicUpdateRequest $request
     *
     * @return OnsTopicUpdateResponse
     */
    public function onsTopicUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTopicUpdateWithOptions($request, $runtime);
    }

    /**
     * @param OnsTraceGetResultRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OnsTraceGetResultResponse
     */
    public function onsTraceGetResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTraceGetResultResponse::fromMap($this->doRPCRequest('OnsTraceGetResult', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTraceGetResultRequest $request
     *
     * @return OnsTraceGetResultResponse
     */
    public function onsTraceGetResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTraceGetResultWithOptions($request, $runtime);
    }

    /**
     * @param OnsTraceQueryByMsgIdRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return OnsTraceQueryByMsgIdResponse
     */
    public function onsTraceQueryByMsgIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTraceQueryByMsgIdResponse::fromMap($this->doRPCRequest('OnsTraceQueryByMsgId', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTraceQueryByMsgIdRequest $request
     *
     * @return OnsTraceQueryByMsgIdResponse
     */
    public function onsTraceQueryByMsgId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTraceQueryByMsgIdWithOptions($request, $runtime);
    }

    /**
     * @param OnsTraceQueryByMsgKeyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OnsTraceQueryByMsgKeyResponse
     */
    public function onsTraceQueryByMsgKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTraceQueryByMsgKeyResponse::fromMap($this->doRPCRequest('OnsTraceQueryByMsgKey', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTraceQueryByMsgKeyRequest $request
     *
     * @return OnsTraceQueryByMsgKeyResponse
     */
    public function onsTraceQueryByMsgKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTraceQueryByMsgKeyWithOptions($request, $runtime);
    }

    /**
     * @param OnsTrendGroupOutputTpsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return OnsTrendGroupOutputTpsResponse
     */
    public function onsTrendGroupOutputTpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTrendGroupOutputTpsResponse::fromMap($this->doRPCRequest('OnsTrendGroupOutputTps', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTrendGroupOutputTpsRequest $request
     *
     * @return OnsTrendGroupOutputTpsResponse
     */
    public function onsTrendGroupOutputTps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTrendGroupOutputTpsWithOptions($request, $runtime);
    }

    /**
     * @param OnsTrendTopicInputTpsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OnsTrendTopicInputTpsResponse
     */
    public function onsTrendTopicInputTpsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsTrendTopicInputTpsResponse::fromMap($this->doRPCRequest('OnsTrendTopicInputTps', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsTrendTopicInputTpsRequest $request
     *
     * @return OnsTrendTopicInputTpsResponse
     */
    public function onsTrendTopicInputTps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsTrendTopicInputTpsWithOptions($request, $runtime);
    }

    /**
     * @param OnsWarnCreateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OnsWarnCreateResponse
     */
    public function onsWarnCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsWarnCreateResponse::fromMap($this->doRPCRequest('OnsWarnCreate', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsWarnCreateRequest $request
     *
     * @return OnsWarnCreateResponse
     */
    public function onsWarnCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsWarnCreateWithOptions($request, $runtime);
    }

    /**
     * @param OnsWarnDeleteRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OnsWarnDeleteResponse
     */
    public function onsWarnDeleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OnsWarnDeleteResponse::fromMap($this->doRPCRequest('OnsWarnDelete', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OnsWarnDeleteRequest $request
     *
     * @return OnsWarnDeleteResponse
     */
    public function onsWarnDelete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->onsWarnDeleteWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenOnsServiceResponse
     */
    public function openOnsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return OpenOnsServiceResponse::fromMap($this->doRPCRequest('OpenOnsService', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return OpenOnsServiceResponse
     */
    public function openOnsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openOnsServiceWithOptions($runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-02-14', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
