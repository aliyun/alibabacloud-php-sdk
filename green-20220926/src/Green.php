<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 添加代答样本
     *  *
     * @param AddAnswerSampleRequest $request AddAnswerSampleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAnswerSampleResponse AddAnswerSampleResponse
     */
    public function addAnswerSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->libId)) {
            $query['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sampleObject)) {
            $query['SampleObject'] = $request->sampleObject;
        }
        if (!Utils::isUnset($request->samples)) {
            $query['Samples'] = $request->samples;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 添加代答样本
     *  *
     * @param AddAnswerSampleRequest $request AddAnswerSampleRequest
     *
     * @return AddAnswerSampleResponse AddAnswerSampleResponse
     */
    public function addAnswerSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAnswerSampleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建图库
     *  *
     * @param AddImageLibRequest $request AddImageLibRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageLibResponse AddImageLibResponse
     */
    public function addImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建图库
     *  *
     * @param AddImageLibRequest $request AddImageLibRequest
     *
     * @return AddImageLibResponse AddImageLibResponse
     */
    public function addImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageLibWithOptions($request, $runtime);
    }

    /**
     * @summary 批量添加图片
     *  *
     * @param AddImages2LibRequest $request AddImages2LibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImages2LibResponse AddImages2LibResponse
     */
    public function addImages2LibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->imgUrl)) {
            $body['ImgUrl'] = $request->imgUrl;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 批量添加图片
     *  *
     * @param AddImages2LibRequest $request AddImages2LibRequest
     *
     * @return AddImages2LibResponse AddImages2LibResponse
     */
    public function addImages2Lib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImages2LibWithOptions($request, $runtime);
    }

    /**
     * @summary 创建关键词库
     *  *
     * @param AddKeywordLibRequest $request AddKeywordLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddKeywordLibResponse AddKeywordLibResponse
     */
    public function addKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $body['KeywordsObject'] = $request->keywordsObject;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建关键词库
     *  *
     * @param AddKeywordLibRequest $request AddKeywordLibRequest
     *
     * @return AddKeywordLibResponse AddKeywordLibResponse
     */
    public function addKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary 添加关键词
     *  *
     * @param AddKeywordsRequest $request AddKeywordsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddKeywordsResponse AddKeywordsResponse
     */
    public function addKeywordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $body['KeywordsObject'] = $request->keywordsObject;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 添加关键词
     *  *
     * @param AddKeywordsRequest $request AddKeywordsRequest
     *
     * @return AddKeywordsResponse AddKeywordsResponse
     */
    public function addKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordsWithOptions($request, $runtime);
    }

    /**
     * @summary 添加关键词
     *  *
     * @param AddKeywordsToLibRequest $request AddKeywordsToLibRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddKeywordsToLibResponse AddKeywordsToLibResponse
     */
    public function addKeywordsToLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->keywordsObject)) {
            $body['KeywordsObject'] = $request->keywordsObject;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 添加关键词
     *  *
     * @param AddKeywordsToLibRequest $request AddKeywordsToLibRequest
     *
     * @return AddKeywordsToLibResponse AddKeywordsToLibResponse
     */
    public function addKeywordsToLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addKeywordsToLibWithOptions($request, $runtime);
    }

    /**
     * @summary 取消oss扫描任务
     *  *
     * @param CancelStockOssCheckTaskRequest $request CancelStockOssCheckTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelStockOssCheckTaskResponse CancelStockOssCheckTaskResponse
     */
    public function cancelStockOssCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 取消oss扫描任务
     *  *
     * @param CancelStockOssCheckTaskRequest $request CancelStockOssCheckTaskRequest
     *
     * @return CancelStockOssCheckTaskResponse CancelStockOssCheckTaskResponse
     */
    public function cancelStockOssCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelStockOssCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 复制服务
     *  *
     * @param CopyServiceConfigRequest $request CopyServiceConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyServiceConfigResponse CopyServiceConfigResponse
     */
    public function copyServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceDesc)) {
            $body['ServiceDesc'] = $request->serviceDesc;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 复制服务
     *  *
     * @param CopyServiceConfigRequest $request CopyServiceConfigRequest
     *
     * @return CopyServiceConfigResponse CopyServiceConfigResponse
     */
    public function copyServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 创建oss扫描任务
     *  *
     * @param CreatStockOssCheckTaskRequest $request CreatStockOssCheckTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatStockOssCheckTaskResponse CreatStockOssCheckTaskResponse
     */
    public function creatStockOssCheckTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buckets)) {
            $query['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->callbackId)) {
            $query['CallbackId'] = $request->callbackId;
        }
        if (!Utils::isUnset($request->distinctHistoryTasks)) {
            $query['DistinctHistoryTasks'] = $request->distinctHistoryTasks;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->executeDate)) {
            $query['ExecuteDate'] = $request->executeDate;
        }
        if (!Utils::isUnset($request->executeTime)) {
            $query['ExecuteTime'] = $request->executeTime;
        }
        if (!Utils::isUnset($request->freeze)) {
            $query['Freeze'] = $request->freeze;
        }
        if (!Utils::isUnset($request->freezeHighRisk1)) {
            $query['FreezeHighRisk1'] = $request->freezeHighRisk1;
        }
        if (!Utils::isUnset($request->freezeHighRisk2)) {
            $query['FreezeHighRisk2'] = $request->freezeHighRisk2;
        }
        if (!Utils::isUnset($request->freezeMediumRisk1)) {
            $query['FreezeMediumRisk1'] = $request->freezeMediumRisk1;
        }
        if (!Utils::isUnset($request->freezeMediumRisk2)) {
            $query['FreezeMediumRisk2'] = $request->freezeMediumRisk2;
        }
        if (!Utils::isUnset($request->freezeRestorePath)) {
            $query['FreezeRestorePath'] = $request->freezeRestorePath;
        }
        if (!Utils::isUnset($request->freezeType)) {
            $query['FreezeType'] = $request->freezeType;
        }
        if (!Utils::isUnset($request->isInc)) {
            $query['IsInc'] = $request->isInc;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->prefixFilterType)) {
            $query['PrefixFilterType'] = $request->prefixFilterType;
        }
        if (!Utils::isUnset($request->prefixFilters)) {
            $query['PrefixFilters'] = $request->prefixFilters;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->referer)) {
            $query['Referer'] = $request->referer;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scanLimit)) {
            $query['ScanLimit'] = $request->scanLimit;
        }
        if (!Utils::isUnset($request->scanNoFileType)) {
            $query['ScanNoFileType'] = $request->scanNoFileType;
        }
        if (!Utils::isUnset($request->scanResourceType)) {
            $query['ScanResourceType'] = $request->scanResourceType;
        }
        if (!Utils::isUnset($request->scanService)) {
            $query['ScanService'] = $request->scanService;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskCycle)) {
            $query['TaskCycle'] = $request->taskCycle;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 创建oss扫描任务
     *  *
     * @param CreatStockOssCheckTaskRequest $request CreatStockOssCheckTaskRequest
     *
     * @return CreatStockOssCheckTaskResponse CreatStockOssCheckTaskResponse
     */
    public function creatStockOssCheckTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->creatStockOssCheckTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建代答库
     *  *
     * @param CreateAnswerLibRequest $request CreateAnswerLibRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAnswerLibResponse CreateAnswerLibResponse
     */
    public function createAnswerLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        if (!Utils::isUnset($request->sampleBucket)) {
            $body['SampleBucket'] = $request->sampleBucket;
        }
        if (!Utils::isUnset($request->sampleObject)) {
            $body['SampleObject'] = $request->sampleObject;
        }
        if (!Utils::isUnset($request->samples)) {
            $body['Samples'] = $request->samples;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建代答库
     *  *
     * @param CreateAnswerLibRequest $request CreateAnswerLibRequest
     *
     * @return CreateAnswerLibResponse CreateAnswerLibResponse
     */
    public function createAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAnswerLibWithOptions($request, $runtime);
    }

    /**
     * @summary 新建消息通知
     *  *
     * @param CreateCallbackRequest $request CreateCallbackRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCallbackResponse CreateCallbackResponse
     */
    public function createCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->cryptType)) {
            $body['CryptType'] = $request->cryptType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 新建消息通知
     *  *
     * @param CreateCallbackRequest $request CreateCallbackRequest
     *
     * @return CreateCallbackResponse CreateCallbackResponse
     */
    public function createCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 在线测试
     *  *
     * @param CreateOnlineTestRequest $request CreateOnlineTestRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOnlineTestResponse CreateOnlineTestResponse
     */
    public function createOnlineTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataId)) {
            $query['DataId'] = $request->dataId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 在线测试
     *  *
     * @param CreateOnlineTestRequest $request CreateOnlineTestRequest
     *
     * @return CreateOnlineTestResponse CreateOnlineTestResponse
     */
    public function createOnlineTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOnlineTestWithOptions($request, $runtime);
    }

    /**
     * @summary 创建oss扫描任务前检查
     *  *
     * @param CreatePreCheckRequest $request CreatePreCheckRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePreCheckResponse CreatePreCheckResponse
     */
    public function createPreCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->buckets)) {
            $body['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->distinctHistoryTasks)) {
            $body['DistinctHistoryTasks'] = $request->distinctHistoryTasks;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isInc)) {
            $body['IsInc'] = $request->isInc;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $body['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->prefixFilterType)) {
            $body['PrefixFilterType'] = $request->prefixFilterType;
        }
        if (!Utils::isUnset($request->prefixFilters)) {
            $body['PrefixFilters'] = $request->prefixFilters;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->scanLimit)) {
            $body['ScanLimit'] = $request->scanLimit;
        }
        if (!Utils::isUnset($request->scanNoFileType)) {
            $body['ScanNoFileType'] = $request->scanNoFileType;
        }
        if (!Utils::isUnset($request->scanService)) {
            $body['ScanService'] = $request->scanService;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 创建oss扫描任务前检查
     *  *
     * @param CreatePreCheckRequest $request CreatePreCheckRequest
     *
     * @return CreatePreCheckResponse CreatePreCheckResponse
     */
    public function createPreCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPreCheckWithOptions($request, $runtime);
    }

    /**
     * @summary 删除代答库
     *  *
     * @param DeleteAnswerLibRequest $request DeleteAnswerLibRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAnswerLibResponse DeleteAnswerLibResponse
     */
    public function deleteAnswerLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->libId)) {
            $query['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除代答库
     *  *
     * @param DeleteAnswerLibRequest $request DeleteAnswerLibRequest
     *
     * @return DeleteAnswerLibResponse DeleteAnswerLibResponse
     */
    public function deleteAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAnswerLibWithOptions($request, $runtime);
    }

    /**
     * @summary 删除代答答案
     *  *
     * @param DeleteAnswerSampleRequest $request DeleteAnswerSampleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAnswerSampleResponse DeleteAnswerSampleResponse
     */
    public function deleteAnswerSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->ids)) {
            $body['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 删除代答答案
     *  *
     * @param DeleteAnswerSampleRequest $request DeleteAnswerSampleRequest
     *
     * @return DeleteAnswerSampleResponse DeleteAnswerSampleResponse
     */
    public function deleteAnswerSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAnswerSampleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除消息通知
     *  *
     * @param DeleteCallbackRequest $request DeleteCallbackRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCallbackResponse DeleteCallbackResponse
     */
    public function deleteCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 删除消息通知
     *  *
     * @param DeleteCallbackRequest $request DeleteCallbackRequest
     *
     * @return DeleteCallbackResponse DeleteCallbackResponse
     */
    public function deleteCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary Delete feature configuration
     *  *
     * @param DeleteFeatureConfigRequest $request DeleteFeatureConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFeatureConfigResponse DeleteFeatureConfigResponse
     */
    public function deleteFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->field)) {
            $body['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Delete feature configuration
     *  *
     * @param DeleteFeatureConfigRequest $request DeleteFeatureConfigRequest
     *
     * @return DeleteFeatureConfigResponse DeleteFeatureConfigResponse
     */
    public function deleteFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除
     *  *
     * @param DeleteImagesFromLibRequest $request DeleteImagesFromLibRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImagesFromLibResponse DeleteImagesFromLibResponse
     */
    public function deleteImagesFromLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->imageIds)) {
            $body['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 批量删除
     *  *
     * @param DeleteImagesFromLibRequest $request DeleteImagesFromLibRequest
     *
     * @return DeleteImagesFromLibResponse DeleteImagesFromLibResponse
     */
    public function deleteImagesFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesFromLibWithOptions($request, $runtime);
    }

    /**
     * @summary 删除关键词
     *  *
     * @param DeleteKeywordRequest $request DeleteKeywordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeywordResponse DeleteKeywordResponse
     */
    public function deleteKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->keywordIdList)) {
            $body['KeywordIdList'] = $request->keywordIdList;
        }
        if (!Utils::isUnset($request->keywordIds)) {
            $body['KeywordIds'] = $request->keywordIds;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 删除关键词
     *  *
     * @param DeleteKeywordRequest $request DeleteKeywordRequest
     *
     * @return DeleteKeywordResponse DeleteKeywordResponse
     */
    public function deleteKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordWithOptions($request, $runtime);
    }

    /**
     * @summary 删除关键词库
     *  *
     * @param DeleteKeywordLibRequest $request DeleteKeywordLibRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeywordLibResponse DeleteKeywordLibResponse
     */
    public function deleteKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 删除关键词库
     *  *
     * @param DeleteKeywordLibRequest $request DeleteKeywordLibRequest
     *
     * @return DeleteKeywordLibResponse DeleteKeywordLibResponse
     */
    public function deleteKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary 删除在线测试接口
     *  *
     * @param DeleteOnlineTestRequest $request DeleteOnlineTestRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOnlineTestResponse DeleteOnlineTestResponse
     */
    public function deleteOnlineTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 删除在线测试接口
     *  *
     * @param DeleteOnlineTestRequest $request DeleteOnlineTestRequest
     *
     * @return DeleteOnlineTestResponse DeleteOnlineTestResponse
     */
    public function deleteOnlineTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOnlineTestWithOptions($request, $runtime);
    }

    /**
     * @summary 查询在线测试结果
     *  *
     * @param DescribeOnlineTestResultRequest $request DescribeOnlineTestResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOnlineTestResultResponse DescribeOnlineTestResultResponse
     */
    public function describeOnlineTestResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询在线测试结果
     *  *
     * @param DescribeOnlineTestResultRequest $request DescribeOnlineTestResultRequest
     *
     * @return DescribeOnlineTestResultResponse DescribeOnlineTestResultResponse
     */
    public function describeOnlineTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOnlineTestResultWithOptions($request, $runtime);
    }

    /**
     * @summary 导出代答答案
     *  *
     * @param ExportAnswerSampleRequest $request ExportAnswerSampleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportAnswerSampleResponse ExportAnswerSampleResponse
     */
    public function exportAnswerSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 导出代答答案
     *  *
     * @param ExportAnswerSampleRequest $request ExportAnswerSampleRequest
     *
     * @return ExportAnswerSampleResponse ExportAnswerSampleResponse
     */
    public function exportAnswerSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportAnswerSampleWithOptions($request, $runtime);
    }

    /**
     * @summary 导出调用量
     *  *
     * @param ExportCipStatsRequest $request ExportCipStatsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportCipStatsResponse ExportCipStatsResponse
     */
    public function exportCipStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->exportType)) {
            $body['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subUid)) {
            $body['SubUid'] = $request->subUid;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 导出调用量
     *  *
     * @param ExportCipStatsRequest $request ExportCipStatsRequest
     *
     * @return ExportCipStatsResponse ExportCipStatsResponse
     */
    public function exportCipStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportCipStatsWithOptions($request, $runtime);
    }

    /**
     * @summary 导出关键词
     *  *
     * @param ExportKeywordRequest $request ExportKeywordRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportKeywordResponse ExportKeywordResponse
     */
    public function exportKeywordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 导出关键词
     *  *
     * @param ExportKeywordRequest $request ExportKeywordRequest
     *
     * @return ExportKeywordResponse ExportKeywordResponse
     */
    public function exportKeyword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportKeywordWithOptions($request, $runtime);
    }

    /**
     * @summary oss用量统计导出
     *  *
     * @param ExportOssCheckStatRequest $request ExportOssCheckStatRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportOssCheckStatResponse ExportOssCheckStatResponse
     */
    public function exportOssCheckStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $body['ParentTaskId'] = $request->parentTaskId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary oss用量统计导出
     *  *
     * @param ExportOssCheckStatRequest $request ExportOssCheckStatRequest
     *
     * @return ExportOssCheckStatResponse ExportOssCheckStatResponse
     */
    public function exportOssCheckStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportOssCheckStatWithOptions($request, $runtime);
    }

    /**
     * @summary 导出oss扫描结果
     *  *
     * @param ExportResultRequest $tmpReq  ExportResultRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportResultResponse ExportResultResponse
     */
    public function exportResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 导出oss扫描结果
     *  *
     * @param ExportResultRequest $request ExportResultRequest
     *
     * @return ExportResultResponse ExportResultResponse
     */
    public function exportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportResultWithOptions($request, $runtime);
    }

    /**
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportScanResultRequest $tmpReq  ExportScanResultRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportScanResultResponse ExportScanResultResponse
     */
    public function exportScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportScanResultRequest $request ExportScanResultRequest
     *
     * @return ExportScanResultResponse ExportScanResultResponse
     */
    public function exportScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportTextScanResultRequest $tmpReq  ExportTextScanResultRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportTextScanResultResponse ExportTextScanResultResponse
     */
    public function exportTextScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportTextScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 导出调用结果，excel文件
     *  *
     * @param ExportTextScanResultRequest $request ExportTextScanResultRequest
     *
     * @return ExportTextScanResultResponse ExportTextScanResultResponse
     */
    public function exportTextScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportTextScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取代答样本导入进度
     *  *
     * @param GetAnswerImportProgressRequest $request GetAnswerImportProgressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAnswerImportProgressResponse GetAnswerImportProgressResponse
     */
    public function getAnswerImportProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取代答样本导入进度
     *  *
     * @param GetAnswerImportProgressRequest $request GetAnswerImportProgressRequest
     *
     * @return GetAnswerImportProgressResponse GetAnswerImportProgressResponse
     */
    public function getAnswerImportProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAnswerImportProgressWithOptions($request, $runtime);
    }

    /**
     * @summary 证据转存获取用户bucket列表
     *  *
     * @param GetBackupBucketsListRequest $request GetBackupBucketsListRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupBucketsListResponse GetBackupBucketsListResponse
     */
    public function getBackupBucketsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 证据转存获取用户bucket列表
     *  *
     * @param GetBackupBucketsListRequest $request GetBackupBucketsListRequest
     *
     * @return GetBackupBucketsListResponse GetBackupBucketsListResponse
     */
    public function getBackupBucketsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupBucketsListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取证据转存配置
     *  *
     * @param GetBackupConfigRequest $request GetBackupConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupConfigResponse GetBackupConfigResponse
     */
    public function getBackupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取证据转存配置
     *  *
     * @param GetBackupConfigRequest $request GetBackupConfigRequest
     *
     * @return GetBackupConfigResponse GetBackupConfigResponse
     */
    public function getBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 用户授权校验
     *  *
     * @param GetBackupStatusRequest $request GetBackupStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupStatusResponse GetBackupStatusResponse
     */
    public function getBackupStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 用户授权校验
     *  *
     * @param GetBackupStatusRequest $request GetBackupStatusRequest
     *
     * @return GetBackupStatusResponse GetBackupStatusResponse
     */
    public function getBackupStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupStatusWithOptions($request, $runtime);
    }

    /**
     * @summary bucket列表
     *  *
     * @param GetBucketsListRequest $request GetBucketsListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBucketsListResponse GetBucketsListResponse
     */
    public function getBucketsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary bucket列表
     *  *
     * @param GetBucketsListRequest $request GetBucketsListRequest
     *
     * @return GetBucketsListResponse GetBucketsListResponse
     */
    public function getBucketsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketsListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调用量
     *  *
     * @param GetCipStatsRequest $request GetCipStatsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCipStatsResponse GetCipStatsResponse
     */
    public function getCipStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->subUid)) {
            $body['SubUid'] = $request->subUid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询调用量
     *  *
     * @param GetCipStatsRequest $request GetCipStatsRequest
     *
     * @return GetCipStatsResponse GetCipStatsResponse
     */
    public function getCipStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCipStatsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取定时任务预计执行时间
     *  *
     * @param GetExecuteTimeRequest $request GetExecuteTimeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExecuteTimeResponse GetExecuteTimeResponse
     */
    public function getExecuteTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取定时任务预计执行时间
     *  *
     * @param GetExecuteTimeRequest $request GetExecuteTimeRequest
     *
     * @return GetExecuteTimeResponse GetExecuteTimeResponse
     */
    public function getExecuteTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExecuteTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Get Feature Configuration
     *  *
     * @param GetFeatureConfigRequest $request GetFeatureConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFeatureConfigResponse GetFeatureConfigResponse
     */
    public function getFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Get Feature Configuration
     *  *
     * @param GetFeatureConfigRequest $request GetFeatureConfigRequest
     *
     * @return GetFeatureConfigResponse GetFeatureConfigResponse
     */
    public function getFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取图片规则标签信息
     *  *
     * @param GetImageSceneLabelConfRequest $request GetImageSceneLabelConfRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageSceneLabelConfResponse GetImageSceneLabelConfResponse
     */
    public function getImageSceneLabelConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取图片规则标签信息
     *  *
     * @param GetImageSceneLabelConfRequest $request GetImageSceneLabelConfRequest
     *
     * @return GetImageSceneLabelConfResponse GetImageSceneLabelConfResponse
     */
    public function getImageSceneLabelConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageSceneLabelConfWithOptions($request, $runtime);
    }

    /**
     * @summary 获取图片规则标签信息
     *  *
     * @param GetImageSceneLabelListConfRequest $request GetImageSceneLabelListConfRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageSceneLabelListConfResponse GetImageSceneLabelListConfResponse
     */
    public function getImageSceneLabelListConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageServiceCode)) {
            $query['ImageServiceCode'] = $request->imageServiceCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取图片规则标签信息
     *  *
     * @param GetImageSceneLabelListConfRequest $request GetImageSceneLabelListConfRequest
     *
     * @return GetImageSceneLabelListConfResponse GetImageSceneLabelListConfResponse
     */
    public function getImageSceneLabelListConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageSceneLabelListConfWithOptions($request, $runtime);
    }

    /**
     * @summary oss定时扫描检测周期查询
     *  *
     * @param GetJobNameListRequest $tmpReq  GetJobNameListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobNameListResponse GetJobNameListResponse
     */
    public function getJobNameListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetJobNameListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary oss定时扫描检测周期查询
     *  *
     * @param GetJobNameListRequest $request GetJobNameListRequest
     *
     * @return GetJobNameListResponse GetJobNameListResponse
     */
    public function getJobNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobNameListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询导入关键词结果
     *  *
     * @param GetKeywordImportResultRequest $request GetKeywordImportResultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKeywordImportResultResponse GetKeywordImportResultResponse
     */
    public function getKeywordImportResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询导入关键词结果
     *  *
     * @param GetKeywordImportResultRequest $request GetKeywordImportResultRequest
     *
     * @return GetKeywordImportResultResponse GetKeywordImportResultResponse
     */
    public function getKeywordImportResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordImportResultWithOptions($request, $runtime);
    }

    /**
     * @summary 关键词库信息
     *  *
     * @param GetKeywordLibRequest $request GetKeywordLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKeywordLibResponse GetKeywordLibResponse
     */
    public function getKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 关键词库信息
     *  *
     * @param GetKeywordLibRequest $request GetKeywordLibRequest
     *
     * @return GetKeywordLibResponse GetKeywordLibResponse
     */
    public function getKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary oss冻结结果查询
     *  *
     * @param GetOssCheckFreezeResultRequest $tmpReq  GetOssCheckFreezeResultRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckFreezeResultResponse GetOssCheckFreezeResultResponse
     */
    public function getOssCheckFreezeResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetOssCheckFreezeResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->finishNum)) {
            $query['FinishNum'] = $request->finishNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary oss冻结结果查询
     *  *
     * @param GetOssCheckFreezeResultRequest $request GetOssCheckFreezeResultRequest
     *
     * @return GetOssCheckFreezeResultResponse GetOssCheckFreezeResultResponse
     */
    public function getOssCheckFreezeResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckFreezeResultWithOptions($request, $runtime);
    }

    /**
     * @summary oss结果详情
     *  *
     * @param GetOssCheckResultDetailRequest $request GetOssCheckResultDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckResultDetailResponse GetOssCheckResultDetailResponse
     */
    public function getOssCheckResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->object)) {
            $query['Object'] = $request->object;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $query['ParentTaskId'] = $request->parentTaskId;
        }
        if (!Utils::isUnset($request->queryRequestId)) {
            $query['QueryRequestId'] = $request->queryRequestId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary oss结果详情
     *  *
     * @param GetOssCheckResultDetailRequest $request GetOssCheckResultDetailRequest
     *
     * @return GetOssCheckResultDetailResponse GetOssCheckResultDetailResponse
     */
    public function getOssCheckResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckResultDetailWithOptions($request, $runtime);
    }

    /**
     * @summary oss用量统计
     *  *
     * @param GetOssCheckStatRequest $request GetOssCheckStatRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckStatResponse GetOssCheckStatResponse
     */
    public function getOssCheckStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byMonth)) {
            $body['ByMonth'] = $request->byMonth;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $body['ParentTaskId'] = $request->parentTaskId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary oss用量统计
     *  *
     * @param GetOssCheckStatRequest $request GetOssCheckStatRequest
     *
     * @return GetOssCheckStatResponse GetOssCheckStatResponse
     */
    public function getOssCheckStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckStatWithOptions($request, $runtime);
    }

    /**
     * @summary 获取OSS检测用户状态
     *  *
     * @param GetOssCheckStatusRequest $request GetOssCheckStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckStatusResponse GetOssCheckStatusResponse
     */
    public function getOssCheckStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取OSS检测用户状态
     *  *
     * @param GetOssCheckStatusRequest $request GetOssCheckStatusRequest
     *
     * @return GetOssCheckStatusResponse GetOssCheckStatusResponse
     */
    public function getOssCheckStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询oss扫描任务详情
     *  *
     * @param GetOssCheckTaskInfoRequest $request GetOssCheckTaskInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssCheckTaskInfoResponse GetOssCheckTaskInfoResponse
     */
    public function getOssCheckTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentTaskId)) {
            $query['ParentTaskId'] = $request->parentTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询oss扫描任务详情
     *  *
     * @param GetOssCheckTaskInfoRequest $request GetOssCheckTaskInfoRequest
     *
     * @return GetOssCheckTaskInfoResponse GetOssCheckTaskInfoResponse
     */
    public function getOssCheckTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssCheckTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 用户待检测信息
     *  *
     * @param GetScanNumRequest $request GetScanNumRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScanNumResponse GetScanNumResponse
     */
    public function getScanNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->buckets)) {
            $query['Buckets'] = $request->buckets;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 用户待检测信息
     *  *
     * @param GetScanNumRequest $request GetScanNumRequest
     *
     * @return GetScanNumResponse GetScanNumResponse
     */
    public function getScanNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScanNumWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调用结果
     *  *
     * @param GetScanResultRequest $tmpReq  GetScanResultRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScanResultResponse GetScanResultResponse
     */
    public function getScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询调用结果
     *  *
     * @param GetScanResultRequest $request GetScanResultRequest
     *
     * @return GetScanResultResponse GetScanResultResponse
     */
    public function getScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfRequest $request GetServiceConfRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceConfResponse GetServiceConfResponse
     */
    public function getServiceConfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->byDefault)) {
            $body['ByDefault'] = $request->byDefault;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfRequest $request GetServiceConfRequest
     *
     * @return GetServiceConfResponse GetServiceConfResponse
     */
    public function getServiceConf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfigRequest $request GetServiceConfigRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceConfigResponse GetServiceConfigResponse
     */
    public function getServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 获取单个服务
     *  *
     * @param GetServiceConfigRequest $request GetServiceConfigRequest
     *
     * @return GetServiceConfigResponse GetServiceConfigResponse
     */
    public function getServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取单个服务的标签配置
     *  *
     * @param GetServiceLabelConfigRequest $request GetServiceLabelConfigRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetServiceLabelConfigResponse GetServiceLabelConfigResponse
     */
    public function getServiceLabelConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 获取单个服务的标签配置
     *  *
     * @param GetServiceLabelConfigRequest $request GetServiceLabelConfigRequest
     *
     * @return GetServiceLabelConfigResponse GetServiceLabelConfigResponse
     */
    public function getServiceLabelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLabelConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查询oss扫描任务列表
     *  *
     * @param GetStockOssCheckTasksListRequest $tmpReq  GetStockOssCheckTasksListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStockOssCheckTasksListResponse GetStockOssCheckTasksListResponse
     */
    public function getStockOssCheckTasksListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetStockOssCheckTasksListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->isInc)) {
            $query['IsInc'] = $request->isInc;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $body['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询oss扫描任务列表
     *  *
     * @param GetStockOssCheckTasksListRequest $request GetStockOssCheckTasksListRequest
     *
     * @return GetStockOssCheckTasksListResponse GetStockOssCheckTasksListResponse
     */
    public function getStockOssCheckTasksList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStockOssCheckTasksListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询调用结果
     *  *
     * @param GetTextScanResultRequest $tmpReq  GetTextScanResultRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTextScanResultResponse GetTextScanResultResponse
     */
    public function getTextScanResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTextScanResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->query)) {
            $request->queryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryShrink)) {
            $body['Query'] = $request->queryShrink;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询调用结果
     *  *
     * @param GetTextScanResultRequest $request GetTextScanResultRequest
     *
     * @return GetTextScanResultResponse GetTextScanResultResponse
     */
    public function getTextScanResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTextScanResultWithOptions($request, $runtime);
    }

    /**
     * @summary 文件上传获取相应信息
     *  *
     * @param GetUploadInfoRequest $request GetUploadInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadInfoResponse GetUploadInfoResponse
     */
    public function getUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 文件上传获取相应信息
     *  *
     * @param GetUploadInfoRequest $request GetUploadInfoRequest
     *
     * @return GetUploadInfoResponse GetUploadInfoResponse
     */
    public function getUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取上传链接
     *  *
     * @param GetUploadLinkRequest $request GetUploadLinkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadLinkResponse GetUploadLinkResponse
     */
    public function getUploadLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uploadUrl)) {
            $query['UploadUrl'] = $request->uploadUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取上传链接
     *  *
     * @param GetUploadLinkRequest $request GetUploadLinkRequest
     *
     * @return GetUploadLinkResponse GetUploadLinkResponse
     */
    public function getUploadLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadLinkWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户购买状态
     *  *
     * @param GetUserBuyStatusRequest $request GetUserBuyStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserBuyStatusResponse GetUserBuyStatusResponse
     */
    public function getUserBuyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $body['CommodityCode'] = $request->commodityCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 获取用户购买状态
     *  *
     * @param GetUserBuyStatusRequest $request GetUserBuyStatusRequest
     *
     * @return GetUserBuyStatusResponse GetUserBuyStatusResponse
     */
    public function getUserBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserBuyStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 代答库列表
     *  *
     * @param ListAnswerLibRequest $request ListAnswerLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAnswerLibResponse ListAnswerLibResponse
     */
    public function listAnswerLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 代答库列表
     *  *
     * @param ListAnswerLibRequest $request ListAnswerLibRequest
     *
     * @return ListAnswerLibResponse ListAnswerLibResponse
     */
    public function listAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnswerLibWithOptions($request, $runtime);
    }

    /**
     * @summary 消息通知列表
     *  *
     * @param ListCallbackRequest $request ListCallbackRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCallbackResponse ListCallbackResponse
     */
    public function listCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 消息通知列表
     *  *
     * @param ListCallbackRequest $request ListCallbackRequest
     *
     * @return ListCallbackResponse ListCallbackResponse
     */
    public function listCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 图库列表
     *  *
     * @param ListImageLibRequest $request ListImageLibRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImageLibResponse ListImageLibResponse
     */
    public function listImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 图库列表
     *  *
     * @param ListImageLibRequest $request ListImageLibRequest
     *
     * @return ListImageLibResponse ListImageLibResponse
     */
    public function listImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageLibWithOptions($request, $runtime);
    }

    /**
     * @summary 图片列表 分页
     *  *
     * @param ListImagesFromLibRequest $tmpReq  ListImagesFromLibRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesFromLibResponse ListImagesFromLibResponse
     */
    public function listImagesFromLibWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListImagesFromLibShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->imgId)) {
            $body['ImgId'] = $request->imgId;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 图片列表 分页
     *  *
     * @param ListImagesFromLibRequest $request ListImagesFromLibRequest
     *
     * @return ListImagesFromLibResponse ListImagesFromLibResponse
     */
    public function listImagesFromLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesFromLibWithOptions($request, $runtime);
    }

    /**
     * @summary 关键词库列表
     *  *
     * @param ListKeywordLibsRequest $request ListKeywordLibsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListKeywordLibsResponse ListKeywordLibsResponse
     */
    public function listKeywordLibsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 关键词库列表
     *  *
     * @param ListKeywordLibsRequest $request ListKeywordLibsRequest
     *
     * @return ListKeywordLibsResponse ListKeywordLibsResponse
     */
    public function listKeywordLibs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeywordLibsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询关键词列表
     *  *
     * @param ListKeywordsRequest $tmpReq  ListKeywordsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListKeywordsResponse ListKeywordsResponse
     */
    public function listKeywordsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListKeywordsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $body['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->word)) {
            $body['Word'] = $request->word;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询关键词列表
     *  *
     * @param ListKeywordsRequest $request ListKeywordsRequest
     *
     * @return ListKeywordsResponse ListKeywordsResponse
     */
    public function listKeywords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeywordsWithOptions($request, $runtime);
    }

    /**
     * @summary oss扫描结果查询
     *  *
     * @param ListOssCheckResultRequest $tmpReq  ListOssCheckResultRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOssCheckResultResponse ListOssCheckResultResponse
     */
    public function listOssCheckResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListOssCheckResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->finishNum)) {
            $query['FinishNum'] = $request->finishNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary oss扫描结果查询
     *  *
     * @param ListOssCheckResultRequest $request ListOssCheckResultRequest
     *
     * @return ListOssCheckResultResponse ListOssCheckResultResponse
     */
    public function listOssCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOssCheckResultWithOptions($request, $runtime);
    }

    /**
     * @summary 获取服务列表
     *  *
     * @param ListServiceConfigsRequest $request ListServiceConfigsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServiceConfigsResponse ListServiceConfigsResponse
     */
    public function listServiceConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->classify)) {
            $query['Classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->useStatus)) {
            $query['UseStatus'] = $request->useStatus;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 获取服务列表
     *  *
     * @param ListServiceConfigsRequest $request ListServiceConfigsRequest
     *
     * @return ListServiceConfigsResponse ListServiceConfigsResponse
     */
    public function listServiceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary 使用SSE接口流式调用大模型
     *  *
     * @param LlmStreamChatRequest $request LlmStreamChatRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LlmStreamChatResponse LlmStreamChatResponse
     */
    public function llmStreamChatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->messages)) {
            $body['Messages'] = $request->messages;
        }
        if (!Utils::isUnset($request->temperature)) {
            $body['Temperature'] = $request->temperature;
        }
        if (!Utils::isUnset($request->topP)) {
            $body['TopP'] = $request->topP;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 使用SSE接口流式调用大模型
     *  *
     * @param LlmStreamChatRequest $request LlmStreamChatRequest
     *
     * @return LlmStreamChatResponse LlmStreamChatResponse
     */
    public function llmStreamChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmStreamChatWithOptions($request, $runtime);
    }

    /**
     * @summary 更新代答库
     *  *
     * @param ModifyAnswerLibRequest $request ModifyAnswerLibRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAnswerLibResponse ModifyAnswerLibResponse
     */
    public function modifyAnswerLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->libId)) {
            $query['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->libName)) {
            $query['LibName'] = $request->libName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新代答库
     *  *
     * @param ModifyAnswerLibRequest $request ModifyAnswerLibRequest
     *
     * @return ModifyAnswerLibResponse ModifyAnswerLibResponse
     */
    public function modifyAnswerLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAnswerLibWithOptions($request, $runtime);
    }

    /**
     * @summary 修改消息通知
     *  *
     * @param ModifyCallbackRequest $request ModifyCallbackRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCallbackResponse ModifyCallbackResponse
     */
    public function modifyCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->cryptType)) {
            $body['CryptType'] = $request->cryptType;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 修改消息通知
     *  *
     * @param ModifyCallbackRequest $request ModifyCallbackRequest
     *
     * @return ModifyCallbackResponse ModifyCallbackResponse
     */
    public function modifyCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary Save Feature Configuration
     *  *
     * @param ModifyFeatureConfigRequest $request ModifyFeatureConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFeatureConfigResponse ModifyFeatureConfigResponse
     */
    public function modifyFeatureConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->field)) {
            $body['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary Save Feature Configuration
     *  *
     * @param ModifyFeatureConfigRequest $request ModifyFeatureConfigRequest
     *
     * @return ModifyFeatureConfigResponse ModifyFeatureConfigResponse
     */
    public function modifyFeatureConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFeatureConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑服务
     *  *
     * @param ModifyServiceInfoRequest $request ModifyServiceInfoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyServiceInfoResponse ModifyServiceInfoResponse
     */
    public function modifyServiceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceDesc)) {
            $body['ServiceDesc'] = $request->serviceDesc;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 编辑服务
     *  *
     * @param ModifyServiceInfoRequest $request ModifyServiceInfoRequest
     *
     * @return ModifyServiceInfoResponse ModifyServiceInfoResponse
     */
    public function modifyServiceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceInfoWithOptions($request, $runtime);
    }

    /**
     * @summary oss扫描结果查询
     *  *
     * @param OssCheckResultListRequest $tmpReq  OssCheckResultListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return OssCheckResultListResponse OssCheckResultListResponse
     */
    public function ossCheckResultListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OssCheckResultListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->finishNum)) {
            $query['FinishNum'] = $request->finishNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary oss扫描结果查询
     *  *
     * @param OssCheckResultListRequest $request OssCheckResultListRequest
     *
     * @return OssCheckResultListResponse OssCheckResultListResponse
     */
    public function ossCheckResultList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ossCheckResultListWithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询代答样本
     *  *
     * @param QueryAnswerSampleByPageRequest $tmpReq  QueryAnswerSampleByPageRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAnswerSampleByPageResponse QueryAnswerSampleByPageResponse
     */
    public function queryAnswerSampleByPageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryAnswerSampleByPageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sort)) {
            $request->sortShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sort, 'Sort', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->answer)) {
            $query['Answer'] = $request->answer;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->libId)) {
            $query['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sortShrink)) {
            $query['Sort'] = $request->sortShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 分页查询代答样本
     *  *
     * @param QueryAnswerSampleByPageRequest $request QueryAnswerSampleByPageRequest
     *
     * @return QueryAnswerSampleByPageResponse QueryAnswerSampleByPageResponse
     */
    public function queryAnswerSampleByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAnswerSampleByPageWithOptions($request, $runtime);
    }

    /**
     * @summary 查询单个回调配置
     *  *
     * @param QueryCallbackRequest $request QueryCallbackRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCallbackResponse QueryCallbackResponse
     */
    public function queryCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->checkForOss)) {
            $body['CheckForOss'] = $request->checkForOss;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 查询单个回调配置
     *  *
     * @param QueryCallbackRequest $request QueryCallbackRequest
     *
     * @return QueryCallbackResponse QueryCallbackResponse
     */
    public function queryCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary 消息通知
     *  *
     * @param QueryCallbackByPageRequest $request QueryCallbackByPageRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCallbackByPageResponse QueryCallbackByPageResponse
     */
    public function queryCallbackByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 消息通知
     *  *
     * @param QueryCallbackByPageRequest $request QueryCallbackByPageRequest
     *
     * @return QueryCallbackByPageResponse QueryCallbackByPageResponse
     */
    public function queryCallbackByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallbackByPageWithOptions($request, $runtime);
    }

    /**
     * @summary 停止在线测试
     *  *
     * @param StopOnlineTestRequest $request StopOnlineTestRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopOnlineTestResponse StopOnlineTestResponse
     */
    public function stopOnlineTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 停止在线测试
     *  *
     * @param StopOnlineTestRequest $request StopOnlineTestRequest
     *
     * @return StopOnlineTestResponse StopOnlineTestResponse
     */
    public function stopOnlineTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopOnlineTestWithOptions($request, $runtime);
    }

    /**
     * @summary 更新证据转存配置
     *  *
     * @param UpdateBackupConfigRequest $request UpdateBackupConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateBackupConfigResponse UpdateBackupConfigResponse
     */
    public function updateBackupConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupConfig)) {
            $query['BackupConfig'] = $request->backupConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新证据转存配置
     *  *
     * @param UpdateBackupConfigRequest $request UpdateBackupConfigRequest
     *
     * @return UpdateBackupConfigResponse UpdateBackupConfigResponse
     */
    public function updateBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBackupConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑图库
     *  *
     * @param UpdateImageLibRequest $request UpdateImageLibRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageLibResponse UpdateImageLibResponse
     */
    public function updateImageLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->freeInspection)) {
            $body['FreeInspection'] = $request->freeInspection;
        }
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 编辑图库
     *  *
     * @param UpdateImageLibRequest $request UpdateImageLibRequest
     *
     * @return UpdateImageLibResponse UpdateImageLibResponse
     */
    public function updateImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageLibWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑图库免检配置
     *  *
     * @param UpdateImageLibFreeInspectionRequest $tmpReq  UpdateImageLibFreeInspectionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageLibFreeInspectionResponse UpdateImageLibFreeInspectionResponse
     */
    public function updateImageLibFreeInspectionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateImageLibFreeInspectionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->configShrink)) {
            $body['Config'] = $request->configShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 编辑图库免检配置
     *  *
     * @param UpdateImageLibFreeInspectionRequest $request UpdateImageLibFreeInspectionRequest
     *
     * @return UpdateImageLibFreeInspectionResponse UpdateImageLibFreeInspectionResponse
     */
    public function updateImageLibFreeInspection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageLibFreeInspectionWithOptions($request, $runtime);
    }

    /**
     * @summary 编辑关键词库
     *  *
     * @param UpdateKeywordLibRequest $request UpdateKeywordLibRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateKeywordLibResponse UpdateKeywordLibResponse
     */
    public function updateKeywordLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->libId)) {
            $body['LibId'] = $request->libId;
        }
        if (!Utils::isUnset($request->libName)) {
            $body['LibName'] = $request->libName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 编辑关键词库
     *  *
     * @param UpdateKeywordLibRequest $request UpdateKeywordLibRequest
     *
     * @return UpdateKeywordLibResponse UpdateKeywordLibResponse
     */
    public function updateKeywordLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKeywordLibWithOptions($request, $runtime);
    }

    /**
     * @summary 批量反馈任务
     *  *
     * @param UpdateOssCheckResultsBatchFeedbackRequest $request UpdateOssCheckResultsBatchFeedbackRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOssCheckResultsBatchFeedbackResponse UpdateOssCheckResultsBatchFeedbackResponse
     */
    public function updateOssCheckResultsBatchFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->items)) {
            $query['Items'] = $request->items;
        }
        if (!Utils::isUnset($request->parentTaskId)) {
            $query['ParentTaskId'] = $request->parentTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 批量反馈任务
     *  *
     * @param UpdateOssCheckResultsBatchFeedbackRequest $request UpdateOssCheckResultsBatchFeedbackRequest
     *
     * @return UpdateOssCheckResultsBatchFeedbackResponse UpdateOssCheckResultsBatchFeedbackResponse
     */
    public function updateOssCheckResultsBatchFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsBatchFeedbackWithOptions($request, $runtime);
    }

    /**
     * @summary oss结果反馈
     *  *
     * @param UpdateOssCheckResultsFeedBackRequest $request UpdateOssCheckResultsFeedBackRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOssCheckResultsFeedBackResponse UpdateOssCheckResultsFeedBackResponse
     */
    public function updateOssCheckResultsFeedBackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->feedback)) {
            $query['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->queryRequestId)) {
            $query['QueryRequestId'] = $request->queryRequestId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $query['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary oss结果反馈
     *  *
     * @param UpdateOssCheckResultsFeedBackRequest $request UpdateOssCheckResultsFeedBackRequest
     *
     * @return UpdateOssCheckResultsFeedBackResponse UpdateOssCheckResultsFeedBackResponse
     */
    public function updateOssCheckResultsFeedBack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsFeedBackWithOptions($request, $runtime);
    }

    /**
     * @summary 批量冻结任务
     *  *
     * @param UpdateOssCheckResultsFreezeRequest $request UpdateOssCheckResultsFreezeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOssCheckResultsFreezeResponse UpdateOssCheckResultsFreezeResponse
     */
    public function updateOssCheckResultsFreezeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->freezeItems)) {
            $query['FreezeItems'] = $request->freezeItems;
        }
        if (!Utils::isUnset($request->freezeRestorePath)) {
            $query['FreezeRestorePath'] = $request->freezeRestorePath;
        }
        if (!Utils::isUnset($request->freezeType)) {
            $query['FreezeType'] = $request->freezeType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 批量冻结任务
     *  *
     * @param UpdateOssCheckResultsFreezeRequest $request UpdateOssCheckResultsFreezeRequest
     *
     * @return UpdateOssCheckResultsFreezeResponse UpdateOssCheckResultsFreezeResponse
     */
    public function updateOssCheckResultsFreeze($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsFreezeWithOptions($request, $runtime);
    }

    /**
     * @summary 批量解冻任务
     *  *
     * @param UpdateOssCheckResultsUnfreezeRequest $request UpdateOssCheckResultsUnfreezeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOssCheckResultsUnfreezeResponse UpdateOssCheckResultsUnfreezeResponse
     */
    public function updateOssCheckResultsUnfreezeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->freezeItems)) {
            $query['FreezeItems'] = $request->freezeItems;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 批量解冻任务
     *  *
     * @param UpdateOssCheckResultsUnfreezeRequest $request UpdateOssCheckResultsUnfreezeRequest
     *
     * @return UpdateOssCheckResultsUnfreezeResponse UpdateOssCheckResultsUnfreezeResponse
     */
    public function updateOssCheckResultsUnfreeze($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOssCheckResultsUnfreezeWithOptions($request, $runtime);
    }

    /**
     * @summary 检测结果反馈
     *  *
     * @param UpdateScanResultFeedbackRequest $request UpdateScanResultFeedbackRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateScanResultFeedbackResponse UpdateScanResultFeedbackResponse
     */
    public function updateScanResultFeedbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->feedback)) {
            $body['Feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->queryRequestId)) {
            $body['QueryRequestId'] = $request->queryRequestId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 检测结果反馈
     *  *
     * @param UpdateScanResultFeedbackRequest $request UpdateScanResultFeedbackRequest
     *
     * @return UpdateScanResultFeedbackResponse UpdateScanResultFeedbackResponse
     */
    public function updateScanResultFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScanResultFeedbackWithOptions($request, $runtime);
    }

    /**
     * @summary 更新服务
     *  *
     * @param UpdateServiceConfigRequest $request UpdateServiceConfigRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceConfigResponse UpdateServiceConfigResponse
     */
    public function updateServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->fileConfig)) {
            $body['FileConfig'] = $request->fileConfig;
        }
        if (!Utils::isUnset($request->keywordFilterLibs)) {
            $body['KeywordFilterLibs'] = $request->keywordFilterLibs;
        }
        if (!Utils::isUnset($request->keywordHitLibs)) {
            $body['KeywordHitLibs'] = $request->keywordHitLibs;
        }
        if (!Utils::isUnset($request->manualMachineConfig)) {
            $body['ManualMachineConfig'] = $request->manualMachineConfig;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->sceneConfig)) {
            $body['SceneConfig'] = $request->sceneConfig;
        }
        if (!Utils::isUnset($request->serviceCode)) {
            $body['ServiceCode'] = $request->serviceCode;
        }
        if (!Utils::isUnset($request->serviceConfig)) {
            $body['ServiceConfig'] = $request->serviceConfig;
        }
        if (!Utils::isUnset($request->videoConfig)) {
            $body['VideoConfig'] = $request->videoConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
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
     * @summary 更新服务
     *  *
     * @param UpdateServiceConfigRequest $request UpdateServiceConfigRequest
     *
     * @return UpdateServiceConfigResponse UpdateServiceConfigResponse
     */
    public function updateServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceConfigWithOptions($request, $runtime);
    }
}
