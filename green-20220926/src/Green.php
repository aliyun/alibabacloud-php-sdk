<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAnswerSampleRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAnswerSampleResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAppAgentRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAppAgentResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAppConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\AddAppConfigResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\ConfirmAiAppScanRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ConfirmAiAppScanResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyAppConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyAppConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyServiceConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CopyServiceConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateAppConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateAppConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\CreateImageLibResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteAppAgentRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DeleteAppAgentResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOssV2ResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOssV2ResultResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailStatRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailStatResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailTopoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailTopoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailTopoShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppNodeDetailRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppNodeDetailResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppOverviewRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppOverviewResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppTraceDetailRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppTraceDetailResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAnswerImportProgressRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAnswerImportProgressResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAppConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAppConfigResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardLogStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardLogStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetGuardStatusResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\GetPromptTestResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetPromptTestResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetQpsStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetQpsStatsResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetRiskStatsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetRiskStatsResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\GetTuneProposalByIdRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTuneProposalByIdResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadContentRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadContentResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadLinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUploadLinkResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\GetUserBuyStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\InitAiAppScanRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\InitAiAppScanResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppRiskEventByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppRiskEventByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppRiskEventRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppRiskEventResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppWarningByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppWarningByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigHistoryRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigHistoryResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigsRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigsResponse;
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
use AlibabaCloud\SDK\Green\V20220926\Models\MarkOssV2ResultRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\MarkOssV2ResultResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAnswerLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAnswerLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAppAgentRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAppAgentResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAppInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyAppInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyFeatureConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyFeatureConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\ModifyServiceInfoResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\OssCheckResultListRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\OssCheckResultListResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\OssCheckResultListShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\PublishAppConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\PublishAppConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryAnswerSampleByPageShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackByPageResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryCallbackResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryLabelConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\QueryLabelConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\RecoverAppConfigHistoryRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\RecoverAppConfigHistoryResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\StopOnlineTestRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\StopOnlineTestResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateAiAppScanStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateAiAppScanStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateBackupConfigResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateEventStatusRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateEventStatusResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateEventStatusShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibFreeInspectionShrinkRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateImageLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateKeywordLibResponse;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateMetaLogRequest;
use AlibabaCloud\SDK\Green\V20220926\Models\UpdateMetaLogResponse;
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
            'cn-shenzhen' => 'green-cip.cn-shenzhen.aliyuncs.com',
            'cn-beijing' => 'green-cip.cn-beijing.aliyuncs.com',
            'cn-shanghai' => 'green-cip.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'green-cip.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou' => 'green-cip.cn-hangzhou.aliyuncs.com',
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
     * Adds a proxy answer.
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
     * Adds a proxy answer.
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
     * Adds an agent configuration to an app.
     *
     * @param request - AddAppAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAppAgentResponse
     *
     * @param AddAppAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddAppAgentResponse
     */
    public function addAppAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

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
            'action' => 'AddAppAgent',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAppAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an agent configuration to an app.
     *
     * @param request - AddAppAgentRequest
     *
     * @returns AddAppAgentResponse
     *
     * @param AddAppAgentRequest $request
     *
     * @return AddAppAgentResponse
     */
    public function addAppAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAppAgentWithOptions($request, $runtime);
    }

    /**
     * Creates an app configuration.
     *
     * @param request - AddAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAppConfigResponse
     *
     * @param AddAppConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddAppConfigResponse
     */
    public function addAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sysAppId) {
            @$query['SysAppId'] = $request->sysAppId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddAppConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an app configuration.
     *
     * @param request - AddAppConfigRequest
     *
     * @returns AddAppConfigResponse
     *
     * @param AddAppConfigRequest $request
     *
     * @return AddAppConfigResponse
     */
    public function addAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAppConfigWithOptions($request, $runtime);
    }

    /**
     * Creates an image library.
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
     * Creates an image library.
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
     * Adds images in batches.
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
     * Adds images in batches.
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
     * Creates a keyword library.
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
        if (null !== $request->properties) {
            @$query['Properties'] = $request->properties;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Creates a keyword library.
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
     * Adds keywords.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Adds keywords.
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
     * Adds keywords.
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
        if (null !== $request->properties) {
            @$query['Properties'] = $request->properties;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Adds keywords.
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
     * Cancels an OSS scan task.
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
     * Cancels an OSS scan task.
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
     * Confirms the activation of AI application protection.
     *
     * @param request - ConfirmAiAppScanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmAiAppScanResponse
     *
     * @param ConfirmAiAppScanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ConfirmAiAppScanResponse
     */
    public function confirmAiAppScanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfirmAiAppScan',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfirmAiAppScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Confirms the activation of AI application protection.
     *
     * @param request - ConfirmAiAppScanRequest
     *
     * @returns ConfirmAiAppScanResponse
     *
     * @param ConfirmAiAppScanRequest $request
     *
     * @return ConfirmAiAppScanResponse
     */
    public function confirmAiAppScan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmAiAppScanWithOptions($request, $runtime);
    }

    /**
     * Copies an App configuration.
     *
     * @param request - CopyAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyAppConfigResponse
     *
     * @param CopyAppConfigRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CopyAppConfigResponse
     */
    public function copyAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

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
            'action' => 'CopyAppConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies an App configuration.
     *
     * @param request - CopyAppConfigRequest
     *
     * @returns CopyAppConfigResponse
     *
     * @param CopyAppConfigRequest $request
     *
     * @return CopyAppConfigResponse
     */
    public function copyAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyAppConfigWithOptions($request, $runtime);
    }

    /**
     * Copies a service.
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
     * Copies a service.
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
     * Creates an OSS scan task.
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
        if (null !== $request->bucketPrefixFilterConfig) {
            @$query['BucketPrefixFilterConfig'] = $request->bucketPrefixFilterConfig;
        }

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
     * Creates an OSS scan task.
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
     * Creates a proxy answer library.
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
     * Creates a proxy answer library.
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
     * Creates an app configuration.
     *
     * @param request - CreateAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppConfigResponse
     *
     * @param CreateAppConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAppConfigResponse
     */
    public function createAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sysAppId) {
            @$query['SysAppId'] = $request->sysAppId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAppConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an app configuration.
     *
     * @param request - CreateAppConfigRequest
     *
     * @returns CreateAppConfigResponse
     *
     * @param CreateAppConfigRequest $request
     *
     * @return CreateAppConfigResponse
     */
    public function createAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a message notification.
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
     * Creates a message notification.
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
     * Creates an image library.
     *
     * @remarks
     * Before using this operation, complete the following steps:
     * 1. [Activate Content Moderation Enhanced Edition](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn).
     * 2. Understand the [billing methods and pricing](https://help.aliyun.com/document_detail/467826.html?#section-h06-qz6-1pt) of Image Moderation Enhanced Edition.
     * 3. For more information about API operations and parameters, see [API reference](https://help.aliyun.com/document_detail/467829.html).
     *
     * @param request - CreateImageLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageLibResponse
     *
     * @param CreateImageLibRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateImageLibResponse
     */
    public function createImageLibWithOptions($request, $runtime)
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
            'action' => 'CreateImageLib',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageLibResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an image library.
     *
     * @remarks
     * Before using this operation, complete the following steps:
     * 1. [Activate Content Moderation Enhanced Edition](https://common-buy.aliyun.com/?commodityCode=lvwang_cip_public_cn).
     * 2. Understand the [billing methods and pricing](https://help.aliyun.com/document_detail/467826.html?#section-h06-qz6-1pt) of Image Moderation Enhanced Edition.
     * 3. For more information about API operations and parameters, see [API reference](https://help.aliyun.com/document_detail/467829.html).
     *
     * @param request - CreateImageLibRequest
     *
     * @returns CreateImageLibResponse
     *
     * @param CreateImageLibRequest $request
     *
     * @return CreateImageLibResponse
     */
    public function createImageLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageLibWithOptions($request, $runtime);
    }

    /**
     * Creates an online detection task.
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
     * Creates an online detection task.
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
     * Performs a pre-check before creating an OSS scan task.
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
        if (null !== $request->bucketPrefixFilterConfig) {
            @$body['BucketPrefixFilterConfig'] = $request->bucketPrefixFilterConfig;
        }

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
     * Performs a pre-check before creating an OSS scan task.
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
     * Deletes a proxy answer library.
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
     * Deletes a proxy answer library.
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
     * Deletes proxy answers.
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
     * Deletes proxy answers.
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
     * Deletes an agent configuration.
     *
     * @param request - DeleteAppAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppAgentResponse
     *
     * @param DeleteAppAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAppAgentResponse
     */
    public function deleteAppAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

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
            'action' => 'DeleteAppAgent',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an agent configuration.
     *
     * @param request - DeleteAppAgentRequest
     *
     * @returns DeleteAppAgentResponse
     *
     * @param DeleteAppAgentRequest $request
     *
     * @return DeleteAppAgentResponse
     */
    public function deleteAppAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppAgentWithOptions($request, $runtime);
    }

    /**
     * Deletes a message notification.
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
     * Deletes a message notification.
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
     * Deletes images in batches.
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
     * Deletes images in batches.
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
     * Deletes keywords.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Deletes keywords.
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
     * Deletes a keyword library.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Deletes a keyword library.
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
     * Deletes an online detection task.
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
     * Deletes an online detection task.
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
     * Queries the detection results of online moderation.
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
     * Queries the detection results of online moderation.
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
     * Retrieves OSS moderation results v2.
     *
     * @remarks
     * API operation is used together with the Image Moderation Enhanced API. After you call the Image Moderation Enhanced API, you can call API operation to obtain more moderation information. API operation is free of charge.
     *
     * @param request - DescribeOssV2ResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssV2ResultResponse
     *
     * @param DescribeOssV2ResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOssV2ResultResponse
     */
    public function describeOssV2ResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssV2Result',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssV2ResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves OSS moderation results v2.
     *
     * @remarks
     * API operation is used together with the Image Moderation Enhanced API. After you call the Image Moderation Enhanced API, you can call API operation to obtain more moderation information. API operation is free of charge.
     *
     * @param request - DescribeOssV2ResultRequest
     *
     * @returns DescribeOssV2ResultResponse
     *
     * @param DescribeOssV2ResultRequest $request
     *
     * @return DescribeOssV2ResultResponse
     */
    public function describeOssV2Result($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssV2ResultWithOptions($request, $runtime);
    }

    /**
     * Exports proxy answer responses.
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
     * Exports proxy answer responses.
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
     * Exports call usage statistics.
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
     * Exports call usage statistics.
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
     * Exports keywords.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Exports keywords.
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
     * Exports OSS usage statistics.
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
     * Exports OSS usage statistics.
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
     * Exports OSS scan results.
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
     * Exports OSS scan results.
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
     * Exports call results as an Excel file.
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
     * Exports call results as an Excel file.
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
     * Exports call results as an Excel file.
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
     * Exports call results as an Excel file.
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
     * Retrieves the details of an AI application.
     *
     * @param request - GetAiAppDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppDetailResponse
     *
     * @param GetAiAppDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAiAppDetailResponse
     */
    public function getAiAppDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppDetail',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an AI application.
     *
     * @param request - GetAiAppDetailRequest
     *
     * @returns GetAiAppDetailResponse
     *
     * @param GetAiAppDetailRequest $request
     *
     * @return GetAiAppDetailResponse
     */
    public function getAiAppDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves statistics for the details of an AI application.
     *
     * @param request - GetAiAppDetailStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppDetailStatResponse
     *
     * @param GetAiAppDetailStatRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiAppDetailStatResponse
     */
    public function getAiAppDetailStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppDetailStat',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppDetailStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves statistics for the details of an AI application.
     *
     * @param request - GetAiAppDetailStatRequest
     *
     * @returns GetAiAppDetailStatResponse
     *
     * @param GetAiAppDetailStatRequest $request
     *
     * @return GetAiAppDetailStatResponse
     */
    public function getAiAppDetailStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppDetailStatWithOptions($request, $runtime);
    }

    /**
     * Retrieves the topology of an AI application.
     *
     * @param tmpReq - GetAiAppDetailTopoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppDetailTopoResponse
     *
     * @param GetAiAppDetailTopoRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiAppDetailTopoResponse
     */
    public function getAiAppDetailTopoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAiAppDetailTopoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->timeQuery) {
            $request->timeQueryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timeQuery, 'TimeQuery', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->timeQueryShrink) {
            @$query['TimeQuery'] = $request->timeQueryShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppDetailTopo',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppDetailTopoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the topology of an AI application.
     *
     * @param request - GetAiAppDetailTopoRequest
     *
     * @returns GetAiAppDetailTopoResponse
     *
     * @param GetAiAppDetailTopoRequest $request
     *
     * @return GetAiAppDetailTopoResponse
     */
    public function getAiAppDetailTopo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppDetailTopoWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an application node in the agent topology.
     *
     * @param request - GetAiAppNodeDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppNodeDetailResponse
     *
     * @param GetAiAppNodeDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAiAppNodeDetailResponse
     */
    public function getAiAppNodeDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->nodeName) {
            @$query['NodeName'] = $request->nodeName;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppNodeDetail',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppNodeDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an application node in the agent topology.
     *
     * @param request - GetAiAppNodeDetailRequest
     *
     * @returns GetAiAppNodeDetailResponse
     *
     * @param GetAiAppNodeDetailRequest $request
     *
     * @return GetAiAppNodeDetailResponse
     */
    public function getAiAppNodeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppNodeDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves the overview information of AI applications.
     *
     * @param request - GetAiAppOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppOverviewResponse
     *
     * @param GetAiAppOverviewRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAiAppOverviewResponse
     */
    public function getAiAppOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppOverview',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the overview information of AI applications.
     *
     * @param request - GetAiAppOverviewRequest
     *
     * @returns GetAiAppOverviewResponse
     *
     * @param GetAiAppOverviewRequest $request
     *
     * @return GetAiAppOverviewResponse
     */
    public function getAiAppOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppOverviewWithOptions($request, $runtime);
    }

    /**
     * Retrieves statistics for AI application risk reports.
     *
     * @param request - GetAiAppStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppStatsResponse
     *
     * @param GetAiAppStatsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAiAppStatsResponse
     */
    public function getAiAppStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->byMonth) {
            @$query['ByMonth'] = $request->byMonth;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppStats',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves statistics for AI application risk reports.
     *
     * @param request - GetAiAppStatsRequest
     *
     * @returns GetAiAppStatsResponse
     *
     * @param GetAiAppStatsRequest $request
     *
     * @return GetAiAppStatsResponse
     */
    public function getAiAppStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppStatsWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an app alert.
     *
     * @param request - GetAiAppTraceDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiAppTraceDetailResponse
     *
     * @param GetAiAppTraceDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAiAppTraceDetailResponse
     */
    public function getAiAppTraceDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->traceId) {
            @$query['TraceId'] = $request->traceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiAppTraceDetail',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiAppTraceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an app alert.
     *
     * @param request - GetAiAppTraceDetailRequest
     *
     * @returns GetAiAppTraceDetailResponse
     *
     * @param GetAiAppTraceDetailRequest $request
     *
     * @return GetAiAppTraceDetailResponse
     */
    public function getAiAppTraceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiAppTraceDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves the import progress of proxy answer samples.
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
     * Retrieves the import progress of proxy answer samples.
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
     * Queries the details of an App configuration.
     *
     * @param request - GetAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAppConfigResponse
     *
     * @param GetAppConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAppConfigResponse
     */
    public function getAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

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
            'action' => 'GetAppConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an App configuration.
     *
     * @param request - GetAppConfigRequest
     *
     * @returns GetAppConfigResponse
     *
     * @param GetAppConfigRequest $request
     *
     * @return GetAppConfigResponse
     */
    public function getAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of user buckets for evidence dumping.
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
     * Retrieves the list of user buckets for evidence dumping.
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
     * Verifies user authorization.
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
     * Verifies user authorization.
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
     * Lists buckets.
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
     * Lists buckets.
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
     * Queries the call volume statistics.
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
        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

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
     * Queries the call volume statistics.
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
     * Retrieves the estimated execution time of a scheduled task.
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
     * Retrieves the estimated execution time of a scheduled task.
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
     * Retrieves feature configurations.
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
     * Retrieves feature configurations.
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
     * Retrieves log statistics for AI security guardrails.
     *
     * @param request - GetGuardLogStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGuardLogStatsResponse
     *
     * @param GetGuardLogStatsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetGuardLogStatsResponse
     */
    public function getGuardLogStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGuardLogStats',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGuardLogStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves log statistics for AI security guardrails.
     *
     * @param request - GetGuardLogStatsRequest
     *
     * @returns GetGuardLogStatsResponse
     *
     * @param GetGuardLogStatsRequest $request
     *
     * @return GetGuardLogStatsResponse
     */
    public function getGuardLogStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGuardLogStatsWithOptions($request, $runtime);
    }

    /**
     * Retrieves statistics information on AI application protection data.
     *
     * @param request - GetGuardStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGuardStatusResponse
     *
     * @param GetGuardStatusRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetGuardStatusResponse
     */
    public function getGuardStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGuardStatus',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGuardStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves statistics information on AI application protection data.
     *
     * @param request - GetGuardStatusRequest
     *
     * @returns GetGuardStatusResponse
     *
     * @param GetGuardStatusRequest $request
     *
     * @return GetGuardStatusResponse
     */
    public function getGuardStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGuardStatusWithOptions($request, $runtime);
    }

    /**
     * Retrieves image rule tag information.
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
     * Retrieves image rule tag information.
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
     * Retrieves image rule tag information.
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
     * Retrieves image rule tag information.
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
     * Queries the scheduled scan detection cycle for OSS.
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
     * Queries the scheduled scan detection cycle for OSS.
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
     * Queries the result of a keyword import task.
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
     * Queries the result of a keyword import task.
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
     * Retrieves keyword library information.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Retrieves keyword library information.
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
     * Queries the results of OSS scan and freeze operations.
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
     * Queries the results of OSS scan and freeze operations.
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
     * Retrieves the detailed information of OSS check results.
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
     * Retrieves the detailed information of OSS check results.
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
     * Queries OSS usage statistics.
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
     * Queries OSS usage statistics.
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
     * Retrieves the OSS detection user status.
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
     * Retrieves the OSS detection user status.
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
     * Queries the details of an OSS scan task.
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
     * Queries the details of an OSS scan task.
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
     * Tests the attribute configuration.
     *
     * @param request - GetPromptTestResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPromptTestResultResponse
     *
     * @param GetPromptTestResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPromptTestResultResponse
     */
    public function getPromptTestResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceCode) {
            @$query['ServiceCode'] = $request->serviceCode;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPromptTestResult',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPromptTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests the attribute configuration.
     *
     * @param request - GetPromptTestResultRequest
     *
     * @returns GetPromptTestResultResponse
     *
     * @param GetPromptTestResultRequest $request
     *
     * @return GetPromptTestResultResponse
     */
    public function getPromptTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPromptTestResultWithOptions($request, $runtime);
    }

    /**
     * Queries QPS statistics information.
     *
     * @param request - GetQpsStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQpsStatsResponse
     *
     * @param GetQpsStatsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetQpsStatsResponse
     */
    public function getQpsStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQpsStats',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQpsStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries QPS statistics information.
     *
     * @param request - GetQpsStatsRequest
     *
     * @returns GetQpsStatsResponse
     *
     * @param GetQpsStatsRequest $request
     *
     * @return GetQpsStatsResponse
     */
    public function getQpsStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQpsStatsWithOptions($request, $runtime);
    }

    /**
     * Queries risk posture statistics.
     *
     * @param request - GetRiskStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRiskStatsResponse
     *
     * @param GetRiskStatsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRiskStatsResponse
     */
    public function getRiskStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRiskStats',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRiskStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries risk posture statistics.
     *
     * @param request - GetRiskStatsRequest
     *
     * @returns GetRiskStatsResponse
     *
     * @param GetRiskStatsRequest $request
     *
     * @return GetRiskStatsResponse
     */
    public function getRiskStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRiskStatsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about files pending detection for a user.
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
     * Queries the information about files pending detection for a user.
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
     * Queries the detection results.
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
     * Queries the detection results.
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
     * Get a Single Service.
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
     * Get a Single Service.
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
     * Retrieves a single service.
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
     * Retrieves a single service.
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
     * Retrieves the tag configuration of a single service.
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
     * Retrieves the tag configuration of a single service.
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
     * Queries the list of OSS scan tasks.
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
     * Queries the list of OSS scan tasks.
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
     * Queries the call results.
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
     * Queries the call results.
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
     * Retrieves tuning suggestions for switch configurations.
     *
     * @remarks
     * API operation is used together with the enhanced image moderation API. After you call the enhanced image moderation API, call API operation to retrieve additional detection information. API operation is free of charge.
     *
     * @param request - GetTuneProposalByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTuneProposalByIdResponse
     *
     * @param GetTuneProposalByIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetTuneProposalByIdResponse
     */
    public function getTuneProposalByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTuneProposalById',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTuneProposalByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves tuning suggestions for switch configurations.
     *
     * @remarks
     * API operation is used together with the enhanced image moderation API. After you call the enhanced image moderation API, call API operation to retrieve additional detection information. API operation is free of charge.
     *
     * @param request - GetTuneProposalByIdRequest
     *
     * @returns GetTuneProposalByIdResponse
     *
     * @param GetTuneProposalByIdRequest $request
     *
     * @return GetTuneProposalByIdResponse
     */
    public function getTuneProposalById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTuneProposalByIdWithOptions($request, $runtime);
    }

    /**
     * Retrieves the text content of an uploaded file.
     *
     * @param request - GetUploadContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadContentResponse
     *
     * @param GetUploadContentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetUploadContentResponse
     */
    public function getUploadContentWithOptions($request, $runtime)
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
            'action' => 'GetUploadContent',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUploadContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the text content of an uploaded file.
     *
     * @param request - GetUploadContentRequest
     *
     * @returns GetUploadContentResponse
     *
     * @param GetUploadContentRequest $request
     *
     * @return GetUploadContentResponse
     */
    public function getUploadContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadContentWithOptions($request, $runtime);
    }

    /**
     * Retrieves the relevant information for file upload.
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
     * Retrieves the relevant information for file upload.
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
     * Retrieves an upload URL.
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
     * Retrieves an upload URL.
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
     * Retrieves the purchase status of a user.
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
     * Retrieves the purchase status of a user.
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
     * Initializes AI application log scanning and activates the service.
     *
     * @param request - InitAiAppScanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitAiAppScanResponse
     *
     * @param InitAiAppScanRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return InitAiAppScanResponse
     */
    public function initAiAppScanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitAiAppScan',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitAiAppScanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes AI application log scanning and activates the service.
     *
     * @param request - InitAiAppScanRequest
     *
     * @returns InitAiAppScanResponse
     *
     * @param InitAiAppScanRequest $request
     *
     * @return InitAiAppScanResponse
     */
    public function initAiAppScan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initAiAppScanWithOptions($request, $runtime);
    }

    /**
     * Retrieves a paginated list of AI applications.
     *
     * @param request - ListAiAppByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiAppByPageResponse
     *
     * @param ListAiAppByPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAiAppByPageResponse
     */
    public function listAiAppByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiAppByPage',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAiAppByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of AI applications.
     *
     * @param request - ListAiAppByPageRequest
     *
     * @returns ListAiAppByPageResponse
     *
     * @param ListAiAppByPageRequest $request
     *
     * @return ListAiAppByPageResponse
     */
    public function listAiAppByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiAppByPageWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of risk events for an AI application.
     *
     * @param request - ListAiAppRiskEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiAppRiskEventResponse
     *
     * @param ListAiAppRiskEventRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAiAppRiskEventResponse
     */
    public function listAiAppRiskEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiAppRiskEvent',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAiAppRiskEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of risk events for an AI application.
     *
     * @param request - ListAiAppRiskEventRequest
     *
     * @returns ListAiAppRiskEventResponse
     *
     * @param ListAiAppRiskEventRequest $request
     *
     * @return ListAiAppRiskEventResponse
     */
    public function listAiAppRiskEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiAppRiskEventWithOptions($request, $runtime);
    }

    /**
     * Retrieves a paginated list of risk events for AI applications.
     *
     * @param request - ListAiAppRiskEventByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiAppRiskEventByPageResponse
     *
     * @param ListAiAppRiskEventByPageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAiAppRiskEventByPageResponse
     */
    public function listAiAppRiskEventByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiAppRiskEventByPage',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAiAppRiskEventByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a paginated list of risk events for AI applications.
     *
     * @param request - ListAiAppRiskEventByPageRequest
     *
     * @returns ListAiAppRiskEventByPageResponse
     *
     * @param ListAiAppRiskEventByPageRequest $request
     *
     * @return ListAiAppRiskEventByPageResponse
     */
    public function listAiAppRiskEventByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiAppRiskEventByPageWithOptions($request, $runtime);
    }

    /**
     * Queries the alert list of an application with pagination.
     *
     * @param request - ListAiAppWarningByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiAppWarningByPageResponse
     *
     * @param ListAiAppWarningByPageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAiAppWarningByPageResponse
     */
    public function listAiAppWarningByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiAppWarningByPage',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAiAppWarningByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alert list of an application with pagination.
     *
     * @param request - ListAiAppWarningByPageRequest
     *
     * @returns ListAiAppWarningByPageResponse
     *
     * @param ListAiAppWarningByPageRequest $request
     *
     * @return ListAiAppWarningByPageResponse
     */
    public function listAiAppWarningByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiAppWarningByPageWithOptions($request, $runtime);
    }

    /**
     * Queries the list of proxy answer libraries.
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
     * Queries the list of proxy answer libraries.
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
     * Retrieves the historical versions of an app.
     *
     * @param request - ListAppConfigHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppConfigHistoryResponse
     *
     * @param ListAppConfigHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppConfigHistoryResponse
     */
    public function listAppConfigHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

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
            'action' => 'ListAppConfigHistory',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the historical versions of an app.
     *
     * @param request - ListAppConfigHistoryRequest
     *
     * @returns ListAppConfigHistoryResponse
     *
     * @param ListAppConfigHistoryRequest $request
     *
     * @return ListAppConfigHistoryResponse
     */
    public function listAppConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of app configurations.
     *
     * @param request - ListAppConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppConfigsResponse
     *
     * @param ListAppConfigsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAppConfigsResponse
     */
    public function listAppConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
        }

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
            'action' => 'ListAppConfigs',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of app configurations.
     *
     * @param request - ListAppConfigsRequest
     *
     * @returns ListAppConfigsResponse
     *
     * @param ListAppConfigsRequest $request
     *
     * @return ListAppConfigsResponse
     */
    public function listAppConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of message notifications.
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
     * Queries the list of message notifications.
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
     * Queries the list of image libraries.
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

        $body = [];
        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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
     * Queries the list of image libraries.
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
     * Queries a paginated list of images.
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
     * Queries a paginated list of images.
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
     * Queries the list of keyword libraries.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Queries the list of keyword libraries.
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
     * Queries a list of keywords.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Queries a list of keywords.
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
     * Queries OSS scan results.
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
     * Queries OSS scan results.
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
     * Retrieves the service list.
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

        if (null !== $request->protectionType) {
            @$query['ProtectionType'] = $request->protectionType;
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
     * Retrieves the service list.
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
     * Calls a large language model in streaming mode using the SSE interface.
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
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield LlmStreamChatResponse::fromMap([
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
     * Calls a large language model in streaming mode using the SSE interface.
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
     * Calls a large language model in streaming mode using the SSE interface.
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
     * Provides feedback on OSS detection results.
     *
     * @remarks
     * This operation is not billed. Set the polling interval to 30 seconds (query results 30 seconds after submitting an asynchronous detection task). The maximum interval cannot exceed 24 hours. Otherwise, results are automatically deleted.
     *
     * @param request - MarkOssV2ResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MarkOssV2ResultResponse
     *
     * @param MarkOssV2ResultRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MarkOssV2ResultResponse
     */
    public function markOssV2ResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->freezeType) {
            @$query['FreezeType'] = $request->freezeType;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->requestIds) {
            @$query['RequestIds'] = $request->requestIds;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MarkOssV2Result',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MarkOssV2ResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides feedback on OSS detection results.
     *
     * @remarks
     * This operation is not billed. Set the polling interval to 30 seconds (query results 30 seconds after submitting an asynchronous detection task). The maximum interval cannot exceed 24 hours. Otherwise, results are automatically deleted.
     *
     * @param request - MarkOssV2ResultRequest
     *
     * @returns MarkOssV2ResultResponse
     *
     * @param MarkOssV2ResultRequest $request
     *
     * @return MarkOssV2ResultResponse
     */
    public function markOssV2Result($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->markOssV2ResultWithOptions($request, $runtime);
    }

    /**
     * Updates a proxy response library.
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
     * Updates a proxy response library.
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
     * Modifies the agent configuration.
     *
     * @param request - ModifyAppAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppAgentResponse
     *
     * @param ModifyAppAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyAppAgentResponse
     */
    public function modifyAppAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$body['AgentName'] = $request->agentName;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->enable) {
            @$body['Enable'] = $request->enable;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyAppAgent',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the agent configuration.
     *
     * @param request - ModifyAppAgentRequest
     *
     * @returns ModifyAppAgentResponse
     *
     * @param ModifyAppAgentRequest $request
     *
     * @return ModifyAppAgentResponse
     */
    public function modifyAppAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppAgentWithOptions($request, $runtime);
    }

    /**
     * Modifies app information.
     *
     * @param request - ModifyAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAppInfoResponse
     *
     * @param ModifyAppInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyAppInfoResponse
     */
    public function modifyAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

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
            'action' => 'ModifyAppInfo',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies app information.
     *
     * @param request - ModifyAppInfoRequest
     *
     * @returns ModifyAppInfoResponse
     *
     * @param ModifyAppInfoRequest $request
     *
     * @return ModifyAppInfoResponse
     */
    public function modifyAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInfoWithOptions($request, $runtime);
    }

    /**
     * Modifies a message notification.
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
     * Modifies a message notification.
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
     * Saves an attribute configuration.
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
     * Saves an attribute configuration.
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
     * Edits a service.
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
     * Edits a service.
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
     * Retrieves the list of OSS detection results.
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
     * Retrieves the list of OSS detection results.
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
     * Saves and publishes app configurations.
     *
     * @param request - PublishAppConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishAppConfigResponse
     *
     * @param PublishAppConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PublishAppConfigResponse
     */
    public function publishAppConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

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
            'action' => 'PublishAppConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Saves and publishes app configurations.
     *
     * @param request - PublishAppConfigRequest
     *
     * @returns PublishAppConfigResponse
     *
     * @param PublishAppConfigRequest $request
     *
     * @return PublishAppConfigResponse
     */
    public function publishAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishAppConfigWithOptions($request, $runtime);
    }

    /**
     * Queries proxy answer samples by paging.
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
     * Queries proxy answer samples by paging.
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
     * Queries a single callback configuration.
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
     * Queries a single callback configuration.
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
     * Queries the list of message notifications by paging.
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
     * Queries the list of message notifications by paging.
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
     * Queries label configurations.
     *
     * @param request - QueryLabelConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLabelConfigResponse
     *
     * @param QueryLabelConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryLabelConfigResponse
     */
    public function queryLabelConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryLabelConfig',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryLabelConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries label configurations.
     *
     * @param request - QueryLabelConfigRequest
     *
     * @returns QueryLabelConfigResponse
     *
     * @param QueryLabelConfigRequest $request
     *
     * @return QueryLabelConfigResponse
     */
    public function queryLabelConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLabelConfigWithOptions($request, $runtime);
    }

    /**
     * Reverts an app to a historical version.
     *
     * @param request - RecoverAppConfigHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverAppConfigHistoryResponse
     *
     * @param RecoverAppConfigHistoryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RecoverAppConfigHistoryResponse
     */
    public function recoverAppConfigHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

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
            'action' => 'RecoverAppConfigHistory',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverAppConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reverts an app to a historical version.
     *
     * @param request - RecoverAppConfigHistoryRequest
     *
     * @returns RecoverAppConfigHistoryResponse
     *
     * @param RecoverAppConfigHistoryRequest $request
     *
     * @return RecoverAppConfigHistoryResponse
     */
    public function recoverAppConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverAppConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * Aborts an online detection task.
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
     * Aborts an online detection task.
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
     * Updates the scan status of AI applications.
     *
     * @param request - UpdateAiAppScanStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiAppScanStatusResponse
     *
     * @param UpdateAiAppScanStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAiAppScanStatusResponse
     */
    public function updateAiAppScanStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAiAppScanStatus',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAiAppScanStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the scan status of AI applications.
     *
     * @param request - UpdateAiAppScanStatusRequest
     *
     * @returns UpdateAiAppScanStatusResponse
     *
     * @param UpdateAiAppScanStatusRequest $request
     *
     * @return UpdateAiAppScanStatusResponse
     */
    public function updateAiAppScanStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAiAppScanStatusWithOptions($request, $runtime);
    }

    /**
     * Updates the evidence transfer configuration.
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
     * Updates the evidence transfer configuration.
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
     * Updates the status of risk events.
     *
     * @param tmpReq - UpdateEventStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEventStatusResponse
     *
     * @param UpdateEventStatusRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEventStatusResponse
     */
    public function updateEventStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEventStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventIds) {
            $request->eventIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventIds, 'EventIds', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->eventIdsShrink) {
            @$query['EventIds'] = $request->eventIdsShrink;
        }

        if (null !== $request->operationCode) {
            @$query['OperationCode'] = $request->operationCode;
        }

        if (null !== $request->operationParams) {
            @$query['OperationParams'] = $request->operationParams;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEventStatus',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of risk events.
     *
     * @param request - UpdateEventStatusRequest
     *
     * @returns UpdateEventStatusResponse
     *
     * @param UpdateEventStatusRequest $request
     *
     * @return UpdateEventStatusResponse
     */
    public function updateEventStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventStatusWithOptions($request, $runtime);
    }

    /**
     * Edits an image library.
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
     * Edits an image library.
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
     * Edits the inspection-exempt configuration of an image library.
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

        if (null !== $request->serviceCode) {
            @$body['ServiceCode'] = $request->serviceCode;
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
     * Edits the inspection-exempt configuration of an image library.
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
     * Edits a keyword library.
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

        if (null !== $request->tenantCode) {
            @$query['TenantCode'] = $request->tenantCode;
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
     * Edits a keyword library.
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
     * Updates Meta log information.
     *
     * @param request - UpdateMetaLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMetaLogResponse
     *
     * @param UpdateMetaLogRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateMetaLogResponse
     */
    public function updateMetaLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->deliveryRegion) {
            @$query['DeliveryRegion'] = $request->deliveryRegion;
        }

        if (null !== $request->storage) {
            @$query['Storage'] = $request->storage;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMetaLog',
            'version' => '2022-09-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMetaLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates Meta log information.
     *
     * @param request - UpdateMetaLogRequest
     *
     * @returns UpdateMetaLogResponse
     *
     * @param UpdateMetaLogRequest $request
     *
     * @return UpdateMetaLogResponse
     */
    public function updateMetaLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMetaLogWithOptions($request, $runtime);
    }

    /**
     * Updates OSS detection result feedback in batches.
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
     * Updates OSS detection result feedback in batches.
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
     * Updates the feedback for OSS detection results.
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
     * Updates the feedback for OSS detection results.
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
     * Freezes OSS scan results in batches.
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
     * Freezes OSS scan results in batches.
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
     * Unfreezes OSS detection results in batches.
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
     * Unfreezes OSS detection results in batches.
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
     * Submits feedback on detection results.
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
     * Submits feedback on detection results.
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
     * Updates a service.
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
     * Updates a service.
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
