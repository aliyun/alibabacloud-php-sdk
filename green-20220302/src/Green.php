<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeUploadTokenResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\FileModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\FileModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageAsyncModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageAsyncModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageBatchModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageQueueModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ManualCallbackRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ManualCallbackResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ManualModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ManualModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ManualModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ManualModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalAgentRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalAgentResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\MultimodalAsyncModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultimodalAsyncModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64Request;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64Response;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\UrlAsyncModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\UrlAsyncModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationCancelRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationCancelResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationCancelRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationCancelResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Green extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'green.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'green.ap-southeast-1.aliyuncs.com',
            'cn-chengdu' => 'green.aliyuncs.com',
            'cn-hongkong' => 'green.aliyuncs.com',
            'cn-huhehaote' => 'green.aliyuncs.com',
            'cn-qingdao' => 'green.aliyuncs.com',
            'cn-zhangjiakou' => 'green.aliyuncs.com',
            'eu-central-1' => 'green.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'green.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'green.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'green.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance' => 'green.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'green.aliyuncs.com',
            'cn-shanghai-finance-1' => 'green.aliyuncs.com',
            'cn-north-2-gov-1' => 'green.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('green', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 文档审核结果.
     *
     * @param request - DescribeFileModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileModerationResultResponse
     *
     * @param DescribeFileModerationResultRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFileModerationResultResponse
     */
    public function describeFileModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeFileModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFileModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档审核结果.
     *
     * @param request - DescribeFileModerationResultRequest
     *
     * @returns DescribeFileModerationResultResponse
     *
     * @param DescribeFileModerationResultRequest $request
     *
     * @return DescribeFileModerationResultResponse
     */
    public function describeFileModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileModerationResultWithOptions($request, $runtime);
    }

    /**
     * Obtains the moderation results of an Image Moderation 2.0 task.
     *
     * @remarks
     *   Billing: This operation is free of charge.
     * *   QPS limit: You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeImageModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageModerationResultResponse
     *
     * @param DescribeImageModerationResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeImageModerationResultResponse
     */
    public function describeImageModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImageModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the moderation results of an Image Moderation 2.0 task.
     *
     * @remarks
     *   Billing: This operation is free of charge.
     * *   QPS limit: You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeImageModerationResultRequest
     *
     * @returns DescribeImageModerationResultResponse
     *
     * @param DescribeImageModerationResultRequest $request
     *
     * @return DescribeImageModerationResultResponse
     */
    public function describeImageModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageModerationResultWithOptions($request, $runtime);
    }

    /**
     * 查询检测结果辅助信息.
     *
     * @param request - DescribeImageResultExtRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageResultExtResponse
     *
     * @param DescribeImageResultExtRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeImageResultExtResponse
     */
    public function describeImageResultExtWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->infoType) {
            @$body['InfoType'] = $request->infoType;
        }

        if (null !== $request->reqId) {
            @$body['ReqId'] = $request->reqId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeImageResultExt',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageResultExtResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询检测结果辅助信息.
     *
     * @param request - DescribeImageResultExtRequest
     *
     * @returns DescribeImageResultExtResponse
     *
     * @param DescribeImageResultExtRequest $request
     *
     * @return DescribeImageResultExtResponse
     */
    public function describeImageResultExt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageResultExtWithOptions($request, $runtime);
    }

    /**
     * 查询异步多模态检测结果.
     *
     * @param request - DescribeMultimodalModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultimodalModerationResultResponse
     *
     * @param DescribeMultimodalModerationResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeMultimodalModerationResultResponse
     */
    public function describeMultimodalModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reqId) {
            @$query['ReqId'] = $request->reqId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultimodalModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultimodalModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询异步多模态检测结果.
     *
     * @param request - DescribeMultimodalModerationResultRequest
     *
     * @returns DescribeMultimodalModerationResultResponse
     *
     * @param DescribeMultimodalModerationResultRequest $request
     *
     * @return DescribeMultimodalModerationResultResponse
     */
    public function describeMultimodalModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultimodalModerationResultWithOptions($request, $runtime);
    }

    /**
     * 查询上传token.
     *
     * @param request - DescribeUploadTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUploadTokenResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUploadTokenResponse
     */
    public function describeUploadTokenWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeUploadToken',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询上传token.
     *
     * @returns DescribeUploadTokenResponse
     *
     * @return DescribeUploadTokenResponse
     */
    public function describeUploadToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadTokenWithOptions($runtime);
    }

    /**
     * Queries the moderation results based on the ReqId returned by asynchronous URL moderation.
     *
     * @remarks
     *   Billing: This operation is free of charge.
     * *   Query timeout: We recommend that you query moderation results at least 480 seconds after you send an asynchronous moderation request. Content Moderation retains moderation results for up to 3 days. After 3 days, the results are deleted.
     * *   You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeUrlModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUrlModerationResultResponse
     *
     * @param DescribeUrlModerationResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeUrlModerationResultResponse
     */
    public function describeUrlModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reqId) {
            @$body['ReqId'] = $request->reqId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUrlModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUrlModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the moderation results based on the ReqId returned by asynchronous URL moderation.
     *
     * @remarks
     *   Billing: This operation is free of charge.
     * *   Query timeout: We recommend that you query moderation results at least 480 seconds after you send an asynchronous moderation request. Content Moderation retains moderation results for up to 3 days. After 3 days, the results are deleted.
     * *   You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeUrlModerationResultRequest
     *
     * @returns DescribeUrlModerationResultResponse
     *
     * @param DescribeUrlModerationResultRequest $request
     *
     * @return DescribeUrlModerationResultResponse
     */
    public function describeUrlModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUrlModerationResultWithOptions($request, $runtime);
    }

    /**
     * 文档审核.
     *
     * @param request - FileModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FileModerationResponse
     *
     * @param FileModerationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FileModerationResponse
     */
    public function fileModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FileModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FileModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档审核.
     *
     * @param request - FileModerationRequest
     *
     * @returns FileModerationResponse
     *
     * @param FileModerationRequest $request
     *
     * @return FileModerationResponse
     */
    public function fileModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fileModerationWithOptions($request, $runtime);
    }

    /**
     * 图片异步检测.
     *
     * @param request - ImageAsyncModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageAsyncModerationResponse
     *
     * @param ImageAsyncModerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ImageAsyncModerationResponse
     */
    public function imageAsyncModerationWithOptions($request, $runtime)
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
            'action' => 'ImageAsyncModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageAsyncModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片异步检测.
     *
     * @param request - ImageAsyncModerationRequest
     *
     * @returns ImageAsyncModerationResponse
     *
     * @param ImageAsyncModerationRequest $request
     *
     * @return ImageAsyncModerationResponse
     */
    public function imageAsyncModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageAsyncModerationWithOptions($request, $runtime);
    }

    /**
     * 图片批量调用.
     *
     * @param request - ImageBatchModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageBatchModerationResponse
     *
     * @param ImageBatchModerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ImageBatchModerationResponse
     */
    public function imageBatchModerationWithOptions($request, $runtime)
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
            'action' => 'ImageBatchModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageBatchModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片批量调用.
     *
     * @param request - ImageBatchModerationRequest
     *
     * @returns ImageBatchModerationResponse
     *
     * @param ImageBatchModerationRequest $request
     *
     * @return ImageBatchModerationResponse
     */
    public function imageBatchModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageBatchModerationWithOptions($request, $runtime);
    }

    /**
     * Identifies whether an image contains content or elements that violate relevant regulations on network content dissemination, affect the content order of a specific platform, or affect user experience. Image Moderation 2.0 supports over 90 content risk labels and over 100 risk control items. Image Moderation 2.0 of Content Moderation allows you to develop further moderation or governance measures for specific image content based on business scenarios, platform-specific content governance rules, or rich risk labels and scores of confidence levels returned by API calls.
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/467826.html)[](https://www.aliyun.com/price/product?#/lvwang/detail/cdibag) of Image Moderation 2.0.
     *
     * @param request - ImageModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageModerationResponse
     *
     * @param ImageModerationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImageModerationResponse
     */
    public function imageModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImageModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Identifies whether an image contains content or elements that violate relevant regulations on network content dissemination, affect the content order of a specific platform, or affect user experience. Image Moderation 2.0 supports over 90 content risk labels and over 100 risk control items. Image Moderation 2.0 of Content Moderation allows you to develop further moderation or governance measures for specific image content based on business scenarios, platform-specific content governance rules, or rich risk labels and scores of confidence levels returned by API calls.
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/467826.html)[](https://www.aliyun.com/price/product?#/lvwang/detail/cdibag) of Image Moderation 2.0.
     *
     * @param request - ImageModerationRequest
     *
     * @returns ImageModerationResponse
     *
     * @param ImageModerationRequest $request
     *
     * @return ImageModerationResponse
     */
    public function imageModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageModerationWithOptions($request, $runtime);
    }

    /**
     * 图片审核.
     *
     * @param request - ImageQueueModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImageQueueModerationResponse
     *
     * @param ImageQueueModerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ImageQueueModerationResponse
     */
    public function imageQueueModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImageQueueModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImageQueueModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片审核.
     *
     * @param request - ImageQueueModerationRequest
     *
     * @returns ImageQueueModerationResponse
     *
     * @param ImageQueueModerationRequest $request
     *
     * @return ImageQueueModerationResponse
     */
    public function imageQueueModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageQueueModerationWithOptions($request, $runtime);
    }

    /**
     * Content Security Manual Review Result Callback Interface.
     *
     * @param request - ManualCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManualCallbackResponse
     *
     * @param ManualCallbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ManualCallbackResponse
     */
    public function manualCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->checksum) {
            @$body['Checksum'] = $request->checksum;
        }

        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->data) {
            @$body['Data'] = $request->data;
        }

        if (null !== $request->msg) {
            @$body['Msg'] = $request->msg;
        }

        if (null !== $request->reqId) {
            @$body['ReqId'] = $request->reqId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ManualCallback',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManualCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Content Security Manual Review Result Callback Interface.
     *
     * @param request - ManualCallbackRequest
     *
     * @returns ManualCallbackResponse
     *
     * @param ManualCallbackRequest $request
     *
     * @return ManualCallbackResponse
     */
    public function manualCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualCallbackWithOptions($request, $runtime);
    }

    /**
     * Content Security Manual Review Request Interface.
     *
     * @param request - ManualModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManualModerationResponse
     *
     * @param ManualModerationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ManualModerationResponse
     */
    public function manualModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ManualModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManualModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Content Security Manual Review Request Interface.
     *
     * @param request - ManualModerationRequest
     *
     * @returns ManualModerationResponse
     *
     * @param ManualModerationRequest $request
     *
     * @return ManualModerationResponse
     */
    public function manualModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualModerationWithOptions($request, $runtime);
    }

    /**
     * Retrieve manual review results.
     *
     * @param request - ManualModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManualModerationResultResponse
     *
     * @param ManualModerationResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ManualModerationResultResponse
     */
    public function manualModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ManualModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManualModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve manual review results.
     *
     * @param request - ManualModerationResultRequest
     *
     * @returns ManualModerationResultResponse
     *
     * @param ManualModerationResultRequest $request
     *
     * @return ManualModerationResultResponse
     */
    public function manualModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualModerationResultWithOptions($request, $runtime);
    }

    /**
     * 多模态AgentAPI同步检测接口.
     *
     * @param request - MultiModalAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiModalAgentResponse
     *
     * @param MultiModalAgentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MultiModalAgentResponse
     */
    public function multiModalAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appID) {
            @$body['AppID'] = $request->appID;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MultiModalAgent',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultiModalAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态AgentAPI同步检测接口.
     *
     * @param request - MultiModalAgentRequest
     *
     * @returns MultiModalAgentResponse
     *
     * @param MultiModalAgentRequest $request
     *
     * @return MultiModalAgentResponse
     */
    public function multiModalAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multiModalAgentWithOptions($request, $runtime);
    }

    /**
     * 同步检测接口.
     *
     * @param request - MultiModalGuardRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiModalGuardResponse
     *
     * @param MultiModalGuardRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MultiModalGuardResponse
     */
    public function multiModalGuardWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MultiModalGuard',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultiModalGuardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步检测接口.
     *
     * @param request - MultiModalGuardRequest
     *
     * @returns MultiModalGuardResponse
     *
     * @param MultiModalGuardRequest $request
     *
     * @return MultiModalGuardResponse
     */
    public function multiModalGuard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multiModalGuardWithOptions($request, $runtime);
    }

    /**
     * 多模态同步检测接口，支持图片base64字符串.
     *
     * @param request - MultiModalGuardForBase64Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiModalGuardForBase64Response
     *
     * @param MultiModalGuardForBase64Request $request
     * @param RuntimeOptions                  $runtime
     *
     * @return MultiModalGuardForBase64Response
     */
    public function multiModalGuardForBase64WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->service) {
            @$query['Service'] = $request->service;
        }

        $body = [];
        if (null !== $request->imageBase64Str) {
            @$body['ImageBase64Str'] = $request->imageBase64Str;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MultiModalGuardForBase64',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultiModalGuardForBase64Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态同步检测接口，支持图片base64字符串.
     *
     * @param request - MultiModalGuardForBase64Request
     *
     * @returns MultiModalGuardForBase64Response
     *
     * @param MultiModalGuardForBase64Request $request
     *
     * @return MultiModalGuardForBase64Response
     */
    public function multiModalGuardForBase64($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multiModalGuardForBase64WithOptions($request, $runtime);
    }

    /**
     * 多模态-异步检测.
     *
     * @param request - MultimodalAsyncModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultimodalAsyncModerationResponse
     *
     * @param MultimodalAsyncModerationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return MultimodalAsyncModerationResponse
     */
    public function multimodalAsyncModerationWithOptions($request, $runtime)
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
            'action' => 'MultimodalAsyncModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultimodalAsyncModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 多模态-异步检测.
     *
     * @param request - MultimodalAsyncModerationRequest
     *
     * @returns MultimodalAsyncModerationResponse
     *
     * @param MultimodalAsyncModerationRequest $request
     *
     * @return MultimodalAsyncModerationResponse
     */
    public function multimodalAsyncModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multimodalAsyncModerationWithOptions($request, $runtime);
    }

    /**
     * Provides moderation services for multiple business scenarios and identifies various violation risks.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/464388.html?#section-itm-m2s-ugq) of Text Moderation 2.0.
     *
     * @param request - TextModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TextModerationResponse
     *
     * @param TextModerationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TextModerationResponse
     */
    public function textModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TextModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TextModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides moderation services for multiple business scenarios and identifies various violation risks.
     *
     * @remarks
     * Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/464388.html?#section-itm-m2s-ugq) of Text Moderation 2.0.
     *
     * @param request - TextModerationRequest
     *
     * @returns TextModerationResponse
     *
     * @param TextModerationRequest $request
     *
     * @return TextModerationResponse
     */
    public function textModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textModerationWithOptions($request, $runtime);
    }

    /**
     * Moderates the input command and generated text of large language models (LLMs). Specific model input commands can be used to retrieve standard answers. The feature of enabling and disabling the moderation labels is also available.
     *
     * @remarks
     * Before you call this operation, make sure that you have [activated the Content Moderation 2.0 service](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn) and are familiar with the [billing](https://help.aliyun.com/document_detail/2671445.html?#section-6od-32j-99n) of the Text Moderation 2.0 Plus service.
     *
     * @param request - TextModerationPlusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TextModerationPlusResponse
     *
     * @param TextModerationPlusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TextModerationPlusResponse
     */
    public function textModerationPlusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TextModerationPlus',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TextModerationPlusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moderates the input command and generated text of large language models (LLMs). Specific model input commands can be used to retrieve standard answers. The feature of enabling and disabling the moderation labels is also available.
     *
     * @remarks
     * Before you call this operation, make sure that you have [activated the Content Moderation 2.0 service](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn) and are familiar with the [billing](https://help.aliyun.com/document_detail/2671445.html?#section-6od-32j-99n) of the Text Moderation 2.0 Plus service.
     *
     * @param request - TextModerationPlusRequest
     *
     * @returns TextModerationPlusResponse
     *
     * @param TextModerationPlusRequest $request
     *
     * @return TextModerationPlusResponse
     */
    public function textModerationPlus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textModerationPlusWithOptions($request, $runtime);
    }

    /**
     * url异步检测.
     *
     * @param request - UrlAsyncModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UrlAsyncModerationResponse
     *
     * @param UrlAsyncModerationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UrlAsyncModerationResponse
     */
    public function urlAsyncModerationWithOptions($request, $runtime)
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
            'action' => 'UrlAsyncModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UrlAsyncModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * url异步检测.
     *
     * @param request - UrlAsyncModerationRequest
     *
     * @returns UrlAsyncModerationResponse
     *
     * @param UrlAsyncModerationRequest $request
     *
     * @return UrlAsyncModerationResponse
     */
    public function urlAsyncModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->urlAsyncModerationWithOptions($request, $runtime);
    }

    /**
     * 视频检测任务提交.
     *
     * @param request - VideoModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoModerationResponse
     *
     * @param VideoModerationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VideoModerationResponse
     */
    public function videoModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VideoModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VideoModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 视频检测任务提交.
     *
     * @param request - VideoModerationRequest
     *
     * @returns VideoModerationResponse
     *
     * @param VideoModerationRequest $request
     *
     * @return VideoModerationResponse
     */
    public function videoModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoModerationWithOptions($request, $runtime);
    }

    /**
     * 取消视频直播流检测.
     *
     * @param request - VideoModerationCancelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoModerationCancelResponse
     *
     * @param VideoModerationCancelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VideoModerationCancelResponse
     */
    public function videoModerationCancelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VideoModerationCancel',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VideoModerationCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消视频直播流检测.
     *
     * @param request - VideoModerationCancelRequest
     *
     * @returns VideoModerationCancelResponse
     *
     * @param VideoModerationCancelRequest $request
     *
     * @return VideoModerationCancelResponse
     */
    public function videoModerationCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoModerationCancelWithOptions($request, $runtime);
    }

    /**
     * Get Video Detection Results.
     *
     * @remarks
     * This operation is free of charge. We recommend that you query moderation results at least 30 seconds after you send an asynchronous moderation request. Content Moderation retains moderation results for at most 24 hours. After 24 hours, the results are deleted.
     *
     * @param request - VideoModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoModerationResultResponse
     *
     * @param VideoModerationResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VideoModerationResultResponse
     */
    public function videoModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VideoModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VideoModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Video Detection Results.
     *
     * @remarks
     * This operation is free of charge. We recommend that you query moderation results at least 30 seconds after you send an asynchronous moderation request. Content Moderation retains moderation results for at most 24 hours. After 24 hours, the results are deleted.
     *
     * @param request - VideoModerationResultRequest
     *
     * @returns VideoModerationResultResponse
     *
     * @param VideoModerationResultRequest $request
     *
     * @return VideoModerationResultResponse
     */
    public function videoModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoModerationResultWithOptions($request, $runtime);
    }

    /**
     * 语音审核.
     *
     * @param request - VoiceModerationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VoiceModerationResponse
     *
     * @param VoiceModerationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VoiceModerationResponse
     */
    public function voiceModerationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VoiceModeration',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VoiceModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 语音审核.
     *
     * @param request - VoiceModerationRequest
     *
     * @returns VoiceModerationResponse
     *
     * @param VoiceModerationRequest $request
     *
     * @return VoiceModerationResponse
     */
    public function voiceModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceModerationWithOptions($request, $runtime);
    }

    /**
     * 取消检测.
     *
     * @param request - VoiceModerationCancelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VoiceModerationCancelResponse
     *
     * @param VoiceModerationCancelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VoiceModerationCancelResponse
     */
    public function voiceModerationCancelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VoiceModerationCancel',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VoiceModerationCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消检测.
     *
     * @param request - VoiceModerationCancelRequest
     *
     * @returns VoiceModerationCancelResponse
     *
     * @param VoiceModerationCancelRequest $request
     *
     * @return VoiceModerationCancelResponse
     */
    public function voiceModerationCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceModerationCancelWithOptions($request, $runtime);
    }

    /**
     * Obtains the moderation results of a Voice Moderation 2.0 task.
     *
     * @param request - VoiceModerationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VoiceModerationResultResponse
     *
     * @param VoiceModerationResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VoiceModerationResultResponse
     */
    public function voiceModerationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->service) {
            @$body['Service'] = $request->service;
        }

        if (null !== $request->serviceParameters) {
            @$body['ServiceParameters'] = $request->serviceParameters;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VoiceModerationResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VoiceModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the moderation results of a Voice Moderation 2.0 task.
     *
     * @param request - VoiceModerationResultRequest
     *
     * @returns VoiceModerationResultResponse
     *
     * @param VoiceModerationResultRequest $request
     *
     * @return VoiceModerationResultResponse
     */
    public function voiceModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceModerationResultWithOptions($request, $runtime);
    }
}
