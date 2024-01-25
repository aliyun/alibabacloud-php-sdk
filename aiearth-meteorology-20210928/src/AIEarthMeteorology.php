<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20210928;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AIEarthMeteorology\V20210928\Models\GridQueryRequest;
use AlibabaCloud\SDK\AIEarthMeteorology\V20210928\Models\GridQueryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AIEarthMeteorology extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aiearth-meteorology', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string           $dataType
     * @param GridQueryRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GridQueryResponse
     */
    public function gridQueryWithOptions($dataType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->element)) {
            $query['element'] = $request->element;
        }
        if (!Utils::isUnset($request->forecastTimestamp)) {
            $query['forecastTimestamp'] = $request->forecastTimestamp;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['pageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['product'] = $request->product;
        }
        if (!Utils::isUnset($request->reportTimestamp)) {
            $query['reportTimestamp'] = $request->reportTimestamp;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GridQuery',
            'version'     => '2021-09-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/grid/' . OpenApiUtilClient::getEncodeParam($dataType) . '/v1',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GridQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $dataType
     * @param GridQueryRequest $request
     *
     * @return GridQueryResponse
     */
    public function gridQuery($dataType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->gridQueryWithOptions($dataType, $request, $headers, $runtime);
    }
}
