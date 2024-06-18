<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Domain\V20180208\Models\AcceptDemandRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\AcceptDemandResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\BidDomainRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\BidDomainResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionResponse;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckDomainStatusRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\CheckDomainStatusResponse;
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
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusRequest;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AcceptDemandRequest $request AcceptDemandRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AcceptDemandResponse AcceptDemandResponse
     */
    public function acceptDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AcceptDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AcceptDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AcceptDemandRequest $request AcceptDemandRequest
     *
     * @return AcceptDemandResponse AcceptDemandResponse
     */
    public function acceptDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->acceptDemandWithOptions($request, $runtime);
    }

    /**
     * @param BidDomainRequest $request BidDomainRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return BidDomainResponse BidDomainResponse
     */
    public function bidDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auctionId)) {
            $body['AuctionId'] = $request->auctionId;
        }
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->maxBid)) {
            $body['MaxBid'] = $request->maxBid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BidDomain',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BidDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BidDomainRequest $request BidDomainRequest
     *
     * @return BidDomainResponse BidDomainResponse
     */
    public function bidDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bidDomainWithOptions($request, $runtime);
    }

    /**
     * @param ChangeAuctionRequest $request ChangeAuctionRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeAuctionResponse ChangeAuctionResponse
     */
    public function changeAuctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auctionList)) {
            $body['AuctionList'] = $request->auctionList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeAuction',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeAuctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeAuctionRequest $request ChangeAuctionRequest
     *
     * @return ChangeAuctionResponse ChangeAuctionResponse
     */
    public function changeAuction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeAuctionWithOptions($request, $runtime);
    }

    /**
     * @summary 校验域名在售状态
     *  *
     * @param CheckDomainStatusRequest $request CheckDomainStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckDomainStatusResponse CheckDomainStatusResponse
     */
    public function checkDomainStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckDomainStatus',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验域名在售状态
     *  *
     * @param CheckDomainStatusRequest $request CheckDomainStatusRequest
     *
     * @return CheckDomainStatusResponse CheckDomainStatusResponse
     */
    public function checkDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDomainStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 一口价严选询价接口
     *  *
     * @param CheckSelectedDomainStatusRequest $request CheckSelectedDomainStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckSelectedDomainStatusResponse CheckSelectedDomainStatusResponse
     */
    public function checkSelectedDomainStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSelectedDomainStatus',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSelectedDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 一口价严选询价接口
     *  *
     * @param CheckSelectedDomainStatusRequest $request CheckSelectedDomainStatusRequest
     *
     * @return CheckSelectedDomainStatusResponse CheckSelectedDomainStatusResponse
     */
    public function checkSelectedDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSelectedDomainStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一口价需求单
     *  *
     * @param CreateFixedPriceDemandOrderRequest $request CreateFixedPriceDemandOrderRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFixedPriceDemandOrderResponse CreateFixedPriceDemandOrderResponse
     */
    public function createFixedPriceDemandOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFixedPriceDemandOrder',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFixedPriceDemandOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一口价需求单
     *  *
     * @param CreateFixedPriceDemandOrderRequest $request CreateFixedPriceDemandOrderRequest
     *
     * @return CreateFixedPriceDemandOrderResponse CreateFixedPriceDemandOrderResponse
     */
    public function createFixedPriceDemandOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFixedPriceDemandOrderWithOptions($request, $runtime);
    }

    /**
     * @summary 一口价严选下单购买接口，阿里云账户余额直接扣费
     *  *
     * @param CreateFixedPriceSelectedOrderRequest $request CreateFixedPriceSelectedOrderRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFixedPriceSelectedOrderResponse CreateFixedPriceSelectedOrderResponse
     */
    public function createFixedPriceSelectedOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->contactId)) {
            $query['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->expectedPrice)) {
            $query['ExpectedPrice'] = $request->expectedPrice;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFixedPriceSelectedOrder',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFixedPriceSelectedOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 一口价严选下单购买接口，阿里云账户余额直接扣费
     *  *
     * @param CreateFixedPriceSelectedOrderRequest $request CreateFixedPriceSelectedOrderRequest
     *
     * @return CreateFixedPriceSelectedOrderResponse CreateFixedPriceSelectedOrderResponse
     */
    public function createFixedPriceSelectedOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFixedPriceSelectedOrderWithOptions($request, $runtime);
    }

    /**
     * @param FailDemandRequest $request FailDemandRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return FailDemandResponse FailDemandResponse
     */
    public function failDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FailDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FailDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FailDemandRequest $request FailDemandRequest
     *
     * @return FailDemandResponse FailDemandResponse
     */
    public function failDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failDemandWithOptions($request, $runtime);
    }

    /**
     * @param FinishDemandRequest $request FinishDemandRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return FinishDemandResponse FinishDemandResponse
     */
    public function finishDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FinishDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FinishDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FinishDemandRequest $request FinishDemandRequest
     *
     * @return FinishDemandResponse FinishDemandResponse
     */
    public function finishDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishDemandWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIntlDomainDownloadUrlResponse GetIntlDomainDownloadUrlResponse
     */
    public function getIntlDomainDownloadUrlWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetIntlDomainDownloadUrl',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIntlDomainDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetIntlDomainDownloadUrlResponse GetIntlDomainDownloadUrlResponse
     */
    public function getIntlDomainDownloadUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIntlDomainDownloadUrlWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetReserveDomainUrlResponse GetReserveDomainUrlResponse
     */
    public function getReserveDomainUrlWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetReserveDomainUrl',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReserveDomainUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetReserveDomainUrlResponse GetReserveDomainUrlResponse
     */
    public function getReserveDomainUrl()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReserveDomainUrlWithOptions($runtime);
    }

    /**
     * @summary 购买国际站预释放域名
     *  *
     * @param PurchaseIntlDomainRequest $request PurchaseIntlDomainRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PurchaseIntlDomainResponse PurchaseIntlDomainResponse
     */
    public function purchaseIntlDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auctionId)) {
            $body['AuctionId'] = $request->auctionId;
        }
        if (!Utils::isUnset($request->currency)) {
            $body['Currency'] = $request->currency;
        }
        if (!Utils::isUnset($request->price)) {
            $body['Price'] = $request->price;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PurchaseIntlDomain',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurchaseIntlDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 购买国际站预释放域名
     *  *
     * @param PurchaseIntlDomainRequest $request PurchaseIntlDomainRequest
     *
     * @return PurchaseIntlDomainResponse PurchaseIntlDomainResponse
     */
    public function purchaseIntlDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseIntlDomainWithOptions($request, $runtime);
    }

    /**
     * @param QueryAuctionDetailRequest $request QueryAuctionDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAuctionDetailResponse QueryAuctionDetailResponse
     */
    public function queryAuctionDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auctionId)) {
            $body['AuctionId'] = $request->auctionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAuctionDetail',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuctionDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAuctionDetailRequest $request QueryAuctionDetailRequest
     *
     * @return QueryAuctionDetailResponse QueryAuctionDetailResponse
     */
    public function queryAuctionDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuctionDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryAuctionsRequest $request QueryAuctionsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAuctionsResponse QueryAuctionsResponse
     */
    public function queryAuctionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auctionEndTimeOrder)) {
            $body['AuctionEndTimeOrder'] = $request->auctionEndTimeOrder;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->statuses)) {
            $body['Statuses'] = $request->statuses;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryAuctions',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuctionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAuctionsRequest $request QueryAuctionsRequest
     *
     * @return QueryAuctionsResponse QueryAuctionsResponse
     */
    public function queryAuctions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuctionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryBidRecordsRequest $request QueryBidRecordsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryBidRecordsResponse QueryBidRecordsResponse
     */
    public function queryBidRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->auctionId)) {
            $body['AuctionId'] = $request->auctionId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryBidRecords',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBidRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBidRecordsRequest $request QueryBidRecordsRequest
     *
     * @return QueryBidRecordsResponse QueryBidRecordsResponse
     */
    public function queryBidRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBidRecordsWithOptions($request, $runtime);
    }

    /**
     * @param QueryBookingDomainInfoRequest $request QueryBookingDomainInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryBookingDomainInfoResponse QueryBookingDomainInfoResponse
     */
    public function queryBookingDomainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryBookingDomainInfo',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBookingDomainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBookingDomainInfoRequest $request QueryBookingDomainInfoRequest
     *
     * @return QueryBookingDomainInfoResponse QueryBookingDomainInfoResponse
     */
    public function queryBookingDomainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBookingDomainInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询回购订单列表
     *  *
     * @param QueryBrokerDemandRequest $request QueryBrokerDemandRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryBrokerDemandResponse QueryBrokerDemandResponse
     */
    public function queryBrokerDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBrokerDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBrokerDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询回购订单列表
     *  *
     * @param QueryBrokerDemandRequest $request QueryBrokerDemandRequest
     *
     * @return QueryBrokerDemandResponse QueryBrokerDemandResponse
     */
    public function queryBrokerDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBrokerDemandWithOptions($request, $runtime);
    }

    /**
     * @param QueryBrokerDemandRecordRequest $request QueryBrokerDemandRecordRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryBrokerDemandRecordResponse QueryBrokerDemandRecordResponse
     */
    public function queryBrokerDemandRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBrokerDemandRecord',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBrokerDemandRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBrokerDemandRecordRequest $request QueryBrokerDemandRecordRequest
     *
     * @return QueryBrokerDemandRecordResponse QueryBrokerDemandRecordResponse
     */
    public function queryBrokerDemandRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBrokerDemandRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryDomainTransferStatusRequest $request QueryDomainTransferStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDomainTransferStatusResponse QueryDomainTransferStatusResponse
     */
    public function queryDomainTransferStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDomainTransferStatus',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDomainTransferStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDomainTransferStatusRequest $request QueryDomainTransferStatusRequest
     *
     * @return QueryDomainTransferStatusResponse QueryDomainTransferStatusResponse
     */
    public function queryDomainTransferStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDomainTransferStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryPurchasedDomainsRequest $request QueryPurchasedDomainsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPurchasedDomainsResponse QueryPurchasedDomainsResponse
     */
    public function queryPurchasedDomainsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endOperationTime)) {
            $body['EndOperationTime'] = $request->endOperationTime;
        }
        if (!Utils::isUnset($request->opTimeOrder)) {
            $body['OpTimeOrder'] = $request->opTimeOrder;
        }
        if (!Utils::isUnset($request->operationStatus)) {
            $body['OperationStatus'] = $request->operationStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->startOperationTime)) {
            $body['StartOperationTime'] = $request->startOperationTime;
        }
        if (!Utils::isUnset($request->updateTimeOrder)) {
            $body['UpdateTimeOrder'] = $request->updateTimeOrder;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryPurchasedDomains',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPurchasedDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPurchasedDomainsRequest $request QueryPurchasedDomainsRequest
     *
     * @return QueryPurchasedDomainsResponse QueryPurchasedDomainsResponse
     */
    public function queryPurchasedDomains($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPurchasedDomainsWithOptions($request, $runtime);
    }

    /**
     * @param RecordDemandRequest $request RecordDemandRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RecordDemandResponse RecordDemandResponse
     */
    public function recordDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecordDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecordDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecordDemandRequest $request RecordDemandRequest
     *
     * @return RecordDemandResponse RecordDemandResponse
     */
    public function recordDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordDemandWithOptions($request, $runtime);
    }

    /**
     * @param RefuseDemandRequest $request RefuseDemandRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RefuseDemandResponse RefuseDemandResponse
     */
    public function refuseDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefuseDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefuseDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefuseDemandRequest $request RefuseDemandRequest
     *
     * @return RefuseDemandResponse RefuseDemandResponse
     */
    public function refuseDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refuseDemandWithOptions($request, $runtime);
    }

    /**
     * @param RequestPayDemandRequest $request RequestPayDemandRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RequestPayDemandResponse RequestPayDemandResponse
     */
    public function requestPayDemandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->price)) {
            $query['Price'] = $request->price;
        }
        if (!Utils::isUnset($request->produceType)) {
            $query['ProduceType'] = $request->produceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RequestPayDemand',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RequestPayDemandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RequestPayDemandRequest $request RequestPayDemandRequest
     *
     * @return RequestPayDemandResponse RequestPayDemandResponse
     */
    public function requestPayDemand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestPayDemandWithOptions($request, $runtime);
    }

    /**
     * @param ReserveDomainRequest $request ReserveDomainRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ReserveDomainResponse ReserveDomainResponse
     */
    public function reserveDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channels)) {
            $body['Channels'] = $request->channels;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReserveDomain',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReserveDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReserveDomainRequest $request ReserveDomainRequest
     *
     * @return ReserveDomainResponse ReserveDomainResponse
     */
    public function reserveDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reserveDomainWithOptions($request, $runtime);
    }

    /**
     * @param ReserveIntlDomainRequest $request ReserveIntlDomainRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ReserveIntlDomainResponse ReserveIntlDomainResponse
     */
    public function reserveIntlDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReserveIntlDomain',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReserveIntlDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReserveIntlDomainRequest $request ReserveIntlDomainRequest
     *
     * @return ReserveIntlDomainResponse ReserveIntlDomainResponse
     */
    public function reserveIntlDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reserveIntlDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 严选列表导出，明日凌晨2点前生成文件，导出凌晨1点前所有在售严选域名
     *  *
     * @param SelectedDomainListRequest $request SelectedDomainListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SelectedDomainListResponse SelectedDomainListResponse
     */
    public function selectedDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listDate)) {
            $query['ListDate'] = $request->listDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SelectedDomainList',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SelectedDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 严选列表导出，明日凌晨2点前生成文件，导出凌晨1点前所有在售严选域名
     *  *
     * @param SelectedDomainListRequest $request SelectedDomainListRequest
     *
     * @return SelectedDomainListResponse SelectedDomainListResponse
     */
    public function selectedDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->selectedDomainListWithOptions($request, $runtime);
    }

    /**
     * @summary 提交采购信息
     *  *
     * @param SubmitPurchaseInfoRequest $request SubmitPurchaseInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitPurchaseInfoResponse SubmitPurchaseInfoResponse
     */
    public function submitPurchaseInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizId)) {
            $body['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->purchaseCurrency)) {
            $body['PurchaseCurrency'] = $request->purchaseCurrency;
        }
        if (!Utils::isUnset($request->purchasePrice)) {
            $body['PurchasePrice'] = $request->purchasePrice;
        }
        if (!Utils::isUnset($request->purchaseProofs)) {
            $body['PurchaseProofs'] = $request->purchaseProofs;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitPurchaseInfo',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitPurchaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交采购信息
     *  *
     * @param SubmitPurchaseInfoRequest $request SubmitPurchaseInfoRequest
     *
     * @return SubmitPurchaseInfoResponse SubmitPurchaseInfoResponse
     */
    public function submitPurchaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPurchaseInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 合作方同步报价
     *  *
     * @param UpdatePartnerReservePriceRequest $request UpdatePartnerReservePriceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePartnerReservePriceResponse UpdatePartnerReservePriceResponse
     */
    public function updatePartnerReservePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->biddingId)) {
            $body['BiddingId'] = $request->biddingId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $body['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->partnerType)) {
            $body['PartnerType'] = $request->partnerType;
        }
        if (!Utils::isUnset($request->reservePrice)) {
            $body['ReservePrice'] = $request->reservePrice;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePartnerReservePrice',
            'version'     => '2018-02-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePartnerReservePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 合作方同步报价
     *  *
     * @param UpdatePartnerReservePriceRequest $request UpdatePartnerReservePriceRequest
     *
     * @return UpdatePartnerReservePriceResponse UpdatePartnerReservePriceResponse
     */
    public function updatePartnerReservePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePartnerReservePriceWithOptions($request, $runtime);
    }
}
