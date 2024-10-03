<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Wss extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId    = 'wss';
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wss', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeliveryAddressResponse DescribeDeliveryAddressResponse
     */
    public function describeDeliveryAddressWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeDeliveryAddress',
            'version'     => '2021-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDeliveryAddressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDeliveryAddressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @return DescribeDeliveryAddressResponse DescribeDeliveryAddressResponse
     */
    public function describeDeliveryAddress()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeliveryAddressWithOptions($runtime);
    }

    /**
     * @summary 查询核时包抵扣明细
     *  *
     * @param DescribePackageDeductionsRequest $request DescribePackageDeductionsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePackageDeductionsResponse DescribePackageDeductionsResponse
     */
    public function describePackageDeductionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->packageIds)) {
            $query['PackageIds'] = $request->packageIds;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePackageDeductions',
            'version'     => '2021-12-21',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePackageDeductionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePackageDeductionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询核时包抵扣明细
     *  *
     * @param DescribePackageDeductionsRequest $request DescribePackageDeductionsRequest
     *
     * @return DescribePackageDeductionsResponse DescribePackageDeductionsResponse
     */
    public function describePackageDeductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageDeductionsWithOptions($request, $runtime);
    }
}
