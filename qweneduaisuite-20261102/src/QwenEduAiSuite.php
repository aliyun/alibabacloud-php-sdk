<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\ActivateQwenEduApiRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\ActivateQwenEduApiResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduHomeworkCorrectSubmitRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduHomeworkCorrectSubmitResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveShrinkRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponse;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetQwenEduApiActivationStatusRequest;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetQwenEduApiActivationStatusResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class QwenEduAiSuite extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'QwenEduAiSuite';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qweneduaisuite', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 开通千问教育API权限.
     *
     * @remarks
     * 开通千问教育API权限
     *
     * @param request - ActivateQwenEduApiRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateQwenEduApiResponse
     *
     * @param ActivateQwenEduApiRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ActivateQwenEduApiResponse
     */
    public function activateQwenEduApiWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ActivateQwenEduApi',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/service/activate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ActivateQwenEduApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通千问教育API权限.
     *
     * @remarks
     * 开通千问教育API权限
     *
     * @param request - ActivateQwenEduApiRequest
     *
     * @returns ActivateQwenEduApiResponse
     *
     * @param ActivateQwenEduApiRequest $request
     *
     * @return ActivateQwenEduApiResponse
     */
    public function activateQwenEduApi($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->activateQwenEduApiWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交单页作业图片，返回任务ID及初步检测结果。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于提交单页作业图片进行批改，支持通过图片URL或Base64编码的图片数据。
     * - 提交后会立即返回任务ID、矫正图及题目检测结果，但不包含具体的批改结论。
     * - 需要通过查询接口轮询获取最终的批改结果。
     * - 支持对图片进行透视矫正，默认开启。
     * - 图片要求：支持多种格式（JPEG, PNG, GIF等），推荐体积不超过1MB，最大支持15MB（Base64编码后）。
     * - 每次请求仅处理一张图片，多张图片需分别提交。
     * - `request_id`字段建议由调用方生成并传递，以便于问题排查和对账。
     *
     * @param request - CreateEduHomeworkCorrectSubmitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEduHomeworkCorrectSubmitResponse
     *
     * @param CreateEduHomeworkCorrectSubmitRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateEduHomeworkCorrectSubmitResponse
     */
    public function createEduHomeworkCorrectSubmitWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dewarp) {
            @$body['dewarp'] = $request->dewarp;
        }

        if (null !== $request->imageBase64) {
            @$body['imageBase64'] = $request->imageBase64;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEduHomeworkCorrectSubmit',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/homework/correct/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEduHomeworkCorrectSubmitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交单页作业图片，返回任务ID及初步检测结果。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于提交单页作业图片进行批改，支持通过图片URL或Base64编码的图片数据。
     * - 提交后会立即返回任务ID、矫正图及题目检测结果，但不包含具体的批改结论。
     * - 需要通过查询接口轮询获取最终的批改结果。
     * - 支持对图片进行透视矫正，默认开启。
     * - 图片要求：支持多种格式（JPEG, PNG, GIF等），推荐体积不超过1MB，最大支持15MB（Base64编码后）。
     * - 每次请求仅处理一张图片，多张图片需分别提交。
     * - `request_id`字段建议由调用方生成并传递，以便于问题排查和对账。
     *
     * @param request - CreateEduHomeworkCorrectSubmitRequest
     *
     * @returns CreateEduHomeworkCorrectSubmitResponse
     *
     * @param CreateEduHomeworkCorrectSubmitRequest $request
     *
     * @return CreateEduHomeworkCorrectSubmitResponse
     */
    public function createEduHomeworkCorrectSubmit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEduHomeworkCorrectSubmitWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过图片URL或Base64编码接收题目，返回解题过程和结果。
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过单张题目图片的URL或Base64编码进行解题请求。
     * - 支持处理JPEG、JPG、PNG格式的图片，且图片大小不超过10MB，像素总数不超过260万。
     * - 请求必须携带`request_id`字段，用于链路关联和对账；建议使用UUID以保证唯一性。
     * - `Authorization`头部需包含有效的`appKey`，采用`Bearer <appKey>`格式。
     * - 接口响应为SSE流式数据，客户端应逐事件读取并解析，不得等待连接关闭后整体读取。
     * - 成功响应包括`message`（过程态全量解题快照）和`complete`（最终完整结果）两种事件类型。
     * - 错误处理分为建流前与建流后两个阶段，根据错误码及`retryable`字段决定是否重试。
     * - 客户端超时设置建议不低于3分钟，并确保代理层不会缓存SSE响应或提前关闭长连接。
     *
     * @param tmpReq - CreateEduProblemSolveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEduProblemSolveResponse
     *
     * @param CreateEduProblemSolveRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEduProblemSolveResponse
     */
    public function createEduProblemSolveWithSSE($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEduProblemSolveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'query', 'json');
        }

        $body = [];
        if (null !== $request->queryShrink) {
            @$body['query'] = $request->queryShrink;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEduProblemSolve',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/problem/solve/stream',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield CreateEduProblemSolveResponse::fromMap([
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
     * 通过图片URL或Base64编码接收题目，返回解题过程和结果。
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过单张题目图片的URL或Base64编码进行解题请求。
     * - 支持处理JPEG、JPG、PNG格式的图片，且图片大小不超过10MB，像素总数不超过260万。
     * - 请求必须携带`request_id`字段，用于链路关联和对账；建议使用UUID以保证唯一性。
     * - `Authorization`头部需包含有效的`appKey`，采用`Bearer <appKey>`格式。
     * - 接口响应为SSE流式数据，客户端应逐事件读取并解析，不得等待连接关闭后整体读取。
     * - 成功响应包括`message`（过程态全量解题快照）和`complete`（最终完整结果）两种事件类型。
     * - 错误处理分为建流前与建流后两个阶段，根据错误码及`retryable`字段决定是否重试。
     * - 客户端超时设置建议不低于3分钟，并确保代理层不会缓存SSE响应或提前关闭长连接。
     *
     * @param tmpReq - CreateEduProblemSolveRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEduProblemSolveResponse
     *
     * @param CreateEduProblemSolveRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEduProblemSolveResponse
     */
    public function createEduProblemSolveWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEduProblemSolveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'query', 'json');
        }

        $body = [];
        if (null !== $request->queryShrink) {
            @$body['query'] = $request->queryShrink;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEduProblemSolve',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/problem/solve/stream',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEduProblemSolveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过图片URL或Base64编码接收题目，返回解题过程和结果。
     *
     * @remarks
     * ## 请求说明
     * - 本接口支持通过单张题目图片的URL或Base64编码进行解题请求。
     * - 支持处理JPEG、JPG、PNG格式的图片，且图片大小不超过10MB，像素总数不超过260万。
     * - 请求必须携带`request_id`字段，用于链路关联和对账；建议使用UUID以保证唯一性。
     * - `Authorization`头部需包含有效的`appKey`，采用`Bearer <appKey>`格式。
     * - 接口响应为SSE流式数据，客户端应逐事件读取并解析，不得等待连接关闭后整体读取。
     * - 成功响应包括`message`（过程态全量解题快照）和`complete`（最终完整结果）两种事件类型。
     * - 错误处理分为建流前与建流后两个阶段，根据错误码及`retryable`字段决定是否重试。
     * - 客户端超时设置建议不低于3分钟，并确保代理层不会缓存SSE响应或提前关闭长连接。
     *
     * @param request - CreateEduProblemSolveRequest
     *
     * @returns CreateEduProblemSolveResponse
     *
     * @param CreateEduProblemSolveRequest $request
     *
     * @return CreateEduProblemSolveResponse
     */
    public function createEduProblemSolve($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEduProblemSolveWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询批改进度、增量结果、终态结果及 Token 用量.
     *
     * @param request - GetEduHomeworkCorrectionResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEduHomeworkCorrectionResultResponse
     *
     * @param GetEduHomeworkCorrectionResultRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return GetEduHomeworkCorrectionResultResponse
     */
    public function getEduHomeworkCorrectionResultWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['taskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEduHomeworkCorrectionResult',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/homework/correct/result',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEduHomeworkCorrectionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询批改进度、增量结果、终态结果及 Token 用量.
     *
     * @param request - GetEduHomeworkCorrectionResultRequest
     *
     * @returns GetEduHomeworkCorrectionResultResponse
     *
     * @param GetEduHomeworkCorrectionResultRequest $request
     *
     * @return GetEduHomeworkCorrectionResultResponse
     */
    public function getEduHomeworkCorrectionResult($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEduHomeworkCorrectionResultWithOptions($request, $headers, $runtime);
    }

    /**
     * 千问教育API开通状态查询.
     *
     * @param request - GetQwenEduApiActivationStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQwenEduApiActivationStatusResponse
     *
     * @param GetQwenEduApiActivationStatusRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetQwenEduApiActivationStatusResponse
     */
    public function getQwenEduApiActivationStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetQwenEduApiActivationStatus',
            'version' => '2026-11-02',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/service/activation/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetQwenEduApiActivationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 千问教育API开通状态查询.
     *
     * @param request - GetQwenEduApiActivationStatusRequest
     *
     * @returns GetQwenEduApiActivationStatusResponse
     *
     * @param GetQwenEduApiActivationStatusRequest $request
     *
     * @return GetQwenEduApiActivationStatusResponse
     */
    public function getQwenEduApiActivationStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQwenEduApiActivationStatusWithOptions($request, $headers, $runtime);
    }
}
