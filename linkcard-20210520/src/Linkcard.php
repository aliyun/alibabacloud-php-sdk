<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCredentialPoolStatisticsResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\RebindResumeSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\ResumeSingleCardShrinkRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardRequest;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardResponse;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\StopSingleCardShrinkRequest;
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
}
