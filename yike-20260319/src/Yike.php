<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yike\V20260319\Models\BatchGetYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\BatchGetYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeAssetUploadRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\CreateYikeAssetUploadResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeStoryboardJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeStoryboardJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeAIAppJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeAIAppJobResponse;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeStoryboardJobRequest;
use AlibabaCloud\SDK\Yike\V20260319\Models\SubmitYikeStoryboardJobResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yike extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yike', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 批量获取一刻AI应用生成任务
     *
     * @param request - BatchGetYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetYikeAIAppJobResponse
     *
     * @param BatchGetYikeAIAppJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchGetYikeAIAppJobResponse
     */
    public function batchGetYikeAIAppJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量获取一刻AI应用生成任务
     *
     * @param request - BatchGetYikeAIAppJobRequest
     *
     * @returns BatchGetYikeAIAppJobResponse
     *
     * @param BatchGetYikeAIAppJobRequest $request
     *
     * @return BatchGetYikeAIAppJobResponse
     */
    public function batchGetYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 获取一刻媒资上传凭证
     *
     * @param request - CreateYikeAssetUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateYikeAssetUploadResponse
     *
     * @param CreateYikeAssetUploadRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateYikeAssetUploadResponse
     */
    public function createYikeAssetUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileExt) {
            @$query['FileExt'] = $request->fileExt;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateYikeAssetUpload',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateYikeAssetUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻媒资上传凭证
     *
     * @param request - CreateYikeAssetUploadRequest
     *
     * @returns CreateYikeAssetUploadResponse
     *
     * @param CreateYikeAssetUploadRequest $request
     *
     * @return CreateYikeAssetUploadResponse
     */
    public function createYikeAssetUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createYikeAssetUploadWithOptions($request, $runtime);
    }

    /**
     * 获取一刻AI应用任务
     *
     * @param request - GetYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeAIAppJobResponse
     *
     * @param GetYikeAIAppJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetYikeAIAppJobResponse
     */
    public function getYikeAIAppJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻AI应用任务
     *
     * @param request - GetYikeAIAppJobRequest
     *
     * @returns GetYikeAIAppJobResponse
     *
     * @param GetYikeAIAppJobRequest $request
     *
     * @return GetYikeAIAppJobResponse
     */
    public function getYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 获取一刻故事板任务
     *
     * @param request - GetYikeStoryboardJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeStoryboardJobResponse
     *
     * @param GetYikeStoryboardJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetYikeStoryboardJobResponse
     */
    public function getYikeStoryboardJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYikeStoryboardJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeStoryboardJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一刻故事板任务
     *
     * @param request - GetYikeStoryboardJobRequest
     *
     * @returns GetYikeStoryboardJobResponse
     *
     * @param GetYikeStoryboardJobRequest $request
     *
     * @return GetYikeStoryboardJobResponse
     */
    public function getYikeStoryboardJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeStoryboardJobWithOptions($request, $runtime);
    }

    /**
     * 提交一刻AI应用任务
     *
     * @param request - SubmitYikeAIAppJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitYikeAIAppJobResponse
     *
     * @param SubmitYikeAIAppJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitYikeAIAppJobResponse
     */
    public function submitYikeAIAppJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appParams) {
            @$body['AppParams'] = $request->appParams;
        }

        if (null !== $request->folderId) {
            @$body['FolderId'] = $request->folderId;
        }

        if (null !== $request->productionId) {
            @$body['ProductionId'] = $request->productionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitYikeAIAppJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitYikeAIAppJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交一刻AI应用任务
     *
     * @param request - SubmitYikeAIAppJobRequest
     *
     * @returns SubmitYikeAIAppJobResponse
     *
     * @param SubmitYikeAIAppJobRequest $request
     *
     * @return SubmitYikeAIAppJobResponse
     */
    public function submitYikeAIAppJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitYikeAIAppJobWithOptions($request, $runtime);
    }

    /**
     * 提交一刻故事板任务
     *
     * @param request - SubmitYikeStoryboardJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitYikeStoryboardJobResponse
     *
     * @param SubmitYikeStoryboardJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitYikeStoryboardJobResponse
     */
    public function submitYikeStoryboardJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->execMode) {
            @$query['ExecMode'] = $request->execMode;
        }

        if (null !== $request->modelParams) {
            @$query['ModelParams'] = $request->modelParams;
        }

        if (null !== $request->narrationVoiceId) {
            @$query['NarrationVoiceId'] = $request->narrationVoiceId;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->shotPromptMode) {
            @$query['ShotPromptMode'] = $request->shotPromptMode;
        }

        if (null !== $request->skipFailureShot) {
            @$query['SkipFailureShot'] = $request->skipFailureShot;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->videoModel) {
            @$query['VideoModel'] = $request->videoModel;
        }

        $body = [];
        if (null !== $request->fileURL) {
            @$body['FileURL'] = $request->fileURL;
        }

        if (null !== $request->shotSplitMode) {
            @$body['ShotSplitMode'] = $request->shotSplitMode;
        }

        if (null !== $request->sourceType) {
            @$body['SourceType'] = $request->sourceType;
        }

        if (null !== $request->styleId) {
            @$body['StyleId'] = $request->styleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitYikeStoryboardJob',
            'version' => '2026-03-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitYikeStoryboardJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交一刻故事板任务
     *
     * @param request - SubmitYikeStoryboardJobRequest
     *
     * @returns SubmitYikeStoryboardJobResponse
     *
     * @param SubmitYikeStoryboardJobRequest $request
     *
     * @return SubmitYikeStoryboardJobResponse
     */
    public function submitYikeStoryboardJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitYikeStoryboardJobWithOptions($request, $runtime);
    }
}
