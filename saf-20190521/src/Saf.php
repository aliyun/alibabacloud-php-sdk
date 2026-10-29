<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestMLRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestMLResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestSGRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestSGResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\RequestDecisionRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\RequestDecisionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Saf extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'saf.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('saf', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Detects risks. This API operation supports public service invocation and allows you to invoke custom events.
     *
     * @param request - ExecuteRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteRequestResponse
     *
     * @param ExecuteRequestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExecuteRequestResponse
     */
    public function executeRequestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$query['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteRequest',
            'version' => '2019-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects risks. This API operation supports public service invocation and allows you to invoke custom events.
     *
     * @param request - ExecuteRequestRequest
     *
     * @returns ExecuteRequestResponse
     *
     * @param ExecuteRequestRequest $request
     *
     * @return ExecuteRequestResponse
     */
    public function executeRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestWithOptions($request, $runtime);
    }

    /**
     * Detects risks. This operation supports only custom event calls and is available only in the Malaysia region.
     *
     * @param request - ExecuteRequestMLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteRequestMLResponse
     *
     * @param ExecuteRequestMLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteRequestMLResponse
     */
    public function executeRequestMLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$query['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteRequestML',
            'version' => '2019-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteRequestMLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects risks. This operation supports only custom event calls and is available only in the Malaysia region.
     *
     * @param request - ExecuteRequestMLRequest
     *
     * @returns ExecuteRequestMLResponse
     *
     * @param ExecuteRequestMLRequest $request
     *
     * @return ExecuteRequestMLResponse
     */
    public function executeRequestML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestMLWithOptions($request, $runtime);
    }

    /**
     * Detects risks. This API allows you to invoke public services and custom events.
     *
     * @param request - ExecuteRequestSGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteRequestSGResponse
     *
     * @param ExecuteRequestSGRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteRequestSGResponse
     */
    public function executeRequestSGWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$query['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteRequestSG',
            'version' => '2019-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteRequestSGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects risks. This API allows you to invoke public services and custom events.
     *
     * @param request - ExecuteRequestSGRequest
     *
     * @returns ExecuteRequestSGResponse
     *
     * @param ExecuteRequestSGRequest $request
     *
     * @return ExecuteRequestSGResponse
     */
    public function executeRequestSG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestSGWithOptions($request, $runtime);
    }

    /**
     * Detects risks. This operation supports only custom event calls.
     *
     * @param request - RequestDecisionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RequestDecisionResponse
     *
     * @param RequestDecisionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RequestDecisionResponse
     */
    public function requestDecisionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventCode) {
            @$query['EventCode'] = $request->eventCode;
        }

        if (null !== $request->serviceParameters) {
            @$query['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RequestDecision',
            'version' => '2019-05-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RequestDecisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detects risks. This operation supports only custom event calls.
     *
     * @param request - RequestDecisionRequest
     *
     * @returns RequestDecisionResponse
     *
     * @param RequestDecisionRequest $request
     *
     * @return RequestDecisionResponse
     */
    public function requestDecision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->requestDecisionWithOptions($request, $runtime);
    }
}
