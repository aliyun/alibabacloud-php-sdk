<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\ApplyCoordinationWithCodeRequest;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\ApplyCoordinationWithCodeResponse;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\EndAllCoordinationByOwnerRequest;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\EndAllCoordinationByOwnerResponse;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\GenerateCoordinationCodeRequest;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\GenerateCoordinationCodeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Metaspace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('metaspace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 用协同码发起协同.
     *
     * @param request - ApplyCoordinationWithCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyCoordinationWithCodeResponse
     *
     * @param ApplyCoordinationWithCodeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ApplyCoordinationWithCodeResponse
     */
    public function applyCoordinationWithCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->coordinationCode) {
            @$body['CoordinationCode'] = $request->coordinationCode;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApplyCoordinationWithCode',
            'version' => '2022-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyCoordinationWithCodeResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 用协同码发起协同.
     *
     * @param request - ApplyCoordinationWithCodeRequest
     *
     * @returns ApplyCoordinationWithCodeResponse
     *
     * @param ApplyCoordinationWithCodeRequest $request
     *
     * @return ApplyCoordinationWithCodeResponse
     */
    public function applyCoordinationWithCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinationWithCodeWithOptions($request, $runtime);
    }

    /**
     * Owner主动结束本次协同，同步失效协同码
     *
     * @param request - EndAllCoordinationByOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EndAllCoordinationByOwnerResponse
     *
     * @param EndAllCoordinationByOwnerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EndAllCoordinationByOwnerResponse
     */
    public function endAllCoordinationByOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$body['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EndAllCoordinationByOwner',
            'version' => '2022-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EndAllCoordinationByOwnerResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * Owner主动结束本次协同，同步失效协同码
     *
     * @param request - EndAllCoordinationByOwnerRequest
     *
     * @returns EndAllCoordinationByOwnerResponse
     *
     * @param EndAllCoordinationByOwnerRequest $request
     *
     * @return EndAllCoordinationByOwnerResponse
     */
    public function endAllCoordinationByOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endAllCoordinationByOwnerWithOptions($request, $runtime);
    }

    /**
     * 生成协同码
     *
     * @param request - GenerateCoordinationCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateCoordinationCodeResponse
     *
     * @param GenerateCoordinationCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceName) {
            @$body['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceRegionId) {
            @$body['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateCoordinationCode',
            'version' => '2022-03-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateCoordinationCodeResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 生成协同码
     *
     * @param request - GenerateCoordinationCodeRequest
     *
     * @returns GenerateCoordinationCodeResponse
     *
     * @param GenerateCoordinationCodeRequest $request
     *
     * @return GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCoordinationCodeWithOptions($request, $runtime);
    }
}
