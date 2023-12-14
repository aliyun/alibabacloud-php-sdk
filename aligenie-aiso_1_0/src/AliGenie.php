<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vaiso_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\AppAuthHeaders;
use AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\AppAuthRequest;
use AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\AppAuthResponse;
use AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\FaceActionRecognizeHeaders;
use AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\FaceActionRecognizeRequest;
use AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models\FaceActionRecognizeResponse;
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
     * @param AppAuthRequest $request
     * @param AppAuthHeaders $headers
     * @param RuntimeOptions $runtime
     *
     * @return AppAuthResponse
     */
    public function appAuthWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['AccessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppAuth',
            'version'     => 'aiso_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/aiso/AppAuth',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AppAuthRequest $request
     *
     * @return AppAuthResponse
     */
    public function appAuth($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AppAuthHeaders([]);

        return $this->appAuthWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FaceActionRecognizeRequest $request
     * @param FaceActionRecognizeHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return FaceActionRecognizeResponse
     */
    public function faceActionRecognizeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jsonString)) {
            $body['JsonString'] = $request->jsonString;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FaceActionRecognize',
            'version'     => 'aiso_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/aiso/FaceActionRecognize',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FaceActionRecognizeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FaceActionRecognizeRequest $request
     *
     * @return FaceActionRecognizeResponse
     */
    public function faceActionRecognize($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FaceActionRecognizeHeaders([]);

        return $this->faceActionRecognizeWithOptions($request, $headers, $runtime);
    }
}
