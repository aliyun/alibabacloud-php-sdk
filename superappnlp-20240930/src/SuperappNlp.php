<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SuperappNlp\V20240930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SuperappNlp\V20240930\Models\NlpAddressNormalizationRequest;
use AlibabaCloud\SDK\SuperappNlp\V20240930\Models\NlpAddressNormalizationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class SuperappNlp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('superappnlp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 地址解析
     *  *
     * @param NlpAddressNormalizationRequest $request NlpAddressNormalizationRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return NlpAddressNormalizationResponse NlpAddressNormalizationResponse
     */
    public function nlpAddressNormalizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cityStdManual)) {
            $query['CityStdManual'] = $request->cityStdManual;
        }
        if (!Utils::isUnset($request->cityStr)) {
            $query['CityStr'] = $request->cityStr;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->districtStdManual)) {
            $query['DistrictStdManual'] = $request->districtStdManual;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->provinceStdManual)) {
            $query['ProvinceStdManual'] = $request->provinceStdManual;
        }
        if (!Utils::isUnset($request->provinceStr)) {
            $query['ProvinceStr'] = $request->provinceStr;
        }
        if (!Utils::isUnset($request->queryStr)) {
            $query['QueryStr'] = $request->queryStr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NlpAddressNormalization',
            'version'     => '2024-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NlpAddressNormalizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 地址解析
     *  *
     * @param NlpAddressNormalizationRequest $request NlpAddressNormalizationRequest
     *
     * @return NlpAddressNormalizationResponse NlpAddressNormalizationResponse
     */
    public function nlpAddressNormalization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nlpAddressNormalizationWithOptions($request, $runtime);
    }
}
