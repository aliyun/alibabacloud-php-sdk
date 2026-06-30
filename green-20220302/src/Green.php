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
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64Request;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardForBase64Response;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardWsRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardWsResponse;
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
use Darabonba\OpenApi\undefined;
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
            'cn-shenzhen' => 'green-cip.cn-shenzhen.aliyuncs.com',
            'cn-shanghai' => 'green-cip.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'green-cip.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'green-cip.cn-beijing.aliyuncs.com',
            'ap-southeast-1' => 'green-cip.ap-southeast-1.aliyuncs.com',
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
     * Document review results.
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
     * Document review results.
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
     * Retrieves the results of an Image Moderation Pro task.
     *
     * @remarks
     * - Billing information: This operation is not billed.
     * - QPS limit: This operation is limited to 100 queries per second (QPS) for each user. If you exceed this limit, your API calls are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
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
     * Retrieves the results of an Image Moderation Pro task.
     *
     * @remarks
     * - Billing information: This operation is not billed.
     * - QPS limit: This operation is limited to 100 queries per second (QPS) for each user. If you exceed this limit, your API calls are throttled, which may affect your business. We recommend that you call this operation at a reasonable rate.
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
     * The enhanced image moderation auxiliary information API operation retrieves additional auxiliary information detected by the enhanced image moderation API operation, including OCR results and custom image library hit information.
     *
     * @remarks
     * This API operation must be used with the enhanced image moderation API. After you call the enhanced image moderation API operation, you can call this API operation to obtain additional detection information. This API operation is free of charge.
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
     * The enhanced image moderation auxiliary information API operation retrieves additional auxiliary information detected by the enhanced image moderation API operation, including OCR results and custom image library hit information.
     *
     * @remarks
     * This API operation must be used with the enhanced image moderation API. After you call the enhanced image moderation API operation, you can call this API operation to obtain additional detection information. This API operation is free of charge.
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
     * Query the results of an asynchronous multimodal moderation task.
     *
     * @remarks
     * - Billing information: This API call is free.
     * - Query timeout: Wait 30 seconds after you submit an asynchronous moderation task before querying the result. Do not wait longer than 24 hours, or the result will be automatically deleted.
     * - This API has a per-user rate limiting limit of 10 requests per second. Exceeding this limit triggers rate limiting, which may affect your service. Call the API responsibly.
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
     * Query the results of an asynchronous multimodal moderation task.
     *
     * @remarks
     * - Billing information: This API call is free.
     * - Query timeout: Wait 30 seconds after you submit an asynchronous moderation task before querying the result. Do not wait longer than 24 hours, or the result will be automatically deleted.
     * - This API has a per-user rate limiting limit of 10 requests per second. Exceeding this limit triggers rate limiting, which may affect your service. Call the API responsibly.
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
     * Retrieves an upload token.
     *
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
     * Retrieves an upload token.
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
     * Queries moderation results based on the ReqId returned by asynchronous URL moderation.
     *
     * @remarks
     * - Billing information: This operation is free of charge.
     * - Query timeout: We recommend that you set the query interval to 480 seconds (query the results 480 seconds after you submit the asynchronous moderation task). The maximum timeout period is 3 days. After this period, the results are automatically deleted.
     * - The QPS limit for this operation is 100 queries per second (QPS) per user. If the limit is exceeded, your API calls will be throttled, which may affect your business. Make sure you call the operation at a reasonable rate.
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
     * Queries moderation results based on the ReqId returned by asynchronous URL moderation.
     *
     * @remarks
     * - Billing information: This operation is free of charge.
     * - Query timeout: We recommend that you set the query interval to 480 seconds (query the results 480 seconds after you submit the asynchronous moderation task). The maximum timeout period is 3 days. After this period, the results are automatically deleted.
     * - The QPS limit for this operation is 100 queries per second (QPS) per user. If the limit is exceeded, your API calls will be throttled, which may affect your business. Make sure you call the operation at a reasonable rate.
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
     * Moderates document content.
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
     * Moderates document content.
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
     * This API is used for asynchronous image moderation. Asynchronous moderation tasks do not return detection results in real time. You can obtain the detection results using a callback or by polling. The detection results are retained for up to three days.
     *
     * @remarks
     * - The following image formats are supported: PNG, JPG, JPEG, BMP, WEBP, TIFF, ICO, HEIC, and SVG.
     * - The image size cannot exceed 10 MB. The recommended image resolution is greater than 200 × 200 pixels. A low resolution may compromise the accuracy of the Content Moderation algorithm.
     * - The timeout period for image downloads is 3 seconds. If an image download exceeds this duration, a download timeout error is returned.
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
     * This API is used for asynchronous image moderation. Asynchronous moderation tasks do not return detection results in real time. You can obtain the detection results using a callback or by polling. The detection results are retained for up to three days.
     *
     * @remarks
     * - The following image formats are supported: PNG, JPG, JPEG, BMP, WEBP, TIFF, ICO, HEIC, and SVG.
     * - The image size cannot exceed 10 MB. The recommended image resolution is greater than 200 × 200 pixels. A low resolution may compromise the accuracy of the Content Moderation algorithm.
     * - The timeout period for image downloads is 3 seconds. If an image download exceeds this duration, a download timeout error is returned.
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
     * Batch Invocation of Images.
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
     * Batch Invocation of Images.
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
     * Image moderation.
     *
     * @remarks
     * Before you call this operation, complete the following steps:
     * 1. [Activate AI Guardrails-Enhanced Edition](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn).
     * 2. Understand the [billing methods and pricing](https://help.aliyun.com/document_detail/467826.html?#section-h06-qz6-1pt) of the enhanced image moderation feature.
     * 3. For more information about API usage and parameters, see the [API reference](https://help.aliyun.com/document_detail/467829.html).
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
     * Image moderation.
     *
     * @remarks
     * Before you call this operation, complete the following steps:
     * 1. [Activate AI Guardrails-Enhanced Edition](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn).
     * 2. Understand the [billing methods and pricing](https://help.aliyun.com/document_detail/467826.html?#section-h06-qz6-1pt) of the enhanced image moderation feature.
     * 3. For more information about API usage and parameters, see the [API reference](https://help.aliyun.com/document_detail/467829.html).
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
     * The channel callback API for manual review results in Content Moderation.
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
     * The channel callback API for manual review results in Content Moderation.
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
     * Interface for submitting Content Moderation manual review requests.
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
     * Interface for submitting Content Moderation manual review requests.
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
     * Retrieves the manual review result.
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
     * Retrieves the manual review result.
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
     * This is the synchronous detection API for the multi-modal agent.
     *
     * @remarks
     * This is the AI Guardrails agent.
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
     * This is the synchronous detection API for the multi-modal agent.
     *
     * @remarks
     * This is the AI Guardrails agent.
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
     * API for synchronous detection.
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
     * API for synchronous detection.
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
     * An asynchronous multimodal AI safety guardrail API for audio and video. It provides comprehensive detection of non-compliant content, sensitive content, prompt injection attacks, malicious files, and malicious URLs.
     *
     * @remarks
     * If an API is subject to billing, add the following sentence in bold: "Before using this API, ensure that you fully understand the billing methods and pricing of the XXX product." The word "pricing" must be a hyperlink to https\\://www\\.aliyun.com/price/product#/ecs/detail.
     *
     * @param request - MultiModalGuardAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiModalGuardAsyncResponse
     *
     * @param MultiModalGuardAsyncRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MultiModalGuardAsyncResponse
     */
    public function multiModalGuardAsyncWithOptions($request, $runtime)
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
            'action' => 'MultiModalGuardAsync',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultiModalGuardAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An asynchronous multimodal AI safety guardrail API for audio and video. It provides comprehensive detection of non-compliant content, sensitive content, prompt injection attacks, malicious files, and malicious URLs.
     *
     * @remarks
     * If an API is subject to billing, add the following sentence in bold: "Before using this API, ensure that you fully understand the billing methods and pricing of the XXX product." The word "pricing" must be a hyperlink to https\\://www\\.aliyun.com/price/product#/ecs/detail.
     *
     * @param request - MultiModalGuardAsyncRequest
     *
     * @returns MultiModalGuardAsyncResponse
     *
     * @param MultiModalGuardAsyncRequest $request
     *
     * @return MultiModalGuardAsyncResponse
     */
    public function multiModalGuardAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multiModalGuardAsyncWithOptions($request, $runtime);
    }

    /**
     * This AI Security Guardrail API retrieves asynchronous multimodal results from both audio and video.
     *
     * @remarks
     * For APIs that incur charges, add the following sentence in bold at the beginning of the description: "Before you use this API, make sure that you fully understand the billing methods and pricing of the XXX product." Link the word \\"pricing\\" to https\\://www\\.aliyun.com/price/product#/ecs/detail.
     *
     * @param request - MultiModalGuardAsyncResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiModalGuardAsyncResultResponse
     *
     * @param MultiModalGuardAsyncResultRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return MultiModalGuardAsyncResultResponse
     */
    public function multiModalGuardAsyncResultWithOptions($request, $runtime)
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
            'action' => 'MultiModalGuardAsyncResult',
            'version' => '2022-03-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MultiModalGuardAsyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This AI Security Guardrail API retrieves asynchronous multimodal results from both audio and video.
     *
     * @remarks
     * For APIs that incur charges, add the following sentence in bold at the beginning of the description: "Before you use this API, make sure that you fully understand the billing methods and pricing of the XXX product." Link the word \\"pricing\\" to https\\://www\\.aliyun.com/price/product#/ecs/detail.
     *
     * @param request - MultiModalGuardAsyncResultRequest
     *
     * @returns MultiModalGuardAsyncResultResponse
     *
     * @param MultiModalGuardAsyncResultRequest $request
     *
     * @return MultiModalGuardAsyncResultResponse
     */
    public function multiModalGuardAsyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multiModalGuardAsyncResultWithOptions($request, $runtime);
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
     * Provides a WebSocket-based multimodal detection API for AI safety guardrails. This API supports content compliance detection, sensitive content detection, prompt attack detection, malicious file detection, malicious URL detection, and other comprehensive detection capabilities.
     *
     * @param request - MultiModalGuardWsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiModalGuardWsResponse
     *
     * @param MultiModalGuardWsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MultiModalGuardWsResponse
     */
    public function multiModalGuardWsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MultiModalGuardWs',
            'version' => '2022-03-02',
            'protocol' => 'wss',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
            'websocketSubProtocol' => 'awap',
        ]);
        $res = new MultiModalGuardWsResponse([]);
        $tmp = $this->callApi($params, $req, $runtime);
        if (null !== @$tmp['webSocketClient']) {
            $res->webSocketClient = undefined::createWebSocketClient(@$tmp['webSocketClient']);
        }

        return $res;
    }

    /**
     * Provides a WebSocket-based multimodal detection API for AI safety guardrails. This API supports content compliance detection, sensitive content detection, prompt attack detection, malicious file detection, malicious URL detection, and other comprehensive detection capabilities.
     *
     * @param request - MultiModalGuardWsRequest
     *
     * @returns MultiModalGuardWsResponse
     *
     * @param MultiModalGuardWsRequest $request
     *
     * @return MultiModalGuardWsResponse
     */
    public function multiModalGuardWs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->multiModalGuardWsWithOptions($request, $runtime);
    }

    /**
     * Multimodal-Asynchronous Detection.
     *
     * @remarks
     * The asynchronous URL moderation service supports two billing methods: pay-as-you-go and resource plan usage.
     * - After you activate the enhanced text moderation service, the default billing method is pay-as-you-go. You are billed daily based on actual usage. No charges apply if you do not invoke the service.
     * - If your moderation volume is large or your moderation needs are relatively stable, purchase a resource plan in advance. Larger resource plans offer greater discounts. You can stack multiple resource plans.
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
     * Multimodal-Asynchronous Detection.
     *
     * @remarks
     * The asynchronous URL moderation service supports two billing methods: pay-as-you-go and resource plan usage.
     * - After you activate the enhanced text moderation service, the default billing method is pay-as-you-go. You are billed daily based on actual usage. No charges apply if you do not invoke the service.
     * - If your moderation volume is large or your moderation needs are relatively stable, purchase a resource plan in advance. Larger resource plans offer greater discounts. You can stack multiple resource plans.
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
     * This service uses dynamic policies and models to defend against adversarial content. It provides moderation services for various business scenarios and detects different types of violations.
     *
     * @remarks
     * Before you use this operation, review the [billing methods and pricing](https://help.aliyun.com/document_detail/464388.html?#section-itm-m2s-ugq) for Text Moderation Plus.
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
     * This service uses dynamic policies and models to defend against adversarial content. It provides moderation services for various business scenarios and detects different types of violations.
     *
     * @remarks
     * Before you use this operation, review the [billing methods and pricing](https://help.aliyun.com/document_detail/464388.html?#section-itm-m2s-ugq) for Text Moderation Plus.
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
     * Text Moderation Plus is an upgraded service that moderates the input instructions and generated text of large language models (LLMs). This service can retrieve standard answers for specific input instructions and lets you enable or disable moderation labels.
     *
     * @remarks
     * Before you use this API, [activate AI Guardrails Pro](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn) and make sure that you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/2671445.html?#section-6od-32j-99n) for Text Moderation Plus.
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
     * Text Moderation Plus is an upgraded service that moderates the input instructions and generated text of large language models (LLMs). This service can retrieve standard answers for specific input instructions and lets you enable or disable moderation labels.
     *
     * @remarks
     * Before you use this API, [activate AI Guardrails Pro](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn) and make sure that you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/2671445.html?#section-6od-32j-99n) for Text Moderation Plus.
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
     * The URL asynchronous moderation service detects threats such as fraud, pornography, and gambling in URLs to protect the content ecosystem of your platform.
     *
     * @remarks
     * The URL asynchronous moderation service supports the pay-as-you-go and resource plan billing methods.
     * - After you activate the enhanced edition of Text Moderation, the default billing method is pay-as-you-go. You are charged CNY 30 per 10,000 calls based on your daily usage. No fees are incurred if you do not call the service.
     * - If you have many moderation requests or relatively fixed moderation requirements, we recommend that you purchase resource plans in advance. The larger the resource plan you purchase, the greater the discount you receive. You can purchase and use multiple resource plans.
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
     * The URL asynchronous moderation service detects threats such as fraud, pornography, and gambling in URLs to protect the content ecosystem of your platform.
     *
     * @remarks
     * The URL asynchronous moderation service supports the pay-as-you-go and resource plan billing methods.
     * - After you activate the enhanced edition of Text Moderation, the default billing method is pay-as-you-go. You are charged CNY 30 per 10,000 calls based on your daily usage. No fees are incurred if you do not call the service.
     * - If you have many moderation requests or relatively fixed moderation requirements, we recommend that you purchase resource plans in advance. The larger the resource plan you purchase, the greater the discount you receive. You can purchase and use multiple resource plans.
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
     * The enhanced video moderation feature of Content Moderation detects threats and non-compliant content in video files. Use this operation to submit a moderation task.
     *
     * @remarks
     * Before you call this operation, make sure that you have activated the [enhanced Content Moderation](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn) service and understand the [billing methods](https://help.aliyun.com/document_detail/2505807.html) and [pricing](https://www.aliyun.com/price/product?#/lvwang/detail/cdibag) of the enhanced video moderation feature.
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
     * The enhanced video moderation feature of Content Moderation detects threats and non-compliant content in video files. Use this operation to submit a moderation task.
     *
     * @remarks
     * Before you call this operation, make sure that you have activated the [enhanced Content Moderation](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn) service and understand the [billing methods](https://help.aliyun.com/document_detail/2505807.html) and [pricing](https://www.aliyun.com/price/product?#/lvwang/detail/cdibag) of the enhanced video moderation feature.
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
     * Cancels an ApsaraVideo Live moderation task.
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
     * Cancels an ApsaraVideo Live moderation task.
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
     * Retrieves the task result of an enhanced video content moderation node.
     *
     * @remarks
     * This operation is not billed. Set the query interval to 30 seconds (that is, query the results 30 seconds after submitting the asynchronous moderation task). The maximum query window is 24 hours. After 24 hours, the results are automatically deleted.
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
     * Retrieves the task result of an enhanced video content moderation node.
     *
     * @remarks
     * This operation is not billed. Set the query interval to 30 seconds (that is, query the results 30 seconds after submitting the asynchronous moderation task). The maximum query window is 24 hours. After 24 hours, the results are automatically deleted.
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
     * Submits a task for enhanced voice moderation.
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
     * Submits a task for enhanced voice moderation.
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
     * This operation cancels an enhanced voice moderation task.
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
     * This operation cancels an enhanced voice moderation task.
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
     * Retrieve the detection results for enhanced voice moderation.
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
     * Retrieve the detection results for enhanced voice moderation.
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
