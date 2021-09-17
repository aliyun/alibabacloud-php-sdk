<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityHeaders;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityRequest;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AliGenie extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aligenie', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetDeviceIdByIdentityRequest $request
     *
     * @return GetDeviceIdByIdentityResponse
     */
    public function getDeviceIdByIdentity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeviceIdByIdentityHeaders([]);

        return $this->getDeviceIdByIdentityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceIdByIdentityRequest $request
     * @param GetDeviceIdByIdentityHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeviceIdByIdentityResponse
     */
    public function getDeviceIdByIdentityWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identityType)) {
            @$query['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->encodeType)) {
            @$query['EncodeType'] = $request->encodeType;
        }
        if (!Utils::isUnset($request->identityId)) {
            @$query['IdentityId'] = $request->identityId;
        }
        if (!Utils::isUnset($request->productKey)) {
            @$query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->encodeKey)) {
            @$query['EncodeKey'] = $request->encodeKey;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            @$realHeaders['x-acs-aligenie-access-token'] = $headers->xAcsAligenieAccessToken;
        }
        if (!Utils::isUnset($headers->authorization)) {
            @$realHeaders['Authorization'] = $headers->authorization;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceIdByIdentity',
            'version'     => 'ssp_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ssp/getDeviceIdByIdentity',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceIdByIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
