<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dycdpapi\V20180610;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferByIdRequest;
use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferByIdResponse;
use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferRequest;
use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferResponse;
use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOrderRequest;
use AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOrderResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dycdpapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dycdpapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param QueryCdpOfferRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCdpOfferResponse
     */
    public function queryCdpOfferWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCdpOfferResponse::fromMap($this->doRPCRequest('QueryCdpOffer', '2018-06-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCdpOfferRequest $request
     *
     * @return QueryCdpOfferResponse
     */
    public function queryCdpOffer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCdpOfferWithOptions($request, $runtime);
    }

    /**
     * @param QueryCdpOfferByIdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryCdpOfferByIdResponse
     */
    public function queryCdpOfferByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCdpOfferByIdResponse::fromMap($this->doRPCRequest('QueryCdpOfferById', '2018-06-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCdpOfferByIdRequest $request
     *
     * @return QueryCdpOfferByIdResponse
     */
    public function queryCdpOfferById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCdpOfferByIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryCdpOrderRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCdpOrderResponse
     */
    public function queryCdpOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCdpOrderResponse::fromMap($this->doRPCRequest('QueryCdpOrder', '2018-06-10', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryCdpOrderRequest $request
     *
     * @return QueryCdpOrderResponse
     */
    public function queryCdpOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCdpOrderWithOptions($request, $runtime);
    }
}
