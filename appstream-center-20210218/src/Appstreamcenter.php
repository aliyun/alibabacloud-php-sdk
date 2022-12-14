<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210218\Models\GetAuthCodeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetAuthCodeRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAuthCodeResponse
     */
    public function getAuthCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->externalUserId)) {
            $body['ExternalUserId'] = $request->externalUserId;
        }
        if (!Utils::isUnset($request->policy)) {
            $body['Policy'] = $request->policy;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAuthCode',
            'version'     => '2021-02-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuthCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuthCodeRequest $request
     *
     * @return GetAuthCodeResponse
     */
    public function getAuthCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuthCodeWithOptions($request, $runtime);
    }
}
