<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlscloudmeta\V20190228;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Nlscloudmeta\V20190228\Models\CreateTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Nlscloudmeta extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('nls-cloud-meta', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 创建鉴权Token.
     *
     * @param request - CreateTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTokenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CreateTokenResponse
     */
    public function createTokenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CreateToken',
            'version' => '2019-02-28',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建鉴权Token.
     *
     * @returns CreateTokenResponse
     *
     * @return CreateTokenResponse
     */
    public function createToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($runtime);
    }
}
