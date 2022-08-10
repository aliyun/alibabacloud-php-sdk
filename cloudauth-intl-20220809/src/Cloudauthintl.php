<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeRequest;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cloudauthintl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth-intl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param InitializeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InitializeResponse
     */
    public function initializeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->docType)) {
            $query['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->flowType)) {
            $query['FlowType'] = $request->flowType;
        }
        if (!Utils::isUnset($request->merchantBizId)) {
            $query['MerchantBizId'] = $request->merchantBizId;
        }
        if (!Utils::isUnset($request->merchantUserId)) {
            $query['MerchantUserId'] = $request->merchantUserId;
        }
        if (!Utils::isUnset($request->metaInfo)) {
            $query['MetaInfo'] = $request->metaInfo;
        }
        if (!Utils::isUnset($request->operationMode)) {
            $query['OperationMode'] = $request->operationMode;
        }
        if (!Utils::isUnset($request->pages)) {
            $query['Pages'] = $request->pages;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productConfig)) {
            $query['ProductConfig'] = $request->productConfig;
        }
        if (!Utils::isUnset($request->sceneCode)) {
            $query['SceneCode'] = $request->sceneCode;
        }
        if (!Utils::isUnset($request->serviceLevel)) {
            $query['ServiceLevel'] = $request->serviceLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Initialize',
            'version'     => '2022-08-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitializeRequest $request
     *
     * @return InitializeResponse
     */
    public function initialize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeWithOptions($request, $runtime);
    }
}
