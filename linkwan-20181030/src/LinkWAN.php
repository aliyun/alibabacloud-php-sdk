<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkWAN\V20181030;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\LinkWAN\V20181030\Models\GetKpmEncryptedNodeTuplesByOrderIdRequest;
use AlibabaCloud\SDK\LinkWAN\V20181030\Models\GetKpmEncryptedNodeTuplesByOrderIdResponse;
use AlibabaCloud\SDK\LinkWAN\V20181030\Models\SubmitKpmEncryptedNodeTupleOrderRequest;
use AlibabaCloud\SDK\LinkWAN\V20181030\Models\SubmitKpmEncryptedNodeTupleOrderResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class LinkWAN extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkwan', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetKpmEncryptedNodeTuplesByOrderIdRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetKpmEncryptedNodeTuplesByOrderIdResponse
     */
    public function getKpmEncryptedNodeTuplesByOrderIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetKpmEncryptedNodeTuplesByOrderIdResponse::fromMap($this->doRPCRequest('GetKpmEncryptedNodeTuplesByOrderId', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetKpmEncryptedNodeTuplesByOrderIdRequest $request
     *
     * @return GetKpmEncryptedNodeTuplesByOrderIdResponse
     */
    public function getKpmEncryptedNodeTuplesByOrderId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKpmEncryptedNodeTuplesByOrderIdWithOptions($request, $runtime);
    }

    /**
     * @param SubmitKpmEncryptedNodeTupleOrderRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitKpmEncryptedNodeTupleOrderResponse
     */
    public function submitKpmEncryptedNodeTupleOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitKpmEncryptedNodeTupleOrderResponse::fromMap($this->doRPCRequest('SubmitKpmEncryptedNodeTupleOrder', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitKpmEncryptedNodeTupleOrderRequest $request
     *
     * @return SubmitKpmEncryptedNodeTupleOrderResponse
     */
    public function submitKpmEncryptedNodeTupleOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitKpmEncryptedNodeTupleOrderWithOptions($request, $runtime);
    }
}
