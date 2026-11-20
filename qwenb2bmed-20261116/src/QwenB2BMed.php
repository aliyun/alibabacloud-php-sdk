<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261116;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalAgentChatHeaders;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalAgentChatRequest;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalAgentChatResponse;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalModelInferenceHeaders;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalModelInferenceRequest;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalModelInferenceResponse;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\OpenServiceHeaders;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\OpenServiceRequest;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\OpenServiceResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class QwenB2BMed extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'QwenB2BMed';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qwenb2bmed', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Initiates a conversation with the Qwen medical agent.
     *
     * @param request - MedicalAgentChatRequest
     * @param headers - MedicalAgentChatHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MedicalAgentChatResponse
     *
     * @param MedicalAgentChatRequest $request
     * @param MedicalAgentChatHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MedicalAgentChatResponse
     */
    public function medicalAgentChatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MedicalAgentChat',
            'version' => '2026-11-16',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/medicalQa',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield MedicalAgentChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Initiates a conversation with the Qwen medical agent.
     *
     * @param request - MedicalAgentChatRequest
     * @param headers - MedicalAgentChatHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MedicalAgentChatResponse
     *
     * @param MedicalAgentChatRequest $request
     * @param MedicalAgentChatHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MedicalAgentChatResponse
     */
    public function medicalAgentChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MedicalAgentChat',
            'version' => '2026-11-16',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/medicalQa',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MedicalAgentChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a conversation with the Qwen medical agent.
     *
     * @param request - MedicalAgentChatRequest
     *
     * @returns MedicalAgentChatResponse
     *
     * @param MedicalAgentChatRequest $request
     *
     * @return MedicalAgentChatResponse
     */
    public function medicalAgentChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MedicalAgentChatHeaders([]);

        return $this->medicalAgentChatWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs inference using the external Qwen medical foundation model.
     *
     * @param request - MedicalModelInferenceRequest
     * @param headers - MedicalModelInferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MedicalModelInferenceResponse
     *
     * @param MedicalModelInferenceRequest $request
     * @param MedicalModelInferenceHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return MedicalModelInferenceResponse
     */
    public function medicalModelInferenceWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MedicalModelInference',
            'version' => '2026-11-16',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/directModel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield MedicalModelInferenceResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Performs inference using the external Qwen medical foundation model.
     *
     * @param request - MedicalModelInferenceRequest
     * @param headers - MedicalModelInferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MedicalModelInferenceResponse
     *
     * @param MedicalModelInferenceRequest $request
     * @param MedicalModelInferenceHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return MedicalModelInferenceResponse
     */
    public function medicalModelInferenceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MedicalModelInference',
            'version' => '2026-11-16',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/directModel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MedicalModelInferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs inference using the external Qwen medical foundation model.
     *
     * @param request - MedicalModelInferenceRequest
     *
     * @returns MedicalModelInferenceResponse
     *
     * @param MedicalModelInferenceRequest $request
     *
     * @return MedicalModelInferenceResponse
     */
    public function medicalModelInference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new MedicalModelInferenceHeaders([]);

        return $this->medicalModelInferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * Activates the Qwen medical service and returns the current activation status.
     *
     * @param request - OpenServiceRequest
     * @param headers - OpenServiceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenServiceResponse
     *
     * @param OpenServiceRequest $request
     * @param OpenServiceHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return OpenServiceResponse
     */
    public function openServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->openBenefits) {
            @$body['openBenefits'] = $request->openBenefits;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenService',
            'version' => '2026-11-16',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/medical/openService',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the Qwen medical service and returns the current activation status.
     *
     * @param request - OpenServiceRequest
     *
     * @returns OpenServiceResponse
     *
     * @param OpenServiceRequest $request
     *
     * @return OpenServiceResponse
     */
    public function openService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OpenServiceHeaders([]);

        return $this->openServiceWithOptions($request, $headers, $runtime);
    }
}
