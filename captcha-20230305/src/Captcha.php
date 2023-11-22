<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Captcha\V20230305;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Captcha\V20230305\Models\VerifyCaptchaRequest;
use AlibabaCloud\SDK\Captcha\V20230305\Models\VerifyCaptchaResponse;
use AlibabaCloud\SDK\Captcha\V20230305\Models\VerifyIntelligentCaptchaRequest;
use AlibabaCloud\SDK\Captcha\V20230305\Models\VerifyIntelligentCaptchaResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Captcha extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('captcha', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param VerifyCaptchaRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifyCaptchaResponse
     */
    public function verifyCaptchaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->captchaVerifyParam)) {
            $query['CaptchaVerifyParam'] = $request->captchaVerifyParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyCaptcha',
            'version'     => '2023-03-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyCaptchaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyCaptchaRequest $request
     *
     * @return VerifyCaptchaResponse
     */
    public function verifyCaptcha($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCaptchaWithOptions($request, $runtime);
    }

    /**
     * @param VerifyIntelligentCaptchaRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return VerifyIntelligentCaptchaResponse
     */
    public function verifyIntelligentCaptchaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->captchaVerifyParam)) {
            $body['CaptchaVerifyParam'] = $request->captchaVerifyParam;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $body['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyIntelligentCaptcha',
            'version'     => '2023-03-05',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyIntelligentCaptchaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyIntelligentCaptchaRequest $request
     *
     * @return VerifyIntelligentCaptchaResponse
     */
    public function verifyIntelligentCaptcha($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyIntelligentCaptchaWithOptions($request, $runtime);
    }
}
