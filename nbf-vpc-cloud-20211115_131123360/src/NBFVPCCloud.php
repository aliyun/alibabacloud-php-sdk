<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBFVPCCloud\V20211115_131123360;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\NBFVPCCloud\V20211115_131123360\Models\AdadaAResponse;
use AlibabaCloud\SDK\NBFVPCCloud\V20211115_131123360\Models\YxTestApiResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class NBFVPCCloud extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nbf-vpc-cloud', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AdadaAResponse
     */
    public function adadaAWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'AdadaA',
            'version'     => '2021-11-15_13-11-23-360',
            'protocol'    => 'HTTP',
            'pathname'    => '/caihe_cloud_product_1/1_0_0/adadaA',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AdadaAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return AdadaAResponse
     */
    public function adadaA()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->adadaAWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return YxTestApiResponse
     */
    public function yxTestApiWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'YxTestApi',
            'version'     => '2021-11-15_13-11-23-360',
            'protocol'    => 'HTTPS',
            'pathname'    => '/caihe_cloud_product_1/1_0_0/yxTestApi',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return YxTestApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return YxTestApiResponse
     */
    public function yxTestApi()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->yxTestApiWithOptions($headers, $runtime);
    }
}
