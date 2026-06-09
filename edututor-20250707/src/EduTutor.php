<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduTutor\V20250707;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EduTutor\V20250707\Models\AnswerSSERequest;
use AlibabaCloud\SDK\EduTutor\V20250707\Models\AnswerSSEResponse;
use AlibabaCloud\SDK\EduTutor\V20250707\Models\CutQuestionsRequest;
use AlibabaCloud\SDK\EduTutor\V20250707\Models\CutQuestionsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EduTutor extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('edututor', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * AnswerSSE.
     *
     * @param request - AnswerSSERequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnswerSSEResponse
     *
     * @param AnswerSSERequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AnswerSSEResponse
     */
    public function answerSSEWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AnswerSSE',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/service/answerSSE',
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

                yield AnswerSSEResponse::fromMap([
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
     * AnswerSSE.
     *
     * @param request - AnswerSSERequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnswerSSEResponse
     *
     * @param AnswerSSERequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AnswerSSEResponse
     */
    public function answerSSEWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AnswerSSE',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/service/answerSSE',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AnswerSSEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AnswerSSE.
     *
     * @param request - AnswerSSERequest
     *
     * @returns AnswerSSEResponse
     *
     * @param AnswerSSERequest $request
     *
     * @return AnswerSSEResponse
     */
    public function answerSSE($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->answerSSEWithOptions($request, $headers, $runtime);
    }

    /**
     * CutQuestions.
     *
     * @param request - CutQuestionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CutQuestionsResponse
     *
     * @param CutQuestionsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CutQuestionsResponse
     */
    public function cutQuestionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceId) {
            @$query['workspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->image) {
            @$body['image'] = $request->image;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CutQuestions',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/service/cutApi',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CutQuestionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CutQuestions.
     *
     * @param request - CutQuestionsRequest
     *
     * @returns CutQuestionsResponse
     *
     * @param CutQuestionsRequest $request
     *
     * @return CutQuestionsResponse
     */
    public function cutQuestions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cutQuestionsWithOptions($request, $headers, $runtime);
    }
}
