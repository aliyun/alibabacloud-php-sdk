<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Domain\V20180208\Models\AcceptDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\AcceptDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchIntrudeDomainsShrinkRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchQueryPushStatusRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchQueryPushStatusResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchQueryPushStatusShrinkRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchRecallPushRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchRecallPushResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchRecallPushShrinkRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BidDomainRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BidDomainResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckDomainStatusRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckDomainStatusResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckPushReceiverRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckPushReceiverResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckSelectedDomainStatusRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckSelectedDomainStatusResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\CreateFixedPriceDemandOrderRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\CreateFixedPriceDemandOrderResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\CreateFixedPriceSelectedOrderRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\CreateFixedPriceSelectedOrderResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\FailDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\FailDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\FinishDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\FinishDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\GetIntlDomainDownloadUrlResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\GetReserveDomainUrlResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\PurchaseIntlDomainRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\PurchaseIntlDomainResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\PushDomainsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\PushDomainsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\PushDomainsShrinkRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryAuctionDetailRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryAuctionDetailResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryAuctionsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryAuctionsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBidRecordsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBidRecordsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBookingDomainInfoRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBookingDomainInfoResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRecordResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBuyerDomainTradeRecordsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBuyerDomainTradeRecordsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryBuyerDomainTradeRecordsShrinkRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryExchangeRateRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryExchangeRateResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryExportAuctionDetailRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryExportAuctionDetailResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryExportDomainExpireSnatchsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryExportDomainExpireSnatchsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryPurchasedDomainsRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryPurchasedDomainsResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\RecordDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\RecordDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\RefuseDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\RefuseDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\RequestPayDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\RequestPayDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\ReserveDomainRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\ReserveDomainResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\ReserveIntlDomainRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\ReserveIntlDomainResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\SelectedDomainListRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\SelectedDomainListResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\SubmitPurchaseInfoRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\SubmitPurchaseInfoResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\UpdatePartnerReservePriceRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\UpdatePartnerReservePriceResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\WebsiteAddDnsRecordRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\WebsiteAddDnsRecordResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\WebsiteDeleteDnsRecordRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\WebsiteDeleteDnsRecordResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Domain extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('domain', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - AcceptDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AcceptDemandResponse
     *
     * @param AcceptDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AcceptDemandResponse
     */
    public function acceptDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AcceptDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AcceptDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AcceptDemandRequest
     *
     * @returns AcceptDemandResponse
     *
     * @param AcceptDemandRequest $request
     *
     * @return AcceptDemandResponse
     */
    public function acceptDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptDemandWithOptions($request, $runtime);
    }

    /**
     * 闯入接口.
     *
     * @param tmpReq - BatchIntrudeDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchIntrudeDomainsResponse
     *
     * @param BatchIntrudeDomainsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchIntrudeDomainsResponse
     */
    public function batchIntrudeDomainsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchIntrudeDomainsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->domainNames) {
            $request->domainNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->domainNames, 'DomainNames', 'json');
        }

        $query = [];
        if (null !== $request->domainNamesShrink) {
            @$query['DomainNames'] = $request->domainNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchIntrudeDomains',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchIntrudeDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 闯入接口.
     *
     * @param request - BatchIntrudeDomainsRequest
     *
     * @returns BatchIntrudeDomainsResponse
     *
     * @param BatchIntrudeDomainsRequest $request
     *
     * @return BatchIntrudeDomainsResponse
     */
    public function batchIntrudeDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchIntrudeDomainsWithOptions($request, $runtime);
    }

    /**
     * 根据OutBizId（批量）查看带价PUSH状态，通常用于超时场景补偿
     *
     * @param tmpReq - BatchQueryPushStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchQueryPushStatusResponse
     *
     * @param BatchQueryPushStatusRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return BatchQueryPushStatusResponse
     */
    public function batchQueryPushStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchQueryPushStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outBizIds) {
            $request->outBizIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outBizIds, 'OutBizIds', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->outBizIdsShrink) {
            @$query['OutBizIds'] = $request->outBizIdsShrink;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchQueryPushStatus',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchQueryPushStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据OutBizId（批量）查看带价PUSH状态，通常用于超时场景补偿
     *
     * @param request - BatchQueryPushStatusRequest
     *
     * @returns BatchQueryPushStatusResponse
     *
     * @param BatchQueryPushStatusRequest $request
     *
     * @return BatchQueryPushStatusResponse
     */
    public function batchQueryPushStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQueryPushStatusWithOptions($request, $runtime);
    }

    /**
     * 批量撤回带价PUSH.
     *
     * @param tmpReq - BatchRecallPushRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRecallPushResponse
     *
     * @param BatchRecallPushRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return BatchRecallPushResponse
     */
    public function batchRecallPushWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchRecallPushShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outBizIds) {
            $request->outBizIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outBizIds, 'OutBizIds', 'json');
        }

        $query = [];
        if (null !== $request->outBizIdsShrink) {
            @$query['OutBizIds'] = $request->outBizIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchRecallPush',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchRecallPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量撤回带价PUSH.
     *
     * @param request - BatchRecallPushRequest
     *
     * @returns BatchRecallPushResponse
     *
     * @param BatchRecallPushRequest $request
     *
     * @return BatchRecallPushResponse
     */
    public function batchRecallPush($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRecallPushWithOptions($request, $runtime);
    }

    /**
     * 出价.
     *
     * @param request - BidDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BidDomainResponse
     *
     * @param BidDomainRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BidDomainResponse
     */
    public function bidDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auctionId) {
            @$body['AuctionId'] = $request->auctionId;
        }

        if (null !== $request->currency) {
            @$body['Currency'] = $request->currency;
        }

        if (null !== $request->maxBid) {
            @$body['MaxBid'] = $request->maxBid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BidDomain',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BidDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 出价.
     *
     * @param request - BidDomainRequest
     *
     * @returns BidDomainResponse
     *
     * @param BidDomainRequest $request
     *
     * @return BidDomainResponse
     */
    public function bidDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bidDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeAuctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeAuctionResponse
     *
     * @param ChangeAuctionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ChangeAuctionResponse
     */
    public function changeAuctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auctionList) {
            @$body['AuctionList'] = $request->auctionList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeAuction',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeAuctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeAuctionRequest
     *
     * @returns ChangeAuctionResponse
     *
     * @param ChangeAuctionRequest $request
     *
     * @return ChangeAuctionResponse
     */
    public function changeAuction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAuctionWithOptions($request, $runtime);
    }

    /**
     * 校验域名在售状态
     *
     * @param request - CheckDomainStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDomainStatusResponse
     *
     * @param CheckDomainStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckDomainStatusResponse
     */
    public function checkDomainStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckDomainStatus',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验域名在售状态
     *
     * @param request - CheckDomainStatusRequest
     *
     * @returns CheckDomainStatusResponse
     *
     * @param CheckDomainStatusRequest $request
     *
     * @return CheckDomainStatusResponse
     */
    public function checkDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainStatusWithOptions($request, $runtime);
    }

    /**
     * 校验域名带价PUSH接收方可接收.
     *
     * @param request - CheckPushReceiverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckPushReceiverResponse
     *
     * @param CheckPushReceiverRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckPushReceiverResponse
     */
    public function checkPushReceiverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->receiverAccount) {
            @$query['ReceiverAccount'] = $request->receiverAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckPushReceiver',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckPushReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验域名带价PUSH接收方可接收.
     *
     * @param request - CheckPushReceiverRequest
     *
     * @returns CheckPushReceiverResponse
     *
     * @param CheckPushReceiverRequest $request
     *
     * @return CheckPushReceiverResponse
     */
    public function checkPushReceiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkPushReceiverWithOptions($request, $runtime);
    }

    /**
     * 一口价严选询价接口.
     *
     * @param request - CheckSelectedDomainStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSelectedDomainStatusResponse
     *
     * @param CheckSelectedDomainStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CheckSelectedDomainStatusResponse
     */
    public function checkSelectedDomainStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSelectedDomainStatus',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckSelectedDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 一口价严选询价接口.
     *
     * @param request - CheckSelectedDomainStatusRequest
     *
     * @returns CheckSelectedDomainStatusResponse
     *
     * @param CheckSelectedDomainStatusRequest $request
     *
     * @return CheckSelectedDomainStatusResponse
     */
    public function checkSelectedDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSelectedDomainStatusWithOptions($request, $runtime);
    }

    /**
     * 创建一口价需求单.
     *
     * @param request - CreateFixedPriceDemandOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFixedPriceDemandOrderResponse
     *
     * @param CreateFixedPriceDemandOrderRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFixedPriceDemandOrderResponse
     */
    public function createFixedPriceDemandOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFixedPriceDemandOrder',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFixedPriceDemandOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一口价需求单.
     *
     * @param request - CreateFixedPriceDemandOrderRequest
     *
     * @returns CreateFixedPriceDemandOrderResponse
     *
     * @param CreateFixedPriceDemandOrderRequest $request
     *
     * @return CreateFixedPriceDemandOrderResponse
     */
    public function createFixedPriceDemandOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFixedPriceDemandOrderWithOptions($request, $runtime);
    }

    /**
     * 一口价严选下单购买接口，阿里云账户余额直接扣费.
     *
     * @param request - CreateFixedPriceSelectedOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFixedPriceSelectedOrderResponse
     *
     * @param CreateFixedPriceSelectedOrderRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateFixedPriceSelectedOrderResponse
     */
    public function createFixedPriceSelectedOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->contactId) {
            @$query['ContactId'] = $request->contactId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->expectedPrice) {
            @$query['ExpectedPrice'] = $request->expectedPrice;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFixedPriceSelectedOrder',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFixedPriceSelectedOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 一口价严选下单购买接口，阿里云账户余额直接扣费.
     *
     * @param request - CreateFixedPriceSelectedOrderRequest
     *
     * @returns CreateFixedPriceSelectedOrderResponse
     *
     * @param CreateFixedPriceSelectedOrderRequest $request
     *
     * @return CreateFixedPriceSelectedOrderResponse
     */
    public function createFixedPriceSelectedOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFixedPriceSelectedOrderWithOptions($request, $runtime);
    }

    /**
     * @param request - FailDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FailDemandResponse
     *
     * @param FailDemandRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FailDemandResponse
     */
    public function failDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FailDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FailDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FailDemandRequest
     *
     * @returns FailDemandResponse
     *
     * @param FailDemandRequest $request
     *
     * @return FailDemandResponse
     */
    public function failDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failDemandWithOptions($request, $runtime);
    }

    /**
     * @param request - FinishDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FinishDemandResponse
     *
     * @param FinishDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return FinishDemandResponse
     */
    public function finishDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FinishDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FinishDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - FinishDemandRequest
     *
     * @returns FinishDemandResponse
     *
     * @param FinishDemandRequest $request
     *
     * @return FinishDemandResponse
     */
    public function finishDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishDemandWithOptions($request, $runtime);
    }

    /**
     * @param request - GetIntlDomainDownloadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIntlDomainDownloadUrlResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetIntlDomainDownloadUrlResponse
     */
    public function getIntlDomainDownloadUrlWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetIntlDomainDownloadUrl',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIntlDomainDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns GetIntlDomainDownloadUrlResponse
     *
     * @return GetIntlDomainDownloadUrlResponse
     */
    public function getIntlDomainDownloadUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntlDomainDownloadUrlWithOptions($runtime);
    }

    /**
     * @param request - GetReserveDomainUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReserveDomainUrlResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetReserveDomainUrlResponse
     */
    public function getReserveDomainUrlWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetReserveDomainUrl',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetReserveDomainUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns GetReserveDomainUrlResponse
     *
     * @return GetReserveDomainUrlResponse
     */
    public function getReserveDomainUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReserveDomainUrlWithOptions($runtime);
    }

    /**
     * 购买国际站预释放域名.
     *
     * @param request - PurchaseIntlDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PurchaseIntlDomainResponse
     *
     * @param PurchaseIntlDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PurchaseIntlDomainResponse
     */
    public function purchaseIntlDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auctionId) {
            @$body['AuctionId'] = $request->auctionId;
        }

        if (null !== $request->currency) {
            @$body['Currency'] = $request->currency;
        }

        if (null !== $request->price) {
            @$body['Price'] = $request->price;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PurchaseIntlDomain',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PurchaseIntlDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 购买国际站预释放域名.
     *
     * @param request - PurchaseIntlDomainRequest
     *
     * @returns PurchaseIntlDomainResponse
     *
     * @param PurchaseIntlDomainRequest $request
     *
     * @return PurchaseIntlDomainResponse
     */
    public function purchaseIntlDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseIntlDomainWithOptions($request, $runtime);
    }

    /**
     * 发布域名PUSH，目前只支持0元PUSH.
     *
     * @param tmpReq - PushDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushDomainsResponse
     *
     * @param PushDomainsRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return PushDomainsResponse
     */
    public function pushDomainsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushDomainsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->domainList) {
            $request->domainListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->domainList, 'DomainList', 'json');
        }

        $query = [];
        if (null !== $request->domainListShrink) {
            @$query['DomainList'] = $request->domainListShrink;
        }

        if (null !== $request->outBizId) {
            @$query['OutBizId'] = $request->outBizId;
        }

        if (null !== $request->publishRemark) {
            @$query['PublishRemark'] = $request->publishRemark;
        }

        if (null !== $request->receiverAccount) {
            @$query['ReceiverAccount'] = $request->receiverAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushDomains',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发布域名PUSH，目前只支持0元PUSH.
     *
     * @param request - PushDomainsRequest
     *
     * @returns PushDomainsResponse
     *
     * @param PushDomainsRequest $request
     *
     * @return PushDomainsResponse
     */
    public function pushDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushDomainsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAuctionDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAuctionDetailResponse
     *
     * @param QueryAuctionDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryAuctionDetailResponse
     */
    public function queryAuctionDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auctionId) {
            @$body['AuctionId'] = $request->auctionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAuctionDetail',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAuctionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAuctionDetailRequest
     *
     * @returns QueryAuctionDetailResponse
     *
     * @param QueryAuctionDetailRequest $request
     *
     * @return QueryAuctionDetailResponse
     */
    public function queryAuctionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuctionDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAuctionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAuctionsResponse
     *
     * @param QueryAuctionsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryAuctionsResponse
     */
    public function queryAuctionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auctionEndTimeOrder) {
            @$body['AuctionEndTimeOrder'] = $request->auctionEndTimeOrder;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->statuses) {
            @$body['Statuses'] = $request->statuses;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryAuctions',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAuctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAuctionsRequest
     *
     * @returns QueryAuctionsResponse
     *
     * @param QueryAuctionsRequest $request
     *
     * @return QueryAuctionsResponse
     */
    public function queryAuctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuctionsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBidRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBidRecordsResponse
     *
     * @param QueryBidRecordsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryBidRecordsResponse
     */
    public function queryBidRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->auctionId) {
            @$body['AuctionId'] = $request->auctionId;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryBidRecords',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBidRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBidRecordsRequest
     *
     * @returns QueryBidRecordsResponse
     *
     * @param QueryBidRecordsRequest $request
     *
     * @return QueryBidRecordsResponse
     */
    public function queryBidRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBidRecordsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBookingDomainInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBookingDomainInfoResponse
     *
     * @param QueryBookingDomainInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryBookingDomainInfoResponse
     */
    public function queryBookingDomainInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryBookingDomainInfo',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBookingDomainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBookingDomainInfoRequest
     *
     * @returns QueryBookingDomainInfoResponse
     *
     * @param QueryBookingDomainInfoRequest $request
     *
     * @return QueryBookingDomainInfoResponse
     */
    public function queryBookingDomainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBookingDomainInfoWithOptions($request, $runtime);
    }

    /**
     * 查询回购订单列表.
     *
     * @param request - QueryBrokerDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBrokerDemandResponse
     *
     * @param QueryBrokerDemandRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryBrokerDemandResponse
     */
    public function queryBrokerDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBrokerDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBrokerDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询回购订单列表.
     *
     * @param request - QueryBrokerDemandRequest
     *
     * @returns QueryBrokerDemandResponse
     *
     * @param QueryBrokerDemandRequest $request
     *
     * @return QueryBrokerDemandResponse
     */
    public function queryBrokerDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBrokerDemandWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryBrokerDemandRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBrokerDemandRecordResponse
     *
     * @param QueryBrokerDemandRecordRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryBrokerDemandRecordResponse
     */
    public function queryBrokerDemandRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBrokerDemandRecord',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBrokerDemandRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryBrokerDemandRecordRequest
     *
     * @returns QueryBrokerDemandRecordResponse
     *
     * @param QueryBrokerDemandRecordRequest $request
     *
     * @return QueryBrokerDemandRecordResponse
     */
    public function queryBrokerDemandRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBrokerDemandRecordWithOptions($request, $runtime);
    }

    /**
     * 查询买家交易记录列表.
     *
     * @param tmpReq - QueryBuyerDomainTradeRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryBuyerDomainTradeRecordsResponse
     *
     * @param QueryBuyerDomainTradeRecordsRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryBuyerDomainTradeRecordsResponse
     */
    public function queryBuyerDomainTradeRecordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryBuyerDomainTradeRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bizIdList) {
            $request->bizIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bizIdList, 'BizIdList', 'json');
        }

        if (null !== $tmpReq->domainNameList) {
            $request->domainNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->domainNameList, 'DomainNameList', 'json');
        }

        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        if (null !== $tmpReq->suffixList) {
            $request->suffixListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->suffixList, 'SuffixList', 'json');
        }

        if (null !== $tmpReq->tradeTypeList) {
            $request->tradeTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tradeTypeList, 'TradeTypeList', 'json');
        }

        $query = [];
        if (null !== $request->bizIdListShrink) {
            @$query['BizIdList'] = $request->bizIdListShrink;
        }

        if (null !== $request->domainNameListShrink) {
            @$query['DomainNameList'] = $request->domainNameListShrink;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->endPrice) {
            @$query['EndPrice'] = $request->endPrice;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sorter) {
            @$query['Sorter'] = $request->sorter;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->startPrice) {
            @$query['StartPrice'] = $request->startPrice;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        if (null !== $request->suffixListShrink) {
            @$query['SuffixList'] = $request->suffixListShrink;
        }

        if (null !== $request->tradeTypeListShrink) {
            @$query['TradeTypeList'] = $request->tradeTypeListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryBuyerDomainTradeRecords',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryBuyerDomainTradeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询买家交易记录列表.
     *
     * @param request - QueryBuyerDomainTradeRecordsRequest
     *
     * @returns QueryBuyerDomainTradeRecordsResponse
     *
     * @param QueryBuyerDomainTradeRecordsRequest $request
     *
     * @return QueryBuyerDomainTradeRecordsResponse
     */
    public function queryBuyerDomainTradeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBuyerDomainTradeRecordsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryDomainTransferStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDomainTransferStatusResponse
     *
     * @param QueryDomainTransferStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryDomainTransferStatusResponse
     */
    public function queryDomainTransferStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDomainTransferStatus',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDomainTransferStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryDomainTransferStatusRequest
     *
     * @returns QueryDomainTransferStatusResponse
     *
     * @param QueryDomainTransferStatusRequest $request
     *
     * @return QueryDomainTransferStatusResponse
     */
    public function queryDomainTransferStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainTransferStatusWithOptions($request, $runtime);
    }

    /**
     * 查询汇率.
     *
     * @param request - QueryExchangeRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExchangeRateResponse
     *
     * @param QueryExchangeRateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryExchangeRateResponse
     */
    public function queryExchangeRateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fromCurrency) {
            @$query['FromCurrency'] = $request->fromCurrency;
        }

        if (null !== $request->toCurrency) {
            @$query['ToCurrency'] = $request->toCurrency;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryExchangeRate',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryExchangeRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询汇率.
     *
     * @param request - QueryExchangeRateRequest
     *
     * @returns QueryExchangeRateResponse
     *
     * @param QueryExchangeRateRequest $request
     *
     * @return QueryExchangeRateResponse
     */
    public function queryExchangeRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExchangeRateWithOptions($request, $runtime);
    }

    /**
     * 查询竞价商品详情.
     *
     * @param request - QueryExportAuctionDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExportAuctionDetailResponse
     *
     * @param QueryExportAuctionDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryExportAuctionDetailResponse
     */
    public function queryExportAuctionDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auctionId) {
            @$query['AuctionId'] = $request->auctionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryExportAuctionDetail',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryExportAuctionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询竞价商品详情.
     *
     * @param request - QueryExportAuctionDetailRequest
     *
     * @returns QueryExportAuctionDetailResponse
     *
     * @param QueryExportAuctionDetailRequest $request
     *
     * @return QueryExportAuctionDetailResponse
     */
    public function queryExportAuctionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExportAuctionDetailWithOptions($request, $runtime);
    }

    /**
     * 查询导出的抢注域名.
     *
     * @param request - QueryExportDomainExpireSnatchsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryExportDomainExpireSnatchsResponse
     *
     * @param QueryExportDomainExpireSnatchsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryExportDomainExpireSnatchsResponse
     */
    public function queryExportDomainExpireSnatchsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentId) {
            @$query['CurrentId'] = $request->currentId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryExportDomainExpireSnatchs',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryExportDomainExpireSnatchsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询导出的抢注域名.
     *
     * @param request - QueryExportDomainExpireSnatchsRequest
     *
     * @returns QueryExportDomainExpireSnatchsResponse
     *
     * @param QueryExportDomainExpireSnatchsRequest $request
     *
     * @return QueryExportDomainExpireSnatchsResponse
     */
    public function queryExportDomainExpireSnatchs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryExportDomainExpireSnatchsWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPurchasedDomainsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPurchasedDomainsResponse
     *
     * @param QueryPurchasedDomainsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPurchasedDomainsResponse
     */
    public function queryPurchasedDomainsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->endOperationTime) {
            @$body['EndOperationTime'] = $request->endOperationTime;
        }

        if (null !== $request->opTimeOrder) {
            @$body['OpTimeOrder'] = $request->opTimeOrder;
        }

        if (null !== $request->operationStatus) {
            @$body['OperationStatus'] = $request->operationStatus;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->startOperationTime) {
            @$body['StartOperationTime'] = $request->startOperationTime;
        }

        if (null !== $request->updateTimeOrder) {
            @$body['UpdateTimeOrder'] = $request->updateTimeOrder;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPurchasedDomains',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPurchasedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPurchasedDomainsRequest
     *
     * @returns QueryPurchasedDomainsResponse
     *
     * @param QueryPurchasedDomainsRequest $request
     *
     * @return QueryPurchasedDomainsResponse
     */
    public function queryPurchasedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPurchasedDomainsWithOptions($request, $runtime);
    }

    /**
     * @param request - RecordDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecordDemandResponse
     *
     * @param RecordDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RecordDemandResponse
     */
    public function recordDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecordDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecordDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RecordDemandRequest
     *
     * @returns RecordDemandResponse
     *
     * @param RecordDemandRequest $request
     *
     * @return RecordDemandResponse
     */
    public function recordDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordDemandWithOptions($request, $runtime);
    }

    /**
     * @param request - RefuseDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefuseDemandResponse
     *
     * @param RefuseDemandRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RefuseDemandResponse
     */
    public function refuseDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefuseDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefuseDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RefuseDemandRequest
     *
     * @returns RefuseDemandResponse
     *
     * @param RefuseDemandRequest $request
     *
     * @return RefuseDemandResponse
     */
    public function refuseDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refuseDemandWithOptions($request, $runtime);
    }

    /**
     * @param request - RequestPayDemandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RequestPayDemandResponse
     *
     * @param RequestPayDemandRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RequestPayDemandResponse
     */
    public function requestPayDemandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->price) {
            @$query['Price'] = $request->price;
        }

        if (null !== $request->produceType) {
            @$query['ProduceType'] = $request->produceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RequestPayDemand',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RequestPayDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RequestPayDemandRequest
     *
     * @returns RequestPayDemandResponse
     *
     * @param RequestPayDemandRequest $request
     *
     * @return RequestPayDemandResponse
     */
    public function requestPayDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestPayDemandWithOptions($request, $runtime);
    }

    /**
     * @param request - ReserveDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReserveDomainResponse
     *
     * @param ReserveDomainRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ReserveDomainResponse
     */
    public function reserveDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channels) {
            @$body['Channels'] = $request->channels;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReserveDomain',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReserveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReserveDomainRequest
     *
     * @returns ReserveDomainResponse
     *
     * @param ReserveDomainRequest $request
     *
     * @return ReserveDomainResponse
     */
    public function reserveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reserveDomainWithOptions($request, $runtime);
    }

    /**
     * @param request - ReserveIntlDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReserveIntlDomainResponse
     *
     * @param ReserveIntlDomainRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReserveIntlDomainResponse
     */
    public function reserveIntlDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReserveIntlDomain',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReserveIntlDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ReserveIntlDomainRequest
     *
     * @returns ReserveIntlDomainResponse
     *
     * @param ReserveIntlDomainRequest $request
     *
     * @return ReserveIntlDomainResponse
     */
    public function reserveIntlDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reserveIntlDomainWithOptions($request, $runtime);
    }

    /**
     * 严选列表导出，明日凌晨2点前生成文件，导出凌晨1点前所有在售严选域名.
     *
     * @param request - SelectedDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SelectedDomainListResponse
     *
     * @param SelectedDomainListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SelectedDomainListResponse
     */
    public function selectedDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listDate) {
            @$query['ListDate'] = $request->listDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SelectedDomainList',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SelectedDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 严选列表导出，明日凌晨2点前生成文件，导出凌晨1点前所有在售严选域名.
     *
     * @param request - SelectedDomainListRequest
     *
     * @returns SelectedDomainListResponse
     *
     * @param SelectedDomainListRequest $request
     *
     * @return SelectedDomainListResponse
     */
    public function selectedDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectedDomainListWithOptions($request, $runtime);
    }

    /**
     * 提交采购信息.
     *
     * @param request - SubmitPurchaseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitPurchaseInfoResponse
     *
     * @param SubmitPurchaseInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitPurchaseInfoResponse
     */
    public function submitPurchaseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizId) {
            @$body['BizId'] = $request->bizId;
        }

        if (null !== $request->purchaseCurrency) {
            @$body['PurchaseCurrency'] = $request->purchaseCurrency;
        }

        if (null !== $request->purchasePrice) {
            @$body['PurchasePrice'] = $request->purchasePrice;
        }

        if (null !== $request->purchaseProofs) {
            @$body['PurchaseProofs'] = $request->purchaseProofs;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitPurchaseInfo',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitPurchaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交采购信息.
     *
     * @param request - SubmitPurchaseInfoRequest
     *
     * @returns SubmitPurchaseInfoResponse
     *
     * @param SubmitPurchaseInfoRequest $request
     *
     * @return SubmitPurchaseInfoResponse
     */
    public function submitPurchaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPurchaseInfoWithOptions($request, $runtime);
    }

    /**
     * 合作方同步报价.
     *
     * @param request - UpdatePartnerReservePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePartnerReservePriceResponse
     *
     * @param UpdatePartnerReservePriceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdatePartnerReservePriceResponse
     */
    public function updatePartnerReservePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->biddingId) {
            @$body['BiddingId'] = $request->biddingId;
        }

        if (null !== $request->domainName) {
            @$body['DomainName'] = $request->domainName;
        }

        if (null !== $request->partnerType) {
            @$body['PartnerType'] = $request->partnerType;
        }

        if (null !== $request->reservePrice) {
            @$body['ReservePrice'] = $request->reservePrice;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePartnerReservePrice',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePartnerReservePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作方同步报价.
     *
     * @param request - UpdatePartnerReservePriceRequest
     *
     * @returns UpdatePartnerReservePriceResponse
     *
     * @param UpdatePartnerReservePriceRequest $request
     *
     * @return UpdatePartnerReservePriceResponse
     */
    public function updatePartnerReservePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePartnerReservePriceWithOptions($request, $runtime);
    }

    /**
     * 域名建站添加DNS记录.
     *
     * @param request - WebsiteAddDnsRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WebsiteAddDnsRecordResponse
     *
     * @param WebsiteAddDnsRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return WebsiteAddDnsRecordResponse
     */
    public function websiteAddDnsRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->websiteNo) {
            @$query['WebsiteNo'] = $request->websiteNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WebsiteAddDnsRecord',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WebsiteAddDnsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 域名建站添加DNS记录.
     *
     * @param request - WebsiteAddDnsRecordRequest
     *
     * @returns WebsiteAddDnsRecordResponse
     *
     * @param WebsiteAddDnsRecordRequest $request
     *
     * @return WebsiteAddDnsRecordResponse
     */
    public function websiteAddDnsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->websiteAddDnsRecordWithOptions($request, $runtime);
    }

    /**
     * 域名建站删除DNS记录.
     *
     * @param request - WebsiteDeleteDnsRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WebsiteDeleteDnsRecordResponse
     *
     * @param WebsiteDeleteDnsRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return WebsiteDeleteDnsRecordResponse
     */
    public function websiteDeleteDnsRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->rr) {
            @$query['Rr'] = $request->rr;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        if (null !== $request->websiteNo) {
            @$query['WebsiteNo'] = $request->websiteNo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WebsiteDeleteDnsRecord',
            'version' => '2018-02-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WebsiteDeleteDnsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 域名建站删除DNS记录.
     *
     * @param request - WebsiteDeleteDnsRecordRequest
     *
     * @returns WebsiteDeleteDnsRecordResponse
     *
     * @param WebsiteDeleteDnsRecordRequest $request
     *
     * @return WebsiteDeleteDnsRecordResponse
     */
    public function websiteDeleteDnsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->websiteDeleteDnsRecordWithOptions($request, $runtime);
    }
}
