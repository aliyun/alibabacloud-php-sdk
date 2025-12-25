<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateForHtmlShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\BatchTranslateShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetDocTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetDocTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetHtmlTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetHtmlTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetLongTextTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetLongTextTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitDocTranslateTaskShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitHtmlTranslateTaskShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitImageTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitImageTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitImageTranslateTaskShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitLongTextTranslateTaskRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitLongTextTranslateTaskResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\SubmitLongTextTranslateTaskShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermEditShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermQueryRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermQueryResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TermQueryShrinkRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TextTranslateRequest;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TextTranslateResponse;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\TextTranslateShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AnyTrans extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('anytrans', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 通义多模态翻译批量翻译.
     *
     * @param tmpReq - BatchTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchTranslateResponse
     *
     * @param BatchTranslateRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return BatchTranslateResponse
     */
    public function batchTranslateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchTranslateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        if (null !== $tmpReq->text) {
            $request->textShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->text, 'text', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['appName'] = $request->appName;
        }

        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->textShrink) {
            @$body['text'] = $request->textShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchTranslate',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/batch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译批量翻译.
     *
     * @param request - BatchTranslateRequest
     *
     * @returns BatchTranslateResponse
     *
     * @param BatchTranslateRequest $request
     *
     * @return BatchTranslateResponse
     */
    public function batchTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchTranslateWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译批量翻译(供js sdk使用).
     *
     * @param tmpReq - BatchTranslateForHtmlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchTranslateForHtmlResponse
     *
     * @param BatchTranslateForHtmlRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BatchTranslateForHtmlResponse
     */
    public function batchTranslateForHtmlWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchTranslateForHtmlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        if (null !== $tmpReq->text) {
            $request->textShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->text, 'text', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['appName'] = $request->appName;
        }

        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->textShrink) {
            @$body['text'] = $request->textShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchTranslateForHtml',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/batchForHtml',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchTranslateForHtmlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译批量翻译(供js sdk使用).
     *
     * @param request - BatchTranslateForHtmlRequest
     *
     * @returns BatchTranslateForHtmlResponse
     *
     * @param BatchTranslateForHtmlRequest $request
     *
     * @return BatchTranslateForHtmlResponse
     */
    public function batchTranslateForHtml($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchTranslateForHtmlWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译获文档翻译任务
     *
     * @param request - GetDocTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocTranslateTaskResponse
     *
     * @param GetDocTranslateTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetDocTranslateTaskResponse
     */
    public function getDocTranslateTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/doc/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDocTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译获文档翻译任务
     *
     * @param request - GetDocTranslateTaskRequest
     *
     * @returns GetDocTranslateTaskResponse
     *
     * @param GetDocTranslateTaskRequest $request
     *
     * @return GetDocTranslateTaskResponse
     */
    public function getDocTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDocTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译获取html翻译结果.
     *
     * @param request - GetHtmlTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHtmlTranslateTaskResponse
     *
     * @param GetHtmlTranslateTaskRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetHtmlTranslateTaskResponse
     */
    public function getHtmlTranslateTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHtmlTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/html/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHtmlTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译获取html翻译结果.
     *
     * @param request - GetHtmlTranslateTaskRequest
     *
     * @returns GetHtmlTranslateTaskResponse
     *
     * @param GetHtmlTranslateTaskRequest $request
     *
     * @return GetHtmlTranslateTaskResponse
     */
    public function getHtmlTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHtmlTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译获取图片翻译任务
     *
     * @param request - GetImageTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageTranslateTaskResponse
     *
     * @param GetImageTranslateTaskRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetImageTranslateTaskResponse
     */
    public function getImageTranslateTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetImageTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/image/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译获取图片翻译任务
     *
     * @param request - GetImageTranslateTaskRequest
     *
     * @returns GetImageTranslateTaskResponse
     *
     * @param GetImageTranslateTaskRequest $request
     *
     * @return GetImageTranslateTaskResponse
     */
    public function getImageTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译获取长文翻译结果.
     *
     * @param request - GetLongTextTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLongTextTranslateTaskResponse
     *
     * @param GetLongTextTranslateTaskRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLongTextTranslateTaskResponse
     */
    public function getLongTextTranslateTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLongTextTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/longText/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLongTextTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译获取长文翻译结果.
     *
     * @param request - GetLongTextTranslateTaskRequest
     *
     * @returns GetLongTextTranslateTaskResponse
     *
     * @param GetLongTextTranslateTaskRequest $request
     *
     * @return GetLongTextTranslateTaskResponse
     */
    public function getLongTextTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLongTextTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译提交文档翻译任务
     *
     * @param tmpReq - SubmitDocTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitDocTranslateTaskResponse
     *
     * @param SubmitDocTranslateTaskRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitDocTranslateTaskResponse
     */
    public function submitDocTranslateTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitDocTranslateTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        $body = [];
        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitDocTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/doc/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitDocTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译提交文档翻译任务
     *
     * @param request - SubmitDocTranslateTaskRequest
     *
     * @returns SubmitDocTranslateTaskResponse
     *
     * @param SubmitDocTranslateTaskRequest $request
     *
     * @return SubmitDocTranslateTaskResponse
     */
    public function submitDocTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitDocTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译提交html翻译任务
     *
     * @param tmpReq - SubmitHtmlTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitHtmlTranslateTaskResponse
     *
     * @param SubmitHtmlTranslateTaskRequest $tmpReq
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitHtmlTranslateTaskResponse
     */
    public function submitHtmlTranslateTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitHtmlTranslateTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        $body = [];
        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitHtmlTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/html/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitHtmlTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译提交html翻译任务
     *
     * @param request - SubmitHtmlTranslateTaskRequest
     *
     * @returns SubmitHtmlTranslateTaskResponse
     *
     * @param SubmitHtmlTranslateTaskRequest $request
     *
     * @return SubmitHtmlTranslateTaskResponse
     */
    public function submitHtmlTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitHtmlTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译提交图片翻译任务
     *
     * @param tmpReq - SubmitImageTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitImageTranslateTaskResponse
     *
     * @param SubmitImageTranslateTaskRequest $tmpReq
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitImageTranslateTaskResponse
     */
    public function submitImageTranslateTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitImageTranslateTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        if (null !== $tmpReq->targetLanguage) {
            $request->targetLanguageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->targetLanguage, 'targetLanguage', 'json');
        }

        $body = [];
        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguageShrink) {
            @$body['targetLanguage'] = $request->targetLanguageShrink;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitImageTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/image/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitImageTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译提交图片翻译任务
     *
     * @param request - SubmitImageTranslateTaskRequest
     *
     * @returns SubmitImageTranslateTaskResponse
     *
     * @param SubmitImageTranslateTaskRequest $request
     *
     * @return SubmitImageTranslateTaskResponse
     */
    public function submitImageTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitImageTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译提交长文翻译任务
     *
     * @param tmpReq - SubmitLongTextTranslateTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitLongTextTranslateTaskResponse
     *
     * @param SubmitLongTextTranslateTaskRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitLongTextTranslateTaskResponse
     */
    public function submitLongTextTranslateTaskWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitLongTextTranslateTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        $body = [];
        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitLongTextTranslateTask',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/longText/submit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitLongTextTranslateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译提交长文翻译任务
     *
     * @param request - SubmitLongTextTranslateTaskRequest
     *
     * @returns SubmitLongTextTranslateTaskResponse
     *
     * @param SubmitLongTextTranslateTaskRequest $request
     *
     * @return SubmitLongTextTranslateTaskResponse
     */
    public function submitLongTextTranslateTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->submitLongTextTranslateTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译术语编辑.
     *
     * @param tmpReq - TermEditRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TermEditResponse
     *
     * @param TermEditRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return TermEditResponse
     */
    public function termEditWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TermEditShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TermEdit',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/intervene/edit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TermEditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译术语编辑.
     *
     * @param request - TermEditRequest
     *
     * @returns TermEditResponse
     *
     * @param TermEditRequest $request
     *
     * @return TermEditResponse
     */
    public function termEdit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->termEditWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译术语查询.
     *
     * @param tmpReq - TermQueryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TermQueryResponse
     *
     * @param TermQueryRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return TermQueryResponse
     */
    public function termQueryWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TermQueryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        $body = [];
        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TermQuery',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/intervene/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TermQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译术语查询.
     *
     * @param request - TermQueryRequest
     *
     * @returns TermQueryResponse
     *
     * @param TermQueryRequest $request
     *
     * @return TermQueryResponse
     */
    public function termQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->termQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * 通义多模态翻译文本翻译.
     *
     * @param tmpReq - TextTranslateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TextTranslateResponse
     *
     * @param TextTranslateRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return TextTranslateResponse
     */
    public function textTranslateWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new TextTranslateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ext) {
            $request->extShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'ext', 'json');
        }

        $body = [];
        if (null !== $request->extShrink) {
            @$body['ext'] = $request->extShrink;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->scene) {
            @$body['scene'] = $request->scene;
        }

        if (null !== $request->sourceLanguage) {
            @$body['sourceLanguage'] = $request->sourceLanguage;
        }

        if (null !== $request->targetLanguage) {
            @$body['targetLanguage'] = $request->targetLanguage;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->workspaceId) {
            @$body['workspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TextTranslate',
            'version' => '2025-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/anytrans/translate/text',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TextTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通义多模态翻译文本翻译.
     *
     * @param request - TextTranslateRequest
     *
     * @returns TextTranslateResponse
     *
     * @param TextTranslateRequest $request
     *
     * @return TextTranslateResponse
     */
    public function textTranslate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->textTranslateWithOptions($request, $headers, $runtime);
    }
}
