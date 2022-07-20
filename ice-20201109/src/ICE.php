<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddFavoritePublicMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddFavoritePublicMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelFavoritePublicMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelFavoritePublicMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelUrlUploadJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelUrlUploadJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAuditRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAuditResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadStreamRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadStreamResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaProducingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaProducingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePlayInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePlayInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeBizUserTypeRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeBizUserTypeResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeFilterConfigsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeFilterConfigsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubExperienceMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubExperienceMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubExperienceMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubExperienceMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLiveSubMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceEditUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceEditUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceLiveMediaConvertUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceLiveMediaConvertUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceMediaConvertUHDUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceMediaConvertUHDUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceMediaConvertUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceMediaConvertUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceMpsAiUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceMpsAiUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceSummaryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterIceSummaryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyDetailRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyDetailResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyEventListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyEventListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePalyListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayExperienceMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayExperienceMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayFirstFrameDurationMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayFirstFrameDurationMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayMetricDataRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayMetricDataResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQoeListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQoeListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQosListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayQosListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeQueryConfigsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeQueryConfigsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DownloadResourceByResourceIdsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DownloadResourceByResourceIdsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAuditConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAuditConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetClientConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetClientConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDefaultStorageLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDynamicImageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetEventCallbackResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingIndexFileRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingIndexFileResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultDetailRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultDetailResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotUrlsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotUrlsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\NotifyPreOssUploadCompleteRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\NotifyPreOssUploadCompleteResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RefreshUploadMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RefreshUploadMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaStreamRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaStreamResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveTranscodeJobCommandRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveTranscodeJobCommandResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetAuditConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetAuditConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetClientConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetClientConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultStorageLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultStorageLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetEventCallbackRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetEventCallbackResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAudioProduceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAudioProduceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitBatchMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitBatchMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicChartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicChartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveEditingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveEditingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSubtitleProduceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSubtitleProduceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSmartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadStreamByURLRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadStreamByURLResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ICE extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->_endpointMap        = [
            'ap-northeast-1'              => 'ice.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ice.aliyuncs.com',
            'ap-south-1'                  => 'ice.aliyuncs.com',
            'ap-southeast-1'              => 'ice.aliyuncs.com',
            'ap-southeast-2'              => 'ice.aliyuncs.com',
            'ap-southeast-3'              => 'ice.aliyuncs.com',
            'ap-southeast-5'              => 'ice.aliyuncs.com',
            'cn-beijing'                  => 'ice.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ice.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ice.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ice.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ice.aliyuncs.com',
            'cn-chengdu'                  => 'ice.aliyuncs.com',
            'cn-edge-1'                   => 'ice.aliyuncs.com',
            'cn-fujian'                   => 'ice.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ice.aliyuncs.com',
            'cn-hangzhou'                 => 'ice.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ice.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ice.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ice.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ice.aliyuncs.com',
            'cn-hongkong'                 => 'ice.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ice.aliyuncs.com',
            'cn-huhehaote'                => 'ice.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ice.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ice.aliyuncs.com',
            'cn-qingdao'                  => 'ice.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ice.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ice.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ice.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ice.aliyuncs.com',
            'cn-shanghai-inner'           => 'ice.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ice.aliyuncs.com',
            'cn-shenzhen'                 => 'ice.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ice.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ice.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ice.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ice.aliyuncs.com',
            'cn-wuhan'                    => 'ice.aliyuncs.com',
            'cn-wulanchabu'               => 'ice.aliyuncs.com',
            'cn-yushanfang'               => 'ice.aliyuncs.com',
            'cn-zhangbei'                 => 'ice.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ice.aliyuncs.com',
            'cn-zhangjiakou'              => 'ice.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ice.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ice.aliyuncs.com',
            'eu-central-1'                => 'ice.aliyuncs.com',
            'eu-west-1'                   => 'ice.aliyuncs.com',
            'eu-west-1-oxs'               => 'ice.aliyuncs.com',
            'me-east-1'                   => 'ice.aliyuncs.com',
            'rus-west-1-pop'              => 'ice.aliyuncs.com',
            'us-east-1'                   => 'ice.aliyuncs.com',
            'us-west-1'                   => 'ice.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddCategoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCategory',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCategoryRequest $request
     *
     * @return AddCategoryResponse
     */
    public function addCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @param AddEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->materialMaps)) {
            $query['MaterialMaps'] = $request->materialMaps;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEditingProjectMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddEditingProjectMaterialsRequest $request
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param AddFavoritePublicMediaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFavoritePublicMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFavoritePublicMediaRequest $request
     *
     * @return AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @param AddTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTemplateResponse
     */
    public function addTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->coverUrl)) {
            $query['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->previewMedia)) {
            $query['PreviewMedia'] = $request->previewMedia;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddTemplateRequest $request
     *
     * @return AddTemplateResponse
     */
    public function addTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BatchGetMediaInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionType)) {
            $query['AdditionType'] = $request->additionType;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchGetMediaInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchGetMediaInfosRequest $request
     *
     * @return BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @param CancelFavoritePublicMediaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelFavoritePublicMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelFavoritePublicMediaRequest $request
     *
     * @return CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @param CancelUrlUploadJobsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->uploadUrls)) {
            $query['UploadUrls'] = $request->uploadUrls;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelUrlUploadJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelUrlUploadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelUrlUploadJobsRequest $request
     *
     * @return CancelUrlUploadJobsResponse
     */
    public function cancelUrlUploadJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUrlUploadJobsWithOptions($request, $runtime);
    }

    /**
     * @param CreateAuditRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAuditResponse
     */
    public function createAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->auditContent)) {
            $query['AuditContent'] = $request->auditContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAudit',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAuditRequest $request
     *
     * @return CreateAuditResponse
     */
    public function createAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @param CreateCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCustomTemplateResponse
     */
    public function createCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCustomTemplateRequest $request
     *
     * @return CreateCustomTemplateResponse
     */
    public function createCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEditingProjectResponse
     */
    public function createEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessConfig)) {
            $query['BusinessConfig'] = $request->businessConfig;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->materialMaps)) {
            $query['MaterialMaps'] = $request->materialMaps;
        }
        if (!Utils::isUnset($request->projectType)) {
            $query['ProjectType'] = $request->projectType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->timeline)) {
            $query['Timeline'] = $request->timeline;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEditingProject',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEditingProjectRequest $request
     *
     * @return CreateEditingProjectResponse
     */
    public function createEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateLiveRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveRecordTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordFormat)) {
            $request->recordFormatShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordFormat, 'RecordFormat', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recordFormatShrink)) {
            $body['RecordFormat'] = $request->recordFormatShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveRecordTemplateRequest $request
     *
     * @return CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadMediaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadMediaResponse
     */
    public function createUploadMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->fileInfo)) {
            $query['FileInfo'] = $request->fileInfo;
        }
        if (!Utils::isUnset($request->mediaMetaData)) {
            $query['MediaMetaData'] = $request->mediaMetaData;
        }
        if (!Utils::isUnset($request->postProcessConfig)) {
            $query['PostProcessConfig'] = $request->postProcessConfig;
        }
        if (!Utils::isUnset($request->uploadTargetConfig)) {
            $query['UploadTargetConfig'] = $request->uploadTargetConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUploadMediaRequest $request
     *
     * @return CreateUploadMediaResponse
     */
    public function createUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @param CreateUploadStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateUploadStreamResponse
     */
    public function createUploadStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->fileExtension)) {
            $query['FileExtension'] = $request->fileExtension;
        }
        if (!Utils::isUnset($request->HDRType)) {
            $query['HDRType'] = $request->HDRType;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUploadStream',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUploadStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUploadStreamRequest $request
     *
     * @return CreateUploadStreamResponse
     */
    public function createUploadStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadStreamWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCategory',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCategoryRequest $request
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCustomTemplateRequest $request
     *
     * @return DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->materialIds)) {
            $query['MaterialIds'] = $request->materialIds;
        }
        if (!Utils::isUnset($request->materialType)) {
            $query['MaterialType'] = $request->materialType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEditingProjectMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEditingProjectMaterialsRequest $request
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEditingProjectsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEditingProjectsResponse
     */
    public function deleteEditingProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectIds)) {
            $query['ProjectIds'] = $request->projectIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEditingProjects',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEditingProjectsRequest $request
     *
     * @return DeleteEditingProjectsResponse
     */
    public function deleteEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveTranscodeJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveTranscodeJobRequest $request
     *
     * @return DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveTranscodeTemplateRequest $request
     *
     * @return DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMediaInfosResponse
     */
    public function deleteMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURLs)) {
            $query['InputURLs'] = $request->inputURLs;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMediaInfosRequest $request
     *
     * @return DeleteMediaInfosResponse
     */
    public function deleteMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMediaProducingJobsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMediaProducingJobsResponse
     */
    public function deleteMediaProducingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobIds)) {
            $body['JobIds'] = $request->jobIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaProducingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMediaProducingJobsRequest $request
     *
     * @return DeleteMediaProducingJobsResponse
     */
    public function deleteMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * @param DeletePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePipelineRequest $request
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineWithOptions($request, $runtime);
    }

    /**
     * @param DeletePlayInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlayInfoResponse
     */
    public function deletePlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileURLs)) {
            $query['FileURLs'] = $request->fileURLs;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePlayInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePlayInfoRequest $request
     *
     * @return DeletePlayInfoResponse
     */
    public function deletePlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSmartJobResponse
     */
    public function deleteSmartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmartJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSmartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSmartJobRequest $request
     *
     * @return DeleteSmartJobResponse
     */
    public function deleteSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBizUserTypeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBizUserTypeResponse
     */
    public function describeBizUserTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBizUserType',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBizUserTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBizUserTypeRequest $request
     *
     * @return DescribeBizUserTypeResponse
     */
    public function describeBizUserType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBizUserTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFilterConfigsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFilterConfigsResponse
     */
    public function describeFilterConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFilterConfigs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFilterConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFilterConfigsRequest $request
     *
     * @return DescribeFilterConfigsResponse
     */
    public function describeFilterConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFilterConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLivePubExperienceMetricDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeLivePubExperienceMetricDataResponse
     */
    public function describeLivePubExperienceMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pubProtocol)) {
            $query['PubProtocol'] = $request->pubProtocol;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLivePubExperienceMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLivePubExperienceMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLivePubExperienceMetricDataRequest $request
     *
     * @return DescribeLivePubExperienceMetricDataResponse
     */
    public function describeLivePubExperienceMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLivePubExperienceMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLivePubListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLivePubListResponse
     */
    public function describeLivePubListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pubProtocol)) {
            $query['PubProtocol'] = $request->pubProtocol;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLivePubList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLivePubListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLivePubListRequest $request
     *
     * @return DescribeLivePubListResponse
     */
    public function describeLivePubList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLivePubListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLivePubMetricDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLivePubMetricDataResponse
     */
    public function describeLivePubMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->experienceLevel)) {
            $query['ExperienceLevel'] = $request->experienceLevel;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pubProtocol)) {
            $query['PubProtocol'] = $request->pubProtocol;
        }
        if (!Utils::isUnset($request->sdkVersion)) {
            $query['SdkVersion'] = $request->sdkVersion;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLivePubMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLivePubMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLivePubMetricDataRequest $request
     *
     * @return DescribeLivePubMetricDataResponse
     */
    public function describeLivePubMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLivePubMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveSubExperienceMetricDataRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeLiveSubExperienceMetricDataResponse
     */
    public function describeLiveSubExperienceMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->experienceLevel)) {
            $query['ExperienceLevel'] = $request->experienceLevel;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->subProtocol)) {
            $query['SubProtocol'] = $request->subProtocol;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveSubExperienceMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveSubExperienceMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveSubExperienceMetricDataRequest $request
     *
     * @return DescribeLiveSubExperienceMetricDataResponse
     */
    public function describeLiveSubExperienceMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveSubExperienceMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveSubListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeLiveSubListResponse
     */
    public function describeLiveSubListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->experienceLevel)) {
            $query['ExperienceLevel'] = $request->experienceLevel;
        }
        if (!Utils::isUnset($request->itemConfigs)) {
            $query['ItemConfigs'] = $request->itemConfigs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->subProtocol)) {
            $query['SubProtocol'] = $request->subProtocol;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveSubList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveSubListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveSubListRequest $request
     *
     * @return DescribeLiveSubListResponse
     */
    public function describeLiveSubList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveSubListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLiveSubMetricDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeLiveSubMetricDataResponse
     */
    public function describeLiveSubMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->experienceLevel)) {
            $query['ExperienceLevel'] = $request->experienceLevel;
        }
        if (!Utils::isUnset($request->itemConfigs)) {
            $query['ItemConfigs'] = $request->itemConfigs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->sdkVersion)) {
            $query['SdkVersion'] = $request->sdkVersion;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->subProtocol)) {
            $query['SubProtocol'] = $request->subProtocol;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLiveSubMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLiveSubMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLiveSubMetricDataRequest $request
     *
     * @return DescribeLiveSubMetricDataResponse
     */
    public function describeLiveSubMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLiveSubMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterIceEditUsageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMeterIceEditUsageResponse
     */
    public function describeMeterIceEditUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterIceEditUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterIceEditUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterIceEditUsageRequest $request
     *
     * @return DescribeMeterIceEditUsageResponse
     */
    public function describeMeterIceEditUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterIceEditUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterIceLiveMediaConvertUsageRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeMeterIceLiveMediaConvertUsageResponse
     */
    public function describeMeterIceLiveMediaConvertUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterIceLiveMediaConvertUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterIceLiveMediaConvertUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterIceLiveMediaConvertUsageRequest $request
     *
     * @return DescribeMeterIceLiveMediaConvertUsageResponse
     */
    public function describeMeterIceLiveMediaConvertUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterIceLiveMediaConvertUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterIceMediaConvertUHDUsageRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeMeterIceMediaConvertUHDUsageResponse
     */
    public function describeMeterIceMediaConvertUHDUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterIceMediaConvertUHDUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterIceMediaConvertUHDUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterIceMediaConvertUHDUsageRequest $request
     *
     * @return DescribeMeterIceMediaConvertUHDUsageResponse
     */
    public function describeMeterIceMediaConvertUHDUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterIceMediaConvertUHDUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterIceMediaConvertUsageRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMeterIceMediaConvertUsageResponse
     */
    public function describeMeterIceMediaConvertUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterIceMediaConvertUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterIceMediaConvertUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterIceMediaConvertUsageRequest $request
     *
     * @return DescribeMeterIceMediaConvertUsageResponse
     */
    public function describeMeterIceMediaConvertUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterIceMediaConvertUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterIceMpsAiUsageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMeterIceMpsAiUsageResponse
     */
    public function describeMeterIceMpsAiUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterIceMpsAiUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterIceMpsAiUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterIceMpsAiUsageRequest $request
     *
     * @return DescribeMeterIceMpsAiUsageResponse
     */
    public function describeMeterIceMpsAiUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterIceMpsAiUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeterIceSummaryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeterIceSummaryResponse
     */
    public function describeMeterIceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTs)) {
            $query['StartTs'] = $request->startTs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterIceSummary',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeterIceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeterIceSummaryRequest $request
     *
     * @return DescribeMeterIceSummaryResponse
     */
    public function describeMeterIceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterIceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribePalyDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePalyDetailResponse
     */
    public function describePalyDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePalyDetail',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePalyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePalyDetailRequest $request
     *
     * @return DescribePalyDetailResponse
     */
    public function describePalyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePalyDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribePalyEventListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribePalyEventListResponse
     */
    public function describePalyEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePalyEventList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePalyEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePalyEventListRequest $request
     *
     * @return DescribePalyEventListResponse
     */
    public function describePalyEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePalyEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePalyListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePalyListResponse
     */
    public function describePalyListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->orderName)) {
            $query['OrderName'] = $request->orderName;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->playType)) {
            $query['PlayType'] = $request->playType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePalyList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePalyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePalyListRequest $request
     *
     * @return DescribePalyListResponse
     */
    public function describePalyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePalyListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayExperienceMetricDataRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribePlayExperienceMetricDataResponse
     */
    public function describePlayExperienceMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->experienceLevel)) {
            $query['ExperienceLevel'] = $request->experienceLevel;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayExperienceMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayExperienceMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlayExperienceMetricDataRequest $request
     *
     * @return DescribePlayExperienceMetricDataResponse
     */
    public function describePlayExperienceMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayExperienceMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayFirstFrameDurationMetricDataRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribePlayFirstFrameDurationMetricDataResponse
     */
    public function describePlayFirstFrameDurationMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->traceId)) {
            $query['TraceId'] = $request->traceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayFirstFrameDurationMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayFirstFrameDurationMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlayFirstFrameDurationMetricDataRequest $request
     *
     * @return DescribePlayFirstFrameDurationMetricDataResponse
     */
    public function describePlayFirstFrameDurationMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayFirstFrameDurationMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayMetricDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribePlayMetricDataResponse
     */
    public function describePlayMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->experienceLevel)) {
            $query['ExperienceLevel'] = $request->experienceLevel;
        }
        if (!Utils::isUnset($request->itemConfigs)) {
            $query['ItemConfigs'] = $request->itemConfigs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->sdkVersion)) {
            $query['SdkVersion'] = $request->sdkVersion;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayMetricData',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlayMetricDataRequest $request
     *
     * @return DescribePlayMetricDataResponse
     */
    public function describePlayMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayQoeListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePlayQoeListResponse
     */
    public function describePlayQoeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->itemConfigs)) {
            $query['ItemConfigs'] = $request->itemConfigs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayQoeList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayQoeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlayQoeListRequest $request
     *
     * @return DescribePlayQoeListResponse
     */
    public function describePlayQoeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayQoeListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayQosListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribePlayQosListResponse
     */
    public function describePlayQosListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->beginTs)) {
            $query['BeginTs'] = $request->beginTs;
        }
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->endTs)) {
            $query['EndTs'] = $request->endTs;
        }
        if (!Utils::isUnset($request->itemConfigs)) {
            $query['ItemConfigs'] = $request->itemConfigs;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->network)) {
            $query['Network'] = $request->network;
        }
        if (!Utils::isUnset($request->os)) {
            $query['Os'] = $request->os;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->terminalType)) {
            $query['TerminalType'] = $request->terminalType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayQosList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlayQosListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlayQosListRequest $request
     *
     * @return DescribePlayQosListResponse
     */
    public function describePlayQosList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayQosListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeQueryConfigsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeQueryConfigsResponse
     */
    public function describeQueryConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeQueryConfigs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeQueryConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeQueryConfigsRequest $request
     *
     * @return DescribeQueryConfigsResponse
     */
    public function describeQueryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeQueryConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DownloadResourceByResourceIdsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DownloadResourceByResourceIdsResponse
     */
    public function downloadResourceByResourceIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DownloadResourceByResourceIds',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DownloadResourceByResourceIdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DownloadResourceByResourceIdsRequest $request
     *
     * @return DownloadResourceByResourceIdsResponse
     */
    public function downloadResourceByResourceIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadResourceByResourceIdsWithOptions($request, $runtime);
    }

    /**
     * @param GetAuditConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAuditConfigResponse
     */
    public function getAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuditConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAuditConfigRequest $request
     *
     * @return GetAuditConfigResponse
     */
    public function getAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetCategoriesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCategoriesResponse
     */
    public function getCategoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCategories',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCategoriesRequest $request
     *
     * @return GetCategoriesResponse
     */
    public function getCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @param GetClientConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetClientConfigResponse
     */
    public function getClientConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->pkgName)) {
            $query['PkgName'] = $request->pkgName;
        }
        if (!Utils::isUnset($request->pkgSignature)) {
            $query['PkgSignature'] = $request->pkgSignature;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClientConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClientConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClientConfigRequest $request
     *
     * @return GetClientConfigResponse
     */
    public function getClientConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCustomTemplateResponse
     */
    public function getCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCustomTemplateRequest $request
     *
     * @return GetCustomTemplateResponse
     */
    public function getCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocationWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetDefaultStorageLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocation()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultStorageLocationWithOptions($runtime);
    }

    /**
     * @param GetDynamicImageJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDynamicImageJobResponse
     */
    public function getDynamicImageJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDynamicImageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDynamicImageJobRequest $request
     *
     * @return GetDynamicImageJobResponse
     */
    public function getDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProject',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEditingProjectRequest $request
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEditingProjectMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEditingProjectMaterialsRequest $request
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetEventCallbackResponse
     */
    public function getEventCallbackWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetEventCallback',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetEventCallbackResponse
     */
    public function getEventCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventCallbackWithOptions($runtime);
    }

    /**
     * @param GetLiveEditingIndexFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveEditingIndexFile',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveEditingIndexFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLiveEditingIndexFileRequest $request
     *
     * @return GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingIndexFileWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveEditingJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetLiveEditingJobResponse
     */
    public function getLiveEditingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveEditingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLiveEditingJobRequest $request
     *
     * @return GetLiveEditingJobResponse
     */
    public function getLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveTranscodeJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLiveTranscodeJobRequest $request
     *
     * @return GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param GetLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLiveTranscodeTemplateRequest $request
     *
     * @return GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResult',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaAuditResultRequest $request
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaAuditResultDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaAuditResultDetail',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaAuditResultDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaAuditResultDetailRequest $request
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMediaInfoResponse
     */
    public function getMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->outputType)) {
            $query['OutputType'] = $request->outputType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaInfoRequest $request
     *
     * @return GetMediaInfoResponse
     */
    public function getMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaInfoJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMediaInfoJobResponse
     */
    public function getMediaInfoJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaInfoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaInfoJobRequest $request
     *
     * @return GetMediaInfoJobResponse
     */
    public function getMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaProducingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMediaProducingJobResponse
     */
    public function getMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaProducingJobRequest $request
     *
     * @return GetMediaProducingJobResponse
     */
    public function getMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param GetPipelineRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPipelineRequest $request
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPlayInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPlayInfoRequest $request
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetPublicMediaInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPublicMediaInfoRequest $request
     *
     * @return GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetSmartHandleJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSmartHandleJobResponse
     */
    public function getSmartHandleJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSmartHandleJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSmartHandleJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSmartHandleJobRequest $request
     *
     * @return GetSmartHandleJobResponse
     */
    public function getSmartHandleJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartHandleJobWithOptions($request, $runtime);
    }

    /**
     * @param GetSnapshotJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSnapshotJobResponse
     */
    public function getSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSnapshotJobRequest $request
     *
     * @return GetSnapshotJobResponse
     */
    public function getSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param GetSnapshotUrlsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSnapshotUrlsResponse
     */
    public function getSnapshotUrlsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSnapshotUrls',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSnapshotUrlsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSnapshotUrlsRequest $request
     *
     * @return GetSnapshotUrlsResponse
     */
    public function getSnapshotUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotUrlsWithOptions($request, $runtime);
    }

    /**
     * @param GetSystemTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSystemTemplateResponse
     */
    public function getSystemTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSystemTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSystemTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSystemTemplateRequest $request
     *
     * @return GetSystemTemplateResponse
     */
    public function getSystemTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSystemTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateMaterialsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTemplateMaterialsResponse
     */
    public function getTemplateMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateMaterialsRequest $request
     *
     * @return GetTemplateMaterialsResponse
     */
    public function getTemplateMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateMaterialsWithOptions($request, $runtime);
    }

    /**
     * @param GetTranscodeJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTranscodeJobResponse
     */
    public function getTranscodeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTranscodeJobRequest $request
     *
     * @return GetTranscodeJobResponse
     */
    public function getTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param GetUrlUploadInfosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->uploadURLs)) {
            $query['UploadURLs'] = $request->uploadURLs;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUrlUploadInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUrlUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUrlUploadInfosRequest $request
     *
     * @return GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUrlUploadInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListAllPublicMediaTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllPublicMediaTags',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllPublicMediaTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAllPublicMediaTagsRequest $request
     *
     * @return ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPublicMediaTagsWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCustomTemplatesResponse
     */
    public function listCustomTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomTemplatesRequest $request
     *
     * @return ListCustomTemplatesResponse
     */
    public function listCustomTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListDynamicImageJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDynamicImageJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDynamicImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDynamicImageJobsRequest $request
     *
     * @return ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicImageJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveRecordTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveRecordTemplatesRequest $request
     *
     * @return ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveTranscodeJobsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startMode)) {
            $query['StartMode'] = $request->startMode;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveTranscodeJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveTranscodeJobsRequest $request
     *
     * @return ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListLiveTranscodeTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->keyWord)) {
            $query['KeyWord'] = $request->keyWord;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->videoCodec)) {
            $query['VideoCodec'] = $request->videoCodec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveTranscodeTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLiveTranscodeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLiveTranscodeTemplatesRequest $request
     *
     * @return ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaBasicInfosRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->includeFileBasicInfo)) {
            $query['IncludeFileBasicInfo'] = $request->includeFileBasicInfo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaBasicInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMediaBasicInfosRequest $request
     *
     * @return ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaInfoJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaInfoJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMediaInfoJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMediaInfoJobsRequest $request
     *
     * @return ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaInfoJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListPipelinesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPipelinesWithOptions($request, $runtime);
    }

    /**
     * @param ListPublicMediaBasicInfosRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->includeFileBasicInfo)) {
            $query['IncludeFileBasicInfo'] = $request->includeFileBasicInfo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->mediaTagId)) {
            $query['MediaTagId'] = $request->mediaTagId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicMediaBasicInfos',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPublicMediaBasicInfosRequest $request
     *
     * @return ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @param ListSmartJobsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSmartJobsResponse
     */
    public function listSmartJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSmartJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSmartJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSmartJobsRequest $request
     *
     * @return ListSmartJobsResponse
     */
    public function listSmartJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListSnapshotJobsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSnapshotJobsResponse
     */
    public function listSnapshotJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshotJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSnapshotJobsRequest $request
     *
     * @return ListSnapshotJobsResponse
     */
    public function listSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @param ListSystemTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSystemTemplatesResponse
     */
    public function listSystemTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subtype)) {
            $query['Subtype'] = $request->subtype;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSystemTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSystemTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSystemTemplatesRequest $request
     *
     * @return ListSystemTemplatesResponse
     */
    public function listSystemTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSource)) {
            $query['CreateSource'] = $request->createSource;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListTranscodeJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListTranscodeJobsResponse
     */
    public function listTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startOfCreateTime)) {
            $query['StartOfCreateTime'] = $request->startOfCreateTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTranscodeJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTranscodeJobsRequest $request
     *
     * @return ListTranscodeJobsResponse
     */
    public function listTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @param NotifyPreOssUploadCompleteRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return NotifyPreOssUploadCompleteResponse
     */
    public function notifyPreOssUploadCompleteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NotifyPreOssUploadComplete',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return NotifyPreOssUploadCompleteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param NotifyPreOssUploadCompleteRequest $request
     *
     * @return NotifyPreOssUploadCompleteResponse
     */
    public function notifyPreOssUploadComplete($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->notifyPreOssUploadCompleteWithOptions($request, $runtime);
    }

    /**
     * @param QueryCensorJobListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryCensorJobListResponse
     */
    public function queryCensorJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCensorJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCensorJobListRequest $request
     *
     * @return QueryCensorJobListResponse
     */
    public function queryCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCensorJobListWithOptions($request, $runtime);
    }

    /**
     * @param QueryIProductionJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryIProductionJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryIProductionJobRequest $request
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maximumPageSize)) {
            $query['MaximumPageSize'] = $request->maximumPageSize;
        }
        if (!Utils::isUnset($request->nextPageToken)) {
            $query['NextPageToken'] = $request->nextPageToken;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaCensorJobDetail',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMediaCensorJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMediaCensorJobDetailRequest $request
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param RefreshUploadMediaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshUploadMediaResponse
     */
    public function refreshUploadMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshUploadMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshUploadMediaRequest $request
     *
     * @return RefreshUploadMediaResponse
     */
    public function refreshUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RegisterMediaInfoResponse
     */
    public function registerMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaTags)) {
            $query['MediaTags'] = $request->mediaTags;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->registerConfig)) {
            $query['RegisterConfig'] = $request->registerConfig;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterMediaInfoRequest $request
     *
     * @return RegisterMediaInfoResponse
     */
    public function registerMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param RegisterMediaStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterMediaStreamResponse
     */
    public function registerMediaStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterMediaStream',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterMediaStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterMediaStreamRequest $request
     *
     * @return RegisterMediaStreamResponse
     */
    public function registerMediaStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaStreamWithOptions($request, $runtime);
    }

    /**
     * @param SearchEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSource)) {
            $query['CreateSource'] = $request->createSource;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectType)) {
            $query['ProjectType'] = $request->projectType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchEditingProject',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchEditingProjectRequest $request
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param SearchMediaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchMediaResponse
     */
    public function searchMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->match)) {
            $query['Match'] = $request->match;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMedia',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SearchPublicMediaInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorized)) {
            $query['Authorized'] = $request->authorized;
        }
        if (!Utils::isUnset($request->dynamicMetaDataMatchFields)) {
            $query['DynamicMetaDataMatchFields'] = $request->dynamicMetaDataMatchFields;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->favorite)) {
            $query['Favorite'] = $request->favorite;
        }
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPublicMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchPublicMediaInfoRequest $request
     *
     * @return SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param SendLiveTranscodeJobCommandRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendLiveTranscodeJobCommand',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendLiveTranscodeJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendLiveTranscodeJobCommandRequest $request
     *
     * @return SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveTranscodeJobCommandWithOptions($request, $runtime);
    }

    /**
     * @param SetAuditConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetAuditConfigResponse
     */
    public function setAuditConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->legalSwitch)) {
            $query['LegalSwitch'] = $request->legalSwitch;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAuditConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAuditConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetAuditConfigRequest $request
     *
     * @return SetAuditConfigResponse
     */
    public function setAuditConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAuditConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetClientConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetClientConfigResponse
     */
    public function setClientConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->clientUploadBucket)) {
            $query['ClientUploadBucket'] = $request->clientUploadBucket;
        }
        if (!Utils::isUnset($request->clientUploadPath)) {
            $query['ClientUploadPath'] = $request->clientUploadPath;
        }
        if (!Utils::isUnset($request->clientUploadStorageType)) {
            $query['ClientUploadStorageType'] = $request->clientUploadStorageType;
        }
        if (!Utils::isUnset($request->pkgName)) {
            $query['PkgName'] = $request->pkgName;
        }
        if (!Utils::isUnset($request->pkgSignature)) {
            $query['PkgSignature'] = $request->pkgSignature;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetClientConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetClientConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetClientConfigRequest $request
     *
     * @return SetClientConfigResponse
     */
    public function setClientConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClientConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultCustomTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDefaultCustomTemplateRequest $request
     *
     * @return SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SetDefaultStorageLocationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDefaultStorageLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDefaultStorageLocationRequest $request
     *
     * @return SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultStorageLocationWithOptions($request, $runtime);
    }

    /**
     * @param SetEventCallbackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetEventCallbackResponse
     */
    public function setEventCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->authSwitch)) {
            $query['AuthSwitch'] = $request->authSwitch;
        }
        if (!Utils::isUnset($request->callbackQueueName)) {
            $query['CallbackQueueName'] = $request->callbackQueueName;
        }
        if (!Utils::isUnset($request->callbackType)) {
            $query['CallbackType'] = $request->callbackType;
        }
        if (!Utils::isUnset($request->callbackURL)) {
            $query['CallbackURL'] = $request->callbackURL;
        }
        if (!Utils::isUnset($request->eventTypeList)) {
            $query['EventTypeList'] = $request->eventTypeList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetEventCallback',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetEventCallbackRequest $request
     *
     * @return SetEventCallbackResponse
     */
    public function setEventCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEventCallbackWithOptions($request, $runtime);
    }

    /**
     * @param SubmitASRJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitASRJobResponse
     */
    public function submitASRJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->inputFile)) {
            $query['InputFile'] = $request->inputFile;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitASRJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitASRJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitASRJobRequest $request
     *
     * @return SubmitASRJobResponse
     */
    public function submitASRJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitASRJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitAudioProduceJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->editingConfig)) {
            $query['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $query['InputConfig'] = $request->inputConfig;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $query['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAudioProduceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAudioProduceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitAudioProduceJobRequest $request
     *
     * @return SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioProduceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitBatchMediaProducingJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->editingProduceConfig)) {
            $query['EditingProduceConfig'] = $request->editingProduceConfig;
        }
        if (!Utils::isUnset($request->jobTitle)) {
            $query['JobTitle'] = $request->jobTitle;
        }
        if (!Utils::isUnset($request->outputMediaConfig)) {
            $query['OutputMediaConfig'] = $request->outputMediaConfig;
        }
        if (!Utils::isUnset($request->outputMediaTarget)) {
            $query['OutputMediaTarget'] = $request->outputMediaTarget;
        }
        if (!Utils::isUnset($request->outputNum)) {
            $query['OutputNum'] = $request->outputNum;
        }
        if (!Utils::isUnset($request->projectMetadata)) {
            $query['ProjectMetadata'] = $request->projectMetadata;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->submitBy)) {
            $query['SubmitBy'] = $request->submitBy;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitBatchMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitBatchMediaProducingJobRequest $request
     *
     * @return SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDynamicChartJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->axisParams)) {
            $query['AxisParams'] = $request->axisParams;
        }
        if (!Utils::isUnset($request->background)) {
            $query['Background'] = $request->background;
        }
        if (!Utils::isUnset($request->chartConfig)) {
            $query['ChartConfig'] = $request->chartConfig;
        }
        if (!Utils::isUnset($request->chartTitle)) {
            $query['ChartTitle'] = $request->chartTitle;
        }
        if (!Utils::isUnset($request->chartType)) {
            $query['ChartType'] = $request->chartType;
        }
        if (!Utils::isUnset($request->dataSource)) {
            $query['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->subtitle)) {
            $query['Subtitle'] = $request->subtitle;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->unit)) {
            $query['Unit'] = $request->unit;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDynamicChartJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDynamicChartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitDynamicChartJobRequest $request
     *
     * @return SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicChartJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitDynamicImageJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitDynamicImageJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->input), 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->output), 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->templateConfig), 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDynamicImageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitDynamicImageJobRequest $request
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitIProductionJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitIProductionJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->input), 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->output), 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->functionName)) {
            $query['FunctionName'] = $request->functionName;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->jobParams)) {
            $query['JobParams'] = $request->jobParams;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIProductionJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitIProductionJobRequest $request
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitLiveEditingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clips)) {
            $query['Clips'] = $request->clips;
        }
        if (!Utils::isUnset($request->liveStreamConfig)) {
            $query['LiveStreamConfig'] = $request->liveStreamConfig;
        }
        if (!Utils::isUnset($request->mediaProduceConfig)) {
            $query['MediaProduceConfig'] = $request->mediaProduceConfig;
        }
        if (!Utils::isUnset($request->outputMediaConfig)) {
            $query['OutputMediaConfig'] = $request->outputMediaConfig;
        }
        if (!Utils::isUnset($request->outputMediaTarget)) {
            $query['OutputMediaTarget'] = $request->outputMediaTarget;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveEditingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitLiveEditingJobRequest $request
     *
     * @return SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaCensorJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitMediaCensorJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->input), 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->barrages)) {
            $query['Barrages'] = $request->barrages;
        }
        if (!Utils::isUnset($request->coverImages)) {
            $query['CoverImages'] = $request->coverImages;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->output)) {
            $query['Output'] = $request->output;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaCensorJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaCensorJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaCensorJobRequest $request
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaCensorJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaInfoJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitMediaInfoJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->input), 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaInfoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaInfoJobRequest $request
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitMediaProducingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->editingProduceConfig)) {
            $query['EditingProduceConfig'] = $request->editingProduceConfig;
        }
        if (!Utils::isUnset($request->outputMediaConfig)) {
            $query['OutputMediaConfig'] = $request->outputMediaConfig;
        }
        if (!Utils::isUnset($request->outputMediaTarget)) {
            $query['OutputMediaTarget'] = $request->outputMediaTarget;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectMetadata)) {
            $query['ProjectMetadata'] = $request->projectMetadata;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->timeline)) {
            $query['Timeline'] = $request->timeline;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitMediaProducingJobRequest $request
     *
     * @return SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSnapshotJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSnapshotJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->input), 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->output), 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->templateConfig), 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSnapshotJobRequest $request
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSubtitleProduceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitSubtitleProduceJobResponse
     */
    public function submitSubtitleProduceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->editingConfig)) {
            $query['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $query['InputConfig'] = $request->inputConfig;
        }
        if (!Utils::isUnset($request->isAsync)) {
            $query['IsAsync'] = $request->isAsync;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSubtitleProduceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSubtitleProduceJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSubtitleProduceJobRequest $request
     *
     * @return SubmitSubtitleProduceJobResponse
     */
    public function submitSubtitleProduceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSubtitleProduceJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSyncMediaInfoJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSyncMediaInfoJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->input), 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitSyncMediaInfoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitSyncMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitSyncMediaInfoJobRequest $request
     *
     * @return SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSyncMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitTranscodeJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTranscodeJobResponse
     */
    public function submitTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputGroup)) {
            $request->inputGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputGroup, 'InputGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputGroup)) {
            $request->outputGroupShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputGroup, 'OutputGroup', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->scheduleConfig), 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputGroupShrink)) {
            $query['InputGroup'] = $request->inputGroupShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputGroupShrink)) {
            $query['OutputGroup'] = $request->outputGroupShrink;
        }
        if (!Utils::isUnset($request->scheduleConfigShrink)) {
            $query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitTranscodeJobRequest $request
     *
     * @return SubmitTranscodeJobResponse
     */
    public function submitTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->cateName)) {
            $query['CateName'] = $request->cateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCategory',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCategoryRequest $request
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCustomTemplateResponse
     */
    public function updateCustomTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfig)) {
            $query['TemplateConfig'] = $request->templateConfig;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCustomTemplateRequest $request
     *
     * @return UpdateCustomTemplateResponse
     */
    public function updateCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessStatus)) {
            $query['BusinessStatus'] = $request->businessStatus;
        }
        if (!Utils::isUnset($request->clipsParam)) {
            $query['ClipsParam'] = $request->clipsParam;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->timeline)) {
            $query['Timeline'] = $request->timeline;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEditingProject',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEditingProjectRequest $request
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveTranscodeJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->streamInput), 'StreamInput', 'json');
        }
        if (!Utils::isUnset($tmpReq->timedConfig)) {
            $request->timedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->timedConfig), 'TimedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transcodeOutput)) {
            $request->transcodeOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->transcodeOutput), 'TranscodeOutput', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $query['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->timedConfigShrink)) {
            $query['TimedConfig'] = $request->timedConfigShrink;
        }
        if (!Utils::isUnset($request->transcodeOutputShrink)) {
            $query['TranscodeOutput'] = $request->transcodeOutputShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveTranscodeJobRequest $request
     *
     * @return UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLiveTranscodeTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveTranscodeTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->templateConfig), 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveTranscodeTemplateRequest $request
     *
     * @return UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMediaInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMediaInfoResponse
     */
    public function updateMediaInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appendTags)) {
            $query['AppendTags'] = $request->appendTags;
        }
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->coverURL)) {
            $query['CoverURL'] = $request->coverURL;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaTags)) {
            $query['MediaTags'] = $request->mediaTags;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMediaInfoRequest $request
     *
     * @return UpdateMediaInfoResponse
     */
    public function updateMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipeline',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSmartJobResponse
     */
    public function updateSmartJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->FEExtend)) {
            $query['FEExtend'] = $request->FEExtend;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSmartJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSmartJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSmartJobRequest $request
     *
     * @return UpdateSmartJobResponse
     */
    public function updateSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSmartJobWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->coverUrl)) {
            $query['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->previewMedia)) {
            $query['PreviewMedia'] = $request->previewMedia;
        }
        if (!Utils::isUnset($request->relatedMediaids)) {
            $query['RelatedMediaids'] = $request->relatedMediaids;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTemplateRequest $request
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UploadMediaByURLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->mediaMetaData)) {
            $query['MediaMetaData'] = $request->mediaMetaData;
        }
        if (!Utils::isUnset($request->postProcessConfig)) {
            $query['PostProcessConfig'] = $request->postProcessConfig;
        }
        if (!Utils::isUnset($request->uploadTargetConfig)) {
            $query['UploadTargetConfig'] = $request->uploadTargetConfig;
        }
        if (!Utils::isUnset($request->uploadURLs)) {
            $query['UploadURLs'] = $request->uploadURLs;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMediaByURL',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMediaByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadMediaByURLRequest $request
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMediaByURLWithOptions($request, $runtime);
    }

    /**
     * @param UploadStreamByURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->definition)) {
            $query['Definition'] = $request->definition;
        }
        if (!Utils::isUnset($request->fileExtension)) {
            $query['FileExtension'] = $request->fileExtension;
        }
        if (!Utils::isUnset($request->HDRType)) {
            $query['HDRType'] = $request->HDRType;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->streamURL)) {
            $query['StreamURL'] = $request->streamURL;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadStreamByURL',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadStreamByURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadStreamByURLRequest $request
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStreamByURLWithOptions($request, $runtime);
    }
}
