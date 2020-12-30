<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandOfferOrderRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandOfferOrderResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStartSpeedUpRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStartSpeedUpResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStatusQueryRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStatusQueryResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStopSpeedUpRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStopSpeedUpResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\MobileStartSpeedUpRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\MobileStartSpeedUpResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\MobileStatusQueryRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\MobileStatusQueryResponse;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\MobileStopSpeedUpRequest;
use AlibabaCloud\SDK\Snsuapi\V20180709\Models\MobileStopSpeedUpResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Snsuapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('snsuapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BandOfferOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BandOfferOrderResponse
     */
    public function bandOfferOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandOfferOrderResponse::fromMap($this->doRPCRequest('BandOfferOrder', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandOfferOrderRequest $request
     *
     * @return BandOfferOrderResponse
     */
    public function bandOfferOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandOfferOrderWithOptions($request, $runtime);
    }

    /**
     * @param BandPrecheckRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BandPrecheckResponse
     */
    public function bandPrecheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandPrecheckResponse::fromMap($this->doRPCRequest('BandPrecheck', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandPrecheckRequest $request
     *
     * @return BandPrecheckResponse
     */
    public function bandPrecheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandPrecheckWithOptions($request, $runtime);
    }

    /**
     * @param BandStartSpeedUpRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BandStartSpeedUpResponse
     */
    public function bandStartSpeedUpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandStartSpeedUpResponse::fromMap($this->doRPCRequest('BandStartSpeedUp', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandStartSpeedUpRequest $request
     *
     * @return BandStartSpeedUpResponse
     */
    public function bandStartSpeedUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandStartSpeedUpWithOptions($request, $runtime);
    }

    /**
     * @param BandStatusQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BandStatusQueryResponse
     */
    public function bandStatusQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandStatusQueryResponse::fromMap($this->doRPCRequest('BandStatusQuery', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandStatusQueryRequest $request
     *
     * @return BandStatusQueryResponse
     */
    public function bandStatusQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandStatusQueryWithOptions($request, $runtime);
    }

    /**
     * @param BandStopSpeedUpRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BandStopSpeedUpResponse
     */
    public function bandStopSpeedUpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BandStopSpeedUpResponse::fromMap($this->doRPCRequest('BandStopSpeedUp', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BandStopSpeedUpRequest $request
     *
     * @return BandStopSpeedUpResponse
     */
    public function bandStopSpeedUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bandStopSpeedUpWithOptions($request, $runtime);
    }

    /**
     * @param MobileStartSpeedUpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MobileStartSpeedUpResponse
     */
    public function mobileStartSpeedUpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MobileStartSpeedUpResponse::fromMap($this->doRPCRequest('MobileStartSpeedUp', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MobileStartSpeedUpRequest $request
     *
     * @return MobileStartSpeedUpResponse
     */
    public function mobileStartSpeedUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileStartSpeedUpWithOptions($request, $runtime);
    }

    /**
     * @param MobileStatusQueryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MobileStatusQueryResponse
     */
    public function mobileStatusQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MobileStatusQueryResponse::fromMap($this->doRPCRequest('MobileStatusQuery', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MobileStatusQueryRequest $request
     *
     * @return MobileStatusQueryResponse
     */
    public function mobileStatusQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileStatusQueryWithOptions($request, $runtime);
    }

    /**
     * @param MobileStopSpeedUpRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MobileStopSpeedUpResponse
     */
    public function mobileStopSpeedUpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MobileStopSpeedUpResponse::fromMap($this->doRPCRequest('MobileStopSpeedUp', '2018-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MobileStopSpeedUpRequest $request
     *
     * @return MobileStopSpeedUpResponse
     */
    public function mobileStopSpeedUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mobileStopSpeedUpWithOptions($request, $runtime);
    }
}
