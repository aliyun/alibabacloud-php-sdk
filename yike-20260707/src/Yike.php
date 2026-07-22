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
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\GetVideoGenerationJobResponse;
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
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoGenerationJobRequest;
use AlibabaCloud\SDK\Yike\V20260707\Models\SubmitVideoGenerationJobResponse;
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
     * 批量获取媒资信息.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
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
     * 批量获取媒资信息.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
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
     * 创建分类.
     *
     * @remarks
     * 分类最多支持三级分类，每级分类最多支持创建 100 个子分类。
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
     * 创建分类.
     *
     * @remarks
     * 分类最多支持三级分类，每级分类最多支持创建 100 个子分类。
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
     * 删除分类.
     *
     * @remarks
     * 此接口会同时删除其子分类（包括二级分类和三级分类），请慎重操作。
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
     * 删除分类.
     *
     * @remarks
     * 此接口会同时删除其子分类（包括二级分类和三级分类），请慎重操作。
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
     * 删除媒资信息.
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
     * 删除媒资信息.
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
     * 查询分类.
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
     * 查询分类.
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
     * 查询图片生成任务
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
     * 查询图片生成任务
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
     * 查询媒资内容理解作业.
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
     * 查询媒资内容理解作业.
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
     * 查询视频生成任务
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
     * 查询视频生成任务
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
     * 导入媒资.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
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
     * 导入媒资.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
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
     * 列出分类.
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
     * 列出分类.
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
     * 搜索媒资.
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

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
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

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
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
     * 搜索媒资.
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
     * 提交图像生成接口.
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
     * 提交图像生成接口.
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
        if (null !== $request->jobParams) {
            @$query['JobParams'] = $request->jobParams;
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
     * 提交视频生成接口.
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
     * 提交视频生成接口.
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
     * 更新媒资分类.
     *
     * @remarks
     * 创建媒资分类后，可调用本接口通过分类 ID 来定位并更新媒资分类的名称。
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
     * 更新媒资分类.
     *
     * @remarks
     * 创建媒资分类后，可调用本接口通过分类 ID 来定位并更新媒资分类的名称。
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
     * UpdateMedia.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
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
     * UpdateMedia.
     *
     * @remarks
     * ## 请求说明
     * 该API用于查询媒资内容理解作业。
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
