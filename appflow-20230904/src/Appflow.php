<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GenerateUserSessionTokenRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GenerateUserSessionTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appflow extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appflow', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Generate Login Session Token.
     *
     * @param request - GenerateUserSessionTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUserSessionTokenResponse
     *
     * @param GenerateUserSessionTokenRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateUserSessionTokenResponse
     */
    public function generateUserSessionTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chatbotId) {
            @$query['ChatbotId'] = $request->chatbotId;
        }

        if (null !== $request->expireSecond) {
            @$query['ExpireSecond'] = $request->expireSecond;
        }

        if (null !== $request->integrateId) {
            @$query['IntegrateId'] = $request->integrateId;
        }

        if (null !== $request->userAvatar) {
            @$query['UserAvatar'] = $request->userAvatar;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUserSessionToken',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUserSessionTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate Login Session Token.
     *
     * @param request - GenerateUserSessionTokenRequest
     *
     * @returns GenerateUserSessionTokenResponse
     *
     * @param GenerateUserSessionTokenRequest $request
     *
     * @return GenerateUserSessionTokenResponse
     */
    public function generateUserSessionToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUserSessionTokenWithOptions($request, $runtime);
    }
}
