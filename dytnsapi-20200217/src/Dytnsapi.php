<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberAttributeResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberResaleRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberResaleResponse;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusRequest;
use AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dytnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dytnsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribePhoneNumberStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePhoneNumberStatusResponse
     */
    public function describePhoneNumberStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePhoneNumberStatusResponse::fromMap($this->doRPCRequest('DescribePhoneNumberStatus', '2020-02-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberStatusRequest $request
     *
     * @return DescribePhoneNumberStatusResponse
     */
    public function describePhoneNumberStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePhoneNumberAttributeResponse::fromMap($this->doRPCRequest('DescribePhoneNumberAttribute', '2020-02-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberAttributeRequest $request
     *
     * @return DescribePhoneNumberAttributeResponse
     */
    public function describePhoneNumberAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribePhoneNumberResaleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePhoneNumberResaleResponse
     */
    public function describePhoneNumberResaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePhoneNumberResaleResponse::fromMap($this->doRPCRequest('DescribePhoneNumberResale', '2020-02-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePhoneNumberResaleRequest $request
     *
     * @return DescribePhoneNumberResaleResponse
     */
    public function describePhoneNumberResale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePhoneNumberResaleWithOptions($request, $runtime);
    }
}
