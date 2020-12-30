<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotChgBindOrUnBindRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotChgBindOrUnBindResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotIsImeiExistRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotIsImeiExistResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotPostImeiRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotPostImeiResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotRechargeRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotRechargeResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotSetAbsoluteRemindConfigRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotSetAbsoluteRemindConfigResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotSetRemindConfigRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotSetRemindConfigResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotUnbindResumeRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotUnbindResumeResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotUserStopResumeRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotUserStopResumeResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoSendIotSmsRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoSendIotSmsResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardFlowInfoRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardFlowInfoResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardHistoryFlowInfoRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardHistoryFlowInfoResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardInfoRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardInfoResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardsInfoRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardsInfoResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardStatusRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardStatusResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryIotCardOfferDtlRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryIotCardOfferDtlResponse;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryPersonalInfoRequest;
use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryPersonalInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dyiotapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyiotapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DoIotChgBindOrUnBindRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DoIotChgBindOrUnBindResponse
     */
    public function doIotChgBindOrUnBindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotChgBindOrUnBindResponse::fromMap($this->doRPCRequest('DoIotChgBindOrUnBind', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotChgBindOrUnBindRequest $request
     *
     * @return DoIotChgBindOrUnBindResponse
     */
    public function doIotChgBindOrUnBind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotChgBindOrUnBindWithOptions($request, $runtime);
    }

    /**
     * @param DoIotIsImeiExistRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DoIotIsImeiExistResponse
     */
    public function doIotIsImeiExistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotIsImeiExistResponse::fromMap($this->doRPCRequest('DoIotIsImeiExist', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotIsImeiExistRequest $request
     *
     * @return DoIotIsImeiExistResponse
     */
    public function doIotIsImeiExist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotIsImeiExistWithOptions($request, $runtime);
    }

    /**
     * @param DoIotPostImeiRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DoIotPostImeiResponse
     */
    public function doIotPostImeiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotPostImeiResponse::fromMap($this->doRPCRequest('DoIotPostImei', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotPostImeiRequest $request
     *
     * @return DoIotPostImeiResponse
     */
    public function doIotPostImei($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotPostImeiWithOptions($request, $runtime);
    }

    /**
     * @param DoIotRechargeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DoIotRechargeResponse
     */
    public function doIotRechargeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotRechargeResponse::fromMap($this->doRPCRequest('DoIotRecharge', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotRechargeRequest $request
     *
     * @return DoIotRechargeResponse
     */
    public function doIotRecharge($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotRechargeWithOptions($request, $runtime);
    }

    /**
     * @param DoIotSetAbsoluteRemindConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DoIotSetAbsoluteRemindConfigResponse
     */
    public function doIotSetAbsoluteRemindConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotSetAbsoluteRemindConfigResponse::fromMap($this->doRPCRequest('DoIotSetAbsoluteRemindConfig', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotSetAbsoluteRemindConfigRequest $request
     *
     * @return DoIotSetAbsoluteRemindConfigResponse
     */
    public function doIotSetAbsoluteRemindConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotSetAbsoluteRemindConfigWithOptions($request, $runtime);
    }

    /**
     * @param DoIotSetRemindConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DoIotSetRemindConfigResponse
     */
    public function doIotSetRemindConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotSetRemindConfigResponse::fromMap($this->doRPCRequest('DoIotSetRemindConfig', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotSetRemindConfigRequest $request
     *
     * @return DoIotSetRemindConfigResponse
     */
    public function doIotSetRemindConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotSetRemindConfigWithOptions($request, $runtime);
    }

    /**
     * @param DoIotUnbindResumeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DoIotUnbindResumeResponse
     */
    public function doIotUnbindResumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotUnbindResumeResponse::fromMap($this->doRPCRequest('DoIotUnbindResume', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotUnbindResumeRequest $request
     *
     * @return DoIotUnbindResumeResponse
     */
    public function doIotUnbindResume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotUnbindResumeWithOptions($request, $runtime);
    }

    /**
     * @param DoIotUserStopResumeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DoIotUserStopResumeResponse
     */
    public function doIotUserStopResumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoIotUserStopResumeResponse::fromMap($this->doRPCRequest('DoIotUserStopResume', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoIotUserStopResumeRequest $request
     *
     * @return DoIotUserStopResumeResponse
     */
    public function doIotUserStopResume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doIotUserStopResumeWithOptions($request, $runtime);
    }

    /**
     * @param DoSendIotSmsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DoSendIotSmsResponse
     */
    public function doSendIotSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoSendIotSmsResponse::fromMap($this->doRPCRequest('DoSendIotSms', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoSendIotSmsRequest $request
     *
     * @return DoSendIotSmsResponse
     */
    public function doSendIotSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doSendIotSmsWithOptions($request, $runtime);
    }

    /**
     * @param QueryCardFlowInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryCardFlowInfoResponse
     */
    public function queryCardFlowInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCardFlowInfoResponse::fromMap($this->doRPCRequest('QueryCardFlowInfo', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCardFlowInfoRequest $request
     *
     * @return QueryCardFlowInfoResponse
     */
    public function queryCardFlowInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardFlowInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryCardHistoryFlowInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCardHistoryFlowInfoResponse
     */
    public function queryCardHistoryFlowInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCardHistoryFlowInfoResponse::fromMap($this->doRPCRequest('QueryCardHistoryFlowInfo', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCardHistoryFlowInfoRequest $request
     *
     * @return QueryCardHistoryFlowInfoResponse
     */
    public function queryCardHistoryFlowInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardHistoryFlowInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryCardInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCardInfoResponse
     */
    public function queryCardInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCardInfoResponse::fromMap($this->doRPCRequest('QueryCardInfo', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCardInfoRequest $request
     *
     * @return QueryCardInfoResponse
     */
    public function queryCardInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryCardsInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryCardsInfoResponse
     */
    public function queryCardsInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCardsInfoResponse::fromMap($this->doRPCRequest('QueryCardsInfo', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCardsInfoRequest $request
     *
     * @return QueryCardsInfoResponse
     */
    public function queryCardsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardsInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryCardStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryCardStatusResponse
     */
    public function queryCardStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCardStatusResponse::fromMap($this->doRPCRequest('QueryCardStatus', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCardStatusRequest $request
     *
     * @return QueryCardStatusResponse
     */
    public function queryCardStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryIotCardOfferDtlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryIotCardOfferDtlResponse
     */
    public function queryIotCardOfferDtlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIotCardOfferDtlResponse::fromMap($this->doRPCRequest('QueryIotCardOfferDtl', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryIotCardOfferDtlRequest $request
     *
     * @return QueryIotCardOfferDtlResponse
     */
    public function queryIotCardOfferDtl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIotCardOfferDtlWithOptions($request, $runtime);
    }

    /**
     * @param QueryPersonalInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPersonalInfoResponse
     */
    public function queryPersonalInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPersonalInfoResponse::fromMap($this->doRPCRequest('QueryPersonalInfo', '2017-11-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPersonalInfoRequest $request
     *
     * @return QueryPersonalInfoResponse
     */
    public function queryPersonalInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPersonalInfoWithOptions($request, $runtime);
    }
}
