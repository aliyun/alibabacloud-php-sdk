<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlscloudmeta\V20200709;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Nlscloudmeta\V20200709\Models\CreateTokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CreateTokenResponse
     */
    public function createTokenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return CreateTokenResponse::fromMap($this->doRPCRequest('CreateToken', '2020-07-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return CreateTokenResponse
     */
    public function createToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTokenWithOptions($runtime);
    }
}
