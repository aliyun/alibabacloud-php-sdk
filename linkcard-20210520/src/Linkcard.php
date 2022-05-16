<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\CardStatisticsResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ForceActivationRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ForceActivationResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListCardInfoRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListCardInfoResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListOrderResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RenewRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RenewResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\SetCardStopRuleRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\SetCardStopRuleResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\UpdateAutoRechargeSwitchRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\UpdateAutoRechargeSwitchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Linkcard extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkcard', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RuntimeOptions $runtime
     *
     * @return CardStatisticsResponse
     */
    public function cardStatisticsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CardStatistics',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CardStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CardStatisticsResponse
     */
    public function cardStatistics()
    {
        $runtime = new RuntimeOptions([]);

        return $this->cardStatisticsWithOptions($runtime);
    }

    /**
     * @param ForceActivationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ForceActivationResponse
     */
    public function forceActivationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dateType)) {
            $query['DateType'] = $request->dateType;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForceActivation',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForceActivationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForceActivationRequest $request
     *
     * @return ForceActivationResponse
     */
    public function forceActivation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forceActivationWithOptions($request, $runtime);
    }

    /**
     * @param GetCardDetailRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCardDetailResponse
     */
    public function getCardDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destroyCard)) {
            $query['DestroyCard'] = $request->destroyCard;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->showPsim)) {
            $query['ShowPsim'] = $request->showPsim;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardDetail',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardDetailRequest $request
     *
     * @return GetCardDetailResponse
     */
    public function getCardDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetCardFlowInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCardFlowInfoResponse
     */
    public function getCardFlowInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dateList)) {
            $query['DateList'] = $request->dateList;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCardFlowInfo',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCardFlowInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCardFlowInfoRequest $request
     *
     * @return GetCardFlowInfoResponse
     */
    public function getCardFlowInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCardFlowInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetCredentialPoolStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetCredentialPoolStatisticsResponse
     */
    public function getCredentialPoolStatisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->credentialNO)) {
            $query['CredentialNO'] = $request->credentialNO;
        }
        if (!Utils::isUnset($request->date)) {
            $query['Date'] = $request->date;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCredentialPoolStatistics',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCredentialPoolStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCredentialPoolStatisticsRequest $request
     *
     * @return GetCredentialPoolStatisticsResponse
     */
    public function getCredentialPoolStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCredentialPoolStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param ListCardInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCardInfoResponse
     */
    public function listCardInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activeTimeEnd)) {
            $query['ActiveTimeEnd'] = $request->activeTimeEnd;
        }
        if (!Utils::isUnset($request->activeTimeStart)) {
            $query['ActiveTimeStart'] = $request->activeTimeStart;
        }
        if (!Utils::isUnset($request->aliFee)) {
            $query['AliFee'] = $request->aliFee;
        }
        if (!Utils::isUnset($request->aliyunOrderId)) {
            $query['AliyunOrderId'] = $request->aliyunOrderId;
        }
        if (!Utils::isUnset($request->apnName)) {
            $query['ApnName'] = $request->apnName;
        }
        if (!Utils::isUnset($request->certifyType)) {
            $query['CertifyType'] = $request->certifyType;
        }
        if (!Utils::isUnset($request->credentialNo)) {
            $query['CredentialNo'] = $request->credentialNo;
        }
        if (!Utils::isUnset($request->dataLevel)) {
            $query['DataLevel'] = $request->dataLevel;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->directionalGroupId)) {
            $query['DirectionalGroupId'] = $request->directionalGroupId;
        }
        if (!Utils::isUnset($request->expireTimeEnd)) {
            $query['ExpireTimeEnd'] = $request->expireTimeEnd;
        }
        if (!Utils::isUnset($request->expireTimeStart)) {
            $query['ExpireTimeStart'] = $request->expireTimeStart;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->imsi)) {
            $query['Imsi'] = $request->imsi;
        }
        if (!Utils::isUnset($request->isAutoRecharge)) {
            $query['IsAutoRecharge'] = $request->isAutoRecharge;
        }
        if (!Utils::isUnset($request->msisdn)) {
            $query['Msisdn'] = $request->msisdn;
        }
        if (!Utils::isUnset($request->notifyId)) {
            $query['NotifyId'] = $request->notifyId;
        }
        if (!Utils::isUnset($request->osStatus)) {
            $query['OsStatus'] = $request->osStatus;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->poolId)) {
            $query['PoolId'] = $request->poolId;
        }
        if (!Utils::isUnset($request->simType)) {
            $query['SimType'] = $request->simType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCardInfo',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCardInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCardInfoRequest $request
     *
     * @return ListCardInfoResponse
     */
    public function listCardInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCardInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListOrderRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListOrderResponse
     */
    public function listOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->orderStatus)) {
            $query['OrderStatus'] = $request->orderStatus;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrder',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOrderRequest $request
     *
     * @return ListOrderResponse
     */
    public function listOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrderWithOptions($request, $runtime);
    }

    /**
     * @param RebindResumeSingleCardRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return RebindResumeSingleCardResponse
     */
    public function rebindResumeSingleCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RebindResumeSingleCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optMsisdns)) {
            $request->optMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optMsisdns, 'OptMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->optMsisdnsShrink)) {
            $query['OptMsisdns'] = $request->optMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebindResumeSingleCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebindResumeSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebindResumeSingleCardRequest $request
     *
     * @return RebindResumeSingleCardResponse
     */
    public function rebindResumeSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebindResumeSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param RenewRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return RenewResponse
     */
    public function renewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buyNum)) {
            $query['BuyNum'] = $request->buyNum;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->offerCode)) {
            $query['OfferCode'] = $request->offerCode;
        }
        if (!Utils::isUnset($request->rechargeType)) {
            $query['RechargeType'] = $request->rechargeType;
        }
        if (!Utils::isUnset($request->serialNo)) {
            $query['SerialNo'] = $request->serialNo;
        }
        $body = [];
        if (!Utils::isUnset($request->apiProduct)) {
            $body['ApiProduct'] = $request->apiProduct;
        }
        if (!Utils::isUnset($request->apiRevision)) {
            $body['ApiRevision'] = $request->apiRevision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Renew',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewRequest $request
     *
     * @return RenewResponse
     */
    public function renew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewWithOptions($request, $runtime);
    }

    /**
     * @param ResumeSingleCardRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ResumeSingleCardResponse
     */
    public function resumeSingleCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResumeSingleCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optMsisdns)) {
            $request->optMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optMsisdns, 'OptMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->optMsisdnsShrink)) {
            $query['OptMsisdns'] = $request->optMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeSingleCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeSingleCardRequest $request
     *
     * @return ResumeSingleCardResponse
     */
    public function resumeSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param SetCardStopRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetCardStopRuleResponse
     */
    public function setCardStopRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRestore)) {
            $query['AutoRestore'] = $request->autoRestore;
        }
        if (!Utils::isUnset($request->flowLimit)) {
            $query['FlowLimit'] = $request->flowLimit;
        }
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetCardStopRule',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCardStopRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetCardStopRuleRequest $request
     *
     * @return SetCardStopRuleResponse
     */
    public function setCardStopRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCardStopRuleWithOptions($request, $runtime);
    }

    /**
     * @param StopSingleCardRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StopSingleCardResponse
     */
    public function stopSingleCardWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopSingleCardShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->optMsisdns)) {
            $request->optMsisdnsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->optMsisdns, 'OptMsisdns', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->optMsisdnsShrink)) {
            $query['OptMsisdns'] = $request->optMsisdnsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopSingleCard',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopSingleCardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopSingleCardRequest $request
     *
     * @return StopSingleCardResponse
     */
    public function stopSingleCard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSingleCardWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAutoRechargeSwitchRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAutoRechargeSwitchResponse
     */
    public function updateAutoRechargeSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iccid)) {
            $query['Iccid'] = $request->iccid;
        }
        if (!Utils::isUnset($request->open)) {
            $query['Open'] = $request->open;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutoRechargeSwitch',
            'version'     => '2021-05-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAutoRechargeSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAutoRechargeSwitchRequest $request
     *
     * @return UpdateAutoRechargeSwitchResponse
     */
    public function updateAutoRechargeSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoRechargeSwitchWithOptions($request, $runtime);
    }
}
