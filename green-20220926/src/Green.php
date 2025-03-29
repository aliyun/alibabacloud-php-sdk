<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAnswerSampleRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAnswerSampleResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImages2LibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddImages2LibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CancelStockOssCheckTaskRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CancelStockOssCheckTaskResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyServiceConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatePreCheckRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatePreCheckResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatStockOssCheckTaskRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreatStockOssCheckTaskResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteAnswerSampleRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteAnswerSampleResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteFeatureConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteFeatureConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteImagesFromLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteImagesFromLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteKeywordResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportAnswerSampleRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportAnswerSampleResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportCipStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportCipStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportKeywordRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportKeywordResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportOssCheckStatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportOssCheckStatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportTextScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportTextScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ExportTextScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAnswerImportProgressRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAnswerImportProgressResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupBucketsListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupBucketsListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBackupStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBucketsListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetBucketsListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetExecuteTimeRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetExecuteTimeResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetFeatureConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetFeatureConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetImageSceneLabelConfRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetImageSceneLabelConfResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetImageSceneLabelListConfRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetImageSceneLabelListConfResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetJobNameListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetJobNameListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetJobNameListShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordImportResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordImportResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanNumRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanNumResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceConfResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceLabelConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetServiceLabelConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListImagesFromLibShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordLibsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordLibsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListKeywordsShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListOssCheckResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyFeatureConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyFeatureConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateScanResultFeedbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateScanResultFeedbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateServiceConfigResponse;
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
     * 添加代答样本.
     *
     * @param request - AddAnswerSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAnswerSampleResponse
     *
     * @param AddAnswerSampleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddAnswerSampleResponse
     */
    public function addAnswerSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libId) {
            @$query['LibId'] = $request->libId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sampleObject) {
            @$query['SampleObject'] = $request->sampleObject;
        }

        if (null !== $request->samples) {
            @$query['Samples'] = $request->samples;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAnswerSample',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddAnswerSampleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAnswerSampleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加代答样本.
     *
     * @param request - AddAnswerSampleRequest
     *
     * @returns AddAnswerSampleResponse
     *
     * @param AddAnswerSampleRequest $request
     *
     * @return AddAnswerSampleResponse
     */
    public function addAnswerSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAnswerSampleWithOptions($request, $runtime);
    }

    /**
     * 创建图库.
     *
     * @param request - AddImageLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddImageLibResponse
     *
     * @param AddImageLibRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddImageLibResponse
     */
    public function addImageLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->libName) {
            @$body['LibName'] = $request->libName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddImageLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddImageLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建图库.
     *
     * @param request - AddImageLibRequest
     *
     * @returns AddImageLibResponse
     *
     * @param AddImageLibRequest $request
     *
     * @return AddImageLibResponse
     */
    public function addImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageLibWithOptions($request, $runtime);
    }

    /**
     * 批量添加图片.
     *
     * @param request - AddImages2LibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddImages2LibResponse
     *
     * @param AddImages2LibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddImages2LibResponse
     */
    public function addImages2LibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->imgUrl) {
            @$body['ImgUrl'] = $request->imgUrl;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddImages2Lib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddImages2LibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddImages2LibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量添加图片.
     *
     * @param request - AddImages2LibRequest
     *
     * @returns AddImages2LibResponse
     *
     * @param AddImages2LibRequest $request
     *
     * @return AddImages2LibResponse
     */
    public function addImages2Lib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImages2LibWithOptions($request, $runtime);
    }

    /**
     * 创建关键词库.
     *
     * @param request - AddKeywordLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddKeywordLibResponse
     *
     * @param AddKeywordLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddKeywordLibResponse
     */
    public function addKeywordLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->keywords) {
            @$body['Keywords'] = $request->keywords;
        }

        if (null !== $request->keywordsObject) {
            @$body['KeywordsObject'] = $request->keywordsObject;
        }

        if (null !== $request->libName) {
            @$body['LibName'] = $request->libName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddKeywordLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddKeywordLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建关键词库.
     *
     * @param request - AddKeywordLibRequest
     *
     * @returns AddKeywordLibResponse
     *
     * @param AddKeywordLibRequest $request
     *
     * @return AddKeywordLibResponse
     */
    public function addKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordLibWithOptions($request, $runtime);
    }

    /**
     * 添加关键词.
     *
     * @param request - AddKeywordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddKeywordsResponse
     *
     * @param AddKeywordsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddKeywordsResponse
     */
    public function addKeywordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->keywords) {
            @$body['Keywords'] = $request->keywords;
        }

        if (null !== $request->keywordsObject) {
            @$body['KeywordsObject'] = $request->keywordsObject;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddKeywords',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddKeywordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加关键词.
     *
     * @param request - AddKeywordsRequest
     *
     * @returns AddKeywordsResponse
     *
     * @param AddKeywordsRequest $request
     *
     * @return AddKeywordsResponse
     */
    public function addKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordsWithOptions($request, $runtime);
    }

    /**
     * 添加关键词.
     *
     * @param request - AddKeywordsToLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddKeywordsToLibResponse
     *
     * @param AddKeywordsToLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddKeywordsToLibResponse
     */
    public function addKeywordsToLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->keywords) {
            @$body['Keywords'] = $request->keywords;
        }

        if (null !== $request->keywordsObject) {
            @$body['KeywordsObject'] = $request->keywordsObject;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddKeywordsToLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddKeywordsToLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddKeywordsToLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加关键词.
     *
     * @param request - AddKeywordsToLibRequest
     *
     * @returns AddKeywordsToLibResponse
     *
     * @param AddKeywordsToLibRequest $request
     *
     * @return AddKeywordsToLibResponse
     */
    public function addKeywordsToLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordsToLibWithOptions($request, $runtime);
    }

    /**
     * 取消oss扫描任务
     *
     * @param request - CancelStockOssCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelStockOssCheckTaskResponse
     *
     * @param CancelStockOssCheckTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelStockOssCheckTaskResponse
     */
    public function cancelStockOssCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelStockOssCheckTask',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelStockOssCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelStockOssCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消oss扫描任务
     *
     * @param request - CancelStockOssCheckTaskRequest
     *
     * @returns CancelStockOssCheckTaskResponse
     *
     * @param CancelStockOssCheckTaskRequest $request
     *
     * @return CancelStockOssCheckTaskResponse
     */
    public function cancelStockOssCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelStockOssCheckTaskWithOptions($request, $runtime);
    }

    /**
     * 复制服务
     *
     * @param request - CopyServiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyServiceConfigResponse
     *
     * @param CopyServiceConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CopyServiceConfigResponse
     */
    public function copyServiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->serviceDesc) {
            @$body['ServiceDesc'] = $request->serviceDesc;
        }

        if (null !== $request->serviceName) {
            @$body['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyServiceConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CopyServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CopyServiceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 复制服务
     *
     * @param request - CopyServiceConfigRequest
     *
     * @returns CopyServiceConfigResponse
     *
     * @param CopyServiceConfigRequest $request
     *
     * @return CopyServiceConfigResponse
     */
    public function copyServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyServiceConfigWithOptions($request, $runtime);
    }

    /**
     * 创建oss扫描任务
     *
     * @param request - CreatStockOssCheckTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatStockOssCheckTaskResponse
     *
     * @param CreatStockOssCheckTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatStockOssCheckTaskResponse
     */
    public function creatStockOssCheckTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buckets) {
            @$query['Buckets'] = $request->buckets;
        }

        if (null !== $request->callbackId) {
            @$query['CallbackId'] = $request->callbackId;
        }

        if (null !== $request->distinctHistoryTasks) {
            @$query['DistinctHistoryTasks'] = $request->distinctHistoryTasks;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeDate) {
            @$query['ExecuteDate'] = $request->executeDate;
        }

        if (null !== $request->executeTime) {
            @$query['ExecuteTime'] = $request->executeTime;
        }

        if (null !== $request->freeze) {
            @$query['Freeze'] = $request->freeze;
        }

        if (null !== $request->freezeHighRisk1) {
            @$query['FreezeHighRisk1'] = $request->freezeHighRisk1;
        }

        if (null !== $request->freezeHighRisk2) {
            @$query['FreezeHighRisk2'] = $request->freezeHighRisk2;
        }

        if (null !== $request->freezeMediumRisk1) {
            @$query['FreezeMediumRisk1'] = $request->freezeMediumRisk1;
        }

        if (null !== $request->freezeMediumRisk2) {
            @$query['FreezeMediumRisk2'] = $request->freezeMediumRisk2;
        }

        if (null !== $request->freezeType) {
            @$query['FreezeType'] = $request->freezeType;
        }

        if (null !== $request->isInc) {
            @$query['IsInc'] = $request->isInc;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->prefixFilterType) {
            @$query['PrefixFilterType'] = $request->prefixFilterType;
        }

        if (null !== $request->prefixFilters) {
            @$query['PrefixFilters'] = $request->prefixFilters;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scanLimit) {
            @$query['ScanLimit'] = $request->scanLimit;
        }

        if (null !== $request->scanNoFileType) {
            @$query['ScanNoFileType'] = $request->scanNoFileType;
        }

        if (null !== $request->scanResourceType) {
            @$query['ScanResourceType'] = $request->scanResourceType;
        }

        if (null !== $request->scanService) {
            @$query['ScanService'] = $request->scanService;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskCycle) {
            @$query['TaskCycle'] = $request->taskCycle;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatStockOssCheckTask',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatStockOssCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatStockOssCheckTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建oss扫描任务
     *
     * @param request - CreatStockOssCheckTaskRequest
     *
     * @returns CreatStockOssCheckTaskResponse
     *
     * @param CreatStockOssCheckTaskRequest $request
     *
     * @return CreatStockOssCheckTaskResponse
     */
    public function creatStockOssCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->creatStockOssCheckTaskWithOptions($request, $runtime);
    }

    /**
     * 创建代答库.
     *
     * @param request - CreateAnswerLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAnswerLibResponse
     *
     * @param CreateAnswerLibRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAnswerLibResponse
     */
    public function createAnswerLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->libName) {
            @$body['LibName'] = $request->libName;
        }

        if (null !== $request->sampleBucket) {
            @$body['SampleBucket'] = $request->sampleBucket;
        }

        if (null !== $request->sampleObject) {
            @$body['SampleObject'] = $request->sampleObject;
        }

        if (null !== $request->samples) {
            @$body['Samples'] = $request->samples;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAnswerLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAnswerLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建代答库.
     *
     * @param request - CreateAnswerLibRequest
     *
     * @returns CreateAnswerLibResponse
     *
     * @param CreateAnswerLibRequest $request
     *
     * @return CreateAnswerLibResponse
     */
    public function createAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnswerLibWithOptions($request, $runtime);
    }

    /**
     * 新建消息通知.
     *
     * @param request - CreateCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCallbackResponse
     *
     * @param CreateCallbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCallbackResponse
     */
    public function createCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->cryptType) {
            @$body['CryptType'] = $request->cryptType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCallback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新建消息通知.
     *
     * @param request - CreateCallbackRequest
     *
     * @returns CreateCallbackResponse
     *
     * @param CreateCallbackRequest $request
     *
     * @return CreateCallbackResponse
     */
    public function createCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallbackWithOptions($request, $runtime);
    }

    /**
     * 创建oss扫描任务前检查.
     *
     * @param request - CreatePreCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePreCheckResponse
     *
     * @param CreatePreCheckRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePreCheckResponse
     */
    public function createPreCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->buckets) {
            @$body['Buckets'] = $request->buckets;
        }

        if (null !== $request->distinctHistoryTasks) {
            @$body['DistinctHistoryTasks'] = $request->distinctHistoryTasks;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->isInc) {
            @$body['IsInc'] = $request->isInc;
        }

        if (null !== $request->mediaType) {
            @$body['MediaType'] = $request->mediaType;
        }

        if (null !== $request->prefixFilterType) {
            @$body['PrefixFilterType'] = $request->prefixFilterType;
        }

        if (null !== $request->prefixFilters) {
            @$body['PrefixFilters'] = $request->prefixFilters;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->scanLimit) {
            @$body['ScanLimit'] = $request->scanLimit;
        }

        if (null !== $request->scanNoFileType) {
            @$body['ScanNoFileType'] = $request->scanNoFileType;
        }

        if (null !== $request->scanService) {
            @$body['ScanService'] = $request->scanService;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePreCheck',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePreCheckResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建oss扫描任务前检查.
     *
     * @param request - CreatePreCheckRequest
     *
     * @returns CreatePreCheckResponse
     *
     * @param CreatePreCheckRequest $request
     *
     * @return CreatePreCheckResponse
     */
    public function createPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPreCheckWithOptions($request, $runtime);
    }

    /**
     * 删除代答库.
     *
     * @param request - DeleteAnswerLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAnswerLibResponse
     *
     * @param DeleteAnswerLibRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAnswerLibResponse
     */
    public function deleteAnswerLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libId) {
            @$query['LibId'] = $request->libId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAnswerLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAnswerLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除代答库.
     *
     * @param request - DeleteAnswerLibRequest
     *
     * @returns DeleteAnswerLibResponse
     *
     * @param DeleteAnswerLibRequest $request
     *
     * @return DeleteAnswerLibResponse
     */
    public function deleteAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAnswerLibWithOptions($request, $runtime);
    }

    /**
     * 删除代答答案.
     *
     * @param request - DeleteAnswerSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAnswerSampleResponse
     *
     * @param DeleteAnswerSampleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAnswerSampleResponse
     */
    public function deleteAnswerSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->ids) {
            @$body['Ids'] = $request->ids;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAnswerSample',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAnswerSampleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAnswerSampleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除代答答案.
     *
     * @param request - DeleteAnswerSampleRequest
     *
     * @returns DeleteAnswerSampleResponse
     *
     * @param DeleteAnswerSampleRequest $request
     *
     * @return DeleteAnswerSampleResponse
     */
    public function deleteAnswerSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAnswerSampleWithOptions($request, $runtime);
    }

    /**
     * 删除消息通知.
     *
     * @param request - DeleteCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCallbackResponse
     *
     * @param DeleteCallbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCallbackResponse
     */
    public function deleteCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCallback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除消息通知.
     *
     * @param request - DeleteCallbackRequest
     *
     * @returns DeleteCallbackResponse
     *
     * @param DeleteCallbackRequest $request
     *
     * @return DeleteCallbackResponse
     */
    public function deleteCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCallbackWithOptions($request, $runtime);
    }

    /**
     * Delete feature configuration.
     *
     * @param request - DeleteFeatureConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFeatureConfigResponse
     *
     * @param DeleteFeatureConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteFeatureConfigResponse
     */
    public function deleteFeatureConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->field) {
            @$body['Field'] = $request->field;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFeatureConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFeatureConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete feature configuration.
     *
     * @param request - DeleteFeatureConfigRequest
     *
     * @returns DeleteFeatureConfigResponse
     *
     * @param DeleteFeatureConfigRequest $request
     *
     * @return DeleteFeatureConfigResponse
     */
    public function deleteFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * 批量删除.
     *
     * @param request - DeleteImagesFromLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImagesFromLibResponse
     *
     * @param DeleteImagesFromLibRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteImagesFromLibResponse
     */
    public function deleteImagesFromLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->imageIds) {
            @$body['ImageIds'] = $request->imageIds;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteImagesFromLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteImagesFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteImagesFromLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量删除.
     *
     * @param request - DeleteImagesFromLibRequest
     *
     * @returns DeleteImagesFromLibResponse
     *
     * @param DeleteImagesFromLibRequest $request
     *
     * @return DeleteImagesFromLibResponse
     */
    public function deleteImagesFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesFromLibWithOptions($request, $runtime);
    }

    /**
     * 删除关键词.
     *
     * @param request - DeleteKeywordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKeywordResponse
     *
     * @param DeleteKeywordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteKeywordResponse
     */
    public function deleteKeywordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->keywordIdList) {
            @$body['KeywordIdList'] = $request->keywordIdList;
        }

        if (null !== $request->keywordIds) {
            @$body['KeywordIds'] = $request->keywordIds;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteKeyword',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKeywordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除关键词.
     *
     * @param request - DeleteKeywordRequest
     *
     * @returns DeleteKeywordResponse
     *
     * @param DeleteKeywordRequest $request
     *
     * @return DeleteKeywordResponse
     */
    public function deleteKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordWithOptions($request, $runtime);
    }

    /**
     * 删除关键词库.
     *
     * @param request - DeleteKeywordLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKeywordLibResponse
     *
     * @param DeleteKeywordLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteKeywordLibResponse
     */
    public function deleteKeywordLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteKeywordLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKeywordLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除关键词库.
     *
     * @param request - DeleteKeywordLibRequest
     *
     * @returns DeleteKeywordLibResponse
     *
     * @param DeleteKeywordLibRequest $request
     *
     * @return DeleteKeywordLibResponse
     */
    public function deleteKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordLibWithOptions($request, $runtime);
    }

    /**
     * 导出代答答案.
     *
     * @param request - ExportAnswerSampleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportAnswerSampleResponse
     *
     * @param ExportAnswerSampleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExportAnswerSampleResponse
     */
    public function exportAnswerSampleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportAnswerSample',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportAnswerSampleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportAnswerSampleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导出代答答案.
     *
     * @param request - ExportAnswerSampleRequest
     *
     * @returns ExportAnswerSampleResponse
     *
     * @param ExportAnswerSampleRequest $request
     *
     * @return ExportAnswerSampleResponse
     */
    public function exportAnswerSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportAnswerSampleWithOptions($request, $runtime);
    }

    /**
     * 导出调用量.
     *
     * @param request - ExportCipStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportCipStatsResponse
     *
     * @param ExportCipStatsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExportCipStatsResponse
     */
    public function exportCipStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->byMonth) {
            @$body['ByMonth'] = $request->byMonth;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->exportType) {
            @$body['ExportType'] = $request->exportType;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->subUid) {
            @$body['SubUid'] = $request->subUid;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportCipStats',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportCipStatsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportCipStatsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导出调用量.
     *
     * @param request - ExportCipStatsRequest
     *
     * @returns ExportCipStatsResponse
     *
     * @param ExportCipStatsRequest $request
     *
     * @return ExportCipStatsResponse
     */
    public function exportCipStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCipStatsWithOptions($request, $runtime);
    }

    /**
     * 导出关键词.
     *
     * @param request - ExportKeywordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportKeywordResponse
     *
     * @param ExportKeywordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ExportKeywordResponse
     */
    public function exportKeywordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportKeyword',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportKeywordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导出关键词.
     *
     * @param request - ExportKeywordRequest
     *
     * @returns ExportKeywordResponse
     *
     * @param ExportKeywordRequest $request
     *
     * @return ExportKeywordResponse
     */
    public function exportKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportKeywordWithOptions($request, $runtime);
    }

    /**
     * oss用量统计导出.
     *
     * @param request - ExportOssCheckStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportOssCheckStatResponse
     *
     * @param ExportOssCheckStatRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExportOssCheckStatResponse
     */
    public function exportOssCheckStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->byMonth) {
            @$body['ByMonth'] = $request->byMonth;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->parentTaskId) {
            @$body['ParentTaskId'] = $request->parentTaskId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportOssCheckStat',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportOssCheckStatResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportOssCheckStatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * oss用量统计导出.
     *
     * @param request - ExportOssCheckStatRequest
     *
     * @returns ExportOssCheckStatResponse
     *
     * @param ExportOssCheckStatRequest $request
     *
     * @return ExportOssCheckStatResponse
     */
    public function exportOssCheckStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportOssCheckStatWithOptions($request, $runtime);
    }

    /**
     * 导出oss扫描结果.
     *
     * @param tmpReq - ExportResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportResultResponse
     *
     * @param ExportResultRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ExportResultResponse
     */
    public function exportResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$body['Query'] = $request->query;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导出oss扫描结果.
     *
     * @param request - ExportResultRequest
     *
     * @returns ExportResultResponse
     *
     * @param ExportResultRequest $request
     *
     * @return ExportResultResponse
     */
    public function exportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportResultWithOptions($request, $runtime);
    }

    /**
     * 导出调用结果，excel文件.
     *
     * @param tmpReq - ExportScanResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportScanResultResponse
     *
     * @param ExportScanResultRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ExportScanResultResponse
     */
    public function exportScanResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportScanResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryShrink) {
            @$body['Query'] = $request->queryShrink;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportScanResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportScanResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导出调用结果，excel文件.
     *
     * @param request - ExportScanResultRequest
     *
     * @returns ExportScanResultResponse
     *
     * @param ExportScanResultRequest $request
     *
     * @return ExportScanResultResponse
     */
    public function exportScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportScanResultWithOptions($request, $runtime);
    }

    /**
     * 导出调用结果，excel文件.
     *
     * @param tmpReq - ExportTextScanResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportTextScanResultResponse
     *
     * @param ExportTextScanResultRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ExportTextScanResultResponse
     */
    public function exportTextScanResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportTextScanResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->queryShrink) {
            @$body['Query'] = $request->queryShrink;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportTextScanResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExportTextScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportTextScanResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 导出调用结果，excel文件.
     *
     * @param request - ExportTextScanResultRequest
     *
     * @returns ExportTextScanResultResponse
     *
     * @param ExportTextScanResultRequest $request
     *
     * @return ExportTextScanResultResponse
     */
    public function exportTextScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportTextScanResultWithOptions($request, $runtime);
    }

    /**
     * 获取代答样本导入进度.
     *
     * @param request - GetAnswerImportProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAnswerImportProgressResponse
     *
     * @param GetAnswerImportProgressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAnswerImportProgressResponse
     */
    public function getAnswerImportProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAnswerImportProgress',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAnswerImportProgressResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAnswerImportProgressResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取代答样本导入进度.
     *
     * @param request - GetAnswerImportProgressRequest
     *
     * @returns GetAnswerImportProgressResponse
     *
     * @param GetAnswerImportProgressRequest $request
     *
     * @return GetAnswerImportProgressResponse
     */
    public function getAnswerImportProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnswerImportProgressWithOptions($request, $runtime);
    }

    /**
     * 证据转存获取用户bucket列表.
     *
     * @param request - GetBackupBucketsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBackupBucketsListResponse
     *
     * @param GetBackupBucketsListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetBackupBucketsListResponse
     */
    public function getBackupBucketsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBackupBucketsList',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBackupBucketsListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBackupBucketsListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 证据转存获取用户bucket列表.
     *
     * @param request - GetBackupBucketsListRequest
     *
     * @returns GetBackupBucketsListResponse
     *
     * @param GetBackupBucketsListRequest $request
     *
     * @return GetBackupBucketsListResponse
     */
    public function getBackupBucketsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupBucketsListWithOptions($request, $runtime);
    }

    /**
     * 获取证据转存配置.
     *
     * @param request - GetBackupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBackupConfigResponse
     *
     * @param GetBackupConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetBackupConfigResponse
     */
    public function getBackupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBackupConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBackupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取证据转存配置.
     *
     * @param request - GetBackupConfigRequest
     *
     * @returns GetBackupConfigResponse
     *
     * @param GetBackupConfigRequest $request
     *
     * @return GetBackupConfigResponse
     */
    public function getBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupConfigWithOptions($request, $runtime);
    }

    /**
     * 用户授权校验.
     *
     * @param request - GetBackupStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBackupStatusResponse
     *
     * @param GetBackupStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetBackupStatusResponse
     */
    public function getBackupStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBackupStatus',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBackupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBackupStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 用户授权校验.
     *
     * @param request - GetBackupStatusRequest
     *
     * @returns GetBackupStatusResponse
     *
     * @param GetBackupStatusRequest $request
     *
     * @return GetBackupStatusResponse
     */
    public function getBackupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupStatusWithOptions($request, $runtime);
    }

    /**
     * bucket列表.
     *
     * @param request - GetBucketsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBucketsListResponse
     *
     * @param GetBucketsListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetBucketsListResponse
     */
    public function getBucketsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBucketsList',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBucketsListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBucketsListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * bucket列表.
     *
     * @param request - GetBucketsListRequest
     *
     * @returns GetBucketsListResponse
     *
     * @param GetBucketsListRequest $request
     *
     * @return GetBucketsListResponse
     */
    public function getBucketsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketsListWithOptions($request, $runtime);
    }

    /**
     * 查询调用量.
     *
     * @param request - GetCipStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCipStatsResponse
     *
     * @param GetCipStatsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCipStatsResponse
     */
    public function getCipStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->byMonth) {
            @$body['ByMonth'] = $request->byMonth;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        if (null !== $request->subUid) {
            @$body['SubUid'] = $request->subUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCipStats',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCipStatsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCipStatsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询调用量.
     *
     * @param request - GetCipStatsRequest
     *
     * @returns GetCipStatsResponse
     *
     * @param GetCipStatsRequest $request
     *
     * @return GetCipStatsResponse
     */
    public function getCipStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCipStatsWithOptions($request, $runtime);
    }

    /**
     * 获取定时任务预计执行时间.
     *
     * @param request - GetExecuteTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecuteTimeResponse
     *
     * @param GetExecuteTimeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetExecuteTimeResponse
     */
    public function getExecuteTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExecuteTime',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetExecuteTimeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetExecuteTimeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取定时任务预计执行时间.
     *
     * @param request - GetExecuteTimeRequest
     *
     * @returns GetExecuteTimeResponse
     *
     * @param GetExecuteTimeRequest $request
     *
     * @return GetExecuteTimeResponse
     */
    public function getExecuteTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecuteTimeWithOptions($request, $runtime);
    }

    /**
     * Get Feature Configuration.
     *
     * @param request - GetFeatureConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFeatureConfigResponse
     *
     * @param GetFeatureConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFeatureConfigResponse
     */
    public function getFeatureConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFeatureConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFeatureConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get Feature Configuration.
     *
     * @param request - GetFeatureConfigRequest
     *
     * @returns GetFeatureConfigResponse
     *
     * @param GetFeatureConfigRequest $request
     *
     * @return GetFeatureConfigResponse
     */
    public function getFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * 获取图片规则标签信息.
     *
     * @param request - GetImageSceneLabelConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageSceneLabelConfResponse
     *
     * @param GetImageSceneLabelConfRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetImageSceneLabelConfResponse
     */
    public function getImageSceneLabelConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageSceneLabelConf',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetImageSceneLabelConfResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetImageSceneLabelConfResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取图片规则标签信息.
     *
     * @param request - GetImageSceneLabelConfRequest
     *
     * @returns GetImageSceneLabelConfResponse
     *
     * @param GetImageSceneLabelConfRequest $request
     *
     * @return GetImageSceneLabelConfResponse
     */
    public function getImageSceneLabelConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageSceneLabelConfWithOptions($request, $runtime);
    }

    /**
     * 获取图片规则标签信息.
     *
     * @param request - GetImageSceneLabelListConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageSceneLabelListConfResponse
     *
     * @param GetImageSceneLabelListConfRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetImageSceneLabelListConfResponse
     */
    public function getImageSceneLabelListConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageServiceCode) {
            @$query['ImageServiceCode'] = $request->imageServiceCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageSceneLabelListConf',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetImageSceneLabelListConfResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetImageSceneLabelListConfResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取图片规则标签信息.
     *
     * @param request - GetImageSceneLabelListConfRequest
     *
     * @returns GetImageSceneLabelListConfResponse
     *
     * @param GetImageSceneLabelListConfRequest $request
     *
     * @return GetImageSceneLabelListConfResponse
     */
    public function getImageSceneLabelListConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageSceneLabelListConfWithOptions($request, $runtime);
    }

    /**
     * oss定时扫描检测周期查询.
     *
     * @param tmpReq - GetJobNameListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobNameListResponse
     *
     * @param GetJobNameListRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return GetJobNameListResponse
     */
    public function getJobNameListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetJobNameListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortShrink) {
            @$query['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobNameList',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetJobNameListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetJobNameListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * oss定时扫描检测周期查询.
     *
     * @param request - GetJobNameListRequest
     *
     * @returns GetJobNameListResponse
     *
     * @param GetJobNameListRequest $request
     *
     * @return GetJobNameListResponse
     */
    public function getJobNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobNameListWithOptions($request, $runtime);
    }

    /**
     * 查询导入关键词结果.
     *
     * @param request - GetKeywordImportResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKeywordImportResultResponse
     *
     * @param GetKeywordImportResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetKeywordImportResultResponse
     */
    public function getKeywordImportResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetKeywordImportResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetKeywordImportResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKeywordImportResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询导入关键词结果.
     *
     * @param request - GetKeywordImportResultRequest
     *
     * @returns GetKeywordImportResultResponse
     *
     * @param GetKeywordImportResultRequest $request
     *
     * @return GetKeywordImportResultResponse
     */
    public function getKeywordImportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordImportResultWithOptions($request, $runtime);
    }

    /**
     * 关键词库信息.
     *
     * @param request - GetKeywordLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKeywordLibResponse
     *
     * @param GetKeywordLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetKeywordLibResponse
     */
    public function getKeywordLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetKeywordLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKeywordLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关键词库信息.
     *
     * @param request - GetKeywordLibRequest
     *
     * @returns GetKeywordLibResponse
     *
     * @param GetKeywordLibRequest $request
     *
     * @return GetKeywordLibResponse
     */
    public function getKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordLibWithOptions($request, $runtime);
    }

    /**
     * oss用量统计
     *
     * @param request - GetOssCheckStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssCheckStatResponse
     *
     * @param GetOssCheckStatRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOssCheckStatResponse
     */
    public function getOssCheckStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->byMonth) {
            @$body['ByMonth'] = $request->byMonth;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->parentTaskId) {
            @$body['ParentTaskId'] = $request->parentTaskId;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOssCheckStat',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOssCheckStatResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOssCheckStatResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * oss用量统计
     *
     * @param request - GetOssCheckStatRequest
     *
     * @returns GetOssCheckStatResponse
     *
     * @param GetOssCheckStatRequest $request
     *
     * @return GetOssCheckStatResponse
     */
    public function getOssCheckStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckStatWithOptions($request, $runtime);
    }

    /**
     * 获取OSS检测用户状态
     *
     * @param request - GetOssCheckStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssCheckStatusResponse
     *
     * @param GetOssCheckStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetOssCheckStatusResponse
     */
    public function getOssCheckStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssCheckStatus',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOssCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOssCheckStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取OSS检测用户状态
     *
     * @param request - GetOssCheckStatusRequest
     *
     * @returns GetOssCheckStatusResponse
     *
     * @param GetOssCheckStatusRequest $request
     *
     * @return GetOssCheckStatusResponse
     */
    public function getOssCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckStatusWithOptions($request, $runtime);
    }

    /**
     * 用户待检测信息.
     *
     * @param request - GetScanNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScanNumResponse
     *
     * @param GetScanNumRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetScanNumResponse
     */
    public function getScanNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->buckets) {
            @$query['Buckets'] = $request->buckets;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScanNum',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetScanNumResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetScanNumResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 用户待检测信息.
     *
     * @param request - GetScanNumRequest
     *
     * @returns GetScanNumResponse
     *
     * @param GetScanNumRequest $request
     *
     * @return GetScanNumResponse
     */
    public function getScanNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScanNumWithOptions($request, $runtime);
    }

    /**
     * 查询调用结果.
     *
     * @param tmpReq - GetScanResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScanResultResponse
     *
     * @param GetScanResultRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return GetScanResultResponse
     */
    public function getScanResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetScanResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryShrink) {
            @$body['Query'] = $request->queryShrink;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetScanResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetScanResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询调用结果.
     *
     * @param request - GetScanResultRequest
     *
     * @returns GetScanResultResponse
     *
     * @param GetScanResultRequest $request
     *
     * @return GetScanResultResponse
     */
    public function getScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScanResultWithOptions($request, $runtime);
    }

    /**
     * 获取单个服务
     *
     * @param request - GetServiceConfRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceConfResponse
     *
     * @param GetServiceConfRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetServiceConfResponse
     */
    public function getServiceConfWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->byDefault) {
            @$body['ByDefault'] = $request->byDefault;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetServiceConf',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceConfResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceConfResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取单个服务
     *
     * @param request - GetServiceConfRequest
     *
     * @returns GetServiceConfResponse
     *
     * @param GetServiceConfRequest $request
     *
     * @return GetServiceConfResponse
     */
    public function getServiceConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfWithOptions($request, $runtime);
    }

    /**
     * 获取单个服务
     *
     * @param request - GetServiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceConfigResponse
     *
     * @param GetServiceConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetServiceConfigResponse
     */
    public function getServiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetServiceConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取单个服务
     *
     * @param request - GetServiceConfigRequest
     *
     * @returns GetServiceConfigResponse
     *
     * @param GetServiceConfigRequest $request
     *
     * @return GetServiceConfigResponse
     */
    public function getServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfigWithOptions($request, $runtime);
    }

    /**
     * 获取单个服务的标签配置.
     *
     * @param request - GetServiceLabelConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceLabelConfigResponse
     *
     * @param GetServiceLabelConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetServiceLabelConfigResponse
     */
    public function getServiceLabelConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetServiceLabelConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetServiceLabelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetServiceLabelConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取单个服务的标签配置.
     *
     * @param request - GetServiceLabelConfigRequest
     *
     * @returns GetServiceLabelConfigResponse
     *
     * @param GetServiceLabelConfigRequest $request
     *
     * @return GetServiceLabelConfigResponse
     */
    public function getServiceLabelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLabelConfigWithOptions($request, $runtime);
    }

    /**
     * 查询oss扫描任务列表.
     *
     * @param tmpReq - GetStockOssCheckTasksListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStockOssCheckTasksListResponse
     *
     * @param GetStockOssCheckTasksListRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetStockOssCheckTasksListResponse
     */
    public function getStockOssCheckTasksListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetStockOssCheckTasksListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->isInc) {
            @$query['IsInc'] = $request->isInc;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->mediaType) {
            @$body['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetStockOssCheckTasksList',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetStockOssCheckTasksListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetStockOssCheckTasksListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询oss扫描任务列表.
     *
     * @param request - GetStockOssCheckTasksListRequest
     *
     * @returns GetStockOssCheckTasksListResponse
     *
     * @param GetStockOssCheckTasksListRequest $request
     *
     * @return GetStockOssCheckTasksListResponse
     */
    public function getStockOssCheckTasksList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStockOssCheckTasksListWithOptions($request, $runtime);
    }

    /**
     * 查询调用结果.
     *
     * @param tmpReq - GetTextScanResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTextScanResultResponse
     *
     * @param GetTextScanResultRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return GetTextScanResultResponse
     */
    public function getTextScanResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTextScanResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryShrink) {
            @$body['Query'] = $request->queryShrink;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTextScanResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTextScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTextScanResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询调用结果.
     *
     * @param request - GetTextScanResultRequest
     *
     * @returns GetTextScanResultResponse
     *
     * @param GetTextScanResultRequest $request
     *
     * @return GetTextScanResultResponse
     */
    public function getTextScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTextScanResultWithOptions($request, $runtime);
    }

    /**
     * 文件上传获取相应信息.
     *
     * @param request - GetUploadInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadInfoResponse
     *
     * @param GetUploadInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUploadInfoResponse
     */
    public function getUploadInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUploadInfo',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUploadInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 文件上传获取相应信息.
     *
     * @param request - GetUploadInfoRequest
     *
     * @returns GetUploadInfoResponse
     *
     * @param GetUploadInfoRequest $request
     *
     * @return GetUploadInfoResponse
     */
    public function getUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadInfoWithOptions($request, $runtime);
    }

    /**
     * 获取用户购买状态
     *
     * @param request - GetUserBuyStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserBuyStatusResponse
     *
     * @param GetUserBuyStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUserBuyStatusResponse
     */
    public function getUserBuyStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->commodityCode) {
            @$body['CommodityCode'] = $request->commodityCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserBuyStatus',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserBuyStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户购买状态
     *
     * @param request - GetUserBuyStatusRequest
     *
     * @returns GetUserBuyStatusResponse
     *
     * @param GetUserBuyStatusRequest $request
     *
     * @return GetUserBuyStatusResponse
     */
    public function getUserBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBuyStatusWithOptions($request, $runtime);
    }

    /**
     * 代答库列表.
     *
     * @param request - ListAnswerLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnswerLibResponse
     *
     * @param ListAnswerLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListAnswerLibResponse
     */
    public function listAnswerLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAnswerLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAnswerLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 代答库列表.
     *
     * @param request - ListAnswerLibRequest
     *
     * @returns ListAnswerLibResponse
     *
     * @param ListAnswerLibRequest $request
     *
     * @return ListAnswerLibResponse
     */
    public function listAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnswerLibWithOptions($request, $runtime);
    }

    /**
     * 消息通知列表.
     *
     * @param request - ListCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallbackResponse
     *
     * @param ListCallbackRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCallbackResponse
     */
    public function listCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 消息通知列表.
     *
     * @param request - ListCallbackRequest
     *
     * @returns ListCallbackResponse
     *
     * @param ListCallbackRequest $request
     *
     * @return ListCallbackResponse
     */
    public function listCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallbackWithOptions($request, $runtime);
    }

    /**
     * 图库列表.
     *
     * @param request - ListImageLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageLibResponse
     *
     * @param ListImageLibRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListImageLibResponse
     */
    public function listImageLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImageLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListImageLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 图库列表.
     *
     * @param request - ListImageLibRequest
     *
     * @returns ListImageLibResponse
     *
     * @param ListImageLibRequest $request
     *
     * @return ListImageLibResponse
     */
    public function listImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageLibWithOptions($request, $runtime);
    }

    /**
     * 图片列表 分页.
     *
     * @param tmpReq - ListImagesFromLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImagesFromLibResponse
     *
     * @param ListImagesFromLibRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ListImagesFromLibResponse
     */
    public function listImagesFromLibWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListImagesFromLibShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$body['EndDate'] = $request->endDate;
        }

        if (null !== $request->imgId) {
            @$body['ImgId'] = $request->imgId;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$body['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListImagesFromLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListImagesFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListImagesFromLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 图片列表 分页.
     *
     * @param request - ListImagesFromLibRequest
     *
     * @returns ListImagesFromLibResponse
     *
     * @param ListImagesFromLibRequest $request
     *
     * @return ListImagesFromLibResponse
     */
    public function listImagesFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesFromLibWithOptions($request, $runtime);
    }

    /**
     * 关键词库列表.
     *
     * @param request - ListKeywordLibsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKeywordLibsResponse
     *
     * @param ListKeywordLibsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListKeywordLibsResponse
     */
    public function listKeywordLibsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKeywordLibs',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListKeywordLibsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKeywordLibsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关键词库列表.
     *
     * @param request - ListKeywordLibsRequest
     *
     * @returns ListKeywordLibsResponse
     *
     * @param ListKeywordLibsRequest $request
     *
     * @return ListKeywordLibsResponse
     */
    public function listKeywordLibs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeywordLibsWithOptions($request, $runtime);
    }

    /**
     * 查询关键词列表.
     *
     * @param tmpReq - ListKeywordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKeywordsResponse
     *
     * @param ListKeywordsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListKeywordsResponse
     */
    public function listKeywordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListKeywordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortShrink) {
            @$body['Sort'] = $request->sortShrink;
        }

        if (null !== $request->word) {
            @$body['Word'] = $request->word;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListKeywords',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKeywordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询关键词列表.
     *
     * @param request - ListKeywordsRequest
     *
     * @returns ListKeywordsResponse
     *
     * @param ListKeywordsRequest $request
     *
     * @return ListKeywordsResponse
     */
    public function listKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeywordsWithOptions($request, $runtime);
    }

    /**
     * oss扫描结果查询.
     *
     * @param tmpReq - ListOssCheckResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOssCheckResultResponse
     *
     * @param ListOssCheckResultRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ListOssCheckResultResponse
     */
    public function listOssCheckResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListOssCheckResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->finishNum) {
            @$query['FinishNum'] = $request->finishNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortShrink) {
            @$query['Sort'] = $request->sortShrink;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOssCheckResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListOssCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOssCheckResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * oss扫描结果查询.
     *
     * @param request - ListOssCheckResultRequest
     *
     * @returns ListOssCheckResultResponse
     *
     * @param ListOssCheckResultRequest $request
     *
     * @return ListOssCheckResultResponse
     */
    public function listOssCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOssCheckResultWithOptions($request, $runtime);
    }

    /**
     * 获取服务列表.
     *
     * @param request - ListServiceConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceConfigsResponse
     *
     * @param ListServiceConfigsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListServiceConfigsResponse
     */
    public function listServiceConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->useStatus) {
            @$query['UseStatus'] = $request->useStatus;
        }

        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListServiceConfigs',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListServiceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListServiceConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取服务列表.
     *
     * @param request - ListServiceConfigsRequest
     *
     * @returns ListServiceConfigsResponse
     *
     * @param ListServiceConfigsRequest $request
     *
     * @return ListServiceConfigsResponse
     */
    public function listServiceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceConfigsWithOptions($request, $runtime);
    }

    /**
     * 更新代答库.
     *
     * @param request - ModifyAnswerLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAnswerLibResponse
     *
     * @param ModifyAnswerLibRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyAnswerLibResponse
     */
    public function modifyAnswerLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->libId) {
            @$query['LibId'] = $request->libId;
        }

        if (null !== $request->libName) {
            @$query['LibName'] = $request->libName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAnswerLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyAnswerLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新代答库.
     *
     * @param request - ModifyAnswerLibRequest
     *
     * @returns ModifyAnswerLibResponse
     *
     * @param ModifyAnswerLibRequest $request
     *
     * @return ModifyAnswerLibResponse
     */
    public function modifyAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnswerLibWithOptions($request, $runtime);
    }

    /**
     * 修改消息通知.
     *
     * @param request - ModifyCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCallbackResponse
     *
     * @param ModifyCallbackRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyCallbackResponse
     */
    public function modifyCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->cryptType) {
            @$body['CryptType'] = $request->cryptType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyCallback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改消息通知.
     *
     * @param request - ModifyCallbackRequest
     *
     * @returns ModifyCallbackResponse
     *
     * @param ModifyCallbackRequest $request
     *
     * @return ModifyCallbackResponse
     */
    public function modifyCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCallbackWithOptions($request, $runtime);
    }

    /**
     * Save Feature Configuration.
     *
     * @param request - ModifyFeatureConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFeatureConfigResponse
     *
     * @param ModifyFeatureConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyFeatureConfigResponse
     */
    public function modifyFeatureConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->field) {
            @$body['Field'] = $request->field;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyFeatureConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyFeatureConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Save Feature Configuration.
     *
     * @param request - ModifyFeatureConfigRequest
     *
     * @returns ModifyFeatureConfigResponse
     *
     * @param ModifyFeatureConfigRequest $request
     *
     * @return ModifyFeatureConfigResponse
     */
    public function modifyFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * 编辑服务
     *
     * @param request - ModifyServiceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyServiceInfoResponse
     *
     * @param ModifyServiceInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyServiceInfoResponse
     */
    public function modifyServiceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->serviceDesc) {
            @$body['ServiceDesc'] = $request->serviceDesc;
        }

        if (null !== $request->serviceName) {
            @$body['ServiceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyServiceInfo',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyServiceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyServiceInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 编辑服务
     *
     * @param request - ModifyServiceInfoRequest
     *
     * @returns ModifyServiceInfoResponse
     *
     * @param ModifyServiceInfoRequest $request
     *
     * @return ModifyServiceInfoResponse
     */
    public function modifyServiceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceInfoWithOptions($request, $runtime);
    }

    /**
     * 分页查询代答样本.
     *
     * @param tmpReq - QueryAnswerSampleByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAnswerSampleByPageResponse
     *
     * @param QueryAnswerSampleByPageRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAnswerSampleByPageResponse
     */
    public function queryAnswerSampleByPageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryAnswerSampleByPageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sort) {
            $request->sortShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }

        $query = [];
        if (null !== $request->answer) {
            @$query['Answer'] = $request->answer;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->libId) {
            @$query['LibId'] = $request->libId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortShrink) {
            @$query['Sort'] = $request->sortShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAnswerSampleByPage',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAnswerSampleByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAnswerSampleByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 分页查询代答样本.
     *
     * @param request - QueryAnswerSampleByPageRequest
     *
     * @returns QueryAnswerSampleByPageResponse
     *
     * @param QueryAnswerSampleByPageRequest $request
     *
     * @return QueryAnswerSampleByPageResponse
     */
    public function queryAnswerSampleByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnswerSampleByPageWithOptions($request, $runtime);
    }

    /**
     * 查询单个回调配置.
     *
     * @param request - QueryCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallbackResponse
     *
     * @param QueryCallbackRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryCallbackResponse
     */
    public function queryCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->checkForOss) {
            @$body['CheckForOss'] = $request->checkForOss;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCallback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询单个回调配置.
     *
     * @param request - QueryCallbackRequest
     *
     * @returns QueryCallbackResponse
     *
     * @param QueryCallbackRequest $request
     *
     * @return QueryCallbackResponse
     */
    public function queryCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallbackWithOptions($request, $runtime);
    }

    /**
     * 消息通知.
     *
     * @param request - QueryCallbackByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallbackByPageResponse
     *
     * @param QueryCallbackByPageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCallbackByPageResponse
     */
    public function queryCallbackByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCallbackByPage',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCallbackByPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCallbackByPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 消息通知.
     *
     * @param request - QueryCallbackByPageRequest
     *
     * @returns QueryCallbackByPageResponse
     *
     * @param QueryCallbackByPageRequest $request
     *
     * @return QueryCallbackByPageResponse
     */
    public function queryCallbackByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallbackByPageWithOptions($request, $runtime);
    }

    /**
     * 更新证据转存配置.
     *
     * @param request - UpdateBackupConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBackupConfigResponse
     *
     * @param UpdateBackupConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateBackupConfigResponse
     */
    public function updateBackupConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupConfig) {
            @$query['BackupConfig'] = $request->backupConfig;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateBackupConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateBackupConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新证据转存配置.
     *
     * @param request - UpdateBackupConfigRequest
     *
     * @returns UpdateBackupConfigResponse
     *
     * @param UpdateBackupConfigRequest $request
     *
     * @return UpdateBackupConfigResponse
     */
    public function updateBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupConfigWithOptions($request, $runtime);
    }

    /**
     * 编辑图库.
     *
     * @param request - UpdateImageLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageLibResponse
     *
     * @param UpdateImageLibRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateImageLibResponse
     */
    public function updateImageLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->freeInspection) {
            @$body['FreeInspection'] = $request->freeInspection;
        }

        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        if (null !== $request->libName) {
            @$body['LibName'] = $request->libName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateImageLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateImageLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 编辑图库.
     *
     * @param request - UpdateImageLibRequest
     *
     * @returns UpdateImageLibResponse
     *
     * @param UpdateImageLibRequest $request
     *
     * @return UpdateImageLibResponse
     */
    public function updateImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageLibWithOptions($request, $runtime);
    }

    /**
     * 编辑图库免检配置.
     *
     * @param tmpReq - UpdateImageLibFreeInspectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageLibFreeInspectionResponse
     *
     * @param UpdateImageLibFreeInspectionRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateImageLibFreeInspectionResponse
     */
    public function updateImageLibFreeInspectionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateImageLibFreeInspectionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->configShrink) {
            @$body['Config'] = $request->configShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateImageLibFreeInspection',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateImageLibFreeInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateImageLibFreeInspectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 编辑图库免检配置.
     *
     * @param request - UpdateImageLibFreeInspectionRequest
     *
     * @returns UpdateImageLibFreeInspectionResponse
     *
     * @param UpdateImageLibFreeInspectionRequest $request
     *
     * @return UpdateImageLibFreeInspectionResponse
     */
    public function updateImageLibFreeInspection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageLibFreeInspectionWithOptions($request, $runtime);
    }

    /**
     * 编辑关键词库.
     *
     * @param request - UpdateKeywordLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateKeywordLibResponse
     *
     * @param UpdateKeywordLibRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateKeywordLibResponse
     */
    public function updateKeywordLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->libId) {
            @$body['LibId'] = $request->libId;
        }

        if (null !== $request->libName) {
            @$body['LibName'] = $request->libName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateKeywordLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateKeywordLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 编辑关键词库.
     *
     * @param request - UpdateKeywordLibRequest
     *
     * @returns UpdateKeywordLibResponse
     *
     * @param UpdateKeywordLibRequest $request
     *
     * @return UpdateKeywordLibResponse
     */
    public function updateKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeywordLibWithOptions($request, $runtime);
    }

    /**
     * 检测结果反馈.
     *
     * @param request - UpdateScanResultFeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScanResultFeedbackResponse
     *
     * @param UpdateScanResultFeedbackRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateScanResultFeedbackResponse
     */
    public function updateScanResultFeedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->feedback) {
            @$body['Feedback'] = $request->feedback;
        }

        if (null !== $request->queryRequestId) {
            @$body['QueryRequestId'] = $request->queryRequestId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScanResultFeedback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateScanResultFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateScanResultFeedbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 检测结果反馈.
     *
     * @param request - UpdateScanResultFeedbackRequest
     *
     * @returns UpdateScanResultFeedbackResponse
     *
     * @param UpdateScanResultFeedbackRequest $request
     *
     * @return UpdateScanResultFeedbackResponse
     */
    public function updateScanResultFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScanResultFeedbackWithOptions($request, $runtime);
    }

    /**
     * 更新服务
     *
     * @param request - UpdateServiceConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceConfigResponse
     *
     * @param UpdateServiceConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServiceConfigResponse
     */
    public function updateServiceConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->fileConfig) {
            @$body['FileConfig'] = $request->fileConfig;
        }

        if (null !== $request->keywordFilterLibs) {
            @$body['KeywordFilterLibs'] = $request->keywordFilterLibs;
        }

        if (null !== $request->keywordHitLibs) {
            @$body['KeywordHitLibs'] = $request->keywordHitLibs;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sceneConfig) {
            @$body['SceneConfig'] = $request->sceneConfig;
        }

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->videoConfig) {
            @$body['VideoConfig'] = $request->videoConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateServiceConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新服务
     *
     * @param request - UpdateServiceConfigRequest
     *
     * @returns UpdateServiceConfigResponse
     *
     * @param UpdateServiceConfigRequest $request
     *
     * @return UpdateServiceConfigResponse
     */
    public function updateServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceConfigWithOptions($request, $runtime);
    }
}
