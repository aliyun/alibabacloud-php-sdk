<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Yike\V20260707\Models\BatchGetMediasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\BatchGetMediasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\CreateAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteMediasRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\DeleteMediasResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetImageGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetImageGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaComprehensionJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaComprehensionJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetRemakeScriptJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetRemakeScriptJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRenderJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoRenderJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeAccountCreditRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeAccountCreditResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeJobCreditRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetYikeJobCreditResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ImportMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ImportMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListAssetCategoriesRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\ListAssetCategoriesResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitImageGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitImageGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitMediaComprehensionJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitMediaComprehensionJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitRemakeScriptJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitRemakeScriptJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoGenerationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoRenderJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoRenderJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoTranslationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoTranslationJobResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateAssetCategoryRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateAssetCategoryResponse;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateMediaRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\UpdateMediaResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Yike extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai' => 'yike.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'yike.ap-southeast-1.aliyuncs.com',
        ];
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
     * Retrieves information about multiple media assets in a batch.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - BatchGetMediasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetMediasResponse
     *
     * @param BatchGetMediasRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BatchGetMediasResponse
     */
    public function batchGetMediasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetMedias',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetMediasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about multiple media assets in a batch.
     *
     * @remarks
     * ## Request description.
     *
     * @param request - BatchGetMediasRequest
     *
     * @returns BatchGetMediasResponse
     *
     * @param BatchGetMediasRequest $request
     *
     * @return BatchGetMediasResponse
     */
    public function batchGetMedias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetMediasWithOptions($request, $runtime);
    }

    /**
     * Creates a media asset category.
     *
     * @remarks
     * Categories support up to three levels, and each level supports up to 100 subcategories.
     *
     * @param request - CreateAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAssetCategoryResponse
     *
     * @param CreateAssetCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateAssetCategoryResponse
     */
    public function createAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryName) {
            @$query['CategoryName'] = $request->categoryName;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a media asset category.
     *
     * @remarks
     * Categories support up to three levels, and each level supports up to 100 subcategories.
     *
     * @param request - CreateAssetCategoryRequest
     *
     * @returns CreateAssetCategoryResponse
     *
     * @param CreateAssetCategoryRequest $request
     *
     * @return CreateAssetCategoryResponse
     */
    public function createAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Deletes a media asset category.
     *
     * @remarks
     * This operation also deletes all subcategories (including second-level and third-level categories). Proceed with caution.
     *
     * @param request - DeleteAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAssetCategoryResponse
     *
     * @param DeleteAssetCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteAssetCategoryResponse
     */
    public function deleteAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a media asset category.
     *
     * @remarks
     * This operation also deletes all subcategories (including second-level and third-level categories). Proceed with caution.
     *
     * @param request - DeleteAssetCategoryRequest
     *
     * @returns DeleteAssetCategoryResponse
     *
     * @param DeleteAssetCategoryRequest $request
     *
     * @return DeleteAssetCategoryResponse
     */
    public function deleteAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Deletes media asset information.
     *
     * @param request - DeleteMediasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMediasResponse
     *
     * @param DeleteMediasRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteMediasResponse
     */
    public function deleteMediasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletePhysicalFiles) {
            @$query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }

        if (null !== $request->inputURLs) {
            @$query['InputURLs'] = $request->inputURLs;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMedias',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMediasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes media asset information.
     *
     * @param request - DeleteMediasRequest
     *
     * @returns DeleteMediasResponse
     *
     * @param DeleteMediasRequest $request
     *
     * @return DeleteMediasResponse
     */
    public function deleteMedias($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediasWithOptions($request, $runtime);
    }

    /**
     * Retrieves the information of a specified category and the list of its subcategories (immediate child categories).
     *
     * @param request - GetAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAssetCategoryResponse
     *
     * @param GetAssetCategoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAssetCategoryResponse
     */
    public function getAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the information of a specified category and the list of its subcategories (immediate child categories).
     *
     * @param request - GetAssetCategoryRequest
     *
     * @returns GetAssetCategoryResponse
     *
     * @param GetAssetCategoryRequest $request
     *
     * @return GetAssetCategoryResponse
     */
    public function getAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Queries an image generation task.
     *
     * @param request - GetImageGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageGenerationJobResponse
     *
     * @param GetImageGenerationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetImageGenerationJobResponse
     */
    public function getImageGenerationJobWithOptions($request, $runtime)
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
            'action' => 'GetImageGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries an image generation task.
     *
     * @param request - GetImageGenerationJobRequest
     *
     * @returns GetImageGenerationJobResponse
     *
     * @param GetImageGenerationJobRequest $request
     *
     * @return GetImageGenerationJobResponse
     */
    public function getImageGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageGenerationJobWithOptions($request, $runtime);
    }

    /**
     * 查询媒资.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
     *
     * @param request - GetMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaResponse
     *
     * @param GetMediaRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetMediaResponse
     */
    public function getMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authTimeout) {
            @$query['AuthTimeout'] = $request->authTimeout;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询媒资.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
     *
     * @param request - GetMediaRequest
     *
     * @returns GetMediaResponse
     *
     * @param GetMediaRequest $request
     *
     * @return GetMediaResponse
     */
    public function getMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaWithOptions($request, $runtime);
    }

    /**
     * Queries a media asset content understanding job.
     *
     * @remarks
     * ## Description
     * This API is used to query a media asset content understanding job.
     *
     * @param request - GetMediaComprehensionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMediaComprehensionJobResponse
     *
     * @param GetMediaComprehensionJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMediaComprehensionJobResponse
     */
    public function getMediaComprehensionJobWithOptions($request, $runtime)
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
            'action' => 'GetMediaComprehensionJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMediaComprehensionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a media asset content understanding job.
     *
     * @remarks
     * ## Description
     * This API is used to query a media asset content understanding job.
     *
     * @param request - GetMediaComprehensionJobRequest
     *
     * @returns GetMediaComprehensionJobResponse
     *
     * @param GetMediaComprehensionJobRequest $request
     *
     * @return GetMediaComprehensionJobResponse
     */
    public function getMediaComprehensionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaComprehensionJobWithOptions($request, $runtime);
    }

    /**
     * Queries a creative script generation task.
     *
     * @param request - GetRemakeScriptJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRemakeScriptJobResponse
     *
     * @param GetRemakeScriptJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetRemakeScriptJobResponse
     */
    public function getRemakeScriptJobWithOptions($request, $runtime)
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
            'action' => 'GetRemakeScriptJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRemakeScriptJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a creative script generation task.
     *
     * @param request - GetRemakeScriptJobRequest
     *
     * @returns GetRemakeScriptJobResponse
     *
     * @param GetRemakeScriptJobRequest $request
     *
     * @return GetRemakeScriptJobResponse
     */
    public function getRemakeScriptJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRemakeScriptJobWithOptions($request, $runtime);
    }

    /**
     * Queries a video generation task.
     *
     * @param request - GetVideoGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoGenerationJobResponse
     *
     * @param GetVideoGenerationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVideoGenerationJobResponse
     */
    public function getVideoGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a video generation task.
     *
     * @param request - GetVideoGenerationJobRequest
     *
     * @returns GetVideoGenerationJobResponse
     *
     * @param GetVideoGenerationJobRequest $request
     *
     * @return GetVideoGenerationJobResponse
     */
    public function getVideoGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoGenerationJobWithOptions($request, $runtime);
    }

    /**
     * 查询爆款新视频渲染任务
     *
     * @param request - GetVideoRenderJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoRenderJobResponse
     *
     * @param GetVideoRenderJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetVideoRenderJobResponse
     */
    public function getVideoRenderJobWithOptions($request, $runtime)
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
            'action' => 'GetVideoRenderJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoRenderJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询爆款新视频渲染任务
     *
     * @param request - GetVideoRenderJobRequest
     *
     * @returns GetVideoRenderJobResponse
     *
     * @param GetVideoRenderJobRequest $request
     *
     * @return GetVideoRenderJobResponse
     */
    public function getVideoRenderJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoRenderJobWithOptions($request, $runtime);
    }

    /**
     * Retrieves the membership plan and credit information for a Yike primary account.
     *
     * @param request - GetYikeAccountCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeAccountCreditResponse
     *
     * @param GetYikeAccountCreditRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetYikeAccountCreditResponse
     */
    public function getYikeAccountCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetYikeAccountCredit',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeAccountCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the membership plan and credit information for a Yike primary account.
     *
     * @param request - GetYikeAccountCreditRequest
     *
     * @returns GetYikeAccountCreditResponse
     *
     * @param GetYikeAccountCreditRequest $request
     *
     * @return GetYikeAccountCreditResponse
     */
    public function getYikeAccountCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeAccountCreditWithOptions($request, $runtime);
    }

    /**
     * Queries the actual credit consumption of a task.
     *
     * @param request - GetYikeJobCreditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYikeJobCreditResponse
     *
     * @param GetYikeJobCreditRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetYikeJobCreditResponse
     */
    public function getYikeJobCreditWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetYikeJobCredit',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYikeJobCreditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the actual credit consumption of a task.
     *
     * @param request - GetYikeJobCreditRequest
     *
     * @returns GetYikeJobCreditResponse
     *
     * @param GetYikeJobCreditRequest $request
     *
     * @return GetYikeJobCreditResponse
     */
    public function getYikeJobCredit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYikeJobCreditWithOptions($request, $runtime);
    }

    /**
     * Imports a media asset.
     *
     * @remarks
     * ## Operation description
     * This API is used to query media content understanding jobs.
     *
     * @param request - ImportMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportMediaResponse
     *
     * @param ImportMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ImportMediaResponse
     */
    public function importMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dynamicMetaData) {
            @$query['DynamicMetaData'] = $request->dynamicMetaData;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->importSource) {
            @$query['ImportSource'] = $request->importSource;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaTags) {
            @$query['MediaTags'] = $request->mediaTags;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->registerConfig) {
            @$query['RegisterConfig'] = $request->registerConfig;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports a media asset.
     *
     * @remarks
     * ## Operation description
     * This API is used to query media content understanding jobs.
     *
     * @param request - ImportMediaRequest
     *
     * @returns ImportMediaResponse
     *
     * @param ImportMediaRequest $request
     *
     * @return ImportMediaResponse
     */
    public function importMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importMediaWithOptions($request, $runtime);
    }

    /**
     * Retrieves a paginated list of categories.
     *
     * @param request - ListAssetCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAssetCategoriesResponse
     *
     * @param ListAssetCategoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAssetCategoriesResponse
     */
    public function listAssetCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAssetCategories',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAssetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of categories.
     *
     * @param request - ListAssetCategoriesRequest
     *
     * @returns ListAssetCategoriesResponse
     *
     * @param ListAssetCategoriesRequest $request
     *
     * @return ListAssetCategoriesResponse
     */
    public function listAssetCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAssetCategoriesWithOptions($request, $runtime);
    }

    /**
     * Returns media asset information that matches the specified filter conditions.
     *
     * @param request - SearchMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchMediaResponse
     *
     * @param SearchMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->match) {
            @$query['Match'] = $request->match;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->scrollToken) {
            @$query['ScrollToken'] = $request->scrollToken;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns media asset information that matches the specified filter conditions.
     *
     * @param request - SearchMediaRequest
     *
     * @returns SearchMediaResponse
     *
     * @param SearchMediaRequest $request
     *
     * @return SearchMediaResponse
     */
    public function searchMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * Submits an image generation task.
     *
     * @param request - SubmitImageGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitImageGenerationJobResponse
     *
     * @param SubmitImageGenerationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitImageGenerationJobResponse
     */
    public function submitImageGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$query['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->n) {
            @$query['N'] = $request->n;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitImageGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitImageGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an image generation task.
     *
     * @param request - SubmitImageGenerationJobRequest
     *
     * @returns SubmitImageGenerationJobResponse
     *
     * @param SubmitImageGenerationJobRequest $request
     *
     * @return SubmitImageGenerationJobResponse
     */
    public function submitImageGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImageGenerationJobWithOptions($request, $runtime);
    }

    /**
     * 提交媒资内容理解作业.
     *
     * @remarks
     * ## 请求说明
     * 该API用于根据提供的媒资文件（比如视频链接）进行内容理解。此外，支持通过`UserData`字段传递自定义参数，在回调时原样返回。
     *
     * @param request - SubmitMediaComprehensionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitMediaComprehensionJobResponse
     *
     * @param SubmitMediaComprehensionJobRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SubmitMediaComprehensionJobResponse
     */
    public function submitMediaComprehensionJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParams) {
            @$query['JobParams'] = $request->jobParams;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitMediaComprehensionJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitMediaComprehensionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交媒资内容理解作业.
     *
     * @remarks
     * ## 请求说明
     * 该API用于根据提供的媒资文件（比如视频链接）进行内容理解。此外，支持通过`UserData`字段传递自定义参数，在回调时原样返回。
     *
     * @param request - SubmitMediaComprehensionJobRequest
     *
     * @returns SubmitMediaComprehensionJobResponse
     *
     * @param SubmitMediaComprehensionJobRequest $request
     *
     * @return SubmitMediaComprehensionJobResponse
     */
    public function submitMediaComprehensionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaComprehensionJobWithOptions($request, $runtime);
    }

    /**
     * 提交爆款复刻新脚本生成任务
     *
     * @remarks
     * 该 API 用于根据内容理解的结果与新商品/模特信息，仿写生成新的口播脚本。此外，支持通过UserData字段传递自定义参数，在回调时原样返回。
     *
     * @param request - SubmitRemakeScriptJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitRemakeScriptJobResponse
     *
     * @param SubmitRemakeScriptJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitRemakeScriptJobResponse
     */
    public function submitRemakeScriptJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->remakeParams) {
            @$query['RemakeParams'] = $request->remakeParams;
        }

        if (null !== $request->remakeType) {
            @$query['RemakeType'] = $request->remakeType;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitRemakeScriptJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitRemakeScriptJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交爆款复刻新脚本生成任务
     *
     * @remarks
     * 该 API 用于根据内容理解的结果与新商品/模特信息，仿写生成新的口播脚本。此外，支持通过UserData字段传递自定义参数，在回调时原样返回。
     *
     * @param request - SubmitRemakeScriptJobRequest
     *
     * @returns SubmitRemakeScriptJobResponse
     *
     * @param SubmitRemakeScriptJobRequest $request
     *
     * @return SubmitRemakeScriptJobResponse
     */
    public function submitRemakeScriptJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitRemakeScriptJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video generation task.
     *
     * @param request - SubmitVideoGenerationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoGenerationJobResponse
     *
     * @param SubmitVideoGenerationJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitVideoGenerationJobResponse
     */
    public function submitVideoGenerationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aspectRatio) {
            @$query['AspectRatio'] = $request->aspectRatio;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$query['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->n) {
            @$query['N'] = $request->n;
        }

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->scene) {
            @$query['Scene'] = $request->scene;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoGenerationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoGenerationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video generation task.
     *
     * @param request - SubmitVideoGenerationJobRequest
     *
     * @returns SubmitVideoGenerationJobResponse
     *
     * @param SubmitVideoGenerationJobRequest $request
     *
     * @return SubmitVideoGenerationJobResponse
     */
    public function submitVideoGenerationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoGenerationJobWithOptions($request, $runtime);
    }

    /**
     * 提交爆款新视频渲染任务
     *
     * @param request - SubmitVideoRenderJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoRenderJobResponse
     *
     * @param SubmitVideoRenderJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitVideoRenderJobResponse
     */
    public function submitVideoRenderJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->script) {
            @$query['Script'] = $request->script;
        }

        if (null !== $request->settings) {
            @$query['Settings'] = $request->settings;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoRenderJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoRenderJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交爆款新视频渲染任务
     *
     * @param request - SubmitVideoRenderJobRequest
     *
     * @returns SubmitVideoRenderJobResponse
     *
     * @param SubmitVideoRenderJobRequest $request
     *
     * @return SubmitVideoRenderJobResponse
     */
    public function submitVideoRenderJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoRenderJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video translation task that supports subtitle translation, voice translation, and on-screen text translation.
     *
     * @remarks
     * ## Request description
     * - This API supports multiple video translation features, including subtitle translation and voice translation.
     * - The `JobType` parameter defines the task type, such as `SubtitleTranslate` and `VoiceTranslate`.
     * - The `Input` and `Output` parameters specify the input resource and output path, respectively.
     * - `JobParameters` contains language configuration and other feature switches, such as `SourceLanguage`, `TargetLanguage`, `NeedDetext`, and `NeedVisualTranslate`.
     * - `EditingConfig` can be used to specify the style configuration for the final editing and compositing.
     * - `ClientToken` is an optional parameter used to ensure the idempotence of the request.
     * - Ensure that all required fields are correctly filled in. Otherwise, the request may fail.
     *
     * @param request - SubmitVideoTranslationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitVideoTranslationJobResponse
     *
     * @param SubmitVideoTranslationJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->input) {
            @$body['Input'] = $request->input;
        }

        if (null !== $request->jobParameters) {
            @$body['JobParameters'] = $request->jobParameters;
        }

        if (null !== $request->jobType) {
            @$body['JobType'] = $request->jobType;
        }

        if (null !== $request->output) {
            @$body['Output'] = $request->output;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitVideoTranslationJob',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitVideoTranslationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a video translation task that supports subtitle translation, voice translation, and on-screen text translation.
     *
     * @remarks
     * ## Request description
     * - This API supports multiple video translation features, including subtitle translation and voice translation.
     * - The `JobType` parameter defines the task type, such as `SubtitleTranslate` and `VoiceTranslate`.
     * - The `Input` and `Output` parameters specify the input resource and output path, respectively.
     * - `JobParameters` contains language configuration and other feature switches, such as `SourceLanguage`, `TargetLanguage`, `NeedDetext`, and `NeedVisualTranslate`.
     * - `EditingConfig` can be used to specify the style configuration for the final editing and compositing.
     * - `ClientToken` is an optional parameter used to ensure the idempotence of the request.
     * - Ensure that all required fields are correctly filled in. Otherwise, the request may fail.
     *
     * @param request - SubmitVideoTranslationJobRequest
     *
     * @returns SubmitVideoTranslationJobResponse
     *
     * @param SubmitVideoTranslationJobRequest $request
     *
     * @return SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoTranslationJobWithOptions($request, $runtime);
    }

    /**
     * Updates a media asset category.
     *
     * @remarks
     * After you create a media asset category, you can call this operation to locate and update the name of the media asset category by category ID.
     *
     * @param request - UpdateAssetCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAssetCategoryResponse
     *
     * @param UpdateAssetCategoryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateAssetCategoryResponse
     */
    public function updateAssetCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryName) {
            @$query['CategoryName'] = $request->categoryName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAssetCategory',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAssetCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a media asset category.
     *
     * @remarks
     * After you create a media asset category, you can call this operation to locate and update the name of the media asset category by category ID.
     *
     * @param request - UpdateAssetCategoryRequest
     *
     * @returns UpdateAssetCategoryResponse
     *
     * @param UpdateAssetCategoryRequest $request
     *
     * @return UpdateAssetCategoryResponse
     */
    public function updateAssetCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAssetCategoryWithOptions($request, $runtime);
    }

    /**
     * Updates media asset information.
     *
     * @remarks
     * ## Request description
     * This API is used to query media content understanding jobs.
     *
     * @param request - UpdateMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMediaResponse
     *
     * @param UpdateMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateMediaResponse
     */
    public function updateMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appendTags) {
            @$query['AppendTags'] = $request->appendTags;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->dynamicMetaData) {
            @$query['DynamicMetaData'] = $request->dynamicMetaData;
        }

        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaTags) {
            @$query['MediaTags'] = $request->mediaTags;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMedia',
            'version' => '2026-07-07',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates media asset information.
     *
     * @remarks
     * ## Request description
     * This API is used to query media content understanding jobs.
     *
     * @param request - UpdateMediaRequest
     *
     * @returns UpdateMediaResponse
     *
     * @param UpdateMediaRequest $request
     *
     * @return UpdateMediaResponse
     */
    public function updateMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaWithOptions($request, $runtime);
    }
}
