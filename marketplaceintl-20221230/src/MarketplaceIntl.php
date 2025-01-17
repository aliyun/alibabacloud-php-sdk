<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MarketplaceIntl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('marketplaceintl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 国际云市场推送计量数据
     *  *
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->gmtCreate)) {
            $body['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->meteringData)) {
            $body['MeteringData'] = $request->meteringData;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushMeteringData',
            'version'     => '2022-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushMeteringDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际云市场推送计量数据
     *  *
     * @param PushMeteringDataRequest $request PushMeteringDataRequest
     *
     * @return PushMeteringDataResponse PushMeteringDataResponse
     */
    public function pushMeteringData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMeteringDataWithOptions($request, $runtime);
    }
}
