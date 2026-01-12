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
use AlibabaCloud\SDK\Green\V20220926\Models\CreateOnlineTestRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateOnlineTestResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteOnlineTestRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteOnlineTestResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckFreezeResultShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckResultDetailRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckResultDetailResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckTaskInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetOssCheckTaskInfoResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadLinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadLinkResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyFeatureConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyFeatureConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\OssCheckResultListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\OssCheckResultListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\OssCheckResultListShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\StopOnlineTestRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\StopOnlineTestResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsBatchFeedbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsBatchFeedbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsFeedBackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsFeedBackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsFreezeRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsFreezeResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsUnfreezeRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateOssCheckResultsUnfreezeResponse;
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

        return AddAnswerSampleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Create Image Library.
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

        return AddImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Image Library.
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
     * Add image to image lib.
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

        return AddImages2LibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add image to image lib.
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
     * Create keyword library.
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

        return AddKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create keyword library.
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
     * Add keywords.
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

        return AddKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add keywords.
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
     * Add keywords to keyword library.
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

        return AddKeywordsToLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add keywords to keyword library.
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
     * Cancel OSS detection task.
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

        return CancelStockOssCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel OSS detection task.
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
     * copy service config.
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

        return CopyServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * copy service config.
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
     * Create stock oss check task.
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

        if (null !== $request->freezeRestorePath) {
            @$query['FreezeRestorePath'] = $request->freezeRestorePath;
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

        if (null !== $request->referer) {
            @$query['Referer'] = $request->referer;
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

        return CreatStockOssCheckTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create stock oss check task.
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

        return CreateAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Create a new message notification.
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

        return CreateCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new message notification.
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
     * 在线测试.
     *
     * @param request - CreateOnlineTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOnlineTestResponse
     *
     * @param CreateOnlineTestRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOnlineTestResponse
     */
    public function createOnlineTestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataId) {
            @$query['DataId'] = $request->dataId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOnlineTest',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOnlineTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在线测试.
     *
     * @param request - CreateOnlineTestRequest
     *
     * @returns CreateOnlineTestResponse
     *
     * @param CreateOnlineTestRequest $request
     *
     * @return CreateOnlineTestResponse
     */
    public function createOnlineTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOnlineTestWithOptions($request, $runtime);
    }

    /**
     * Check before creating an OSS scan task.
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

        return CreatePreCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Check before creating an OSS scan task.
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

        return DeleteAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
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

        return DeleteAnswerSampleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * delete callback.
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

        return DeleteCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * delete callback.
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

        return DeleteFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Delete images from library.
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

        return DeleteImagesFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete images from library.
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
     * Delete keyword.
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

        return DeleteKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete keyword.
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
     * Delete Keyword Library.
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

        return DeleteKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Keyword Library.
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
     * 删除在线测试接口.
     *
     * @param request - DeleteOnlineTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOnlineTestResponse
     *
     * @param DeleteOnlineTestRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteOnlineTestResponse
     */
    public function deleteOnlineTestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOnlineTest',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOnlineTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除在线测试接口.
     *
     * @param request - DeleteOnlineTestRequest
     *
     * @returns DeleteOnlineTestResponse
     *
     * @param DeleteOnlineTestRequest $request
     *
     * @return DeleteOnlineTestResponse
     */
    public function deleteOnlineTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOnlineTestWithOptions($request, $runtime);
    }

    /**
     * 查询在线测试结果.
     *
     * @param request - DescribeOnlineTestResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOnlineTestResultResponse
     *
     * @param DescribeOnlineTestResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeOnlineTestResultResponse
     */
    public function describeOnlineTestResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOnlineTestResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOnlineTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询在线测试结果.
     *
     * @param request - DescribeOnlineTestResultRequest
     *
     * @returns DescribeOnlineTestResultResponse
     *
     * @param DescribeOnlineTestResultRequest $request
     *
     * @return DescribeOnlineTestResultResponse
     */
    public function describeOnlineTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnlineTestResultWithOptions($request, $runtime);
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

        return ExportAnswerSampleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Export Call Volume.
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

        return ExportCipStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export Call Volume.
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
     * Export Keywords.
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

        return ExportKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export Keywords.
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
     * OSS Usage Statistics Export.
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

        return ExportOssCheckStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OSS Usage Statistics Export.
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
     * Export OSS scan results.
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

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
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

        return ExportResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export OSS scan results.
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
     * Export scan results, Excel file.
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

        return ExportScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export scan results, Excel file.
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
     * Export text scan results, Excel file.
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

        return ExportTextScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Export text scan results, Excel file.
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

        return GetAnswerImportProgressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Evidence Transfer to Get User\\"s Bucket List.
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

        return GetBackupBucketsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Evidence Transfer to Get User\\"s Bucket List.
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
     * Get Evidence Backup Configuration.
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

        return GetBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Evidence Backup Configuration.
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
     * User Backup Authorization Verification.
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

        return GetBackupStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * User Backup Authorization Verification.
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
     * Get User OSS Scan Bucket List.
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

        return GetBucketsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get User OSS Scan Bucket List.
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

        return GetCipStatsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Get Scheduled  OSS Scan  Task Estimated Execution Time.
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

        return GetExecuteTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Scheduled  OSS Scan  Task Estimated Execution Time.
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
        if (null !== $request->query) {
            @$body['Query'] = $request->query;
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

        return GetFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Get Image Rule Label Information.
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

        return GetImageSceneLabelConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Image Rule Label Information.
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
     * Get Image Rule Label Information.
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

        return GetImageSceneLabelListConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Image Rule Label Information.
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
     * OSS scheduled scan detection cycle query.
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

        return GetJobNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OSS scheduled scan detection cycle query.
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
     * Query the result of keyword import.
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

        return GetKeywordImportResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the result of keyword import.
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
     * Keyword Library Information.
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

        return GetKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Keyword Library Information.
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
     * Query OSS freeze result.
     *
     * @param tmpReq - GetOssCheckFreezeResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssCheckFreezeResultResponse
     *
     * @param GetOssCheckFreezeResultRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOssCheckFreezeResultResponse
     */
    public function getOssCheckFreezeResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetOssCheckFreezeResultShrinkRequest([]);
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
            'action' => 'GetOssCheckFreezeResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssCheckFreezeResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query OSS freeze result.
     *
     * @param request - GetOssCheckFreezeResultRequest
     *
     * @returns GetOssCheckFreezeResultResponse
     *
     * @param GetOssCheckFreezeResultRequest $request
     *
     * @return GetOssCheckFreezeResultResponse
     */
    public function getOssCheckFreezeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckFreezeResultWithOptions($request, $runtime);
    }

    /**
     * OSS result details.
     *
     * @param request - GetOssCheckResultDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssCheckResultDetailResponse
     *
     * @param GetOssCheckResultDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetOssCheckResultDetailResponse
     */
    public function getOssCheckResultDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->object) {
            @$query['Object'] = $request->object;
        }

        if (null !== $request->parentTaskId) {
            @$query['ParentTaskId'] = $request->parentTaskId;
        }

        if (null !== $request->queryRequestId) {
            @$query['QueryRequestId'] = $request->queryRequestId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssCheckResultDetail',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssCheckResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OSS result details.
     *
     * @param request - GetOssCheckResultDetailRequest
     *
     * @returns GetOssCheckResultDetailResponse
     *
     * @param GetOssCheckResultDetailRequest $request
     *
     * @return GetOssCheckResultDetailResponse
     */
    public function getOssCheckResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckResultDetailWithOptions($request, $runtime);
    }

    /**
     * OSS Check Usage Statistics.
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

        return GetOssCheckStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OSS Check Usage Statistics.
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
     * Get User OSS check user status.
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

        return GetOssCheckStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get User OSS check user status.
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
     * 查询oss扫描任务详情.
     *
     * @param request - GetOssCheckTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssCheckTaskInfoResponse
     *
     * @param GetOssCheckTaskInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOssCheckTaskInfoResponse
     */
    public function getOssCheckTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->parentTaskId) {
            @$query['ParentTaskId'] = $request->parentTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssCheckTaskInfo',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssCheckTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询oss扫描任务详情.
     *
     * @param request - GetOssCheckTaskInfoRequest
     *
     * @returns GetOssCheckTaskInfoResponse
     *
     * @param GetOssCheckTaskInfoRequest $request
     *
     * @return GetOssCheckTaskInfoResponse
     */
    public function getOssCheckTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckTaskInfoWithOptions($request, $runtime);
    }

    /**
     * User OSS Check Task Pending Inspection Information.
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

        return GetScanNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * User OSS Check Task Pending Inspection Information.
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
     * Query the Scan results.
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

        return GetScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the Scan results.
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
     * Get a Single Service Configuration.
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

        return GetServiceConfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get a Single Service Configuration.
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
     * Get a Single Service Configuration.
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

        return GetServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get a Single Service Configuration.
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
     * Get the label configuration of a single service.
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

        return GetServiceLabelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the label configuration of a single service.
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
     * Query OSS Scan Task List.
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

        return GetStockOssCheckTasksListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query OSS Scan Task List.
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
     * Query the invocation result.
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

        return GetTextScanResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the invocation result.
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
     * Get the corresponding information for file upload.
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

        return GetUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the corresponding information for file upload.
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
     * 获取上传链接.
     *
     * @param request - GetUploadLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadLinkResponse
     *
     * @param GetUploadLinkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUploadLinkResponse
     */
    public function getUploadLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->uploadUrl) {
            @$query['UploadUrl'] = $request->uploadUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUploadLink',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUploadLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取上传链接.
     *
     * @param request - GetUploadLinkRequest
     *
     * @returns GetUploadLinkResponse
     *
     * @param GetUploadLinkRequest $request
     *
     * @return GetUploadLinkResponse
     */
    public function getUploadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadLinkWithOptions($request, $runtime);
    }

    /**
     * Get User Purchase Status.
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

        return GetUserBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get User Purchase Status.
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

        return ListAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Get Callback List.
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

        return ListCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Callback List.
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
     * Image Library List.
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

        return ListImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Image Library List.
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
     * Paged Image List.
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

        return ListImagesFromLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paged Image List.
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
     * Keyword Library List.
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

        return ListKeywordLibsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Keyword Library List.
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
     * Query Keyword List.
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

        return ListKeywordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Keyword List.
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
     * query OSS scan result list.
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

        return ListOssCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * query OSS scan result list.
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
     * Get Service List.
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

        return ListServiceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Service List.
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
     * Use SSE interface to stream large model calls.
     *
     * @param request - LlmStreamChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LlmStreamChatResponse
     *
     * @param LlmStreamChatRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LlmStreamChatResponse
     */
    public function llmStreamChatWithSSE($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        if (null !== $request->temperature) {
            @$body['Temperature'] = $request->temperature;
        }

        if (null !== $request->topP) {
            @$body['TopP'] = $request->topP;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LlmStreamChat',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield LlmStreamChatResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * Use SSE interface to stream large model calls.
     *
     * @param request - LlmStreamChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LlmStreamChatResponse
     *
     * @param LlmStreamChatRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LlmStreamChatResponse
     */
    public function llmStreamChatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->messages) {
            @$body['Messages'] = $request->messages;
        }

        if (null !== $request->temperature) {
            @$body['Temperature'] = $request->temperature;
        }

        if (null !== $request->topP) {
            @$body['TopP'] = $request->topP;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LlmStreamChat',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LlmStreamChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Use SSE interface to stream large model calls.
     *
     * @param request - LlmStreamChatRequest
     *
     * @returns LlmStreamChatResponse
     *
     * @param LlmStreamChatRequest $request
     *
     * @return LlmStreamChatResponse
     */
    public function llmStreamChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmStreamChatWithOptions($request, $runtime);
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

        return ModifyAnswerLibResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Modify Message Notification.
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

        return ModifyCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Message Notification.
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
     * 保存特性配置.
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

        return ModifyFeatureConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存特性配置.
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
     * Edit Service.
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

        return ModifyServiceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Service.
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
     * oss扫描结果查询.
     *
     * @param tmpReq - OssCheckResultListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OssCheckResultListResponse
     *
     * @param OssCheckResultListRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return OssCheckResultListResponse
     */
    public function ossCheckResultListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OssCheckResultListShrinkRequest([]);
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
            'action' => 'OssCheckResultList',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OssCheckResultListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * oss扫描结果查询.
     *
     * @param request - OssCheckResultListRequest
     *
     * @returns OssCheckResultListResponse
     *
     * @param OssCheckResultListRequest $request
     *
     * @return OssCheckResultListResponse
     */
    public function ossCheckResultList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ossCheckResultListWithOptions($request, $runtime);
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

        return QueryAnswerSampleByPageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Query a Single Callback Configuration.
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

        return QueryCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a Single Callback Configuration.
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
     * Paginated Query of Message Notification List.
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

        return QueryCallbackByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paginated Query of Message Notification List.
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
     * 停止在线测试.
     *
     * @param request - StopOnlineTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopOnlineTestResponse
     *
     * @param StopOnlineTestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopOnlineTestResponse
     */
    public function stopOnlineTestWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopOnlineTest',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopOnlineTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止在线测试.
     *
     * @param request - StopOnlineTestRequest
     *
     * @returns StopOnlineTestResponse
     *
     * @param StopOnlineTestRequest $request
     *
     * @return StopOnlineTestResponse
     */
    public function stopOnlineTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopOnlineTestWithOptions($request, $runtime);
    }

    /**
     * Update Evidence Backup Configuration.
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

        return UpdateBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Evidence Backup Configuration.
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
     * Edit Image Library.
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

        return UpdateImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Image Library.
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
     * Edit Image Library Free Inspection Configuration.
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

        return UpdateImageLibFreeInspectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Image Library Free Inspection Configuration.
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
     * Edit Keyword Library.
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

        return UpdateKeywordLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Keyword Library.
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
     * 批量反馈任务
     *
     * @param request - UpdateOssCheckResultsBatchFeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOssCheckResultsBatchFeedbackResponse
     *
     * @param UpdateOssCheckResultsBatchFeedbackRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateOssCheckResultsBatchFeedbackResponse
     */
    public function updateOssCheckResultsBatchFeedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feedback) {
            @$query['Feedback'] = $request->feedback;
        }

        if (null !== $request->items) {
            @$query['Items'] = $request->items;
        }

        if (null !== $request->parentTaskId) {
            @$query['ParentTaskId'] = $request->parentTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOssCheckResultsBatchFeedback',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOssCheckResultsBatchFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量反馈任务
     *
     * @param request - UpdateOssCheckResultsBatchFeedbackRequest
     *
     * @returns UpdateOssCheckResultsBatchFeedbackResponse
     *
     * @param UpdateOssCheckResultsBatchFeedbackRequest $request
     *
     * @return UpdateOssCheckResultsBatchFeedbackResponse
     */
    public function updateOssCheckResultsBatchFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsBatchFeedbackWithOptions($request, $runtime);
    }

    /**
     * oss结果反馈.
     *
     * @param request - UpdateOssCheckResultsFeedBackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOssCheckResultsFeedBackResponse
     *
     * @param UpdateOssCheckResultsFeedBackRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateOssCheckResultsFeedBackResponse
     */
    public function updateOssCheckResultsFeedBackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->feedback) {
            @$query['Feedback'] = $request->feedback;
        }

        if (null !== $request->queryRequestId) {
            @$query['QueryRequestId'] = $request->queryRequestId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOssCheckResultsFeedBack',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOssCheckResultsFeedBackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * oss结果反馈.
     *
     * @param request - UpdateOssCheckResultsFeedBackRequest
     *
     * @returns UpdateOssCheckResultsFeedBackResponse
     *
     * @param UpdateOssCheckResultsFeedBackRequest $request
     *
     * @return UpdateOssCheckResultsFeedBackResponse
     */
    public function updateOssCheckResultsFeedBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsFeedBackWithOptions($request, $runtime);
    }

    /**
     * 批量冻结任务
     *
     * @param request - UpdateOssCheckResultsFreezeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOssCheckResultsFreezeResponse
     *
     * @param UpdateOssCheckResultsFreezeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateOssCheckResultsFreezeResponse
     */
    public function updateOssCheckResultsFreezeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->freezeItems) {
            @$query['FreezeItems'] = $request->freezeItems;
        }

        if (null !== $request->freezeRestorePath) {
            @$query['FreezeRestorePath'] = $request->freezeRestorePath;
        }

        if (null !== $request->freezeType) {
            @$query['FreezeType'] = $request->freezeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOssCheckResultsFreeze',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOssCheckResultsFreezeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量冻结任务
     *
     * @param request - UpdateOssCheckResultsFreezeRequest
     *
     * @returns UpdateOssCheckResultsFreezeResponse
     *
     * @param UpdateOssCheckResultsFreezeRequest $request
     *
     * @return UpdateOssCheckResultsFreezeResponse
     */
    public function updateOssCheckResultsFreeze($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsFreezeWithOptions($request, $runtime);
    }

    /**
     * 批量解冻任务
     *
     * @param request - UpdateOssCheckResultsUnfreezeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOssCheckResultsUnfreezeResponse
     *
     * @param UpdateOssCheckResultsUnfreezeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateOssCheckResultsUnfreezeResponse
     */
    public function updateOssCheckResultsUnfreezeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->freezeItems) {
            @$query['FreezeItems'] = $request->freezeItems;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOssCheckResultsUnfreeze',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOssCheckResultsUnfreezeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量解冻任务
     *
     * @param request - UpdateOssCheckResultsUnfreezeRequest
     *
     * @returns UpdateOssCheckResultsUnfreezeResponse
     *
     * @param UpdateOssCheckResultsUnfreezeRequest $request
     *
     * @return UpdateOssCheckResultsUnfreezeResponse
     */
    public function updateOssCheckResultsUnfreeze($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsUnfreezeWithOptions($request, $runtime);
    }

    /**
     * Feedback on Scan Results.
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

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->queryRequestId) {
            @$body['QueryRequestId'] = $request->queryRequestId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
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

        return UpdateScanResultFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Feedback on Scan Results.
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

        if (null !== $request->manualMachineConfig) {
            @$body['ManualMachineConfig'] = $request->manualMachineConfig;
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

        if (null !== $request->serviceConfig) {
            @$body['ServiceConfig'] = $request->serviceConfig;
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

        return UpdateServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
